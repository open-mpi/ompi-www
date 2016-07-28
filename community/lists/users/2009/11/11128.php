<?
$subject_val = "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 12:49:02 2009" -->
<!-- isoreceived="20091110174902" -->
<!-- sent="Tue, 10 Nov 2009 18:48:19 +0100" -->
<!-- isosent="20091110174819" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure" -->
<!-- id="1B3F8930-68DB-425F-891A-66C5D4D6E55A_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF9A0C7.9020403_at_fft.be" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 12:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11129.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11129.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11129.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 10.11.2009 um 18:20 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; Thanks for your help Reuti,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using a nfs-shared directory (/opt/sge/tmp), exported from the  
</span><br>
<span class="quotelev1">&gt; master node to all others computing nodes.
</span><br>
<p>It's higly advisable to have the &quot;tmpdir&quot; local on each node. When  
<br>
you use &quot;cd $TMPDIR&quot; in your jobscript, all is done local on a node  
<br>
(when your application will just create the scratch file in your  
<br>
current working directory) which will speed up the computation and  
<br>
decrease the network traffic. Computing in as shared /opt/sge/tmp is  
<br>
like computing in each user's home directory.
<br>
<p>To avoid that any user can remove someone else's files, the &quot;t&quot; flag  
<br>
is set like for /tmp: drwxrwxrwt 14 root root 4096 2009-11-10 18:35 / 
<br>
tmp/
<br>
<p>Nevertheless:
<br>
<p><span class="quotelev1">&gt;  with for /etc/export on server (named moe.fft):   /opt/sge     
</span><br>
<span class="quotelev1">&gt; 192.168.0.0/255.255.255.0(rw,sync,no_subtree_check)
</span><br>
<span class="quotelev1">&gt;                /etc/fstab on  
</span><br>
<span class="quotelev1">&gt; client:                                    moe.fft:/opt/ 
</span><br>
<span class="quotelev1">&gt; sge                        /opt/sge                                 
</span><br>
<span class="quotelev1">&gt; nfs     rw,bg,soft,timeo=14, 0 0
</span><br>
<span class="quotelev1">&gt; Actually, the /opt/sge/tmp directory is 777 across all machines,  
</span><br>
<span class="quotelev1">&gt; thus all user should be able to create a directory inside.
</span><br>
<p>All access checkings will be applied:
<br>
<p>- on the server: what is &quot;ls -d /opt/sge/tmp&quot; showing?
<br>
- the one from the export (this seems to be fine)
<br>
- the one on the node (i.e., how it's mounted: cat /etc/fstab)
<br>
<p><span class="quotelev1">&gt; The issue seems somehow related to the session directory created  
</span><br>
<span class="quotelev1">&gt; inside /opt/sge/tmp, let's stay /opt/sge/tmp/29.1.smp8.q for  
</span><br>
<span class="quotelev1">&gt; example for the job 29 on queue smp8.q. This subdirectory of /opt/ 
</span><br>
<span class="quotelev1">&gt; sge/tmp is created with nobody:nogroup drwxr-xr-x permissions...  
</span><br>
<span class="quotelev1">&gt; which in turn forbids
</span><br>
<p>Did you try to run some simple jobs before the parallel ones - are  
<br>
these working? The daemons (qmaster and execd) were started as root?
<br>
<p>The user is known on the file server, i.e. the machine hosting /opt/sge?
<br>
<p><span class="quotelev1">&gt; OpenMPI to create its subtree inside (as OpenMPI won't use  
</span><br>
<span class="quotelev1">&gt; nobody:nogroup credentials).
</span><br>
<p>In SGE the master process (the one running the job script) will  
<br>
create the /opt/sge/tmp/29.1.smp8.q  and also each started qrsh  
<br>
inside SGE - all with the same name. What is your definition of the  
<br>
PE in SGE which you use?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Ad Ralph suggested, I checked the SGE configuration, but I haven't  
</span><br>
<span class="quotelev1">&gt; found anything related to nobody:nogroup configuration so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 10.11.2009 um 17:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help Ralph, I'll double check that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for the error message received, there might be some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inconsistency: &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eg_at_charlie_0&quot; is the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; often /opt/sge is shared across the nodes, while the /tmp  
</span><br>
<span class="quotelev2">&gt;&gt; (sometimes implemented as /scratch in a partition on its own)  
</span><br>
<span class="quotelev2">&gt;&gt; should be local on each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the setting of &quot;tmpdir&quot; in your queue definition?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to share /opt/sge/tmp, everyone must be able to write  
</span><br>
<span class="quotelev2">&gt;&gt; into this location. As for me it's working fine (with the local / 
</span><br>
<span class="quotelev2">&gt;&gt; tmp), I assume the nobody/nogroup comes from any squash-setting in  
</span><br>
<span class="quotelev2">&gt;&gt; the /etc/export of you master node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent directory and &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eg_at_charlie_0/53199/0/0&quot; is the subdirectory... not the other way  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Creating a directory with such credentials sounds like a bug in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE to me...perhaps an SGE config issue?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Only thing you could do is tell OMPI to use some other directory  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as the root for its session dir tree - check &quot;mpirun -h&quot;, or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info for the required option.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I would first check your SGE config as that just doesn't  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sound right.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (with gridengine compnent).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; During any job submission, SGE creates a session directory in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $TMPDIR, named after the job id and the computing node name.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This session directory is created using nobody/nogroup  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; credentials.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When using OpenMPI with tight-integration, opal creates  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different subdirectories in this session directory. The issue  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm facing now is that OpenMPI fails to create these  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subdirectories:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the sub-directory (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eg_at_charlie_0) of (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eg_at_charlie_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file ../../openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file ../../openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ess_hnp_module.c at line 273
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file ../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 473
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'd like to know if someone might have experienced the same or  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a similar issue and if any solution was found.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BELGIUM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Company Fax:   +32 10 454 626
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11129.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="11124.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11129.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11129.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
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
