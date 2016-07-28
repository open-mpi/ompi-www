<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 10:54:31 2013" -->
<!-- isoreceived="20131219155431" -->
<!-- sent="Thu, 19 Dec 2013 15:54:24 +0000" -->
<!-- isosent="20131219155424" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default" -->
<!-- id="CED8649E.1674A%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="81E2A729-FF03-4512-93A4-DAF358DDE254_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-12-19 10:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13490.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/19/13 8:43 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 19, 2013, at 6:27 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/19/13 6:59 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Finally, we're giving a warning saying:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For both #1 and #3, I wonder if we shouldn't be warning if no binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explicitly stated (i.e., we're just using the defaults).  Specifically,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if no binding is specified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if we oversubscribe, (possibly) warn about the performance loss of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscription, and don't bind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - don't warn about lack of memory binding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a couple machines where memory binding is failing for one reason
</span><br>
<span class="quotelev2">&gt;&gt; or another.  If we're binding by default, we really shouldn't throw
</span><br>
<span class="quotelev2">&gt;&gt;error
</span><br>
<span class="quotelev2">&gt;&gt; messages about not being able to bind memory.  It's REALLY annoying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just to help me understand a bit better - you are saying that the node
</span><br>
<span class="quotelev1">&gt;supports process binding, but not memory binding? I don't see how the
</span><br>
<span class="quotelev1">&gt;error appears otherwise, but want to ensure I understand the code path.
</span><br>
<p>That appears to be the case, yes.
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
<li><strong>Next message:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13485.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13490.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
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
