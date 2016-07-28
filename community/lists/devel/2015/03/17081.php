<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 12:53:08 2015" -->
<!-- isoreceived="20150302175308" -->
<!-- sent="Mon, 2 Mar 2015 12:53:07 -0500" -->
<!-- isosent="20150302175307" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80" -->
<!-- id="CAMJJpkVx4pHhXRXxQ3W7c7huH==gJvH8VuEf6BGdcbeMrVtHGw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="822EF73A-2CAC-4DD2-9ADD-724DA22B4F09_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-02 12:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17082.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80"</a>
<li><strong>Previous message:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>In reply to:</strong> <a href="17079.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I answered to the PR but I'll bring my comment here as well. In addition to
<br>
the performance implication, there might be a correctness implication here.
<br>
del_procs does not have to be called globally by all participating
<br>
processes in same time, and can be called with a subset of processes. As an
<br>
example, a correct implementation of MPI_Comm_disconnect could call
<br>
del_procs with all the processes that are becoming disconnected. Thus, a
<br>
global pmix_fence, by it's conceptual implication of a global
<br>
synchronization (due to the NULL parameter) might be the wrong thing to do.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Mar 2, 2015 at 10:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It&#226;&#128;&#153;s your code, so you are welcome to do this if you want. I&#226;&#128;&#153;ll just point
</span><br>
<span class="quotelev1">&gt; out that his is a really big hit in total execution time at scale as it
</span><br>
<span class="quotelev1">&gt; will be done in addition to the barrier already performed in MPI_Finalize
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you are going to do _two_ barriers during shutdown.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 2, 2015, at 5:43 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;       via  fbb7c80312cbcd823346e89a56f5d83e8620c57c (commit)
</span><br>
<span class="quotelev2">&gt; &gt;       via  168c83ed9592120fd2199e8280b517ab0060e136 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  42f5a36ee3f1e400aa251804725b86192c9df9fa (commit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/fbb7c80312cbcd823346e89a56f5d83e8620c57c">https://github.com/open-mpi/ompi/commit/fbb7c80312cbcd823346e89a56f5d83e8620c57c</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit fbb7c80312cbcd823346e89a56f5d83e8620c57c
</span><br>
<span class="quotelev2">&gt; &gt; Merge: 42f5a36 168c83e
</span><br>
<span class="quotelev2">&gt; &gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Mon Mar 2 15:43:32 2015 +0200
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Merge pull request #439 from alex-mikheev/topic/mxm_finalize_fix
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OMPI/MXM: add out of band barrier at the end of del_procs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/168c83ed9592120fd2199e8280b517ab0060e136">https://github.com/open-mpi/ompi/commit/168c83ed9592120fd2199e8280b517ab0060e136</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 168c83ed9592120fd2199e8280b517ab0060e136
</span><br>
<span class="quotelev2">&gt; &gt; Author: Alex Mikheev &lt;alexm_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Mon Mar 2 12:56:02 2015 +0200
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OMPI/MXM: add out of band barrier at the end of del_procs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    mxm shutdown requires out of band barrier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/mtl/mxm/mtl_mxm.c b/ompi/mca/mtl/mxm/mtl_mxm.c
</span><br>
<span class="quotelev2">&gt; &gt; index 1a4e21a..ed4089a 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/mtl/mxm/mtl_mxm.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/mtl/mxm/mtl_mxm.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -617,6 +617,7 @@ int ompi_mtl_mxm_del_procs(struct
</span><br>
<span class="quotelev1">&gt; mca_mtl_base_module_t *mtl, size_t nprocs,
</span><br>
<span class="quotelev2">&gt; &gt;             OBJ_RELEASE(endpoint);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_pmix.fence(NULL, 0);
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev2">&gt; &gt; index 2cfa6ca..d53cb7c 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/yalla/pml_yalla.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -240,6 +240,7 @@ int mca_pml_yalla_del_procs(struct ompi_proc_t
</span><br>
<span class="quotelev1">&gt; **procs, size_t nprocs)
</span><br>
<span class="quotelev2">&gt; &gt;         PML_YALLA_VERBOSE(2, &quot;disconnected from rank %ld&quot;,
</span><br>
<span class="quotelev1">&gt; procs[i]-&gt;super.proc_name);
</span><br>
<span class="quotelev2">&gt; &gt;         procs[i]-&gt;proc_endpoints[OMPI_PROC_ENDPOINT_TAG_PML] = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_pmix.fence(NULL, 0);
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/mtl/mxm/mtl_mxm.c     | 1 +
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/pml/yalla/pml_yalla.c | 1 +
</span><br>
<span class="quotelev2">&gt; &gt; 2 files changed, 2 insertions(+)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/index.php">http://www.open-mpi.org/community/lists/devel/2015/03/index.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17082.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80"</a>
<li><strong>Previous message:</strong> <a href="17080.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-1195-gfbb7c80"</a>
<li><strong>In reply to:</strong> <a href="17079.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1195-gfbb7c80"</a>
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
