! Make sure we don't screw up MPI_SIZEOF again :-(
! See https://svn.open-mpi.org/trac/ompi/ticket/4519

! Basically, if this test compiles, it'll be fine.

program mpi_sizeof_test
    implicit none
    include 'mpif.h'

    integer :: size, ierror
    integer :: i, i_1(2), i_2(2,2)
    integer*1 :: i1, i1_1(2), i1_2(2,2)
    integer*2 :: i2, i2_1(2), i2_2(2,2)
    integer*4 :: i4, i4_1(2), i4_2(2,2)
    integer*8 :: i8, i8_1(2), i8_2(2,2)
    real :: r, r_1(2), r_2(2,2)
    real*4 :: r4, r4_1(2), r4_2(2,2)
    real*8 :: r8, r8_1(2), r8_2(2,2)
    complex :: c, c_1(2), c_2(2,2)
    complex*8 :: c8, c8_1(2), c8_2(2,2)

    call mpi_init(ierror)

    call mpi_sizeof(i, size, ierror)
    call mpi_sizeof(i_1, size, ierror)
    call mpi_sizeof(i_2, size, ierror)
    call mpi_sizeof(i1, size, ierror)
    call mpi_sizeof(i1_1, size, ierror)
    call mpi_sizeof(i1_2, size, ierror)
    call mpi_sizeof(i2, size, ierror)
    call mpi_sizeof(i2_1, size, ierror)
    call mpi_sizeof(i2_2, size, ierror)
    call mpi_sizeof(i4, size, ierror)
    call mpi_sizeof(i4_1, size, ierror)
    call mpi_sizeof(i4_2, size, ierror)
    call mpi_sizeof(i8, size, ierror)
    call mpi_sizeof(i8_1, size, ierror)
    call mpi_sizeof(i8_2, size, ierror)
    call mpi_sizeof(r, size, ierror)
    call mpi_sizeof(r_1, size, ierror)
    call mpi_sizeof(r_2, size, ierror)
    call mpi_sizeof(r4, size, ierror)
    call mpi_sizeof(r4_1, size, ierror)
    call mpi_sizeof(r4_2, size, ierror)
    call mpi_sizeof(r8, size, ierror)
    call mpi_sizeof(r8_1, size, ierror)
    call mpi_sizeof(r8_2, size, ierror)
    call mpi_sizeof(c, size, ierror)
    call mpi_sizeof(c_1, size, ierror)
    call mpi_sizeof(c_2, size, ierror)
    call mpi_sizeof(c8, size, ierror)
    call mpi_sizeof(c8_1, size, ierror)
    call mpi_sizeof(c8_2, size, ierror)

    call mpi_finalize(ierror)
end program mpi_sizeof_test
