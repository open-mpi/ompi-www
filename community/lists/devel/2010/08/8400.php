<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 21:55:07 2010" -->
<!-- isoreceived="20100827015507" -->
<!-- sent="Thu, 26 Aug 2010 18:54:54 -0700" -->
<!-- isosent="20100827015454" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C771AEE.1060604_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C76E4F2.4080603_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 21:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8401.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: new opal_path_nfs test failures"</a>
<li><strong>Previous message:</strong> <a href="8399.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8399.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While I still don't know the root cause, the following diff between the 
<br>
libtool-generated wrappers for a gcc and xlc build make the cause of the 
<br>
&quot;make check&quot; failure fairly obvious:
<br>
<p>--- BLD-gcc/ompi/debuggers/predefined_gap_test      2010-08-26 
<br>
20:49:53.524662327 -0500
<br>
+++ BLD-xlc_r/ompi/debuggers/predefined_gap_test        2010-08-26 
<br>
20:48:00.440815415 -0500
<br>
@@ -104,15 +104,6 @@
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;if test -f &quot;$progdir/$program&quot;; then
<br>
-    # Add our own library path to LD_LIBRARY_PATH
<br>
-    
<br>
LD_LIBRARY_PATH=&quot;/home/hargrove/tmp/openmpi-1.5rc5/BLD/ompi/.libs:$LD_LIBRARY_PATH&quot;
<br>
-
<br>
-    # Some systems cannot cope with colon-terminated LD_LIBRARY_PATH
<br>
-    # The second colon is a workaround for a bug in BeOS R4 sed
<br>
-    LD_LIBRARY_PATH=`$ECHO &quot;X$LD_LIBRARY_PATH&quot; | $Xsed -e 's/::*$//'`
<br>
-
<br>
-    export LD_LIBRARY_PATH
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$libtool_execute_magic&quot; != &quot;%%%MAGIC variable%%%&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Run the actual program with our arguments.
<br>
&nbsp;
<br>
<p>-Paul
<br>
<p>Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I am now looking at using IBM's XLC compilers for ILP32 builds on the 
</span><br>
<span class="quotelev1">&gt; same Linux/PPC64 platform for which I've reported some XLC/LP64 bugs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I find now is that &quot;make check&quot; is failing with the loader unable 
</span><br>
<span class="quotelev1">&gt; to find libmpi.so.0.
</span><br>
<span class="quotelev1">&gt; This is with both 1.5rc5 and 1.4.3rc1.
</span><br>
<span class="quotelev1">&gt; This occurs with xlc, but things are just fine with gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux login1 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010
</span><br>
<span class="quotelev1">&gt; ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ which xlc
</span><br>
<span class="quotelev1">&gt; /soft/apps/ibmcmp-aug2010/vac/bg/9.0/bin/xlc
</span><br>
<span class="quotelev1">&gt; $ xlc -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ Advanced Edition for Blue Gene/P, V9.0
</span><br>
<span class="quotelev1">&gt; Version: 09.00.0000.0009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.1.2 20070115 (SUSE Linux)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There 
</span><br>
<span class="quotelev1">&gt; is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; GNU C Library stable release version 2.4 (20090904), by Roland McGrath
</span><br>
<span class="quotelev1">&gt; et al.
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.
</span><br>
<span class="quotelev1">&gt; There is NO warranty; not even for MERCHANTABILITY or FITNESS FOR A
</span><br>
<span class="quotelev1">&gt; PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; Configured for ppc64-suse-linux.
</span><br>
<span class="quotelev1">&gt; Compiled by GNU CC version 4.1.2 20070115 (SUSE Linux).
</span><br>
<span class="quotelev1">&gt; Compiled on a Linux 2.6.16 system on 2009-09-04.
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
<span class="quotelev1">&gt; Here is the configure command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ [path_to]/configure --with-contrib-vt-flags=--with-platform=linux 
</span><br>
<span class="quotelev1">&gt; CC=xlc_r CXX=xlC_r F77=xlf FC=xlf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem exists with both 1.5rc5 and 1.4.3rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the failure from 1.4.3.rc1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make check
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype'
</span><br>
<span class="quotelev1">&gt; make[3]: `checksum' is up to date.
</span><br>
<span class="quotelev1">&gt; make[3]: `position' is up to date.
</span><br>
<span class="quotelev1">&gt; make[3]: `to_self' is up to date.
</span><br>
<span class="quotelev1">&gt; make[3]: `ddt_pack' is up to date.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype'
</span><br>
<span class="quotelev1">&gt; /home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype/.libs/checksum: 
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libmpi.so.0: cannot open shared 
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: checksum
</span><br>
<span class="quotelev1">&gt; /home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r/test/datatype/.libs/position: 
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libmpi.so.0: cannot open shared 
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: position
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is 1.5.rc5, which I suspect differs only because the two releases 
</span><br>
<span class="quotelev1">&gt; contain different tests:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make check
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;  CC     predefined_gap_test.o
</span><br>
<span class="quotelev1">&gt;  CCLD   predefined_gap_test
</span><br>
<span class="quotelev1">&gt;  CC     dlopen_test-dlopen_test.o
</span><br>
<span class="quotelev1">&gt;  CCLD   dlopen_test
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; /home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r/ompi/debuggers/.libs/predefined_gap_test: 
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libmpi.so.0: cannot open shared 
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; Trying to lt_dlopen file with dladvise_local: ./libompi_dbg_msgq
</span><br>
<span class="quotelev1">&gt; File opened with dladvise_local, all passed
</span><br>
<span class="quotelev1">&gt; PASS: dlopen_test
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said above, the problem is NOT occuring w/ gcc.  So, I've 
</span><br>
<span class="quotelev1">&gt; attached the &quot;./libtool --config&quot; output for the xlc and gcc builds, 
</span><br>
<span class="quotelev1">&gt; which I see differ in more ways than I would have expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8401.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: new opal_path_nfs test failures"</a>
<li><strong>Previous message:</strong> <a href="8399.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8399.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
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
