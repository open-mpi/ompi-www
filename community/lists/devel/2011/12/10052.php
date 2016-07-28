<?
$subject_val = "[OMPI devel] VT configure problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 18:17:36 2011" -->
<!-- isoreceived="20111207231736" -->
<!-- sent="Wed, 7 Dec 2011 16:17:29 -0700" -->
<!-- isosent="20111207231729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] VT configure problem?" -->
<!-- id="BC6C3C23-24A6-48AB-AD6D-CA07576FB297_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] VT configure problem?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-07 18:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10053.php">Matthias Jurenz: "Re: [OMPI devel] VT configure problem?"</a>
<li><strong>Previous message:</strong> <a href="10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10053.php">Matthias Jurenz: "Re: [OMPI devel] VT configure problem?"</a>
<li><strong>Reply:</strong> <a href="10053.php">Matthias Jurenz: "Re: [OMPI devel] VT configure problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;___builtin_expect&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__ZN12FilterTraceC26processEventsAndStatisticsEv.omp_fn.0 in vtfilter-vt_filter_trc.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__Z13vtfilter_mainiPPc.omp_fn.0 in vtfilter-vt_tracefilter.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__Z13vtfilter_mainiPPc.omp_fn.1 in vtfilter-vt_tracefilter.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
<p>Fresh checkout (r25589) on an x86_64 Mac...obviously, I can --disable-vt, but shouldn't this be picked up in configure and corrected?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10053.php">Matthias Jurenz: "Re: [OMPI devel] VT configure problem?"</a>
<li><strong>Previous message:</strong> <a href="10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10053.php">Matthias Jurenz: "Re: [OMPI devel] VT configure problem?"</a>
<li><strong>Reply:</strong> <a href="10053.php">Matthias Jurenz: "Re: [OMPI devel] VT configure problem?"</a>
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
