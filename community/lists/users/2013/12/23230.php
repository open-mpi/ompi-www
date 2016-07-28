<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 17:19:37 2013" -->
<!-- isoreceived="20131218221937" -->
<!-- sent="Wed, 18 Dec 2013 14:19:35 -0800" -->
<!-- isosent="20131218221935" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="20131218221935.GK7636_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F528AA33-FF8C-488A-BC9B-47DEAFFC67A9_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 17:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="23229.php">Ake Sandgren: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>expanding on Noam's problem a bit ...
<br>
<p>On Wed, Dec 18, 2013 at 10:19:25AM -0500, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; Thanks to all who answered my question.  The culprit was an interaction between
</span><br>
<span class="quotelev1">&gt; 1.7.3 not supporting mpi_paffinity_alone (which we were using previously) and the new 
</span><br>
<span class="quotelev1">&gt; kernel.  Switching to --bind-to core (actually the environment variable 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_hwloc_base_binding_policy=core) fixed the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Noam
</span><br>
<p>Thanks for figuring this out. Does this work for 1.6.x as well?
<br>
The FAQ <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
covers versions 1.2.x to 1.5.x. 
<br>
Does 1.6.x support mpi_paffinity_alone = 1 ?
<br>
I set this in openmpi-mca-params.conf but
<br>
<p># ompi_info | grep affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: affinity example
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
<p>does not give any indication that this is actually used.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
WestGrid/ComputeCanada
Simon Fraser University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23231.php">Siddhartha Jana: "Re: [OMPI users] [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="23229.php">Ake Sandgren: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23253.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
