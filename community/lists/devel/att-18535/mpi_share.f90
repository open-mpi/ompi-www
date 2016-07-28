program shmem_mpi

   !
   ! in this example two groups are created, within each group memory is shared.
   ! Still the other group get allocated the same adress space, which it shouldn't.
   !
   ! Run with 4 processes, mpirun -np 4 a.out


   use mpi

   use, intrinsic :: iso_c_binding, only : c_ptr, c_f_pointer

   implicit none
!   include 'mpif.h'

   integer, parameter :: nsize = 100
   integer, pointer   :: array(:)
   integer            :: num_procs
   integer            :: ierr
   integer            :: irank, irank_group
   integer            :: win
   integer            :: comm = MPI_COMM_WORLD
   integer            :: disp_unit
   type(c_ptr)        :: cp1
   type(c_ptr)        :: cp2
   integer            :: comm_group

   integer(MPI_ADDRESS_KIND) :: win_size
   integer(MPI_ADDRESS_KIND) :: segment_size

   call MPI_Init(ierr)
   call MPI_Comm_size(comm, num_procs, ierr)
   call MPI_Comm_rank(comm, irank, ierr)

   disp_unit = sizeof(1)
   call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_group, ierr)
   call MPI_Comm_rank(comm_group, irank_group, ierr)
!   print *, 'irank=', irank, ' group rank=', irank_group

   if (irank_group == 0) then
      win_size = nsize*disp_unit
   else
      win_size = 0
   endif

   call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL, comm_group, cp1, win, ierr)
   call MPI_Win_fence(0, win, ierr)

   call MPI_Win_shared_query(win, 0, segment_size, disp_unit, cp2, ierr)

   call MPI_Win_fence(0, win, ierr)
   CALL MPI_BARRIER(comm, ierr)! allocations finished
!   print *, 'irank=', irank, ' size ', segment_size

   call c_f_pointer(cp2, array, [nsize])

   array(1)=0;array(2)=0
   CALL MPI_BARRIER(comm, ierr)!
77 format(4(A,I3))
   if(irank<num_procs/2)then
      if (irank_group == 0)array(1)=11
      CALL MPI_BARRIER(comm, ierr)
      print 77, 'Group 0, rank', irank, ':  array ', array(1), ' ',array(2)
      CALL MPI_BARRIER(comm, ierr)!Group 1 not yet start writing
      CALL MPI_BARRIER(comm, ierr)!Group 1 finished writing
      print 77, 'Group 0, rank', irank, ':  array ', array(1),' ',array(2) 
      if(array(1)==11.and.array(2)==0)then
         print *,irank,' correct result'
      else
         print *,irank,' wrong result'
      endif
   else
      CALL MPI_BARRIER(comm, ierr)
      CALL MPI_BARRIER(comm, ierr)!Group 0 finished writing
      print 77, 'Group 1, rank', irank, ':  array ', array(1),' ',array(2)
      if (irank_group == 0)array(2)=22
      CALL MPI_BARRIER(comm, ierr)
      print 77, 'Group 1, rank', irank, ':  array ', array(1),' ',array(2)
      if(array(1)==0.and.array(2)==22)then
         print *,irank,' correct result'
      else
         print *,irank,' wrong result'
      endif
   endif

   call MPI_Finalize(ierr)

end program
