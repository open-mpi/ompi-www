<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 09:43:59 2012" -->
<!-- isoreceived="20121105144359" -->
<!-- sent="Mon, 5 Nov 2012 06:43:52 -0800" -->
<!-- isosent="20121105144352" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="59F5FD99-2CE9-4B0F-8E19-2F750499034F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50973255.5080808_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2012-11-05 09:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2012, at 7:28 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/11/12 09:05, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; System resource managers don't usually provide this capability, so
</span><br>
<span class="quotelev2">&gt;&gt; we will do it at the ORTE level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would argue that the resource managers *should* be doing it
</span><br>
<p>No argument from me - I would love for them to provide me with an easy API that mpirun can use to specify the requirements for a given application.
<br>
<p><span class="quotelev1">&gt; - however,
</span><br>
<span class="quotelev1">&gt; I will also argue that the resource managers should be doing it via
</span><br>
<span class="quotelev1">&gt; hwloc (so I'm afraid it's not an out for you folks :-) ).
</span><br>
<p>Agreed, though I leave that to the individual RMs to decide.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's also worth remembering that the memcg code has an appalling
</span><br>
<span class="quotelev1">&gt; reputation with the kernel developers in terms of performance overhead,
</span><br>
<span class="quotelev1">&gt; for instance at the recent Kernel Summit numbers were reported showing a
</span><br>
<span class="quotelev1">&gt; substantial impact for just having the code present, but not used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following that a patch set was sent out trying to avoid that impact if
</span><br>
<span class="quotelev1">&gt; it's not in use which doesn't help here but does give a measure of the
</span><br>
<span class="quotelev1">&gt; performance hit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://lwn.net/Articles/517562/">http://lwn.net/Articles/517562/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # So as one can see, the difference between base and nomemcg in terms
</span><br>
<span class="quotelev1">&gt; # of both system time and elapsed time is quite drastic, and consistent
</span><br>
<span class="quotelev1">&gt; # with the figures shown by Mel Gorman in the Kernel summit. This is a
</span><br>
<span class="quotelev1">&gt; # ~7 % drop in performance, just by having memcg enabled. memcg
</span><br>
<span class="quotelev1">&gt; # functions appear heavily in the profiles, even if all tasks lives in
</span><br>
<span class="quotelev1">&gt; # the root memcg.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yick! However, I would expect the community to reduce that impact over time. If systems don't want that capability, then they can and should disable it. On the other hand, if they do want it, then we want to support it.
<br>
<p><p><span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
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
<span class="quotelev1">&gt; iEYEARECAAYFAlCXMlUACgkQO2KABBYQAh8eTgCgkruuxIKc3mqpoxwMaeQBI1hR
</span><br>
<span class="quotelev1">&gt; /osAn225q4G6FWs1b4Lm6F/9GHDgw9JB
</span><br>
<span class="quotelev1">&gt; =jkm0
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3368.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
