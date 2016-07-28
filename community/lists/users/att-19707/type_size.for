      subroutine check_one_type(t, s)

      implicit none

      integer t
      character*(*) s
      
      include 'mpif.h'
      
      integer i_size, i_error
!---------------------------------------------      
      
      call mpi_type_size(t, i_size, i_error)
      write(6,*) 'Size of ', s, ' is ', i_size
      
      return
      end
      
!---------------------------------------------      
!---------------------------------------------      
      program type_size
      
      include 'mpif.h'
      
      integer i_error
!---------------------------------------------      

      call mpi_init(i_error)
      
      call check_one_type(MPI_INTEGER,  'MPI_INTEGER')
      call check_one_type(MPI_INTEGER4, 'MPI_INTEGER4')
      call check_one_type(MPI_INTEGER8, 'MPI_INTEGER8')
      call check_one_type(MPI_2INTEGER, 'MPI_2INTEGER')
      
      end
