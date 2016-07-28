<?
$subject_val = "[OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 14:57:31 2014" -->
<!-- isoreceived="20140724185731" -->
<!-- sent="Thu, 24 Jul 2014 11:57:29 -0700" -->
<!-- isosent="20140724185729" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36046F85270_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 14:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15256.php">Marco Atzeri: "[OMPI devel] oshmem  only supports Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Reply:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Bump up the minimum sm pool size to 128K from 64K.  
<br>
WHY: When running OSU benchmark on 2 nodes and utilizing a larger btl_smcuda_max_send_size, we can run into the case where the free list cannot grow.  This is not a common case, but it is something that folks sometimes experiment with.  Also note that this minimum was set back 5 years ago so it seems that it could be time to bump it up.
<br>
WHEN: Tuesday, July 29, 2014 after weekly concall if there are no objections.
<br>
<p><p>[rvandevaart_at_ivy0 ompi-trunk-regerror]$ svn diff ompi/mca/mpool/sm/mpool_sm_component.c
<br>
Index: ompi/mca/mpool/sm/mpool_sm_component.c
<br>
===================================================================
<br>
--- ompi/mca/mpool/sm/mpool_sm_component.c	(revision 32293)
<br>
+++ ompi/mca/mpool/sm/mpool_sm_component.c	(working copy)
<br>
@@ -80,7 +80,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;};
<br>
&nbsp;
<br>
-static long default_min = 67108864;
<br>
+static long default_min = 134217728;
<br>
&nbsp;static unsigned long long ompi_mpool_sm_min_size;
<br>
&nbsp;static int ompi_mpool_sm_verbose;
<br>
&nbsp;
<br>
[rvandevaart_at_drossetti-ivy0 ompi-trunk-regerror]$ 
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15256.php">Marco Atzeri: "[OMPI devel] oshmem  only supports Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Reply:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
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
