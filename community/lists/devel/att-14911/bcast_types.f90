!
!  This test program evidences an issue when ifort is used
!  for both openmpi and the test program
!  if gfortran is used, then the program run just fine
!
! Copyright (c) 2014      Research Organization for Information Science
!                         and Technology (RIST). All rights reserved.
!
program alignf
      use mpi
      implicit none

      type :: real8_int
        real(8) :: d
        integer :: i
      end type

      integer :: rank, ddt, mpi_err
      INTEGER(KIND=MPI_ADDRESS_KIND):: lb
      integer, dimension(2) :: array_of_blocklength, array_of_types, array_of_displacement

      type(real8_int), dimension(2) :: buf

      call mpi_init(mpi_err)

      array_of_blocklength = (/ 1, 1 /)
      array_of_types = (/ mpi_real8, mpi_integer /)

      call mpi_get_address(buf(1)%d, array_of_displacement(1), mpi_err)
      call mpi_get_address(buf(1)%i, array_of_displacement(2), mpi_err)
      call mpi_get_address(buf(1), lb, mpi_err)
      array_of_displacement = array_of_displacement - lb
      call mpi_type_struct(2, array_of_blocklength, array_of_displacement, array_of_types, &
        ddt, mpi_err)
      call mpi_type_commit(ddt, mpi_err)

      call mpi_comm_rank(MPI_COMM_WORLD, rank, mpi_err)
      if (rank.eq.0) then
         buf(1)%d = 123.456
         buf(1)%i = 123456
         buf(2)%d = 789.012
         buf(2)%i = 789012
      else
         buf(1)%d = 0
         buf(1)%i = 0
         buf(2)%d = 0
         buf(2)%i = 0
      endif

      call mpi_bcast(buf, 2, ddt, 0, MPI_COMM_WORLD, mpi_err)

      if (buf(2)%d /= 789.012) then
         write (*,*) 'expected 789.012, got ', buf(2)%d
      endif
      if (buf(2)%i /= 789012) then
         write (*,*) 'expected 789012, got ', buf(2)%i
      endif

      call mpi_finalize(mpi_err)
      stop
END PROGRAM
