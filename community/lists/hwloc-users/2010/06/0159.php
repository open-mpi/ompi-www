<?
$subject_val = "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 09:21:09 2010" -->
<!-- isoreceived="20100616132109" -->
<!-- sent="Wed, 16 Jun 2010 15:21:04 +0200" -->
<!-- isosent="20100616132104" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj" -->
<!-- id="20100616132104.GU4240_at_const" -->
<!-- charset="utf-8" -->
<!-- inreplyto="COL124-W63D45A1F57AB66C1994E47D6DE0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 09:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0158.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0157.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0160.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0160.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Wed 16 Jun 2010 16:11:12 +0300, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; There is no shed affinity call at all if the thread is on a barrier :/
</span><br>
<p>Ok, so since hwloc_set_thread_cpubind returns 0, the issue can only be
<br>
in glibc's pthread_setaffinity_np() (and I guess your are calling it on
<br>
a thread != pthread_self())  Which version of glibc are you using?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0160.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0158.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0157.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0160.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0160.php">Αλέξανδρος Παπαδογιαννάκης: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
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
