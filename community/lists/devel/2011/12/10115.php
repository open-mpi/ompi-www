<?
$subject_val = "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:08:15 2011" -->
<!-- isoreceived="20111214150815" -->
<!-- sent="Wed, 14 Dec 2011 08:08:05 -0700" -->
<!-- isosent="20111214150805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5" -->
<!-- id="076B2651-D6F0-4AE4-B69C-703E0F205E0F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23B4F847-AE65-4568-AF75-E99075BA3EE9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10114.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>In reply to:</strong> <a href="10088.php">George Bosilca: "[OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Reply:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2011, at 9:10 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I noticed today a drastic change in how ORTE deal with the hostfile between trunk and 1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. 1.5 and prior used the hostile as a suggestion, a placeholder where to pick the requested number of daemons during the launch. The current trunk spawn daemons on all the nodes provided on the host file, and then spawn the apps only on some of them.
</span><br>
<p>It was in the RFC about the revised mapping system, George, and discussed multiple times on the telecons. I even raised this specific point at least twice on those telecons.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If a default hostfile is provided and --host was specified 1.5 and prior use the nodes to limit the number of nodes in the environment to the requested nodes. The current trunk seems to ignore the --host option if a default hostfile is available.
</span><br>
<p>I'll check that one - we should limit the operation to the --host list.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my configuration the hostfile is system wide, specified in the /etc via orte_default_hostfile. It contains all the nodes in the cluster, the users are supposed to use --host to limit their mpirun to a specified subset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems a quite significant change. I would have expected an RFC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
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
<li><strong>Next message:</strong> <a href="10116.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10114.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25627"</a>
<li><strong>In reply to:</strong> <a href="10088.php">George Bosilca: "[OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Reply:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
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
