<?
$subject_val = "[OMPI devel] more vt woes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 08:48:06 2008" -->
<!-- isoreceived="20080209134806" -->
<!-- sent="Sat, 9 Feb 2008 08:47:48 -0500" -->
<!-- isosent="20080209134748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] more vt woes" -->
<!-- id="4B9A55D9-0F35-4402-B3FE-914A009F1D82_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] more vt woes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-09 08:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3178.php">Gleb Natapov: "[OMPI devel] Something wrong with vt?"</a>
<li><strong>Previous message:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While doing some pathscale compiler testing on the trunk (r17407), I  
<br>
ran into this compile problem (the first is a warning, the second is  
<br>
an error):
<br>
<p>pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib -I../../ 
<br>
extlib/otf/otflib -I../../vtlib/ -I../../vtlib   -openmp -DVT_OMP -g - 
<br>
Wall -Wundef -Wno-long-long -finline-functions -pthread -MT vtfilter- 
<br>
vt_tracefilter.o -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o  
<br>
vtfilter-vt_tracefilter.o `test -f 'vt_tracefilter.cc' || echo  
<br>
'./'`vt_tracefilter.cc
<br>
mv -f .deps/vtfilter-vt_otfhandler.Tpo .deps/vtfilter-vt_otfhandler.Po
<br>
mv -f .deps/vtfilter-vt_filthandler.Tpo .deps/vtfilter-vt_filthandler.Po
<br>
&quot;vt_tracefilter.cc&quot;, line 451: Warning: Referenced scalar variable  
<br>
_ZZ4mainE5retev is SHARED by default
<br>
&quot;vt_tracefilter.cc&quot;, line 921: Warning: Referenced scalar variable  
<br>
_ZZ4mainE5retev is SHARED by default
<br>
&quot;vt_tracefilter.cc&quot;, line 950: Warning: Referenced scalar variable  
<br>
_ZZ4mainE5retst is SHARED by default
<br>
&quot;vt_tracefilter.cc&quot;, line 977: Warning: Referenced scalar variable  
<br>
_ZZ4mainE5retsn is SHARED by default
<br>
mv -f .deps/vtfilter-vt_filter.Tpo .deps/vtfilter-vt_filter.Po
<br>
mv -f .deps/vtfilter-vt_tracefilter.Tpo .deps/vtfilter-vt_tracefilter.Po
<br>
pathCC -openmp -DVT_OMP -g -Wall -Wundef -Wno-long-long -finline- 
<br>
functions -pthread -openmp  -o vtfilter vtfilter-vt_filter.o vtfilter- 
<br>
vt_filthandler.o vtfilter-vt_otfhandler.o vtfilter-vt_tracefilter.o - 
<br>
L../../extlib/otf/otflib -L../../extlib/otf/otflib/.libs -lotf  -lz - 
<br>
lnsl -lutil  -lm
<br>
vtfilter-vt_tracefilter.o(.text+0x309b): In function `main':
<br>
/home/jsquyres/svn/ompi2/ompi/contrib/vt/vt/tools/vtfilter/ 
<br>
vt_tracefilter.cc:794: undefined reference to  
<br>
`FiltHandlerArgument::FiltHandlerArgument(FiltHandlerArgument const&amp;)'
<br>
vtfilter-vt_tracefilter.o(.text+0x312f):/home/jsquyres/svn/ompi2/ompi/ 
<br>
contrib/vt/vt/tools/vtfilter/vt_tracefilter.cc:802: undefined  
<br>
reference to  
<br>
`FiltHandlerArgument::FiltHandlerArgument(FiltHandlerArgument const&amp;)'
<br>
vtfilter-vt_tracefilter.o(.text+0x577b): In function `__ompdo_main2':
<br>
/home/jsquyres/svn/ompi2/ompi/contrib/vt/vt/tools/vtfilter/ 
<br>
vt_tracefilter.cc:802: undefined reference to  
<br>
`FiltHandlerArgument::FiltHandlerArgument(FiltHandlerArgument const&amp;)'
<br>
collect2: ld returned 1 exit status
<br>
make[6]: *** [vtfilter] Error 1
<br>
make[6]: Leaving directory `/home/jsquyres/svn/ompi2/ompi/contrib/vt/ 
<br>
vt/tools/vtfilter'
<br>
<p>This is with the pathscale v3.0 compilers.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3178.php">Gleb Natapov: "[OMPI devel] Something wrong with vt?"</a>
<li><strong>Previous message:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Reply:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
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
