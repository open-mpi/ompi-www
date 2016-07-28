<?
$subject_val = "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 15:55:53 2009" -->
<!-- isoreceived="20090309195553" -->
<!-- sent="Mon, 9 Mar 2009 15:55:44 -0400" -->
<!-- isosent="20090309195544" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="68FCE6E8-C3A9-463C-85CA-2E3CD6DE3001_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A9FC5E39-CB54-4C2D-975D-4575476D4540_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 15:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5596.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5596.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2009, at 15:13 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Could you please clarify - what is going to happen on Mar 23 (your  
</span><br>
<span class="quotelev1">&gt; timeout date)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also wasn't clear about your testing. Are you calling up into the  
</span><br>
<span class="quotelev1">&gt; ONET layer to run it from the RTE? I believe this was the point of  
</span><br>
<span class="quotelev1">&gt; concern regarding performance - what impact it would have on things  
</span><br>
<span class="quotelev1">&gt; if we enabled that capability. For example, do you need a quality-of- 
</span><br>
<span class="quotelev1">&gt; service flag to avoid delaying MPI comm when an RTE comm occurs?  
</span><br>
<span class="quotelev1">&gt; When someone calls into the MPI library, are you going to first  
</span><br>
<span class="quotelev1">&gt; progress MPI messages, and then if-and-only-if they all complete,  
</span><br>
<span class="quotelev1">&gt; progress any RTE ONET messages? How will this be handled?
</span><br>
<p>I will emphasize a very important point, deeply discussed during our  
<br>
meeting in Louisville:  there is no support for ONET in ORTE at this  
<br>
stage, and no plan for such a support has been presented so far (and I  
<br>
doubt there will be in a near future). Moreover, as the ONET layer is  
<br>
agnostic to any semantic the upper layer will give to the data moved  
<br>
around, there is no reason to enforce any &quot;quality-of-services&quot; in the  
<br>
ONET layer. Whatever upper layer will be implemented on top of this  
<br>
ONET BTL will have to deal with such things.
<br>
<p><span class="quotelev1">&gt; I doubt anyone expects to see a performance impact of doing nothing  
</span><br>
<span class="quotelev1">&gt; but renaming things, so these questions remain at the heart of the  
</span><br>
<span class="quotelev1">&gt; discussion.
</span><br>
<p>I hope we will not spend our time during tomorrow morning phone call  
<br>
talking about name changes ...
<br>
<p><span class="quotelev1">&gt; Also, could you clarify what happened to the datatype engine? Is  
</span><br>
<span class="quotelev1">&gt; this moving to OPAL, ONET, or...?
</span><br>
<p>Again, as discussed during the meeting in Louisville, at the end of  
<br>
the move the datatype engine will be divided in two parts: one MPI  
<br>
agnostic only able to deal with common predefined types, and one  
<br>
encapsulating the MPI knowledge (how to build an indexed array or any  
<br>
other MPI fancy type). The first one will be moved in the OPAL layer,  
<br>
while the second one will stay where it is today (i.e. the MPI layer).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2009, at 12:51 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What:     Move BTLs into separate layer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why:      Several projects have expressed interest to use the BTLs.  
</span><br>
<span class="quotelev2">&gt;&gt; Use-cases
</span><br>
<span class="quotelev2">&gt;&gt; such as the RTE using the BTLs for modex or tools collecting/ 
</span><br>
<span class="quotelev2">&gt;&gt; distributing data
</span><br>
<span class="quotelev2">&gt;&gt; in the fastest possible way may be possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where:    This would affect several components, that the BTLs  
</span><br>
<span class="quotelev2">&gt;&gt; depend on
</span><br>
<span class="quotelev2">&gt;&gt; (namely allocator, mpool, rcache and the common part of the BTLs).
</span><br>
<span class="quotelev2">&gt;&gt; Additionally some changes to classes were/are necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When:     Preferably 1.5 (in case we use the Feature/Stable Release  
</span><br>
<span class="quotelev2">&gt;&gt; cycle ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Timeout:  23.03.2009
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There has been much speculation about this project.
</span><br>
<span class="quotelev2">&gt;&gt; This RFC should shed some light, if there is some more information  
</span><br>
<span class="quotelev2">&gt;&gt; required,
</span><br>
<span class="quotelev2">&gt;&gt; please feel free to ask/comment. Of course, suggestions are welcome!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The BTLs offer access to fast communication framework. Several  
</span><br>
<span class="quotelev2">&gt;&gt; projects have
</span><br>
<span class="quotelev2">&gt;&gt; expressed interest to use them separate of other layers of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Additionally (with further changes) BTLs maybe used within ORTE  
</span><br>
<span class="quotelev2">&gt;&gt; itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COURSE OF WORK:
</span><br>
<span class="quotelev2">&gt;&gt; The extraction is not easy (as was the extraction of ORTE and OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; in the
</span><br>
<span class="quotelev2">&gt;&gt; early stages of Open MPI?).
</span><br>
<span class="quotelev2">&gt;&gt; In order to get as much input and be as visible as possible (e.g.  
</span><br>
<span class="quotelev2">&gt;&gt; in TRACS),
</span><br>
<span class="quotelev2">&gt;&gt; the tmp-branch for this work has been set up on:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We propose to have a separate ONET library living in onet, based on  
</span><br>
<span class="quotelev2">&gt;&gt; orte (see
</span><br>
<span class="quotelev2">&gt;&gt; attached fig).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to keep the diff between the trunk and the branch to a  
</span><br>
<span class="quotelev2">&gt;&gt; minimum
</span><br>
<span class="quotelev2">&gt;&gt; several cleanup patches have already been applied to the trunk (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; unnecessary #include of ompi and orte header files, integration of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_bitmap_t into opal_bitmap_t, #include &quot;*_config.h&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally a script (attached below) has been kept up-to-date  
</span><br>
<span class="quotelev2">&gt;&gt; (contrib/move-
</span><br>
<span class="quotelev2">&gt;&gt; btl-into-onet), that will perform this separation on a fresh  
</span><br>
<span class="quotelev2">&gt;&gt; checkout of
</span><br>
<span class="quotelev2">&gt;&gt; trunk:
</span><br>
<span class="quotelev2">&gt;&gt; svn list <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl</a>-
</span><br>
<span class="quotelev2">&gt;&gt; into-onet
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This script requires several patches (see attached TAR-ball).
</span><br>
<span class="quotelev2">&gt;&gt; Please update the variable PATCH_DIR to match the location of  
</span><br>
<span class="quotelev2">&gt;&gt; patches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./move-btl-into-onet ompi-clean/
</span><br>
<span class="quotelev2">&gt;&gt; # Lots of output deleted.
</span><br>
<span class="quotelev2">&gt;&gt; cd ompi-clean/
</span><br>
<span class="quotelev2">&gt;&gt; rm -fr ompi/mca/common/  # No two mcas called common, too bad...
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OTHER RTEs:
</span><br>
<span class="quotelev2">&gt;&gt; A preliminary header file is provided in onet/include/rte.h to  
</span><br>
<span class="quotelev2">&gt;&gt; accommodate the
</span><br>
<span class="quotelev2">&gt;&gt; requirements of other RTEs (such as stci), that replaces selected
</span><br>
<span class="quotelev2">&gt;&gt; functionality, as proposed by Jeff and Ralph in the Louisville  
</span><br>
<span class="quotelev2">&gt;&gt; meeting.
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, this header file is included before orte-header files  
</span><br>
<span class="quotelev2">&gt;&gt; (within
</span><br>
<span class="quotelev2">&gt;&gt; onet)...
</span><br>
<span class="quotelev2">&gt;&gt; By default, this does not change anything in the standard case  
</span><br>
<span class="quotelev2">&gt;&gt; (ORTE),
</span><br>
<span class="quotelev2">&gt;&gt; otherwise -DHAVE_STCI, redefinitions for components orte- 
</span><br>
<span class="quotelev2">&gt;&gt; functionality
</span><br>
<span class="quotelev2">&gt;&gt; required within onet is done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TESTS:
</span><br>
<span class="quotelev2">&gt;&gt; First tests have been done locally on Linux/x86_64.
</span><br>
<span class="quotelev2">&gt;&gt; The branch compiles without warnings.
</span><br>
<span class="quotelev2">&gt;&gt; The wrappers have been updated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Intel Testsuite runs without failures:
</span><br>
<span class="quotelev2">&gt;&gt; ./run-tests.pl  all_tests_no_perf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PERFORMANCE:
</span><br>
<span class="quotelev2">&gt;&gt; !!!Before any merge, do extensive performance tests on real  
</span><br>
<span class="quotelev2">&gt;&gt; machines!!!
</span><br>
<span class="quotelev2">&gt;&gt; Initial tests on the cluster smoky, show no difference in  
</span><br>
<span class="quotelev2">&gt;&gt; comparison to ompi-
</span><br>
<span class="quotelev2">&gt;&gt; trunk.
</span><br>
<span class="quotelev2">&gt;&gt; Please see the enclosed output of NetPipe-3.7.1 run on a single  
</span><br>
<span class="quotelev2">&gt;&gt; node (--mca
</span><br>
<span class="quotelev2">&gt;&gt; btl sm,self) on smoky.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TODOS:
</span><br>
<span class="quotelev2">&gt;&gt; There are still some todos, to finalize this:
</span><br>
<span class="quotelev2">&gt;&gt; - Dependencies in the onet-layer into the ompi-layer (ompi_proc_t,
</span><br>
<span class="quotelev2">&gt;&gt; ompi_converter)
</span><br>
<span class="quotelev2">&gt;&gt; We are working on these, and have shortly talked about the latter  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; - Better abstraction from orte / cleanups, such as modex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If these involve code-changes (and not just &quot;save&quot; and non- 
</span><br>
<span class="quotelev2">&gt;&gt; intrusive renames),
</span><br>
<span class="quotelev2">&gt;&gt; such as a opal_keyval-change, we will continue to write RFCs.
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_onet-2009.02.27.pdf&gt;&lt;move-btl-patches.tar&gt;&lt;move-btl-into- 
</span><br>
<span class="quotelev2">&gt;&gt; onet&gt;&lt;NPmpi-ompi.out&gt;&lt;NPmpi-koenig-BTL- 
</span><br>
<span class="quotelev2">&gt;&gt; orte.out&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>In reply to:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5596.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5596.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
