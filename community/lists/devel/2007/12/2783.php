<?
$subject_val = "Re: [OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:27:56 2007" -->
<!-- isoreceived="20071211152756" -->
<!-- sent="Tue, 11 Dec 2007 10:27:55 -0500" -->
<!-- isosent="20071211152755" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_condition_wait" -->
<!-- id="475EAC7B.2060203_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071206184849.GD24257_at_minantech.com" -->
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
<strong>Date:</strong> 2007-12-11 10:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2782.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>In reply to:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I think I am understanding this a bit now. By not decrementing the 
<br>
signaled count, we are allowing a single broadcast to wake up the same 
<br>
thread multiple times, and are allowing a single cond_signal to wake up 
<br>
multiple threads.
<br>
<p>My understanding was that this behavior was not right, but upon further 
<br>
inspection of the pthreads documentation this behavior seems to be 
<br>
allowable.
<br>
<p>Thanks for the clarifications,
<br>
<p>Tim
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Thu, Dec 06, 2007 at 09:46:45AM -0500, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Also, when we are using threads, there is a case where we do not 
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I made this change a long time ago (I wander why I even tested threaded
</span><br>
<span class="quotelev1">&gt; build back then), but what I recall looking into the code and log message
</span><br>
<span class="quotelev1">&gt; there was a deadlock when signal broadcast doesn't wake up all thread
</span><br>
<span class="quotelev1">&gt; that are waiting on a conditional variable. Suppose two threads wait on
</span><br>
<span class="quotelev1">&gt; a condition C, third thread does broadcast. This makes C-&gt;c_signaled to
</span><br>
<span class="quotelev1">&gt; be equal 2. Now one thread wakes up and decrement C-&gt;c_signaled by one.
</span><br>
<span class="quotelev1">&gt; And before other thread is starting to run it calls condition_wait on C
</span><br>
<span class="quotelev1">&gt; one more time. Because c_signaled is 1 it doesn't sleep and decrement
</span><br>
<span class="quotelev1">&gt; c_signaled one more time. Now c_signaled is zero and when second thread
</span><br>
<span class="quotelev1">&gt; wakes up it see this and go to sleep again. The solution was to check in
</span><br>
<span class="quotelev1">&gt; condition_wait if condition is already signaled before go to sleep and
</span><br>
<span class="quotelev1">&gt; if yes exit immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="2784.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2782.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>In reply to:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
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
