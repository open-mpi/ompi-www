<?
$subject_val = "Re: [OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 13:48:59 2007" -->
<!-- isoreceived="20071206184859" -->
<!-- sent="Thu, 6 Dec 2007 20:48:49 +0200" -->
<!-- isosent="20071206184849" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_condition_wait" -->
<!-- id="20071206184849.GD24257_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47580B55.1040607_at_cs.indiana.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 13:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2758.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.5rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 06, 2007 at 09:46:45AM -0500, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Also, when we are using threads, there is a case where we do not 
</span><br>
<span class="quotelev1">&gt; decrement the signaled count, in condition.h:84. Gleb put this in in 
</span><br>
<span class="quotelev1">&gt; r9451, however the change does not make sense to me. I think that the 
</span><br>
<span class="quotelev1">&gt; signal count should always be decremented.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone shine any light on these issues?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I made this change a long time ago (I wander why I even tested threaded
<br>
build back then), but what I recall looking into the code and log message
<br>
there was a deadlock when signal broadcast doesn't wake up all thread
<br>
that are waiting on a conditional variable. Suppose two threads wait on
<br>
a condition C, third thread does broadcast. This makes C-&gt;c_signaled to
<br>
be equal 2. Now one thread wakes up and decrement C-&gt;c_signaled by one.
<br>
And before other thread is starting to run it calls condition_wait on C
<br>
one more time. Because c_signaled is 1 it doesn't sleep and decrement
<br>
c_signaled one more time. Now c_signaled is zero and when second thread
<br>
wakes up it see this and go to sleep again. The solution was to check in
<br>
condition_wait if condition is already signaled before go to sleep and
<br>
if yes exit immediately.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2758.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.5rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2783.php">Tim Prins: "Re: [OMPI devel] opal_condition_wait"</a>
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
