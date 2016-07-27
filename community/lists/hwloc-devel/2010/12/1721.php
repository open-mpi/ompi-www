<?
$subject_val = "Re: [hwloc-devel] 1.1rc4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 17:32:49 2010" -->
<!-- isoreceived="20101216223249" -->
<!-- sent="Fri, 17 Dec 2010 09:32:37 +1100" -->
<!-- isosent="20101216223237" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1rc4 released" -->
<!-- id="4D0A9385.7080800_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D09BBD9.307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1rc4 released<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 17:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1722.php">Christopher Samuel: "[hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>Previous message:</strong> <a href="1720.php">Jeff Squyres: "[hwloc-devel] &quot;Making a New Release&quot; wiki updated"</a>
<li><strong>In reply to:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 16/12/10 18:12, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 16/12/2010 02:29, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; make check fails on our CentOS 5.4 box:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can safely ignore this failure. Can you change the exit line at the
</span><br>
<span class="quotelev1">&gt; end of tests/linux/gather/test-gather-topology.sh.in into &quot;exit 0&quot;,
</span><br>
<span class="quotelev1">&gt; reconfigure and rerun make check to see if anything else fails?
</span><br>
<p>Looks fine, other than the expected &quot;XFAILED (38, Function not
<br>
implemented)&quot; stuff.
<br>
<p><span class="quotelev1">&gt; In your case, the problem is related to gather-topology.sh not gathering
</span><br>
<span class="quotelev1">&gt; all the Linux cpuset/cgroup info properly (we would need to parse
</span><br>
<span class="quotelev1">&gt; /proc/mounts in gather-topology.sh). I will try to fix this in 1.2 (I am
</span><br>
<span class="quotelev1">&gt; opening a ticket about it). We don't need to delay 1.1 because of this,
</span><br>
<span class="quotelev1">&gt; so I will ignore the failure.
</span><br>
<p>Makes good sense!
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computational Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk0Kk4UACgkQO2KABBYQAh+yXQCbBtnumpt0N0AnglL0d9o2lt5T
<br>
YJ0AoJJFuKiuWYXvUFOIAf9ozDR1Vv4B
<br>
=m7Bb
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1722.php">Christopher Samuel: "[hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>Previous message:</strong> <a href="1720.php">Jeff Squyres: "[hwloc-devel] &quot;Making a New Release&quot; wiki updated"</a>
<li><strong>In reply to:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<!-- nextthread="start" -->
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
