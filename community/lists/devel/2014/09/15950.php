<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 14:04:13 2014" -->
<!-- isoreceived="20140930180413" -->
<!-- sent="Tue, 30 Sep 2014 11:04:09 -0700" -->
<!-- isosent="20140930180409" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl" -->
<!-- id="74245729-3C07-4D85-8969-32EE4054B924_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="542A6FD1.5050002_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 14:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15951.php">Pritchard Jr., Howard: "Re: [OMPI devel] Github migration: tomorrow"</a>
<li><strong>Previous message:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="15942.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15956.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15956.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed this in r32818 - the components shouldn't be passing back success if the requested info isn't found. Hope that fixes the problem.
<br>
<p><p>On Sep 30, 2014, at 1:54 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the dynamic/spawn test from the ibm test suite crashes if the openib btl
</span><br>
<span class="quotelev1">&gt; is detected
</span><br>
<span class="quotelev1">&gt; (the test can be ran on one node with an IB port)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is what happens :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in mca_btl_openib_proc_create,
</span><br>
<span class="quotelev1">&gt; the macro
</span><br>
<span class="quotelev1">&gt;    OPAL_MODEX_RECV(rc, &amp;mca_btl_openib_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt;                    proc, &amp;message, &amp;msg_size);
</span><br>
<span class="quotelev1">&gt; does not find any information *but*
</span><br>
<span class="quotelev1">&gt; rc is OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; msg_size is not updated (e.g. left uninitialized)
</span><br>
<span class="quotelev1">&gt; message is not updated (e.g. left uninitialized)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then, if msg_size is unitialized with a non zero value, and if message
</span><br>
<span class="quotelev1">&gt; is uninitialized with
</span><br>
<span class="quotelev1">&gt; a non valid address, a crash will occur when accessing message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* i am not debating here the fact that there is no information returned,
</span><br>
<span class="quotelev1">&gt; i am simply discussing the crash */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple workaround is to initialize msg_size to zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that being said, is this the correct fix ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one possible alternate fix is to update the OPAL_MODEX_RECV_STRING macro
</span><br>
<span class="quotelev1">&gt; like this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* from opal/mca/pmix/pmix.h */
</span><br>
<span class="quotelev1">&gt; #define OPAL_MODEX_RECV_STRING(r, s, p, d, sz)                          \
</span><br>
<span class="quotelev1">&gt;    do {                                                                \
</span><br>
<span class="quotelev1">&gt;        opal_value_t *kv;                                               \
</span><br>
<span class="quotelev1">&gt;        if (OPAL_SUCCESS == ((r) = opal_pmix.get(&amp;(p)-&gt;proc_name,       \
</span><br>
<span class="quotelev1">&gt;                                                 (s), &amp;kv))) {          \
</span><br>
<span class="quotelev1">&gt;            if (NULL != kv)
</span><br>
<span class="quotelev1">&gt; {                                               \
</span><br>
<span class="quotelev1">&gt;                *(d) =
</span><br>
<span class="quotelev1">&gt; kv-&gt;data.bo.bytes;                                   \
</span><br>
<span class="quotelev1">&gt;                *(sz) =
</span><br>
<span class="quotelev1">&gt; kv-&gt;data.bo.size;                                   \
</span><br>
<span class="quotelev1">&gt;                kv-&gt;data.bo.bytes = NULL; /* protect the data
</span><br>
<span class="quotelev1">&gt; */            \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(kv);                                            \
</span><br>
<span class="quotelev1">&gt;            } else {                \
</span><br>
<span class="quotelev1">&gt;                *(sz) = 0;                    \
</span><br>
<span class="quotelev1">&gt;                (r) = OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;            }                     \
</span><br>
<span class="quotelev1">&gt;        }                                                               \
</span><br>
<span class="quotelev1">&gt;    } while(0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; *(sz) = 0; and (r) = OPAL_ERR_NOT_FOUND; can be seen as redundant, *(sz)
</span><br>
<span class="quotelev1">&gt; *or* (r) could be set
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and an other alternate fix is to update the end of the native_get
</span><br>
<span class="quotelev1">&gt; function like this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* from opal/mca/pmix/native/pmix_native.c */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (found) {
</span><br>
<span class="quotelev1">&gt;        return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    *kv = NULL;
</span><br>
<span class="quotelev1">&gt;    if (OPAL_SUCCESS == rc) {
</span><br>
<span class="quotelev1">&gt;        if (OPAL_SUCCESS == ret) {
</span><br>
<span class="quotelev1">&gt;            rc = OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;        } else {
</span><br>
<span class="quotelev1">&gt;            rc = ret;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please advise ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15942.php">http://www.open-mpi.org/community/lists/devel/2014/09/15942.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15951.php">Pritchard Jr., Howard: "Re: [OMPI devel] Github migration: tomorrow"</a>
<li><strong>Previous message:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="15942.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15956.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15956.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
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
