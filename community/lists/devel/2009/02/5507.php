<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 11:10:25 2009" -->
<!-- isoreceived="20090223161025" -->
<!-- sent="Mon, 23 Feb 2009 11:10:19 -0500" -->
<!-- isosent="20090223161019" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="F1A07E4D-7D32-4707-B730-72758189290C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BBC1F3DD-DAAB-46E2-B017-69DAF3AC1BF0_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 11:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5508.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It doesn't sound reasonable to me. There is a reason for this, and I  
<br>
think it's a good reason. The sendi function work for some devices as  
<br>
a fast path for sending data, when the network is not flooded.  
<br>
However, in the case sendi cannot do the job we expect, the fact that  
<br>
it return the descriptor save us a call (we don't have to do the alloc  
<br>
call later). Therefore, in the PML we already have the descriptor and  
<br>
we can hand it back to the BTL, which give a chance for asynchronous  
<br>
progress later on. Without this descriptor, the only option the PML  
<br>
have is to put the PML request in a queue, and to try to send it  
<br>
later, which is very expensive.
<br>
<p>I don't see any good reason not to have it. The fact that it make the  
<br>
BTL a little bit more complex is not a good reason, as we will  
<br>
exchange performance against coding facilities.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 23, 2009, at 10:28 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sounds reasonable to me.  George / Brian?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 21, 2009, at 2:11 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What:  Eliminate the &quot;descriptor&quot; argument from sendi functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why:  The only thing this argument is used for is so that the sendi  
</span><br>
<span class="quotelev2">&gt;&gt; function can allocate a descriptor in the event that the &quot;send&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; cannot complete.  But, in that case, the sendi reverts to the PML,  
</span><br>
<span class="quotelev2">&gt;&gt; where there is already code to allocate a descriptor.  So, each  
</span><br>
<span class="quotelev2">&gt;&gt; sendi function (in each BTL that has a sendi function) must have  
</span><br>
<span class="quotelev2">&gt;&gt; code that is already in the PML anyhow.  This is unnecessary extra  
</span><br>
<span class="quotelev2">&gt;&gt; coding and not clean design.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where:  In each BTL that has a sendi function (only three, and  
</span><br>
<span class="quotelev2">&gt;&gt; there are not all used) and in the function prototype and at the  
</span><br>
<span class="quotelev2">&gt;&gt; PML calling site.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When:  I'd like to incorporate this in the shared-memory latency  
</span><br>
<span class="quotelev2">&gt;&gt; work I'm doing that we're targetting for 1.3.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Timeout:  Feb 27.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5508.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
