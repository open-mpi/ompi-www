<?
$subject_val = "Re: [OMPI users] MPIIO and EXT3 file systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 11:23:09 2011" -->
<!-- isoreceived="20110822152309" -->
<!-- sent="Mon, 22 Aug 2011 10:23:03 -0500" -->
<!-- isosent="20110822152303" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and EXT3 file systems" -->
<!-- id="20110822152303.GC4329_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1313682406.4699.19.camel_at_cedar.reachone.com" -->
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
<strong>Date:</strong> 2011-08-22 11:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>In reply to:</strong> <a href="17070.php">Tom Rosmond: "[OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 18, 2011 at 08:46:46AM -0700, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; We have a large fortran application designed to run doing IO with either
</span><br>
<span class="quotelev1">&gt; mpi_io or fortran direct access.  On a linux workstation (16 AMD cores)
</span><br>
<span class="quotelev1">&gt; running openmpi 1.5.3 and Intel fortran 12.0 we are having trouble with
</span><br>
<span class="quotelev1">&gt; random failures with the mpi_io option which do not occur with
</span><br>
<span class="quotelev1">&gt; conventional fortran direct access.  We are using ext3 file systems, and
</span><br>
<span class="quotelev1">&gt; I have seen some references hinting of similar problems with the
</span><br>
<span class="quotelev1">&gt; ext3/mpiio combination.  The application with the mpi_io option runs
</span><br>
<span class="quotelev1">&gt; flawlessly on Cray architectures with Lustre file systems, so we are
</span><br>
<span class="quotelev1">&gt; also suspicious of the ext3/mpiio combination.  Does anyone else have
</span><br>
<span class="quotelev1">&gt; experience with this combination that could shed some light on the
</span><br>
<span class="quotelev1">&gt; problem, and hopefully some suggested solutions?
</span><br>
<p>I'm glad to hear you're having success with mpi-io on Cray/Lustre.
<br>
That platform was a bit touchy for a while, but has gotten better over
<br>
the last two years.
<br>
<p>My first guess would be that your linux workstation does not implement
<br>
a &quot;strict enough&quot; file system lock.  ROMIO relies on the &quot;fcntl&quot; locks
<br>
to provide exclusive access to files at some points in the code.  
<br>
<p>Does your application use collective I/O ?  It sounds like if you can
<br>
swap fortran and mpi-io so easily that maybe you do not.  If there's
<br>
a way to make collective MPI-IO calls, that will eliminate many of the
<br>
fcntl lock calls.  
<br>
<p>Do you use MPI datatypes to describe either a file view or the
<br>
application data?   These noncontiguous in memory and/or noncontiguous
<br>
in file access patterns will also trigger fcntl lock calls.  You can
<br>
use an MPI-IO hint to disable data sieving, at a potentially
<br>
disastrous performance cost. 
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
<li><strong>Next message:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Previous message:</strong> <a href="17077.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>In reply to:</strong> <a href="17070.php">Tom Rosmond: "[OMPI users] MPIIO and EXT3 file systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17079.php">Tom Rosmond: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
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
