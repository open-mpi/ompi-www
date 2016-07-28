program sharetest

! test zero size segment.
! run on at least 3 cpus
! mpirun -np 4 a.out

   use mpi

   use, intrinsic :: iso_c_binding

   implicit none


   !integer, parameter :: nsize = 20
   integer, pointer   :: array(:)
   integer            :: num_procs
   integer            :: ierr
   integer            :: irank, irank_group
   integer            :: win
   integer            :: disp_unit
   integer            :: nodecomm
   type(c_ptr)        :: cp1
   type(c_ptr)        :: cp2

   integer(MPI_ADDRESS_KIND) :: win_size
   integer(MPI_ADDRESS_KIND) :: segment_size

   call MPI_Init(ierr)
   call MPI_Comm_size(MPI_COMM_WORLD, num_procs, ierr)
   call MPI_Comm_rank(MPI_COMM_WORLD, irank, ierr)

   disp_unit = storage_size(1)/8

   win_size = irank*disp_unit

   call MPI_Comm_split_type(MPI_COMM_WORLD, MPI_COMM_TYPE_SHARED, 0, MPI_INFO_NULL, nodecomm, ierr)
   call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL, nodecomm, cp1, win, ierr)
   call MPI_Win_shared_query(win, 0, win_size, disp_unit, cp2, ierr)

!   write(*,*)'rank ', irank,', pointer ',cp1

  !call c_f_pointer(cp1, array, [nsize])
  call c_f_pointer(cp2, array)

77 format(4(A,I3))

   if(irank/=0)then
      array(1)=irank
      CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)
      if(irank/=num_procs-1)then
         print 77, ' rank', irank, ':  array(1)', array(1),' shared with next rank: ',array(irank+1)
      else
         print 77, ' rank', irank, ':  array(1)', array(1),' shared with previous rank: ',array(0)
      endif
      CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)
   else
     CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)
      CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)
     if(.not.associated(array))then
        print 77, 'zero pointer found, rank', irank
     else
        print 77, ' rank', irank, ' array associated '
        print 77, ' rank', irank, ':  array(1) ', array(1),' shared with next rank: ',array(irank+1)
     endif
   endif

   call MPI_Comm_free(nodecomm, ierr)

   call MPI_Finalize(ierr)

 end program sharetest
