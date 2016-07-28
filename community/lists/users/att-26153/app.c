#include <mpi.h>
#include <stdlib.h>
#include <stdio.h>

// send stuff
static MPI_Request * isend_requests = NULL;
static int num_isend_requests;

//taken from http://beige.ucs.indiana.edu/I590/node85.html
static void mpi_err_handler(int error_code) {

   if (error_code != MPI_SUCCESS) {

      char error_string[1024];
      int length_of_error_string, error_class;
      int global_rank; //!< rank of process in MPI_COMM_WORLD

      MPI_Comm_rank(MPI_COMM_WORLD, &global_rank);
      MPI_Error_class(error_code, &error_class);
      MPI_Error_string(error_class, error_string, &length_of_error_string);
      fprintf(stderr, "%3d: %s\n", global_rank, error_string);
      MPI_Error_string(error_code, error_string, &length_of_error_string);
      fprintf(stderr, "%3d: %s\n", global_rank, error_string);
      MPI_Abort(MPI_COMM_WORLD, error_code);
   }
}

static int get_free_send_request_handle () {

  int flag, idx;
  MPI_Status lstatus;

  // test whether any send request has been fulfilled
  mpi_err_handler(MPI_Testany(num_isend_requests, isend_requests, &idx, &flag,
                              &lstatus));
  if (flag && idx != MPI_UNDEFINED) return idx;

  // look for free send request
  for (int i = 0; i < num_isend_requests; i++)
    if (isend_requests[i] == MPI_REQUEST_NULL)
      return i;

  fputs("ERROR: Did not find free request handle in "
        "get_free_send_request_handle.", stderr);
  exit(EXIT_FAILURE);

  return -1;
}

static void isend(void const * send_buffer, int count, int dest, int tag) {

  int request_idx = get_free_send_request_handle();

  mpi_err_handler(MPI_Isend(send_buffer, count, MPI_INT, dest, tag,
                            MPI_COMM_WORLD, &isend_requests[request_idx]));
}

int main () {

  MPI_Init (0, NULL);

  int domain_id;
  int global_size, global_rank;

  int is_domain_root;
  int local_domain_size;
  int remote_domain_size;

  int dummy = -1;

  mpi_err_handler(MPI_Comm_rank(MPI_COMM_WORLD, &global_rank));
  mpi_err_handler(MPI_Comm_size(MPI_COMM_WORLD, &global_size));
  domain_id = global_rank >= (global_size / 2);
  local_domain_size = global_size / 2;
  remote_domain_size = global_size - local_domain_size;
  if (domain_id) {
    int temp = local_domain_size;
    local_domain_size = remote_domain_size;
    remote_domain_size = temp;
  }
  is_domain_root = (global_rank == 0) || (global_rank == global_size / 2);

  // buffer for isend
  num_isend_requests = remote_domain_size;
  if (is_domain_root) num_isend_requests += local_domain_size;
  isend_requests = (MPI_Request *) malloc (num_isend_requests * sizeof(MPI_Request));
  for (int i = 0; i < num_isend_requests; i++) isend_requests[i] = MPI_REQUEST_NULL;

  {
    int tag = 0;

    if (is_domain_root)
      // send message to all process of local domain (including self)
      for (int i = 0; i < local_domain_size; ++i)
         isend(&dummy, 1, i + ((domain_id)?(global_size/2):(0)), tag);

    // receive message from domain root
    mpi_err_handler(MPI_Recv(&dummy, 1, MPI_INT, MPI_ANY_SOURCE,
                             tag, MPI_COMM_WORLD, MPI_STATUS_IGNORE));
  }

// #define NOBUG
#ifdef NOBUG
  MPI_Barrier(MPI_COMM_WORLD);
#endif

  {
    int tag = 1;

    // send message to all process of remote domain
    for (int i = 0; i < remote_domain_size; ++i)
      isend(&dummy, 1, i + ((domain_id)?(0):(global_size/2)), tag);

    // receive message from all process of remote domain
    for (int i = 0; i < remote_domain_size; ++i) {
      mpi_err_handler(MPI_Recv(&dummy, 1, MPI_INT, i + ((domain_id)?(0):(global_size/2)),
                                tag, MPI_COMM_WORLD, MPI_STATUS_IGNORE));
    }
  }

  mpi_err_handler(MPI_Waitall(num_isend_requests, isend_requests,
                              MPI_STATUSES_IGNORE));
  free(isend_requests);

  MPI_Finalize();

  return EXIT_SUCCESS;
}

