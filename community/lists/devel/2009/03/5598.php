<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 17:08:15 2009" -->
<!-- isoreceived="20090309210815" -->
<!-- sent="Mon, 09 Mar 2009 17:07:13 -0400" -->
<!-- isosent="20090309210713" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="200903091707.13699.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="60518643-8B93-4C9F-85E1-9FBA99CC749C_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 17:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
thanks for the mail!
<br>
I completely agree with Your points.
<br>
<p>To stress the fact: The timeout date does not mean, that we intend to just 
<br>
commit to trunk by that date.
<br>
It was rather to get comments to this particular date by all the parties 
<br>
interested. (this is what I remembered from previous RFCs, but I could be 
<br>
wrong...)
<br>
All the work that has been committed should cleanup the code. Anything that 
<br>
was beyond a cleanup deserved an RFC and input from many people (such as 
<br>
bitmap_t change...).
<br>
<p>We still intend, as in the Louisville meeting, to have as much input from the 
<br>
community (that's why this is TRACS-visible svn-tmp-branch).
<br>
<p>Thanks,
<br>
Rainer
<br>
<p><p><p>On Monday 09 March 2009 04:52:28 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Random points in no particular order (Rainer please correct me if I'm
</span><br>
<span class="quotelev1">&gt; making bad assumptions):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I believe that ORNL is proposing to do this work on a separate
</span><br>
<span class="quotelev1">&gt; branch (this is what we have discussed for some time now, and we
</span><br>
<span class="quotelev1">&gt; discussed this deeply in Louisville).  The RFC text doesn't
</span><br>
<span class="quotelev1">&gt; specifically say, but I would be very surprised if this stuff is
</span><br>
<span class="quotelev1">&gt; planned to come back to the trunk in the near future -- as we have all
</span><br>
<span class="quotelev1">&gt; agreed, it's not done yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I believe that the timeout field in RFC's is a limit for non-
</span><br>
<span class="quotelev1">&gt; responsiveness -- it is mainly intended to prevent people from
</span><br>
<span class="quotelev1">&gt; ignoring / not responding to RFCs.  I do not believe that Rainer was
</span><br>
<span class="quotelev1">&gt; using that date as a &quot;that's when I'm bringing it all back to the
</span><br>
<span class="quotelev1">&gt; trunk.&quot;  Indeed, he specifically called out the 1.5 series as a target
</span><br>
<span class="quotelev1">&gt; for this work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I also believe that Rainer is using this RFC as a means to get
</span><br>
<span class="quotelev1">&gt; preliminary review of the work that has been done on the branch so
</span><br>
<span class="quotelev1">&gt; far.  He has provided a script that shows what they plan to do, how
</span><br>
<span class="quotelev1">&gt; the code will be laid out, etc.  There are still some important core
</span><br>
<span class="quotelev1">&gt; issues to be solved -- and, like Brian, I want to see how they'll get
</span><br>
<span class="quotelev1">&gt; solved before being happy (we have strong precedent for this
</span><br>
<span class="quotelev1">&gt; requirement) -- but I think all that Rainer was saying in his RFC was
</span><br>
<span class="quotelev1">&gt; &quot;here's where we are so far; can people review and see if they hate it?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - It was made abundantly clear in the Louisville meeting that ORTE has
</span><br>
<span class="quotelev1">&gt; no short-term plans for using the ONET layer (probably no long-term
</span><br>
<span class="quotelev1">&gt; plans, either, but hey -- never say &quot;never&quot; :-) ).  The design of ONET
</span><br>
<span class="quotelev1">&gt; is such that other RTE's *could* use ONET if they want (e.g., STCI
</span><br>
<span class="quotelev1">&gt; will), but it is not a requirement for the underlying RTE to use
</span><br>
<span class="quotelev1">&gt; ONET.  We agreed in Louisville that ORTE will provide sufficient stubs
</span><br>
<span class="quotelev1">&gt; and hooks (all probably effectively no-ops) so that ONET can compile
</span><br>
<span class="quotelev1">&gt; against it in the default OMPI configuration; other RTEs that want to
</span><br>
<span class="quotelev1">&gt; do more meaningful stuff will need to provide more meaningful
</span><br>
<span class="quotelev1">&gt; implementations of the stubs and hooks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Hopefully the teleconference time tomorrow works out for Rich (his
</span><br>
<span class="quotelev1">&gt; communications were unclear on this point).  Otherwise, postponing the
</span><br>
<span class="quotelev1">&gt; admin discussion until April seems problematic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2009, at 4:01 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I, not suprisingly, have serious concerns about this RFC.  It
</span><br>
<span class="quotelev2">&gt; &gt; assumes that
</span><br>
<span class="quotelev2">&gt; &gt; the ompi_proc issues and bootstrapping issues (the entire point of the
</span><br>
<span class="quotelev2">&gt; &gt; move, as I understand it) can both be solved, but offer no proof to
</span><br>
<span class="quotelev2">&gt; &gt; support that claim.  Without those two issues solved, we would be left
</span><br>
<span class="quotelev2">&gt; &gt; with an onet layer that is dependent on ORTE and OMPI, and which OMPI
</span><br>
<span class="quotelev2">&gt; &gt; depends upon.  This is not a good place to be.  These issues should be
</span><br>
<span class="quotelev2">&gt; &gt; resolved before an onet layer is created in the trunk.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is not an unusual requirement.  The fault tolerance work took a
</span><br>
<span class="quotelev2">&gt; &gt; very
</span><br>
<span class="quotelev2">&gt; &gt; long time because of similar requirements.  Not only was a full
</span><br>
<span class="quotelev2">&gt; &gt; implementation required to prove performance would not be negatively
</span><br>
<span class="quotelev2">&gt; &gt; impacted (when FT wasn't active), but we had discussions about its
</span><br>
<span class="quotelev2">&gt; &gt; impact
</span><br>
<span class="quotelev2">&gt; &gt; on code maintainability.  We had a full implementation of all the
</span><br>
<span class="quotelev2">&gt; &gt; pieces
</span><br>
<span class="quotelev2">&gt; &gt; that impacted the code *before* any of it was allowed into the trunk.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We should live by the rules the community has setup.  They have
</span><br>
<span class="quotelev2">&gt; &gt; served us
</span><br>
<span class="quotelev2">&gt; &gt; well in the past.  Further, these are not new objections on my part.
</span><br>
<span class="quotelev2">&gt; &gt; Since the initial RFCs related to this move started, I have
</span><br>
<span class="quotelev2">&gt; &gt; continually
</span><br>
<span class="quotelev2">&gt; &gt; brought up the exact same questions and never gotten a satisfactory
</span><br>
<span class="quotelev2">&gt; &gt; answer.  This RFC even acknowledges the issues, but without
</span><br>
<span class="quotelev2">&gt; &gt; presenting any
</span><br>
<span class="quotelev2">&gt; &gt; solution and still asks to do the most disruptive work.  I simply
</span><br>
<span class="quotelev2">&gt; &gt; can't
</span><br>
<span class="quotelev2">&gt; &gt; see how that fits with Open MPI's long-standing development
</span><br>
<span class="quotelev2">&gt; &gt; proceedures.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If all the issues I've asked about previously (which are essentially
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; ones you've identified in the RFC) can be solved, the impact to code
</span><br>
<span class="quotelev2">&gt; &gt; base
</span><br>
<span class="quotelev2">&gt; &gt; maintainability is reasonable, and the impact to performance is
</span><br>
<span class="quotelev2">&gt; &gt; negligable, I'll gladly remove my objection to this RFC.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Further, before any work on this branch is brought into the trunk, the
</span><br>
<span class="quotelev2">&gt; &gt; admin-level discussion regarding this issue should be resolved.  At
</span><br>
<span class="quotelev2">&gt; &gt; this
</span><br>
<span class="quotelev2">&gt; &gt; time, that discussion is blocking on ORNL and they've given April as
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; earliest such a discussion can occur.  So at the very least, the RFC
</span><br>
<span class="quotelev2">&gt; &gt; timeout should be pushed into April or ORNL should revise their
</span><br>
<span class="quotelev2">&gt; &gt; availability for the admin discussion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 9 Mar 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What:     Move BTLs into separate layer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Why:      Several projects have expressed interest to use the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTLs. Use-cases
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; such as the RTE using the BTLs for modex or tools collecting/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; distributing data
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the fastest possible way may be possible.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Where:    This would affect several components, that the BTLs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; depend on
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (namely allocator, mpool, rcache and the common part of the BTLs).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Additionally some changes to classes were/are necessary.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When:     Preferably 1.5 (in case we use the Feature/Stable
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Release cycle ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Timeout:  23.03.2009
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There has been much speculation about this project.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This RFC should shed some light, if there is some more information
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; required,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; please feel free to ask/comment. Of course, suggestions are welcome!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The BTLs offer access to fast communication framework. Several
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; projects have
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; expressed interest to use them separate of other layers of Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Additionally (with further changes) BTLs maybe used within ORTE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; itself.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; COURSE OF WORK:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The extraction is not easy (as was the extraction of ORTE and OMPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; early stages of Open MPI?).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In order to get as much input and be as visible as possible (e.g.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in TRACS),
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the tmp-branch for this work has been set up on:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We propose to have a separate ONET library living in onet, based
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on orte (see
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attached fig).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In order to keep the diff between the trunk and the branch to a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; minimum
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; several cleanup patches have already been applied to the trunk (e.g.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; unnecessary #include of ompi and orte header files, integration of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_bitmap_t into opal_bitmap_t, #include &quot;*_config.h&quot;).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Additionally a script (attached below) has been kept up-to-date
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (contrib/move-
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl-into-onet), that will perform this separation on a fresh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checkout of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; trunk:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  svn list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl</a>-
</span><br>
<span class="quotelev3">&gt; &gt; &gt; into-onet
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This script requires several patches (see attached TAR-ball).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please update the variable PATCH_DIR to match the location of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; patches.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ./move-btl-into-onet ompi-clean/
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  # Lots of output deleted.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  cd ompi-clean/
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  rm -fr ompi/mca/common/  # No two mcas called common, too bad...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ./autogen.sh
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OTHER RTEs:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A preliminary header file is provided in onet/include/rte.h to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; accommodate the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; requirements of other RTEs (such as stci), that replaces selected
</span><br>
<span class="quotelev3">&gt; &gt; &gt; functionality, as proposed by Jeff and Ralph in the Louisville
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; meeting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Additionally, this header file is included before orte-header
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; files (within
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; onet)...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; By default, this does not change anything in the standard case
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (ORTE),
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; otherwise -DHAVE_STCI, redefinitions for components orte-
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; functionality
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; required within onet is done.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TESTS:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; First tests have been done locally on Linux/x86_64.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The branch compiles without warnings.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The wrappers have been updated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The Intel Testsuite runs without failures:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ./run-tests.pl  all_tests_no_perf
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PERFORMANCE:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; !!!Before any merge, do extensive performance tests on real
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; machines!!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Initial tests on the cluster smoky, show no difference in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; comparison to ompi-
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; trunk.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please see the enclosed output of NetPipe-3.7.1 run on a single
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; node (--mca
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl sm,self) on smoky.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TODOS:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There are still some todos, to finalize this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Dependencies in the onet-layer into the ompi-layer (ompi_proc_t,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_converter)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  We are working on these, and have shortly talked about the latter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; George.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Better abstraction from orte / cleanups, such as modex
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If these involve code-changes (and not just &quot;save&quot; and non-
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; intrusive renames),
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; such as a opal_keyval-change, we will continue to write RFCs.
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
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5599.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
