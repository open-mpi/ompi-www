#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <mpi.h>

#define V_LEN 10 //Vector Length
#define E_CNT 10 //Element count

MPI_Op       MPI_MySum; //Custom Sum function
MPI_Datatype MPI_MyType;//We need this MPI Datatype to make MPI aware of our custom structure

int i,j,true=1;
int totalnodes,mynode;

typedef struct CustomType_t {
       float feat[V_LEN];	//Some vector of float
       float distc;		//An independant float value 
       int   number;	//A counter of a different type
} CustomType;

CustomType *SharedStruct;

void construct_MyType(void){
	int i;
	CustomType p;
	int BlockLengths[3] = {V_LEN,1,1};
	MPI_Aint Displacement[3];
	MPI_Datatype types[3] = {MPI_FLOAT, MPI_FLOAT, MPI_INT};

	/* Compute relative displacements w/r to the Type's begining address 
	 * using portable technique
	 * */
	MPI_Get_address(&p.feat[0],&Displacement[0]);
	MPI_Get_address(&p.distc  ,&Displacement[1]);
	MPI_Get_address(&p.number ,&Displacement[2]);

	// Displacement is RELATIVE to it's first structure element!
	for(i=2; i >= 0; i--) Displacement[i] -= Displacement[0]; 
	
	// It is good practice to include this in case 
	// the compiler pads your data structure
/*	BlockLengths[3] = 1; types[3] = MPI_UB;
	Displacement[3] = sizeof(CustomType); */
	
	MPI_Type_create_struct(3, BlockLengths, Displacement, types, &MPI_MyType);
	MPI_Type_commit(&MPI_MyType); // important!!
	return;
}

void MySum(CustomType *cin, CustomType *cinout, int *len, MPI_Datatype *dptr)
{
	int i,j;
	// Some sanity check
	printf("\nIn MySum, Node %d with len=%d\n",mynode,*len);

	if(*dptr != MPI_MyType)
	{
	   printf("Invalid datatype\n");
	   MPI_Abort(MPI_COMM_WORLD, 3);
	}

	for(i=0; i < *len; i++)
	{
		cinout[i].distc +=cin[i].distc;
		cinout[i].number+=cin[i].number;
		for(j=0; j<V_LEN; j++)
			cinout[i].feat[j]+=cin[i].feat[j];
	}
}

void PrintStruct(void)
{
	//We print the result from all nodes:
	printf("Node %d has the following in SharedStruct:\n",mynode);
	for(i=0; i<E_CNT; i++)
	{
		printf("D:%2.1f #:%d Vect:",SharedStruct[i].distc,SharedStruct[i].number);
		for(j=0; j<V_LEN; j++)
			printf("%f,",SharedStruct[i].feat[j]);
		printf("\n");
	}
	printf("========= Node %d =========\n",mynode);
}

int main(int argc, char *argv[])
{	
	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &totalnodes);
	MPI_Comm_rank(MPI_COMM_WORLD, &mynode);

	// Create the MPI_MyType Type
	construct_MyType();
	// Create the MPI_MySum Operator
	MPI_Op_create((MPI_User_function*)MySum, true, &MPI_MySum);
	
	SharedStruct= (CustomType *)malloc(E_CNT * sizeof(CustomType)); //The dist and number part of the structure never get used at the moment...

	SharedStruct[0].distc=mynode+1.0;
	SharedStruct[0].number=mynode;
	for(i=0; i<V_LEN; i++) SharedStruct[0].feat[i]=mynode+i;
		
	// To speed up the process we replicate the process using memcpy:
	for(i=1; i<E_CNT; i++)
		memcpy((void*)&SharedStruct[i],(void*)SharedStruct,sizeof(CustomType));

	//Print Before:
	PrintStruct();
	// We add the content of all nodes _on_ all nodes: 
	MPI_Allreduce(MPI_IN_PLACE, SharedStruct, E_CNT, MPI_MyType, MPI_MySum, MPI_COMM_WORLD);
	//Print After:
	PrintStruct();
	return 0;
}

