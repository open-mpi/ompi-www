<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 10:49:45 2008" -->
<!-- isoreceived="20080730144945" -->
<!-- sent="Wed, 30 Jul 2008 08:49:37 -0600" -->
<!-- isosent="20080730144937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="EFAEEAA9-3396-41CF-9A68-2408F1F7F15E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="563E80CC-3A5F-4DAD-8341-31D5893803D7_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-07-30 10:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I tested it and MPI_Name_publish and MPI_Name_lookup work on  
<br>
1.2.6, so this may provide an avenue (albeit cumbersome) for you to  
<br>
get this to work. It may require a server, though, to make it work -  
<br>
your first MPI proc may be able to play that role if you pass it's  
<br>
contact info to the others, but I'd have to play with it for awhile to  
<br>
be sure. Haven't really tried that before.
<br>
<p>Otherwise, even if we devised a fix for the singleton comm_spawn in  
<br>
1.2, it would still require an upgrade by the customer as it wouldn't  
<br>
be in 1.2.6 - best that could happen is for it to appear in 1.2.7,  
<br>
assuming we created the fix for that impending release (far from  
<br>
certain).
<br>
<p>So if this doesn't work, and the customer cannot or will not upgrade  
<br>
from 1.2.6, I fear you probably cannot do this with OMPI under the  
<br>
constraints you describe.
<br>
<p><p>On Jul 30, 2008, at 8:36 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; IThe problem would be finding a way to tell all the MPI apps how to  
</span><br>
<span class="quotelev1">&gt; contact each other as the Intercomm procedure needs that info to  
</span><br>
<span class="quotelev1">&gt; complete. I don't recall if the MPI_Name_publish/lookup functions  
</span><br>
<span class="quotelev1">&gt; worked in 1.2 - I'm building the code now to see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it does, then you could use it to get the required contact info  
</span><br>
<span class="quotelev1">&gt; and wire up the Intercomm...it's a lot of what goes on under the  
</span><br>
<span class="quotelev1">&gt; comm_spawn covers anyway. Only diff is the necessity for the server...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2008, at 8:24 AM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mark, if you can run a server process on the remote machine, you  
</span><br>
<span class="quotelev2">&gt;&gt; could send a request from your local MPI app to your server, then  
</span><br>
<span class="quotelev2">&gt;&gt; use an Intercomm to link the local process to the new remote process?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 30, 2008, at 9:55 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid I can't dictate to the customer that they must upgrade.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The target platform is RHEL 5.2 ( uses openmpi 1.2.6 )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will try to find some sort of workaround. Any suggestions on how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to &quot;fake&quot; the functionality of MPI_Comm_spawn are welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To reiterate my needs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am writing a shared object that plugs into an existing framework.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not control how the framework launches its processes (no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to start remote processes to crunch the data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The shared object marshall the I/O between the framework and the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Singleton comm_spawn works fine on the 1.3 release branch - if  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; singleton comm_spawn is critical to your plans, I suggest moving  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to that version. You can get a pre-release version off of the www.open-mpi.org 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  web site.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 30, 2008, at 6:58 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As your own tests have shown, it works fine if you just &quot;mpirun - 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n 1 ./spawner&quot;. It is only singleton comm_spawn that appears to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be having a problem in the latest 1.2 release. So I don't think  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm_spawn is &quot;useless&quot;. ;-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm checking this morning to ensure that singletons properly  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawns on other nodes in the 1.3 release. I sincerely doubt we  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will backport a fix to 1.2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 30, 2008, at 6:49 AM, Mark Borgerding wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I keep checking my email in hopes that someone will come up  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with something that Matt or I might've missed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm just having a hard time accepting that something so  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fundamental would be so broken.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The MPI_Comm_spawn command is essentially useless without the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ability to spawn processes on other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If this is true, then my personal scorecard reads:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Days spent using openmpi: 4 (off and on)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # identified bugs in openmpi :2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # useful programs built: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please prove me wrong.  I'm eager to be shown my ignorance --  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to find out where I've been stupid and what documentation I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; should've read.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Matt Hughes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've found that I always have to use mpirun to start my spawner
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; process, due to the exact problem you are having:  the need to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; give
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI a hosts file!  It seems the singleton functionality is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; lacking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; somehow... it won't allow you to spawn on arbitrary hosts.  I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tested if this is fixed in the 1.3 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -np 1 -H op2-1,op2-2 spawner op2-2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec should start the first process on op2-1, and the spawn  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; should start the second on op2-2.  If you don't use the Info  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; object to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; set the hostname specifically, then on 1.2.x it will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; start on op2-2.  With 1.3, the spawn call will start processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; starting with the first item in the host list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [snip]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
