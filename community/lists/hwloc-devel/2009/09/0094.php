<?
$subject_val = "Re: [hwloc-devel] restricted topology (&amp; topology changes)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 17:31:13 2009" -->
<!-- isoreceived="20090927213113" -->
<!-- sent="Sun, 27 Sep 2009 23:31:07 +0200" -->
<!-- isosent="20090927213107" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restricted topology (&amp;amp; topology changes)" -->
<!-- id="D28E991C-C1F2-4B73-97F8-FE024226D0E6_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090927133439.GG7681_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2009-09-27 17:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0095.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 27-set-09, at 15:34, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've wondered how to implement topology changes indeed. AIX does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have a SIGRECONFIG signal for this, I don't know any support from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other OSes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maybe there's a inotify way to get such changes in Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is usually no inotify support for virtual files. I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just tested that it doesn't work for /sys/bus/usb/devices for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance. We'll have to ask kernel developers for it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok just as information osx has such a callback if possible it would  
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; nice to have such functionality abstracted away...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know how it is called?
</span><br>
<p>I have looked for it, and was not able to find the documentation  
<br>
again, I suppose that registering for power management changes and  
<br>
check if for example hw.activecpu changed should do the trick, but I  
<br>
cannot track down the place where I had read something about it...
<br>
<p><span class="quotelev1">&gt; (problem with macosx is that it doesn't support processor binding
</span><br>
<span class="quotelev1">&gt; anyway...)
</span><br>
<p>yes it is possible just to group threads that should stay together...
<br>
<p>Fawzi
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0095.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0093.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
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
