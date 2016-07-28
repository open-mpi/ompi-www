<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 12:39:46 2012" -->
<!-- isoreceived="20121018163946" -->
<!-- sent="Thu, 18 Oct 2012 19:39:21 +0300" -->
<!-- isosent="20121018163921" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYeM=wDmmj_k6O8wsEeQpW_aQ-n-pir3pdfHkwDNVxXrMA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6A9B94FD-0347-4990-80F2-29B01A903DBE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 12:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11616.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda ompi/mca/btl/template ompi/mca/btl/vader ompi/mca/btl/wv ompi/mca/coll/demo ompi/mca/coll/ml ompi/mca/coll/self ompi/mca/pml/base ompi/mca/pml/bfo ompi/mca/pml/csum ompi/mca/pml/dr ompi/mca/pml/example ompi/mca/pml/ob1 ompi/mca/pml/v ompi/mca/sbgp/basesmsocket ompi/mca/sbgp/basesmuma ompi/mca/sbgp/ibnet ompi/mca/sbgp/p2p ompi/mca/vprotocol/example ompi/mca/vprotocol/pessimist ompi/tools/ompi-server opal/dss opal/mca/base opal/mca/shmem/base opal/tools/opal-checkpoint opal/tools/opal-restart opal/util orte/mca/ess/base orte/mca/ess/pmi orte/mca/odls/base orte/mca/odls/default orte/mca/plm/base orte/mca/plm/tm orte/orted orte/tools/orte-checkpoint orte/tools/orte-clean orte/tools/orte-migrate orte/tools/orte-ps orte/tools/orte-restart orte/tools/orte-top orte/tools/orterun orte/util"</a>
<li><strong>Previous message:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 18, 2012 at 7:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 7, 2012, at 2:25 PM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev1">&gt; Hmm.  I'm not sure how to do that -- I don't know of any C compiler that has built-in #defines for what Fortran types exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm open to suggestions, though -- can you suggest an easier solution?
</span><br>
<p>Sorry, that was unclear.  I meant just not annotating Fortran
<br>
datatypes -- they will not get any checking, so we will not get false
<br>
positives, but such a change is much simpler to review for 1.7.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11616.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda ompi/mca/btl/template ompi/mca/btl/vader ompi/mca/btl/wv ompi/mca/coll/demo ompi/mca/coll/ml ompi/mca/coll/self ompi/mca/pml/base ompi/mca/pml/bfo ompi/mca/pml/csum ompi/mca/pml/dr ompi/mca/pml/example ompi/mca/pml/ob1 ompi/mca/pml/v ompi/mca/sbgp/basesmsocket ompi/mca/sbgp/basesmuma ompi/mca/sbgp/ibnet ompi/mca/sbgp/p2p ompi/mca/vprotocol/example ompi/mca/vprotocol/pessimist ompi/tools/ompi-server opal/dss opal/mca/base opal/mca/shmem/base opal/tools/opal-checkpoint opal/tools/opal-restart opal/util orte/mca/ess/base orte/mca/ess/pmi orte/mca/odls/base orte/mca/odls/default orte/mca/plm/base orte/mca/plm/tm orte/orted orte/tools/orte-checkpoint orte/tools/orte-clean orte/tools/orte-migrate orte/tools/orte-ps orte/tools/orte-restart orte/tools/orte-top orte/tools/orterun orte/util"</a>
<li><strong>Previous message:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11614.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11621.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
