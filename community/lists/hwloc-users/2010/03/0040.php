<?
$subject_val = "Re: [hwloc-users] hwloc with pthreads on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 10:30:41 2010" -->
<!-- isoreceived="20100312153041" -->
<!-- sent="Fri, 12 Mar 2010 17:30:36 +0200" -->
<!-- isosent="20100312153036" -->
<!-- name="&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc with pthreads on windows" -->
<!-- id="COL124-W42F08E652E4E3A25053CA3D6310_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100312144707.GS5044_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc with pthreads on windows<br>
<strong>From:</strong> &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 10:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0041.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>Previous message:</strong> <a href="0039.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>In reply to:</strong> <a href="0039.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0041.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>Reply:</strong> <a href="0041.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
I'm using MinGW and Pthreads-w32. I've made the program to use HANDLE instead of 
<br>
pthreads but I'd prefer pthreads, so I'm asking if there is a way to make hwloc use
<br>
pthreads instead of HANDLE
<br>

<br>
<span class="quotelev1"> &gt; Date: Fri, 12 Mar 2010 15:47:07 +0100
</span><br>
<span class="quotelev1">&gt; From: samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] hwloc with pthreads on windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;, le Fri 12 Mar 2010 16:27:27 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to use pthread_t instead of HANDLE in hwloc_set_thread_cpubind
</span><br>
<span class="quotelev2">&gt; &gt; when running windows?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, you mean when running cygwin?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that to my knowledge, cygwin does not provide a pthread_t
</span><br>
<span class="quotelev1">&gt; -&gt; HANDLE conversion function, which is needed to then call the
</span><br>
<span class="quotelev1">&gt; low-level windows functions.
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
Hotmail: Powerful Free email with security by Microsoft.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0041.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>Previous message:</strong> <a href="0039.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>In reply to:</strong> <a href="0039.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0041.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
<li><strong>Reply:</strong> <a href="0041.php">Samuel Thibault: "Re: [hwloc-users] hwloc with pthreads on windows"</a>
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
