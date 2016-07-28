! Filename: mpi_hello.f90
! Description: A parallel hello world program

PROGRAM HelloWorld
! include 'mpif.h'
use mpi
call mpi_init(ierr)
call mpi_comm_size(MPI_COMM_WORLD,npes, ierr)
call mpi_comm_rank(MPI_COMM_WORLD,irank,ierr)

print*,'Hello World! I am ',irank,' of ',npes

call mpi_finalize(ierr)

END PROGRAM
