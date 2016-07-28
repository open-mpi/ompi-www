<?
$subject_val = "[OMPI devel] 1.5rc5 over MX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 10:38:56 2010" -->
<!-- isoreceived="20100826143856" -->
<!-- sent="Thu, 26 Aug 2010 10:38:38 -0400" -->
<!-- isosent="20100826143838" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5 over MX" -->
<!-- id="19E7DF98-94BD-4F34-8627-B6841B9AC472_at_myri.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5 over MX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 10:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8384.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8382.php">Scott Atchley: "[OMPI devel] 1/4/3rc1 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Testing 1.5rc5 over MX with the same setup as 1.4.3rc1 (RHEL 5.4 and MX 1.2.12).
<br>
<p>This version also dies during init due to the memory manager if I do not specify which pml to use. If I specify pml ob1 or pml cm, the tests start but die with segfaults:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320       166.86       749.15
<br>
[rain15:14939] *** Process received signal ***
<br>
[rain15:14939] Signal: Segmentation fault (11)
<br>
[rain15:14939] Signal code: Address not mapped (1)
<br>
[rain15:14939] Failing at address: 0x3b20
<br>
<p>Again, configuring without the memory manager or setting OMPI_MCA_memory_ptmalloc2_disable=1 before calling mpirun work.
<br>
<p>Similar latency issues with the BTl and not with the MTL.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8384.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8382.php">Scott Atchley: "[OMPI devel] 1/4/3rc1 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
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
