<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 08:58:32 2008" -->
<!-- isoreceived="20080730125832" -->
<!-- sent="Wed, 30 Jul 2008 06:58:23 -0600" -->
<!-- isosent="20080730125823" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="E66C1F4C-1724-486C-A5F8-B869299DA1C2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4890635D.8040300_at_3dB-Labs.com" -->
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
<strong>Date:</strong> 2008-07-30 08:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6210.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6208.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6208.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6210.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6210.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6211.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As your own tests have shown, it works fine if you just &quot;mpirun -n 1 ./ 
<br>
spawner&quot;. It is only singleton comm_spawn that appears to be having a  
<br>
problem in the latest 1.2 release. So I don't think comm_spawn is  
<br>
&quot;useless&quot;. ;-)
<br>
<p>I'm checking this morning to ensure that singletons properly spawns on  
<br>
other nodes in the 1.3 release. I sincerely doubt we will backport a  
<br>
fix to 1.2.
<br>
<p><p>On Jul 30, 2008, at 6:49 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; I keep checking my email in hopes that someone will come up with  
</span><br>
<span class="quotelev1">&gt; something that Matt or I might've missed.
</span><br>
<span class="quotelev1">&gt; I'm just having a hard time accepting that something so fundamental  
</span><br>
<span class="quotelev1">&gt; would be so broken.
</span><br>
<span class="quotelev1">&gt; The MPI_Comm_spawn command is essentially useless without the  
</span><br>
<span class="quotelev1">&gt; ability to spawn processes on other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is true, then my personal scorecard reads:
</span><br>
<span class="quotelev1">&gt;   # Days spent using openmpi: 4 (off and on)
</span><br>
<span class="quotelev1">&gt;   # identified bugs in openmpi :2
</span><br>
<span class="quotelev1">&gt;   # useful programs built: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please prove me wrong.  I'm eager to be shown my ignorance -- to  
</span><br>
<span class="quotelev1">&gt; find out where I've been stupid and what documentation I should've  
</span><br>
<span class="quotelev1">&gt; read.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt Hughes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've found that I always have to use mpirun to start my spawner
</span><br>
<span class="quotelev2">&gt;&gt; process, due to the exact problem you are having:  the need to give
</span><br>
<span class="quotelev2">&gt;&gt; OMPI a hosts file!  It seems the singleton functionality is lacking
</span><br>
<span class="quotelev2">&gt;&gt; somehow... it won't allow you to spawn on arbitrary hosts.  I have  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; tested if this is fixed in the 1.3 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 1 -H op2-1,op2-2 spawner op2-2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec should start the first process on op2-1, and the spawn call
</span><br>
<span class="quotelev2">&gt;&gt; should start the second on op2-2.  If you don't use the Info object  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; set the hostname specifically, then on 1.2.x it will automatically
</span><br>
<span class="quotelev2">&gt;&gt; start on op2-2.  With 1.3, the spawn call will start processes
</span><br>
<span class="quotelev2">&gt;&gt; starting with the first item in the host list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
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
<li><strong>Next message:</strong> <a href="6210.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6208.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6208.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6210.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6210.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6211.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
