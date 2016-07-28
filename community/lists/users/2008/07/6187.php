<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 10:22:42 2008" -->
<!-- isoreceived="20080729142242" -->
<!-- sent="Tue, 29 Jul 2008 08:22:33 -0600" -->
<!-- isosent="20080729142233" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="15BD1CE8-1615-406A-A2B2-58236B1067C3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488DF60F.1030807_at_3db-labs.com" -->
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
<strong>Date:</strong> 2008-07-29 10:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6186.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The string &quot;localhost&quot; may not be recognized in the 1.2 series for  
<br>
comm_spawn. Do a &quot;hostname&quot; and use that string instead - should work.
<br>
<p>Ralph
<br>
<p>On Jul 28, 2008, at 10:38 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; When I add the info parameter in MPI_Comm_spawn, I get the error
</span><br>
<span class="quotelev1">&gt; &quot;Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev1">&gt; allocation for the application:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a snippet of my code that causes the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Info info;
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create( &amp;info );
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(info,&quot;host&quot;,&quot;localhost&quot;);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn( cmd , MPI_ARGV_NULL , nkids , info , 0 ,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SELF , &amp;kid , errs );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, I don't know how I missed that. Perhaps I got thrown off by
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;Portable programs not requiring detailed  control over process  
</span><br>
<span class="quotelev2">&gt;&gt; locations should use MPI_INFO_NULL.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there were a computing equivalent of Maslow's Hierarchy of  
</span><br>
<span class="quotelev2">&gt;&gt; Needs, functioning would be more fundamental than portability :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Take a look at the man page for MPI_Comm_spawn. It should explain  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you need to create an MPI_Info key that has the key of &quot;host&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a value that contains a comma-delimited list of hosts to be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used for the child processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How does openmpi decide which hosts are used with MPI_Comm_spawn?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All the docs I've found talk about specifying hosts on the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec/mpirun command and so are not applicable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am unable to spawn on anything but localhost (which makes for a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pretty uninteresting cluster).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It reports                 MCA rds: parameter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;rds_hostfile_path&quot; (current value: &quot;/usr/lib/openmpi/1.2.5-gcc/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   openmpi 1.2.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CentOS 5.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ethernet TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Mark
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mark Borgerding
</span><br>
<span class="quotelev1">&gt; 3dB Labs, Inc
</span><br>
<span class="quotelev1">&gt; Innovate.  Develop.  Deliver.
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
<li><strong>Next message:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6186.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6188.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
