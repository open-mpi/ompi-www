/* np=2 */

#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

struct structure {
    double not_transfered;
    double transfered_1;
    double transfered_2;
};

int main(int argc, char *argv[])
{
    int i, n = 2000, myrank;
    struct structure *data;
    MPI_Datatype struct_type, temp_type;
    MPI_Datatype types[2] = {MPI_DOUBLE, MPI_DOUBLE};
    int blocklens[2] = {1, 1};
    MPI_Aint disps[3];

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &myrank);

    data = malloc(sizeof(data[0]) * n);

    if (myrank == 0) {
        for (i = 0; i < n; i++) {
            data[i].transfered_1 = i + 0.1;
            data[i].transfered_2 = i + 0.2;
        }
    }

    MPI_Get_address(&data[0].transfered_1, &disps[0]);
    MPI_Get_address(&data[0].transfered_2, &disps[1]);
    MPI_Get_address(&data[0], &disps[2]);
    disps[1] -= disps[2]; /*  8 */
    disps[0] -= disps[2]; /* 16 */
    MPI_Type_create_struct(2, blocklens, disps, types, &temp_type);
    MPI_Type_create_resized(temp_type, 0, sizeof(data[0]), &struct_type);
    MPI_Type_commit(&struct_type);

    if (myrank == 0) {
        MPI_Send(data, n, struct_type, 1, 0, MPI_COMM_WORLD);
    } else if (myrank == 1) {
        MPI_Recv(data, n, struct_type, 0, 0, MPI_COMM_WORLD,
                 MPI_STATUS_IGNORE);
    }

    MPI_Type_free(&temp_type);
    MPI_Type_free(&struct_type);

    if (myrank == 1) {
        FILE *fp;
        fp = fopen("received_data", "w");
        for (i = 0; i < n; i++) {
            fprintf(fp, "%d: t1 = %g, t2 = %g\n",
                    i, data[i].transfered_1, data[i].transfered_2);
        }
        fclose(fp);
    }

    free(data);
    MPI_Finalize();

    return 0;
}
