<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 19:29:32 2012" -->
<!-- isoreceived="20120702232932" -->
<!-- sent="Mon, 2 Jul 2012 19:29:27 -0400" -->
<!-- isosent="20120702232927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="1A8229EF-44E1-49D2-8BA4-8A82D87B3CBC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120627223254.GA24102_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce hangs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 19:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19728.php">Jeff Squyres: "[OMPI users] Fwd: EuroMPI 2012 Call for participation"</a>
<li><strong>Previous message:</strong> <a href="19726.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 27, 2012, at 6:32 PM, Martin Siegert wrote:
<br>
<p><span class="quotelev1">&gt; However, there is another issue that may affect the performance of the 1.6.1
</span><br>
<span class="quotelev1">&gt; version. I see a LOT of the following messages on stderr:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to register memory in the driver.
</span><br>
<span class="quotelev1">&gt; Please check /var/log/messages or dmesg for driver specific failure
</span><br>
<span class="quotelev1">&gt; reason.
</span><br>
<span class="quotelev1">&gt; The failure occured here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:    b413
</span><br>
<span class="quotelev1">&gt;  Device:        mlx4_0
</span><br>
<span class="quotelev1">&gt;  Function:      openib_reg_mr()
</span><br>
<span class="quotelev1">&gt;  Errno says:    Cannot allocate memory (errno=12)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>There's been a LOT of discussion about this by the developers (both on-line and off).
<br>
<p>We've removed that error message, so at least you won't see it ad infinitum.
<br>
<p>What's happening is that you're getting a registered memory imbalance -- see <a href="http://blogs.cisco.com/performance/registered-memory-imbalances/">http://blogs.cisco.com/performance/registered-memory-imbalances/</a> for some details.
<br>
<p>The fix we put in solves registered memory exhaustion in most cases (it falls back to send/recv in that case), but due to OMPI's lazy wire up, it can still happen later (e.g., late in an application you do an MPI_SEND to a new recipient, but it can't allocate a new QP because it's out of registered memory).
<br>
<p>It turns out to be a rather sticky problem to solve.  We're still debating.  :-\
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
<li><strong>Next message:</strong> <a href="19728.php">Jeff Squyres: "[OMPI users] Fwd: EuroMPI 2012 Call for participation"</a>
<li><strong>Previous message:</strong> <a href="19726.php">Jeff Squyres: "Re: [OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19696.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
