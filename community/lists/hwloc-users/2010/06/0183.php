<?
$subject_val = "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 10:34:51 2010" -->
<!-- isoreceived="20100620143451" -->
<!-- sent="Sun, 20 Jun 2010 17:31:09 +0300" -->
<!-- isosent="20100620143109" -->
<!-- name="&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj" -->
<!-- id="COL124-W23778FEB66056D8700437CD6C20_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100618233148.GS4931_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj<br>
<strong>From:</strong> &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-20 10:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<li><strong>In reply to:</strong> <a href="0182.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<li><strong>Reply:</strong> <a href="0184.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
Thanks a lot for your help. Seems like the problem is
<br>
only in 2.6.32 kernel, 2.6.33 and 2.6.34 ara working
<br>
fine. I used git bisect like you suggested and the 
<br>
problem is on a commit:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;sched: Fix a race between ttwu() and migrate_task()
<br>

<br>
I e-mailed it to the 2 maintainers working on kernel/sched*
<br>
Hope they fix it soon.
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
<span class="quotelev1">&gt; Date: Sat, 19 Jun 2010 01:31:48 +0200
</span><br>
<span class="quotelev1">&gt; From: samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users]	FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel Thibault, le Sat 19 Jun 2010 01:30:47 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Sat 19 Jun 2010 02:20:37 +0300, a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I forgot to ask. Is there a way to get pid_t from a pthread_t?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No :/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (but you can use pthread_setaffinity_np)
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
Hotmail: Trusted email with Microsoft&#226;&#128;&#153;s powerful SPAM protection.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0184.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<li><strong>Previous message:</strong> <a href="0182.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<li><strong>In reply to:</strong> <a href="0182.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0184.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
<li><strong>Reply:</strong> <a href="0184.php">Samuel Thibault: "Re: [hwloc-users] FW:	Problem	with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait()	on	new	debianj"</a>
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
