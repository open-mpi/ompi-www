program large_mpi_test

  implicit none

  include "mpif.h"

  integer :: num_elements,mode

  real*8, allocatable :: fp_data(:)

  integer :: mp_ierr,mp_rk,mp_size

  character (len=255) :: fn = "test.sta" ! used for mpi-io

  integer :: fh,amode,status(MPI_STATUS_SIZE)
  integer(KIND=MPI_OFFSET_KIND) :: my_global_off

  call mpi_init(mp_ierr)
  call mpi_comm_rank(mpi_comm_world,mp_rk  ,mp_ierr)
  call mpi_comm_size(mpi_comm_world,mp_size,mp_ierr)

  if (mp_rk.eq.0) then
     write(*,*) "mp_size =", mp_size
     write(*,*) "enter number of data elements must be <2147483647"
     write(*,*) "but max be larger than 268435456"
     write(*,*) "the available memory should be larger than 8x this number"
     read(*,*) num_elements
     write(*,*) "size of data", num_elements*8.d0/1024.d0/1024.d0, " MB"
     write(*,*) "tests to use"
     write(*,*) "  1 : send/recv only"
     write(*,*) "  2 : MPI-IO only"
     write(*,*) "  3 : both"
     read(*,*) mode
  end if
  call mpi_bcast(num_elements,1,MPI_INTEGER,0,mpi_comm_world,mp_ierr)
  call mpi_bcast(mode,1,MPI_INTEGER,0,mpi_comm_world,mp_ierr)

  if (mp_rk.eq.0) then
     write(*,*) "allocating memory ..."
  end if
  allocate( fp_data(num_elements) ) ! there's hopefully enough memory
  fp_data(:) = 0

  if ( mode.eq.1 .or. mode.eq.3 ) then
     if (mp_rk.eq.0) then
        write(*,*) "starting send/recv."
        call mpi_send(fp_data,num_elements,MPI_DOUBLE_PRECISION,1,99,mpi_comm_world,mp_ierr)
     end if
     if (mp_rk.eq.1) then
        call mpi_recv(fp_data,num_elements,MPI_DOUBLE_PRECISION,0,99,mpi_comm_world,status,mp_ierr)
        write(*,*) "send/recv done."
     end if
     call mpi_barrier(mpi_comm_world,mp_ierr)
  end if


  if ( mode.eq.2 .or. mode.eq.3 ) then
     if (mp_rk.eq.0) then
        write(*,*) "starting MPI-IO test"
        ! delete old status file (should not procude a visable error if
        ! the file does not exit - and we do not check mp_ierr here)
        call mpi_file_delete(fn,MPI_INFO_NULL,mp_ierr)
     end if

     ! MPI_MODE_CREATE is definitely required as the file has to exist
     ! before! (according to my tests - no idea about the standard)
     amode = IOR(MPI_MODE_WRONLY, MPI_MODE_CREATE)

     call mpi_barrier(mpi_comm_world,mp_ierr)
     call mpi_file_open(MPI_COMM_WORLD,fn,amode,MPI_INFO_NULL,fh,mp_ierr)

     my_global_off = mp_rk ! make type conversin :-)
     my_global_off = (my_global_off*num_elements)*8 ! double_precision=8 assumed

     write(*,*) "rk=", mp_rk, "writing at", my_global_off

     call mpi_file_write_at(fh,my_global_off,fp_data,num_elements, &
         MPI_DOUBLE_PRECISION,status,mp_ierr)

     if ( mp_ierr .ne. MPI_SUCCESS ) then
        write(*,*) "MPI_File_write_at_all() failed - rank", mp_rk, "; error=", mp_ierr
     end if

     call mpi_file_close(fh,mp_ierr)
     if ( mp_ierr .ne. MPI_SUCCESS ) then
        write(*,*) "writing restart data: MPI_File_close() failed - rank", mp_rk
     end if

     if (mp_rk.eq.0) then
        write(*,*) "DONE"
     end if

  end if

  call mpi_finalize(mp_ierr)

end program large_mpi_test