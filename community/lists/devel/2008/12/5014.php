<?
$subject_val = "Re: [OMPI devel] BTL move - the notion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 11:11:09 2008" -->
<!-- isoreceived="20081205161109" -->
<!-- sent="Fri, 05 Dec 2008 11:10:59 -0500" -->
<!-- isosent="20081205161059" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL move - the notion" -->
<!-- id="C55EBCC3.2BFB4%rlgraham_at_ornl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="73C60E57-798E-4D6C-AE00-CDA21BBF6202_at_lanl.gov" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 11:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5015.php">Greg Watson: "[OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5013.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>In reply to:</strong> <a href="5011.php">Ralph Castain: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt; &gt; think we all agree that STCI and OMPI have different objectives and
</span><br>
<span class="quotelev2">&gt;&gt; requirements. OMPI is facing the need to launch and operate at extreme scales
</span><br>
<span class="quotelev2">&gt;&gt; by next summer, has received a lot of interest in having it report errors
</span><br>
<span class="quotelev2">&gt;&gt; into various systems, etc. We don't have all the answers as to what will be
</span><br>
<span class="quotelev2">&gt;&gt; necessary to meet these requirements, but indications so far are that tighter
</span><br>
<span class="quotelev2">&gt;&gt; integration, not deeper abstraction, between the various layers will be
</span><br>
<span class="quotelev2">&gt;&gt; needed. By that, I don't mean we will violate abstraction layers, but rather
</span><br>
<span class="quotelev2">&gt;&gt; that the various layers need to work more as a tightly tuned instrument, with
</span><br>
<span class="quotelev2">&gt;&gt; each layer operating based on a clear knowledge of how the other layers are
</span><br>
<span class="quotelev2">&gt;&gt; functioning.
</span><br>
<p>OMPI and STCI are two different things together, and I have vested interest
<br>
in both, and have no desire
<br>
to have either go south.  You have a set of requirement at LANL which are
<br>
important, and we also have a set of requirement at ORNL, and as such we
<br>
need to compromise on these
<br>
in the code base.  We have MPI level goals, which will be accomplished in
<br>
the OMPI code base, and
<br>
tools and other related goals that will be accomplished in other code bases.
<br>
We both have the need to function well at the high end, so have the same set
<br>
of goals there.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, for modex-less operations, the MPI/BTLs have to know that the
</span><br>
RTE/OS will be providing certain information. This means that they don't have to
<br>
go out and discover it themselves every time. Yes, we will leave that as the
<br>
default behavior so that small and/or unmanaged clusters can operate, but we
<br>
have to also introduce logic that can detect when we are utilizing this
<br>
alternative capability and exploit it. While we are trying our best to avoid
<br>
introducing RTE-like calls into the code, the fact is that we may well have to
<br>
do so (we have already identified one btl that will definitely need to). It is
<br>
simply too early to make the decision to cut that off now - we don't know what
<br>
the long-term impacts of such a decision will be.
<br>
<p>This is where discussions will need to go both ways.  Your changes also can
<br>
impact us, and we need to agree
<br>
to those changes, just as much as you need to agree with the changes we are
<br>
proposing.  This is not a code
<br>
base focused on a single institution's requirements, and we all do our best
<br>
(and I believe tend to
<br>
succeed) at helping meet all of our needs.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, although I don't do much on the MPI layer, I am concerned about
</span><br>
performance. I would tend to oppose any additional abstraction until we can
<br>
measure the performance impact. Thus, I would like to see the BTL move done on a
<br>
tmp branch (technology to branch up to the implementer - I don't care) so we can
<br>
verify that it isn't hurting us in some unforeseeable manner.
<br>
<p>Agreed - at least for the last phase of what we are suggesting, but we can
<br>
talk about this.  I am a bit
<br>
confused about how the location of the source code has anything to do with
<br>
how it performs at run-time.
<br>
At this stage we have said nothing about changing the way the btl works,
<br>
just cosmetic things.  When it
<br>
comes to enabling the use of stci with ompi, then these issues will come up,
<br>
and need to be addressed
<br>
very carefully.  To be honest, since we don't want to change the btl's
<br>
(aside from add some attributes)
<br>
I don't expect this to be an issue, UNLESS we end up needing to change some
<br>
data structures for abstraction
<br>
purposes.  This is where we need to be very careful.  If you look at what
<br>
has happened with the btl's
<br>
(actually first the PTL's) historically, I have been one of the ones pushing
<br>
hard for improved performance -
<br>
why would this change now ?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess my concerns really boil down to dealing with conflicting schedules
</span><br>
and requirements, how to support multiple possibly competing groups that want to
<br>
share one or more parts of our code base, and retaining an OMPI-first philosophy
<br>
when it comes to what changes get made. My proposed solution is:
<br>
<p>This is the problem we face all the time, and on a regular basis we as a
<br>
community do our best to help
<br>
each other out.  This is one of the reasons 1.3 is as late as it is, and
<br>
this is a good thing that will
<br>
continue as long as this is a community project.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. shift our repository to a technical solution that supports broader code
</span><br>
sharing
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. have the non-OMPI groups access our code base via that technology. They can
</span><br>
&quot;pull&quot; changes at will, subject to the licensing agreement. It is true that they
<br>
may have to do some local editing if the change hits a spot where they have
<br>
local mods to support their system, but both Hg and GIT are very good at
<br>
handling this - much better than svn ever has been.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. if there are minor mods required to make the BTL code area easier to share
</span><br>
via the above methods, then we should explore and implement them. Certainly,
<br>
renaming #define values would seem a no-brainer. I suspect there are other
<br>
similar things that could be done. Removing orte/opal dependencies is more
<br>
controversial and would need to thoroughly be examined.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. OMPI decides what changes get made to its code base. We are polite about it
</span><br>
and talk to the other groups to try and minimize impact, but ultimately we do
<br>
what is best for OMPI, and send out notifications (perhaps a new mailing list
<br>
specifically for that purpose) when changes occur. Note that this would have
<br>
helped the Eclipse group enormously as otherwise they drown in the devel list
<br>
trying to spot the changes.
<br>
<p>I don't see that anything else is being proposed.  The emerging STCI
<br>
community and the OMPI community are
<br>
not two non-overlapping groups, and run-time support we want to bring into
<br>
OMPI is to support new
<br>
functionality.  The main point is that this is not STCI vs. OMPI at all.
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My $0.0002 - hope it helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2008, at 6:00 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me start the e-mail conversation, and see how far we get.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Goal: The goal several of us have is to be able to use the btl&#226;&#128;&#154;&#195;&#132;&#195;&#180;s outside of
</span><br>
the MPI layer in Open MPI.  The layer itself is generic, w/o specific knowledge
<br>
of Upper Level Protocols, so is well suited for this sort of use.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technical Approach: What we have suggested is to start the process with the
</span><br>
Open MPI code base, and make it independent of the mpi-layer (which it is now),
<br>
and the run-time layer.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before we get into any specific technical details,
</span><br>
<span class="quotelev1">&gt; the first question I have is are people totally opposed to the notion of
</span><br>
making the btl&#226;&#128;&#154;&#195;&#132;&#195;&#180;s independent of MPI and the run-time ?
<br>
<span class="quotelev1">&gt; This does not mean that it can&#226;&#128;&#154;&#195;&#132;&#195;&#180;t be used by it, but that there are well
</span><br>
defined abstraction layers, i.e., are people against the goal in the first place
<br>
?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are alternative suggestions to the technical approach ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One suggestion has been to branch and patch.  To me this is a long-term
</span><br>
maintenance nightmare.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are peoples thoughts here ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#195;&#148;&#195;&#184;&#194;&#186;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5015.php">Greg Watson: "[OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5013.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>In reply to:</strong> <a href="5011.php">Ralph Castain: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
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
