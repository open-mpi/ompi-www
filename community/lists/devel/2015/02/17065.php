<?
$subject_val = "[OMPI devel] BML changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 18:59:49 2015" -->
<!-- isoreceived="20150226235949" -->
<!-- sent="Thu, 26 Feb 2015 23:59:41 +0000" -->
<!-- isosent="20150226235941" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] BML changes" -->
<!-- id="0e70024fc6a347a1a5c147c268ff074a_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] BML changes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 18:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<li><strong>Previous message:</strong> <a href="17064.php">Paul Hargrove: "[OMPI devel] printf format warnings on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This message is mostly for Nathan, but figured I would go with the wider distribution. I have noticed some different behaviour that I assume started with this change.
<br>
<p><p><a href="https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04">https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04</a>
<br>
<p><p>I am noticing that the openib BTL will also be used for on-node communication even though the sm (or smcuda) BTL is also available. I think with the aforementioned change that the openib BTL is listed as an available BTL that supports RDMA. While looking through the debugger and looking at the bml_endpoint, it appears that the sm BTL is listed as the eager and send BTL, but the openib is listed as the RDMA btl. Looking at the logic in pml_ob1_sendreq.h, it looks like we can end up selecting the openib btl for some of the communication. I ran with some various verbosity and saw that this was happening. With v1.8, we only appear to use the sm (or smcuda) btl.
<br>
<p><p>I am wondering if this was intentional with this change or maybe a side effect.
<br>
<p><p>Rolf
<br>
<p><p>-----------------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<li><strong>Previous message:</strong> <a href="17064.php">Paul Hargrove: "[OMPI devel] printf format warnings on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
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
