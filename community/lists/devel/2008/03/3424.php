<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 14:51:35 2008" -->
<!-- isoreceived="20080310185135" -->
<!-- sent="Mon, 10 Mar 2008 13:51:24 -0500" -->
<!-- isosent="20080310185124" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="47D5832C.8050805_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080310164858.GC812_at_minantech.com" -->
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
<strong>Date:</strong> 2008-03-10 14:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Mon, Mar 10, 2008 at 09:50:13AM -0500, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I personally don't like the idea to add another layer of complexity to openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL code just to work around HW that doesn't follow spec. If work around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is simple that is OK, but in this case it is not so simple and will add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code path that is rarely tested. A simple workaround for the problem may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be to not configure multiple QPs if HW has a bug (and we can extend ini
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file to contain this info).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't sound too complex to implement the above design.  In fact, 
</span><br>
<span class="quotelev2">&gt;&gt; that's the way this btl used to work, no?    There are large customers 
</span><br>
<span class="quotelev2">&gt;&gt; requesting OMPI over cxgb3 and we're ready to provide the effort to get 
</span><br>
<span class="quotelev2">&gt;&gt; this done.  So I request we come to an agreement on how to support this 
</span><br>
<span class="quotelev2">&gt;&gt; device efficiently (and for ompi-1.3).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes. The btl used to work like that before. But the current way of doing
</span><br>
<span class="quotelev1">&gt; credit management requires much less memory, so I don't think reverting
</span><br>
<span class="quotelev1">&gt; to the old way is a right thing. And having two different ways of
</span><br>
<span class="quotelev1">&gt; sending credit updates seems like additional complexity. The problem is
</span><br>
<span class="quotelev1">&gt; not just with writing code, but this code will have to be maintained for
</span><br>
<span class="quotelev1">&gt; unknown period of time (will this problem be solved in your next gen HW?).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes.
<br>
<span class="quotelev1">&gt; I am OK with adding old fc in addition to current fc if the code is trivial
</span><br>
<span class="quotelev1">&gt; and easy to maintain. Do you think it is possible to add what you want
</span><br>
<span class="quotelev1">&gt; and meet these requirements?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I hope so! :)
<br>
<p>But I think we're going to end up using just a single PP QP for this 
<br>
version of the chelsio HW. We're exploring how that works now. The next 
<br>
gen rnic from chelsio will support SRQs and fix this post_recv issue, so 
<br>
we can then plug in properly with OMPI.
<br>
<p>Steve.
<br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3425.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3423.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
