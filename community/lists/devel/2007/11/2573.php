<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 22:56:52 2007" -->
<!-- isoreceived="20071108035652" -->
<!-- sent="Wed, 07 Nov 2007 22:56:38 -0400" -->
<!-- isosent="20071108025638" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="C357F326.1064A%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D01DEA01-65E6-4B17-9C1B-9B88646CDE91_at_cisco.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 21:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this mean that we don&#185;t have a queue to store btl level descriptors
<br>
that
<br>
&nbsp;are only partially complete ?  Do we do an all or nothing with respect to
<br>
btl
<br>
&nbsp;level requests at this stage ?
<br>
<p>Seems to me like we want to mark things complete at the MPI level ASAP, and
<br>
&nbsp;that this proposal is not to do that &#173; is this correct ?
<br>
<p>Rich
<br>
<p><p>On 11/7/07 11:26 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 7, 2007, at 9:33 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Remember that this is all in the context of Galen's proposal for
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; btl_send() to be able to return NOT_ON_WIRE -- meaning that the send
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; was successful, but it has not yet been sent (e.g., openib BTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; buffered it because it ran out of credits).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry if I miss something obvious, but why does the PML has to be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; aware
</span><br>
<span class="quotelev3">&gt;&gt; &gt; of the flow control situation of the BTL ? If the BTL cannot send
</span><br>
<span class="quotelev3">&gt;&gt; &gt; something right away for any reason, it should be the responsibility
</span><br>
<span class="quotelev3">&gt;&gt; &gt; of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the BTL to buffer it and to progress on it later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's currently the way it is.  But the BTL currently only has the
</span><br>
<span class="quotelev1">&gt; option to say two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. &quot;ok, done!&quot; -- then the PML will think that the request is complete
</span><br>
<span class="quotelev1">&gt; 2. &quot;doh -- error!&quot; -- then the PML thinks that Something Bad
</span><br>
<span class="quotelev1">&gt; Happened(tm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we really need is for the BTL to have a third option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. &quot;not done yet!&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So that the PML knows that the request is not yet done, but will allow
</span><br>
<span class="quotelev1">&gt; other things to progress while we're waiting for it to complete.
</span><br>
<span class="quotelev1">&gt; Without this, the openib BTL currently replies &quot;ok, done!&quot;, even when
</span><br>
<span class="quotelev1">&gt; it has only buffered a message (rather than actually sending it out).
</span><br>
<span class="quotelev1">&gt; This optimization works great (yeah, I know...) except for apps that
</span><br>
<span class="quotelev1">&gt; don't dip into the MPI library frequently.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
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
