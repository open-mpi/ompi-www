<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 10:41:14 2013" -->
<!-- isoreceived="20130702144114" -->
<!-- sent="Tue, 2 Jul 2013 14:40:53 +0000" -->
<!-- isosent="20130702144053" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument" -->
<!-- id="CDF84285.11D4E%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DFA3E250-31E5-41A8-8E4A-63928C0CFFA2_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 10:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<li><strong>Previous message:</strong> <a href="12520.php">George Bosilca: "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>In reply to:</strong> <a href="12520.php">George Bosilca: "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/2/13 8:22 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Our macros for the OMPI-level free list had one extra argument, a possible
</span><br>
<span class="quotelev1">&gt; return value to signal that the operation of retrieving the element from the
</span><br>
<span class="quotelev1">&gt; free list failed. However in this case the returned pointer was set to NULL as
</span><br>
<span class="quotelev1">&gt; well, so the error code was redundant. Moreover, this was a continuous source
</span><br>
<span class="quotelev1">&gt; of warnings when the picky mode was on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached parch remove the rc argument from the OMPI_FREE_LIST_GET and
</span><br>
<span class="quotelev1">&gt; OMPI_FREE_LIST_WAIT macros, and change to check if the item is NULL instead of
</span><br>
<span class="quotelev1">&gt; using the return code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deadline: July 4th
</span><br>
<p>Works for me.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12521/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<li><strong>Previous message:</strong> <a href="12520.php">George Bosilca: "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>In reply to:</strong> <a href="12520.php">George Bosilca: "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
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
