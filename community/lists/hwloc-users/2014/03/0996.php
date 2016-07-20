<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 09:22:56 2014" -->
<!-- isoreceived="20140325132256" -->
<!-- sent="Tue, 25 Mar 2014 08:22:51 -0500" -->
<!-- isosent="20140325132251" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="7C4648A1-4429-449E-AD66-F0A0D6BB3C7E_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2860559.DZjBy2Be79_at_quad" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 09:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0997.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0995.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0995.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0997.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0997.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am inclined to think the issue us that ion Linux uses only 16 cores. When hwloc does n-- for CNK to skip the 17th (OS) core, it gets the wrong answer for Linux. 
<br>
<p>Just check for Linux support and use /proc/cpuinfo and don't adjust manually. 
<br>
<p>I'm not sure hwloc on BGQ ion ion needs and special hook either. Isn't Linux PPC support enough?
<br>
<p>Jeff 
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Mar 25, 2014, at 7:28 AM, Chris Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 25 Mar 2014 06:51:49 AM Biddiscombe, John A. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m compiling hwloc using clang (bgclang++11 from ANL) to run on IO nodes af
</span><br>
<span class="quotelev2">&gt;&gt; a BGQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Out of interest, why on an I/O node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems to have compiled ok, and when I run lstopo, I get an output
</span><br>
<span class="quotelev2">&gt;&gt; like this (below), which looks reasonable, but there are 15 sockets instead
</span><br>
<span class="quotelev2">&gt;&gt; of 16.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've not tried on our I/O nodes, but looking at /proc/cpuinfo on one it 
</span><br>
<span class="quotelev1">&gt; reports 68 cores (hardware threads), thus 17 real cores (on CNK one of those 
</span><br>
<span class="quotelev1">&gt; is reserved for the CNK so is not available for codes without determined 
</span><br>
<span class="quotelev1">&gt; fiddling).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.1# grep -w processor /proc/cpuinfo | wc -l
</span><br>
<span class="quotelev1">&gt; 68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is V1R2M0 (RHEL 6.3 based).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0997.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0995.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0995.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0997.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0997.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
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
