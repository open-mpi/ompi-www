<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 16:49:32 2008" -->
<!-- isoreceived="20080729204932" -->
<!-- sent="Tue, 29 Jul 2008 16:46:08 -0400" -->
<!-- isosent="20080729204608" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="488F8190.9050608_at_3dB-Labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2378344A-8CD2-4B51-AAAF-487ACC82C941_at_lanl.gov" -->
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
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 16:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6202.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6196.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6202.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6202.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. The host names are listed in the host file.
<br>
e.g.
<br>
&quot;op2-1 slots=8&quot;
<br>
and there is an IP address for op2-1 in the /etc/hosts directory
<br>
I've read the FAQ.  Everything in there seems to assume I am starting 
<br>
the process group with mpirun or one of its brothers.  This is not the 
<br>
case    .
<br>
<p>I've created and attached a sample source file that demonstrates my 
<br>
problem.  It participates in a MPI_Group in one of two ways: either from 
<br>
mpiexec or  via MPI_Comm_spawn
<br>
<p>Case 1 works: I can run it on the remote node op2-1 by using  mpiexec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -np 3 -H op2-1 spawner
<br>
<p>Case 2 works: I can run it on the current host with MPI_Comm_spawn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./spawner `hostname`
<br>
<p>Case 3 does not work: I cannot use MPI_Comm_spawn to start a group on a 
<br>
remote node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./spawner op2-1
<br>
<p>The output from case 3 is:
<br>
&lt;QUOTE&gt;
<br>
I am going to spawn 2 children on op2-1
<br>
--------------------------------------------------------------------------
<br>
Some of the requested hosts are not included in the current allocation 
<br>
for the
<br>
application:
<br>
&nbsp;&nbsp;./spawner
<br>
The requested hosts were:
<br>
&nbsp;&nbsp;op2-1
<br>
<p>Verify that you have mapped the allocated resources properly using the
<br>
--host specification.
<br>
--------------------------------------------------------------------------
<br>
[gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file 
<br>
base/rmaps_base_support_fns.c at line 225
<br>
[gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file 
<br>
rmaps_rr.c at line 478
<br>
[gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file 
<br>
base/rmaps_base_map_job.c at line 210
<br>
[gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file 
<br>
rmgr_urm.c at line 372
<br>
[gardner:32745] [0,0,0] ORTE_ERROR_LOG: Out of resource in file 
<br>
communicator/comm_dyn.c at line 608
<br>
<p>&lt;/QUOTE&gt;
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; OMPI doesn't care what your hosts are named - many of us use names 
</span><br>
<span class="quotelev1">&gt; that have no numeric pattern or any other discernible pattern to them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rds_hostfile should point to a file that contains a list of 
</span><br>
<span class="quotelev1">&gt; the hosts - have you ensured that it does, and that the hostfile 
</span><br>
<span class="quotelev1">&gt; format is correct? Check the FAQ on the open-mpi.org site:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are several explanations there pertaining to hostfiles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2008, at 11:57 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I listed the node names in the path named in ompi_info --param rds 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile -- no luck.
</span><br>
<span class="quotelev2">&gt;&gt; I also tried copying that file to another location and setting 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds_hostfile_path -- no luck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The remote hosts are named op2-1 and op2-2.  Could this be another 
</span><br>
<span class="quotelev2">&gt;&gt; case of the problem I saw a few days ago where the hostnames were 
</span><br>
<span class="quotelev2">&gt;&gt; assumed to contain a numeric pattern?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the 1.2 release, I believe you will find the enviro param is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path - you can check that with &quot;ompi_info&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 29, 2008, at 11:10 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Umm ... what -hostfile file?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not starting anything via mpiexec/orterun so there is no 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;-hostfile&quot; argument AFAIK.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there some other way to communicate this? An environment 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variable or mca param?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are the hosts where you want the children to go in your -hostfile 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file? All of the hosts you intend to use have to be in that file, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; even if they don't get used until the comm_spawn.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 29, 2008, at 9:08 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've tried lots of different values for the &quot;host&quot; key in the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; info handle.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've tried hardcoding the hostname+ip entries in the /etc/hosts 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file -- no luck.  I cannot get my MPI_Comm_spawn children to go 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; anywhere else on the network.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec can start groups on the other machines just fine. It 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seems like there is some initialization that is done by orterun 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but not by MPI_Comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there a document that describes how the default process 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; management works?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I do not have infiniband, myrinet or any specialized rte, just ssh.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; All the machines are CentOS 5.2 (openmpi 1.2.5)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The string &quot;localhost&quot; may not be recognized in the 1.2 series 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; for comm_spawn. Do a &quot;hostname&quot; and use that string instead - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; should work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 28, 2008, at 10:38 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I add the info parameter in MPI_Comm_spawn, I get the error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Some of the requested hosts are not included in the current 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation for the application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Verify that you have mapped the allocated resources properly 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --host specification.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is a snippet of my code that causes the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info info;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info_create( &amp;info );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Info_set(info,&quot;host&quot;,&quot;localhost&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn( cmd , MPI_ARGV_NULL , nkids , info , 0 , 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_SELF , &amp;kid , errs );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks, I don't know how I missed that. Perhaps I got thrown 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; off by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Portable programs not requiring detailed  control over 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process locations should use MPI_INFO_NULL.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If there were a computing equivalent of Maslow's Hierarchy of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Needs, functioning would be more fundamental than portability :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Take a look at the man page for MPI_Comm_spawn. It should 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; explain that you need to create an MPI_Info key that has the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; key of &quot;host&quot; and a value that contains a comma-delimited 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; list of hosts to be used for the child processes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How does openmpi decide which hosts are used with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn? All the docs I've found talk about 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; specifying hosts on the mpiexec/mpirun command and so are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not applicable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am unable to spawn on anything but localhost (which makes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for a pretty uninteresting cluster).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It reports                 MCA rds: parameter 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;rds_hostfile_path&quot; (current value: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;/usr/lib/openmpi/1.2.5-gcc/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi 1.2.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CentOS 5.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ethernet TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mark Borgerding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3dB Labs, Inc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Innovate.  Develop.  Deliver.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><p>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>/*
<br>
&nbsp;*(new BSD license)
<br>
&nbsp;*
<br>
&nbsp;Copyright (c) 2008 Mark Borgerding
<br>
<p>&nbsp;All rights reserved.
<br>
<p>&nbsp;Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Neither the author nor the names of any contributors may be used to endorse or promote products derived from this software without specific prior written permission.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
*/
<br>
<p>int main(int argc, char ** argv) 
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm allmpi;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm icom;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i,k,rank,size,length,count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char name[256];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL,NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( parent == MPI_COMM_NULL ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (size&gt;1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;I think I was started by orterun\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD,&amp;allmpi); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (argc&lt;2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;please provide a host argument (will be placed in MPI_Info for MPI_Comm_spawn\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;I am going to spawn 2 children on %s\n&quot;,argv[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int errs[2];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_create( &amp;info );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_set(info,&quot;host&quot;,argv[1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(argv[0],MPI_ARGV_NULL,2,info,0,MPI_COMM_WORLD,&amp;icom,errs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge( icom, 0, &amp;allmpi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_free(&amp;info);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;I was started by MPI_Comm_spawn\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge( parent, 1, &amp;allmpi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(allmpi,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(allmpi,&amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(name,&amp;length);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Hello my name is %s. I am %d of %d\n&quot;,name,rank,size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int k;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float buf[128];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(buf,0,sizeof(buf));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;rank zero sending data to all others\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (k=1;k&lt;size;++k) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( buf , 128 , MPI_FLOAT, k, 42 , allmpi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;rank zero data from all others\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (k=1;k&lt;size;++k)  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( buf , 128 , MPI_FLOAT, k, 42 , allmpi,&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count( &amp;status, MPI_FLOAT, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (count!= 128) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;short read from %d (count=%d)\n&quot;,k,count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float buf[128];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( buf , 128 , MPI_FLOAT, 0, 42 , allmpi,&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count( &amp;status, MPI_FLOAT, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (count!= 128) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;short read from 0 (count=%d)\n&quot;,count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( buf , 128 , MPI_FLOAT, 0, 42 , allmpi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Exiting %s (%d of %d)\n&quot;,name,rank,size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( &amp;allmpi);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize(); 
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6202.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6200.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6196.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6202.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6202.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6203.php">Matt Hughes: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
