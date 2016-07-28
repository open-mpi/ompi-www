<?
$subject_val = "Re: [hwloc-devel] restricted topology (&amp; topology changes)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 08:37:39 2009" -->
<!-- isoreceived="20090927123739" -->
<!-- sent="Sun, 27 Sep 2009 14:37:34 +0200" -->
<!-- isosent="20090927123734" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restricted topology (&amp;amp; topology changes)" -->
<!-- id="20090927123734.GD7681_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ABF582E.5090501_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] restricted topology (&amp; topology changes)<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 08:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0092.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0092.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0092.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sun 27 Sep 2009 14:18:54 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but shouldn't it return the restricted topology (or have a method that  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returns the restricted topology).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It should already be the default. To get the whole system, see lstopo
</span><br>
<span class="quotelev2">&gt; &gt; --help: --whole-system
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe he's referring to when the process launcher does a
</span><br>
<span class="quotelev1">&gt; sched_setaffinity/numatcl to restrict this process, as opposed to
</span><br>
<span class="quotelev1">&gt; administrator-wide restriction with linux cpusets or so. We could add
</span><br>
<span class="quotelev1">&gt; another topology flag for such restrictions.
</span><br>
<p>Ah, right.
<br>
<p><span class="quotelev2">&gt; &gt; I've wondered how to implement topology changes indeed. AIX does have a
</span><br>
<span class="quotelev2">&gt; &gt; SIGRECONFIG signal for this, I don't know any support from other OSes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe there's a inotify way to get such changes in Linux.
</span><br>
<p>There is usually no inotify support for virtual files. I've just tested
<br>
that it doesn't work for /sys/bus/usb/devices for instance. We'll have
<br>
to ask kernel developers for it.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0092.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0092.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0092.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
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
