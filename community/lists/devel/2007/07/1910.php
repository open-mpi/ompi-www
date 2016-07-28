<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 08:39:25 2007" -->
<!-- isoreceived="20070717123925" -->
<!-- sent="Tue, 17 Jul 2007 06:39:10 -0600" -->
<!-- isosent="20070717123910" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 801, Issue 1" -->
<!-- id="C2C2148E.34BB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07EB5F2B-1132-4328-AA83-13622F81950D_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 08:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1911.php">Terry D. Dontje: "[OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>Previous message:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1913.php">Rolf vandeVaart: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1913.php">Rolf vandeVaart: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/17/07 5:37 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2007, at 2:28 PM, Matthew Moskewicz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-2 does support the MPI_COMM_JOIN and MPI_COMM_ACCEPT/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_CONNECT models.  We do support this in Open MPI, but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restrictions (in terms of ORTE) may not be sufficient for you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; perhaps i'll experiment -- any clues as to what the orte
</span><br>
<span class="quotelev2">&gt;&gt; restrictions might be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main constraint is that you have to run a &quot;persistent&quot; orted that
</span><br>
<span class="quotelev1">&gt; will span all your MPI_COMM_WORLD's.  We have only lightly tested
</span><br>
<span class="quotelev1">&gt; this scenario -- Ralph, can you comment more here?
</span><br>
<p>Actually, I'm not convinced Open MPI really supports either of those two MPI
<br>
semantics. It is true that we have something in our code repository, but I'm
<br>
not convinced it actually does what people think.
<br>
<p>There are two use-cases one must consider:
<br>
<p>1. an application code spawns another job and then at some later point wants
<br>
to connect to it. Our current implementation of comm_spawn does this
<br>
automatically via the accept/connect procedure, so we have this covered.
<br>
However, it relies upon the notion that (a) the parent job *knows* the jobid
<br>
of the child, and (b) the parent sends a message to the child telling it
<br>
where and how to rendezvous with it. You don't need the persistent daemon
<br>
here.
<br>
<p>2. a user starts one application, and then starts another (would have to be
<br>
in a separate window or batch job as we do not support running mpirun in the
<br>
background) that connects to the first. The problem here is that neither
<br>
application knows the jobid of the other, has no info on how to communicate
<br>
with the other, nor knows a common rendezvous point. You would definitely
<br>
need a persistent daemon for this use-case.
<br>
<p>I would have to review the code to see, but my best guess from what I
<br>
remember is that we don't actually support the second use-case at this time.
<br>
It would be possible to do so, albeit complicated - but I'm almost certain
<br>
nobody ever implemented it. I had talked at one time about providing the
<br>
necessary glue, either at the command line or (better) via some internal
<br>
&quot;magic&quot;, but never got much interest - and so never did anything about
<br>
it...and I don't recall seeing anyone else make the necessary changes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - It also likely doesn't work yet; we started the integration work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ran into a technical issue that required further discussion with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Platform.  They're currently looking into it; we stopped the LSF work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in ORTE until they get back to us.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i see -- i might be trying to work on the 6.x support today. can you
</span><br>
<span class="quotelev2">&gt;&gt; give me any hints on what the problem was in case i run into the same
</span><br>
<span class="quotelev2">&gt;&gt; issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something was wrong with the lsb_launch() function; using it caused a
</span><br>
<span class="quotelev1">&gt; significant slowdown in the job and it generally wasn't behaving as
</span><br>
<span class="quotelev1">&gt; expected.  Platform issued a fix for me yesterday (i.e., a one-off/
</span><br>
<span class="quotelev1">&gt; unsupported binary for development purposes) that I haven't gotten to
</span><br>
<span class="quotelev1">&gt; test yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - That being said, MPI_THREAD_MULTIPLE and MPI_COMM_SPAWN *might*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; offer a way out here.  But I think a) THREAD_MULTIPLE isn't working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yet (other OMPI members are working on this), and b) even when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; THREAD_MULTIPLE works, there will be ORTE issues to deal with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (canceling pending resource allocations, etc.).  Ralph mentioned that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone else is working on such things on the TM/PBS/Torque side; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; haven't followed that effort closely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it seems that MPI_THREAD_MULTIPLE is to be avoided for now, but there
</span><br>
<span class="quotelev2">&gt;&gt; are perhaps other workarounds (using threads in other ways, etc.).
</span><br>
<span class="quotelev2">&gt;&gt; also, i'd love to hear about the existing efforts -- i'm hoping
</span><br>
<span class="quotelev2">&gt;&gt; someone working on them might be reading this ... ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph -- can you chime in on the TM/PBS/Torque efforts?
</span><br>
<p>It isn't my work. I can ask the other developer if he is interested in
<br>
talking with you and/or willing for me to make his work more public (part of
<br>
it has been discussed on the public user list). I believe this is part of
<br>
his PhD thesis, so I want to err on the side of caution here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1911.php">Terry D. Dontje: "[OMPI devel] Call for OMPI Binary Distributions"</a>
<li><strong>Previous message:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1913.php">Rolf vandeVaart: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1913.php">Rolf vandeVaart: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
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
