<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:04:17 2008" -->
<!-- isoreceived="20080728150417" -->
<!-- sent="Mon, 28 Jul 2008 09:04:08 -0600" -->
<!-- isosent="20080728150408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="706D3425-EAF2-4BB0-B7B7-B6A845ACD185_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488DDDAE.2090109_at_3db-labs.com" -->
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
<strong>Date:</strong> 2008-07-28 11:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6148.php">Mark Borgerding: "[OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6148.php">Mark Borgerding: "[OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look at the man page for MPI_Comm_spawn. It should explain that  
<br>
you need to create an MPI_Info key that has the key of &quot;host&quot; and a  
<br>
value that contains a comma-delimited list of hosts to be used for the  
<br>
child processes.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p>On Jul 28, 2008, at 8:54 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; How does openmpi decide which hosts are used with MPI_Comm_spawn?  
</span><br>
<span class="quotelev1">&gt; All the docs I've found talk about specifying hosts on the mpiexec/ 
</span><br>
<span class="quotelev1">&gt; mpirun command and so are not applicable.
</span><br>
<span class="quotelev1">&gt; I am unable to spawn on anything but localhost (which makes for a  
</span><br>
<span class="quotelev1">&gt; pretty uninteresting cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run
</span><br>
<span class="quotelev1">&gt; ompi_info --param rds hostfile
</span><br>
<span class="quotelev1">&gt; It reports                 MCA rds: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rds_hostfile_path&quot; (current value: &quot;/usr/lib/openmpi/1.2.5-gcc/etc/ 
</span><br>
<span class="quotelev1">&gt; openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt; I tried changing that file but it has no effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using
</span><br>
<span class="quotelev1">&gt;    openmpi 1.2.5
</span><br>
<span class="quotelev1">&gt;    CentOS 5.2
</span><br>
<span class="quotelev1">&gt;    ethernet TCP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Mark
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
<li><strong>Next message:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6148.php">Mark Borgerding: "[OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6148.php">Mark Borgerding: "[OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
