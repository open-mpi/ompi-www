      program explicit_write

      include 'mpif.h'

      parameter( nx=128 )
      real(4) a(nx)
      integer comm_size,comm_rank,status(mpi_status_size)
      integer amode,ierror,fh(100)
      integer (kind=mpi_offset_kind) offset
      character(80) fname

      call mpi_init(ierror)
      call mpi_comm_size(mpi_comm_world,comm_size,ierror)
      call mpi_comm_rank(mpi_comm_world,comm_rank,ierror)

      do i=1, nx
         a(i) = float(i)
      end do

      nxp = nx/comm_size
      ixs = comm_rank*nxp + 1
      ixe = ixs + nxp - 1

      amode=ior(mpi_mode_create,mpi_mode_wronly)
      
      fname = 'data.dat'
      len_fname = index( fname, ' ' ) - 1
      call mpi_file_open(mpi_comm_world,fname(1:len_fname),
     &                   amode,mpi_info_null,fh(1),ierror)

      offset=comm_rank*nxp*4

      call mpi_file_set_view(fh(1),offset,mpi_real,mpi_real,
     &                       'external32',mpi_info_null,ierror)
      call mpi_file_write(fh(1),a(ixs),nxp,mpi_real,status,ierror)

c      write(6,10) comm_rank, offset, ixs, ixe, comm_size
c10    format(6i5)

      call mpi_file_close(fh(1),ierror)
      call mpi_finalize(ierror)

      stop
      end
