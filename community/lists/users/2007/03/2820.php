<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 19:48:17 2007" -->
<!-- isoreceived="20070316234817" -->
<!-- sent="Fri, 16 Mar 2007 19:46:39 -0400" -->
<!-- isosent="20070316234639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack" -->
<!-- id="045DABAC-1369-4E45-8E0C-FD9FBA13C95F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45FB277E.1090404_at_qtp.ufl.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-16 19:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2821.php">Jeff Squyres: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>In reply to:</strong> <a href="2818.php">Erik Deumens: "[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem with both the f77 and f90 programs is that you forgot to  
<br>
put &quot;ierr&quot; as the last argument to MPI_PACK.  This causes a segv  
<br>
because neither of them are correct MPI programs.
<br>
<p>But it's always good to hear that we can deliver a smaller corefile  
<br>
in v1.2!  :-)
<br>
<p><p>On Mar 16, 2007, at 7:25 PM, Erik Deumens wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a small program in F77 that makes a SEGV crash with
</span><br>
<span class="quotelev1">&gt; a 130MB core file. It is true that the crash is much cleaner
</span><br>
<span class="quotelev1">&gt; in OpenMPI 1.2; nice improvement! The core file is 500 MB with
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on CentOS 4.4 with the latest patches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif77 -g -o bug bug.f
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./bug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have a bug.f90 (which I made first) and it crashes
</span><br>
<span class="quotelev1">&gt; too with the Intel ifort compiler 9.1.039.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Erik Deumens
</span><br>
<span class="quotelev1">&gt; Interim Director
</span><br>
<span class="quotelev1">&gt; Quantum Theory Project
</span><br>
<span class="quotelev1">&gt; New Physics Building 2334                    deumens_at_[hidden]
</span><br>
<span class="quotelev1">&gt; University of Florida            <a href="http://www.qtp.ufl.edu/~deumens">http://www.qtp.ufl.edu/~deumens</a>
</span><br>
<span class="quotelev1">&gt; Gainesville, Florida 32611-8435                    (352)392-6980
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       program mainf
</span><br>
<span class="quotelev1">&gt; c     mpif77 -g -o bug bug.f
</span><br>
<span class="quotelev1">&gt; c     mpirun -np 2 ./bug
</span><br>
<span class="quotelev1">&gt;       implicit none
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;       character*80 inpfile
</span><br>
<span class="quotelev1">&gt;       integer l
</span><br>
<span class="quotelev1">&gt;       integer i
</span><br>
<span class="quotelev1">&gt;       integer stat
</span><br>
<span class="quotelev1">&gt;       integer cmdbuf(4)
</span><br>
<span class="quotelev1">&gt;       integer lcmdbuf
</span><br>
<span class="quotelev1">&gt;       integer ierr
</span><br>
<span class="quotelev1">&gt;       integer ntasks
</span><br>
<span class="quotelev1">&gt;       integer taskid
</span><br>
<span class="quotelev1">&gt;       integer bufpos
</span><br>
<span class="quotelev1">&gt;       integer cmd
</span><br>
<span class="quotelev1">&gt;       integer ldata
</span><br>
<span class="quotelev1">&gt;       character*(mpi_max_processor_name) hostnm
</span><br>
<span class="quotelev1">&gt;       integer iuinp
</span><br>
<span class="quotelev1">&gt;       integer iuout
</span><br>
<span class="quotelev1">&gt;       integer lnam
</span><br>
<span class="quotelev1">&gt;       real*8 bcaststart
</span><br>
<span class="quotelev1">&gt;       iuinp = 5
</span><br>
<span class="quotelev1">&gt;       iuout = 6
</span><br>
<span class="quotelev1">&gt;       lcmdbuf = 16
</span><br>
<span class="quotelev1">&gt;       i = 0
</span><br>
<span class="quotelev1">&gt;       call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_size (mpi_comm_world, ntasks, ierr)
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_rank (mpi_comm_world, taskid, ierr)
</span><br>
<span class="quotelev1">&gt;       hostnm = ' '
</span><br>
<span class="quotelev1">&gt;       call mpi_get_processor_name (hostnm, lnam, ierr)
</span><br>
<span class="quotelev1">&gt;       write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
</span><br>
<span class="quotelev1">&gt;       if (taskid == 0) then
</span><br>
<span class="quotelev1">&gt;         inpfile = ' '
</span><br>
<span class="quotelev1">&gt;         do
</span><br>
<span class="quotelev1">&gt;           write (iuout,*) 'Enter .inp filename:'
</span><br>
<span class="quotelev1">&gt;           read (iuinp,*) inpfile
</span><br>
<span class="quotelev1">&gt;           if (inpfile /= ' ') exit
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;         l = len_trim(inpfile)
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,inpfile(1:l)
</span><br>
<span class="quotelev1">&gt;         bufpos = 0
</span><br>
<span class="quotelev1">&gt;         cmd = 1099
</span><br>
<span class="quotelev1">&gt;         ldata = 7
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,cmd,lcmdbuf
</span><br>
<span class="quotelev1">&gt;         call mpi_pack (cmd, 1, MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,ldata,lcmdbuf
</span><br>
<span class="quotelev1">&gt;         call mpi_pack (ldata, 1, MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;         bcaststart = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
</span><br>
<span class="quotelev1">&gt;         call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;       end if
</span><br>
<span class="quotelev1">&gt;       call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED,
</span><br>
<span class="quotelev1">&gt;      *     0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;       stop
</span><br>
<span class="quotelev1">&gt;       end program mainf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program mainf
</span><br>
<span class="quotelev1">&gt;   ! ifort -g -I /share/local/lib/ompi/include -o bug bug.f90
</span><br>
<span class="quotelev1">&gt;   !       -L /share/local/lib/ompi/lib -lmpi_f77 -lmpi
</span><br>
<span class="quotelev1">&gt;   ! mpirun -np 2 ./bug
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt;   include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;   character(len=80) :: inpfile
</span><br>
<span class="quotelev1">&gt;   character(len=1), dimension(80) :: cinpfile
</span><br>
<span class="quotelev1">&gt;   integer :: l
</span><br>
<span class="quotelev1">&gt;   integer :: i
</span><br>
<span class="quotelev1">&gt;   integer :: stat
</span><br>
<span class="quotelev1">&gt;   integer, dimension(4) :: cmdbuf
</span><br>
<span class="quotelev1">&gt;   integer :: lcmdbuf
</span><br>
<span class="quotelev1">&gt;   integer :: ierr
</span><br>
<span class="quotelev1">&gt;   integer :: ntasks
</span><br>
<span class="quotelev1">&gt;   integer :: taskid
</span><br>
<span class="quotelev1">&gt;   integer :: bufpos
</span><br>
<span class="quotelev1">&gt;   integer :: cmd
</span><br>
<span class="quotelev1">&gt;   integer :: ldata
</span><br>
<span class="quotelev1">&gt;   character(len=mpi_max_processor_name) :: hostnm
</span><br>
<span class="quotelev1">&gt;   integer :: iuinp = 5
</span><br>
<span class="quotelev1">&gt;   integer :: iuout = 6
</span><br>
<span class="quotelev1">&gt;   integer :: lnam
</span><br>
<span class="quotelev1">&gt;   real(8) :: bcaststart
</span><br>
<span class="quotelev1">&gt;   lcmdbuf = 16
</span><br>
<span class="quotelev1">&gt;   i = 0
</span><br>
<span class="quotelev1">&gt;   call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_comm_size (mpi_comm_world, ntasks, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_comm_rank (mpi_comm_world, taskid, ierr)
</span><br>
<span class="quotelev1">&gt;   hostnm = ' '
</span><br>
<span class="quotelev1">&gt;   call mpi_get_processor_name (hostnm, lnam, ierr)
</span><br>
<span class="quotelev1">&gt;   write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
</span><br>
<span class="quotelev1">&gt;   if (taskid == 0) then
</span><br>
<span class="quotelev1">&gt;      inpfile = ' '
</span><br>
<span class="quotelev1">&gt;      do
</span><br>
<span class="quotelev1">&gt;         write (iuout,*) 'Enter .inp filename:'
</span><br>
<span class="quotelev1">&gt;         read (iuinp,*) inpfile
</span><br>
<span class="quotelev1">&gt;         if (inpfile /= ' ') exit
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;      l = len_trim(inpfile)
</span><br>
<span class="quotelev1">&gt;      do i=1,l
</span><br>
<span class="quotelev1">&gt;         cinpfile(i) = inpfile(i:i)
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;      cinpfile(l+1) = char(0)
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,inpfile(1:l)
</span><br>
<span class="quotelev1">&gt;      bufpos = 0
</span><br>
<span class="quotelev1">&gt;      cmd = 1099
</span><br>
<span class="quotelev1">&gt;      ldata = 7
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;      ! The next two lines exhibit the bug
</span><br>
<span class="quotelev1">&gt;      ! Uncomment the first and the program works
</span><br>
<span class="quotelev1">&gt;      ! Uncomment the second and the program dies in mpi_pack
</span><br>
<span class="quotelev1">&gt;      ! and produces a 137 MB core file.
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,cmd,lcmdbuf
</span><br>
<span class="quotelev1">&gt; !     write (iuout,*) 'task',taskid,cmd
</span><br>
<span class="quotelev1">&gt;      call mpi_pack (cmd, 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev1">&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,ldata,lcmdbuf
</span><br>
<span class="quotelev1">&gt;      call mpi_pack (ldata, 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev1">&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;      bcaststart = mpi_wtime()
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
</span><br>
<span class="quotelev1">&gt;      call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev1">&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt;   call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED, &amp;
</span><br>
<span class="quotelev1">&gt;        0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;   stop
</span><br>
<span class="quotelev1">&gt; end program mainf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2821.php">Jeff Squyres: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>In reply to:</strong> <a href="2818.php">Erik Deumens: "[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
