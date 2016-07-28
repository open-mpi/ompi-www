<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 05:07:59 2007" -->
<!-- isoreceived="20070518090759" -->
<!-- sent="Fri, 18 May 2007 12:07:53 +0300" -->
<!-- isosent="20070518090753" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="20070518090753.GB32628_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="464C833B.2060709_at_myri.com" -->
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
<strong>Date:</strong> 2007-05-18 05:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1557.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 17, 2007 at 12:30:51PM -0400, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Moving to devel; this question seems worthwhile to push out to the  
</span><br>
<span class="quotelev2">&gt; &gt; general development community.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've been coming across an increasing number of customers and other  
</span><br>
<span class="quotelev2">&gt; &gt; random OMPI users who use system().  So if there's zero impact on  
</span><br>
<span class="quotelev2">&gt; &gt; performance and it doesn't make the code [more] incredibly horrible  
</span><br>
<span class="quotelev2">&gt; &gt; [than it already is], I'm in favor of this change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will sound like a broken record, but this is the type of things that a 
</span><br>
<span class="quotelev1">&gt; MPI implementation should not care about. At least not in the (common) 
</span><br>
<span class="quotelev1">&gt; protocol layer. That's why the BTL-level abstraction is a bad one, 
</span><br>
<span class="quotelev1">&gt; device-specific problems bubble up instead of staying hidden in 
</span><br>
<span class="quotelev1">&gt; device-specific code.
</span><br>
I am glad I provided one more point in favor of your argument :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 17, 2007, at 7:00 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem is that granularity of registration is HW page (4K), so last
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What about huge pages ?
</span><br>
I am saying this again I don't try to solve all problems of interconnects that
<br>
were designed by people who ignored 30 or so years of OS design evolution.
<br>
<p>Huge page usage is not transparent in linux. If programmer decided to
<br>
use it he should understand the consequences.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; page of the buffer may contain also other application's data and user
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may be unaware of this and be very surprised by SIGSEGV. If pipeline
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can a process get a segmentation fault by accessing a page mapped in 
</span><br>
<span class="quotelev1">&gt;   its own address space ?
</span><br>
In child process VMAs, that were registered in parent process, no longer
<br>
mapped.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so this situation will be avoided. It should have zero impact on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance. What do you think? How common for MPI applications to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fork()?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only safe way to support fork() with pinned page is to force the 
</span><br>
<span class="quotelev1">&gt; duplication of pages at fork time. It makes fork much more expensive, 
</span><br>
<span class="quotelev1">&gt; but fork should not be in the critical path of HPC applications anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
It also increases a chance of fork() failure. Otherwise I agree with
<br>
you. I even started to write patch once to duplicate only firs and last
<br>
pages of pinned region. The chances of such patch to be accepted into
<br>
linux less then zero though.
<br>
<p><p><span class="quotelev1">&gt; Playing with registration cache is playing with fire.
</span><br>
The change I propose will not solve any problem if registration cache is
<br>
in use.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1557.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
