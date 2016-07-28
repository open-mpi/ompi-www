<?
$subject_val = "[OMPI devel] Fwd:  gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 17:45:19 2008" -->
<!-- isoreceived="20080919214519" -->
<!-- sent="Fri, 19 Sep 2008 17:45:02 -0400" -->
<!-- isosent="20080919214502" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  gdb libmpi.dylib on Leopard" -->
<!-- id="BCFC2EBB-B2A6-4F45-A27E-20C00AFBFA78_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D41BE6.6040201_at_pogma.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  gdb libmpi.dylib on Leopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 17:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4673.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4671.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Re-sending to the list because it probably bounced because Peter  
<br>
hadn't been able to subscribe yet...
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Peter O'Gorman&quot; &lt;peter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: September 19, 2008 5:38:46 PM EDT
</span><br>
<span class="quotelev1">&gt; To: Ralf Wildenhues &lt;Ralf.Wildenhues_at_[hidden]&gt;, Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;, devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] gdb libmpi.dylib on Leopard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I asked Peter O'Gorman about this issue, and he said
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | I believe that running dsymutil on the generated lib would then  
</span><br>
<span class="quotelev2">&gt;&gt; create a
</span><br>
<span class="quotelev2">&gt;&gt; | libfoo.dSYM in the .libs directory conatining all the necessary
</span><br>
<span class="quotelev2">&gt;&gt; | debugging information, which could be used for debugging the  
</span><br>
<span class="quotelev2">&gt;&gt; library in
</span><br>
<span class="quotelev2">&gt;&gt; | the build tree (gdb should find it sitting there next to the  
</span><br>
<span class="quotelev2">&gt;&gt; original
</span><br>
<span class="quotelev2">&gt;&gt; | library and use the debug information  in the .dSYM).  
</span><br>
<span class="quotelev2">&gt;&gt; Libtool-2.2.6 does
</span><br>
<span class="quotelev2">&gt;&gt; | run dsymutil and create the .dSYM though...
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; | There should be a libmpi.dylib in a .libs directory and a
</span><br>
<span class="quotelev2">&gt;&gt; | libmpi.dylib.dSYM directory next to it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, he said that it could help if you reported a bug at
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://bugreporter.apple.com">http://bugreporter.apple.com</a>&gt;, under the notion that the
</span><br>
<span class="quotelev2">&gt;&gt; more people file bugs with them, the more they will understand
</span><br>
<span class="quotelev2">&gt;&gt; what problems users have with the dsymutils issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to clarify - I'd like an ld option similar to GNU ld's
</span><br>
<span class="quotelev1">&gt; --whole-archive --no-whole-archive to allow loading of all memebers of
</span><br>
<span class="quotelev1">&gt; selective archives. If this option were available libtool would not  
</span><br>
<span class="quotelev1">&gt; need
</span><br>
<span class="quotelev1">&gt; to unpack all the members of convenience libraries (and later delete
</span><br>
<span class="quotelev1">&gt; them) and there would be no need for libtool to run dsymutil. So if  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; are going to file a bug with apple, file one requesting that feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this continues to be a problem, I might consider not deleting the
</span><br>
<span class="quotelev1">&gt; unpacked object files on darwin, on the theory that disk is cheap, but
</span><br>
<span class="quotelev1">&gt; I'd really rather not waste everyones disk space with multiple  
</span><br>
<span class="quotelev1">&gt; copies of
</span><br>
<span class="quotelev1">&gt; the same object files like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, I attempted to subscribe to the list to post this, but have not
</span><br>
<span class="quotelev1">&gt; yet gotten a confirmation, you may have to approve this post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Peter O'Gorman
</span><br>
<span class="quotelev1">&gt; <a href="http://pogma.com">http://pogma.com</a>
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
<li><strong>Next message:</strong> <a href="4673.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4671.php">Jeff Squyres: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
