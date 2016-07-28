<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:14:33 2008" -->
<!-- isoreceived="20080728151433" -->
<!-- sent="Mon, 28 Jul 2008 11:14:29 -0400" -->
<!-- isosent="20080728151429" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="488DE255.8040406_at_3db-labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="706D3425-EAF2-4BB0-B7B7-B6A845ACD185_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-07-28 11:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6149.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I don't know how I missed that. Perhaps I got thrown off by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;Portable programs not requiring detailed  control over process 
<br>
locations should use MPI_INFO_NULL.&quot;
<br>
<p>If there were a computing equivalent of Maslow's Hierarchy of Needs, 
<br>
functioning would be more fundamental than portability :)
<br>
<p>-- Mark
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Take a look at the man page for MPI_Comm_spawn. It should explain that 
</span><br>
<span class="quotelev1">&gt; you need to create an MPI_Info key that has the key of &quot;host&quot; and a 
</span><br>
<span class="quotelev1">&gt; value that contains a comma-delimited list of hosts to be used for the 
</span><br>
<span class="quotelev1">&gt; child processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How does openmpi decide which hosts are used with MPI_Comm_spawn? All 
</span><br>
<span class="quotelev2">&gt;&gt; the docs I've found talk about specifying hosts on the mpiexec/mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; command and so are not applicable.
</span><br>
<span class="quotelev2">&gt;&gt; I am unable to spawn on anything but localhost (which makes for a 
</span><br>
<span class="quotelev2">&gt;&gt; pretty uninteresting cluster).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev2">&gt;&gt; It reports                 MCA rds: parameter &quot;rds_hostfile_path&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (current value: 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/lib/openmpi/1.2.5-gcc/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using
</span><br>
<span class="quotelev2">&gt;&gt;    openmpi 1.2.5
</span><br>
<span class="quotelev2">&gt;&gt;    CentOS 5.2
</span><br>
<span class="quotelev2">&gt;&gt;    ethernet TCP
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Mark
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
Mark Borgerding
3dB Labs, Inc
Innovate.  Develop.  Deliver.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6149.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
