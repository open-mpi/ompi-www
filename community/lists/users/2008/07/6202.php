<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 16:59:37 2008" -->
<!-- isoreceived="20080729205937" -->
<!-- sent="Tue, 29 Jul 2008 14:59:20 -0600" -->
<!-- isosent="20080729205920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="35DBB3E9-8585-4898-9CA2-556DB0213EAD_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488F8190.9050608_at_3dB-Labs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to specify hosts for MPI_Comm_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 16:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6201.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6201.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I am out of suggestions - could be a bug in the old 1.2 series.  
<br>
You might try with the 1.3 series...or perhaps someone else has a  
<br>
suggestion here.
<br>
<p><p>On Jul 29, 2008, at 2:46 PM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; Yes. The host names are listed in the host file.
</span><br>
<span class="quotelev1">&gt; e.g.
</span><br>
<span class="quotelev1">&gt; &quot;op2-1 slots=8&quot;
</span><br>
<span class="quotelev1">&gt; and there is an IP address for op2-1 in the /etc/hosts directory
</span><br>
<span class="quotelev1">&gt; I've read the FAQ.  Everything in there seems to assume I am  
</span><br>
<span class="quotelev1">&gt; starting the process group with mpirun or one of its brothers.  This  
</span><br>
<span class="quotelev1">&gt; is not the case    .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've created and attached a sample source file that demonstrates my  
</span><br>
<span class="quotelev1">&gt; problem.  It participates in a MPI_Group in one of two ways: either  
</span><br>
<span class="quotelev1">&gt; from mpiexec or  via MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case 1 works: I can run it on the remote node op2-1 by using  mpiexec
</span><br>
<span class="quotelev1">&gt;   mpiexec -np 3 -H op2-1 spawner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case 2 works: I can run it on the current host with MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt;   ./spawner `hostname`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case 3 does not work: I cannot use MPI_Comm_spawn to start a group  
</span><br>
<span class="quotelev1">&gt; on a remote node.
</span><br>
<span class="quotelev1">&gt;   ./spawner op2-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output from case 3 is:
</span><br>
<span class="quotelev1">&gt; &lt;QUOTE&gt;
</span><br>
<span class="quotelev1">&gt; I am going to spawn 2 children on op2-1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev1">&gt; allocation for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt; ./spawner
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt; op2-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file base/ 
</span><br>
<span class="quotelev1">&gt; rmaps_base_support_fns.c at line 225
</span><br>
<span class="quotelev1">&gt; [gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file  
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 478
</span><br>
<span class="quotelev1">&gt; [gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file base/ 
</span><br>
<span class="quotelev1">&gt; rmaps_base_map_job.c at line 210
</span><br>
<span class="quotelev1">&gt; [gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file  
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 372
</span><br>
<span class="quotelev1">&gt; [gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file  
</span><br>
<span class="quotelev1">&gt; communicator/comm_dyn.c at line 608
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/QUOTE&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OMPI doesn't care what your hosts are named - many of us use names  
</span><br>
<span class="quotelev2">&gt;&gt; that have no numeric pattern or any other discernible pattern to  
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds_hostfile should point to a file that contains a list  
</span><br>
<span class="quotelev2">&gt;&gt; of the hosts - have you ensured that it does, and that the hostfile  
</span><br>
<span class="quotelev2">&gt;&gt; format is correct? Check the FAQ on the open-mpi.org site:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are several explanations there pertaining to hostfiles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 29, 2008, at 11:57 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I listed the node names in the path named in ompi_info --param rds  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile -- no luck.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also tried copying that file to another location and setting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path -- no luck.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The remote hosts are named op2-1 and op2-2.  Could this be another  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case of the problem I saw a few days ago where the hostnames were  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assumed to contain a numeric pattern?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the 1.2 release, I believe you will find the enviro param is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path - you can check that with &quot;ompi_info&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 29, 2008, at 11:10 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Umm ... what -hostfile file?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am not starting anything via mpiexec/orterun so there is no &quot;- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile&quot; argument AFAIK.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there some other way to communicate this? An environment  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; variable or mca param?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are the hosts where you want the children to go in your - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostfile file? All of the hosts you intend to use have to be in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that file, even if they don't get used until the comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 29, 2008, at 9:08 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've tried lots of different values for the &quot;host&quot; key in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; info handle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've tried hardcoding the hostname+ip entries in the /etc/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hosts file -- no luck.  I cannot get my MPI_Comm_spawn  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; children to go anywhere else on the network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec can start groups on the other machines just fine. It  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; seems like there is some initialization that is done by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; orterun but not by MPI_Comm_spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there a document that describes how the default process  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; management works?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not have infiniband, myrinet or any specialized rte, just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; All the machines are CentOS 5.2 (openmpi 1.2.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The string &quot;localhost&quot; may not be recognized in the 1.2  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; series for comm_spawn. Do a &quot;hostname&quot; and use that string  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instead - should work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 28, 2008, at 10:38 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I add the info parameter in MPI_Comm_spawn, I get the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation for the application:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Verify that you have mapped the allocated resources properly  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --host specification.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is a snippet of my code that causes the error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info info;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info_create( &amp;info );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info_set(info,&quot;host&quot;,&quot;localhost&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn( cmd , MPI_ARGV_NULL , nkids , info , 0 ,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_SELF , &amp;kid , errs );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks, I don't know how I missed that. Perhaps I got  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thrown off by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Portable programs not requiring detailed  control over  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process locations should use MPI_INFO_NULL.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If there were a computing equivalent of Maslow's Hierarchy  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of Needs, functioning would be more fundamental than  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; portability :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Take a look at the man page for MPI_Comm_spawn. It should  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; explain that you need to create an MPI_Info key that has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the key of &quot;host&quot; and a value that contains a comma- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; delimited list of hosts to be used for the child processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How does openmpi decide which hosts are used with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn? All the docs I've found talk about  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; specifying hosts on the mpiexec/mpirun command and so are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not applicable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am unable to spawn on anything but localhost (which  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; makes for a pretty uninteresting cluster).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It reports                 MCA rds: parameter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;rds_hostfile_path&quot; (current value: &quot;/usr/lib/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.2.5-gcc/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi 1.2.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CentOS 5.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ethernet TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mark Borgerding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3dB Labs, Inc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Innovate.  Develop.  Deliver.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; *(new BSD license)
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Copyright (c) 2008 Mark Borgerding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Redistribution and use in source and binary forms, with or without  
</span><br>
<span class="quotelev1">&gt; modification, are permitted provided that the following conditions  
</span><br>
<span class="quotelev1">&gt; are met:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Redistributions of source code must retain the above copyright  
</span><br>
<span class="quotelev1">&gt; notice, this list of conditions and the following disclaimer.
</span><br>
<span class="quotelev1">&gt;     * Redistributions in binary form must reproduce the above  
</span><br>
<span class="quotelev1">&gt; copyright notice, this list of conditions and the following  
</span><br>
<span class="quotelev1">&gt; disclaimer in the documentation and/or other materials provided with  
</span><br>
<span class="quotelev1">&gt; the distribution.
</span><br>
<span class="quotelev1">&gt;     * Neither the author nor the names of any contributors may be  
</span><br>
<span class="quotelev1">&gt; used to endorse or promote products derived from this software  
</span><br>
<span class="quotelev1">&gt; without specific prior written permission.
</span><br>
<span class="quotelev1">&gt;     THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND  
</span><br>
<span class="quotelev1">&gt; CONTRIBUTORS &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES,  
</span><br>
<span class="quotelev1">&gt; INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF  
</span><br>
<span class="quotelev1">&gt; MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  
</span><br>
<span class="quotelev1">&gt; IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR  
</span><br>
<span class="quotelev1">&gt; ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR  
</span><br>
<span class="quotelev1">&gt; CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF  
</span><br>
<span class="quotelev1">&gt; SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR  
</span><br>
<span class="quotelev1">&gt; BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF  
</span><br>
<span class="quotelev1">&gt; LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING  
</span><br>
<span class="quotelev1">&gt; NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS  
</span><br>
<span class="quotelev1">&gt; SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</span><br>
<span class="quotelev1">&gt;     *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Comm parent;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm allmpi;
</span><br>
<span class="quotelev1">&gt;    MPI_Info info;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm icom;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    int i,k,rank,size,length,count;
</span><br>
<span class="quotelev1">&gt;    char name[256];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if ( parent == MPI_COMM_NULL ) {
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;        if (size&gt;1) {
</span><br>
<span class="quotelev1">&gt;            fprintf(stderr,&quot;I think I was started by orterun\n&quot;);
</span><br>
<span class="quotelev1">&gt;            MPI_Comm_dup(MPI_COMM_WORLD,&amp;allmpi);
</span><br>
<span class="quotelev1">&gt;        }else{
</span><br>
<span class="quotelev1">&gt;            if (argc&lt;2) {
</span><br>
<span class="quotelev1">&gt;                fprintf(stderr,&quot;please provide a host argument (will  
</span><br>
<span class="quotelev1">&gt; be placed in MPI_Info for MPI_Comm_spawn\n&quot;);
</span><br>
<span class="quotelev1">&gt;                return 1;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;            fprintf(stderr,&quot;I am going to spawn 2 children on %s 
</span><br>
<span class="quotelev1">&gt; \n&quot;,argv[1]);
</span><br>
<span class="quotelev1">&gt;            int errs[2];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_Info_create( &amp;info );
</span><br>
<span class="quotelev1">&gt;            MPI_Info_set(info,&quot;host&quot;,argv[1]);
</span><br>
<span class="quotelev1">&gt;            MPI_Comm_spawn(argv[0],MPI_ARGV_NULL,2,info, 
</span><br>
<span class="quotelev1">&gt; 0,MPI_COMM_WORLD,&amp;icom,errs);
</span><br>
<span class="quotelev1">&gt;            MPI_Intercomm_merge( icom, 0, &amp;allmpi);
</span><br>
<span class="quotelev1">&gt;            MPI_Info_free(&amp;info);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }else{
</span><br>
<span class="quotelev1">&gt;        fprintf(stderr,&quot;I was started by MPI_Comm_spawn\n&quot;);
</span><br>
<span class="quotelev1">&gt;        MPI_Intercomm_merge( parent, 1, &amp;allmpi);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(allmpi,&amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(allmpi,&amp;size);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_processor_name(name,&amp;length);
</span><br>
<span class="quotelev1">&gt;    fprintf(stderr,&quot;Hello my name is %s. I am %d of %d 
</span><br>
<span class="quotelev1">&gt; \n&quot;,name,rank,size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (rank==0) {
</span><br>
<span class="quotelev1">&gt;        int k;
</span><br>
<span class="quotelev1">&gt;        float buf[128];
</span><br>
<span class="quotelev1">&gt;        memset(buf,0,sizeof(buf));
</span><br>
<span class="quotelev1">&gt;        fprintf(stderr,&quot;rank zero sending data to all others\n&quot;);
</span><br>
<span class="quotelev1">&gt;        for (k=1;k&lt;size;++k)
</span><br>
<span class="quotelev1">&gt;            MPI_Send( buf , 128 , MPI_FLOAT, k, 42 , allmpi);
</span><br>
<span class="quotelev1">&gt;        fprintf(stderr,&quot;rank zero data from all others\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        for (k=1;k&lt;size;++k)  {
</span><br>
<span class="quotelev1">&gt;            MPI_Recv( buf , 128 , MPI_FLOAT, k, 42 , allmpi,&amp;status);
</span><br>
<span class="quotelev1">&gt;            MPI_Get_count( &amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev1">&gt;            if (count!= 128) {
</span><br>
<span class="quotelev1">&gt;                fprintf(stderr,&quot;short read from %d (count=%d) 
</span><br>
<span class="quotelev1">&gt; \n&quot;,k,count);
</span><br>
<span class="quotelev1">&gt;                exit(1);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }else{
</span><br>
<span class="quotelev1">&gt;        float buf[128];
</span><br>
<span class="quotelev1">&gt;        MPI_Recv( buf , 128 , MPI_FLOAT, 0, 42 , allmpi,&amp;status);
</span><br>
<span class="quotelev1">&gt;        MPI_Get_count( &amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev1">&gt;        if (count!= 128) {
</span><br>
<span class="quotelev1">&gt;            fprintf(stderr,&quot;short read from 0 (count=%d)\n&quot;,count);
</span><br>
<span class="quotelev1">&gt;            exit(1);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        MPI_Send( buf , 128 , MPI_FLOAT, 0, 42 , allmpi);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    fprintf(stderr,&quot;Exiting %s (%d of %d)\n&quot;,name,rank,size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_free( &amp;allmpi);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6201.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6201.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
