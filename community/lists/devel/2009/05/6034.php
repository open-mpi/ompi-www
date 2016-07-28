<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 14:27:29 2009" -->
<!-- isoreceived="20090514182729" -->
<!-- sent="Thu, 14 May 2009 14:26:36 -0400" -->
<!-- isosent="20090514182636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="1DFA45CC-DE32-40E3-A869-EE0CF8AA73B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0905141418270.14134_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 14:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6035.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6036.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6036.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2009, at 2:22 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev2">&gt; &gt; We actually took pains to *not* do that; we *used* to do that and  
</span><br>
<span class="quotelev1">&gt; explicitly
</span><br>
<span class="quotelev2">&gt; &gt; took it out.  :-\  IIRC, it had something to do with dlopen'ing  
</span><br>
<span class="quotelev1">&gt; libmpi.so...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I think that was something else.  Today, libopen-rte.la  
</span><br>
<span class="quotelev1">&gt; lists
</span><br>
<span class="quotelev1">&gt; libopen-pal.la as a dependency and libmpi.la lists libopen-rte.la.   
</span><br>
<span class="quotelev1">&gt; I had
</span><br>
<span class="quotelev1">&gt; removed the dependency of libmpi.la on libopen-pal.la because it was
</span><br>
<span class="quotelev1">&gt; causing libopen-pal.so to be listed twice by libtool, which was  
</span><br>
<span class="quotelev1">&gt; causing
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be a trivial fix to change the Makefiles to make libmpi.la to
</span><br>
<span class="quotelev1">&gt; depend on libopen-pal.la as well as libopen-rte.la.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Ah -- am I thinking of us removing libmpi (etc.) from the DSOs?
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
<li><strong>Next message:</strong> <a href="6035.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6033.php">Ralf Wildenhues: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6032.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6036.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6036.php">Brian W. Barrett: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
