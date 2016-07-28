<?
$subject_val = "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 17:18:32 2010" -->
<!-- isoreceived="20100827211832" -->
<!-- sent="Fri, 27 Aug 2010 14:18:27 -0700" -->
<!-- isosent="20100827211827" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++" -->
<!-- id="9A602A6D-26AD-4A54-8FB2-82E8C0949AD9_at_usgs.gov" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 17:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8409.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Reply:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Reply:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PathScale 3.2 C++ compiler segment faults for optimization levels  
<br>
higher than -O1 (-O2 is the default).  This is for OpenMPI 1.4.2 &#151; my  
<br>
first attempt to compile using the PathScale compilers.  I could not  
<br>
find any -WOPT options to eliminate the error.  I don't understand the  
<br>
current state of the PathScale compilers.  I think the company changed  
<br>
hands since we bought the product and the last owner went bankrupt.  I  
<br>
think the name has been resurrected by the people that wrote the  
<br>
compiler.  They use the same name, but I get the impression that our  
<br>
license is with a company that is gone now, not with them, so they  
<br>
want us to buy a new license.  Anyway, there may be a newer compiler  
<br>
than 3.2 that does not have this problem.
<br>
<p>[root_at_hydra vtfilter]# pathCC -v
<br>
PathScale(TM) Compiler Suite: Version 3.2
<br>
Built on: 2008-06-16 16:45:36 -0700
<br>
Thread model: posix
<br>
GNU gcc version 3.3.1 (PathScale 3.2 driver)
<br>
<p>[root_at_hydra vtfilter]# ./configure &gt;configure.log 2&gt;&amp;1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$PATHSCALE_DIR/openmpi --with-sge \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC=&quot;pathcc -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-g -O3 -march=anyx86&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXX=&quot;pathCC -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=&quot;-g -O1 -march=anyx86&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FC=&quot;pathf90 -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;F77=&quot;pathf90 -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot;
<br>
<p>[root_at_hydra vtfilter]# make
<br>
<p>&lt;snip&gt;
<br>
<p>Making all in vtfilter
<br>
make[6]: Entering directory `/usr/local/src/openmpi-1.4.2/ompi/contrib/ 
<br>
vt/vt/tools/vtfilter'
<br>
<p>&lt;snip&gt;
<br>
<p>pathCC -m64 -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib - 
<br>
I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  - 
<br>
DINSIDE_OPENMPI   -D_GNU_SOURCE -mp -DVT_OMP -g -O3 -march=anyx86 -MT  
<br>
vtfilter-vt_tracefilter.o -MD -MP -MF .deps/vtfilter- 
<br>
vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o `test -f  
<br>
'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
<br>
Signal: Segmentation fault in Global Optimization -- Dead Store  
<br>
Elimination phase.
<br>
Error: Signal Segmentation fault in phase Global Optimization -- Dead  
<br>
Store Elimination -- processing aborted
<br>
*** Internal stack backtrace:
<br>
pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
<br>
Please report this problem to &lt;support_at_[hidden]&gt;.
<br>
Problem report saved as /root/.ekopath-bugs/pathCC_error_weMqHF.ii
<br>
Please review the above file and, if possible, attach it to your  
<br>
problem report.
<br>
make[6]: *** [vtfilter-vt_tracefilter.o] Error 1
<br>
<p>&lt;snip&gt;
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8409.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Reply:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Reply:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
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
