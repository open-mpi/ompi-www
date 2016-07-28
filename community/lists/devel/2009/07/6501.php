<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 12:55:24 2009" -->
<!-- isoreceived="20090722165524" -->
<!-- sent="Wed, 22 Jul 2009 18:55:18 +0200" -->
<!-- isosent="20090722165518" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="36ca99e90907220955s3ee8fe7y6114ddb1b3f41f6c_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="alpine.DEB.2.00.0907221700350.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 12:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 22, 2009 at 17:17, Sylvain Jeaugey&lt;sylvain.jeaugey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm interested in joining the effort, since we will likely have the same
</span><br>
<span class="quotelev1">&gt; problem with SLURM's cpuset support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 22 Jul 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But as to why it's getting EINVAL, that could be wonky. &#194;&#160;We might want to
</span><br>
<span class="quotelev2">&gt;&gt; take this to the PLPA list and have you run some small, non-MPI examples to
</span><br>
<span class="quotelev2">&gt;&gt; ensure that PLPA is parsing your /sys tree properly, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see the /sys implication here. Can you be more precise on which
</span><br>
<span class="quotelev1">&gt; files are read to determine placement ?
</span><br>
Most files under /sys/devices/system/cpu/cpu*/topology/*
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, when you are inside a cpuset, you can see all cpus (/sys should be
</span><br>
<span class="quotelev1">&gt; unmodified) but calling set_schedaffinity with a mask containing a cpu
</span><br>
<span class="quotelev1">&gt; outside the cpuset will return EINVAL.
</span><br>
No. The Linux kernel ands the cpumask of the tasks cpuset with the
<br>
given affinity mask. If no cpuset is involved it takes the online
<br>
mask. After that, it checks if the resulting mask is a subset of the
<br>
online mask and would return -EINVAL.
<br>
<p><span class="quotelev1">&gt; The only solution I see to solve this
</span><br>
<span class="quotelev1">&gt; would be to get the &quot;allowed&quot; cpus with sched_getaffinity, which should be
</span><br>
<span class="quotelev1">&gt; set according to the cpuset mask.
</span><br>
sched_getaffinity() doesn't return the cpuset mask. It returns the
<br>
mask the task can run, which is a subset of the cpuset. Also the
<br>
initial mask of the task (right after exec) does not to be the cpuset
<br>
mask, because the affinity mask is inherited from the parent.
<br>
<p>I does not know any C interface to get a tasks cpuset mask (ok,
<br>
libcpuset, looks like this lib is debian now, note to myself: check
<br>
this). The Cpus_allowed* fields in /proc/&lt;pid&gt;/status are the same as
<br>
sched_getaffinity returns and the /proc/&lt;pid&gt;/cpuset needs to be
<br>
resolved, i.e. where is the cpuset fs mounted?
<br>
<p>Bert
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6500.php">Sylvain Jeaugey: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6502.php">Bert Wesarg: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
