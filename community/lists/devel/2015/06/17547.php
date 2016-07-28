<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 00:09:23 2015" -->
<!-- isoreceived="20150626040923" -->
<!-- sent="Fri, 26 Jun 2015 04:09:11 +0000" -->
<!-- isosent="20150626040911" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ===" -->
<!-- id="65C22263-7AA8-4889-95C8-90BA0E07F530_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6kjxQnvz-93ttHsKxQv_eno=WDwTGgZ5YYYA3Ro6PHjA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 00:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17546.php">Howard Pritchard: "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>In reply to:</strong> <a href="17546.php">Howard Pritchard: "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No results were put back to the PR where we did the extensions work this afternoon.  See attached.
<br>
<p>[cid:43E6B6DA-588A-4766-80B3-BD8762F683AD_at_[hidden]]
<br>
<p><p><p>On Jun 25, 2015, at 9:03 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
<br>
<p>sorry, not true. look at the logs on IU.
<br>
runs at 3:07 and 4:08 IU time.
<br>
<p><p>2015-06-25 21:46 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
<br>
Howard --
<br>
<p>The LANL distcheck jenkins hasn't been running all day.
<br>
<p><p><span class="quotelev1">&gt; On Jun 25, 2015, at 8:33 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm confused about this build failure.  It should have been caught by the make distcheck IU jenkins
</span><br>
<span class="quotelev1">&gt; project I would think.  Should the IU jenkins project do something else beside
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make -j X distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to catch this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, did this problem happen because someone bypassed the PR process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We shouldn't have this kind of build failure anymore as long as people have stopped  bypassing
</span><br>
<span class="quotelev1">&gt; PR process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-06-25 19:22 GMT-06:00 MPI Team &lt;mpiteam_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test/datatype'
</span><br>
<span class="quotelev1">&gt; Making distclean in util
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test/util'
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
<span class="quotelev1">&gt; test -z &quot;opal_bit_ops.log opal_path_nfs.log&quot; || rm -f opal_bit_ops.log opal_path_nfs.log
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; rm -f *.tab.c
</span><br>
<span class="quotelev1">&gt; test -z &quot;opal_bit_ops.trs opal_path_nfs.trs&quot; || rm -f opal_bit_ops.trs opal_path_nfs.trs
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
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test/util'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test'
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
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test'
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub/test'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub'
</span><br>
<span class="quotelev1">&gt; test -z &quot;*~ .#*&quot; || rm -f *~ .#*
</span><br>
<span class="quotelev1">&gt; rm -rf .libs _libs
</span><br>
<span class="quotelev1">&gt; rm -f *.lo
</span><br>
<span class="quotelev1">&gt; test -z &quot;ompi/include/ompi/version.h orte/include/orte/version.h oshmem/include/oshmem/version.h opal/include/opal/version.h ompi/mpi/fortran/configure-fortran-output.h contrib/dist/mofed/debian/changelog contrib/dist/mofed/debian/control contrib/dist/mofed/debian/copyright contrib/dist/mofed/debian/rules contrib/dist/mofed/compile_debian_mlnx_example&quot; || rm -f ompi/include/ompi/version.h orte/include/orte/version.h oshmem/include/oshmem/version.h opal/include/opal/version.h ompi/mpi/fortran/configure-fortran-output.h contrib/dist/mofed/debian/changelog contrib/dist/mofed/debian/control contrib/dist/mofed/debian/copyright contrib/dist/mofed/debian/rules contrib/dist/mofed/compile_debian_mlnx_example
</span><br>
<span class="quotelev1">&gt; rm -f opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen/config.h opal/mca/hwloc/hwloc1110/hwloc/include/private/autogen/stamp-h4 opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen/config.h opal/mca/hwloc/hwloc1110/hwloc/include/hwloc/autogen/stamp-h5
</span><br>
<span class="quotelev1">&gt; rm -f libtool config.lt
</span><br>
<span class="quotelev1">&gt; rm -f TAGS ID GTAGS GRTAGS GSYMS GPATH tags
</span><br>
<span class="quotelev1">&gt; test . = &quot;../..&quot; || test -z &quot;&quot; || rm -f
</span><br>
<span class="quotelev1">&gt; rm -f cscope.out cscope.in.out cscope.po.out cscope.files
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub'
</span><br>
<span class="quotelev1">&gt; rm -f config.status config.cache config.log configure.lineno config.status.lineno
</span><br>
<span class="quotelev1">&gt; rm -f Makefile
</span><br>
<span class="quotelev1">&gt; ERROR: files left in build directory after distclean:
</span><br>
<span class="quotelev1">&gt; ./ompi/mpiext/affinity/c/OMPI_Affinity_str.3
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distcleancheck] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/master/ompi-2015-06-25-211002/ompi/openmpi-dev-1979-g13425e7/_build/sub'
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17543.php">http://www.open-mpi.org/community/lists/devel/2015/06/17543.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17544.php">http://www.open-mpi.org/community/lists/devel/2015/06/17544.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17546.php">http://www.open-mpi.org/community/lists/devel/2015/06/17546.php</a>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17547/lanl-distcheck-jenkins-did-not-run.png" alt="lanl-distcheck-jenkins-did-not-run.png
">
<!-- attachment="lanl-distcheck-jenkins-did-not-run.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17546.php">Howard Pritchard: "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
<li><strong>In reply to:</strong> <a href="17546.php">Howard Pritchard: "Re: [OMPI devel] === CREATE FAILURE (dev-1979-g13425e7) ==="</a>
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
