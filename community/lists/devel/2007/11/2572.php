<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 22:27:08 2007" -->
<!-- isoreceived="20071108032708" -->
<!-- sent="Wed, 7 Nov 2007 22:26:59 -0500" -->
<!-- isosent="20071108032659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="D01DEA01-65E6-4B17-9C1B-9B88646CDE91_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47327567.4040009_at_myri.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 22:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2573.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2571.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2571.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2573.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2573.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2007, at 9:33 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Remember that this is all in the context of Galen's proposal for
</span><br>
<span class="quotelev2">&gt;&gt; btl_send() to be able to return NOT_ON_WIRE -- meaning that the send
</span><br>
<span class="quotelev2">&gt;&gt; was successful, but it has not yet been sent (e.g., openib BTL
</span><br>
<span class="quotelev2">&gt;&gt; buffered it because it ran out of credits).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if I miss something obvious, but why does the PML has to be  
</span><br>
<span class="quotelev1">&gt; aware
</span><br>
<span class="quotelev1">&gt; of the flow control situation of the BTL ? If the BTL cannot send
</span><br>
<span class="quotelev1">&gt; something right away for any reason, it should be the responsibility  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; the BTL to buffer it and to progress on it later.
</span><br>
<p><p>That's currently the way it is.  But the BTL currently only has the  
<br>
option to say two things:
<br>
<p>1. &quot;ok, done!&quot; -- then the PML will think that the request is complete
<br>
2. &quot;doh -- error!&quot; -- then the PML thinks that Something Bad  
<br>
Happened(tm)
<br>
<p>What we really need is for the BTL to have a third option:
<br>
<p>3. &quot;not done yet!&quot;
<br>
<p>So that the PML knows that the request is not yet done, but will allow  
<br>
other things to progress while we're waiting for it to complete.   
<br>
Without this, the openib BTL currently replies &quot;ok, done!&quot;, even when  
<br>
it has only buffered a message (rather than actually sending it out).   
<br>
This optimization works great (yeah, I know...) except for apps that  
<br>
don't dip into the MPI library frequently.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2573.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2571.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2571.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2573.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2573.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
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
