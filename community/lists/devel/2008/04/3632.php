<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 15:45:29 2008" -->
<!-- isoreceived="20080402194529" -->
<!-- sent="Wed, 2 Apr 2008 15:45:20 -0400" -->
<!-- isosent="20080402194520" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="0F8D382E-8A35-499F-967D-79893017DBE9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080402175822.GB17939_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 15:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<li><strong>Previous message:</strong> <a href="3631.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>In reply to:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2008, at 1:58 PM, Gleb Natapov wrote:
<br>
<span class="quotelev2">&gt;&gt; No, I think it would be fine to only send the output after
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_in|exclude is applied.  Perhaps we need an MCA param to
</span><br>
<span class="quotelev2">&gt;&gt; say &quot;always send everything&quot; in the case that someone applies a non-
</span><br>
<span class="quotelev2">&gt;&gt; homogeneous if_in|exclude set of values...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When is carto stuff applied?  Is that what you're really asking  
</span><br>
<span class="quotelev2">&gt;&gt; about?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; There is no difference between carto and include/exclude.
</span><br>
<p>You mean in terms of when they are applied?
<br>
<p><span class="quotelev1">&gt; I can specify
</span><br>
<span class="quotelev1">&gt; different openib_if_include values for different procs on the same  
</span><br>
<span class="quotelev1">&gt; host.
</span><br>
<p><p>I know you *can*, but it is certainly uncommon.  The common case is  
<br>
that it's the same for all procs on all hosts.  I guess there's a few  
<br>
cases:
<br>
<p>1. homogeneous include/exclude, no carto: send all in node info; no  
<br>
proc info
<br>
2. homogeneous include/exclude, carto is used: send all ports in node  
<br>
info; send index in proc info for which node info port index it will use
<br>
3. heterogeneous include/exclude, no cart: need user to tell us that  
<br>
this situation exists (e.g., use another MCA param), but then is same  
<br>
as #2
<br>
4. heterogeneous include/exclude, cart is used, same as #3
<br>
<p>Right?
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
<li><strong>Next message:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<li><strong>Previous message:</strong> <a href="3631.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>In reply to:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
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
