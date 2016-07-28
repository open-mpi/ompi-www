<?
$subject_val = "[OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 23:40:39 2015" -->
<!-- isoreceived="20150815034039" -->
<!-- sent="Fri, 14 Aug 2015 20:40:27 -0700" -->
<!-- isosent="20150815034027" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="CAAvDA1555Yr3FOn4W3cNq6-fo2shXcRqNGXNo9-00h34YXb8+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc3 - second Solaris build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-14 23:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17752.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17750.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following is seen on my Solaris-11.2 (but not 11.1) system.
<br>
It is present with the Studio compilers (at least 12.4 and 12.3) for both
<br>
32- and 64-bit targets.
<br>
It is also present with the Gnu compiler for 64-bit targets (with 32-bit
<br>
the build dies for a different reason).
<br>
<p>&nbsp;&nbsp;FCLD     libmpi_mpifh_pmpi.la
<br>
&nbsp;&nbsp;FCLD     libmpi_mpifh_sizeof.la
<br>
&nbsp;&nbsp;CCLD     libmpi_mpifh.la
<br>
ld: fatal: file ./.libs/libmpi_mpifh_sizeof.a: open failed: No such file or
<br>
directory
<br>
<p>On this same system I can build the 1.10.0rc2 tarball fine with identical
<br>
configure args (other than the prefix setting).
<br>
I retested RC2 just now to be certain nothing relevant had changed in my
<br>
configuration.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17752.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Previous message:</strong> <a href="17750.php">Paul Hargrove: "[OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
