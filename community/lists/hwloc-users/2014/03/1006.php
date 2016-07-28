<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 06:04:33 2014" -->
<!-- isoreceived="20140328100433" -->
<!-- sent="Fri, 28 Mar 2014 10:04:29 +0000" -->
<!-- isosent="20140328100429" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="50320452A334BD42A5EC72BAD2145099102DD0BA_at_MBX110.d.ethz.ch" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9699581.gd7ovJmWxJ_at_quad" -->
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
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Biddiscombe, John A. (<em>biddisco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 06:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">Tim Creech: "[hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1003.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1013.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="1013.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just as a follow up to this thread. I spoke with someone from IBM and they tell me that 2 cores of 4 hardware threads each are hidden from the kernel (how do they do that?) and used for the custom HS4 cards we have installed on the IO nodes, which explains why I see only 60 instead of 68 threads. the 2 bgvrnic tasks I see spinning at 100% run on threads 58/59 and service the connection from ION to CN.
<br>

<br>
It looks as though everything is reporting as expected - as long as I compile hwloc on the ION itself, it seems to be correct.
<br>

<br>
Thanks and sorry for any misunderstanding
<br>

<br>
JB
<br>

<br>

<br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Chris Samuel
</span><br>
<span class="quotelev1">&gt; Sent: 26 March 2014 13:42
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] BGQ question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 26 Mar 2014 11:56:08 AM Biddiscombe, John A. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can&#226;&#128;&#153;t test this as the system is down for maintenance, but if memory
</span><br>
<span class="quotelev2">&gt; &gt; serves me correctly, the GCC compiled lstopo also showed 60 cores
</span><br>
<span class="quotelev2">&gt; &gt; instead of 64/68.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It can only report what the kernel reports and it appears your kernel is not
</span><br>
<span class="quotelev1">&gt; reporting the same number of cores on an IO node as ours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be interesting to compare kernel version and boot command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ours are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.1# uname -a
</span><br>
<span class="quotelev1">&gt; Linux r00-id-j01.pcf.vlsci.unimelb.edu.au 2.6.32-
</span><br>
<span class="quotelev1">&gt; 279.14.1.bgq.el6_V1R2M0_36.ppc64 #1 SMP Tue Jun 11 15:50:53 CDT 2013
</span><br>
<span class="quotelev1">&gt; ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.1# cat /proc/cmdline
</span><br>
<span class="quotelev1">&gt; root=/dev/ram0 rdinit=/init raid=noautodetect loglevel=5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the end of our /proc/cpuinfo showing 68 hardware threads
</span><br>
<span class="quotelev1">&gt; (17 cores exposed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.1# tail -n 9 /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor       : 67
</span><br>
<span class="quotelev1">&gt; cpu             : A2 (Blue Gene/Q)
</span><br>
<span class="quotelev1">&gt; clock           : 1600.000000MHz
</span><br>
<span class="quotelev1">&gt; revision        : 2.0 (pvr 0049 0200)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; timebase        : 1600000000
</span><br>
<span class="quotelev1">&gt; platform        : Blue Gene/Q
</span><br>
<span class="quotelev1">&gt; model           : ibm,bluegeneq
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am not certain if this gcc was in any was &#226;&#128;&#152;special&#226;&#128;&#153; for bgq.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a GCC cross compiler, but it's not the /usr/bin/gcc one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">Tim Creech: "[hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="1003.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1013.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="1013.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
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
