<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 08:27:33 2009" -->
<!-- isoreceived="20091005122733" -->
<!-- sent="Mon, 5 Oct 2009 08:27:28 -0400" -->
<!-- isosent="20091005122728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="606C4930-365A-4193-92ED-009C3A704158_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="97DC73BC-CB14-496B-9814-5FDBDA67F377_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 08:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2009, at 8:21 AM, Fawzi Mohamed wrote:
<br>
<p><span class="quotelev1">&gt; Ok you are right that storing in the struct might be overkill, and  
</span><br>
<span class="quotelev1">&gt; about performance I fully agree, space not so much, especially if  
</span><br>
<span class="quotelev1">&gt; you really want to cache all the cpuset for all objects, this still  
</span><br>
<span class="quotelev1">&gt; grows quadratically, and allocates a lot of objects.
</span><br>
<p>I'm still not sure that I agree -- I still think we're just quibbling  
<br>
over a few bytes here.  It's commonplace to have 2GB RAM per core  
<br>
these days; that number certainly isn't going to go down -- it's  
<br>
likely that it's even going to go up.
<br>
<p>So yes, if every process running on every core has a cpuset, you  
<br>
multiply (for example) a 4k cpuset data structure times 1,000  
<br>
processors (cores): 4MB.  But consider that each of those 1,000  
<br>
processors will have 2GB or more of RAM.  That's 2 terabytes; who  
<br>
cares about 4MB when you have 2TB?  That's 6 orders of magnitude  
<br>
difference; put differently, 4MB is 0.0002 percent of 2TB.
<br>
<p>I agree that we shouldn't be wasteful, but the difference we're  
<br>
talking about here is in the noise.
<br>
<p><span class="quotelev1">&gt; That was the reason I was advocating having a function returning the  
</span><br>
<span class="quotelev1">&gt; cpuset from an object (sparse cpuset would also be a solution).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway the real issue here is the API I think.
</span><br>
<span class="quotelev1">&gt; I would say that the best solution is
</span><br>
<span class="quotelev1">&gt; - keep cpuset a structure (not just void*), so it can be just a  
</span><br>
<span class="quotelev1">&gt; void* or something more complex in the future without API changes
</span><br>
<p>I'm not sure I parsed the above sentence properly -- I read it as  
<br>
advocating 2 different things.  Can you explain?
<br>
<p><span class="quotelev1">&gt; - add functions to allocate/deallocate/copy it, and make it clear  
</span><br>
<span class="quotelev1">&gt; that these should be called on the cpusets returned by other  
</span><br>
<span class="quotelev1">&gt; functions (i.e. clarify ownership transfers).
</span><br>
<p>Such functions would be necessary only if there are non-public members  
<br>
of the struct or if you want to deep copy the struct, right?  They  
<br>
would also apply if we return opaque handles, not public structures.
<br>
<p><span class="quotelev1">&gt; - functions that are possibly inlined are ok (obviously changing  
</span><br>
<span class="quotelev1">&gt; them breaks the binary compatibility), but recompilation fixes them,  
</span><br>
<span class="quotelev1">&gt; and other languages can still use the non inline function that is  
</span><br>
<span class="quotelev1">&gt; part of the lib
</span><br>
<p>The usual reason for inlining is a need for performance -- and I  
<br>
honestly think that we don't need it.  So if the usual question for  
<br>
inlining is &quot;why not?&quot;, I turn that question around and ask &quot;if not  
<br>
for performance, why?&quot;.  :-)
<br>
<p><span class="quotelev1">&gt; - macros I don't like, they make binding to other languages more  
</span><br>
<span class="quotelev1">&gt; difficult, as one has to write either a thin glue layer, or  
</span><br>
<span class="quotelev1">&gt; duplicate the macro, which will not stay in sync with lib changes  
</span><br>
<span class="quotelev1">&gt; automatically (cpuset has some macros, but the structure is so  
</span><br>
<span class="quotelev1">&gt; simply that I just used another bit compatible type when binding to  
</span><br>
<span class="quotelev1">&gt; D).
</span><br>
<p>Agreed.  Macros = evil; should only be used where absolutely necessary.
<br>
<p><span class="quotelev1">&gt; To make the release quickly I think that just adding the requested  
</span><br>
<span class="quotelev1">&gt; functions (alloc/dealloc would be noops at the moment) would be good.
</span><br>
<span class="quotelev1">&gt; Then in the future one can switch to dynamic or sparse cpuset  
</span><br>
<span class="quotelev1">&gt; without user visible changes (apart recompilation).
</span><br>
<p><p>Agreed; that is a good goal (switch to a new back-end type without  
<br>
needing to change user code).
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
<li><strong>Next message:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0140.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0142.php">Fawzi Mohamed: "Re: [hwloc-devel] release status"</a>
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
