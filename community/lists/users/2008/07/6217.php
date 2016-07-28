<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 11:14:49 2008" -->
<!-- isoreceived="20080730151449" -->
<!-- sent="Wed, 30 Jul 2008 11:12:48 -0400" -->
<!-- isosent="20080730151248" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="489084F0.2080709_at_3dB-Labs.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 11:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6218.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6218.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6218.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I appreciate the suggestion about running a daemon on each of the remote 
<br>
nodes, but wouldn't I kind of be reinventing the wheel there? Process 
<br>
management is one of the things I'd like to be able to count on ORTE for.  
<br>
<p>Would the following work to give the parent process an intercomm with 
<br>
each child?
<br>
<p>parent i.e. my non-mpirun-started process  calls  MPI_Init then 
<br>
MPI_Open_port
<br>
parent spawns mpirun command via system/exec to create the remote 
<br>
children . The name from MPI_Open_port is placed in the environment.
<br>
parent calls MPI_Comm_accept (once for each child?)
<br>
all children call MPI_connect to the name
<br>
<p>I think this would give one intercommunicator back to the parent for 
<br>
each remote process (not ideal, but I can worry about broadcast data later)
<br>
The remote processes can communicate to each other through MPI_COMM_WORLD.
<br>
<p><p>Actually when I think through the details, much of this is pretty 
<br>
similar to the daemon MPI_Publish_name+MPI_Lookup_name approach.  The 
<br>
main difference being which processes come first.
<br>
<p><p><p><p>Mark Borgerding wrote:
<br>
<span class="quotelev1">&gt; I'm afraid I can't dictate to the customer that they must upgrade.
</span><br>
<span class="quotelev1">&gt; The target platform is RHEL 5.2 ( uses openmpi 1.2.6 )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to find some sort of workaround. Any suggestions on how to 
</span><br>
<span class="quotelev1">&gt; &quot;fake&quot; the functionality of MPI_Comm_spawn are welcome.
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
<span class="quotelev2">&gt;&gt; singleton comm_spawn is critical to your plans, I suggest moving to 
</span><br>
<span class="quotelev2">&gt;&gt; that version. You can get a pre-release version off of the 
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
<span class="quotelev3">&gt;&gt;&gt; As your own tests have shown, it works fine if you just &quot;mpirun -n 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./spawner&quot;. It is only singleton comm_spawn that appears to be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having a problem in the latest 1.2 release. So I don't think 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_spawn is &quot;useless&quot;. ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm checking this morning to ensure that singletons properly spawns 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on other nodes in the 1.3 release. I sincerely doubt we will 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; backport a fix to 1.2.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm just having a hard time accepting that something so fundamental 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be so broken.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; find out where I've been stupid and what documentation I should've 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; read.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matt Hughes wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've found that I always have to use mpirun to start my spawner
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process, due to the exact problem you are having:  the need to give
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI a hosts file!  It seems the singleton functionality is lacking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; somehow... it won't allow you to spawn on arbitrary hosts.  I have 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec should start the first process on op2-1, and the spawn call
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
<li><strong>Next message:</strong> <a href="6218.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6212.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6218.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6218.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
