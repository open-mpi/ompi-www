<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 21:13:57 2013" -->
<!-- isoreceived="20130904011357" -->
<!-- sent="Wed, 04 Sep 2013 11:13:41 +1000" -->
<!-- isosent="20130904011341" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="52268945.9010602_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A81E44CD-D312-4A39-9EC2-E18997D1C349_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-09-03 21:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12855.php">Ralph Castain: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>In reply to:</strong> <a href="12840.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12858.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12858.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 03/09/13 10:56, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yeah - --with-pmi=&lt;path-to-pmi.h&gt;
</span><br>
<p>Actually I found that just --with-pmi=/usr/local/slurm/latest worked. :-)
<br>
<p>I've got some initial numbers for 64 cores, as I mentioned the system
<br>
I found this on initially is so busy at the moment I won't be able to
<br>
run anything bigger for a while, so I'm going to move my testing to
<br>
another system which is a bit quieter, but slower (it's Nehalem vs
<br>
SandyBridge).
<br>
<p>All the below tests are with the same NAMD 2.9 binary and within the
<br>
same Slurm job so it runs on the same cores each time. It's nice to
<br>
find that C code at least seems to be backwardly compatible!
<br>
<p>64 cores over 18 nodes:
<br>
<p>Open-MPI 1.6.5 with mpirun - 7842 seconds
<br>
Open-MPI 1.7.3a1r29103 with srun - 7522 seconds
<br>
<p>so that's about a 4% speedup.
<br>
<p>64 cores over 10 nodes:
<br>
<p>Open-MPI 1.7.3a1r29103 with mpirun - 8341 seconds
<br>
Open-MPI 1.7.3a1r29103 with srun - 7476 seconds
<br>
<p>So that's about 11% faster, and the mpirun speed has decreased though
<br>
of course that's built using PMI so perhaps that's the cause?
<br>
<p>cheers,
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
<p>iEUEARECAAYFAlImiUUACgkQO2KABBYQAh+WvwCeM1ufCWvK627oz8aBbgKjfONe
<br>
cDEAmM3w+/EJ0unbmaetNR3ay4U6nrM=
<br>
=v/PT
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12855.php">Ralph Castain: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>In reply to:</strong> <a href="12840.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12858.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Reply:</strong> <a href="12858.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
