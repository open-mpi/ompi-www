<?
$subject_val = "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 13:01:03 2009" -->
<!-- isoreceived="20091110180103" -->
<!-- sent="Tue, 10 Nov 2009 19:01:15 +0100" -->
<!-- isosent="20091110180115" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure" -->
<!-- id="4AF9AA6B.4010207_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B3F8930-68DB-425F-891A-66C5D4D6E55A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 13:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
<p>I'm using &quot;tmpdir&quot; as a shared directory that contains the session 
<br>
directories created during job submission, not for computing or local 
<br>
storage. Doesn't the session directory (i.e. job_id.queue_name) need to 
<br>
be shared among all computing nodes (at least the ones that would be 
<br>
used with orted during the parallel computation) ?
<br>
<p><p>All sequential job run fine, as no write operation is performed in 
<br>
&quot;tmpdir/session_directory&quot;.
<br>
<p>All users are known on the computing nodes and the master node (with use 
<br>
ldap authentication on all nodes).
<br>
<p>As for the access checkings:
<br>
moe:~# ls -alrtd /opt/sge/tmp
<br>
drwxrwxrwx+ 2 sgeadmin fft 4096 2009-11-10 18:28 /opt/sge/tmp
<br>
<p>And for the parallel environment configuration:
<br>
moe:~# qconf -sp round_robin
<br>
pe_name            round_robin
<br>
slots              32
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>Thanks for your help,
<br>
Eloi
<br>
<p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 10.11.2009 um 18:20 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using a nfs-shared directory (/opt/sge/tmp), exported from the 
</span><br>
<span class="quotelev2">&gt;&gt; master node to all others computing nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's higly advisable to have the &quot;tmpdir&quot; local on each node. When you 
</span><br>
<span class="quotelev1">&gt; use &quot;cd $TMPDIR&quot; in your jobscript, all is done local on a node (when 
</span><br>
<span class="quotelev1">&gt; your application will just create the scratch file in your current 
</span><br>
<span class="quotelev1">&gt; working directory) which will speed up the computation and decrease 
</span><br>
<span class="quotelev1">&gt; the network traffic. Computing in as shared /opt/sge/tmp is like 
</span><br>
<span class="quotelev1">&gt; computing in each user's home directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid that any user can remove someone else's files, the &quot;t&quot; flag 
</span><br>
<span class="quotelev1">&gt; is set like for /tmp: drwxrwxrwt 14 root root 4096 2009-11-10 18:35 /tmp/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nevertheless:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  with for /etc/export on server (named moe.fft):   /opt/sge    
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.0/255.255.255.0(rw,sync,no_subtree_check)
</span><br>
<span class="quotelev2">&gt;&gt;                /etc/fstab on 
</span><br>
<span class="quotelev2">&gt;&gt; client:                                    
</span><br>
<span class="quotelev2">&gt;&gt; moe.fft:/opt/sge                        
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sge                                nfs     rw,bg,soft,timeo=14, 0 0
</span><br>
<span class="quotelev2">&gt;&gt; Actually, the /opt/sge/tmp directory is 777 across all machines, thus 
</span><br>
<span class="quotelev2">&gt;&gt; all user should be able to create a directory inside.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All access checkings will be applied:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - on the server: what is &quot;ls -d /opt/sge/tmp&quot; showing?
</span><br>
<span class="quotelev1">&gt; - the one from the export (this seems to be fine)
</span><br>
<span class="quotelev1">&gt; - the one on the node (i.e., how it's mounted: cat /etc/fstab)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The issue seems somehow related to the session directory created 
</span><br>
<span class="quotelev2">&gt;&gt; inside /opt/sge/tmp, let's stay /opt/sge/tmp/29.1.smp8.q for example 
</span><br>
<span class="quotelev2">&gt;&gt; for the job 29 on queue smp8.q. This subdirectory of /opt/sge/tmp is 
</span><br>
<span class="quotelev2">&gt;&gt; created with nobody:nogroup drwxr-xr-x permissions... which in turn 
</span><br>
<span class="quotelev2">&gt;&gt; forbids
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try to run some simple jobs before the parallel ones - are 
</span><br>
<span class="quotelev1">&gt; these working? The daemons (qmaster and execd) were started as root?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The user is known on the file server, i.e. the machine hosting /opt/sge?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI to create its subtree inside (as OpenMPI won't use 
</span><br>
<span class="quotelev2">&gt;&gt; nobody:nogroup credentials).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In SGE the master process (the one running the job script) will create 
</span><br>
<span class="quotelev1">&gt; the /opt/sge/tmp/29.1.smp8.q  and also each started qrsh inside SGE - 
</span><br>
<span class="quotelev1">&gt; all with the same name. What is your definition of the PE in SGE which 
</span><br>
<span class="quotelev1">&gt; you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ad Ralph suggested, I checked the SGE configuration, but I haven't 
</span><br>
<span class="quotelev2">&gt;&gt; found anything related to nobody:nogroup configuration so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 10.11.2009 um 17:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help Ralph, I'll double check that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As for the error message received, there might be some 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inconsistency: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0&quot; is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; often /opt/sge is shared across the nodes, while the /tmp (sometimes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implemented as /scratch in a partition on its own) should be local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the setting of &quot;tmpdir&quot; in your queue definition?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want to share /opt/sge/tmp, everyone must be able to write 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into this location. As for me it's working fine (with the local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp), I assume the nobody/nogroup comes from any squash-setting in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the /etc/export of you master node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parent directory and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0/53199/0/0&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is the subdirectory... not the other way around.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Creating a directory with such credentials sounds like a bug in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SGE to me...perhaps an SGE config issue?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Only thing you could do is tell OMPI to use some other directory 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as the root for its session dir tree - check &quot;mpirun -h&quot;, or 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info for the required option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But I would first check your SGE config as that just doesn't sound 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; right.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (with gridengine compnent).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; During any job submission, SGE creates a session directory in 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $TMPDIR, named after the job id and the computing node name. This 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; session directory is created using nobody/nogroup credentials.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When using OpenMPI with tight-integration, opal creates different 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; subdirectories in this session directory. The issue I'm facing 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; now is that OpenMPI fails to create these subdirectories:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the sub-directory 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0) of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ess_hnp_module.c at 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line 273
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at line 473
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'd like to know if someone might have experienced the same or a 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; similar issue and if any solution was found.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11128.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
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
