#include <mpi.h>
#include <stdio.h>

/**
 * expected output for defective OpenMPI versions:
results_2[6]     = 8
ref_results_2[6] = 12
results_2[7]     = 9
ref_results_2[7] = 13

*/

static int
do_test(MPI_Datatype * recvs, MPI_Datatype * sends, int *raw_inputs);




int main(void) {

    int rank, size;
    int ierror = 0;
    MPI_Datatype sends[2], recvs[2];

    MPI_Init(NULL, NULL);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    MPI_Comm_size(MPI_COMM_WORLD, &size);


    {
        int count = 2, blocklen = 2, stride = 4;

        MPI_Type_vector(count, blocklen, stride, MPI_INT, &recvs[0]);
        MPI_Type_commit(&recvs[0]);

        MPI_Type_vector(count, blocklen, stride, MPI_INT, &sends[1]);
        MPI_Type_commit(&sends[1]);
    }

    {
        int count = 1;
        int blocklength = 4;
        int array_of_displacements[] = {4};

        MPI_Type_create_indexed_block(count, blocklength, array_of_displacements, MPI_INT, &sends[0]);
        MPI_Type_commit(&sends[0]);

        MPI_Type_create_indexed_block(count, blocklength, array_of_displacements, MPI_INT, &recvs[1]);
        MPI_Type_commit(&recvs[1]);
    }

    {
        int raw_input[16] = {0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15};
        ierror = do_test(recvs, sends, raw_input);
    }

    MPI_Type_free(&sends[1]);
    MPI_Type_free(&recvs[1]);
    MPI_Type_free(&sends[0]);
    MPI_Type_free(&recvs[0]);

    MPI_Finalize();

  return ierror;
}

static int
do_test(MPI_Datatype * recvs, MPI_Datatype * sends, int *raw_inputs)
{

    int results_buffer[16] = {-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1};
    int i;
    MPI_Datatype send_dt, recv_dt;
    MPI_Status status;
    int ref_results[16] = {4,5,-1,-1,6,7,-1,-1,-1,-1,-1,-1,8,9,12,13};
    int retcode = 0;

    {
        int count = 2;
        int array_of_blocklengths[] = {1, 1};
        MPI_Aint array_of_displacements[] = {0, 32};

        MPI_Type_create_struct(count, array_of_blocklengths, array_of_displacements, recvs, &recv_dt);
        MPI_Type_commit(&recv_dt);

        MPI_Type_create_struct(count, array_of_blocklengths, array_of_displacements, sends, &send_dt);
        MPI_Type_commit(&send_dt);
    }

    MPI_Sendrecv(raw_inputs, 1, send_dt, 0, 3, results_buffer, 1, recv_dt, 0, 3, MPI_COMM_WORLD, MPI_STATUS_IGNORE);

    for (i = 0; i < 16; i++) {
        retcode |= (results_buffer[i] != ref_results[i]);
        if (results_buffer[i] != ref_results[i])
            fprintf(stdout, "   results_buffer[%d]     = %2d\t!=\tref_results[%d] = %d\n", i, results_buffer[i], i, ref_results[i]);
        else
            fprintf(stdout, "   results_buffer[%d]     = %2d\tEQ\tref_results[%d] = %d\n", i, results_buffer[i], i, ref_results[i]);
    }

    MPI_Type_free(&send_dt);
    MPI_Type_free(&recv_dt);

    return retcode;
}

