<?
$subject_val = "Re: [OMPI devel] BTL move - the notion";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 13:54:39 2008" -->
<!-- isoreceived="20081211185439" -->
<!-- sent="Thu, 11 Dec 2008 13:54:32 -0500" -->
<!-- isosent="20081211185432" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL move - the notion" -->
<!-- id="389F8EC4-07B5-4600-9D99-21702DC5875B_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C55EBCC3.2BFB4%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL move - the notion<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 13:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<li><strong>In reply to:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(chiming in a bit after the fact)
<br>
<p>In general, I agree with most of what has been stated.
<br>
<p>1. The BTLs should remain &quot;owned&quot; by Open MPI.  There are OMPI member  
<br>
organizations in multiple projects that want to use the BTLs, but the  
<br>
BTLs are primarily for the Open MPI project.
<br>
<p>2. An incremental patch approach would likely be best; my definition  
<br>
of that would be &quot;small branch and merge&quot;.  I strongly endorse hg or  
<br>
git for this; they are *VERY* good at exactly this kind of thing.   
<br>
Much, much larger code bases than OMPI pervasively use hg/git for the  
<br>
branch/patch/merge model with very good success.  If you &quot;grew up&quot; on  
<br>
CVS/SVN (and earlier), this may seem counter-intuitive -- but please  
<br>
realize that tools have evolved significantly since then.
<br>
<p>3. Moving the BTL code to different parts of the source tree won't  
<br>
matter much in terms of performance and (mostly) abstractions.  But we  
<br>
should check, just to make sure we didn't muck something up.  This is  
<br>
a complex code base, after all.
<br>
<p>4. Adding new functionality to the BTL (e.g., bootstrapping) is  
<br>
subject to #1.
<br>
<p>5. Ralph outlined the case for tighter integration with the RTE and  
<br>
the BTLs.  I think it's reasonable, and I agree with his case.  We can  
<br>
add abstractions to ensure that nothing is ORTE-specific and to ensure  
<br>
that we can safely handle if some other underlying RTE doesn't have  
<br>
the same capabilities (none of this stuff is likely to be in the  
<br>
performance-critical code path, so it's not too much of an issue).   
<br>
But allowing other RTE's under the OMPI MPI layer shouldn't restrict  
<br>
what we want/can do with our own OMPI-specific RTE.
<br>
<p>Just my $0.00000000000002....
<br>
<p><p><p>On Dec 5, 2008, at 11:10 AM, Richard Graham wrote:
<br>
<p><span class="quotelev3">&gt;&gt; &gt; think we all agree that STCI and OMPI have different objectives  
</span><br>
<span class="quotelev2">&gt;&gt; and requirements. OMPI is facing the need to launch and operate at  
</span><br>
<span class="quotelev2">&gt;&gt; extreme scales by next summer, has received a lot of interest in  
</span><br>
<span class="quotelev2">&gt;&gt; having it report errors into various systems, etc. We don't have  
</span><br>
<span class="quotelev2">&gt;&gt; all the answers as to what will be necessary to meet these  
</span><br>
<span class="quotelev2">&gt;&gt; requirements, but indications so far are that tighter integration,  
</span><br>
<span class="quotelev2">&gt;&gt; not deeper abstraction, between the various layers will be needed.  
</span><br>
<span class="quotelev2">&gt;&gt; By that, I don't mean we will violate abstraction layers, but  
</span><br>
<span class="quotelev2">&gt;&gt; rather that the various layers need to work more as a tightly tuned  
</span><br>
<span class="quotelev2">&gt;&gt; instrument, with each layer operating based on a clear knowledge of  
</span><br>
<span class="quotelev2">&gt;&gt; how the other layers are functioning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI and STCI are two different things together, and I have vested  
</span><br>
<span class="quotelev1">&gt; interest in both, and have no desire
</span><br>
<span class="quotelev1">&gt; to have either go south.  You have a set of requirement at LANL  
</span><br>
<span class="quotelev1">&gt; which are
</span><br>
<span class="quotelev1">&gt; important, and we also have a set of requirement at ORNL, and as  
</span><br>
<span class="quotelev1">&gt; such we need to compromise on these
</span><br>
<span class="quotelev1">&gt; in the code base.  We have MPI level goals, which will be  
</span><br>
<span class="quotelev1">&gt; accomplished in the OMPI code base, and
</span><br>
<span class="quotelev1">&gt; tools and other related goals that will be accomplished in other  
</span><br>
<span class="quotelev1">&gt; code bases.
</span><br>
<span class="quotelev1">&gt; We both have the need to function well at the high end, so have the  
</span><br>
<span class="quotelev1">&gt; same set
</span><br>
<span class="quotelev1">&gt; of goals there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, for modex-less operations, the MPI/BTLs have to know  
</span><br>
<span class="quotelev1">&gt; that the RTE/OS will be providing certain information. This means  
</span><br>
<span class="quotelev1">&gt; that they don't have to go out and discover it themselves every  
</span><br>
<span class="quotelev1">&gt; time. Yes, we will leave that as the default behavior so that small  
</span><br>
<span class="quotelev1">&gt; and/or unmanaged clusters can operate, but we have to also introduce  
</span><br>
<span class="quotelev1">&gt; logic that can detect when we are utilizing this alternative  
</span><br>
<span class="quotelev1">&gt; capability and exploit it. While we are trying our best to avoid  
</span><br>
<span class="quotelev1">&gt; introducing RTE-like calls into the code, the fact is that we may  
</span><br>
<span class="quotelev1">&gt; well have to do so (we have already identified one btl that will  
</span><br>
<span class="quotelev1">&gt; definitely need to). It is simply too early to make the decision to  
</span><br>
<span class="quotelev1">&gt; cut that off now - we don't know what the long-term impacts of such  
</span><br>
<span class="quotelev1">&gt; a decision will be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is where discussions will need to go both ways.  Your changes  
</span><br>
<span class="quotelev1">&gt; also can impact us, and we need to agree
</span><br>
<span class="quotelev1">&gt; to those changes, just as much as you need to agree with the changes  
</span><br>
<span class="quotelev1">&gt; we are proposing.  This is not a code
</span><br>
<span class="quotelev1">&gt; base focused on a single institution's requirements, and we all do  
</span><br>
<span class="quotelev1">&gt; our best (and I believe tend to
</span><br>
<span class="quotelev1">&gt; succeed) at helping meet all of our needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally, although I don't do much on the MPI layer, I am concerned  
</span><br>
<span class="quotelev1">&gt; about performance. I would tend to oppose any additional abstraction  
</span><br>
<span class="quotelev1">&gt; until we can measure the performance impact. Thus, I would like to  
</span><br>
<span class="quotelev1">&gt; see the BTL move done on a tmp branch (technology to branch up to  
</span><br>
<span class="quotelev1">&gt; the implementer - I don't care) so we can verify that it isn't  
</span><br>
<span class="quotelev1">&gt; hurting us in some unforeseeable manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed - at least for the last phase of what we are suggesting, but  
</span><br>
<span class="quotelev1">&gt; we can talk about this.  I am a bit
</span><br>
<span class="quotelev1">&gt; confused about how the location of the source code has anything to  
</span><br>
<span class="quotelev1">&gt; do with how it performs at run-time.
</span><br>
<span class="quotelev1">&gt; At this stage we have said nothing about changing the way the btl  
</span><br>
<span class="quotelev1">&gt; works, just cosmetic things.  When it
</span><br>
<span class="quotelev1">&gt; comes to enabling the use of stci with ompi, then these issues will  
</span><br>
<span class="quotelev1">&gt; come up, and need to be addressed
</span><br>
<span class="quotelev1">&gt; very carefully.  To be honest, since we don't want to change the  
</span><br>
<span class="quotelev1">&gt; btl's (aside from add some attributes)
</span><br>
<span class="quotelev1">&gt; I don't expect this to be an issue, UNLESS we end up needing to  
</span><br>
<span class="quotelev1">&gt; change some data structures for abstraction
</span><br>
<span class="quotelev1">&gt; purposes.  This is where we need to be very careful.  If you look at  
</span><br>
<span class="quotelev1">&gt; what has happened with the btl's
</span><br>
<span class="quotelev1">&gt; (actually first the PTL's) historically, I have been one of the ones  
</span><br>
<span class="quotelev1">&gt; pushing hard for improved performance -
</span><br>
<span class="quotelev1">&gt; why would this change now ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I guess my concerns really boil down to dealing with  
</span><br>
<span class="quotelev1">&gt; conflicting schedules and requirements, how to support multiple  
</span><br>
<span class="quotelev1">&gt; possibly competing groups that want to share one or more parts of  
</span><br>
<span class="quotelev1">&gt; our code base, and retaining an OMPI-first philosophy when it comes  
</span><br>
<span class="quotelev1">&gt; to what changes get made. My proposed solution is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the problem we face all the time, and on a regular basis we  
</span><br>
<span class="quotelev1">&gt; as a community do our best to help
</span><br>
<span class="quotelev1">&gt; each other out.  This is one of the reasons 1.3 is as late as it is,  
</span><br>
<span class="quotelev1">&gt; and this is a good thing that will
</span><br>
<span class="quotelev1">&gt; continue as long as this is a community project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. shift our repository to a technical solution that supports  
</span><br>
<span class="quotelev1">&gt; broader code sharing
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. have the non-OMPI groups access our code base via that  
</span><br>
<span class="quotelev1">&gt; technology. They can &quot;pull&quot; changes at will, subject to the  
</span><br>
<span class="quotelev1">&gt; licensing agreement. It is true that they may have to do some local  
</span><br>
<span class="quotelev1">&gt; editing if the change hits a spot where they have local mods to  
</span><br>
<span class="quotelev1">&gt; support their system, but both Hg and GIT are very good at handling  
</span><br>
<span class="quotelev1">&gt; this - much better than svn ever has been.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. if there are minor mods required to make the BTL code area  
</span><br>
<span class="quotelev1">&gt; easier to share via the above methods, then we should explore and  
</span><br>
<span class="quotelev1">&gt; implement them. Certainly, renaming #define values would seem a no- 
</span><br>
<span class="quotelev1">&gt; brainer. I suspect there are other similar things that could be  
</span><br>
<span class="quotelev1">&gt; done. Removing orte/opal dependencies is more controversial and  
</span><br>
<span class="quotelev1">&gt; would need to thoroughly be examined.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. OMPI decides what changes get made to its code base. We are  
</span><br>
<span class="quotelev1">&gt; polite about it and talk to the other groups to try and minimize  
</span><br>
<span class="quotelev1">&gt; impact, but ultimately we do what is best for OMPI, and send out  
</span><br>
<span class="quotelev1">&gt; notifications (perhaps a new mailing list specifically for that  
</span><br>
<span class="quotelev1">&gt; purpose) when changes occur. Note that this would have helped the  
</span><br>
<span class="quotelev1">&gt; Eclipse group enormously as otherwise they drown in the devel list  
</span><br>
<span class="quotelev1">&gt; trying to spot the changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see that anything else is being proposed.  The emerging STCI  
</span><br>
<span class="quotelev1">&gt; community and the OMPI community are
</span><br>
<span class="quotelev1">&gt; not two non-overlapping groups, and run-time support we want to  
</span><br>
<span class="quotelev1">&gt; bring into OMPI is to support new
</span><br>
<span class="quotelev1">&gt; functionality.  The main point is that this is not STCI vs. OMPI at  
</span><br>
<span class="quotelev1">&gt; all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My $0.0002 - hope it helps
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2008, at 6:00 PM, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me start the e-mail conversation, and see how far we get.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Goal: The goal several of us have is to be able to use the btl&#130;&#196;&#244;s  
</span><br>
<span class="quotelev1">&gt; outside of the MPI layer in Open MPI.  The layer itself is generic,  
</span><br>
<span class="quotelev1">&gt; w/o specific knowledge of Upper Level Protocols, so is well suited  
</span><br>
<span class="quotelev1">&gt; for this sort of use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Technical Approach: What we have suggested is to start the process  
</span><br>
<span class="quotelev1">&gt; with the Open MPI code base, and make it independent of the mpi- 
</span><br>
<span class="quotelev1">&gt; layer (which it is now), and the run-time layer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before we get into any specific technical details,
</span><br>
<span class="quotelev2">&gt; &gt; the first question I have is are people totally opposed to the  
</span><br>
<span class="quotelev1">&gt; notion of making the btl&#130;&#196;&#244;s independent of MPI and the run-time ?
</span><br>
<span class="quotelev2">&gt; &gt; This does not mean that it can&#130;&#196;&#244;t be used by it, but that there  
</span><br>
<span class="quotelev1">&gt; are well defined abstraction layers, i.e., are people against the  
</span><br>
<span class="quotelev1">&gt; goal in the first place ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What are alternative suggestions to the technical approach ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One suggestion has been to branch and patch.  To me this is a long- 
</span><br>
<span class="quotelev1">&gt; term maintenance nightmare.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What are peoples thoughts here ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rich
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &#212;&#248;&#186;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<li><strong>In reply to:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
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
