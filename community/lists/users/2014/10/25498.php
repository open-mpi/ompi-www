<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 22:39:40 2014" -->
<!-- isoreceived="20141015023940" -->
<!-- sent="Tue, 14 Oct 2014 19:39:34 -0700" -->
<!-- isosent="20141015023934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters" -->
<!-- id="53A3EA74-B7DE-431A-8376-8E1D5E869781_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="543DC0A6.40901_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-14 22:39:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<li><strong>Previous message:</strong> <a href="25497.php">Gus Correa: "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25497.php">Gus Correa: "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<li><strong>Reply:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2014, at 5:32 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI fans and experts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is just a note in case other people run into the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just built Open MPI 1.8.3.
</span><br>
<span class="quotelev1">&gt; As usual I put my old settings on openmpi-mca-params.conf,
</span><br>
<span class="quotelev1">&gt; with no further thinking.
</span><br>
<span class="quotelev1">&gt; Then I compiled the connectivity_c.c program and tried
</span><br>
<span class="quotelev1">&gt; to run it with mpiexec.
</span><br>
<span class="quotelev1">&gt; That is a routine that never failed before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bummer!
</span><br>
<span class="quotelev1">&gt; I've got a segmentation fault right away.
</span><br>
<p>Strange  - it works fine from the cmd line:
<br>
<p>07:27:04  (v1.8) /home/common/openmpi/ompi-release$ mpirun -n 1 -mca rmaps_base_schedule_policy core hostname
<br>
--------------------------------------------------------------------------
<br>
A deprecated MCA variable value was specified in the environment or
<br>
on the command line.  Deprecated MCA variables should be avoided;
<br>
they may disappear in future releases.
<br>
<p>&nbsp;&nbsp;Deprecated variable: rmaps_base_schedule_policy
<br>
&nbsp;&nbsp;New variable:        rmaps_base_mapping_policy
<br>
--------------------------------------------------------------------------
<br>
bend001
<br>
<p>HOWEVER, I can replicate that behavior when it is in the default params file! I don't see the immediate cause of the difference, but will investigate.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some head scratching, checking my environment, etc,
</span><br>
<span class="quotelev1">&gt; I thought I might have configured OMPI incorrectly.
</span><br>
<span class="quotelev1">&gt; Hence, I tried to get information from ompi_info.
</span><br>
<span class="quotelev1">&gt; Oh well, ompi_info also segfaulted!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It took me a while to realize that the runtime parameter
</span><br>
<span class="quotelev1">&gt; configuration file was the culprit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I inserted the runtime parameter settings one by one,
</span><br>
<span class="quotelev1">&gt; the segfault came with this one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ompi_info (when I got it to work) told me that the parameter above
</span><br>
<span class="quotelev1">&gt; is now a deprecated synonym of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, the old synonym doesn't work and makes ompi_info and
</span><br>
<span class="quotelev1">&gt; mpiexec segfault (and I'd guess anything else that requires the OMPI runtime components).
</span><br>
<span class="quotelev1">&gt; Only the new parameter name works.
</span><br>
<p>That's because the segfault is happening in the printing of the deprecation warning.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am also missing in the ompi_info output the following
</span><br>
<span class="quotelev1">&gt; (OMPI 1.6.5) parameters (not reported by ompi_info --all --all):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>1) orte_process_binding  ===&gt; hwloc_base_binding_policy
<br>
<p>2) orte_report_bindings   ===&gt; hwloc_base_report_bindings
<br>
<p>3) opal_paffinity_alone  ===&gt; gone, use hwloc_base_binding_policy=none if you don't want any binding
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are they gone forever?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there replacements for them, with approximately the same functionality?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a list comparing the new (1.8) vs. old (1.6)
</span><br>
<span class="quotelev1">&gt; OMPI runtime parameters, and/or any additional documentation
</span><br>
<span class="quotelev1">&gt; about the new style of OMPI 1.8 runtime parameters?
</span><br>
<p>Will try to add this to the web site
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since there seems to have been a major revamping of the OMPI
</span><br>
<span class="quotelev1">&gt; runtime parameters, that would be a great help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25497.php">http://www.open-mpi.org/community/lists/users/2014/10/25497.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<li><strong>Previous message:</strong> <a href="25497.php">Gus Correa: "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25497.php">Gus Correa: "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<li><strong>Reply:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
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
