<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 11:42:24 2010" -->
<!-- isoreceived="20101120164224" -->
<!-- sent="Sat, 20 Nov 2010 17:42:14 +0100" -->
<!-- isosent="20101120164214" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE7FA66.2020106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE7DDFF.2040102_at_unimelb.edu.au" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 11:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1514.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1512.php">Jeff Squyres: "Re: [hwloc-devel] python bindings for libhwloc?"</a>
<li><strong>In reply to:</strong> <a href="1510.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1514.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1514.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/11/2010 15:41, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt;&gt; FAIL: test-gather-topology.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could send the output of hwloc-gather-topology.sh ? This is the easiest
</span><br>
<span class="quotelev2">&gt; &gt; way for us to debug remotely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a problem, find both the output file and the tarball
</span><br>
<span class="quotelev1">&gt; attached to this email.
</span><br>
<p>Thanks. The tarball looks good. It seems to report everything as
<br>
expected. By the way, it's funny to see a L4 cache without any L3,
<br>
there's likely something to fix in the device-tree code, but it should
<br>
not be very important.
<br>
<p>So, it looks like running lstopo on the tarball doesn't work fine. It
<br>
doesn't see any caches (which may be related to /proc/device-tree/ too).
<br>
<p>Could you extract the tarball under /tmp and run
<br>
&quot;HWLOC_FSROOT=/tmp/sles10sp1-ppc64 lstopo&quot; ? I assume you will not see
<br>
any caches. If so, first check that
<br>
/tmp/sles10sp1-ppc64/proc/device-tree/ seems to contain what's also in
<br>
/proc/device-tree/ . Then reconfigure with --enable-debug and send the
<br>
whole stdout/stderr of &quot;HWLOC_FSROOT=/tmp/sles10sp1-ppc64 lstopo&quot;
<br>
<p>If you can get me access to this machine, it would help a lot too :)
<br>
<p>Thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1514.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1512.php">Jeff Squyres: "Re: [hwloc-devel] python bindings for libhwloc?"</a>
<li><strong>In reply to:</strong> <a href="1510.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1514.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1514.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
