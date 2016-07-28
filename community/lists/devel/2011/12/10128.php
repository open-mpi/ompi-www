<?
$subject_val = "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 20:59:47 2011" -->
<!-- isoreceived="20111215015947" -->
<!-- sent="Wed, 14 Dec 2011 18:59:35 -0700" -->
<!-- isosent="20111215015935" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5" -->
<!-- id="05D441B4-164A-43D6-834C-144E1393050D_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4FAA986A-D5E6-4646-8ED6-88B3076AEE00_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-12-14 20:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10129.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10127.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2011, at 6:51 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; To be honest I'm totally lost in the naming scheme, which got me confused about the RFC you're referring to. We had an MCA parameter to start a vm, so I thought VM is some kind of special virtualized environment and not the entire ORTE. Based on the behavior of the trunk and the RFC you referred to, it seems that ORTE is now a VM (and only that). What is the real truth? Why did we had a need for orte_vm_launch and why this need suddenly disappeared?
</span><br>
<p>No mystery here. As was explained in the RFC and the calls, we have to launch the daemons -before- we can map the job in order to have the hardware topology info to support the hardware-based mapping schemes. Maintaining both vm and non-vm launch mechanisms made the code a mess, and so we opted to support only the vm-based launch.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm really amazed. Open MPI is the only MPI library doing everything in the reverse way, and all this blessed by the community. We had features that no other MPI implementations supported (but were in the MPI standard), but we removed them (sic).
</span><br>
<p>I have no idea what &quot;feature&quot; you are saying has been removed. We have significantly -increased- the feature set with the revised mapping system, supposedly at the express request of the user community. It was our understanding that most production users utilize their entire allocation, and so doing a vm launch costs nothing - we'd be launching the same daemons anyway.
<br>
<p>The hostfile-based user was raised as a possible issue, as I noted before. Hopefully, the recent fix should help ease that situation.
<br>
<p><span class="quotelev1">&gt; Meanwhile, the other MPI implemented them &#133; Thus, their features list increases while our decreases. Clearly all successful projects should be inspired by our growing strategy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Thanks for the fix regarding the --host. We have encountered another issue. A job that terminates abnormally (MPI_Abort or segfault), will leave daemons behind. Usually it is not very bothersome, except that now with the new VM, our entire cluster is full with useless processes, at a point where after a while we have to reboot the machines to liberate pids.
</span><br>
<p>I'll look into the lingering daemon issue. Sounds like they (a) aren't properly terminating on abnormal termination, and (b) aren't suiciding when the HNP goes away.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 10:08 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 13, 2011, at 9:10 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed today a drastic change in how ORTE deal with the hostfile between trunk and 1.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. 1.5 and prior used the hostile as a suggestion, a placeholder where to pick the requested number of daemons during the launch. The current trunk spawn daemons on all the nodes provided on the host file, and then spawn the apps only on some of them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It was in the RFC about the revised mapping system, George, and discussed multiple times on the telecons. I even raised this specific point at least twice on those telecons.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. If a default hostfile is provided and --host was specified 1.5 and prior use the nodes to limit the number of nodes in the environment to the requested nodes. The current trunk seems to ignore the --host option if a default hostfile is available.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll check that one - we should limit the operation to the --host list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my configuration the hostfile is system wide, specified in the /etc via orte_default_hostfile. It contains all the nodes in the cluster, the users are supposed to use --host to limit their mpirun to a specified subset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems a quite significant change. I would have expected an RFC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10129.php">Nathan Hjelm: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10127.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>In reply to:</strong> <a href="10126.php">George Bosilca: "Re: [OMPI devel] Drastic change in ORTE behavior between trunk and 1.5"</a>
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
