program comm_split

  use mpi

  implicit none

  integer :: ierr, Node, Nodes

  integer :: info_MPI

  ! Starts MPI processes ...
  call MPI_Init(ierr) 

  call MPI_Comm_rank(MPI_COMM_WORLD, Node, ierr)
  call MPI_Comm_size(MPI_COMM_WORLD, Nodes, ierr)

  if ( Node == 0 ) then
     write(*,'(/,a,/)')'Example of MPI_Comm_Split_Type'
     write(*,'(a,i0,a/)') 'Currently using ',Nodes,' nodes.'
  end if

  ! Create info object
  call MPI_Info_Create(info_MPI, ierr)

  call create_print_destroy('CU',OMPI_COMM_TYPE_CU,info_MPI)
  call create_print_destroy('Host',OMPI_COMM_TYPE_HOST,info_MPI)
  call create_print_destroy('Board',OMPI_COMM_TYPE_BOARD,info_MPI)
  call create_print_destroy('Node',OMPI_COMM_TYPE_NODE,info_MPI)
  call create_print_destroy('Shared',MPI_COMM_TYPE_SHARED,info_MPI) !STANDARD
  call create_print_destroy('Numa',OMPI_COMM_TYPE_NUMA,info_MPI)
  call create_print_destroy('Socket',OMPI_COMM_TYPE_SOCKET,info_MPI)
  call create_print_destroy('L3',OMPI_COMM_TYPE_L3CACHE,info_MPI)
  call create_print_destroy('L2',OMPI_COMM_TYPE_L2CACHE,info_MPI)
  call create_print_destroy('L1',OMPI_COMM_TYPE_L1CACHE,info_MPI)
  call create_print_destroy('Core',OMPI_COMM_TYPE_CORE,info_MPI)
  call create_print_destroy('HW',OMPI_COMM_TYPE_HWTHREAD,info_MPI)

  call MPI_Info_Free(info_MPI, ierr)
  
  call MPI_Finalize(ierr)                        !! let MPI finish up ...

contains 

  subroutine create_print_destroy(arg,split_type,info_MPI)
    character(len=*), intent(in) :: arg
    integer, intent(in) :: split_type, info_MPI
    integer :: Comm, lRank, lRanks, ierr

    ! They all have same key (sorting key)
    call MPI_Comm_Split_Type(MPI_Comm_World, split_type, 0, info_MPI, Comm, ierr)
    if ( ierr /= 0 ) then
       print '(a)','Error on creating communicator: '//arg
       return
    end if

    call MPI_Comm_rank(Comm, lRank, ierr)
    call MPI_Comm_size(Comm, lRanks, ierr)
    
    print '(a,3(i3,a))','Comm using '//arg//' Node: ', &
         Node, ' local rank: ',lRank,' out of ',lRanks,' ranks'
    flush(6)
    call MPI_Barrier(MPI_COMM_World,ierr)
    
    call MPI_COMM_FREE(Comm,ierr)
    if ( ierr /= 0 ) print '(a)','Error on freeing communicator: '//arg
    if ( Node == 0 ) print *,'' ! new-line
    
  end subroutine create_print_destroy
  
end program comm_split
