<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 10:43:24 2013" -->
<!-- isoreceived="20131219154324" -->
<!-- sent="Thu, 19 Dec 2013 07:43:09 -0800" -->
<!-- isosent="20131219154309" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default" -->
<!-- id="81E2A729-FF03-4512-93A4-DAF358DDE254_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CED8501C.16702%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 10:43:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2013, at 6:27 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 12/19/13 6:59 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Finally, we're giving a warning saying:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev2">&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev2">&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For both #1 and #3, I wonder if we shouldn't be warning if no binding was
</span><br>
<span class="quotelev2">&gt;&gt; explicitly stated (i.e., we're just using the defaults).  Specifically,
</span><br>
<span class="quotelev2">&gt;&gt; if no binding is specified:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - if we oversubscribe, (possibly) warn about the performance loss of
</span><br>
<span class="quotelev2">&gt;&gt; oversubscription, and don't bind
</span><br>
<span class="quotelev2">&gt;&gt; - don't warn about lack of memory binding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a couple machines where memory binding is failing for one reason
</span><br>
<span class="quotelev1">&gt; or another.  If we're binding by default, we really shouldn't throw error
</span><br>
<span class="quotelev1">&gt; messages about not being able to bind memory.  It's REALLY annoying.
</span><br>
<p>Just to help me understand a bit better - you are saying that the node supports process binding, but not memory binding? I don't see how the error appears otherwise, but want to ensure I understand the code path.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13484.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
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
