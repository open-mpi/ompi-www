<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 17:23:58 2014" -->
<!-- isoreceived="20140829212358" -->
<!-- sent="Sat, 30 Aug 2014 06:23:38 +0900" -->
<!-- isosent="20140829212338" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="OF53F13B1B.DEB1A23A-ON49257D43.00732775-49257D43.00758CA5_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="bef8cbe8f24c452c90aa19fcdf9bab5f_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20How%20does%20binding%20option%20affect%20network%20traffic?"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-08-29 17:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25202.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25200.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25199.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25220.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25220.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Your cluster is very similar to ours where Torque and OpenMPI
<br>
is installed.
<br>
<p>I would use this cmd line:
<br>
<p>#PBS -l nodes=2:ppn=12
<br>
mpirun --report-bindings -np 16&#160;&lt;executable file name&gt;
<br>
<p>Here --map-by socket:pe=1 and -bind-to core is assumed as default setting.
<br>
Then, you can run 10 jobs independently and simultaneously beacause you
<br>
have 20 nodes totally.
<br>
<p>While each node in your cluser has 12 cores, the nprocs per node
<br>
running on a node is 8, which means 66.666 % use, not 100%.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25202.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25200.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25199.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25220.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25220.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
