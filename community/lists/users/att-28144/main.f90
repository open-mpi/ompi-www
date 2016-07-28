program example
use mpi
integer:: ierr
integer(MPI_OFFSET_KIND) :: fileOffset
integer(KIND=MPI_OFFSET_KIND):: fileSize
real :: outData(10)
integer :: resUnit=565
 call MPI_INIT(ierr)
 call MPI_file_open(MPI_COMM_WORLD,  'out.txt',   MPI_MODE_WRONLY + MPI_MODE_APPEND,  MPI_INFO_NULL,  resUnit, ierr)
 
 call MPI_FILE_GET_SIZE (resUnit, fileSize, ierr)
 call MPI_file_get_position(resUnit,fileOffset,ierr)
 print *, 'fileOffset, fileSize', fileOffset, fileSize
 
 call MPI_file_seek (resUnit,fileOffset,MPI_SEEK_SET,ierr)
 call MPI_file_write(resUnit, outData, 2, &
                         MPI_DOUBLE, MPI_STATUS_IGNORE, ierr)
                         
 call MPI_file_get_position(resUnit,fileOffset,ierr)
 call MPI_FILE_GET_SIZE (resUnit, fileSize, ierr)
 print *, 'fileOffset, fileSize', fileOffset, fileSize
 
 
 print *, 'ierr ', ierr
 print *, 'MPI_MODE_WRONLY,  MPI_MODE_APPEND ', MPI_MODE_WRONLY,  MPI_MODE_APPEND
 
 
 call MPI_file_close(resUnit,ierr)
 call MPI_FINALIZE(ierr)
end
