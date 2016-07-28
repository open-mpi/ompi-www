<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 16:13:02 2008" -->
<!-- isoreceived="20080402201302" -->
<!-- sent="Wed, 2 Apr 2008 23:12:52 +0300" -->
<!-- isosent="20080402201252" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="20080402201252.GC17939_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0F8D382E-8A35-499F-967D-79893017DBE9_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 16:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3635.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<li><strong>In reply to:</strong> <a href="3632.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3640.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3640.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 02, 2008 at 03:45:20PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 2, 2008, at 1:58 PM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No, I think it would be fine to only send the output after
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_openib_if_in|exclude is applied.  Perhaps we need an MCA param to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; say &quot;always send everything&quot; in the case that someone applies a non-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; homogeneous if_in|exclude set of values...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When is carto stuff applied?  Is that what you're really asking  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is no difference between carto and include/exclude.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean in terms of when they are applied?
</span><br>
I mean that there are multiple ways to use different hca/port in
<br>
different proc on the same host.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can specify
</span><br>
<span class="quotelev2">&gt; &gt; different openib_if_include values for different procs on the same  
</span><br>
<span class="quotelev2">&gt; &gt; host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know you *can*, but it is certainly uncommon.  The common case is  
</span><br>
Uncommon - yes, but do you what to make it unsupported?
<br>
<p><span class="quotelev1">&gt; that it's the same for all procs on all hosts.  I guess there's a few  
</span><br>
<span class="quotelev1">&gt; cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. homogeneous include/exclude, no carto: send all in node info; no  
</span><br>
<span class="quotelev1">&gt; proc info
</span><br>
<span class="quotelev1">&gt; 2. homogeneous include/exclude, carto is used: send all ports in node  
</span><br>
<span class="quotelev1">&gt; info; send index in proc info for which node info port index it will use
</span><br>
This may actually increase modex size. Think about two procs using two
<br>
different hcas. We'll send all the data we send today + indexes.
<br>
<p><span class="quotelev1">&gt; 3. heterogeneous include/exclude, no cart: need user to tell us that  
</span><br>
<span class="quotelev1">&gt; this situation exists (e.g., use another MCA param), but then is same  
</span><br>
<span class="quotelev1">&gt; as #2
</span><br>
<span class="quotelev1">&gt; 4. heterogeneous include/exclude, cart is used, same as #3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Looks like it. FWIW I don't like the idea to code all those special
<br>
cases. The way it works now I can be pretty sure that any crazy setup
<br>
I'll come up with will work.
<br>
<p>By the way how much data are moved during modex stage? What if modex
<br>
will use compression?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3635.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Previous message:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<li><strong>In reply to:</strong> <a href="3632.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3640.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3640.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
