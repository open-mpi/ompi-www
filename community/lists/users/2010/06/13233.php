<?
$subject_val = "Re: [OMPI users] mpi_iprobe not behaving as expect";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 14:09:05 2010" -->
<!-- isoreceived="20100606180905" -->
<!-- sent="Sun, 6 Jun 2010 11:08:41 -0700" -->
<!-- isosent="20100606180841" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_iprobe not behaving as expect" -->
<!-- id="AANLkTincOZH2N7w3N0Z3eu4LBIkLBAF4n2uW5jQuQOon_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinW2ijtInUS2HmEQ8UF2X3VLC6aBIxBKVqmWDBM_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_iprobe not behaving as expect<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 14:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Previous message:</strong> <a href="13232.php">Carsten Kutzner: "Re: [OMPI users] Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13231.php">David Zhang: "[OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using mpi_iprobe to serve as a way to send signals between different
</span><br>
<span class="quotelev1">&gt; mpi executables. I'm using the following test codes (fortran):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1
</span><br>
<span class="quotelev1">&gt; program send
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real*8 :: vec(20000)=1.0
</span><br>
<span class="quotelev1">&gt; integer :: ierr,i=0,request(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;         do
</span><br>
<span class="quotelev1">&gt;                 call mpi_isend(vec,20000,mpi_real8,
</span><br>
<span class="quotelev1">&gt; 0,1,mpi_comm_world,request(1),ierr)
</span><br>
<span class="quotelev1">&gt;                 i=i+1
</span><br>
<span class="quotelev1">&gt;                 print *,i
</span><br>
<span class="quotelev1">&gt;                 vec=-vec
</span><br>
<span class="quotelev1">&gt;                 call usleep_fortran(2.d0)
</span><br>
<span class="quotelev1">&gt;                 call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program send
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #2
</span><br>
<span class="quotelev1">&gt; program send
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;         include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real*8 :: vec(20000)
</span><br>
<span class="quotelev1">&gt; integer :: ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;         do
</span><br>
<span class="quotelev1">&gt;                 if(key_present()) then
</span><br>
<span class="quotelev1">&gt;                         call
</span><br>
<span class="quotelev1">&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;                 end if
</span><br>
<span class="quotelev1">&gt;                 call usleep_fortran(0.05d0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; function key_present()
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;   logical :: key_present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         key_present = .false.
</span><br>
<span class="quotelev1">&gt;         call
</span><br>
<span class="quotelev1">&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;         print *, key_present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end function key_present
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program send
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt; The usleep_fortran is a routine I've written to pause the program for that
</span><br>
<span class="quotelev1">&gt; amount of time (in seconds).  As you can see, on the receiving end I'm
</span><br>
<span class="quotelev1">&gt; probing to see whether the message has being received every 0.05 seconds,
</span><br>
<span class="quotelev1">&gt; where each probing would result a print of the probing result; while the
</span><br>
<span class="quotelev1">&gt; sending is once every 2 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 recv : -np 1 send
</span><br>
<span class="quotelev1">&gt;  Naturally I expect the output to be something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; (fourty or so F)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; (another fourty or so F)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however this is the output I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; (fourty or so F)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; (about a two second delay)
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that after the first set of probes, once the message was
</span><br>
<span class="quotelev1">&gt; received, the non-blocking mpi probe becomes blocking for some strange
</span><br>
<span class="quotelev1">&gt; reason.  I'm using mpi_iprobe for the first time, so I'm not sure if I'm
</span><br>
<span class="quotelev1">&gt; doing something blatantly wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<li><strong>Previous message:</strong> <a href="13232.php">Carsten Kutzner: "Re: [OMPI users] Gromacs run in parallel"</a>
<li><strong>In reply to:</strong> <a href="13231.php">David Zhang: "[OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13234.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
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
