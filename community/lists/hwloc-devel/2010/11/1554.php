<?
$subject_val = "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 12:54:28 2010" -->
<!-- isoreceived="20101122175428" -->
<!-- sent="Mon, 22 Nov 2010 18:54:19 +0100" -->
<!-- isosent="20101122175419" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among" -->
<!-- id="201011221854.20401.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101122130850.GO10316_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 12:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1555.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1543.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1556.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, November 22, 2010 02:08:50 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jirka Hladky, le Thu 18 Nov 2010 15:14:07 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; My goal is to distribute one job per Socket with command
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib --single 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you try again with the current v1.1 subversion branch?  I have
</span><br>
<span class="quotelev1">&gt; implemented asymmetry support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p><p>Hi Samuel,
<br>
<p>I have installed rc3 and hwloc-distrib --single 8
<br>
will now distribute the jobs among sockets ignoring NUMA asymmetry.
<br>
<p>./hwloc-calc --input ../../hp-dl980g7-01 --po --li --proclist $(hwloc-distrib 
<br>
--input ../../hp-dl980g7-01 --single 8)
<br>
0,16,24,32,40,48,56,8
<br>
<p>This is great! Thanks.
<br>
<p>However, I was wondering if there is some way to get the old way, i.e to 
<br>
distribute the jobs among NUMA nodes. I DO NOT use this mode but I don't want 
<br>
anybody else to be harmed.
<br>
<p>I have tried 
<br>
--at numa
<br>
and
<br>
--to numa
<br>
to replicate the old behavior but without success...
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1555.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1543.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1556.php">Samuel Thibault: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
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
