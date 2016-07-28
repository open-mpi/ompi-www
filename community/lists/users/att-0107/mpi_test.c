#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>

int  main(int argc,char* argv[])
{
    int my_rank, n_global = 10, n_procs,
        d = 3, n_local, i, k, j, root = 0;
    double *A_global, *A_local;
    MPI_Datatype temp, scatter;

    MPI_Init( &argc, &argv );

    MPI_Comm_rank( MPI_COMM_WORLD, &my_rank );
    MPI_Comm_size( MPI_COMM_WORLD, &n_procs );

    n_local = n_global/n_procs;

    MPI_Type_vector( n_local, 1, d, MPI_DOUBLE, &temp );
    /* By default the extent of the datatype will stop after the last element
     * on the datatype. However, it is not exactly what you expect here as
     * you want to ignore the rest of the line. Thus, the extent of the
     * datatype should be increased in order to include the whole last line.
     */
    MPI_Type_create_resized( temp, 0, n_local * d * sizeof(double), &scatter );
    MPI_Type_commit( &scatter );
    MPI_Type_free( &temp );

    A_global = (double*)malloc( sizeof(double) * n_global * d );
    A_local = (double*)malloc( sizeof(double) * n_local * d );

    /* The root will initialize the data */
    if( my_rank == root ) {
        for( i = 0; i < n_global; i++ )
            for( k = 0; k < d; k++ )
                A_global[i * d + k] = i * d + k;
        /* The root print the initial matrix */
        printf( "------------------------------------------------\n" );
        for( i = 0; i < n_global; i++ ) {
            printf( "root\t" );
            for( k = 0; k < d; k++ )
                printf( "%f\t", A_global[i * d + k] );
            printf( "\n" );
        }
        printf( "------------------------------------------------\n" );
    }

    /* Everybody set their local matrices to ZERO */
    for( i = 0; i < n_local; i++ )
        for( k = 0; k < d; k++ )
            A_local[i * d + k] = 0;

    for( k = 0; k < d; k++ ) {
        MPI_Scatter( &(A_global[k]), 1, scatter,
                     &(A_local[k]), 1, scatter,
                     root, MPI_COMM_WORLD );
#ifdef MORE_OUTPUT
        printf( "rank %d step %d/%d\n", my_rank, k, d );
        for( i = 0; i < n_local; i++ ) {
            printf( "%d:\t", my_rank );
            for( j = 0; j < d; j++ )
                printf( "%f\t", A_local[i * d + j] );
            printf( "\n" );
        }
#endif  /* MORE_OUTPUT */
    }

    /* And everybody else will print it out */
    printf( "------------------------------------------------\n" );
    for( i = 0; i < n_local; i++ ) {
        printf( "%d:\t", my_rank );
        for( k = 0; k < d; k++ )
            printf( "%f\t", A_local[i * d + k] );
        printf( "\n" );
    }
    printf( "------------------------------------------------\n" );

    MPI_Finalize();
    return 0;
}

