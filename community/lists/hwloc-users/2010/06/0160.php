<?
$subject_val = "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 09:35:33 2010" -->
<!-- isoreceived="20100616133533" -->
<!-- sent="Wed, 16 Jun 2010 16:35:27 +0300" -->
<!-- isosent="20100616133527" -->
<!-- name="&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj" -->
<!-- id="COL124-W4935FEFC3A0BC78839066DD6DE0_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100616132104.GU4240_at_const" -->
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
<strong>Subject:</strong> [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj<br>
<strong>From:</strong> &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 09:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0161.php">Alfredo Buttari: "[hwloc-users] Could not bind on Power6"</a>
<li><strong>Previous message:</strong> <a href="0159.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0159.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0166.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0166.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>

<br>

<br>

<br>
Here is a partial output from strace (the program does the same thing again and again and only changes
<br>
the cpus that do the work) <a href="http://rapidshare.com/files/399658973/strace.txt.html">http://rapidshare.com/files/399658973/strace.txt.html</a> Sorry for the rapidshare
<br>
mailing list didn't let me directly post it.
<br>

<br>
Also: 
<br>

<br>
GNU C Library (Debian EGLIBC 2.11.1-3) stable release version 2.11.1, by Roland McGrath et al.
<br>
Copyright (C) 2009 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Compiled by GNU CC version 4.4.4.
<br>
Compiled on a Linux 2.6.32 system on 2010-06-08.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.debian.org/Bugs/">http://www.debian.org/Bugs/</a>&gt;.
<br>

<br>

<br>
Sorry for the trouble
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
<span class="quotelev1">&gt; Date: Wed, 16 Jun 2010 15:21:04 +0200
</span><br>
<span class="quotelev1">&gt; From: samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Wed 16 Jun 2010 16:11:12 +0300, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; There is no shed affinity call at all if the thread is on a barrier :/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, so since hwloc_set_thread_cpubind returns 0, the issue can only be
</span><br>
<span class="quotelev1">&gt; in glibc's pthread_setaffinity_np() (and I guess your are calling it on
</span><br>
<span class="quotelev1">&gt; a thread != pthread_self())  Which version of glibc are you using?
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
Hotmail: Trusted email with powerful SPAM protection. Sign up now. 		 	   		  
<br>
_________________________________________________________________
<br>
Hotmail: Trusted email with powerful SPAM protection.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0161.php">Alfredo Buttari: "[hwloc-users] Could not bind on Power6"</a>
<li><strong>Previous message:</strong> <a href="0159.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>In reply to:</strong> <a href="0159.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0166.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0166.php">Samuel Thibault: "Re: [hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
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
