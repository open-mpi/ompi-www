<?
$subject_val = "[OMPI devel] A different 1.5rc5 build failure w/ PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 18:08:04 2010" -->
<!-- isoreceived="20100824220804" -->
<!-- sent="Tue, 24 Aug 2010 15:07:47 -0700" -->
<!-- isosent="20100824220747" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] A different 1.5rc5 build failure w/ PGI compilers" -->
<!-- id="4C7442B3.1010801_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 18:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8318.php">Ralph Castain: "[OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Previous message:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>Reply:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I went to try to reproduce the problem Larry Baker reported w/ the PGI 
<br>
10.3 compilers and undefined references in libopen-pal.so when linking 
<br>
opal_wrapper.  Instead I encountered a different error that does not (as 
<br>
best I can tell) correspond to any of the issues Larry has reported 
<br>
recently.  Once I disable the error-inducing VT code, I am unable to 
<br>
reproduce Larry's problem with the 10.3, 10.5 or 10.8 PGI compilers.
<br>
<p>My system and the errors:
<br>
<p>$ cat /etc/redhat-release
<br>
Scientific Linux SL release 5.4 (Boron)
<br>
<p>$ uname -a
<br>
Linux cvrsvc01 2.6.18-164.9.1.el5c-perf #1 SMP Wed Jun 9 14:40:25 PDT 
<br>
2010 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>$ /lib64/libc.so.6                    
<br>
GNU C Library stable release version 2.5, by Roland McGrath et al.
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Compiled by GNU CC version 4.1.2 20080704 (Red Hat 4.1.2-44).
<br>
Compiled on a Linux 2.6.9 system on 2009-09-02.
<br>
Available extensions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The C stubs add-on version 2.1.2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crypt add-on version 2.1 by Michael Glad and others
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU Libidn by Simon Josefsson
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU libio by Per Bothner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIS(YP)/NIS+ NSS modules 0.19 by Thorsten Kukuk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Native POSIX Threads Library by Ulrich Drepper et al
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIND-8.2.3-T5B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RT using linux kernel aio
<br>
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>$ pgcc -V      
<br>
pgcc 10.5-0 64-bit target on x86-64 Linux -tp nehalem-64
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90
<br>
[...]
<br>
<p>$ make
<br>
[...]
<br>
make[9]: Entering directory 
<br>
`/global/scratch/sd/hargrove/ompi-1.5rc5-pgi-10.5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
<br>
&nbsp;&nbsp;CXX    otfprofile-otfprofile.o
<br>
&quot;/global/common/carver/usg/pgi/10.5/linux86-64/10.5/include/omp.h&quot;, line 
<br>
41: error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expected an identifier
<br>
&nbsp;&nbsp;extern int omp_get_thread_num(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;
<br>
&quot;/global/common/carver/usg/pgi/10.5/linux86-64/10.5/include/omp.h&quot;, line 
<br>
43: error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expected an identifier
<br>
&nbsp;&nbsp;extern int omp_get_num_threads(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;
<br>
&quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;, 
<br>
line 572: error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this kind of pragma may not be used here
<br>
&nbsp;&nbsp;#                             pragma omp barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;
<br>
&quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;, 
<br>
line 607: error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this kind of pragma may not be used here
<br>
&nbsp;&nbsp;#                                     pragma omp barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;, 
<br>
line 648: error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this kind of pragma may not be used here
<br>
&nbsp;&nbsp;#                     pragma omp barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>5 errors detected in the compilation of 
<br>
&quot;../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp&quot;.
<br>
[...]
<br>
<p>It appears that the source file in question ALREADY contains a 
<br>
work-around for this issue:
<br>
<span class="quotelev1">&gt; /* Disable OpenMP if the PGI compiler is used to work around the 
</span><br>
<span class="quotelev1">&gt; following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler version  compiler error
</span><br>
<span class="quotelev1">&gt; &lt; 9.0-3           PGCC-S-0000-Internal compiler error. calc_dw_tag:no tag
</span><br>
<span class="quotelev1">&gt; (see Technical Problem Report 4337 at 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pgroup.com/support/release_tprs_90.htm">http://www.pgroup.com/support/release_tprs_90.htm</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.1 - 10.6       this kind of pragma may not be used here
</span><br>
<span class="quotelev1">&gt;                   #pargma omp barrier
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; #if defined(_OPENMP) &amp;&amp; defined(__PGI)
</span><br>
<span class="quotelev1">&gt; #       undef _OPENMP
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev1">&gt; #       include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #       define omp_get_thread_num() 0
</span><br>
<span class="quotelev1">&gt; #       define omp_get_num_threads() 1
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>However, it appears that the C++ STL headers (included via Summary.h) 
<br>
are indirectly including omp.h, leading to this failure: the &quot;expected 
<br>
an identifier&quot; due to the two #defines in the work-around, and the &quot;this 
<br>
kind of pragma...&quot; errors due to the original issue resurfacing.
<br>
<p>I have reproduced this problem with PGI versions 10.3, 10.5 and 10.8.
<br>
<p>If I configure with --disable-vt then I (obviously) don't encounter this 
<br>
error.  In that case I am able to complete the build of 1.5rc5 with no 
<br>
errors.  This means an INABILITY to reproduce Larry's undefined 
<br>
references problem.
<br>
<p>-Paul
<br>
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
<li><strong>Next message:</strong> <a href="8318.php">Ralph Castain: "[OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Previous message:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>Reply:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
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
