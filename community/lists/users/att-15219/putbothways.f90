program puttest
implicit none
include 'mpif.h'

real :: x(3,2,20)
integer :: procid,i,ierr,xwin,info,assert,commgroup,xgroup, &
           sendtype,rectype
integer (kind=MPI_ADDRESS_KIND) :: szbytes
integer, dimension(10) :: senddisp=(/0,2,5,6,9,10,14,16,18,19/), &
                          recdisp=(/1,3,4,7,8,11,12,13,15,17/), &
						  blklen = 3
character (len=10) :: key,value

  call MPI_INIT(ierr)
  call MPI_COMM_RANK(MPI_COMM_WORLD,procid,ierr)

! Send from x(*,1,*), account for second dimension
  senddisp = senddisp*6
  call MPI_TYPE_INDEXED(10,blklen,senddisp,MPI_REAL,sendtype,ierr)
  call MPI_TYPE_COMMIT(sendtype,ierr)
  
! Receive into x(*,2,*)
  recdisp = recdisp*6 + 3
  call MPI_TYPE_INDEXED(10,blklen,recdisp,MPI_REAL,rectype,ierr)
  call MPI_TYPE_COMMIT(rectype,ierr)

! Create window encompassing all of x array
  call MPI_INFO_CREATE(info,ierr)
  key = 'no_locks'
  value = 'true'
  call MPI_INFO_SET(info,key,value,ierr)

  szbytes = 3*2*20*4
  call MPI_WIN_CREATE(x,szbytes,4,info,MPI_COMM_WORLD,xwin,ierr)

! Create groups for POST and START
  call MPI_COMM_GROUP(MPI_COMM_WORLD,commgroup,ierr)
  if (procid == 0) then
    call MPI_GROUP_INCL(commgroup,1,1,xgroup,ierr)
  else
    call MPI_GROUP_INCL(commgroup,1,0,xgroup,ierr)
  end if

! Assign values to x

  x = procid

! Proc 0 and 1 both PUT data into the other's window

  assert = 0
  call MPI_WIN_POST(xgroup,assert,xwin,ierr)
  call MPI_WIN_START(xgroup,assert,xwin,ierr)

  if (procid == 0) then
    call MPI_PUT(x,1,sendtype,1,0,1,rectype,xwin,ierr)
  else
    call MPI_PUT(x,1,sendtype,0,0,1,rectype,xwin,ierr)
  end if
  
  call MPI_WIN_COMPLETE(xwin,ierr)
  call MPI_WIN_WAIT(xwin,ierr)

  if (procid == 0) write(*,*) procid,x
  call MPI_BARRIER(MPI_COMM_WORLD,ierr)
  if (procid == 1) write(*,*) procid,x

  call MPI_WIN_FREE(xwin,ierr)
  call MPI_FINALIZE(ierr)

end program puttest

