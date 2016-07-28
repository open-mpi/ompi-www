      program main
      use mpi
      implicit none
      integer :: ierr
      call MPI_File_set_view( 0, MPI_DISPLACEMENT_CURRENT, MPI_DATATYPE_NULL &
      &     ,MPI_DATATYPE_NULL , "native", MPI_INFO_NULL, ierr )
      stop
      end program
