<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 10:28:28 2009" -->
<!-- isoreceived="20090223152828" -->
<!-- sent="Mon, 23 Feb 2009 10:28:22 -0500" -->
<!-- isosent="20090223152822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="BBC1F3DD-DAAB-46E2-B017-69DAF3AC1BF0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499FA906.6080409_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 10:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5503.php">Eugene Loh: "[OMPI devel] sendi side effects in the case of failure"</a>
<li><strong>In reply to:</strong> <a href="5502.php">Eugene Loh: "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5508.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds reasonable to me.  George / Brian?
<br>
<p><p>On Feb 21, 2009, at 2:11 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; What:  Eliminate the &quot;descriptor&quot; argument from sendi functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why:  The only thing this argument is used for is so that the sendi  
</span><br>
<span class="quotelev1">&gt; function can allocate a descriptor in the event that the &quot;send&quot;  
</span><br>
<span class="quotelev1">&gt; cannot complete.  But, in that case, the sendi reverts to the PML,  
</span><br>
<span class="quotelev1">&gt; where there is already code to allocate a descriptor.  So, each  
</span><br>
<span class="quotelev1">&gt; sendi function (in each BTL that has a sendi function) must have  
</span><br>
<span class="quotelev1">&gt; code that is already in the PML anyhow.  This is unnecessary extra  
</span><br>
<span class="quotelev1">&gt; coding and not clean design.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where:  In each BTL that has a sendi function (only three, and there  
</span><br>
<span class="quotelev1">&gt; are not all used) and in the function prototype and at the PML  
</span><br>
<span class="quotelev1">&gt; calling site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When:  I'd like to incorporate this in the shared-memory latency  
</span><br>
<span class="quotelev1">&gt; work I'm doing that we're targetting for 1.3.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout:  Feb 27.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5503.php">Eugene Loh: "[OMPI devel] sendi side effects in the case of failure"</a>
<li><strong>In reply to:</strong> <a href="5502.php">Eugene Loh: "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5508.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
