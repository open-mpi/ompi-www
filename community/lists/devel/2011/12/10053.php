<?
$subject_val = "Re: [OMPI devel] VT configure problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 07:56:42 2011" -->
<!-- isoreceived="20111208125642" -->
<!-- sent="Thu, 8 Dec 2011 13:56:35 +0100" -->
<!-- isosent="20111208125635" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT configure problem?" -->
<!-- id="201112081356.36636.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BC6C3C23-24A6-48AB-AD6D-CA07576FB297_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT configure problem?<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 07:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10052.php">Ralph Castain: "[OMPI devel] VT configure problem?"</a>
<li><strong>In reply to:</strong> <a href="10052.php">Ralph Castain: "[OMPI devel] VT configure problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>this issue is fixed by r25595.
<br>
<p>It seems to be a compiler bug in GCC v4.2.? ... When using assert() within 
<br>
OpenMP-parallel regions the compiler prepends an extra '_' to the symbol 
<br>
__buildin_expect(), so the linker reports undefined references.
<br>
<p>The solution is actually a workaround where an own implementation of assert() 
<br>
is used to prevent references to __builtin_expect(). 
<br>
<p>Matthias
<br>
<p>On Thursday 08 December 2011 00:17:29 Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;___builtin_expect&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       __ZN12FilterTraceC26processEventsAndStatisticsEv.omp_fn.0 in
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_filter_trc.o __Z13vtfilter_mainiPPc.omp_fn.0 in
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o __Z13vtfilter_mainiPPc.omp_fn.1 in
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fresh checkout (r25589) on an x86_64 Mac...obviously, I can --disable-vt,
</span><br>
<span class="quotelev1">&gt; but shouldn't this be picked up in configure and corrected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="10052.php">Ralph Castain: "[OMPI devel] VT configure problem?"</a>
<li><strong>In reply to:</strong> <a href="10052.php">Ralph Castain: "[OMPI devel] VT configure problem?"</a>
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
