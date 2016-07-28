<?
$subject_val = "[hwloc-users] Could not bind on Power6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 02:54:47 2010" -->
<!-- isoreceived="20100618065447" -->
<!-- sent="Fri, 18 Jun 2010 08:54:35 +0200 (CEST)" -->
<!-- isosent="20100618065435" -->
<!-- name="Alfredo Buttari" -->
<!-- email="alfredo.buttari_at_[hidden]" -->
<!-- subject="[hwloc-users] Could not bind on Power6" -->
<!-- id="alpine.DEB.2.00.1006180846380.16895_at_attila" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-users] Could not bind on Power6<br>
<strong>From:</strong> Alfredo Buttari (<em>alfredo.buttari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 02:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0162.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>Previous message:</strong> <a href="0160.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0162.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>Reply:</strong> <a href="0162.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm trying to get hwloc working on a Power6, AIX machine. compilation goes 
<br>
well and the lstopo program works fine. However the hwloc-hello.c program 
<br>
return an error when trying to bind a thread. This happens with hwloc 
<br>
version 1.0, version 1.1a1r2215 and version 1.1a1r2219M.
<br>
<p>Here's the last few lines from the hwloc-hello output (I just removed the 
<br>
messages related to the system topology):
<br>
<p>*** The number of sockets is unknown
<br>
*** Logical processor 0 has 1 caches totaling 0KB
<br>
Couldn't bind to cpuset 0xc0000000,0x0
<br>
--&gt; Error 0
<br>
<p>The last line prints the output of strerror(errno).
<br>
<p>Details of my machine:
<br>
<p>$ uname -a
<br>
AIX vargas043 3 5 00CFEBE14C00
<br>
<p><p><p><p>$ lstopo -v
<br>
<p>Machine (phys=0)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #0 (phys=0 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #1 (phys=1 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #3 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #2 (phys=2 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #8 (phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #9 (phys=9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #10 (phys=10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #11 (phys=11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #3 (phys=3 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #12 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #13 (phys=13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #7 (phys=7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #14 (phys=14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #15 (phys=15)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #4 (phys=4 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #8 (phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #16 (phys=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #17 (phys=17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #9 (phys=9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #18 (phys=18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #19 (phys=19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #5 (phys=5 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #10 (phys=10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #20 (phys=20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #21 (phys=21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #11 (phys=11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #22 (phys=22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #23 (phys=23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #6 (phys=6 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #12 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #24 (phys=24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #25 (phys=25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #13 (phys=13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #26 (phys=26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #27 (phys=27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #7 (phys=7 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #14 (phys=14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #28 (phys=28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #29 (phys=29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #15 (phys=15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #30 (phys=30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #31 (phys=31)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #8 (phys=8 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #16 (phys=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #32 (phys=32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #33 (phys=33)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #17 (phys=17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #34 (phys=34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #35 (phys=35)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #9 (phys=9 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #18 (phys=18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #36 (phys=36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #37 (phys=37)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #19 (phys=19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #38 (phys=38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #39 (phys=39)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #10 (phys=10 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #20 (phys=20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #40 (phys=40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #41 (phys=41)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #21 (phys=21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #42 (phys=42)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #43 (phys=43)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #11 (phys=11 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #22 (phys=22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #44 (phys=44)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #45 (phys=45)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #23 (phys=23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #46 (phys=46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #47 (phys=47)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #3 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #12 (phys=12 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #24 (phys=24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #48 (phys=48)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #49 (phys=49)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #25 (phys=25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #50 (phys=50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #51 (phys=51)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #13 (phys=13 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #26 (phys=26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #52 (phys=52)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #53 (phys=53)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #27 (phys=27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #54 (phys=54)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #55 (phys=55)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #14 (phys=14 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #28 (phys=28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #56 (phys=56)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #57 (phys=57)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #29 (phys=29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #58 (phys=58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #59 (phys=59)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #15 (phys=15 0KB line=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #30 (phys=30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #60 (phys=60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #61 (phys=61)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #31 (phys=31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #62 (phys=62)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #63 (phys=63)
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;&nbsp;depth 1:       4 NUMANodes (type #2)
<br>
&nbsp;&nbsp;&nbsp;depth 2:      16 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 3:     32 Cores (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 4:    64 PUs (type #6)
<br>
<p><p><p><p>Thanks
<br>
<p>Alfredo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0162.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>Previous message:</strong> <a href="0160.php">&#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130; &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186;&#206;&#183;&#207;&#130;: "[hwloc-users] FW: Problem with	hwloc_set_thread_cpubind()	and	pthread_barrier_wait() on new debianj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0162.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>Reply:</strong> <a href="0162.php">Samuel Thibault: "Re: [hwloc-users] Could not bind on Power6"</a>
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
