<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 08:28:19 2014" -->
<!-- isoreceived="20140325122819" -->
<!-- sent="Tue, 25 Mar 2014 23:28:16 +1100" -->
<!-- isosent="20140325122816" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="2860559.DZjBy2Be79_at_quad" -->
<!-- charset="utf-8" -->
<!-- inreplyto="50320452A334BD42A5EC72BAD2145099102D8A2B_at_MBX110.d.ethz.ch" -->
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
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 08:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0996.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0994.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0996.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0996.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0998.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 25 Mar 2014 06:51:49 AM Biddiscombe, John A. wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m compiling hwloc using clang (bgclang++11 from ANL) to run on IO nodes af
</span><br>
<span class="quotelev1">&gt; a BGQ.
</span><br>
<p>Out of interest, why on an I/O node?
<br>
<p><span class="quotelev1">&gt; It seems to have compiled ok, and when I run lstopo, I get an output
</span><br>
<span class="quotelev1">&gt; like this (below), which looks reasonable, but there are 15 sockets instead
</span><br>
<span class="quotelev1">&gt; of 16.
</span><br>
<p>I've not tried on our I/O nodes, but looking at /proc/cpuinfo on one it 
<br>
reports 68 cores (hardware threads), thus 17 real cores (on CNK one of those 
<br>
is reserved for the CNK so is not available for codes without determined 
<br>
fiddling).
<br>
<p>-bash-4.1# grep -w processor /proc/cpuinfo | wc -l
<br>
68
<br>
<p>This is V1R2M0 (RHEL 6.3 based).
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0996.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0994.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0996.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0996.php">Jeff Hammond: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0998.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
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
