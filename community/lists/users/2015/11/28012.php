<?
$subject_val = "Re: [OMPI users] MPI symbols invoked from PMPI calls?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 09:00:59 2015" -->
<!-- isoreceived="20151106140059" -->
<!-- sent="Fri, 6 Nov 2015 15:00:55 +0100" -->
<!-- isosent="20151106140055" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI symbols invoked from PMPI calls?" -->
<!-- id="563CB297.9080807_at_bsc.es" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5tW95opYJ8BhVVs_2Rj8bX8pkn=w6aU5ThKB=EozW41jw_at_mail.gmail.com" -->
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
<strong>From:</strong> Harald Servat (<em>harald.servat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 09:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>In reply to:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Reply:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles,
<br>
<p>&nbsp;&nbsp;&nbsp;some comments interspersed
<br>
<p>On 11/06/2015 02:50 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Harald,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the answer is in ompi/mca/coll/libnbc/nbc_ibcast.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this has been revamped (but not 100%) in v2.x
</span><br>
<span class="quotelev1">&gt; (e.g. no more calls to MPI_Comm_{size,rank} but MPI_Type_size is still
</span><br>
<span class="quotelev1">&gt; being invoked)
</span><br>
<p>Ah! it is interesting to know this pointer, thanks. Looks like others 
<br>
such as igather and ireduce also have this issue :S
<br>
<p><span class="quotelev1">&gt; I will review this.
</span><br>
<span class="quotelev1">&gt; basically, no MPI_* should be invoked internally (e.g. we should use the
</span><br>
<span class="quotelev1">&gt; internal ompi_* or the PMPI_* symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is currently no plan for a v1.10.2 release, so you have to wait
</span><br>
<span class="quotelev1">&gt; for the v2.0.0)
</span><br>
<p>Is it possible to know when this behavior was introduced? Maybe since 
<br>
the first MPI3 implementation (was it OpenMPI 1.8?).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note you should wrap the C bindings (with a C library) and the Fortran
</span><br>
<span class="quotelev1">&gt; bindings (with a Fortran library).
</span><br>
<span class="quotelev1">&gt; currently, the fortran wrapper will likely invoke the C wrapper, but
</span><br>
<span class="quotelev1">&gt; that will no more be the case from v2.x
</span><br>
<p>Oh! That's a pity. We usually use the LD_PRELOAD technique to inject the 
<br>
instrumentation and since fortran wrapper invokes the C wrapper, we can 
<br>
instrument either fortran or C applications with a single 
<br>
instrumentation library. Other MPI implementations (I won't say names 
<br>
here) also have this C/Fortran &quot;separation&quot;, which requires us to 
<br>
generate two instrumentation libraries, one for C and another for 
<br>
Fortran apps.
<br>
<p>Thank you!
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, November 6, 2015, Harald Servat &lt;harald.servat_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:harald.servat_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        we develop an instrumentation package based on PMPI and we've
</span><br>
<span class="quotelev1">&gt;     observed that PMPI_Ibarrier and PMPI_Ibcast invoke regular
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size and MPI_Comm_rank instead to the PMPI symbols (i.e.
</span><br>
<span class="quotelev1">&gt;     PMPI_Comm_size and PMPI_Comm_rank) in OpenMPI 1.10.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I have attached simple example that demonstrates it when using
</span><br>
<span class="quotelev1">&gt;     OpenMPI 1.10.0. The example creates a library (libinstrument) that
</span><br>
<span class="quotelev1">&gt;     hooks MPI_Comm_size, MPI_Comm_rank and MPI_Ibarrier. Then, there's a
</span><br>
<span class="quotelev1">&gt;     single MPI application that executes MPI_Ibarrier and waits for it.
</span><br>
<span class="quotelev1">&gt;     The result when combining this binary with the instrumentation
</span><br>
<span class="quotelev1">&gt;     library is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # ~/aplic/openmpi/1.10.0/bin/mpirun -np 1 ./main
</span><br>
<span class="quotelev1">&gt;     entering MPI_Ibarrier
</span><br>
<span class="quotelev1">&gt;     entering MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;     leaving MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;     entering MPI_Comm_size
</span><br>
<span class="quotelev1">&gt;     leaving MPI_Comm_size
</span><br>
<span class="quotelev1">&gt;     leaving MPI_Ibarrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        which shows that MPI_Comm_rank and MPI_Comm_size are invoked
</span><br>
<span class="quotelev1">&gt;     within MPI_Ibarrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I looked into ompi/mpi/ibarrier.c and
</span><br>
<span class="quotelev1">&gt;     ./ompi/mpi/c/profile/pibarrier.c but it wasn't evident to me what
</span><br>
<span class="quotelev1">&gt;     might be wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Can anyone check this? And if this could also occur to other MPI3
</span><br>
<span class="quotelev1">&gt;     immediate collectives (MPI_Ireduce, MPI_Iallreduce, MPI_Igather, ...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt;     individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt;     information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt;     from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt;     recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt;     intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt;     distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt;     received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt;     destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28011.php">http://www.open-mpi.org/community/lists/users/2015/11/28011.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>WARNING / LEGAL TEXT: This message is intended only for the use of the
<br>
individual or entity to which it is addressed and may contain
<br>
information which is privileged, confidential, proprietary, or exempt
<br>
from disclosure under applicable law. If you are not the intended
<br>
recipient or the person responsible for delivering the message to the
<br>
intended recipient, you are strictly prohibited from disclosing,
<br>
distributing, copying, or in any way using this message. If you have
<br>
received this communication in error, please notify the sender and
<br>
destroy and delete any copies you may have received.
<br>
<p><a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>In reply to:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Reply:</strong> <a href="28013.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
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
