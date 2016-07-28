<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 11:09:39 2007" -->
<!-- isoreceived="20070829150939" -->
<!-- sent="Wed, 29 Aug 2007 18:08:16 +0300" -->
<!-- isosent="20070829150816" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="20070829150816.GI25167_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2FB027A.A81A%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 11:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2259.php">Richard Graham: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2259.php">Richard Graham: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 29, 2007 at 11:01:14AM -0400, Richard Graham wrote:
<br>
<span class="quotelev1">&gt; If you are going to look at it, I will not bother with this.
</span><br>
I need the code to reproduce the problem. Otherwise I have nothing to
<br>
look at. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/29/07 10:47 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Aug 29, 2007 at 10:46:06AM -0400, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gleb,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Are you looking at this ?
</span><br>
<span class="quotelev2">&gt; &gt; Not today. And I need the code to reproduce the bug. Is this possible?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 8/29/07 9:56 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Aug 29, 2007 at 04:48:07PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Is this trunk or 1.2?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oops. I should read more carefully :) This is trunk.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Wed, Aug 29, 2007 at 09:40:30AM -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have a program that does a simple bucket brigade of sends and receives
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; where rank 0 is the start and repeatedly sends to rank 1 until a certain
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; amount of time has passed and then it sends and all done packet.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Running this under np=2 always works.  However, when I run with greater
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; than 2 using only the SM btl the program usually hangs and one of the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; processes has a long stack that has a lot of the following 3 calls in it:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  [25] opal_progress(), line 187 in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   [26] mca_btl_sm_component_progress(), line 397 in &quot;btl_sm_component.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   [27] mca_bml_r2_progress(), line 110 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; When stepping through the ompi_fifo_write_to_head routine it looks like
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the fifo has overflowed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am wondering if what is happening is rank 0 has sent a bunch of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; messages that have exhausted the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; resources such that one of the middle ranks which is in the process of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; sending cannot send and therefore
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; never gets to the point of trying to receive the messages from rank 0?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is the above a possible scenario or are messages periodically bled off
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the SM BTL's fifos?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Note, I have seen np=3 pass sometimes and I can get it to pass reliably
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; if I raise the shared memory space used by the BTL.   This is using the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2259.php">Richard Graham: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2259.php">Richard Graham: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2261.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
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
