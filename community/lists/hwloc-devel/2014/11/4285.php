<?
$subject_val = "Re: [hwloc-devel] upcoming feature removal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 09:10:32 2014" -->
<!-- isoreceived="20141104141032" -->
<!-- sent="Tue, 04 Nov 2014 15:10:29 +0100" -->
<!-- isosent="20141104141029" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming feature removal" -->
<!-- id="5458DE55.7070408_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4346916C-E515-40A7-A05E-70520ECFB969_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming feature removal<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 09:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4286.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Previous message:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>In reply to:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4286.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4286.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/11/2014 14:59, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; If you're going to separate them from the normal &quot;children&quot;, then how about naming them for what they are?  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - pe_children
</span><br>
<span class="quotelev1">&gt; - io_children
</span><br>
<span class="quotelev1">&gt; - misc_children
</span><br>
<p>OK but what does &quot;pe&quot; stand for? did you mean &quot;pu&quot; to match our PU objects?
<br>
Unfortunately, children are more than a single field in struct hwloc_obj :)
<br>
<p>&nbsp;&nbsp;unsigned arity;                       /**&lt; \brief Number of children */
<br>
&nbsp;&nbsp;struct hwloc_obj **children;          /**&lt; \brief Children, \c children[0 .. arity -1] */
<br>
&nbsp;&nbsp;struct hwloc_obj *first_child;        /**&lt; \brief First child */
<br>
&nbsp;&nbsp;struct hwloc_obj *last_child;         /**&lt; \brief Last child */
<br>
<p>I'll review the code to see if we can easily remove first/last_child or so.
<br>
<p><p><span class="quotelev2">&gt;&gt; * stop having 4 cpusets and 3 nodesets per object and just have 1 cpuset
</span><br>
<span class="quotelev2">&gt;&gt; and 1 nodeset depending on topology flags (only allowed, or only online,
</span><br>
<span class="quotelev2">&gt;&gt; etc). possibly with ways to switch between modes at runtime
</span><br>
<span class="quotelev1">&gt; No, please don't do this.  For big code bases like Open MPI, we don't know how the different consumers of hwloc will use the information.  So we get all of the topo information once, at the beginning of time.  Various different plugins and different parts of OMPI may want different information, and it would kinda defeat the point if they had to re-scan the topo because we didn't initially get the information that they needed.
</span><br>
<p>Ah good point !
<br>
<p><p><span class="quotelev2">&gt;&gt; * stop having a CACHE type + data/instruction/unified + depth, and just
</span><br>
<span class="quotelev2">&gt;&gt; have one type for each of them, such as HWLOC_OBJ_CACHE_L1d. the
</span><br>
<span class="quotelev2">&gt;&gt; advantage is that you can switch (type) without special-casing the CACHE
</span><br>
<span class="quotelev2">&gt;&gt; subtypes. One drawback is that there are many subtypes in existing
</span><br>
<span class="quotelev2">&gt;&gt; machines (at least L1[id], L2[idu], L3[idu], L4u).
</span><br>
<span class="quotelev1">&gt; Samuel has a good point about &quot;where will it end?&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I also agree that it's pretty annoying (and Ralph has [rightfully] complained a bunch) to have to special-case the check for the various caches -- it has caused a bunch of code churn in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about making enums for L1 through L5?  That's more than any architecture has today, and gives us a bit of future-proofing.
</span><br>
<p>So on current x86 machines, we would have this?
<br>
* one level with L1 object with cache attribute &quot;Data&quot;
<br>
* one level with L1 object with cache attribute &quot;Instruction&quot;
<br>
* one level with L2 object with cache attribute &quot;Unified&quot;
<br>
* one level with L3 object with cache attribute &quot;Unified&quot;
<br>
<p>Fortunately, instruction caches are disabled by default (unless somebody
<br>
wants to change that?) so most application will see a single L1 level.
<br>
<p>And Group remains unchanged (single type value with a depth attribute)
<br>
since most people will ignore them anyway as Samuel said.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4286.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Previous message:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>In reply to:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4286.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4286.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
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
