<?
$subject_val = "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 19:23:34 2013" -->
<!-- isoreceived="20131008232334" -->
<!-- sent="Tue, 8 Oct 2013 17:23:18 -0600" -->
<!-- isosent="20131008232318" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl" -->
<!-- id="002401cec47d$5fbf9430$1f3ebc90$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36007D5056E_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 19:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Previous message:</strong> <a href="13072.php">Rolf vandeVaart: "[OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>In reply to:</strong> <a href="13072.php">Rolf vandeVaart: "[OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>&nbsp;
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Tuesday, October 08, 2013 3:05 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl
<br>
<p>&nbsp;
<br>
<p>WHAT: Add GPU Direct RDMA support to openib btl 
<br>
<p>WHY: Better latency for small GPU message transfers
<br>
<p>WHERE: Several files, see ticket for list
<br>
<p>WHEN: Friday,  October 18, 2013 COB 
<br>
<p>More detail: 
<br>
<p>This RFC looks to make use of GPU Direct RDMA support that is coming in the
<br>
future in Mellanox libraries.  With GPU Direct RDMA, we can register GPU
<br>
memory with the ibv_reg_mr() calls.  Therefore, we are simply piggy backing
<br>
on the large message RDMA support (RGET) that exists in the PML and openib
<br>
BTL.  For best performance, we want to use the RGET protocol at small
<br>
messages and the switch to a pipeline protocol at larger messages.
<br>
<p>&nbsp;
<br>
<p>To make use of this, we add some extra code paths that are followed when
<br>
moving GPU buffers.   If we have the support compiled in, then when we
<br>
detect we have a GPU buffer, we use the RGET protocol even for small
<br>
messages.   When the messages get larger, we switch to using the regular
<br>
pipeline protocol.  There is some other support code that is added as well.
<br>
We add a flag to any GPU memory that is registered so we can check for
<br>
cuMemAlloc/cuMemFree/cuMemAlloc issues.  Each GPU has a buffer ID associated
<br>
with it, so we can ensure that any registrations in the rcache are still
<br>
valid.   
<br>
<p>&nbsp;
<br>
<p>To view the changes, go to <a href="https://svn.open-mpi.org/trac/ompi/ticket/3836">https://svn.open-mpi.org/trac/ompi/ticket/3836</a>
<br>
and click on gdr.diff
<br>
&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3836%20and%20click%20on%20gdr.dif">https://svn.open-mpi.org/trac/ompi/ticket/3836%20and%20click%20on%20gdr.dif</a>
<br>
f&gt; .
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p>This email message is for the sole use of the intended recipient(s) and may
<br>
contain confidential information.  Any unauthorized review, use, disclosure
<br>
or distribution is prohibited.  If you are not the intended recipient,
<br>
please contact the sender by reply email and destroy all copies of the
<br>
original message. 
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Previous message:</strong> <a href="13072.php">Rolf vandeVaart: "[OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>In reply to:</strong> <a href="13072.php">Rolf vandeVaart: "[OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
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
