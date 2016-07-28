PROGRAM sunerr
USE MPI                                   ! f90: Error on MPI_Comm_set_errhandler if using this with OpenMPI / Sun MPI
!include 'mpif.h'                          ! f77: Works fine with all MPI's tested
IMPLICIT NONE
!
integer :: data = 1, errhandler, ierr
external AbortWithMessage
!
call MPI_Init(ierr)
call MPI_Comm_create_errhandler (AbortWithMessage, errhandler, ierr)  ! Creating a handle: no problem

call MPI_Comm_set_errhandler (MPI_COMM_WORLD, errhandler, ierr)      ! MPI_COMM_WORLD in MPI_Comm_set_errhandler is the problem... in f90
!call MPI_Errhandler_set (MPI_COMM_WORLD, errhandler, ierr)            ! and this one deprecated function works fine both for f77 and f90


! ... a errornous MPI routine ... 
call MPI_Send (data, 1, MPI_INTEGER, 1, -12, MPI_COMM_WORLD, ierr)
call MPI_Finalize( ierr )

END PROGRAM sunerr



subroutine AbortWithMessage (comm, errorcode)
  use mpi
  implicit none
  integer :: comm, errorcode
  character(LEN=MPI_MAX_ERROR_STRING) :: errstr
  integer :: stringlength, ierr
  call MPI_Error_string (errorcode, errstr, stringlength, ierr)
  write (*,*) 'Error:  =+=>  ', errstr, ' =+=> Aborting'
  call MPI_Abort (comm, errorcode, ierr)
end subroutine AbortWithMessage


