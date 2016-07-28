<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 09:16:18 2010" -->
<!-- isoreceived="20101118141618" -->
<!-- sent="Thu, 18 Nov 2010 15:13:46 +0100" -->
<!-- isosent="20101118141346" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib --among" -->
<!-- id="201011181513.46494.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101116212038.GM5862_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib --among<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 09:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1485.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>thanks for looking into it! I'm using hwloc_distribute to distribute parallel 
<br>
jobs on multi-socket systems.
<br>
<p>Usually, it gives nice results: running 
<br>
hwloc-distrib --single &lt;N&gt;
<br>
on box with &lt;N&gt; sockets will ditrbitute one job per socket. This is what I 
<br>
want.
<br>
<p>hwloc-distrib --single &lt;2*N&gt;
<br>
will distribute 2 jobs per socket, picking-up PU wisely.
<br>
<p>It breaks however on strange systems. Please check with
<br>
lstopo --input
<br>
or hwloc-distrib --input
<br>
on topology I sent you with my last e-mail (hp-dl980g7-01.tar.bz2, sent on  
<br>
Tuesday 09:30:37 pm)
<br>
<p>This box has a broken NUMA topology - there are 7 sockets in one NUMA node and 
<br>
1 socket in another NUMA node.
<br>
<p>My goal is to distribute one job per Socket with command
<br>
hwloc-distrib --single 8
<br>
<p>This is not working. So I have tried various --among and -ignore options to 
<br>
achieve this but without success. 
<br>
<p>Please try 
<br>
hwloc-distrib --input hp-dl980g7-01 --single 8
<br>
with data I sent you on Tuesday (tar jxvf hp-dl980g7-01.tar.bz2). Goal is to 
<br>
distribute one job per one socket.
<br>
<p>Thanks!
<br>
Jirka
<br>
<p><p>On Tuesday, November 16, 2010 10:20:38 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Samuel Thibault, le Tue 16 Nov 2010 22:18:54 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Also note that currently the hwloc_distribute() function doesn't take
</span><br>
<span class="quotelev2">&gt; &gt; e.g. the number of PUs into account when splitting elements over the
</span><br>
<span class="quotelev2">&gt; &gt; hierarchy. It was more a demonstration example than something to be used
</span><br>
<span class="quotelev2">&gt; &gt; as is. We can however extend it, we just need to know what's desired.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reading your mail again, I guess that's where your issue actually lied.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-bzip-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1492/hp-dl980g7-01.tar.bz2">hp-dl980g7-01.tar.bz2</a>
</ul>
<!-- attachment="hp-dl980g7-01.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1485.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
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
