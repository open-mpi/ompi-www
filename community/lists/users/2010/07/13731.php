<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 14:58:13 2010" -->
<!-- isoreceived="20100721185813" -->
<!-- sent="Wed, 21 Jul 2010 15:57:23 -0300" -->
<!-- isosent="20100721185723" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="20100721185723.GA3579_at_sopalepc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279735853.4130.21.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Do MPI calls ever sleep?<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 14:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David:
<br>
<p>On Wed, Jul 21, 2010 at 02:10:53PM -0400, David Ronis wrote:
<br>
<span class="quotelev1">&gt; I've got a mpi program on an 8-core box that runs in a master-slave
</span><br>
<span class="quotelev1">&gt; mode.   The slaves calculate something, pass data to the master, and
</span><br>
<span class="quotelev1">&gt; then call MPI_Bcast waiting for the master to update and return some
</span><br>
<span class="quotelev1">&gt; data via a MPI_Bcast originating on the master.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of the things the master does while the slaves are waiting is to
</span><br>
<span class="quotelev1">&gt; make heavy use of fftw3 FFT routines which can support multi-threading.
</span><br>
<span class="quotelev1">&gt; However, for threading to make sense, the slaves on same physical
</span><br>
<span class="quotelev1">&gt; machine have to give up their CPU usage, and this doesn't seem to be the
</span><br>
<span class="quotelev1">&gt; case (top shows them running at close to 100%).  Is there another MPI
</span><br>
<span class="quotelev1">&gt; routine that polls for data and then gives up its time-slice? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other suggestions?
</span><br>
<p>I ran into a similar problem some time ago.  My situation seems similar
<br>
to yours:
<br>
&nbsp;&nbsp;1. the data in the MPI application has a to-and-fro nature.
<br>
&nbsp;&nbsp;2. I cannot afford an MPI process that consumes 100% cpu 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while doing nothing.
<br>
<p>My solution was to link two extra routines with my (FORTRAN)
<br>
application.  These routines intercept mpi_recv and mpi_send, test the
<br>
status of the request, and sleep if it is not ready.  The sleep time
<br>
has an exponential curve; it has a start value, factor, and maximum
<br>
value.
<br>
<p>I made no source code changes to my application.  When I include these
<br>
two routines at link time, the load from the application changes from
<br>
2.0 to 1.0 
<br>
<p>I use these with OpenMPI-1.2.8.
<br>
<p>I have not tried -mca yield_when_idle 1; which may not be in 1.2.8.
<br>
Not sure.
<br>
<p>Hope that helps
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       voice: 902-461-9749
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13731/MPI_Recv.c">MPI_Recv.c</a>
</ul>
<!-- attachment="MPI_Recv.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13731/MPI_Send.c">MPI_Send.c</a>
</ul>
<!-- attachment="MPI_Send.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
