<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:35:11 2010" -->
<!-- isoreceived="20100128183511" -->
<!-- sent="Thu, 28 Jan 2010 11:34:46 -0700" -->
<!-- isosent="20100128183446" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271F9_at_axe-post.Acceleware.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B61D804.4040300_at_inria.fr" -->
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
<strong>Date:</strong> 2010-01-28 13:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>I just tried that but the output is the same. As Samuel pointed out, it looks like /proc/cpuinfo is totally bogus for this kernel. Comparing it with what it &quot;should&quot; be emitting (according to <a href="http://kbase.redhat.com/faq/docs/DOC-7715">http://kbase.redhat.com/faq/docs/DOC-7715</a>), it doesn't report more than one under &quot;cpu cores&quot;, and core id is always 255!
<br>
<p>Kind regards,
<br>
Dan
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Thursday, January 28, 2010 11:32 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8
<br>
<p>Dan Eaton wrote:
<br>
<span class="quotelev1">&gt; I couldn't compile trunk (rather, autogen.sh failed because it requires Autoconf &gt; 2.63), so I just pulled the nightly build hwloc-1.0a1r1682 and applied the patch there. Does that sound reasonable?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.
<br>
<p>By the way, there's an undocumented environment variable to force hwloc
<br>
to read /proc/cpuinfo instead of sysfs. Try setting
<br>
HWLOC_LINUX_USE_CPUINFO=1 before running the old lstopo (without the x86
<br>
backend), it might be better.
<br>
<p>Brice
<br>
<p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="0024.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Brice Goglin: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0022.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
