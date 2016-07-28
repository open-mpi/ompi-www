<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 11:17:00 2015" -->
<!-- isoreceived="20150309151700" -->
<!-- sent="Mon, 9 Mar 2015 11:16:56 -0400" -->
<!-- isosent="20150309151656" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5" -->
<!-- id="8CB4F2C1-B90E-4BDE-ABE5-C45A0C2D42A2_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150309062650.5911E25F575_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-09 11:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17120.php">Mike Dubman: "[OMPI devel] jenkins and openmpi"</a>
<li><strong>Previous message:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Reply:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I might misread these commit, but the changes proposed here do not look correct to me. At no moment the new_comm can be equal to MPI_COMM_NULL in this code (especially not at line 172 in the too_base_cart_create.c).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Mar 9, 2015, at 02:26 , gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  9107bf50776d540f50c29a1e263d5d40f16fe806 (commit)
</span><br>
<span class="quotelev1">&gt;      from  a9044945fe4cedbcacd3415a2136aea470dade43 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/9107bf50776d540f50c29a1e263d5d40f16fe806">https://github.com/open-mpi/ompi/commit/9107bf50776d540f50c29a1e263d5d40f16fe806</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 9107bf50776d540f50c29a1e263d5d40f16fe806
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Mar 9 15:22:22 2015 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ompi/topo: fix misc errors
</span><br>
<span class="quotelev1">&gt;    as reported by Coverity with CIDs 1041232, 1041234, 1041235
</span><br>
<span class="quotelev1">&gt;    1269789 and 1269996
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/topo/base/topo_base_cart_create.c b/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev1">&gt; index 6a678da..6d1c732 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev1">&gt; @@ -14,7 +14,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2012-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2014      Los Alamos National Security, LLC. All right
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt; @@ -91,7 +91,6 @@ int mca_topo_base_cart_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cart = OBJ_NEW(mca_topo_base_comm_cart_2_2_0_t);
</span><br>
<span class="quotelev1">&gt;     if( NULL == cart ) {
</span><br>
<span class="quotelev1">&gt; -        ompi_comm_free(&amp;new_comm);
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     cart-&gt;ndims = ndims;
</span><br>
<span class="quotelev1">&gt; @@ -172,11 +171,13 @@ int mca_topo_base_cart_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev1">&gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev1">&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;         /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;         free(topo_procs);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(cart);
</span><br>
<span class="quotelev1">&gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/topo/base/topo_base_dist_graph_create.c b/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev1">&gt; index 43adf1a..dc676e3 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev1">&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2013 Universit&#195;&#169; Bordeaux 1
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -347,12 +347,14 @@ int mca_topo_base_dist_graph_create(mca_topo_base_module_t* module,
</span><br>
<span class="quotelev1">&gt;         if ( NULL != topo-&gt;outw ) {
</span><br>
<span class="quotelev1">&gt;             free(topo-&gt;outw);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_topo-&gt;mtc.dist_graph = NULL;
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_topo             = NULL;
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_flags           &amp;= ~OMPI_COMM_DIST_GRAPH;
</span><br>
<span class="quotelev1">&gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;         free(topo);
</span><br>
<span class="quotelev1">&gt;         free(topo_procs);
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_topo             = NULL;
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_flags           &amp;= ~OMPI_COMM_DIST_GRAPH;
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_topo-&gt;mtc.dist_graph = NULL;
</span><br>
<span class="quotelev1">&gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     *newcomm = new_comm;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/topo/base/topo_base_graph_create.c b/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev1">&gt; index 990ac72..77a1be6 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev1">&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2012-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2014      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt; @@ -131,11 +131,13 @@ int mca_topo_base_graph_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev1">&gt;     ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev1">&gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev1">&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_topo            = NULL;
</span><br>
<span class="quotelev1">&gt; -        new_comm-&gt;c_flags          &amp;= ~OMPI_COMM_GRAPH;
</span><br>
<span class="quotelev1">&gt;         free(topo_procs);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(graph);
</span><br>
<span class="quotelev1">&gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_topo            = NULL;
</span><br>
<span class="quotelev1">&gt; +            new_comm-&gt;c_flags          &amp;= ~OMPI_COMM_GRAPH;
</span><br>
<span class="quotelev1">&gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; ompi/mca/topo/base/topo_base_cart_create.c       | 11 ++++++-----
</span><br>
<span class="quotelev1">&gt; ompi/mca/topo/base/topo_base_dist_graph_create.c | 12 +++++++-----
</span><br>
<span class="quotelev1">&gt; ompi/mca/topo/base/topo_base_graph_create.c      | 10 ++++++----
</span><br>
<span class="quotelev1">&gt; 3 files changed, 19 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17120.php">Mike Dubman: "[OMPI devel] jenkins and openmpi"</a>
<li><strong>Previous message:</strong> <a href="17118.php">Howard Pritchard: "Re: [OMPI devel] mpi_test_suite question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Reply:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
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
