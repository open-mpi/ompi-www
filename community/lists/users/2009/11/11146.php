<?
$subject_val = "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 18:13:20 2009" -->
<!-- isoreceived="20091110231320" -->
<!-- sent="Wed, 11 Nov 2009 00:14:10 +0100" -->
<!-- isosent="20091110231410" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure" -->
<!-- id="EBC513B9-2556-462D-8B66-0A4FC676F0B1_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF9F13C.9090801_at_fft.be" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 18:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11147.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11145.php">Reuti: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="11131.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11147.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11147.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 11.11.2009 um 00:03 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; The user/group used to generate the temporary directories was  
</span><br>
<span class="quotelev1">&gt; nobody/nogroup, when using a shared $tmpdir.
</span><br>
<span class="quotelev1">&gt; Now that I'm using a local $tmpdir (one for each node, not  
</span><br>
<span class="quotelev1">&gt; distributed over nfs), the right credentials (i.e. my username/ 
</span><br>
<span class="quotelev1">&gt; groupname) are used to create the session directory inside $tmpdir,  
</span><br>
<span class="quotelev1">&gt; which in turn allows OpenMPI to successfully create its session  
</span><br>
<span class="quotelev1">&gt; subdirectories.
</span><br>
<p>Aha, this explains why it's working now - so it's not an SGE issue IMHO.
<br>
<p>Question: when a user on the execution node goes to /opt/sge/tmp and  
<br>
creates a directory on the command line with mkdir: what group/user  
<br>
is used then?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/11/2009 23:51, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 10.11.2009 um 23:42 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I followed your advice and switched to a local &quot;tmpdir&quot; instead of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; share one. This solved the session directory issue, thanks for your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what user/group is no listed for the generated temporary directories
</span><br>
<span class="quotelev2">&gt;&gt; (i.e. $TMPDIR)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I cannot understand how the issue disappeared. Any input
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be welcome as I really like to understand how SGE/OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed when using such a configuration (i.e. with a shared  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;tmpdir&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/11/2009 19:17, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reuti,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The acl here were just added when I tried to force the /opt/sge/tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subdirectories to be 777 (which I did when I first encountered the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error of subdirectories creation within OpenMPI). I don't think the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; info I'll provide will be meaningfull here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; moe:~# getfacl /opt/sge/tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getfacl: Removing leading '/' from absolute path names
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # file: opt/sge/tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # owner: sgeadmin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # group: fft
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; user::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; group::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mask::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:user::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:group::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:group:fft:rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:mask::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default:other::rwx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll try to use a local directory instead of a shared one for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;tmpdir&quot;. But as this issue seems somehow related to permissions, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't know if this would eventually be the rigth solution.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 10.11.2009 um 19:01 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm using &quot;tmpdir&quot; as a shared directory that contains the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; session
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; directories created during job submission, not for computing or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; local storage. Doesn't the session directory (i.e.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; job_id.queue_name) need to be shared among all computing nodes  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; least the ones that would be used with orted during the parallel
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; computation) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no. orted runs happily with local $TMPDIR on each and every node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The $TMPDIRs are intended to be used by the user for any temporary
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data for his job, as they are created and removed by SGE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically for every job for his convenience.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; All sequential job run fine, as no write operation is  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performed in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;tmpdir/session_directory&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; All users are known on the computing nodes and the master node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (with use ldap authentication on all nodes).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As for the access checkings:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; moe:~# ls -alrtd /opt/sge/tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; drwxrwxrwx+ 2 sgeadmin fft 4096 2009-11-10 18:28 /opt/sge/tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aha, the + tells that there are some ACLs set:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; getfacl /opt/sge/tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And for the parallel environment configuration:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; moe:~# qconf -sp round_robin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pe_name            round_robin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slots              32
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Okay, fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 10.11.2009 um 18:20 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help Reuti,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using a nfs-shared directory (/opt/sge/tmp), exported from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the master node to all others computing nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It's higly advisable to have the &quot;tmpdir&quot; local on each node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; When you use &quot;cd $TMPDIR&quot; in your jobscript, all is done  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; local on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a node (when your application will just create the scratch file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in your current working directory) which will speed up the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; computation and decrease the network traffic. Computing in as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared /opt/sge/tmp is like computing in each user's home  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To avoid that any user can remove someone else's files, the &quot;t&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; flag is set like for /tmp: drwxrwxrwt 14 root root 4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2009-11-10 18:35 /tmp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Nevertheless:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  with for /etc/export on server (named moe.fft):   /opt/sge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 192.168.0.0/255.255.255.0(rw,sync,no_subtree_check)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                /etc/fstab on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; client:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; moe.fft:/opt/sge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/sge                                nfs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rw,bg,soft,timeo=14, 0 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Actually, the /opt/sge/tmp directory is 777 across all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; machines,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thus all user should be able to create a directory inside.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; All access checkings will be applied:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - on the server: what is &quot;ls -d /opt/sge/tmp&quot; showing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - the one from the export (this seems to be fine)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - the one on the node (i.e., how it's mounted: cat /etc/fstab)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The issue seems somehow related to the session directory  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; created
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; inside /opt/sge/tmp, let's stay /opt/sge/tmp/29.1.smp8.q for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; example for the job 29 on queue smp8.q. This subdirectory of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/sge/tmp is created with nobody:nogroup drwxr-xr-x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; permissions... which in turn forbids
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Did you try to run some simple jobs before the parallel ones -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are these working? The daemons (qmaster and execd) were started
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; as root?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The user is known on the file server, i.e. the machine hosting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/sge?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI to create its subtree inside (as OpenMPI won't use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nobody:nogroup credentials).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In SGE the master process (the one running the job script) will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; create the /opt/sge/tmp/29.1.smp8.q  and also each started qrsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; inside SGE - all with the same name. What is your definition of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the PE in SGE which you use?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ad Ralph suggested, I checked the SGE configuration, but I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; haven't found anything related to nobody:nogroup configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; so far.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 10.11.2009 um 17:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help Ralph, I'll double check that.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As for the error message received, there might be some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; inconsistency:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0&quot;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; often /opt/sge is shared across the nodes, while the /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (sometimes implemented as /scratch in a partition on its own)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; should be local on each node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What is the setting of &quot;tmpdir&quot; in your queue definition?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you want to share /opt/sge/tmp, everyone must be able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; write into this location. As for me it's working fine (with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; local /tmp), I assume the nobody/nogroup comes from any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; squash-setting in the /etc/export of you master node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parent directory and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;/opt/sge/tmp/25.1.smp8.q/openmpi-sessions- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; eg_at_charlie_0/53199/0/0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is the subdirectory... not the other way around.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Creating a directory with such credentials sounds like a bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in SGE to me...perhaps an SGE config issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Only thing you could do is tell OMPI to use some other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory as the root for its session dir tree - check
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;mpirun -h&quot;, or ompi_info for the required option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I would first check your SGE config as that just doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sound right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 10, 2009, at 9:40 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm experiencing some issues using GE6.2U4 and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI-1.3.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (with gridengine compnent).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; During any job submission, SGE creates a session directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in $TMPDIR, named after the job id and the computing node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; name. This session directory is created using nobody/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nogroup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; credentials.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When using OpenMPI with tight-integration, opal creates
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different subdirectories in this session directory. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; issue I'm facing now is that OpenMPI fails to create these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subdirectories:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] opal_os_dirpath_create: Error: Unable to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; create the sub-directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0) of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (/opt/sge/tmp/25.1.smp8.q/openmpi-sessions-eg_at_charlie_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 101
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/util/session_dir.c at line 425
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../openmpi-1.3.3/orte/mca/ess/hnp/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ess_hnp_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 273
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_session_dir failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../openmpi-1.3.3/orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_set_name failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [charlie:03882] [[53199,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../openmpi-1.3.3/orte/tools/orterun/orterun.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line 473
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This seems very likely related to the permissions set on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $TMPDIR.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd like to know if someone might have experienced the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or a similar issue and if any solution was found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11147.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11145.php">Reuti: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Maybe in reply to:</strong> <a href="11131.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11147.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Reply:</strong> <a href="11147.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
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
