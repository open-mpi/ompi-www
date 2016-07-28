program irecv_issend

  use mpi

  implicit none 
  
  integer, parameter :: N = 10000
  integer :: A(N)
  integer :: i, Node
  integer :: MPIerror, MPIreq, MPIstatus(MPI_STATUS_SIZE)
  logical :: recv

  call MPI_init( MPIerror )

  call MPI_Comm_Rank( MPI_Comm_World, Node, MPIerror )

  A = 10

  ! first the working thing
  print *,'This works: Full Wait'

  do i = 1 , 1000000

     if ( Node == 0 ) then
        A = i
        call MPI_ISSend( A(1) , N , MPI_Integer, &
             1, i, MPI_Comm_World, MPIreq, MPIerror)
     else
        call MPI_IRecv( A(1) , N, MPI_Integer, &
             0, i, MPI_Comm_World, MPIreq, MPIerror )
     end if

     call MPI_Wait(MPIreq,MPIstatus,MPIerror)

  end do

  print *,'This works: non-buffered asynchronous send, blocking recv'

  do i = 1 , 1000000

     if ( Node == 0 ) then
        A = i
        call MPI_ISSend( A(1) , N , MPI_Integer, &
             1, i, MPI_Comm_World, MPIreq, MPIerror)
        call MPI_Wait(MPIreq,MPIstatus,MPIerror)
     else
        call MPI_Recv( A(1) , N, MPI_Integer, &
             0, i, MPI_Comm_World, MPIstatus, MPIerror )
     end if

  end do

  print *,'This does work: non-buffered asynchronous send/recv, only TEST'

  do i = 1 , 1000000

     recv = .false.

     if ( Node == 0 ) then
        A = i
        call MPI_ISSend( A(1) , N , MPI_Integer, &
             1, i, MPI_Comm_World, MPIreq, MPIerror)
     else
        call MPI_IRecv( A(1) , N, MPI_Integer, &
             0, i, MPI_Comm_World, MPIreq, MPIerror )
     end if

     do while ( .not. recv ) 
        call MPI_Test(MPIreq,recv,MPIstatus,MPIerror)
     end do

  end do


  print *,'This does not work: non-buffered asynchronous send/recv, no WAIT'

  do i = 1 , 1000000

     if ( Node == 0 ) then
        A = i
        call MPI_ISSend( A(1) , N , MPI_Integer, &
             1, i, MPI_Comm_World, MPIreq, MPIerror)
     else
        call MPI_IRecv( A(1) , N, MPI_Integer, &
             0, i, MPI_Comm_World, MPIreq, MPIerror )
     end if

  end do

  ! We wait for the last one... 
  call MPI_Wait(MPIreq,MPIstatus,MPIerror)

  call MPI_Finalize(MPIerror)

end program irecv_issend
