<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 09:13:02 2008" -->
<!-- isoreceived="20080730131302" -->
<!-- sent="Wed, 30 Jul 2008 07:12:53 -0600" -->
<!-- isosent="20080730131253" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="B0F0A074-2797-4A27-A705-A18AF1F1FDE0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E66C1F4C-1724-486C-A5F8-B869299DA1C2_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-07-30 09:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6211.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Singleton comm_spawn works fine on the 1.3 release branch - if  
<br>
singleton comm_spawn is critical to your plans, I suggest moving to  
<br>
that version. You can get a pre-release version off of the www.open-mpi.org 
<br>
&nbsp;&nbsp;web site.
<br>
<p><p>On Jul 30, 2008, at 6:58 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; As your own tests have shown, it works fine if you just &quot;mpirun -n  
</span><br>
<span class="quotelev1">&gt; 1 ./spawner&quot;. It is only singleton comm_spawn that appears to be  
</span><br>
<span class="quotelev1">&gt; having a problem in the latest 1.2 release. So I don't think  
</span><br>
<span class="quotelev1">&gt; comm_spawn is &quot;useless&quot;. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm checking this morning to ensure that singletons properly spawns  
</span><br>
<span class="quotelev1">&gt; on other nodes in the 1.3 release. I sincerely doubt we will  
</span><br>
<span class="quotelev1">&gt; backport a fix to 1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2008, at 6:49 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I keep checking my email in hopes that someone will come up with  
</span><br>
<span class="quotelev2">&gt;&gt; something that Matt or I might've missed.
</span><br>
<span class="quotelev2">&gt;&gt; I'm just having a hard time accepting that something so fundamental  
</span><br>
<span class="quotelev2">&gt;&gt; would be so broken.
</span><br>
<span class="quotelev2">&gt;&gt; The MPI_Comm_spawn command is essentially useless without the  
</span><br>
<span class="quotelev2">&gt;&gt; ability to spawn processes on other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If this is true, then my personal scorecard reads:
</span><br>
<span class="quotelev2">&gt;&gt;  # Days spent using openmpi: 4 (off and on)
</span><br>
<span class="quotelev2">&gt;&gt;  # identified bugs in openmpi :2
</span><br>
<span class="quotelev2">&gt;&gt;  # useful programs built: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please prove me wrong.  I'm eager to be shown my ignorance -- to  
</span><br>
<span class="quotelev2">&gt;&gt; find out where I've been stupid and what documentation I should've  
</span><br>
<span class="quotelev2">&gt;&gt; read.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matt Hughes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've found that I always have to use mpirun to start my spawner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process, due to the exact problem you are having:  the need to give
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI a hosts file!  It seems the singleton functionality is lacking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somehow... it won't allow you to spawn on arbitrary hosts.  I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested if this is fixed in the 1.3 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -np 1 -H op2-1,op2-2 spawner op2-2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec should start the first process on op2-1, and the spawn call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should start the second on op2-2.  If you don't use the Info  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set the hostname specifically, then on 1.2.x it will automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start on op2-2.  With 1.3, the spawn call will start processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starting with the first item in the host list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
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
<li><strong>Next message:</strong> <a href="6211.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6209.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
