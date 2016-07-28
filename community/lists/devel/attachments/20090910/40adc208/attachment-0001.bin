program get_file_size
  implicit none

  include 'mpif.h'

  integer :: error
  integer :: rank
  integer :: fh
  integer (kind=MPI_OFFSET_KIND) :: file_size
  character (len=*), parameter :: file_name = 'delme.dat'

  call mpi_init(error)
  call mpi_assert_success(error)

  call mpi_comm_rank(MPI_COMM_WORLD, rank, error)
  call mpi_assert_success(error)

  if (rank.eq.0) write(*,'(a,a,a)') 'file size of ', file_name, ':'

  call mpi_file_open(MPI_COMM_WORLD, file_name, MPI_MODE_RDONLY,             &
                     MPI_INFO_NULL, fh, error)
  call mpi_assert_success(error)

  call mpi_file_get_size(fh, file_size, error)
  call mpi_assert_success(error)

  write(*,'(a,i0,a,i0,a,e9.3,a)') '[', rank, '] file size = ', file_size,        &
          ' bytes, ', float(file_size) / 2**20, ' MB'

  call mpi_file_close(fh, error)
  call mpi_assert_success(error)

  call mpi_finalize(error)
  call mpi_assert_success(error)

  contains

  subroutine mpi_assert_success(error)
    integer :: error
    character (len=MPI_MAX_ERROR_STRING) :: error_string
    integer :: string_length, error_code

    if (error.ne.MPI_SUCCESS) then
      call mpi_error_string(error, error_string, string_length, error_code)

      write(*,'(a,i0,a,i0,x,a)') '# [', rank,                                  &
          '] ERROR: mpi_assert_success failed with error code: ',              &
          error, error_string

      stop
    end if

  end subroutine mpi_assert_success


end program get_file_size