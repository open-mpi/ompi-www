program parent
  USE MPI
  implicit none
  integer :: ierr,size,rank,child
  integer  (kind=MPI_ADDRESS_KIND) :: universe_size
  integer :: status(MPI_STATUS_SIZE)
  logical :: flag
  integer :: btest
  integer :: k, subprocesses

  call MPI_INIT(ierr)
  call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
  call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)

  if ( size /= 1 ) then
    if ( rank == 0 ) then
      write(*,*) 'parent: Only one master process permitted'
    else
      call MPI_FINALIZE(ierr)
      stop
    end if
  end if

  write(*,*) 'parent: ', Rank, ' of ', size
  call MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, &
              universe_size, flag, ierr)
  if ( .not. flag ) then
    stop
  else if ( universe_size < 2 ) then
    write(*,*) 'parent: How many processes total?'
    read(*,*) universe_size
  end if
  subprocesses = universe_size-1
  write(*,*) 'parent: Calling MPI_Comm_spawn to start ', &
              subprocesses, ' subprocesses.'
  if ( subprocesses < 1 ) stop
  call MPI_Comm_spawn('child', MPI_ARGV_NULL, subprocesses, &
    MPI_INFO_NULL, 0, MPI_COMM_WORLD, child, MPI_ERRCODES_IGNORE, ierr )

  btest = 17
  write(*,*) 'parent: Calling MPI_BCAST with btest = ', btest, &
             '.  child = ', child
  call MPI_BCAST( btest, 1, MPI_INTEGER, MPI_ROOT, child, ierr )

  call MPI_COMM_FREE(child,ierr)
  call MPI_FINALIZE(ierr)
end

