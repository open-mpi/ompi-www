<?
$subject_val = "Re: [OMPI devel] jenkins error in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 12:13:13 2014" -->
<!-- isoreceived="20140808161313" -->
<!-- sent="Fri, 8 Aug 2014 09:12:39 -0700" -->
<!-- isosent="20140808161239" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jenkins error in trunk" -->
<!-- id="8959696C-07ED-46B5-B71B-282A662F3C11_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1Kyamn8asOCb=XmG8p_Rk2HUmF87=duw-kjxOH93LiJj93w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 12:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15559.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15557.php">Mike Dubman: "[OMPI devel] jenkins error in trunk"</a>
<li><strong>In reply to:</strong> <a href="15557.php">Mike Dubman: "[OMPI devel] jenkins error in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Reply:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r32462
<br>
<p>On Aug 8, 2014, at 8:13 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh,Devendar - could you please take a look?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 15:45:00 Making install in mca/coll/fca
</span><br>
<span class="quotelev1">&gt; 15:45:00 make[2]: Entering directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi/mca/coll/fca'
</span><br>
<span class="quotelev1">&gt; 15:45:00   CC       coll_fca_module.lo
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c: In function 'have_remote_peers':
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c:48: error: 'ompi_proc_t' has no member named 'proc_flags'
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c:48: error: 'ompi_proc_t' has no member named 'proc_flags'
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c: In function '__get_local_ranks':
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c:75: error: 'ompi_proc_t' has no member named 'proc_flags'
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c:75: error: 'ompi_proc_t' has no member named 'proc_flags'
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c:95: error: 'ompi_proc_t' has no member named 'proc_flags'
</span><br>
<span class="quotelev1">&gt; 15:45:00 coll_fca_module.c:95: error: 'ompi_proc_t' has no member named 'proc_flags'
</span><br>
<span class="quotelev1">&gt; 15:45:00 make[2]: *** [coll_fca_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 15:45:00 make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi/mca/coll/fca'
</span><br>
<span class="quotelev1">&gt; 15:45:00 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 15:45:00 make[1]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi'
</span><br>
<span class="quotelev1">&gt; 15:45:00 make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 15:45:00 Build step 'Execute shell' marked build as failu
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15557.php">http://www.open-mpi.org/community/lists/devel/2014/08/15557.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15559.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15557.php">Mike Dubman: "[OMPI devel] jenkins error in trunk"</a>
<li><strong>In reply to:</strong> <a href="15557.php">Mike Dubman: "[OMPI devel] jenkins error in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Reply:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
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
