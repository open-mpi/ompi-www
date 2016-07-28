<?
$subject_val = "Re: [OMPI users] IO performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 11:21:28 2012" -->
<!-- isoreceived="20120206162128" -->
<!-- sent="Mon, 6 Feb 2012 10:21:23 -0600" -->
<!-- isosent="20120206162123" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO performance" -->
<!-- id="20120206162123.GA29907_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1328294781.4280.32.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO performance<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 11:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18402.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>In reply to:</strong> <a href="18387.php">Tom Rosmond: "[OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 03, 2012 at 10:46:21AM -0800, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; With all of this, here is my MPI related question.  I recently added an
</span><br>
<span class="quotelev1">&gt; option to use MPI-IO to do the heavy IO lifting in our applications.  I
</span><br>
<span class="quotelev1">&gt; would like to know what the relative importance of the dedicated MPI
</span><br>
<span class="quotelev1">&gt; network vis-a-vis the GPFS network for typical MPIIO collective reads
</span><br>
<span class="quotelev1">&gt; and writes.  I assume there must be some hand-off of data between the
</span><br>
<span class="quotelev1">&gt; networks during the process, but how is it done, and are there any rules
</span><br>
<span class="quotelev1">&gt; to help understand it.  Any insights would be welcome.
</span><br>
<p>There's not really a handoff.  MPI-IO on GPFS will call a posix read()
<br>
or write() system call after possibly doing some data massaging.  That
<br>
system call sends data over the storage network.
<br>
<p>If you've got a fast communication network but a slow storage network,
<br>
then some of the MPI-IO optimizations will need to be adjusted a bit.
<br>
Seems like you'd want to really beef up the &quot;cb_buffer_size&quot;.
<br>
<p>For GPFS, the big thing MPI-IO can do for you is align writes to
<br>
GPFS.  see my next point.
<br>
<p><span class="quotelev1">&gt; P.S.  I am running with Open-mpi 1.4.2.
</span><br>
<p>If you upgrade to something in the 1.5 series you will get some nice
<br>
ROMIO optimizations that will help you out with writes to GPFS if 
<br>
you set the &quot;striping_unit&quot; hint to the GPFS block size.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18402.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>In reply to:</strong> <a href="18387.php">Tom Rosmond: "[OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18404.php">Tom Rosmond: "Re: [OMPI users] IO performance"</a>
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
