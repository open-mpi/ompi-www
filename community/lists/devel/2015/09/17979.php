<?
$subject_val = "[OMPI devel] MTT failures since the last few days on ppc64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 09:56:56 2015" -->
<!-- isoreceived="20150908135656" -->
<!-- sent="Tue, 8 Sep 2015 15:56:55 +0200" -->
<!-- isosent="20150908135655" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT failures since the last few days on ppc64" -->
<!-- id="20150908135655.GY11517_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] MTT failures since the last few days on ppc64<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 09:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17980.php">Howard Pritchard: "[OMPI devel] psm mtl weirdness"</a>
<li><strong>Previous message:</strong> <a href="17978.php">Ralph Castain: "[OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Reply:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since a few days the MTT runs on my ppc64 systems are failing with:
<br>
<p>[bimini:11716] *** Process received signal ***
<br>
[bimini:11716] Signal: Segmentation fault (11)
<br>
[bimini:11716] Signal code: Address not mapped (1)
<br>
[bimini:11716] Failing at address: (nil)[bimini:11716] [ 0] [0x3fffa2bb0448]
<br>
[bimini:11716] [ 1] /lib64/libc.so.6(+0xcb074)[0x3fffa27eb074] [bimini:11716] [ 2]
<br>
/home/adrian/mtt-scratch/installs/GubX/install/lib/libpmix.so.0(opal_pmix_pmix1xx_pmix_value_xfer-0x68758)[0x3fffa2158a10] [bimini:11716] [ 3]
<br>
/home/adrian/mtt-scratch/installs/GubX/install/lib/libpmix.so.0(OPAL_PMIX_PMIX1XX_PMIx_Put-0x48338)[0x3fffa2179f70] [bimini:11716] [ 4]
<br>
/home/adrian/mtt-scratch/installs/GubX/install/lib/openmpi/mca_pmix_pmix1xx.so(pmix1_put-0x27efc)[0x3fffa21d858c]
<br>
<p>I think I do not see these kind of errors on any of the other MTT setups
<br>
so it might be ppc64 related. Just wanted to point it out.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17980.php">Howard Pritchard: "[OMPI devel] psm mtl weirdness"</a>
<li><strong>Previous message:</strong> <a href="17978.php">Ralph Castain: "[OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Reply:</strong> <a href="17981.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
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
