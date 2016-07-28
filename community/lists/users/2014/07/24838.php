<?
$subject_val = "Re: [OMPI users] MPIIO and derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 14:37:59 2014" -->
<!-- isoreceived="20140721183759" -->
<!-- sent="Mon, 21 Jul 2014 13:37:58 -0500" -->
<!-- isosent="20140721183758" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and derived data types" -->
<!-- id="53CD5E06.2010506_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1405891396.3246.28.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIIO and derived data types<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 14:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>Previous message:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>In reply to:</strong> <a href="24830.php">Tom Rosmond: "[OMPI users] MPIIO and derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>Reply:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/20/2014 04:23 PM, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For several years I have successfully used MPIIO in a Fortran global
</span><br>
<span class="quotelev1">&gt; atmospheric ensemble data assimilation system.  However, I always
</span><br>
<span class="quotelev1">&gt; wondered if I was fully exploiting the power of MPIIO, specifically by
</span><br>
<span class="quotelev1">&gt; using derived data types to better describe memory and file data
</span><br>
<span class="quotelev1">&gt; layouts.  All of my IO has been using elementary data types, e.g.
</span><br>
<span class="quotelev1">&gt; mpi_real, mpi_integer, for file 'datatype's, and numerous references
</span><br>
<span class="quotelev1">&gt; suggest that datatypes of derived data types could improve IO
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a KSH script with an included fortran program of a very
</span><br>
<span class="quotelev1">&gt; simple example of what I am now doing successfully, and poses the
</span><br>
<span class="quotelev1">&gt; question why doesn't my attempt with a derived data type work.  The
</span><br>
<span class="quotelev1">&gt; fortran program is well commented to explain each step.  I run the
</span><br>
<span class="quotelev1">&gt; script on a 4 core linux workstation, and the example is setup for that
</span><br>
<span class="quotelev1">&gt; system.  On a similar system just 'chmod' the script executable and run
</span><br>
<span class="quotelev1">&gt; it.  The script will compile amd execute the program .  It should first
</span><br>
<span class="quotelev1">&gt; show printed output from successful IO using my current approach, and
</span><br>
<span class="quotelev1">&gt; then aborts when trying my derived data type test.  What am I doing
</span><br>
<span class="quotelev1">&gt; wrong?  Any advice is appreciated.
</span><br>
<p>Ah ha.  I spent so much time looking at how ROMIO processed your 
<br>
datatypes that I did not at first notice how you were using those 
<br>
datatypes.
<br>
<p>This works for you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(buffer(ijsiz(ir),numrec))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ioff = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lenij = ijsiz(ir)*numrec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_read_at_all(ifh,ioff,buffer,lenij,mpi_real,status,ierr)
<br>
<p>but this does not:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ioff=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lenij=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_read_at_all(ifh,ioff,buffer,lenij,datatype,status,ierr)
<br>
<p><p>The mistake is a natural one to make: the 'buffer, count, datatype' 
<br>
tuple passed to the read commands (and passed to many other MPI 
<br>
routines) describes the layout of memory --  Not the layout of data in 
<br>
the file.
<br>
<p>To describe the file layout you set a file view, as you have already 
<br>
done a few calls earlier.
<br>
<p>What is your memory buffer?  it allocated like this:
<br>
<p>&nbsp;&nbsp;allocate(buffer(ijsiz(ir),numrec))
<br>
<p>which (if I am reading fortran correctly) is a contiguous chunk of memory.
<br>
<p>If instead you had a more elaborate data structure, like a mesh of some 
<br>
kind, then passing an indexed type to the read call might make more sense.
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
<li><strong>Next message:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>Previous message:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>In reply to:</strong> <a href="24830.php">Tom Rosmond: "[OMPI users] MPIIO and derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>Reply:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
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
