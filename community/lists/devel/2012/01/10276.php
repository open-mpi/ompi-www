<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 06:51:04 2012" -->
<!-- isoreceived="20120130115104" -->
<!-- sent="Mon, 30 Jan 2012 06:50:57 -0500" -->
<!-- isosent="20120130115057" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results" -->
<!-- id="4F268421.30504_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16Ha+2R+zWey3T0FFH__RimnTmEmeinF-sT7Bv1-z9BjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 06:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10277.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<li><strong>In reply to:</strong> <a href="10272.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/2012 7:40 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I can additionally report success w/ ILP32 builds with both SS12.2 and 
</span><br>
<span class="quotelev1">&gt; 12.3 compilers on x86-64 and sun4v systems running Solaris and 
</span><br>
<span class="quotelev1">&gt; x86-64/Linux:
</span><br>
<span class="quotelev1">&gt;    solaris-10 Generic_137111-07/sun4v (*FLAGS=&quot;-m32 -xarch=sparc&quot; for 
</span><br>
<span class="quotelev1">&gt; v8plus ABI)
</span><br>
<span class="quotelev1">&gt;    solaris-11 snv_151a/amd64 [incl. ofud, openib and dapl]  (*FLAGS=-m32)
</span><br>
<span class="quotelev1">&gt;    linux/x86-64 (*FLAGS=-m32)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Linux I had to &quot;LD_LIBRARY_PATH=:/lib32:/usr/lib32&quot;, but that seems 
</span><br>
<span class="quotelev1">&gt; to be an Solaris Studio issue, rather than an OMPI or libtool one. 
</span><br>
<span class="quotelev1">&gt;  That was NOT necessary to get a ILP32 using GCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This sounds like more a runpath (mis)setting to me.  Can you send me 
<br>
your config.log and a copy of your make output?  Did you run into the 
<br>
same issue with -m64?
<br>
<span class="quotelev1">&gt; My sun4u (single-CPU UltraSparcIII) system is just too painfully slow 
</span><br>
<span class="quotelev1">&gt; to test yet again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'd imagine so :-).
<br>
<p>Thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 25, 2012 at 11:49 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am pleased to report that w/ help from Terry I can now build
</span><br>
<span class="quotelev1">&gt;     nearly everything w/ the Solaris Studio 12.2 and 12.3 compilers.
</span><br>
<span class="quotelev1">&gt;     Upon comparing our build environments we discovered that CXX=CC
</span><br>
<span class="quotelev1">&gt;     works but CXX=sunCC does not, even though they are both symlinks
</span><br>
<span class="quotelev1">&gt;     to the same compiler executable.  I still don't know the root
</span><br>
<span class="quotelev1">&gt;     cause (though libtool and associated configure logic is still the
</span><br>
<span class="quotelev1">&gt;     obvious suspect), but the work around is simple:
</span><br>
<span class="quotelev1">&gt;        When using the Solaris Studio compilers on Solaris, one must
</span><br>
<span class="quotelev1">&gt;     set CXX=CC rather than  CXX=sunCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So I am following that advice, and have additionally:
</span><br>
<span class="quotelev1">&gt;     + gotten  up-to-date patches applied to resolve my FORTRAN and OMP
</span><br>
<span class="quotelev1">&gt;     issues on the SPARC-T2 system.
</span><br>
<span class="quotelev1">&gt;     + installed both 12.2 and 12.3 compilers on Linux/x86-64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So, I can now report the following ALL work (defined as &quot;make all
</span><br>
<span class="quotelev1">&gt;     check install&quot;) with BOTH 12.2 and 12.3 Solaris Studio compilers.
</span><br>
<span class="quotelev1">&gt;     The only configure flags are --prefix, setting the CC, CXX, F77
</span><br>
<span class="quotelev1">&gt;     and FC variables, and (when appropriate) setting *FLAGS=-m64.
</span><br>
<span class="quotelev1">&gt;        solaris-10 s10_69/sun4u (w/ -m64)
</span><br>
<span class="quotelev1">&gt;        solaris-10 Generic_137111-07/sun4v (w/ -m64)
</span><br>
<span class="quotelev1">&gt;        solaris-11 snv_151a/amd64 [including ofud, openib and dapl] (w/
</span><br>
<span class="quotelev1">&gt;     -m64)
</span><br>
<span class="quotelev1">&gt;        linux/x86-64 (no -m64 needed because it is the default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The following works w/ the 12.2 compilers:
</span><br>
<span class="quotelev1">&gt;        solaris-10 Generic_142901-03/i386
</span><br>
<span class="quotelev1">&gt;     However, the f77/f90 compilers in 12.3 are generating code using
</span><br>
<span class="quotelev1">&gt;     SSE2 instructions even when passed -xarch=pentium_pro.
</span><br>
<span class="quotelev1">&gt;     So this machine cannot run the resulting executables.  So, I had
</span><br>
<span class="quotelev1">&gt;     to --disable-mpi-f77 to get things to work.
</span><br>
<span class="quotelev1">&gt;     That, however, is NOT an OMPI problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 1/19/2012 11:21 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         As promised earlier today, here are results from my Solaris
</span><br>
<span class="quotelev1">&gt;         platforms.
</span><br>
<span class="quotelev1">&gt;         Note that there are libtool-related failures below that may be
</span><br>
<span class="quotelev1">&gt;         worth pursuing.
</span><br>
<span class="quotelev1">&gt;         If necessary, access to most of my machines can be arranged
</span><br>
<span class="quotelev1">&gt;         for qualified persons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         == GNU compilers with {C,CXX,F77,FC}FLAGS=-mcpu=v9 on SPARCs,
</span><br>
<span class="quotelev1">&gt;         and -m64 on amd64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         PASS:
</span><br>
<span class="quotelev1">&gt;            solaris-10 s10_69/sun4u (w/ g77, no FC)
</span><br>
<span class="quotelev1">&gt;            solaris-10 Generic_142901-03/i386 (w/ Sun's f77 and f95,
</span><br>
<span class="quotelev1">&gt;         both dated April 2009)
</span><br>
<span class="quotelev1">&gt;            solaris-11 snv_151a/amd64 [including ofud, openib and dapl]
</span><br>
<span class="quotelev1">&gt;         (w/ g77, no FC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         FAIL:
</span><br>
<span class="quotelev1">&gt;            solaris-10 Generic_137111-07/sun4v with default GNU compilers
</span><br>
<span class="quotelev1">&gt;         Using system default gcc, which is actually Sun's
</span><br>
<span class="quotelev1">&gt;         gccfss-4.0.4, there are assertion failures seen in the atomics
</span><br>
<span class="quotelev1">&gt;         in &quot;make check&quot;.  I can provide details is anybody cares, but
</span><br>
<span class="quotelev1">&gt;         I know from past experience that support for gcc-style inline
</span><br>
<span class="quotelev1">&gt;         asm is marginal in this compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         == Sun Studio 12.2 compilers w/ {C,CXX,F77,FC}=-m64 on SPARCs
</span><br>
<span class="quotelev1">&gt;         and amd64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Both of my SPARC systems appear to have an out-of-date
</span><br>
<span class="quotelev1">&gt;         libmtsk.so, which both prevents the Sun f77 and f90 compilers
</span><br>
<span class="quotelev1">&gt;         from running at all, and additionally leads to failure like
</span><br>
<span class="quotelev1">&gt;         the following when building OpenMP support in VT:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /bin/bash ../../libtool --tag=CXX    --mode=link sunCC
</span><br>
<span class="quotelev1">&gt;             -xopenmp -DVT_OMP  -m64 -xopenmp  -o vtfilter
</span><br>
<span class="quotelev1">&gt;             vtfilter-vt_filter.o  vtfilter-vt_filthandler.o
</span><br>
<span class="quotelev1">&gt;              vtfilter-vt_otfhandler.o  vtfilter-vt_tracefilter.o
</span><br>
<span class="quotelev1">&gt;             ../../util/util.o  -L../../extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt;             -L../../extlib/otf/otflib/.libs -lotf  -lz -lsocket -lnsl
</span><br>
<span class="quotelev1">&gt;              -lrt -lm -lthread
</span><br>
<span class="quotelev1">&gt;             libtool: link: sunCC -xopenmp -DVT_OMP -m64 -xopenmp -o
</span><br>
<span class="quotelev1">&gt;             vtfilter vtfilter-vt_filter.o vtfilter-vt_filthandler.o
</span><br>
<span class="quotelev1">&gt;             vtfilter-vt_otfhandler.o vtfilter-vt_tracefilter.o
</span><br>
<span class="quotelev1">&gt;             ../../util/util.o
</span><br>
<span class="quotelev1">&gt;              -L/home/hargrove/OMPI/openmpi-1.4.5rc2-solaris10-sparcT2-ss12u2/BLD/ompi/contrib/vt/vt/extlib/otf/otflib/.libs
</span><br>
<span class="quotelev1">&gt;             -L/home/hargrove/OMPI/openmpi-1.4.5rc2-solaris10-sparcT2-ss12u2/BLD/ompi/contrib/vt/vt/extlib/otf/otflib
</span><br>
<span class="quotelev1">&gt;             /home/hargrove/OMPI/openmpi-1.4.5rc2-solaris10-sparcT2-ss12u2/BLD/ompi/contrib/vt/vt/extlib/otf/otflib/.libs/libotf.a
</span><br>
<span class="quotelev1">&gt;             -lz -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev1">&gt;             CC: Warning: Optimizer level changed from 0 to 3 to
</span><br>
<span class="quotelev1">&gt;             support parallelized code.
</span><br>
<span class="quotelev1">&gt;             Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;              symbol                             in file
</span><br>
<span class="quotelev1">&gt;             __mt_MasterFunction_cxt_            vtfilter-vt_tracefilter.o
</span><br>
<span class="quotelev1">&gt;             ld: fatal: Symbol referencing errors. No output written to
</span><br>
<span class="quotelev1">&gt;             vtfilter
</span><br>
<span class="quotelev1">&gt;             *** Error code 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This is a lack of required Solaris patches and NOT an ompi or
</span><br>
<span class="quotelev1">&gt;         vt problem to be solved.
</span><br>
<span class="quotelev1">&gt;         However, as a result my two SPARC platforms are configured with
</span><br>
<span class="quotelev1">&gt;           --disable-mpi-f77 --disable-mpi-f90
</span><br>
<span class="quotelev1">&gt;         --with-contrib-vt-flags=&quot;--disable-omp --disable-hyb&quot;
</span><br>
<span class="quotelev1">&gt;         [It took a bit of work to figure out how disable OMP and not
</span><br>
<span class="quotelev1">&gt;         just VT in its entirety.]
</span><br>
<span class="quotelev1">&gt;         I report this info just to note that my SPARC testing is
</span><br>
<span class="quotelev1">&gt;         &quot;narrower&quot; than on my x86 and amd64 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The one &quot;real&quot; problem I found appears to be libtool related
</span><br>
<span class="quotelev1">&gt;         and impacted all 4 platforms:
</span><br>
<span class="quotelev1">&gt;            solaris-10 s10_69/sun4u
</span><br>
<span class="quotelev1">&gt;            solaris-10 Generic_142901-03/i386
</span><br>
<span class="quotelev1">&gt;            solaris-11 snv_151a/amd64 [including ofud, openib and dapl]
</span><br>
<span class="quotelev1">&gt;            solaris-10 Generic_137111-07/sun4v
</span><br>
<span class="quotelev1">&gt;         No problem with &quot;make all&quot; or with &quot;make check&quot;, but &quot;make
</span><br>
<span class="quotelev1">&gt;         install&quot; fails with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Making install in mpi/cxx
</span><br>
<span class="quotelev1">&gt;             make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;             `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;             make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt;             `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;             test -z
</span><br>
<span class="quotelev1">&gt;             &quot;/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib&quot;
</span><br>
<span class="quotelev1">&gt;             || /usr/gnu/bin/mkdir -p
</span><br>
<span class="quotelev1">&gt;             &quot;/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib&quot;
</span><br>
<span class="quotelev1">&gt;              /bin/sh ../../../libtool   --mode=install
</span><br>
<span class="quotelev1">&gt;             /usr/bin/ginstall -c  'libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;'
</span><br>
<span class="quotelev1">&gt;             '/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib/libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;'
</span><br>
<span class="quotelev1">&gt;             libtool: install: warning: relinking `libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;'
</span><br>
<span class="quotelev1">&gt;             libtool: install: (cd
</span><br>
<span class="quotelev1">&gt;             /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx;
</span><br>
<span class="quotelev1">&gt;             /bin/sh
</span><br>
<span class="quotelev1">&gt;             /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/libtool
</span><br>
<span class="quotelev1">&gt;              --tag CXX --mode=relink sunCC -O -DNDEBUG -m64
</span><br>
<span class="quotelev1">&gt;             -version-info 0:1:0 -export-dynamic -o libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt; -rpath
</span><br>
<span class="quotelev1">&gt;             /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/INST/lib
</span><br>
<span class="quotelev1">&gt;             mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo
</span><br>
<span class="quotelev1">&gt;             ../../../ompi/libmpi.la &lt;<a href="http://libmpi.la">http://libmpi.la</a>&gt; -lsocket -lnsl
</span><br>
<span class="quotelev1">&gt;             -lm -lthread )
</span><br>
<span class="quotelev1">&gt;             mv: cannot stat `libmpi_cxx.so.0.0.1': No such file or
</span><br>
<span class="quotelev1">&gt;             directory
</span><br>
<span class="quotelev1">&gt;             libtool: install: error: relink `libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;' with the above command before
</span><br>
<span class="quotelev1">&gt;             installing it
</span><br>
<span class="quotelev1">&gt;             make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt;             make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;             make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt;             make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;             make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-suncc/BLD/ompi'
</span><br>
<span class="quotelev1">&gt;             make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         No such problem was seen w/ the GNU compilers on the same 4
</span><br>
<span class="quotelev1">&gt;         systems.
</span><br>
<span class="quotelev1">&gt;         This looks to be a libtool bug in support for the Sun C++
</span><br>
<span class="quotelev1">&gt;         compiler, especially since configuring with &quot;--enable-static
</span><br>
<span class="quotelev1">&gt;         --disable-shared&quot; eliminates this problem (but is undesirable
</span><br>
<span class="quotelev1">&gt;         for obvious reasons).
</span><br>
<span class="quotelev1">&gt;         A quick peek appears to show some dangling symlinks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             $ ls -l ompi/mpi/cxx/.libs/
</span><br>
<span class="quotelev1">&gt;             total 869
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff 116944 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 comm.o
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff  41644 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 datatype.o
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff  17240 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 file.o
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff 222592 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 intercepts.o
</span><br>
<span class="quotelev1">&gt;             lrwxrwxrwx 1 phargrov staff     16 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt; -&gt; ../libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff   1262 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 libmpi_cxx.lai
</span><br>
<span class="quotelev1">&gt;             lrwxrwxrwx 1 phargrov staff     19 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 libmpi_cxx.so -&gt; libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev1">&gt;             lrwxrwxrwx 1 phargrov staff     19 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 libmpi_cxx.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;             libmpi_cxx.so.0.0.1
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff 267364 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 mpicxx.o
</span><br>
<span class="quotelev1">&gt;             -rw-r--r-- 1 phargrov staff  46660 2012-01-19 18
</span><br>
<span class="quotelev1">&gt;             &lt;tel:2012-01-19%2018&gt;:09 win.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         It is possible that the library build failed in &quot;make all&quot; w/o
</span><br>
<span class="quotelev1">&gt;         terminating the build (I've seen such things before).
</span><br>
<span class="quotelev1">&gt;         The initial evidence in the &quot;make all&quot; output does suggest no
</span><br>
<span class="quotelev1">&gt;         shared lib was built:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /bin/sh ../../../libtool --tag=CXX   --mode=link sunCC  -O
</span><br>
<span class="quotelev1">&gt;             -DNDEBUG -m64  -version-info 0:1:0 -export-dynamic   -o
</span><br>
<span class="quotelev1">&gt;             libmpi_cxx.la &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt; -rpath
</span><br>
<span class="quotelev1">&gt;             /home/phargrov/OMPI/openmpi-1.4.5rc2-solaris11-x64-ib-ss12u2/INST/lib
</span><br>
<span class="quotelev1">&gt;             mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo
</span><br>
<span class="quotelev1">&gt;             ../../../ompi/libmpi.la &lt;<a href="http://libmpi.la">http://libmpi.la</a>&gt; -lsocket -lnsl
</span><br>
<span class="quotelev1">&gt;              -lm -lthread
</span><br>
<span class="quotelev1">&gt;             libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.so.0&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt;             ln -s &quot;libmpi_cxx.so.0.0.1&quot; &quot;libmpi_cxx.so.0&quot;)
</span><br>
<span class="quotelev1">&gt;             libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.so&quot; &amp;&amp; ln
</span><br>
<span class="quotelev1">&gt;             -s &quot;libmpi_cxx.so.0.0.1&quot; &quot;libmpi_cxx.so&quot;)
</span><br>
<span class="quotelev1">&gt;             libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;&quot; &amp;&amp; ln -s &quot;../libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;&quot; &quot;libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libmpi_cxx.la">http://libmpi_cxx.la</a>&gt;&quot; )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Note the lack of any suncc or sunCC command beween the libtool
</span><br>
<span class="quotelev1">&gt;         command line and the &quot;rm &amp;&amp; ln&quot; commands.
</span><br>
<span class="quotelev1">&gt;         Inspecting the configure-generated libtool confirms what looks
</span><br>
<span class="quotelev1">&gt;         like improper config for tag=CXX:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             $ grep -e &quot;BEGIN LIBTOOL TAG CONFIG: [FC]&quot; -e
</span><br>
<span class="quotelev1">&gt;             ^archive_cmds libtool
</span><br>
<span class="quotelev1">&gt;             archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname
</span><br>
<span class="quotelev1">&gt;             -o \$lib \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev1">&gt;             # ### BEGIN LIBTOOL TAG CONFIG: CXX
</span><br>
<span class="quotelev1">&gt;             archive_cmds=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;             # ### BEGIN LIBTOOL TAG CONFIG: F77
</span><br>
<span class="quotelev1">&gt;             archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname
</span><br>
<span class="quotelev1">&gt;             -o \$lib \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev1">&gt;             # ### BEGIN LIBTOOL TAG CONFIG: FC
</span><br>
<span class="quotelev1">&gt;             archive_cmds=&quot;\$CC -G\${allow_undefined_flag} -h \$soname
</span><br>
<span class="quotelev1">&gt;             -o \$lib \$libobjs \$deplibs \$compiler_flags&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'll be happy to provide all or part of config.log to Ralf W.
</span><br>
<span class="quotelev1">&gt;         or other interested persons to debug this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I suppose I could have tried w/o C++ bindings instead of
</span><br>
<span class="quotelev1">&gt;         disabling libtool, but with F77 and F90 bindings already
</span><br>
<span class="quotelev1">&gt;         disabled on the SPARCs that didn't feel to me like a very good
</span><br>
<span class="quotelev1">&gt;         use of my time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         An additional annoyance on one platform:
</span><br>
<span class="quotelev1">&gt;            solaris-10 Generic_142901-03/i386
</span><br>
<span class="quotelev1">&gt;         Is additionally unhappy with the atomics, yielding the
</span><br>
<span class="quotelev1">&gt;         following warnings for every file that include atomic.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;             line 170: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev1">&gt;             &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;             line 170: warning: parameter in inline asm statement
</span><br>
<span class="quotelev1">&gt;             unused: %2
</span><br>
<span class="quotelev1">&gt;             &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;             line 187: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev1">&gt;             &quot;/export/home/phargrov/OMPI/openmpi-1.4.5rc2-solaris10-x86-ss12u2//openmpi-1.4.5rc2/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;             line 187: warning: parameter in inline asm statement
</span><br>
<span class="quotelev1">&gt;             unused: %2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This is annoying, but &quot;make check&quot; passes all tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Future Technologies Group
</span><br>
<span class="quotelev1">&gt;     HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352 
</span><br>
<span class="quotelev1">&gt; &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 
</span><br>
<span class="quotelev1">&gt; &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;
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
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10277.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10275.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up"</a>
<li><strong>In reply to:</strong> <a href="10272.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
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
