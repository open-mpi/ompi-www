<?
$subject_val = "Re: [hwloc-users] Magny Cours L3 cache issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 10:52:12 2011" -->
<!-- isoreceived="20110816145212" -->
<!-- sent="Tue, 16 Aug 2011 14:49:23 +0000" -->
<!-- isosent="20110816144923" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Magny Cours L3 cache issue" -->
<!-- id="9C454A16-87F7-422A-94A1-5DE8770261EB_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110815221424.GX18853_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Magny Cours L3 cache issue<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 10:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0406.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2011, at 4:14 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Wheeler, Kyle Bruce, le Tue 16 Aug 2011 00:11:41 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I'm having the problem that my Magny Cours system is being identified (via hwloc-ls) as sharing an L3 cache between the NUMAnodes on a single socket. I know that this is not actually true, and I don't know how to begin debugging hwloc to see why it thinks that about the L3 cache. Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess you have updated to the latest Linux kernel version?
</span><br>
<p>Unfortunately, this is not on a machine I have root access to. But, for what it's worth, here's the uname -a output:
<br>
Linux mzlogin01e 2.6.27.45-0.1-default #1 SMP 2010-02-22 16:49:47 +0100 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><span class="quotelev1">&gt; If the problem persists, please attach the output of lstopo after having
</span><br>
<span class="quotelev1">&gt; given the --enable-debug option to ./configure and rebuilt completely,
</span><br>
<span class="quotelev1">&gt; to get debugging output. Also attach the /proc + /sys tarball generated
</span><br>
<span class="quotelev1">&gt; by the installed script hwloc-gather-topology.sh
</span><br>
<p>I'm attaching the lstopo output, but hwloc-gather-topology doesn't seem to work on my compute nodes... not sure why. It doesn't report any failures, but it doesn't create the tarball either (just spits out more lstopo output).
<br>
<pre>
-- 
Kyle B. Wheeler
Dept. 1423: Scalable System Software
Sandia National Laboratories
505-844-0394

</pre>
<p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0412/hwloc-gathered-topology.output.txt__size_3090__creation-date_">hwloc-gathered-topology.output.txt</a>
</ul>
<!-- attachment="hwloc-gathered-topology.output.txt__size_3090__creation-date_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>In reply to:</strong> <a href="0406.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
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
