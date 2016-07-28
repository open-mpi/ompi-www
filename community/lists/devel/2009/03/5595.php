<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 16:01:33 2009" -->
<!-- isoreceived="20090309200133" -->
<!-- sent="Mon, 9 Mar 2009 16:01:29 -0400 (EDT)" -->
<!-- isosent="20090309200129" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="alpine.DEB.1.10.0903091456550.24195_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200903091451.42176.keller_at_ornl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 16:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5596.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5592.php">Rainer Keller: "[OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I, not suprisingly, have serious concerns about this RFC.  It assumes that 
<br>
the ompi_proc issues and bootstrapping issues (the entire point of the 
<br>
move, as I understand it) can both be solved, but offer no proof to 
<br>
support that claim.  Without those two issues solved, we would be left 
<br>
with an onet layer that is dependent on ORTE and OMPI, and which OMPI 
<br>
depends upon.  This is not a good place to be.  These issues should be 
<br>
resolved before an onet layer is created in the trunk.
<br>
<p>This is not an unusual requirement.  The fault tolerance work took a very 
<br>
long time because of similar requirements.  Not only was a full 
<br>
implementation required to prove performance would not be negatively 
<br>
impacted (when FT wasn't active), but we had discussions about its impact 
<br>
on code maintainability.  We had a full implementation of all the pieces 
<br>
that impacted the code *before* any of it was allowed into the trunk.
<br>
<p>We should live by the rules the community has setup.  They have served us 
<br>
well in the past.  Further, these are not new objections on my part. 
<br>
Since the initial RFCs related to this move started, I have continually 
<br>
brought up the exact same questions and never gotten a satisfactory 
<br>
answer.  This RFC even acknowledges the issues, but without presenting any 
<br>
solution and still asks to do the most disruptive work.  I simply can't 
<br>
see how that fits with Open MPI's long-standing development proceedures.
<br>
<p>If all the issues I've asked about previously (which are essentially the 
<br>
ones you've identified in the RFC) can be solved, the impact to code base 
<br>
maintainability is reasonable, and the impact to performance is 
<br>
negligable, I'll gladly remove my objection to this RFC.
<br>
<p>Further, before any work on this branch is brought into the trunk, the 
<br>
admin-level discussion regarding this issue should be resolved.  At this 
<br>
time, that discussion is blocking on ORNL and they've given April as the 
<br>
earliest such a discussion can occur.  So at the very least, the RFC 
<br>
timeout should be pushed into April or ORNL should revise their 
<br>
availability for the admin discussion.
<br>
<p><p>Brian
<br>
<p><p>On Mon, 9 Mar 2009, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What:     Move BTLs into separate layer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why:      Several projects have expressed interest to use the BTLs. Use-cases
</span><br>
<span class="quotelev1">&gt; such as the RTE using the BTLs for modex or tools collecting/distributing data
</span><br>
<span class="quotelev1">&gt; in the fastest possible way may be possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where:    This would affect several components, that the BTLs depend on
</span><br>
<span class="quotelev1">&gt; (namely allocator, mpool, rcache and the common part of the BTLs).
</span><br>
<span class="quotelev1">&gt; Additionally some changes to classes were/are necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When:     Preferably 1.5 (in case we use the Feature/Stable Release cycle ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout:  23.03.2009
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There has been much speculation about this project.
</span><br>
<span class="quotelev1">&gt; This RFC should shed some light, if there is some more information required,
</span><br>
<span class="quotelev1">&gt; please feel free to ask/comment. Of course, suggestions are welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BTLs offer access to fast communication framework. Several projects have
</span><br>
<span class="quotelev1">&gt; expressed interest to use them separate of other layers of Open MPI.
</span><br>
<span class="quotelev1">&gt; Additionally (with further changes) BTLs maybe used within ORTE itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COURSE OF WORK:
</span><br>
<span class="quotelev1">&gt; The extraction is not easy (as was the extraction of ORTE and OMPI in the
</span><br>
<span class="quotelev1">&gt; early stages of Open MPI?).
</span><br>
<span class="quotelev1">&gt; In order to get as much input and be as visible as possible (e.g. in TRACS),
</span><br>
<span class="quotelev1">&gt; the tmp-branch for this work has been set up on:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We propose to have a separate ONET library living in onet, based on orte (see
</span><br>
<span class="quotelev1">&gt; attached fig).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to keep the diff between the trunk and the branch to a minimum
</span><br>
<span class="quotelev1">&gt; several cleanup patches have already been applied to the trunk (e.g.
</span><br>
<span class="quotelev1">&gt; unnecessary #include of ompi and orte header files, integration of
</span><br>
<span class="quotelev1">&gt; ompi_bitmap_t into opal_bitmap_t, #include &quot;*_config.h&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally a script (attached below) has been kept up-to-date (contrib/move-
</span><br>
<span class="quotelev1">&gt; btl-into-onet), that will perform this separation on a fresh checkout of
</span><br>
<span class="quotelev1">&gt; trunk:
</span><br>
<span class="quotelev1">&gt;  svn list <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl</a>-
</span><br>
<span class="quotelev1">&gt; into-onet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This script requires several patches (see attached TAR-ball).
</span><br>
<span class="quotelev1">&gt; Please update the variable PATCH_DIR to match the location of patches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./move-btl-into-onet ompi-clean/
</span><br>
<span class="quotelev1">&gt;  # Lots of output deleted.
</span><br>
<span class="quotelev1">&gt;  cd ompi-clean/
</span><br>
<span class="quotelev1">&gt;  rm -fr ompi/mca/common/  # No two mcas called common, too bad...
</span><br>
<span class="quotelev1">&gt;  ./autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OTHER RTEs:
</span><br>
<span class="quotelev1">&gt; A preliminary header file is provided in onet/include/rte.h to accommodate the
</span><br>
<span class="quotelev1">&gt; requirements of other RTEs (such as stci), that replaces selected
</span><br>
<span class="quotelev1">&gt; functionality, as proposed by Jeff and Ralph in the Louisville meeting.
</span><br>
<span class="quotelev1">&gt; Additionally, this header file is included before orte-header files (within
</span><br>
<span class="quotelev1">&gt; onet)...
</span><br>
<span class="quotelev1">&gt; By default, this does not change anything in the standard case (ORTE),
</span><br>
<span class="quotelev1">&gt; otherwise -DHAVE_STCI, redefinitions for components orte-functionality
</span><br>
<span class="quotelev1">&gt; required within onet is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TESTS:
</span><br>
<span class="quotelev1">&gt; First tests have been done locally on Linux/x86_64.
</span><br>
<span class="quotelev1">&gt; The branch compiles without warnings.
</span><br>
<span class="quotelev1">&gt; The wrappers have been updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Intel Testsuite runs without failures:
</span><br>
<span class="quotelev1">&gt;  ./run-tests.pl  all_tests_no_perf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PERFORMANCE:
</span><br>
<span class="quotelev1">&gt; !!!Before any merge, do extensive performance tests on real machines!!!
</span><br>
<span class="quotelev1">&gt; Initial tests on the cluster smoky, show no difference in comparison to ompi-
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt; Please see the enclosed output of NetPipe-3.7.1 run on a single node (--mca
</span><br>
<span class="quotelev1">&gt; btl sm,self) on smoky.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TODOS:
</span><br>
<span class="quotelev1">&gt; There are still some todos, to finalize this:
</span><br>
<span class="quotelev1">&gt; - Dependencies in the onet-layer into the ompi-layer (ompi_proc_t,
</span><br>
<span class="quotelev1">&gt; ompi_converter)
</span><br>
<span class="quotelev1">&gt;  We are working on these, and have shortly talked about the latter with
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; - Better abstraction from orte / cleanups, such as modex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If these involve code-changes (and not just &quot;save&quot; and non-intrusive renames),
</span><br>
<span class="quotelev1">&gt; such as a opal_keyval-change, we will continue to write RFCs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5596.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5592.php">Rainer Keller: "[OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5597.php">Jeff Squyres: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
