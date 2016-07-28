<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 22:15:43 2013" -->
<!-- isoreceived="20130905021543" -->
<!-- sent="Thu, 05 Sep 2013 12:15:38 +1000" -->
<!-- isosent="20130905021538" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="5227E94A.3090909_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="85CC2F05-8E3E-4705-A6DC-6983F9A5705F_at_icl.utk.edu" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 22:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12868.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12866.php">Kawashima, Takahiro: "[OMPI devel] [bugs] OSC-related datatype bugs"</a>
<li><strong>In reply to:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12868.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12868.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 04/09/13 18:33, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; You can confirm that the slowdown happen during the MPI
</span><br>
<span class="quotelev1">&gt; initialization stages by profiling the application (especially the
</span><br>
<span class="quotelev1">&gt; MPI_Init call).
</span><br>
<p>NAMD helpfully prints benchmark and timing numbers during the initial
<br>
part of the simulation, so here's what they say.  For both seconds
<br>
per step and days per nanosecond of simulation less is better.
<br>
<p>I've included the benchmark numbers (every 100 steps or so from the
<br>
start) and the final timing number after 25000 steps.  It looks like
<br>
to me (as a sysadmin and not an MD person) that the final timing
<br>
number includes CPU time in seconds per step and wallclock time in
<br>
seconds per step.
<br>
<p>64 cores over 10 nodes:
<br>
<p>OMPI 1.7.3a1r29103 mpirun
<br>
<p>Info: Benchmark time: 64 CPUs 0.410424 s/step 2.37514 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.392106 s/step 2.26913 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.313136 s/step 1.81213 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.316792 s/step 1.83329 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.313867 s/step 1.81636 days/ns 909.57 MB memory
<br>
<p>TIMING: 25000  CPU: 8247.2, 0.330157/step  Wall: 8247.2, 0.330157/step, 0.0229276 hours remaining, 921.894531 MB of memory in use.
<br>
<p>OMPI 1.7.3a1r29103 srun
<br>
<p>Info: Benchmark time: 64 CPUs 0.341967 s/step 1.97897 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.339644 s/step 1.96553 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.284424 s/step 1.64597 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.28115 s/step 1.62702 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.279536 s/step 1.61769 days/ns 903.883 MB memory
<br>
<p>TIMING: 25000  CPU: 7390.15, 0.296/step  Wall: 7390.15, 0.296/step, 0.0205555 hours remaining, 915.746094 MB of memory in use.
<br>
<p><p>64 cores over 18 nodes:
<br>
<p>OMPI 1.6.5 mpirun
<br>
<p>Info: Benchmark time: 64 CPUs 0.366327 s/step 2.11995 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.359805 s/step 2.0822 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.292342 s/step 1.69179 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.293499 s/step 1.69849 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.292355 s/step 1.69187 days/ns 939.527 MB memory
<br>
<p>TIMING: 25000  CPU: 7754.17, 0.312071/step  Wall: 7754.17, 0.312071/step, 0.0216716 hours remaining, 950.929688 MB of memory in use.
<br>
<p>OMPI 1.7.3a1r29103 srun
<br>
<p>Info: Benchmark time: 64 CPUs 0.347864 s/step 2.0131 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.346367 s/step 2.00444 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.29007 s/step 1.67865 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.279447 s/step 1.61717 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.280824 s/step 1.62514 days/ns 904.91 MB memory
<br>
<p>TIMING: 25000  CPU: 7420.91, 0.296029/step  Wall: 7420.91, 0.296029/step, 0.0205575 hours remaining, 916.312500 MB of memory in use.
<br>
<p><p>Hope this is useful!
<br>
<p>All the best,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlIn6UoACgkQO2KABBYQAh9GWgCghcYKSj1i9rDDQospURAeusD5
<br>
E+EAn2beqUlYZWHxi1Dgj8ZEpiai4zH1
<br>
=k5Uz
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12868.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12866.php">Kawashima, Takahiro: "[OMPI devel] [bugs] OSC-related datatype bugs"</a>
<li><strong>In reply to:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12868.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12868.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
