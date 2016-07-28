!     Simple mpi crash tests
!     Caveat: the results will depend upon compilation options
!     They could also easily be extended
!
      dimension a(10), isig(2)
      include "mpif.h"
      call MPI_INIT(ierr)
      call MPI_COMM_RANK(MPI_COMM_WORLD, irank, ierr)

      continue
      if(irank .eq. 0)then
         write(6,1)
1        format('mpi crash sanity check' / &
                'Pick an error to test '       / &
                ' Base -- enter CNTRL/D or CNRTL/C below' / &
                '101   Read Error (end of file' / &
                '102   Read Error (format)'     / &
                '103   Internal read error'     / &
#ifdef __INTEL_COMPILER
                '104   Abort ' / &
                '105   Floating Point Error (SIGFPE) ' /&
                '106   Illegal Instruction (SIGILL)' / &
                '107   Interrupt (SIGINT)'    / &
                '108   Illegal Storage (SIGSEGV)' / &
                '109   Termination request (SIGTERM)' / &
#else
                '104   Array acccess - might not crash' / &
                '105   Subroutine call - might not crash' /&
                '106   FPE     (math error)'    / &
#endif
                '< 100 Raises a C signal of i ' / &
                '< 1   Shows available C signals ' / &
                ' Enter integer option _ ',$)
         read (5,*)itest
!
!        Trap signals > 31 and < 100
         if ((itest .gt. 31).and.(itest .lt.100))itest=-1
         if (itest .le. 1 )then
                call showallsignals()
                goto 100
         endif
!
!        Setup Files for 1 and 2
         if((itest .le. 102).and. (itest .gt.100))then
           open(unit=10,file='test.input')
           close (10,STATUS='DELETE')
           open(unit=10,file='test.input')
           if(itest .eq. 101)then
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
100   CALL MPI_Bcast(itest, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, ierr)
      if ( itest .lt. 1)then
        call MPI_FINALIZE(ierr)
        goto 200
      endif
      if ((itest .eq. 102).or.(itest.eq.101))then
         call ReadErr(irank)
      else if (itest .eq. 103) then
         call IntReadErr(irank)
#ifdef __INTEL_COMPILER
      else if((irank .ge. 3).and.(itest .gt. 103))then
        call intelerror(itest)
#else
      else if (itest .eq. 104)then
         call ArrayErr(irank,a)
      else if (itest .eq. 105)then
         call SubroutineErr(irank,a)
      else if (itest .eq. 106)then
         call FPEErr(irank)
#endif
      else if (itest .lt. 100 )then
         isig(1)=itest
         if(irank .eq. 0)then
                call whatsig(isig)
         endif
         call  MPI_BARRIER(MPI_COMM_WORLD, IERR)
         if(irank .ge. 3)then
                call doraise(isig)
         endif
      endif
      call MPI_FINALIZE(ierr)
      if(irank .eq. 0) write(6,4)
4     format('Test failed to crash, try adjusting compilation options')
200   continue
      end

      subroutine intelerror (itest)
#ifdef __INTEL_COMPILER
      use ifport
      if(itest .eq. 104)then
        result = raiseqq(SIG$ABORT)
      else if(itest .eq. 105)then
        result = raiseqq(SIG$FPE)
      else if(itest .eq. 106)then
        result = raiseqq(SIG$ILL)
      else if(itest .eq. 107)then
        result = raiseqq(SIG$INT)
      else if(itest .eq. 108)then
        result = raiseqq(SIG$SEGV)
      else if(itest .eq. 109)then
        result = raiseqq(SIG$TERM)
      endif
#endif
      return
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
       
#ifndef __INTEL_COMPILER
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
#endif

      subroutine IntReadErr(irank)
      character*4 a
      a='   '
      if(irank.lt.3)then
               b=1
      else
               read(a,*)b
      endif
      end
