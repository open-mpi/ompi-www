<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 15:09:22 2007" -->
<!-- isoreceived="20071214200922" -->
<!-- sent="Fri, 14 Dec 2007 22:09:13 +0200" -->
<!-- isosent="20071214200913" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071214200913.GA1978_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C387D903.11F72%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 15:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2854.php">Jeff Squyres: "[OMPI devel] Gnu #ident"</a>
<li><strong>In reply to:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 14, 2007 at 06:53:55AM -0500, Richard Graham wrote:
<br>
<span class="quotelev1">&gt; If you have positive confirmation that such things have happened, this will
</span><br>
<span class="quotelev1">&gt; go a long way.
</span><br>
I instrumented the code to log all kind of info about fragment reordering while
<br>
I chased a bug in openib that caused matching logic to malfunction. Any
<br>
non trivial application that uses OpenIB BTL will have reordered fragments.
<br>
(I wish this would not be that case, but I don't have a solution yet).
<br>
<p><span class="quotelev1">&gt;                 I will not trust the code until this has also been done with
</span><br>
<span class="quotelev1">&gt; multiple independent network paths. 
</span><br>
I ran IMB over IP and IB simultaneously on more then 80 ranks.
<br>
<p><span class="quotelev1">&gt;                                      I very rarely express such strong
</span><br>
<span class="quotelev1">&gt; opinions, even if I don't agree with what is being done, but this is the
</span><br>
<span class="quotelev1">&gt; core of correct MPI functionality, and first hand experience has shown that
</span><br>
I agree that this is indeed very important piece of code, but it certain
<br>
is not more important than data type engine for instance (and it is much
<br>
easier to test all corner cases in matching logic than in data type engine
<br>
IMHO). And event if matching code works perfectly, but other parts of
<br>
OB1 are buggy the Open MPI will not work properly, so why this code is
<br>
chosen to be a sacred cow?
<br>
<p><span class="quotelev1">&gt; just thinking through the logic, I can miss some of the race conditions.
</span><br>
That is of cause correct, but the more people will look at the code the
<br>
better, isn't it?
<br>
<p><span class="quotelev1">&gt; The code here has been running for 8+ years in two production MPI's running
</span><br>
<span class="quotelev1">&gt; on very large clusters, so I am very reluctant to make changes for what
</span><br>
Are you sure about this? I see a number of changes to this code during
<br>
Open MPI development and current SVN does not hold all the history of
<br>
this code unfortunately. Here is the list of commits that I found, part
<br>
of them change the code logic quite a bit:
<br>
r6770,r7342,r8339,r8352,r8353,r8356,r8946,r11874,r12323,r12582
<br>
<p><span class="quotelev1">&gt; seems to amount to people's taste - maintenance is not an issue in this
</span><br>
<span class="quotelev1">&gt; case.  Had this not been such a key bit of code, I would not even bat an
</span><br>
Why do you think that maintenance is not an issue? It is for me. Otherwise
<br>
I wouldn't even look at this part of code. All those macros prohibit the use
<br>
of a debugger for instance.
<br>
<p>(And I see a small latency improvement too :))
<br>
<p><span class="quotelev1">&gt; eye.  I suppose if you can go through some formal verification, this would
</span><br>
<span class="quotelev1">&gt; also be good - actually better than hoping that one will hit out-of-order
</span><br>
<span class="quotelev1">&gt; situations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/14/07 2:20 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 13, 2007 at 06:16:49PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The situation that needs to be triggered, just as George has mentions, is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; where we have a lot of unexpected messages, to make sure that when one that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; we can match against comes in, all the unexpected messages that can be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; matched with pre-posted receives are matched.  Since we attempt to match
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only when a new fragment comes in, we need to make sure that we don't leave
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other unexpected messages that can be matched in the unexpected queue, as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; these (if the out of order scenario is just right) would block any new
</span><br>
<span class="quotelev3">&gt; &gt;&gt; matches from occurring.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For example:  Say the next expect message is 25
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unexpected message queue has:  26 28 29 ..
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If 25 comes in, and is handled, if 26 is not pulled off the unexpected
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message queue, when 27 comes in it won't be able to be matched, as 26 is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sitting in the unexpected queue, and will never be looked at again ...
</span><br>
<span class="quotelev2">&gt; &gt; This situation is triggered constantly with openib BTL. OpenIB BTL has
</span><br>
<span class="quotelev2">&gt; &gt; two ways to receive a packet: over a send queue or over an eager RDMA path.
</span><br>
<span class="quotelev2">&gt; &gt; Receiver polls both of them and may reorders packets locally. Actually
</span><br>
<span class="quotelev2">&gt; &gt; currently there is a bug in openib BTL that one channel may starve the other
</span><br>
<span class="quotelev2">&gt; &gt; at the receiver so if a match fragment with a next sequence number is in the
</span><br>
<span class="quotelev2">&gt; &gt; starved path tenth of thousands fragment can be reorederd. Test case attached
</span><br>
<span class="quotelev2">&gt; &gt; to ticket #1158 triggers this case and my patch handles all reordered packets.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And, by the way, the code is much simpler now and can be review easily ;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2854.php">Jeff Squyres: "[OMPI devel] Gnu #ident"</a>
<li><strong>In reply to:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
