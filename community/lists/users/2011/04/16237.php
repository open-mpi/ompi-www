<?
$subject_val = "Re: [OMPI users] OMPI monitor each process behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 22:24:03 2011" -->
<!-- isoreceived="20110414022403" -->
<!-- sent="Wed, 13 Apr 2011 20:23:57 -0600" -->
<!-- isosent="20110414022357" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI monitor each process behavior" -->
<!-- id="SNT134-w64E63BEF7C35D3F03FB279CBAD0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7DAE2130-D4CB-4197-AAB8-0D25DA4E10CF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI monitor each process behavior<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 22:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16238.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16218.php">Reuti: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I find the reason why the program is killed by operating system in the case that the problem size is large.
<br>
It consumes more memory and leads to more memory swap. 
<br>
This also degrade the program performance. 
<br>
But, I cannot determine which function of the worker process causes the problem. 
<br>
I have used try-catch in my code but no exception popped out.
<br>
I found that -------------------------------------------------------------------When the processes running on your server attempt to allocate more memory than your system has available, the kernel begins to swap memory pages to and from the disk.
<br>
This is done in order to free up sufficient physical memory to meet the RAM allocation requirements of the requestor.------------------------------------------------------------------
<br>
I am not sure it is really caused by CPLEX ( an optimization model solver) or other routines or maybe by other dynamic memory allocation used by CPLEX API libray at background. 
<br>
Any help is really appreciated. 
<br>
Jack
<br>
From: rhc_at_[hidden]
<br>
Date: Wed, 13 Apr 2011 10:34:38 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI monitor each process behavior
<br>
<p><p><p><p>On Apr 13, 2011, at 10:19 AM, Jack Bryan wrote:Hi,  I am using 
<br>
mpirun (Open MPI) 1.3.4
<br>
<p>But, I have these, 
<br>
orte-clean  orted       orte-iof    orte-ps     orterun
<br>
Can they do the same thing ? 
<br>
Unfortunately, no
<br>
<p>If I use them, will they use a lot of memory on each worker node and print out a lot of things on some log files ?
<br>
No, but they won't help. orte-top would be run only on the head node (i.e., where you are logged in), and would generate output to your screen.
<br>
But you don't have it with that release, so the point is moot. Afraid there isn't much else you can do - you might talk to your sys admin and see what tools are available on your cluster for this purpose. Perhaps a nice parallel debugger is available?
<br>
<p><p>Any help is really appreciated. 
<br>
Thanks
<br>
Jack 
<br>
From: rhc_at_[hidden]
<br>
Date: Wed, 13 Apr 2011 08:09:17 -0600
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OMPI monitor each process behavior
<br>
<p>What version are you using? If you are using 1.5.x, there is an &quot;orte-top&quot; command that will do what you ask. It queries the daemons to get the info.
<br>
<p>On Apr 12, 2011, at 9:55 PM, Jack Bryan wrote:Hi , All: 
<br>
I need to monitor the memory usage of each parallel process on a linux Open MPI cluster. 
<br>
But, top, ps command cannot help here because they only show the head node information. 
<br>
I need to follow the behavior of each process on each cluster node.
<br>
I cannot use ssh to access each node. 
<br>
The program takes 8 hours to finish. 
<br>
Any help is really appreciated. 
<br>
Jack _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16238.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16218.php">Reuti: "Re: [OMPI users] OMPI monitor each process behavior"</a>
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
