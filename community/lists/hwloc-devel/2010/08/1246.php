<?
$subject_val = "Re: [hwloc-devel] hwloc on power7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 20:21:29 2010" -->
<!-- isoreceived="20100805002129" -->
<!-- sent="Thu, 05 Aug 2010 10:21:19 +1000" -->
<!-- isosent="20100805002119" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on power7" -->
<!-- id="4C5A03FF.6050703_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201008050027.05899.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on power7<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 20:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 05/08/10 08:27, Jirka Hladky wrote:
<br>
<p><span class="quotelev1">&gt; which seems to be wrong.....
</span><br>
<p>I hope so!
<br>
<p>I've sent a query to some of the IBM'ers I know in case
<br>
they can shed some light.
<br>
<p>On our Power6 box with SLES10 those topology directories
<br>
are empty.. :-(
<br>
<p># ls /sys/devices/system/cpu/cpu0/topology/
<br>
# uname -r
<br>
2.6.16.60-0.54.5-ppc64
<br>
#
<br>
<p>That said 1.0.2 and 1.1a1r2387 still appears to get mostly
<br>
the right layout (it misses the fact that it's SMT).
<br>
<p>Machine (31GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 15GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 16GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
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
<p>iEYEARECAAYFAkxaA/8ACgkQO2KABBYQAh+DwgCdEndtXzrisWM/trz81AdWtMZr
<br>
5osAnjIP5hif6Mba7XZk671MAznq3DSA
<br>
=ZqAC
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>In reply to:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
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
