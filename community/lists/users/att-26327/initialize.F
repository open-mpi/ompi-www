      subroutine initialize
      INCLUDE   'mpif.h'        !" user include file for MPI programs
        
      CALL MPI_Init ( ierror )
      end subroutine initialize
