<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 22:12:31 2007" -->
<!-- isoreceived="20070828021231" -->
<!-- sent="Mon, 27 Aug 2007 22:12:12 -0400" -->
<!-- isosent="20070828021212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] More memory troubles with vapi" -->
<!-- id="654E9E4D-CFE0-45CD-A42B-1D4BDCF755E5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98a233180708242005yaa4c017m9f186cb9d014a6ef_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-08-27 22:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>In reply to:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2007, at 11:05 PM, Josh Aune wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Hmm.  If you compile Open MPI with no memory manager, then it
</span><br>
<span class="quotelev2">&gt;&gt; *shouldn't* be Open MPI's fault (unless there's a leak in the mvapi
</span><br>
<span class="quotelev2">&gt;&gt; BTL...?).  Verify that you did not actually compile Open MPI with a
</span><br>
<span class="quotelev2">&gt;&gt; memory manager by running &quot;ompi_info| grep ptmalloc2&quot; -- it should
</span><br>
<span class="quotelev2">&gt;&gt; come up empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sure.  I have multiple builds that I switch between.  One of the
</span><br>
<span class="quotelev1">&gt; apps doesn't work unless I --without-memory-manager (see post to
</span><br>
<span class="quotelev1">&gt; -users about realloc(), with sample code).
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; I noticed that there are a few ./configure --debug type switches, even
</span><br>
<span class="quotelev1">&gt; some dealing with memory.  Could those be useful for gathering further
</span><br>
<span class="quotelev1">&gt; data?  What features do those provide and how do I use them?
</span><br>
<p>If you use --enable-mem-debug, they force all internal calls to malloc 
<br>
(), free(), and calloc() to go through our own internal functions,  
<br>
but those mainly just check that we don't pass bad parameters such as  
<br>
NULL, etc.  I suppose you could put in some memory profiling or  
<br>
something, but that would probably get pretty sticky.  :-(
<br>
<p><span class="quotelev2">&gt;&gt; The fact that you can run this under TCP without memory leaking would
</span><br>
<span class="quotelev2">&gt;&gt; seem to indicate that it's not the app that's leaking memory, but
</span><br>
<span class="quotelev2">&gt;&gt; rather either the MPI or the network stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should clarify here, this is effectively true.  The app crashes from
</span><br>
<span class="quotelev1">&gt; a segfault after running over tcp for several hours, but it gets much
</span><br>
<span class="quotelev1">&gt; farther into the run than the vapi btl does.
</span><br>
<p>Yuck.  :-(  I assume there's no easy way to track this down -- do you  
<br>
get a corefile?  Can you see where the app died -- are there any  
<br>
obvious indexes going out of range of array bounds, etc.?  Is it in  
<br>
MPI or in the application?
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
<li><strong>Next message:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>In reply to:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
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
