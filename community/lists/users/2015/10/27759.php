<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 06:50:32 2015" -->
<!-- isoreceived="20151001105032" -->
<!-- sent="Thu, 01 Oct 2015 11:50:19 +0100" -->
<!-- isosent="20151001105019" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="87lhbmvp5g.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAO1Kyb_9RfjJBMuwpi1qQHXv0n=oRJQUR4+ORdB+yWCvfVz_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-01 06:50:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27760.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27758.php">Emyr James: "[OMPI users] Problem starting jobs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27745.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27763.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27763.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Dubman &lt;miked_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; we did not get to the bottom for &quot;why&quot;.
</span><br>
<span class="quotelev1">&gt; Tried different mpi packages (mvapich,intel mpi) and the observation hold
</span><br>
<span class="quotelev1">&gt; true.
</span><br>
<p>Does that mean it's a general effect, unrelated to mxm, or that it is
<br>
related?
<br>
<p><span class="quotelev1">&gt; it could be many factors affected by huge heap size (cpu cache misses?
</span><br>
<span class="quotelev1">&gt; swapness?).
</span><br>
<p>I'm sure we're grateful for any information, and I don't mean to be
<br>
rude, but this could be frustrating to people told they should do
<br>
performance engineering and trying to understand what might be going on.
<br>
[Was &quot;heap&quot; a typo?]
<br>
<p><span class="quotelev1">&gt; On Wed, Sep 30, 2015 at 1:12 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello Grigory,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We observed ~10% performance degradation with heap size set to unlimited
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for CFD applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, but why?  It would help to understand what the mechanism is, and why
</span><br>
<span class="quotelev2">&gt;&gt; MXM specifically tells you to set the stack to the default, which may
</span><br>
<span class="quotelev2">&gt;&gt; well be wrong for the application.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27760.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27758.php">Emyr James: "[OMPI users] Problem starting jobs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27745.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27763.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27763.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
