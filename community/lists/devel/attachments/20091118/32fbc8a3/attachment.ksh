  include "mpif.h"
  integer, parameter :: nbufbytes = 16000000, nsendbytes = 15892480
  real(8) buf(nbufbytes/8), x(nsendbytes/8), t
  real(8) buf2
  integer mbufbytes

  call MPI_Init(ier)
  call MPI_Comm_size(MPI_COMM_WORLD,np,ier)
  call MPI_Comm_rank(MPI_COMM_WORLD,me,ier)
  buf = 0.d0
  x   = 0.d0

  if ( me == 1 ) call MPI_Buffer_attach(buf, nbufbytes, ier)

  do i = 1, 5
    call MPI_Barrier(MPI_COMM_WORLD,ier)
    t = MPI_Wtime()
    if ( me == 0 ) call MPI_Recv (x,nsendbytes,MPI_BYTE,1,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE,ier)
    if ( me == 1 ) call MPI_Bsend(x,nsendbytes,MPI_BYTE,0,343,MPI_COMM_WORLD,                  ier)
    t = MPI_Wtime() - t
    write(6,'(i4,f12.6,f8.3)') me, t
  end do

#ifdef DETACH
  if ( me == 1 ) call MPI_Buffer_detach(buf2, mbufbytes, ier)
#endif

  call MPI_Finalize(ier)
end
