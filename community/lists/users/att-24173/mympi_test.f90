program mympi_test

  use mpi

  implicit none

  integer               :: size, my_pe, comm, ierror, i
  integer               :: status(MPI_STATUS_SIZE)
  INTEGER               :: iig = 0
  INTEGER               :: p_int_byte     = 0
  
  call mpi_init(ierror)

  comm = MPI_COMM_WORLD

  call mpi_comm_size(comm,size,ierror)
  call mpi_comm_rank(comm,my_pe,ierror)
  call mpi_sizeof(iig, p_int_byte, ierror)

  write(*,*) 'MPI_COMM_WORLD: ', comm, MPI_COMM_WORLD
  write(*,*) 'I am PE ', my_pe, p_int_byte

  call mpi_finalize(ierror)

end program mympi_test


