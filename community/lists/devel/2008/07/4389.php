<?
$subject_val = "Re: [OMPI devel] MCA base component changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 20:56:16 2008" -->
<!-- isoreceived="20080722005616" -->
<!-- sent="Mon, 21 Jul 2008 20:55:28 -0400" -->
<!-- isosent="20080722005528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA base component changes" -->
<!-- id="0332FC0D-8E93-48E6-9A63-4CA3C0AFFA9F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f7622dcb23b885622704d7d8932eabe1_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA base component changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 20:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4390.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>In reply to:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4434.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Reply:</strong> <a href="4434.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2008, at 6:57 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I guess I don't understand.  I thought there were three versions in  
</span><br>
<span class="quotelev1">&gt; every
</span><br>
<span class="quotelev1">&gt; component -- the MCA version, the framework version, and the component
</span><br>
<span class="quotelev1">&gt; version.  The first two should determine if the component can safely  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; loaded and the third is to identify the component.  I agree that for  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; change (an MCA-level change), the MCA version *should* change.   
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev1">&gt; the framework interface didn't change (well, not as a result of this
</span><br>
<span class="quotelev1">&gt; change), meaning that the framework version *should not* change.   
</span><br>
<span class="quotelev1">&gt; The MCA
</span><br>
<span class="quotelev1">&gt; load infrastructure should see that the MCA versions don't match,  
</span><br>
<span class="quotelev1">&gt; and not
</span><br>
<span class="quotelev1">&gt; load the component.
</span><br>
<p><p>Josh and I wrestled with this question for a bit and probably fell  
<br>
down on the side of conservatism; that's where this came from.  There  
<br>
were two reasons why we went this way:
<br>
<p>1. You could (for example) have a coll framework v1.2.3 component  
<br>
built with MCA v1.0.0 and the same coll framework v1.2.3 component  
<br>
built against MCA v2.0.0, and they would be different.  Worse, they  
<br>
won't be &quot;equal&quot;.  Specifically, MCA 2.0.0 supports some minor  
<br>
features that v1.0.0 doesn't -- so even though you have 2 of the  
<br>
&quot;same&quot; component, they're not really the same.  (*more on this below)
<br>
<p>2. Another issue seemed pretty icky to solve, which led us to fall  
<br>
down a little heavier on the side of bumping all the framework version  
<br>
numbers.  Let's say you have some Foo framework DSOs, some of which  
<br>
are MCA v1.0.0 and some of which are v2.0.0.  The Foo framework  
<br>
interface is the same between the two.  The MCA base can find/open all  
<br>
of them easily enough; but how do we return all the components to the  
<br>
caller?  I could think of 3 ways:
<br>
<p>&nbsp;&nbsp;&nbsp;A. return multiple lists to the caller: a list of each of v1.0.0  
<br>
and v2.0.0 components.  This means that every framework will need to  
<br>
handle (or be able to reject or specify to the MCA base to reject  
<br>
before even accepting as available) both MCA v1.0.0 and v2.0.0  
<br>
components.
<br>
<p>&nbsp;&nbsp;&nbsp;B. return a single list to the caller with both MCA component  
<br>
versions in the list.  Pretty much the same as #1, but it scales  
<br>
better if we get in the business of changing the MCA version a lot  
<br>
(please God no); I mention it mainly for completeness.
<br>
<p>&nbsp;&nbsp;&nbsp;C. return a single list to the caller with all components  
<br>
&quot;upgraded&quot; to MCA v2.0.  This seems like a nice solution -- a la the  
<br>
experiment we tried with coll a long time ago to prove to ourselves  
<br>
that run-time versioning could work (for those of you who don't  
<br>
remember: we had some coll v1.0.0 and some v1.1.0 components; the coll  
<br>
base transparently handled everything at run-time).  However, there's  
<br>
a problem with this idea: since all frameworks use the component  
<br>
struct as a &quot;super&quot; for their component structs, the MCA base does not  
<br>
know the total size of the component public struct.  So it cannot  
<br>
&quot;upgrade&quot; the MCA v1.0.0 structure in memory to a v2.0.0, because the  
<br>
v2.0.0 struct is bigger than the v1.0.0 struct.  So we can't just  
<br>
magically treat everything as v2.0.0 components at the MCA base level;  
<br>
we'd have to have the frameworks transmorgify their own components  
<br>
(although we might be able to have some MCA base helper function that  
<br>
does the heavy lifting, as long as the framework supplied the total  
<br>
struct length).
<br>
<p>Note that all three of these solutions involves touching every  
<br>
framework in some way (although not every component).
<br>
<p><pre>
----
All that being said, I suppose there's two arguments against these  
kinds of issues:
- this situation probably won't happen in practice (component A  
compiled against MCA v1.0.0 and against MCA v2.0.0) because we only  
distribute components as part of full OMPI releases, and therefore  
they're fairly tightly bound to their MCA version.  However, for  
components that didn't change between OMPI v1.2 and v1.3, you *will*  
have this scenario, but in different OMPI installation directories  
(and therefore it pretty much doesn't matter).
- I think the crux of Brian's argument is the framework's version  
number is identifying *the framework's* interface -- not the whole  
interface (i.e., not including the MCA base interface).  From this  
perspective, it *is* independent of the MCA version number.   
Specifically: the version of the framework interface is independent of  
the binary compatibility and features issues surrounding the MCA base.
-----
So Josh and I thought we picked a solution that was clear, simple, and  
one-of-several sucky options.  :-\  We could probably be convinced to  
go another way if someone has strong feelings.
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4390.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>In reply to:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4434.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Reply:</strong> <a href="4434.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
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
