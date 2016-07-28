<?
$subject_val = "[OMPI devel] atomic_spinlock test failure with xlc/ppc64 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 22:18:02 2010" -->
<!-- isoreceived="20100826021802" -->
<!-- sent="Wed, 25 Aug 2010 19:17:52 -0700" -->
<!-- isosent="20100826021752" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] atomic_spinlock test failure with xlc/ppc64 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C75CED0.4050809_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] atomic_spinlock test failure with xlc/ppc64 (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 22:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8370.php">Paul H. Hargrove: "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8368.php">Jeff Squyres: "[OMPI devel] bitbucket announced downtime for upgrade"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know Linux/PPC64 is listed as an under-tested platform, and the BG/P 
<br>
release of XLC is probably not supported at all, but I tested it anyway 
<br>
(on a front-end, not the BG/P compute nodes) and have the following to 
<br>
report.  I report here only the 1.5rc5 case, but results are identical 
<br>
with 1.4.3rc1. 
<br>
<p>$ make check
<br>
[...]
<br>
--&gt; Testing atomic_spinlock
<br>
../../../test/asm/run_tests: line 8: 25146 Segmentation fault      $* 
<br>
$threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
../../../test/asm/run_tests: line 8: 25148 Segmentation fault      $* 
<br>
$threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
../../../test/asm/run_tests: line 8: 25151 Segmentation fault      $* 
<br>
$threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Failed
<br>
../../../test/asm/run_tests: line 8: 25154 Segmentation fault      $* 
<br>
$threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
../../../test/asm/run_tests: line 8: 25157 Segmentation fault      $* 
<br>
$threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Failed
<br>
FAIL: atomic_spinlock
<br>
[...]
<br>
========================================================
<br>
1 of 8 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p><p>Here are the details of the platform:
<br>
<p>$ uname -a
<br>
Linux login1 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010 
<br>
ppc64 ppc64 ppc64 GNU/Linux
<br>
<p>$ which xlc
<br>
/soft/apps/ibmcmp-aug2010/vac/bg/9.0/bin/xlc
<br>
$ xlc -qversion
<br>
IBM XL C/C++ Advanced Edition for Blue Gene/P, V9.0
<br>
Version: 09.00.0000.0009
<br>
<p>$ /lib64/libc.so.6
<br>
GNU C Library stable release version 2.4 (20090904), by Roland McGrath 
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
Configured for ppc64-suse-linux.
<br>
Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
<br>
Compiled on a Linux 2.6.16 system on 2009-09-04.
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
<p><p>Here is the configure command:
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure --enable-static --disable-shared 
<br>
--with-contrib-vt-flags=--with-platform=linux CC='xlc_r -q64' CXX='xlC_r 
<br>
-q64' F77='xlf -q64' FC='xlf90 -q64'
<br>
<p>These deserve some explanation:
<br>
+ --enable-static --disable-shared
<br>
&nbsp;&nbsp;&nbsp;&nbsp;These are due to an apparent libtool-vs-xlc problem I will report 
<br>
separately
<br>
+ --with-contrib-vt-flags=--with-platform=linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This is due to VT's BG/P auto-detection which is not appropriate 
<br>
when building for the front end
<br>
&nbsp;&nbsp;&nbsp;&nbsp;See <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8358.php">http://www.open-mpi.org/community/lists/devel/2010/08/8358.php</a>
<br>
+ CC='xlc_r -q64' CXX='xlC_r -q64'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The -q64 requests the LP64 ABI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The &quot;_r&quot; suffixes are for the thread-safe versions, and are needed 
<br>
to avoid undefined pthread symbols at link time
<br>
+ F77='xlf -q64' FC='xlf90 -q64'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The -q64 flag is, again, for the LP64 ABI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;No &quot;_r&quot; suffix was needed, as I suspect no Fortran+pthread code is 
<br>
built when compiling Open MPI
<br>
<p>Here is the Assembler section of the configure output:
<br>
<p>*** Assembler
<br>
checking dependency style of xlc_r -q64... none
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking for fgrep... /bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... no
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... objdump
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... @
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... yes
<br>
checking if PowerPC registers have r prefix... no
<br>
checking if xlc_r -q64 supports GCC inline assembly... yes
<br>
checking if xlc_r -q64 supports DEC inline assembly... no
<br>
checking if xlc_r -q64 supports XLC inline assembly... no
<br>
checking if xlC_r -q64 supports GCC inline assembly... yes
<br>
checking if xlC_r -q64 supports DEC inline assembly... no
<br>
checking if xlC_r -q64 supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-1-0-1-0
<br>
checking for asssembly architecture... POWERPC64
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... no (not in asm-data)
<br>
checking whether possible to generate assembly file... yes
<br>
checking for atomic assembly filename... atomic-local.s
<br>
<p><p>Note that &quot;supports GCC inline assembly... yes&quot; is NOT mistake (though I 
<br>
was not expecting to see &quot;XLC inline assembly... no&quot;).
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
<li><strong>Next message:</strong> <a href="8370.php">Paul H. Hargrove: "[OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8368.php">Jeff Squyres: "[OMPI devel] bitbucket announced downtime for upgrade"</a>
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
