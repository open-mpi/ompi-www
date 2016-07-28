<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 12:13:07 2010" -->
<!-- isoreceived="20100430161307" -->
<!-- sent="Fri, 30 Apr 2010 10:12:55 -0600" -->
<!-- isosent="20100430161255" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="6895E785-D7F3-499A-9FD6-57A823B1CE28_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.2.1004301628490.28142_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Forum question?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 12:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess this has been too upsetting a question - I'll work off-list with the other developers to determine an appropriate OMPI behavior.
<br>
<p>On Apr 30, 2010, at 9:28 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 30 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2010, at 6:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI quite rightly does not specify this, because the matter is very system- dependent, and it is not possible to return the exit code (or display it) in all environments. Sorry, but that is reality.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correct -- MPI intentionally does not say what happens after MPI_FINALIZE. MPI intentionally doesn't even specify much about how to start an MPI job (just like Fortran, actually).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Frankly, I disagree - I think the standard can and should say something explicit about this situation. It doesn't have to say how we implement it, but it should clearly explain to users what they should expect to see at the end of an MPI job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guess the real issue is: is the standard written for the general community, or solely for MPI implementers? If the latter, then saying nothing is fine. If the former, then it needs to clearly say something about this question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, that's NOT the real issue!  The real issue is whether it CAN say
</span><br>
<span class="quotelev1">&gt; anything more without harming its portability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You would have to start by defining what you mean as an &quot;MPI job&quot;, and
</span><br>
<span class="quotelev1">&gt; I can assure you that it would be very hard to do.  You may have used
</span><br>
<span class="quotelev1">&gt; only a few, very similar, MPIs and parallel environments, but I have
</span><br>
<span class="quotelev1">&gt; used a fairly wide range - and I know that I have only very limited
</span><br>
<span class="quotelev1">&gt; experience relative to what is out there!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are environments where the MPI invokation command completes as
</span><br>
<span class="quotelev1">&gt; soon as the task has been submitted to a scheduler.  In that case, it
</span><br>
<span class="quotelev1">&gt; obviously can't return anything based on the job execution.  Should
</span><br>
<span class="quotelev1">&gt; such implementations be forbidden?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
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
