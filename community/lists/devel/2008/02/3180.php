<?
$subject_val = "Re: [OMPI devel] more vt woes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 10:10:14 2008" -->
<!-- isoreceived="20080211151014" -->
<!-- sent="Mon, 11 Feb 2008 16:10:07 +0100" -->
<!-- isosent="20080211151007" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] more vt woes" -->
<!-- id="1202742607.5799.75.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B9A55D9-0F35-4402-B3FE-914A009F1D82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] more vt woes<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 10:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3181.php">Josh Hursey: "[OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3179.php">Eric Jones: "[OMPI devel] status of LSF integration work?"</a>
<li><strong>In reply to:</strong> <a href="3177.php">Jeff Squyres: "[OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem should be fixed now.
<br>
Thanks for the hint.
<br>
<p>On Sa, 2008-02-09 at 08:47 -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; While doing some pathscale compiler testing on the trunk (r17407), I  
</span><br>
<span class="quotelev1">&gt; ran into this compile problem (the first is a warning, the second is  
</span><br>
<span class="quotelev1">&gt; an error):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib -I../../ 
</span><br>
<span class="quotelev1">&gt; extlib/otf/otflib -I../../vtlib/ -I../../vtlib   -openmp -DVT_OMP -g - 
</span><br>
<span class="quotelev1">&gt; Wall -Wundef -Wno-long-long -finline-functions -pthread -MT vtfilter- 
</span><br>
<span class="quotelev1">&gt; vt_tracefilter.o -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o `test -f 'vt_tracefilter.cc' || echo  
</span><br>
<span class="quotelev1">&gt; './'`vt_tracefilter.cc
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vtfilter-vt_otfhandler.Tpo .deps/vtfilter-vt_otfhandler.Po
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vtfilter-vt_filthandler.Tpo .deps/vtfilter-vt_filthandler.Po
</span><br>
<span class="quotelev1">&gt; &quot;vt_tracefilter.cc&quot;, line 451: Warning: Referenced scalar variable  
</span><br>
<span class="quotelev1">&gt; _ZZ4mainE5retev is SHARED by default
</span><br>
<span class="quotelev1">&gt; &quot;vt_tracefilter.cc&quot;, line 921: Warning: Referenced scalar variable  
</span><br>
<span class="quotelev1">&gt; _ZZ4mainE5retev is SHARED by default
</span><br>
<span class="quotelev1">&gt; &quot;vt_tracefilter.cc&quot;, line 950: Warning: Referenced scalar variable  
</span><br>
<span class="quotelev1">&gt; _ZZ4mainE5retst is SHARED by default
</span><br>
<span class="quotelev1">&gt; &quot;vt_tracefilter.cc&quot;, line 977: Warning: Referenced scalar variable  
</span><br>
<span class="quotelev1">&gt; _ZZ4mainE5retsn is SHARED by default
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vtfilter-vt_filter.Tpo .deps/vtfilter-vt_filter.Po
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vtfilter-vt_tracefilter.Tpo .deps/vtfilter-vt_tracefilter.Po
</span><br>
<span class="quotelev1">&gt; pathCC -openmp -DVT_OMP -g -Wall -Wundef -Wno-long-long -finline- 
</span><br>
<span class="quotelev1">&gt; functions -pthread -openmp  -o vtfilter vtfilter-vt_filter.o vtfilter- 
</span><br>
<span class="quotelev1">&gt; vt_filthandler.o vtfilter-vt_otfhandler.o vtfilter-vt_tracefilter.o - 
</span><br>
<span class="quotelev1">&gt; L../../extlib/otf/otflib -L../../extlib/otf/otflib/.libs -lotf  -lz - 
</span><br>
<span class="quotelev1">&gt; lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o(.text+0x309b): In function `main':
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/svn/ompi2/ompi/contrib/vt/vt/tools/vtfilter/ 
</span><br>
<span class="quotelev1">&gt; vt_tracefilter.cc:794: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `FiltHandlerArgument::FiltHandlerArgument(FiltHandlerArgument const&amp;)'
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o(.text+0x312f):/home/jsquyres/svn/ompi2/ompi/ 
</span><br>
<span class="quotelev1">&gt; contrib/vt/vt/tools/vtfilter/vt_tracefilter.cc:802: undefined  
</span><br>
<span class="quotelev1">&gt; reference to  
</span><br>
<span class="quotelev1">&gt; `FiltHandlerArgument::FiltHandlerArgument(FiltHandlerArgument const&amp;)'
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o(.text+0x577b): In function `__ompdo_main2':
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/svn/ompi2/ompi/contrib/vt/vt/tools/vtfilter/ 
</span><br>
<span class="quotelev1">&gt; vt_tracefilter.cc:802: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `FiltHandlerArgument::FiltHandlerArgument(FiltHandlerArgument const&amp;)'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[6]: *** [vtfilter] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/jsquyres/svn/ompi2/ompi/contrib/vt/ 
</span><br>
<span class="quotelev1">&gt; vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with the pathscale v3.0 compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3180/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3180/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3181.php">Josh Hursey: "[OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3179.php">Eric Jones: "[OMPI devel] status of LSF integration work?"</a>
<li><strong>In reply to:</strong> <a href="3177.php">Jeff Squyres: "[OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
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
