<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 16:46:03 2012" -->
<!-- isoreceived="20120210214603" -->
<!-- sent="Fri, 10 Feb 2012 16:45:59 -0500" -->
<!-- isosent="20120210214559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="65860D93-CCA0-4209-807F-474A8595C17C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F357EE8.3010201_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 16:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10389.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10388.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2012, at 3:32 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; The point of the question isn't related to WHY eth8 is useless - just assume it is.
</span><br>
<span class="quotelev1">&gt; Assume it is UP, but useless for whatever reasons motivated writing FAQ #220.
</span><br>
<span class="quotelev1">&gt; It could be Terry's example of a port connected to the service processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The concern is what happens in this situation when the user, following the advice in the FAQ, passes an explicit setting for btl_tcp_if_exclude, which DOES NOT include virbr0?
</span><br>
<span class="quotelev1">&gt; They don't know it was there before, or that it needs to be there (the FAQ states that lo MUST be included).
</span><br>
<span class="quotelev1">&gt; So, by following the FAQ they don't resolve their problem.
</span><br>
<span class="quotelev1">&gt; OMPI ceases any attempts use of eth8 (or whatever), but loss of the implicit virbr0 from the exclude list results in their system attempting to use virbr0 (and thus continue to fail).  Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe the FAQ just needs an update to address my concern.
</span><br>
<p>Got it.  Sure, I can update the faq to be a bit more loose in the definition of what must be excluded.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10389.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10388.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
