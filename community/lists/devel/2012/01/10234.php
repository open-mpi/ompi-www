<?
$subject_val = "[OMPI devel] 1.4.5rc2 Solaris results [libtool problem]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 02:21:58 2012" -->
<!-- isoreceived="20120120072158" -->
<!-- sent="Thu, 19 Jan 2012 23:21:41 -0800" -->
<!-- isosent="20120120072141" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 Solaris results [libtool problem]" -->
<!-- id="4F191605.6060108_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95BA01C2-D3A1-4EDA-AD55-06542CBAF83E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 Solaris results [libtool problem]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 02:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10235.php">Y.MATSUMOTO: "[OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>Previous message:</strong> <a href="10233.php">Alex.Burton_at_[hidden]: "[OMPI devel] Launch windows nodes from linux"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10253.php">Paul H. Hargrove: "[OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>Reply:</strong> <a href="10253.php">Paul H. Hargrove: "[OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As promised earlier today, here are results from my Solaris platforms.
<br>
Note that there are libtool-related failures below that may be worth 
<br>
pursuing.
<br>
If necessary, access to most of my machines can be arranged for 
<br>
qualified persons.
<br>
<p>== GNU compilers with {C,CXX,F77,FC}FLAGS=-mcpu=v9 on SPARCs, and -m64 
<br>
on amd64
<br>
<p>PASS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 s10_69/sun4u (w/ g77, no FC)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 Generic_142901-03/i386 (w/ Sun's f77 and f95, both dated 
<br>
April 2009)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-11 snv_151a/amd64 [including ofud, openib and dapl] (w/ 
<br>
g77, no FC)
<br>
<p>FAIL:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 Generic_137111-07/sun4v with default GNU compilers
<br>
Using system default gcc, which is actually Sun's gccfss-4.0.4, there 
<br>
are assertion failures seen in the atomics in &quot;make check&quot;.  I can 
<br>
provide details is anybody cares, but I know from past experience that 
<br>
support for gcc-style inline asm is marginal in this compiler.
<br>
<p>== Sun Studio 12.2 compilers w/ {C,CXX,F77,FC}=-m64 on SPARCs and amd64
<br>
<p>Both of my SPARC systems appear to have an out-of-date libmtsk.so, which 
<br>
both prevents the Sun f77 and f90 compilers from running at all, and 
<br>
additionally leads to failure like the following when building OpenMP 
<br>
support in VT:
<br>
<span class="quotelev1">&gt; /bin/bash ../../libtool --tag=CXX    --mode=link sunCC -xopenmp 
</span><br>
<span class="quotelev1">&gt; -DVT_OMP  -m64 -xopenmp  -o vtfilter vtfilter-vt_filter.o  
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_filthandler.o  vtfilter-vt_otfhandler.o  
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_tracefilter.o ../../util/util.o  -L../../extlib/otf/otflib 
</span><br>
<span class="quotelev1">&gt; -L../../extlib/otf/otflib/.libs -lotf  -lz -lsocket -lnsl  -lrt -lm 
</span><br>
<span class="quotelev1">&gt; -lthread
</span><br>
<span class="quotelev1">&gt; libtool: link: sunCC -xopenmp -DVT_OMP -m64 -xopenmp -o vtfilter 
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_filter.o vtfilter-vt_filthandler.o 
</span><br>
<span class="quotelev1">&gt; vtfilter-vt_otfhandler.o vtfilter-vt_tracefilter.o ../../util/util.o  
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/OMPI/openmpi-1.4.5rc2-solaris10-sparcT2-ss12u2/BLD/ompi/contrib/vt/vt/extlib/otf/otflib/.libs 
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/OMPI/openmpi-1.4.5rc2-solaris10-sparcT2-ss12u2/BLD/ompi/contrib/vt/vt/extlib/otf/otflib 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/openmpi-1.4.5rc2-solaris10-sparcT2-ss12u2/BLD/ompi/contrib/vt/vt/extlib/otf/otflib/.libs/libotf.a 
</span><br>
<span class="quotelev1">&gt; -lz -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev1">&gt; CC: Warning: Optimizer level changed from 0 to 3 to support 
</span><br>
<span class="quotelev1">&gt; parallelized code.
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;  symbol                             in file
</span><br>
<span class="quotelev1">&gt; __mt_MasterFunction_cxt_            vtfilter-vt_tracefilter.o
</span><br>
<span class="quotelev1">&gt; ld: fatal: Symbol referencing errors. No output written to vtfilter
</span><br>
<span class="quotelev1">&gt; *** Error code 2
</span><br>
This is a lack of required Solaris patches and NOT an ompi or vt problem 
<br>
to be solved.
<br>
However, as a result my two SPARC platforms are configured with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-f77 --disable-mpi-f90 
<br>
--with-contrib-vt-flags=&quot;--disable-omp --disable-hyb&quot;
<br>
[It took a bit of work to figure out how disable OMP and not just VT in 
<br>
its entirety.]
<br>
I report this info just to note that my SPARC testing is &quot;narrower&quot; than 
<br>
on my x86 and amd64 machines.
<br>
<p>The one &quot;real&quot; problem I found appears to be libtool related and 
<br>
impacted all 4 platforms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 s10_69/sun4u
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 Generic_142901-03/i386
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-11 snv_151a/amd64 [including ofud, openib and dapl]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 Generic_137111-07/sun4v
<br>
No problem with &quot;make all&quot; or with &quot;make check&quot;, but &quot;make install&quot; 
<br>
fails with:
<br>
<span class="quotelev1">&gt; Making install in mpi/cxx
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; test -z 
</span><br>
<span class="quotelev1">&gt; &quot;/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib&quot; 
</span><br>
<span class="quotelev1">&gt; || /usr/gnu/bin/mkdir -p 
</span><br>
<span class="quotelev1">&gt; &quot;/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib&quot;
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../../../libtool   --mode=install /usr/bin/ginstall -c  
</span><br>
<span class="quotelev1">&gt; 'libmpi_cxx.la' 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib/libmpi_cxx.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_cxx.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx; 
</span><br>
<span class="quotelev1">&gt; /bin/sh 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/libtool  
</span><br>
<span class="quotelev1">&gt; --tag CXX --mode=relink sunCC -O -DNDEBUG -m64 -version-info 0:1:0 
</span><br>
<span class="quotelev1">&gt; -export-dynamic -o libmpi_cxx.la -rpath 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib 
</span><br>
<span class="quotelev1">&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/libmpi.la -lsocket -lnsl -lm -lthread )
</span><br>
<span class="quotelev1">&gt; mv: cannot stat `libmpi_cxx.so.0.0.1': No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libmpi_cxx.la' with the above command 
</span><br>
<span class="quotelev1">&gt; before installing it
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
No such problem was seen w/ the GNU compilers on the same 4 systems.
<br>
This looks to be a libtool bug in support for the Sun C++ compiler, 
<br>
especially since configuring with &quot;--enable-static --disable-shared&quot; 
<br>
eliminates this problem (but is undesirable for obvious reasons).
<br>
A quick peek appears to show some dangling symlinks:
<br>
<span class="quotelev1">&gt; $ ls -l ompi/mpi/cxx/.libs/
</span><br>
<span class="quotelev1">&gt; total 869
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff 116944 2012-01-19 18:09 comm.o
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff  41644 2012-01-19 18:09 datatype.o
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff  17240 2012-01-19 18:09 file.o
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff 222592 2012-01-19 18:09 intercepts.o
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 phargrov staff     16 2012-01-19 18:09 libmpi_cxx.la -&gt; 
</span><br>
<span class="quotelev1">&gt; ../libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff   1262 2012-01-19 18:09 libmpi_cxx.lai
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 phargrov staff     19 2012-01-19 18:09 libmpi_cxx.so -&gt; 
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 phargrov staff     19 2012-01-19 18:09 libmpi_cxx.so.0 -&gt; 
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff 267364 2012-01-19 18:09 mpicxx.o
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 phargrov staff  46660 2012-01-19 18:09 win.o
</span><br>
It is possible that the library build failed in &quot;make all&quot; w/o 
<br>
terminating the build (I've seen such things before).
<br>
The initial evidence in the &quot;make all&quot; output does suggest no shared lib 
<br>
was built:
<br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link sunCC  -O -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -m64  -version-info 0:1:0 -export-dynamic   -o libmpi_cxx.la -rpath 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-ss12u2/INST/lib 
</span><br>
<span class="quotelev1">&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/libmpi.la -lsocket -lnsl  -lm -lthread
</span><br>
<span class="quotelev1">&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.so.0&quot; &amp;&amp; ln -s 
</span><br>
<span class="quotelev1">&gt; &quot;libmpi_cxx.so.0.0.1&quot; &quot;libmpi_cxx.so.0&quot;)
</span><br>
<span class="quotelev1">&gt; libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.so&quot; &amp;&amp; ln -s 
</span><br>
<span class="quotelev1">&gt; &quot;libmpi_cxx.so.0.0.1&quot; &quot;libmpi_cxx.so&quot;)
</span><br>
<span class="quotelev1">&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.la&quot; &amp;&amp; ln -s 
</span><br>
<span class="quotelev1">&gt; &quot;../libmpi_cxx.la&quot; &quot;libmpi_cxx.la&quot; )
</span><br>
Note the lack of any suncc or sunCC command beween the libtool command 
<br>
line and the &quot;rm &amp;&amp; ln&quot; commands.
<br>
Inspecting the configure-generated libtool confirms what looks like 
<br>
improper config for tag=CXX:
<br>
<span class="quotelev1">&gt; $ grep -e &quot;BEGIN LIBTOOL TAG CONFIG: [FC]&quot; -e ^archive_cmds libtool
</span><br>
<span class="quotelev1">&gt; archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname -o \$lib 
</span><br>
<span class="quotelev1">&gt; \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev1">&gt; # ### BEGIN LIBTOOL TAG CONFIG: CXX
</span><br>
<span class="quotelev1">&gt; archive_cmds=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; # ### BEGIN LIBTOOL TAG CONFIG: F77
</span><br>
<span class="quotelev1">&gt; archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname -o \$lib 
</span><br>
<span class="quotelev1">&gt; \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev1">&gt; # ### BEGIN LIBTOOL TAG CONFIG: FC
</span><br>
<span class="quotelev1">&gt; archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname -o \$lib 
</span><br>
<span class="quotelev1">&gt; \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
I'll be happy to provide all or part of config.log to Ralf W. or other 
<br>
interested persons to debug this.
<br>
<p>I suppose I could have tried w/o C++ bindings instead of disabling 
<br>
libtool, but with F77 and F90 bindings already disabled on the SPARCs 
<br>
that didn't feel to me like a very good use of my time.
<br>
<p><p>An additional annoyance on one platform:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solaris-10 Generic_142901-03/i386
<br>
Is additionally unhappy with the atomics, yielding the following 
<br>
warnings for every file that include atomic.h:
<br>
<span class="quotelev1">&gt; &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;, 
</span><br>
<span class="quotelev1">&gt; line 170: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev1">&gt; &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;, 
</span><br>
<span class="quotelev1">&gt; line 170: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;, 
</span><br>
<span class="quotelev1">&gt; line 187: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev1">&gt; &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;, 
</span><br>
<span class="quotelev1">&gt; line 187: warning: parameter in inline asm statement unused: %2
</span><br>
This is annoying, but &quot;make check&quot; passes all tests.
<br>
<p><p>-Paul
<br>
<p><p><pre>
-- 
Paul H. HargrovePHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10235.php">Y.MATSUMOTO: "[OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>Previous message:</strong> <a href="10233.php">Alex.Burton_at_[hidden]: "[OMPI devel] Launch windows nodes from linux"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10253.php">Paul H. Hargrove: "[OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>Reply:</strong> <a href="10253.php">Paul H. Hargrove: "[OMPI devel] SOLVED: 1.4.5rc2 Solaris results [libtool problem]"</a>
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
