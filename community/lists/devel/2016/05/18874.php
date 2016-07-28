<?
$subject_val = "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 16:48:05 2016" -->
<!-- isoreceived="20160502204805" -->
<!-- sent="Mon, 2 May 2016 13:48:00 -0700" -->
<!-- isosent="20160502204800" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32" -->
<!-- id="CAAvDA1448ddXMK3DVrC2G+NgvWdhmMb1UTDqVkt2C9241zW75g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 16:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18875.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<li><strong>Previous message:</strong> <a href="18873.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>Reply:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 2.0.0rc2 tarball fails to compile on Linux/x86-64 with the Sun/Oracle
<br>
Studio compilers when using &quot;-m32&quot;.
<br>
I have reproduced with the 12.2 and 12.4 compiler releases (I have others,
<br>
but only tested those 2).
<br>
<p>The error appears to be the same one I previously reported multiple times.
<br>
The latest report was in
<br>
<a href="https://www.open-mpi.org/community/lists/devel/2015/07/17585.php">https://www.open-mpi.org/community/lists/devel/2015/07/17585.php</a>
<br>
FWIW: that posting includes a 2-line patch that fixes the problem for me.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18875.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<li><strong>Previous message:</strong> <a href="18873.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>Reply:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
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
