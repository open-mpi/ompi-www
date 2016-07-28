<?
$subject_val = "[OMPI devel] channel initialization failed MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  5 23:17:01 2015" -->
<!-- isoreceived="20150706031701" -->
<!-- sent="Sun, 5 Jul 2015 22:16:59 -0500" -->
<!-- isosent="20150706031659" -->
<!-- name="Victor Rodriguez" -->
<!-- email="vm.rod25_at_[hidden]" -->
<!-- subject="[OMPI devel] channel initialization failed MPI" -->
<!-- id="CAK5mtezM_t4rLm6NRJjT6p1-9X1jz+mf9x40zud+-w00NtAAVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] channel initialization failed MPI<br>
<strong>From:</strong> Victor Rodriguez (<em>vm.rod25_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-05 23:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<li><strong>Previous message:</strong> <a href="17594.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<li><strong>Reply:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am facing the following issue on my MPI build from source code:
<br>
<p>(the only change in config was disable fortran )
<br>
<p>Any help is more than welcome
<br>
<p><p>root_at_intel-corei7-64:~/test# mpirun -n 2 ./mpi_hello
<br>
Fatal error in MPI_Init: Other MPI error, error stack:
<br>
MPIR_Init_thread(498)..............:
<br>
MPID_Init(187).....................: channel initialization failed
<br>
MPIDI_CH3_Init(89).................:
<br>
MPID_nem_init(320).................:
<br>
MPID_nem_tcp_init(171).............:
<br>
MPID_nem_tcp_get_business_card(418):
<br>
MPID_nem_tcp_init(377).............: gethostbyname failed,
<br>
intel-corei7-64 (errno 1)
<br>
<p>===================================================================================
<br>
=   BAD TERMINATION OF ONE OF YOUR APPLICATION PROCESSES
<br>
=   PID 483 RUNNING AT intel-corei7-64
<br>
=   EXIT CODE: 1
<br>
=   CLEANING UP REMAINING PROCESSES
<br>
=   YOU CAN IGNORE THE BELOW CLEANUP MESSAGES
<br>
===================================================================================
<br>
<p>Source code :
<br>
<a href="https://github.com/VictorRodriguez/parallel/blob/master/mpi/hello.c">https://github.com/VictorRodriguez/parallel/blob/master/mpi/hello.c</a>
<br>
<p>Best Regards
<br>
<p>Victor Rodriguez
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<li><strong>Previous message:</strong> <a href="17594.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
<li><strong>Reply:</strong> <a href="17596.php">Ralph Castain: "Re: [OMPI devel] channel initialization failed MPI"</a>
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
