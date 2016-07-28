program child
  USE MPI
  implicit none
  integer :: ierr,size,rank,parent,rsize
  integer :: btest

  call MPI_INIT(ierr)
  call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
  call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
  btest = rank
  call MPI_Comm_get_parent(parent,ierr)
  write(*,1) rank, size, parent
1 format('child ', i1, ' of ', i1, ':  Parent ', i1)

  if ( rank == 0 ) then
    btest = 11
  endif
  call MPI_BCAST( btest, 1, MPI_INTEGER, 0, parent, ierr )
  write(*,2) rank, size, btest
2      format('child ', i1, ' of ', i1, ':  Receiving ', i4, ' from parent')

  call MPI_FINALIZE(ierr)
end program child

