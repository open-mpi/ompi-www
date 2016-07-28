<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 19 21:02:44 2010" -->
<!-- isoreceived="20100920010244" -->
<!-- sent="Sun, 19 Sep 2010 21:02:43 -0400" -->
<!-- isosent="20100920010243" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201009200102.o8K12hHB028018_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-19 21:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1319.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2481)"</a>
<li><strong>Previous message:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Sun Sep 19 21:01:11 EDT 2010
<br>
End time:   Sun Sep 19 21:02:43 EDT 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-color.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-text.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-draw.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-fig.o
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-xml.o
<br>
&nbsp;&nbsp;CCLD   lstopo
<br>
&nbsp;&nbsp;CC     hwloc-calc.o
<br>
&nbsp;&nbsp;CCLD   hwloc-calc
<br>
&nbsp;&nbsp;CC     hwloc-bind.o
<br>
&nbsp;&nbsp;CCLD   hwloc-bind
<br>
&nbsp;&nbsp;CC     hwloc-distrib.o
<br>
&nbsp;&nbsp;CCLD   hwloc-distrib
<br>
&nbsp;&nbsp;CC     hwloc-ps.o
<br>
&nbsp;&nbsp;CCLD   hwloc-ps
<br>
Creating hwloc.7 man page...
<br>
Creating lstopo.1 man page...
<br>
Creating hwloc-bind.1 man page...
<br>
Creating hwloc-distrib.1 man page...
<br>
Creating hwloc-calc.1 man page...
<br>
Creating hwloc-ps.1 man page...
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/utils'
<br>
Making all in tests
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests'
<br>
Making all in linux
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests/linux'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests/linux'
<br>
Making all in ports
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests/ports'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests/ports'
<br>
Making all in xml
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests/xml'
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests/xml'
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests'
<br>
make[3]: Nothing to be done for `all-am'.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/tests'
<br>
Making all in doc
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/doc'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/doc'
<br>
make[3]: *** No rule to make target `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/include/hwloc/cuda.h', needed by `doxygen-doc/hwloc.tag'.  Stop.
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/doc'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build/doc'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r2484/hwloc/hwloc-1.1a1r2484/_build'
<br>
make: *** [distcheck] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1319.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2481)"</a>
<li><strong>Previous message:</strong> <a href="1317.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
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
