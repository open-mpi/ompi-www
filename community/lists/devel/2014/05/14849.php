<?
$subject_val = "Re: [OMPI devel] Threshold for pinning down user-buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 10:40:56 2014" -->
<!-- isoreceived="20140527144056" -->
<!-- sent="Tue, 27 May 2014 08:40:52 -0600" -->
<!-- isosent="20140527144052" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threshold for pinning down user-buffers" -->
<!-- id="20140527144052.GA48634_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPkf6e0BX0wEs_MKPnqX07LbOLnKBLYkS=6forembRgNqRephQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Threshold for pinning down user-buffers<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 10:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14850.php">Nathan Hjelm: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Previous message:</strong> <a href="14848.php">Gilles Gouaillardet: "[OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14837.php">Siddhartha Jana: "[OMPI devel] Threshold for pinning down user-buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This limit is controlled by several MCA variables. Contiguous segments
<br>
larger than the btl_openib_eager_limit will use the RDMA protocol (Get) if
<br>
mpi_leave_pinned is set and the RDMA RNDV (Put) protocol
<br>
otherwise. Both of these protocol pin the user buffer on both sides.
<br>
<p>-Nathan
<br>
<p>On Fri, May 23, 2014 at 04:39:36PM -0500, Siddhartha Jana wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    Is my understanding correct?
</span><br>
<span class="quotelev1">&gt;    While servicing MPI_Send  using eager protocol over openib, there is a
</span><br>
<span class="quotelev1">&gt;    data-size threshold below which it is preferred to copy the contents of
</span><br>
<span class="quotelev1">&gt;    the user-buffer to a pre-pinned buffer instead of directly pinning down
</span><br>
<span class="quotelev1">&gt;    the user-buffer. If this is correct, how does one determine this
</span><br>
<span class="quotelev1">&gt;    threshold?
</span><br>
<span class="quotelev1">&gt;    As always, thanks for the help
</span><br>
<span class="quotelev1">&gt;    Sid
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14837.php">http://www.open-mpi.org/community/lists/devel/2014/05/14837.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14849/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14850.php">Nathan Hjelm: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<li><strong>Previous message:</strong> <a href="14848.php">Gilles Gouaillardet: "[OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14837.php">Siddhartha Jana: "[OMPI devel] Threshold for pinning down user-buffers"</a>
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
