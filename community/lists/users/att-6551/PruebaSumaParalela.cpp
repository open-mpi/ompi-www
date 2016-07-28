#include<iostream.h>
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
sum = 0;
startval = 1000*mynode/totalnodes+1;
endval = 1000*(mynode+1)/totalnodes;
for(int i=startval;i<=endval;i=i+1)
sum = sum + i;
if(mynode!=0){
printf("Inicio Send\n");
printf("sum: %d\n",sum);
MPI_Send(&sum,1,MPI_INT,0,1,MPI_COMM_WORLD);
printf("Send sum\n");
}
else
for(int j=1;j<totalnodes;j=j+1){
printf("Inicio Recv\n");
MPI_Recv(&accum,1,MPI_INT,j,1,MPI_COMM_WORLD, &status);
printf("RECV accum\n");
sum = sum + accum;
printf("Sum\n");
}
printf("Final\n");
if(mynode == 0)
cout << "The sum from 1 to 1000 is: " << sum << endl;
MPI_Finalize();
}
