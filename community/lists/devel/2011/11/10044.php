<?
$subject_val = "Re: [OMPI devel] RFC: new btl descriptor flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 15:52:12 2011" -->
<!-- isoreceived="20111129205212" -->
<!-- sent="Tue, 29 Nov 2011 13:52:07 -0700 (MST)" -->
<!-- isosent="20111129205207" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new btl descriptor flags" -->
<!-- id="alpine.OSX.2.00.1111291339360.54924_at_panthera.lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B6B7361F-08D8-47F1-9519-F7D7C8F71BC7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: new btl descriptor flags<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 15:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 29 Nov 2011, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; These two functions target at defining a memory layout (contiguous or not) that can be target for a one-sided communication. I don't see why there is a need to know what type of communication that will be &#133; What is so different in the xpmem that requires the memory to be prepared based on the operations that will follow?
</span><br>
<p>This would be for the ugni btl, not xpmem. Some uGNI rdma operations do not require registration (FMA put). If we know the type of operation at prepare_src we can avoid registering memory in these cases.
<br>
<p><span class="quotelev1">&gt; Moreover, the prepare_src is used outside the context of one-sided, in the send protocol. How do you plan to address send operations?
</span><br>
<p>Send operations can be detected by neither MCA_BTL_DES_PUT or MCA_BTL_DES_GET being set or a non-zero reserve value (which some btls already use).
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10045.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
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
