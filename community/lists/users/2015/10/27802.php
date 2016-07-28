<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 13:52:01 2015" -->
<!-- isoreceived="20151005175201" -->
<!-- sent="Mon, 05 Oct 2015 18:51:49 +0100" -->
<!-- isosent="20151005175149" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="87twq5qk3u.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAO1Kyar7ikuMre=0EhmW+d_PVr3UiL_qtRXt-qFbaJqPP9Ygw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-05 13:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27803.php">marcin.krotkiewski: "[OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>In reply to:</strong> <a href="27763.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Dubman &lt;miked_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; right, it is not attribute of mxm, but general effect.
</span><br>
<p>Thanks.  That's the sort of thing we can investigate, but then the
<br>
messages from MXM are very misleading.
<br>
<p><span class="quotelev1">&gt; and you are right again - performance engineering will always be needed for
</span><br>
<span class="quotelev1">&gt; best performance in some cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI, mxm trying to address out of the box performance for any workload,
</span><br>
<span class="quotelev1">&gt; but OS tuning, hw tuning, OMPI or mxm tuning may be needed as well. (there
</span><br>
<span class="quotelev1">&gt; is a reason that any MPI have hundreds of knobs)
</span><br>
<p>Sure, but I don't expect to see things like significant increases in p2p
<br>
latency from something meant to improve p2p, and I've no obvious way of
<br>
debugging with the proprietary library, especially without knowing what
<br>
the knobs do.
<br>
<p>Are any other users prepared to share experience with MXM on similar
<br>
systems?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27803.php">marcin.krotkiewski: "[OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>In reply to:</strong> <a href="27763.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
