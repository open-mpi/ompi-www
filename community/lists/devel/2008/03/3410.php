<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  9 16:39:59 2008" -->
<!-- isoreceived="20080309203959" -->
<!-- sent="Sun, 9 Mar 2008 22:39:51 +0200" -->
<!-- isosent="20080309203951" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="20080309203951.GB812_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080309194809.GC8275_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-09 16:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>Previous message:</strong> <a href="3409.php">Jon Mason: "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3409.php">Jon Mason: "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Mar 09, 2008 at 02:48:09PM -0500, Jon Mason wrote:
<br>
<span class="quotelev1">&gt; Issue (as described by Steve Wise):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently OMPI uses qp 0 for all credit updates (by design).  This breaks
</span><br>
<span class="quotelev1">&gt; when running over the chelsio rnic due to a race condition between
</span><br>
<span class="quotelev1">&gt; advertising the availability of a buffer using qp0 when the buffer was
</span><br>
<span class="quotelev1">&gt; posted on one of the other qps.  It is possible (and easily reproducible)
</span><br>
<span class="quotelev1">&gt; that the peer gets the advertisement and sends data into the qp in question
</span><br>
<span class="quotelev1">&gt; _before_ the rnic has processed the recv buffer and made it available for
</span><br>
<span class="quotelev1">&gt; placement.  This results in a connection termination.  BTW, other hca's
</span><br>
<span class="quotelev1">&gt; have this issue too.  ehca, for example, claims they have the same race
</span><br>
<span class="quotelev1">&gt; condition.  I think the timing hole is much smaller though for devices that
</span><br>
<span class="quotelev1">&gt; have 2 separate work queues for the SQ and RQ of a QP.  Chelsio has a
</span><br>
<span class="quotelev1">&gt; single work queue to implement both SQ and RQ, so processing of RQ work
</span><br>
<span class="quotelev1">&gt; requests gets queued up behind pending SQ entries which can make this race
</span><br>
<span class="quotelev1">&gt; condition more prevalent.
</span><br>
There was a discussion about this on openfabrics mailing list and the
<br>
conclusion was that what Open MPI does is correct according to IB/iWarp
<br>
spec.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know of any way to avoid this issue other that to ensure that all
</span><br>
<span class="quotelev1">&gt; credit updates for qp X are posted only on qp X.  If we do this, then the
</span><br>
<span class="quotelev1">&gt; chelsio HW/FW ensures that the RECV is posted before the subsequent send
</span><br>
<span class="quotelev1">&gt; operation that advertises the buffer is processed.
</span><br>
Is it possible to fix your FW to follow iWarp spec? Perhaps it is
<br>
possible to implement ibv_post_recv() so that it will not return before
<br>
post receive is processed?
<br>
<p><span class="quotelev1">&gt; To address this Jeff Squyres recommends:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. make an mca parameter that governs this behavior (i.e., whether to send
</span><br>
<span class="quotelev1">&gt; all flow control messages on QP0 or on their respective QPs)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. extend the ini file parsing code to accept this parameter as well (need
</span><br>
<span class="quotelev1">&gt; to add a strcmp or two)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. extend the ini file to fill in this value for all the nic's listed (to
</span><br>
<span class="quotelev1">&gt; include yours).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. extend the logic in the rest of the btl to send the flow control
</span><br>
<span class="quotelev1">&gt; messages either across qp0 or the respective qp, depending on the value of
</span><br>
<span class="quotelev1">&gt; the mca param / ini value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am happy to do the work to enable this, but I would like to get
</span><br>
<span class="quotelev1">&gt; everyone's feed back before I start down this path.  Jeff said Gleb did
</span><br>
<span class="quotelev1">&gt; the work to change openib to behave this way, so any insight would be
</span><br>
<span class="quotelev1">&gt; helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I personally don't like the idea to add another layer of complexity to openib
<br>
BTL code just to work around HW that doesn't follow spec. If work around
<br>
is simple that is OK, but in this case it is not so simple and will add
<br>
code path that is rarely tested. A simple workaround for the problem may
<br>
be to not configure multiple QPs if HW has a bug (and we can extend ini
<br>
file to contain this info).
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>Previous message:</strong> <a href="3409.php">Jon Mason: "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3409.php">Jon Mason: "[OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
