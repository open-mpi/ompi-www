<?
$subject_val = "Re: [OMPI devel] MCA base component changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 17:23:50 2008" -->
<!-- isoreceived="20080724212350" -->
<!-- sent="Thu, 24 Jul 2008 17:23:42 -0400" -->
<!-- isosent="20080724212342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA base component changes" -->
<!-- id="6650D684-85AE-4A5D-98C6-9A3F0C44FFBC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0332FC0D-8E93-48E6-9A63-4CA3C0AFFA9F_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-24 17:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4435.php">Jeff Squyres: "[OMPI devel] moving code to trunk"</a>
<li><strong>Previous message:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<li><strong>In reply to:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I chatted about this on the phone today.  Conclusions that  
<br>
we came to:
<br>
<p>1. We need to add a few lines of code to ensure that the MCA base  
<br>
refuses to open components that have a different MCA version number  
<br>
(i.e., dlopen a DSO, dlsym to get the component struct, check the  
<br>
version number, if it's not the same MCA major.minor as our MCA  
<br>
major.minor, dlclose it).  This is easy to do; I'll add it to the hg.
<br>
<p>2. Let's set the precedent now that changing the MCA version does  
<br>
*not* force a change of all the framework version numbers.  The  
<br>
framework version numbers refer to their interfaces.  Rather, it's a  
<br>
triple of (MCA,framework,component) version numbers that uniquely  
<br>
identify a component.
<br>
<p>3. The load-time issues of mixing multiple MCA versions are solved by  
<br>
points #1 and #2.
<br>
<p>4. Leave the bump of all framework versions to 2.0 in place because a  
<br>
good number of them had to be bumped anyway.  We're probably bumping a  
<br>
few that didn't actually need to be bumped (i.e., those that didn't  
<br>
actually change since the v1.2 series), but what the heck -- most of  
<br>
them have changed, and it's a bunch of work to roll all that out.  So  
<br>
let's just bump them, but not because we bumped the MCA version  
<br>
number; rather, we bump them because we knew that most of them needed  
<br>
to be bumped, but were too lazy to check and see exactly which ones  
<br>
needed it (hey, let's be honest here...).
<br>
<p>If no one has any objections to this, I'll bring this stuff into the  
<br>
trunk at the original timeout -- Friday COB (i.e., tomorrow).
<br>
<p><p><p><p>On Jul 21, 2008, at 8:55 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 21, 2008, at 6:57 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess I don't understand.  I thought there were three versions in  
</span><br>
<span class="quotelev2">&gt;&gt; every
</span><br>
<span class="quotelev2">&gt;&gt; component -- the MCA version, the framework version, and the  
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt; version.  The first two should determine if the component can  
</span><br>
<span class="quotelev2">&gt;&gt; safely be
</span><br>
<span class="quotelev2">&gt;&gt; loaded and the third is to identify the component.  I agree that  
</span><br>
<span class="quotelev2">&gt;&gt; for this
</span><br>
<span class="quotelev2">&gt;&gt; change (an MCA-level change), the MCA version *should* change.   
</span><br>
<span class="quotelev2">&gt;&gt; However,
</span><br>
<span class="quotelev2">&gt;&gt; the framework interface didn't change (well, not as a result of this
</span><br>
<span class="quotelev2">&gt;&gt; change), meaning that the framework version *should not* change.   
</span><br>
<span class="quotelev2">&gt;&gt; The MCA
</span><br>
<span class="quotelev2">&gt;&gt; load infrastructure should see that the MCA versions don't match,  
</span><br>
<span class="quotelev2">&gt;&gt; and not
</span><br>
<span class="quotelev2">&gt;&gt; load the component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh and I wrestled with this question for a bit and probably fell  
</span><br>
<span class="quotelev1">&gt; down on the side of conservatism; that's where this came from.   
</span><br>
<span class="quotelev1">&gt; There were two reasons why we went this way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You could (for example) have a coll framework v1.2.3 component  
</span><br>
<span class="quotelev1">&gt; built with MCA v1.0.0 and the same coll framework v1.2.3 component  
</span><br>
<span class="quotelev1">&gt; built against MCA v2.0.0, and they would be different.  Worse, they  
</span><br>
<span class="quotelev1">&gt; won't be &quot;equal&quot;.  Specifically, MCA 2.0.0 supports some minor  
</span><br>
<span class="quotelev1">&gt; features that v1.0.0 doesn't -- so even though you have 2 of the  
</span><br>
<span class="quotelev1">&gt; &quot;same&quot; component, they're not really the same.  (*more on this below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Another issue seemed pretty icky to solve, which led us to fall  
</span><br>
<span class="quotelev1">&gt; down a little heavier on the side of bumping all the framework  
</span><br>
<span class="quotelev1">&gt; version numbers.  Let's say you have some Foo framework DSOs, some  
</span><br>
<span class="quotelev1">&gt; of which are MCA v1.0.0 and some of which are v2.0.0.  The Foo  
</span><br>
<span class="quotelev1">&gt; framework interface is the same between the two.  The MCA base can  
</span><br>
<span class="quotelev1">&gt; find/open all of them easily enough; but how do we return all the  
</span><br>
<span class="quotelev1">&gt; components to the caller?  I could think of 3 ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A. return multiple lists to the caller: a list of each of v1.0.0  
</span><br>
<span class="quotelev1">&gt; and v2.0.0 components.  This means that every framework will need to  
</span><br>
<span class="quotelev1">&gt; handle (or be able to reject or specify to the MCA base to reject  
</span><br>
<span class="quotelev1">&gt; before even accepting as available) both MCA v1.0.0 and v2.0.0  
</span><br>
<span class="quotelev1">&gt; components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  B. return a single list to the caller with both MCA component  
</span><br>
<span class="quotelev1">&gt; versions in the list.  Pretty much the same as #1, but it scales  
</span><br>
<span class="quotelev1">&gt; better if we get in the business of changing the MCA version a lot  
</span><br>
<span class="quotelev1">&gt; (please God no); I mention it mainly for completeness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  C. return a single list to the caller with all components  
</span><br>
<span class="quotelev1">&gt; &quot;upgraded&quot; to MCA v2.0.  This seems like a nice solution -- a la the  
</span><br>
<span class="quotelev1">&gt; experiment we tried with coll a long time ago to prove to ourselves  
</span><br>
<span class="quotelev1">&gt; that run-time versioning could work (for those of you who don't  
</span><br>
<span class="quotelev1">&gt; remember: we had some coll v1.0.0 and some v1.1.0 components; the  
</span><br>
<span class="quotelev1">&gt; coll base transparently handled everything at run-time).  However,  
</span><br>
<span class="quotelev1">&gt; there's a problem with this idea: since all frameworks use the  
</span><br>
<span class="quotelev1">&gt; component struct as a &quot;super&quot; for their component structs, the MCA  
</span><br>
<span class="quotelev1">&gt; base does not know the total size of the component public struct.   
</span><br>
<span class="quotelev1">&gt; So it cannot &quot;upgrade&quot; the MCA v1.0.0 structure in memory to a  
</span><br>
<span class="quotelev1">&gt; v2.0.0, because the v2.0.0 struct is bigger than the v1.0.0 struct.   
</span><br>
<span class="quotelev1">&gt; So we can't just magically treat everything as v2.0.0 components at  
</span><br>
<span class="quotelev1">&gt; the MCA base level; we'd have to have the frameworks transmorgify  
</span><br>
<span class="quotelev1">&gt; their own components (although we might be able to have some MCA  
</span><br>
<span class="quotelev1">&gt; base helper function that does the heavy lifting, as long as the  
</span><br>
<span class="quotelev1">&gt; framework supplied the total struct length).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that all three of these solutions involves touching every  
</span><br>
<span class="quotelev1">&gt; framework in some way (although not every component).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All that being said, I suppose there's two arguments against these  
</span><br>
<span class="quotelev1">&gt; kinds of issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - this situation probably won't happen in practice (component A  
</span><br>
<span class="quotelev1">&gt; compiled against MCA v1.0.0 and against MCA v2.0.0) because we only  
</span><br>
<span class="quotelev1">&gt; distribute components as part of full OMPI releases, and therefore  
</span><br>
<span class="quotelev1">&gt; they're fairly tightly bound to their MCA version.  However, for  
</span><br>
<span class="quotelev1">&gt; components that didn't change between OMPI v1.2 and v1.3, you *will*  
</span><br>
<span class="quotelev1">&gt; have this scenario, but in different OMPI installation directories  
</span><br>
<span class="quotelev1">&gt; (and therefore it pretty much doesn't matter).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I think the crux of Brian's argument is the framework's version  
</span><br>
<span class="quotelev1">&gt; number is identifying *the framework's* interface -- not the whole  
</span><br>
<span class="quotelev1">&gt; interface (i.e., not including the MCA base interface).  From this  
</span><br>
<span class="quotelev1">&gt; perspective, it *is* independent of the MCA version number.   
</span><br>
<span class="quotelev1">&gt; Specifically: the version of the framework interface is independent  
</span><br>
<span class="quotelev1">&gt; of the binary compatibility and features issues surrounding the MCA  
</span><br>
<span class="quotelev1">&gt; base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So Josh and I thought we picked a solution that was clear, simple,  
</span><br>
<span class="quotelev1">&gt; and one-of-several sucky options.  :-\  We could probably be  
</span><br>
<span class="quotelev1">&gt; convinced to go another way if someone has strong feelings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4435.php">Jeff Squyres: "[OMPI devel] moving code to trunk"</a>
<li><strong>Previous message:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<li><strong>In reply to:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<!-- nextthread="start" -->
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
