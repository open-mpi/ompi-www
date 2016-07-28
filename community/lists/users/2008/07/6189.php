<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 11:19:59 2008" -->
<!-- isoreceived="20080729151959" -->
<!-- sent="Tue, 29 Jul 2008 09:19:49 -0600" -->
<!-- isosent="20080729151949" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="A0BFEB99-D291-4516-A1FA-79F6054BE8A0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488F328B.3090106_at_3dB-Labs.com" -->
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
<strong>Date:</strong> 2008-07-29 11:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6192.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6192.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are the hosts where you want the children to go in your -hostfile  
<br>
file? All of the hosts you intend to use have to be in that file, even  
<br>
if they don't get used until the comm_spawn.
<br>
<p><p>On Jul 29, 2008, at 9:08 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; I've tried lots of different values for the &quot;host&quot; key in the info  
</span><br>
<span class="quotelev1">&gt; handle.
</span><br>
<span class="quotelev1">&gt; I've tried hardcoding the hostname+ip entries in the /etc/hosts file  
</span><br>
<span class="quotelev1">&gt; -- no luck.  I cannot get my MPI_Comm_spawn children to go anywhere  
</span><br>
<span class="quotelev1">&gt; else on the network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec can start groups on the other machines just fine. It seems  
</span><br>
<span class="quotelev1">&gt; like there is some initialization that is done by orterun but not by  
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a document that describes how the default process  
</span><br>
<span class="quotelev1">&gt; management works?
</span><br>
<span class="quotelev1">&gt; I do not have infiniband, myrinet or any specialized rte, just ssh.
</span><br>
<span class="quotelev1">&gt; All the machines are CentOS 5.2 (openmpi 1.2.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The string &quot;localhost&quot; may not be recognized in the 1.2 series for  
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn. Do a &quot;hostname&quot; and use that string instead - should  
</span><br>
<span class="quotelev2">&gt;&gt; work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2008, at 10:38 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I add the info parameter in MPI_Comm_spawn, I get the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation for the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Verify that you have mapped the allocated resources properly using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host specification.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a snippet of my code that causes the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Info info;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Info_create( &amp;info );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Info_set(info,&quot;host&quot;,&quot;localhost&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_spawn( cmd , MPI_ARGV_NULL , nkids , info , 0 ,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_SELF , &amp;kid , errs );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, I don't know how I missed that. Perhaps I got thrown off by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  &quot;Portable programs not requiring detailed  control over process  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; locations should use MPI_INFO_NULL.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If there were a computing equivalent of Maslow's Hierarchy of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Needs, functioning would be more fundamental than portability :)
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Take a look at the man page for MPI_Comm_spawn. It should  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; explain that you need to create an MPI_Info key that has the key  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of &quot;host&quot; and a value that contains a comma-delimited list of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hosts to be used for the child processes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How does openmpi decide which hosts are used with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn? All the docs I've found talk about specifying  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hosts on the mpiexec/mpirun command and so are not applicable.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am unable to spawn on anything but localhost (which makes for  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a pretty uninteresting cluster).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It reports                 MCA rds: parameter  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;rds_hostfile_path&quot; (current value: &quot;/usr/lib/openmpi/1.2.5-gcc/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  openmpi 1.2.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  CentOS 5.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ethernet TCP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Mark
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mark Borgerding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3dB Labs, Inc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Innovate.  Develop.  Deliver.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6190.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6192.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6192.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
