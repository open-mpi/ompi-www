<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 03:46:26 2014" -->
<!-- isoreceived="20141001074626" -->
<!-- sent="Wed, 01 Oct 2014 16:46:32 +0900" -->
<!-- isosent="20141001074632" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl" -->
<!-- id="542BB158.4070300_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="74245729-3C07-4D85-8969-32EE4054B924_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-01 03:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15957.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15950.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph !
<br>
<p>it did fix the problem
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/01 3:04, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I fixed this in r32818 - the components shouldn't be passing back success if the requested info isn't found. Hope that fixes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 30, 2014, at 1:54 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the dynamic/spawn test from the ibm test suite crashes if the openib btl
</span><br>
<span class="quotelev2">&gt;&gt; is detected
</span><br>
<span class="quotelev2">&gt;&gt; (the test can be ran on one node with an IB port)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is what happens :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in mca_btl_openib_proc_create,
</span><br>
<span class="quotelev2">&gt;&gt; the macro
</span><br>
<span class="quotelev2">&gt;&gt;    OPAL_MODEX_RECV(rc, &amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt;                    proc, &amp;message, &amp;msg_size);
</span><br>
<span class="quotelev2">&gt;&gt; does not find any information *but*
</span><br>
<span class="quotelev2">&gt;&gt; rc is OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; msg_size is not updated (e.g. left uninitialized)
</span><br>
<span class="quotelev2">&gt;&gt; message is not updated (e.g. left uninitialized)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then, if msg_size is unitialized with a non zero value, and if message
</span><br>
<span class="quotelev2">&gt;&gt; is uninitialized with
</span><br>
<span class="quotelev2">&gt;&gt; a non valid address, a crash will occur when accessing message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* i am not debating here the fact that there is no information returned,
</span><br>
<span class="quotelev2">&gt;&gt; i am simply discussing the crash */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a simple workaround is to initialize msg_size to zero.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that being said, is this the correct fix ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; one possible alternate fix is to update the OPAL_MODEX_RECV_STRING macro
</span><br>
<span class="quotelev2">&gt;&gt; like this :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* from opal/mca/pmix/pmix.h */
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_MODEX_RECV_STRING(r, s, p, d, sz)                          \
</span><br>
<span class="quotelev2">&gt;&gt;    do {                                                                \
</span><br>
<span class="quotelev2">&gt;&gt;        opal_value_t *kv;                                               \
</span><br>
<span class="quotelev2">&gt;&gt;        if (OPAL_SUCCESS == ((r) = opal_pmix.get(&amp;(p)-&gt;proc_name,       \
</span><br>
<span class="quotelev2">&gt;&gt;                                                 (s), &amp;kv))) {          \
</span><br>
<span class="quotelev2">&gt;&gt;            if (NULL != kv)
</span><br>
<span class="quotelev2">&gt;&gt; {                                               \
</span><br>
<span class="quotelev2">&gt;&gt;                *(d) =
</span><br>
<span class="quotelev2">&gt;&gt; kv-&gt;data.bo.bytes;                                   \
</span><br>
<span class="quotelev2">&gt;&gt;                *(sz) =
</span><br>
<span class="quotelev2">&gt;&gt; kv-&gt;data.bo.size;                                   \
</span><br>
<span class="quotelev2">&gt;&gt;                kv-&gt;data.bo.bytes = NULL; /* protect the data
</span><br>
<span class="quotelev2">&gt;&gt; */            \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_RELEASE(kv);                                            \
</span><br>
<span class="quotelev2">&gt;&gt;            } else {                \
</span><br>
<span class="quotelev2">&gt;&gt;                *(sz) = 0;                    \
</span><br>
<span class="quotelev2">&gt;&gt;                (r) = OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt;            }                     \
</span><br>
<span class="quotelev2">&gt;&gt;        }                                                               \
</span><br>
<span class="quotelev2">&gt;&gt;    } while(0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; *(sz) = 0; and (r) = OPAL_ERR_NOT_FOUND; can be seen as redundant, *(sz)
</span><br>
<span class="quotelev2">&gt;&gt; *or* (r) could be set
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and an other alternate fix is to update the end of the native_get
</span><br>
<span class="quotelev2">&gt;&gt; function like this :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* from opal/mca/pmix/native/pmix_native.c */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (found) {
</span><br>
<span class="quotelev2">&gt;&gt;        return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    *kv = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    if (OPAL_SUCCESS == rc) {
</span><br>
<span class="quotelev2">&gt;&gt;        if (OPAL_SUCCESS == ret) {
</span><br>
<span class="quotelev2">&gt;&gt;            rc = OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt;            rc = ret;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    return rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please advise ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15942.php">http://www.open-mpi.org/community/lists/devel/2014/09/15942.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15950.php">http://www.open-mpi.org/community/lists/devel/2014/09/15950.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15957.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15950.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
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
