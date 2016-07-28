<?
$subject_val = "[OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  4 10:37:36 2009" -->
<!-- isoreceived="20091004143736" -->
<!-- sent="Sun, 04 Oct 2009 16:38:53 +0200" -->
<!-- isosent="20091004143853" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]" -->
<!-- id="4AC8B37D.9010603_at_dev.mellanox.co.il" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]<br>
<strong>From:</strong> Vasily Filipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-04 10:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6931.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The vendor_id and vendor_part_id actually the****remote**  values of this   
<br>
<p>information.   Shouldn't that go in endpoint.rem_info?
<br>
<p>&nbsp;&nbsp;
<br>
<p>- Ok, it seems more suitable.
<br>
<p>Is there a reason to put the max_inline_data on the endpoint rather   
<br>
<p>than accessing it through endpoint-&gt;endpoint_btl-&gt;device-&gt;ib_dev?    
<br>
<p>(I'm a little confused on how it is used / assigned -- I could be   
<br>
<p>missing something here)
<br>
<p>- The code will be erased; let to the IB driver serve this matter (It is 
<br>
not relevant in the transport level).
<br>
<p>What testing has been done to see that this stuff works?
<br>
<p>- We have run the patch with basis tests, and we plan to run with 
<br>
addition tests in the future.
<br>
<p>Has an equivalent patch been made for Pasha's ofacm work?
<br>
<p>- It will be made.
<br>
<p>Thank you for your remarks.
<br>
<p><p><p>
<p>
<br><p><strong>attached mail follows:</strong><hr><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6930/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6931.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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
