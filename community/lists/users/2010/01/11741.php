<?
$subject_val = "[OMPI users] Compilig CG.W.8 benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 10:11:07 2010" -->
<!-- isoreceived="20100112151107" -->
<!-- sent="Tue, 12 Jan 2010 16:11:02 +0100" -->
<!-- isosent="20100112151102" -->
<!-- name="Pawan Acharya" -->
<!-- email="pawn.07_at_[hidden]" -->
<!-- subject="[OMPI users] Compilig CG.W.8 benchmark" -->
<!-- id="98147ade1001120711v1eefad07ta2aa7508bbed232a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Compilig CG.W.8 benchmark<br>
<strong>From:</strong> Pawan Acharya (<em>pawn.07_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 10:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11743.php">chan_at_[hidden]: "Re: [OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>Maybe reply:</strong> <a href="11743.php">chan_at_[hidden]: "Re: [OMPI users] Compilig CG.W.8 benchmark"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having trouble with trace-enabled comilation of CG.W.8 benchmark
<br>
included in NAS Parallel Benchmark. As the makefile is dependent to other
<br>
files in the common directory, so obviously independent compiling of the
<br>
cg.f wouldn't work:
<br>
mpif77 -o cg_log cg.f -llmpe -lmpe
<br>
This is the makefile given with benchmark, Can I get any helpp in modifying
<br>
this file for the trace-enabled compiling
<br>
SHELL=/bin/sh
<br>
BENCHMARK=cg
<br>
BENCHMARKU=CG
<br>
LLFLAG = -llmpe
<br>
LFLAG = -lmpe
<br>
<p>include ../config/make.def
<br>
<p>OBJS = cg.o ${COMMON}/print_results.o  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${COMMON}/${RAND}.o ${COMMON}/timers.o
<br>
<p>include ../sys/make.common
<br>
<p>${PROGRAM}: config ${OBJS}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${FLINK} ${FLINKFLAGS} -o ${PROGRAM} ${OBJS} ${FMPI_LIB}
<br>
<p>cg.o:        cg.f  mpinpb.h npbparams.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${FCOMPILE} cg.f
<br>
<p><p>clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- rm -f *.o *~
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- rm -f npbparams.h core
<br>
<p><p><pre>
-- 
..................
Best Regards,
Pawan Acharya
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11741/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11743.php">chan_at_[hidden]: "Re: [OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>Maybe reply:</strong> <a href="11743.php">chan_at_[hidden]: "Re: [OMPI users] Compilig CG.W.8 benchmark"</a>
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
