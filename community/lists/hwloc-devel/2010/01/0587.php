<?
$subject_val = "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 14:21:58 2010" -->
<!-- isoreceived="20100111192158" -->
<!-- sent="Mon, 11 Jan 2010 14:21:53 -0500" -->
<!-- isosent="20100111192153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes" -->
<!-- id="1C473D8E-B950-4F46-B0FF-BF55C09479A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100111161256.GX4963_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 14:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>In reply to:</strong> <a href="0583.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0588.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0588.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2010, at 11:12 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Are you thinking of adding bandwidth attributes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the information is available through some way (be it by hand), yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Or are you thinking of adding weighting between objects in the hierarchy?  Or ...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd tend to think that this would be an upper layer that applications
</span><br>
<span class="quotelev1">&gt; would compute themselves, according to their needs.
</span><br>
<p>FWIW, some networks provide this kind of information through an API, such as verbs.  But it's not a straight &quot;bandwidth&quot; information; verbs provides lanes and widths.  The point: different networks may report network-specific information differently.
<br>
<p>More below.
<br>
<p><span class="quotelev2">&gt; &gt; More generally -- some objects can be bound to, some cannot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How does this kind of thing extend to, say, co-processors (such as accelerators, FPGAs, GPGPUs, etc.)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I once thought about adding gpuset, maybe, but since the kinds of
</span><br>
<span class="quotelev1">&gt; objects will probably vary a lot, maybe it's better to not try to be
</span><br>
<span class="quotelev1">&gt; smart and let layers above handle it, only possibly provide for each
</span><br>
<span class="quotelev1">&gt; kind the OS number (e.g. CUDA device number).
</span><br>
<p>Maybe it would be better to add a (void*) on to the object to allow arbitrary 3rd parties to cache information off any given hwloc object.  This would allow the upper-layer to assign specific context (such as additional device information) to any given hwloc object that could even persist across tree copies, etc.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; - Helpers that take cpuset parameters of course don't make sense any more
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   when applied to networked topologies.  But it probably doesn't make
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   sense for the caller to call them in the first place, and the caller
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   knows it since it's the caller that has first called the combining
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   operation or loaded an XML file resulting from it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Agreed.  Perhaps we should have a general query function that can return whether a given object can be bound to or not (e.g., for generic tree-traversal kinds of functionality)...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, to be &quot;bound to&quot; here would mean for a thread, i.e. to be bound
</span><br>
<span class="quotelev1">&gt; to a CPU set. So testing for cpuset != NULL should be enough.  
</span><br>
<p>Ok, fair enough.  We should document that assumption somewhere.
<br>
<p><span class="quotelev1">&gt; As said
</span><br>
<span class="quotelev1">&gt; above, I'm not sure we necessarily want to extend that notion since
</span><br>
<span class="quotelev1">&gt; the various kinds of &quot;binding something to&quot; becomes numerous.
</span><br>
<p>Yep, agree.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; The plan I see is that for 1.0 we only check that catenating .XML files
</span><br>
<span class="quotelev3">&gt; &gt; &gt; by hand to build misc levels representing network layers does indeed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; work, which should mean that actual combining functions etc. should be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; possible to implement later.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, I'd prefer to see the combining/etc. functions ASAP -- we could definitely use such things in Open MPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, doing it in the API is not so trivial, for 1.0 I'd rather just
</span><br>
<span class="quotelev1">&gt; provide a small xml combiner (just a matter of tail/head/cat), which may
</span><br>
<span class="quotelev1">&gt; be enough for a start. But if you need it at the API level, we can add
</span><br>
<span class="quotelev1">&gt; it to the 1.0 milestone.
</span><br>
<p>K.  &quot;He who implements, wins&quot;.  So perhaps I can volunteer to implement this stuff.  :-)
<br>
<p>I'm curious -- what's the definition of cat'ing 2 XML files together?  Does the 2nd become a subtree of the first?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>In reply to:</strong> <a href="0583.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0588.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0588.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
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
