<?
$subject_val = "Re: [OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:30:13 2007" -->
<!-- isoreceived="20071211153013" -->
<!-- sent="Tue, 11 Dec 2007 10:30:12 -0500" -->
<!-- isosent="20071211153012" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_condition_wait" -->
<!-- id="475EAD04.4030304_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0712060927120.13834_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 10:30:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, this makes some sense, although it still seems like this violates 
<br>
the spirit of condition variables.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Thu, 6 Dec 2007, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, in opal_condition_wait (condition.h:97) we do not release the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passed mutex if opal_using_threads() is not set. Is there a reason for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this? I ask since this violates the way condition variables are supposed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work, and it seems like there are situations where this could cause
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlock.
</span><br>
<span class="quotelev2">&gt;&gt; So in (partial) answer to my own email, this is because throughout the
</span><br>
<span class="quotelev2">&gt;&gt; code we do:
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_THREAD_LOCK(m)
</span><br>
<span class="quotelev2">&gt;&gt; opal_condition_wait(cond, m);
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_THREAD_UNLOCK(m)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So this relies on opal_condition_wait not touching the lock. This
</span><br>
<span class="quotelev2">&gt;&gt; explains it, but it still seems very wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this is correct.  The assumption is that you are using the 
</span><br>
<span class="quotelev1">&gt; conditional macro lock/unlock with the condition variables.  I personally 
</span><br>
<span class="quotelev1">&gt; don't like this (I think we should have had macro conditional condition 
</span><br>
<span class="quotelev1">&gt; variables), but that obviously isn't how it works today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem with always holding the lock when you enter the condition 
</span><br>
<span class="quotelev1">&gt; variable is that even when threading is disabled, calling a lock is at 
</span><br>
<span class="quotelev1">&gt; least as expensive as an add, possibly including a cache miss.  So from a 
</span><br>
<span class="quotelev1">&gt; performance standpoint, this would be a no-go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, when we are using threads, there is a case where we do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decrement the signaled count, in condition.h:84. Gleb put this in in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r9451, however the change does not make sense to me. I think that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal count should always be decremented.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone shine any light on these issues?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I can't add much on this front.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
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
