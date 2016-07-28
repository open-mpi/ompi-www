<?
$subject_val = "Re: [OMPI users] MPI symbols invoked from PMPI calls?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 08:50:34 2015" -->
<!-- isoreceived="20151106135034" -->
<!-- sent="Fri, 6 Nov 2015 22:50:30 +0900" -->
<!-- isosent="20151106135030" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI symbols invoked from PMPI calls?" -->
<!-- id="CAAkFZ5tW95opYJ8BhVVs_2Rj8bX8pkn=w6aU5ThKB=EozW41jw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="563C8391.2090104_at_bsc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI symbols invoked from PMPI calls?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 08:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28010.php">Harald Servat: "[OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>In reply to:</strong> <a href="28010.php">Harald Servat: "[OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Reply:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harald,
<br>
<p>the answer is in ompi/mca/coll/libnbc/nbc_ibcast.c
<br>
<p>this has been revamped (but not 100%) in v2.x
<br>
(e.g. no more calls to MPI_Comm_{size,rank} but MPI_Type_size is still
<br>
being invoked)
<br>
<p>I will review this.
<br>
basically, no MPI_* should be invoked internally (e.g. we should use the
<br>
internal ompi_* or the PMPI_* symbol.
<br>
<p>there is currently no plan for a v1.10.2 release, so you have to wait for
<br>
the v2.0.0)
<br>
<p>note you should wrap the C bindings (with a C library) and the Fortran
<br>
bindings (with a Fortran library).
<br>
currently, the fortran wrapper will likely invoke the C wrapper, but that
<br>
will no more be the case from v2.x
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, November 6, 2015, Harald Servat &lt;harald.servat_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   we develop an instrumentation package based on PMPI and we've observed
</span><br>
<span class="quotelev1">&gt; that PMPI_Ibarrier and PMPI_Ibcast invoke regular MPI_Comm_size and
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank instead to the PMPI symbols (i.e. PMPI_Comm_size and
</span><br>
<span class="quotelev1">&gt; PMPI_Comm_rank) in OpenMPI 1.10.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I have attached simple example that demonstrates it when using OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.10.0. The example creates a library (libinstrument) that hooks
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size, MPI_Comm_rank and MPI_Ibarrier. Then, there's a single MPI
</span><br>
<span class="quotelev1">&gt; application that executes MPI_Ibarrier and waits for it. The result when
</span><br>
<span class="quotelev1">&gt; combining this binary with the instrumentation library is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ~/aplic/openmpi/1.10.0/bin/mpirun -np 1 ./main
</span><br>
<span class="quotelev1">&gt; entering MPI_Ibarrier
</span><br>
<span class="quotelev1">&gt; entering MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; leaving MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; entering MPI_Comm_size
</span><br>
<span class="quotelev1">&gt; leaving MPI_Comm_size
</span><br>
<span class="quotelev1">&gt; leaving MPI_Ibarrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   which shows that MPI_Comm_rank and MPI_Comm_size are invoked within
</span><br>
<span class="quotelev1">&gt; MPI_Ibarrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I looked into ompi/mpi/ibarrier.c and ./ompi/mpi/c/profile/pibarrier.c
</span><br>
<span class="quotelev1">&gt; but it wasn't evident to me what might be wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Can anyone check this? And if this could also occur to other MPI3
</span><br>
<span class="quotelev1">&gt; immediate collectives (MPI_Ireduce, MPI_Iallreduce, MPI_Igather, ...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28010.php">Harald Servat: "[OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>In reply to:</strong> <a href="28010.php">Harald Servat: "[OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Reply:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
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
