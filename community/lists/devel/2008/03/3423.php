<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 12:49:09 2008" -->
<!-- isoreceived="20080310164909" -->
<!-- sent="Mon, 10 Mar 2008 18:48:59 +0200" -->
<!-- isosent="20080310164859" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="20080310164858.GC812_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47D54AA5.4000404_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2008-03-10 12:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3424.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3422.php">aguillen_at_[hidden]: "[OMPI devel] MATLAB interface"</a>
<li><strong>In reply to:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3424.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3424.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 10, 2008 at 09:50:13AM -0500, Steve Wise wrote:
<br>
<span class="quotelev2">&gt; &gt; I personally don't like the idea to add another layer of complexity to openib
</span><br>
<span class="quotelev2">&gt; &gt; BTL code just to work around HW that doesn't follow spec. If work around
</span><br>
<span class="quotelev2">&gt; &gt; is simple that is OK, but in this case it is not so simple and will add
</span><br>
<span class="quotelev2">&gt; &gt; code path that is rarely tested. A simple workaround for the problem may
</span><br>
<span class="quotelev2">&gt; &gt; be to not configure multiple QPs if HW has a bug (and we can extend ini
</span><br>
<span class="quotelev2">&gt; &gt; file to contain this info).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't sound too complex to implement the above design.  In fact, 
</span><br>
<span class="quotelev1">&gt; that's the way this btl used to work, no?    There are large customers 
</span><br>
<span class="quotelev1">&gt; requesting OMPI over cxgb3 and we're ready to provide the effort to get 
</span><br>
<span class="quotelev1">&gt; this done.  So I request we come to an agreement on how to support this 
</span><br>
<span class="quotelev1">&gt; device efficiently (and for ompi-1.3).
</span><br>
Yes. The btl used to work like that before. But the current way of doing
<br>
credit management requires much less memory, so I don't think reverting
<br>
to the old way is a right thing. And having two different ways of
<br>
sending credit updates seems like additional complexity. The problem is
<br>
not just with writing code, but this code will have to be maintained for
<br>
unknown period of time (will this problem be solved in your next gen HW?).
<br>
I am OK with adding old fc in addition to current fc if the code is trivial
<br>
and easy to maintain. Do you think it is possible to add what you want
<br>
and meet these requirements?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3424.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3422.php">aguillen_at_[hidden]: "[OMPI devel] MATLAB interface"</a>
<li><strong>In reply to:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3424.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3424.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
