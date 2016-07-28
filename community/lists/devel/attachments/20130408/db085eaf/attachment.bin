#include <mpi.h>
#include <stdio.h>

/**
 * expected output:

first tests:
second tests:

 * actual output

first tests:
second tests:
results_2[6]     = 8
ref_results_2[6] = 12
results_2[7]     = 9
ref_results_2[7] = 13

*/

void do_test(MPI_Datatype * recvs, MPI_Datatype * sends, int * inputs[2]);

int main(void) {

  MPI_Init(NULL, NULL);

  int rank, size;

  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Comm_size(MPI_COMM_WORLD, &size);

  if (size == 1) {

    MPI_Datatype sends[2], recvs[2];

    {
      int count = 2, blocklen = 2, stride = 4;
      MPI_Type_vector(count, blocklen, stride, MPI_INT, &recvs[0]);
      MPI_Type_commit(&recvs[0]);
    }

    {
      int count = 1;
      int blocklength = 4;
      int array_of_displacements[] = {4};
      MPI_Type_create_indexed_block(count, blocklength, array_of_displacements,
                                    MPI_INT, &sends[0]);
      MPI_Type_commit(&sends[0]);
    }

    {
      int count = 1;
      int blocklength = 4;
      int array_of_displacements[] = {4};
      MPI_Type_create_indexed_block(count, blocklength, array_of_displacements,
                                    MPI_INT, &recvs[1]);
      MPI_Type_commit(&recvs[1]);
    }

    {
      int count = 2, blocklen = 2, stride = 4;
      MPI_Type_vector(count, blocklen, stride, MPI_INT, &sends[1]);
      MPI_Type_commit(&sends[1]);
    }

    {
      int raw_input[24] = {0,1,2,3,4,5,6,7,
                           -2,-2,-2,-2,-2,-2,-2,-2,
                           8,9,10,11,12,13,14,15};
      int * input_1 = &raw_input[0], * input_2 = &raw_input[16];
      int * inputs[2] = {input_1, input_2};

      puts("first tests:");
      do_test(recvs, sends, inputs);
    }

    {
      int raw_input[16] = {0,1,2,3,4,5,6,7,
                           8,9,10,11,12,13,14,15};
      int * input_1 = &raw_input[0], * input_2 = &raw_input[8];
      int * inputs[2] = {input_1, input_2};

      puts("second tests:");
      do_test(recvs, sends, inputs);
    }

    MPI_Type_free(&sends[1]);
    MPI_Type_free(&recvs[1]);
    MPI_Type_free(&sends[0]);
    MPI_Type_free(&recvs[0]);
  }

  MPI_Finalize();

  return 0;
}

void do_test(MPI_Datatype * recvs, MPI_Datatype * sends, int * inputs[2]) {

  int results_1[8] = {-1,-1,-1,-1,-1,-1,-1,-1},
      results_2[8] = {-1,-1,-1,-1,-1,-1,-1,-1};
  int * results[2] = {results_1, results_2};

  MPI_Datatype send_dt, recv_dt;

  {
    int count = 2;
    int array_of_blocklengths[] = {1, 1};
    MPI_Aint array_of_displacements[] = {0, (results[1] - results[0]) * sizeof(int)};
    MPI_Type_create_struct(count, array_of_blocklengths, array_of_displacements,
                           recvs, &recv_dt);
    MPI_Type_commit(&recv_dt);
  }

  {
    int count = 2;
    int array_of_blocklengths[] = {1, 1};
    MPI_Aint array_of_displacements[] = {0, (inputs[1] - inputs[0]) * sizeof(int)};
    MPI_Type_create_struct(count, array_of_blocklengths, array_of_displacements,
                           sends, &send_dt);
    MPI_Type_commit(&send_dt);
  }

  MPI_Request request;

  MPI_Irecv(results[0], 1, recv_dt, 0, 0, MPI_COMM_WORLD, &request);
  MPI_Send(inputs[0], 1, send_dt, 0, 0, MPI_COMM_WORLD);

  MPI_Waitall(1, &request, MPI_STATUSES_IGNORE);

  MPI_Type_free(&send_dt);
  MPI_Type_free(&recv_dt);

  int ref_results_1[8] = {4,5,-1,-1,6,7,-1,-1},
      ref_results_2[8] = {-1,-1,-1,-1,8,9,12,13};

  for (int i = 0; i < 8; ++i) {

    if (results_1[i] != ref_results_1[i])
      printf("results_1[%d]     = %d\n"
             "ref_results_1[%d] = %d\n",
             i, results_1[i], i, ref_results_1[i]);

    if (results_2[i] != ref_results_2[i])
      printf("results_2[%d]     = %d\n"
             "ref_results_2[%d] = %d\n",
             i, results_2[i], i, ref_results_2[i]);
  }
}