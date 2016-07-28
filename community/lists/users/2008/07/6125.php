<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 09:19:36 2008" -->
<!-- isoreceived="20080724131936" -->
<!-- sent="Thu, 24 Jul 2008 08:19:31 -0500" -->
<!-- isosent="20080724131931" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="20080724131931.GQ26677_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48872405.4030005_at_ecmwf.int" -->
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
<strong>Date:</strong> 2008-07-24 09:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6126.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 23, 2008 at 01:28:53PM +0100, Neil Storer wrote:
<br>
<span class="quotelev1">&gt; Unless you have a parallel filesystem, such as GPFS, which is
</span><br>
<span class="quotelev1">&gt; well-defined and does support file-locking, I would suggest writing to
</span><br>
<span class="quotelev1">&gt; different files, or doing I/O via a single MPI task, or via MPI-IO.
</span><br>
<p>I concur that NFS for a parallel I/O application should be avoided at
<br>
all costs.  MPI-IO implementations do the best they can to function
<br>
correctly in the face of NFS challenges, but do so at a terrible cost
<br>
to performance.
<br>
<p>There are several good parallel file systems available, both free and
<br>
commercial.  No one in MPI-IO land should be stuck with NFS v3.
<br>
<p>(there are many reasons to be hopeful that pNFS changes this story)
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
<li><strong>Next message:</strong> <a href="6126.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
