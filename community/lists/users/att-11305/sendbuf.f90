program sendbuf

  implicit none

  include 'mpif.h'
  integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)

  integer :: vec_size,vec_per_proc,vec_ind,ivec,irank

  complex*16, dimension(:,:), allocatable :: vec
   
  call MPI_INIT(ierror)
  call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
  call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
  !print*, 'node', rank, ': Hello world'

  vec_size=2**15
  vec_per_proc=50

  allocate(vec(vec_size,vec_per_proc*(size-1)))

  vec=cmplx(0.0d0,0.0d0,kind(0.0d0))
  
  call sleep(2)

  if( rank .eq. 0 )then
     write (6,*) 'master',rank,vec_size

     do irank=1,size-1
        do ivec=1,vec_per_proc
           write (6,*) 'irank=',irank,'ivec=',ivec
           vec_ind=(irank-1)*vec_per_proc+ivec
           call MPI_RECV( vec(1,vec_ind), vec_size, MPI_DOUBLE_COMPLEX, irank, &
                vec_ind, MPI_COMM_WORLD, status, ierror)
        end do
     end do
  else
     do ivec=1,vec_per_proc
        vec_ind=(rank-1)*vec_per_proc+ivec
        write (6,*) 'rank=',rank,'ivec=',ivec
        call MPI_SEND( vec(1,vec_ind), vec_size, MPI_DOUBLE_COMPLEX, 0, &
             vec_ind, MPI_COMM_WORLD, ierror)
     end do
  end if

  deallocate(vec)

  call MPI_FINALIZE(ierror)


  stop
end program sendbuf


