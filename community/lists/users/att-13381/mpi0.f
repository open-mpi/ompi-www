      include "mpif.h"
      common /MPI_DM/ NUMNOD,MYRANK
      call MPI_init(ISTAT)
      call MPI_COMM_SIZE(MPI_COMM_WORLD,NUMNOD,ISTAT)
      call MPI_COMM_RANK(MPI_COMM_WORLD,MYRANK,ISTAT)
      MPI_comm=MPI_COMM_WORLD
      if (MYRANK .eq. 0) then
        write (6,*) 'Number of nodes=',NUMNOD
        ireadok=12
      end if
      call testsubr(MPI_COMM_WORLD,ireadok)
      print *,'MYRANK,ireadok=',MYRANK,ireadok
      call MPI_finalize(ierr)
      stop
      end
      subroutine testsubr(MPI_COMM_WORLD,ireadok)
c#    MMC routine 196 lstmod: 04/22/99
c*****Obtains day, hour minute info from seconds
      common /MPI_DM/ NUMNOD,MYRANK
      write (6,*) 'MYRANK,NUMNOD=',MYRANK,NUMNOD
      call MPI_Bcast(ireadok,1,MPI_INTEGER,0,MPI_COMM_WORLD,ierr)
      return
      end
