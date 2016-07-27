<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 12:43:41 2010" -->
<!-- isoreceived="20101120174341" -->
<!-- sent="Sun, 21 Nov 2010 04:43:35 +1100" -->
<!-- isosent="20101120174335" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE808C7.5080301_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE7FA66.2020106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 12:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hiya,
<br>
<p>On 21/11/10 03:42, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks. The tarball looks good. It seems to report everything as
</span><br>
<span class="quotelev1">&gt; expected. By the way, it's funny to see a L4 cache without any L3,
</span><br>
<span class="quotelev1">&gt; there's likely something to fix in the device-tree code, but it should
</span><br>
<span class="quotelev1">&gt; not be very important.
</span><br>
<p>Understood.
<br>
<p><span class="quotelev1">&gt; So, it looks like running lstopo on the tarball doesn't work fine. It
</span><br>
<span class="quotelev1">&gt; doesn't see any caches (which may be related to /proc/device-tree/ too).
</span><br>
<p>Yeah, it's also not showing the SMT's either.
<br>
<p><span class="quotelev1">&gt; Could you extract the tarball under /tmp and run
</span><br>
<span class="quotelev1">&gt; &quot;HWLOC_FSROOT=/tmp/sles10sp1-ppc64 lstopo&quot; ? I assume you will not see
</span><br>
<span class="quotelev1">&gt; any caches.
</span><br>
<p>Correct - this is what it looks like:
<br>
<p>Machine (15GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 7680MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 8000MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
<br>
<p><p>This is what it's meant to look like:
<br>
<p>Machine (15GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 7680MB) + L4 #0 (32MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (4096KB) + L1 #0 (64KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (4096KB) + L1 #1 (64KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 8000MB) + L4 #1 (32MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (4096KB) + L1 #2 (64KB) + Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (4096KB) + L1 #3 (64KB) + Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
<br>
<p><span class="quotelev1">&gt; If so, first check that /tmp/sles10sp1-ppc64/proc/device-tree/
</span><br>
<span class="quotelev1">&gt; seems to contain what's also in /proc/device-tree/ . Then
</span><br>
<span class="quotelev1">&gt; reconfigure with --enable-debug and send the whole stdout/stderr
</span><br>
<span class="quotelev1">&gt; of &quot;HWLOC_FSROOT=/tmp/sles10sp1-ppc64 lstopo&quot;
</span><br>
<p>OK - have to go and check out now so no more Internet access until
<br>
I get to LA tonight, so that will need to wait I'm afraid! :-(
<br>
<p><span class="quotelev1">&gt; If you can get me access to this machine, it would help a lot too :)
</span><br>
<p>I'll see what I can do when I'm back in Melbourne. :-)
<br>
<p>cheers!
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
<p>iEYEARECAAYFAkzoCMcACgkQO2KABBYQAh9KnACeOB3D+z/wWE1rDW/WBcMHfyNH
<br>
Q/EAn0HsgjjufuEpSIMEIjx+gaQ6pJi8
<br>
=gwQQ
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
