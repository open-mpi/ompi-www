<?
$subject_val = "[OMPI devel] RFC: move BTLs out of ompi into separate layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 14:52:44 2009" -->
<!-- isoreceived="20090309185244" -->
<!-- sent="Mon, 09 Mar 2009 14:51:41 -0400" -->
<!-- isosent="20090309185141" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: move BTLs out of ompi into separate layer" -->
<!-- id="200903091451.42176.keller_at_ornl.gov" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: move BTLs out of ompi into separate layer<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 14:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5591.php">Matthias Jurenz: "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1	(rc1)	is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:     Move BTLs into separate layer
<br>
<p>Why:      Several projects have expressed interest to use the BTLs. Use-cases 
<br>
such as the RTE using the BTLs for modex or tools collecting/distributing data 
<br>
in the fastest possible way may be possible.
<br>
<p>Where:    This would affect several components, that the BTLs depend on 
<br>
(namely allocator, mpool, rcache and the common part of the BTLs). 
<br>
Additionally some changes to classes were/are necessary.
<br>
<p>When:     Preferably 1.5 (in case we use the Feature/Stable Release cycle ;-)
<br>
<p>Timeout:  23.03.2009
<br>
------------------------------------------------------------------------
<br>
<p>There has been much speculation about this project.
<br>
This RFC should shed some light, if there is some more information required, 
<br>
please feel free to ask/comment. Of course, suggestions are welcome!
<br>
<p>The BTLs offer access to fast communication framework. Several projects have 
<br>
expressed interest to use them separate of other layers of Open MPI. 
<br>
Additionally (with further changes) BTLs maybe used within ORTE itself.
<br>
<p>COURSE OF WORK:
<br>
The extraction is not easy (as was the extraction of ORTE and OMPI in the 
<br>
early stages of Open MPI?).
<br>
In order to get as much input and be as visible as possible (e.g. in TRACS), 
<br>
the tmp-branch for this work has been set up on:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl</a>
<br>
<p>We propose to have a separate ONET library living in onet, based on orte (see 
<br>
attached fig).
<br>
<p>In order to keep the diff between the trunk and the branch to a minimum  
<br>
several cleanup patches have already been applied to the trunk (e.g. 
<br>
unnecessary #include of ompi and orte header files, integration of 
<br>
ompi_bitmap_t into opal_bitmap_t, #include &quot;*_config.h&quot;).
<br>
<p><p>Additionally a script (attached below) has been kept up-to-date (contrib/move-
<br>
btl-into-onet), that will perform this separation on a fresh checkout of 
<br>
trunk:
<br>
&nbsp;&nbsp;svn list <a href="https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl">https://svn.open-mpi.org/svn/ompi/tmp/koenig-btl/contrib/move-btl</a>-
<br>
into-onet
<br>
<p>This script requires several patches (see attached TAR-ball).
<br>
Please update the variable PATCH_DIR to match the location of patches.
<br>
<p>&nbsp;&nbsp;./move-btl-into-onet ompi-clean/
<br>
&nbsp;&nbsp;# Lots of output deleted.
<br>
&nbsp;&nbsp;cd ompi-clean/
<br>
&nbsp;&nbsp;rm -fr ompi/mca/common/  # No two mcas called common, too bad...
<br>
&nbsp;&nbsp;./autogen.sh
<br>
<p><p>OTHER RTEs:
<br>
A preliminary header file is provided in onet/include/rte.h to accommodate the 
<br>
requirements of other RTEs (such as stci), that replaces selected 
<br>
functionality, as proposed by Jeff and Ralph in the Louisville meeting. 
<br>
Additionally, this header file is included before orte-header files (within 
<br>
onet)...
<br>
By default, this does not change anything in the standard case (ORTE), 
<br>
otherwise -DHAVE_STCI, redefinitions for components orte-functionality 
<br>
required within onet is done.
<br>
<p><p>TESTS:
<br>
First tests have been done locally on Linux/x86_64. 
<br>
The branch compiles without warnings.
<br>
The wrappers have been updated.
<br>
<p>The Intel Testsuite runs without failures:
<br>
&nbsp;&nbsp;./run-tests.pl  all_tests_no_perf
<br>
<p><p>PERFORMANCE:
<br>
!!!Before any merge, do extensive performance tests on real machines!!!
<br>
Initial tests on the cluster smoky, show no difference in comparison to ompi-
<br>
trunk.
<br>
Please see the enclosed output of NetPipe-3.7.1 run on a single node (--mca 
<br>
btl sm,self) on smoky.
<br>
<p><p>TODOS:
<br>
There are still some todos, to finalize this:
<br>
- Dependencies in the onet-layer into the ompi-layer (ompi_proc_t, 
<br>
ompi_converter)
<br>
&nbsp;&nbsp;We are working on these, and have shortly talked about the latter with 
<br>
George.
<br>
- Better abstraction from orte / cleanups, such as modex
<br>
<p>If these involve code-changes (and not just &quot;save&quot; and non-intrusive renames), 
<br>
such as a opal_keyval-change, we will continue to write RFCs.
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink





</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5592/ompi_onet-2009.02.27.pdf">ompi_onet-2009.02.27.pdf</a>
</ul>
<!-- attachment="ompi_onet-2009.02.27.pdf" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5592/move-btl-patches.tar">move-btl-patches.tar</a>
</ul>
<!-- attachment="move-btl-patches.tar" -->
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5592/move-btl-into-onet">move-btl-into-onet</a>
</ul>
<!-- attachment="move-btl-into-onet" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5592/NPmpi-ompi.out">NPmpi-ompi.out</a>
</ul>
<!-- attachment="NPmpi-ompi.out" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5592/NPmpi-koenig-BTL-orte.out">NPmpi-koenig-BTL-orte.out</a>
</ul>
<!-- attachment="NPmpi-koenig-BTL-orte.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Previous message:</strong> <a href="5591.php">Matthias Jurenz: "Re: [OMPI devel] VT compile error: Fwd: [ofa-general] OFED 1.4.1	(rc1)	is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5593.php">Ralph Castain: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
<li><strong>Reply:</strong> <a href="5595.php">Brian W. Barrett: "Re: [OMPI devel] RFC: move BTLs out of ompi into separate layer"</a>
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
