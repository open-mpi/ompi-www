<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:03:32 2010" -->
<!-- isoreceived="20100128180332" -->
<!-- sent="Thu, 28 Jan 2010 11:03:07 -0700" -->
<!-- isosent="20100128180307" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271E6_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128175510.GS4873_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2010-01-28 13:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0016.php">Norman Lo: "[hwloc-users] Istopo question"</a>
<li><strong>In reply to:</strong> <a href="0015.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I go through the API (which I would do anyway, I just wanted a &quot;taste&quot; with lstopo), can I choose to override information reported by the OS (i.e. go straight to CPUID), or do I still require the patch in this case?
<br>
<p>Unfortunately that version of x86info requires glibc 2.4 -- RHEL 4.x only has 2.3.4.
<br>
<p>Kind regards,
<br>
Dan
<br>
<p><p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 10:55 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8
<br>
<p>Dan Eaton, le Thu 28 Jan 2010 10:32:46 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I just meant without resorting to CPUID, because it is so unportable 
</span><br>
<span class="quotelev1">&gt; (to consider implementing directly into our library).
</span><br>
<p>Ok.  Unfortunately, when the information reported by the OS is bogus (as it seems to be the case here), there is no other way than just asking the hardware directly, or fixing the lstopo xml output and using it.
<br>
<p><span class="quotelev1">&gt; I've attached the output of x86info.
</span><br>
<p>Ah, that's an old x86info, could you try building a newer one? (Like Debian's 1.25 available on <a href="http://ftp.debian.org/debian/pool/main/x/x86info/x86info_1.25.orig.tar.gz">http://ftp.debian.org/debian/pool/main/x/x86info/x86info_1.25.orig.tar.gz</a>
<br>
)
<br>
<p><span class="quotelev1">&gt; Is it possible to get at your CPUID backend now?
</span><br>
<p>The quick &amp; dirty way is the attached patch, to be applied on top of the svn trunk, which forces x86 cpuid detection on Linux.  Please pass --enable-debug to ./configure so we get precise debugging output from lstopo.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0018.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0016.php">Norman Lo: "[hwloc-users] Istopo question"</a>
<li><strong>In reply to:</strong> <a href="0015.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0019.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
