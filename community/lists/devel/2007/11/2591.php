<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 11:27:05 2007" -->
<!-- isoreceived="20071108162705" -->
<!-- sent="Thu, 8 Nov 2007 11:26:58 -0500" -->
<!-- isosent="20071108162658" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="884F4C34-CE46-41BC-B9D1-7CF0B2E16772_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="473334A2.2010008_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collective problems<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 11:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2590.php">Andrew Friedley: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2590.php">Andrew Friedley: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Decrease the latency is the main reason. If we delay the MPI  
<br>
completion, then we always have to call opal_progress at least once in  
<br>
order to allow the BTL to trigger the callback. In the current  
<br>
implementation, we never call opal_progress on small messages, unless  
<br>
there is some kind of resource starvation.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 8, 2007, at 11:09 AM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Personally, I'd rather just not mark MPI completion until a local
</span><br>
<span class="quotelev2">&gt;&gt; completion callback from the BTL.  But others don't like that idea,  
</span><br>
<span class="quotelev2">&gt;&gt; so
</span><br>
<span class="quotelev2">&gt;&gt; we came up with a way for back pressure from the BTL to say &quot;it's not
</span><br>
<span class="quotelev2">&gt;&gt; on the wire yet&quot;.  This is more complicated than just not marking MPI
</span><br>
<span class="quotelev2">&gt;&gt; completion early, but why would we do something that helps real apps
</span><br>
<span class="quotelev2">&gt;&gt; at the expense of benchmarks?  That would just be silly!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW this issue is also very relevant for the UD BTL, especially with
</span><br>
<span class="quotelev1">&gt; some new work I've done in the last week (currently having problems  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; send-side completion semantics).  I missed it, what was the reasoning
</span><br>
<span class="quotelev1">&gt; for not marking MPI completion until a callback from the BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2591/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2592.php">Li-Ta Lo: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2590.php">Andrew Friedley: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2590.php">Andrew Friedley: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
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
