<?
$subject_val = "Re: [hwloc-devel] restricted topology (&amp; topology changes)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 09:26:45 2009" -->
<!-- isoreceived="20090927132645" -->
<!-- sent="Sun, 27 Sep 2009 15:26:40 +0200" -->
<!-- isosent="20090927132640" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restricted topology (&amp;amp; topology changes)" -->
<!-- id="911D6F16-3E48-4764-9FB5-213D6EB920FB_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090927123734.GD7681_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 09:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 27-set-09, at 14:37, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Sun 27 Sep 2009 14:18:54 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but shouldn't it return the restricted topology (or have a method  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returns the restricted topology).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should already be the default. To get the whole system, see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lstopo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --help: --whole-system
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe he's referring to when the process launcher does a
</span><br>
<span class="quotelev2">&gt;&gt; sched_setaffinity/numatcl to restrict this process, as opposed to
</span><br>
<span class="quotelev2">&gt;&gt; administrator-wide restriction with linux cpusets or so. We could add
</span><br>
<span class="quotelev2">&gt;&gt; another topology flag for such restrictions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, right.
</span><br>
<p>thanks for the quick answers, so I think that the answer is for now  
<br>
you can on linux 2.6 if you use cpusets.
<br>
Having my app starting a a restricted subtask that will see it in its  
<br>
topology in a portable way is not possible at the moment, if I  
<br>
understood correctly.
<br>
Still it is already something.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I've wondered how to implement topology changes indeed. AIX does  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SIGRECONFIG signal for this, I don't know any support from other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OSes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe there's a inotify way to get such changes in Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is usually no inotify support for virtual files. I've just  
</span><br>
<span class="quotelev1">&gt; tested
</span><br>
<span class="quotelev1">&gt; that it doesn't work for /sys/bus/usb/devices for instance. We'll have
</span><br>
<span class="quotelev1">&gt; to ask kernel developers for it.
</span><br>
<p>ok just as information osx has such a callback if possible it would be  
<br>
nice to have such functionality abstracted away...
<br>
<p>thanks
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
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
