<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 03:07:53 2014" -->
<!-- isoreceived="20140507070753" -->
<!-- sent="Wed, 07 May 2014 17:07:49 +1000" -->
<!-- isosent="20140507070749" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="5369DBC5.3090201_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28E55084-FE7C-4064-BF65-2B4E89B1DD88_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 03:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14696.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14696.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14713.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hiya Ralph,
<br>
<p>On 07/05/14 14:49, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I should have looked closer to see the numbers you posted, Chris -
</span><br>
<span class="quotelev1">&gt; those include time for MPI wireup. So what you are seeing is that
</span><br>
<span class="quotelev1">&gt; mpirun is much more efficient at exchanging the MPI endpoint info
</span><br>
<span class="quotelev1">&gt; than PMI. I suspect that PMI2 is not much better as the primary
</span><br>
<span class="quotelev1">&gt; reason for the difference is that mpriun sends blobs, while PMI
</span><br>
<span class="quotelev1">&gt; requires that everything be encoded into strings and sent in little
</span><br>
<span class="quotelev1">&gt; pieces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, mpirun can exchange the endpoint info (the dreaded &quot;modex&quot;
</span><br>
<span class="quotelev1">&gt; operation) much faster, and MPI_Init completes faster. Rest of the
</span><br>
<span class="quotelev1">&gt; computation should be the same, so long compute apps will see the
</span><br>
<span class="quotelev1">&gt; difference narrow considerably.
</span><br>
<p>Unfortunately it looks like I had an enthusiastic cleanup at some point
<br>
and so I cannot find the out files from those runs at the moment, but
<br>
I did find some comparisons from around that time.
<br>
<p>This first pair are comparing running NAMD with OMPI 1.7.3a1r29103
<br>
run with mpirun and srun successively from inside the same Slurm job.
<br>
<p>mpirun namd2 macpf.conf 
<br>
srun --mpi=pmi2 namd2 macpf.conf 
<br>
<p>Firstly the mpirun output (grep'ing the interesting bits):
<br>
<p>Charm++&gt; Running on MPI version: 2.1
<br>
Info: Benchmark time: 512 CPUs 0.0959179 s/step 0.555081 days/ns 1055.19 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0929002 s/step 0.537617 days/ns 1055.19 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0727373 s/step 0.420933 days/ns 1055.19 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0779532 s/step 0.451118 days/ns 1055.19 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0785246 s/step 0.454425 days/ns 1055.19 MB memory
<br>
WallClock: 1403.388550  CPUTime: 1403.388550  Memory: 1119.085938 MB
<br>
<p>Now the srun output:
<br>
<p>Charm++&gt; Running on MPI version: 2.1
<br>
Info: Benchmark time: 512 CPUs 0.0906865 s/step 0.524806 days/ns 1036.75 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0874809 s/step 0.506255 days/ns 1036.75 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0746328 s/step 0.431903 days/ns 1036.75 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0726161 s/step 0.420232 days/ns 1036.75 MB memory
<br>
Info: Benchmark time: 512 CPUs 0.0710574 s/step 0.411212 days/ns 1036.75 MB memory
<br>
WallClock: 1230.784424  CPUTime: 1230.784424  Memory: 1100.648438 MB
<br>
<p><p>The next two pairs are first launched using mpirun from 1.6.x and then with srun
<br>
from 1.7.3a1r29103.  Again each pair inside the same Slurm job with the same inputs.
<br>
<p>First pair mpirun:
<br>
<p>Charm++&gt; Running on MPI version: 2.1
<br>
Info: Benchmark time: 64 CPUs 0.410424 s/step 2.37514 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.392106 s/step 2.26913 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.313136 s/step 1.81213 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.316792 s/step 1.83329 days/ns 909.57 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.313867 s/step 1.81636 days/ns 909.57 MB memory
<br>
WallClock: 8341.524414  CPUTime: 8341.524414  Memory: 975.015625 MB
<br>
<p>First pair srun:
<br>
<p>Charm++&gt; Running on MPI version: 2.1
<br>
Info: Benchmark time: 64 CPUs 0.341967 s/step 1.97897 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.339644 s/step 1.96553 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.284424 s/step 1.64597 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.28115 s/step 1.62702 days/ns 903.883 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.279536 s/step 1.61769 days/ns 903.883 MB memory
<br>
WallClock: 7476.643555  CPUTime: 7476.643555  Memory: 968.867188 MB
<br>
<p><p>Second pair mpirun:
<br>
<p>Charm++&gt; Running on MPI version: 2.1
<br>
Info: Benchmark time: 64 CPUs 0.366327 s/step 2.11995 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.359805 s/step 2.0822 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.292342 s/step 1.69179 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.293499 s/step 1.69849 days/ns 939.527 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.292355 s/step 1.69187 days/ns 939.527 MB memory
<br>
WallClock: 7842.831543  CPUTime: 7842.831543  Memory: 1004.050781 MB
<br>
<p>Second pair srun:
<br>
<p>Charm++&gt; Running on MPI version: 2.1
<br>
Info: Benchmark time: 64 CPUs 0.347864 s/step 2.0131 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.346367 s/step 2.00444 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.29007 s/step 1.67865 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.279447 s/step 1.61717 days/ns 904.91 MB memory
<br>
Info: Benchmark time: 64 CPUs 0.280824 s/step 1.62514 days/ns 904.91 MB memory
<br>
WallClock: 7522.677246  CPUTime: 7522.677246  Memory: 969.433594 MB
<br>
<p><p>So to me it looks like (for NAMD on our system at least) that
<br>
PMI2 does seem to give better scalability.
<br>
<p>All the best!
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
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlNp28UACgkQO2KABBYQAh8hagCfewbbxUR6grg5R40GrwjtIZV0
<br>
1KYAn2uX0yKLdOEbkHARKouzwFilaTTD
<br>
=A/Yw
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14696.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14696.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14713.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
