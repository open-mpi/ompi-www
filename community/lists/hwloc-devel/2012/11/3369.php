<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 21:01:22 2012" -->
<!-- isoreceived="20121106020122" -->
<!-- sent="Mon, 5 Nov 2012 18:01:16 -0800" -->
<!-- isosent="20121106020116" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="CAMD57oe5eNyrqtf04kZLzEz-j6beoUEKyKoK0U3C_6y-u72Vhw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509845E6.9040905_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cgroup resource limits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 21:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3370.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3370.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3370.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/5/12, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/11/12 01:43, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 4, 2012, at 7:28 PM, Christopher Samuel
</span><br>
<span class="quotelev2">&gt;&gt; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would argue that the resource managers *should* be doing it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No argument from me - I would love for them to provide me with an
</span><br>
<span class="quotelev2">&gt;&gt; easy API that mpirun can use to specify the requirements for a
</span><br>
<span class="quotelev2">&gt;&gt; given application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wouldn't it be the other way around with the resource manager setting
</span><br>
<span class="quotelev1">&gt; limits and then having the job run inside it?  Basically like the
</span><br>
<span class="quotelev1">&gt; current cpuset support in Torque, et. al, but on steroids.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That way mpirun and/or orted could learn from the kernel the details
</span><br>
<span class="quotelev1">&gt; of the cgroup it is in and arrange itself appropriately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that Slurm has some support for cgroups already:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.schedmd.com/slurmdocs/cgroups.html">http://www.schedmd.com/slurmdocs/cgroups.html</a>
</span><br>
<p>Depends on the use-case. If you are going to direct-launch the
<br>
processes (e.g., using srun), then you are correct.
<br>
<p>However, that isn't the case in other scenarios. For example, if you
<br>
get an allocation and then use mpirun to launch your job, you
<br>
definitely do *not* want the RM setting the cgroup constraints as the
<br>
RM only launches the orteds - it never sees the MPI procs. The
<br>
constraints are to apply to the individual procs as separate entities
<br>
- if you apply them to the orteds, then all procs will be constrained
<br>
to the same container. Ick.
<br>
<p>Similarly, if you are running MapReduce, your application has to
<br>
figure out what nodes to run on, how much memory will be required,
<br>
etc. All that goes into the allocation request (made by the equivalent
<br>
of mpirun in that scenario) sent to the RM. Again, the orteds need to
<br>
set those constraints on a per-process basis.
<br>
<p>So we need the capability in ORTE to support the non-direct-launch cases.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [memcg performance]
</span><br>
<span class="quotelev2">&gt;&gt; Yick! However, I would expect the community to reduce that impact
</span><br>
<span class="quotelev2">&gt;&gt; over time. If systems don't want that capability, then they can
</span><br>
<span class="quotelev2">&gt;&gt; and should disable it. On the other hand, if they do want it, then
</span><br>
<span class="quotelev2">&gt;&gt; we want to support it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlCYReYACgkQO2KABBYQAh+BxQCbB1lbNCqotuA2paV+G6+cfAdP
</span><br>
<span class="quotelev1">&gt; xxwAnAurUX8OoK1+4oJJJY7NV9cmIoRV
</span><br>
<span class="quotelev1">&gt; =yrCv
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3370.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3370.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3370.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
