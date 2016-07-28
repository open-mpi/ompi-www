<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 21:03:27 2011" -->
<!-- isoreceived="20110217020327" -->
<!-- sent="Wed, 16 Feb 2011 21:03:26 -0500" -->
<!-- isosent="20110217020326" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201102170203.p1H23QOg012131_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2011-02-16 21:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1944.php">Christopher Samuel: "[hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Previous message:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
<p>Start time: Wed Feb 16 21:01:04 EST 2011
<br>
End time:   Wed Feb 16 21:03:26 EST 2011
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
rm -f *.tab.c
<br>
test -z &quot;test-hwloc-distrib.sh&quot; || rm -f test-hwloc-distrib.sh
<br>
test . = &quot;../../utils&quot; || test -z &quot;&quot; || rm -f 
<br>
rm -f hwloc.7 lstopo.1 hwloc-bind.1 hwloc-distrib.1 hwloc-calc.1 hwloc-ps.1 hwloc-gather-topology.1
<br>
rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
<br>
rm -rf ./.deps
<br>
rm -f Makefile
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build/utils'
<br>
Making distclean in include
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build/include'
<br>
rm -rf .libs _libs
<br>
rm -f *.lo
<br>
test -z &quot;&quot; || rm -f 
<br>
test . = &quot;../../include&quot; || test -z &quot;&quot; || rm -f 
<br>
rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
<br>
rm -f Makefile
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build/include'
<br>
Making distclean in src
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build/src'
<br>
test -z &quot;libhwloc.la&quot; || rm -f libhwloc.la
<br>
rm -f &quot;./so_locations&quot;
<br>
rm -rf .libs _libs
<br>
test -z &quot;&quot; || rm -f 
<br>
rm -f *.o
<br>
rm -f *.lo
<br>
rm -f *.tab.c
<br>
test -z &quot;&quot; || rm -f 
<br>
test . = &quot;../../src&quot; || test -z &quot;&quot; || rm -f 
<br>
rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
<br>
rm -rf ./.deps
<br>
rm -f Makefile
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build/src'
<br>
Making distclean in .
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build'
<br>
rm -rf .libs _libs
<br>
rm -f *.lo
<br>
test -z &quot;hwloc.pc&quot; || rm -f hwloc.pc
<br>
test . = &quot;..&quot; || test -z &quot;&quot; || rm -f 
<br>
rm -f include/private/autogen/config.h include/private/autogen/stamp-h1 include/hwloc/autogen/config.h include/hwloc/autogen/stamp-h2
<br>
rm -f libtool config.lt
<br>
rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build'
<br>
rm -f config.status config.cache config.log configure.lineno config.status.lineno
<br>
rm -f Makefile
<br>
ERROR: files left in build directory after distclean:
<br>
./hwloc-1.2a1-1.tar.gz
<br>
./hwloc-1.2a1-1.tar.bz2
<br>
make[1]: *** [distcleancheck] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3173/hwloc/hwloc-1.2a1r3173/_build'
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
<li><strong>Next message:</strong> <a href="1944.php">Christopher Samuel: "[hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Previous message:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
