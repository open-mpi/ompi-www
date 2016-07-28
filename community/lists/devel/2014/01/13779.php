<?
$subject_val = "[OMPI devel] OSHMEM_SETUP_CFLAGS still not right";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 16 23:31:36 2014" -->
<!-- isoreceived="20140117043136" -->
<!-- sent="Thu, 16 Jan 2014 20:31:34 -0800" -->
<!-- isosent="20140117043134" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] OSHMEM_SETUP_CFLAGS still not right" -->
<!-- id="CAAvDA16r7GbjvN64WXJ_hUB2RJtBAV4pM0UMJjZkpupOtYk7Mw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OSHMEM_SETUP_CFLAGS still not right<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-16 23:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13780.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13778.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Reply:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following commit claimed to have resolved the OSHMEM_SETUP_CFLAGS
<br>
issues:
<br>
<p>r30286 | miked | 2014-01-14 05:23:44 -0800 (Tue, 14 Jan 2014) | 5 lines
<br>
<p>OSHMEM: fix fortran selection logic and refactoring
<br>
refactoring inspired by this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13744.php">http://www.open-mpi.org/community/lists/devel/2014/01/13744.php</a>
<br>
fix oshmem fortran selection logic, Thanks to Paul for info
<br>
Refs #3763
<br>
<p>However the past couple nightly tarballs (1.9a1r30298 and 1.9a1r30302)
<br>
produce output like the following:
<br>
<p>*** Compiler flags
<br>
checking which of CFLAGS are ok for debugger modules...  -DNDEBUG
<br>
checking for debugger extra CFLAGS... -g
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-trunk-linux-x86_64-pgi-12.10/openmpi-1.9a1r30302/configure:
<br>
line 285176: OSHMEM_SETUP_CFLAGS: command not found
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13779/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13780.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13778.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Reply:</strong> <a href="13786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
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
