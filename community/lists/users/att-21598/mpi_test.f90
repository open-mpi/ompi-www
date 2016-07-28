program test
  ! Zum Betrieb wird die f77 Methode benutzt, MPI einzubindetn, Zum Entwickeln versuche f90 Methode zu nutzen.
  ! Erhoffe dadurchweniger Fehler; beispileweise die unterschide MPI_INT --> MPI_INTEGER können sehr wohl abgefangen werden..
  USE MPI
  IMPLICIT NONE
  !include "mpif.h"
  !
  !
  integer :: wrank,wsize,ierr,status(MPI_STATUS_SIZE),fh,i8_type,mpi_info,my_data_wsize(1),my_disp(1)
  integer(8), allocatable :: id_list(:), quelle(:)
  character(len=1024) :: filename
  CHARACTER(len=1024) :: pfad

  integer :: anzahl = 12000
  integer(KIND=MPI_OFFSET_KIND) :: offset = 0 !5776
  INTEGER(8) :: my_current_offset, my_offset
  INTEGER :: i, laenge, intsize

  call MPI_INIT(ierr)
  call MPI_COMM_SIZE(MPI_COMM_WORLD,wsize,ierr)
  call MPI_COMM_RANK(MPI_COMM_WORLD,wrank,ierr)
  call getarg(1, pfad) ! das ist der Pfad+Dateiname
  !filename = TRIM(pfad) // "blupp"

  !Anlegen der Binärdatei (seriell, nur Master)
!  CALL MPI_File_seek(fh, my_offset, MPI_SEEK_SET);
!  CALL MPI_File_get_position(fh, &my_current_offset);

  IF (wrank .EQ. 0) THEN
    my_offset = 0
    ALLOCATE(quelle(anzahl))
    DO i=1, anzahl
      quelle(i) = i
    END DO
    laenge = anzahl
    !WRITE (*,*) "laenge", laenge, "quelle:", quelle
    !CALL MPI_File_seek(fh, 0, MPI_SEEK_SET, ierr);
    !CALL MPI_File_get_position(fh, my_current_offset, ierr); WRITE (*,*) "wrank0", wrank, "my_current_offset", my_current_offset
    !CALL MPI_File_write(fh, quelle, anzahl, MPI_INT, status, ierr);
  ELSE
    my_offset = anzahl
    ALLOCATE(quelle(1))
    quelle = 13
    laenge = 1
    !CALL MPI_File_seek(fh, anzahl+wrank, MPI_SEEK_SET, ierr);
    !CALL MPI_File_get_position(fh, my_current_offset, ierr); WRITE (*,*) "wrank1", wrank, "my_current_offset", my_current_offset
    !CALL MPI_File_write(fh, quelle, 1, MPI_INT, status, ierr);
  END IF
  CALL MPI_File_open(MPI_COMM_WORLD, TRIM(pfad), MPI_MODE_CREATE + MPI_MODE_WRONLY, MPI_INFO_NULL, fh, ierr);
  call MPI_TYPE_SIZE(MPI_INTEGER8, intsize, ierr)
  !WRITE (*,*) "intsize", intsize, "my_offset * intsize", my_offset * intsize
  CALL MPI_File_set_view(fh, my_offset * intsize, MPI_INTEGER, MPI_INTEGER, 'native', MPI_INFO_NULL, ierr)
  CALL MPI_File_write(fh, quelle, laenge, MPI_INTEGER8, status, ierr); !MPI_INT
  CALL MPI_File_get_position(fh, my_current_offset, ierr); 
  !WRITE (*,*) "wrank", wrank, "my_offset", my_offset, "laenge", laenge, "my_current_offset", my_current_offset
  CALL MPI_File_close(fh, ierr);


















  ! Einliesen der einer Binärdatei (parallel)
  call MPI_INFO_CREATE(mpi_info,ierr) 

  call MPI_FILE_OPEN(MPI_COMM_SELF,pfad, &
       MPI_MODE_RDONLY,mpi_info,fh,ierr)

  my_data_wsize = anzahl/wsize
  my_disp = my_data_wsize*wrank
 
  !call MPI_TYPE_INDEXED(1,my_data_wsize,my_disp,MPI_INTEGER8,i8_type,ierr)
  call MPI_TYPE_INDEXED(1,my_data_wsize,my_disp,MPI_INTEGER8,i8_type,ierr)
  call MPI_TYPE_COMMIT(i8_type,ierr)
  
  call MPI_File_set_view(fh,offset,MPI_INTEGER8,i8_type,'native',mpi_info,ierr)
  
  allocate(id_list(anzahl/wsize))
  call MPI_File_read_all(fh,id_list,(anzahl/wsize),MPI_INTEGER8,status,ierr)
  call MPI_FILE_CLOSE(fh,ierr)

  ! Ausschreiben in TXT Dateien (parallel)
  write(filename,fmt='(a,i1)') TRIM(pfad), wrank+1
  !open(unit=20,file=trim(filename),status='new',action='write') 
  open(unit=20,file=trim(filename),action='write') 
  write(20,*) id_list
  flush(20)
  close(20)

  ! Überprüfen der ausgeschriebenen Dateien.
  
  call MPI_FINALIZE(ierr)
end program test

