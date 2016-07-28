<?
$subject_val = "Re: [OMPI users] MPIIO and derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 15:19:41 2014" -->
<!-- isoreceived="20140721191941" -->
<!-- sent="Mon, 21 Jul 2014 12:19:37 -0700" -->
<!-- isosent="20140721191937" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIIO and derived data types" -->
<!-- id="1405970377.3194.50.camel_at_cedar.reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53CD5E06.2010506_at_mcs.anl.gov" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 15:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24840.php">Blosch, Edwin L: "[OMPI users] Question on process and memory affinity with 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>In reply to:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>Well, if I understand what you are saying, maybe my concerns about
<br>
sub-optimality are unfounded.  Yes, the 'buffer' array is contiguous in
<br>
memory for each subdomain, and that is what the successful call to
<br>
'mpi_file_read_at_all' sees. The call to 'mpi_type_indexed' creates my
<br>
'datatype'  and the 'mpi_file_set_view' essentially 'installs' it.  I
<br>
suppose a possible thing to try would be to define an F90 structure for
<br>
the buffer array, but that would be of dubious benefit.  So, thanks
<br>
again for the help.
<br>
<p>T. Rosmond
<br>
<p><p>On Mon, 2014-07-21 at 13:37 -0500, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/20/2014 04:23 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For several years I have successfully used MPIIO in a Fortran global
</span><br>
<span class="quotelev2">&gt; &gt; atmospheric ensemble data assimilation system.  However, I always
</span><br>
<span class="quotelev2">&gt; &gt; wondered if I was fully exploiting the power of MPIIO, specifically by
</span><br>
<span class="quotelev2">&gt; &gt; using derived data types to better describe memory and file data
</span><br>
<span class="quotelev2">&gt; &gt; layouts.  All of my IO has been using elementary data types, e.g.
</span><br>
<span class="quotelev2">&gt; &gt; mpi_real, mpi_integer, for file 'datatype's, and numerous references
</span><br>
<span class="quotelev2">&gt; &gt; suggest that datatypes of derived data types could improve IO
</span><br>
<span class="quotelev2">&gt; &gt; performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached is a KSH script with an included fortran program of a very
</span><br>
<span class="quotelev2">&gt; &gt; simple example of what I am now doing successfully, and poses the
</span><br>
<span class="quotelev2">&gt; &gt; question why doesn't my attempt with a derived data type work.  The
</span><br>
<span class="quotelev2">&gt; &gt; fortran program is well commented to explain each step.  I run the
</span><br>
<span class="quotelev2">&gt; &gt; script on a 4 core linux workstation, and the example is setup for that
</span><br>
<span class="quotelev2">&gt; &gt; system.  On a similar system just 'chmod' the script executable and run
</span><br>
<span class="quotelev2">&gt; &gt; it.  The script will compile amd execute the program .  It should first
</span><br>
<span class="quotelev2">&gt; &gt; show printed output from successful IO using my current approach, and
</span><br>
<span class="quotelev2">&gt; &gt; then aborts when trying my derived data type test.  What am I doing
</span><br>
<span class="quotelev2">&gt; &gt; wrong?  Any advice is appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah ha.  I spent so much time looking at how ROMIO processed your 
</span><br>
<span class="quotelev1">&gt; datatypes that I did not at first notice how you were using those 
</span><br>
<span class="quotelev1">&gt; datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works for you:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        allocate(buffer(ijsiz(ir),numrec))
</span><br>
<span class="quotelev1">&gt;        ioff = 0
</span><br>
<span class="quotelev1">&gt;        lenij = ijsiz(ir)*numrec
</span><br>
<span class="quotelev1">&gt;        call mpi_file_read_at_all(ifh,ioff,buffer,lenij,mpi_real,status,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but this does not:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       ioff=0
</span><br>
<span class="quotelev1">&gt;        lenij=1
</span><br>
<span class="quotelev1">&gt;        call mpi_file_read_at_all(ifh,ioff,buffer,lenij,datatype,status,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mistake is a natural one to make: the 'buffer, count, datatype' 
</span><br>
<span class="quotelev1">&gt; tuple passed to the read commands (and passed to many other MPI 
</span><br>
<span class="quotelev1">&gt; routines) describes the layout of memory --  Not the layout of data in 
</span><br>
<span class="quotelev1">&gt; the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To describe the file layout you set a file view, as you have already 
</span><br>
<span class="quotelev1">&gt; done a few calls earlier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is your memory buffer?  it allocated like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   allocate(buffer(ijsiz(ir),numrec))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which (if I am reading fortran correctly) is a contiguous chunk of memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If instead you had a more elaborate data structure, like a mesh of some 
</span><br>
<span class="quotelev1">&gt; kind, then passing an indexed type to the read call might make more sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24840.php">Blosch, Edwin L: "[OMPI users] Question on process and memory affinity with 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
<li><strong>In reply to:</strong> <a href="24838.php">Rob Latham: "Re: [OMPI users] MPIIO and derived data types"</a>
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
