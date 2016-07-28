<?
$subject_val = "[OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 00:27:48 2013" -->
<!-- isoreceived="20131220052748" -->
<!-- sent="Thu, 19 Dec 2013 21:27:46 -0800" -->
<!-- isosent="20131220052746" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5" -->
<!-- id="CAAvDA160oXE0WaacVOF_p==DwWeADiDE99QbsqEvpvObVgiqSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 00:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<li><strong>Previous message:</strong> <a href="13520.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<li><strong>Reply:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Manually #ifdef'ing out the RLIMIT_AS code which lead to my previous
<br>
failure on OpenBSD-5 allows me to reach the (sigh) *next* problem:
<br>
<p>Making all in mpi/cxx
<br>
&nbsp;&nbsp;CXX      mpicxx.lo
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/ompi/mpi/cxx/mpicxx.cc:120:21:
<br>
error: macro &quot;MAX&quot; requires 2 arguments, but only 1 given
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/ompi/mpi/cxx/mpicxx.cc:121:21:
<br>
error: macro &quot;MIN&quot; requires 2 arguments, but only 1 given
<br>
<p><p>I think all that is needed is addition of
<br>
&nbsp;&nbsp;#undef MAX
<br>
&nbsp;&nbsp;#undef MIN
<br>
suitably early in this file.
<br>
At least that was sufficient to allow my build to complete.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<li><strong>Previous message:</strong> <a href="13520.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<li><strong>Reply:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
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
