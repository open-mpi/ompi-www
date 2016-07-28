<?
$subject_val = "Re: [OMPI devel] opal_condition_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 10:09:00 2007" -->
<!-- isoreceived="20071206150900" -->
<!-- sent="Thu, 06 Dec 2007 10:08:59 -0500" -->
<!-- isosent="20071206150859" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_condition_wait" -->
<!-- id="4758108B.9020006_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 10:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A couple of questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, in opal_condition_wait (condition.h:97) we do not release the 
</span><br>
<span class="quotelev1">&gt; passed mutex if opal_using_threads() is not set. Is there a reason for 
</span><br>
<span class="quotelev1">&gt; this? I ask since this violates the way condition variables are supposed 
</span><br>
<span class="quotelev1">&gt; to work, and it seems like there are situations where this could cause 
</span><br>
<span class="quotelev1">&gt; deadlock.
</span><br>
So in (partial) answer to my own email, this is because throughout the 
<br>
code we do:
<br>
OPAL_THREAD_LOCK(m)
<br>
opal_condition_wait(cond, m);
<br>
OPAL_THREAD_UNLOCK(m)
<br>
<p>So this relies on opal_condition_wait not touching the lock. This 
<br>
explains it, but it still seems very wrong.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
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
<li><strong>Next message:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
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
