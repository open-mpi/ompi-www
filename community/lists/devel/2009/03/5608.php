<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 03:22:07 2009" -->
<!-- isoreceived="20090311072207" -->
<!-- sent="Wed, 11 Mar 2009 03:21:16 -0500" -->
<!-- isosent="20090311082116" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="C5DCDEAC.309F4%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0903091711060.24195_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 04:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5609.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5622.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5622.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
&nbsp;&nbsp;Going back over the e-mail trail it seems like you have raised two
<br>
concerns:
<br>
&nbsp;&nbsp;- BTL performance after the change, which I would take to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- btl latency
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- btl bandwidth
<br>
&nbsp;&nbsp;- Code maintainability
<br>
&nbsp;&nbsp;- repeated code changes that impact a large number of files
<br>
&nbsp;&nbsp;- A demonstration that the changes actually achieve their goal.  As we
<br>
discussed after you got off the call, there are two separate goals here
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- being able to use the btl&#185;s outside the context of mpi, but within
<br>
the ompi code base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ability to use the btl&#185;s in the context of a run-time other than
<br>
orte
<br>
Another concern I have heard raised by others is
<br>
&nbsp;&nbsp;- mpi startup time
<br>
<p>Has anything else been missed here ?  I would like to make sure that we
<br>
address all the issues raised in the next version of the RFC.
<br>
<p>As was mentioned before, our time frame for this is measured in weeks, and
<br>
not in months.  I believe the date of May 1st was mentioned to coincide with
<br>
the next feature release.
<br>
<p>One thing that should help when the naming changes are applied is that this
<br>
is scripted, and the script can be made available for others that are
<br>
working on temp branches &#173; which includes us, also.
<br>
<p>Rich
<br>
<p><p>On 3/9/09 4:14 PM, &quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess then I missed the point of this RFC if not to move code.  It talks
</span><br>
<span class="quotelev1">&gt; about bringing this code into the trunk for the 1.5 time frame.  If it's
</span><br>
<span class="quotelev1">&gt; just getting general comments and there will be an RFC for all the changes
</span><br>
<span class="quotelev1">&gt; (including the onet split proposed below) when the issues have been
</span><br>
<span class="quotelev1">&gt; solved, that's great.  I'll comment on the proposal as a whole once my 4
</span><br>
<span class="quotelev1">&gt; month old questions are answered.  Until then, I don't think we should be
</span><br>
<span class="quotelev1">&gt; using the RFC process to get permission to move portions of a project with
</span><br>
<span class="quotelev1">&gt; critical questions unanswered (which is exactly what this RFC reads as
</span><br>
<span class="quotelev1">&gt; doing).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 9 Mar 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; thanks for the mail!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I completely agree with Your points.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To stress the fact: The timeout date does not mean, that we intend to just
</span><br>
<span class="quotelev3">&gt;&gt; &gt; commit to trunk by that date.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It was rather to get comments to this particular date by all the parties
</span><br>
<span class="quotelev3">&gt;&gt; &gt; interested. (this is what I remembered from previous RFCs, but I could be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrong...)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; All the work that has been committed should cleanup the code. Anything that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; was beyond a cleanup deserved an RFC and input from many people (such as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bitmap_t change...).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We still intend, as in the Louisville meeting, to have as much input from
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; community (that's why this is TRACS-visible svn-tmp-branch).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rainer
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Monday 09 March 2009 04:52:28 pm Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Random points in no particular order (Rainer please correct me if I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; making bad assumptions):
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - I believe that ORNL is proposing to do this work on a separate
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; branch (this is what we have discussed for some time now, and we
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; discussed this deeply in Louisville).  The RFC text doesn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; specifically say, but I would be very surprised if this stuff is
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; planned to come back to the trunk in the near future -- as we have all
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; agreed, it's not done yet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - I believe that the timeout field in RFC's is a limit for non-
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; responsiveness -- it is mainly intended to prevent people from
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ignoring / not responding to RFCs.  I do not believe that Rainer was
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; using that date as a &quot;that's when I'm bringing it all back to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; trunk.&quot;  Indeed, he specifically called out the 1.5 series as a target
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; for this work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - I also believe that Rainer is using this RFC as a means to get
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; preliminary review of the work that has been done on the branch so
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; far.  He has provided a script that shows what they plan to do, how
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the code will be laid out, etc.  There are still some important core
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; issues to be solved -- and, like Brian, I want to see how they'll get
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; solved before being happy (we have strong precedent for this
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; requirement) -- but I think all that Rainer was saying in his RFC was
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &quot;here's where we are so far; can people review and see if they hate it?&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - It was made abundantly clear in the Louisville meeting that ORTE has
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; no short-term plans for using the ONET layer (probably no long-term
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; plans, either, but hey -- never say &quot;never&quot; :-) ).  The design of ONET
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; is such that other RTE's *could* use ONET if they want (e.g., STCI
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; will), but it is not a requirement for the underlying RTE to use
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ONET.  We agreed in Louisville that ORTE will provide sufficient stubs
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; and hooks (all probably effectively no-ops) so that ONET can compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; against it in the default OMPI configuration; other RTEs that want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; do more meaningful stuff will need to provide more meaningful
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; implementations of the stubs and hooks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - Hopefully the teleconference time tomorrow works out for Rich (his
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; communications were unclear on this point).  Otherwise, postponing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; admin discussion until April seems problematic.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On Mar 9, 2009, at 4:01 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I, not suprisingly, have serious concerns about this RFC.  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; assumes that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; the ompi_proc issues and bootstrapping issues (the entire point of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; move, as I understand it) can both be solved, but offer no proof to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; support that claim.  Without those two issues solved, we would be left
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; with an onet layer that is dependent on ORTE and OMPI, and which OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; depends upon.  This is not a good place to be.  These issues should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; resolved before an onet layer is created in the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; This is not an unusual requirement.  The fault tolerance work took a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; very
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; long time because of similar requirements.  Not only was a full
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; implementation required to prove performance would not be negatively
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; impacted (when FT wasn't active), but we had discussions about its
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; impact
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; on code maintainability.  We had a full implementation of all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; pieces
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; that impacted the code *before* any of it was allowed into the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; We should live by the rules the community has setup.  They have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; served us
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; well in the past.  Further, these are not new objections on my part.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Since the initial RFCs related to this move started, I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; continually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; brought up the exact same questions and never gotten a satisfactory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; answer.  This RFC even acknowledges the issues, but without
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; presenting any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; solution and still asks to do the most disruptive work.  I simply
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; see how that fits with Open MPI's long-standing development
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; proceedures.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; If all the issues I've asked about previously (which are essentially
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; ones you've identified in the RFC) can be solved, the impact to code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; base
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; maintainability is reasonable, and the impact to performance is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; negligable, I'll gladly remove my objection to this RFC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Further, before any work on this branch is brought into the trunk, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; admin-level discussion regarding this issue should be resolved.  At
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; time, that discussion is blocking on ORNL and they've given April as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; earliest such a discussion can occur.  So at the very least, the RFC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; timeout should be pushed into April or ORNL should revise their
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; availability for the admin discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; On Mon, 9 Mar 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; What:     Move BTLs into separate layer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Why:      Several projects have expressed interest to use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; BTLs. Use-cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; such as the RTE using the BTLs for modex or tools collecting/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; distributing data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; in the fastest possible way may be possible.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Where:    This would affect several components, that the BTLs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; depend on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; (namely allocator, mpool, rcache and the common part of the BTLs).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Additionally some changes to classes were/are necessary.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; When:     Preferably 1.5 (in case we use the Feature/Stable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Release cycle ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Timeout:  23.03.2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; There has been much speculation about this project.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; This RFC should shed some light, if there is some more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; required,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; please feel free to ask/comment. Of course, suggestions are welcome!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The BTLs offer access to fast communication framework. Several
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; projects have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; expressed interest to use them separate of other layers of Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Additionally (with further changes) BTLs maybe used within ORTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; COURSE OF WORK:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The extraction is not easy (as was the extraction of ORTE and OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; early stages of Open MPI?).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; In order to get as much input and be as visible as possible (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; in TRACS),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; the tmp-branch for this work has been set up on:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; We propose to have a separate ONET library living in onet, based
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; on orte (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; attached fig).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; In order to keep the diff between the trunk and the branch to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; minimum
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; several cleanup patches have already been applied to the trunk (e.g.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; unnecessary #include of ompi and orte header files, integration of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; ompi_bitmap_t into opal_bitmap_t, #include &quot;*_config.h&quot;).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Additionally a script (attached below) has been kept up-to-date
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; (contrib/move-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; btl-into-onet), that will perform this separation on a fresh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; checkout of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; trunk:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  svn list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl</a>-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; into-onet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; This script requires several patches (see attached TAR-ball).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Please update the variable PATCH_DIR to match the location of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; patches.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  ./move-btl-into-onet ompi-clean/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  # Lots of output deleted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  cd ompi-clean/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  rm -fr ompi/mca/common/  # No two mcas called common, too bad...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  ./autogen.sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; OTHER RTEs:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; A preliminary header file is provided in onet/include/rte.h to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; accommodate the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; requirements of other RTEs (such as stci), that replaces selected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; functionality, as proposed by Jeff and Ralph in the Louisville
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; meeting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Additionally, this header file is included before orte-header
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; files (within
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; onet)...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; By default, this does not change anything in the standard case
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; (ORTE),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; otherwise -DHAVE_STCI, redefinitions for components orte-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; functionality
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; required within onet is done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; TESTS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; First tests have been done locally on Linux/x86_64.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The branch compiles without warnings.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The wrappers have been updated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; The Intel Testsuite runs without failures:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  ./run-tests.pl  all_tests_no_perf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; PERFORMANCE:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; !!!Before any merge, do extensive performance tests on real
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; machines!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Initial tests on the cluster smoky, show no difference in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; comparison to ompi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Please see the enclosed output of NetPipe-3.7.1 run on a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; node (--mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; btl sm,self) on smoky.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; TODOS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; There are still some todos, to finalize this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; - Dependencies in the onet-layer into the ompi-layer (ompi_proc_t,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; ompi_converter)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;  We are working on these, and have shortly talked about the latter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; - Better abstraction from orte / cleanups, such as modex
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; If these involve code-changes (and not just &quot;save&quot; and non-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; intrusive renames),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; such as a opal_keyval-change, we will continue to write RFCs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5609.php">Terry Dontje: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5607.php">Eugene Loh: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5622.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5622.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
