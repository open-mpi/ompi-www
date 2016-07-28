Module global
  implicit none
  include 'mpif.h'

! Handle for MPI_Type_create_struct
  Integer                                 :: my_mpi_struct

  Type my_fortran_struct
! With the following line the bug bites, with it commented out the
! behaviour is as expected
     Integer                              :: unused_data
     Integer                              :: used_data
  End Type my_fortran_struct

End Module global


! -----------------------------------------------------


Program mpi_gather_test
  use global

  Integer            :: i
  Integer            :: nranks
  Integer, Parameter :: gather_target = 1
  Integer            :: rank
  Integer            :: ierror

  Type (my_fortran_struct), Pointer     :: source_vector (:)
  Type (my_fortran_struct), Pointer     :: dest_vector(:)

  call MPI_Init ( ierror )
  call MPI_Comm_rank ( MPI_COMM_WORLD, rank, ierror )
  call MPI_Comm_size ( MPI_COMM_WORLD, nranks, ierror )

  Allocate (source_vector(1), STAT = ierror)
  Allocate (dest_vector(1:nranks), STAT = ierror)

! Each rank initializes the data to be gathered to its rank number
! for tracing purposes (So we can see what goes where)
  source_vector(:)%used_data = rank

! Each rank initializes the target buffer with tracing data. The
! expectation is that on the root rank this will be completely over-
! written while on the rest of the ranks it will be unchanged.
  do i = 1, nranks
     dest_vector(i)%used_data = 10 * i + rank * 100 + 1000
  enddo

! Call the subroutine below that creates the MPI-datatype.
  call create_datatype ( ierror )

! Run the actual gather.
  call MPI_Gather (source_vector, 1,              my_mpi_struct, &
                   dest_vector,   1,              my_mpi_struct, &
                   gather_target, MPI_COMM_WORLD, ierror)

! Output the content of the used_data part of the dest_vector on
! all ranks. On the root-rank of the gather it is expected that the
! initial data is overwritten with the data from the source_vectors
! gathered from all ranks.
  do i = 1, nranks
     print *, 'rank:', rank, 'element:', i, 'dest_vector%used_data: ', &
              dest_vector(i)%used_data
  enddo
  
  call MPI_Finalize (ierror)
end program mpi_gather_test


! -----------------------------------------------------


subroutine create_datatype (ierror)
  use global

  integer, Intent (Out) :: ierror

  integer (kind=MPI_ADDRESS_KIND) :: start, loc_used_data, loc_ub
  integer (kind=MPI_ADDRESS_KIND) :: disp (3)
  integer                         :: lengths (3), types (3), ext_size

  Type (my_fortran_struct)              :: template (2)

  ierror = 0

! Get the offsets (displacements) from the template vector of
! my_fortran_struct type
  call MPI_Get_address (template(1), start, ierror)
  call MPI_Get_address (template(1)%used_data, loc_used_data, ierror)
  call MPI_Get_address (template(2), loc_ub, ierror)

  disp (1)     = 0
  disp (2)     = loc_used_data - start
  disp (3)     = loc_ub        - start

  lengths (1:3) = 1

  types (1) = MPI_LB
  types (2) = MPI_INTEGER
  types (3) = MPI_UB

! Create the MPI-type
  call MPI_Type_create_struct (3, lengths, disp, types, &
       my_mpi_struct, ierror)

  call MPI_Type_commit (my_mpi_struct, ierror)

end subroutine create_datatype

