<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 05:27:33 2007" -->
<!-- isoreceived="20070518092733" -->
<!-- sent="Fri, 18 May 2007 12:27:26 +0300" -->
<!-- isosent="20070518092726" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="20070518092726.GD32628_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="464CA592.8000809_at_myri.com" -->
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
<strong>Date:</strong> 2007-05-18 05:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1559.php">Ralph H Castain: "[OMPI devel] Change to default xcast mode [RFC]"</a>
<li><strong>Previous message:</strong> <a href="1557.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 17, 2007 at 02:57:22PM -0400, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; gshipman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The fork() problem is due to memory registration aggravated by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; registration cache. Memory registration in itself is a hack from  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the OS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; point of view, and you already know a lot about the various problems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; related to registration cache.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So Gleb is indicating that this is a problem in the pipeline protocol  
</span><br>
<span class="quotelev2">&gt; &gt; which does not use a registration cache. I think the registration  
</span><br>
<span class="quotelev2">&gt; &gt; cache, while increasing the probability of badness after fork, is not  
</span><br>
<span class="quotelev2">&gt; &gt; the culprit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, it makes things worse by extending the vulnerability outside the 
</span><br>
<span class="quotelev1">&gt; time frame of an asynchronous communication. Without the registration 
</span><br>
<span class="quotelev1">&gt; cache, the bad case is limited to a process that forks while a com is 
</span><br>
<span class="quotelev1">&gt; pending and touches the same pages before they are read/written by the 
</span><br>
<span class="quotelev1">&gt; hardware. This is not very likely because the window of time is very 
</span><br>
<span class="quotelev1">&gt; small, but still possible. However, it is not limited to the last 
</span><br>
<span class="quotelev1">&gt; partial page of the buffer, it can happen for any pinned page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Now I see that you don't fully understand all of the IB ugliness. Here I
<br>
explain it to you. In IB QP and CQ also use registered memory that is
<br>
directly written/read by a hardware (to signal a completion or to get
<br>
next work request). After fork() parent continues to use IB of cause and
<br>
most definitely touches QP/CQ memory and at this very moment everything
<br>
breaks. So to overcome this problem (and to allow IB program fork() at all)
<br>
new madvice flag was implemented that allows userspace to mark certain
<br>
memory to not be copied to a child process. This memory is not mapped in
<br>
a child at all, no even VMA created for it. In the parent this memory is
<br>
not marked COW. All memory that is registered by IB is marked in this
<br>
way. So the problem is that if non aligned buffer is committed to MPI
<br>
it may share a page with some data that child may want to use, but this
<br>
data will not be present in a child.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1559.php">Ralph H Castain: "[OMPI devel] Change to default xcast mode [RFC]"</a>
<li><strong>Previous message:</strong> <a href="1557.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
