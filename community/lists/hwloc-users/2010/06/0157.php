<?
$subject_val = "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 09:11:17 2010" -->
<!-- isoreceived="20100616131117" -->
<!-- sent="Wed, 16 Jun 2010 16:11:12 +0300" -->
<!-- isosent="20100616131112" -->
<!-- name="&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj" -->
<!-- id="COL124-W63D45A1F57AB66C1994E47D6DE0_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100616130200.GT4240_at_const" -->
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
<strong>From:</strong> &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 09:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0158.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0158.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0159.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
There is no shed affinity call at all if the thread is on a barrier :/
<br>

<br>
--------------------------
<br>
Alexandros Papadogiannakis
<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; Date: Wed, 16 Jun 2010 15:02:00 +0200
</span><br>
<span class="quotelev1">&gt; From: samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Wed 16 Jun 2010 15:52:04 +0300, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_thread_cpubind() by itself works. I have it on a different test
</span><br>
<span class="quotelev2">&gt; &gt; program
</span><br>
<span class="quotelev2">&gt; &gt; and it binds the threads without a problem. The problem is when the thread is
</span><br>
<span class="quotelev2">&gt; &gt; waiting on a barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand. I'm just saying that concerning hwloc, being asleep or not
</span><br>
<span class="quotelev1">&gt; shouldn't change the behavior, and the bug is most probably either in
</span><br>
<span class="quotelev1">&gt; glibc or the kernel. The result of sched_setaffinity should tell us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Your E-mail and More On-the-Go. Get Windows Live Hotmail Free.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0158.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0158.php">Αλέξανδρος Παπαδογιαννάκης: "Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0159.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
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
