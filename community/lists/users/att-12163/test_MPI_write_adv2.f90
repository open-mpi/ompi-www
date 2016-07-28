program test_MPI_write_adv2


  !-- Template for any mpi program

  implicit none    

  !--Include the mpi header file
  include 'mpif.h'              ! --> Required statement

  !--Declare all variables and arrays.
  integer :: fh, ierr, myid, numprocs, itag, etype, filetype, info
  integer :: status(MPI_STATUS_SIZE)
  integer :: irc, ip
  integer(kind=mpi_offset_kind) :: offset, disp
  integer :: i, j, k
  
  integer :: num
  
  character(len=64) :: filename
  
  real(8), pointer :: q(:), temp(:)
  integer, pointer :: map(:)
  integer :: single_no, count
  
  
  !--Initialize MPI
  call MPI_INIT( ierr )         ! --> Required statement
  
  !--Who am I? --- get my rank=myid
  call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
  
  !--How many processes in the global group?
  call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
  
  if ( myid == 0 ) then
     single_no = 4
  elseif ( myid == 1 ) then
     single_no = 2
  elseif ( myid == 2 ) then
     single_no = 2
  elseif ( myid == 3 ) then
     single_no = 3
  else
     single_no = 0
  end if

  if (single_no .gt. 0) allocate(map(single_no))

  if ( myid == 0 ) then
     map = (/ 0, 2, 5, 6 /)
  elseif ( myid == 1 ) then
     map = (/ 1, 4 /)
  elseif ( myid == 2 ) then
     map = (/ 3, 9 /)
  elseif ( myid == 3 ) then
     map = (/ 7, 8, 10 /)
  end if

  if (single_no .gt. 0) allocate(q(single_no))
    
  if (single_no .gt. 0) then
     do i = 1,single_no
        q(i) = dble(myid+1)*100.0d0 + dble(map(i)+1) 
     end do
  end if
  
  !if (single_no .gt. 0) map = map + 1

  if ( myid == 0 ) then
     count = 1
  else
     count = 0
  end if

  if (count .gt. 0) then
     allocate(temp(count))
     temp(1) = 2122010.0d0
  end if

  write(filename,'(a)') 'test_write.bin' 
  
  call MPI_FILE_OPEN(MPI_COMM_WORLD, filename, MPI_MODE_RDWR+MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)

  if (myid == 0) then
     call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
     write(*,*) "myid =", myid, "right after writing temp!"
  end if

  call MPI_TYPE_CREATE_INDEXED_BLOCK(single_no, 1, map, MPI_DOUBLE_PRECISION, filetype, ierr)
  call MPI_TYPE_COMMIT(filetype, ierr)
  disp = 8
  call MPI_FILE_SET_VIEW(fh, disp, MPI_DOUBLE_PRECISION, filetype, 'native', MPI_INFO_NULL, ierr)
  write(*,*) "myid = ", myid, "after MPI_FILE_SET_VIEW!"
  call MPI_FILE_WRITE_ALL(fh, q, single_no, MPI_DOUBLE_PRECISION, status, ierr)
  call MPI_FILE_CLOSE(fh, ierr)  


  !print*, 'myid =', myid, 'q=', q
  
  if (single_no .gt. 0) deallocate(map)

  if (single_no .gt. 0) deallocate(q)
  
  if (count .gt. 0) deallocate(temp)
  
  !--Finilize MPI
  call MPI_FINALIZE(irc)        ! ---> Required statement
  
  stop
  
  
end program test_MPI_write_adv2
