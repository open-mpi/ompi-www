<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 13:27:10 2013" -->
<!-- isoreceived="20130814172710" -->
<!-- sent="Wed, 14 Aug 2013 17:27:05 +0000" -->
<!-- isosent="20130814172705" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A220005FE_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52031DB4.5050806_at_unimelb.edu.au" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 13:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12718.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>In reply to:</strong> <a href="12709.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12829.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12829.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Chris
<br>
<p>Sorry for the delayed response. After much effort, the Open MPI 1.7 branch now supports PMI2 (in general, not just for ALPS) and has been tested and evaluated at small-ish scale (up to 512 ranks) with SLURM 2.6. We need to test this at larger scale and plan to do so in the coming weeks, but what we have observed thus far is the following:
<br>
<p>1. KVS Fence operation appears to scale worse than linear. This issue resides solely on the SLURM side. Perhaps a better algorithm could be implemented - we have discussed recursive doubling and Bruck's as alternatives.  
<br>
<p>2. There are still O(N) calls to PMI2_get at the OMPI/ORTE level that don't appear to scale particularly well. Circumventing this remains an open challenge, though proposals have been tossed around such as having a single node leader get all the data from KVS space, put it into a shared segment where the other ranks on host can read from. Unfortunately, this is still O(N), just with a reduced coefficient. 
<br>
<p>3. We observed launch times take longer with SLURM 2.6 than they did with the 2.5.X series. However, anecdotally, scaling appears to be improved. From our (Mellanox's) point of view, getting something that doesn't &quot;blow-up&quot; quadratically as N goes to 4K ranks and beyond is more important than the absolute performance in launching any one job size.
<br>
<p><span class="quotelev1">&gt;From the data that I have seen, it appears that simply switching to SLURM 2.6 (along with the latest OMPI 1.7) will most likely not provide comparable performance to launching with mpirun. I'll be sure to keep you and the community appraised of the situation as more data on larger systems becomes available in the coming weeks. 
</span><br>
<p><p>Best regards,
<br>
<p>Josh
<br>
<p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies 
<br>
<p>Email: joshual_at_[hidden]
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Christopher Samuel
<br>
Sent: Thursday, August 08, 2013 12:26 AM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun
<br>
<p>-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi Joshua,
<br>
<p>On 23/07/13 19:34, Joshua Ladd wrote:
<br>
<p><span class="quotelev1">&gt; The proposed solution that &quot;we&quot; (OMPI + SLURM) have come up with is to 
</span><br>
<span class="quotelev1">&gt; modify OMPI to support PMI2 and to use SLURM 2.6 which has support for 
</span><br>
<span class="quotelev1">&gt; PMI2 and is (allegedly) much more scalable than PMI1.
</span><br>
<span class="quotelev1">&gt; Several folks in the combined communities are working hard, as we 
</span><br>
<span class="quotelev1">&gt; speak, trying to get this functional to see if it indeed makes a 
</span><br>
<span class="quotelev1">&gt; difference. Stay tuned, Chris. Hopefully we will have some data by the 
</span><br>
<span class="quotelev1">&gt; end of the week.
</span><br>
<p>Is there any news on this?
<br>
<p>We'd love to be able to test this out if we can as I currently see a 60% penalty with srun with my test NAMD job from our tame MM person.
<br>
<p>thanks!
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
<p>iEYEARECAAYFAlIDHbQACgkQO2KABBYQAh8vjgCgjPFB354t8dldPEA3pw2IHHze
<br>
vB4Ani5vfK+9+BkbRF92FGhtB4eyIF1u
<br>
=KoTt
<br>
-----END PGP SIGNATURE-----
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12718.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>In reply to:</strong> <a href="12709.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12829.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12829.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
