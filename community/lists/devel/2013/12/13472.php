<?
$subject_val = "[OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 16:50:47 2013" -->
<!-- isoreceived="20131218215047" -->
<!-- sent="Wed, 18 Dec 2013 16:50:45 -0500 (EST)" -->
<!-- isosent="20131218215045" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="[OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?" -->
<!-- id="alpine.OSX.2.01.1312181642430.1561_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20131217032600.71F6E16048F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 16:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Previous message:</strong> <a href="13471.php">Yeni Lora: "[OMPI devel] Problem with memory in mpi program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Reply:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Question about the MPI-RTE interface change in r29931.  The change was not
<br>
reflected in the &quot;ompi/mca/rte/rte.h&quot; file.
<br>
<p>I'm curious how the newly added &quot;struct ompi_proc_t&quot; relates to the 
<br>
&quot;struct ompi_process_info_t&quot; that is described in the &quot;rte.h&quot; file?
<br>
<p>I understand the general motivation for the API change but it is less clear
<br>
to me how the information previously defined in the header changes (or does
<br>
not change)?
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
<p><p>On Mon, 16 Dec 2013, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-12-16 22:26:00 EST (Mon, 16 Dec 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29931
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29931">https://svn.open-mpi.org/trac/ompi/changeset/29931</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Revert r29917 and replace it with a fix that resolves the thread deadlock while retaining the desired debug info. In an earlier commit, we had changed the modex accordingly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * automatically retrieve the hostname (and all RTE info) for all procs during MPI_Init if nprocs &lt; cutoff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * if nprocs &gt; cutoff, retrieve the hostname (and all RTE info) for a proc upon the first call to modex_recv for that proc. This would provide the hostname for debugging purposes as we only report errors on messages, and so we must have called modex_recv to get the endpoint info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * BTLs are not to call modex_recv until they need the endpoint info for first message - i.e., not during add_procs so we don't call it for every process in the job, but only those with whom we communicate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that only some BTLs have been modified to meet that third requirement, but those include the Cray ones where jobs are big enough that launch times were becoming an issue. Other BTLs would hopefully be modified as time went on and interest in using them at scale arose. Meantime, those BTLs would call modex_recv on every proc, and we would therefore be no worse than the prior behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit revises the MPI-RTE interface to pass the ompi_proc_t instead of the ompi_process_name_t for the proc so that the hostname can be easily inserted. I have advised the ORNL folks of the change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=jsquyres:subject=Fix thread deadlock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/rte/orte/rte_orte.h        |     7 ++++---
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/rte/orte/rte_orte_module.c |    27 ++++++++++++++++++---------
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/proc/proc.c                    |    26 ++++++++++++++++++++++----
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_module_exchange.c |    10 +++++-----
</span><br>
<span class="quotelev1">&gt;   4 files changed, 49 insertions(+), 21 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Previous message:</strong> <a href="13471.php">Yeni Lora: "[OMPI devel] Problem with memory in mpi program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Reply:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
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
