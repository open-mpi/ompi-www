<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 19:26:01 2007" -->
<!-- isoreceived="20070316232601" -->
<!-- sent="Fri, 16 Mar 2007 19:25:50 -0400" -->
<!-- isosent="20070316232550" -->
<!-- name="Erik Deumens" -->
<!-- email="deumens_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack" -->
<!-- id="45FB277E.1090404_at_qtp.ufl.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Erik Deumens (<em>deumens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-16 19:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Previous message:</strong> <a href="2817.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>Reply:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a small program in F77 that makes a SEGV crash with
<br>
a 130MB core file. It is true that the crash is much cleaner
<br>
in OpenMPI 1.2; nice improvement! The core file is 500 MB with
<br>
OpenMPI 1.1.
<br>
<p>I am running on CentOS 4.4 with the latest patches.
<br>
<p>mpif77 -g -o bug bug.f
<br>
mpirun -np 2 ./bug
<br>
<p>I also have a bug.f90 (which I made first) and it crashes
<br>
too with the Intel ifort compiler 9.1.039.
<br>
<p><pre>
-- 
Dr. Erik Deumens
Interim Director
Quantum Theory Project
New Physics Building 2334                    deumens_at_[hidden]
University of Florida            <a href="http://www.qtp.ufl.edu/~deumens">http://www.qtp.ufl.edu/~deumens</a>
Gainesville, Florida 32611-8435                    (352)392-6980

</pre>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program mainf
<br>
c     mpif77 -g -o bug bug.f
<br>
c     mpirun -np 2 ./bug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*80 inpfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer stat
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer cmdbuf(4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer lcmdbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ntasks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer taskid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer cmd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ldata
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*(mpi_max_processor_name) hostnm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer iuinp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer iuout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer lnam
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real*8 bcaststart
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iuinp = 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iuout = 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lcmdbuf = 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size (mpi_comm_world, ntasks, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank (mpi_comm_world, taskid, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostnm = ' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_get_processor_name (hostnm, lnam, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (taskid == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inpfile = ' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'Enter .inp filename:'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read (iuinp,*) inpfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (inpfile /= ' ') exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l = len_trim(inpfile)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,inpfile(1:l)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bufpos = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmd = 1099
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldata = 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmd,lcmdbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_pack (cmd, 1, MPI_INTEGER, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,ldata,lcmdbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_pack (ldata, 1, MPI_INTEGER, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bcaststart = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*     0, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end program mainf
<br>
<p><p>
<p>
program mainf
<br>
&nbsp;&nbsp;! ifort -g -I /share/local/lib/ompi/include -o bug bug.f90
<br>
&nbsp;&nbsp;!       -L /share/local/lib/ompi/lib -lmpi_f77 -lmpi
<br>
&nbsp;&nbsp;! mpirun -np 2 ./bug
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;character(len=80) :: inpfile
<br>
&nbsp;&nbsp;character(len=1), dimension(80) :: cinpfile
<br>
&nbsp;&nbsp;integer :: l
<br>
&nbsp;&nbsp;integer :: i
<br>
&nbsp;&nbsp;integer :: stat
<br>
&nbsp;&nbsp;integer, dimension(4) :: cmdbuf
<br>
&nbsp;&nbsp;integer :: lcmdbuf
<br>
&nbsp;&nbsp;integer :: ierr
<br>
&nbsp;&nbsp;integer :: ntasks
<br>
&nbsp;&nbsp;integer :: taskid
<br>
&nbsp;&nbsp;integer :: bufpos
<br>
&nbsp;&nbsp;integer :: cmd
<br>
&nbsp;&nbsp;integer :: ldata
<br>
&nbsp;&nbsp;character(len=mpi_max_processor_name) :: hostnm
<br>
&nbsp;&nbsp;integer :: iuinp = 5
<br>
&nbsp;&nbsp;integer :: iuout = 6
<br>
&nbsp;&nbsp;integer :: lnam
<br>
&nbsp;&nbsp;real(8) :: bcaststart
<br>
&nbsp;&nbsp;lcmdbuf = 16
<br>
&nbsp;&nbsp;i = 0
<br>
&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;call mpi_comm_size (mpi_comm_world, ntasks, ierr)
<br>
&nbsp;&nbsp;call mpi_comm_rank (mpi_comm_world, taskid, ierr)
<br>
&nbsp;&nbsp;hostnm = ' '
<br>
&nbsp;&nbsp;call mpi_get_processor_name (hostnm, lnam, ierr)
<br>
&nbsp;&nbsp;write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
<br>
&nbsp;&nbsp;if (taskid == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inpfile = ' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'Enter .inp filename:'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read (iuinp,*) inpfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (inpfile /= ' ') exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l = len_trim(inpfile)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1,l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cinpfile(i) = inpfile(i:i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cinpfile(l+1) = char(0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,inpfile(1:l)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bufpos = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmd = 1099
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldata = 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! The next two lines exhibit the bug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! Uncomment the first and the program works
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! Uncomment the second and the program dies in mpi_pack
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! and produces a 137 MB core file.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmd,lcmdbuf
<br>
!     write (iuout,*) 'task',taskid,cmd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_pack (cmd, 1, MPI_INTEGER, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,ldata,lcmdbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_pack (ldata, 1, MPI_INTEGER, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bcaststart = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (iuout,*) 'task',taskid,cmdbuf,bufpos
<br>
&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
&nbsp;&nbsp;stop
<br>
end program mainf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Previous message:</strong> <a href="2817.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>Reply:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
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
