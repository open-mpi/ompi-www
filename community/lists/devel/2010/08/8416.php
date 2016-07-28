<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 28 00:49:08 2010" -->
<!-- isoreceived="20100828044908" -->
<!-- sent="Fri, 27 Aug 2010 21:48:48 -0700" -->
<!-- isosent="20100828044848" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++" -->
<!-- id="4C789530.3000702_at_lbl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4C7853FA.80107_at_lbl.gov" -->
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
<strong>Date:</strong> 2010-08-28 00:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8417.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried again w/ flags nearly identical to Larry's:
<br>
<p>$ [path_to]/configure  --with-contrib-vt-flags=--with-platform=linux 
<br>
--with-sge \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC=&quot;pathcc-3.2 -m64&quot;    CFLAGS=&quot;-g -O3 -march=anyx86&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXX=&quot;pathCC-3.2 -m64&quot;    CXXFLAGS=&quot;-g -O1 -march=anyx86&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FC=&quot;pathf90-3.2 -m64&quot;    FCFLAGS=&quot;-g -O3 -march=anyx86 
<br>
-fno-second-underscore&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;F77=&quot;pathf90-3.2 -m64&quot;    FFLAGS=&quot;-g -O3 -march=anyx86 
<br>
-fno-second-underscore&quot;
<br>
<p>And got success with both 1.4.3rc1 and 1.5rc5, due I assume to the 
<br>
explict -O1 in CXXFLAGS.
<br>
However, if I change that to an explicit -O3 I SILL have no problems.
<br>
<p>So, at this point I suspect the difference is between the gcc3 and gcc4 
<br>
modes of pathcc.
<br>
However, my attempts to configure with CC=&quot;pathcc-3.2 -m64 -gnu3&quot; fails 
<br>
configure with
<br>
<p>checking for functional offsetof macro... no
<br>
configure: WARNING: Your compiler does not support offsetof macro
<br>
configure: error: Configure: Cannot continue
<br>
<p>So, I suspect the gcc3 mode is just not available/usable on my installation.
<br>
<p>In short: I cannot repoduce Larry's failure, but that is probably 
<br>
because I also cannot reproduce his compiler.
<br>
<p>-Paul
<br>
<p>Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I have built both 1.4.3rc1 and 1.5rc5 using the 3.2 PathScale compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not encounter the problem Larry reported, but there are (at 
</span><br>
<span class="quotelev1">&gt; least) 2 differences between my build and Larry's
</span><br>
<span class="quotelev1">&gt; 1) I didn't pass and explicit {C,CXX,F,FC}FLAGS
</span><br>
<span class="quotelev1">&gt; 2) My pathcc install is using the gcc4 toolchain, not gcc3.
</span><br>
<span class="quotelev1">&gt; I plan a few more builds to narrow down the differences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some notes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To build 1.5rc5 with this compiler I needed a 1-line change 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8413.php">http://www.open-mpi.org/community/lists/devel/2010/08/8413.php</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My configure args for both 1.4.3rc1 and 1.5rc5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ [path_to]/configure \
</span><br>
<span class="quotelev1">&gt;    configure --with-contrib-vt-flags=--with-platform=linux \
</span><br>
<span class="quotelev1">&gt;    CC=pathcc-3.2 CXX=pathCC-3.2 \
</span><br>
<span class="quotelev1">&gt;    F77=pathf90-3.2 FC=pathf90-3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the &quot;--with-contrib-vt-flags=--with-platform=linux&quot; is 
</span><br>
<span class="quotelev1">&gt; because the machine is a front-end to a Cray XT and I wanted to build 
</span><br>
<span class="quotelev1">&gt; VT for the front-end, not for the Cray.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Among the tests I conducted but did not report was a successful build 
</span><br>
<span class="quotelev2">&gt;&gt; of 1.5rc5 with the PathScale &quot;3.2.99&quot; compilers.
</span><br>
<span class="quotelev2">&gt;&gt; $ pathcc --version
</span><br>
<span class="quotelev2">&gt;&gt; PathScale(TM) Compiler Suite: Version 3.2.99
</span><br>
<span class="quotelev2">&gt;&gt; Built on: 2009-08-21 13:23:57 -0500
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; GNU gcc version 4.2.0 (PathScale 3.2.99 driver)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2000, 2001 Silicon Graphics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2002, 2003, 2004, 2005, 2006 PathScale, Inc.  All Rights 
</span><br>
<span class="quotelev2">&gt;&gt; Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2006, 2007 QLogic Corporation.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2007, 2008 PathScale LLC.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; See complete copyright, patent and legal notices in the
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pathscale/share/doc/pathscale-compilers-3.2.99/LEGAL.pdf file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was a beta release of the 3.3 (never released?) provided to some 
</span><br>
<span class="quotelev2">&gt;&gt; customers, and not a general release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also note that my PathScale install is using gcc-4, rather than 
</span><br>
<span class="quotelev2">&gt;&gt; gcc-3, which I understand contains different bugs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will test the &quot;stock&quot; 3.2 with 1.5rc5 and 1.4.3rc1 and report my 
</span><br>
<span class="quotelev2">&gt;&gt; findings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The PathScale 3.2 C++ compiler segment faults for optimization 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; levels higher than -O1 (-O2 is the default).  This is for OpenMPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.2 &#151; my first attempt to compile using the PathScale compilers.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could not find any -WOPT options to eliminate the error.  I don't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand the current state of the PathScale compilers.  I think 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the company changed hands since we bought the product and the last 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; owner went bankrupt.  I think the name has been resurrected by the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; people that wrote the compiler.  They use the same name, but I get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the impression that our license is with a company that is gone now, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not with them, so they want us to buy a new license.  Anyway, there 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may be a newer compiler than 3.2 that does not have this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra vtfilter]# pathCC -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PathScale(TM) Compiler Suite: Version 3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Built on: 2008-06-16 16:45:36 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gcc version 3.3.1 (PathScale 3.2 driver)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra vtfilter]# ./configure &gt;configure.log 2&gt;&amp;1 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --prefix=$PATHSCALE_DIR/openmpi --with-sge \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CC=&quot;pathcc -m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CFLAGS=&quot;-g -O3 -march=anyx86&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CXX=&quot;pathCC -m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CXXFLAGS=&quot;-g -O1 -march=anyx86&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FC=&quot;pathf90 -m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FCFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    F77=&quot;pathf90 -m64&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FFLAGS=&quot;-g -O3 -march=anyx86 -fno-second-underscore&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_hydra vtfilter]# make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in vtfilter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[6]: Entering directory 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/usr/local/src/openmpi-1.4.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pathCC -m64 -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DINSIDE_OPENMPI   -D_GNU_SOURCE -mp -DVT_OMP -g -O3 -march=anyx86 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -MT vtfilter-vt_tracefilter.o -MD -MP -MF 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `test -f 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal: Segmentation fault in Global Optimization -- Dead Store 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elimination phase.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: Signal Segmentation fault in phase Global Optimization -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dead Store Elimination -- processing aborted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please report this problem to &lt;support_at_[hidden]&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problem report saved as /root/.ekopath-bugs/pathCC_error_weMqHF.ii
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please review the above file and, if possible, attach it to your 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem report.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[6]: *** [vtfilter-vt_tracefilter.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8417.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8415.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8414.php">Paul H. Hargrove: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8412.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
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
