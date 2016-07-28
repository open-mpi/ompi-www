<?
$subject_val = "Re: [OMPI users] Ensuring use of real cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 13:07:46 2012" -->
<!-- isoreceived="20120912170746" -->
<!-- sent="Wed, 12 Sep 2012 10:07:37 -0700" -->
<!-- isosent="20120912170737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ensuring use of real cores" -->
<!-- id="57EA43FE-F70B-4B72-8CAF-6658F626D256_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="32BF66B1-AF45-46BE-A1FE-8645FF0BA2AE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ensuring use of real cores<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 13:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20205.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20203.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20197.php">Jeff Squyres: "Re: [OMPI users] Ensuring use of real cores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, we've dug a bit and talked a lot :-)
<br>
<p>If you want to do this with the default mapping system, just add &quot;--use-hwthreads-cpus&quot; so we use the hwthreads as independent processors. Otherwise, you can only bind down to the core level since we aren't treating the HTs inside each core as separate entities.
<br>
<p><p>On Sep 12, 2012, at 6:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A little more on this (since affinity is one of my favorite topics of late :-) ).  See my blog entries about what we just did in the 1.7 branch (and SVN trunk):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/taking-mpi-process-affinity-to-the-next-level/">http://blogs.cisco.com/performance/taking-mpi-process-affinity-to-the-next-level/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/process-affinity-in-ompi-v1-7-part-1/">http://blogs.cisco.com/performance/process-affinity-in-ompi-v1-7-part-1/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/process-affinity-in-ompi-v1-7-part-2/">http://blogs.cisco.com/performance/process-affinity-in-ompi-v1-7-part-2/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Ralph said, the v1.6 series will allow you to bind processes to the entire core (i.e., all hyperthreads in a core), or to an entire socket (i.e., all hyperthreads in a socket).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The v1.7 series will be quite a bit more flexible in its affinity options (note that the &quot;Expert&quot; mode described in my blog posting will be coming in v1.7.1 -- if you want to try that now, you'll need to use the SVN trunk).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings --map-by core --bind-to hwthread ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should give you the pattern you want.  Note that it looks like we have a bug in this pattern at the moment, however -- you'll need to use the SVN trunk and the &quot;lama&quot; mapper to get the patterns you want.  The following example is running on a sandy bridge server with 2 sockets, each with 8 cores, each with 2 hyperthreads:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One hyperthread per core:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % mpirun --mca rmaps lama -np 4 --host svbu-mpi058 --report-bindings --map-by core --bind-to hwthread uptime
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23916] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B./../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23916] MCW rank 1 bound to socket 0[core 1[hwt 0]]: [../B./../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23916] MCW rank 2 bound to socket 0[core 2[hwt 0]]: [../../B./../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23916] MCW rank 3 bound to socket 0[core 3[hwt 0]]: [../../../B./../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; 06:48:51 up 1 day, 12:08,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 06:48:51 up 1 day, 12:08,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 06:48:51 up 1 day, 12:08,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 06:48:51 up 1 day, 12:08,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both hyperthreads per core:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % mpirun --mca rmaps lama -np 4 --host svbu-mpi058 --report-bindings --map-by core --bind-to core uptime
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23951] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23951] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23951] MCW rank 2 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi058:23951] MCW rank 3 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; 06:48:57 up 1 day, 12:09,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 06:48:57 up 1 day, 12:09,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 06:48:57 up 1 day, 12:09,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 06:48:57 up 1 day, 12:09,  0 users,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2012, at 8:10 AM, John R. Cary wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; John
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 9/12/12 8:05 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 12, 2012, at 4:57 AM, &quot;John R. Cary&quot; &lt;cary_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do want in fact to bind first to one HT of each core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before binding to two HTs of one core.  So that will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be possible in 1.7?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes - you can get a copy of the 1.7 nightly tarball and experiment with it in advance, if you like. You'll want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --map-by core --bind-to hwthread ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add --report-bindings to see what happens, but I believe that will do what you want. You'll map one process to each core, and bind it to only the first hwthread on that core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know either way - if it doesn't, we have time to adjust it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thx....John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 9/11/12 11:19 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not entirely sure I know what you mean. If you are talking about running without specifying binding, then it makes no difference - we'll run wherever the OS puts us, so you would need to tell the OS not to use the virtual cores (i.e., disable HT).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you are talking about binding, then pre-1.7 releases all bind to core at the lowest level. On a hyperthread-enabled machine, that binds you to both HT's of a core. Starting with the upcoming 1.7 release, you can bind to the separate HTs, but that doesn't sound like something you want to do.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 11, 2012, at 6:34 PM, John R. Cary &lt;cary_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Our code gets little benefit from using virtual cores (hyperthreading),
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so when we run with mpiexec on an 8 real plus 8 virtual machine, we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; would like to be certain that it uses only the 8 real cores.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there a way to do this with openmpi?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thx....John
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20205.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20203.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20197.php">Jeff Squyres: "Re: [OMPI users] Ensuring use of real cores"</a>
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
