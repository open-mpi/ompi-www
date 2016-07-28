program test
  implicit none
  include 'mpif.h'

  ! Variables
  integer :: iproc, nproc, ierr

  call mpi_init(ierr)
  call mpi_comm_size(mpi_comm_world, nproc, ierr)
  call mpi_comm_rank(mpi_comm_world, iproc, ierr)

  write(*,'(2(a,i0))') 'I am task ',iproc,' out of ',nproc

  call test_mpi_get(iproc, nproc)

  write(*,'(a,i0,a)') 'task ',iproc,' is at the end of the program'

  call mpi_finalize(ierr)


end program test



subroutine test_mpi_get(iproc, nproc)
  implicit none
  include 'mpif.h'

  ! Calling arguments
  integer,intent(in) :: iproc, nproc

  ! Local ariables
  integer,parameter :: n=1
  real(kind=8),dimension(n) :: sendbuf, recvbuf
  integer :: window, size_of_double, ierr, mpi_type, nsize, nelements

  ! Initialize sendbuf on process 0.
  if (iproc==0) then
      sendbuf=51.d0
  end if

  ! Size of a double precision number in bytes.
  call mpi_type_size(mpi_double_precision, size_of_double, ierr)

  ! Create the memory window at sendbuf.
  call mpi_win_create(sendbuf(1), int(n*size_of_double,kind=mpi_address_kind), size_of_double, &
       mpi_info_null, mpi_comm_world, window, ierr)

  ! Synchronize.
  call mpi_win_fence(0, window, ierr)

  ! Create a new derived datatype (should be identical to a double
  ! precision number).
  call mpi_type_create_hvector(1, 1, int(0,kind=mpi_address_kind), &
       mpi_double_precision, mpi_type, ierr)
  call mpi_type_commit(mpi_type, ierr)

  ! Size of the datatype in bytes.
  call mpi_type_size(mpi_type, nsize, ierr)

  ! Number of double precision elements that are communicated.
  nelements=nsize/size_of_double
  write(*,*)'nelements,nsize,size_of_double',nelements,nsize,size_of_double

  ! Communicate the data from process 0 to all other process, i.e. transfer them from 
  ! the memory window (at sendbuf) to the receive buffer (recvbuf).
  if (iproc/=0) then
      call mpi_get(recvbuf(1), nelements, &
           mpi_double_precision, 0, int(0,kind=mpi_address_kind), &
           1, mpi_type, window, ierr)
  end if

  ! Free the derived datatype. According to the MPI standard this should
  ! not affect the communication.
  call mpi_type_free(mpi_type, ierr)

  ! Synchronize. Here the code crashes with a segfault.
  call mpi_win_fence(0, window, ierr)

  ! Free the window.
  call mpi_win_free(window, ierr)

  ! Write the results.
  if (iproc/=0) then
      write(*,'(a,i0,a,es9.2)') 'process ',iproc,' received the value ',recvbuf(1)
  end if

end subroutine test_mpi_get




