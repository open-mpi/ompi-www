<?
$subject_val = "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 11:13:02 2010" -->
<!-- isoreceived="20100111161302" -->
<!-- sent="Mon, 11 Jan 2010 17:12:56 +0100" -->
<!-- isosent="20100111161256" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes" -->
<!-- id="20100111161256.GX4963_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="576E0107-4EBD-437C-BF9C-47A3E9A01DC6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 11:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0584.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>Previous message:</strong> <a href="0582.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>In reply to:</strong> <a href="0581.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0587.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0587.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 11 Jan 2010 10:12:00 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Been mulling this for a few days; here's my thoughts...
</span><br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; Are you thinking of adding bandwidth attributes?
</span><br>
<p>When the information is available through some way (be it by hand), yes.
<br>
<p><span class="quotelev1">&gt; Or are you thinking of adding weighting between objects in the hierarchy?  Or ...?
</span><br>
<p>I'd tend to think that this would be an upper layer that applications
<br>
would compute themselves, according to their needs.
<br>
<p><span class="quotelev1">&gt; More generally -- some objects can be bound to, some cannot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does this kind of thing extend to, say, co-processors (such as accelerators, FPGAs, GPGPUs, etc.)?
</span><br>
<p>I once thought about adding gpuset, maybe, but since the kinds of
<br>
objects will probably vary a lot, maybe it's better to not try to be
<br>
smart and let layers above handle it, only possibly provide for each
<br>
kind the OS number (e.g. CUDA device number).
<br>
<p><span class="quotelev2">&gt; &gt; - This also means there can't be &quot;global&quot; cpusets like the recently
</span><br>
<span class="quotelev2">&gt; &gt;   added hwloc_topology_get_{topology,complete,online,allowed}_cpuset
</span><br>
<span class="quotelev2">&gt; &gt;   functions (not released yet). These can just be moved to the hwloc_obj
</span><br>
<span class="quotelev2">&gt; &gt;   structure, thus being available for each object, which could actually be
</span><br>
<span class="quotelev2">&gt; &gt;   helpful btw.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I follow -- you say that we can't have &quot;global&quot; cpusets anymore (which I grok), but then you say that we can move them to the hwloc_obj struct.  Isn't that the top-level struct?
</span><br>
<p>No, the hwloc_obj struct is the type of the nodes of the tree.  A cpuset
<br>
makes sense at that place, and possibly also upper in the tree, until
<br>
you get up to a machine level, the last level where cpuset != NULL.
<br>
After that you have several machines and cpusets don't make sense any
<br>
more.
<br>
<p><span class="quotelev2">&gt; &gt; - Helpers that take cpuset parameters of course don't make sense any more
</span><br>
<span class="quotelev2">&gt; &gt;   when applied to networked topologies.  But it probably doesn't make
</span><br>
<span class="quotelev2">&gt; &gt;   sense for the caller to call them in the first place, and the caller
</span><br>
<span class="quotelev2">&gt; &gt;   knows it since it's the caller that has first called the combining
</span><br>
<span class="quotelev2">&gt; &gt;   operation or loaded an XML file resulting from it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.  Perhaps we should have a general query function that can return whether a given object can be bound to or not (e.g., for generic tree-traversal kinds of functionality)...?
</span><br>
<p>Well, to be &quot;bound to&quot; here would mean for a thread, i.e. to be bound
<br>
to a CPU set. So testing for cpuset != NULL should be enough.  As said
<br>
above, I'm not sure we necessarily want to extend that notion since
<br>
the various kinds of &quot;binding something to&quot; becomes numerous. In CUDA
<br>
for instance, it doesn't make sense to bind something to some GPU,
<br>
you rather need a GPU number on which you want to start a particular
<br>
computation kernel.
<br>
<p><span class="quotelev1">&gt; 1. How about defining a small set of generic operations based on what you described above?  E.g.:
</span><br>
<p>Sure
<br>
<p><span class="quotelev1">&gt; - copy, remove, insert
</span><br>
<p>Agreed, and can be done later, I think keeping that in mind is
<br>
sufficient for now.
<br>
<p><span class="quotelev2">&gt; &gt; The plan I see is that for 1.0 we only check that catenating .XML files
</span><br>
<span class="quotelev2">&gt; &gt; by hand to build misc levels representing network layers does indeed
</span><br>
<span class="quotelev2">&gt; &gt; work, which should mean that actual combining functions etc. should be
</span><br>
<span class="quotelev2">&gt; &gt; possible to implement later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I'd prefer to see the combining/etc. functions ASAP -- we could definitely use such things in Open MPI...
</span><br>
<p>Mmm, doing it in the API is not so trivial, for 1.0 I'd rather just
<br>
provide a small xml combiner (just a matter of tail/head/cat), which may
<br>
be enough for a start. But if you need it at the API level, we can add
<br>
it to the 1.0 milestone.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0584.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>Previous message:</strong> <a href="0582.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>In reply to:</strong> <a href="0581.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0587.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0587.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0semanticfixes"</a>
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
