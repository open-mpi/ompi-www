<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 09:27:40 2013" -->
<!-- isoreceived="20131219142740" -->
<!-- sent="Thu, 19 Dec 2013 14:27:28 +0000" -->
<!-- isosent="20131219142728" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default" -->
<!-- id="CED8501C.16702%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="97635838-A427-42B0-820D-327517F962D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 09:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13483.php">Andreas Schäfer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>Previous message:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/19/13 6:59 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;3. Finally, we're giving a warning saying:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt;supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt;support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For both #1 and #3, I wonder if we shouldn't be warning if no binding was
</span><br>
<span class="quotelev1">&gt;explicitly stated (i.e., we're just using the defaults).  Specifically,
</span><br>
<span class="quotelev1">&gt;if no binding is specified:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- if we oversubscribe, (possibly) warn about the performance loss of
</span><br>
<span class="quotelev1">&gt;oversubscription, and don't bind
</span><br>
<span class="quotelev1">&gt;- don't warn about lack of memory binding
</span><br>
<p>We have a couple machines where memory binding is failing for one reason
<br>
or another.  If we're binding by default, we really shouldn't throw error
<br>
messages about not being able to bind memory.  It's REALLY annoying.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13483.php">Andreas Schäfer: "[OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>Previous message:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
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
