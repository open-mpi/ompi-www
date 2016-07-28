<?
$subject_val = "Re: [OMPI devel] Crash when using MPI_REAL8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 11:49:02 2009" -->
<!-- isoreceived="20091204164902" -->
<!-- sent="Fri, 4 Dec 2009 17:51:39 +0100 (CET)" -->
<!-- isosent="20091204165139" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash when using MPI_REAL8" -->
<!-- id="alpine.DEB.2.00.0912041749140.3715_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0912031710230.3715_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Crash when using MPI_REAL8<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 11:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7185.php">Jeff Squyres: "[OMPI devel] MPI_Request teleconf next week"</a>
<li><strong>Previous message:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>In reply to:</strong> <a href="7181.php">Sylvain Jeaugey: "[OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7186.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7186.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the record, and to try to explain why all MTT tests may have missed 
<br>
this &quot;bug&quot;, configuring without --enable-debug makes the bug disappear.
<br>
<p>Still trying to figure out why.
<br>
<p>Sylvain
<br>
<p>On Thu, 3 Dec 2009, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this time I won't be the only one to suffer this bug :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is very simple indeed, just perform an allreduce with MPI_REAL8 (fortran) 
</span><br>
<span class="quotelev1">&gt; and you should get a crash in ompi/op/op.h:411. Tested with trunk and v1.5, 
</span><br>
<span class="quotelev1">&gt; working fine on v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I understand, in the trunk, MPI_REAL8 has now a fixed id (in 
</span><br>
<span class="quotelev1">&gt; ompi/datatype/ompi_datatype_internal.h), but operations do not have an index 
</span><br>
<span class="quotelev1">&gt; going as far as 54 (0x36), leading to a crash when looking for 
</span><br>
<span class="quotelev1">&gt; op-&gt;o_func.intrinsic.fns[ompi_op_ddt_map[ddt-&gt;id]] in ompi_op_is_valid() (or, 
</span><br>
<span class="quotelev1">&gt; if I disable mpi_param_check, in ompi_op_reduce()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a reproducer, just in case :
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer ierr
</span><br>
<span class="quotelev1">&gt; real(8) myreal, realsum
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_ALLREDUCE(myreal, realsum, 1, MPI_REAL8, MPI_SUM, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; stop
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone an idea on how to fix this ? Or am I doing something wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7185.php">Jeff Squyres: "[OMPI devel] MPI_Request teleconf next week"</a>
<li><strong>Previous message:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>In reply to:</strong> <a href="7181.php">Sylvain Jeaugey: "[OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7186.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7186.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
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
