<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 14:57:33 2007" -->
<!-- isoreceived="20070517185733" -->
<!-- sent="Thu, 17 May 2007 14:57:22 -0400" -->
<!-- isosent="20070517185722" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="464CA592.8000809_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3761E39F-0A88-4BE8-AC75-F39A8A4E5B8B_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-17 14:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1553.php">gshipman: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1553.php">gshipman: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
gshipman wrote:
<br>
<span class="quotelev2">&gt;&gt; The fork() problem is due to memory registration aggravated by
</span><br>
<span class="quotelev2">&gt;&gt; registration cache. Memory registration in itself is a hack from  
</span><br>
<span class="quotelev2">&gt;&gt; the OS
</span><br>
<span class="quotelev2">&gt;&gt; point of view, and you already know a lot about the various problems
</span><br>
<span class="quotelev2">&gt;&gt; related to registration cache.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So Gleb is indicating that this is a problem in the pipeline protocol  
</span><br>
<span class="quotelev1">&gt; which does not use a registration cache. I think the registration  
</span><br>
<span class="quotelev1">&gt; cache, while increasing the probability of badness after fork, is not  
</span><br>
<span class="quotelev1">&gt; the culprit.
</span><br>
<p>Indeed, it makes things worse by extending the vulnerability outside the 
<br>
time frame of an asynchronous communication. Without the registration 
<br>
cache, the bad case is limited to a process that forks while a com is 
<br>
pending and touches the same pages before they are read/written by the 
<br>
hardware. This is not very likely because the window of time is very 
<br>
small, but still possible. However, it is not limited to the last 
<br>
partial page of the buffer, it can happen for any pinned page.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1553.php">gshipman: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1553.php">gshipman: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
