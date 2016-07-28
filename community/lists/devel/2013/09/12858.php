<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 21:29:24 2013" -->
<!-- isoreceived="20130904012924" -->
<!-- sent="Tue, 3 Sep 2013 18:29:16 -0700" -->
<!-- isosent="20130904012916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="A7F7D349-ACBB-4DDF-8168-B7E8C25159B5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52268945.9010602_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2013-09-03 21:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12859.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12856.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12859.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12859.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your code is obviously doing something much more than just launching and wiring up, so it is difficult to assess the difference in speed between 1.6.5 and 1.7.3 - my guess is that it has to do with changes in the MPI transport layer and nothing to do with PMI or not.
<br>
<p>Likewise, I can't imagine any differences in wireup method accounting for the 500 seconds in execution time difference between the two versions when using the same launch method. I launch more than 10 nodes in far less time than that, so again I expect this has to do with something in the MPI layer.
<br>
<p>The real question is why you see so much difference between launching via mpirun vs srun. Like I said, the launch and wireup times on such small scales is negligible, so somehow you are winding up selecting different MPI transport options. You can test this by just running &quot;hello world&quot; instead - I'll bet the mpirun vs srun time differences are a second or two at most.
<br>
<p>Perhaps Jeff or someone else can suggest some debug flags you could use to understand these differences?
<br>
<p><p><p>On Sep 3, 2013, at 6:13 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/09/13 10:56, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah - --with-pmi=&lt;path-to-pmi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually I found that just --with-pmi=/usr/local/slurm/latest worked. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got some initial numbers for 64 cores, as I mentioned the system
</span><br>
<span class="quotelev1">&gt; I found this on initially is so busy at the moment I won't be able to
</span><br>
<span class="quotelev1">&gt; run anything bigger for a while, so I'm going to move my testing to
</span><br>
<span class="quotelev1">&gt; another system which is a bit quieter, but slower (it's Nehalem vs
</span><br>
<span class="quotelev1">&gt; SandyBridge).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the below tests are with the same NAMD 2.9 binary and within the
</span><br>
<span class="quotelev1">&gt; same Slurm job so it runs on the same cores each time. It's nice to
</span><br>
<span class="quotelev1">&gt; find that C code at least seems to be backwardly compatible!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 64 cores over 18 nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open-MPI 1.6.5 with mpirun - 7842 seconds
</span><br>
<span class="quotelev1">&gt; Open-MPI 1.7.3a1r29103 with srun - 7522 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so that's about a 4% speedup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 64 cores over 10 nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open-MPI 1.7.3a1r29103 with mpirun - 8341 seconds
</span><br>
<span class="quotelev1">&gt; Open-MPI 1.7.3a1r29103 with srun - 7476 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So that's about 11% faster, and the mpirun speed has decreased though
</span><br>
<span class="quotelev1">&gt; of course that's built using PMI so perhaps that's the cause?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
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
<span class="quotelev1">&gt; iEUEARECAAYFAlImiUUACgkQO2KABBYQAh+WvwCeM1ufCWvK627oz8aBbgKjfONe
</span><br>
<span class="quotelev1">&gt; cDEAmM3w+/EJ0unbmaetNR3ay4U6nrM=
</span><br>
<span class="quotelev1">&gt; =v/PT
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
<li><strong>Next message:</strong> <a href="12859.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12856.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12859.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12859.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
