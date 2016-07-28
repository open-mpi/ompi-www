<?
$subject_val = "[OMPI devel] oshmem and CFLAGS removal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 15:46:50 2013" -->
<!-- isoreceived="20131031194650" -->
<!-- sent="Thu, 31 Oct 2013 12:46:48 -0700" -->
<!-- isosent="20131031194648" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem and CFLAGS removal" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3600803E6C6_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem and CFLAGS removal<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 15:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13174.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13174.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Reply:</strong> <a href="13174.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that there were some CFLAGS that were no longer set when enabling with --enable-picky for gcc.  Specifically, -Wundef and -pedantic  were no longer set.
<br>
This is not a problem for Open MPI 1.7.
<br>
<p>I believe this is happening because of some code in the config/oshmem_configure_options.m4 file that is supposed to be oshmem specific, but seems to be bleeding into everything that gets compiled.
<br>
<p>oshmem_CFLAGS=&quot;$CFLAGS&quot;
<br>
<p># Strip off problematic arguments
<br>
oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-pedantic//g'`&quot;
<br>
oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wundef//g'`&quot;
<br>
oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wno-long-double//g'`&quot;
<br>
CFLAGS=&quot;$oshmem_CFLAGS&quot;
<br>
<p>Does anyone know an easy fix for this?  This is why I think some warnings appeared in Open MPI 1.7 that we did not see for the same change in the trunk.
<br>
<p>Thanks,
<br>
Rolf
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
<li><strong>Next message:</strong> <a href="13174.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13174.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Reply:</strong> <a href="13174.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
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
