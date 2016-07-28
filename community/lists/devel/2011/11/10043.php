<?
$subject_val = "Re: [OMPI devel] RFC: new btl descriptor flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 15:08:15 2011" -->
<!-- isoreceived="20111129200815" -->
<!-- sent="Tue, 29 Nov 2011 15:08:11 -0500" -->
<!-- isosent="20111129200811" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new btl descriptor flags" -->
<!-- id="B6B7361F-08D8-47F1-9519-F7D7C8F71BC7_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="alpine.OSX.2.00.1111291032520.54924_at_panthera.lanl.gov" -->
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
<strong>Date:</strong> 2011-11-29 15:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10042.php">Nathan Hjelm: "[OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10042.php">Nathan Hjelm: "[OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These two functions target at defining a memory layout (contiguous or not) that can be target for a one-sided communication. I don't see why there is a need to know what type of communication that will be &#133; What is so different in the xpmem that requires the memory to be prepared based on the operations that will follow?
<br>
<p>Moreover, the prepare_src is used outside the context of one-sided, in the send protocol. How do you plan to address send operations?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 29, 2011, at 12:42 , Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; We need an accurate way to detect if prepare_src/prepare_dst are being called for a get or a put operation. I propose adding two new flags to the btl descriptor (and passing them from ob1/csum/etc):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MCA_BTL_DES_PUT 0x0010
</span><br>
<span class="quotelev1">&gt; #define MCA_BTL_DES_GET 0x0020
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments? Suggestions? Objections?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10042.php">Nathan Hjelm: "[OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>In reply to:</strong> <a href="10042.php">Nathan Hjelm: "[OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10044.php">Nathan Hjelm: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
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
