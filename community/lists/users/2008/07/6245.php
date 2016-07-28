<?
$subject_val = "[OMPI users] orterun, orted, and chroot";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 23:18:59 2008" -->
<!-- isoreceived="20080801031859" -->
<!-- sent="Thu, 31 Jul 2008 16:18:44 -0400" -->
<!-- isosent="20080731201844" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="[OMPI users] orterun, orted, and chroot" -->
<!-- id="1217535525.4226.211.camel_at_workhorse" -->
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
<strong>Subject:</strong> [OMPI users] orterun, orted, and chroot<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 16:18:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6246.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I can't get OpenMPI programs to run in a chroot environment on Debian.
<br>
If I run the program, it dies as follows:
<br>
<p># ./ex0
<br>
[workhorse:23752] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_pls_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init_stage1 failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[workhorse:23752] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
<p>If I run it with mpirun, it does slightly differently:
<br>
<p>$ mpirun -np 1 ./ex0
<br>
[workhorse:23457] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_pls_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[workhorse:23457] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
<br>
[workhorse:23457] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>The above output is identical whether I use -v, --verbose, or -mca btl
<br>
self.
<br>
<p>Also, I can't start orted in the chroot: it detaches without leaving a
<br>
running process behind.  In a normal non-chroot environment it works
<br>
fine.
<br>
<p>Is it possible to run OpenMPI programs in a chroot environment?  I
<br>
understand that it might not be possible to use a cluster with chroots
<br>
on each node, but how about running a single instance of an MPI program?
<br>
Or on a multi-CPU (multi-core etc.) shared memory machine?
<br>
<p>Thanks,
<br>
-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6245/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6246.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<!-- nextthread="start" -->
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
