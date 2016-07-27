<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 02:34:38 2010" -->
<!-- isoreceived="20101121073438" -->
<!-- sent="Sun, 21 Nov 2010 08:34:27 +0100" -->
<!-- isosent="20101121073427" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="20101121073427.GA7194_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="283591518.695422.1290324214810.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 02:34:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1517.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Maybe in reply to:</strong> <a href="1507.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1538.php">Samuel Thibault: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher Samuel, le Sun 21 Nov 2010 08:23:34 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; So, it looks like running lstopo on the tarball doesn't work fine. It
</span><br>
<span class="quotelev2">&gt; &gt; doesn't see any caches (which may be related to /proc/device-tree/ too).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, so the weird thing is that 1.1rc2 on this x86-64 laptop
</span><br>
<span class="quotelev1">&gt; seems to show the right thing, but 1.1rc2 on the PPC64 box
</span><br>
<span class="quotelev1">&gt; doesn't..
</span><br>
<p>So the issues lies in the execution itself...
<br>
<p><span class="quotelev2">&gt; &gt; If so, first check that /tmp/sles10sp1-ppc64/proc/device-tree/
</span><br>
<span class="quotelev2">&gt; &gt; seems to contain what's also in /proc/device-tree/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Way different, the captured version just has
</span><br>
<span class="quotelev1">&gt; proc/device-tree/cpus and none of the rest.
</span><br>
<p>That is expected: gather-topology only keeps what it needs.
<br>
<p><span class="quotelev2">&gt; &gt; Then reconfigure with --enable-debug and send the whole
</span><br>
<span class="quotelev2">&gt; &gt; stdout/stderr of &quot;HWLOC_FSROOT=/tmp/sles10sp1-ppc64 lstopo&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, here's both a good run and a bad run for you to compare.
</span><br>
<p>We'll have a look, thanks.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1517.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1515.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Maybe in reply to:</strong> <a href="1507.php">Christopher Samuel: "[hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1538.php">Samuel Thibault: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
