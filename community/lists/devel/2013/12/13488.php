<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 11:32:48 2013" -->
<!-- isoreceived="20131219163248" -->
<!-- sent="Thu, 19 Dec 2013 08:32:32 -0800" -->
<!-- isosent="20131219163232" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default" -->
<!-- id="1D40BFF8-6FF1-4D70-ADF9-5D2BBBA71FAF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CED8649E.1674A%bwbarre_at_sandia.gov" -->
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
<strong>Date:</strong> 2013-12-19 11:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13489.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Previous message:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13491.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13491.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I think I have these things fixed in r29978 on the trunk - please give it a spin and confirm so we can move it to 1.7.4
<br>
<p><p>On Dec 19, 2013, at 7:54 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 12/19/13 8:43 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2013, at 6:27 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/19/13 6:59 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. Finally, we're giving a warning saying:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For both #1 and #3, I wonder if we shouldn't be warning if no binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; explicitly stated (i.e., we're just using the defaults).  Specifically,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if no binding is specified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - if we oversubscribe, (possibly) warn about the performance loss of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscription, and don't bind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - don't warn about lack of memory binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a couple machines where memory binding is failing for one reason
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or another.  If we're binding by default, we really shouldn't throw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages about not being able to bind memory.  It's REALLY annoying.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to help me understand a bit better - you are saying that the node
</span><br>
<span class="quotelev2">&gt;&gt; supports process binding, but not memory binding? I don't see how the
</span><br>
<span class="quotelev2">&gt;&gt; error appears otherwise, but want to ensure I understand the code path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That appears to be the case, yes.
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13489.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: remove opal progress recursion depth counter"</a>
<li><strong>Previous message:</strong> <a href="13487.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13486.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13491.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13491.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
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
