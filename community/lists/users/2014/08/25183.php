<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 16:27:58 2014" -->
<!-- isoreceived="20140828202758" -->
<!-- sent="Thu, 28 Aug 2014 13:27:12 -0700" -->
<!-- isosent="20140828202712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="637CAEF5-BBB3-46C2-9387-DECDF8CBDDD6_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="77234fc4009c4251b9672246eb91b585_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>Date:</strong> 2014-08-28 16:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25182.php">Matt Thompson: "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25181.php">McGrattan, Kevin B. Dr.: "[OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 28, 2014, at 11:50 AM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My institute recently purchased a linux cluster with 20 nodes; 2 sockets per node; 6 cores per socket. OpenMPI v 1.8.1 is installed. I want to run 15 jobs. Each job requires 16 MPI processes.  For each job, I want to use two cores on each node, mapping by socket. If I use these options:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=8:ppn=2
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings --bind-to core --map-by socket:PE=1 -np 16 &lt;executable file name&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The reported bindings are:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [burn001:09186] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [burn001:09186] MCW rank 1 bound to socket 1[core 6[hwt 0]]: [./././././.][B/././././.]
</span><br>
<span class="quotelev1">&gt; [burn004:07113] MCW rank 6 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [burn004:07113] MCW rank 7 bound to socket 1[core 6[hwt 0]]: [./././././.][B/././././.]
</span><br>
<span class="quotelev1">&gt; and so on&#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; These bindings appear to be OK, but when I do a &#147;top &#150;H&#148; on each node, I see that all 15 jobs use core 0 and core 6 on each node. This means, I believe, that I am only using 1/6 or my resources.
</span><br>
<p>That is correct. The problem is that each mpirun execution has no idea what the others are doing, or even that they exist. Thus, they will each independently bind to core zero and core 6, as you observe. You can get around this by submitting each with a separate --cpuset argument telling it which cpus it is allowed to use - something like this (note that there is no value to having pe=1 as that is automatically what happens with bind-to core):
<br>
<p>mpirun --cpuset 0,6 --bind-to core  ....
<br>
mpirun --cpuset 1,7 --bind-to core  ...
<br>
<p>etc. You specified only two procs/node with your PBS request, so we'll only map two on each node. This command line tells the first mpirun to only use cores 0 and 6, and to bind each proc to one of those cores. The second uses only cores 1 and 7, and thus is separated from the first command.
<br>
<p>However, you should note that you can't run 15 jobs at the same time in the manner you describe without overloading some cores as you only have 12 cores/node. This will create a poor-performance situation.
<br>
<p><p><span class="quotelev1">&gt; I want to use 100%. So I try this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=8:ppn=2
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings --bind-to socket --map-by socket:PE=1 -np 16 &lt;executable file name&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Now it appears that I am getting 100% usage of all cores on all nodes. The bindings are:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [burn004:07244] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; [burn004:07244] MCW rank 1 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [burn008:07256] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt; [burn008:07256] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt; and so on&#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The problem now is that some of my jobs are hanging. They all start running fine, and produce output. But at some point I lose about 4 out of 15 jobs due to hanging. I suspect that an MPI message is passed and not received. The number of jobs that hang and the time when they hang varies from test to test. We have run these cases successfully on our old cluster dozens of times &#150; they are part of our benchmark suite.
</span><br>
<p>Did you have more cores on your old cluster? I suspect the problem here is resource exhaustion, especially if you are using Infiniband as you are overloading some of the cores, as mentioned above.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I run these jobs using a map by core strategy (that is, the MPI processes are just mapped by core, and each job only uses 16 cores on two nodes), I do not see as much hanging. It still occurs, but less often. This leads me to suspect that there is something about the increased network traffic due to the map-by-socket approach that is the cause of the problem. But I do not know what to do about it. I think that the map-by-socket approach is the right one, but I do not know if I have my OpenMPI options just right.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you tell me what OpenMPI options to use, and can you tell me how I might debug the hanging issue.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kevin McGrattan
</span><br>
<span class="quotelev1">&gt; National Institute of Standards and Technology
</span><br>
<span class="quotelev1">&gt; 100 Bureau Drive, Mail Stop 8664
</span><br>
<span class="quotelev1">&gt; Gaithersburg, Maryland 20899
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 301 975 2712
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25181.php">http://www.open-mpi.org/community/lists/users/2014/08/25181.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25182.php">Matt Thompson: "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25181.php">McGrattan, Kevin B. Dr.: "[OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
