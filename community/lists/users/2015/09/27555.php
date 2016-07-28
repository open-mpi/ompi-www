<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 09:49:52 2015" -->
<!-- isoreceived="20150910134952" -->
<!-- sent="Thu, 10 Sep 2015 14:49:50 +0100" -->
<!-- isosent="20150910134950" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="87613ifkox.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293F035B0_at_cshsmsgmbx01.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 09:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27554.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>In reply to:</strong> <a href="27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Our issues with OpenMPI 1.8.7 and Son-of-Gridengine turned out to be
</span><br>
<span class="quotelev1">&gt; down to using the wrong Parallel Environment. Having a PE with
</span><br>
<span class="quotelev1">&gt; control_slaves set to TRUE and start_proc_args and stop_proc_args set
</span><br>
<span class="quotelev1">&gt; to NONE cleared up all our issues, at least for my MPI test code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Qsort_args was left set to NONE, which directly contradicts the FAQ
</span><br>
<span class="quotelev1">&gt; for running OpenMPI through Son-of-Gridengine so maybe the OpenMPI FAQ
</span><br>
<span class="quotelev1">&gt; WRT SOGE should be revised.
</span><br>
<p>I don't see how.  The example in the FAQ is correct, and exactly what is
<br>
used here in some PEs (apart from the name).
<br>
<p><span class="quotelev1">&gt; Qsort_args is an API that involves writing
</span><br>
<span class="quotelev1">&gt; your own function in a dynamically shared object that determines what
</span><br>
<span class="quotelev1">&gt; nodes should be used to schedule a job.
</span><br>
<p>Yes, as in sge_pe(1), and it's NONE in the example.  (The obvious
<br>
application for it is to optimize the topology of the allocation.)
<br>
<p>This isn't openmpi-specific, though.  It should be the same with any
<br>
other MPI that provides tight integration directly, like those using
<br>
hydra.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27554.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>In reply to:</strong> <a href="27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27556.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
