<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 09:36:43 2011" -->
<!-- isoreceived="20110322133643" -->
<!-- sent="Tue, 22 Mar 2011 07:36:35 -0600" -->
<!-- isosent="20110322133635" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?" -->
<!-- id="19D9257B-9F81-466B-809E-579F0BFD785C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D881731.4060802_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 09:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15960.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15958.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<li><strong>In reply to:</strong> <a href="15952.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2011, at 9:27 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there an MCA parameter that would do the same as the mpiexec switch '-bind-to-core'?
</span><br>
<span class="quotelev2">&gt;&gt; I.e., something that I could set up not in the mpiexec command line,
</span><br>
<span class="quotelev2">&gt;&gt; but for the whole cluster, or for an user, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the past I used '-mca mpi mpi_paffinity_alone=1'.
</span><br>
<p>Must be a typo here - the correct command is '-mca mpi_paffinity_alone 1'
<br>
<p><span class="quotelev2">&gt;&gt; But that was before '-bind-to-core' came along.
</span><br>
<span class="quotelev2">&gt;&gt; However, my recollection of some recent discussions here in the list
</span><br>
<span class="quotelev2">&gt;&gt; is that the latter would not do the same as '-bind-to-core',
</span><br>
<span class="quotelev2">&gt;&gt; and that the recommendation was to use '-bind-to-core' in the mpiexec command line.
</span><br>
<p>Just to be clear: mpi_paffinity_alone=1 still works and will cause the same behavior as bind-to-core.
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; A little awkward, but how about
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --bycore                rmaps_base_schedule_policy  core
</span><br>
<span class="quotelev1">&gt;         --bysocket              rmaps_base_schedule_policy  socket
</span><br>
<span class="quotelev1">&gt;         --bind-to-core          orte_process_binding        core
</span><br>
<span class="quotelev1">&gt;         --bind-to-socket        orte_process_binding        socket
</span><br>
<span class="quotelev1">&gt;         --bind-to-none          orte_process_binding        none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15960.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15958.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<li><strong>In reply to:</strong> <a href="15952.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
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
