<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 12:38:43 2008" -->
<!-- isoreceived="20080728163843" -->
<!-- sent="Mon, 28 Jul 2008 12:38:39 -0400" -->
<!-- isosent="20080728163839" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="488DF60F.1030807_at_3db-labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="488DE255.8040406_at_3db-labs.com" -->
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
<strong>Date:</strong> 2008-07-28 12:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6154.php">Mark Dixon: "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6187.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6187.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I add the info parameter in MPI_Comm_spawn, I get the error
<br>
&quot;Some of the requested hosts are not included in the current allocation 
<br>
for the application:
<br>
[...]
<br>
Verify that you have mapped the allocated resources properly using the
<br>
--host specification.&quot;
<br>
<p>Here is a snippet of my code that causes the error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_create( &amp;info );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_set(info,&quot;host&quot;,&quot;localhost&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn( cmd , MPI_ARGV_NULL , nkids , info , 0 , 
<br>
MPI_COMM_SELF , &amp;kid , errs );
<br>
<p><p><p><p>Mark Borgerding wrote:
<br>
<span class="quotelev1">&gt; Thanks, I don't know how I missed that. Perhaps I got thrown off by
</span><br>
<span class="quotelev1">&gt;    &quot;Portable programs not requiring detailed  control over process 
</span><br>
<span class="quotelev1">&gt; locations should use MPI_INFO_NULL.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there were a computing equivalent of Maslow's Hierarchy of Needs, 
</span><br>
<span class="quotelev1">&gt; functioning would be more fundamental than portability :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Take a look at the man page for MPI_Comm_spawn. It should explain 
</span><br>
<span class="quotelev2">&gt;&gt; that you need to create an MPI_Info key that has the key of &quot;host&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; and a value that contains a comma-delimited list of hosts to be used 
</span><br>
<span class="quotelev2">&gt;&gt; for the child processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does openmpi decide which hosts are used with MPI_Comm_spawn? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the docs I've found talk about specifying hosts on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec/mpirun command and so are not applicable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am unable to spawn on anything but localhost (which makes for a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pretty uninteresting cluster).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It reports                 MCA rds: parameter &quot;rds_hostfile_path&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (current value: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/usr/lib/openmpi/1.2.5-gcc/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    openmpi 1.2.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CentOS 5.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ethernet TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Mark
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
<p><p><pre>
-- 
Mark Borgerding
3dB Labs, Inc
Innovate.  Develop.  Deliver.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6154.php">Mark Dixon: "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6187.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6187.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
