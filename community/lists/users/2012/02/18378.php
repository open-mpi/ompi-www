<?
$subject_val = "[OMPI users] Using physical numbering in a rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 11:23:19 2012" -->
<!-- isoreceived="20120202162319" -->
<!-- sent="Thu, 02 Feb 2012 17:25:30 +0100" -->
<!-- isosent="20120202162530" -->
<!-- name="Fran&#231;ois Tessier" -->
<!-- email="francois.tessier_at_[hidden]" -->
<!-- subject="[OMPI users] Using physical numbering in a rankfile" -->
<!-- id="4F2AB8FA.302_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Using physical numbering in a rankfile<br>
<strong>From:</strong> Fran&#231;ois Tessier (<em>francois.tessier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 11:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Previous message:</strong> <a href="18377.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Reply:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I need to use a rankfile with openMPI 1.5.4 to do some tests on a basic 
<br>
architecture. I'm using a node for which lstopo returns that :
<br>
<p>----------------
<br>
Machine (24GB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 12GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 + L3 L#0 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:673c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#2 &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 &quot;ib1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#4 &quot;mlx4_0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0522
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3a22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#5 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#6 &quot;sdb&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#7 &quot;sdc&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#8 &quot;sdd&quot;
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 12GB) + Socket L#1 + L3 L#1 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
<br>
----------------
<br>
<p>And I would like to use the physical numbering. To do that, I created a 
<br>
rankfile like this :
<br>
<p>rank 0=host1 slot=p0:0
<br>
rank 1=host1 slot=p0:2
<br>
rank 2=host1 slot=p0:4
<br>
rank 3=host1 slot=p0:6
<br>
rank 4=host1 slot=p1:1
<br>
rank 5=host1 slot=p1:3
<br>
rank 6=host1 slot=p1:5
<br>
rank 7=host1 slot=p1:7
<br>
<p>But when I run my job with &quot;/mpiexec -np 8 --rankfile rankfile ./foo/&quot;, 
<br>
I encounter this error :
<br>
<p>/    Specified slot list: p0:4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: Not found
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This could mean that a non-existent processor was specified, or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that the specification had improper syntax./
<br>
<p><p>Do you know what I did wrong?
<br>
<p>Best regards,
<br>
<p>Fran&#231;ois
<br>
<p><pre>
-- 
___________________
Fran&#231;ois TESSIER
PhD Student at University of Bordeaux
Tel : 0033.5.24.57.41.52
francois.tessier_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Previous message:</strong> <a href="18377.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Reply:</strong> <a href="18379.php">teng ma: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
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
