#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>

#include <mpi.h>

typedef struct _tstruct {
        char   one[3];
        long   two;
        double three;
        short  four;
} TSTRUCT;

int main(int argc, char *argv[]) {
        TSTRUCT tstruct;
        int mpi_size=0, mpi_rank=0;
        int sizes[4];
        MPI_Aint offsets[4];
        MPI_Datatype types[4];
        MPI_Datatype mpitype;
        int status;
        MPI_Status mpistatus;

        // Initialize MPI
        if ((status = MPI_Init(&argc, &argv)) != MPI_SUCCESS) {
                printf("MPI_Init failed - %d.\n", status);
                (void)MPI_Abort(MPI_COMM_WORLD, status);
                abort();
        }

        // Get size & rank info
        MPI_Comm_rank(MPI_COMM_WORLD, &mpi_rank);
        MPI_Comm_size(MPI_COMM_WORLD, &mpi_size);

        if(mpi_size != 2) {
                printf("This test program must be run with exactly '2' processes.\n");
                (void)MPI_Abort(MPI_COMM_WORLD, 1);
                abort();
        }

        // Sleep to try and get Process 1 output to appear first... just for convenience
        if(mpi_rank==1) sleep(1);

        // Initialize data that I will send from process 0 to process 1
        memset(&tstruct, '\0', sizeof(TSTRUCT));
        if(mpi_rank==0) {
                sprintf(tstruct.one, "22");
                tstruct.two= 222;
                tstruct.three = 33.3;
                tstruct.four= 44;
        }

        // Build custom type structure
        sizes[0] = (int)sizeof(tstruct.one);
        sizes[1] = (int)sizeof(tstruct.two);
        sizes[2] = (int)sizeof(tstruct.three);
        sizes[3] = (int)sizeof(tstruct.four);
        offsets[0] = 0;
        offsets[1] = ((int)&tstruct.two) - ((int)&tstruct.one);
        offsets[2] = ((int)&tstruct.three) - ((int)&tstruct.one);
        offsets[3] = ((int)&tstruct.four) - ((int)&tstruct.one);
        types[0] = MPI_CHAR;
        types[1] = MPI_LONG;
        types[2] = MPI_DOUBLE;
        types[3] = MPI_SHORT;
        printf("%d: sizes     '%d'  '%d'  '%d'  '%d'\n", mpi_rank, sizes[0], sizes[1], sizes[2], sizes[3]);
        printf("%d: offsets   '%d'  '%d'  '%d'  '%d'\n", mpi_rank, offsets[0], offsets[1], offsets[2], offsets[3]);
        printf("%d: addresses '%d' '%d' '%d' '%d'\n", mpi_rank, &tstruct.one, 
							&tstruct.two, &tstruct.three, &tstruct.four);
        if((status = MPI_Type_struct(4, &sizes[0], &offsets[0], &types[0], &mpitype)) != MPI_SUCCESS) {
                printf("MPI_Type_struct() failed - %d.\n", status);
                (void)MPI_Abort(MPI_COMM_WORLD, status);
                abort();
        }
        if((status = MPI_Type_commit(&mpitype)) != MPI_SUCCESS) {
                printf("MPI_Type_struct() failed - %d.\n", status);
                (void)MPI_Abort(MPI_COMM_WORLD, status);
                abort();
        }

        if(mpi_rank==0) {
                if((status = MPI_Send(&tstruct.one, 1/*count*/, mpitype, 
                                        1/*dest*/, 0/*tag*/, MPI_COMM_WORLD)) != MPI_SUCCESS) {
                        printf("MPI_Send() failed - %d.\n", status);
                        (void)MPI_Abort(MPI_COMM_WORLD, status);
                        abort();
                }
        } else {
                if((status = MPI_Recv(&tstruct.one, 1/*count*/, mpitype, 0/*source*/, 
                                        MPI_ANY_TAG, MPI_COMM_WORLD, &mpistatus)) != MPI_SUCCESS) {
                        printf("MPI_Recv() failed - %d.\n", status);
                        (void)MPI_Abort(MPI_COMM_WORLD, status);
                        abort();
                }
        }

        // Print data
        printf("%d: one='%s'  two='%d'  three='%f'  four='%d'\n", mpi_rank, tstruct.one, tstruct.two, tstruct.three,
                                                                        tstruct.four);

        MPI_Finalize();

        return 1;
}
