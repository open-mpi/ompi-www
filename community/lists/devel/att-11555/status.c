#include <stdio.h>
#include <string.h>
#include <mpi.h>

static void check_status_empty(MPI_Status status)
{
    int count;
    int cancelled;

    MPI_Get_count(&status, MPI_INT, &count);
    MPI_Test_cancelled(&status, &cancelled);

    printf("returned source:    %2d, expected source:    %2d, result: %s\n",
           status.MPI_SOURCE, MPI_ANY_SOURCE,
           status.MPI_SOURCE == MPI_ANY_SOURCE ? "OK" : "NG");
    printf("returned tag:       %2d, expected tag:       %2d, result: %s\n",
           status.MPI_TAG, MPI_ANY_TAG,
           status.MPI_TAG == MPI_ANY_TAG ? "OK" : "NG");
#if 0 /* No need to check. See 3.2.5 Return Status in MPI-3.0. */
    printf("returned error:     %2d, expected error:     %2d, result: %s\n",
           status.MPI_ERROR, MPI_SUCCESS,
           status.MPI_ERROR == MPI_SUCCESS ? "OK" : "NG");
#endif
    printf("returned count:     %2d, expected count:     %2d, result: %s\n",
           count, 0, count == 0 ? "OK" : "NG");
    printf("returned cancelled: %2d, expected cancelled: %2d, result: %s\n",
           cancelled, 0, cancelled == 0 ? "OK" : "NG");
}

static void check_status_procnull(MPI_Status status)
{
    int count;
    int cancelled;

    MPI_Get_count(&status, MPI_INT, &count);
    MPI_Test_cancelled(&status, &cancelled);

    printf("returned source:    %2d, expected source:    %2d, result: %s\n",
           status.MPI_SOURCE, MPI_PROC_NULL,
           status.MPI_SOURCE == MPI_PROC_NULL ? "OK" : "NG");
    printf("returned tag:       %2d, expected tag:       %2d, result: %s\n",
           status.MPI_TAG, MPI_ANY_TAG,
           status.MPI_TAG == MPI_ANY_TAG ? "OK" : "NG");
    printf("returned count:     %2d, expected count:     %2d, result: %s\n",
           count, 0, count == 0 ? "OK" : "NG");
}

static void check_status_cancelled(MPI_Status status, int expected)
{
    int cancelled;

    MPI_Test_cancelled(&status, &cancelled);

    printf("returned cancelled: %2d, expected cancelled: %2d, result: %s\n",
           cancelled, expected, cancelled == expected ? "OK" : "NG");
}

static void check_count(int count, int expected)
{
    printf("returned count: %6d, expected count: %6d, result: %s\n",
           count, expected, count == expected ? "OK" : "NG");
}

static void check_index(int index, int expected)
{
    printf("returned index: %6d, expected index: %6d, result: %s\n",
           index, expected, index == expected ? "OK" : "NG");
}

static void check_completed(int completed, int expected)
{
    printf("returned completed: %2d, expected completed: %2d, result: %s\n",
           completed, expected, completed == expected ? "OK" : "NG");
}

static void clear_variables(MPI_Status *status,
                            int *count, int *index, int *completed)
{
    memset(status,    0xF0, sizeof(*status));
    memset(count,     0xF0, sizeof(*count));
    memset(index,     0xF0, sizeof(*index));
    memset(completed, 0xF0, sizeof(*completed));
}

int main(int argc, char *argv[])
{
    int my_rank;
    int buf;
    int count;
    int index;
    int completed;
    MPI_Request request;
    MPI_Status status;

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &my_rank);

    /* Test of MPI_Wait */

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Wait(&request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Wait\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Wait(&request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Waitany\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitany(1, &request, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Waitall\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitall(1, &request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Waitsome\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitsome(1, &request, &count, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Test\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Test(&request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Testany\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testany(1, &request, &index, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Testall\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testall(1, &request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for inactive persistent request after MPI_Testsome\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testsome(1, &request, &count, &index, &status);
        } while (count == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Wait for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Wait(&request, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        break;
    }

    /* Test of MPI_Waitany */

    switch (my_rank) {
    case 0:
        printf("MPI_Waitany for no requests\n");
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitany(0, NULL, &index, &status);
        check_status_empty(status);
        check_index(index, MPI_UNDEFINED);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitany for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Waitany(1, &request, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitany(1, &request, &index, &status);
        check_status_empty(status);
        check_index(index, MPI_UNDEFINED);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitany for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitany(1, &request, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitany(1, &request, &index, &status);
        check_status_empty(status);
        check_index(index, MPI_UNDEFINED);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitany for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitany(1, &request, &index, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        check_index(index, 0);
        break;
    }

    /* Test of MPI_Waitall */

    switch (my_rank) {
    case 0:
        printf("MPI_Waitall for no requests\n");
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitall(0, NULL, NULL);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitall for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Waitall(1, &request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitall(1, &request, &status);
        check_status_empty(status);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitall for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitall(1, &request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitall(1, &request, &status);
        check_status_empty(status);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitall for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitall(1, &request, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        break;
    }

    /* Test of MPI_Waitsome */

    switch (my_rank) {
    case 0:
        printf("MPI_Waitsome for no requests\n");
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitsome(0, NULL, &count, NULL, NULL);
        check_count(count, MPI_UNDEFINED);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitsome for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Waitsome(1, &request, &count, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitsome(1, &request, &count, &index, &status);
        check_count(count, MPI_UNDEFINED);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitsome for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitsome(1, &request, &count, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitsome(1, &request, &count, &index, &status);
        check_count(count, MPI_UNDEFINED);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Waitsome for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Waitsome(1, &request, &count, &index, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        check_index(index, 0);
        check_count(count, 1);
        break;
    }

    /* Test of MPI_Test */

    switch (my_rank) {
    case 0:
        printf("MPI_Test for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        do {
            MPI_Test(&request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Test(&request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Test for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Test(&request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Test(&request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Test for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Test(&request, &completed, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        check_completed(completed, 1);
        break;
    }

    /* Test of MPI_Testany */

    switch (my_rank) {
    case 0:
        printf("MPI_Testany for no requests\n");
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testany(0, NULL, &index, &completed, &status);
        check_status_empty(status);
        check_index(index, MPI_UNDEFINED);
        check_completed(completed, 1);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testany for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        do {
            MPI_Testany(1, &request, &index, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testany(1, &request, &index, &completed, &status);
        check_status_empty(status);
        check_index(index, MPI_UNDEFINED);
        check_completed(completed, 1);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testany for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testany(1, &request, &index, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testany(1, &request, &index, &completed, &status);
        check_status_empty(status);
        check_index(index, MPI_UNDEFINED);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testany for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testany(1, &request, &index, &completed, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        check_index(index, 0);
        check_completed(completed, 1);
        break;
    }

    /* Test of MPI_Testall */

    switch (my_rank) {
    case 0:
        printf("MPI_Testall for no requests\n");
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testall(0, NULL, &completed, NULL);
        check_completed(completed, 1);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testall for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        do {
            MPI_Testall(1, &request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testall(1, &request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testall for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testall(1, &request, &completed, &status);
        } while (completed == 0);
        MPI_Wait(&request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testall(1, &request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testall for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testall(1, &request, &completed, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        check_completed(completed, 1);
        break;
    }

    /* Test of MPI_Testsome */

    switch (my_rank) {
    case 0:
        printf("MPI_Testsome for no requests\n");
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testsome(0, NULL, &count, NULL, NULL);
        check_count(count, MPI_UNDEFINED);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testsome for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        do {
            MPI_Testsome(1, &request, &count, &index, &status);
        } while (count == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testsome(1, &request, &count, &index, &status);
        check_count(count, MPI_UNDEFINED);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testsome for inactive persistent request\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testsome(1, &request, &count, &index, &status);
        } while (count == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testsome(1, &request, &count, &index, &status);
        check_count(count, MPI_UNDEFINED);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Testsome for MPI_PROC_NULL\n");
        /* make a request for MPI_PROC_NULL */
        MPI_Irecv(&buf, 1, MPI_INT, MPI_PROC_NULL, 0, MPI_COMM_WORLD, &request);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Testsome(1, &request, &count, &index, &status);
        check_status_procnull(status);
        check_status_cancelled(status, 0);
        check_index(index, 0);
        check_count(count, 1);
        break;
    }

    /* Test of MPI_Request_get_status */

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for null request\n");
        /* make a null request */
        MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Wait(&request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Wait\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Wait(&request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Waitany\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitany(1, &request, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Waitall\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitall(1, &request, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Waitsome\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        MPI_Waitsome(1, &request, &count, &index, &status);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Test\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Test(&request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Testany\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testany(1, &request, &index, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Testall\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testall(1, &request, &completed, &status);
        } while (completed == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    switch (my_rank) {
    case 0:
        printf("MPI_Request_get_status for inactive persistent request after MPI_Testsome\n");
        /* make a inactive request */
        MPI_Recv_init(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Start(&request);
        do {
            MPI_Testsome(1, &request, &count, &index, &status);
        } while (count == 0);
        /* test */
        clear_variables(&status, &count, &index, &completed);
        MPI_Request_get_status(request, &completed, &status);
        check_status_empty(status);
        check_completed(completed, 1);
        MPI_Request_free(&request);
        break;
    case 1:
        MPI_Send(&buf, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
        break;
    }

    MPI_Finalize();

    return 0;
}
