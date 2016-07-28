<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 19:42:55 2013" -->
<!-- isoreceived="20130723234255" -->
<!-- sent="Tue, 23 Jul 2013 16:42:47 -0700" -->
<!-- isosent="20130723234247" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="3F2B0B44-5CED-44CC-8FC7-3529E7D3A363_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51EF1192.5010203_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2013-07-23 19:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12682.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12682.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12682.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not to 1.6 series, but it is in the about-to-be-released 1.7.3, and will be there from that point onwards. Still waiting to see if it resolves the difference.
<br>
<p><p>On Jul 23, 2013, at 4:28 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23/07/13 19:34, Joshua Ladd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Joshua,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've quoted you in full as I don't think your message made it through
</span><br>
<span class="quotelev1">&gt; to the slurm-dev list (at least I've not received it from there yet).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Funny you should mention this now. We identified and diagnosed the 
</span><br>
<span class="quotelev2">&gt;&gt; issue some time ago as a combination of SLURM's PMI1
</span><br>
<span class="quotelev2">&gt;&gt; implementation and some of, what I'll call, OMPI's topology
</span><br>
<span class="quotelev2">&gt;&gt; requirements (probably not the right word.) Here's what is
</span><br>
<span class="quotelev2">&gt;&gt; happening, in a nutshell, when you launch with srun:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Each process pushes his endpoint data up to the PMI &quot;cloud&quot; via
</span><br>
<span class="quotelev2">&gt;&gt; PMI put (I think it's about five or six puts, bottom line, O(1).) 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Then executes a PMI commit and PMI barrier to ensure all other 
</span><br>
<span class="quotelev2">&gt;&gt; processes have finished committing their data to the &quot;cloud&quot;. 3.
</span><br>
<span class="quotelev2">&gt;&gt; Subsequent to this, each process executes O(N) (N is the number of 
</span><br>
<span class="quotelev2">&gt;&gt; procs in the job) PMI gets in order to get all of the endpoint
</span><br>
<span class="quotelev2">&gt;&gt; data for every process regardless of whether or not the process 
</span><br>
<span class="quotelev2">&gt;&gt; communicates with that endpoint.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We&quot; (MLNX et al.) undertook an in-depth scaling study of this and 
</span><br>
<span class="quotelev2">&gt;&gt; identified several poorly scaling pieces with the worst offenders 
</span><br>
<span class="quotelev2">&gt;&gt; being:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. PMI Barrier scales worse than linear. 2. At scale, the PMI get
</span><br>
<span class="quotelev2">&gt;&gt; phase starts to look quadratic.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The proposed solution that &quot;we&quot; (OMPI + SLURM) have come up with is
</span><br>
<span class="quotelev2">&gt;&gt; to modify OMPI to support PMI2 and to use SLURM 2.6 which has
</span><br>
<span class="quotelev2">&gt;&gt; support for PMI2 and is (allegedly) much more scalable than PMI1.
</span><br>
<span class="quotelev2">&gt;&gt; Several folks in the combined communities are working hard, as we
</span><br>
<span class="quotelev2">&gt;&gt; speak, trying to get this functional to see if it indeed makes a
</span><br>
<span class="quotelev2">&gt;&gt; difference. Stay tuned, Chris. Hopefully we will have some data by
</span><br>
<span class="quotelev2">&gt;&gt; the end of the week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wonderful, great to know that what we're seeing is actually real and
</span><br>
<span class="quotelev1">&gt; not just pilot error on our part!   We're happy enough to tell users
</span><br>
<span class="quotelev1">&gt; to keep on using mpirun as they will be used to from our other Intel
</span><br>
<span class="quotelev1">&gt; systems and to only use srun if the code requires it (one or two
</span><br>
<span class="quotelev1">&gt; commercial apps that use Intel MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I ask, if the PMI2 ideas work out is that likely to get backported
</span><br>
<span class="quotelev1">&gt; to OMPI 1.6.x ?
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
<span class="quotelev1">&gt; iEYEARECAAYFAlHvEZIACgkQO2KABBYQAh9QogCeMuR/E4oPivdsX3r671+z7EWd
</span><br>
<span class="quotelev1">&gt; Hv8An1N8csHMby7bouT/gC07i/J2PW+i
</span><br>
<span class="quotelev1">&gt; =gZsB
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12682.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12680.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12682.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12682.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
