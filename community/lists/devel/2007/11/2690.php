<?
$subject_val = "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 14:37:21 2007" -->
<!-- isoreceived="20071130193721" -->
<!-- sent="Fri, 30 Nov 2007 14:37:02 -0500" -->
<!-- isosent="20071130193702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using MTT to test the newly added SCTP BTL" -->
<!-- id="F1E4EE28-4C44-4A5A-8359-D7F7A269E699_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="474EF33D.4000407_at_cs.ubc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using MTT to test the newly added SCTP BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 14:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2691.php">Gleb Natapov: "Re: [OMPI devel] tmp XRC branches"</a>
<li><strong>Previous message:</strong> <a href="2689.php">Jeff Squyres: "[OMPI devel] tmp XRC branches"</a>
<li><strong>In reply to:</strong> <a href="2683.php">Karol Mroz: "[OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2695.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="2695.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2007, at 12:13 PM, Karol Mroz wrote:
<br>
<p><span class="quotelev2">&gt;&gt; One solution might be to remove the .ompi_ignore but to only enable
</span><br>
<span class="quotelev2">&gt;&gt; the SCTP BTL when an explicit --with-sctp flag is given to configure
</span><br>
<span class="quotelev2">&gt;&gt; (or something similar).  You might want to run this by the [OMPI]
</span><br>
<span class="quotelev2">&gt;&gt; group first, but there's precedent for it, so I doubt anyone would
</span><br>
<span class="quotelev2">&gt;&gt; object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The situation at present is that the SCTP BTL only builds on FreeBSD,
</span><br>
<span class="quotelev1">&gt; OSX and Linux and only if the SCTP is found to be in a standard place.
</span><br>
<span class="quotelev1">&gt; On Linux, for instance, you need to have installed the lksctp  
</span><br>
<span class="quotelev1">&gt; package in
</span><br>
<span class="quotelev1">&gt; order for the SCTP BTL to build. We also have a --with-sctp configure
</span><br>
<span class="quotelev1">&gt; option where you can specify the SCTP path should it not be in a
</span><br>
<span class="quotelev1">&gt; standard location. If SCTP does not exist on the system, then the BTL
</span><br>
<span class="quotelev1">&gt; will not build and more importantly, will not break the build of the
</span><br>
<span class="quotelev1">&gt; overall system.
</span><br>
<p>Is this SCTL lksctp package installed by default on any Linux?  OS X?   
<br>
Solaris?
<br>
<p><span class="quotelev1">&gt; My question now, is it necessary for us to alter the above
</span><br>
<span class="quotelev1">&gt; behavior (as initially mentioned by Jeff), or is having the SCTP BTL
</span><br>
<span class="quotelev1">&gt; build iff SCTP is found sufficient?
</span><br>
<p><p>I think the only thing that matters is what the current default  
<br>
behavior is -- if the .ompi_ignore is removed, will it hose anyone  
<br>
unexpectedly?  I.e., if they build and run today and it works, then  
<br>
the .ompi_ignore is removed and you build and run... and it doesn't  
<br>
work.  That my only real concern.
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
<li><strong>Next message:</strong> <a href="2691.php">Gleb Natapov: "Re: [OMPI devel] tmp XRC branches"</a>
<li><strong>Previous message:</strong> <a href="2689.php">Jeff Squyres: "[OMPI devel] tmp XRC branches"</a>
<li><strong>In reply to:</strong> <a href="2683.php">Karol Mroz: "[OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2695.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
<li><strong>Reply:</strong> <a href="2695.php">Karol Mroz: "Re: [OMPI devel] Using MTT to test the newly added SCTP BTL"</a>
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
