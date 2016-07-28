<?
$subject_val = "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 10:54:08 2010" -->
<!-- isoreceived="20100206155408" -->
<!-- sent="Sat, 06 Feb 2010 16:56:01 +0100" -->
<!-- isosent="20100206155601" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages." -->
<!-- id="873a1ee4tq.fsf_at_59A2.org" -->
<!-- inreplyto="F1E96F3F-70A7-4393-B271-78BAFB1A8888_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages.<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-06 10:56:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>Reply:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 5 Feb 2010 14:28:40 -0600, Barry Smith &lt;bsmith_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; To cheer you up, when I run with openMPI it runs forever sucking down  
</span><br>
<span class="quotelev1">&gt; 100% CPU trying to send the messages :-)
</span><br>
<p>On my test box (x86 with 8GB memory), Open MPI (1.4.1) does complete
<br>
after several seconds, but still prints the wrong count.
<br>
<p>MPICH2 does not actually send the message, as you can see by running the
<br>
attached code.
<br>
<p>&nbsp;&nbsp;# Open MPI 1.4.1, correct cols[0]
<br>
&nbsp;&nbsp;[0] sending...
<br>
&nbsp;&nbsp;[1] receiving...
<br>
&nbsp;&nbsp;count -103432106, cols[0] 0
<br>
<p>&nbsp;&nbsp;# MPICH2 1.2.1, incorrect cols[1]
<br>
&nbsp;&nbsp;[1] receiving...
<br>
&nbsp;&nbsp;[0] sending...
<br>
&nbsp;&nbsp;[1] count -103432106, cols[0] 1
<br>
<p><p>How much memory does crush have (you need about 7GB to do this without
<br>
swapping)?  In particular, most of the time it took Open MPI to send the
<br>
message (with your source) was actually just spent faulting the
<br>
send/recv buffers.  The attached faults the buffers first, and the
<br>
subsequent send/recv takes less than 2 seconds.
<br>
<p>Actually, it's clear that MPICH2 never touches either buffer because it
<br>
returns immediately regardless of whether they have been faulted first.
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12030/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<li><strong>Reply:</strong> <a href="12052.php">Jeff Squyres: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
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
