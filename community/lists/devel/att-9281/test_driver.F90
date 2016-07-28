program test_driver
  ! inclusions
  use mpi

  ! declarations
  integer :: ierr

  ! initialize mpi
  call mpi_init(ierr)
  
  ! call mpi_abort
  call mpi_abort(MPI_COMM_WORLD, -1, 0)

  ! finalize mpi
  call mpi_finalize(ierr)

end program test_driver
!=================================================================
