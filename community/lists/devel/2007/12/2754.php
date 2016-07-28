<?
$subject_val = "Re: [OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 13:32:02 2007" -->
<!-- isoreceived="20071206183202" -->
<!-- sent="Thu, 6 Dec 2007 12:31:54 -0600 (CST)" -->
<!-- isosent="20071206183154" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_condition_wait" -->
<!-- id="Pine.LNX.4.64.0712060927120.13834_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4758108B.9020006_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_condition_wait<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 13:31:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 6 Dec 2007, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; First, in opal_condition_wait (condition.h:97) we do not release the
</span><br>
<span class="quotelev2">&gt;&gt; passed mutex if opal_using_threads() is not set. Is there a reason for
</span><br>
<span class="quotelev2">&gt;&gt; this? I ask since this violates the way condition variables are supposed
</span><br>
<span class="quotelev2">&gt;&gt; to work, and it seems like there are situations where this could cause
</span><br>
<span class="quotelev2">&gt;&gt; deadlock.
</span><br>
<span class="quotelev1">&gt; So in (partial) answer to my own email, this is because throughout the
</span><br>
<span class="quotelev1">&gt; code we do:
</span><br>
<span class="quotelev1">&gt; OPAL_THREAD_LOCK(m)
</span><br>
<span class="quotelev1">&gt; opal_condition_wait(cond, m);
</span><br>
<span class="quotelev1">&gt; OPAL_THREAD_UNLOCK(m)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this relies on opal_condition_wait not touching the lock. This
</span><br>
<span class="quotelev1">&gt; explains it, but it still seems very wrong.
</span><br>
<p>Yes, this is correct.  The assumption is that you are using the 
<br>
conditional macro lock/unlock with the condition variables.  I personally 
<br>
don't like this (I think we should have had macro conditional condition 
<br>
variables), but that obviously isn't how it works today.
<br>
<p>The problem with always holding the lock when you enter the condition 
<br>
variable is that even when threading is disabled, calling a lock is at 
<br>
least as expensive as an add, possibly including a cache miss.  So from a 
<br>
performance standpoint, this would be a no-go.
<br>
<p><span class="quotelev2">&gt;&gt; Also, when we are using threads, there is a case where we do not
</span><br>
<span class="quotelev2">&gt;&gt; decrement the signaled count, in condition.h:84. Gleb put this in in
</span><br>
<span class="quotelev2">&gt;&gt; r9451, however the change does not make sense to me. I think that the
</span><br>
<span class="quotelev2">&gt;&gt; signal count should always be decremented.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone shine any light on these issues?
</span><br>
<p>Unfortunately, I can't add much on this front.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2746.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
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
