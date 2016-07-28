<?
$subject_val = "Re: [OMPI devel] New BTL parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 14:03:09 2007" -->
<!-- isoreceived="20071212190309" -->
<!-- sent="Wed, 12 Dec 2007 14:03:02 -0500" -->
<!-- isosent="20071212190302" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New BTL parameter" -->
<!-- id="41EB2BA0-CC18-4434-9D23-3485F5FC5D00_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071209153430.GB3360_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 14:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2819.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Previous message:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Gleb Natapov: "[OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2007, at 10:34 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;  Currently BTL has parameter btl_min_send_size that is no longer used.
</span><br>
<span class="quotelev1">&gt; I want to change it to be btl_rndv_eager_limit. This new parameter  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; determine a size of a first fragment of rendezvous protocol. Now we  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; btl_eager_limit to set its size. btl_rndv_eager_limit will have to be
</span><br>
<span class="quotelev1">&gt; smaller or equal to btl_eager_limit. By default it will be equal to
</span><br>
<span class="quotelev1">&gt; btl_eager_limit so no behavior change will be observed if default is
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<p><p>Can you describe why it would be better to have the value less than  
<br>
the eager limit?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2819.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Previous message:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Gleb Natapov: "[OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
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
