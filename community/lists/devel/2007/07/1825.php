<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 07:38:48 2007" -->
<!-- isoreceived="20070710113848" -->
<!-- sent="Tue, 10 Jul 2007 13:38:43 +0200" -->
<!-- isosent="20070710113843" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="20070710113843.GC23562_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="67483DC4-4670-4089-976F-3EA0457D38AC_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 07:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1826.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Tue, Jul 10, 2007 at 01:28:40PM CEST:
<br>
<span class="quotelev1">&gt; On Jul 10, 2007, at 2:42 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. The most obvious one (to me, at least) is to require that  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; people provide
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;--with-xx&quot; when they build the system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll throw in another one for good measure: If --with-xx is given,
</span><br>
<span class="quotelev2">&gt; &gt; build with the component.  If --without-xx is given, disable it.
</span><br>
<span class="quotelev2">&gt; &gt; If neither is given, do as you currently do: enable it if you find
</span><br>
<span class="quotelev2">&gt; &gt; suitable libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, we have this already:
</span><br>
[...]
<br>
<p>Ah good, I must confess I wasn't aware of this existing functionality
<br>
(I don't need it myself).  Thanks.
<br>
<p><span class="quotelev2">&gt; &gt; In case the number of components gets too large, have a switch to
</span><br>
<span class="quotelev2">&gt; &gt; turn off automatic discovery even in the nonpresence of --with* flags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you mean the equivalent of the --enable-mca-no-build switch, or  
</span><br>
<span class="quotelev1">&gt; disable *all* automatic discovery?
</span><br>
<p>I meant: disable all automatic discovery.  But you guys are in a much
<br>
better position to decide which way is more useful.  All I wanted is for
<br>
you to be aware of existing possibilities (which you are, but that
<br>
wasn't obvious to me).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1826.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1824.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1829.php">Tim Prins: "Re: [OMPI devel] Multi-environment builds"</a>
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
