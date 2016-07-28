<?
$subject_val = "[OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:37:10 2015" -->
<!-- isoreceived="20151221143710" -->
<!-- sent="Sat, 19 Dec 2015 12:50:23 -0800" -->
<!-- isosent="20151219205023" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32" -->
<!-- id="CAAvDA17phzHurBDdsxCX8r6MSx_GdWEm=0w6EOUGAirmEQ_RBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 15:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Previous message:</strong> <a href="18434.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18434.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Reply:</strong> <a href="18434.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am testing on a system with IBM's compilers which has worked for both
<br>
LP64 ({C,CXX,F}FLAGS=-q64) and ILP32 ({C,CXX,FC}FLAGS=-q32) builds on all
<br>
past releases.
<br>
<p>With the 1.10.2rc2 tarball, however, I see the following in the configure
<br>
output on the ILP32  configuration:
<br>
<p>checking if Fortran compiler and POSIX threads work with -lpthread... no
<br>
configure: error: Can not find working threads configuration.  aborting
<br>
<p>Examining the config.log (below) shows this test has run the Fortran
<br>
compiler *without* FCFLAGS (-q32).
<br>
The result is a failed attempt to link 32-bit and 64-bit object files
<br>
together:
<br>
<p>configure:64264: checking if Fortran compiler and POSIX threads work with
<br>
-lpthread
<br>
configure:64345: xlc -q32 -g -I. -c conftest.c
<br>
&quot;conftest.c&quot;, line 27.18: 1506-280 (W) Function argument assignment between
<br>
types &quot;unsigned long&quot; and &quot;unsigned long*&quot; is not allowed.
<br>
configure:64352: $? = 0
<br>
configure:64362: xlf  conftestf.f conftest.o -o conftest  -lutil  -lpthread
<br>
** fpthread   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file conftestf.f.
<br>
/usr/bin/ld: powerpc:common architecture of input file `conftest.o' is
<br>
incompatible with powerpc:common64 output
<br>
conftest.o: In function `pthreadtest_f':
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:23:
<br>
relocation truncated to fit: R_PPC_REL24 against `pthread_self'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:24:
<br>
relocation truncated to fit: R_PPC_REL24 against `pthread_attr_init'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:25:
<br>
relocation truncated to fit: R_PPC_REL24 against `__sigsetjmp'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:25:
<br>
relocation truncated to fit: R_PPC_REL24 against `__pthread_unwind_next'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:25:
<br>
relocation truncated to fit: R_PPC_REL24 against `__pthread_register_cancel'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:26:
<br>
relocation truncated to fit: R_PPC_REL24 against `pthread_create'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:27:
<br>
relocation truncated to fit: R_PPC_REL24 against `pthread_join'
<br>
/gpfs/vesta-fs0/projects/PARTS/hargrove/OMPI/openmpi-1.10.2rc1-linux-ppc32-xlc-12.1/BLD/conftest.c:28:
<br>
relocation truncated to fit: R_PPC_REL24 against
<br>
`__pthread_unregister_cancel'
<br>
configure:64369: $? = 1
<br>
<p><p><p>Note that tests of the Fortran compiler prior to the failure *are* passing
<br>
&quot;-q32&quot;:
<br>
<p>configure:32543: checking if Fortran compiler works
<br>
configure:32572: xlf -o conftest -q32 -g   conftest.f  &gt;&amp;5
<br>
** main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file conftest.f.
<br>
configure:32572: $? = 0
<br>
<p><p>So, I don't believe this is anything specific to XLF, but rather an issue
<br>
that would appear on any system with a non-default ABI specified in
<br>
{C,CXX,F}FLAGS.
<br>
<p>I have *not* had the opportunity to test either master or the 2.0 RC on
<br>
this platform.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18436.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Previous message:</strong> <a href="18434.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18434.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
<li><strong>Reply:</strong> <a href="18434.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc2] configure failure with xlf and FCFLAGS=-q32"</a>
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
