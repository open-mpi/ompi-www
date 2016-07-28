<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:34:37 2010" -->
<!-- isoreceived="20100128183437" -->
<!-- sent="Thu, 28 Jan 2010 19:34:31 +0100" -->
<!-- isosent="20100128183431" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="20100128183431.GB4799_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AD3E5D661CED404A842D89A45C87D56629708271F2_at_axe-post.Acceleware.local" -->
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
<strong>Subject:</strong> Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 13:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0020.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dan Eaton, le Thu 28 Jan 2010 11:22:06 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I couldn't compile trunk (rather, autogen.sh failed because it requires Autoconf &gt; 2.63), so I just pulled the nightly build hwloc-1.0a1r1682 and applied the patch there. Does that sound reasonable?
</span><br>
<p>Yep, it should be fine.
<br>
<p><span class="quotelev1">&gt; I've attached the new (much more verbose) result of lstopo.
</span><br>
<p>Ok, so my cpuid backend indeed detects a dual quadcore.  I guess there
<br>
is something wrong in RHEL's kernel with APIC ID interpretation.
<br>
Maybe the kernel is disturbed by the fact that APIC IDs are not
<br>
contiguous. Could you try to enable the HT feature?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0020.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
