<?
$subject_val = "Re: [OMPI users] pinning processes by default";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 09:22:54 2014" -->
<!-- isoreceived="20140523132254" -->
<!-- sent="Fri, 23 May 2014 09:22:47 -0400" -->
<!-- isosent="20140523132247" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pinning processes by default" -->
<!-- id="8894DDD4-2E86-4F80-B3D8-B6DDA80EFAA8_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="537F4ACC.2040705_at_oerc.ox.ac.uk" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 09:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24457.php">Albert Solernou: "[OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24457.php">Albert Solernou: "[OMPI users] pinning processes by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Reply:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Albert,
<br>
<p>Actually doing affinity correctly for hybrid got easier in OpenMPI 1.7 and newer,  In the past you had to make a lot of assumptions, stride by node etc,
<br>
<p>Now you can define a layout:
<br>
<p><a href="http://blogs.cisco.com/performance/eurompi13-cisco-slides-open-mpi-process-affinity-user-interface/">http://blogs.cisco.com/performance/eurompi13-cisco-slides-open-mpi-process-affinity-user-interface/</a>
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 23, 2014, at 9:19 AM, Albert Solernou &lt;albert.solernou_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; after compiling and installing OpenMPI 1.8.1, I find that OpenMPI is pinning processes onto cores. Although this may be
</span><br>
<span class="quotelev1">&gt; desirable on some cases, it is a complete disaster when runnning hybrid OpenMP-MPI applications. Therefore, I want to disable this behaviour, but don't know how.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured OpenMPI with:
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;         --prefix=$OPENMPI_HOME \
</span><br>
<span class="quotelev1">&gt;         --with-psm \
</span><br>
<span class="quotelev1">&gt;         --with-tm=/system/software/arcus/lib/PBS/11.3.0.121723 \
</span><br>
<span class="quotelev1">&gt;         --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;         --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and:
</span><br>
<span class="quotelev1">&gt; ompi_info | grep paffinity
</span><br>
<span class="quotelev1">&gt; does not report anything. However,
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --report-bindings ./wrk
</span><br>
<span class="quotelev1">&gt; reports bindings:
</span><br>
<span class="quotelev1">&gt; [login3:04574] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [login3:04574] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; but they cannot be disabled as:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --bind-to-none ./wrk
</span><br>
<span class="quotelev1">&gt; returns:
</span><br>
<span class="quotelev1">&gt; mpirun: Error: unknown option &quot;--bind-to-none&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea on what went wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Albert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;  Dr. Albert Solernou
</span><br>
<span class="quotelev1">&gt;  Research Associate
</span><br>
<span class="quotelev1">&gt;  Oxford Supercomputing Centre,
</span><br>
<span class="quotelev1">&gt;  University of Oxford
</span><br>
<span class="quotelev1">&gt;  Tel: +44 (0)1865 610631
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24458/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24457.php">Albert Solernou: "[OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24457.php">Albert Solernou: "[OMPI users] pinning processes by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Reply:</strong> <a href="24459.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
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
