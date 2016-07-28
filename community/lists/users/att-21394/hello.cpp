#include <stdio.h>
#include "/opt/openmpi/include/mpi.h"

#define bufdim        128

int main(int argc, char *argv[])
{
    char buffer[bufdim];
    char id_str[32];

//  mpi :
    MPI::Init(argc,argv);
    MPI::Status status;
    
    int size;
    int rank;
    int tag;

    size=MPI::COMM_WORLD.Get_size();
    rank=MPI::COMM_WORLD.Get_rank();
    tag=0;

    if (rank==0) {
	printf("%d: we have %d processors\n",rank,size);
	int i;
	i=1;
	for ( ;i<size; ++i) {
	    sprintf(buffer,"hello  %d! ",i);
	    MPI::COMM_WORLD.Send(buffer,bufdim,MPI::CHAR,i,tag);
	}
	i=1;
	for ( ;i<size; ++i) {
	    MPI::COMM_WORLD.Recv(buffer,bufdim,MPI::CHAR,i,tag,status);
	    printf("%d: %s\n",rank,buffer);
	}
    }
    else {
	MPI::COMM_WORLD.Recv(buffer,bufdim,MPI::CHAR,0,tag,status);

	sprintf(id_str,"processor %d ",rank);
	strncat(buffer,id_str,bufdim-1);
	strncat(buffer,"reporting for duty\n",bufdim-1);

	MPI::COMM_WORLD.Send(buffer,bufdim,MPI::CHAR,0,tag);
    }
    MPI::Finalize();
    return 0;
}


