<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:37:14 2010" -->
<!-- isoreceived="20100128183714" -->
<!-- sent="Thu, 28 Jan 2010 11:36:49 -0700" -->
<!-- isosent="20100128183649" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271FB_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128183431.GB4799_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Dan Eaton (<em>daniel.eaton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 13:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0025.php">Norman Lo: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0023.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0026.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0029.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the cpuid version works marvelously. The only thing it misses is memory/NUMA node (is it using libnuma?).
<br>
<p>It also works for the dual Harpertown machine.
<br>
<p>I will try HT now.
<br>
<p>Thanks,
<br>
Dan
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 11:35 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8
<br>
<p>Dan Eaton, le Thu 28 Jan 2010 11:22:06 -0700, a &#233;crit :
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
_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0025.php">Norman Lo: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0023.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0026.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0029.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
