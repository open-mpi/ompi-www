<?
$subject_val = "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 13:17:43 2009" -->
<!-- isoreceived="20091110181743" -->
<!-- sent="Tue, 10 Nov 2009 19:17:54 +0100" -->
<!-- isosent="20091110181754" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure" -->
<!-- id="4AF9AE52.9080003_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E871432-E4C0-4D8E-8627-64A3894FD5B4_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 13:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<li><strong>Previous message:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11143.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11143.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Maybe reply:</strong> <a href="11146.php">Reuti: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
<p>The acl here were just added when I tried to force the /opt/sge/tmp 
<br>
subdirectories to be 777 (which I did when I first encountered the error 
<br>
of subdirectories creation within OpenMPI). I don't think the info I'll 
<br>
provide will be meaningfull here:
<br>
<p>moe:~# getfacl /opt/sge/tmp
<br>
getfacl: Removing leading '/' from absolute path names
<br>
# file: opt/sge/tmp
<br>
# owner: sgeadmin
<br>
# group: fft
<br>
user::rwx
<br>
group::rwx
<br>
mask::rwx
<br>
other::rwx
<br>
default:user::rwx
<br>
default:group::rwx
<br>
default:group:fft:rwx
<br>
default:mask::rwx
<br>
default:other::rwx
<br>
<p>I'll try to use a local directory instead of a shared one for &quot;tmpdir&quot;. 
<br>
But as this issue seems somehow related to permissions, I don't know if 
<br>
this would eventually be the rigth solution.
<br>
<p>Thanks for your help,
<br>
Eloi
<br>
<p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 10.11.2009 um 19:01 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using &quot;tmpdir&quot; as a shared directory that contains the session 
</span><br>
<span class="quotelev2">&gt;&gt; directories created during job submission, not for computing or local 
</span><br>
<span class="quotelev2">&gt;&gt; storage. Doesn't the session directory (i.e. job_id.queue_name) need 
</span><br>
<span class="quotelev2">&gt;&gt; to be shared among all computing nodes (at least the ones that would 
</span><br>
<span class="quotelev2">&gt;&gt; be used with orted during the parallel computation) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; no. orted runs happily with local $TMPDIR on each and every node. The 
</span><br>
<span class="quotelev1">&gt; $TMPDIRs are intended to be used by the user for any temporary data 
</span><br>
<span class="quotelev1">&gt; for his job, as they are created and removed by SGE automatically for 
</span><br>
<span class="quotelev1">&gt; every job for his convenience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All sequential job run fine, as no write operation is performed in 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tmpdir/session_directory&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All users are known on the computing nodes and the master node (with 
</span><br>
<span class="quotelev2">&gt;&gt; use ldap authentication on all nodes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for the access checkings:
</span><br>
<span class="quotelev2">&gt;&gt; moe:~# ls -alrtd /opt/sge/tmp
</span><br>
<span class="quotelev2">&gt;&gt; drwxrwxrwx+ 2 sgeadmin fft 4096 2009-11-10 18:28 /opt/sge/tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aha, the + tells that there are some ACLs set:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; getfacl /opt/sge/tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And for the parallel environment configuration:
</span><br>
<span class="quotelev2">&gt;&gt; moe:~# qconf -sp round_robin
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            round_robin
</span><br>
<span class="quotelev2">&gt;&gt; slots              32
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 10.11.2009 um 18:20 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help Reuti,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using a nfs-shared directory (/opt/sge/tmp), exported from the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master node to all others computing nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's higly advisable to have the &quot;tmpdir&quot; local on each node. When 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you use &quot;cd $TMPDIR&quot; in your jobscript, all is done local on a node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (when your application will just create the scratch file in your 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current working directory) which will speed up the computation and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decrease the network traffic. Computing in as shared /opt/sge/tmp is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like computing in each user's home directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To avoid that any user can remove someone else's files, the &quot;t&quot; flag 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is set like for /tmp: drwxrwxrwt 14 root root 4096 2009-11-10 18:35 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nevertheless:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  with for /etc/export on server (named moe.fft):   /opt/sge    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 192.168.0.0/255.255.255.0(rw,sync,no_subtree_check)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                /etc/fstab on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; client:                                    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; moe.fft:/opt/sge                        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/sge                                nfs     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rw,bg,soft,timeo=14, 0 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, the /opt/sge/tmp directory is 777 across all machines, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thus all user should be able to create a directory inside.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All access checkings will be applied:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - on the server: what is &quot;ls -d /opt/sge/tmp&quot; showing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the one from the export (this seems to be fine)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the one on the node (i.e., how it's mounted: cat /etc/fstab)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The issue seems somehow related to the session directory created 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inside /opt/sge/tmp, let's stay /opt/sge/tmp/29.1.smp8.q for 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; example for the job 29 on queue smp8.q. This subdirectory of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/sge/tmp is created with nobody:nogroup drwxr-xr-x 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; permissions... which in turn forbids
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you try to run some simple jobs before the parallel ones - are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these working? The daemons (qmaster and execd) were started as root?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The user is known on the file server, i.e. the machine hosting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/sge?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI to create its subtree inside (as OpenMPI won't use 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nobody:nogroup credentials).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In SGE the master process (the one running the job script) will 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create the /opt/sge/tmp/29.1.smp8.q  and also each started qrsh 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inside SGE - all with the same name. What is your definition of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PE in SGE which you use?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ad Ralph suggested, I checked the SGE configuration, but I haven't 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; found anything related to nobody:nogroup configuration so far.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 10.11.2009 um 17:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help Ralph, I'll double check that.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As for the error message received, there might be some 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; inconsistency: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0&quot; is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; often /opt/sge is shared across the nodes, while the /tmp 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (sometimes implemented as /scratch in a partition on its own) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should be local on each node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What is the setting of &quot;tmpdir&quot; in your queue definition?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you want to share /opt/sge/tmp, everyone must be able to write 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; into this location. As for me it's working fine (with the local 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /tmp), I assume the nobody/nogroup comes from any squash-setting 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the /etc/export of you master node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parent directory and 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0/53199/0/0&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is the subdirectory... not the other way around.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Creating a directory with such credentials sounds like a bug in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; SGE to me...perhaps an SGE config issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Only thing you could do is tell OMPI to use some other directory 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; as the root for its session dir tree - check &quot;mpirun -h&quot;, or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info for the required option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I would first check your SGE config as that just doesn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sound right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm experiencing some issues using GE6.2U4 and OpenMPI-1.3.3 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (with gridengine compnent).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; During any job submission, SGE creates a session directory in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $TMPDIR, named after the job id and the computing node name. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This session directory is created using nobody/nogroup 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; credentials.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When using OpenMPI with tight-integration, opal creates 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different subdirectories in this session directory. The issue 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm facing now is that OpenMPI fails to create these 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subdirectories:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to create 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the sub-directory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0) of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ess_hnp_module.c 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 273
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at line 473
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This seems very likely related to the permissions set on $TMPDIR.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd like to know if someone might have experienced the same or 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a similar issue and if any solution was found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<li><strong>Previous message:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11130.php">Reuti: "Re: [OMPI users] [sge] tight-integration openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11143.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11143.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Maybe reply:</strong> <a href="11146.php">Reuti: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
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
