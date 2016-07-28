<?
$subject_val = "[OMPI devel] Crash when using MPI_REAL8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 11:16:57 2009" -->
<!-- isoreceived="20091203161657" -->
<!-- sent="Thu, 3 Dec 2009 17:19:23 +0100 (CET)" -->
<!-- isosent="20091203161923" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Crash when using MPI_REAL8" -->
<!-- id="alpine.DEB.2.00.0912031710230.3715_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Crash when using MPI_REAL8<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 11:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7182.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7180.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I hope this time I won't be the only one to suffer this bug :)
<br>
<p>It is very simple indeed, just perform an allreduce with MPI_REAL8 
<br>
(fortran) and you should get a crash in ompi/op/op.h:411. Tested with 
<br>
trunk and v1.5, working fine on v1.3.
<br>
<p><span class="quotelev1">&gt;From what I understand, in the trunk, MPI_REAL8 has now a fixed id (in 
</span><br>
ompi/datatype/ompi_datatype_internal.h), but operations do not have an 
<br>
index going as far as 54 (0x36), leading to a crash when looking for 
<br>
op-&gt;o_func.intrinsic.fns[ompi_op_ddt_map[ddt-&gt;id]] in ompi_op_is_valid() 
<br>
(or, if I disable mpi_param_check, in ompi_op_reduce()).
<br>
<p>Here is a reproducer, just in case :
<br>
program main
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;integer ierr
<br>
&nbsp;&nbsp;real(8) myreal, realsum
<br>
&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;call MPI_ALLREDUCE(myreal, realsum, 1, MPI_REAL8, MPI_SUM, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;stop
<br>
end
<br>
<p>Has anyone an idea on how to fix this ? Or am I doing something wrong ?
<br>
<p>Thanks for any help,
<br>
Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7182.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7180.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
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
