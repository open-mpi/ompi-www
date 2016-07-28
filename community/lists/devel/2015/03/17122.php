<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 21:08:45 2015" -->
<!-- isoreceived="20150310010845" -->
<!-- sent="Tue, 10 Mar 2015 10:08:43 +0900" -->
<!-- isosent="20150310010843" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5" -->
<!-- id="CAAkFZ5vPOj1RSvA1hwzKxvD_eUkE-zhchnHPHkoqinMNV5GAJQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8CB4F2C1-B90E-4BDE-ABE5-C45A0C2D42A2_at_icl.utk.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-09 21:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17123.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Previous message:</strong> <a href="17121.php">Howard Pritchard: "Re: [OMPI devel] jenkins and openmpi"</a>
<li><strong>In reply to:</strong> <a href="17119.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17123.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Reply:</strong> <a href="17123.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>In topo_base_create.c at line 171, ompi_comm_enable ends up calling
<br>
ompi_comm_activate which assigns MPI_COMM_NULL to new_comm when an error
<br>
occurs
<br>
( see bail_on_error label )
<br>
<p>So unless the correct fix is to change the behavior of ompi_comm_activate,
<br>
I think the change is correct.
<br>
<p>Makes sense ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p><p>On Tuesday, March 10, 2015, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might misread these commit, but the changes proposed here do not look
</span><br>
<span class="quotelev1">&gt; correct to me. At no moment the new_comm can be equal to MPI_COMM_NULL in
</span><br>
<span class="quotelev1">&gt; this code (especially not at line 172 in the too_base_cart_create.c).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 9, 2015, at 02:26 , gitdub_at_[hidden] &lt;javascript:;&gt; wrote:
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
<span class="quotelev2">&gt; &gt;       via  9107bf50776d540f50c29a1e263d5d40f16fe806 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  a9044945fe4cedbcacd3415a2136aea470dade43 (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/9107bf50776d540f50c29a1e263d5d40f16fe806">https://github.com/open-mpi/ompi/commit/9107bf50776d540f50c29a1e263d5d40f16fe806</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 9107bf50776d540f50c29a1e263d5d40f16fe806
</span><br>
<span class="quotelev2">&gt; &gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Mon Mar 9 15:22:22 2015 +0900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ompi/topo: fix misc errors
</span><br>
<span class="quotelev2">&gt; &gt;    as reported by Coverity with CIDs 1041232, 1041234, 1041235
</span><br>
<span class="quotelev2">&gt; &gt;    1269789 and 1269996
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev2">&gt; &gt; index 6a678da..6d1c732 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -14,7 +14,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2012-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2014      Los Alamos National Security, LLC. All right
</span><br>
<span class="quotelev2">&gt; &gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt; @@ -91,7 +91,6 @@ int mca_topo_base_cart_create(mca_topo_base_module_t
</span><br>
<span class="quotelev1">&gt; *topo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     cart = OBJ_NEW(mca_topo_base_comm_cart_2_2_0_t);
</span><br>
<span class="quotelev2">&gt; &gt;     if( NULL == cart ) {
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_comm_free(&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     cart-&gt;ndims = ndims;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -172,11 +171,13 @@ int
</span><br>
<span class="quotelev1">&gt; mca_topo_base_cart_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev2">&gt; &gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev2">&gt; &gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt; &gt;         /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt; &gt;         free(topo_procs);
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_RELEASE(cart);
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt; &gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;         return ret;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev2">&gt; &gt; index 43adf1a..dc676e3 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2011-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2011-2013 Universit&#195;&#169; Bordeaux 1
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -347,12 +347,14 @@ int
</span><br>
<span class="quotelev1">&gt; mca_topo_base_dist_graph_create(mca_topo_base_module_t* module,
</span><br>
<span class="quotelev2">&gt; &gt;         if ( NULL != topo-&gt;outw ) {
</span><br>
<span class="quotelev2">&gt; &gt;             free(topo-&gt;outw);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_topo-&gt;mtc.dist_graph = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_topo             = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_flags           &amp;= ~OMPI_COMM_DIST_GRAPH;
</span><br>
<span class="quotelev2">&gt; &gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;         free(topo);
</span><br>
<span class="quotelev2">&gt; &gt;         free(topo_procs);
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_topo             = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_flags           &amp;= ~OMPI_COMM_DIST_GRAPH;
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_topo-&gt;mtc.dist_graph = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt;         return ret;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     *newcomm = new_comm;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev2">&gt; &gt; index 990ac72..77a1be6 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2012-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2014      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt; @@ -131,11 +131,13 @@ int
</span><br>
<span class="quotelev1">&gt; mca_topo_base_graph_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev2">&gt; &gt;     ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev2">&gt; &gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev2">&gt; &gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_topo            = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -        new_comm-&gt;c_flags          &amp;= ~OMPI_COMM_GRAPH;
</span><br>
<span class="quotelev2">&gt; &gt;         free(topo_procs);
</span><br>
<span class="quotelev2">&gt; &gt;         OBJ_RELEASE(graph);
</span><br>
<span class="quotelev2">&gt; &gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_topo            = NULL;
</span><br>
<span class="quotelev2">&gt; &gt; +            new_comm-&gt;c_flags          &amp;= ~OMPI_COMM_GRAPH;
</span><br>
<span class="quotelev2">&gt; &gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt; &gt; +        }
</span><br>
<span class="quotelev2">&gt; &gt;         return ret;
</span><br>
<span class="quotelev2">&gt; &gt;     }
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
<span class="quotelev2">&gt; &gt; ompi/mca/topo/base/topo_base_cart_create.c       | 11 ++++++-----
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/topo/base/topo_base_dist_graph_create.c | 12 +++++++-----
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/topo/base/topo_base_graph_create.c      | 10 ++++++----
</span><br>
<span class="quotelev2">&gt; &gt; 3 files changed, 19 insertions(+), 14 deletions(-)
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
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17119.php">http://www.open-mpi.org/community/lists/devel/2015/03/17119.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17123.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Previous message:</strong> <a href="17121.php">Howard Pritchard: "Re: [OMPI devel] jenkins and openmpi"</a>
<li><strong>In reply to:</strong> <a href="17119.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17123.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>Reply:</strong> <a href="17123.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
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
