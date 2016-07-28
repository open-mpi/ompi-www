<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 18:04:12 2012" -->
<!-- isoreceived="20121105230412" -->
<!-- sent="Tue, 06 Nov 2012 10:04:06 +1100" -->
<!-- isosent="20121105230406" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="509845E6.9040905_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59F5FD99-2CE9-4B0F-8E19-2F750499034F_at_open-mpi.org" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 18:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 06/11/12 01:43, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 4, 2012, at 7:28 PM, Christopher Samuel 
</span><br>
<span class="quotelev1">&gt; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would argue that the resource managers *should* be doing it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No argument from me - I would love for them to provide me with an 
</span><br>
<span class="quotelev1">&gt; easy API that mpirun can use to specify the requirements for a
</span><br>
<span class="quotelev1">&gt; given application.
</span><br>
<p>Wouldn't it be the other way around with the resource manager setting
<br>
limits and then having the job run inside it?  Basically like the
<br>
current cpuset support in Torque, et. al, but on steroids.
<br>
<p>That way mpirun and/or orted could learn from the kernel the details
<br>
of the cgroup it is in and arrange itself appropriately.
<br>
<p>I believe that Slurm has some support for cgroups already:
<br>
<p><a href="http://www.schedmd.com/slurmdocs/cgroups.html">http://www.schedmd.com/slurmdocs/cgroups.html</a>
<br>
<p>[memcg performance]
<br>
<span class="quotelev1">&gt; Yick! However, I would expect the community to reduce that impact 
</span><br>
<span class="quotelev1">&gt; over time. If systems don't want that capability, then they can
</span><br>
<span class="quotelev1">&gt; and should disable it. On the other hand, if they do want it, then
</span><br>
<span class="quotelev1">&gt; we want to support it.
</span><br>
<p>Indeed!
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlCYReYACgkQO2KABBYQAh+BxQCbB1lbNCqotuA2paV+G6+cfAdP
<br>
xxwAnAurUX8OoK1+4oJJJY7NV9cmIoRV
<br>
=yrCv
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
