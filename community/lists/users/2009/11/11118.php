<?
$subject_val = "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 11:47:24 2009" -->
<!-- isoreceived="20091110164724" -->
<!-- sent="Tue, 10 Nov 2009 09:47:14 -0700" -->
<!-- isosent="20091110164714" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure" -->
<!-- id="301C2FBF-0143-4B31-A455-38987855BD03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF9978B.5080607_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 11:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11119.php">Chris Walker: "[OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11117.php">Eloi Gaudry: "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11117.php">Eloi Gaudry: "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Creating a directory with such credentials sounds like a bug in SGE to  
<br>
me...perhaps an SGE config issue?
<br>
<p>Only thing you could do is tell OMPI to use some other directory as  
<br>
the root for its session dir tree - check &quot;mpirun -h&quot;, or ompi_info  
<br>
for the required option.
<br>
<p>But I would first check your SGE config as that just doesn't sound  
<br>
right.
<br>
<p>On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3 (with  
</span><br>
<span class="quotelev1">&gt; gridengine compnent).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During any job submission, SGE creates a session directory in  
</span><br>
<span class="quotelev1">&gt; $TMPDIR, named after the job id and the computing node name. This  
</span><br>
<span class="quotelev1">&gt; session directory is created using nobody/nogroup credentials.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using OpenMPI with tight-integration, opal creates different  
</span><br>
<span class="quotelev1">&gt; subdirectories in this session directory. The issue I'm facing now  
</span><br>
<span class="quotelev1">&gt; is that OpenMPI fails to create these subdirectories:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create the  
</span><br>
<span class="quotelev1">&gt; sub-directory (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eg_at_charlie_0) of (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eg_at_charlie_0
</span><br>
<span class="quotelev1">&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file ../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev1">&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file ../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev1">&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt; file ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ess_hnp_module.c  
</span><br>
<span class="quotelev1">&gt; at line 273
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
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
<span class="quotelev1">&gt; orte_session_dir failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file ../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
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
<span class="quotelev1">&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt; file ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at line  
</span><br>
<span class="quotelev1">&gt; 473
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to know if someone might have experienced the same or a  
</span><br>
<span class="quotelev1">&gt; similar issue and if any solution was found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev1">&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev1">&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev1">&gt; BELGIUM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev1">&gt; Company Fax:   +32 10 454 626
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
<li><strong>Next message:</strong> <a href="11119.php">Chris Walker: "[OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11117.php">Eloi Gaudry: "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11117.php">Eloi Gaudry: "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
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
