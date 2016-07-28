<?
$subject_val = "[OMPI users] Question about checkpoint/restart protocol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 03:51:49 2009" -->
<!-- isoreceived="20091104085149" -->
<!-- sent="Wed, 4 Nov 2009 10:51:11 +0200" -->
<!-- isosent="20091104085111" -->
<!-- name="Mohamed Adel" -->
<!-- email="Mohamed.Adel_at_[hidden]" -->
<!-- subject="[OMPI users] Question about checkpoint/restart protocol" -->
<!-- id="00BA3BD8D13D7D4092596C9E6AECD9FE429F30DB9E_at_sexgw3k-h2040.local.bibalex.dom" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="00BA3BD8D13D7D4092596C9E6AECD9FE429F30DB9D_at_sexgw3k-h2040.local.bibalex.dom" -->
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
<strong>Subject:</strong> [OMPI users] Question about checkpoint/restart protocol<br>
<strong>From:</strong> Mohamed Adel (<em>Mohamed.Adel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 03:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11060.php">Sergio Díaz: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Reply:</strong> <a href="11060.php">Sergio Díaz: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI users,
<br>
<p>I'm a new OpenMPI user. I've configured openmpi-1.3.3 with those options &quot;./configure --prefix=/home/mab/openmpi-1.3.3 --with-sge --enable-ft-thread --with-ft=cr --enable-mpi-threads --enable-static --disable-shared --with-blcr=/home/mab/blcr-0.8.2/&quot; then compiled and installed it successfully.
<br>
Now I'm trying to use the checkpoint/restart protocol. I run a program with the options &quot;mpirun -n 2 -am ft-enable-cr -H localhost prime/checkpoint-restart-test&quot; but I receive the following error:
<br>
<p>*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[madel:28896] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_cr_init() failed failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[madel:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 77
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
<p>I can't find the files mentioned in this post &quot;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10641.php">http://www.open-mpi.org/community/lists/users/2009/09/10641.php</a>&quot; (mca_crs_blcr.so, mca_crs_blcr.la). Could you please help me with that error?
<br>
<p>Thanks in advance
<br>
Mohamed Adel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11060.php">Sergio Díaz: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Reply:</strong> <a href="11060.php">Sergio Díaz: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
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
