program mpi_sum_test
implicit none

include 'mpif.h'

integer, parameter :: my_int_kind = selected_int_kind(9)
integer(kind=my_int_kind) :: my_ints
integer(kind=my_int_kind) :: my_ints_sum

integer :: test_fortran_integer_handle
integer :: test_fortran_integer_size
integer :: ierror
integer :: node_num
integer :: num_nodes

call mpi_init(ierror)
call mpi_comm_rank(mpi_comm_world, node_num, ierror)
call mpi_comm_size(mpi_comm_world, num_nodes, ierror)

call mpi_type_create_f90_integer(9, test_fortran_integer_handle, ierror)
test_fortran_integer_size = sizeof(my_ints)
if (node_num == 0) write (*,*) 'integer handle created as: ', test_fortran_integer_handle, ' mpi_int is ', mpi_int

! *** An error occurred in MPI_Reduce: the reduction operation MPI_SUM is not defined for non-intrinsic datatypes
! (attempted with datatype named "Dup MPI_INT")
! Uncomment next line to make this program work (since MPI reports my handle is a duplicate of MPI_INT we can just use that):
!test_fortran_integer_handle = mpi_int

my_ints = int(node_num+1, kind=my_int_kind)

call mpi_reduce(my_ints, my_ints_sum, 1, test_fortran_integer_handle, mpi_sum, 0, mpi_comm_world, ierror)

if (node_num == 0) write (*,*) 'Sum = ', my_ints_sum

call mpi_finalize(ierror)

end program mpi_sum_test

