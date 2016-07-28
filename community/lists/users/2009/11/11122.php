<?
$subject_val = "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 12:06:52 2009" -->
<!-- isoreceived="20091110170652" -->
<!-- sent="Tue, 10 Nov 2009 18:06:20 +0100" -->
<!-- isosent="20091110170620" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure" -->
<!-- id="096852E8-D987-4B39-B008-4173F8777072_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF99AF9.5040405_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 12:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11123.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 10.11.2009 um 17:55 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; Thanks for your help Ralph, I'll double check that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the error message received, there might be some  
</span><br>
<span class="quotelev1">&gt; inconsistency: &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eg_at_charlie_0&quot; is the
</span><br>
<p>often /opt/sge is shared across the nodes, while the /tmp (sometimes  
<br>
implemented as /scratch in a partition on its own) should be local on  
<br>
each node.
<br>
<p>What is the setting of &quot;tmpdir&quot; in your queue definition?
<br>
<p>If you want to share /opt/sge/tmp, everyone must be able to write  
<br>
into this location. As for me it's working fine (with the local / 
<br>
tmp), I assume the nobody/nogroup comes from any squash-setting in  
<br>
the /etc/export of you master node.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; parent directory and &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eg_at_charlie_0/53199/0/0&quot; is the subdirectory... not the other way  
</span><br>
<span class="quotelev1">&gt; around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Creating a directory with such credentials sounds like a bug in  
</span><br>
<span class="quotelev2">&gt;&gt; SGE to me...perhaps an SGE config issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only thing you could do is tell OMPI to use some other directory  
</span><br>
<span class="quotelev2">&gt;&gt; as the root for its session dir tree - check &quot;mpirun -h&quot;, or  
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info for the required option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I would first check your SGE config as that just doesn't sound  
</span><br>
<span class="quotelev2">&gt;&gt; right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (with gridengine compnent).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; During any job submission, SGE creates a session directory in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $TMPDIR, named after the job id and the computing node name. This  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session directory is created using nobody/nogroup credentials.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When using OpenMPI with tight-integration, opal creates different  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subdirectories in this session directory. The issue I'm facing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now is that OpenMPI fails to create these subdirectories:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the sub-directory (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eg_at_charlie_0) of (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eg_at_charlie_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file ../../ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file ../../ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_hnp_module.c at line 273
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file ../../ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 473
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to know if someone might have experienced the same or a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar issue and if any solution was found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BELGIUM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Company Fax:   +32 10 454 626
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11123.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
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
