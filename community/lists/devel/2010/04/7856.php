<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 11:28:53 2010" -->
<!-- isoreceived="20100430152853" -->
<!-- sent="30 Apr 2010 16:28:49 +0100" -->
<!-- isosent="20100430152849" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="Prayer.1.3.2.1004301628490.28142_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41CA7241-EC2B-435A-8DCE-957970F44844_at_open-mpi.org" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 11:28:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30 2010, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;On Apr 30, 2010, at 6:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI quite rightly does not specify this, because the matter is very 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system- dependent, and it is not possible to return the exit code (or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; display it) in all environments. Sorry, but that is reality.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correct -- MPI intentionally does not say what happens after 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FINALIZE. MPI intentionally doesn't even specify much about how to 
</span><br>
<span class="quotelev2">&gt;&gt; start an MPI job (just like Fortran, actually).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Frankly, I disagree - I think the standard can and should say something 
</span><br>
<span class="quotelev1">&gt; explicit about this situation. It doesn't have to say how we implement 
</span><br>
<span class="quotelev1">&gt; it, but it should clearly explain to users what they should expect to see 
</span><br>
<span class="quotelev1">&gt; at the end of an MPI job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Guess the real issue is: is the standard written for the general 
</span><br>
<span class="quotelev1">&gt; community, or solely for MPI implementers? If the latter, then saying 
</span><br>
<span class="quotelev1">&gt; nothing is fine. If the former, then it needs to clearly say something 
</span><br>
<span class="quotelev1">&gt; about this question.
</span><br>
<p>No, that's NOT the real issue!  The real issue is whether it CAN say
<br>
anything more without harming its portability.
<br>
<p>You would have to start by defining what you mean as an &quot;MPI job&quot;, and
<br>
I can assure you that it would be very hard to do.  You may have used
<br>
only a few, very similar, MPIs and parallel environments, but I have
<br>
used a fairly wide range - and I know that I have only very limited
<br>
experience relative to what is out there!
<br>
<p>There are environments where the MPI invokation command completes as
<br>
soon as the task has been submitted to a scheduler.  In that case, it
<br>
obviously can't return anything based on the job execution.  Should
<br>
such implementations be forbidden?
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
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
