<?
$subject_val = "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 04:25:20 2012" -->
<!-- isoreceived="20120131092520" -->
<!-- sent="Tue, 31 Jan 2012 10:25:14 +0100" -->
<!-- isosent="20120131092514" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'" -->
<!-- id="4F27B37A.4030606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120130180037.GA4025_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 04:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 30/01/2012 19:00, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Devendar Bureddy, le Mon 30 Jan 2012 18:59:11 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; /home/bureddy/hwloc-1.4/include/private/cpuid.h: In function 'hwloc_cpuid':
</span><br>
<span class="quotelev2">&gt;&gt; /home/bureddy/hwloc-1.4/include/private/cpuid.h:54: error: can't find
</span><br>
<span class="quotelev2">&gt;&gt; a register in class 'BREG' while reloading 'asm'
</span><br>
<span class="quotelev1">&gt; Could you check in the config.log that the test for buildability of
</span><br>
<span class="quotelev1">&gt; cpuid.h includes your -mcmodel option and (would be surprising) doesn't
</span><br>
<span class="quotelev1">&gt; fail?
</span><br>
<p>The build failure goes away when I remove -fPIC from my command line.
<br>
Obviously this option is not passed to configure, so it doesn't fail there.
<br>
<p>Building the static lib only seems to work as well.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure CFLAGS=-mcmodel=medium --enable-static --disable-shared
<br>
<p>No idea what to do now :)
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
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
