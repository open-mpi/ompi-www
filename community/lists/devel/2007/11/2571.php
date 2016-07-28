<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 21:33:16 2007" -->
<!-- isoreceived="20071108023316" -->
<!-- sent="Wed, 07 Nov 2007 21:33:11 -0500" -->
<!-- isosent="20071108023311" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="47327567.4040009_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDF71936-2752-43A7-A308-6B897FDF6BD4_at_cisco.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 21:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This is not a problem in the current code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember that this is all in the context of Galen's proposal for  
</span><br>
<span class="quotelev1">&gt; btl_send() to be able to return NOT_ON_WIRE -- meaning that the send  
</span><br>
<span class="quotelev1">&gt; was successful, but it has not yet been sent (e.g., openib BTL  
</span><br>
<span class="quotelev1">&gt; buffered it because it ran out of credits).
</span><br>
<p>Sorry if I miss something obvious, but why does the PML has to be aware 
<br>
of the flow control situation of the BTL ? If the BTL cannot send 
<br>
something right away for any reason, it should be the responsibility of 
<br>
the BTL to buffer it and to progress on it later.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2570.php">Ralph Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2572.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
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
