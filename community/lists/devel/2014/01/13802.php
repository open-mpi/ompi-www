<?
$subject_val = "[OMPI devel] 1.7.4rc: Fortran + XLF = broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 21:10:39 2014" -->
<!-- isoreceived="20140118021039" -->
<!-- sent="Fri, 17 Jan 2014 18:10:36 -0800" -->
<!-- isosent="20140118021036" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: Fortran + XLF = broken" -->
<!-- id="CAAvDA146W1UtqMm8+hrxiNmL1GQnqtkNpnggXqdJm7BTVUF0EA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: Fortran + XLF = broken<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 21:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13803.php">Paul Hargrove: "[OMPI devel] Compiler family probe broken [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="13801.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Back in Sep 2012 I reported that the trunk was broken with IBM's Fortran
<br>
compilers.  The last email I could find on that thread is
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/09/11519.php">http://www.open-mpi.org/community/lists/devel/2012/09/11519.php</a>
<br>
<p>Well, the errors with current 1.7 nightly tarball (1.7.4rc2r30303) may have
<br>
changed slightly, but things are still quite broken.  I've tested xlf-13.1
<br>
and 14.1 (correspond to xlc-11.1 and 12.1, respectively).
<br>
<p>The warnings and error from both versions look to be identical, though I've
<br>
not checked too closely.  I've attached relevant outputs from both builds.
<br>
<p>Warnings about command line options occur because &quot;-D...&quot; is *not* the
<br>
right way to define preprocessor symbols with the XL fortran compilers.
<br>
&nbsp;One must use &quot;-WF,-D...&quot; instead.
<br>
<p>There are warnings from mpi-ignore-tkr-interfaces.h which are all &quot;modern
<br>
fortran&quot; stuff that means almost nothing to me.
<br>
<p>However, both finally die with:
<br>
&nbsp;&nbsp;PPFC     mpi-f08.lo
<br>
/soft/compilers/ibmcmp-may2012/xlf/bg/14.1/bin/.orig/xlf90: 1501-216 (W)
<br>
command option -_REENTRANT is not recognized - passed to ld
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc64-xlc-12.1/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
<br>
1516-194 (S) A binding label must not be the same as the name of a program
<br>
unit, common block, external procedure, and another binding label, ignoring
<br>
differences in case.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc64-xlc-12.1/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
<br>
1516-194 (S) A binding label must not be the same as the name of a program
<br>
unit, common block, external procedure, and another binding label, ignoring
<br>
differences in case.
<br>
&quot;/home/hargrove/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc64-xlc-12.1/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
<br>
1520-031 (W) Option DLINES is ignored within Fortran 90 free form and IBM
<br>
free form.
<br>
** mpi_f08   === End of Compilation 1 ===
<br>
<p>I report this for completeness and will accept &quot;we don't care about that
<br>
compiler family&quot; as a response.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13802/xlf-outputs.tar.bz2">xlf-outputs.tar.bz2</a>
</ul>
<!-- attachment="xlf-outputs.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13803.php">Paul Hargrove: "[OMPI devel] Compiler family probe broken [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="13801.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<!-- nextthread="start" -->
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
