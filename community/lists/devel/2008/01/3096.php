<?
$subject_val = "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 17:18:43 2008" -->
<!-- isoreceived="20080130221843" -->
<!-- sent="Wed, 30 Jan 2008 15:18:32 -0700" -->
<!-- isosent="20080130221832" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS" -->
<!-- id="C3C645C8.441D%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A0C3261-657E-4F72-B375-736F82B2F02E_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 17:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3097.php">Aurélien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3095.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>In reply to:</strong> <a href="3095.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3097.php">Aurélien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Reply:</strong> <a href="3097.php">Aurélien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you running on the trunk, or an earlier release?
<br>
<p>If the trunk, then I suspect you have a stale library hanging around. I
<br>
build and run statically on Leopard regularly.
<br>
&nbsp;
<br>
<p>On 1/30/08 2:54 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I get a runtime error in static build on Mac OS 10.5 (automake 1.10,
</span><br>
<span class="quotelev1">&gt; autoconf 2.60, gcc-apple-darwin 4.01, libtool 1.5.22).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error does not occur in dso builds, and everything seems to work
</span><br>
<span class="quotelev1">&gt; fine on Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the error log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/ompi$ mpirun -np 2 NetPIPE_3.6/NPmpi
</span><br>
<span class="quotelev1">&gt; [grosse-pomme.local:34247] [NO-NAME] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/oob/base/
</span><br>
<span class="quotelev1">&gt; oob_base_init.c at line 74
</span><br>
<span class="quotelev1">&gt; [grosse-pomme.local:34247] [NO-NAME] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev1">&gt; file /SourceCache/openmpi/openmpi-5/openmpi/orte/mca/ns/proxy/
</span><br>
<span class="quotelev1">&gt; ns_proxy_component.c at line 222
</span><br>
<span class="quotelev1">&gt; [grosse-pomme.local:34247] [NO-NAME] ORTE_ERROR_LOG: Error in file /
</span><br>
<span class="quotelev1">&gt; SourceCache/openmpi/openmpi-5/openmpi/orte/runtime/orte_init_stage1.c
</span><br>
<span class="quotelev1">&gt; at line 230
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    orte_ns_base_select failed
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ompi_mpi_init: orte_init_stage1 failed
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; Sr. Research Associate - Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Suite 350, 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; 865 974 6321
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3097.php">Aurélien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Previous message:</strong> <a href="3095.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>In reply to:</strong> <a href="3095.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3097.php">Aurélien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>Reply:</strong> <a href="3097.php">Aurélien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
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
