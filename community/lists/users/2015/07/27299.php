<?
$subject_val = "Re: [OMPI users] shared memory performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 03:46:13 2015" -->
<!-- isoreceived="20150722074613" -->
<!-- sent="Wed, 22 Jul 2015 16:46:07 +0900" -->
<!-- isosent="20150722074607" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory performance" -->
<!-- id="55AF4A3F.1030405_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55AF495A.5070808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory performance<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 03:46:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27300.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27297.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christian,
<br>
<p>one explanation could be that the benchmark is memory bound, so running 
<br>
on more sockets means higher memory bandwidth means better performance.
<br>
<p>an other explanation is that on one node, you are running one openmp 
<br>
thread per mpi task, and on 8 nodes, you are running 8 openmp threads 
<br>
per tasks
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/22/2015 4:42 PM, Crisitan RUIZ wrote:
<br>
<span class="quotelev1">&gt; Sorry, I've just discovered that I was using the wrong command to run 
</span><br>
<span class="quotelev1">&gt; on 8 machines. I have to get rid of the &quot;-np 8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I corrected the command and I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --machinefile machine_mpi_bug.txt --mca btl self,sm,tcp 
</span><br>
<span class="quotelev1">&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And got these results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8 cores:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mop/s total     =                 19368.43
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8 machines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mop/s total     =                 96094.35
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is the performance of mult-node almost 4 times better than 
</span><br>
<span class="quotelev1">&gt; multi-core? Is this normal behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/22/2015 09:19 AM, Crisitan RUIZ wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running OpenMPI 1.8.5 on a cluster with the following 
</span><br>
<span class="quotelev2">&gt;&gt; characteristics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each node is equipped with two Intel Xeon E5-2630v3 processors (with 
</span><br>
<span class="quotelev2">&gt;&gt; 8 cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run the NAS benchmarks using 8 cores in the same machine, I'm 
</span><br>
<span class="quotelev2">&gt;&gt; getting almost the same performance as using 8 machines running a mpi 
</span><br>
<span class="quotelev2">&gt;&gt; process per machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used the following commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for running multi-node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 --machinefile machine_file.txt --mca btl self,sm,tcp 
</span><br>
<span class="quotelev2">&gt;&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for running in with 8 cores:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8  --mca btl self,sm,tcp --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the following results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8 cores:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Mop/s total     =                 19368.43
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8 machines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mop/s total     =                 19326.60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The results are similar for other benchmarks. Is this behavior 
</span><br>
<span class="quotelev2">&gt;&gt; normal? I was expecting to see a better behavior using 8 cores given 
</span><br>
<span class="quotelev2">&gt;&gt; that they use directly the memory to communicate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cristian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27295.php">http://www.open-mpi.org/community/lists/users/2015/07/27295.php</a>
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
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27297.php">http://www.open-mpi.org/community/lists/users/2015/07/27297.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27300.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27297.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
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
