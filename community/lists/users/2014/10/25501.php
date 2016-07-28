<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 14:46:18 2014" -->
<!-- isoreceived="20141015184618" -->
<!-- sent="Wed, 15 Oct 2014 14:46:13 -0400" -->
<!-- isosent="20141015184613" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters" -->
<!-- id="543EC0F5.9060305_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FF342DE4-1463-435F-9CAA-DC77C5CBC92A_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 14:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25502.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25500.php">McGrattan, Kevin B. Dr.: "[OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>In reply to:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph and Jeff for the help!
<br>
<p>Glad to hear the segmentation fault is reproducible and will be fixed.
<br>
<p>In any case, one can just avoid the old parameter name
<br>
(rmaps_base_schedule_policy),
<br>
and use instead the new parameter name
<br>
(rmaps_base_mapping_policy)
<br>
without any problem in OMPI 1.8.3.
<br>
<p>**
<br>
<p>Thanks Ralph for sending the new (OMPI 1.8)
<br>
parameter names for process binding.
<br>
<p>My recollection is that sometime ago somebody (Jeff perhaps?)
<br>
posted here a link to a presentation (PDF or PPT) explaining the
<br>
new style of process binding, but I couldn't find it in the
<br>
list archives.
<br>
Maybe the link could be part of the FAQ (if not already there)?
<br>
<p>**
<br>
<p>The Open MPI runtime environment is really great.
<br>
However, to take advantage of it one often has to do parameter guessing,
<br>
and to do time consuming tests by trial and error,
<br>
because the main sources of documentation are
<br>
the terse output of ompi_info, and several sparse
<br>
references in the FAQ.
<br>
(Some of them outdated?)
<br>
<p>In addition, the runtime environment has evolved over time,
<br>
which is certainly a good thing.
<br>
However, along with this evolution, several runtime parameters
<br>
changed both name and functionality, new ones were introduced,
<br>
old ones were deprecated, which can be somewhat confusing,
<br>
and can lead to an ineffective use of the runtime environment.
<br>
(In 1.8.3 I was using several deprecated parameters from 1.6.5
<br>
that seem to be silently ignored at runtime.
<br>
I only noticed the problem because that segmentation fault happened.)
<br>
<p>I know asking for thorough documentation is foolish,
<br>
but I guess a simple table of runtime parameter names and valid values
<br>
in the FAQ, maybe sorted by their purpose/function, along with a few 
<br>
examples of use, could help a lot.
<br>
Some of this material is now spread across several FAQ, but not so
<br>
easy to find/compare.
<br>
That doesn't need to be a comprehensive table, but commonly used
<br>
items like selecting the btl, selecting interfaces,
<br>
dealing with process binding,
<br>
modifying/enriching the stdout/sterr output
<br>
(tagging output, increasing verbosity, etc),
<br>
probably have their place there.
<br>
<p><p>Many thanks,
<br>
Gus Correa
<br>
<p><p>On 10/15/2014 11:12 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; We talked off-list -- fixed this on master and just filed <a href="https://github.com/open-mpi/ompi-release/pull/33">https://github.com/open-mpi/ompi-release/pull/33</a> to get this into the v1.8 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2014, at 7:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 14, 2014, at 5:32 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI fans and experts
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is just a note in case other people run into the same problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just built Open MPI 1.8.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As usual I put my old settings on openmpi-mca-params.conf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with no further thinking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then I compiled the connectivity_c.c program and tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run it with mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is a routine that never failed before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bummer!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've got a segmentation fault right away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange  - it works fine from the cmd line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 07:27:04  (v1.8) /home/common/openmpi/ompi-release$ mpirun -n 1 -mca rmaps_base_schedule_policy core hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A deprecated MCA variable value was specified in the environment or
</span><br>
<span class="quotelev2">&gt;&gt; on the command line.  Deprecated MCA variables should be avoided;
</span><br>
<span class="quotelev2">&gt;&gt; they may disappear in future releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Deprecated variable: rmaps_base_schedule_policy
</span><br>
<span class="quotelev2">&gt;&gt;   New variable:        rmaps_base_mapping_policy
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; bend001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HOWEVER, I can replicate that behavior when it is in the default params file! I don't see the immediate cause of the difference, but will investigate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After some head scratching, checking my environment, etc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought I might have configured OMPI incorrectly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence, I tried to get information from ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh well, ompi_info also segfaulted!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It took me a while to realize that the runtime parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration file was the culprit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I inserted the runtime parameter settings one by one,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the segfault came with this one:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ompi_info (when I got it to work) told me that the parameter above
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is now a deprecated synonym of:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any case, the old synonym doesn't work and makes ompi_info and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec segfault (and I'd guess anything else that requires the OMPI runtime components).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only the new parameter name works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's because the segfault is happening in the printing of the deprecation warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am also missing in the ompi_info output the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OMPI 1.6.5) parameters (not reported by ompi_info --all --all):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) orte_process_binding  ===&gt; hwloc_base_binding_policy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) orte_report_bindings   ===&gt; hwloc_base_report_bindings
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) opal_paffinity_alone  ===&gt; gone, use hwloc_base_binding_policy=none if you don't want any binding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are they gone forever?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there replacements for them, with approximately the same functionality?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a list comparing the new (1.8) vs. old (1.6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI runtime parameters, and/or any additional documentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the new style of OMPI 1.8 runtime parameters?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will try to add this to the web site
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since there seems to have been a major revamping of the OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime parameters, that would be a great help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25497.php">http://www.open-mpi.org/community/lists/users/2014/10/25497.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25498.php">http://www.open-mpi.org/community/lists/users/2014/10/25498.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25502.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25500.php">McGrattan, Kevin B. Dr.: "[OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>In reply to:</strong> <a href="25499.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and	new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
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
