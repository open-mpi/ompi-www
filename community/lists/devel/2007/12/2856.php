<?
$subject_val = "Re: [OMPI devel] New BTL parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 15:20:30 2007" -->
<!-- isoreceived="20071214202030" -->
<!-- sent="Fri, 14 Dec 2007 22:20:25 +0200" -->
<!-- isosent="20071214202025" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New BTL parameter" -->
<!-- id="20071214202025.GB1978_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 15:20:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2857.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Gleb Natapov: "[OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If there is no objection I will commit this to the trunk next week.
<br>
<p>On Sun, Dec 09, 2007 at 05:34:30PM +0200, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Currently BTL has parameter btl_min_send_size that is no longer used.
</span><br>
<span class="quotelev1">&gt; I want to change it to be btl_rndv_eager_limit. This new parameter will
</span><br>
<span class="quotelev1">&gt; determine a size of a first fragment of rendezvous protocol. Now we use
</span><br>
<span class="quotelev1">&gt; btl_eager_limit to set its size. btl_rndv_eager_limit will have to be
</span><br>
<span class="quotelev1">&gt; smaller or equal to btl_eager_limit. By default it will be equal to
</span><br>
<span class="quotelev1">&gt; btl_eager_limit so no behavior change will be observed if default is
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2857.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Gleb Natapov: "[OMPI devel] New BTL parameter"</a>
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
