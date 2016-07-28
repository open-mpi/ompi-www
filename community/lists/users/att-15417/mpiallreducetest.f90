program test
  use mpi
  implicit none
  integer, parameter :: i8 = selected_int_kind  (15)
  integer, parameter :: r8 = selected_real_kind (15,90)
  integer, parameter :: N  = 3

  integer     :: i4i(N), i4s(N)
  integer(i8) :: i8i(N), i8s(N)
  real(r8)    :: r8i(N), r8s(N)
  integer     :: ierr, nproc, myrank, i

  i4i = (/ (i, i=1,N) /)
  i8i = (/ (i, i=1,N) /)
  r8i = (/ (i, i=1,N) /)

  call MPI_INIT      (ierr)
  call MPI_COMM_SIZE (MPI_COMM_WORLD, nproc,  ierr)
  call MPI_COMM_RANK (MPI_COMM_WORLD, myrank, ierr)

  if (myrank == 0) then
     print *, "Real kind,    digits:", r8, digits (1._r8)
     print *, "Integer kind,   bits:", i8, bit_size (1_i8)
     print *, "Default Integer     :", kind (1), bit_size (1)
  end if

  call MPI_ALLREDUCE (r8i, r8s, N, MPI_REAL8,    MPI_SUM, MPI_COMM_WORLD, ierr)
  if (myrank == 0)    print *, "Sum[real(8)]:", r8s

  call MPI_ALLREDUCE (i4i, i4s, N, MPI_INTEGER4, MPI_SUM, MPI_COMM_WORLD, ierr)
  if (myrank == 0)    print *, "Sum[integer(4)]:", i4s

  call MPI_ALLREDUCE (i8i, i8s, N, MPI_INTEGER8, MPI_SUM, MPI_COMM_WORLD, ierr)
  if (myrank == 0)    print *, "Sum[integer(8)]:", i8s

  call MPI_FINALIZE (ierr)
end program test
