<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 17:41:48 2013" -->
<!-- isoreceived="20130819214148" -->
<!-- sent="Mon, 19 Aug 2013 23:41:45 +0200" -->
<!-- isosent="20130819214145" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob" -->
<!-- id="E46D0485-4642-4DA3-96EF-301DA38B2B74_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130817004919.CBCB0160B6D_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 17:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12751.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<li><strong>Previous message:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12751.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<li><strong>Reply:</strong> <a href="12751.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a result of this patch the first decode of a peer host name might happen in the middle of a debug message (on the first call to ompi_proc_get_hostname). Such a behavior might generate deadlocks based on the level of output verbosity, and has significant potential to reintroduce the recursive behavior the new state machine was supposed to remove.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Aug 17, 2013, at 02:49 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-08-16 20:49:18 EDT (Fri, 16 Aug 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29040
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29040">https://svn.open-mpi.org/trac/ompi/changeset/29040</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; When we direct launch an application, we rely on PMI for wireup support. In doing so, we lose the de facto data compression we get from the ORTE modex since we no longer get all the wireup info from every proc in a single blob. Instead, we have to iterate over all the procs, calling PMI_KVS_get for every value we require.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This creates a really bad scaling behavior. Users have found a nearly 20% launch time differential between mpirun and PMI, with PMI being the slower method. Some of the problem is attributable to poor exchange algorithms in RM's like Slurm and Alps, but we make things worse by calling &quot;get&quot; so many times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan (with a tad advice from me) has attempted to alleviate this problem by reducing the number of &quot;get&quot; calls. This required the following changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * upon first request for data, have the OPAL db pmi component fetch and decode *all* the info from a given remote proc. It turned out we weren't caching the info, so we would continually request it and only decode the piece we needed for the immediate request. We now decode all the info and push it into the db hash component for local storage - and then all subsequent retrievals are fulfilled locally
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * reduced the amount of data by eliminating the exchange of the OMPI_ARCH value if heterogeneity is not enabled. This was used solely as a check so we would error out if the system wasn't actually homogeneous, which was fine when we thought there was no cost in doing the check. Unfortunately, at large scale and with direct launch, there is a non-zero cost of making this test. We are open to finding a compromise (perhaps turning the test off if requested?), if people feel strongly about performing the test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * reduced the amount of RTE data being automatically fetched, and fetched the rest only upon request. In particular, we no longer immediately fetch the hostname (which is only used for error reporting), but instead get it when needed. Likewise for the RML uri as that info is only required for some (not all) environments. In addition, we no longer fetch the locality unless required, relying instead on the PMI clique info to tell us who is on our local node (if additional info is required, the fetch is performed when a modex_recv is issued).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, all this only impacts direct launch - all the info is provided when launched via mpirun as there is no added cost to getting it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barring objections, we may move this (plus any required other pieces) to the 1.7 branch once it soaks for an appropriate time.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12751.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<li><strong>Previous message:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12751.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<li><strong>Reply:</strong> <a href="12751.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
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
