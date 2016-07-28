<?
$subject_val = "[OMPI devel] 1.5rc5 build failure with icc-11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 19:14:52 2010" -->
<!-- isoreceived="20100824231452" -->
<!-- sent="Tue, 24 Aug 2010 16:14:33 -0700" -->
<!-- isosent="20100824231433" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5 build failure with icc-11.1" -->
<!-- id="4C745259.6060803_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5 build failure with icc-11.1<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 19:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8321.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Previous message:</strong> <a href="8319.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8325.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<li><strong>Reply:</strong> <a href="8325.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to build 1.5rc5 with icc-11.1.046 is failing in otfprofile.cpp - 
<br>
the same file I saw problems with when using the PGI compilers.
<br>
<p>$ cat /etc/SuSE-release
<br>
SUSE Linux Enterprise Server 10 (x86_64)
<br>
VERSION = 10
<br>
PATCHLEVEL = 2
<br>
<p>$  uname -a
<br>
Linux jaguar-ext3 2.6.16.60-0.42.7-smp #1 SMP Tue Nov 3 11:20:42 UTC 
<br>
2009 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>$ /lib64/libc.so.6
<br>
GNU C Library stable release version 2.4 (20091027), by Roland McGrath 
<br>
et al.
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.
<br>
There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
<br>
PARTICULAR PURPOSE.
<br>
Configured for x86_64-suse-linux.
<br>
Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
<br>
Compiled on a Linux 2.6.16 system on 2009-10-27.
<br>
Available extensions:
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
Thread-local storage support included.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/libc/bugs.html">http://www.gnu.org/software/libc/bugs.html</a>&gt;.
<br>
<p>$ icc --version
<br>
icc (ICC) 11.1 20090630
<br>
Copyright (C) 1985-2009 Intel Corporation.  All rights reserved.
<br>
<p>$[path_to]/openmpi-1.5rc5/configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
[...]
<br>
<p>$make
<br>
[...]
<br>
Making all in otfprofile
<br>
make[9]: Entering directory 
<br>
`/lustre/widow1/scratch/hargrove/ompi-1.5rc5-icc-11.1.046/ompi/contrib/vt/vt/extli
<br>
b/otf/tools/otfprofile'
<br>
&nbsp;&nbsp;CXX    otfprofile-otfprofile.o
<br>
../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile/otfprofile.cpp(25): 
<br>
c
<br>
atastrophic error: could not open source file &quot;omp.h&quot;
<br>
&nbsp;&nbsp;#     include &lt;omp.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for 
<br>
../../../../../../../../../openmpi-1.5rc5/ompi/contrib/vt/vt/extlib/otf/tools/otfprofi
<br>
le/otfprofile.cpp (code 4)
<br>
[...]
<br>
<p><p>If I configure with --disable-vt then I get a complete build.
<br>
<p>There are numerous instances of ICC's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;warning #188: enumerated type mixed with another type
<br>
which I personally don't consider to be a serious issue.
<br>
<p>Other than the 188's, there is only one other compiler warning seen:
<br>
<span class="quotelev1">&gt; /bin/sh ./libtool  --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl  -DLTDLOPEN=libltdlc 
</span><br>
<span class="quotelev1">&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl -Ilibltdl 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl/libltdl 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl/libltdl   -O3 -DNDEBUG   
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -MT libltdlc_la-ltdl.lo -MD -MP -MF 
</span><br>
<span class="quotelev1">&gt; .deps/libltdlc_la-ltdl.Tpo -c -o libltdlc_la-ltdl.lo `test -f 'ltdl.c' 
</span><br>
<span class="quotelev1">&gt; || echo '../../../openmpi-1.5rc5/opal/libltdl/'`ltdl.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl -DLTDLOPEN=libltdlc 
</span><br>
<span class="quotelev1">&gt; &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl -Ilibltdl 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl/libltdl 
</span><br>
<span class="quotelev1">&gt; -I../../../openmpi-1.5rc5/opal/libltdl/libltdl -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -MT libltdlc_la-ltdl.lo -MD -MP -MF 
</span><br>
<span class="quotelev1">&gt; .deps/libltdlc_la-ltdl.Tpo -c 
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.5rc5/opal/libltdl/ltdl.c -o libltdlc_la-ltdl.o
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.5rc5/opal/libltdl/ltdl.c(1268): warning #279: 
</span><br>
<span class="quotelev1">&gt; controlling expression is constant
</span><br>
<span class="quotelev1">&gt;           archive_name = MALLOC (char, LT_STRLEN (name) + LT_STRLEN 
</span><br>
<span class="quotelev1">&gt; (libext) + 2);
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
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
<li><strong>Next message:</strong> <a href="8321.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>Previous message:</strong> <a href="8319.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8325.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
<li><strong>Reply:</strong> <a href="8325.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 build failure with icc-11.1"</a>
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
