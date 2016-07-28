program test
  implicit none
  include 'mpif.h'

  integer,parameter :: n=1000
  integer,dimension(n) :: blocklengths, types
  integer(kind=mpi_address_kind),dimension(n) :: displacements
  integer :: ierr, info, datatype, nsize, window, iproc, nproc, size_of_double, i, tag
  real(kind=8),dimension(n) :: sendbuffer, receivebuffer

  ! Initialize
  call mpi_init(ierr)
  call mpi_comm_size(mpi_comm_world, nproc, ierr)
  call mpi_comm_rank(mpi_comm_world, iproc, ierr)

  write(*,'(2(a,i0))') 'This is task ', iproc, ' out of ',  nproc

  ! Determine the size of a double
  call mpi_type_size(mpi_double_precision, size_of_double, ierr)

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

  ! Send the data
  write(*,'(3(a,i0))') 'Task ', iproc, ' sends data of size ', nsize, ' to task ', modulo(iproc-1,nproc)
  call mpi_send(sendbuffer, 1, datatype, modulo(iproc-1,nproc), &
       tag, mpi_comm_world, ierr)

  ! Receive the data
  write(*,'(3(a,i0))') 'Task ', iproc, ' receives ', nsize, ' elements from task ', modulo(iproc+1,nproc)
  call mpi_recv(receivebuffer, nsize, mpi_double_precision, modulo(iproc+1,nproc), tag, &
       mpi_comm_world, mpi_status_ignore, ierr)

  ! Free the type and finalize
  call mpi_type_free(datatype, ierr)
  call mpi_finalize(ierr)

  write(*,'(a,i0,a)') 'Task ', iproc, ' is at the end'

end program test
