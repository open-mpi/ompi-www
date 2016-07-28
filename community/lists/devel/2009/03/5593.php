<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 15:13:50 2009" -->
<!-- isoreceived="20090309191350" -->
<!-- sent="Mon, 9 Mar 2009 13:13:39 -0600" -->
<!-- isosent="20090309191339" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="A9FC5E39-CB54-4C2D-975D-4575476D4540_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 15:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5592.php">Rainer Keller: "[OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5592.php">Rainer Keller: "[OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please clarify - what is going to happen on Mar 23 (your  
<br>
timeout date)?
<br>
<p>It also wasn't clear about your testing. Are you calling up into the  
<br>
ONET layer to run it from the RTE? I believe this was the point of  
<br>
concern regarding performance - what impact it would have on things if  
<br>
we enabled that capability. For example, do you need a quality-of- 
<br>
service flag to avoid delaying MPI comm when an RTE comm occurs? When  
<br>
someone calls into the MPI library, are you going to first progress  
<br>
MPI messages, and then if-and-only-if they all complete, progress any  
<br>
RTE ONET messages? How will this be handled?
<br>
<p>I doubt anyone expects to see a performance impact of doing nothing  
<br>
but renaming things, so these questions remain at the heart of the  
<br>
discussion.
<br>
<p>Also, could you clarify what happened to the datatype engine? Is this  
<br>
moving to OPAL, ONET, or...?
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Mar 9, 2009, at 12:51 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What:     Move BTLs into separate layer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why:      Several projects have expressed interest to use the BTLs.  
</span><br>
<span class="quotelev1">&gt; Use-cases
</span><br>
<span class="quotelev1">&gt; such as the RTE using the BTLs for modex or tools collecting/ 
</span><br>
<span class="quotelev1">&gt; distributing data
</span><br>
<span class="quotelev1">&gt; in the fastest possible way may be possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where:    This would affect several components, that the BTLs depend  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; (namely allocator, mpool, rcache and the common part of the BTLs).
</span><br>
<span class="quotelev1">&gt; Additionally some changes to classes were/are necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When:     Preferably 1.5 (in case we use the Feature/Stable Release  
</span><br>
<span class="quotelev1">&gt; cycle ;-)
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
<span class="quotelev1">&gt; This RFC should shed some light, if there is some more information  
</span><br>
<span class="quotelev1">&gt; required,
</span><br>
<span class="quotelev1">&gt; please feel free to ask/comment. Of course, suggestions are welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BTLs offer access to fast communication framework. Several  
</span><br>
<span class="quotelev1">&gt; projects have
</span><br>
<span class="quotelev1">&gt; expressed interest to use them separate of other layers of Open MPI.
</span><br>
<span class="quotelev1">&gt; Additionally (with further changes) BTLs maybe used within ORTE  
</span><br>
<span class="quotelev1">&gt; itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COURSE OF WORK:
</span><br>
<span class="quotelev1">&gt; The extraction is not easy (as was the extraction of ORTE and OMPI  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; early stages of Open MPI?).
</span><br>
<span class="quotelev1">&gt; In order to get as much input and be as visible as possible (e.g. in  
</span><br>
<span class="quotelev1">&gt; TRACS),
</span><br>
<span class="quotelev1">&gt; the tmp-branch for this work has been set up on:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We propose to have a separate ONET library living in onet, based on  
</span><br>
<span class="quotelev1">&gt; orte (see
</span><br>
<span class="quotelev1">&gt; attached fig).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to keep the diff between the trunk and the branch to a  
</span><br>
<span class="quotelev1">&gt; minimum
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
<span class="quotelev1">&gt; Additionally a script (attached below) has been kept up-to-date  
</span><br>
<span class="quotelev1">&gt; (contrib/move-
</span><br>
<span class="quotelev1">&gt; btl-into-onet), that will perform this separation on a fresh  
</span><br>
<span class="quotelev1">&gt; checkout of
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
<span class="quotelev1">&gt; A preliminary header file is provided in onet/include/rte.h to  
</span><br>
<span class="quotelev1">&gt; accommodate the
</span><br>
<span class="quotelev1">&gt; requirements of other RTEs (such as stci), that replaces selected
</span><br>
<span class="quotelev1">&gt; functionality, as proposed by Jeff and Ralph in the Louisville  
</span><br>
<span class="quotelev1">&gt; meeting.
</span><br>
<span class="quotelev1">&gt; Additionally, this header file is included before orte-header files  
</span><br>
<span class="quotelev1">&gt; (within
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
<span class="quotelev1">&gt; !!!Before any merge, do extensive performance tests on real  
</span><br>
<span class="quotelev1">&gt; machines!!!
</span><br>
<span class="quotelev1">&gt; Initial tests on the cluster smoky, show no difference in comparison  
</span><br>
<span class="quotelev1">&gt; to ompi-
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt; Please see the enclosed output of NetPipe-3.7.1 run on a single node  
</span><br>
<span class="quotelev1">&gt; (--mca
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
<span class="quotelev1">&gt;  We are working on these, and have shortly talked about the latter  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; - Better abstraction from orte / cleanups, such as modex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If these involve code-changes (and not just &quot;save&quot; and non-intrusive  
</span><br>
<span class="quotelev1">&gt; renames),
</span><br>
<span class="quotelev1">&gt; such as a opal_keyval-change, we will continue to write RFCs.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_onet-2009.02.27.pdf&gt;&lt;move-btl-patches.tar&gt;&lt;move-btl-into- 
</span><br>
<span class="quotelev1">&gt; onet&gt;&lt;NPmpi-ompi.out&gt;&lt;NPmpi-koenig-BTL- 
</span><br>
<span class="quotelev1">&gt; orte.out&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5592.php">Rainer Keller: "[OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5592.php">Rainer Keller: "[OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5594.php">George Bosilca: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
