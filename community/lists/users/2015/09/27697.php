<?
$subject_val = "[OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 12:36:20 2015" -->
<!-- isoreceived="20150928163620" -->
<!-- sent="Mon, 28 Sep 2015 16:36:19 +0000" -->
<!-- isosent="20150928163619" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="[OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="D22ECC1D.7D420%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 12:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27696.php">Steffen Christgau: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p><p>We have built OpenMPI (1.8.8., 1.10.0) against Mellanox OFED 2.4 and
<br>
corresponding MXM. When it runs now, it gives the following warning, per
<br>
process:
<br>
<p>[1443457390.911053] [myhist:5891 :0]         mxm.c:185  MXM  WARN  The
<br>
'ulimit -s' on the system is set to 'unlimited'. This may have negative
<br>
performance implications. Please set the heap size to the default value
<br>
(10240)
<br>
<p>We have ulimits for heap (as well as most of the other limits) set
<br>
unlimited because of applications that might possibly need a lot of RAM.
<br>
<p>The question is if we should do as MXM wants, or ignore it? Has anyone an
<br>
experience running recent OpenMPI with MXM enabled, and what kind of
<br>
ulimits do you have? Any suggestions/comments appreciated, thanks!
<br>
<p><p><pre>
-- 
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27696.php">Steffen Christgau: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
