<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 12:08:55 2008" -->
<!-- isoreceived="20080402160855" -->
<!-- sent="Wed, 2 Apr 2008 12:08:47 -0400" -->
<!-- isosent="20080402160847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="CD7CED22-CBCB-4731-9857-CBCA312B2F28_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080402151311.GA17939_at_minantech.com" -->
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
<strong>Date:</strong> 2008-04-02 12:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3626.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2008, at 11:13 AM, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Apr 02, 2008 at 10:35:03AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If we use carto to limit hcas/ports are used on a given host on a  
</span><br>
<span class="quotelev2">&gt;&gt; per-
</span><br>
<span class="quotelev2">&gt;&gt; proc basis, then we can include some proc_send data to say &quot;this proc
</span><br>
<span class="quotelev2">&gt;&gt; only uses indexes X,Y,Z from the node data&quot;.  The indexes can be
</span><br>
<span class="quotelev2">&gt;&gt; either uint8_ts, or maybe even a variable length bitmap.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So you propose that each proc will send info (using node_send())  
</span><br>
<span class="quotelev1">&gt; about every
</span><br>
<span class="quotelev1">&gt; hca/proc on a host even about those that are excluded from use by  
</span><br>
<span class="quotelev1">&gt; the proc
</span><br>
<span class="quotelev1">&gt; just in case? And then each proc will have to send additional info  
</span><br>
<span class="quotelev1">&gt; (using
</span><br>
<span class="quotelev1">&gt; proc_send() this time) to indicate what hcas/ports it is actually  
</span><br>
<span class="quotelev1">&gt; using?
</span><br>
<p><p>No, I think it would be fine to only send the output after  
<br>
btl_openib_if_in|exclude is applied.  Perhaps we need an MCA param to  
<br>
say &quot;always send everything&quot; in the case that someone applies a non- 
<br>
homogeneous if_in|exclude set of values...?
<br>
<p>When is carto stuff applied?  Is that what you're really asking about?
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
<li><strong>Next message:</strong> <a href="3626.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3619.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3629.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
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
