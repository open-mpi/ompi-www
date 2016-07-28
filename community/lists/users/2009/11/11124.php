<?
$subject_val = "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 12:19:57 2009" -->
<!-- isoreceived="20091110171957" -->
<!-- sent="Tue, 10 Nov 2009 18:20:07 +0100" -->
<!-- isosent="20091110172007" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure" -->
<!-- id="4AF9A0C7.9020403_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="096852E8-D987-4B39-B008-4173F8777072_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 12:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11125.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11123.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11122.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help Reuti,
<br>
<p>I'm using a nfs-shared directory (/opt/sge/tmp), exported from the 
<br>
master node to all others computing nodes.
<br>
&nbsp;&nbsp;with for /etc/export on server (named moe.fft):   /opt/sge    
<br>
192.168.0.0/255.255.255.0(rw,sync,no_subtree_check)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/etc/fstab on client:                                    
<br>
moe.fft:/opt/sge                        
<br>
/opt/sge                                nfs     rw,bg,soft,timeo=14, 0 0
<br>
Actually, the /opt/sge/tmp directory is 777 across all machines, thus 
<br>
all user should be able to create a directory inside.
<br>
<p>The issue seems somehow related to the session directory created inside 
<br>
/opt/sge/tmp, let's stay /opt/sge/tmp/29.1.smp8.q for example for the 
<br>
job 29 on queue smp8.q. This subdirectory of /opt/sge/tmp is created 
<br>
with nobody:nogroup drwxr-xr-x permissions... which in turn forbids 
<br>
OpenMPI to create its subtree inside (as OpenMPI won't use 
<br>
nobody:nogroup credentials).
<br>
<p>Ad Ralph suggested, I checked the SGE configuration, but I haven't found 
<br>
anything related to nobody:nogroup configuration so far.
<br>
<p>Eloi
<br>
<p><p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 10.11.2009 um 17:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help Ralph, I'll double check that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for the error message received, there might be some inconsistency: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0&quot; is the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; often /opt/sge is shared across the nodes, while the /tmp (sometimes 
</span><br>
<span class="quotelev1">&gt; implemented as /scratch in a partition on its own) should be local on 
</span><br>
<span class="quotelev1">&gt; each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the setting of &quot;tmpdir&quot; in your queue definition?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to share /opt/sge/tmp, everyone must be able to write into 
</span><br>
<span class="quotelev1">&gt; this location. As for me it's working fine (with the local /tmp), I 
</span><br>
<span class="quotelev1">&gt; assume the nobody/nogroup comes from any squash-setting in the 
</span><br>
<span class="quotelev1">&gt; /etc/export of you master node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; parent directory and 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0/53199/0/0&quot; is 
</span><br>
<span class="quotelev2">&gt;&gt; the subdirectory... not the other way around.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Creating a directory with such credentials sounds like a bug in SGE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to me...perhaps an SGE config issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only thing you could do is tell OMPI to use some other directory as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the root for its session dir tree - check &quot;mpirun -h&quot;, or ompi_info 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the required option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I would first check your SGE config as that just doesn't sound 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3 (with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gridengine compnent).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; During any job submission, SGE creates a session directory in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $TMPDIR, named after the job id and the computing node name. This 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; session directory is created using nobody/nogroup credentials.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When using OpenMPI with tight-integration, opal creates different 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subdirectories in this session directory. The issue I'm facing now 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is that OpenMPI fails to create these subdirectories:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sub-directory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0) of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ess_hnp_module.c at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line 273
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at line 473
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd like to know if someone might have experienced the same or a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similar issue and if any solution was found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BELGIUM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Company Fax:   +32 10 454 626
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11125.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Previous message:</strong> <a href="11123.php">Chris Walker: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>In reply to:</strong> <a href="11122.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
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
