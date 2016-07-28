!     Simple mpi crash tests
!     Caveat: the results will depend upon compilation options
!     They could also easily be extended
!
      dimension a(10)
      include "mpif.h"
      call MPI_INIT(ierr)
      call MPI_COMM_RANK(MPI_COMM_WORLD, irank, ierr)

      if(irank .eq. 0)then
         write(6,1)
1        format('mpi crash sanity check' / &
                'Pick an error to test '       / &
                ' Base -- enter CNTRL/D or CNRTL/C below' / &
                ' 1   Read Error (end of file' / &
                ' 2   Read Error (format)'     / &
                ' 3   Array acccess - might not crash' / &
                ' 4   Subroutine call - might not crash' /&
                ' 5   FPE     (math error)'    / &
                ' 6   Internal read error'     / &
                ' Enter integer option _ ',$)
         read (5,*)itest
!        Setup Files for 1 and 2
         if(itest .le. 2)then
           open(unit=10,file='test.input')
           close (10,STATUS='DELETE')
           open(unit=10,file='test.input')
           if(itest .eq. 1)then
                 close(unit=10)
           else
                 write(10,2)
2                format('0.1')
                 close(unit=10)
           endif
        endif
        write(6,3)
3       format('Test will now run and crash; check for zombies')
      endif
      CALL MPI_Bcast(itest, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, ierr)
      if (itest .le. 2)then
         call ReadErr(irank)
      else if (itest .eq. 3)then
         call ArrayErr(irank,a)
      else if (itest .eq. 4)then
         call SubroutineErr(irank,a)
      else if (itest .eq. 5)then
         call FPEErr(irank)
      else if (itest .eq. 6) then
         call IntReadErr(irank)
      endif
      if(irank .eq. 0) write(6,4)
4     format('Test failed to crash, try adjusting compilation options')
      call MPI_FINALIZE(ierr)
      end

      subroutine ReadErr(irank)
      open (unit=10,file='test.input')
      if(irank.lt.3)then
               read(10,1,err=20,end=20)ii
      else
               read(10,1)ii
      endif
20    continue
1     format(i4)
      end
       
      subroutine ArrayErr(irank,a)
      dimension a(*)
      if(irank.lt.3)then
               ind=10
      else
               ind=-1
      endif
      a(ind)=1
      b=a(ind)*a(ind)
      end

      subroutine SubroutineErr(irank,a)
      if(irank .lt. 3)then
               call hack1(i,a)
      else
               call hack1(i)
               call hack2(i,a)
      endif
      end
      subroutine hack1(i,a)
      dimension a(10)
      a(10)=1
      end
      subroutine hack2(i,a,j)
      dimension a(20)
      j=1
      end

      subroutine FPEErr(irank)
      ia=1
      ib=0
      if(irank.lt.3)then
               a=1
      else
               a=ia/ib
      endif
      a=a*a*a
      write(6,*)'Rank ',irank,' a ',a
      end

      subroutine IntReadErr(irank)
      character*4 a
      a='   '
      if(irank.lt.3)then
               b=1
      else
               read(a,*)b
      endif
      end
