<?
$subject_val = "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 19:57:39 2013" -->
<!-- isoreceived="20131219005739" -->
<!-- sent="Wed, 18 Dec 2013 19:57:38 -0500 (EST)" -->
<!-- isosent="20131219005738" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?" -->
<!-- id="alpine.OSX.2.01.1312181955380.1561_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="16543BC4-3B74-43A8-9607-C8FF72FAF5F0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 19:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13477.php">Siddhartha Jana: "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>OK, thanks for clarification and code pointers. 
<br>
I'll update &quot;rte.h&quot; to reflect the updates.
<br>
<p>Thanks,
<br>
--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<p><p>On Wed, 18 Dec 2013, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; There is no relation at all between ompi_proc_t and ompi_process_info_t. The ompi_proc_t is defined in the MPI layer and is used in that layer in various places very much like orte_proc_t is used in the ORTE layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you look in ompi/mca/rte/orte/rte_orte.c, you'll see how we handle the revised function calls. Basically, we use the process name to retrieve the modex data via the opal_db, and then load a pointer to the hostname into the ompi_proc_t proc_hostname field. Thus, the definition of ompi_proc_t remains in the MPI layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there was no need to change the ompi/mca/rte/rte.h file, nor to #define anything in the component .h file - just have to modify the wrapper code inside the RTE component itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2013, at 1:50 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question about the MPI-RTE interface change in r29931.  The change was not
</span><br>
<span class="quotelev2">&gt;&gt; reflected in the &quot;ompi/mca/rte/rte.h&quot; file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm curious how the newly added &quot;struct ompi_proc_t&quot; relates to the &quot;struct ompi_process_info_t&quot; that is described in the &quot;rte.h&quot; file?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand the general motivation for the API change but it is less clear
</span><br>
<span class="quotelev2">&gt;&gt; to me how the information previously defined in the header changes (or does
</span><br>
<span class="quotelev2">&gt;&gt; not change)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; --tjn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _________________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 16 Dec 2013, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2013-12-16 22:26:00 EST (Mon, 16 Dec 2013)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 29931
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29931">https://svn.open-mpi.org/trac/ompi/changeset/29931</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Revert r29917 and replace it with a fix that resolves the thread deadlock while retaining the desired debug info. In an earlier commit, we had changed the modex accordingly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * automatically retrieve the hostname (and all RTE info) for all procs during MPI_Init if nprocs &lt; cutoff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * if nprocs &gt; cutoff, retrieve the hostname (and all RTE info) for a proc upon the first call to modex_recv for that proc. This would provide the hostname for debugging purposes as we only report errors on messages, and so we must have called modex_recv to get the endpoint info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * BTLs are not to call modex_recv until they need the endpoint info for first message - i.e., not during add_procs so we don't call it for every process in the job, but only those with whom we communicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My understanding is that only some BTLs have been modified to meet that third requirement, but those include the Cray ones where jobs are big enough that launch times were becoming an issue. Other BTLs would hopefully be modified as time went on and interest in using them at scale arose. Meantime, those BTLs would call modex_recv on every proc, and we would therefore be no worse than the prior behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This commit revises the MPI-RTE interface to pass the ompi_proc_t instead of the ompi_process_name_t for the proc so that the hostname can be easily inserted. I have advised the ORNL folks of the change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmr=v1.7.4:reviewer=jsquyres:subject=Fix thread deadlock
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/rte/orte/rte_orte.h        |     7 ++++---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/rte/orte/rte_orte_module.c |    27 ++++++++++++++++++---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/proc/proc.c                    |    26 ++++++++++++++++++++++----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/runtime/ompi_module_exchange.c |    10 +++++-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4 files changed, 49 insertions(+), 21 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13477.php">Siddhartha Jana: "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
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
