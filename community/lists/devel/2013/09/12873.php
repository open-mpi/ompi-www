<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 02:16:25 2013" -->
<!-- isoreceived="20130906061625" -->
<!-- sent="Fri, 06 Sep 2013 16:15:52 +1000" -->
<!-- isosent="20130906061552" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun" -->
<!-- id="52297318.1010706_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5229569E.6030405_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2013-09-06 02:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12874.php">Alex Margolin: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12872.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12872.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 06/09/13 14:14, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; However, modifying the test program confirms that variable is getting
</span><br>
<span class="quotelev1">&gt; propagated as expected with both mpirun and srun for 1.6.5 and the 1.7
</span><br>
<span class="quotelev1">&gt; snapshot. :-(
</span><br>
<p>Investigating further by setting:
<br>
<p>export OMPI_MCA_orte_report_bindings=1
<br>
export SLURM_CPU_BIND=core
<br>
export SLURM_CPU_BIND_VERBOSE=verbose
<br>
<p>reveals that only OMPI 1.6.5 with mpirun reports bindings being set
<br>
(see below).   We cannot understand why Slurm doesn't *appear* to be
<br>
setting bindings as we have the correct settings according to the
<br>
documentation.
<br>
<p>Whilst it may explain the difference between 1.6.5 mpirun and srun
<br>
it doesn't to explain why the 1.7 snapshot is so much better as you'd
<br>
expect them to be hurt in the same way.
<br>
<p><p>======================OPENMPI 1.6.5======================
<br>
======================mpirun======================
<br>
[barcoo003:03633] System has detected external process binding to cores 0001
<br>
[barcoo003:03633] MCW rank 0 bound to socket 0[core 0]: [B]
<br>
[barcoo004:04504] MCW rank 1 bound to socket 0[core 0]: [B]
<br>
Hello, World, I am 0 of 2 on host barcoo003 from app number 0 universe size 2 universe envar 2
<br>
Hello, World, I am 1 of 2 on host barcoo004 from app number 0 universe size 2 universe envar 2
<br>
======================srun======================
<br>
Hello, World, I am 0 of 2 on host barcoo003 from app number 1 universe size 2 universe envar NULL
<br>
Hello, World, I am 1 of 2 on host barcoo004 from app number 1 universe size 2 universe envar NULL
<br>
=========================================================
<br>
======================OPENMPI 1.7.3======================
<br>
DANGER: YOU ARE LOADING A TEST VERSION OF OPENMPI. THIS MAY BE BAD.
<br>
======================mpirun======================
<br>
Hello, World, I am 0 of 2 on host barcoo003 from app number 0 universe size 2 universe envar 2
<br>
Hello, World, I am 1 of 2 on host barcoo004 from app number 0 universe size 2 universe envar 2
<br>
======================srun======================
<br>
Hello, World, I am 0 of 2 on host barcoo003 from app number 0 universe size 2 universe envar NULL
<br>
Hello, World, I am 1 of 2 on host barcoo004 from app number 0 universe size 2 universe envar NULL
<br>
=========================================================
<br>
<p><p><p>- -- 
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
<p>iEYEARECAAYFAlIpcxcACgkQO2KABBYQAh/wdQCfR4q7DfGqJVSU0O3BmgXqAn8w
<br>
HsEAn3po0xaxB0+ywejWgSjQ385da7Pa
<br>
=T3w4
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12874.php">Alex Margolin: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="12872.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12872.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
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
