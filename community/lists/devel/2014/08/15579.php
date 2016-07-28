<?
$subject_val = "Re: [OMPI devel] jenkins error in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 01:32:43 2014" -->
<!-- isoreceived="20140809053243" -->
<!-- sent="Sat, 9 Aug 2014 08:32:41 +0300" -->
<!-- isosent="20140809053241" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jenkins error in trunk" -->
<!-- id="CAAO1KybVF+MDKLyX7Qjf_ZTX8kd29UnpNgArh1ODTj13GpJN1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8959696C-07ED-46B5-B71B-282A662F3C11_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] jenkins error in trunk<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 01:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15580.php">Mike Dubman: "[OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Previous message:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>In reply to:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15590.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Reply:</strong> <a href="15590.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
still, there are some:
<br>
<p>*04:58:49* coll_fca_component.c: In function
<br>
'mca_coll_fca_get_fca_lib':*04:58:49* coll_fca_component.c:1161:
<br>
error: 'ompi_proc_t' has no member named 'proc_name'*04:58:49*
<br>
coll_fca_component.c: In function 'fca_register':*04:58:49*
<br>
coll_fca_component.c:1419: warning: assignment discards qualifiers
<br>
from pointer target type*04:58:49* make[2]: ***
<br>
[coll_fca_component.lo] Error 1*04:58:49* make[2]: Leaving directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem-3/label/hpc-test-node/ompi/mca/coll/fca'
<br>
<p><p><p>On Fri, Aug 8, 2014 at 7:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Fixed in r32462
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2014, at 8:13 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Josh,Devendar - could you please take a look?*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Thanks*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *15:45:00* Making install in mca/coll/fca*15:45:00* make[2]: Entering directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi/mca/coll/fca'*15:45:00*   CC       coll_fca_module.lo*15:45:00* coll_fca_module.c: In function 'have_remote_peers':*15:45:00* coll_fca_module.c:48: error: 'ompi_proc_t' has no member named 'proc_flags'*15:45:00* coll_fca_module.c:48: error: 'ompi_proc_t' has no member named 'proc_flags'*15:45:00* coll_fca_module.c: In function '__get_local_ranks':*15:45:00* coll_fca_module.c:75: error: 'ompi_proc_t' has no member named 'proc_flags'*15:45:00* coll_fca_module.c:75: error: 'ompi_proc_t' has no member named 'proc_flags'*15:45:00* coll_fca_module.c:95: error: 'ompi_proc_t' has no member named 'proc_flags'*15:45:00* coll_fca_module.c:95: error: 'ompi_proc_t' has no member named 'proc_flags'*15:45:00* make[2]: *** [coll_fca_module.lo] Error 1*15:45:00* make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi/mca/coll/fca'*15:45:00* make[1]: *** [install-recursive] Error 1*15:45:00* make[1]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi'*15:45:00* make: *** [install-recursive] Error 1*15:45:00* Build step 'Execute shell' marked build as failu
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15557.php">http://www.open-mpi.org/community/lists/devel/2014/08/15557.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15558.php">http://www.open-mpi.org/community/lists/devel/2014/08/15558.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15580.php">Mike Dubman: "[OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Previous message:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>In reply to:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15590.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Reply:</strong> <a href="15590.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
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
