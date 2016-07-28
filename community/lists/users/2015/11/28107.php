<?
$subject_val = "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 09:51:44 2015" -->
<!-- isoreceived="20151124145144" -->
<!-- sent="Tue, 24 Nov 2015 14:51:40 +0000" -->
<!-- isosent="20151124145140" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu" -->
<!-- id="87wpt7cuwz.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2854D2F87CDF6541B1DAB26B3E1EA12B1E953C8148_at_HHIW3MXMBXVS3.HHI.co.kr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 09:51:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28100.php">KIM GEON HONG: "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;&#234;&#185;&#128;&#234;&#177;&#180;&#237;&#153;&#141;(KIM GEON HONG)&quot;&lt;geonhong.kim_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to run a parallel computation (OpenFOAM) using Open MPI on a
</span><br>
<span class="quotelev1">&gt; HPC connected with infiniband.
</span><br>
<span class="quotelev1">&gt; When I ran a job using mpirun over a couple of nodes (20 cpus per
</span><br>
<span class="quotelev1">&gt; node), the computation was not accelerated as I expected.
</span><br>
<p>The usual problem with OpenFOAM is building it against the bundled
<br>
openmpi, not the system one, or even failing to build the MPI version at
<br>
all, and not noticing because of the horrible build system.  I've known
<br>
plenty of people fail to get it right, including me.
<br>
<p><span class="quotelev1">&gt; For example, I ran the job over 40 cpus on 2 nodes, and I checked cpu
</span><br>
<span class="quotelev1">&gt; usages and processes via top command.
</span><br>
<span class="quotelev1">&gt; I expected 20 processes would be running on each node but I found that
</span><br>
<span class="quotelev1">&gt; only 19 processes were running and a cpu was in idle while others were
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<p>Was the example set up to use them all?  Anyhow, this doesn't sound like
<br>
an openmpi problem.
<br>
<p><span class="quotelev1">&gt; 2.     Linux/kernel info: RHEL6.5 2.6.32-431.el6.x86_64
</span><br>
<span class="quotelev1">&gt; - Linux distro/version : Red hat Enterprise Linux Server release 6.5 (Santiago)
</span><br>
<p>[For what it's worth, there's a packaged version of OpenFOAM, built
<br>
against current EPEL6 system libraries, along with the source, under
<br>
&lt;<a href="https://copr.fedoraproject.org/coprs/loveshack/livhpc/">https://copr.fedoraproject.org/coprs/loveshack/livhpc/</a>&gt;.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28108.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28106.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28100.php">KIM GEON HONG: "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- nextthread="start" -->
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
