<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 12:31:03 2007" -->
<!-- isoreceived="20070517163103" -->
<!-- sent="Thu, 17 May 2007 12:30:51 -0400" -->
<!-- isosent="20070517163051" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="464C833B.2060709_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AA76F64A-C47A-44A4-9CFB-CDB036980B1E_at_cisco.com" -->
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
<strong>Date:</strong> 2007-05-17 12:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1549.php">Jeff Squyres: "[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Moving to devel; this question seems worthwhile to push out to the  
</span><br>
<span class="quotelev1">&gt; general development community.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been coming across an increasing number of customers and other  
</span><br>
<span class="quotelev1">&gt; random OMPI users who use system().  So if there's zero impact on  
</span><br>
<span class="quotelev1">&gt; performance and it doesn't make the code [more] incredibly horrible  
</span><br>
<span class="quotelev1">&gt; [than it already is], I'm in favor of this change.
</span><br>
<p>I will sound like a broken record, but this is the type of things that a 
<br>
MPI implementation should not care about. At least not in the (common) 
<br>
protocol layer. That's why the BTL-level abstraction is a bad one, 
<br>
device-specific problems bubble up instead of staying hidden in 
<br>
device-specific code.
<br>
<p><span class="quotelev1">&gt; On May 17, 2007, at 7:00 AM, Gleb Natapov wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; problem is that granularity of registration is HW page (4K), so last
</span><br>
<p>What about huge pages ?
<br>
<p><span class="quotelev2">&gt;&gt; page of the buffer may contain also other application's data and user
</span><br>
<span class="quotelev2">&gt;&gt; may be unaware of this and be very surprised by SIGSEGV. If pipeline
</span><br>
<p>How can a process get a segmentation fault by accessing a page mapped in 
<br>
&nbsp;&nbsp;its own address space ?
<br>
<p><span class="quotelev2">&gt;&gt; so this situation will be avoided. It should have zero impact on
</span><br>
<span class="quotelev2">&gt;&gt; performance. What do you think? How common for MPI applications to
</span><br>
<span class="quotelev2">&gt;&gt; fork()?
</span><br>
<p>The only safe way to support fork() with pinned page is to force the 
<br>
duplication of pages at fork time. It makes fork much more expensive, 
<br>
but fork should not be in the critical path of HPC applications anyway.
<br>
<p>Playing with registration cache is playing with fire.
<br>
<p>My 2 cents.
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
<li><strong>Next message:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1549.php">Jeff Squyres: "[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
