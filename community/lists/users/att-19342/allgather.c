#include <mpi.h>
#include <stdlib.h>
#include <stdio.h>

int main(int argc, char* argv[])
{
  int thlevel;
  void *sbuf = NULL;
  int scount = 0;
  MPI_Datatype stype = MPI_BYTE;
  void *rbuf = NULL;
  int *rcounts = NULL, sumrcounts;
  int *rdispls = NULL;
  MPI_Datatype rtype = MPI_BYTE;
  MPI_Comm comm;
  int worldrank,worldsize;
  int rank,size;
  int loop,i;
  
  //MPI_Init_thread(0,0,MPI_THREAD_MULTIPLE,&thlevel);
  MPI_Init(0,0);
  
  MPI_Comm_size(MPI_COMM_WORLD, &worldsize);
  MPI_Comm_rank(MPI_COMM_WORLD, &worldrank);
  {
    MPI_Comm intracomm;
    int color,local_leader,remote_leader; 
    if (worldsize < 2) goto end;
    if (worldrank < worldsize/2) {
      color = 0;
      local_leader = 0;
      remote_leader = worldsize/2;
    } else {
      color = 1;
      local_leader = 0;
      remote_leader = 0;
    }
    MPI_Comm_split(MPI_COMM_WORLD,color,0,&intracomm);
    MPI_Intercomm_create(intracomm, local_leader,
                         MPI_COMM_WORLD, remote_leader,
                         0, &comm); 
    MPI_Comm_free(&intracomm);
  }

  MPI_Comm_rank(comm, &rank);
  MPI_Comm_remote_size(comm, &size);

  for (loop=0; loop<1; loop++) {

    scount = 1;
    sbuf = malloc(scount*sizeof(char));
    ((char*)sbuf)[0] = 'a'+rank;

    rcounts = malloc(size*sizeof(int));
    MPI_Allgather(&scount, 1, MPI_INT,
                  rcounts, 1, MPI_INT,
                  comm);
    
    rdispls = malloc(size*sizeof(int));
    sumrcounts = 0;
    for (i=0; i<size; i++) {
      rdispls[i] = sumrcounts;
      sumrcounts += rcounts[i];
    }
    rbuf = malloc(sumrcounts*sizeof(char));
    
    MPI_Allgatherv(sbuf, scount,           stype,
                   rbuf, rcounts, rdispls, rtype,
                   comm);


    MPI_Barrier(MPI_COMM_WORLD);
    printf("[%d] - [%d] ",worldrank,rank);
    for (i=0; i<sumrcounts; i++) {
      printf("%c",((char*)rbuf)[i]);
    }
    printf("\n");fflush(stdout);

    free(sbuf);
    free(rbuf);
    free(rcounts);
    free(rdispls);
  }
 end:
  MPI_Finalize();
}
