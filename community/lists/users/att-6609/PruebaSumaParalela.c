#include<stdio.h>
#include<mpi.h>
int main(int argc, char ** argv){
int mynode, totalnodes;
int sum,startval,endval,accum;
printf("Inicio\n");
MPI_Status status;
MPI_Init(&argc,&argv);
MPI_Comm_size(MPI_COMM_WORLD, &totalnodes);
MPI_Comm_rank(MPI_COMM_WORLD, &mynode);
printf("totalnodes: %d\n",totalnodes);
printf("mynode: %d\n",mynode);
sum = 1110;

if(mynode!=0){
printf("Inicio Send\n");
printf("sum: %d\n",sum);
MPI_Send(&sum,1,MPI_INT,0,1,MPI_COMM_WORLD);
printf("Send sum\n");
}
else
{
printf("Inicio Recv\n");
MPI_Recv(&accum,1,MPI_INT,1,1,MPI_COMM_WORLD, &status);
printf("RECV accum\n");
printf("Sum\n");
}
printf("Final\n");
if(mynode == 0)
printf("The sum from 1 to 1000 is: %d",accum);
MPI_Finalize();
}
