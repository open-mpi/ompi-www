<?
$subject_val = "Re: [OMPI users] pinning processes by default";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 09:32:48 2014" -->
<!-- isoreceived="20140523133248" -->
<!-- sent="Fri, 23 May 2014 06:32:44 -0700" -->
<!-- isosent="20140523133244" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pinning processes by default" -->
<!-- id="CE1415C9-99E5-4F02-93E2-6EE4E5B95133_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8894DDD4-2E86-4F80-B3D8-B6DDA80EFAA8_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] pinning processes by default<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 09:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24460.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24463.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Reply:</strong> <a href="24463.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that the lama mapper described in those slides may not work as it hasn't been maintained in a while. However, you can use the map-by and bind-to options to do the same things.
<br>
<p>If you want to disable binding, you can do so by adding &quot;--bind-to none&quot; to the cmd line, or via the MCA param &quot;hwloc_base_binding_policy=none&quot;
<br>
<p>If you want to bind your process to multiple cores (say one per thread), then you can use &quot;--map-by core:pe=N&quot;. Many hybrid users prefer to bind to a socket, with one process for each socket - that can be done with &quot;--map-by socket --bind-to socket&quot;. This keeps all the threads in the same NUMA domain. If you aren't sure that each socket is its own NUMA domain, you can alternatively &quot;--map-by numa --bind-to numa&quot; - that'll keep you in your own NUMA domain regardless of whether that's at the socket level or elsewhere.
<br>
<p>I'm working on adding a full description of the mapping/binding system to our web site.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On May 23, 2014, at 6:22 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Albert,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually doing affinity correctly for hybrid got easier in OpenMPI 1.7 and newer,  In the past you had to make a lot of assumptions, stride by node etc,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now you can define a layout:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/eurompi13-cisco-slides-open-mpi-process-affinity-user-interface/">http://blogs.cisco.com/performance/eurompi13-cisco-slides-open-mpi-process-affinity-user-interface/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 23, 2014, at 9:19 AM, Albert Solernou &lt;albert.solernou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; after compiling and installing OpenMPI 1.8.1, I find that OpenMPI is pinning processes onto cores. Although this may be
</span><br>
<span class="quotelev2">&gt;&gt; desirable on some cases, it is a complete disaster when runnning hybrid OpenMP-MPI applications. Therefore, I want to disable this behaviour, but don't know how.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I configured OpenMPI with:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt;        --prefix=$OPENMPI_HOME \
</span><br>
<span class="quotelev2">&gt;&gt;        --with-psm \
</span><br>
<span class="quotelev2">&gt;&gt;        --with-tm=/system/software/arcus/lib/PBS/11.3.0.121723 \
</span><br>
<span class="quotelev2">&gt;&gt;        --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;        --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and:
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info | grep paffinity
</span><br>
<span class="quotelev2">&gt;&gt; does not report anything. However,
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --report-bindings ./wrk
</span><br>
<span class="quotelev2">&gt;&gt; reports bindings:
</span><br>
<span class="quotelev2">&gt;&gt; [login3:04574] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [login3:04574] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; but they cannot be disabled as:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --bind-to-none ./wrk
</span><br>
<span class="quotelev2">&gt;&gt; returns:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: Error: unknown option &quot;--bind-to-none&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea on what went wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Albert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Albert Solernou
</span><br>
<span class="quotelev2">&gt;&gt; Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oxford Supercomputing Centre,
</span><br>
<span class="quotelev2">&gt;&gt; University of Oxford
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +44 (0)1865 610631
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
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
<li><strong>Next message:</strong> <a href="24460.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24463.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Reply:</strong> <a href="24463.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
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
