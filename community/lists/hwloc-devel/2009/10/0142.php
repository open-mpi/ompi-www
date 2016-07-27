<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 09:23:31 2009" -->
<!-- isoreceived="20091005132331" -->
<!-- sent="Mon, 5 Oct 2009 15:23:23 +0200" -->
<!-- isosent="20091005132323" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="D588FFE3-94C8-4045-B494-D944BA76E06D_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="606C4930-365A-4193-92ED-009C3A704158_at_cisco.com" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 09:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5-ott-09, at 14:27, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 3, 2009, at 8:21 AM, Fawzi Mohamed wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok you are right that storing in the struct might be overkill, and  
</span><br>
<span class="quotelev2">&gt;&gt; about performance I fully agree, space not so much, especially if  
</span><br>
<span class="quotelev2">&gt;&gt; you really want to cache all the cpuset for all objects, this still  
</span><br>
<span class="quotelev2">&gt;&gt; grows quadratically, and allocates a lot of objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still not sure that I agree -- I still think we're just  
</span><br>
<span class="quotelev1">&gt; quibbling over a few bytes here.  It's commonplace to have 2GB RAM  
</span><br>
<span class="quotelev1">&gt; per core these days; that number certainly isn't going to go down --  
</span><br>
<span class="quotelev1">&gt; it's likely that it's even going to go up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So yes, if every process running on every core has a cpuset, you  
</span><br>
<span class="quotelev1">&gt; multiply (for example) a 4k cpuset data structure times 1,000  
</span><br>
<span class="quotelev1">&gt; processors (cores): 4MB.  But consider that each of those 1,000  
</span><br>
<span class="quotelev1">&gt; processors will have 2GB or more of RAM.  That's 2 terabytes; who  
</span><br>
<span class="quotelev1">&gt; cares about 4MB when you have 2TB?  That's 6 orders of magnitude  
</span><br>
<span class="quotelev1">&gt; difference; put differently, 4MB is 0.0002 percent of 2TB.
</span><br>
<p>well you assume you have a single copy of the whole system structure,  
<br>
I am not sure that would be the case, and while the memory per core is  
<br>
growing, the memory per thread is not growing much,... but anyway that  
<br>
is not the important point...
<br>
<p><span class="quotelev1">&gt; I agree that we shouldn't be wasteful, but the difference we're  
</span><br>
<span class="quotelev1">&gt; talking about here is in the noise.
</span><br>
<p>ok
<br>
<p><span class="quotelev2">&gt;&gt; That was the reason I was advocating having a function returning  
</span><br>
<span class="quotelev2">&gt;&gt; the cpuset from an object (sparse cpuset would also be a solution).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway the real issue here is the API I think.
</span><br>
<span class="quotelev2">&gt;&gt; I would say that the best solution is
</span><br>
<span class="quotelev2">&gt;&gt; - keep cpuset a structure (not just void*), so it can be just a  
</span><br>
<span class="quotelev2">&gt;&gt; void* or something more complex in the future without API changes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I parsed the above sentence properly -- I read it as  
</span><br>
<span class="quotelev1">&gt; advocating 2 different things.  Can you explain?
</span><br>
<p>yes you are right, I was unclear, I meant that I would pass a cpu_set  
<br>
struct by value (not always pass a pointer).
<br>
If one wants to later migrate to passing just a pointer, then  
<br>
internally this struct can have just a single pointer as field.
<br>
<p><span class="quotelev2">&gt;&gt; - add functions to allocate/deallocate/copy it, and make it clear  
</span><br>
<span class="quotelev2">&gt;&gt; that these should be called on the cpusets returned by other  
</span><br>
<span class="quotelev2">&gt;&gt; functions (i.e. clarify ownership transfers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Such functions would be necessary only if there are non-public  
</span><br>
<span class="quotelev1">&gt; members of the struct or if you want to deep copy the struct,  
</span><br>
<span class="quotelev1">&gt; right?  They would also apply if we return opaque handles, not  
</span><br>
<span class="quotelev1">&gt; public structures.
</span><br>
<p>indeed, if you alloc, and it is fixed size (no sparse structure) then  
<br>
one can just call free, but in general having a structure specific  
<br>
free function gives just a lot more flexibility for the future (and is  
<br>
needed to copy unknown size structs).
<br>
<p><span class="quotelev2">&gt;&gt; - functions that are possibly inlined are ok (obviously changing  
</span><br>
<span class="quotelev2">&gt;&gt; them breaks the binary compatibility), but recompilation fixes  
</span><br>
<span class="quotelev2">&gt;&gt; them, and other languages can still use the non inline function  
</span><br>
<span class="quotelev2">&gt;&gt; that is part of the lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usual reason for inlining is a need for performance -- and I  
</span><br>
<span class="quotelev1">&gt; honestly think that we don't need it.  So if the usual question for  
</span><br>
<span class="quotelev1">&gt; inlining is &quot;why not?&quot;, I turn that question around and ask &quot;if not  
</span><br>
<span class="quotelev1">&gt; for performance, why?&quot;.  :-)
</span><br>
<p>ok with me :)
<br>
<p><span class="quotelev2">&gt;&gt; - macros I don't like, they make binding to other languages more  
</span><br>
<span class="quotelev2">&gt;&gt; difficult, as one has to write either a thin glue layer, or  
</span><br>
<span class="quotelev2">&gt;&gt; duplicate the macro, which will not stay in sync with lib changes  
</span><br>
<span class="quotelev2">&gt;&gt; automatically (cpuset has some macros, but the structure is so  
</span><br>
<span class="quotelev2">&gt;&gt; simply that I just used another bit compatible type when binding to  
</span><br>
<span class="quotelev2">&gt;&gt; D).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.  Macros = evil; should only be used where absolutely  
</span><br>
<span class="quotelev1">&gt; necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To make the release quickly I think that just adding the requested  
</span><br>
<span class="quotelev2">&gt;&gt; functions (alloc/dealloc would be noops at the moment) would be good.
</span><br>
<span class="quotelev2">&gt;&gt; Then in the future one can switch to dynamic or sparse cpuset  
</span><br>
<span class="quotelev2">&gt;&gt; without user visible changes (apart recompilation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed; that is a good goal (switch to a new back-end type without  
</span><br>
<span class="quotelev1">&gt; needing to change user code).
</span><br>
<p>yes, and I think that was the reason behind the initial question by  
<br>
Samuel on dynamic cpuset_t
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0143.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
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
