<?
$subject_val = "Re: [hwloc-users] Hardware Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 17:43:00 2012" -->
<!-- isoreceived="20120228224300" -->
<!-- sent="Tue, 28 Feb 2012 16:42:56 -0600" -->
<!-- isosent="20120228224256" -->
<!-- name="vaibhav dutt" -->
<!-- email="vaibhavsupersaiyan9_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hardware Topology" -->
<!-- id="CA++vbAvdeX8PwxDZGd-BG9L5Sy6x3ivZSvzOk7iSrabBE5hfEg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120221190254.GA4252_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Hardware Topology<br>
<strong>From:</strong> vaibhav dutt (<em>vaibhavsupersaiyan9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 17:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Previous message:</strong> <a href="0566.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>In reply to:</strong> <a href="0566.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0568.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I got the details from hwloc.
<br>
I just wanted to know whether cores 0,4 and 2,6 are on  separate dies or
<br>
the same die?
<br>
And I am using 2 Intel Xeon E5450 processors in my compute nodes.
<br>
<p>Thanks
<br>
<p>On Tue, Feb 21, 2012 at 1:02 PM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; vaibhav dutt, le Tue 21 Feb 2012 19:59:54 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;     The following is the Hardware topology of the compute node I am
</span><br>
<span class="quotelev1">&gt; using, a
</span><br>
<span class="quotelev2">&gt; &gt;     obtained
</span><br>
<span class="quotelev2">&gt; &gt;     by using lstopo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Machine (16GB)
</span><br>
<span class="quotelev2">&gt; &gt;       Socket L#0
</span><br>
<span class="quotelev2">&gt; &gt;         L2 L#0 (6144KB)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#1 (32KB) + Core L#1 + PU L#1 (P#4)
</span><br>
<span class="quotelev2">&gt; &gt;         L2 L#1 (6144KB)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)
</span><br>
<span class="quotelev2">&gt; &gt;       Socket L#1
</span><br>
<span class="quotelev2">&gt; &gt;         L2 L#2 (6144KB)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#4 (32KB) + Core L#4 + PU L#4 (P#1)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev2">&gt; &gt;         L2 L#3 (6144KB)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#6 (32KB) + Core L#6 + PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt; &gt;           L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     It has 4 cores on each socket. But the cores like(0 and 4, 1 and 5
</span><br>
<span class="quotelev1">&gt; etc.)
</span><br>
<span class="quotelev2">&gt; &gt;     are to be considered on the same die?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0 and 4 share the same L2 cache, and are on the same socket as 2 and 6.
</span><br>
<span class="quotelev1">&gt; Use lstopo -.txt, it'll probably be clearer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Previous message:</strong> <a href="0566.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>In reply to:</strong> <a href="0566.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0568.php">Samuel Thibault: "Re: [hwloc-users] Hardware Topology"</a>
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
