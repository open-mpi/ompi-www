<?
$subject_val = "[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 08:37:39 2010" -->
<!-- isoreceived="20100616123739" -->
<!-- sent="Wed, 16 Jun 2010 15:37:34 +0300" -->
<!-- isosent="20100616123734" -->
<!-- name="&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="[hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian" -->
<!-- id="COL124-W402C92AC98DF54644E7C3D6DE0_at_phx.gbl" -->
<!-- charset="iso-8859-7" -->
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
<strong>Subject:</strong> [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debian<br>
<strong>From:</strong> &#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 08:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi. Yesterday one of the PCs at my university was updated to Debian &quot;squeeze&quot; with 
<br>
kernel 2.6.32-5-amd64. I don't know if it's the kernel, hwloc or something else's fault
<br>
but I have a program tha worked fine before the update, but not anymore. It does work
<br>
without problem in other PCs. 
<br>
<p>The program uses hwloc_set_thread_cpubind() to bind some threads to specific cpus
<br>
but now it doesn't work. hwloc_set_thread_cpubind() returns zero but doesn't bind
<br>
the thread. The problem is that when I call hwloc_set_thread_cpubind() the threads 
<br>
are waiting on a posix barrier. 
<br>
<p>--------------------------
<br>
Alexandros Papadogiannakis
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Hotmail: Trusted email with powerful SPAM protection.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for anon	graphic	system..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
<li><strong>Reply:</strong> <a href="0154.php">Samuel Thibault: "Re: [hwloc-users] Problem with hwloc_set_thread_cpubind() and pthread_barrier_wait() on new debianj"</a>
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
