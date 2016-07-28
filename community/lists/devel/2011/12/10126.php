<?
$subject_val = "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 20:51:36 2011" -->
<!-- isoreceived="20111215015136" -->
<!-- sent="Wed, 14 Dec 2011 20:51:17 -0500" -->
<!-- isosent="20111215015117" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5" -->
<!-- id="4FAA986A-D5E6-4646-8ED6-88B3076AEE00_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="076B2651-D6F0-4AE4-B69C-703E0F205E0F_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 20:51:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10127.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10125.php">George Bosilca: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Reply:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be honest I'm totally lost in the naming scheme, which got me confused about the RFC you're referring to. We had an MCA parameter to start a vm, so I thought VM is some kind of special virtualized environment and not the entire ORTE. Based on the behavior of the trunk and the RFC you referred to, it seems that ORTE is now a VM (and only that). What is the real truth? Why did we had a need for orte_vm_launch and why this need suddenly disappeared?
<br>
<p>I'm really amazed. Open MPI is the only MPI library doing everything in the reverse way, and all this blessed by the community. We had features that no other MPI implementations supported (but were in the MPI standard), but we removed them (sic). Meanwhile, the other MPI implemented them &#133; Thus, their features list increases while our decreases. Clearly all successful projects should be inspired by our growing strategy.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: Thanks for the fix regarding the --host. We have encountered another issue. A job that terminates abnormally (MPI_Abort or segfault), will leave daemons behind. Usually it is not very bothersome, except that now with the new VM, our entire cluster is full with useless processes, at a point where after a while we have to reboot the machines to liberate pids.
<br>
<p>On Dec 14, 2011, at 10:08 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 13, 2011, at 9:10 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed today a drastic change in how ORTE deal with the hostfile between trunk and 1.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. 1.5 and prior used the hostile as a suggestion, a placeholder where to pick the requested number of daemons during the launch. The current trunk spawn daemons on all the nodes provided on the host file, and then spawn the apps only on some of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was in the RFC about the revised mapping system, George, and discussed multiple times on the telecons. I even raised this specific point at least twice on those telecons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. If a default hostfile is provided and --host was specified 1.5 and prior use the nodes to limit the number of nodes in the environment to the requested nodes. The current trunk seems to ignore the --host option if a default hostfile is available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll check that one - we should limit the operation to the --host list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my configuration the hostfile is system wide, specified in the /etc via orte_default_hostfile. It contains all the nodes in the cluster, the users are supposed to use --host to limit their mpirun to a specified subset.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This seems a quite significant change. I would have expected an RFC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="10127.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10125.php">George Bosilca: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10115.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<li><strong>Reply:</strong> <a href="10128.php">Ralph Castain: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
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
