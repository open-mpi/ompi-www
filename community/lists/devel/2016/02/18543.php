<?
$subject_val = "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 21:54:15 2016" -->
<!-- isoreceived="20160204025415" -->
<!-- sent="Thu, 4 Feb 2016 02:54:11 +0000" -->
<!-- isosent="20160204025411" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32" -->
<!-- id="F6FCBD7B-7371-4541-B376-BB6287DDD3E9_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 21:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18544.php">dpchoudh .: "[OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18542.php">Cabral, Matias A: "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18550.php">Joshua Ladd: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Reply:</strong> <a href="18550.php">Joshua Ladd: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Decrease default value of mpi_add_procs_cutoff from 1024 to 32
<br>
<p>WHY: The &quot;partial add procs&quot; behavior is supposed to be a key feature of v2.0.0
<br>
<p>WHERE: ompi/mpi/runtime/ompi_mpi_params.c
<br>
<p>TIMEOUT: Next Tuesday teleconf (9 Feb 2016)
<br>
<p>MORE DETAIL:
<br>
<p>The mpi_add_procs_cutoff MCA param controls the crossover to when we start doing &quot;partial&quot; add_procs() behavior (i.e., don't just pml.add_procs(ALL_PROCS) during MPI_INIT).  Currently, this value defaults to 1024, meaning that we don't get the &quot;partial add_procs&quot; behavior until you run 1025 processes.
<br>
<p>Does anyone have an issue with reducing this value to a lower value?  I picked 32 somewhat arbitrarily.  See the PR for master:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/1340">https://github.com/open-mpi/ompi/pull/1340</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18544.php">dpchoudh .: "[OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Previous message:</strong> <a href="18542.php">Cabral, Matias A: "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18550.php">Joshua Ladd: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Reply:</strong> <a href="18550.php">Joshua Ladd: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
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
