<?
$subject_val = "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 20:52:52 2010" -->
<!-- isoreceived="20100825005252" -->
<!-- sent="Tue, 24 Aug 2010 20:54:29 -0400" -->
<!-- isosent="20100825005429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers" -->
<!-- id="BD3BF837-A4C4-4ECA-AF8C-EEF80BD0FE87_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C7442B3.1010801_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 20:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8325.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<li><strong>Previous message:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8317.php">Paul H. Hargrove: "[OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul -- reported in #2544.
<br>
<p><p>On Aug 24, 2010, at 6:07 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I went to try to reproduce the problem Larry Baker reported w/ the PGI 10.3 compilers and undefined references in libopen-pal.so when linking opal_wrapper.  Instead I encountered a different error that does not (as best I can tell) correspond to any of the issues Larry has reported recently.  Once I disable the error-inducing VT code, I am unable to reproduce Larry's problem with the 10.3, 10.5 or 10.8 PGI compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My system and the errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat /etc/redhat-release
</span><br>
<span class="quotelev1">&gt; Scientific Linux SL release 5.4 (Boron)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux cvrsvc01 2.6.18-164.9.1.el5c-perf #1 SMP Wed Jun 9 14:40:25 PDT 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /lib64/libc.so.6                    GNU C Library stable release version 2.5, by Roland McGrath et al.
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.
</span><br>
<span class="quotelev1">&gt; There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
</span><br>
<span class="quotelev1">&gt; PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; Compiled by GNU CC version 4.1.2 20080704 (Red Hat 4.1.2-44).
</span><br>
<span class="quotelev1">&gt; Compiled on a Linux 2.6.9 system on 2009-09-02.
</span><br>
<span class="quotelev1">&gt; Available extensions:
</span><br>
<span class="quotelev1">&gt;       The C stubs add-on version 2.1.2.
</span><br>
<span class="quotelev1">&gt;       crypt add-on version 2.1 by Michael Glad and others
</span><br>
<span class="quotelev1">&gt;       GNU Libidn by Simon Josefsson
</span><br>
<span class="quotelev1">&gt;       GNU libio by Per Bothner
</span><br>
<span class="quotelev1">&gt;       NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
</span><br>
<span class="quotelev1">&gt;       Native POSIX Threads Library by Ulrich Drepper et al
</span><br>
<span class="quotelev1">&gt;       BIND-8.2.3-T5B
</span><br>
<span class="quotelev1">&gt;       RT using linux kernel aio
</span><br>
<span class="quotelev1">&gt; Thread-local storage support included.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pgcc -V      pgcc 10.5-0 64-bit target on x86-64 Linux -tp nehalem-64
</span><br>
<span class="quotelev1">&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ [path_to]/openmpi-1.5rc5/configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[9]: Entering directory `/global/scratch/sd/hargrove/ompi-1.5rc5-pgi-10.5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt; CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt; &quot;/global/common/carver/usg/pgi/10.5/linux86-64/10.5/include/omp.h&quot;, line 41: error:
</span><br>
<span class="quotelev1">&gt;         expected an identifier
</span><br>
<span class="quotelev1">&gt; extern int omp_get_thread_num(void);
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; &quot;/global/common/carver/usg/pgi/10.5/linux86-64/10.5/include/omp.h&quot;, line 43: error:
</span><br>
<span class="quotelev1">&gt;         expected an identifier
</span><br>
<span class="quotelev1">&gt; extern int omp_get_num_threads(void);
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;, line 572: error:
</span><br>
<span class="quotelev1">&gt;         this kind of pragma may not be used here
</span><br>
<span class="quotelev1">&gt; #                             pragma omp barrier
</span><br>
<span class="quotelev1">&gt;                                      ^
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;, line 607: error:
</span><br>
<span class="quotelev1">&gt;         this kind of pragma may not be used here
</span><br>
<span class="quotelev1">&gt; #                                     pragma omp barrier
</span><br>
<span class="quotelev1">&gt;                                              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;, line 648: error:
</span><br>
<span class="quotelev1">&gt;         this kind of pragma may not be used here
</span><br>
<span class="quotelev1">&gt; #                     pragma omp barrier
</span><br>
<span class="quotelev1">&gt;                              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5 errors detected in the compilation of &quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that the source file in question ALREADY contains a work-around for this issue:
</span><br>
<span class="quotelev2">&gt;&gt; /* Disable OpenMP if the PGI compiler is used to work around the following errors:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; compiler version  compiler error
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 9.0-3           PGCC-S-0000-Internal compiler error. calc_dw_tag:no tag
</span><br>
<span class="quotelev2">&gt;&gt; (see Technical Problem Report 4337 at <a href="http://www.pgroup.com/support/release_tprs_90.htm">http://www.pgroup.com/support/release_tprs_90.htm</a>)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 10.1 - 10.6       this kind of pragma may not be used here
</span><br>
<span class="quotelev2">&gt;&gt;                  #pargma omp barrier
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(_OPENMP) &amp;&amp; defined(__PGI)
</span><br>
<span class="quotelev2">&gt;&gt; #       undef _OPENMP
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev2">&gt;&gt; #       include &lt;omp.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt; #       define omp_get_thread_num() 0
</span><br>
<span class="quotelev2">&gt;&gt; #       define omp_get_num_threads() 1
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it appears that the C++ STL headers (included via Summary.h) are indirectly including omp.h, leading to this failure: the &quot;expected an identifier&quot; due to the two #defines in the work-around, and the &quot;this kind of pragma...&quot; errors due to the original issue resurfacing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have reproduced this problem with PGI versions 10.3, 10.5 and 10.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I configure with --disable-vt then I (obviously) don't encounter this error.  In that case I am able to complete the build of 1.5rc5 with no errors.  This means an INABILITY to reproduce Larry's undefined references problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="8325.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<li><strong>Previous message:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8317.php">Paul H. Hargrove: "[OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
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
