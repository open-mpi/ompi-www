<?
$subject_val = "Re: [OMPI users] Question about oversubscribing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 11:38:29 2012" -->
<!-- isoreceived="20121104163829" -->
<!-- sent="Sun, 04 Nov 2012 17:38:04 +0100" -->
<!-- isosent="20121104163804" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about oversubscribing" -->
<!-- id="509699EC.5060108_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50969769.80305_at_markomanolis.com" -->
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
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-04 11:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Maybe in reply to:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>I am copying your email from the web site because I had enabled the 
<br>
option to receive all the emails once per day
<br>
<p><p>On 11/04/2012 05:27 PM, George Markomanolis wrote:
<br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to execute an experiment by oversubscribing the nodes. So I 
</span><br>
<span class="quotelev1">&gt; have available some clusters (I can use up to 8-10 different clusters 
</span><br>
<span class="quotelev1">&gt; during one execution) and I have totally around to 1300 cores. I am 
</span><br>
<span class="quotelev1">&gt; executing the EP benchmark from the NAS suite which means that there 
</span><br>
<span class="quotelev1">&gt; are not a lot of MPI messages, just some collective MPI calls.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The number of the MPI processes per node, depends on the available 
</span><br>
<span class="quotelev1">&gt; memory of each node. Thus in the machinefile I have declared one node 
</span><br>
<span class="quotelev1">&gt; 13 times if I want 13 MPI processes on it. Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You *can* do it that way, or you could just use &quot;slots=13&quot; for that 
</span><br>
<span class="quotelev1">&gt; node in the file, and list it only once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
OK, but I assume the result is the same, right?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Giving a machinefile of 32768 nodes when I want to execute 32768 processes, does OpenMPI 
</span><br>
<span class="quotelev1">&gt; behave like there is no oversubscribing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it should - I assume you mean &quot;slots&quot; and not &quot;nodes&quot; in the 
</span><br>
<span class="quotelev1">&gt; above statement, since you indicate that you listed each node multiple 
</span><br>
<span class="quotelev1">&gt; times to set the number of slots on that node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, I mean slots.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If yes how can I give a machinefile where there is different number of MPI processes on each 
</span><br>
<span class="quotelev1">&gt; node? The maximum number of MPI processes that I have in a node is 388.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just assign the number of slots on each node to be the number of 
</span><br>
<span class="quotelev1">&gt; processes you want on that node
</span><br>
<span class="quotelev1">&gt;
</span><br>
OK
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My problem is that I can execute 16384 processes but not 32768. In 
</span><br>
<span class="quotelev1">&gt; the first case I need around to 3 minutes for the execution but in the 
</span><br>
<span class="quotelev1">&gt; second case, even after 7 hours the benchmark does not even start. 
</span><br>
<span class="quotelev1">&gt; There is no error, I am just cancelling the job by myself but I am 
</span><br>
<span class="quotelev1">&gt; assuming that something is wrong because 7 hours it is too much. I 
</span><br>
<span class="quotelev1">&gt; have to say that I executed the instance of 16384 processes without 
</span><br>
<span class="quotelev1">&gt; any problem. I added some debug info in the benchmark and I can see 
</span><br>
<span class="quotelev1">&gt; that the execution is delayed during MPI_Init, it never passes this 
</span><br>
<span class="quotelev1">&gt; point. For the instance of 16384 processes I need around to 2 minutes 
</span><br>
<span class="quotelev1">&gt; to finish the MPI_Init call. I am checking the memory of all the nodes 
</span><br>
<span class="quotelev1">&gt; and there is at least 0.5GB free memory on each node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know about the parameter mpi_yield_when_idle but I have read that if 
</span><br>
<span class="quotelev1">&gt; there are not a lot of MPI messages will not improve the performance. 
</span><br>
<span class="quotelev1">&gt; I tried though and nothing changed. I tried also the 
</span><br>
<span class="quotelev1">&gt; mpi_preconnect_mpi just in case but again nothing. Could you please 
</span><br>
<span class="quotelev1">&gt; indicate a reason why is this happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You indicated that these jobs are actually spanning multiple clusters 
</span><br>
<span class="quotelev1">&gt; - true? If so, when you cross that 16384 boundary, do you also cross 
</span><br>
<span class="quotelev1">&gt; clusters? Is it possible one or more of the additional clusters is 
</span><br>
<span class="quotelev1">&gt; blocking communications?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I have tried both configurations even using exactly the same nodes with 
<br>
less MPI processes per node in order to check if a site is blocking the 
<br>
rest ones and I have tried the half machinefile for the instance of 
<br>
16384 in order to see if there is any issue by using so many MPI 
<br>
processes per node. Both were executed fine with the instance of 16384 
<br>
MPI processes. Also I tried to combine different quarters of the 
<br>
machinefile in order to check if there is any issue with the combination 
<br>
of specific sites and again I didn't have a problem.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Moreover I used just one node with 48GB memory in order to execute 
</span><br>
<span class="quotelev1">&gt; 2048 MPI processes without any problem, of course I just had to wait a 
</span><br>
<span class="quotelev1">&gt; lot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI v1.4.1 and all the clusters are 64 bit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I execute the benchmark with the following command:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca pml ob1 --mca btl tcp,self --mca btl_tcp_if_exclude 
</span><br>
<span class="quotelev1">&gt; ib0,lo,myri0 -machinefile machines -np 32768 ep.D.32768
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could just leave off the &quot;-np N&quot; part of the command line - we'll 
</span><br>
<span class="quotelev1">&gt; assign one process to every slot specified in the machinefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
OK, nice
<br>
<p>Best regards,
<br>
George Markomanolis
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; George Markomanolis
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Maybe in reply to:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<!-- nextthread="start" -->
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
