<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 12:42:32 2013" -->
<!-- isoreceived="20130830164232" -->
<!-- sent="Fri, 30 Aug 2013 09:42:29 -0700" -->
<!-- isosent="20130830164229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="F94A549B-98E7-48C7-B6CD-DE82E4C2E48B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A220005FE_at_MTIDAG01.mtl.com" -->
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
<strong>Date:</strong> 2013-08-30 12:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12830.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12828.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base orte/mca/rmaps/mindist"</a>
<li><strong>In reply to:</strong> <a href="12717.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12836.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12836.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12839.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris et al
<br>
<p>We did some work on the OMPI side and removed the O(N) calls to &quot;get&quot;, so it should behave better now. If you get the chance, please try the 1.7.3 nightly tarball. We hope to officially release it soon.
<br>
<p>Ralph
<br>
<p><p>On Aug 14, 2013, at 10:27 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delayed response. After much effort, the Open MPI 1.7 branch now supports PMI2 (in general, not just for ALPS) and has been tested and evaluated at small-ish scale (up to 512 ranks) with SLURM 2.6. We need to test this at larger scale and plan to do so in the coming weeks, but what we have observed thus far is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. KVS Fence operation appears to scale worse than linear. This issue resides solely on the SLURM side. Perhaps a better algorithm could be implemented - we have discussed recursive doubling and Bruck's as alternatives.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. There are still O(N) calls to PMI2_get at the OMPI/ORTE level that don't appear to scale particularly well. Circumventing this remains an open challenge, though proposals have been tossed around such as having a single node leader get all the data from KVS space, put it into a shared segment where the other ranks on host can read from. Unfortunately, this is still O(N), just with a reduced coefficient. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. We observed launch times take longer with SLURM 2.6 than they did with the 2.5.X series. However, anecdotally, scaling appears to be improved. From our (Mellanox's) point of view, getting something that doesn't &quot;blow-up&quot; quadratically as N goes to 4K ranks and beyond is more important than the absolute performance in launching any one job size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From the data that I have seen, it appears that simply switching to SLURM 2.6 (along with the latest OMPI 1.7) will most likely not provide comparable performance to launching with mpirun. I'll be sure to keep you and the community appraised of the situation as more data on larger systems becomes available in the coming weeks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Christopher Samuel
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 08, 2013 12:26 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Joshua,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23/07/13 19:34, Joshua Ladd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The proposed solution that &quot;we&quot; (OMPI + SLURM) have come up with is to 
</span><br>
<span class="quotelev2">&gt;&gt; modify OMPI to support PMI2 and to use SLURM 2.6 which has support for 
</span><br>
<span class="quotelev2">&gt;&gt; PMI2 and is (allegedly) much more scalable than PMI1.
</span><br>
<span class="quotelev2">&gt;&gt; Several folks in the combined communities are working hard, as we 
</span><br>
<span class="quotelev2">&gt;&gt; speak, trying to get this functional to see if it indeed makes a 
</span><br>
<span class="quotelev2">&gt;&gt; difference. Stay tuned, Chris. Hopefully we will have some data by the 
</span><br>
<span class="quotelev2">&gt;&gt; end of the week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any news on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'd love to be able to test this out if we can as I currently see a 60% penalty with srun with my test NAMD job from our tame MM person.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks!
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
<span class="quotelev1">&gt; iEYEARECAAYFAlIDHbQACgkQO2KABBYQAh8vjgCgjPFB354t8dldPEA3pw2IHHze
</span><br>
<span class="quotelev1">&gt; vB4Ani5vfK+9+BkbRF92FGhtB4eyIF1u
</span><br>
<span class="quotelev1">&gt; =KoTt
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
<li><strong>Next message:</strong> <a href="12830.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12828.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base orte/mca/rmaps/mindist"</a>
<li><strong>In reply to:</strong> <a href="12717.php">Joshua Ladd: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12836.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12836.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12839.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
