<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:08:59 2012" -->
<!-- isoreceived="20121108140859" -->
<!-- sent="Thu, 8 Nov 2012 09:08:55 -0500" -->
<!-- isosent="20121108140855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="3FDE6BA3-EB22-4390-8917-1A5D483308DF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E8E882D63_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 09:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2012, at 8:51 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Not sure.  I will look into this.   And thank you for the feedback Jens!
</span><br>
<p>FWIW, I +1 Jens' request.  MPI implementations are able to handle network registration mechanisms via standard memory hooks (their hooks are actually pretty terrible, but for the most part, they are generally functional).
<br>
<p>If CUDA requires registered memory, then it should also provide hooks so that MPI implementations can &quot;just make it work&quot; from the users' perspective (and please please please provide BETTER hooks than verbs / glibc malloc!).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
