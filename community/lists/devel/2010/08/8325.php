<?
$subject_val = "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 20:53:04 2010" -->
<!-- isoreceived="20100825005304" -->
<!-- sent="Tue, 24 Aug 2010 20:54:40 -0400" -->
<!-- isosent="20100825005440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 build failure with icc-11.1" -->
<!-- id="4D06E74F-9522-471E-84A8-0FE85D8EE5D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C745259.6060803_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 build failure with icc-11.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 20:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8326.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 warnings from gcc on OpenSolaris"</a>
<li><strong>Previous message:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="8320.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also reported in #2544.  Thanks!
<br>
<p>On Aug 24, 2010, at 7:14 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Trying to build 1.5rc5 with icc-11.1.046 is failing in otfprofile.cpp - the same file I saw problems with when using the PGI compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat /etc/SuSE-release
</span><br>
<span class="quotelev1">&gt; SUSE Linux Enterprise Server 10 (x86_64)
</span><br>
<span class="quotelev1">&gt; VERSION = 10
</span><br>
<span class="quotelev1">&gt; PATCHLEVEL = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $  uname -a
</span><br>
<span class="quotelev1">&gt; Linux jaguar-ext3 2.6.16.60-0.42.7-smp #1 SMP Tue Nov 3 11:20:42 UTC 2009 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; GNU C Library stable release version 2.4 (20091027), by Roland McGrath et al.
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.
</span><br>
<span class="quotelev1">&gt; There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
</span><br>
<span class="quotelev1">&gt; PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; Configured for x86_64-suse-linux.
</span><br>
<span class="quotelev1">&gt; Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
</span><br>
<span class="quotelev1">&gt; Compiled on a Linux 2.6.16 system on 2009-10-27.
</span><br>
<span class="quotelev1">&gt; Available extensions:
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
<span class="quotelev1">&gt; Thread-local storage support included.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ icc --version
</span><br>
<span class="quotelev1">&gt; icc (ICC) 11.1 20090630
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2009 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $[path_to]/openmpi-1.5rc5/configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Making all in otfprofile
</span><br>
<span class="quotelev1">&gt; make[9]: Entering directory `/lustre/widow1/scratch/hargrove/ompi-1.5rc5-icc-11.1.046/ompi/contrib/vt/vt/extli
</span><br>
<span class="quotelev1">&gt; b/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt; CXX    otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp(25): c
</span><br>
<span class="quotelev1">&gt; atastrophic error: could not open source file &quot;omp.h&quot;
</span><br>
<span class="quotelev1">&gt; #     include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt;                      ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for ../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofi
</span><br>
<span class="quotelev1">&gt; le/otfprofile.cpp (code 4)
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I configure with --disable-vt then I get a complete build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are numerous instances of ICC's
</span><br>
<span class="quotelev1">&gt;   warning #188: enumerated type mixed with another type
</span><br>
<span class="quotelev1">&gt; which I personally don't consider to be a serious issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than the 188's, there is only one other compiler warning seen:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I. -I../../../openmpi-1.5rc5/opal/libltdl  -DLTDLOPEN=libltdlc -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I../../../openmpi-1.5rc5/opal/libltdl -Ilibltdl -I../../../openmpi-1.5rc5/opal/libltdl/libltdl -I../../../openmpi-1.5rc5/opal/libltdl/libltdl   -O3 -DNDEBUG   -fvisibility=hidden -MT libltdlc_la-ltdl.lo -MD -MP -MF .deps/libltdlc_la-ltdl.Tpo -c -o libltdlc_la-ltdl.lo `test -f 'ltdl.c' || echo '../../../openmpi-1.5rc5/opal/libltdl/'`ltdl.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../../openmpi-1.5rc5/opal/libltdl -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I../../../openmpi-1.5rc5/opal/libltdl -Ilibltdl -I../../../openmpi-1.5rc5/opal/libltdl/libltdl -I../../../openmpi-1.5rc5/opal/libltdl/libltdl -O3 -DNDEBUG -fvisibility=hidden -MT libltdlc_la-ltdl.lo -MD -MP -MF .deps/libltdlc_la-ltdl.Tpo -c ../../../openmpi-1.5rc5/opal/libltdl/ltdl.c -o libltdlc_la-ltdl.o
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-1.5rc5/opal/libltdl/ltdl.c(1268): warning #279: controlling expression is constant
</span><br>
<span class="quotelev2">&gt;&gt;          archive_name = MALLOC (char, LT_STRLEN (name) + LT_STRLEN (libext) + 2);
</span><br>
<span class="quotelev2">&gt;&gt;                         ^
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
<li><strong>Next message:</strong> <a href="8326.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 warnings from gcc on OpenSolaris"</a>
<li><strong>Previous message:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="8320.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
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
