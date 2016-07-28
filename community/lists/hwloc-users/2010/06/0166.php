<?
$subject_val = "Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 17:23:04 2010" -->
<!-- isoreceived="20100618212304" -->
<!-- sent="Fri, 18 Jun 2010 22:24:21 +0200" -->
<!-- isosent="20100618202421" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj" -->
<!-- id="20100618202421.GB2956_at_const" -->
<!-- charset="utf-8" -->
<!-- inreplyto="COL124-W4935FEFC3A0BC78839066DD6DE0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 16:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0167.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>Previous message:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0160.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0168.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>Reply:</strong> <a href="0168.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Wed 16 Jun 2010 16:35:27 +0300, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Here is a partial output from strace (the program does the same thing again and
</span><br>
<span class="quotelev1">&gt; again and only changes
</span><br>
<span class="quotelev1">&gt; the cpus that do the work) <a href="http://rapidshare.com/files/399658973/">http://rapidshare.com/files/399658973/</a>
</span><br>
<span class="quotelev1">&gt; strace.txt.html
</span><br>
<p>Ok, there are just a few setaffinity calls:
<br>
<p>sched_setaffinity(7261, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7262, 128, {40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7263, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7264, 128, {2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7265, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7266, 128, {10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7267, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7268, 128, {4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7269, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7270, 128, {20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7271, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7272, 128, {8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7273, 128, {1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
sched_setaffinity(7274, 128, {80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0}) = 0
<br>
<p>Is it what was expected?  (I don't know what your program is supposed to
<br>
do).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0167.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>Previous message:</strong> <a href="0165.php">Brice Goglin: "Re: [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="0160.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0168.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
<li><strong>Reply:</strong> <a href="0168.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] FW: Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on	new debianj"</a>
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
