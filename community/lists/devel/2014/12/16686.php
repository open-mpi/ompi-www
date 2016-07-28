<?
$subject_val = "[OMPI devel] Still getting DDT test assert fails";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 06:46:40 2014" -->
<!-- isoreceived="20141219114640" -->
<!-- sent="Fri, 19 Dec 2014 11:46:17 +0000" -->
<!-- isosent="20141219114617" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Still getting DDT test assert fails" -->
<!-- id="CEED8BB0-3FB5-417E-AE91-68B9EE00D10B_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Still getting DDT test assert fails<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 06:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>Previous message:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>Reply:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>You uncommented the &quot;#if 0 ...&quot; section in the opal datatype test yesterday (<a href="https://github.com/open-mpi/ompi/commit/1895f29537820ee06492ae3b2e66c1cf5ef78c70">https://github.com/open-mpi/ompi/commit/1895f29537820ee06492ae3b2e66c1cf5ef78c70</a>), but we're still getting assert fails on opal_datatype_test.  It caused the nightly tarball to fail last night, and I'm able to reproduce this on a Linux x86_64 machine (but not on my Mac laptop):
<br>
<p>-----
<br>
#0  0x0000003491632925 in raise () from /lib64/libc.so.6
<br>
#1  0x0000003491634105 in abort () from /lib64/libc.so.6
<br>
#2  0x000000349162ba4e in __assert_fail_base () from /lib64/libc.so.6
<br>
#3  0x000000349162bb10 in __assert_fail () from /lib64/libc.so.6
<br>
#4  0x0000000000403bb5 in local_copy_with_convertor (pdt=0x60e550, count=4500, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;chunk=956) at opal_datatype_test.c:438
<br>
#5  0x0000000000405a86 in main (argc=1, argv=0x7fffffffd2a8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at opal_datatype_test.c:667
<br>
-----
<br>
<p>Specifically, it fails on this line:
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(outputFlags &amp; QUIT_ON_FIRST_ERROR) { assert(0); exit(-1); }
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>Previous message:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>Reply:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
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
