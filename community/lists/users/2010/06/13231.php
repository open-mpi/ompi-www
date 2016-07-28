<?
$subject_val = "[OMPI users] mpi_iprobe not behaving as expect";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  5 17:45:13 2010" -->
<!-- isoreceived="20100605214513" -->
<!-- sent="Sat, 5 Jun 2010 14:44:46 -0700" -->
<!-- isosent="20100605214446" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_iprobe not behaving as expect" -->
<!-- id="AANLkTinW2ijtInUS2HmEQ8UF2X3VLC6aBIxBKVqmWDBM_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_iprobe not behaving as expect<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-05 17:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13232.php">Carsten Kutzner: "Re: [OMPI users] Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13230.php">lauren: "[OMPI users] Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13233.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13233.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Maybe reply:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all:
<br>
<p>I'm using mpi_iprobe to serve as a way to send signals between different mpi
<br>
executables. I'm using the following test codes (fortran):
<br>
<p>#1
<br>
program send
<br>
implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>real*8 :: vec(20000)=1.0
<br>
integer :: ierr,i=0,request(1)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_isend(vec,20000,mpi_real8,
<br>
0,1,mpi_comm_world,request(1),ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i=i+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *,i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vec=-vec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call usleep_fortran(2.d0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>end program send
<br>
--------------------------------------------------
<br>
#2
<br>
program send
<br>
implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>real*8 :: vec(20000)
<br>
integer :: ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(key_present()) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call usleep_fortran(0.05d0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>contains
<br>
<p>function key_present()
<br>
implicit none
<br>
&nbsp;&nbsp;logical :: key_present
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key_present = .false.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, key_present
<br>
<p>end function key_present
<br>
<p>end program send
<br>
-----------------------------------
<br>
The usleep_fortran is a routine I've written to pause the program for that
<br>
amount of time (in seconds).  As you can see, on the receiving end I'm
<br>
probing to see whether the message has being received every 0.05 seconds,
<br>
where each probing would result a print of the probing result; while the
<br>
sending is once every 2 seconds.
<br>
<p>Doing
<br>
mpirun -np 1 recv : -np 1 send
<br>
&nbsp;Naturally I expect the output to be something like:
<br>
<p>1
<br>
(fourty or so F)
<br>
T
<br>
2
<br>
(another fourty or so F)
<br>
T
<br>
3
<br>
<p>however this is the output I get:
<br>
<p>1
<br>
(fourty or so F)
<br>
T
<br>
2
<br>
(about a two second delay)
<br>
T
<br>
3
<br>
<p>It seems to me that after the first set of probes, once the message was
<br>
received, the non-blocking mpi probe becomes blocking for some strange
<br>
reason.  I'm using mpi_iprobe for the first time, so I'm not sure if I'm
<br>
doing something blatantly wrong.
<br>
<p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13232.php">Carsten Kutzner: "Re: [OMPI users] Gromacs run in parallel"</a>
<li><strong>Previous message:</strong> <a href="13230.php">lauren: "[OMPI users] Gromacs run in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13233.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13233.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Reply:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Maybe reply:</strong> <a href="13235.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
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
