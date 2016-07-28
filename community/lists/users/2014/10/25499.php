<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 11:12:52 2014" -->
<!-- isoreceived="20141015151252" -->
<!-- sent="Wed, 15 Oct 2014 15:12:50 +0000" -->
<!-- isosent="20141015151250" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters" -->
<!-- id="FF342DE4-1463-435F-9CAA-DC77C5CBC92A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53A3EA74-B7DE-431A-8376-8E1D5E869781_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 11:12:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25500.php">McGrattan, Kevin B. Dr.: "[OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25501.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25501.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked off-list -- fixed this on master and just filed <a href="https://github.com/open-mpi/ompi-release/pull/33">https://github.com/open-mpi/ompi-release/pull/33</a> to get this into the v1.8 branch.
<br>
<p><p>On Oct 14, 2014, at 7:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2014, at 5:32 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI fans and experts
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is just a note in case other people run into the same problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just built Open MPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt; As usual I put my old settings on openmpi-mca-params.conf,
</span><br>
<span class="quotelev2">&gt;&gt; with no further thinking.
</span><br>
<span class="quotelev2">&gt;&gt; Then I compiled the connectivity_c.c program and tried
</span><br>
<span class="quotelev2">&gt;&gt; to run it with mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt; That is a routine that never failed before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bummer!
</span><br>
<span class="quotelev2">&gt;&gt; I've got a segmentation fault right away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strange  - it works fine from the cmd line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 07:27:04  (v1.8) /home/common/openmpi/ompi-release$ mpirun -n 1 -mca rmaps_base_schedule_policy core hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A deprecated MCA variable value was specified in the environment or
</span><br>
<span class="quotelev1">&gt; on the command line.  Deprecated MCA variables should be avoided;
</span><br>
<span class="quotelev1">&gt; they may disappear in future releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Deprecated variable: rmaps_base_schedule_policy
</span><br>
<span class="quotelev1">&gt;  New variable:        rmaps_base_mapping_policy
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; bend001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOWEVER, I can replicate that behavior when it is in the default params file! I don't see the immediate cause of the difference, but will investigate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After some head scratching, checking my environment, etc,
</span><br>
<span class="quotelev2">&gt;&gt; I thought I might have configured OMPI incorrectly.
</span><br>
<span class="quotelev2">&gt;&gt; Hence, I tried to get information from ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt; Oh well, ompi_info also segfaulted!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It took me a while to realize that the runtime parameter
</span><br>
<span class="quotelev2">&gt;&gt; configuration file was the culprit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I inserted the runtime parameter settings one by one,
</span><br>
<span class="quotelev2">&gt;&gt; the segfault came with this one:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ompi_info (when I got it to work) told me that the parameter above
</span><br>
<span class="quotelev2">&gt;&gt; is now a deprecated synonym of:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In any case, the old synonym doesn't work and makes ompi_info and
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec segfault (and I'd guess anything else that requires the OMPI runtime components).
</span><br>
<span class="quotelev2">&gt;&gt; Only the new parameter name works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's because the segfault is happening in the printing of the deprecation warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am also missing in the ompi_info output the following
</span><br>
<span class="quotelev2">&gt;&gt; (OMPI 1.6.5) parameters (not reported by ompi_info --all --all):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) orte_process_binding  ===&gt; hwloc_base_binding_policy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) orte_report_bindings   ===&gt; hwloc_base_report_bindings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) opal_paffinity_alone  ===&gt; gone, use hwloc_base_binding_policy=none if you don't want any binding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are they gone forever?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there replacements for them, with approximately the same functionality?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a list comparing the new (1.8) vs. old (1.6)
</span><br>
<span class="quotelev2">&gt;&gt; OMPI runtime parameters, and/or any additional documentation
</span><br>
<span class="quotelev2">&gt;&gt; about the new style of OMPI 1.8 runtime parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will try to add this to the web site
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since there seems to have been a major revamping of the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; runtime parameters, that would be a great help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25497.php">http://www.open-mpi.org/community/lists/users/2014/10/25497.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25498.php">http://www.open-mpi.org/community/lists/users/2014/10/25498.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25500.php">McGrattan, Kevin B. Dr.: "[OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25501.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25501.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
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
