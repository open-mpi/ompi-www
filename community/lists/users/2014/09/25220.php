<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 09:37:23 2014" -->
<!-- isoreceived="20140902133723" -->
<!-- sent="Tue, 2 Sep 2014 13:37:21 +0000" -->
<!-- isosent="20140902133721" -->
<!-- name="McGrattan, Kevin B. Dr." -->
<!-- email="kevin.mcgrattan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="dc867f76ded944c3b10c0e58bbe7257e_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF53F13B1B.DEB1A23A-ON49257D43.00732775-49257D43.00758CA5_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> McGrattan, Kevin B. Dr. (<em>kevin.mcgrattan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 09:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>Previous message:</strong> <a href="25219.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/25201.php">tmishima_at_[hidden]: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25233.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25233.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the advice. Our jobs vary in size, from just a few MPI processes to about 64. Jobs are submitted at random, which is why I want to map by socket. If the cluster is empty, and someone submits a job with 16 MPI processes, I would think it would run most efficiently if it used 8 nodes, 2 processes per node. If we just fill up two nodes as you suggest, we overload the RAM on those two nodes.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of tmishima_at_[hidden]
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
mpirun --report-bindings -np 16&#160;&lt;executable file name&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>Previous message:</strong> <a href="25219.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/25201.php">tmishima_at_[hidden]: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25233.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25233.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
