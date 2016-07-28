#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
    int n;
    int me, nprocs;
    /* --------------------------------------------------- */
    MPI_Init (&argc, &argv);
    MPI_Comm_size (MPI_COMM_WORLD, &nprocs);
    MPI_Comm_rank (MPI_COMM_WORLD, &me);
    /* --------------------------------------------------- */
    if (me == 0)
    {
	printf("%s", "Input array length :\n");
	scanf ("%d", &n);
    }
    /* --------------------------------------------------- */
    MPI_Bcast (&n, 1, MPI_INT, 0, MPI_COMM_WORLD);
    /* --------------------------------------------------- */
    MPI_Barrier (MPI_COMM_WORLD);
    
    MPI_Status status;
    double *d;
    if (me == 0 ) {
	for (int pe=1; pe<nprocs; pe++)
	{
	    printf("Receiving from proc %d : ",pe); fflush(stdout);
	    d=(double *)malloc(sizeof(double)*n);	   
	    if (d==NULL) 
	    {
		printf("ERROR : Unable to malloc !\n");
		MPI_Finalize();
		exit(EXIT_FAILURE);
	    }
	    
	    MPI_Recv(d,n,MPI_DOUBLE,pe,999,MPI_COMM_WORLD,&status);
	    printf("OK."); fflush(stdout);
	    int i;
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
	printf("All done.\n");
    }
    else {
      d=(double *)malloc(sizeof(double)*n);
      for (int i=0; i<n; i++)
	d[i]=i;
      MPI_Send(d,n,MPI_DOUBLE,0,999,MPI_COMM_WORLD);
      
    }
    
    MPI_Finalize();
    return 0;
} 
