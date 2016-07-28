#include <stdio.h>
#include "mpi.h"

/* ompi_datatype_internal.h/OMPI_DATATYPE_MPI_MAX_PREDEFINED */
#define OMPI_DATATYPE_MPI_MAX_PREDEFINED   ((0x2E)+1)

struct ompi_datatype_t; 
extern struct ompi_datatype_t *ompi_datatype_basicDatatypes[];
extern void ompi_datatype_dump(const struct ompi_datatype_t *datatype);

int main(int argc, char *argv[])
{
    int i;
    int myrank;

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &myrank);

    if (0 == myrank) {
        for (i = 1; i < OMPI_DATATYPE_MPI_MAX_PREDEFINED-1; i++) {
            ompi_datatype_dump(ompi_datatype_basicDatatypes[i]);
        }
    }

    MPI_Finalize();

    return 0;
}
