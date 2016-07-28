<?
$subject_val = "Re: [OMPI devel] BTL move - the notion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 08:44:11 2008" -->
<!-- isoreceived="20081205134411" -->
<!-- sent="Fri, 5 Dec 2008 06:43:59 -0700" -->
<!-- isosent="20081205134359" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL move - the notion" -->
<!-- id="73C60E57-798E-4D6C-AE00-CDA21BBF6202_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C55DE750.2BF37%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 08:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5012.php">Jeff Squyres: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5010.php">Ralph Castain: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5007.php">Richard Graham: "[OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll answer this outside of Terry's reply so we can stay under  
<br>
George's page limit. :-))
<br>
<p>I don't have any philosophical opposition to the idea. Indeed, there  
<br>
are places where I would potentially have some use for the btl's,  
<br>
perhaps as an alternative comm channel in the OOB. I will point out,  
<br>
though, that there are several things we thought when we started this  
<br>
project that have proven unworkable over time. For example, the idea  
<br>
that the RTE could be a general purpose one without impacting OMPI  
<br>
proved incorrect and has been abandoned. It may well be that the  
<br>
notion of using the BTL's for non-OMPI projects will fall into that  
<br>
category as well - not saying it does, but I think it is still TBD.
<br>
<p>That said, I do have some significant concerns about -how- this is  
<br>
done that fall into two categories:
<br>
<p>1. Procedural
<br>
Keeping the common code in the OMPI repository can raise quite a bit  
<br>
of trouble with synchronizing release cycles. We are just about to  
<br>
exit a period of requested &quot;quiet&quot; time on the trunk to stabilize it  
<br>
for the 1.3 release. If STCI is in an active development phase, this  
<br>
could have caused a major problem as we would have demanded they not  
<br>
commit to our code repository. It is easy to foresee the reverse  
<br>
situation. Indeed, from working on several other similar projects,  
<br>
this problem is not only common, but frequent. How do we intend to  
<br>
work this out?
<br>
<p>I am also concerned about slowing down OMPI's development efforts due  
<br>
to the need to coordinate proposed changes with an even broader  
<br>
community, and one that will have conflicting requirements/schedules.  
<br>
We already have problems getting people to stay adequately involved as  
<br>
changes are proposed and made, especially as the communities members  
<br>
have become involved in other efforts over time. It would become  
<br>
unworkable if we take months to touch base with everyone who might be  
<br>
impacted and get general consensus on changes required by OMPI. As  
<br>
Terry said, we have to maintain OMPI's agility.
<br>
<p>We all need to keep something in mind here. While this discussion is  
<br>
about the BTL's and coordinating with STCI, we are talking about a  
<br>
general method of operation that will have to be extended to anyone  
<br>
with a similar request. There already are other groups out there, some  
<br>
competing with STCI, that have issued similar requests for sharing  
<br>
various pieces of the code base (the ones coming to me mostly pertain  
<br>
to the RTE). So whatever we do should be generalizable - it can't just  
<br>
be a point solution for STCI.
<br>
<p>I am disturbed by the immediate rejection of methods developed and  
<br>
used by other large code projects that address this very problem. Both  
<br>
Hg and GIT were developed specifically with this code sharing  
<br>
synchronization issue in mind, and have enjoyed rapid adoption and get  
<br>
rave reviews for their solutions. It provides maximum flexibility, but  
<br>
requires a bit of a learning curve and admittedly more attention to  
<br>
maintenance details. However, other projects in similar circumstances  
<br>
have found it highly beneficial. I would think we should at least  
<br>
consider what is becoming the state-of-the-art method for code sharing  
<br>
before simply rejecting this approach as too much maintenance.
<br>
<p><p>2. Technical
<br>
I think we all agree that STCI and OMPI have different objectives and  
<br>
requirements. OMPI is facing the need to launch and operate at extreme  
<br>
scales by next summer, has received a lot of interest in having it  
<br>
report errors into various systems, etc. We don't have all the answers  
<br>
as to what will be necessary to meet these requirements, but  
<br>
indications so far are that tighter integration, not deeper  
<br>
abstraction, between the various layers will be needed. By that, I  
<br>
don't mean we will violate abstraction layers, but rather that the  
<br>
various layers need to work more as a tightly tuned instrument, with  
<br>
each layer operating based on a clear knowledge of how the other  
<br>
layers are functioning.
<br>
<p>For example, for modex-less operations, the MPI/BTLs have to know that  
<br>
the RTE/OS will be providing certain information. This means that they  
<br>
don't have to go out and discover it themselves every time. Yes, we  
<br>
will leave that as the default behavior so that small and/or unmanaged  
<br>
clusters can operate, but we have to also introduce logic that can  
<br>
detect when we are utilizing this alternative capability and exploit  
<br>
it. While we are trying our best to avoid introducing RTE-like calls  
<br>
into the code, the fact is that we may well have to do so (we have  
<br>
already identified one btl that will definitely need to). It is simply  
<br>
too early to make the decision to cut that off now - we don't know  
<br>
what the long-term impacts of such a decision will be.
<br>
<p>Finally, although I don't do much on the MPI layer, I am concerned  
<br>
about performance. I would tend to oppose any additional abstraction  
<br>
until we can measure the performance impact. Thus, I would like to see  
<br>
the BTL move done on a tmp branch (technology to branch up to the  
<br>
implementer - I don't care) so we can verify that it isn't hurting us  
<br>
in some unforeseeable manner.
<br>
<p><p>So I guess my concerns really boil down to dealing with conflicting  
<br>
schedules and requirements, how to support multiple possibly competing  
<br>
groups that want to share one or more parts of our code base, and  
<br>
retaining an OMPI-first philosophy when it comes to what changes get  
<br>
made. My proposed solution is:
<br>
<p>1. shift our repository to a technical solution that supports broader  
<br>
code sharing
<br>
<p>2. have the non-OMPI groups access our code base via that technology.  
<br>
They can &quot;pull&quot; changes at will, subject to the licensing agreement.  
<br>
It is true that they may have to do some local editing if the change  
<br>
hits a spot where they have local mods to support their system, but  
<br>
both Hg and GIT are very good at handling this - much better than svn  
<br>
ever has been.
<br>
<p>3. if there are minor mods required to make the BTL code area easier  
<br>
to share via the above methods, then we should explore and implement  
<br>
them. Certainly, renaming #define values would seem a no-brainer. I  
<br>
suspect there are other similar things that could be done. Removing  
<br>
orte/opal dependencies is more controversial and would need to  
<br>
thoroughly be examined.
<br>
<p>4. OMPI decides what changes get made to its code base. We are polite  
<br>
about it and talk to the other groups to try and minimize impact, but  
<br>
ultimately we do what is best for OMPI, and send out notifications  
<br>
(perhaps a new mailing list specifically for that purpose) when  
<br>
changes occur. Note that this would have helped the Eclipse group  
<br>
enormously as otherwise they drown in the devel list trying to spot  
<br>
the changes.
<br>
<p>My $0.0002 - hope it helps
<br>
Ralph
<br>
<p><p>On Dec 4, 2008, at 6:00 PM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; Let me start the e-mail conversation, and see how far we get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Goal: The goal several of us have is to be able to use the btl&#146;s  
</span><br>
<span class="quotelev1">&gt; outside of the MPI layer in Open MPI.  The layer itself is generic,  
</span><br>
<span class="quotelev1">&gt; w/o specific knowledge of Upper Level Protocols, so is well suited  
</span><br>
<span class="quotelev1">&gt; for this sort of use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technical Approach: What we have suggested is to start the process  
</span><br>
<span class="quotelev1">&gt; with the Open MPI code base, and make it independent of the mpi- 
</span><br>
<span class="quotelev1">&gt; layer (which it is now), and the run-time layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before we get into any specific technical details,
</span><br>
<span class="quotelev1">&gt; the first question I have is are people totally opposed to the  
</span><br>
<span class="quotelev1">&gt; notion of making the btl&#146;s independent of MPI and the run-time ?
</span><br>
<span class="quotelev1">&gt; This does not mean that it can&#146;t be used by it, but that there are  
</span><br>
<span class="quotelev1">&gt; well defined abstraction layers, i.e., are people against the goal  
</span><br>
<span class="quotelev1">&gt; in the first place ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are alternative suggestions to the technical approach ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One suggestion has been to branch and patch.  To me this is a long- 
</span><br>
<span class="quotelev1">&gt; term maintenance nightmare.
</span><br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5012.php">Jeff Squyres: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5010.php">Ralph Castain: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5007.php">Richard Graham: "[OMPI devel] BTL move - the notion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5014.php">Richard Graham: "Re: [OMPI devel] BTL move - the notion"</a>
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
