<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:22:31 2010" -->
<!-- isoreceived="20100128182231" -->
<!-- sent="Thu, 28 Jan 2010 11:22:06 -0700" -->
<!-- isosent="20100128182206" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271F2_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128180842.GX4873_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2010-01-28 13:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I couldn't compile trunk (rather, autogen.sh failed because it requires Autoconf &gt; 2.63), so I just pulled the nightly build hwloc-1.0a1r1682 and applied the patch there. Does that sound reasonable?
<br>
<p>I've attached the new (much more verbose) result of lstopo.
<br>
<p>Thanks,
<br>
Dan
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 11:09 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8
<br>
<p>Dan Eaton, le Thu 28 Jan 2010 11:03:07 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; If I go through the API (which I would do anyway, I just wanted a
</span><br>
<span class="quotelev1">&gt; &quot;taste&quot; with lstopo), can I choose to override information reported by
</span><br>
<span class="quotelev1">&gt; the OS (i.e. go straight to CPUID), or do I still require the patch in
</span><br>
<span class="quotelev1">&gt; this case?
</span><br>
<p>The x86 backend is very recent, I haven't implemented any interface to
<br>
override the information with the CPUID information yet, but I guess
<br>
we'll plan to do it.
<br>
<p><span class="quotelev1">&gt; Unfortunately that version of x86info requires glibc 2.4 -- RHEL 4.x only has 2.3.4.
</span><br>
<p>Ok, then please run with my patch and passing --enable-debug to
<br>
./configure, lstopo will give the APIC IDs.
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
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0020/lstopo.out">lstopo.out</a>
</ul>
<!-- attachment="lstopo.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
