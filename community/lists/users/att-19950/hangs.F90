program hangs
  implicit none

  include "mpif.h"

  integer :: myrank, nsize, code
  integer :: targrank
  integer :: timein,timenow


  integer :: WinOnQ
  integer :: IntSize,DispUnit


  integer(MPI_ADDRESS_KIND) :: WinSize
  integer(MPI_ADDRESS_KIND), parameter :: ZeroDisplace = 0

  integer, parameter :: NullAssert = 0
  integer, parameter :: CountOne = 1
  integer, parameter :: QLockFlag = -1




  integer :: GetQRdma

  integer, volatile :: QrdmaAddress



  call MPI_INIT(code)
  call MPI_COMM_RANK(MPI_COMM_WORLD,myrank,code)
  call MPI_COMM_SIZE(MPI_COMM_WORLD,nsize,code)



  QrdmaAddress = 10


!open win
  
  call MPI_TYPE_SIZE(MPI_INTEGER,IntSize,code)
  WinSize = IntSize !one element
  DispUnit = IntSize
  call MPI_WIN_CREATE(QrdmaAddress,WinSize,DispUnit,MPI_INFO_NULL &
       ,MPI_COMM_WORLD,WinOnQ,code)


!rdma lock/get/put/unlock operations

  do targrank = 0,nsize-1

     if (myrank.eq.targrank) cycle


 !    write(*,*)'lock/get/put   || orig= targ= ',myrank,targrank


     call MPI_WIN_LOCK(MPI_LOCK_EXCLUSIVE,targrank,NullAssert,WinOnQ,code)
     
     call MPI_GET(GetQrdma,CountOne,MPI_INTEGER,targrank,ZeroDisplace &
          ,CountOne,MPI_INTEGER,WinOnQ,code)
     
     call MPI_PUT(QLockFlag,CountOne,MPI_INTEGER,targrank,ZeroDisplace &
          ,CountOne,MPI_INTEGER,WinOnQ,code)
     

     call MPI_WIN_UNLOCK(targrank,WinOnQ,code)
     
       
!     write(*,*)'unlocked       || orig= targ= ',myrank,targrank
!     write(*,*)'orig= targ= GetQrdma=          ',myrank,targrank,GetQrdma
      
  enddo

!this fixes the issue, but I don't want sync here obsviously
!  call MPI_BARRIER(MPI_COMM_WORLD,code)


  write(*,*)
  write(*,*)
  write(*,*)'start action for rank= ',myrank

  timein = time()
  do while ((timenow-timein).lt.10)
     timenow = time()
  end do     

  write(*,*) 'action done for rank= ',myrank


  call MPI_WIN_FREE(WinOnQ,code)

  call MPI_BARRIER(MPI_COMM_WORLD,code)
  call MPI_FINALIZE(code)

end program hangs

