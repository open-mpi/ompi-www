<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 09:10:01 2014" -->
<!-- isoreceived="20140508131001" -->
<!-- sent="Thu, 8 May 2014 09:10:00 -0400" -->
<!-- isosent="20140508131000" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="CAG4F6z-UArjqjBb=Pnws7d4Dw3gZ-9zNH9OOYeNcoFja5rCN=A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="146586E3640BBF4D9507B00739F551A60B1F0955_at_PRDEXMBX-02.the-lab.llnl.gov" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 09:10:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14753.php">Ashley Pittman: "[OMPI devel] VPATH builds broken?"</a>
<li><strong>In reply to:</strong> <a href="14714.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Adam
<br>
<p>We (MLNX) are working on a new SLURM PMI2 plugin that we plan to eventually
<br>
push upstream. However, to use it, it will require linking in a proprietary
<br>
Mellanox library that accelerates the collective operations (available in
<br>
MOFED versions 2.1 and higher.)  Similar in spirit to the MXM MTL or FCA
<br>
COLL components in OMPI.
<br>
<p>Best,
<br>
<p>Josh
<br>
<p><p>On Wed, May 7, 2014 at 11:45 AM, Moody, Adam T. &lt;moody20_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Josh,
</span><br>
<span class="quotelev1">&gt; Are your changes to OMPI or SLURM's PMI2 implementation?  Do you plan to
</span><br>
<span class="quotelev1">&gt; push those changes back upstream?
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* devel [devel-bounces_at_[hidden]] on behalf of Joshua Ladd [
</span><br>
<span class="quotelev1">&gt; jladd.mlnx_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, May 07, 2014 7:56 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is
</span><br>
<span class="quotelev1">&gt; specifically requested
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Ah, I see. Sorry for the reactionary comment - but this feature falls
</span><br>
<span class="quotelev1">&gt; squarely within my &quot;jurisdiction&quot;, and we've invested a lot in improving
</span><br>
<span class="quotelev1">&gt; OMPI jobstart under srun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said (now that I've taken some deep breaths and carefully read
</span><br>
<span class="quotelev1">&gt; your original email :)), what you're proposing isn't a bad idea. I think it
</span><br>
<span class="quotelev1">&gt; would be good to maybe add a &quot;--with-pmi2&quot; flag to configure since
</span><br>
<span class="quotelev1">&gt; &quot;--with-pmi&quot; automagically uses PMI2 if it finds the header and lib. This
</span><br>
<span class="quotelev1">&gt; way, we could experiment with PMI1/PMI2 without having to rebuild SLURM or
</span><br>
<span class="quotelev1">&gt; hack the installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 7, 2014 at 10:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, then we'll just have to develop a workaround for all those Slurm
</span><br>
<span class="quotelev2">&gt;&gt; releases where PMI-2 is borked :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  FWIW: I think people misunderstood my statement. I specifically did
</span><br>
<span class="quotelev2">&gt;&gt; *not* propose to *lose* PMI-2 support. I suggested that we change it to
</span><br>
<span class="quotelev2">&gt;&gt; &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot; so we wouldn't keep
</span><br>
<span class="quotelev2">&gt;&gt; getting asked about PMI-2 bugs in Slurm. Once the Slurm implementation
</span><br>
<span class="quotelev2">&gt;&gt; stabilized, then we could reverse that policy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  However, given that both you and Chris appear to prefer to keep it
</span><br>
<span class="quotelev2">&gt;&gt; &quot;on-by-default&quot;, we'll see if we can find a way to detect that PMI-2 is
</span><br>
<span class="quotelev2">&gt;&gt; broken and then fall back to PMI-1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   On May 7, 2014, at 7:39 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Just saw this thread, and I second Chris' observations: at scale we
</span><br>
<span class="quotelev2">&gt;&gt; are seeing huge gains in jobstart performance with PMI2 over PMI1. We
</span><br>
<span class="quotelev2">&gt;&gt; *CANNOT* loose this functionality. For competitive reasons, I cannot
</span><br>
<span class="quotelev2">&gt;&gt; provide exact numbers, but let's say the difference is in the ballpark of a
</span><br>
<span class="quotelev2">&gt;&gt; full order-of-magnitude on 20K ranks versus PMI1. PMI1 is completely
</span><br>
<span class="quotelev2">&gt;&gt; unacceptable/unusable at scale. Certainly PMI2 still has scaling issues,
</span><br>
<span class="quotelev2">&gt;&gt; but there is no contest between PMI1 and PMI2.  We (MLNX) are actively
</span><br>
<span class="quotelev2">&gt;&gt; working to resolve some of the scalability issues in PMI2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Joshua S. Ladd
</span><br>
<span class="quotelev2">&gt;&gt;  Staff Engineer, HPC Software
</span><br>
<span class="quotelev2">&gt;&gt;  Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Email: joshual_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 7, 2014 at 4:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting - how many nodes were involved? As I said, the bad scaling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; becomes more evident at a fairly high node count.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2014, at 12:07 AM, Christopher Samuel &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hiya Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On 07/05/14 14:49, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I should have looked closer to see the numbers you posted, Chris -
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; those include time for MPI wireup. So what you are seeing is that
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mpirun is much more efficient at exchanging the MPI endpoint info
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; than PMI. I suspect that PMI2 is not much better as the primary
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; reason for the difference is that mpriun sends blobs, while PMI
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; requires that everything be encoded into strings and sent in little
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pieces.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hence, mpirun can exchange the endpoint info (the dreaded &quot;modex&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; operation) much faster, and MPI_Init completes faster. Rest of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; computation should be the same, so long compute apps will see the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; difference narrow considerably.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Unfortunately it looks like I had an enthusiastic cleanup at some point
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; and so I cannot find the out files from those runs at the moment, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I did find some comparisons from around that time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This first pair are comparing running NAMD with OMPI 1.7.3a1r29103
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; run with mpirun and srun successively from inside the same Slurm job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun namd2 macpf.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; srun --mpi=pmi2 namd2 macpf.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Firstly the mpirun output (grep'ing the interesting bits):
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0959179 s/step 0.555081 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1055.19 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0929002 s/step 0.537617 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1055.19 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0727373 s/step 0.420933 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1055.19 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0779532 s/step 0.451118 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1055.19 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0785246 s/step 0.454425 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1055.19 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WallClock: 1403.388550  CPUTime: 1403.388550  Memory: 1119.085938 MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Now the srun output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0906865 s/step 0.524806 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1036.75 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0874809 s/step 0.506255 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1036.75 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0746328 s/step 0.431903 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1036.75 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0726161 s/step 0.420232 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1036.75 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 512 CPUs 0.0710574 s/step 0.411212 days/ns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1036.75 MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WallClock: 1230.784424  CPUTime: 1230.784424  Memory: 1100.648438 MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The next two pairs are first launched using mpirun from 1.6.x and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with srun
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; from 1.7.3a1r29103.  Again each pair inside the same Slurm job with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same inputs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; First pair mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.410424 s/step 2.37514 days/ns 909.57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.392106 s/step 2.26913 days/ns 909.57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.313136 s/step 1.81213 days/ns 909.57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.316792 s/step 1.83329 days/ns 909.57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.313867 s/step 1.81636 days/ns 909.57
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WallClock: 8341.524414  CPUTime: 8341.524414  Memory: 975.015625 MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; First pair srun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.341967 s/step 1.97897 days/ns 903.883
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.339644 s/step 1.96553 days/ns 903.883
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.284424 s/step 1.64597 days/ns 903.883
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.28115 s/step 1.62702 days/ns 903.883
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.279536 s/step 1.61769 days/ns 903.883
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WallClock: 7476.643555  CPUTime: 7476.643555  Memory: 968.867188 MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Second pair mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.366327 s/step 2.11995 days/ns 939.527
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.359805 s/step 2.0822 days/ns 939.527
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.292342 s/step 1.69179 days/ns 939.527
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.293499 s/step 1.69849 days/ns 939.527
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.292355 s/step 1.69187 days/ns 939.527
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WallClock: 7842.831543  CPUTime: 7842.831543  Memory: 1004.050781 MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Second pair srun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Charm++&gt; Running on MPI version: 2.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.347864 s/step 2.0131 days/ns 904.91 MB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.346367 s/step 2.00444 days/ns 904.91
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.29007 s/step 1.67865 days/ns 904.91 MB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.279447 s/step 1.61717 days/ns 904.91
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Info: Benchmark time: 64 CPUs 0.280824 s/step 1.62514 days/ns 904.91
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MB memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; WallClock: 7522.677246  CPUTime: 7522.677246  Memory: 969.433594 MB
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; So to me it looks like (for NAMD on our system at least) that
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; PMI2 does seem to give better scalability.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; All the best!
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; - --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; iEYEARECAAYFAlNp28UACgkQO2KABBYQAh8hagCfewbbxUR6grg5R40GrwjtIZV0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1KYAn2uX0yKLdOEbkHARKouzwFilaTTD
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; =A/Yw
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14697.php">http://www.open-mpi.org/community/lists/devel/2014/05/14697.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14698.php">http://www.open-mpi.org/community/lists/devel/2014/05/14698.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14707.php">http://www.open-mpi.org/community/lists/devel/2014/05/14707.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14708.php">http://www.open-mpi.org/community/lists/devel/2014/05/14708.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14714.php">http://www.open-mpi.org/community/lists/devel/2014/05/14714.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14754/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14753.php">Ashley Pittman: "[OMPI devel] VPATH builds broken?"</a>
<li><strong>In reply to:</strong> <a href="14714.php">Moody, Adam T.: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14755.php">Chris Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
