<?
$subject_val = "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 19:06:10 2010" -->
<!-- isoreceived="20100618230610" -->
<!-- sent="Sat, 19 Jun 2010 01:06:05 +0200" -->
<!-- isosent="20100618230605" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj" -->
<!-- id="20100618230605.GM4931_at_const.famille.thibault.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="COL124-W292059962447647EF2949FD6C00_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 19:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0168.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new debianj"</a>
<li><strong>Reply:</strong> <a href="0179.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Sat 19 Jun 2010 00:31:59 +0300, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I think the problem is on the kernel.
</span><br>
<p>I'd tend to think the same.  I've had a quick look at the differences
<br>
between the kernels and potential culprit could be at least cgroup or
<br>
priority-inheritance futexes.  You should probably raise the issue on
<br>
the linux-kernel mailing list.  Ideally, you should check wether vanilla
<br>
2.6.30, 2.6.32 and 2.6.34 kernel also have the issue, and use git bisect
<br>
to find out when it stopped working.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Samuel Thibault: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Jirka Hladky: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0168.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new debianj"</a>
<li><strong>Reply:</strong> <a href="0179.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new debianj"</a>
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
