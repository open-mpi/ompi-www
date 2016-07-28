<?
$subject_val = "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 02:28:20 2009" -->
<!-- isoreceived="20090715062820" -->
<!-- sent="Wed, 15 Jul 2009 16:28:11 +1000 (EST)" -->
<!-- isosent="20090715062811" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="1811778173.596161247639291478.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="524147263.586701247617308960.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 02:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6407.php">Nikolay Molchanov: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6405.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6409.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6409.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6412.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6441.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6461.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6464.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6518.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6519.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Not sure if this is a OpenMPI query or a PLPA query,
<br>
but given that PLPA seems to have some support for it
<br>
already I thought I'd start here. :-)
<br>
<p>We run a quad core Opteron cluster with Torque 2.3.x
<br>
which uses the kernels cpuset support to constrain
<br>
a job to just the cores it has been allocated.
<br>
<p>However, we are seeing occasionally that where a job
<br>
has been allocated multiple cores on the same node we
<br>
get two compute bound MPI processes in the job scheduled
<br>
onto the same core (obviously a kernel issue).
<br>
<p>So CPU affinity would be an obvious solution, but it
<br>
needs to be done with reference to the cores that are
<br>
available to it in its cpuset.
<br>
<p>This information is already retrievable by PLPA (for
<br>
instance &quot;plpa-taskset -cp $$&quot; will retrieve the cores
<br>
allocated to the shell you run the command from) but
<br>
I'm not sure if OpenMPI makes use of this when binding
<br>
CPUs using the linux paffinity MCA parameter ?
<br>
<p>Our testing (with 1.3.2) seems to show it doesn't, and
<br>
I don't think there are any significant differences with
<br>
the snapshots in 1.4.
<br>
<p>Am I correct in this ?  If so, are there any plans to
<br>
make it do this ?
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6407.php">Nikolay Molchanov: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6405.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6409.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6409.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6412.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6441.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6461.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6464.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6518.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6519.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Maybe reply:</strong> <a href="6526.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
