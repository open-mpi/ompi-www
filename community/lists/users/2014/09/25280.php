<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 10:37:07 2014" -->
<!-- isoreceived="20140905143707" -->
<!-- sent="Fri, 5 Sep 2014 14:37:04 +0000" -->
<!-- isosent="20140905143704" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="C55202F0-6DFB-4FC7-BFA2-0FDEDDE0CD84_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0654a9e020764e6591a21bd983853fc6_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does binding option affect network traffic?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 10:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25279.php">Siegmar Gross: "[OMPI users] segmentation fault for Java in openmpi-1.9a1r32669 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused, then: why you wouldn't want to minimize the number of servers that a single job runs on?
<br>
<p>I ask because it sounds to me like you're running 12 jobs, each with 1 process per server.  And therefore all 12 jobs are running on each server, like this:
<br>
<p>[cid:DE1F7C81-EFFB-45E3-8CDB-019B0AD7C85A_at_[hidden]]
<br>
With this layout, you're thrashing the server networking resources -- you're forcing the maximum use of the network.
<br>
<p>Why don't you pack the jobs in to as few servers as possible, and therefore use shared memory as much as possible, and as little network as possible?  This is the conventional wisdom.  ...perhaps I'm missing something in your setup?
<br>
<p>[cid:D8ADA451-798A-47CD-808D-3D4E29F13BAC_at_[hidden]]
<br>
<p><p><p>On Sep 3, 2014, at 10:02 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&lt;mailto:kevin.mcgrattan_at_[hidden]&gt;&gt; wrote:
<br>
<p>No, there are 12 cores per node, and 12 MPI processes are assigned to each node. The total RAM usage is about 10% of available. We suspect that the problem might be the combination of MPI message passing and disk I/O to the master node, both of which are handled by Infiniband. But I do not know how to monitor the traffic, and I do not know how much is too much. Ganglia reports Gigabit Ethernet usage, but we're primarily using IB.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Tuesday, September 02, 2014 5:41 PM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] How does binding option affect network traffic?
<br>
<p>Ah, ok -- I think I missed this part of the thread: each of your individual MPI processes suck up huge gobbs of memory.
<br>
<p>So just to be clear, in general: you don't intend to run more MPI processes than cores per server, *and* you intend to run fewer MPI processes per server than would consume the entire amount of RAM.
<br>
<p>Are both of those always correct (at the same time)?
<br>
<p>If so, it sounds like the first runs that you posted about were heavily overloading the servers in terms of RAM usage.  Specifically: if you were running out of (registered) RAM, I can understand why Open MPI would hang.  We have a few known issues that the openib BTL will hang if it runs out of registered memory -- but this is such a small corner case (because no one runs that way) that we've honestly never bothered to fix the issue (it's actually a really complicated resource exhaustion issue -- it's kinda hard to know what the Right Thing is to do when you've run out of memory...).
<br>
<p><p><p>On Sep 2, 2014, at 9:37 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&lt;mailto:kevin.mcgrattan_at_[hidden]&gt;&gt; wrote:
<br>
<p>Thanks for the advice. Our jobs vary in size, from just a few MPI processes to about 64. Jobs are submitted at random, which is why I want to map by socket. If the cluster is empty, and someone submits a job with 16 MPI processes, I would think it would run most efficiently if it used 8 nodes, 2 processes per node. If we just fill up two nodes as you suggest, we overload the RAM on those two nodes.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of tmishima_at_[hidden]&lt;mailto:tmishima_at_[hidden]&gt;
<br>
Sent: Friday, August 29, 2014 5:24 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] How does binding option affect network traffic?
<br>
<p>Hi,
<br>
<p>Your cluster is very similar to ours where Torque and OpenMPI is installed.
<br>
<p>I would use this cmd line:
<br>
<p>#PBS -l nodes=2:ppn=12
<br>
mpirun --report-bindings -np 16 &lt;executable file name&gt;
<br>
<p>Here --map-by socket:pe=1 and -bind-to core is assumed as default setting.
<br>
Then, you can run 10 jobs independently and simultaneously beacause you have 20 nodes totally.
<br>
<p>While each node in your cluser has 12 cores, the nprocs per node running on a node is 8, which means 66.666 % use, not 100%.
<br>
I think this loss can not be avoided as long as you use 16*N MPI per job.
<br>
It's a kind of mismatch with your cluster which has 12 cores per node.
<br>
If you can use 12*N MPI per job, then it's most effective.
<br>
Is there any reason why you use 16*N MPI per job?
<br>
<p>Tetsuya
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25201.php">http://www.open-mpi.org/community/lists/users/2014/08/25201.php</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25220.php">http://www.open-mpi.org/community/lists/users/2014/09/25220.php</a>
<br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25233.php">http://www.open-mpi.org/community/lists/users/2014/09/25233.php</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25249.php">http://www.open-mpi.org/community/lists/users/2014/09/25249.php</a>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>image/jpg attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25280/16_jobs_per_server.jpg">16 jobs per server.jpg</a>
</ul>
<!-- attachment="16_jobs_per_server.jpg" -->
<hr>
<ul>
<li>image/jpg attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25280/minimum_servers_per_job.jpg">minimum servers per job.jpg</a>
</ul>
<!-- attachment="minimum_servers_per_job.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25279.php">Siegmar Gross: "[OMPI users] segmentation fault for Java in openmpi-1.9a1r32669 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
