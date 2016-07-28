<?
$subject_val = "Re: [hwloc-users] lstopo on AMD APU";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 12:07:17 2015" -->
<!-- isoreceived="20150312160717" -->
<!-- sent="Thu, 12 Mar 2015 17:07:14 +0100" -->
<!-- isosent="20150312160714" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo on AMD APU" -->
<!-- id="20150312160714.GJ11738_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5501B2C7.6040207_at_greenflops.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo on AMD APU<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 12:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1158.php">Samy CHBINOU: "[hwloc-users] lstopo on Kaveri"</a>
<li><strong>Previous message:</strong> <a href="1156.php">Samy CHBINOU: "[hwloc-users] lstopo on AMD APU"</a>
<li><strong>In reply to:</strong> <a href="1156.php">Samy CHBINOU: "[hwloc-users] lstopo on AMD APU"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Samy CHBINOU, le Thu 12 Mar 2015 16:37:43 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is there any special options to print full informations on my processor AMD
</span><br>
<span class="quotelev1">&gt; A10-7850K Radeon R7 12 Compute Cores 4C+8G @ 3.70GHz
</span><br>
<span class="quotelev1">&gt; This APU has 4 CPU + 8 GPU but I can only see infos about the 4 CPU... (see
</span><br>
<p>Did you make sure that ./configure has enabled OpenCL, something like
<br>
this:
<br>
<p>Probe / display I/O devices: PCI(pciaccess+linux) OpenCL CUDA
<br>
<p>Also, you need to have the AMD OpenCL development headers so that hwloc
<br>
can get the topology information from the AMD implementation.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1158.php">Samy CHBINOU: "[hwloc-users] lstopo on Kaveri"</a>
<li><strong>Previous message:</strong> <a href="1156.php">Samy CHBINOU: "[hwloc-users] lstopo on AMD APU"</a>
<li><strong>In reply to:</strong> <a href="1156.php">Samy CHBINOU: "[hwloc-users] lstopo on AMD APU"</a>
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
