<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 11:43:28 2007" -->
<!-- isoreceived="20070718154328" -->
<!-- sent="Wed, 18 Jul 2007 10:43:24 -0500" -->
<!-- isosent="20070718154324" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="20070718154324.GW8439_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2007-07-18 11:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3708.php">Javier Fern&#225;ndez: "[OMPI users] Octave MPITB for Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3722.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3722.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 10, 2007 at 04:36:01PM +0000, jody wrote:
<br>
<span class="quotelev1">&gt; I think there is still some problem.
</span><br>
<span class="quotelev1">&gt; I create different datatypes by resizing MPI_SHORT with
</span><br>
<span class="quotelev1">&gt; different negative lower bounds (depending on the rank)
</span><br>
<span class="quotelev1">&gt; and the same extent (only depending on the number of processes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I get an error as soon as  MPI_File_set_view is called with my new
</span><br>
<span class="quotelev1">&gt; datatype:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: Unsupported datatype passed to ADIOI_Count_contiguous_blocks
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22229] MPI_ABORT invoked on rank 0 in communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 1
</span><br>
<p>Hi Jody
<br>
<p>I was wrong about this being a problem with OpenMPI's version of
<br>
ROMIO.  The OpenMPI guys have synced up fairly recently with the
<br>
OpenMPI in MPICH2.  
<br>
<p>ROMIO, even the very latest in CVS version, doesn't support resized
<br>
types yet.  
<br>
<p>Looks like you'll have to take George's alternate idea of MPI_UB and
<br>
MPI_LB. 
<br>
<p>We'll let the OpenMPI guys know when resized support is in place.
<br>
<p>Sorry for the confusion.
<br>
==rob
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
<li><strong>Next message:</strong> <a href="3710.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3708.php">Javier Fern&#225;ndez: "[OMPI users] Octave MPITB for Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3722.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3722.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
