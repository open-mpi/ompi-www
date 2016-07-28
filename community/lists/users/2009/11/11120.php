<?
$subject_val = "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 11:55:10 2009" -->
<!-- isoreceived="20091110165510" -->
<!-- sent="Tue, 10 Nov 2009 17:55:21 +0100" -->
<!-- isosent="20091110165521" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure" -->
<!-- id="4AF99AF9.5040405_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="301C2FBF-0143-4B31-A455-38987855BD03_at_open-mpi.org" -->
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
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 11:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11119.php">Chris Walker: "[OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11122.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11122.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help Ralph, I'll double check that.
<br>
<p>As for the error message received, there might be some inconsistency: 
<br>
&quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0&quot; is the parent 
<br>
directory and 
<br>
&quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0/53199/0/0&quot; is 
<br>
the subdirectory... not the other way around.
<br>
<p>Eloi
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Creating a directory with such credentials sounds like a bug in SGE to 
</span><br>
<span class="quotelev1">&gt; me...perhaps an SGE config issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only thing you could do is tell OMPI to use some other directory as 
</span><br>
<span class="quotelev1">&gt; the root for its session dir tree - check &quot;mpirun -h&quot;, or ompi_info 
</span><br>
<span class="quotelev1">&gt; for the required option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I would first check your SGE config as that just doesn't sound right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3 (with 
</span><br>
<span class="quotelev2">&gt;&gt; gridengine compnent).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During any job submission, SGE creates a session directory in 
</span><br>
<span class="quotelev2">&gt;&gt; $TMPDIR, named after the job id and the computing node name. This 
</span><br>
<span class="quotelev2">&gt;&gt; session directory is created using nobody/nogroup credentials.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When using OpenMPI with tight-integration, opal creates different 
</span><br>
<span class="quotelev2">&gt;&gt; subdirectories in this session directory. The issue I'm facing now is 
</span><br>
<span class="quotelev2">&gt;&gt; that OpenMPI fails to create these subdirectories:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create the 
</span><br>
<span class="quotelev2">&gt;&gt; sub-directory 
</span><br>
<span class="quotelev2">&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0) of 
</span><br>
<span class="quotelev2">&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ess_hnp_module.c at 
</span><br>
<span class="quotelev2">&gt;&gt; line 273
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at line 473
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to know if someone might have experienced the same or a 
</span><br>
<span class="quotelev2">&gt;&gt; similar issue and if any solution was found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev2">&gt;&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev2">&gt;&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev2">&gt;&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev2">&gt;&gt; BELGIUM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev2">&gt;&gt; Company Fax:   +32 10 454 626
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11119.php">Chris Walker: "[OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11122.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11122.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
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
