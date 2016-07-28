<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 22:50:06 2013" -->
<!-- isoreceived="20130905025006" -->
<!-- sent="Wed, 4 Sep 2013 19:50:02 -0700" -->
<!-- isosent="20130905025002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="5F8DFCAC-5E4A-4DBF-9FF4-0E275BBE1789_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5227E94A.3090909_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 22:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I were looking at a similar issue today and suddenly realized that the mappings were different - i.e., what ranks are on what nodes differs depending on how you launch. You might want to check if that's the issue here as well. Just launch the attached program using mpirun vs srun and check to see if the maps are the same or not.
<br>
<p>Ralph
<br>
<p>

<br><p>
<p><p>On Sep 4, 2013, at 7:15 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/09/13 18:33, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can confirm that the slowdown happen during the MPI
</span><br>
<span class="quotelev2">&gt;&gt; initialization stages by profiling the application (especially the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init call).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NAMD helpfully prints benchmark and timing numbers during the initial
</span><br>
<span class="quotelev1">&gt; part of the simulation, so here's what they say.  For both seconds
</span><br>
<span class="quotelev1">&gt; per step and days per nanosecond of simulation less is better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've included the benchmark numbers (every 100 steps or so from the
</span><br>
<span class="quotelev1">&gt; start) and the final timing number after 25000 steps.  It looks like
</span><br>
<span class="quotelev1">&gt; to me (as a sysadmin and not an MD person) that the final timing
</span><br>
<span class="quotelev1">&gt; number includes CPU time in seconds per step and wallclock time in
</span><br>
<span class="quotelev1">&gt; seconds per step.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 64 cores over 10 nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI 1.7.3a1r29103 mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.410424 s/step 2.37514 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.392106 s/step 2.26913 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.313136 s/step 1.81213 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.316792 s/step 1.83329 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.313867 s/step 1.81636 days/ns 909.57 MB memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMING: 25000  CPU: 8247.2, 0.330157/step  Wall: 8247.2, 0.330157/step, 0.0229276 hours remaining, 921.894531 MB of memory in use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI 1.7.3a1r29103 srun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.341967 s/step 1.97897 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.339644 s/step 1.96553 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.284424 s/step 1.64597 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.28115 s/step 1.62702 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.279536 s/step 1.61769 days/ns 903.883 MB memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMING: 25000  CPU: 7390.15, 0.296/step  Wall: 7390.15, 0.296/step, 0.0205555 hours remaining, 915.746094 MB of memory in use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 64 cores over 18 nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI 1.6.5 mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.366327 s/step 2.11995 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.359805 s/step 2.0822 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.292342 s/step 1.69179 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.293499 s/step 1.69849 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.292355 s/step 1.69187 days/ns 939.527 MB memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMING: 25000  CPU: 7754.17, 0.312071/step  Wall: 7754.17, 0.312071/step, 0.0216716 hours remaining, 950.929688 MB of memory in use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI 1.7.3a1r29103 srun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.347864 s/step 2.0131 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.346367 s/step 2.00444 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.29007 s/step 1.67865 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.279447 s/step 1.61717 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; Info: Benchmark time: 64 CPUs 0.280824 s/step 1.62514 days/ns 904.91 MB memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMING: 25000  CPU: 7420.91, 0.296029/step  Wall: 7420.91, 0.296029/step, 0.0205575 hours remaining, 916.312500 MB of memory in use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this is useful!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlIn6UoACgkQO2KABBYQAh9GWgCghcYKSj1i9rDDQospURAeusD5
</span><br>
<span class="quotelev1">&gt; E+EAn2beqUlYZWHxi1Dgj8ZEpiai4zH1
</span><br>
<span class="quotelev1">&gt; =k5Uz
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12868/hello_nodename.c">hello_nodename.c</a>
</ul>
<!-- attachment="hello_nodename.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12869.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
