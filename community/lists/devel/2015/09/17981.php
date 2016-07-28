<?
$subject_val = "Re: [OMPI devel] MTT failures since the last few days on ppc64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 13:19:58 2015" -->
<!-- isoreceived="20150908171958" -->
<!-- sent="Tue, 8 Sep 2015 17:19:56 +0000" -->
<!-- isosent="20150908171956" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT failures since the last few days on ppc64" -->
<!-- id="A72F3D13-5860-4003-B2CD-B466A18B41AA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150908135655.GY11517_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT failures since the last few days on ppc64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 13:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<li><strong>Previous message:</strong> <a href="17980.php">Howard Pritchard: "[OMPI devel] psm mtl weirdness"</a>
<li><strong>In reply to:</strong> <a href="17979.php">Adrian Reber: "[OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Reply:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Adrian; I turned this into <a href="https://github.com/open-mpi/ompi/issues/874">https://github.com/open-mpi/ompi/issues/874</a>.
<br>
<p><span class="quotelev1">&gt; On Sep 8, 2015, at 9:56 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since a few days the MTT runs on my ppc64 systems are failing with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [bimini:11716] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [bimini:11716] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [bimini:11716] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [bimini:11716] Failing at address: (nil)[bimini:11716] [ 0] [0x3fffa2bb0448]
</span><br>
<span class="quotelev1">&gt; [bimini:11716] [ 1] /lib64/libc.so.6(+0xcb074)[0x3fffa27eb074] [bimini:11716] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/adrian/mtt-scratch/installs/GubX/install/lib/libpmix.so.0(opal_pmix_pmix1xx_pmix_value_xfer-0x68758)[0x3fffa2158a10] [bimini:11716] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/adrian/mtt-scratch/installs/GubX/install/lib/libpmix.so.0(OPAL_PMIX_PMIX1XX_PMIx_Put-0x48338)[0x3fffa2179f70] [bimini:11716] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/adrian/mtt-scratch/installs/GubX/install/lib/openmpi/mca_pmix_pmix1xx.so(pmix1_put-0x27efc)[0x3fffa21d858c]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I do not see these kind of errors on any of the other MTT setups
</span><br>
<span class="quotelev1">&gt; so it might be ppc64 related. Just wanted to point it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17979.php">http://www.open-mpi.org/community/lists/devel/2015/09/17979.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<li><strong>Previous message:</strong> <a href="17980.php">Howard Pritchard: "[OMPI devel] psm mtl weirdness"</a>
<li><strong>In reply to:</strong> <a href="17979.php">Adrian Reber: "[OMPI devel] MTT failures since the last few days on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Reply:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
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
