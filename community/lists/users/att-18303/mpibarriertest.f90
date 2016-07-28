module data1
 real, dimension(:,:,:), pointer :: rData
 integer :: iNx=10, iNy=20,iNz=2
end module data1

module maths
   
! in 1-10
   integer :: iRandom 
 
contains



integer function iSleep()

 integer :: iFlag=1
 real :: rRand

 call random_seed()
 call random_number(rRand)
 iSleep=int(rRand/0.1)

end function iSleep


end module maths

module ParallelMain
  include 'mpif.h'

  integer :: iMyRank
  integer :: iNumProcs
  integer :: iCommunicator

end module ParallelMain



program BarrierTest
use ParallelMain
use data1


implicit none
!
  integer :: iErrFlag
  character(30) ::  sTestFile1="testfile1.out"
  character(30) ::  sTestFile2="testfile2.out"
  character(30) ::  sTestFile3="testfile3.out"

! In the first instance - initialise MPI
  call Start_MPI()
  call MPI_Barrier(iCommunicator, iErrFlag) 


  allocate(rData(iNx,iNy,iNz))

  call docalc

  call MPI_Barrier(iCommunicator, iErrFlag) 
  if(iErrFlag.ne.MPI_SUCCESS ) print *, "1st barrier  failed"
  call writedata(sTestFile1)

  call MPI_Barrier(iCommunicator, iErrFlag)
  if(iErrFlag.ne.MPI_SUCCESS ) print *, "2nd barrier  failed"
  call writedata(sTestFile2)

  call MPI_Barrier(iCommunicator, iErrFlag)
  if(iErrFlag.ne.MPI_SUCCESS ) print *, "3rd barrier  failed"
  call writedata(sTestFile3)

  call MPI_Finalize(iErrFlag)
  if(iErrFlag.ne.MPI_SUCCESS ) print *, "Finalize failed"
  stop
end program 



!> Start timer and comm initialisation for MPI
subroutine Start_MPI()
  use ParallelMain

!not error flag always local otherwise it is a mess!
  integer :: iErrFlag(3)
! start initialising
  iErrFlag=0
  call MPI_Init(iErrFlag(1))
  iCommunicator=MPI_COMM_WORLD
  call MPI_Comm_Size(iCommunicator,iNumProcs,iErrFlag(2))
  call MPI_Comm_Rank(iCommunicator,iMyRank,iErrFlag(3))
  if(maxval(iErrFlag).ne.0) print *, "MPI Initialisation problem"
end subroutine Start_MPI
!

subroutine docalc
 use ParallelMain
 use data1
 use maths
! 
 integer :: i,j,k

 real :: rRand
!!
!
 do k=1,iNz
  do j=1,iNy
   do i=1,iNx
     call Random_number(rRand)
    rData(i,j,k) = rRand
   end do
  end do
 end do
! do random "work"
 i=iSleep()
 print *, iMyRank, " is working for ",i," seconds "
 call sleep(i)
end subroutine docalc

subroutine writedata(sFileName)
 use ParallelMain
 use data1
 implicit none
!
 logical :: lFileExists
 integer :: iErrMPI,i,j,k,n
 character*(*), intent(in) :: sFileName
!

 if(iMyRank.eq.0) print *, "Writing data"
!> 1) if file does not exist - write file header
 inquire(file="init.out", exist=lFileExists)
 if(.not.lFileExists) then
  if(iMyRank.eq.0) then	
   print *, "File: init.out not there, need to create it."
   print *, "File: init.out writing header."
   open(unit=10, file="init.out", status="new")
   write (10,*) "Header: ",iNx,iNy,iNz
   close(10)
  end if
!> 2) now each process appends its own data
   do n=1,iNumProcs
    call MPI_Barrier(iCommunicator, iErrMPI)
    if(iErrMPI.ne.MPI_SUCCESS )  print *, "1st inner barrier error"
    if(iMyRank.ne.n) cycle
!> test file
    inquire(file="init.out", exist=lFileExists)
    do while (.not.lFileExists)
     call sleep(1)
     inquire(file="init.out", exist=lFileExists)
    end do 
!>
   open(unit=1, file="init.out")
   write (1,*) "Processor portion: ",iMyRank
!> write data
    do k=1,iNz
     do j=1,iNy   
      do i=1,iNx
       write (1,"(3I,2E15.6)") k,j,i, rData(i,j,k)
      end do
     end do
    end do
    close(1)
   end do
  end if
!> 1) if file does not exist - write file header
 inquire(file=sFileName, exist=lFileExists)
 if(.not.lFileExists) then
  if(iMyRank.eq.0) then	
   print *, "File: ",trim(sFileName), " not there, need to create it."
   open(unit=1, file=sFileName)
   write (1,*) "Header: ",iNx,iNy,iNz
   close(1)
  end if
!> 2) now each process appends its own data
   do n=1,iNumProcs
    call MPI_Barrier(iCommunicator, iErrMPI)
    if(iErrMPI.ne.MPI_SUCCESS )  print *, "1st inner barrier error"
    if(iMyRank.ne.n-1) cycle
!> test file
    inquire(file=sFileName, exist=lFileExists)
    do while (.not.lFileExists)
     call sleep(1)
     inquire(file=sFileName, exist=lFileExists)
    end do 
!>
   open(unit=1, file=sFileName)
   write (1,*) "Processor portion: ",iMyRank
!> write data
    do k=1,iNz
     do j=1,iNy   
      do i=1,iNx    
       write (1,"(3I,2E15.6)") k,j,i, rData(i,j,k)
      end do
     end do
    end do
    close(1)
   end do
  end if
!
  if(iMyRank.eq.0) print *, "Done writing data"
!
end subroutine writedata
