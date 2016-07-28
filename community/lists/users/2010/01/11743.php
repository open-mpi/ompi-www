<?
$subject_val = "Re: [OMPI users] Compilig CG.W.8 benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 12:07:32 2010" -->
<!-- isoreceived="20100112170732" -->
<!-- sent="Tue, 12 Jan 2010 11:07:24 -0600 (CST)" -->
<!-- isosent="20100112170724" -->
<!-- name="chan_at_[hidden]" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilig CG.W.8 benchmark" -->
<!-- id="3940167.800331263316044102.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="12448903.800241263315871557.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilig CG.W.8 benchmark<br>
<strong>From:</strong> <a href="mailto:chan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Compilig%20CG.W.8%20benchmark"><em>chan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-12 12:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Maybe in reply to:</strong> <a href="11741.php">Pawan Acharya: "[OMPI users] Compilig CG.W.8 benchmark"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To compile fortran application with MPE, you need Fortran to C wrapper
<br>
library, e.g. libmpe_f2cmpi.a or the one that comes with OpenMPI.  Your
<br>
link command should contain at least the following
<br>
<p>mpif77 -o cg_log cg.f -lmpe_f2cmpi -llmpe -lmpe.
<br>
<p>To simplify the process, the recommended way to enable MPE is to use
<br>
the MPI wrapper that comes with MPE, i.e. mpefc, (unless you are using
<br>
a very old version of MPE).  Assuming your MPE is built with OpenMPI,
<br>
your link line becomes
<br>
<p>mpefc -mpilog -o cg_log cg.f.
<br>
<p>If I recall correctly, the simplest way to insert mpefc in one of the latest
<br>
version of NAS parallel benchmark is in config/make.def.  Replace the Fortran
<br>
compiler in the file as
<br>
<p>MPIF77 = mpefc -mpilog (or F77 = mpefc -mpilog depends on NPB version)
<br>
<p>A.Chan
<br>
<p>----- &quot;Pawan Acharya&quot; &lt;pawn.07_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am having trouble with trace-enabled comilation of CG.W.8 benchmark
</span><br>
<span class="quotelev1">&gt; included in NAS Parallel Benchmark. As the makefile is dependent to
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; files in the common directory, so obviously independent compiling of
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; cg.f wouldn't work:
</span><br>
<span class="quotelev1">&gt; mpif77 -o cg_log cg.f -llmpe -lmpe
</span><br>
<span class="quotelev1">&gt; This is the makefile given with benchmark, Can I get any helpp in
</span><br>
<span class="quotelev1">&gt; modifying
</span><br>
<span class="quotelev1">&gt; this file for the trace-enabled compiling
</span><br>
<span class="quotelev1">&gt; SHELL=/bin/sh
</span><br>
<span class="quotelev1">&gt; BENCHMARK=cg
</span><br>
<span class="quotelev1">&gt; BENCHMARKU=CG
</span><br>
<span class="quotelev1">&gt; LLFLAG = -llmpe
</span><br>
<span class="quotelev1">&gt; LFLAG = -lmpe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include ../config/make.def
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OBJS = cg.o ${COMMON}/print_results.o  \
</span><br>
<span class="quotelev1">&gt;        ${COMMON}/${RAND}.o ${COMMON}/timers.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include ../sys/make.common
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ${PROGRAM}: config ${OBJS}
</span><br>
<span class="quotelev1">&gt;     ${FLINK} ${FLINKFLAGS} -o ${PROGRAM} ${OBJS} ${FMPI_LIB}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cg.o:        cg.f  mpinpb.h npbparams.h
</span><br>
<span class="quotelev1">&gt;     ${FCOMPILE} cg.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;     - rm -f *.o *~
</span><br>
<span class="quotelev1">&gt;     - rm -f npbparams.h core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ..................
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Pawan Acharya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Maybe in reply to:</strong> <a href="11741.php">Pawan Acharya: "[OMPI users] Compilig CG.W.8 benchmark"</a>
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
