#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <mpi.h>

int main(int argc, char *argv[]){

        MPI_Init(&argc,&argv);
        const int max_name_len = 255;
        char* local_hostname;
        char* hostname_recv_buf;
        char** hostname_list_final;
        int i, num_procs, rank;
        MPI_Comm_size(MPI_COMM_WORLD, &num_procs);
        MPI_Comm_rank(MPI_COMM_WORLD, &rank);


        local_hostname = (char*) malloc(max_name_len*sizeof(char));
        hostname_recv_buf=(char*)malloc(num_procs*(max_name_len+1)*(sizeof(char)));

        hostname_list_final=(char**)malloc(num_procs*(sizeof(char*)));

        for (i=0; i< num_procs; i++)
                hostname_list_final[i] = (char*)malloc((max_name_len+1)*sizeof(char));

        gethostname(local_hostname, sizeof(local_hostname) );


//	MPI_Alltoall(hostname_send_buf, max_name_len, MPI_CHAR, hostname_recv_buf, max_name_len, MPI_CHAR, MPI_COMM_WORLD);


        MPI_Allgather(local_hostname, 255, MPI_CHAR, hostname_recv_buf, 255, MPI_CHAR, MPI_COMM_WORLD);

        for (i=0; i< num_procs; i++){
                strcpy (hostname_list_final[i], &hostname_recv_buf[max_name_len*i],1);
          //      hostname_list_final[i][255] = '\0';

                }

        if( rank==0){
                for (i=0; i< num_procs; i++)
                printf( "i--: %d hostname_list[i]: %s \n", i, hostname_list_final[i]);

        }

//      return hostname_list_final;

        free(local_hostname);
        free(hostname_recv_buf);

        MPI_Finalize();

return 0;
}
