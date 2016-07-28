<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 07:49:21 2015" -->
<!-- isoreceived="20151001114921" -->
<!-- sent="Thu, 1 Oct 2015 14:49:20 +0300" -->
<!-- isosent="20151001114920" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="CAAO1Kyar7ikuMre=0EhmW+d_PVr3UiL_qtRXt-qFbaJqPP9Ygw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87lhbmvp5g.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-01 07:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27764.php">Grigory Shamov: "[OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27762.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27759.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
right, it is not attribute of mxm, but general effect.
<br>
and you are right again - performance engineering will always be needed for
<br>
best performance in some cases.
<br>
<p>OMPI, mxm trying to address out of the box performance for any workload,
<br>
but OS tuning, hw tuning, OMPI or mxm tuning may be needed as well. (there
<br>
is a reason that any MPI have hundreds of knobs)
<br>
<p><p>On Thu, Oct 1, 2015 at 1:50 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; we did not get to the bottom for &quot;why&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; Tried different mpi packages (mvapich,intel mpi) and the observation hold
</span><br>
<span class="quotelev2">&gt; &gt; true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that mean it's a general effect, unrelated to mxm, or that it is
</span><br>
<span class="quotelev1">&gt; related?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; it could be many factors affected by huge heap size (cpu cache misses?
</span><br>
<span class="quotelev2">&gt; &gt; swapness?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sure we're grateful for any information, and I don't mean to be
</span><br>
<span class="quotelev1">&gt; rude, but this could be frustrating to people told they should do
</span><br>
<span class="quotelev1">&gt; performance engineering and trying to understand what might be going on.
</span><br>
<span class="quotelev1">&gt; [Was &quot;heap&quot; a typo?]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Sep 30, 2015 at 1:12 PM, Dave Love &lt;d.love_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hello Grigory,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; We observed ~10% performance degradation with heap size set to
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; for CFD applications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OK, but why?  It would help to understand what the mechanism is, and why
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MXM specifically tells you to set the stack to the default, which may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; well be wrong for the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27759.php">http://www.open-mpi.org/community/lists/users/2015/10/27759.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27764.php">Grigory Shamov: "[OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27762.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27759.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27802.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
