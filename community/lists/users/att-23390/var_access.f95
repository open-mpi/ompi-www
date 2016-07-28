program var_access
!use mpi

implicit none
include 'mpif.h'

integer ierr
integer i
integer rank
integer disp_int
integer X, Y, Z
integer S
parameter (S = 10)
integer A(S)
integer AYS
integer win, NP
integer (kind=MPI_ADDRESS_KIND) lowerbound, size, realextent, disp_aint
integer n
integer, allocatable :: seed(:)
real rnd(3)

call MPI_Init(ierr)
call MPI_Comm_size(MPI_COMM_WORLD,NP,ierr)
call MPI_Comm_rank(MPI_COMM_WORLD,rank,ierr)

! Produce random numbers
call random_seed(size = n)
allocate(seed(n))
do i=1, n
    seed(i) = i
end do
call random_seed(put = seed)
call random_number(rnd)
X = floor(NP*rnd(1))
Y = floor(NP*rnd(2))
Z = ceiling(S*rnd(3))

! Determine the size of one data element in the array in bytes
call MPI_Type_get_extent(MPI_INT, lowerbound, realextent, ierr)
disp_int = realextent
! Determine the size of the entire data array in bytes
size = S * realextent
! create the actual memory window
call MPI_Win_create(A, size, disp_int ,MPI_INFO_NULL, MPI_COMM_WORLD, win, ierr)

! Fill array A with some data
call MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, win, 0, ierr)
do i = 1, S
    A(i) = S * rank + i
    write (*,*) rank, i, A(i)
end do
call MPI_Win_unlock(rank, win, ierr)
call MPI_Barrier(MPI_COMM_WORLD, ierr)

! Access and print data
if(rank .eq. X) then
    disp_aint = Z - 1
    call MPI_Win_lock(MPI_LOCK_EXCLUSIVE, Y, win, 0, ierr)
    call MPI_Get(AYS, 1, MPI_INT, Y, disp_aint, 1, MPI_INT, win, ierr)
    call MPI_Win_unlock(Y, win, ierr)
    write (*,*) Y,Z,"# ", AYS
endif

call MPI_Win_free(win, ierr)
call MPI_Finalize(ierr)

end program var_access
