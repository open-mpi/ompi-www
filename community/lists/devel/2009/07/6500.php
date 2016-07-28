<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 11:17:43 2009" -->
<!-- isoreceived="20090722151743" -->
<!-- sent="Wed, 22 Jul 2009 17:17:28 +0200 (CEST)" -->
<!-- isosent="20090722151728" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="alpine.DEB.2.00.0907221700350.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35DDD3E5-6941-4858-A961-6371F8FFA137_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 11:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6501.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6499.php">Ralph Castain: "Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>In reply to:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6501.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6501.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6503.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I'm interested in joining the effort, since we will likely have the same 
<br>
problem with SLURM's cpuset support.
<br>
<p>On Wed, 22 Jul 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; But as to why it's getting EINVAL, that could be wonky.  We might want to 
</span><br>
<span class="quotelev1">&gt; take this to the PLPA list and have you run some small, non-MPI examples to 
</span><br>
<span class="quotelev1">&gt; ensure that PLPA is parsing your /sys tree properly, etc.
</span><br>
I don't see the /sys implication here. Can you be more precise on which 
<br>
files are read to determine placement ?
<br>
<p>IIRC, when you are inside a cpuset, you can see all cpus (/sys should be 
<br>
unmodified) but calling set_schedaffinity with a mask containing a cpu 
<br>
outside the cpuset will return EINVAL. The only solution I see to solve 
<br>
this would be to get the &quot;allowed&quot; cpus with sched_getaffinity, 
<br>
which should be set according to the cpuset mask.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6501.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6499.php">Ralph Castain: "Re: [OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>In reply to:</strong> <a href="6498.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6501.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6501.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6503.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
