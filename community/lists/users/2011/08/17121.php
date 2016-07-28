<?
$subject_val = "Re: [OMPI users] MPIIO and EXT3 file systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 15:33:30 2011" -->
<!-- isoreceived="20110829193330" -->
<!-- sent="Mon, 29 Aug 2011 12:33:08 -0700" -->
<!-- isosent="20110829193308" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and EXT3 file systems" -->
<!-- id="1314646388.4290.24.camel_at_cedar.reachone.com" -->
<!-- inreplyto="20110829192206.GG32108_at_mcs.anl.gov" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 15:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17122.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>In reply to:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2011-08-29 at 14:22 -0500, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Mon, Aug 22, 2011 at 08:38:52AM -0700, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Yes, we are using collective I/O (mpi_file_write_at_all,
</span><br>
<span class="quotelev2">&gt; &gt; mpi_file_read_at_all).  The swaping of fortran and mpi-io are just
</span><br>
<span class="quotelev2">&gt; &gt; branches in the code at strategic locations.  Although the mpi-io files
</span><br>
<span class="quotelev2">&gt; &gt; are readable with fortran direct access, we don't do so from within the
</span><br>
<span class="quotelev2">&gt; &gt; application because of different data organization in the files.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you use MPI datatypes to describe either a file view or the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; application data?   These noncontiguous in memory and/or noncontiguous
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in file access patterns will also trigger fcntl lock calls.  You can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use an MPI-IO hint to disable data sieving, at a potentially
</span><br>
<span class="quotelev3">&gt; &gt; &gt; disastrous performance cost. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, we use an 'mpi_type_indexed' datatype to describe the data
</span><br>
<span class="quotelev2">&gt; &gt; organization.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any thoughts about the XFS vs EXT3 question?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have machines at the lab with XFS and machines with EXT3: I can't
</span><br>
<span class="quotelev1">&gt; say I have ever seen an MPI-IO problem we could trace to the specific
</span><br>
<span class="quotelev1">&gt; file system.   The MPI-IO library just makes a bunch of posix I/O
</span><br>
<span class="quotelev1">&gt; calls under the hood: if write(2), open(2), and friends are broken for
</span><br>
<span class="quotelev1">&gt; XFS or EXT3, those kinds of bugs get a lot of attention :&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point the usual course of action is &quot;post a small reproducing
</span><br>
<span class="quotelev1">&gt; test case&quot;.  Your first message said this was a big code, so perhaps
</span><br>
<span class="quotelev1">&gt; that will not be so easy...
</span><br>
<p>True, and because it is an intermittent problem it would probably be
<br>
extremely difficult or impossible to reproduce in another code or in
<br>
another hardware/software environment.  Because we have an acceptable
<br>
workaround, it just isn't worth the effort.  Thanks for the help.
<br>
<p>T. Rosmond
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17122.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>In reply to:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
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
