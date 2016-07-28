<?
$subject_val = "Re: [OMPI users] shared memory performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 13:36:09 2015" -->
<!-- isoreceived="20150722173609" -->
<!-- sent="Wed, 22 Jul 2015 13:36:08 -0400" -->
<!-- isosent="20150722173608" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory performance" -->
<!-- id="55AFD488.7070902_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55AF575F.7010003_at_inria.fr" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 13:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27302.php">David Shrader: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27300.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27300.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27302.php">David Shrader: "Re: [OMPI users] shared memory performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christian, list
<br>
<p>I haven't been following the shared memory details of OMPI lately,
<br>
but my recollection from some time ago is that in the 1.8 series the
<br>
default (and recommended) shared memory transport btl switched from
<br>
&quot;sm&quot; to &quot;vader&quot;, which is the latest greatest.
<br>
<p>In this case, I guess the mpirun options would be:
<br>
<p>mpirun --machinefile machine_mpi_bug.txt --mca btl self,vader,tcp
<br>
<p><p>I am not even sure if with &quot;vader&quot; the &quot;self&quot; btl is needed,
<br>
as it was the case with &quot;sm&quot;.
<br>
<p>An OMPI developer could jump into this conversation and clarify.
<br>
Thank you.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 07/22/2015 04:42 AM, Crisitan RUIZ wrote:
<br>
<span class="quotelev1">&gt; Thank you for your answer Harald
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually I was already using TAU before but it seems that it is not
</span><br>
<span class="quotelev1">&gt; maintained any more and there are problems when instrumenting
</span><br>
<span class="quotelev1">&gt; applications with the version 1.8.5 of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was using the OpenMPI 1.6.5 before to test the execution of HPC
</span><br>
<span class="quotelev1">&gt; application on Linux containers. I tested the performance of NAS
</span><br>
<span class="quotelev1">&gt; benchmarks in three different configurations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 8 Linux containers on the same machine configured with 2 cores
</span><br>
<span class="quotelev1">&gt; - 8 physical machines
</span><br>
<span class="quotelev1">&gt; - 1 physical machine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, as I already described it, each machine counts with 2 processors (8
</span><br>
<span class="quotelev1">&gt; cores each). I instrumented and run all NAS benchmark in these three
</span><br>
<span class="quotelev1">&gt; configurations and I got the results that I attached in this email.
</span><br>
<span class="quotelev1">&gt; In the table &quot;native&quot; corresponds to using 8 physical machines and &quot;SM&quot;
</span><br>
<span class="quotelev1">&gt; corresponds to 1 physical machine using the sm module, time is given in
</span><br>
<span class="quotelev1">&gt; miliseconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What surprise me in the results is that using containers in the worse
</span><br>
<span class="quotelev1">&gt; case have equal communication time than just using plain mpi processes.
</span><br>
<span class="quotelev1">&gt; Even though the containers use virtual network interfaces to communicate
</span><br>
<span class="quotelev1">&gt; between them. Probably this behaviour is due to process binding and
</span><br>
<span class="quotelev1">&gt; locality, I wanted to redo the test using OpenMPI version 1.8.5 but
</span><br>
<span class="quotelev1">&gt; unfourtunately I couldn't sucessfully instrument the applications. I was
</span><br>
<span class="quotelev1">&gt; looking for another MPI profiler but I couldn't find any. HPCToolkit
</span><br>
<span class="quotelev1">&gt; looks like it is not maintain anymore, Vampir does not maintain any more
</span><br>
<span class="quotelev1">&gt; the tool that instrument the application.  I will probably give a try to
</span><br>
<span class="quotelev1">&gt; Paraver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristian Ruiz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/22/2015 09:44 AM, Harald Servat wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cristian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   you might observe super-speedup heres because in 8 nodes you have 8
</span><br>
<span class="quotelev2">&gt;&gt; times the cache you have in only 1 node. You can also validate that by
</span><br>
<span class="quotelev2">&gt;&gt; checking for cache miss activity using the tools that I mentioned in
</span><br>
<span class="quotelev2">&gt;&gt; my other email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 22/07/15 09:42, Crisitan RUIZ wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, I've just discovered that I was using the wrong command to run on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 machines. I have to get rid of the &quot;-np 8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I corrected the command and I used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --machinefile machine_mpi_bug.txt --mca btl self,sm,tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And got these results
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 cores:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mop/s total     =                 19368.43
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mop/s total     =                 96094.35
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why is the performance of mult-node almost 4 times better than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-core? Is this normal behavior?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 07/22/2015 09:19 AM, Crisitan RUIZ wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm running OpenMPI 1.8.5 on a cluster with the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; characteristics:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Each node is equipped with two Intel Xeon E5-2630v3 processors (with 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run the NAS benchmarks using 8 cores in the same machine, I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; getting almost the same performance as using 8 machines running a mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process per machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I used the following commands:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for running multi-node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8 --machinefile machine_file.txt --mca btl self,sm,tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for running in with 8 cores:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8  --mca btl self,sm,tcp --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got the following results:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 cores:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Mop/s total     =                 19368.43
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 machines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mop/s total     =                 19326.60
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The results are similar for other benchmarks. Is this behavior normal?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was expecting to see a better behavior using 8 cores given that they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use directly the memory to communicate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cristian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27295.php">http://www.open-mpi.org/community/lists/users/2015/07/27295.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27297.php">http://www.open-mpi.org/community/lists/users/2015/07/27297.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev2">&gt;&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev2">&gt;&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev2">&gt;&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev2">&gt;&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev2">&gt;&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev2">&gt;&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev2">&gt;&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27298.php">http://www.open-mpi.org/community/lists/users/2015/07/27298.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27300.php">http://www.open-mpi.org/community/lists/users/2015/07/27300.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27302.php">David Shrader: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27300.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27300.php">Crisitan RUIZ: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27302.php">David Shrader: "Re: [OMPI users] shared memory performance"</a>
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
