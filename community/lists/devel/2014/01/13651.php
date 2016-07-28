<?
$subject_val = "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 19:35:23 2014" -->
<!-- isoreceived="20140110003523" -->
<!-- sent="Thu, 9 Jan 2014 16:35:19 -0800" -->
<!-- isosent="20140110003519" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="CAAvDA16yqJp+q-68MQ_v7WK-H4MkLEtm5bXzK6kOzs6fnyPAaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 19:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13652.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Previous message:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My attempts to build the current 1.7.4rc tarball with versions 8.0 and 9.0
<br>
of the Portland Group compilers fails miserably on compilation of
<br>
mpi-f08-types.F90.
<br>
<p>I am sort of surprised by the attempt to build Fortran 2008 support w/ such
<br>
old compilers.
<br>
I think that fact itself is the real bug here, right?
<br>
<p>With pgi-10.0 I see configure say:
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if building Fortran 'use mpi_f08' bindings... no
<br>
<p>But pgi-8.0 and 9.0 both get identified as &quot;good&quot; compilers.
<br>
<p>pgi-9.0:
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if Fortran compiler supports BIND(C)... yes
<br>
checking if Fortran compiler supports BIND(C) with LOGICAL params... yes
<br>
checking if Fortran compiler supports optional arguments... yes
<br>
checking if Fortran compiler supports private... no
<br>
checking if Fortran compiler supports abstract... yes
<br>
checking if Fortran compiler supports asynchronous... no
<br>
checking if Fortran compiler supports procedure... no
<br>
checking size of Fortran type(test_mpi_handle)... 4
<br>
checking Fortran compiler F08 assumed rank syntax... not cached; checking
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
<br>
checking Fortran compiler F08 assumed rank syntax... no
<br>
checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array
<br>
subsections
<br>
configure: WARNING: Temporary development override: forcing the use of F08
<br>
wrappers
<br>
checking if building Fortran 'use mpi_f08' bindings... yes
<br>
<p>pgi-8.0 (almost, but not quite, the same):
<br>
checking if building Fortran 'use mpi' bindings... yes
<br>
checking if Fortran compiler supports BIND(C)... yes
<br>
checking if Fortran compiler supports BIND(C) with LOGICAL params... yes
<br>
checking if Fortran compiler supports optional arguments... yes
<br>
checking if Fortran compiler supports private... no
<br>
checking if Fortran compiler supports abstract... no
<br>
checking if Fortran compiler supports asynchronous... no
<br>
checking if Fortran compiler supports procedure... no
<br>
checking size of Fortran type(test_mpi_handle)... 4
<br>
checking Fortran compiler F08 assumed rank syntax... not cached; checking
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(..)... no
<br>
checking Fortran compiler F08 assumed rank syntax... no
<br>
checking which mpi_f08 implementation to build... &quot;good&quot; compiler, no array
<br>
subsections
<br>
configure: WARNING: Temporary development override: forcing the use of F08
<br>
wrappers
<br>
checking if building Fortran 'use mpi_f08' bindings... yes
<br>
<p>The bzip2-compressed config.log files for pgi-8.0 and 9.0 are attached.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13651/openmpi-1.7-latest-linux-x86_64-pgi-9.0-config.log.bz2">openmpi-1.7-latest-linux-x86_64-pgi-9.0-config.log.bz2</a>
</ul>
<!-- attachment="openmpi-1.7-latest-linux-x86_64-pgi-9.0-config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13651/openmpi-1.7-latest-linux-x86_64-pgi-8.0-config.log.bz2">openmpi-1.7-latest-linux-x86_64-pgi-8.0-config.log.bz2</a>
</ul>
<!-- attachment="openmpi-1.7-latest-linux-x86_64-pgi-8.0-config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13652.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<li><strong>Previous message:</strong> <a href="13650.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
