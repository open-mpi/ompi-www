<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 23:33:30 2015" -->
<!-- isoreceived="20150626033330" -->
<!-- sent="Thu, 25 Jun 2015 21:33:29 -0600" -->
<!-- isosent="20150626033329" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ===" -->
<!-- id="CAF1Cqj56pk2urhC3PNuuvbP_27=aNfgZb3CHDavKqVEd-2eTxw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150626012224.A4CBB25F00F_at_jaguar.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ===<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 23:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17544.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>Previous message:</strong> <a href="17542.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17544.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>Reply:</strong> <a href="17544.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I'm confused about this build failure.  It should have been caught by the
<br>
make distcheck IU jenkins
<br>
project I would think.  Should the IU jenkins project do something else
<br>
beside
<br>
<p>make -j X distcheck
<br>
<p>to catch this problem?
<br>
<p>Or, did this problem happen because someone bypassed the PR process?
<br>
<p>We shouldn't have this kind of build failure anymore as long as people have
<br>
stopped  bypassing
<br>
PR process.
<br>
<p>Howard
<br>
<p><p><p>2015-06-25 19:22 GMT-06:00 MPI Team &lt;mpiteam_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (dev-1979-g13425e7):
</span><br>
<span class="quotelev1">&gt;        make -j 8 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Thu Jun 25 21:10:02 EDT 2015
</span><br>
<span class="quotelev1">&gt; End time:   Thu Jun 25 21:22:24 EDT 2015
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; test -z &quot;test-suite.log&quot; || rm -f test-suite.log
</span><br>
<span class="quotelev1">&gt; rm -rf ./.deps
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test/datatype'
</span><br>
<span class="quotelev1">&gt; Making distclean in util
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test/util'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f test_session_dir_out test-file opal_path_nfs.out
</span><br>
<span class="quotelev1">&gt;  rm -f opal_bit_ops opal_path_nfs
</span><br>
<span class="quotelev1">&gt; rm -f *.o
</span><br>
<span class="quotelev1">&gt; test -z &quot;opal_bit_ops.log opal_path_nfs.log&quot; || rm -f opal_bit_ops.log
</span><br>
<span class="quotelev1">&gt; opal_path_nfs.log
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; rm -f *.tab.c
</span><br>
<span class="quotelev1">&gt; test -z &quot;opal_bit_ops.trs opal_path_nfs.trs&quot; || rm -f opal_bit_ops.trs
</span><br>
<span class="quotelev1">&gt; opal_path_nfs.trs
</span><br>
<span class="quotelev1">&gt; test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; test . = &quot;../../../../test/util&quot; || test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
</span><br>
<span class="quotelev1">&gt; test -z &quot;test-suite.log&quot; || rm -f test-suite.log
</span><br>
<span class="quotelev1">&gt; rm -rf ./.deps
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test/util'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; test . = &quot;../../../test&quot; || test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test'
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; test -z &quot;ompi/include/ompi/version.h orte/include/orte/version.h
</span><br>
<span class="quotelev1">&gt; oshmem/include/oshmem/version.h opal/include/opal/version.h
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/configure-fortran-output.h
</span><br>
<span class="quotelev1">&gt; contrib/dist/mofed/debian/changelog contrib/dist/mofed/debian/control
</span><br>
<span class="quotelev1">&gt; contrib/dist/mofed/debian/copyright contrib/dist/mofed/debian/rules
</span><br>
<span class="quotelev1">&gt; contrib/dist/mofed/compile_debian_mlnx_example&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; ompi/include/ompi/version.h orte/include/orte/version.h
</span><br>
<span class="quotelev1">&gt; oshmem/include/oshmem/version.h opal/include/opal/version.h
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/configure-fortran-output.h
</span><br>
<span class="quotelev1">&gt; contrib/dist/mofed/debian/changelog contrib/dist/mofed/debian/control
</span><br>
<span class="quotelev1">&gt; contrib/dist/mofed/debian/copyright contrib/dist/mofed/debian/rules
</span><br>
<span class="quotelev1">&gt; contrib/dist/mofed/compile_debian_mlnx_example
</span><br>
<span class="quotelev1">&gt; rm -f opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen/config.h
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen/stamp-h4
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen/config.h
</span><br>
<span class="quotelev1">&gt; opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen/stamp-h5
</span><br>
<span class="quotelev1">&gt; rm -f libtool config.lt
</span><br>
<span class="quotelev1">&gt; rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
</span><br>
<span class="quotelev1">&gt; test . = &quot;../..&quot; || test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f cscope.out cscope.in.out cscope.po.out cscope.files
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub'
</span><br>
<span class="quotelev1">&gt; rm -f config.status config.cache config.log configure.lineno
</span><br>
<span class="quotelev1">&gt; config.status.lineno
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; ERROR: files left in build directory after distclean:
</span><br>
<span class="quotelev1">&gt; ./ompi/mpiext/affinity/c/OMPI_Affinity_str.3
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distcleancheck] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17543/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17544.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>Previous message:</strong> <a href="17542.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17544.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>Reply:</strong> <a href="17544.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
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
