<?
$subject_val = "[OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 14:50:53 2014" -->
<!-- isoreceived="20140828185053" -->
<!-- sent="Thu, 28 Aug 2014 18:50:45 +0000" -->
<!-- isosent="20140828185045" -->
<!-- name="McGrattan, Kevin B. Dr." -->
<!-- email="kevin.mcgrattan_at_[hidden]" -->
<!-- subject="[OMPI users] How does binding option affect network traffic?" -->
<!-- id="77234fc4009c4251b9672246eb91b585_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] How does binding option affect network traffic?<br>
<strong>From:</strong> McGrattan, Kevin B. Dr. (<em>kevin.mcgrattan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 14:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25182.php">Matt Thompson: "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25180.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Maybe reply:</strong> <a href="25195.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My institute recently purchased a linux cluster with 20 nodes; 2 sockets per node; 6 cores per socket. OpenMPI v 1.8.1 is installed. I want to run 15 jobs. Each job requires 16 MPI processes.  For each job, I want to use two cores on each node, mapping by socket. If I use these options:
<br>
<p>#PBS -l nodes=8:ppn=2
<br>
mpirun --report-bindings --bind-to core --map-by socket:PE=1 -np 16 &lt;executable file name&gt;
<br>
<p>The reported bindings are:
<br>
<p>[burn001:09186] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
<br>
[burn001:09186] MCW rank 1 bound to socket 1[core 6[hwt 0]]: [./././././.][B/././././.]
<br>
[burn004:07113] MCW rank 6 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
<br>
[burn004:07113] MCW rank 7 bound to socket 1[core 6[hwt 0]]: [./././././.][B/././././.]
<br>
and so on...
<br>
<p>These bindings appear to be OK, but when I do a &quot;top -H&quot; on each node, I see that all 15 jobs use core 0 and core 6 on each node. This means, I believe, that I am only using 1/6 or my resources. I want to use 100%. So I try this:
<br>
<p>#PBS -l nodes=8:ppn=2
<br>
mpirun --report-bindings --bind-to socket --map-by socket:PE=1 -np 16 &lt;executable file name&gt;
<br>
<p>Now it appears that I am getting 100% usage of all cores on all nodes. The bindings are:
<br>
<p>[burn004:07244] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[burn004:07244] MCW rank 1 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[burn008:07256] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[burn008:07256] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
and so on...
<br>
<p>The problem now is that some of my jobs are hanging. They all start running fine, and produce output. But at some point I lose about 4 out of 15 jobs due to hanging. I suspect that an MPI message is passed and not received. The number of jobs that hang and the time when they hang varies from test to test. We have run these cases successfully on our old cluster dozens of times - they are part of our benchmark suite.
<br>
<p>When I run these jobs using a map by core strategy (that is, the MPI processes are just mapped by core, and each job only uses 16 cores on two nodes), I do not see as much hanging. It still occurs, but less often. This leads me to suspect that there is something about the increased network traffic due to the map-by-socket approach that is the cause of the problem. But I do not know what to do about it. I think that the map-by-socket approach is the right one, but I do not know if I have my OpenMPI options just right.
<br>
<p>Can you tell me what OpenMPI options to use, and can you tell me how I might debug the hanging issue.
<br>
<p><p><p>Kevin McGrattan
<br>
National Institute of Standards and Technology
<br>
100 Bureau Drive, Mail Stop 8664
<br>
Gaithersburg, Maryland 20899
<br>
<p>301 975 2712
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25181/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25182.php">Matt Thompson: "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25180.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Reply:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Maybe reply:</strong> <a href="25195.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
