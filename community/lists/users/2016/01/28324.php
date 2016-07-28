<?
$subject_val = "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 07:07:18 2016" -->
<!-- isoreceived="20160121120718" -->
<!-- sent="Thu, 21 Jan 2016 12:07:16 +0000" -->
<!-- isosent="20160121120716" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question" -->
<!-- id="871t9bi1aj.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=uJ_dd_WEVMJU1Q1KSPNBZz0RtkMbGTGWNwB17JnT21cBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 07:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Just using Intel compilers, OpenMP and MPI.  Problem solved :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I work for Intel and the previous statement should be interpreted as a
</span><br>
<span class="quotelev1">&gt; joke,
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; although Intel OpenMP and MPI interoperate as well as any
</span><br>
<span class="quotelev1">&gt; implementations of which I am aware.)
</span><br>
<p>Better than MPC (not that I've used it)?
<br>
<p>For what it's worth, you have to worry about the batch resource manager
<br>
as well as the MPI, and you may need to ensure you're allocated complete
<br>
nodes.  There are known problems with IMPI and SGE specifically, and
<br>
several times I've made users a lot happier with OMPI/GCC.
<br>
<p><span class="quotelev2">&gt;&gt; Or pray the MPI Forum and OpenMP combine and I can just look in a
</span><br>
<span class="quotelev2">&gt;&gt; Standard. :D
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;&quot; &gt; $OPENMP_STANDARD # critical step
</span><br>
<span class="quotelev1">&gt; cat $MPI_STANDARD $OPENMP_STANDARD &gt; $HPC_STANDARD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More seriously, hybrid programming sucks.  Just use MPI-3 and exploit your
</span><br>
<span class="quotelev1">&gt; coherence domain via MPI_Win_allocate_shared.  That way, you won't have to
</span><br>
<span class="quotelev1">&gt; mix runtimes, suffer mercilessly because of opaque race conditions in
</span><br>
<span class="quotelev1">&gt; thread-unsafe libraries, or reason about a bolt-on pseudo-language that
</span><br>
<span class="quotelev1">&gt; replicates features found in ISO languages without a well-defined
</span><br>
<span class="quotelev1">&gt; interoperability model.
</span><br>
<p>Sure, but the trouble is that &quot;everyone knows&quot;&quot; you need the hybrid
<br>
stuff.  Are there good examples of using MPI-3 instead/in comparison?
<br>
I'd be particularly interested in convincing chemists, though as they
<br>
don't believe in deadlock and won't measure things, that's probably a
<br>
lost cause.  Not all chemists, of course.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28323.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="28234.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Reply:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
