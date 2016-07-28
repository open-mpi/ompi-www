<?
$subject_val = "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:40:33 2015" -->
<!-- isoreceived="20151221144033" -->
<!-- sent="Sat, 19 Dec 2015 16:08:29 -0800" -->
<!-- isosent="20151220000829" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32" -->
<!-- id="CAAvDA16_s5PQ7aWjqZ7eYm4o_x0d36xg++A8LYDWgm0zdUh0pg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14YF+bSYDv7+=wBHGoD-sCrjB7s06BJ_hLJiRwz+Snjpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 19:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18438.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Previous message:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<!-- nextthread="start" -->
<li><strong>Maybe reply:</strong> <a href="18438.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Reply:</strong> <a href="18439.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &quot;loss&quot; of FCFLAGS in the configure probes is very likely taking place
<br>
at the following line in config/ompi_fortran_check_use_only.m4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=$FCFLAGS_save
<br>
<p>I did not find any code in the config/ directory that ever sets
<br>
FCFLAGS_save!
<br>
So, I strongly suspect the following (not yet tested) is the fix:
<br>
<p>--- config/ompi_fortran_check_use_only.m4~      Sat Dec 19 16:05:18 2015
<br>
+++ config/ompi_fortran_check_use_only.m4       Sat Dec 19 16:05:25 2015
<br>
@@ -35,6 +35,7 @@
<br>
&nbsp;AC_DEFUN([OMPI_FORTRAN_CHECK_USE_ONLY],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_VAR_PUSHDEF([use_only_var], [ompi_cv_fortran_use_only])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_VAR_SCOPE_PUSH([FCFLAGS_save])
<br>
+    FCFLAGS_save=&quot;$FCFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-I. $FCFLAGS&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CACHE_CHECK([if Fortran compiler supports USE...ONLY], use_only_var,
<br>
<p><p>-Paul
<br>
<p>On Sat, Dec 19, 2015 at 2:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The subject lines should have read &quot;1.10.2rc1&quot; not &quot;rc2&quot;.
</span><br>
<span class="quotelev1">&gt; I have a lot of odd machines for testing, but no time machine :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Dec 19, 2015 at 1:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have confirmed identical failures of the 2.0.0rc1 and master tarballs.
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Dec 19, 2015 at 12:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am testing on a system with IBM's compilers which has worked for both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LP64 ({C,CXX,F}FLAGS=-q64) and ILP32 ({C,CXX,FC}FLAGS=-q32) builds on all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; past releases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the 1.10.2rc2 tarball, however, I see the following in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure output on the ILP32  configuration:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work with -lpthread... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: Can not find working threads configuration.  aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Examining the config.log (below) shows this test has run the Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler *without* FCFLAGS (-q32).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result is a failed attempt to link 32-bit and 64-bit object files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; together:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:64264: checking if Fortran compiler and POSIX threads work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with -lpthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:64345: xlc -q32 -g -I. -c conftest.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;conftest.c&quot;, line 27.18: 1506-280 (W) Function argument assignment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between types &quot;unsigned long&quot; and &quot;unsigned long*&quot; is not allowed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:64352: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:64362: xlf  conftestf.f conftest.o -o conftest  -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -lpthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** fpthread   === End of Compilation 1 ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1501-510  Compilation successful for file conftestf.f.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: powerpc:common architecture of input file `conftest.o' is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incompatible with powerpc:common64 output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.o: In function `pthreadtest_f':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:23:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `pthread_self'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:24:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `pthread_attr_init'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:25:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `__sigsetjmp'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:25:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `__pthread_unwind_next'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:25:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `__pthread_register_cancel'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:26:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `pthread_create'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:27:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against `pthread_join'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:28:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relocation truncated to fit: R_PPC_REL24 against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `__pthread_unregister_cancel'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:64369: $? = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that tests of the Fortran compiler prior to the failure *are*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passing &quot;-q32&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:32543: checking if Fortran compiler works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:32572: xlf -o conftest -q32 -g   conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** main   === End of Compilation 1 ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1501-510  Compilation successful for file conftest.f.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:32572: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I don't believe this is anything specific to XLF, but rather an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue that would appear on any system with a non-default ABI specified in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {C,CXX,F}FLAGS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have *not* had the opportunity to test either master or the 2.0 RC on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18438.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Previous message:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<!-- nextthread="start" -->
<li><strong>Maybe reply:</strong> <a href="18438.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Reply:</strong> <a href="18439.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc1] configure failure with xlf and FCFLAGS=-q32"</a>
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
