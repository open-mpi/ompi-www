<?
$subject_val = "Re: [OMPI devel] trunk fails to compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 01:41:20 2014" -->
<!-- isoreceived="20140429054120" -->
<!-- sent="Tue, 29 Apr 2014 08:41:18 +0300" -->
<!-- isosent="20140429054118" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk fails to compile" -->
<!-- id="CAAO1KybZz1vo0LvTJ4kJDCHui41SJjuRgr0KJZLpwg5f4ZB9Qw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyY0hXvaVRyBzp74XLkX-ZxJW6PVWCKBNJmqL5EPc6aUzw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk fails to compile<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 01:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14648.php">Christoph Niethammer: "[OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Previous message:</strong> <a href="14646.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>In reply to:</strong> <a href="14646.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>Reply:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hit send too soon.
<br>
this commit:
<br>
<p>Follow the lead set by Jeff: no need to run AC_CONFIG_HEADERS on
<br>
orte_config.h. However, unlike the MPI layer, we don't run that macro on
<br>
another file in orte/include, so ensure we add that -I path back!
<br>
<p><p>On Tue, Apr 29, 2014 at 8:40 AM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; seems like started from this commit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 29, 2014 at 8:39 AM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; contrib/dist/make_dist_tarball -highok -distdir /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/tarball
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *03:36:26* make[3]: warning: -jN forced in submake: disabling jobserver mode.*03:36:26*   CC       orte-info.o*03:36:26*   CC       output.o*03:36:26*   CC       param.o*03:36:26*   CC       components.o*03:36:26*   CC       version.o*03:36:26*   SED      orte-info.1*03:36:26* ../../../../orte/tools/orte-info/version.c:27:26: error: orte/version.h: No such file or directory*03:36:26* make[3]: *** [version.o] Error 1*03:36:26* make[3]: *** Waiting for unfinished jobs....*03:36:26* make[3]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/openmpi-1.9a1/_build/orte/tools/orte-info'*03:36:26* make[2]: *** [all-recursive] Error 1*03:36:26* make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/openmpi-1.9a1/_build/orte'*03:36:26* make[1]: *** [all-recursive] Error 1*03:36:26* make[1]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/openmpi-1.9a1/_build'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14648.php">Christoph Niethammer: "[OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Previous message:</strong> <a href="14646.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>In reply to:</strong> <a href="14646.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>Reply:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
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
