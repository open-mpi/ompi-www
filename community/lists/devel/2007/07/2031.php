<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 10:31:16 2007" -->
<!-- isoreceived="20070727143116" -->
<!-- sent="Fri, 27 Jul 2007 10:31:10 -0400" -->
<!-- isosent="20070727143110" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="8837B615-97C5-424D-A6BB-0E641039DE8A_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2CF4446.36D6%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 10:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2030.php">Andrew Lofthouse: "[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>In reply to:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not about the app. It's about the MPI standard. With one mpirun  
<br>
you start one MPI application (SPMD or MPMD but still only one). The  
<br>
first impact of this, is all processes started with one mpirun  
<br>
command will belong to the same MPI_COMM_WORLD.
<br>
<p>Our mpirun is in fact equivalent to the mpiexec as defined in the MPI  
<br>
standard. Therefore, we cannot change it's behavior, outside the MPI  
<br>
2 standard boundaries.
<br>
<p>Moreover, both of the approaches you described will only add corner  
<br>
cases, which I rather prefer to limit in number.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 27, 2007, at 8:42 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/26/07 4:22 PM, &quot;Aurelien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -hostfile big_pool -n 10 -host 1,2,3,4 application : -n 2 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 99,100 ft_server
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will not work: this is a way to launch MIMD jobs, that share the
</span><br>
<span class="quotelev2">&gt;&gt; same COMM_WORLD. Not the way to launch two different applications  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; interact trough Accept/Connect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Direct consequence on simple NAS benchmarks are:
</span><br>
<span class="quotelev2">&gt;&gt; * if the second command does not use MPI-Init, then the first
</span><br>
<span class="quotelev2">&gt;&gt; application locks forever in MPI-Init
</span><br>
<span class="quotelev2">&gt;&gt; * if both use MPI init, the MPI_Comm_size of the jobs are incorrect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt; bouteill_at_dancer:~$ ompi-build/debug/bin/mpirun -prefix
</span><br>
<span class="quotelev2">&gt;&gt; /home/bouteill/ompi-build/debug/ -np 4 -host  
</span><br>
<span class="quotelev2">&gt;&gt; node01,node02,node03,node04
</span><br>
<span class="quotelev2">&gt;&gt; NPB3.2-MPI/bin/lu.A.4 : -np 1 -host node01 NPB3.2-MPI/bin/mg.A.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  NAS Parallel Benchmarks 3.2 -- LU Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Warning: program is running on  5 processors
</span><br>
<span class="quotelev2">&gt;&gt;      but was compiled for   4
</span><br>
<span class="quotelev2">&gt;&gt;  Size:  64x 64x 64
</span><br>
<span class="quotelev2">&gt;&gt;  Iterations: 250
</span><br>
<span class="quotelev2">&gt;&gt;  Number of processes:     5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay - of course, I can't possibly have any idea how your application
</span><br>
<span class="quotelev1">&gt; works... ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it would be trivial to simply add two options to the  
</span><br>
<span class="quotelev1">&gt; app_context
</span><br>
<span class="quotelev1">&gt; command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. designates that this app_context is to be launched as a separate  
</span><br>
<span class="quotelev1">&gt; job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. indicates that this app_context is to be &quot;connected&quot; ala connect/ 
</span><br>
<span class="quotelev1">&gt; accept
</span><br>
<span class="quotelev1">&gt; to the other app_contexts (if you want, we could even take an argument
</span><br>
<span class="quotelev1">&gt; indicating which app_contexts it is to be connected to). Or we  
</span><br>
<span class="quotelev1">&gt; could reverse
</span><br>
<span class="quotelev1">&gt; this as indicate we want it to be disconnected - all depends upon what
</span><br>
<span class="quotelev1">&gt; default people want to define.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would solve the problem you describe while still allowing us  
</span><br>
<span class="quotelev1">&gt; to avoid
</span><br>
<span class="quotelev1">&gt; allocation confusion. I'll send it out separately as an RFC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2030.php">Andrew Lofthouse: "[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>In reply to:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
