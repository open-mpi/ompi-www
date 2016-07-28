
/* Include standard headers. */
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <pthread.h>
#include <mpi.h>


/* Global variables. */
#define N 1000
int myrank, nr_nodes;
double *buff;


/* This function sends data to other nodes with isend/irecv. */
void *exchange ( void *dummy ) {

    int res, ind, k;
    MPI_Request reqs_send[ nr_nodes ], reqs_recv[ nr_nodes ];
    double sum = 0.0, *buff_recv[ nr_nodes ];
    
    /* Set dummy requests for myself. */
    reqs_send[myrank] = MPI_REQUEST_NULL;
    reqs_recv[myrank] = MPI_REQUEST_NULL;
    buff_recv[myrank] = NULL;
    
    /* Loop over the other processors and submit the sends and recvs. */
    for ( k = 0 ; k < nr_nodes ; k++ ) {
    
        /* Skip myself. */
        if ( k == myrank )
            continue;
            
        /* Ship my data to the kth node. */
        if ( ( res = MPI_Isend( buff , N , MPI_DOUBLE_PRECISION , k , myrank , MPI_COMM_WORLD , &reqs_send[k] ) ) != MPI_SUCCESS ) {
            printf( "exchange[%02i]: MPI_Isend to node %i failed with error %i.\n" , myrank , k , res );
            abort();
            }
        // printf( "exchange[%02i]: sent data to node %i...\n" , myrank , k ); fflush(stdout);
            
        /* Allocate the recv buffer. */
        if ( ( buff_recv[k] = malloc( sizeof(double) * N ) ) == NULL ) {
            printf( "exchange[%02i]: call to malloc failed.\n" , myrank );
            abort();
            }
            
        /* Register the recv from node k. */
        if ( ( res = MPI_Irecv( buff_recv[k] , N , MPI_DOUBLE_PRECISION , k , k , MPI_COMM_WORLD , &reqs_recv[k] ) ) != MPI_SUCCESS ) {
            printf( "exchange[%02i]: MPI_Irecv to from %i failed with error %i.\n" , myrank , k , res );
            abort();
            }
        // printf( "exchange[%02i]: registered recv from node %i...\n" , myrank , k ); fflush(stdout);
    
        }
        
    /* Collect the sum of our own values. */
    for ( k = 0 ; k < N ; k++ )
        sum += buff[k];
        
    /* Now wait for the recvs to come in. */
    while ( 1 ) {
    
        /* Wait for any request to come in. */
        if ( ( res = MPI_Waitany( nr_nodes , reqs_recv , &ind , MPI_STATUS_IGNORE ) ) != MPI_SUCCESS ) {
            printf( "exchange[%02i]: MPI_Waitany failed with error %i.\n" , myrank , res );
            abort();
            }
        
        /* Are we done? */
        if ( ind == MPI_UNDEFINED )
            break;
            
        /* Acknowledge receiving the data. */
        printf( "exchange[%02i]: recvd data from node %i.\n" , myrank , ind );
        fflush(stdout);
            
        /* Collect these values in the sum. */
        for ( k = 0 ; k < N ; k++ )
            sum += buff_recv[ind][k];
            
        }
        
    /* Wait for all the sends to come in. */
    if ( ( res = MPI_Waitall( nr_nodes , reqs_send , MPI_STATUSES_IGNORE ) ) != MPI_SUCCESS ) {
        printf( "exchange[%02i]: MPI_Waitall failed with error %i.\n" , myrank , res );
        abort();
        }
        
    /* De-allocate the recv buffers. */
    for ( k = 0 ; k < nr_nodes ; k++ )
        if ( buff_recv[k] != NULL )
            free( buff_recv[k] );
        
    /* We're all done here! */
    printf( "exchange[%02i]: sum=%e, done!\n" , myrank , sum );
    fflush(stdout);
    
    /* Give nothing back. */
    return NULL;
    
    }
    

/* The main routine. */
    
int main ( int argc , char *argv[] ) {

    int res, k;
    double sum = 0.0, buff_in;
    pthread_t thread;

    /* Start by initializing MPI. */
    if ( ( res = MPI_Init( &argc , &argv ) ) != MPI_SUCCESS ) {
        printf( "main: call to MPI_Init failed with error %i.\n" , res );
        abort();
        }
    if ( ( res = MPI_Comm_rank( MPI_COMM_WORLD , &myrank ) ) != MPI_SUCCESS ) {
        printf( "main: call to MPI_Comm_rank failed with error %i.\n" , res );
        abort();
        }
    if ( ( res = MPI_Comm_size( MPI_COMM_WORLD , &nr_nodes ) != MPI_SUCCESS ) ) {
        printf("main[%02i]: MPI_Comm_size failed with error %i.\n",myrank,res);
        abort();
        }
    if ( myrank == 0 ) {
        printf( "main[%02i]: MPI is up and running...\n" , myrank );
        fflush(stdout);
        }
        
    /* Allocate and fill the buffer. */
    if ( ( buff = malloc( sizeof(double) * N ) ) == NULL ) {
        printf( "main[%02i]: call to malloc failed.\n" , myrank );
        abort();
        }
    for ( k = 0 ; k < N ; k++ )
        buff[k] = ( 2.0*rand() ) / RAND_MAX - 1.0;
        
    /* Start a new thread for the nonblocking exchange. */
    if ( ( res = pthread_create( &thread , NULL , &exchange , NULL ) ) != 0 ) {
        printf( "main[%02i]: call to pthread_create failed with err=%i.\n" , myrank , res );
        abort();
        }
        
    /* Take a little nap. */
    usleep( 10000 );
        
    /* Compute the local sum of the buff. */
    srand( rand() + myrank );
    for ( k = 0 ; k < N ; k++ )
        sum += buff[k];
        
    /* Do an MPI_Allreduce to get the sum over all nodes. */
    if ( ( res = MPI_Allreduce( &sum , &buff_in , 1 , MPI_DOUBLE_PRECISION , MPI_SUM , MPI_COMM_WORLD ) ) != MPI_SUCCESS ) {
        printf( "main[%02i]: call to MPI_Allreduce failed with err=%i.\n" , myrank , res );
        abort();
        }
    sum = buff_in;
        
    /* We're all done here! */
    printf( "main[%02i]: sum=%e, done!\n" , myrank , sum );
    fflush(stdout);
    
    /* Wait for the thread to terminate. */
    if ( ( res = pthread_join( thread , NULL ) ) != 0 ) {
        printf( "main[%02i]: call to pthread_join failed with err=%i.\n" , myrank , res );
        abort();
        }
    
    /* Tell MPI we're done. */
    if ( ( res = MPI_Finalize() ) != MPI_SUCCESS ) {
        printf( "main[%i]: call to MPI_Finalize failed with error %i.\n" , myrank , res );
        abort();
        }
        
    /* Leave quietly. */
    return 0;
    
    }

    
    

