<?
$subject_val = "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 20:01:08 2011" -->
<!-- isoreceived="20111214010108" -->
<!-- sent="Wed, 14 Dec 2011 11:29:41 +1030" -->
<!-- isosent="20111214005941" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5" -->
<!-- id="20111214112941.6f5ebf2c_at_Gantu.yeoh.info" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAL3GGtrOzHt+nbxhfNOfY9FirhAXhKScFd4ukLL6pAdvdom-OA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 19:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10080.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10061.php">Mike Dubman: "[OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike,
<br>
<p>On Mon, 12 Dec 2011 19:46:08 +0200
<br>
Mike Dubman &lt;mike.ompi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The latest v1.5 from trunk, compiled in debug mode yields following
</span><br>
<span class="quotelev1">&gt; error with openib.
</span><br>
<span class="quotelev1">&gt; The quick blame leads to the following commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r25616 | bosilca | 2011-12-10 00:18:16 +0200 (Sat, 10 Dec 2011) | 4
</span><br>
<span class="quotelev1">&gt; lines Fixes #2930: CMR: memcpy() w/overlapping addresses in
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; Patch attached to the ticket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sorry, late to the discussion. This is a spurious warning caused by
<br>
passing the NULL pointer to the opal free function which is actually ok.
<br>
It was fixed by #2884 - this is why you don't see the problem in trunk.
<br>
<p>I'll put in CMRs for 1.4/1.5
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10080.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="10061.php">Mike Dubman: "[OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Reply:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
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
