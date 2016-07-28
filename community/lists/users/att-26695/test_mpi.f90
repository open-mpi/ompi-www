program test
  implicit none
  include 'mpif.h'

  integer,parameter :: n=1000
  integer,dimension(n) :: blocklengths, types
  integer(kind=mpi_address_kind),dimension(n) :: displacements
  integer :: ierr, info, datatype, nsize, window, iproc, nproc, size_of_double, i
  real(kind=8),dimension(n) :: sendbuffer, receivebuffer

  ! Initialize
  call mpi_init(ierr)
  call mpi_comm_size(mpi_comm_world, nproc, ierr)
  call mpi_comm_rank(mpi_comm_world, iproc, ierr)

  write(*,'(2(a,i0))') 'This is task ', iproc, ' out of ',  nproc

  ! Create the window
  call mpi_type_size(mpi_double_precision, size_of_double, ierr)
  call mpi_info_create(info, ierr)
  call mpi_info_set(info, "no_locks", "true", ierr)
  call mpi_win_create(sendbuffer, int(n*size_of_double,kind=mpi_address_kind), &
       size_of_double, info, mpi_comm_world, window, ierr)
  call mpi_info_free(info, ierr)
  call mpi_win_fence(mpi_mode_noprecede, window, ierr)

  ! Create the derived datatype, which just takes n contiguous elements
  do i=1,n
      blocklengths(i) = 1
      displacements(i) = int((i-1)*size_of_double,kind=mpi_address_kind)
      types(:) = mpi_double_precision
  end do
  call mpi_type_create_struct(n, blocklengths, displacements, types, datatype, ierr)
  call mpi_type_commit(datatype, ierr)
  call mpi_type_size(datatype, nsize, ierr)
  nsize = nsize/size_of_double

  ! Do the communucation
  write(*,'(3(a,i0))') 'Task ', iproc, ' gets ', nsize, ' elements from task ', mod(iproc+1,nproc)
  call mpi_get(receivebuffer, nsize, mpi_double_precision, mod(iproc+1,nproc), &
       int(0,kind=mpi_address_kind), 1, datatype, window, ierr)

  ! Wait for the communication to complete
  write(*,'(a,i0,a)') 'Task ', iproc, ' is at the fence'
  call mpi_win_fence(0, window, ierr)

  ! Free window and type, and finalize
  call mpi_win_free(window, ierr)
  call mpi_type_free(datatype, ierr)
  call mpi_finalize(ierr)

  write(*,'(a,i0,a)') 'Task ', iproc, ' is at the end'

end program test
