<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:06:23 2010" -->
<!-- isoreceived="20100622220623" -->
<!-- sent="Tue, 22 Jun 2010 18:06:18 -0400" -->
<!-- isosent="20100622220618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction" -->
<!-- id="1CCC7C2D-83A0-4D93-AA1B-A1C6B5B7D85C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f630ed284cce.4c20fb22_at_mssm.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 18:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13383.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13382.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2010, at 6:04 PM, Mihaly Mezei wrote:
<br>
<p><span class="quotelev1">&gt; In mpich, I could assign MPI_WORLD_COMM (i.e., mpich did not accept MPI_WORLD_COMM in a common block either) to an integer and that was what I put into the common block,. Openmpi does not accept that new integer as a communicator.
</span><br>
<p>It should.  MPI_COMM_WORLD is an integer, just like any other integer.
<br>
<p>Can you send a small code snipit that shows the problem?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13383.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>In reply to:</strong> <a href="13382.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Reply:</strong> <a href="13385.php">Mihaly Mezei: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
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
