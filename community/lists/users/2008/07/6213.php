<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 10:26:00 2008" -->
<!-- isoreceived="20080730142600" -->
<!-- sent="Wed, 30 Jul 2008 10:24:53 -0400" -->
<!-- isosent="20080730142453" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="B5E5B6A0-0573-40E0-9536-044B06D4E5BA_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="489072D7.5030204_at_3dB-Labs.com" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 10:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6214.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark, if you can run a server process on the remote machine, you  
<br>
could send a request from your local MPI app to your server, then use  
<br>
an Intercomm to link the local process to the new remote process?
<br>
<p>On Jul 30, 2008, at 9:55 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid I can't dictate to the customer that they must upgrade.
</span><br>
<span class="quotelev1">&gt; The target platform is RHEL 5.2 ( uses openmpi 1.2.6 )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to find some sort of workaround. Any suggestions on how  
</span><br>
<span class="quotelev1">&gt; to &quot;fake&quot; the functionality of MPI_Comm_spawn are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To reiterate my needs:
</span><br>
<span class="quotelev1">&gt; I am writing a shared object that plugs into an existing framework.
</span><br>
<span class="quotelev1">&gt; I do not control how the framework launches its processes (no mpirun).
</span><br>
<span class="quotelev1">&gt; I want to start remote processes to crunch the data.
</span><br>
<span class="quotelev1">&gt; The shared object marshall the I/O between the framework and the  
</span><br>
<span class="quotelev1">&gt; remote processes.
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
<span class="quotelev2">&gt;&gt; Singleton comm_spawn works fine on the 1.3 release branch - if  
</span><br>
<span class="quotelev2">&gt;&gt; singleton comm_spawn is critical to your plans, I suggest moving  
</span><br>
<span class="quotelev2">&gt;&gt; to that version. You can get a pre-release version off of the  
</span><br>
<span class="quotelev2">&gt;&gt; www.open-mpi.org web site.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 30, 2008, at 6:58 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As your own tests have shown, it works fine if you just &quot;mpirun - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n 1 ./spawner&quot;. It is only singleton comm_spawn that appears to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be having a problem in the latest 1.2 release. So I don't think  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_spawn is &quot;useless&quot;. ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm checking this morning to ensure that singletons properly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawns on other nodes in the 1.3 release. I sincerely doubt we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will backport a fix to 1.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 30, 2008, at 6:49 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I keep checking my email in hopes that someone will come up with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something that Matt or I might've missed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm just having a hard time accepting that something so  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fundamental would be so broken.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MPI_Comm_spawn command is essentially useless without the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ability to spawn processes on other nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If this is true, then my personal scorecard reads:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  # Days spent using openmpi: 4 (off and on)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  # identified bugs in openmpi :2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  # useful programs built: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please prove me wrong.  I'm eager to be shown my ignorance -- to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find out where I've been stupid and what documentation I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should've read.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matt Hughes wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've found that I always have to use mpirun to start my spawner
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process, due to the exact problem you are having:  the need to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; give
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI a hosts file!  It seems the singleton functionality is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lacking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; somehow... it won't allow you to spawn on arbitrary hosts.  I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tested if this is fixed in the 1.3 series.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -np 1 -H op2-1,op2-2 spawner op2-2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec should start the first process on op2-1, and the spawn  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should start the second on op2-2.  If you don't use the Info  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; object to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set the hostname specifically, then on 1.2.x it will automatically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; start on op2-2.  With 1.3, the spawn call will start processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; starting with the first item in the host list.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [snip]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6214.php">Alexander Shabarshin: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>Previous message:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
