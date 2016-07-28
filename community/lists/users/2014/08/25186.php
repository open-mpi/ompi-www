<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 06:53:02 2014" -->
<!-- isoreceived="20140829105302" -->
<!-- sent="Fri, 29 Aug 2014 12:52:52 +0200" -->
<!-- isosent="20140829105252" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="E8D0A70B-6907-474A-803C-9022A539C4A9_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 06:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25185.php">Timur Ismagilov: "[OMPI users] open shmem optimization"</a>
<li><strong>In reply to:</strong> <a href="25181.php">McGrattan, Kevin B. Dr.: "[OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25195.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 28.08.2014 um 20:50 schrieb McGrattan, Kevin B. Dr.:
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
<span class="quotelev1">&gt; These bindings appear to be OK, but when I do a &#147;top &#150;H&#148; on each node, I see that all 15 jobs use core 0 and core 6 on each node. This means, I believe, that I am only using 1/6 or my resources. I want to use 100%. So I try this:
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
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I run these jobs using a map by core strategy (that is, the MPI processes are just mapped by core, and each job only uses 16 cores on two nodes), I do not see as much hanging. It still occurs, but less often. This leads me to suspect that there is something about the increased network traffic due to the map-by-socket approach that is the cause of the problem. But I do not know what to do about it. I think that the map-by-socket approach is the right one, but I do not know if I have my OpenMPI options just right.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you tell me what OpenMPI options to use, and can you tell me how I might debug the hanging issue.
</span><br>
<p>BTW: In modern systems the NIC(s) can be connected directly to one CPU, while the other CPU first has to send the data to the other CPU to get to the NIC (besides that the integrated NICs may be connect to the chipset).
<br>
<p>Did anyone ever made some benchmarks whether there is a difference in which CPU was used in the system, i.e. the one to which the network adapter is connected or the other CPU - or even to the chipset one?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Kevin McGrattan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25185.php">Timur Ismagilov: "[OMPI users] open shmem optimization"</a>
<li><strong>In reply to:</strong> <a href="25181.php">McGrattan, Kevin B. Dr.: "[OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25195.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
