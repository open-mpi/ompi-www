<?
$subject_val = "[OMPI devel] Summary of the problem with r26626";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 12:50:59 2012" -->
<!-- isoreceived="20120712165059" -->
<!-- sent="Thu, 12 Jul 2012 10:50:55 -0600" -->
<!-- isosent="20120712165055" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] Summary of the problem with r26626" -->
<!-- id="20120712165055.GQ81027_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Summary of the problem with r26626<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 12:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11285.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After some digging Terry and I discovered the problem with r26626. To perform an rdma transaction pmls used to explicitly promote the seg_addr from prepare_src/dst to 64-bits before sending it over the wire. The other end would then (inconsistently) use the lval to perform the get/put. Segments are now opaque objects so the pmls simply memcpy the segments into the rdma header (without promoting seg_addr). So, right now we have a mixture of lvals and pvals in the put and get paths which will not work in two cases: 32-bit bit, and mixed 32/64-bit environments.
<br>
<p>I can think of a few ways to fix this:
<br>
<p>&nbsp;- Require the pmls to explicitly promote seg_addr to 64-bits after the memcpy. This is a band aid fix but I can implement/commit it very quickly (this will work fine until a more permanent solution is found).
<br>
&nbsp;- Require prepare_src/dst to return segments with 64-bit addresses for all rdma fragments (0 == reserve). This is relatively simple for most btls but a little more complicated for openib. The openib btl may pack data for a get/put into a send segment. The obvious way to handle this case is to set the lval in prepare_src and restore the pval when the send fragment is returned.
<br>
&nbsp;- Change the btl interface in a way that allows the btl to prepare segments specifically to be sent to another machine. This is a bit more complicated and would require lots of discussion and an RFC.
<br>
<p>I am open to suggestions.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11285.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11283.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI_Ireduce_scatter_block hangs"</a>
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
