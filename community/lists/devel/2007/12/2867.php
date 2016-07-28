<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 08:33:08 2007" -->
<!-- isoreceived="20071217133308" -->
<!-- sent="Mon, 17 Dec 2007 15:32:50 +0200" -->
<!-- isosent="20071217133250" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071217133250.GE28587_at_minantech.com" -->
<!-- charset="cp1255" -->
<!-- inreplyto="C38740C5.11F4E%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 08:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2866.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>In reply to:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 13, 2007 at 08:04:21PM -0500, Richard Graham wrote:
<br>
<span class="quotelev1">&gt; Yes, should be a bit more clear.  Need an independent way to verify that
</span><br>
<span class="quotelev1">&gt; data is matched
</span><br>
<span class="quotelev1">&gt;  in the correct order &#173; sending this information as payload is one way to do
</span><br>
<span class="quotelev1">&gt; this.  So,
</span><br>
<span class="quotelev1">&gt;  sending unique data in every message, and making sure that it arrives in
</span><br>
<span class="quotelev1">&gt; the user buffers
</span><br>
<span class="quotelev1">&gt;  in the expected order is a way to do this.
</span><br>
<p>Did that. Encoded sequence number in a payload and sent many eager
<br>
packets from one rank to another. Many packets were reoredered, but
<br>
application received everything in a correct order.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2868.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2866.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r16959"</a>
<li><strong>In reply to:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
