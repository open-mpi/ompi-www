<?
$subject_val = "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 08:52:09 2010" -->
<!-- isoreceived="20100616125209" -->
<!-- sent="Wed, 16 Jun 2010 15:52:04 +0300" -->
<!-- isosent="20100616125204" -->
<!-- name="&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj" -->
<!-- id="COL124-W536897049986F7114276B8D6DE0_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100616124744.GS4240_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj<br>
<strong>From:</strong> &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 08:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
hwloc_set_thread_cpubind() by itself works. I have it on a different test program
<br>
and it binds the threads without a problem. The problem is when the thread is
<br>
waiting on a barrier. I'll try strace and send you the results
<br>
--------------------------
<br>
Alexandros Papadogiannakis
<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; Date: Wed, 16 Jun 2010 14:47:44 +0200
</span><br>
<span class="quotelev1">&gt; From: samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Wed 16 Jun 2010 15:37:34 +0300, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; The program uses hwloc_set_thread_cpubind() to bind some threads to specific
</span><br>
<span class="quotelev2">&gt; &gt; cpus
</span><br>
<span class="quotelev2">&gt; &gt; but now it doesn't work. hwloc_set_thread_cpubind() returns zero but doesn't
</span><br>
<span class="quotelev2">&gt; &gt; bind
</span><br>
<span class="quotelev2">&gt; &gt; the thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks to me like a glibc or kernel bug. Could you check with strace
</span><br>
<span class="quotelev1">&gt; that a sched_setaffinity system call gets performed, and the returned
</span><br>
<span class="quotelev1">&gt; value?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that when I call hwloc_set_thread_cpubind() the threads
</span><br>
<span class="quotelev2">&gt; &gt; are waiting on a posix barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That shouldn't be a problem.
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
Hotmail: Trusted email with powerful SPAM protection.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0156.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and	pthread_barrier_wait() on new debianj"</a>
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
