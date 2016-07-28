<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 18:08:38 2010" -->
<!-- isoreceived="20100827220838" -->
<!-- sent="Fri, 27 Aug 2010 15:08:16 -0700" -->
<!-- isosent="20100827220816" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++" -->
<!-- id="4C783750.1070708_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 18:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Reply:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Among the tests I conducted but did not report was a successful build of 
<br>
1.5rc5 with the PathScale &quot;3.2.99&quot; compilers.
<br>
$ pathcc --version
<br>
PathScale(TM) Compiler Suite: Version 3.2.99
<br>
Built on: 2009-08-21 13:23:57 -0500
<br>
Thread model: posix
<br>
GNU gcc version 4.2.0 (PathScale 3.2.99 driver)
<br>
<p>Copyright 2000, 2001 Silicon Graphics, Inc.  All Rights Reserved.
<br>
Copyright 2002, 2003, 2004, 2005, 2006 PathScale, Inc.  All Rights Reserved.
<br>
Copyright 2006, 2007 QLogic Corporation.  All Rights Reserved.
<br>
Copyright 2007, 2008 PathScale LLC.  All Rights Reserved.
<br>
See complete copyright, patent and legal notices in the
<br>
/opt/pathscale/share/doc/pathscale-compilers-3.2.99/LEGAL.pdf file.
<br>
<p>This was a beta release of the 3.3 (never released?) provided to some 
<br>
customers, and not a general release.
<br>
<p>I also note that my PathScale install is using gcc-4, rather than gcc-3, 
<br>
which I understand contains different bugs.
<br>
<p>I will test the &quot;stock&quot; 3.2 with 1.5rc5 and 1.4.3rc1 and report my findings.
<br>
<p>-Paul
<br>
<p>Larry Baker wrote:
<br>
<span class="quotelev1">&gt; The PathScale 3.2 C++ compiler segment faults for optimization levels 
</span><br>
<span class="quotelev1">&gt; higher than -O1 (-O2 is the default).  This is for OpenMPI 1.4.2 &#151; my 
</span><br>
<span class="quotelev1">&gt; first attempt to compile using the PathScale compilers.  I could not 
</span><br>
<span class="quotelev1">&gt; find any -WOPT options to eliminate the error.  I don't understand the 
</span><br>
<span class="quotelev1">&gt; current state of the PathScale compilers.  I think the company changed 
</span><br>
<span class="quotelev1">&gt; hands since we bought the product and the last owner went bankrupt.  I 
</span><br>
<span class="quotelev1">&gt; think the name has been resurrected by the people that wrote the 
</span><br>
<span class="quotelev1">&gt; compiler.  They use the same name, but I get the impression that our 
</span><br>
<span class="quotelev1">&gt; license is with a company that is gone now, not with them, so they 
</span><br>
<span class="quotelev1">&gt; want us to buy a new license.  Anyway, there may be a newer compiler 
</span><br>
<span class="quotelev1">&gt; than 3.2 that does not have this problem.
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
<span class="quotelev1">&gt;    --prefix=$PATHSCALE_DIR/openmpi --with-sge \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;pathcc -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-g -O3 -march=anyx86&quot; \
</span><br>
<span class="quotelev1">&gt;    CXX=&quot;pathCC -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXFLAGS=&quot;-g -O1 -march=anyx86&quot; \
</span><br>
<span class="quotelev1">&gt;    FC=&quot;pathf90 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    FCFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot; \
</span><br>
<span class="quotelev1">&gt;    F77=&quot;pathf90 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    FFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot;
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
<span class="quotelev1">&gt; make[6]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/usr/local/src/openmpi-1.4.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pathCC -m64 -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib 
</span><br>
<span class="quotelev1">&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  
</span><br>
<span class="quotelev1">&gt; -DINSIDE_OPENMPI   -D_GNU_SOURCE -mp -DVT_OMP -g -O3 -march=anyx86 -MT 
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o -MD -MP -MF 
</span><br>
<span class="quotelev1">&gt; .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o 
</span><br>
<span class="quotelev1">&gt; `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault in Global Optimization -- Dead Store 
</span><br>
<span class="quotelev1">&gt; Elimination phase.
</span><br>
<span class="quotelev1">&gt; Error: Signal Segmentation fault in phase Global Optimization -- Dead 
</span><br>
<span class="quotelev1">&gt; Store Elimination -- processing aborted
</span><br>
<span class="quotelev1">&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev1">&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
</span><br>
<span class="quotelev1">&gt; Please report this problem to &lt;support_at_[hidden]&gt;.
</span><br>
<span class="quotelev1">&gt; Problem report saved as /root/.ekopath-bugs/pathCC_error_weMqHF.ii
</span><br>
<span class="quotelev1">&gt; Please review the above file and, if possible, attach it to your 
</span><br>
<span class="quotelev1">&gt; problem report.
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>In reply to:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Reply:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
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
