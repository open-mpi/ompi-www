<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 11:42:32 2014" -->
<!-- isoreceived="20140507154232" -->
<!-- sent="Wed, 7 May 2014 15:42:30 +0000" -->
<!-- isosent="20140507154230" -->
<!-- name="Moody, Adam T." -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="146586E3640BBF4D9507B00739F551A60B1F093C_at_PRDEXMBX-02.the-lab.llnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5369DBC5.3090201_at_unimelb.edu.au" -->
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
<strong>From:</strong> Moody, Adam T. (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 11:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14714.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14712.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Chris.
-Adam
________________________________________
From: devel [devel-bounces_at_[hidden]] on behalf of Christopher Samuel [samuel_at_[hidden]]
Sent: Wednesday, May 07, 2014 12:07 AM
To: devel_at_[hidden]
Subject: Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested

-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1

Hiya Ralph,

On 07/05/14 14:49, Ralph Castain wrote:

&gt; I should have looked closer to see the numbers you posted, Chris -
&gt; those include time for MPI wireup. So what you are seeing is that
&gt; mpirun is much more efficient at exchanging the MPI endpoint info
&gt; than PMI. I suspect that PMI2 is not much better as the primary
&gt; reason for the difference is that mpriun sends blobs, while PMI
&gt; requires that everything be encoded into strings and sent in little
&gt; pieces.
&gt;
&gt; Hence, mpirun can exchange the endpoint info (the dreaded &quot;modex&quot;
&gt; operation) much faster, and MPI_Init completes faster. Rest of the
&gt; computation should be the same, so long compute apps will see the
&gt; difference narrow considerably.

Unfortunately it looks like I had an enthusiastic cleanup at some point
and so I cannot find the out files from those runs at the moment, but
I did find some comparisons from around that time.

This first pair are comparing running NAMD with OMPI 1.7.3a1r29103
run with mpirun and srun successively from inside the same Slurm job.

mpirun namd2 macpf.conf
srun --mpi=pmi2 namd2 macpf.conf

Firstly the mpirun output (grep'ing the interesting bits):

Charm++&gt; Running on MPI version: 2.1
Info: Benchmark time: 512 CPUs 0.0959179 s/step 0.555081 days/ns 1055.19 MB memory
Info: Benchmark time: 512 CPUs 0.0929002 s/step 0.537617 days/ns 1055.19 MB memory
Info: Benchmark time: 512 CPUs 0.0727373 s/step 0.420933 days/ns 1055.19 MB memory
Info: Benchmark time: 512 CPUs 0.0779532 s/step 0.451118 days/ns 1055.19 MB memory
Info: Benchmark time: 512 CPUs 0.0785246 s/step 0.454425 days/ns 1055.19 MB memory
WallClock: 1403.388550  CPUTime: 1403.388550  Memory: 1119.085938 MB

Now the srun output:

Charm++&gt; Running on MPI version: 2.1
Info: Benchmark time: 512 CPUs 0.0906865 s/step 0.524806 days/ns 1036.75 MB memory
Info: Benchmark time: 512 CPUs 0.0874809 s/step 0.506255 days/ns 1036.75 MB memory
Info: Benchmark time: 512 CPUs 0.0746328 s/step 0.431903 days/ns 1036.75 MB memory
Info: Benchmark time: 512 CPUs 0.0726161 s/step 0.420232 days/ns 1036.75 MB memory
Info: Benchmark time: 512 CPUs 0.0710574 s/step 0.411212 days/ns 1036.75 MB memory
WallClock: 1230.784424  CPUTime: 1230.784424  Memory: 1100.648438 MB


The next two pairs are first launched using mpirun from 1.6.x and then with srun
from 1.7.3a1r29103.  Again each pair inside the same Slurm job with the same inputs.

First pair mpirun:

Charm++&gt; Running on MPI version: 2.1
Info: Benchmark time: 64 CPUs 0.410424 s/step 2.37514 days/ns 909.57 MB memory
Info: Benchmark time: 64 CPUs 0.392106 s/step 2.26913 days/ns 909.57 MB memory
Info: Benchmark time: 64 CPUs 0.313136 s/step 1.81213 days/ns 909.57 MB memory
Info: Benchmark time: 64 CPUs 0.316792 s/step 1.83329 days/ns 909.57 MB memory
Info: Benchmark time: 64 CPUs 0.313867 s/step 1.81636 days/ns 909.57 MB memory
WallClock: 8341.524414  CPUTime: 8341.524414  Memory: 975.015625 MB

First pair srun:

Charm++&gt; Running on MPI version: 2.1
Info: Benchmark time: 64 CPUs 0.341967 s/step 1.97897 days/ns 903.883 MB memory
Info: Benchmark time: 64 CPUs 0.339644 s/step 1.96553 days/ns 903.883 MB memory
Info: Benchmark time: 64 CPUs 0.284424 s/step 1.64597 days/ns 903.883 MB memory
Info: Benchmark time: 64 CPUs 0.28115 s/step 1.62702 days/ns 903.883 MB memory
Info: Benchmark time: 64 CPUs 0.279536 s/step 1.61769 days/ns 903.883 MB memory
WallClock: 7476.643555  CPUTime: 7476.643555  Memory: 968.867188 MB


Second pair mpirun:

Charm++&gt; Running on MPI version: 2.1
Info: Benchmark time: 64 CPUs 0.366327 s/step 2.11995 days/ns 939.527 MB memory
Info: Benchmark time: 64 CPUs 0.359805 s/step 2.0822 days/ns 939.527 MB memory
Info: Benchmark time: 64 CPUs 0.292342 s/step 1.69179 days/ns 939.527 MB memory
Info: Benchmark time: 64 CPUs 0.293499 s/step 1.69849 days/ns 939.527 MB memory
Info: Benchmark time: 64 CPUs 0.292355 s/step 1.69187 days/ns 939.527 MB memory
WallClock: 7842.831543  CPUTime: 7842.831543  Memory: 1004.050781 MB

Second pair srun:

Charm++&gt; Running on MPI version: 2.1
Info: Benchmark time: 64 CPUs 0.347864 s/step 2.0131 days/ns 904.91 MB memory
Info: Benchmark time: 64 CPUs 0.346367 s/step 2.00444 days/ns 904.91 MB memory
Info: Benchmark time: 64 CPUs 0.29007 s/step 1.67865 days/ns 904.91 MB memory
Info: Benchmark time: 64 CPUs 0.279447 s/step 1.61717 days/ns 904.91 MB memory
Info: Benchmark time: 64 CPUs 0.280824 s/step 1.62514 days/ns 904.91 MB memory
WallClock: 7522.677246  CPUTime: 7522.677246  Memory: 969.433594 MB


So to me it looks like (for NAMD on our system at least) that
PMI2 does seem to give better scalability.

All the best!
Chris
- --
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>

-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.14 (GNU/Linux)
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>

iEYEARECAAYFAlNp28UACgkQO2KABBYQAh8hagCfewbbxUR6grg5R40GrwjtIZV0
1KYAn2uX0yKLdOEbkHARKouzwFilaTTD
=A/Yw
-----END PGP SIGNATURE-----
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14697.php">http://www.open-mpi.org/community/lists/devel/2014/05/14697.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14714.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14712.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14697.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
