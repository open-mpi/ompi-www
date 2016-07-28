<?
$subject_val = "[OMPI devel] RFC: Add GPU Direct RDMA support to openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 17:04:34 2013" -->
<!-- isoreceived="20131008210434" -->
<!-- sent="Tue, 8 Oct 2013 14:04:31 -0700" -->
<!-- isosent="20131008210431" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add GPU Direct RDMA support to openib btl" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36007D5056E_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 17:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>Previous message:</strong> <a href="13071.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>Reply:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add GPU Direct RDMA support to openib btl
<br>
WHY: Better latency for small GPU message transfers
<br>
WHERE: Several files, see ticket for list
<br>
WHEN: Friday,  October 18, 2013 COB
<br>
More detail:
<br>
This RFC looks to make use of GPU Direct RDMA support that is coming in the future in Mellanox libraries.  With GPU Direct RDMA, we can register GPU memory with the ibv_reg_mr() calls.  Therefore, we are simply piggy backing on the large message RDMA support (RGET) that exists in the PML and openib BTL.  For best performance, we want to use the RGET protocol at small messages and the switch to a pipeline protocol at larger messages.
<br>
<p>To make use of this, we add some extra code paths that are followed when moving GPU buffers.   If we have the support compiled in, then when we detect we have a GPU buffer, we use the RGET protocol even for small messages.   When the messages get larger, we switch to using the regular pipeline protocol.  There is some other support code that is added as well.  We add a flag to any GPU memory that is registered so we can check for cuMemAlloc/cuMemFree/cuMemAlloc issues.  Each GPU has a buffer ID associated with it, so we can ensure that any registrations in the rcache are still valid.
<br>
<p>To view the changes, go to <a href="https://svn.open-mpi.org/trac/ompi/ticket/3836">https://svn.open-mpi.org/trac/ompi/ticket/3836</a> and click on gdr.diff&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3836%20and%20click%20on%20gdr.diff">https://svn.open-mpi.org/trac/ompi/ticket/3836%20and%20click%20on%20gdr.diff</a>&gt;.
<br>
<p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13072/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>Previous message:</strong> <a href="13071.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>Reply:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
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
