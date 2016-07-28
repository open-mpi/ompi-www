<?
$subject_val = "Re: [OMPI users] MPIIO and EXT3 file systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 15:22:12 2011" -->
<!-- isoreceived="20110829192212" -->
<!-- sent="Mon, 29 Aug 2011 14:22:06 -0500" -->
<!-- isosent="20110829192206" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and EXT3 file systems" -->
<!-- id="20110829192206.GG32108_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1314027532.4247.12.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIIO and EXT3 file systems<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 15:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17121.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>In reply to:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17121.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17121.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 22, 2011 at 08:38:52AM -0700, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; Yes, we are using collective I/O (mpi_file_write_at_all,
</span><br>
<span class="quotelev1">&gt; mpi_file_read_at_all).  The swaping of fortran and mpi-io are just
</span><br>
<span class="quotelev1">&gt; branches in the code at strategic locations.  Although the mpi-io files
</span><br>
<span class="quotelev1">&gt; are readable with fortran direct access, we don't do so from within the
</span><br>
<span class="quotelev1">&gt; application because of different data organization in the files.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you use MPI datatypes to describe either a file view or the
</span><br>
<span class="quotelev2">&gt; &gt; application data?   These noncontiguous in memory and/or noncontiguous
</span><br>
<span class="quotelev2">&gt; &gt; in file access patterns will also trigger fcntl lock calls.  You can
</span><br>
<span class="quotelev2">&gt; &gt; use an MPI-IO hint to disable data sieving, at a potentially
</span><br>
<span class="quotelev2">&gt; &gt; disastrous performance cost. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we use an 'mpi_type_indexed' datatype to describe the data
</span><br>
<span class="quotelev1">&gt; organization.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts about the XFS vs EXT3 question?
</span><br>
<p>We have machines at the lab with XFS and machines with EXT3: I can't
<br>
say I have ever seen an MPI-IO problem we could trace to the specific
<br>
file system.   The MPI-IO library just makes a bunch of posix I/O
<br>
calls under the hood: if write(2), open(2), and friends are broken for
<br>
XFS or EXT3, those kinds of bugs get a lot of attention :&gt;
<br>
<p>At this point the usual course of action is &quot;post a small reproducing
<br>
test case&quot;.  Your first message said this was a big code, so perhaps
<br>
that will not be so easy...
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
<li><strong>Next message:</strong> <a href="17121.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17119.php">Reuti: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>In reply to:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17121.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17121.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
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
