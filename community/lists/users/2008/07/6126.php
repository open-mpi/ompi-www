<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 09:26:05 2008" -->
<!-- isoreceived="20080724132605" -->
<!-- sent="Thu, 24 Jul 2008 08:25:59 -0500" -->
<!-- isosent="20080724132559" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="20080724132559.GR26677_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7146BE63-8F39-4CE2-A7FB-729440866384_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O with MPI-1<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 09:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6127.php">Adam C Powell IV: "[OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Previous message:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 23, 2008 at 09:47:56AM -0400, Robert Kubrick wrote:
<br>
<span class="quotelev1">&gt; HDF5 supports parallel I/O through MPI-I/O. I've never used it, but I  
</span><br>
<span class="quotelev1">&gt; think the API is easier than direct MPI-I/O, maybe even easier than raw 
</span><br>
<span class="quotelev1">&gt; read/writes given its support for hierarchal objects and metadata.
</span><br>
<p>In addition to the API provided by parallel HDF5 and parallel-NetCDF,
<br>
these high level libraries offer a self-describing portable file
<br>
format.  Pretty nice when collaborating with others. Plus there are a
<br>
host of viewers for these file formats, so that's another thing you
<br>
don't have to worry about.
<br>
<p><span class="quotelev1">&gt; HDF5 supports multiple storage models and it supports MPI-IO.
</span><br>
<span class="quotelev1">&gt; HDF5 has an open interface to access raw storage. This enables HDF5  
</span><br>
<span class="quotelev1">&gt; files to be written to a variety of media, including sequential files, 
</span><br>
<span class="quotelev1">&gt; families of files, memory, Unix sockets (i.e., a network).
</span><br>
<span class="quotelev1">&gt; New &quot;Virtual File&quot; drivers can be added to support new storage access  
</span><br>
<span class="quotelev1">&gt; mechanisms.
</span><br>
<span class="quotelev1">&gt; HDF5 also supports MPI-IO with Parallel HDF5. When building HDF5,  
</span><br>
<span class="quotelev1">&gt; parallel support is included by configuring with the --enable-parallel 
</span><br>
<span class="quotelev1">&gt; option. A tutorial for Parallel HDF5 is included with the HDF5 Tutorial 
</span><br>
<span class="quotelev1">&gt; at:
</span><br>
<span class="quotelev1">&gt;   /HDF5/Tutor/
</span><br>
<p>It's a very good tutorial. Do read the parallel I/O chapter closely,
<br>
especially the parts about enabling collective I/O via property lists
<br>
and transfer templates.  For many HDF5 workloads today, collective I/O
<br>
is the key to getting good performance (this was not always the case
<br>
back in the bad old days of MPICH1 and LAM, but has been since at
<br>
least the HDF5-1.6 series).
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6127.php">Adam C Powell IV: "[OMPI users] MPI_Init segfault on Ubuntu 8.04 version 1.2.7~rc2"</a>
<li><strong>Previous message:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
