<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 19:28:25 2013" -->
<!-- isoreceived="20130723232825" -->
<!-- sent="Wed, 24 Jul 2013 09:28:18 +1000" -->
<!-- isosent="20130723232818" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="51EF1192.5010203_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A21FEFCC9_at_MTIDAG01.mtl.com" -->
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
<strong>Date:</strong> 2013-07-23 19:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12681.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12679.php">Joshua Ladd: "[OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12681.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12681.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 23/07/13 19:34, Joshua Ladd wrote:
<br>
<p><span class="quotelev1">&gt; Hi, Chris
</span><br>
<p>Hi Joshua,
<br>
<p>I've quoted you in full as I don't think your message made it through
<br>
to the slurm-dev list (at least I've not received it from there yet).
<br>
<p><span class="quotelev1">&gt; Funny you should mention this now. We identified and diagnosed the 
</span><br>
<span class="quotelev1">&gt; issue some time ago as a combination of SLURM's PMI1
</span><br>
<span class="quotelev1">&gt; implementation and some of, what I'll call, OMPI's topology
</span><br>
<span class="quotelev1">&gt; requirements (probably not the right word.) Here's what is
</span><br>
<span class="quotelev1">&gt; happening, in a nutshell, when you launch with srun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Each process pushes his endpoint data up to the PMI &quot;cloud&quot; via
</span><br>
<span class="quotelev1">&gt; PMI put (I think it's about five or six puts, bottom line, O(1).) 
</span><br>
<span class="quotelev1">&gt; 2. Then executes a PMI commit and PMI barrier to ensure all other 
</span><br>
<span class="quotelev1">&gt; processes have finished committing their data to the &quot;cloud&quot;. 3.
</span><br>
<span class="quotelev1">&gt; Subsequent to this, each process executes O(N) (N is the number of 
</span><br>
<span class="quotelev1">&gt; procs in the job) PMI gets in order to get all of the endpoint
</span><br>
<span class="quotelev1">&gt; data for every process regardless of whether or not the process 
</span><br>
<span class="quotelev1">&gt; communicates with that endpoint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;We&quot; (MLNX et al.) undertook an in-depth scaling study of this and 
</span><br>
<span class="quotelev1">&gt; identified several poorly scaling pieces with the worst offenders 
</span><br>
<span class="quotelev1">&gt; being:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. PMI Barrier scales worse than linear. 2. At scale, the PMI get
</span><br>
<span class="quotelev1">&gt; phase starts to look quadratic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proposed solution that &quot;we&quot; (OMPI + SLURM) have come up with is
</span><br>
<span class="quotelev1">&gt; to modify OMPI to support PMI2 and to use SLURM 2.6 which has
</span><br>
<span class="quotelev1">&gt; support for PMI2 and is (allegedly) much more scalable than PMI1.
</span><br>
<span class="quotelev1">&gt; Several folks in the combined communities are working hard, as we
</span><br>
<span class="quotelev1">&gt; speak, trying to get this functional to see if it indeed makes a
</span><br>
<span class="quotelev1">&gt; difference. Stay tuned, Chris. Hopefully we will have some data by
</span><br>
<span class="quotelev1">&gt; the end of the week.
</span><br>
<p>Wonderful, great to know that what we're seeing is actually real and
<br>
not just pilot error on our part!   We're happy enough to tell users
<br>
to keep on using mpirun as they will be used to from our other Intel
<br>
systems and to only use srun if the code requires it (one or two
<br>
commercial apps that use Intel MPI).
<br>
<p>Can I ask, if the PMI2 ideas work out is that likely to get backported
<br>
to OMPI 1.6.x ?
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
<p>iEYEARECAAYFAlHvEZIACgkQO2KABBYQAh9QogCeMuR/E4oPivdsX3r671+z7EWd
<br>
Hv8An1N8csHMby7bouT/gC07i/J2PW+i
<br>
=gZsB
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12681.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12679.php">Joshua Ladd: "[OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12676.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12681.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12681.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
