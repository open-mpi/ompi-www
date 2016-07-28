<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 20:41:20 2008" -->
<!-- isoreceived="20080403004120" -->
<!-- sent="Wed, 2 Apr 2008 20:41:14 -0400" -->
<!-- isosent="20080403004114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="88E0A434-5F20-43FF-A900-FEAA27B49428_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080402201252.GC17939_at_minantech.com" -->
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
<strong>Date:</strong> 2008-04-02 20:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3639.php">Jeff Squyres: "[OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>In reply to:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2008, at 4:12 PM, Gleb Natapov wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; I can specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different openib_if_include values for different procs on the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know you *can*, but it is certainly uncommon.  The common case is
</span><br>
<span class="quotelev1">&gt; Uncommon - yes, but do you what to make it unsupported?
</span><br>
<p>No, there's no need for that.
<br>
<p><span class="quotelev2">&gt;&gt; that it's the same for all procs on all hosts.  I guess there's a few
</span><br>
<span class="quotelev2">&gt;&gt; cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. homogeneous include/exclude, no carto: send all in node info; no
</span><br>
<span class="quotelev2">&gt;&gt; proc info
</span><br>
<span class="quotelev2">&gt;&gt; 2. homogeneous include/exclude, carto is used: send all ports in node
</span><br>
<span class="quotelev2">&gt;&gt; info; send index in proc info for which node info port index it  
</span><br>
<span class="quotelev2">&gt;&gt; will use
</span><br>
<span class="quotelev1">&gt; This may actually increase modex size. Think about two procs using two
</span><br>
<span class="quotelev1">&gt; different hcas. We'll send all the data we send today + indexes.
</span><br>
<p>It'll increase it compared to the optimization that we're about to  
<br>
make.  But it will certainly be a large decrease compared to what  
<br>
we're doing today (see the spreadsheet that I sent last week).
<br>
<p>Indeed, we can even put in the optimization that if there's only one  
<br>
process on a host, it can only publish the ports that it will use (and  
<br>
therefore there's no need for the proc data).
<br>
<p><span class="quotelev2">&gt;&gt; 3. heterogeneous include/exclude, no cart: need user to tell us that
</span><br>
<span class="quotelev2">&gt;&gt; this situation exists (e.g., use another MCA param), but then is same
</span><br>
<span class="quotelev2">&gt;&gt; as #2
</span><br>
<span class="quotelev2">&gt;&gt; 4. heterogeneous include/exclude, cart is used, same as #3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Looks like it. FWIW I don't like the idea to code all those special
</span><br>
<span class="quotelev1">&gt; cases. The way it works now I can be pretty sure that any crazy setup
</span><br>
<span class="quotelev1">&gt; I'll come up with will work.
</span><br>
<p>And so it will with the new scheme.  The only place it won't work is  
<br>
if the user specifies a heterogeneous include/exclude (i.e., we'll  
<br>
require that the user tells us when they do that), which nobody does.
<br>
<p>I guess I don't see the problem...?
<br>
<p><span class="quotelev1">&gt; By the way how much data are moved during modex stage? What if modex
</span><br>
<span class="quotelev1">&gt; will use compression?
</span><br>
<p><p>The spreadsheet I listed was just the openib part of the modex, and it  
<br>
was fairly hefty.  I have no idea how well (or not) it would compress.
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
<li><strong>Next message:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3639.php">Jeff Squyres: "[OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>In reply to:</strong> <a href="3634.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
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
