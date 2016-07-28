<?
$subject_val = "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 10:41:13 2012" -->
<!-- isoreceived="20121213154113" -->
<!-- sent="Thu, 13 Dec 2012 23:41:07 +0800" -->
<!-- isosent="20121213154107" -->
<!-- name="Ng Shi Wei" -->
<!-- email="nsw_1216_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17" -->
<!-- id="COL122-W4044955A2E14DEB8BE8250FE4E0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="56DBFA40-6D48-4DF8-B40E-D0AD715E00E4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17<br>
<strong>From:</strong> Ng Shi Wei (<em>nsw_1216_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 10:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20944.php">Jeff Squyres: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>In reply to:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20944.php">Jeff Squyres: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Reply:</strong> <a href="20944.php">Jeff Squyres: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using openmpi-1.6.3. What do you meant with &quot;We stopped supporting bproc after the 1.2 series, though you could always launch via ssh.&quot; ?
<br>
Best Regards,Shi Wei.
<br>
From: rhc_at_[hidden]
<br>
Date: Thu, 13 Dec 2012 06:37:56 -0800
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in	F17
<br>
<p>What version of OMPI are you running? We stopped supporting bproc after the 1.2 series, though you could always launch via ssh.
<br>
On Dec 12, 2012, at 10:25 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:Dear all,
<br>
I am new in Linux and clustering. I am setting up a Beowulf Cluster using several PCs according to this guide <a href="http://www.tldp.org/HOWTO/html_single/Beowulf-HOWTO/">http://www.tldp.org/HOWTO/html_single/Beowulf-HOWTO/</a>.
<br>
<p>I have setup and configure accordingly except for NFS part. Because I am not requiring it for my application. I have set my ssh to login each other without password. I started with 2 nodes 1st. I can compile and run in my headnode using openmpi. But when I try to run my MPI application across nodes, there is nothing displaying. It just like hanging there.
<br>
<p>Headnode: master
<br>
client: slave4
<br>
<p>The command I used to mpirun across nodes is as below:
<br>
Code:mpirun -np 4 --host slave4 outputSince I not using NFS, so I installed OpenMPI in every nodes with same locations. 
<br>
<p>I wondering I missed out any configurations or not.
<br>
<p>Hope someone can help me out of this problem.
<br>
<p>Thanks in advance.
<br>
Best Regards,Shi Wei_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20944.php">Jeff Squyres: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>In reply to:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20944.php">Jeff Squyres: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Reply:</strong> <a href="20944.php">Jeff Squyres: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
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
