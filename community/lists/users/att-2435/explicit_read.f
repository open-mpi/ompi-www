      program explicit_read

      include 'mpif.h'

      parameter( nx=128 )
      real(4) a(nx)
      integer comm_size,comm_rank,status(mpi_status_size)
      integer amode,ierror,fh(100),size_int
      integer (kind=mpi_offset_kind) offset
      character(80) fname

      call mpi_init(ierror)
      call mpi_comm_size(mpi_comm_world,comm_size,ierror)
      call mpi_comm_rank(mpi_comm_world,comm_rank,ierror)

      nxp = nx/comm_size
      ixs = comm_rank*nxp + 1
      ixe = ixs + nxp - 1

      fname = 'data.dat'
      len_fname = index( fname, ' ' ) - 1
      call mpi_file_open(mpi_comm_world,fname(1:len_fname),
     &                   mpi_mode_rdonly,mpi_info_null,fh(1),ierror)

      offset=comm_rank*nxp*4

      call mpi_file_set_view(fh(1),offset,mpi_real,mpi_real,
     &                       'external32',mpi_info_null,ierror)
      call mpi_file_read(fh(1),a(ixs),nxp,mpi_real,status,ierror)

      do ix=ixs, ixe
         write(11+comm_rank,60), ix, a(ix)
60       format(i5,f10.5)
      end do

      call mpi_file_close(fh(1),ierror)
      call mpi_finalize(ierror)

      stop
      end
