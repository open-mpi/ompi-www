<?
$subject_val = "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 08:47:50 2010" -->
<!-- isoreceived="20100616124750" -->
<!-- sent="Wed, 16 Jun 2010 14:47:44 +0200" -->
<!-- isosent="20100616124744" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj" -->
<!-- id="20100616124744.GS4240_at_const" -->
<!-- charset="utf-8" -->
<!-- inreplyto="COL124-W402C92AC98DF54644E7C3D6DE0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 08:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0153.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian"</a>
<li><strong>In reply to:</strong> <a href="0153.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0155.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0155.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Wed 16 Jun 2010 15:37:34 +0300, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; The program uses hwloc_set_thread_cpubind() to bind some threads to specific
</span><br>
<span class="quotelev1">&gt; cpus
</span><br>
<span class="quotelev1">&gt; but now it doesn't work. hwloc_set_thread_cpubind() returns zero but doesn't
</span><br>
<span class="quotelev1">&gt; bind
</span><br>
<span class="quotelev1">&gt; the thread.
</span><br>
<p>This looks to me like a glibc or kernel bug. Could you check with strace
<br>
that a sched_setaffinity system call gets performed, and the returned
<br>
value?
<br>
<p><span class="quotelev1">&gt; The problem is that when I call hwloc_set_thread_cpubind() the threads
</span><br>
<span class="quotelev1">&gt; are waiting on a posix barrier.
</span><br>
<p>That shouldn't be a problem.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0153.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian"</a>
<li><strong>In reply to:</strong> <a href="0153.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0155.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0155.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
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
