<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 10:50:19 2008" -->
<!-- isoreceived="20080310145019" -->
<!-- sent="Mon, 10 Mar 2008 09:50:13 -0500" -->
<!-- isosent="20080310145013" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="47D54AA5.4000404_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080309203951.GB812_at_minantech.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 10:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3414.php">Matthias Jurenz: "Re: [OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>In reply to:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Sun, Mar 09, 2008 at 02:48:09PM -0500, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Issue (as described by Steve Wise):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently OMPI uses qp 0 for all credit updates (by design).  This breaks
</span><br>
<span class="quotelev2">&gt;&gt; when running over the chelsio rnic due to a race condition between
</span><br>
<span class="quotelev2">&gt;&gt; advertising the availability of a buffer using qp0 when the buffer was
</span><br>
<span class="quotelev2">&gt;&gt; posted on one of the other qps.  It is possible (and easily reproducible)
</span><br>
<span class="quotelev2">&gt;&gt; that the peer gets the advertisement and sends data into the qp in question
</span><br>
<span class="quotelev2">&gt;&gt; _before_ the rnic has processed the recv buffer and made it available for
</span><br>
<span class="quotelev2">&gt;&gt; placement.  This results in a connection termination.  BTW, other hca's
</span><br>
<span class="quotelev2">&gt;&gt; have this issue too.  ehca, for example, claims they have the same race
</span><br>
<span class="quotelev2">&gt;&gt; condition.  I think the timing hole is much smaller though for devices that
</span><br>
<span class="quotelev2">&gt;&gt; have 2 separate work queues for the SQ and RQ of a QP.  Chelsio has a
</span><br>
<span class="quotelev2">&gt;&gt; single work queue to implement both SQ and RQ, so processing of RQ work
</span><br>
<span class="quotelev2">&gt;&gt; requests gets queued up behind pending SQ entries which can make this race
</span><br>
<span class="quotelev2">&gt;&gt; condition more prevalent.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; There was a discussion about this on openfabrics mailing list and the
</span><br>
<span class="quotelev1">&gt; conclusion was that what Open MPI does is correct according to IB/iWarp
</span><br>
<span class="quotelev1">&gt; spec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Hey Gleb.  Yes, the conclusion was the rdma device and driver should 
<br>
ensure this.  But also note that the ehca IB device also has this same 
<br>
race condition.  So I wonder if the other IB devices really do also have 
<br>
this race condition?  I think it is worse for the cxgb3 device due to 
<br>
its architecture (a single queue for both send and recv work requests).
<br>
<p><span class="quotelev2">&gt;&gt; I don't know of any way to avoid this issue other that to ensure that all
</span><br>
<span class="quotelev2">&gt;&gt; credit updates for qp X are posted only on qp X.  If we do this, then the
</span><br>
<span class="quotelev2">&gt;&gt; chelsio HW/FW ensures that the RECV is posted before the subsequent send
</span><br>
<span class="quotelev2">&gt;&gt; operation that advertises the buffer is processed.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Is it possible to fix your FW to follow iWarp spec? Perhaps it is
</span><br>
<span class="quotelev1">&gt; possible to implement ibv_post_recv() so that it will not return before
</span><br>
<span class="quotelev1">&gt; post receive is processed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I've been trying come up with a solution in the lib/driver/fw to enforce 
<br>
this behavior.  The only way I can see doing it is to follow the recv 
<br>
work requests with a 0B write work request, and spinning or blocking 
<br>
until the 0B write completes (note: 0B write doesn't emit anything on 
<br>
the wire for the cxgb3 device).  This will guarantee that the recv's are 
<br>
ready before returning from the libcxgb3 post_recv function.  However 
<br>
this is problematic because there can be real OMPI work completions in 
<br>
the CQ that need processing.  So I don't know how to do this in the 
<br>
driver/library. 
<br>
<p>Also note, any such solution will entirely drain the SQ each time a recv 
<br>
is posted.  This will kill performance.
<br>
<p>(just thinking out loud here): The OMPi code could be designed to _not_ 
<br>
assume recv's are posted until the CPC indicates they are ready. IE sort 
<br>
of asynchronous behavior.   When the recvs are ready, the CPC could 
<br>
up-call the btl and then the credits could be updated.  This sounds 
<br>
painful though :)
<br>
<span class="quotelev2">&gt;&gt; To address this Jeff Squyres recommends:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. make an mca parameter that governs this behavior (i.e., whether to send
</span><br>
<span class="quotelev2">&gt;&gt; all flow control messages on QP0 or on their respective QPs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. extend the ini file parsing code to accept this parameter as well (need
</span><br>
<span class="quotelev2">&gt;&gt; to add a strcmp or two)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. extend the ini file to fill in this value for all the nic's listed (to
</span><br>
<span class="quotelev2">&gt;&gt; include yours).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. extend the logic in the rest of the btl to send the flow control
</span><br>
<span class="quotelev2">&gt;&gt; messages either across qp0 or the respective qp, depending on the value of
</span><br>
<span class="quotelev2">&gt;&gt; the mca param / ini value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am happy to do the work to enable this, but I would like to get
</span><br>
<span class="quotelev2">&gt;&gt; everyone's feed back before I start down this path.  Jeff said Gleb did
</span><br>
<span class="quotelev2">&gt;&gt; the work to change openib to behave this way, so any insight would be
</span><br>
<span class="quotelev2">&gt;&gt; helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I personally don't like the idea to add another layer of complexity to openib
</span><br>
<span class="quotelev1">&gt; BTL code just to work around HW that doesn't follow spec. If work around
</span><br>
<span class="quotelev1">&gt; is simple that is OK, but in this case it is not so simple and will add
</span><br>
<span class="quotelev1">&gt; code path that is rarely tested. A simple workaround for the problem may
</span><br>
<span class="quotelev1">&gt; be to not configure multiple QPs if HW has a bug (and we can extend ini
</span><br>
<span class="quotelev1">&gt; file to contain this info).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It doesn't sound too complex to implement the above design.  In fact, 
<br>
that's the way this btl used to work, no?    There are large customers 
<br>
requesting OMPI over cxgb3 and we're ready to provide the effort to get 
<br>
this done.  So I request we come to an agreement on how to support this 
<br>
device efficiently (and for ompi-1.3).
<br>
<p>On the single-QP angle, Can I just run OMPI with only specifying 1 QP?  
<br>
Or will that require coding changes?
<br>
<p><p>Thanks!
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3414.php">Matthias Jurenz: "Re: [OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>In reply to:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
