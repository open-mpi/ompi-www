<?
$subject_val = "Re: [OMPI users] OMPI monitor each process behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 12:19:48 2011" -->
<!-- isoreceived="20110413161948" -->
<!-- sent="Wed, 13 Apr 2011 10:19:43 -0600" -->
<!-- isosent="20110413161943" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI monitor each process behavior" -->
<!-- id="SNT134-w393C4A7544D78C31C85BC1CBAA0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1D6A3C88-C564-4080-9191-F61FDA62BB7A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-13 12:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16228.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16226.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16216.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,  I am using 
<br>
mpirun (Open MPI) 1.3.4
<br>
<p>But, I have these, 
<br>
orte-clean  orted       orte-iof    orte-ps     orterun
<br>
Can they do the same thing ? 
<br>
If I use them, will they use a lot of memory on each worker node and print out a lot of things on some log files ?
<br>
Any help is really appreciated. 
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
<p><p><p>What version are you using? If you are using 1.5.x, there is an &quot;orte-top&quot; command that will do what you ask. It queries the daemons to get the info.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16228.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16226.php">Rushton Martin: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16216.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16231.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
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
