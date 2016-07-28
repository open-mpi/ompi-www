<?
$subject_val = "Re: [OMPI devel] Still problems with del_procs in trunkj";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 23:09:41 2014" -->
<!-- isoreceived="20140526030941" -->
<!-- sent="Mon, 26 May 2014 12:09:38 +0900" -->
<!-- isosent="20140526030938" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still problems with del_procs in trunkj" -->
<!-- id="CAAkFZ5vGCySsxvFm_1AWVL+rOU49+zz2JJumY3j5fr_-yx_a3A_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36045739104_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still problems with del_procs in trunkj<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-25 23:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14840.php">Ralph Castain: "[OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14838.php">Ralph Castain: "[OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14836.php">Rolf vandeVaart: "[OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14850.php">Nathan Hjelm: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Reply:</strong> <a href="14850.php">Nathan Hjelm: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>the assert fails because the endpoint reference count is greater than one.
<br>
the root cause is the endpoint has been added to the list of
<br>
eager_rdma_buffers of the openib btl device (and hence OBJ_RETAIN'ed at
<br>
ompi/mca/btl/openib/btl_openib_endpoint.c:1009)
<br>
<p>a simple workaround is not to use eager rdma with the openib btl
<br>
(e.g. export OMPI_MCA_btl_openib_use_eager_rdma=0)
<br>
<p>here is attached a patch that solves the issue.
<br>
<p>because of my poor understanding of the openib btl, i did not commit it.
<br>
i am wondering wether it is safe to simply OBJ_RELEASE the endpoint
<br>
(e.g. what happens if there are inflight messages ?)
<br>
i also added some comments that indicates the patch might be suboptimal.
<br>
<p>Nathan, could you please review the attached patch ?
<br>
<p>please note that if the faulty assertion is removed, the endpoint will be
<br>
OBJ_RELEASE'd  but only in the btl finalize.
<br>
<p>Gilles
<br>
<p><p><p>On Sat, May 24, 2014 at 12:31 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I am still seeing problems with del_procs with openib.  Do we believe
</span><br>
<span class="quotelev1">&gt; everything should be working?  This is with the latest trunk (updated 1
</span><br>
<span class="quotelev1">&gt; hour ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 examples]$ mpirun --mca btl_openib_if_include
</span><br>
<span class="quotelev1">&gt; mlx5_0:1 -np 2 -host drossetti-ivy0,drossetti-ivy1
</span><br>
<span class="quotelev1">&gt; connectivity_cConnectivity test on 2 processes PASSED.
</span><br>
<span class="quotelev1">&gt; connectivity_c: ../../../../../ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; connectivity_c: ../../../../../ompi/mca/btl/openib/btl_openib.c:1151:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_del_procs: Assertion
</span><br>
<span class="quotelev1">&gt; `((opal_object_t*)endpoint)-&gt;obj_reference_count == 1' failed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 28443 on node drossetti-ivy1
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 examples]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14836.php">http://www.open-mpi.org/community/lists/devel/2014/05/14836.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14839/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14839/btl_openib.c.diff">btl_openib.c.diff</a>
</ul>
<!-- attachment="btl_openib.c.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14840.php">Ralph Castain: "[OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14838.php">Ralph Castain: "[OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14836.php">Rolf vandeVaart: "[OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14850.php">Nathan Hjelm: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Reply:</strong> <a href="14850.php">Nathan Hjelm: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
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
