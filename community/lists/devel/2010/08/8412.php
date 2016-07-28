<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 18:15:37 2010" -->
<!-- isoreceived="20100827221537" -->
<!-- sent="Fri, 27 Aug 2010 18:15:32 -0400" -->
<!-- isosent="20100827221532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++" -->
<!-- id="4A6C9353-1204-494A-96AE-638D3615127D_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9A602A6D-26AD-4A54-8FB2-82E8C0949AD9_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 18:15:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8413.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure with pathcc-3.2 [with patch]"</a>
<li><strong>Previous message:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can always disable vampir trace in OMPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --enable-contrib-no-build=vt
<br>
<p>That will avoid building this optional component and therefore you won't run into this compiler issue.
<br>
<p><p>On Aug 27, 2010, at 5:18 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; The PathScale 3.2 C++ compiler segment faults for optimization levels higher than -O1 (-O2 is the default).  This is for OpenMPI 1.4.2 &#151; my first attempt to compile using the PathScale compilers.  I could not find any -WOPT options to eliminate the error.  I don't understand the current state of the PathScale compilers.  I think the company changed hands since we bought the product and the last owner went bankrupt.  I think the name has been resurrected by the people that wrote the compiler.  They use the same name, but I get the impression that our license is with a company that is gone now, not with them, so they want us to buy a new license.  Anyway, there may be a newer compiler than 3.2 that does not have this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_hydra vtfilter]# pathCC -v
</span><br>
<span class="quotelev1">&gt; PathScale(TM) Compiler Suite: Version 3.2
</span><br>
<span class="quotelev1">&gt; Built on: 2008-06-16 16:45:36 -0700
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; GNU gcc version 3.3.1 (PathScale 3.2 driver)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_hydra vtfilter]# ./configure &gt;configure.log 2&gt;&amp;1 \
</span><br>
<span class="quotelev1">&gt;   --prefix=$PATHSCALE_DIR/openmpi --with-sge \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;pathcc -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-g -O3 -march=anyx86&quot; \
</span><br>
<span class="quotelev1">&gt;   CXX=&quot;pathCC -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CXXFLAGS=&quot;-g -O1 -march=anyx86&quot; \
</span><br>
<span class="quotelev1">&gt;   FC=&quot;pathf90 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   FCFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot; \
</span><br>
<span class="quotelev1">&gt;   F77=&quot;pathf90 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   FFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_hydra vtfilter]# make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in vtfilter
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory `/usr/local/src/openmpi-1.4.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pathCC -m64 -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -DINSIDE_OPENMPI   -D_GNU_SOURCE -mp -DVT_OMP -g -O3 -march=anyx86 -MT vtfilter-vt_tracefilter.o -MD -MP -MF .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault in Global Optimization -- Dead Store Elimination phase.
</span><br>
<span class="quotelev1">&gt; Error: Signal Segmentation fault in phase Global Optimization -- Dead Store Elimination -- processing aborted
</span><br>
<span class="quotelev1">&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev1">&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
</span><br>
<span class="quotelev1">&gt; Please report this problem to &lt;support_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt; Problem report saved as /root/.ekopath-bugs/pathCC_error_weMqHF.ii
</span><br>
<span class="quotelev1">&gt; Please review the above file and, if possible, attach it to your problem report.
</span><br>
<span class="quotelev1">&gt; make[6]: *** [vtfilter-vt_tracefilter.o] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8413.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure with pathcc-3.2 [with patch]"</a>
<li><strong>Previous message:</strong> <a href="8411.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
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
