<?
$subject_val = "[OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 11:55:33 2014" -->
<!-- isoreceived="20141218165533" -->
<!-- sent="Thu, 18 Dec 2014 08:55:31 -0800" -->
<!-- isosent="20141218165531" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="CAAvDA1424ttWyv+_7GJN6+1LEOtgVE6EY+ZQY_=UsWp9wwY4aQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.4rc5] preliminary results<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 11:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16670.php">Howard Pritchard: "[OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>Previous message:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16682.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16683.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With results from about 50 out of 61 platforms:
<br>
<p>+ KNOWN: SGI UV is still &quot;broken-by-default&quot; (fails compiling vader unless
<br>
configured with --without-xpmem)
<br>
+ NEW: I see Fortran bindings failing to compile w/ gfortran
<br>
+ NEW: I see Fortran bindings fail to link with Open64
<br>
<p>I also have unexplained errors on my Solaris-10/SPARC system.
<br>
It looks like there may have been a loss of network connectivity during the
<br>
tests.
<br>
I need to check these deeper, but I expect them to pass when I get a chance
<br>
to re-run them.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16670.php">Howard Pritchard: "[OMPI devel] ABI compatibility proposal for 1.9/2.0 release stream"</a>
<li><strong>Previous message:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16682.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16683.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
