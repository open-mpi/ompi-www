<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 11:31:11 2007" -->
<!-- isoreceived="20070727153111" -->
<!-- sent="Fri, 27 Jul 2007 11:31:03 -0400" -->
<!-- isosent="20070727153103" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="C58F152E-DFC8-4E97-8E4C-269404747620_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2CF6677.36FB%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-27 11:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2035.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<li><strong>Previous message:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You were limpid. What we're trying to say here, it's that the  
<br>
solution you described few emails ago, doesn't work. At least it  
<br>
doesn't work for what we want to do (i.e. what Aurelien described in  
<br>
his first email). We [really] need 2 separate MPI worlds, that we  
<br>
will connect at a later moment, and not one larger MPI world.
<br>
<p>Allow me to reiterate on what we are looking for. We want to save  
<br>
some information (related to fault tolerance but this might be  
<br>
ignored here), on another MPI application. The user will start his/ 
<br>
her MPI application in exactly the same way as before plus 2 new mca  
<br>
arguments. One for enabling the message logging approach and one for  
<br>
the connect/accept port info. Once our internal framework is  
<br>
initialized in the user application, it will connect to the spare MPI  
<br>
application (let's call it storage application) (launched by the user  
<br>
on some specific nodes that have better capabilities as Aurelien  
<br>
described in his initial email). Now the user application and the  
<br>
storage one will be able to communicate via MPI, and therefore  
<br>
getting the best performance out of the available networks. Once the  
<br>
user application successfully complete, the storage application can  
<br>
disappear (or not, we will take what's available in Open MPI at that  
<br>
time).
<br>
<p>This approach is not a corner case. It's a completely valid approach  
<br>
as described in the MPI-2 standard. However, as usual the MPI  
<br>
standard is not very clear on how to manage the connection  
<br>
information, so this is the big unknown here.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 27, 2007, at 11:08 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Guess I was unclear, George - I don't know enough about Aurelien's  
</span><br>
<span class="quotelev1">&gt; app to
</span><br>
<span class="quotelev1">&gt; know if it is capable of (or trying to) run as one job, or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What has been described on this thread to-date is, in fact, a  
</span><br>
<span class="quotelev1">&gt; corner case.
</span><br>
<span class="quotelev1">&gt; Hence the proposal of another way to possibly address a corner case  
</span><br>
<span class="quotelev1">&gt; without
</span><br>
<span class="quotelev1">&gt; disrupting the normal code operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May not be possible, per the other more general thread....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/27/07 8:31 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's not about the app. It's about the MPI standard. With one mpirun
</span><br>
<span class="quotelev2">&gt;&gt; you start one MPI application (SPMD or MPMD but still only one). The
</span><br>
<span class="quotelev2">&gt;&gt; first impact of this, is all processes started with one mpirun
</span><br>
<span class="quotelev2">&gt;&gt; command will belong to the same MPI_COMM_WORLD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our mpirun is in fact equivalent to the mpiexec as defined in the MPI
</span><br>
<span class="quotelev2">&gt;&gt; standard. Therefore, we cannot change it's behavior, outside the MPI
</span><br>
<span class="quotelev2">&gt;&gt; 2 standard boundaries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, both of the approaches you described will only add corner
</span><br>
<span class="quotelev2">&gt;&gt; cases, which I rather prefer to limit in number.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 27, 2007, at 8:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/26/07 4:22 PM, &quot;Aurelien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -hostfile big_pool -n 10 -host 1,2,3,4 application : -n 2 -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 99,100 ft_server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will not work: this is a way to launch MIMD jobs, that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; share the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same COMM_WORLD. Not the way to launch two different applications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interact trough Accept/Connect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Direct consequence on simple NAS benchmarks are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * if the second command does not use MPI-Init, then the first
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application locks forever in MPI-Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * if both use MPI init, the MPI_Comm_size of the jobs are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incorrect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bouteill_at_dancer:~$ ompi-build/debug/bin/mpirun -prefix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/bouteill/ompi-build/debug/ -np 4 -host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node01,node02,node03,node04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NPB3.2-MPI/bin/lu.A.4 : -np 1 -host node01 NPB3.2-MPI/bin/mg.A.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  NAS Parallel Benchmarks 3.2 -- LU Benchmark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Warning: program is running on  5 processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      but was compiled for   4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Size:  64x 64x 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Iterations: 250
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Number of processes:     5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay - of course, I can't possibly have any idea how your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works... ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it would be trivial to simply add two options to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. designates that this app_context is to be launched as a separate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. indicates that this app_context is to be &quot;connected&quot; ala connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the other app_contexts (if you want, we could even take an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicating which app_contexts it is to be connected to). Or we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could reverse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this as indicate we want it to be disconnected - all depends upon  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default people want to define.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would solve the problem you describe while still allowing us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to avoid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation confusion. I'll send it out separately as an RFC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2035.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<li><strong>Previous message:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
