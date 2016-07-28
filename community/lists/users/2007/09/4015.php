<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 13:27:54 2007" -->
<!-- isoreceived="20070914172754" -->
<!-- sent="Fri, 14 Sep 2007 12:27:50 -0500" -->
<!-- isosent="20070914172750" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiio romio etc" -->
<!-- id="20070914172748.GS25905_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7296F23A-BB4C-481C-A6A0-8143E009B051_at_umich.edu" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-14 13:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Previous message:</strong> <a href="4014.php">Richard Friedman: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="3981.php">Brock Palen: "[OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Reply:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 07, 2007 at 10:18:55AM -0400, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; Is there a way to find out which ADIO options romio was built with?
</span><br>
<p>not easily. You can use 'nm' and look at the symbols :&gt;
<br>
<p><span class="quotelev1">&gt; Also does OpenMPI's romio come with pvfs2 support included? What  
</span><br>
<span class="quotelev1">&gt; about Luster or GPFS.
</span><br>
<p>OpenMPI has shipped with PVFS v2 support for a long time.  Not sure
<br>
how you enable it, though.  --with-filesystems=ufs+nfs+pvfs2 might
<br>
work for OpenMPI as it does for MPICH2.
<br>
<p>All versions of ROMIO support Lustre and GPFS the same way: with the
<br>
&quot;generic unix filesystem&quot; (UFS) driver.  Weikuan Yu at ORNL has been
<br>
working on a native &quot;AD_LUSTRE&quot; driver and some improvements to ROMIO
<br>
collective I/O.   Likely to be in the next ROMIO release.
<br>
<p>For GPFS, the only optimized MPI-IO implementation is IBM's MPI for
<br>
AIX.  You're likely to see decent performance with the UFS driver,
<br>
though.
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
<li><strong>Next message:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Previous message:</strong> <a href="4014.php">Richard Friedman: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="3981.php">Brock Palen: "[OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Reply:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
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
