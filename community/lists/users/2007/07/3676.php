<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 15:35:07 2007" -->
<!-- isoreceived="20070713193507" -->
<!-- sent="Fri, 13 Jul 2007 14:35:03 -0500" -->
<!-- isosent="20070713193503" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="20070713193503.GX8439_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0707100936l6709dde1u7c89264ca3432eb5_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-13 15:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<li><strong>Previous message:</strong> <a href="3675.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 10, 2007 at 04:36:01PM +0000, jody wrote:
<br>
<span class="quotelev1">&gt; Error: Unsupported datatype passed to ADIOI_Count_contiguous_blocks
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22229] MPI_ABORT invoked on rank 0 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 1
</span><br>
<p>Hi Jody:
<br>
<p>OpenMPI uses an old version of ROMIO.  You get this error because the
<br>
ADIOI_Count_contiguous_blocks routine in this version of ROMIO does
<br>
not understand all MPI datatypes.   
<br>
<p>You can verify that this is the case by building your test against
<br>
MPICH2, which should succeed.  
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
<li><strong>Next message:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<li><strong>Previous message:</strong> <a href="3675.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
