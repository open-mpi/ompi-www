<?
$subject_val = "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 29 19:40:39 2012" -->
<!-- isoreceived="20120130004039" -->
<!-- sent="Sun, 29 Jan 2012 16:40:33 -0800" -->
<!-- isosent="20120130004033" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results" -->
<!-- id="CAAvDA16Ha+2R+zWey3T0FFH__RimnTmEmeinF-sT7Bv1-z9BjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-29 19:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10273.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]"</a>
<li><strong>Previous message:</strong> <a href="10271.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>Reply:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can additionally report success w/ ILP32 builds with both SS12.2 and 12.3
<br>
compilers on x86-64 and sun4v systems running Solaris and x86-64/Linux:
<br>
&nbsp;&nbsp;&nbsp;solaris-10 Generic_137111-07/sun4v (*FLAGS=&quot;-m32 -xarch=sparc&quot; for
<br>
v8plus ABI)
<br>
&nbsp;&nbsp;&nbsp;solaris-11 snv_151a/amd64 [incl. ofud, openib and dapl]  (*FLAGS=-m32)
<br>
&nbsp;&nbsp;&nbsp;linux/x86-64 (*FLAGS=-m32)
<br>
<p>On Linux I had to &quot;LD_LIBRARY_PATH=:/lib32:/usr/lib32&quot;, but that seems to
<br>
be an Solaris Studio issue, rather than an OMPI or libtool one.  That was
<br>
NOT necessary to get a ILP32 using GCC.
<br>
<p>My sun4u (single-CPU UltraSparcIII) system is just too painfully slow to
<br>
test yet again.
<br>
<p>-Paul
<br>
<p>On Wed, Jan 25, 2012 at 11:49 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I am pleased to report that w/ help from Terry I can now build nearly
</span><br>
<span class="quotelev1">&gt; everything w/ the Solaris Studio 12.2 and 12.3 compilers.
</span><br>
<span class="quotelev1">&gt; Upon comparing our build environments we discovered that CXX=CC works but
</span><br>
<span class="quotelev1">&gt; CXX=sunCC does not, even though they are both symlinks to the same compiler
</span><br>
<span class="quotelev1">&gt; executable.  I still don't know the root cause (though libtool and
</span><br>
<span class="quotelev1">&gt; associated configure logic is still the obvious suspect), but the work
</span><br>
<span class="quotelev1">&gt; around is simple:
</span><br>
<span class="quotelev1">&gt;    When using the Solaris Studio compilers on Solaris, one must set CXX=CC
</span><br>
<span class="quotelev1">&gt; rather than  CXX=sunCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I am following that advice, and have additionally:
</span><br>
<span class="quotelev1">&gt; + gotten  up-to-date patches applied to resolve my FORTRAN and OMP issues
</span><br>
<span class="quotelev1">&gt; on the SPARC-T2 system.
</span><br>
<span class="quotelev1">&gt; + installed both 12.2 and 12.3 compilers on Linux/x86-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I can now report the following ALL work (defined as &quot;make all check
</span><br>
<span class="quotelev1">&gt; install&quot;) with BOTH 12.2 and 12.3 Solaris Studio compilers.
</span><br>
<span class="quotelev1">&gt; The only configure flags are --prefix, setting the CC, CXX, F77 and FC
</span><br>
<span class="quotelev1">&gt; variables, and (when appropriate) setting *FLAGS=-m64.
</span><br>
<span class="quotelev1">&gt;    solaris-10 s10_69/sun4u (w/ -m64)
</span><br>
<span class="quotelev1">&gt;    solaris-10 Generic_137111-07/sun4v (w/ -m64)
</span><br>
<span class="quotelev1">&gt;    solaris-11 snv_151a/amd64 [including ofud, openib and dapl] (w/ -m64)
</span><br>
<span class="quotelev1">&gt;    linux/x86-64 (no -m64 needed because it is the default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following works w/ the 12.2 compilers:
</span><br>
<span class="quotelev1">&gt;    solaris-10 Generic_142901-03/i386
</span><br>
<span class="quotelev1">&gt; However, the f77/f90 compilers in 12.3 are generating code using SSE2
</span><br>
<span class="quotelev1">&gt; instructions even when passed -xarch=pentium_pro.
</span><br>
<span class="quotelev1">&gt; So this machine cannot run the resulting executables.  So, I had to
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77 to get things to work.
</span><br>
<span class="quotelev1">&gt; That, however, is NOT an OMPI problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/19/2012 11:21 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As promised earlier today, here are results from my Solaris platforms.
</span><br>
<span class="quotelev2">&gt;&gt; Note that there are libtool-related failures below that may be worth
</span><br>
<span class="quotelev2">&gt;&gt; pursuing.
</span><br>
<span class="quotelev2">&gt;&gt; If necessary, access to most of my machines can be arranged for qualified
</span><br>
<span class="quotelev2">&gt;&gt; persons.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; == GNU compilers with {C,CXX,F77,FC}FLAGS=-mcpu=v9 on SPARCs, and -m64 on
</span><br>
<span class="quotelev2">&gt;&gt; amd64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PASS:
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 s10_69/sun4u (w/ g77, no FC)
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 Generic_142901-03/i386 (w/ Sun's f77 and f95, both dated
</span><br>
<span class="quotelev2">&gt;&gt; April 2009)
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-11 snv_151a/amd64 [including ofud, openib and dapl] (w/ g77,
</span><br>
<span class="quotelev2">&gt;&gt; no FC)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FAIL:
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 Generic_137111-07/sun4v with default GNU compilers
</span><br>
<span class="quotelev2">&gt;&gt; Using system default gcc, which is actually Sun's gccfss-4.0.4, there are
</span><br>
<span class="quotelev2">&gt;&gt; assertion failures seen in the atomics in &quot;make check&quot;.  I can provide
</span><br>
<span class="quotelev2">&gt;&gt; details is anybody cares, but I know from past experience that support for
</span><br>
<span class="quotelev2">&gt;&gt; gcc-style inline asm is marginal in this compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; == Sun Studio 12.2 compilers w/ {C,CXX,F77,FC}=-m64 on SPARCs and amd64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both of my SPARC systems appear to have an out-of-date libmtsk.so, which
</span><br>
<span class="quotelev2">&gt;&gt; both prevents the Sun f77 and f90 compilers from running at all, and
</span><br>
<span class="quotelev2">&gt;&gt; additionally leads to failure like the following when building OpenMP
</span><br>
<span class="quotelev2">&gt;&gt; support in VT:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/bash ../../libtool --tag=CXX    --mode=link sunCC -xopenmp -DVT_OMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -m64 -xopenmp  -o vtfilter vtfilter-vt_filter.o  vtfilter-vt_filthandler.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  vtfilter-vt_otfhandler.o  vtfilter-vt_tracefilter.o ../../util/util.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -L../../extlib/otf/otflib -L../../extlib/otf/otflib/.**libs -lotf  -lz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lsocket -lnsl  -lrt -lm -lthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: sunCC -xopenmp -DVT_OMP -m64 -xopenmp -o vtfilter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtfilter-vt_filter.o vtfilter-vt_filthandler.o vtfilter-vt_otfhandler.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtfilter-vt_tracefilter.o ../../util/util.o  -L/home/hargrove/OMPI/openmpi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **1.4.5rc2-solaris10-sparcT2-**ss12u2/BLD/ompi/contrib/vt/vt/**extlib/otf/otflib/.libs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/home/hargrove/OMPI/openmpi-**1.4.5rc2-solaris10-sparcT2-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ss12u2/BLD/ompi/contrib/vt/vt/**extlib/otf/otflib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrove/OMPI/openmpi-1.**4.5rc2-solaris10-sparcT2-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ss12u2/BLD/ompi/contrib/vt/vt/**extlib/otf/otflib/.libs/**libotf.a -lz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC: Warning: Optimizer level changed from 0 to 3 to support parallelized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  symbol                             in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __mt_MasterFunction_cxt_            vtfilter-vt_tracefilter.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: fatal: Symbol referencing errors. No output written to vtfilter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error code 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a lack of required Solaris patches and NOT an ompi or vt problem
</span><br>
<span class="quotelev2">&gt;&gt; to be solved.
</span><br>
<span class="quotelev2">&gt;&gt; However, as a result my two SPARC platforms are configured with
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-mpi-f77 --disable-mpi-f90 --with-contrib-vt-flags=&quot;--**disable-omp
</span><br>
<span class="quotelev2">&gt;&gt; --disable-hyb&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [It took a bit of work to figure out how disable OMP and not just VT in
</span><br>
<span class="quotelev2">&gt;&gt; its entirety.]
</span><br>
<span class="quotelev2">&gt;&gt; I report this info just to note that my SPARC testing is &quot;narrower&quot; than
</span><br>
<span class="quotelev2">&gt;&gt; on my x86 and amd64 machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The one &quot;real&quot; problem I found appears to be libtool related and impacted
</span><br>
<span class="quotelev2">&gt;&gt; all 4 platforms:
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 s10_69/sun4u
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 Generic_142901-03/i386
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-11 snv_151a/amd64 [including ofud, openib and dapl]
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 Generic_137111-07/sun4v
</span><br>
<span class="quotelev2">&gt;&gt; No problem with &quot;make all&quot; or with &quot;make check&quot;, but &quot;make install&quot; fails
</span><br>
<span class="quotelev2">&gt;&gt; with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making install in mpi/cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/phargrov/OMPI/openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5rc2-solaris11-x64-ib-**suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/phargrov/OMPI/openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5rc2-solaris11-x64-ib-**suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test -z &quot;/home/phargrov/OMPI/openmpi-**1.4.5rc2-solaris11-x64-ib-**suncc/INST/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; || /usr/gnu/bin/mkdir -p &quot;/home/phargrov/OMPI/openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5rc2-solaris11-x64-ib-**suncc/INST/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /bin/sh ../../../libtool   --mode=install /usr/bin/ginstall -c  '
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.la' '/home/phargrov/OMPI/openmpi-**1.4.5rc2-solaris11-x64-ib-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **suncc/INST/lib/libmpi_cxx.la'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: install: warning: relinking `libmpi_cxx.la'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: install: (cd /home/phargrov/OMPI/openmpi-1.**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4.5rc2-solaris11-x64-ib-suncc/**BLD/ompi/mpi/cxx; /bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/openmpi-1.**4.5rc2-solaris11-x64-ib-suncc/**BLD/libtool
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --tag CXX --mode=relink sunCC -O -DNDEBUG -m64 -version-info 0:1:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -export-dynamic -o libmpi_cxx.la -rpath /home/phargrov/OMPI/openmpi-1.**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4.5rc2-solaris11-x64-ib-suncc/**INST/lib mpicxx.lo intercepts.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm.lo datatype.lo win.lo file.lo ../../../ompi/libmpi.la -lsocket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lnsl -lm -lthread )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mv: cannot stat `libmpi_cxx.so.0.0.1': No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: install: error: relink `libmpi_cxx.la' with the above command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before installing it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/home/phargrov/OMPI/openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5rc2-solaris11-x64-ib-**suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/phargrov/OMPI/openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5rc2-solaris11-x64-ib-**suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/phargrov/OMPI/openmpi-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5rc2-solaris11-x64-ib-**suncc/BLD/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No such problem was seen w/ the GNU compilers on the same 4 systems.
</span><br>
<span class="quotelev2">&gt;&gt; This looks to be a libtool bug in support for the Sun C++ compiler,
</span><br>
<span class="quotelev2">&gt;&gt; especially since configuring with &quot;--enable-static --disable-shared&quot;
</span><br>
<span class="quotelev2">&gt;&gt; eliminates this problem (but is undesirable for obvious reasons).
</span><br>
<span class="quotelev2">&gt;&gt; A quick peek appears to show some dangling symlinks:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ls -l ompi/mpi/cxx/.libs/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; total 869
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff 116944 2012-01-19 18:09 comm.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff  41644 2012-01-19 18:09 datatype.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff  17240 2012-01-19 18:09 file.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff 222592 2012-01-19 18:09 intercepts.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx 1 phargrov staff     16 2012-01-19 18:09 libmpi_cxx.la -&gt; ../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff   1262 2012-01-19 18:09 libmpi_cxx.lai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx 1 phargrov staff     19 2012-01-19 18:09 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lrwxrwxrwx 1 phargrov staff     19 2012-01-19 18:09 libmpi_cxx.so.0 -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff 267364 2012-01-19 18:09 mpicxx.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r-- 1 phargrov staff  46660 2012-01-19 18:09 win.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is possible that the library build failed in &quot;make all&quot; w/o
</span><br>
<span class="quotelev2">&gt;&gt; terminating the build (I've seen such things before).
</span><br>
<span class="quotelev2">&gt;&gt; The initial evidence in the &quot;make all&quot; output does suggest no shared lib
</span><br>
<span class="quotelev2">&gt;&gt; was built:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link sunCC  -O -DNDEBUG -m64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -version-info 0:1:0 -export-dynamic   -o libmpi_cxx.la -rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/openmpi-1.**4.5rc2-solaris11-x64-ib-**ss12u2/INST/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo ../../../ompi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.la -lsocket -lnsl  -lm -lthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.so.0&quot; &amp;&amp; ln -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;libmpi_cxx.so.0.0.1&quot; &quot;libmpi_cxx.so.0&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.so&quot; &amp;&amp; ln -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;libmpi_cxx.so.0.0.1&quot; &quot;libmpi_cxx.so&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.la&quot; &amp;&amp; ln -s &quot;../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.la&quot; &quot;libmpi_cxx.la&quot; )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note the lack of any suncc or sunCC command beween the libtool command
</span><br>
<span class="quotelev2">&gt;&gt; line and the &quot;rm &amp;&amp; ln&quot; commands.
</span><br>
<span class="quotelev2">&gt;&gt; Inspecting the configure-generated libtool confirms what looks like
</span><br>
<span class="quotelev2">&gt;&gt; improper config for tag=CXX:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep -e &quot;BEGIN LIBTOOL TAG CONFIG: [FC]&quot; -e ^archive_cmds libtool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname -o \$lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ### BEGIN LIBTOOL TAG CONFIG: CXX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive_cmds=&quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ### BEGIN LIBTOOL TAG CONFIG: F77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname -o \$lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ### BEGIN LIBTOOL TAG CONFIG: FC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname -o \$lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll be happy to provide all or part of config.log to Ralf W. or other
</span><br>
<span class="quotelev2">&gt;&gt; interested persons to debug this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suppose I could have tried w/o C++ bindings instead of disabling
</span><br>
<span class="quotelev2">&gt;&gt; libtool, but with F77 and F90 bindings already disabled on the SPARCs that
</span><br>
<span class="quotelev2">&gt;&gt; didn't feel to me like a very good use of my time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An additional annoyance on one platform:
</span><br>
<span class="quotelev2">&gt;&gt;    solaris-10 Generic_142901-03/i386
</span><br>
<span class="quotelev2">&gt;&gt; Is additionally unhappy with the atomics, yielding the following warnings
</span><br>
<span class="quotelev2">&gt;&gt; for every file that include atomic.h:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/export/home/phargrov/OMPI/**openmpi-1.4.5rc2-solaris10-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86-ss12u2//openmpi-1.4.5rc2/**opal/include/opal/sys/ia32/**atomic.h&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 170: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/export/home/phargrov/OMPI/**openmpi-1.4.5rc2-solaris10-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86-ss12u2//openmpi-1.4.5rc2/**opal/include/opal/sys/ia32/**atomic.h&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 170: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/export/home/phargrov/OMPI/**openmpi-1.4.5rc2-solaris10-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86-ss12u2//openmpi-1.4.5rc2/**opal/include/opal/sys/ia32/**atomic.h&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 187: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/export/home/phargrov/OMPI/**openmpi-1.4.5rc2-solaris10-**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86-ss12u2//openmpi-1.4.5rc2/**opal/include/opal/sys/ia32/**atomic.h&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 187: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is annoying, but &quot;make check&quot; passes all tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10273.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]"</a>
<li><strong>Previous message:</strong> <a href="10271.php">Dmitri Gribenko: "[OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>Reply:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
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
