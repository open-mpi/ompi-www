<?
$subject_val = "Re: [OMPI devel] New BTL parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 15:18:21 2007" -->
<!-- isoreceived="20071212201821" -->
<!-- sent="Wed, 12 Dec 2007 22:18:14 +0200" -->
<!-- isosent="20071212201814" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New BTL parameter" -->
<!-- id="20071212201814.GB26644_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="41EB2BA0-CC18-4434-9D23-3485F5FC5D00_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New BTL parameter<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 15:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2822.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>In reply to:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 12, 2007 at 02:03:02PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 9, 2007, at 10:34 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Currently BTL has parameter btl_min_send_size that is no longer used.
</span><br>
<span class="quotelev2">&gt; &gt; I want to change it to be btl_rndv_eager_limit. This new parameter  
</span><br>
<span class="quotelev2">&gt; &gt; will
</span><br>
<span class="quotelev2">&gt; &gt; determine a size of a first fragment of rendezvous protocol. Now we  
</span><br>
<span class="quotelev2">&gt; &gt; use
</span><br>
<span class="quotelev2">&gt; &gt; btl_eager_limit to set its size. btl_rndv_eager_limit will have to be
</span><br>
<span class="quotelev2">&gt; &gt; smaller or equal to btl_eager_limit. By default it will be equal to
</span><br>
<span class="quotelev2">&gt; &gt; btl_eager_limit so no behavior change will be observed if default is
</span><br>
<span class="quotelev2">&gt; &gt; used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you describe why it would be better to have the value less than  
</span><br>
<span class="quotelev1">&gt; the eager limit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
It is just one more knob to tune OB1 algorithm. I sometimes don't want
<br>
to send any data by copy in/out at all. This is not possible right now.
<br>
With this new param I will be able to control this.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2822.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>In reply to:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
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
