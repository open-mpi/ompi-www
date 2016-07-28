<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 23:49:55 2014" -->
<!-- isoreceived="20140906034955" -->
<!-- sent="Fri, 5 Sep 2014 20:49:31 -0700" -->
<!-- isosent="20140906034931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="6D53B14B-5DCF-4355-A4D5-2CF1C219D589_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="16dd84fdc2234affb16a1e1c08c29ad2_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 23:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2014, at 10:44 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am testing a new cluster that we just bought, which is why I am loading things this way. I am deliberately increasing network traffic. But in general, we submit jobs intermittently with various numbers of MPI processes. I have read that a good strategy is to map by socket, which in our case means that we assign 2 MPI processes to node1, which has two sockets, 2 MPI processes to node2, and so on. For my test cases, each has 16 MPI processes, which means that each job is spread out over 8 nodes. Yes, if I were to always load up the entire cluster, I could map the way you suggest, but I am looking for a strategy that gives me optimum performance for small cluster loads and for large too.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can anyone confirm whether or not it is best to map by socket in cases where you have a light load on your cluster?
</span><br>
<p>It would be about the worst thing you can do, to be honest. Reason is that each socket is typically a separate NUMA region, and so the shared memory system would be sub-optimized in that configuration. It would be much better to map-by core to avoid the NUMA issues.
<br>
<p>If you want multiple cores per process (say for threading purposes), then you can use the pe option to assign them - something like this:
<br>
<p>--map-by core:pe=2
<br>
<p>would map procs by core, with each process being bound to 2 cores. You'd want to make the pe count work out so that no process was bound across a socket boundary as that is really bad.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Friday, September 05, 2014 10:37 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI User's List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How does binding option affect network traffic?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm confused, then: why you wouldn't want to minimize the number of servers that a single job runs on?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I ask because it sounds to me like you're running 12 jobs, each with 1 process per server.  And therefore all 12 jobs are running on each server, like this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;image001.jpg&gt;
</span><br>
<span class="quotelev1">&gt; With this layout, you're thrashing the server networking resources -- you're forcing the maximum use of the network.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Why don't you pack the jobs in to as few servers as possible, and therefore use shared memory as much as possible, and as little network as possible?  This is the conventional wisdom.  ...perhaps I'm missing something in your setup?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2014, at 10:02 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, there are 12 cores per node, and 12 MPI processes are assigned to each node. The total RAM usage is about 10% of available. We suspect that the problem might be the combination of MPI message passing and disk I/O to the master node, both of which are handled by Infiniband. But I do not know how to monitor the traffic, and I do not know how much is too much. Ganglia reports Gigabit Ethernet usage, but we're primarily using IB. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 02, 2014 5:41 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI User's List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How does binding option affect network traffic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, ok -- I think I missed this part of the thread: each of your individual MPI processes suck up huge gobbs of memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So just to be clear, in general: you don't intend to run more MPI processes than cores per server, *and* you intend to run fewer MPI processes per server than would consume the entire amount of RAM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are both of those always correct (at the same time)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, it sounds like the first runs that you posted about were heavily overloading the servers in terms of RAM usage.  Specifically: if you were running out of (registered) RAM, I can understand why Open MPI would hang.  We have a few known issues that the openib BTL will hang if it runs out of registered memory -- but this is such a small corner case (because no one runs that way) that we've honestly never bothered to fix the issue (it's actually a really complicated resource exhaustion issue -- it's kinda hard to know what the Right Thing is to do when you've run out of memory...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2014, at 9:37 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the advice. Our jobs vary in size, from just a few MPI processes to about 64. Jobs are submitted at random, which is why I want to map by socket. If the cluster is empty, and someone submits a job with 16 MPI processes, I would think it would run most efficiently if it used 8 nodes, 2 processes per node. If we just fill up two nodes as you suggest, we overload the RAM on those two nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, August 29, 2014 5:24 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How does binding option affect network traffic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your cluster is very similar to ours where Torque and OpenMPI is installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would use this cmd line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=12
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings -np 16 &lt;executable file name&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here --map-by socket:pe=1 and -bind-to core is assumed as default setting.
</span><br>
<span class="quotelev1">&gt; Then, you can run 10 jobs independently and simultaneously beacause you have 20 nodes totally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While each node in your cluser has 12 cores, the nprocs per node running on a node is 8, which means 66.666 % use, not 100%.
</span><br>
<span class="quotelev1">&gt; I think this loss can not be avoided as long as you use 16*N MPI per job.
</span><br>
<span class="quotelev1">&gt; It's a kind of mismatch with your cluster which has 12 cores per node.
</span><br>
<span class="quotelev1">&gt; If you can use 12*N MPI per job, then it's most effective.
</span><br>
<span class="quotelev1">&gt; Is there any reason why you use 16*N MPI per job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25201.php">http://www.open-mpi.org/community/lists/users/2014/08/25201.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25220.php">http://www.open-mpi.org/community/lists/users/2014/09/25220.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25233.php">http://www.open-mpi.org/community/lists/users/2014/09/25233.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25249.php">http://www.open-mpi.org/community/lists/users/2014/09/25249.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25281.php">http://www.open-mpi.org/community/lists/users/2014/09/25281.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25288.php">Allin Cottrell: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25281.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
