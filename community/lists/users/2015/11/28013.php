<?
$subject_val = "Re: [OMPI users] MPI symbols invoked from PMPI calls?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 09:27:51 2015" -->
<!-- isoreceived="20151106142751" -->
<!-- sent="Fri, 6 Nov 2015 23:27:47 +0900" -->
<!-- isosent="20151106142747" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI symbols invoked from PMPI calls?" -->
<!-- id="CAAkFZ5vbx8_tVwY4_t=cDbMJYhHtU8N7tW6VVYWrc4XZVkPyZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="563CB297.9080807_at_bsc.es" -->
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
<strong>Date:</strong> 2015-11-06 09:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>Previous message:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>In reply to:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harald,
<br>
<p>non blocking collectives were introduced in the v1.8 series
<br>
<p>I will review all libnbc module, and other modules as well.
<br>
<p>Jeff can/will explain why fortran bindings should be wrapped in fortran and
<br>
not in C.
<br>
fwiw, I understand in some cases it can be convenient to have fortran
<br>
bindings invoke the c wrappers. but this is not a 100% reliable solution.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, November 6, 2015, Harald Servat &lt;harald.servat_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   some comments interspersed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/06/2015 02:50 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Harald,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the answer is in ompi/mca/coll/libnbc/nbc_ibcast.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this has been revamped (but not 100%) in v2.x
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. no more calls to MPI_Comm_{size,rank} but MPI_Type_size is still
</span><br>
<span class="quotelev2">&gt;&gt; being invoked)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah! it is interesting to know this pointer, thanks. Looks like others such
</span><br>
<span class="quotelev1">&gt; as igather and ireduce also have this issue :S
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will review this.
</span><br>
<span class="quotelev2">&gt;&gt; basically, no MPI_* should be invoked internally (e.g. we should use the
</span><br>
<span class="quotelev2">&gt;&gt; internal ompi_* or the PMPI_* symbol.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there is currently no plan for a v1.10.2 release, so you have to wait
</span><br>
<span class="quotelev2">&gt;&gt; for the v2.0.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to know when this behavior was introduced? Maybe since the
</span><br>
<span class="quotelev1">&gt; first MPI3 implementation (was it OpenMPI 1.8?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note you should wrap the C bindings (with a C library) and the Fortran
</span><br>
<span class="quotelev2">&gt;&gt; bindings (with a Fortran library).
</span><br>
<span class="quotelev2">&gt;&gt; currently, the fortran wrapper will likely invoke the C wrapper, but
</span><br>
<span class="quotelev2">&gt;&gt; that will no more be the case from v2.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh! That's a pity. We usually use the LD_PRELOAD technique to inject the
</span><br>
<span class="quotelev1">&gt; instrumentation and since fortran wrapper invokes the C wrapper, we can
</span><br>
<span class="quotelev1">&gt; instrument either fortran or C applications with a single instrumentation
</span><br>
<span class="quotelev1">&gt; library. Other MPI implementations (I won't say names here) also have this
</span><br>
<span class="quotelev1">&gt; C/Fortran &quot;separation&quot;, which requires us to generate two instrumentation
</span><br>
<span class="quotelev1">&gt; libraries, one for C and another for Fortran apps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, November 6, 2015, Harald Servat &lt;harald.servat_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:harald.servat_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        we develop an instrumentation package based on PMPI and we've
</span><br>
<span class="quotelev2">&gt;&gt;     observed that PMPI_Ibarrier and PMPI_Ibcast invoke regular
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size and MPI_Comm_rank instead to the PMPI symbols (i.e.
</span><br>
<span class="quotelev2">&gt;&gt;     PMPI_Comm_size and PMPI_Comm_rank) in OpenMPI 1.10.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I have attached simple example that demonstrates it when using
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI 1.10.0. The example creates a library (libinstrument) that
</span><br>
<span class="quotelev2">&gt;&gt;     hooks MPI_Comm_size, MPI_Comm_rank and MPI_Ibarrier. Then, there's a
</span><br>
<span class="quotelev2">&gt;&gt;     single MPI application that executes MPI_Ibarrier and waits for it.
</span><br>
<span class="quotelev2">&gt;&gt;     The result when combining this binary with the instrumentation
</span><br>
<span class="quotelev2">&gt;&gt;     library is the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     # ~/aplic/openmpi/1.10.0/bin/mpirun -np 1 ./main
</span><br>
<span class="quotelev2">&gt;&gt;     entering MPI_Ibarrier
</span><br>
<span class="quotelev2">&gt;&gt;     entering MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt;     leaving MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt;     entering MPI_Comm_size
</span><br>
<span class="quotelev2">&gt;&gt;     leaving MPI_Comm_size
</span><br>
<span class="quotelev2">&gt;&gt;     leaving MPI_Ibarrier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        which shows that MPI_Comm_rank and MPI_Comm_size are invoked
</span><br>
<span class="quotelev2">&gt;&gt;     within MPI_Ibarrier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I looked into ompi/mpi/ibarrier.c and
</span><br>
<span class="quotelev2">&gt;&gt;     ./ompi/mpi/c/profile/pibarrier.c but it wasn't evident to me what
</span><br>
<span class="quotelev2">&gt;&gt;     might be wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Can anyone check this? And if this could also occur to other MPI3
</span><br>
<span class="quotelev2">&gt;&gt;     immediate collectives (MPI_Ireduce, MPI_Iallreduce, MPI_Igather, ...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev2">&gt;&gt;     individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev2">&gt;&gt;     information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev2">&gt;&gt;     from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt;     recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev2">&gt;&gt;     intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev2">&gt;&gt;     distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev2">&gt;&gt;     received this communication in error, please notify the sender and
</span><br>
<span class="quotelev2">&gt;&gt;     destroy and delete any copies you may have received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28011.php">http://www.open-mpi.org/community/lists/users/2015/11/28011.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28012.php">http://www.open-mpi.org/community/lists/users/2015/11/28012.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>Previous message:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>In reply to:</strong> <a href="28012.php">Harald Servat: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
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
