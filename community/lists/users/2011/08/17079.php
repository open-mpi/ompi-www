<?
$subject_val = "Re: [OMPI users] MPIIO and EXT3 file systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 11:39:16 2011" -->
<!-- isoreceived="20110822153916" -->
<!-- sent="Mon, 22 Aug 2011 08:38:52 -0700" -->
<!-- isosent="20110822153852" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and EXT3 file systems" -->
<!-- id="1314027532.4247.12.camel_at_cedar.reachone.com" -->
<!-- inreplyto="20110822152303.GC4329_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2011-08-22 11:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17080.php">Hoang-Vu Dang: "[OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>In reply to:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2011-08-22 at 10:23 -0500, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Thu, Aug 18, 2011 at 08:46:46AM -0700, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; We have a large fortran application designed to run doing IO with either
</span><br>
<span class="quotelev2">&gt; &gt; mpi_io or fortran direct access.  On a linux workstation (16 AMD cores)
</span><br>
<span class="quotelev2">&gt; &gt; running openmpi 1.5.3 and Intel fortran 12.0 we are having trouble with
</span><br>
<span class="quotelev2">&gt; &gt; random failures with the mpi_io option which do not occur with
</span><br>
<span class="quotelev2">&gt; &gt; conventional fortran direct access.  We are using ext3 file systems, and
</span><br>
<span class="quotelev2">&gt; &gt; I have seen some references hinting of similar problems with the
</span><br>
<span class="quotelev2">&gt; &gt; ext3/mpiio combination.  The application with the mpi_io option runs
</span><br>
<span class="quotelev2">&gt; &gt; flawlessly on Cray architectures with Lustre file systems, so we are
</span><br>
<span class="quotelev2">&gt; &gt; also suspicious of the ext3/mpiio combination.  Does anyone else have
</span><br>
<span class="quotelev2">&gt; &gt; experience with this combination that could shed some light on the
</span><br>
<span class="quotelev2">&gt; &gt; problem, and hopefully some suggested solutions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm glad to hear you're having success with mpi-io on Cray/Lustre.
</span><br>
<span class="quotelev1">&gt; That platform was a bit touchy for a while, but has gotten better over
</span><br>
<span class="quotelev1">&gt; the last two years.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My first guess would be that your linux workstation does not implement
</span><br>
<span class="quotelev1">&gt; a &quot;strict enough&quot; file system lock.  ROMIO relies on the &quot;fcntl&quot; locks
</span><br>
<span class="quotelev1">&gt; to provide exclusive access to files at some points in the code.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does your application use collective I/O ?  It sounds like if you can
</span><br>
<span class="quotelev1">&gt; swap fortran and mpi-io so easily that maybe you do not.  If there's
</span><br>
<span class="quotelev1">&gt; a way to make collective MPI-IO calls, that will eliminate many of the
</span><br>
<span class="quotelev1">&gt; fcntl lock calls.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Rob
<br>
<p>Yes, we are using collective I/O (mpi_file_write_at_all,
<br>
mpi_file_read_at_all).  The swaping of fortran and mpi-io are just
<br>
branches in the code at strategic locations.  Although the mpi-io files
<br>
are readable with fortran direct access, we don't do so from within the
<br>
application because of different data organization in the files.  
<br>
<p><span class="quotelev1">&gt; Do you use MPI datatypes to describe either a file view or the
</span><br>
<span class="quotelev1">&gt; application data?   These noncontiguous in memory and/or noncontiguous
</span><br>
<span class="quotelev1">&gt; in file access patterns will also trigger fcntl lock calls.  You can
</span><br>
<span class="quotelev1">&gt; use an MPI-IO hint to disable data sieving, at a potentially
</span><br>
<span class="quotelev1">&gt; disastrous performance cost. 
</span><br>
<p>Yes, we use an 'mpi_type_indexed' datatype to describe the data
<br>
organization.  
<br>
<p>Any thoughts about the XFS vs EXT3 question?
<br>
<p>Thanks for the help
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
<li><strong>Next message:</strong> <a href="17080.php">Hoang-Vu Dang: "[OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>In reply to:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17120.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
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
