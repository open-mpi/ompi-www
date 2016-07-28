<?
$subject_val = "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 19:49:11 2014" -->
<!-- isoreceived="20140118004911" -->
<!-- sent="Fri, 17 Jan 2014 16:49:05 -0800" -->
<!-- isosent="20140118004905" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64" -->
<!-- id="CAAvDA16N5EYzd9C+S=y0k7UM=0M5HjWH1EZwY7XgffpP3BTSvg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 19:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13799.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13797.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Reply:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building the v1.7 tarball (1.7.4rc2r30303) with AMD's Open64 compilers
<br>
(v4.5.2) I hit the errors shown in the attached make.log (too long to
<br>
cut-and-paste).
<br>
I've also attached config.log and configure's stdout.
<br>
<p>&quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but I
<br>
am reporting this for completeness.
<br>
<p>Jeff may need to do more work on the configure probes for F08 support.
<br>
OR, why not provide --disable-mpi-f08 ?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13798/configure.stdout.bz2">configure.stdout.bz2</a>
</ul>
<!-- attachment="configure.stdout.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13798/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13798/make.log.bz2">make.log.bz2</a>
</ul>
<!-- attachment="make.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13799.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13797.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Reply:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
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
