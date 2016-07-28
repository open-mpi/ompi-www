program puttest
implicit none
include 'mpif.h'

double precision :: x(6,2,200000)
real,dimension(500) :: randomx
integer :: procid,i,ierr,xwin,info,assert,commgroup,xgroup, &
           sendtype,rectype
integer (kind=MPI_ADDRESS_KIND) :: szbytes,zerodisp=0
!integer, dimension(10) :: disp=(/1,0,200,199999,5000,140000,60000,90000,180000,100000/), &
!						  blklen = 6
integer, dimension(500) :: disp, blklen=6
character (len=10) :: key,value

  call MPI_INIT(ierr)
  call MPI_COMM_RANK(MPI_COMM_WORLD,procid,ierr)

! Generate large number of random displacements, make last displacement end of array
  call random_number(randomx)
  disp = int(200000*randomx)
  disp(500) = 199999
  
! Send from x(*,1,*), account for second dimension
  disp = disp*12
  call MPI_TYPE_INDEXED(500,blklen,disp,MPI_DOUBLE_PRECISION,sendtype,ierr)
  call MPI_TYPE_COMMIT(sendtype,ierr)
  
! Receive into x(*,2,*)
  disp = disp + 6
  call MPI_TYPE_INDEXED(500,blklen,disp,MPI_DOUBLE_PRECISION,rectype,ierr)
  call MPI_TYPE_COMMIT(rectype,ierr)

! Create window encompassing all of x array
  call MPI_INFO_CREATE(info,ierr)
  key = 'no_locks'
  value = 'true'
  call MPI_INFO_SET(info,key,value,ierr)

  szbytes = 6*2*200000*8
  call MPI_WIN_CREATE(x,szbytes,8,info,MPI_COMM_WORLD,xwin,ierr)

! Create groups for POST and START
  call MPI_COMM_GROUP(MPI_COMM_WORLD,commgroup,ierr)
  if (procid == 0) then
    call MPI_GROUP_INCL(commgroup,1,1,xgroup,ierr)
  else
    call MPI_GROUP_INCL(commgroup,1,0,xgroup,ierr)
  end if

! Assign values to x
  call random_number(x)
  x = x + procid

! Proc 0 and 1 both PUT data into the other's window

  assert = 0
  call MPI_WIN_POST(xgroup,assert,xwin,ierr)
  call MPI_WIN_START(xgroup,assert,xwin,ierr)

  if (procid == 0) then
    call MPI_PUT(x,1,sendtype,1,zerodisp,1,rectype,xwin,ierr)
  else
    call MPI_PUT(x,1,sendtype,0,zerodisp,1,rectype,xwin,ierr)
  end if
  
  call MPI_WIN_COMPLETE(xwin,ierr)
  call MPI_WIN_WAIT(xwin,ierr)

  if (procid == 0) write(*,*) procid,x(:,:,200000)
  call MPI_BARRIER(MPI_COMM_WORLD,ierr)
  if (procid == 1) write(*,*) procid,x(:,:,200000)

  call MPI_WIN_FREE(xwin,ierr)
  call MPI_FINALIZE(ierr)

end program puttest

