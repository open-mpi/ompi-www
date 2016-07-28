<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 09:00:48 2009" -->
<!-- isoreceived="20090314130048" -->
<!-- sent="Sat, 14 Mar 2009 09:00:32 -0400" -->
<!-- isosent="20090314130032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="5436C1A1-EE51-4B0B-87F0-DA10B6FD6EBA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0903111235520.20862_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 09:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5647.php">Jeff Squyres: "[OMPI devel] Next week: WebEx remote attendance of OpenFabrics Sonoma conference"</a>
<li><strong>Previous message:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 blocker"</a>
<li><strong>In reply to:</strong> <a href="5622.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian --
<br>
<p>Thanks for such a detailed answer!  This helps clarify many things.
<br>
<p><p>On Mar 11, 2009, at 1:31 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 11 Mar 2009, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian,
</span><br>
<span class="quotelev2">&gt; &gt; Going back over the e-mail trail it seems like you have raised two
</span><br>
<span class="quotelev2">&gt; &gt; concerns:
</span><br>
<span class="quotelev2">&gt; &gt; - BTL performance after the change, which I would take to be
</span><br>
<span class="quotelev2">&gt; &gt;   - btl latency
</span><br>
<span class="quotelev2">&gt; &gt;   - btl bandwidth
</span><br>
<span class="quotelev2">&gt; &gt; - Code maintainability
</span><br>
<span class="quotelev2">&gt; &gt; - repeated code changes that impact a large number of files
</span><br>
<span class="quotelev2">&gt; &gt; - A demonstration that the changes actually achieve their goal. As  
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev2">&gt; &gt; discussed after you got off the call, there are two separate goals  
</span><br>
<span class="quotelev1">&gt; here
</span><br>
<span class="quotelev2">&gt; &gt;   - being able to use the btl?s outside the context of mpi, but
</span><br>
<span class="quotelev2">&gt; &gt; within the ompi code base
</span><br>
<span class="quotelev2">&gt; &gt;   - ability to use the btl?s in the context of a run-time other than
</span><br>
<span class="quotelev2">&gt; &gt; orte
</span><br>
<span class="quotelev2">&gt; &gt; Another concern I have heard raised by others is
</span><br>
<span class="quotelev2">&gt; &gt;   - mpi startup time
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has anything else been missed here ?  I would like to make sure  
</span><br>
<span class="quotelev1">&gt; that we
</span><br>
<span class="quotelev2">&gt; &gt; address all the issues raised in the next version of the RFC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the umbrella concerns for the final success of the change  
</span><br>
<span class="quotelev1">&gt; are btl
</span><br>
<span class="quotelev1">&gt; performance (in particular, latency and message rates for cache- 
</span><br>
<span class="quotelev1">&gt; unfriendly
</span><br>
<span class="quotelev1">&gt; applications/benchmarks) and code maintainability.  In addition,  
</span><br>
<span class="quotelev1">&gt; there are
</span><br>
<span class="quotelev1">&gt; some intermediate change issues I have, in that this project is  
</span><br>
<span class="quotelev1">&gt; working
</span><br>
<span class="quotelev1">&gt; different than other large changes.  In particular, there is/was the
</span><br>
<span class="quotelev1">&gt; appearance of being asked to accept changes which only make sense if  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; btl move is going to move forward, without any way to judge the
</span><br>
<span class="quotelev1">&gt; performance or code impact because critical technical issues still  
</span><br>
<span class="quotelev1">&gt; remain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The latency/message rate issues are fairly straight forward from an  
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt; measure point-of-view.  My concerns on latency/message rate come not  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; the movement of the BTL to another library (for most operating  
</span><br>
<span class="quotelev1">&gt; systems /
</span><br>
<span class="quotelev1">&gt; shared library systems that should be negligible), but from the code
</span><br>
<span class="quotelev1">&gt; changes which surround moving the BTLs.  The BTLs are tightly  
</span><br>
<span class="quotelev1">&gt; intertwined
</span><br>
<span class="quotelev1">&gt; with a number of pieces of the OMPI layer, in particular the BML and  
</span><br>
<span class="quotelev1">&gt; MPool
</span><br>
<span class="quotelev1">&gt; frameworks and the ompi proc structure.  I had a productive  
</span><br>
<span class="quotelev1">&gt; conversation
</span><br>
<span class="quotelev1">&gt; with Rainer this morning explaining why I'm so concerned about the  
</span><br>
<span class="quotelev1">&gt; bml and
</span><br>
<span class="quotelev1">&gt; ompi proc structures.  The ompi proc structure currently acts not  
</span><br>
<span class="quotelev1">&gt; only as
</span><br>
<span class="quotelev1">&gt; the identifier for a remote endpoint, but stores endpoint specific  
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt; for both the PML and BML.  The BML structure actually contains each  
</span><br>
<span class="quotelev1">&gt; BTL's
</span><br>
<span class="quotelev1">&gt; per process endpoint information, in the form of the base_endpoint_t*
</span><br>
<span class="quotelev1">&gt; structures returned from add_procs().  Moving these structures  
</span><br>
<span class="quotelev1">&gt; around must
</span><br>
<span class="quotelev1">&gt; be done with care, as some of the proposals Jeff, Rainer, and I came  
</span><br>
<span class="quotelev1">&gt; up
</span><br>
<span class="quotelev1">&gt; with this morning either induced spaghetti code or greatly increased  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; spread of information needed for the critical send path through the  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; space (thereby likely increasing cache misses on send for real
</span><br>
<span class="quotelev1">&gt; applications).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code maintainability issue comes from three separate and  
</span><br>
<span class="quotelev1">&gt; independent
</span><br>
<span class="quotelev1">&gt; issues.  First, there is the issue of how the pieces of the OMPI layer
</span><br>
<span class="quotelev1">&gt; will interact after the move.  The BML/BTL/MPool/Rcache dance is  
</span><br>
<span class="quotelev1">&gt; already
</span><br>
<span class="quotelev1">&gt; complicated, and care should be taken to minimize that change.   
</span><br>
<span class="quotelev1">&gt; Start-up
</span><br>
<span class="quotelev1">&gt; is also already quite complex, and moving the BTLs to make them
</span><br>
<span class="quotelev1">&gt; independent of starting other pieces of Open MPI can be done well or  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; be done poorly.  We need to ensure it's done well, obviously.  Second,
</span><br>
<span class="quotelev1">&gt; there is the issue of wire-up.  My impression from conversations with
</span><br>
<span class="quotelev1">&gt; everyone at ORNL was that this move of BTLs would include changes to  
</span><br>
<span class="quotelev1">&gt; allow
</span><br>
<span class="quotelev1">&gt; BTLs to wire-up without the RML.  I understand that Rich said this  
</span><br>
<span class="quotelev1">&gt; was not
</span><br>
<span class="quotelev1">&gt; the case during the part of the admin meeting I missed yesterday, so
</span><br>
<span class="quotelev1">&gt; that may no longer be a concern.  Finally, there has been some  
</span><br>
<span class="quotelev1">&gt; discussion,
</span><br>
<span class="quotelev1">&gt; mainly second hand in my case, about the mechanisms in which the trunk
</span><br>
<span class="quotelev1">&gt; would be modified to allow for using OMPI without ORTE.  I have  
</span><br>
<span class="quotelev1">&gt; concerns
</span><br>
<span class="quotelev1">&gt; that we'd add complexity to the BTLs to achieve that, and again that  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; be done poorly if we're not careful.  Talking with Jeff and Rainer  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; morning helped reduce my concern in this area, but I think it also  
</span><br>
<span class="quotelev1">&gt; added
</span><br>
<span class="quotelev1">&gt; to the technical issues with must be solved to consider this project  
</span><br>
<span class="quotelev1">&gt; ready
</span><br>
<span class="quotelev1">&gt; for movement to the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a couple of technical issues which I believe prevent a
</span><br>
<span class="quotelev1">&gt; reasonable discussion of the performance and maintainability issues  
</span><br>
<span class="quotelev1">&gt; based
</span><br>
<span class="quotelev1">&gt; on the current branch.  I talked about some of them in the previous  
</span><br>
<span class="quotelev1">&gt; two
</span><br>
<span class="quotelev1">&gt; paragraphs, but so that we have a short bullet list, they are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - How will the ompi_proc_t be handled?  In particular,
</span><br>
<span class="quotelev1">&gt;      where will PML/BML data be stored, and how will we
</span><br>
<span class="quotelev1">&gt;      avoid adding new cache misses.
</span><br>
<span class="quotelev1">&gt;    - How will the BML and MPool be handled?  The BML holds
</span><br>
<span class="quotelev1">&gt;      the BTL endpoint data, so changes have to be made if
</span><br>
<span class="quotelev1">&gt;      it continues to live in OMPI.
</span><br>
<span class="quotelev1">&gt;    - How will the modex and the intricate dance with adding
</span><br>
<span class="quotelev1">&gt;      new procs from dynamic processes be handled?
</span><br>
<span class="quotelev1">&gt;    - How will we handle the progress mechanisms in cases where
</span><br>
<span class="quotelev1">&gt;      the MTLs are used and the BTLs aren't needed by the RTE?
</span><br>
<span class="quotelev1">&gt;    - If there are users outside of OMPI, but who want to also use
</span><br>
<span class="quotelev1">&gt;      OMPI, how will the library versioning / conflict problem be
</span><br>
<span class="quotelev1">&gt;      solved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; As was mentioned before, our time frame for this is measured in  
</span><br>
<span class="quotelev1">&gt; weeks,
</span><br>
<span class="quotelev2">&gt; &gt; and not in months.  I believe the date of May 1st was mentioned to
</span><br>
<span class="quotelev2">&gt; &gt; coincide with the next feature release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I understand your deadline, we have in the past been very
</span><br>
<span class="quotelev1">&gt; conservative with such large changes.  The C/R work was delayed for  
</span><br>
<span class="quotelev1">&gt; over a
</span><br>
<span class="quotelev1">&gt; year because people were concerned with the impact to performance and
</span><br>
<span class="quotelev1">&gt; maintainability.  ORTE work is consistently delayed in the name of  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; stability.  I believe that changing our desire for high quality code  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; the trunk because of an organization's deadline (particularly when  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; organizations are successfully using branches to meet their deadlines)
</span><br>
<span class="quotelev1">&gt; sets a poor precedent and goes against previous precedents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly, my concern with the intermediate changes which have been
</span><br>
<span class="quotelev1">&gt; proposed or occurred come from the slippery-slope argument.  Changes  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; are really only necessary for the btl move (even general code  
</span><br>
<span class="quotelev1">&gt; cleanups)
</span><br>
<span class="quotelev1">&gt; should only occur once we're all sure the btl move will work.   
</span><br>
<span class="quotelev1">&gt; Otherwise,
</span><br>
<span class="quotelev1">&gt; we're impacting other developers (many of who are working on temp  
</span><br>
<span class="quotelev1">&gt; branches
</span><br>
<span class="quotelev1">&gt; attempting to get a feature to completion, as our normal process
</span><br>
<span class="quotelev1">&gt; dictates) in order to reach an end point which may not be  
</span><br>
<span class="quotelev1">&gt; achievable.  In
</span><br>
<span class="quotelev1">&gt; talking to Rainer this morning with Jeff, I think we came up with a  
</span><br>
<span class="quotelev1">&gt; number
</span><br>
<span class="quotelev1">&gt; of ideas on how to mitigate this impact and find a better balance  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; allows ORNL to answer the critical technical questions (which are  
</span><br>
<span class="quotelev1">&gt; not just
</span><br>
<span class="quotelev1">&gt; mine, but are shared by others and are critical to the &quot;make it  
</span><br>
<span class="quotelev1">&gt; work&quot; part
</span><br>
<span class="quotelev1">&gt; of the process) and allows the rest of the community some belief  
</span><br>
<span class="quotelev1">&gt; that we
</span><br>
<span class="quotelev1">&gt; can avoid any permanent harm if the move doesn't work out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; One thing that should help when the naming changes are applied is  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; this is scripted, and the script can be made available for others  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; are working on temp branches ? which includes us, also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That unfortunately doesn't help other developers, if they're trying to
</span><br>
<span class="quotelev1">&gt; strictly follow the version control changes to the trunk.  The  
</span><br>
<span class="quotelev1">&gt; problem is
</span><br>
<span class="quotelev1">&gt; that we're going to get all those moves (hopefully the script now  
</span><br>
<span class="quotelev1">&gt; svn moves
</span><br>
<span class="quotelev1">&gt; instead of svn rm / svn add) through the version control system.  The
</span><br>
<span class="quotelev1">&gt; script would then cause all the changes to occur a second time, and  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; could be very problematic.  The problem with the version control  
</span><br>
<span class="quotelev1">&gt; changes
</span><br>
<span class="quotelev1">&gt; filtering down is that it is not all-encompassing.  For example, svn  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; have problems if the btl directory moves but I have my own private  
</span><br>
<span class="quotelev1">&gt; special
</span><br>
<span class="quotelev1">&gt; BTL.  Yes, i might be able to use your scripts to handle that, but  
</span><br>
<span class="quotelev1">&gt; if they
</span><br>
<span class="quotelev1">&gt; aren't written with that scenario in mind, they won't help.  It also  
</span><br>
<span class="quotelev1">&gt; won't
</span><br>
<span class="quotelev1">&gt; help if I've added a particular file to an existing BTL and the BTL  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; moves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think these cases are worth the pain to non-ORNL developers *IF*  
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev1">&gt; other issues are addressed.  Otherwise, we're unfairly asking them  
</span><br>
<span class="quotelev1">&gt; to deal
</span><br>
<span class="quotelev1">&gt; with a radically changing code base for an incomplete project, a  
</span><br>
<span class="quotelev1">&gt; situation
</span><br>
<span class="quotelev1">&gt; we've worked to avoid in the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully this explains my thoughts on the btl move.  I'm not  
</span><br>
<span class="quotelev1">&gt; opposed to
</span><br>
<span class="quotelev1">&gt; the move itself (although I reserve the right to become opposed,  
</span><br>
<span class="quotelev1">&gt; based on
</span><br>
<span class="quotelev1">&gt; performance and maintainability issues).  I have a problem with the  
</span><br>
<span class="quotelev1">&gt; change
</span><br>
<span class="quotelev1">&gt; in process from previous large, invasive changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; &lt;ATT4444789.txt&gt;
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
<li><strong>Next message:</strong> <a href="5647.php">Jeff Squyres: "[OMPI devel] Next week: WebEx remote attendance of OpenFabrics Sonoma conference"</a>
<li><strong>Previous message:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 blocker"</a>
<li><strong>In reply to:</strong> <a href="5622.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
