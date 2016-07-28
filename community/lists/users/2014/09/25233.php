<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 17:41:12 2014" -->
<!-- isoreceived="20140902214112" -->
<!-- sent="Tue, 2 Sep 2014 21:41:10 +0000" -->
<!-- isosent="20140902214110" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="827432A5-71C7-4E69-9613-59FC1CDE02CD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="dc867f76ded944c3b10c0e58bbe7257e_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>Date:</strong> 2014-09-02 17:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25234.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25232.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25220.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, ok -- I think I missed this part of the thread: each of your individual MPI processes suck up huge gobbs of memory.
<br>
<p>So just to be clear, in general: you don't intend to run more MPI processes than cores per server, *and* you intend to run fewer MPI processes per server than would consume the entire amount of RAM.
<br>
<p>Are both of those always correct (at the same time)?
<br>
<p>If so, it sounds like the first runs that you posted about were heavily overloading the servers in terms of RAM usage.  Specifically: if you were running out of (registered) RAM, I can understand why Open MPI would hang.  We have a few known issues that the openib BTL will hang if it runs out of registered memory -- but this is such a small corner case (because no one runs that way) that we've honestly never bothered to fix the issue (it's actually a really complicated resource exhaustion issue -- it's kinda hard to know what the Right Thing is to do when you've run out of memory...).
<br>
<p><p><p>On Sep 2, 2014, at 9:37 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the advice. Our jobs vary in size, from just a few MPI processes to about 64. Jobs are submitted at random, which is why I want to map by socket. If the cluster is empty, and someone submits a job with 16 MPI processes, I would think it would run most efficiently if it used 8 nodes, 2 processes per node. If we just fill up two nodes as you suggest, we overload the RAM on those two nodes.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25234.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25232.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25220.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25249.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
