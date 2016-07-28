<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 09:15:04 2013" -->
<!-- isoreceived="20130904131504" -->
<!-- sent="Wed, 4 Sep 2013 06:15:01 -0700" -->
<!-- isosent="20130904131501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="747A2594-1FAF-4A0D-8369-C91B4A23B78F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 09:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>In reply to:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is 1.7.3 - there is no comm thread in ORTE in that version.
<br>
<p>On Sep 4, 2013, at 1:33 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You can confirm that the slowdown happen during the MPI initialization stages by profiling the application (especially the MPI_Init call).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another possible cause of slowdown might be the communication thread in the ORTE. If it remains active outside the initialization it will definitively disturb the application, by taking away critical resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2013, at 05:59 , Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/09/13 11:29, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your code is obviously doing something much more than just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launching and wiring up, so it is difficult to assess the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference in speed between 1.6.5 and 1.7.3 - my guess is that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has to do with changes in the MPI transport layer and nothing to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with PMI or not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm testing with what would be our most used application in aggregate
</span><br>
<span class="quotelev2">&gt;&gt; across our systems, the NAMD molecular dynamics code from here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.ks.uiuc.edu/Research/namd/">http://www.ks.uiuc.edu/Research/namd/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so yes,  you're quite right, it's doing a lot more than that and has a
</span><br>
<span class="quotelev2">&gt;&gt; reputation for being a *very* chatty MPI code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For comparison whilst users see GROMACS also suffer with srun under
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5 they don't see anything like the slow down that NAMD gets.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All the best,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; - -- 
</span><br>
<span class="quotelev2">&gt;&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAlImsCwACgkQO2KABBYQAh8c4wCfQlOd6ZL68tncAd1h3Fyb1hAr
</span><br>
<span class="quotelev2">&gt;&gt; DicAn06seL8GzYPGtGImnYkb7sYd5op9
</span><br>
<span class="quotelev2">&gt;&gt; =pkwZ
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12863.php">George Bosilca: "Re: [OMPI devel] MPI_Is_thread_main() with provided=MPI_THREAD_SERIALIZED"</a>
<li><strong>In reply to:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun"</a>
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
