<?
$subject_val = "Re: [OMPI devel] trunk fails to compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 09:03:54 2014" -->
<!-- isoreceived="20140429130354" -->
<!-- sent="Tue, 29 Apr 2014 06:03:14 -0700" -->
<!-- isosent="20140429130314" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk fails to compile" -->
<!-- id="368731E4-BC05-421C-B0FE-7B8E2A91FA1C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KybZz1vo0LvTJ4kJDCHui41SJjuRgr0KJZLpwg5f4ZB9Qw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 09:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Previous message:</strong> <a href="14648.php">Christoph Niethammer: "[OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>In reply to:</strong> <a href="14647.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I know - the message about the nightly tarball gets automatically sent. Trying to figure out the problem, but it doesn't make the trunk not compile. It only affects making of the tarball.
<br>
<p><p>On Apr 28, 2014, at 10:41 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hit send too soon.
</span><br>
<span class="quotelev1">&gt; this commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Follow the lead set by Jeff: no need to run AC_CONFIG_HEADERS on orte_config.h. However, unlike the MPI layer, we don't run that macro on another file in orte/include, so ensure we add that -I path back!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 29, 2014 at 8:40 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; seems like started from this commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 29, 2014 at 8:39 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; contrib/dist/make_dist_tarball -highok -distdir /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/tarball
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[3]: warning: -jN forced in submake: disabling jobserver mode.
</span><br>
<span class="quotelev1">&gt; 03:36:26   CC       orte-info.o
</span><br>
<span class="quotelev1">&gt; 03:36:26   CC       output.o
</span><br>
<span class="quotelev1">&gt; 03:36:26   CC       param.o
</span><br>
<span class="quotelev1">&gt; 03:36:26   CC       components.o
</span><br>
<span class="quotelev1">&gt; 03:36:26   CC       version.o
</span><br>
<span class="quotelev1">&gt; 03:36:26   SED      orte-info.1
</span><br>
<span class="quotelev1">&gt; 03:36:26 ../../../../orte/tools/orte-info/version.c:27:26: error: orte/version.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[3]: *** [version.o] Error 1
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[3]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/openmpi-1.9a1/_build/orte/tools/orte-info'
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/openmpi-1.9a1/_build/orte'
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 03:36:26 make[1]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/openmpi-1.9a1/_build'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14647.php">http://www.open-mpi.org/community/lists/devel/2014/04/14647.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Previous message:</strong> <a href="14648.php">Christoph Niethammer: "[OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>In reply to:</strong> <a href="14647.php">Mike Dubman: "Re: [OMPI devel] trunk fails to compile"</a>
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
