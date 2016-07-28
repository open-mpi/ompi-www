#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
    unsigned int n;
    int me, nprocs;
    int master=1;

    MPI_Init (&argc, &argv);
    MPI_Comm_size (MPI_COMM_WORLD, &nprocs);
    MPI_Comm_rank (MPI_COMM_WORLD, &me);
    if (me == 0)
    {
	printf("%s", "Input array length :\n");
	scanf ("%d", &n);
	printf("Size in MB: %g\n",(double) n*8/1024/1024);
    }
    MPI_Bcast (&n, 1, MPI_INT, 0, MPI_COMM_WORLD);
    MPI_Barrier (MPI_COMM_WORLD);
    
    MPI_Status status;
    double *d;

    // Master recv
    if (me == master ) {
	for (int pe=0; pe<nprocs; pe++)
	{
	    if (pe==master) continue;

	    printf("I am proc %d. Receiving from proc %d : ",me,pe); fflush(stdout);
	    d=(double *)malloc(sizeof(double)*n);	   
	    if (d==NULL) 
	    {
		printf("ERROR : Unable to malloc !\n");
		MPI_Finalize();
		exit(EXIT_FAILURE);
	    }
	    
	    MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&status);
	    printf("OK."); fflush(stdout);
	    unsigned int i;
	    for (i=0; i<n; i++)
	    {
		if (d[i] != i) {
		    printf("Data corrupted at %d!.\n",i);
		    i=n+1;
		}
	    }
	    if (i!=n+1) printf("Data OK.\n");
	    free(d);
	}
	printf("All done.\n"); fflush(stdout);

    }

    // Slave send
    else {
      d=(double *)malloc(sizeof(double)*n);
      for (unsigned int i=0; i<n; i++) d[i]=i;
      MPI_Send(d,n,MPI_DOUBLE,master,999,MPI_COMM_WORLD);
      
    }
    
    MPI_Finalize();
    return 0;
} 
