<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 22:28:28 2012" -->
<!-- isoreceived="20121105032828" -->
<!-- sent="Mon, 05 Nov 2012 14:28:21 +1100" -->
<!-- isosent="20121105032821" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="50973255.5080808_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FB3EF70F-1BC4-4B1C-A08E-0EAD4252910E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-11-04 22:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3365.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.2rc1r4999)"</a>
<li><strong>In reply to:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 03/11/12 09:05, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; System resource managers don't usually provide this capability, so
</span><br>
<span class="quotelev1">&gt; we will do it at the ORTE level.
</span><br>
<p>I would argue that the resource managers *should* be doing it - however,
<br>
I will also argue that the resource managers should be doing it via
<br>
hwloc (so I'm afraid it's not an out for you folks :-) ).
<br>
<p>It's also worth remembering that the memcg code has an appalling
<br>
reputation with the kernel developers in terms of performance overhead,
<br>
for instance at the recent Kernel Summit numbers were reported showing a
<br>
substantial impact for just having the code present, but not used.
<br>
<p>Following that a patch set was sent out trying to avoid that impact if
<br>
it's not in use which doesn't help here but does give a measure of the
<br>
performance hit:
<br>
<p><a href="http://lwn.net/Articles/517562/">http://lwn.net/Articles/517562/</a>
<br>
<p># So as one can see, the difference between base and nomemcg in terms
<br>
# of both system time and elapsed time is quite drastic, and consistent
<br>
# with the figures shown by Mel Gorman in the Kernel summit. This is a
<br>
# ~7 % drop in performance, just by having memcg enabled. memcg
<br>
# functions appear heavily in the profiles, even if all tasks lives in
<br>
# the root memcg.
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
<p>iEYEARECAAYFAlCXMlUACgkQO2KABBYQAh8eTgCgkruuxIKc3mqpoxwMaeQBI1hR
<br>
/osAn225q4G6FWs1b4Lm6F/9GHDgw9JB
<br>
=jkm0
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3365.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.2rc1r4999)"</a>
<li><strong>In reply to:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3367.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
