<?
$subject_val = "Re: [OMPI users] possible GATS bug in osc/sm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 10:00:48 2015" -->
<!-- isoreceived="20150928140048" -->
<!-- sent="Mon, 28 Sep 2015 16:00:45 +0200" -->
<!-- isosent="20150928140045" -->
<!-- name="Steffen Christgau" -->
<!-- email="christgau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible GATS bug in osc/sm" -->
<!-- id="5609480D.1010300_at_cs.uni-potsdam.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150922222402.GD2859_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible GATS bug in osc/sm<br>
<strong>From:</strong> Steffen Christgau (<em>christgau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 10:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27697.php">Grigory Shamov: "[OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27695.php">Sven Schumacher: "[OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>On 23.09.2015 00:24, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; I think I have the problem fixed. I went with a bitmap approach but I
</span><br>
<span class="quotelev1">&gt; don't think that will scale well as node sizes increase since it
</span><br>
<span class="quotelev1">&gt; requires n^2 bits to implement the post table. When I have time I will
</span><br>
<span class="quotelev1">&gt; implement the approach used in osc/rdma in osc/sm.
</span><br>
<p>Thanks for the fix. Looks good, but I've not tested it yet. I'm going to
<br>
do that as soon as possible.
<br>
<p>Your scaling concerns are true. However, n^2 _bits_ makes 8 kB for a 256
<br>
core shared memory system, which I found is still acceptable.
<br>
<p>Regards, Steffen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27697.php">Grigory Shamov: "[OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27695.php">Sven Schumacher: "[OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
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
