<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 08:48:38 2012" -->
<!-- isoreceived="20121108134838" -->
<!-- sent="Thu, 8 Nov 2012 08:48:33 -0500" -->
<!-- isosent="20121108134833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="0A69CCCA-4BE1-4655-B95C-D9E901369DF1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D3781C8-70D2-4966-B280-B6B1CC73B93C_at_umn.edu" -->
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
<strong>Date:</strong> 2012-11-08 08:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2012, at 7:21 PM, Jens Glaser wrote:
<br>
<p><span class="quotelev1">&gt; With the help of MVAPICH2 developer S. Potluri the problem was isolated and fixed.
</span><br>
<p>Sorry about not replying; we're all (literally) very swamped trying to prepare for the Supercomputing trade show/conference next week.  I know I'm waaaay behind on OMPI user mails; sorry folks.  :-(
<br>
<p><span class="quotelev1">&gt; It was, as expected, due to the library not intercepting
</span><br>
<span class="quotelev1">&gt; the cudaHostAlloc() and cudaFreeHost() calls to register pinned memory, as would be required for the registration cache to work.
</span><br>
<p>Rolf/NVIDIA -- what's the chance of getting that to be intercepted properly?  Do you guys have good hooks for this?  (HINT HINT :-) )
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
<li><strong>Next message:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20664.php">Rolf vandeVaart: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
