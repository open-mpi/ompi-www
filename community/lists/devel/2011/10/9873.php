<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25350";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 21 10:46:40 2011" -->
<!-- isoreceived="20111021144640" -->
<!-- sent="Fri, 21 Oct 2011 08:46:36 -0600 (MDT)" -->
<!-- isosent="20111021144636" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25350" -->
<!-- id="alpine.OSX.2.00.1110210846140.60455_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="201110211444.p9LEimFR003744_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25350<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-21 10:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9874.php">Ralph Castain: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="9872.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this failure path exist in 1.5?
<br>
<p>-Nathan
<br>
<p>On Fri, 21 Oct 2011, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2011-10-21 10:44:48 EDT (Fri, 21 Oct 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25350
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25350">https://svn.open-mpi.org/trac/ompi/changeset/25350</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a minor issue seen by Jeff in specific failure pathway
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/debugger/base/debugger_base_fns.c |     8 ++++++--
</span><br>
<span class="quotelev1">&gt;   1 files changed, 6 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/debugger/base/debugger_base_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/debugger/base/debugger_base_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/debugger/base/debugger_base_fns.c	2011-10-21 10:44:48 EDT (Fri, 21 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -90,10 +90,14 @@
</span><br>
<span class="quotelev1">&gt;     orte_process_name_t rank0;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    if (MPIR_proctable) {
</span><br>
<span class="quotelev1">&gt; +    /* if we couldn't get thru the mapper stage, we might
</span><br>
<span class="quotelev1">&gt; +     * enter here with no procs. Avoid the &quot;zero byte malloc&quot;
</span><br>
<span class="quotelev1">&gt; +     * message by checking here
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +    if (MPIR_proctable || 0 == jdata-&gt;num_procs) {
</span><br>
<span class="quotelev1">&gt;         /* already initialized */
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(5, orte_debugger_base.output,
</span><br>
<span class="quotelev1">&gt; -                            &quot;%s: debugger already initialized&quot;,
</span><br>
<span class="quotelev1">&gt; +                            &quot;%s: debugger already initialized or zero procs&quot;,
</span><br>
<span class="quotelev1">&gt;                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9874.php">Ralph Castain: "Re: [OMPI devel] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>Previous message:</strong> <a href="9872.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
