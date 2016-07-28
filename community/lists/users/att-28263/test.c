#include <mpi.h>
#include <stdio.h>

typedef struct
{
   int v[6];
   long l;
} foo_type;

typedef struct
{
   int v[3];
   foo_type foo;
} bar_type;

int main(int argc, char* argv[])
{
   MPI_Datatype foo_mpitype, bar_mpitype;
   MPI_Request request;

   MPI_Aint base, displacements[2];
   int i, blocklengths[2];
   MPI_Datatype types[2];

   foo_type foo = {0};
   bar_type bar = {0};

   // Init MPI
   MPI_Init(&argc, &argv);

   // Create foo MPI type
   blocklengths[0] = 6; // 6 x int
   blocklengths[1] = 1; // 1 x long
   types[0] = MPI_INT;
   types[1] = MPI_LONG;
   MPI_Get_address(&foo, &base);
   MPI_Get_address(&foo.v, &displacements[0]);
   MPI_Get_address(&foo.l, &displacements[1]);
   for(i = 0; i < 2; i++) displacements[i] -= base;
   MPI_Type_create_struct(2, blocklengths, displacements, types, &foo_mpitype);
   MPI_Type_commit(&foo_mpitype);

   // Create bar MPI type
   blocklengths[0] = 3; // 3 x int
   blocklengths[1] = 1; // 1 x bar_type
   types[0] = MPI_INT;
   types[1] = foo_mpitype;
   MPI_Get_address(&bar, &base);
   MPI_Get_address(&bar.v, &displacements[0]);
   MPI_Get_address(&bar.foo, &displacements[1]);
   for(i = 0; i < 2; i++) displacements[i] -= base;
   MPI_Type_create_struct(2, blocklengths, displacements, types, &bar_mpitype);
   MPI_Type_commit(&bar_mpitype);
   
   // Non-blocking broadcast of foo
   MPI_Ibcast(&foo, 1, foo_mpitype, 0, MPI_COMM_WORLD, &request);
   MPI_Type_free(&foo_mpitype);
   MPI_Wait(&request, MPI_STATUS_IGNORE); // WORKS

   // Non-blocking broadcast of bar
   MPI_Ibcast(&bar, 1, bar_mpitype, 0, MPI_COMM_WORLD, &request);
   MPI_Type_free(&bar_mpitype);
   MPI_Wait(&request, MPI_STATUS_IGNORE); // SEGMENTATION FAULT, when number of processes > 4

   // Finalize
   MPI_Finalize();
}

