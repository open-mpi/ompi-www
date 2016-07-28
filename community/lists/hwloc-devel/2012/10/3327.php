<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 12:23:53 2012" -->
<!-- isoreceived="20121011162353" -->
<!-- sent="Thu, 11 Oct 2012 18:23:47 +0200" -->
<!-- isosent="20121011162347" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="20121011162347.GB16653_at_type.orange-hotspot.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5076F022.7090706_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 12:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3328.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="3326.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="3326.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3328.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sebastian Kuzminsky wrote:
<br>
<span class="quotelev1">&gt; Maybe lstopo should expand its cpuset to be fully inclusive at startup?  I'll
</span><br>
<span class="quotelev1">&gt; be happy to test patches if you want.
</span><br>
<p>Brice Goglin, le Thu 11 Oct 2012 18:13:53 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is the cpuset-modification a root-only operation on FreeBSD? If so lstopo
</span><br>
<span class="quotelev1">&gt; wouldn't be able to expand the cpuset at startup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lstopo has a --whole-system option to ignore such limitations. Unfortunately
</span><br>
<span class="quotelev1">&gt; the x86 backend that hwloc uses on FreeBSD requires that we bind to each
</span><br>
<span class="quotelev1">&gt; individual core to get its locality information, so that won't help unless
</span><br>
<span class="quotelev1">&gt; lstopo can indeed remove the cpuset first.
</span><br>
<p>Indeed. Also, we probably want to save the current cpuset before
<br>
modifying it, in order to be able to restore it. I don't think we want
<br>
to see libhwloc drop the current cpuset, even if only under whole-system
<br>
flag condition.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3328.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="3326.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="3326.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3328.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
