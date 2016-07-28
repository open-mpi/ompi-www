<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 14:49:47 2010" -->
<!-- isoreceived="20101121194947" -->
<!-- sent="Sun, 21 Nov 2010 20:49:49 +0100" -->
<!-- isosent="20101121194949" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE977DD.6030607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE9744B.7040101_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2010-11-21 14:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1527.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1527.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1527.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/11/2010 20:34, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; In look_powerpc_device_tree() I did similar and found that it
</span><br>
<span class="quotelev1">&gt; never proceeds past this loop:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (('.' == dirent-&gt;d_name[0]) || (0 == (dirent-&gt;d_type &amp; DT_DIR)))
</span><br>
<span class="quotelev1">&gt;       continue;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding some debugging to print the name and type and whether
</span><br>
<span class="quotelev1">&gt; they were used or skipped I see that when it fails the
</span><br>
<span class="quotelev1">&gt; dirent-&gt;d_type is always '0', but when it works it's '4'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The manual page for readdir(3) says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #  Currently,  only  some  file  systems  (among them: Btrfs,
</span><br>
<span class="quotelev1">&gt; #  ext2, ext3, and ext4) have full support returning the file
</span><br>
<span class="quotelev1">&gt; #  type in d_type.   All  applications must properly handle
</span><br>
<span class="quotelev1">&gt; #  a return of DT_UNKNOWN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm guessing that reiserfs and GPFS (both of which are
</span><br>
<span class="quotelev1">&gt; available on this PPC64 box) are returning DT_UNKNOWN (0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the above loop will need to catch that and, if it is
</span><br>
<span class="quotelev1">&gt; DT_UNKNOWN, do a stat or lstat on the entry to find out
</span><br>
<span class="quotelev1">&gt; what it is. :-(
</span><br>
<p>Awesome! Thanks a looooot Chris. Can you remove your debugging stuff, my
<br>
debug patch, and apply the attached patch. What it does is:
<br>
* gather empty dirs in hwloc-gather-topology (already pushed to trunk)
<br>
* don't use sysfs when cpu0/topology contains nothing (pushed too)
<br>
* use stat.st_mode instead of dirent-&gt;d_type (seems to not break
<br>
anything in our standard PPC tarballs, but needs more testing)
<br>
<p>I hope make check works now. And &quot;lstopo&quot; with and without the
<br>
HWLOC_FSROOT should also both use the cpuinfo code (you should see &quot;*
<br>
Topology extraction from /proc/cpuinfo *&quot; very early in the debug output).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1527.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1525.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1527.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1527.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
