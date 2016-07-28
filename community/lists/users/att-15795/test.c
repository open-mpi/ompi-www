#include <stdio.h>
#include <mpi.h>
#include <assert.h>
#include <stdlib.h>

static void check(int code, char *label, int line)
{
  if (code != MPI_SUCCESS)
  {
    fprintf(stderr, "MPI Error at %s (line %d): %d\n", label, line, code);
    exit (22);
  }
}

int main (int argc, char **argv)
{
  // init MPI
  int mpi_error_code = MPI_Init(&argc, &argv);
  check(mpi_error_code, "MPI_Init", __LINE__);
    
  // get total number of processes
  int num_processes;
  mpi_error_code = MPI_Comm_size(MPI_COMM_WORLD, &num_processes);
  check(mpi_error_code, "MPI_Comm_Size", __LINE__);

  // get MPI_COMM_WORLD rank of this process
  int my_rank;
  mpi_error_code = MPI_Comm_rank(MPI_COMM_WORLD, &my_rank);
  check(mpi_error_code, "MPI_Comm_Rank", __LINE__);

  // set rank of "master"
  int rank_master = num_processes - 1;

  // query world group
  MPI_Group world_group;
  mpi_error_code = MPI_Comm_group(MPI_COMM_WORLD, &world_group);
  check(mpi_error_code, "MPI_Comm_group", __LINE__);
    
  // split COMM_WORLD group into two:
  // first group contains my_rank==num_processes-1 and second group contains the
  // remaining ranks
  //
  // Note that *all* processes in the "parent" communicator (which is MPI_COMM_WORLD,
  // so really all processes) must collectively call MPI_Comm_create, even those not
  // part of the new communicator. 
  if(my_rank != rank_master)
  {
    // set up group
    MPI_Group gr_without_master;
    mpi_error_code = MPI_Group_excl(world_group, 1, &rank_master, &gr_without_master);
    check(mpi_error_code, " MPI_Group_excl", __LINE__);

    // create comm from group
    MPI_Comm gr_comm;
    mpi_error_code = MPI_Comm_create(MPI_COMM_WORLD, gr_without_master, &gr_comm);
    check(mpi_error_code, " MPI_Comm_create", __LINE__);
  }
  else
  {
    // This variant breaks OpenMPI, with the stack trace below.
    // This is not supposed to happen, creating empty groups from COMM_WORLD
    // is perfectly legal.
    // Code breaks with OpenMPI 1.4.x and 1.5.x and the cross product of compiler
    // bindings for Intel12, gcc4.4.3, sunstudio12.2 (where applicable) and Open64.
    // Code works perfectly fine with MPICH2 using the same cross product of compiler
    // bindings. 
    MPI_Comm dummy_comm;
    mpi_error_code = MPI_Comm_create(MPI_COMM_WORLD, MPI_GROUP_EMPTY, &dummy_comm);
    check(mpi_error_code, " MPI_Comm_create", __LINE__);

/*    
    // This variant always works, but according to the MPI 2.2 standard, creating the
    // dummy group should not be necessary.
    MPI_Group dummy_group;
    mpi_error_code = MPI_Group_incl(world_group, 1, &rank_master, &dummy_group);
    check(mpi_error_code, " MPI_Group_incl", __LINE__);
    MPI_Comm dummy_comm;
    mpi_error_code = MPI_Comm_create(MPI_COMM_WORLD, dummy_group, &dummy_comm);
    check(mpi_error_code, " MPI_Comm_create", __LINE__);
*/
  }

  // dump a success message and shut things down
  printf("Groups are set up without error, time to go to sleep\n");
  mpi_error_code = MPI_Finalize();
  check(mpi_error_code, " MPI_Finalize", __LINE__);
    
  return 0;
}

/* Stack trace of the crashing version, exemplary for the GCC that ships with Ubuntu 10.04 LTS

[teslaspule:19150] *** Process received signal ***
[teslaspule:19150] Signal: Segmentation fault (11)
[teslaspule:19150] Signal code: Address not mapped (1)
[teslaspule:19150] Failing at address: (nil)
[teslaspule:19150] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7f1930cb28f0]
[teslaspule:19150] [ 1] /sfw/openmpi/gcc4.4.3/1.4.3/lib/libmpi.so.0(ompi_dpm_base_mark_dyncomm+0x2e) [0x7f1931c7c51e]
[teslaspule:19150] [ 2] /sfw/openmpi/gcc4.4.3/1.4.3/lib/libmpi.so.0(ompi_comm_set+0x16d) [0x7f1931c2e3dd]
[teslaspule:19150] [ 3] /sfw/openmpi/gcc4.4.3/1.4.3/lib/libmpi.so.0(+0x251f3) [0x7f1931c2f1f3]
[teslaspule:19150] [ 4] /sfw/openmpi/gcc4.4.3/1.4.3/lib/libmpi.so.0(MPI_Comm_create+0xc1) [0x7f1931c5b421]
[teslaspule:19150] [ 5] ./a.out(main+0x147) [0x400d5e]
[teslaspule:19150] [ 6] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f193093ec4d]
[teslaspule:19150] [ 7] ./a.out() [0x400b09]
[teslaspule:19150] *** End of error message ***

*/

