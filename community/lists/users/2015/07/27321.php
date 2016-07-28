<?
$subject_val = "Re: [OMPI users] shared memory performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 06:04:24 2015" -->
<!-- isoreceived="20150724100424" -->
<!-- sent="Fri, 24 Jul 2015 19:04:13 +0900" -->
<!-- isosent="20150724100413" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory performance" -->
<!-- id="CAAkFZ5t7yWuA3n77nYtL1j-giLWs7P5_g_ZF4CS0WTEr5NrApQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55B1FB15.2090907_at_bsc.es" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 06:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27322.php">Lane, William: "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27320.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27320.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27299.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cristian,
<br>
<p>one more thing...
<br>
two containers on the same host cannot communicate with the sm btl.
<br>
you might want to mpirun with --mca btl tcp,self on one physical machine
<br>
without container,
<br>
in order to asses the performance degradation due to using tcp btl and
<br>
without any containerization effect.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, July 24, 2015, Harald Servat &lt;harald.servat_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Cristian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   according to your configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   a) - 8 Linux containers on the same machine configured with 2 cores
</span><br>
<span class="quotelev1">&gt;   b) - 8 physical machines
</span><br>
<span class="quotelev1">&gt;   c) - 1 physical machine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   a) and c) have exactly the same physical computational resources despite
</span><br>
<span class="quotelev1">&gt; the fact that a) is being virtualized and the processors are oversubscribed
</span><br>
<span class="quotelev1">&gt; (2 virtual cores per physical core). I'm not an expert on virtualization,
</span><br>
<span class="quotelev1">&gt; but since a) and c) are exactly the same hardware (in terms of core and
</span><br>
<span class="quotelev1">&gt; memory hierarchy), and your application seems memory bounded, I'd expect to
</span><br>
<span class="quotelev1">&gt; see what you tabulated and b) is faster because you have 8 times the memory
</span><br>
<span class="quotelev1">&gt; cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; PS Your name in the mail is different, maybe you'd like to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 22/07/15 10:42, Crisitan RUIZ wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your answer Harald
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually I was already using TAU before but it seems that it is not
</span><br>
<span class="quotelev2">&gt;&gt; maintained any more and there are problems when instrumenting
</span><br>
<span class="quotelev2">&gt;&gt; applications with the version 1.8.5 of OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was using the OpenMPI 1.6.5 before to test the execution of HPC
</span><br>
<span class="quotelev2">&gt;&gt; application on Linux containers. I tested the performance of NAS
</span><br>
<span class="quotelev2">&gt;&gt; benchmarks in three different configurations:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - 8 Linux containers on the same machine configured with 2 cores
</span><br>
<span class="quotelev2">&gt;&gt; - 8 physical machines
</span><br>
<span class="quotelev2">&gt;&gt; - 1 physical machine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, as I already described it, each machine counts with 2 processors (8
</span><br>
<span class="quotelev2">&gt;&gt; cores each). I instrumented and run all NAS benchmark in these three
</span><br>
<span class="quotelev2">&gt;&gt; configurations and I got the results that I attached in this email.
</span><br>
<span class="quotelev2">&gt;&gt; In the table &quot;native&quot; corresponds to using 8 physical machines and &quot;SM&quot;
</span><br>
<span class="quotelev2">&gt;&gt; corresponds to 1 physical machine using the sm module, time is given in
</span><br>
<span class="quotelev2">&gt;&gt; miliseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What surprise me in the results is that using containers in the worse
</span><br>
<span class="quotelev2">&gt;&gt; case have equal communication time than just using plain mpi processes.
</span><br>
<span class="quotelev2">&gt;&gt; Even though the containers use virtual network interfaces to communicate
</span><br>
<span class="quotelev2">&gt;&gt; between them. Probably this behaviour is due to process binding and
</span><br>
<span class="quotelev2">&gt;&gt; locality, I wanted to redo the test using OpenMPI version 1.8.5 but
</span><br>
<span class="quotelev2">&gt;&gt; unfourtunately I couldn't sucessfully instrument the applications. I was
</span><br>
<span class="quotelev2">&gt;&gt; looking for another MPI profiler but I couldn't find any. HPCToolkit
</span><br>
<span class="quotelev2">&gt;&gt; looks like it is not maintain anymore, Vampir does not maintain any more
</span><br>
<span class="quotelev2">&gt;&gt; the tool that instrument the application.  I will probably give a try to
</span><br>
<span class="quotelev2">&gt;&gt; Paraver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cristian Ruiz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/22/2015 09:44 AM, Harald Servat wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cristian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   you might observe super-speedup heres because in 8 nodes you have 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; times the cache you have in only 1 node. You can also validate that by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for cache miss activity using the tools that I mentioned in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my other email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 22/07/15 09:42, Crisitan RUIZ wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, I've just discovered that I was using the wrong command to run on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 machines. I have to get rid of the &quot;-np 8&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, I corrected the command and I used:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --machinefile machine_mpi_bug.txt --mca btl self,sm,tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And got these results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 cores:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mop/s total     =                 19368.43
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mop/s total     =                 96094.35
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why is the performance of mult-node almost 4 times better than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multi-core? Is this normal behavior?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 07/22/2015 09:19 AM, Crisitan RUIZ wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm running OpenMPI 1.8.5 on a cluster with the following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; characteristics:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Each node is equipped with two Intel Xeon E5-2630v3 processors (with 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I run the NAS benchmarks using 8 cores in the same machine, I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; getting almost the same performance as using 8 machines running a mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process per machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I used the following commands:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for running multi-node:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 8 --machinefile machine_file.txt --mca btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for running in with 8 cores:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 8  --mca btl self,sm,tcp --allow-run-as-root mg.C.8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I got the following results:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8 cores:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Mop/s total     =                 19368.43
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8 machines:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mop/s total     =                 19326.60
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The results are similar for other benchmarks. Is this behavior normal?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was expecting to see a better behavior using 8 cores given that they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use directly the memory to communicate.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cristian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27295.php">http://www.open-mpi.org/community/lists/users/2015/07/27295.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27297.php">http://www.open-mpi.org/community/lists/users/2015/07/27297.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27298.php">http://www.open-mpi.org/community/lists/users/2015/07/27298.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27300.php">http://www.open-mpi.org/community/lists/users/2015/07/27300.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27320.php">http://www.open-mpi.org/community/lists/users/2015/07/27320.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27322.php">Lane, William: "[OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27320.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>In reply to:</strong> <a href="27320.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27299.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory performance"</a>
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
