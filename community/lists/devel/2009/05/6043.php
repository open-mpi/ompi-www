<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 15:14:41 2009" -->
<!-- isoreceived="20090514191441" -->
<!-- sent="Thu, 14 May 2009 15:14:26 -0400" -->
<!-- isosent="20090514191426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="2BDCA995-E595-451E-BF9B-99846A1483F9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A0C6BDD.9000306_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-05-14 15:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6044.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6042.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6041.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6044.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6044.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I just did a build with both the SF.net compilers and then a 2nd  
<br>
build with the native leopard compilers of openmpi-1.3.3a1r21223.
<br>
<p>The Leopard build failed deep in VT, though, with some obscure C++ STL- 
<br>
looking error -- but OMPI itself built fine.  You can compile OMPI  
<br>
without VT with --enable-contrib-no-build=vt.
<br>
<p>I'll send a note to the VT guys.
<br>
<p><p><p>On May 14, 2009, at 3:07 PM, Bryan Lally wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Did you mean to attach something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yeah, oops.  I can't count how many times I've done that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, I can configure/build on Leopard just fine...?  I'm using the
</span><br>
<span class="quotelev2">&gt; &gt; compilers from hpc.sf.net, though.  I haven't tried recently with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; native Leopard compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was with the native Leopard compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         - Bryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bryan Lally, lally_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 505.667.9954
</span><br>
<span class="quotelev1">&gt; CCS-2
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Los Alamos, New Mexico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6044.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6042.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6041.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6044.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6044.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
