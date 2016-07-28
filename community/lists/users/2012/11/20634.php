<?
$subject_val = "Re: [OMPI users] Question about oversubscribing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 11:00:23 2012" -->
<!-- isoreceived="20121104160023" -->
<!-- sent="Sun, 4 Nov 2012 08:00:16 -0800" -->
<!-- isosent="20121104160016" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about oversubscribing" -->
<!-- id="2DDAF4B1-DF8F-4D19-9898-72FDAA9BE6CC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50968453.2070904_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about oversubscribing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-04 11:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Previous message:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<li><strong>In reply to:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2012, at 7:05 AM, George Markomanolis &lt;george_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to execute an experiment by oversubscribing the nodes. So I have available some clusters (I can use up to 8-10 different clusters during one execution) and I have totally around to 1300 cores. I am executing the EP benchmark from the NAS suite which means that there are not a lot of MPI messages, just some collective MPI calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The number of the MPI processes per node, depends on the available memory of each node. Thus in the machinefile I have declared one node 13 times if I want 13 MPI processes on it. Is that correct?
</span><br>
<p>You *can* do it that way, or you could just use &quot;slots=13&quot; for that node in the file, and list it only once.
<br>
<p><span class="quotelev1">&gt; Giving a machinefile of 32768 nodes when I want to execute 32768 processes, does OpenMPI behave like there is no oversubscribing?
</span><br>
<p>Yes, it should - I assume you mean &quot;slots&quot; and not &quot;nodes&quot; in the above statement, since you indicate that you listed each node multiple times to set the number of slots on that node.
<br>
<p><span class="quotelev1">&gt; If yes how can I give a machinefile where there is different number of MPI processes on each node? The maximum number of MPI processes that I have in a node is 388.
</span><br>
<p>Just assign the number of slots on each node to be the number of processes you want on that node
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is that I can execute 16384 processes but not 32768. In the first case I need around to 3 minutes for the execution but in the second case, even after 7 hours the benchmark does not even start. There is no error, I am just cancelling the job by myself but I am assuming that something is wrong because 7 hours it is too much. I have to say that I executed the instance of 16384 processes without any problem. I added some debug info in the benchmark and I can see that the execution is delayed during MPI_Init, it never passes this point. For the instance of 16384 processes I need around to 2 minutes to finish the MPI_Init call. I am checking the memory of all the nodes and there is at least 0.5GB free memory on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know about the parameter mpi_yield_when_idle but I have read that if there are not a lot of MPI messages will not improve the performance. I tried though and nothing changed. I tried also the mpi_preconnect_mpi just in case but again nothing. Could you please indicate a reason why is this happening?
</span><br>
<p>You indicated that these jobs are actually spanning multiple clusters - true? If so, when you cross that 16384 boundary, do you also cross clusters? Is it possible one or more of the additional clusters is blocking communications?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover I used just one node with 48GB memory in order to execute 2048 MPI processes without any problem, of course I just had to wait a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI v1.4.1 and all the clusters are 64 bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I execute the benchmark with the following command:
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml ob1 --mca btl tcp,self --mca btl_tcp_if_exclude ib0,lo,myri0 -machinefile machines -np 32768 ep.D.32768
</span><br>
<p>You could just leave off the &quot;-np N&quot; part of the command line - we'll assign one process to every slot specified in the machinefile.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; George Markomanolis
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Previous message:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<li><strong>In reply to:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
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
