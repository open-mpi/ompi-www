<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 21:59:21 2015" -->
<!-- isoreceived="20150310015921" -->
<!-- sent="Tue, 10 Mar 2015 10:59:26 +0900" -->
<!-- isosent="20150310015926" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5" -->
<!-- id="54FE4FFE.6020801_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAkFZ5vPOj1RSvA1hwzKxvD_eUkE-zhchnHPHkoqinMNV5GAJQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-09 21:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17124.php">Howard Pritchard: "[OMPI devel] f08ts"</a>
<li><strong>Previous message:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>In reply to:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>please disregard my previous comment.
<br>
<p>new_comm is passed to ompi_comm_enable (and *not* &amp;new_comm)
<br>
so you are right, new_comm cannot be MPI_COMM_NULL at topo_base_create.c:172
<br>
<p>that being said, ompi_comm_enable invokes ompi_comm_activate that
<br>
OBJ_RELEASE
<br>
new_comm if an error occurs, so there is still an issue here
<br>
/* e.g. cannot assign new_comm-&gt;c_topo, nor invoke
<br>
ompi_comm_free(&amp;new_comm) */
<br>
<p>i will think of a correct fix from now, and in the mean time, i will
<br>
welcome your advises :-)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/03/10 10:08, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In topo_base_create.c at line 171, ompi_comm_enable ends up calling
</span><br>
<span class="quotelev1">&gt; ompi_comm_activate which assigns MPI_COMM_NULL to new_comm when an error
</span><br>
<span class="quotelev1">&gt; occurs
</span><br>
<span class="quotelev1">&gt; ( see bail_on_error label )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So unless the correct fix is to change the behavior of ompi_comm_activate,
</span><br>
<span class="quotelev1">&gt; I think the change is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Makes sense ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 10, 2015, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I might misread these commit, but the changes proposed here do not look
</span><br>
<span class="quotelev2">&gt;&gt; correct to me. At no moment the new_comm can be equal to MPI_COMM_NULL in
</span><br>
<span class="quotelev2">&gt;&gt; this code (especially not at line 172 in the too_base_cart_create.c).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 9, 2015, at 02:26 , gitdub_at_[hidden] &lt;javascript:;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       via  9107bf50776d540f50c29a1e263d5d40f16fe806 (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      from  a9044945fe4cedbcacd3415a2136aea470dade43 (commit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/9107bf50776d540f50c29a1e263d5d40f16fe806">https://github.com/open-mpi/ompi/commit/9107bf50776d540f50c29a1e263d5d40f16fe806</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit 9107bf50776d540f50c29a1e263d5d40f16fe806
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date:   Mon Mar 9 15:22:22 2015 +0900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi/topo: fix misc errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    as reported by Coverity with CIDs 1041232, 1041234, 1041235
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1269789 and 1269996
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev2">&gt;&gt; b/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 6a678da..6d1c732 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -14,7 +14,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Copyright (c) 2012-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Copyright (c) 2014      Los Alamos National Security, LLC. All right
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -91,7 +91,6 @@ int mca_topo_base_cart_create(mca_topo_base_module_t
</span><br>
<span class="quotelev2">&gt;&gt; *topo,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cart = OBJ_NEW(mca_topo_base_comm_cart_2_2_0_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if( NULL == cart ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ompi_comm_free(&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cart-&gt;ndims = ndims;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -172,11 +171,13 @@ int
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_cart_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free(topo_procs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OBJ_RELEASE(cart);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev2">&gt;&gt; b/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 43adf1a..dc676e3 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/topo/base/topo_base_dist_graph_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Copyright (c) 2011-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Copyright (c) 2011-2013 Universit&#233; Bordeaux 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -347,12 +347,14 @@ int
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_dist_graph_create(mca_topo_base_module_t* module,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if ( NULL != topo-&gt;outw ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             free(topo-&gt;outw);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_topo-&gt;mtc.dist_graph = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_topo             = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_flags           &amp;= ~OMPI_COMM_DIST_GRAPH;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free(topo);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free(topo_procs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_topo             = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_flags           &amp;= ~OMPI_COMM_DIST_GRAPH;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_topo-&gt;mtc.dist_graph = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     *newcomm = new_comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev2">&gt;&gt; b/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 990ac72..77a1be6 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/topo/base/topo_base_graph_create.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Copyright (c) 2012-2013 Inria.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Copyright (c) 2014      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -131,11 +131,13 @@ int
</span><br>
<span class="quotelev2">&gt;&gt; mca_topo_base_graph_create(mca_topo_base_module_t *topo,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_topo            = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        new_comm-&gt;c_flags          &amp;= ~OMPI_COMM_GRAPH;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free(topo_procs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OBJ_RELEASE(graph);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if (MPI_COMM_NULL != new_comm) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_topo            = NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            new_comm-&gt;c_flags          &amp;= ~OMPI_COMM_GRAPH;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/topo/base/topo_base_cart_create.c       | 11 ++++++-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/topo/base/topo_base_dist_graph_create.c | 12 +++++++-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/topo/base/topo_base_graph_create.c      | 10 ++++++----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 files changed, 19 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-commits_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17119.php">http://www.open-mpi.org/community/lists/devel/2015/03/17119.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17122.php">http://www.open-mpi.org/community/lists/devel/2015/03/17122.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17124.php">Howard Pritchard: "[OMPI devel] f08ts"</a>
<li><strong>Previous message:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
<li><strong>In reply to:</strong> <a href="17122.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1250-g9107bf5"</a>
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
