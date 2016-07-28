<?
$subject_val = "Re: [OMPI users] shared memory performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 03:42:28 2015" -->
<!-- isoreceived="20150722074228" -->
<!-- sent="Wed, 22 Jul 2015 09:42:18 +0200" -->
<!-- isosent="20150722074218" -->
<!-- name="Crisitan RUIZ" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory performance" -->
<!-- id="55AF495A.5070808_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55AF440C.7050202_at_inria.fr" -->
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
<strong>From:</strong> Crisitan RUIZ (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 03:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27295.php">Crisitan RUIZ: "[OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27299.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I've just discovered that I was using the wrong command to run on 
<br>
8 machines. I have to get rid of the &quot;-np 8&quot;
<br>
<p>So, I corrected the command and I used:
<br>
<p>mpirun --machinefile machine_mpi_bug.txt --mca btl self,sm,tcp 
<br>
--allow-run-as-root mg.C.8
<br>
<p>And got these results
<br>
<p>8 cores:
<br>
<p>Mop/s total     =                 19368.43
<br>
<p><p>8 machines
<br>
<p>Mop/s total     =                 96094.35
<br>
<p><p>Why is the performance of mult-node almost 4 times better than 
<br>
multi-core? Is this normal behavior?
<br>
<p>On 07/22/2015 09:19 AM, Crisitan RUIZ wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OpenMPI 1.8.5 on a cluster with the following 
</span><br>
<span class="quotelev1">&gt; characteristics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each node is equipped with two Intel Xeon E5-2630v3 processors (with 8 
</span><br>
<span class="quotelev1">&gt; cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the NAS benchmarks using 8 cores in the same machine, I'm 
</span><br>
<span class="quotelev1">&gt; getting almost the same performance as using 8 machines running a mpi 
</span><br>
<span class="quotelev1">&gt; process per machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for running multi-node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --machinefile machine_file.txt --mca btl self,sm,tcp 
</span><br>
<span class="quotelev1">&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for running in with 8 cores:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8  --mca btl self,sm,tcp --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8 cores:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Mop/s total     =                 19368.43
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8 machines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mop/s total     =                 19326.60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results are similar for other benchmarks. Is this behavior normal? 
</span><br>
<span class="quotelev1">&gt; I was expecting to see a better behavior using 8 cores given that they 
</span><br>
<span class="quotelev1">&gt; use directly the memory to communicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristian
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27295.php">http://www.open-mpi.org/community/lists/users/2015/07/27295.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27296.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27295.php">Crisitan RUIZ: "[OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27298.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Reply:</strong> <a href="27299.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory performance"</a>
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
