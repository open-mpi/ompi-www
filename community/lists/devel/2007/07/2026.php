<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 08:42:32 2007" -->
<!-- isoreceived="20070727124232" -->
<!-- sent="Fri, 27 Jul 2007 06:42:14 -0600" -->
<!-- isosent="20070727124214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="C2CF4446.36D6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A91E8F.8040409_at_cs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 08:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2027.php">Ralph Castain: "[OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2025.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<li><strong>In reply to:</strong> <a href="2023.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/26/07 4:22 PM, &quot;Aurelien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; mpirun -hostfile big_pool -n 10 -host 1,2,3,4 application : -n 2 -host
</span><br>
<span class="quotelev2">&gt;&gt; 99,100 ft_server
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will not work: this is a way to launch MIMD jobs, that share the
</span><br>
<span class="quotelev1">&gt; same COMM_WORLD. Not the way to launch two different applications that
</span><br>
<span class="quotelev1">&gt; interact trough Accept/Connect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Direct consequence on simple NAS benchmarks are:
</span><br>
<span class="quotelev1">&gt; * if the second command does not use MPI-Init, then the first
</span><br>
<span class="quotelev1">&gt; application locks forever in MPI-Init
</span><br>
<span class="quotelev1">&gt; * if both use MPI init, the MPI_Comm_size of the jobs are incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; bouteill_at_dancer:~$ ompi-build/debug/bin/mpirun -prefix
</span><br>
<span class="quotelev1">&gt; /home/bouteill/ompi-build/debug/ -np 4 -host node01,node02,node03,node04
</span><br>
<span class="quotelev1">&gt; NPB3.2-MPI/bin/lu.A.4 : -np 1 -host node01 NPB3.2-MPI/bin/mg.A.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  NAS Parallel Benchmarks 3.2 -- LU Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Warning: program is running on  5 processors
</span><br>
<span class="quotelev1">&gt;      but was compiled for   4
</span><br>
<span class="quotelev1">&gt;  Size:  64x 64x 64
</span><br>
<span class="quotelev1">&gt;  Iterations: 250
</span><br>
<span class="quotelev1">&gt;  Number of processes:     5
</span><br>
<p>Okay - of course, I can't possibly have any idea how your application
<br>
works... ;-)
<br>
<p>However, it would be trivial to simply add two options to the app_context
<br>
command line:
<br>
<p>1. designates that this app_context is to be launched as a separate job
<br>
<p>2. indicates that this app_context is to be &quot;connected&quot; ala connect/accept
<br>
to the other app_contexts (if you want, we could even take an argument
<br>
indicating which app_contexts it is to be connected to). Or we could reverse
<br>
this as indicate we want it to be disconnected - all depends upon what
<br>
default people want to define.
<br>
<p>This would solve the problem you describe while still allowing us to avoid
<br>
allocation confusion. I'll send it out separately as an RFC.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2027.php">Ralph Castain: "[OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2025.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<li><strong>In reply to:</strong> <a href="2023.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
