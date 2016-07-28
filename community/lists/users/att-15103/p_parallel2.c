#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
	int  error_code, err, rank, size, N, i, N1, start, end;
	
	float  W, pi=0, sum=0;


	
	MPI_Init(&argc, &argv);
	MPI_Comm_rank( MPI_COMM_WORLD, &rank);
	MPI_Comm_size( MPI_COMM_WORLD, &size);

	N=atoi(argv[1]);
    
	int n[N],data[N];

	N1 = N/size;
	W=1.0/N;
	//printf("N1:%d W:%f\n",N1,W);

	
		
	if(size<2) 
	{
		printf("You must have 2 or more ranks to complete this action\n");
		MPI_Abort(MPI_COMM_WORLD,err);
	}
	if(argc<2) 
	{
		printf("Not enough arguments given\n");
		MPI_Abort(MPI_COMM_WORLD,err);	
	}



	if(rank == 0) {for(i=0;i<N;i++) n[i]=i;}
	
	MPI_Scatter (n, N1, MPI_INT,data, N1,MPI_INT, 0, MPI_COMM_WORLD); 

	pi = 0;
	
	start = rank*N1;
    end = (rank+1)*N1;
    
	for(i=data[start];i<data[end];i++) pi+=4*W/(1+(i+0.5)*(i+0.5)*W*W);
    //	printf("rank:%d tmppi:%f\n",rank,pi);	
	printf("data[start]:%d data[end]:%d ",data[start],data[end]);

    printf("rankN1:%d rank+1N1:%d\n",start,end);
	MPI_Reduce(&pi, &sum, 1, MPI_FLOAT, MPI_SUM, 0, MPI_COMM_WORLD);


	if (rank == 0) printf("Pi is:%f size:%d\n",sum,size);	
			
	MPI_Finalize();
}

