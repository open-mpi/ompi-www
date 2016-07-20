<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:49:35 2010" -->
<!-- isoreceived="20100128184935" -->
<!-- sent="Thu, 28 Jan 2010 11:49:10 -0700" -->
<!-- isosent="20100128184910" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271FF_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128184602.GE4799_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-01-28 13:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Dan Eaton: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0034.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0034.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I'm probably lumping more than I should under the name &quot;cpuid&quot;.
<br>
<p>Are you using an algorithm like the one recommended by Intel for your x86 backend?
<br>
<p><a href="http://software.intel.com/en-us/articles/optimal-performance-on-multithreaded-software-with-intel-tools/">http://software.intel.com/en-us/articles/optimal-performance-on-multithreaded-software-with-intel-tools/</a>
<br>
<p>Thanks :)
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 11:46 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8
<br>
<p>Dan Eaton, le Thu 28 Jan 2010 11:36:49 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; Yes, the cpuid version works marvelously. The only thing it misses is memory/NUMA node (is it using libnuma?).
</span><br>
<p>Cpuids do not have any relation with NUMA nodes.  Thanks for the sample,
<br>
it is a hint that maybe we'll have to permit users &amp; applications
<br>
to be quite precise about which backend should detect what (e.g.
<br>
here, blacklist linux' core topology information, but use its numa
<br>
information, and use the core and cache topology information from the
<br>
x86 backend).
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
<li><strong>Next message:</strong> <a href="0033.php">Dan Eaton: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0034.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0034.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
