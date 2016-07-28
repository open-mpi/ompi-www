#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <mpi.h>

#define MAX_LEN_SIZE 255

int main(int argc, char *argv[]){

        MPI_Init(&argc,&argv);
        char* local_hostname;
        char* hostname_recv_buf;
        int i, num_procs, rank;
        MPI_Comm_size(MPI_COMM_WORLD, &num_procs);
        MPI_Comm_rank(MPI_COMM_WORLD, &rank);


        local_hostname = (char*) malloc(MAX_LEN_SIZE*sizeof(char));
        hostname_recv_buf=(char*)malloc(MAX_LEN_SIZE*num_procs*(sizeof(char)));

        gethostname(local_hostname, MAX_LEN_SIZE );

        MPI_Allgather(local_hostname, MAX_LEN_SIZE, MPI_CHAR, hostname_recv_buf, MAX_LEN_SIZE, MPI_CHAR, MPI_COMM_WORLD);

        if( rank==0){
               for( i= 0; i< num_procs; i++){
                 if( strcmp(local_hostname, &hostname_recv_buf[i*MAX_LEN_SIZE])==0){
                        printf( "SAME NODE \n");
                }
        }


        }

        free(local_hostname);
        free(hostname_recv_buf);

        MPI_Finalize();

        return 0;
}
