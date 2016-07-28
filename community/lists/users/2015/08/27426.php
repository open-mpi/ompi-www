<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 12:34:42 2015" -->
<!-- isoreceived="20150811163442" -->
<!-- sent="Tue, 11 Aug 2015 17:34:39 +0100" -->
<!-- isosent="20150811163439" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="87io8lg4ww.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EF0B6E_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Date:</strong> 2015-08-11 12:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I read @
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that for OpenMPI Parallel Environments there's
</span><br>
<span class="quotelev1">&gt; a special consideration for Son of Grid Engine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    '&quot;qsort_args&quot; is necessary with the Son of Grid Engine distribution,
</span><br>
<span class="quotelev1">&gt;    version 8.1.1 and later, and probably only applicable to it.  For
</span><br>
<span class="quotelev1">&gt;    very old versions of SGE, omit &quot;accounting_summary&quot; too.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this requirement still hold true for OpenMPI 1.8.7? Because
</span><br>
<span class="quotelev1">&gt; the webpage above only refers to much older versions of OpenMPI.
</span><br>
<p>That's actually unrelated to OMPI, and the current distribution contains
<br>
an &quot;mpi&quot; PE for tight integration which should work with OMPI and modern
<br>
MPICH-y startup (hydra?), at least.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27397.php">Lane, William: "[OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
