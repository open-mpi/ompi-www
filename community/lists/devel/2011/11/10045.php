<?
$subject_val = "Re: [OMPI devel] RFC: new btl descriptor flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 17:08:46 2011" -->
<!-- isoreceived="20111129220846" -->
<!-- sent="Tue, 29 Nov 2011 17:08:38 -0500" -->
<!-- isosent="20111129220838" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new btl descriptor flags" -->
<!-- id="FA872495-165B-4DBF-9B2A-80AF35FE508A_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="alpine.OSX.2.00.1111291339360.54924_at_panthera.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 17:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2011, at 15:52 , Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 29 Nov 2011, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These two functions target at defining a memory layout (contiguous or not) that can be target for a one-sided communication. I don't see why there is a need to know what type of communication that will be &#133; What is so different in the xpmem that requires the memory to be prepared based on the operations that will follow?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would be for the ugni btl, not xpmem. Some uGNI rdma operations do not require registration (FMA put). If we know the type of operation at prepare_src we can avoid registering memory in these cases.
</span><br>
<p>Go for it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, the prepare_src is used outside the context of one-sided, in the send protocol. How do you plan to address send operations?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Send operations can be detected by neither MCA_BTL_DES_PUT or MCA_BTL_DES_GET being set or a non-zero reserve value (which some btls already use).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
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
