<?
$subject_val = "[OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 14:10:59 2010" -->
<!-- isoreceived="20100721181059" -->
<!-- sent="Wed, 21 Jul 2010 14:10:53 -0400" -->
<!-- isosent="20100721181053" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="[OMPI users] Do MPI calls ever sleep?" -->
<!-- id="1279735853.4130.21.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
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
<strong>Subject:</strong> [OMPI users] Do MPI calls ever sleep?<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 14:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13728.php">Richard Treumann: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Maybe reply:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've got a mpi program on an 8-core box that runs in a master-slave
<br>
mode.   The slaves calculate something, pass data to the master, and
<br>
then call MPI_Bcast waiting for the master to update and return some
<br>
data via a MPI_Bcast originating on the master.  
<br>
<p>One of the things the master does while the slaves are waiting is to
<br>
make heavy use of fftw3 FFT routines which can support multi-threading.
<br>
However, for threading to make sense, the slaves on same physical
<br>
machine have to give up their CPU usage, and this doesn't seem to be the
<br>
case (top shows them running at close to 100%).  Is there another MPI
<br>
routine that polls for data and then gives up its time-slice? 
<br>
<p>Any other suggestions?
<br>
<p>Thanks in advance.
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13728.php">Richard Treumann: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Maybe reply:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
