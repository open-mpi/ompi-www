<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 12:59:18 2008" -->
<!-- isoreceived="20081017165918" -->
<!-- sent="Fri, 17 Oct 2008 12:59:06 -0400" -->
<!-- isosent="20081017165906" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems" -->
<!-- id="20081017165905.GG24605_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48F8B4E3.6010404_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 12:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7021.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7014.php">Paul Kapinos: "[OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Reply:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct/17/2008 05:53:07PM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you test OpenMPI 1.2.8 on Solaris at all?!
</span><br>
<p>We built 1.2.8 on Solaris successfully a few days ago:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=869">http://www.open-mpi.org/mtt/index.php?do_redir=869</a>
<br>
<p>But due to hardware/software/man-hour resource limitations,
<br>
there are often combinations of configure options, mpirun
<br>
options, etc. that end up going untested. E.g., I see you're
<br>
using some configure options we haven't tried:
<br>
<p>&nbsp;* --enable-ltdl-convenience 
<br>
&nbsp;* --no-create 
<br>
&nbsp;* --no-recursion
<br>
&nbsp;* GCC on Solaris 
<br>
<p><p><span class="quotelev1">&gt; We tried to compile OpenMPI 1.2.8 on Solaris on Sparc and on Opteron for 
</span><br>
<span class="quotelev1">&gt; both GCC and SUN Studio compiler, in 32bit and 64bit versions, at all 
</span><br>
<span class="quotelev1">&gt; 2*2*2=8 versions, in the very same maneer we have installed 1.2.5 and 1.2.6 
</span><br>
<span class="quotelev1">&gt; versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuring processes runs through, but if &quot;gmake all&quot; called, it seems 
</span><br>
<span class="quotelev1">&gt; to be so, that the configure stage restarts or being resumed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ......
</span><br>
<span class="quotelev1">&gt; orte/mca/smr/bproc/Makefile.am:47: Libtool library used but `LIBTOOL' is 
</span><br>
<span class="quotelev1">&gt; undefined
</span><br>
<span class="quotelev1">&gt; orte/mca/smr/bproc/Makefile.am:47:   The usual way to define `LIBTOOL' is 
</span><br>
<span class="quotelev1">&gt; to add `AC_PROG_LIBTOOL'
</span><br>
<span class="quotelev1">&gt; orte/mca/smr/bproc/Makefile.am:47:   to `configure.ac' and run `aclocal' 
</span><br>
<span class="quotelev1">&gt; and `autoconf' again.
</span><br>
<span class="quotelev1">&gt; orte/mca/smr/bproc/Makefile.am:47:   If `AC_PROG_LIBTOOL' is in 
</span><br>
<span class="quotelev1">&gt; `configure.ac', make sure
</span><br>
<span class="quotelev1">&gt; orte/mca/smr/bproc/Makefile.am:47:   its definition is in aclocal's search 
</span><br>
<span class="quotelev1">&gt; path.
</span><br>
<span class="quotelev1">&gt; test/support/Makefile.am:29: library used but `RANLIB' is undefined
</span><br>
<span class="quotelev1">&gt; test/support/Makefile.am:29:   The usual way to define `RANLIB' is to add 
</span><br>
<span class="quotelev1">&gt; `AC_PROG_RANLIB'
</span><br>
<span class="quotelev1">&gt; test/support/Makefile.am:29:   to `configure.ac' and run `autoconf' again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ..... and breaks.
</span><br>
<p>I'm confused why aclocal (or are these automake errors?) is
<br>
getting invoked in &quot;gmake all&quot;. Did you try running
<br>
&quot;aclocal&quot; and &quot;autoconf&quot; in the top-level directory? (You
<br>
shouldn't have to do that, but it might resolve this
<br>
problem.) Make sure &quot;ranlib&quot; is in your PATH, mine's at
<br>
/usr/ccs/bin/ranlib.
<br>
<p>(Also, we don't have a sys/bproc.h file on our lab machine,
<br>
so the above might be an untested scenario.)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If &quot;gmake all&quot; again we also see error messages like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking gfortran external symbol convention... ./configure: line 26340: 
</span><br>
<span class="quotelev1">&gt; ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt; ./configure: line 26342: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt; ./configure: line 26344: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt; ./configure: line 26346: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt; ./configure: line 26348: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt; configure: error: Could not determine Fortran naming convention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We didn't test 1.2.8 with GCC/Solaris. Let me see if we can
<br>
reproduce this, and get back to you.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Considered the configure script we see on these lines in ./configire:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if $NM conftest.o | grep foo_bar__ &gt;/dev/null 2&gt;&amp;1 ; then
</span><br>
<span class="quotelev1">&gt;                       ompi_cv_f77_external_symbol=&quot;double underscore&quot;
</span><br>
<span class="quotelev1">&gt;     elif $NM conftest.o | grep foo_bar_ &gt;/dev/null 2&gt;&amp;1 ; then
</span><br>
<span class="quotelev1">&gt;         ompi_cv_f77_external_symbol=&quot;single underscore&quot;
</span><br>
<span class="quotelev1">&gt;     elif $NM conftest.o | grep FOO_bar &gt;/dev/null 2&gt;&amp;1 ; then
</span><br>
<span class="quotelev1">&gt;         ompi_cv_f77_external_symbol=&quot;mixed case&quot;
</span><br>
<span class="quotelev1">&gt;     elif $NM conftest.o | grep foo_bar &gt;/dev/null 2&gt;&amp;1 ; then
</span><br>
<span class="quotelev1">&gt;         ompi_cv_f77_external_symbol=&quot;no underscore&quot;
</span><br>
<span class="quotelev1">&gt;     elif $NM conftest.o | grep FOO_BAR &gt;/dev/null 2&gt;&amp;1 ; then
</span><br>
<span class="quotelev1">&gt;         ompi_cv_f77_external_symbol=&quot;upper case&quot;
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;         $NM conftest.o &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....and searching through ./configire says us, that $NM is never set 
</span><br>
<span class="quotelev1">&gt; (neither in ./configure nor in our environment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is &quot;nm&quot; in your path? I have this in my config.log file:
<br>
<p>&nbsp;&nbsp;NM='/usr/ccs/bin/nm -p'
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, we think that somewhat is not OK with ./configure script. Attend to the 
</span><br>
<span class="quotelev1">&gt; fact, that we were able to install 1.2.5 and 1.2.6 some time ago on same 
</span><br>
<span class="quotelev1">&gt; boxes without problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or maybe we do somewhat wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; HPC Group RZ RWTH Aachen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Folks, does somebody compiled OpenMPI 1.2.8 on someone Solaris 
</span><br>
<span class="quotelev1">&gt; sucessfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was created by Open MPI configure 1.2.8, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.61.  Invocation command line was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ ./configure --with-devel-headers CFLAGS=-O2 -m64 CXXFLAGS=-O2 -m64 FFLAGS=-O2 -m64 FCFLAGS=-O2 -m64 LDFLAGS=-O2 -m64 --prefix=/rwthfs/rz/SW/MPI/openmpi-1.2.8/solx8664/gcc CC=gcc CXX=g++ FC=gfortran --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; ## Platform. ##
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hostname = sunoc63.rz.RWTH-Aachen.DE
</span><br>
<span class="quotelev1">&gt; uname -m = i86pc
</span><br>
<span class="quotelev1">&gt; uname -r = 5.10
</span><br>
<span class="quotelev1">&gt; uname -s = SunOS
</span><br>
<span class="quotelev1">&gt; uname -v = Generic_137112-06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/uname -p = i386
</span><br>
<span class="quotelev1">&gt; /bin/uname -X     = System = SunOS
</span><br>
<span class="quotelev1">&gt; Node = sunoc63.rz.RWTH-Aachen.DE
</span><br>
<span class="quotelev1">&gt; Release = 5.10
</span><br>
<span class="quotelev1">&gt; KernelID = Generic_137112-06
</span><br>
<span class="quotelev1">&gt; Machine = i86pc
</span><br>
<span class="quotelev1">&gt; BusType = &lt;unknown&gt;
</span><br>
<span class="quotelev1">&gt; Serial = &lt;unknown&gt;
</span><br>
<span class="quotelev1">&gt; Users = &lt;unknown&gt;
</span><br>
<span class="quotelev1">&gt; OEM# = 0
</span><br>
<span class="quotelev1">&gt; Origin# = 1
</span><br>
<span class="quotelev1">&gt; NumCPU = 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/arch              = i86pc
</span><br>
<span class="quotelev1">&gt; /usr/bin/arch -k       = i86pc
</span><br>
<span class="quotelev1">&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/hostinfo      = unknown
</span><br>
<span class="quotelev1">&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev1">&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH: /home/pk224850/bin
</span><br>
<span class="quotelev1">&gt; PATH: /rwthfs/rz/SW/UTIL.common/gcc/4.2/i386-pc-solaris2.10/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/pk224850/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/pk224850/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local_host/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local_host/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local_rwth/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local_rwth/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/dt/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/X11/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/java/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/openwin/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/ccs/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/ucb
</span><br>
<span class="quotelev1">&gt; PATH: /opt/SUNWexplo/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/sfw/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/sfw/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/csw/bin
</span><br>
<span class="quotelev1">&gt; PATH: .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## Core tests. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:2817: checking for a BSD-compatible install
</span><br>
<span class="quotelev1">&gt; configure:2873: result: /usr/local_rwth/bin/ginstall -c
</span><br>
<span class="quotelev1">&gt; configure:2884: checking whether build environment is sane
</span><br>
<span class="quotelev1">&gt; configure:2927: result: yes
</span><br>
<span class="quotelev1">&gt; configure:2955: checking for a thread-safe mkdir -p
</span><br>
<span class="quotelev1">&gt; configure:2994: result: /usr/local_rwth/bin/gmkdir -p
</span><br>
<span class="quotelev1">&gt; configure:3007: checking for gawk
</span><br>
<span class="quotelev1">&gt; configure:3023: found /usr/local_rwth/bin/gawk
</span><br>
<span class="quotelev1">&gt; configure:3034: result: gawk
</span><br>
<span class="quotelev1">&gt; configure:3045: checking whether make sets $(MAKE)
</span><br>
<span class="quotelev1">&gt; configure:3066: result: yes
</span><br>
<span class="quotelev1">&gt; configure:3375: checking Open MPI version
</span><br>
<span class="quotelev1">&gt; configure:3377: result: 1.2.8
</span><br>
<span class="quotelev1">&gt; configure:3379: checking Open MPI Subversion repository version
</span><br>
<span class="quotelev1">&gt; configure:3381: result: r19718
</span><br>
<span class="quotelev1">&gt; configure:3477: checking Open Run-Time Environment version
</span><br>
<span class="quotelev1">&gt; configure:3479: result: 1.2.8
</span><br>
<span class="quotelev1">&gt; configure:3481: checking Open Run-Time Environment Subversion repository version
</span><br>
<span class="quotelev1">&gt; configure:3483: result: r19718
</span><br>
<span class="quotelev1">&gt; configure:3579: checking Open Portable Access Layer version
</span><br>
<span class="quotelev1">&gt; configure:3581: result: 1.2.8
</span><br>
<span class="quotelev1">&gt; configure:3583: checking Open Portable Access Layer Subversion repository version
</span><br>
<span class="quotelev1">&gt; configure:3585: result: r19718
</span><br>
<span class="quotelev1">&gt; configure:3642: builddir: /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc
</span><br>
<span class="quotelev1">&gt; configure:3644: srcdir: /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc
</span><br>
<span class="quotelev1">&gt; configure:3666: checking build system type
</span><br>
<span class="quotelev1">&gt; configure:3684: result: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; configure:3726: checking host system type
</span><br>
<span class="quotelev1">&gt; configure:3741: result: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; configure:3932: checking Whether to run code coverage
</span><br>
<span class="quotelev1">&gt; configure:3959: result: no
</span><br>
<span class="quotelev1">&gt; configure:3969: checking whether to debug memory usage
</span><br>
<span class="quotelev1">&gt; configure:3981: result: no
</span><br>
<span class="quotelev1">&gt; configure:4001: checking whether to profile memory usage
</span><br>
<span class="quotelev1">&gt; configure:4013: result: no
</span><br>
<span class="quotelev1">&gt; configure:4033: checking if want developer-level compiler pickyness
</span><br>
<span class="quotelev1">&gt; configure:4045: result: no
</span><br>
<span class="quotelev1">&gt; configure:4060: checking if want developer-level debugging code
</span><br>
<span class="quotelev1">&gt; configure:4072: result: no
</span><br>
<span class="quotelev1">&gt; configure:4102: checking if want Fortran 77 bindings
</span><br>
<span class="quotelev1">&gt; configure:4110: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4124: checking if want Fortran 90 bindings
</span><br>
<span class="quotelev1">&gt; configure:4132: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4141: checking desired Fortran 90 bindings &quot;size&quot;
</span><br>
<span class="quotelev1">&gt; configure:4215: result: small
</span><br>
<span class="quotelev1">&gt; configure:4222: checking whether to enable PMPI
</span><br>
<span class="quotelev1">&gt; configure:4230: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4247: checking if want C++ bindings
</span><br>
<span class="quotelev1">&gt; configure:4255: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4264: checking if want MPI::SEEK_SET support
</span><br>
<span class="quotelev1">&gt; configure:4272: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4290: checking if want to enable weak symbol support
</span><br>
<span class="quotelev1">&gt; configure:4298: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4311: checking if want run-time MPI parameter checking
</span><br>
<span class="quotelev1">&gt; configure:4332: result: runtime
</span><br>
<span class="quotelev1">&gt; configure:4355: checking if want to install OMPI header files
</span><br>
<span class="quotelev1">&gt; configure:4364: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4384: checking if want pretty-print stacktrace
</span><br>
<span class="quotelev1">&gt; configure:4396: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4409: checking if want deprecated executable names
</span><br>
<span class="quotelev1">&gt; configure:4421: result: no
</span><br>
<span class="quotelev1">&gt; configure:4439: checking if peruse support is required
</span><br>
<span class="quotelev1">&gt; configure:4451: result: no
</span><br>
<span class="quotelev1">&gt; configure:4474: checking max supported array dimension in F90 MPI bindings
</span><br>
<span class="quotelev1">&gt; configure:4489: result: 4
</span><br>
<span class="quotelev1">&gt; configure:4494: checking if pty support should be enabled
</span><br>
<span class="quotelev1">&gt; configure:4506: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4519: checking if user wants dlopen support
</span><br>
<span class="quotelev1">&gt; configure:4534: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4542: checking if heterogeneous support should be enabled
</span><br>
<span class="quotelev1">&gt; configure:4554: result: yes
</span><br>
<span class="quotelev1">&gt; configure:4568: checking if want trace file debugging
</span><br>
<span class="quotelev1">&gt; configure:4580: result: no
</span><br>
<span class="quotelev1">&gt; configure:4652: checking if want IPv6 support
</span><br>
<span class="quotelev1">&gt; configure:4664: result: yes (if underlying system supports it)
</span><br>
<span class="quotelev1">&gt; configure:4677: checking if want orterun &quot;--prefix&quot; behavior to be enabled by default
</span><br>
<span class="quotelev1">&gt; configure:4697: result: no
</span><br>
<span class="quotelev1">&gt; configure:4856: checking for style of include used by make
</span><br>
<span class="quotelev1">&gt; configure:4884: result: GNU
</span><br>
<span class="quotelev1">&gt; configure:4959: checking for gcc
</span><br>
<span class="quotelev1">&gt; configure:4986: result: gcc
</span><br>
<span class="quotelev1">&gt; configure:5224: checking for C compiler version
</span><br>
<span class="quotelev1">&gt; configure:5231: gcc --version &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.2.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:5234: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5241: gcc -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; Configured with: ./configure --prefix=/rwthfs/rz/SW/UTIL.common/gcc/4.2.2/x86_32-pc-solaris2.10 --enable-languages=c,c++,fortran --with-gnu-as --with-as=/usr/sfw/bin/gas --with-gmp=/rwthfs/rz/SW/UTIL.common/gcc/gmp-4.2.2/x86_32-pc-solaris2.10 --with-mpfr=/rwthfs/rz/SW/UTIL.common/gcc/mpfr-2.3.0/x86_32-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.2
</span><br>
<span class="quotelev1">&gt; configure:5244: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5251: gcc -V &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc: '-V' option must have argument
</span><br>
<span class="quotelev1">&gt; configure:5254: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:5277: checking for C compiler default output file name
</span><br>
<span class="quotelev1">&gt; configure:5304: gcc -DNDEBUG -O2 -m64  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5307: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5345: result: a.out
</span><br>
<span class="quotelev1">&gt; configure:5362: checking whether the C compiler works
</span><br>
<span class="quotelev1">&gt; configure:5372: ./a.out
</span><br>
<span class="quotelev1">&gt; configure:5375: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5392: result: yes
</span><br>
<span class="quotelev1">&gt; configure:5399: checking whether we are cross compiling
</span><br>
<span class="quotelev1">&gt; configure:5401: result: no
</span><br>
<span class="quotelev1">&gt; configure:5404: checking for suffix of executables
</span><br>
<span class="quotelev1">&gt; configure:5411: gcc -o conftest -DNDEBUG -O2 -m64  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5414: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5438: result: 
</span><br>
<span class="quotelev1">&gt; configure:5444: checking for suffix of object files
</span><br>
<span class="quotelev1">&gt; configure:5470: gcc -c -DNDEBUG -O2 -m64  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5473: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5496: result: o
</span><br>
<span class="quotelev1">&gt; configure:5500: checking whether we are using the GNU C compiler
</span><br>
<span class="quotelev1">&gt; configure:5529: gcc -c -DNDEBUG -O2 -m64  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5535: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5552: result: yes
</span><br>
<span class="quotelev1">&gt; configure:5557: checking whether gcc accepts -g
</span><br>
<span class="quotelev1">&gt; configure:5587: gcc -c -g  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5593: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5692: result: yes
</span><br>
<span class="quotelev1">&gt; configure:5709: checking for gcc option to accept ISO C89
</span><br>
<span class="quotelev1">&gt; configure:5783: gcc  -c -DNDEBUG -O2 -m64  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5789: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5812: result: none needed
</span><br>
<span class="quotelev1">&gt; configure:5832: checking dependency style of gcc
</span><br>
<span class="quotelev1">&gt; configure:5923: result: gcc3
</span><br>
<span class="quotelev1">&gt; configure:5949: checking whether gcc and cc understand -c and -o together
</span><br>
<span class="quotelev1">&gt; configure:5984: gcc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5987: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:5993: gcc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:5996: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6007: cc -c conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:6010: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6018: cc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:6021: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6027: cc -c conftest.c -o conftest2.o &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:6030: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6048: result: yes
</span><br>
<span class="quotelev1">&gt; configure:6080: checking how to run the C preprocessor
</span><br>
<span class="quotelev1">&gt; configure:6120: gcc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; configure:6126: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6157: gcc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:37:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:6163: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:6196: result: gcc -E
</span><br>
<span class="quotelev1">&gt; configure:6225: gcc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; configure:6231: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6262: gcc -E  conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:37:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:6268: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:6306: checking for grep that handles long lines and -e
</span><br>
<span class="quotelev1">&gt; configure:6380: result: /usr/local_rwth/bin/ggrep
</span><br>
<span class="quotelev1">&gt; configure:6385: checking for egrep
</span><br>
<span class="quotelev1">&gt; configure:6463: result: /usr/local_rwth/bin/ggrep -E
</span><br>
<span class="quotelev1">&gt; configure:6480: checking for the C compiler vendor
</span><br>
<span class="quotelev1">&gt; configure:6513: gcc -c -DNDEBUG -O2 -m64  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:2:2: error: #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; conftest.c:3: error: expected '=', ',', ';', 'asm' or '__attribute__' before 'me'
</span><br>
<span class="quotelev1">&gt; configure:6519: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:6551: gcc -c -DNDEBUG -O2 -m64  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:6557: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7644: result: gnu
</span><br>
<span class="quotelev1">&gt; configure:7652: checking for ANSI C header files
</span><br>
<span class="quotelev1">&gt; configure:7682: gcc -c -DNDEBUG -O2 -m64  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7688: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7787: gcc -o conftest -DNDEBUG -O2 -m64  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:7790: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7796: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:7799: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:7816: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8440: checking if gcc supports -finline-functions
</span><br>
<span class="quotelev1">&gt; configure:8466: gcc -c -DNDEBUG -O2 -m64 -finline-functions  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8472: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8487: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8497: checking if gcc supports -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; configure:8523: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8529: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8544: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8620: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure:8770: checking if gcc supports __builtin_expect
</span><br>
<span class="quotelev1">&gt; configure:8797: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8803: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8820: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8834: checking if gcc supports __builtin_prefetch
</span><br>
<span class="quotelev1">&gt; configure:8861: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8867: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8884: result: yes
</span><br>
<span class="quotelev1">&gt; configure:8979: checking for C optimization flags
</span><br>
<span class="quotelev1">&gt; configure:9043: result: -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for sys/types.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for sys/stat.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for stdlib.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for string.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for memory.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for strings.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for inttypes.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for stdint.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9077: checking for unistd.h
</span><br>
<span class="quotelev1">&gt; configure:9098: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9104: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9120: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9132: checking for long long
</span><br>
<span class="quotelev1">&gt; configure:9162: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9168: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9183: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9194: checking for long double
</span><br>
<span class="quotelev1">&gt; configure:9224: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9230: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9245: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9256: checking for int8_t
</span><br>
<span class="quotelev1">&gt; configure:9286: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9292: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9307: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9318: checking for uint8_t
</span><br>
<span class="quotelev1">&gt; configure:9348: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9354: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9369: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9380: checking for int16_t
</span><br>
<span class="quotelev1">&gt; configure:9410: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9416: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9431: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9442: checking for uint16_t
</span><br>
<span class="quotelev1">&gt; configure:9472: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9478: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9493: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9504: checking for int32_t
</span><br>
<span class="quotelev1">&gt; configure:9534: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9540: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9555: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9566: checking for uint32_t
</span><br>
<span class="quotelev1">&gt; configure:9596: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9602: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9617: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9628: checking for int64_t
</span><br>
<span class="quotelev1">&gt; configure:9658: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9664: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9679: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9690: checking for uint64_t
</span><br>
<span class="quotelev1">&gt; configure:9720: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9726: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9741: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9752: checking for intptr_t
</span><br>
<span class="quotelev1">&gt; configure:9782: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9788: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9803: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9814: checking for uintptr_t
</span><br>
<span class="quotelev1">&gt; configure:9844: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9850: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9865: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9876: checking for mode_t
</span><br>
<span class="quotelev1">&gt; configure:9906: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9912: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9927: result: yes
</span><br>
<span class="quotelev1">&gt; configure:9938: checking for ssize_t
</span><br>
<span class="quotelev1">&gt; configure:9968: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:9974: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:9989: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10000: checking for ptrdiff_t
</span><br>
<span class="quotelev1">&gt; configure:10030: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10036: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10051: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10067: checking for char
</span><br>
<span class="quotelev1">&gt; configure:10097: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10103: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10118: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10125: checking size of char
</span><br>
<span class="quotelev1">&gt; configure:10427: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10430: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10436: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:10439: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10462: result: 1
</span><br>
<span class="quotelev1">&gt; configure:10472: checking for short
</span><br>
<span class="quotelev1">&gt; configure:10502: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10508: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10523: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10530: checking size of short
</span><br>
<span class="quotelev1">&gt; configure:10832: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10835: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10841: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:10844: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10867: result: 2
</span><br>
<span class="quotelev1">&gt; configure:10877: checking for int
</span><br>
<span class="quotelev1">&gt; configure:10907: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:10913: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:10928: result: yes
</span><br>
<span class="quotelev1">&gt; configure:10935: checking size of int
</span><br>
<span class="quotelev1">&gt; configure:11237: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11240: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11246: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:11249: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11272: result: 4
</span><br>
<span class="quotelev1">&gt; configure:11282: checking for long
</span><br>
<span class="quotelev1">&gt; configure:11312: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11318: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11333: result: yes
</span><br>
<span class="quotelev1">&gt; configure:11340: checking size of long
</span><br>
<span class="quotelev1">&gt; configure:11642: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:11645: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11651: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:11654: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:11677: result: 8
</span><br>
<span class="quotelev1">&gt; configure:11688: checking for long long
</span><br>
<span class="quotelev1">&gt; configure:11739: result: yes
</span><br>
<span class="quotelev1">&gt; configure:11746: checking size of long long
</span><br>
<span class="quotelev1">&gt; configure:12048: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12051: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12057: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:12060: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12083: result: 8
</span><br>
<span class="quotelev1">&gt; configure:12095: checking for long double
</span><br>
<span class="quotelev1">&gt; configure:12146: result: yes
</span><br>
<span class="quotelev1">&gt; configure:12153: checking size of long double
</span><br>
<span class="quotelev1">&gt; configure:12455: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12458: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12464: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:12467: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12490: result: 16
</span><br>
<span class="quotelev1">&gt; configure:12501: checking for float
</span><br>
<span class="quotelev1">&gt; configure:12531: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12537: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12552: result: yes
</span><br>
<span class="quotelev1">&gt; configure:12559: checking size of float
</span><br>
<span class="quotelev1">&gt; configure:12861: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12864: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12870: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:12873: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12896: result: 4
</span><br>
<span class="quotelev1">&gt; configure:12906: checking for double
</span><br>
<span class="quotelev1">&gt; configure:12936: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:12942: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:12957: result: yes
</span><br>
<span class="quotelev1">&gt; configure:12964: checking size of double
</span><br>
<span class="quotelev1">&gt; configure:13266: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:13269: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13275: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:13278: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13301: result: 8
</span><br>
<span class="quotelev1">&gt; configure:13311: checking for void *
</span><br>
<span class="quotelev1">&gt; configure:13341: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:13347: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13362: result: yes
</span><br>
<span class="quotelev1">&gt; configure:13369: checking size of void *
</span><br>
<span class="quotelev1">&gt; configure:13671: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:13674: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13680: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:13683: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13706: result: 8
</span><br>
<span class="quotelev1">&gt; configure:13716: checking for size_t
</span><br>
<span class="quotelev1">&gt; configure:13746: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:13752: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:13767: result: yes
</span><br>
<span class="quotelev1">&gt; configure:13774: checking size of size_t
</span><br>
<span class="quotelev1">&gt; configure:14076: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:14079: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14085: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:14088: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14111: result: 8
</span><br>
<span class="quotelev1">&gt; configure:14122: checking for ssize_t
</span><br>
<span class="quotelev1">&gt; configure:14173: result: yes
</span><br>
<span class="quotelev1">&gt; configure:14180: checking size of ssize_t
</span><br>
<span class="quotelev1">&gt; configure:14482: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:14485: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14491: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:14494: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14517: result: 8
</span><br>
<span class="quotelev1">&gt; configure:14529: checking for ptrdiff_t
</span><br>
<span class="quotelev1">&gt; configure:14580: result: yes
</span><br>
<span class="quotelev1">&gt; configure:14587: checking size of ptrdiff_t
</span><br>
<span class="quotelev1">&gt; configure:14889: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:14892: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14898: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:14901: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:14924: result: 8
</span><br>
<span class="quotelev1">&gt; configure:14941: checking alignment of char
</span><br>
<span class="quotelev1">&gt; configure:15331: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:15334: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15340: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:15343: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15365: result: 1
</span><br>
<span class="quotelev1">&gt; configure:15377: checking alignment of short
</span><br>
<span class="quotelev1">&gt; configure:15767: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:15770: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15776: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:15779: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:15801: result: 2
</span><br>
<span class="quotelev1">&gt; configure:15813: checking alignment of wchar_t
</span><br>
<span class="quotelev1">&gt; configure:16203: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:16206: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16212: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:16215: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16237: result: 4
</span><br>
<span class="quotelev1">&gt; configure:16249: checking alignment of int
</span><br>
<span class="quotelev1">&gt; configure:16639: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:16642: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16648: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:16651: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:16673: result: 4
</span><br>
<span class="quotelev1">&gt; configure:16685: checking alignment of long
</span><br>
<span class="quotelev1">&gt; configure:17075: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:17078: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17084: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:17087: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17109: result: 8
</span><br>
<span class="quotelev1">&gt; configure:17122: checking alignment of long long
</span><br>
<span class="quotelev1">&gt; configure:17512: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:17515: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17521: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:17524: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17546: result: 8
</span><br>
<span class="quotelev1">&gt; configure:17559: checking alignment of float
</span><br>
<span class="quotelev1">&gt; configure:17949: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:17952: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17958: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:17961: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17983: result: 4
</span><br>
<span class="quotelev1">&gt; configure:17995: checking alignment of double
</span><br>
<span class="quotelev1">&gt; configure:18385: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:18388: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18394: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:18397: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18419: result: 8
</span><br>
<span class="quotelev1">&gt; configure:18432: checking alignment of long double
</span><br>
<span class="quotelev1">&gt; configure:18822: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:18825: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18831: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:18834: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18856: result: 16
</span><br>
<span class="quotelev1">&gt; configure:18869: checking alignment of void *
</span><br>
<span class="quotelev1">&gt; configure:19259: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:19262: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19268: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:19271: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19293: result: 8
</span><br>
<span class="quotelev1">&gt; configure:19310: checking for C bool type
</span><br>
<span class="quotelev1">&gt; configure:19334: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:124: error: 'bool' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; conftest.c:124: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; conftest.c:124: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; conftest.c:124: error: expected ';' before 'bar'
</span><br>
<span class="quotelev1">&gt; conftest.c:124: error: 'bar' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; conftest.c:124: error: 'foo' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; configure:19340: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef STDC_HEADERS
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt; | # if !defined STDC_HEADERS &amp;&amp; defined HAVE_MEMORY_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;memory.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | # include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STRINGS_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;strings.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STDINT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | bool bar, foo = true; bar = foo;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19359: result: no
</span><br>
<span class="quotelev1">&gt; configure:19387: checking for inline
</span><br>
<span class="quotelev1">&gt; configure:19413: gcc -c -DNDEBUG -O2 -m64 -Werror -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:90: error: expected '=', ',', ';', 'asm' or '__attribute__' before 'foo_t'
</span><br>
<span class="quotelev1">&gt; conftest.c:91: error: expected '=', ',', ';', 'asm' or '__attribute__' before 'foo_t'
</span><br>
<span class="quotelev1">&gt; configure:19419: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | typedef int foo_t;
</span><br>
<span class="quotelev1">&gt; | static inline foo_t static_foo () {return 0; }
</span><br>
<span class="quotelev1">&gt; | inline foo_t foo () {return 0; }
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; configure:19413: gcc -c -DNDEBUG -O2 -m64 -Werror -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:19419: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19437: result: __inline__
</span><br>
<span class="quotelev1">&gt; configure:19462: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev1">&gt; configure:19498: gcc -c -DNDEBUG -O2 -m64 -Werror -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:92: error: expected ';', ',' or ')' before 'ip'
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:99: error: expected '=', ',', ';', 'asm' or '__attribute__' before 't'
</span><br>
<span class="quotelev1">&gt; conftest.c:99: error: 't' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; conftest.c:99: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; conftest.c:99: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; configure:19504: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | typedef int * int_ptr;
</span><br>
<span class="quotelev1">&gt; |         int foo (int_ptr restrict ip) {
</span><br>
<span class="quotelev1">&gt; |         return ip[0];
</span><br>
<span class="quotelev1">&gt; |        }
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | int s[1];
</span><br>
<span class="quotelev1">&gt; |         int * restrict t = s;
</span><br>
<span class="quotelev1">&gt; |         t[0] = 0;
</span><br>
<span class="quotelev1">&gt; |         return foo(t)
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:19498: gcc -c -DNDEBUG -O2 -m64 -Werror -ansi  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:19504: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19522: result: __restrict
</span><br>
<span class="quotelev1">&gt; configure:19539: checking for weak symbol support
</span><br>
<span class="quotelev1">&gt; configure:19570: gcc -DNDEBUG -O2 -m64 -Werror -ansi  -c conftest_weak.c
</span><br>
<span class="quotelev1">&gt; configure:19577: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19587: gcc -DNDEBUG -O2 -m64 -Werror -ansi  conftest.c conftest_weak.o -o conftest -O2 -m64 
</span><br>
<span class="quotelev1">&gt; configure:19594: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19621: result: yes
</span><br>
<span class="quotelev1">&gt; configure:19919: checking for C++ compiler version
</span><br>
<span class="quotelev1">&gt; configure:19926: g++ --version &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; g++ (GCC) 4.2.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:19929: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19936: g++ -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; Configured with: ./configure --prefix=/rwthfs/rz/SW/UTIL.common/gcc/4.2.2/x86_32-pc-solaris2.10 --enable-languages=c,c++,fortran --with-gnu-as --with-as=/usr/sfw/bin/gas --with-gmp=/rwthfs/rz/SW/UTIL.common/gcc/gmp-4.2.2/x86_32-pc-solaris2.10 --with-mpfr=/rwthfs/rz/SW/UTIL.common/gcc/mpfr-2.3.0/x86_32-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.2
</span><br>
<span class="quotelev1">&gt; configure:19939: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:19946: g++ -V &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; g++: '-V' option must have argument
</span><br>
<span class="quotelev1">&gt; configure:19949: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:19952: checking whether we are using the GNU C++ compiler
</span><br>
<span class="quotelev1">&gt; configure:19981: g++ -c -DNDEBUG -O2 -m64  conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:19987: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:20004: result: yes
</span><br>
<span class="quotelev1">&gt; configure:20009: checking whether g++ accepts -g
</span><br>
<span class="quotelev1">&gt; configure:20039: g++ -c -g  conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:20045: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:20144: result: yes
</span><br>
<span class="quotelev1">&gt; configure:20169: checking dependency style of g++
</span><br>
<span class="quotelev1">&gt; configure:20260: result: gcc3
</span><br>
<span class="quotelev1">&gt; configure:20280: checking how to run the C++ preprocessor
</span><br>
<span class="quotelev1">&gt; configure:20316: g++ -E  conftest.cpp
</span><br>
<span class="quotelev1">&gt; configure:20322: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:20353: g++ -E  conftest.cpp
</span><br>
<span class="quotelev1">&gt; conftest.cpp:94:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:20359: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:20392: result: g++ -E
</span><br>
<span class="quotelev1">&gt; configure:20421: g++ -E  conftest.cpp
</span><br>
<span class="quotelev1">&gt; configure:20427: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:20458: g++ -E  conftest.cpp
</span><br>
<span class="quotelev1">&gt; conftest.cpp:94:28: error: ac_nonexistent.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:20464: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; configure:20514: checking for the C++ compiler vendor
</span><br>
<span class="quotelev1">&gt; configure:20547: g++ -c -DNDEBUG -O2 -m64  conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.cpp:2:2: error: #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; conftest.cpp:3: error: 'choke' does not name a type
</span><br>
<span class="quotelev1">&gt; configure:20553: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:20585: g++ -c -DNDEBUG -O2 -m64  conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:20591: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:21678: result: gnu
</span><br>
<span class="quotelev1">&gt; configure:21700: checking if C++ compiler works
</span><br>
<span class="quotelev1">&gt; configure:21777: g++ -o conftest -DNDEBUG -O2 -m64  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:21780: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:21786: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:21789: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:21811: result: yes
</span><br>
<span class="quotelev1">&gt; configure:22089: checking if g++ supports -finline-functions
</span><br>
<span class="quotelev1">&gt; configure:22115: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:22121: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:22136: result: yes
</span><br>
<span class="quotelev1">&gt; configure:22212: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; configure:22227: checking if want C++ exception handling
</span><br>
<span class="quotelev1">&gt; configure:22229: result: no
</span><br>
<span class="quotelev1">&gt; configure:22501: checking if C and C++ are link compatible
</span><br>
<span class="quotelev1">&gt; configure:22527: gcc -c -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  conftest_c.c
</span><br>
<span class="quotelev1">&gt; configure:22534: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:22575: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp conftest_c.o  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:22581: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:22616: result: yes
</span><br>
<span class="quotelev1">&gt; configure:22656: checking for C++ template_repository_directory
</span><br>
<span class="quotelev1">&gt; configure:22720: g++ -DNDEBUG -O2 -m64 -finline-functions -c conftest1.C
</span><br>
<span class="quotelev1">&gt; configure:22730: g++ -DNDEBUG -O2 -m64 -finline-functions -c conftest2.C
</span><br>
<span class="quotelev1">&gt; configure:22785: result: not used
</span><br>
<span class="quotelev1">&gt; configure:22807: checking for C++ compiler template parameters
</span><br>
<span class="quotelev1">&gt; configure:22815: result: none needed
</span><br>
<span class="quotelev1">&gt; configure:22831: checking if g++ supports __builtin_expect
</span><br>
<span class="quotelev1">&gt; configure:22858: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:22864: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:22881: result: yes
</span><br>
<span class="quotelev1">&gt; configure:22907: checking if g++ supports __builtin_prefetch
</span><br>
<span class="quotelev1">&gt; configure:22934: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:22940: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:22957: result: yes
</span><br>
<span class="quotelev1">&gt; configure:22999: checking if g++ supports const_cast&lt;&gt; properly
</span><br>
<span class="quotelev1">&gt; configure:23028: g++ -c -DNDEBUG -O2 -m64 -finline-functions  conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:23034: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:23049: result: yes
</span><br>
<span class="quotelev1">&gt; configure:23143: checking for C++ optimization flags
</span><br>
<span class="quotelev1">&gt; configure:23145: result: -DNDEBUG -O2 -m64 -finline-functions
</span><br>
<span class="quotelev1">&gt; configure:23158: checking for bool
</span><br>
<span class="quotelev1">&gt; configure:23188: g++ -c -DNDEBUG -O2 -m64 -finline-functions  conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:23194: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:23209: result: yes
</span><br>
<span class="quotelev1">&gt; configure:23216: checking size of bool
</span><br>
<span class="quotelev1">&gt; configure:23518: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:23521: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:23527: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:23530: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:23553: result: 1
</span><br>
<span class="quotelev1">&gt; configure:23567: checking alignment of bool
</span><br>
<span class="quotelev1">&gt; configure:23957: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:23960: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:23966: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:23969: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:23991: result: 1
</span><br>
<span class="quotelev1">&gt; configure:24041: checking dependency style of gcc
</span><br>
<span class="quotelev1">&gt; configure:24132: result: gcc3
</span><br>
<span class="quotelev1">&gt; configure:24149: checking for fgrep
</span><br>
<span class="quotelev1">&gt; configure:24227: result: /usr/local_rwth/bin/ggrep -F
</span><br>
<span class="quotelev1">&gt; configure:24240: checking if need to remove -g from CCASFLAGS
</span><br>
<span class="quotelev1">&gt; configure:24254: result: no
</span><br>
<span class="quotelev1">&gt; configure:24260: checking whether to enable smp locks
</span><br>
<span class="quotelev1">&gt; configure:24268: result: yes
</span><br>
<span class="quotelev1">&gt; configure:24286: checking if .proc/endp is needed
</span><br>
<span class="quotelev1">&gt; configure:24303: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24306: $? = 1
</span><br>
<span class="quotelev1">&gt; conftest.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt; conftest.s:2: Error: unknown pseudo-op: `.proc'
</span><br>
<span class="quotelev1">&gt; conftest.s:4: Error: unknown pseudo-op: `.endp'
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      .proc mysym
</span><br>
<span class="quotelev1">&gt; mysym:
</span><br>
<span class="quotelev1">&gt;      .endp mysym
</span><br>
<span class="quotelev1">&gt; configure:24323: result: no
</span><br>
<span class="quotelev1">&gt; configure:24335: checking directive for setting text section
</span><br>
<span class="quotelev1">&gt; configure:24352: result: .text
</span><br>
<span class="quotelev1">&gt; configure:24363: checking directive for exporting symbols
</span><br>
<span class="quotelev1">&gt; configure:24375: result: .globl
</span><br>
<span class="quotelev1">&gt; configure:24388: checking for objdump
</span><br>
<span class="quotelev1">&gt; configure:24418: result: no
</span><br>
<span class="quotelev1">&gt; configure:24423: checking if .note.GNU-stack is needed
</span><br>
<span class="quotelev1">&gt; configure:24477: result: no
</span><br>
<span class="quotelev1">&gt; configure:24486: checking suffix for labels
</span><br>
<span class="quotelev1">&gt; configure:24494: result: :
</span><br>
<span class="quotelev1">&gt; configure:24505: checking prefix for global symbol labels
</span><br>
<span class="quotelev1">&gt; configure: trying _
</span><br>
<span class="quotelev1">&gt; configure:24545: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24548: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24553: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24556: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24561: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt; conftest.link 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24564: $? = 1
</span><br>
<span class="quotelev1">&gt; Undefined			first referenced
</span><br>
<span class="quotelev1">&gt;  symbol  			    in file
</span><br>
<span class="quotelev1">&gt; gsym_test_func                      conftest_c.o
</span><br>
<span class="quotelev1">&gt; ld: fatal: Symbol referencing errors. No output written to conftest
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure: failed C program was: 
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; void gsym_test_func(void);
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     gsym_test_func();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; configure: failed ASM program was: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .text
</span><br>
<span class="quotelev1">&gt; # _gsym_test_func
</span><br>
<span class="quotelev1">&gt; .globl _gsym_test_func
</span><br>
<span class="quotelev1">&gt; _gsym_test_func:
</span><br>
<span class="quotelev1">&gt; # _gsym_test_func
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: trying 
</span><br>
<span class="quotelev1">&gt; configure:24545: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24548: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24553: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24556: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24561: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt; conftest.link 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24564: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24602: result: 
</span><br>
<span class="quotelev1">&gt; configure:24623: checking prefix for lsym labels
</span><br>
<span class="quotelev1">&gt; configure: trying L
</span><br>
<span class="quotelev1">&gt; configure:24643: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24646: $? = 0
</span><br>
<span class="quotelev1">&gt; ./configure: line 24652: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt;  failed.  Output from NM was:
</span><br>
<span class="quotelev1">&gt; configure:24666: WARNING:  could not read object file
</span><br>
<span class="quotelev1">&gt; configure: trying .L
</span><br>
<span class="quotelev1">&gt; configure:24643: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24646: $? = 0
</span><br>
<span class="quotelev1">&gt; ./configure: line 24652: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt;  failed.  Output from NM was:
</span><br>
<span class="quotelev1">&gt; configure:24666: WARNING:  could not read object file
</span><br>
<span class="quotelev1">&gt; configure: trying $
</span><br>
<span class="quotelev1">&gt; configure:24643: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24646: $? = 0
</span><br>
<span class="quotelev1">&gt; ./configure: line 24652: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt;  failed.  Output from NM was:
</span><br>
<span class="quotelev1">&gt; configure:24666: WARNING:  could not read object file
</span><br>
<span class="quotelev1">&gt; configure: trying L$
</span><br>
<span class="quotelev1">&gt; configure:24643: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24646: $? = 0
</span><br>
<span class="quotelev1">&gt; ./configure: line 24652: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt;  failed.  Output from NM was:
</span><br>
<span class="quotelev1">&gt; configure:24666: WARNING:  could not read object file
</span><br>
<span class="quotelev1">&gt; configure:24688: result: L
</span><br>
<span class="quotelev1">&gt; configure:24699: checking prefix for function in .type
</span><br>
<span class="quotelev1">&gt; configure: trying @
</span><br>
<span class="quotelev1">&gt; configure:24727: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24730: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24757: result: @
</span><br>
<span class="quotelev1">&gt; configure:24769: checking if .size is needed
</span><br>
<span class="quotelev1">&gt; configure:24783: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24786: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24803: result: yes
</span><br>
<span class="quotelev1">&gt; configure:24824: checking if .align directive takes logarithmic value
</span><br>
<span class="quotelev1">&gt; configure:24843: gcc -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:24846: $? = 0
</span><br>
<span class="quotelev1">&gt; configure: .align test address offset is 
</span><br>
<span class="quotelev1">&gt; configure:24869: result: no
</span><br>
<span class="quotelev1">&gt; configure:25187: checking if gcc supports GCC inline assembly
</span><br>
<span class="quotelev1">&gt; configure:25230: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:25233: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:25239: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:25242: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:25314: result: yes
</span><br>
<span class="quotelev1">&gt; configure:25333: checking if gcc supports DEC inline assembly
</span><br>
<span class="quotelev1">&gt; configure:25360: gcc -o conftest -DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing  -O2 -m64 conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:147:19: error: c_asm.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:25366: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX &quot;g++&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_SUPPORTS_2D_CONST_CAST 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CXX_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_CXX_BINDINGS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_SMP_LOCKS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_TEXT &quot;.text&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_GLOBAL &quot;.globl&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_GSYM &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_LSYM &quot;L&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_TYPE &quot;@&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_SIZE &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_ALIGN_LOG 
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_SUPPORT_64BIT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef STDC_HEADERS
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt; | # if !defined STDC_HEADERS &amp;&amp; defined HAVE_MEMORY_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;memory.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | # include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STRINGS_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;strings.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STDINT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #include &lt;c_asm.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | asm(&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; | return 0;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:25383: result: no
</span><br>
<span class="quotelev1">&gt; configure:25402: checking if gcc supports XLC inline assembly
</span><br>
<span class="quotelev1">&gt; configure:25412: result: no
</span><br>
<span class="quotelev1">&gt; configure:25432: checking if g++ supports GCC inline assembly
</span><br>
<span class="quotelev1">&gt; configure:25470: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:25473: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:25479: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:25482: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:25552: result: yes
</span><br>
<span class="quotelev1">&gt; configure:25583: checking if g++ supports DEC inline assembly
</span><br>
<span class="quotelev1">&gt; configure:25610: g++ -o conftest -DNDEBUG -O2 -m64 -finline-functions  -O2 -m64 conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.cpp:150:19: error: c_asm.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; configure:25616: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX &quot;g++&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_SUPPORTS_2D_CONST_CAST 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CXX_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_CXX_BINDINGS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_SMP_LOCKS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_TEXT &quot;.text&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_GLOBAL &quot;.globl&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_GSYM &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_LSYM &quot;L&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_TYPE &quot;@&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_SIZE &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_ALIGN_LOG 
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ASM_SUPPORT_64BIT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_DEC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_XLC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef STDC_HEADERS
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; | #else
</span><br>
<span class="quotelev1">&gt; | # ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt; | # if !defined STDC_HEADERS &amp;&amp; defined HAVE_MEMORY_H
</span><br>
<span class="quotelev1">&gt; | #  include &lt;memory.h&gt;
</span><br>
<span class="quotelev1">&gt; | # endif
</span><br>
<span class="quotelev1">&gt; | # include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STRINGS_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;strings.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_STDINT_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt; | # include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #include &lt;c_asm.h&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | asm(&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; | return 0;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:25633: result: no
</span><br>
<span class="quotelev1">&gt; configure:25658: checking if g++ supports XLC inline assembly
</span><br>
<span class="quotelev1">&gt; configure:25668: result: no
</span><br>
<span class="quotelev1">&gt; configure:25699: checking for assembly format
</span><br>
<span class="quotelev1">&gt; configure:25701: result: default-.text-.globl-:--L-_at_-1-0-1-1-0
</span><br>
<span class="quotelev1">&gt; configure:25713: checking for asssembly architecture
</span><br>
<span class="quotelev1">&gt; configure:25715: result: AMD64
</span><br>
<span class="quotelev1">&gt; configure:25730: checking for perl
</span><br>
<span class="quotelev1">&gt; configure:25746: found /usr/local_rwth/bin/perl
</span><br>
<span class="quotelev1">&gt; configure:25757: result: perl
</span><br>
<span class="quotelev1">&gt; configure:25767: checking for pre-built assembly file
</span><br>
<span class="quotelev1">&gt; configure:25784: result: no (not in asm-data)
</span><br>
<span class="quotelev1">&gt; configure:25792: checking whether possible to generate assembly file
</span><br>
<span class="quotelev1">&gt; configure:25797: perl /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/opal/asm/generate-asm.pl AMD64 default-.text-.globl-:--L-_at_-1-0-1-1-0 /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/opal/asm/base /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/opal/asm/generated/atomic-local.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure:25800: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:25804: result: yes
</span><br>
<span class="quotelev1">&gt; configure:25832: checking for atomic assembly filename
</span><br>
<span class="quotelev1">&gt; configure:25839: result: atomic-local.s
</span><br>
<span class="quotelev1">&gt; configure:25948: checking for gfortran
</span><br>
<span class="quotelev1">&gt; configure:25964: found /rwthfs/rz/SW/UTIL.common/gcc/4.2/i386-pc-solaris2.10/bin/gfortran
</span><br>
<span class="quotelev1">&gt; configure:25975: result: gfortran
</span><br>
<span class="quotelev1">&gt; configure:26005: checking for Fortran 77 compiler version
</span><br>
<span class="quotelev1">&gt; configure:26012: gfortran --version &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; GNU Fortran (GCC) 4.2.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:26015: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:26022: gfortran -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; Configured with: ./configure --prefix=/rwthfs/rz/SW/UTIL.common/gcc/4.2.2/x86_32-pc-solaris2.10 --enable-languages=c,c++,fortran --with-gnu-as --with-as=/usr/sfw/bin/gas --with-gmp=/rwthfs/rz/SW/UTIL.common/gcc/gmp-4.2.2/x86_32-pc-solaris2.10 --with-mpfr=/rwthfs/rz/SW/UTIL.common/gcc/mpfr-2.3.0/x86_32-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.2
</span><br>
<span class="quotelev1">&gt; configure:26025: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:26032: gfortran -V &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gfortran: '-V' option must have argument
</span><br>
<span class="quotelev1">&gt; configure:26035: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:26043: checking whether we are using the GNU Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; configure:26062: gfortran -c -O2 -m64 conftest.F &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:26068: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:26085: result: yes
</span><br>
<span class="quotelev1">&gt; configure:26091: checking whether gfortran accepts -g
</span><br>
<span class="quotelev1">&gt; configure:26108: gfortran -c -g conftest.f &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:26114: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:26130: result: yes
</span><br>
<span class="quotelev1">&gt; configure:26185: checking if Fortran 77 compiler works
</span><br>
<span class="quotelev1">&gt; configure:26241: gfortran -o conftest -O2 -m64 -O2 -m64 conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:26244: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:26250: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:26253: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:26275: result: yes
</span><br>
<span class="quotelev1">&gt; configure:26308: checking gfortran external symbol convention
</span><br>
<span class="quotelev1">&gt; configure:26327: gfortran -O2 -m64 -c conftest.f -O2 -m64 
</span><br>
<span class="quotelev1">&gt; configure:26334: $? = 0
</span><br>
<span class="quotelev1">&gt; output from :
</span><br>
<span class="quotelev1">&gt; ./configure: line 26351: ./conftest.o: Permission denied
</span><br>
<span class="quotelev1">&gt; configure:26365: error: Could not determine Fortran naming convention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt; ## Cache variables. ##
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ac_cv_build=i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; ac_cv_c_compiler_gnu=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_c_inline=__inline__
</span><br>
<span class="quotelev1">&gt; ac_cv_c_restrict=__restrict
</span><br>
<span class="quotelev1">&gt; ac_cv_cxx_compiler_gnu=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCASFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCASFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCAS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCAS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCC_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CCC_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_value=gcc
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CFLAGS_value='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPPFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPPFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPP_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPP_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXCPP_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXCPP_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXFLAGS_value='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXX_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXX_value=g++
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F77_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F77_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FCFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FCFLAGS_value='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FC_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FC_value=gfortran
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FFLAGS_value='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_value='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LIBS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LIBS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJCFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJCFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJC_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_OBJC_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_build_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_build_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_host_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_host_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_target_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_target_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_f77_compiler_gnu=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_inttypes_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_memory_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdc=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdint_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_stdlib_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_string_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_strings_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_sys_stat_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_sys_types_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_header_unistd_h=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_host=i386-pc-solaris2.10
</span><br>
<span class="quotelev1">&gt; ac_cv_objext=o
</span><br>
<span class="quotelev1">&gt; ac_cv_path_EGREP='/usr/local_rwth/bin/ggrep -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_path_FGREP='/usr/local_rwth/bin/ggrep -F'
</span><br>
<span class="quotelev1">&gt; ac_cv_path_GREP=/usr/local_rwth/bin/ggrep
</span><br>
<span class="quotelev1">&gt; ac_cv_path_install='/usr/local_rwth/bin/ginstall -c'
</span><br>
<span class="quotelev1">&gt; ac_cv_path_mkdir=/usr/local_rwth/bin/gmkdir
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_AWK=gawk
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_CPP='gcc -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_CXXCPP='g++ -E'
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_PERL=perl
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_ac_ct_CC=gcc
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_ac_ct_F77=gfortran
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_c89=
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_g=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cc_gcc_c_o=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_cxx_g=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_f77_g=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_make_make_set=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_bool=1
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_char=1
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_double=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_float=4
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_int=4
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_long=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_long_double=16
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_long_long=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_ptrdiff_t=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_short=2
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_size_t=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_ssize_t=8
</span><br>
<span class="quotelev1">&gt; ac_cv_sizeof_void_p=8
</span><br>
<span class="quotelev1">&gt; ac_cv_type_bool=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_char=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_double=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_float=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int16_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int32_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int64_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int8_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_int=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_intptr_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_long=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_long_double=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_long_long=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_mode_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_ptrdiff_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_short=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_size_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_ssize_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint16_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint32_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint64_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uint8_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_uintptr_t=yes
</span><br>
<span class="quotelev1">&gt; ac_cv_type_void_p=yes
</span><br>
<span class="quotelev1">&gt; am_cv_CCAS_dependencies_compiler_type=gcc3
</span><br>
<span class="quotelev1">&gt; am_cv_CC_dependencies_compiler_type=gcc3
</span><br>
<span class="quotelev1">&gt; am_cv_CXX_dependencies_compiler_type=gcc3
</span><br>
<span class="quotelev1">&gt; ompi_cv_Cpp_works=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_Fortran_77_works=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_align_log=no
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_arch=AMD64
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_endproc='#'
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_file=atomic-local.s
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_format=default-.text-.globl-:--L-_at_-1-0-1-1-0
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_global=.globl
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_gnu_stack=0
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_gnu_stack_result=no
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_gsym=
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_label_suffix=:
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_lsym=L
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_need_proc=no
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_need_size=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_proc='#'
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_text=.text
</span><br>
<span class="quotelev1">&gt; ompi_cv_asm_type=@
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_bool=1
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_char=1
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_double=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_float=4
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_int=4
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_long=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_long_double=16
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_long_long=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_short=2
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_void_p=8
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_align_wchar_t=4
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_compiler_vendor=gnu
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_link_Cpp=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_c_weak_symbols=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_finline_functions=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_fno_strict_aliasing=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_supports___builtin_expect=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cc_supports___builtin_prefetch=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_compiler_vendor=gnu
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_finline_functions=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_supports_2d_const_cast=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_supports___builtin_expect=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_supports___builtin_prefetch=yes
</span><br>
<span class="quotelev1">&gt; ompi_cv_cxx_template_repository='not used'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## ----------------- ##
</span><br>
<span class="quotelev1">&gt; ## Output variables. ##
</span><br>
<span class="quotelev1">&gt; ## ----------------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ACLOCAL='${SHELL} /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/missing --run aclocal-1.10'
</span><br>
<span class="quotelev1">&gt; AMDEPBACKSLASH='\'
</span><br>
<span class="quotelev1">&gt; AMDEP_FALSE='#'
</span><br>
<span class="quotelev1">&gt; AMDEP_TRUE=''
</span><br>
<span class="quotelev1">&gt; AMTAR='${SHELL} /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/missing --run tar'
</span><br>
<span class="quotelev1">&gt; AUTOCONF='${SHELL} /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/missing --run autoconf'
</span><br>
<span class="quotelev1">&gt; AUTOHEADER='${SHELL} /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/missing --run autoheader'
</span><br>
<span class="quotelev1">&gt; AUTOMAKE='${SHELL} /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/missing --run automake-1.10'
</span><br>
<span class="quotelev1">&gt; AWK='gawk'
</span><br>
<span class="quotelev1">&gt; CASE_SENSITIVE_FS_FALSE=''
</span><br>
<span class="quotelev1">&gt; CASE_SENSITIVE_FS_TRUE=''
</span><br>
<span class="quotelev1">&gt; CC='gcc'
</span><br>
<span class="quotelev1">&gt; CCAS='gcc'
</span><br>
<span class="quotelev1">&gt; CCASDEPMODE='depmode=gcc3'
</span><br>
<span class="quotelev1">&gt; CCASFLAGS='-DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing'
</span><br>
<span class="quotelev1">&gt; CCDEPMODE='depmode=gcc3'
</span><br>
<span class="quotelev1">&gt; CFLAGS='-DNDEBUG -O2 -m64 -finline-functions -fno-strict-aliasing'
</span><br>
<span class="quotelev1">&gt; CFLAGS_WITHOUT_OPTFLAGS=''
</span><br>
<span class="quotelev1">&gt; CLEANFILES='*~ .\#*'
</span><br>
<span class="quotelev1">&gt; COMPILE_PROFILING_SEPARATELY_FALSE=''
</span><br>
<span class="quotelev1">&gt; COMPILE_PROFILING_SEPARATELY_TRUE='#'
</span><br>
<span class="quotelev1">&gt; CONFIGURE_DEPENDENCIES='$(top_srcdir)/VERSION'
</span><br>
<span class="quotelev1">&gt; CPP='gcc -E'
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; CXX='g++'
</span><br>
<span class="quotelev1">&gt; CXXCPP='g++ -E'
</span><br>
<span class="quotelev1">&gt; CXXCPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; CXXDEPMODE='depmode=gcc3'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-DNDEBUG -O2 -m64 -finline-functions'
</span><br>
<span class="quotelev1">&gt; CYGPATH_W='echo'
</span><br>
<span class="quotelev1">&gt; DEFS=''
</span><br>
<span class="quotelev1">&gt; DEPDIR='.deps'
</span><br>
<span class="quotelev1">&gt; ECHO_C=''
</span><br>
<span class="quotelev1">&gt; ECHO_N='-n'
</span><br>
<span class="quotelev1">&gt; ECHO_T=''
</span><br>
<span class="quotelev1">&gt; EGREP='/usr/local_rwth/bin/ggrep -E'
</span><br>
<span class="quotelev1">&gt; EXEEXT=''
</span><br>
<span class="quotelev1">&gt; F77='gfortran'
</span><br>
<span class="quotelev1">&gt; FC='gfortran'
</span><br>
<span class="quotelev1">&gt; FCFLAGS='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; FCFLAGS_f90=''
</span><br>
<span class="quotelev1">&gt; FCFLAGS_f=''
</span><br>
<span class="quotelev1">&gt; FFLAGS='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; FGREP='/usr/local_rwth/bin/ggrep -F'
</span><br>
<span class="quotelev1">&gt; GREP='/usr/local_rwth/bin/ggrep'
</span><br>
<span class="quotelev1">&gt; INSTALL_DATA='${INSTALL} -m 644'
</span><br>
<span class="quotelev1">&gt; INSTALL_PROGRAM='${INSTALL}'
</span><br>
<span class="quotelev1">&gt; INSTALL_SCRIPT='${INSTALL}'
</span><br>
<span class="quotelev1">&gt; INSTALL_STRIP_PROGRAM='$(install_sh) -c -s'
</span><br>
<span class="quotelev1">&gt; LDFLAGS='-O2 -m64'
</span><br>
<span class="quotelev1">&gt; LEX=''
</span><br>
<span class="quotelev1">&gt; LEXLIB=''
</span><br>
<span class="quotelev1">&gt; LEX_OUTPUT_ROOT=''
</span><br>
<span class="quotelev1">&gt; LIBLTDL=''
</span><br>
<span class="quotelev1">&gt; LIBLTDL_LTLIB=''
</span><br>
<span class="quotelev1">&gt; LIBLTDL_SUBDIR=''
</span><br>
<span class="quotelev1">&gt; LIBOBJS=''
</span><br>
<span class="quotelev1">&gt; LIBS=''
</span><br>
<span class="quotelev1">&gt; LN_S=''
</span><br>
<span class="quotelev1">&gt; LTDLINCL=''
</span><br>
<span class="quotelev1">&gt; LTLIBOBJS=''
</span><br>
<span class="quotelev1">&gt; MAKEINFO='${SHELL} /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/missing --run makeinfo'
</span><br>
<span class="quotelev1">&gt; MCA_PROJECT_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_allocator_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_backtrace_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_bml_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_btl_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_coll_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_common_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_errmgr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_gpr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_installdirs_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_io_romio_SHOULD_BUILD_FALSE=''
</span><br>
<span class="quotelev1">&gt; MCA_io_romio_SHOULD_BUILD_TRUE=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_iof_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_maffinity_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_memcpy_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_memory_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_mpool_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_DIRECT_CALL_HEADER=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_mtl_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_ns_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_odls_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORKS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORKS_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_COMPONENT_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_COMPONENT_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_COMPONENT_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ompi_FRAMEWORK_LIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_oob_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORKS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORKS_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_COMPONENT_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_COMPONENT_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_COMPONENT_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_opal_FRAMEWORK_LIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORKS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORKS_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_COMPONENT_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_COMPONENT_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_COMPONENT_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_orte_FRAMEWORK_LIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_osc_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_paffinity_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_pls_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_DIRECT_CALL_HEADER=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_pml_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_ras_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rcache_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rds_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmaps_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rmgr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_rml_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_schema_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_sds_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_smr_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_timer_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_ALL_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_ALL_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_DSO_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_DSO_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_STATIC_COMPONENTS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_STATIC_LTLIBS=''
</span><br>
<span class="quotelev1">&gt; MCA_topo_STATIC_SUBDIRS=''
</span><br>
<span class="quotelev1">&gt; MPIF_H_PMPI_W_FUNCS=', PMPI_WTICK, PMPI_WTIME'
</span><br>
<span class="quotelev1">&gt; OBJC=''
</span><br>
<span class="quotelev1">&gt; OBJCDEPMODE=''
</span><br>
<span class="quotelev1">&gt; OBJCFLAGS=''
</span><br>
<span class="quotelev1">&gt; OBJDUMP=''
</span><br>
<span class="quotelev1">&gt; OBJEXT='o'
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_FILE='atomic-local.s'
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_GSYM=''
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_LSYM='L'
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_SUPPORT_64BIT='1'
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_TEXT='.text'
</span><br>
<span class="quotelev1">&gt; OMPI_ASM_TYPE='@'
</span><br>
<span class="quotelev1">&gt; OMPI_ASSEMBLY_ARCH='AMD64'
</span><br>
<span class="quotelev1">&gt; OMPI_ASSEMBLY_FORMAT='default-.text-.globl-:--L-_at_-1-0-1-1-0'
</span><br>
<span class="quotelev1">&gt; OMPI_AS_GLOBAL=''
</span><br>
<span class="quotelev1">&gt; OMPI_AS_LABEL_SUFFIX=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_basic_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_basic_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_bucket_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_allocator_bucket_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_darwin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_darwin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_execinfo_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_execinfo_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_none_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_none_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_printstack_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_backtrace_printstack_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_bml_r2_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_bml_r2_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_gm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_gm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mvapi_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mvapi_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mx_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_mx_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_openib_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_openib_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_portals_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_portals_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_self_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_self_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_tcp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_tcp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_udapl_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_btl_udapl_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_basic_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_basic_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_self_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_self_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_tuned_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_coll_tuned_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_mx_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_mx_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_portals_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_portals_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_common_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_hnp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_hnp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_orted_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_orted_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_errmgr_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_null_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_null_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_replica_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_gpr_replica_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_config_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_config_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_env_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_installdirs_env_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_io_romio_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_io_romio_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_svc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_iof_svc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_first_use_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_first_use_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_libnuma_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_maffinity_libnuma_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_darwin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_darwin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_malloc_hooks_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_malloc_hooks_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_ptmalloc2_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_memory_ptmalloc2_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_rdma_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_rdma_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_sm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mpool_sm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_mx_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_mx_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_portals_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_portals_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_psm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_mtl_psm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_replica_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ns_replica_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_default_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_odls_default_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_oob_tcp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_oob_tcp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_osc_pt2pt_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_osc_pt2pt_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_linux_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_linux_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_solaris_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_solaris_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_windows_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_paffinity_windows_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_gridengine_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_gridengine_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_poe_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_poe_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_rsh_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_rsh_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_slurm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_slurm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_tm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_tm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_xgrid_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pls_xgrid_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_cm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_cm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_ob1_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_pml_ob1_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_bjs_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_bjs_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_dash_host_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_dash_host_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_gridengine_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_gridengine_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_loadleveler_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_loadleveler_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_localhost_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_localhost_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_lsf_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_lsf_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_slurm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_slurm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_tm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_tm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_xgrid_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_ras_xgrid_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rcache_vma_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rcache_vma_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_hostfile_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_hostfile_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_resfile_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rds_resfile_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmaps_round_robin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmaps_round_robin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_proxy_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_proxy_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_urm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rmgr_urm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_oob_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_rml_oob_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_cnos_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_cnos_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_env_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_env_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_pipe_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_pipe_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_portals_utcp_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_portals_utcp_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_seed_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_seed_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_singleton_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_singleton_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_slurm_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_sds_slurm_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_smr_bproc_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_smr_bproc_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_aix_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_aix_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_altix_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_altix_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_darwin_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_darwin_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_linux_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_linux_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_solaris_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_solaris_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_windows_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_timer_windows_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_topo_unity_DSO_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_topo_unity_DSO_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_CC_ABSOLUTE='/rwthfs/rz/SW/UTIL.common/gcc/4.2/i386-pc-solaris2.10/bin/gcc'
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_DATE='Fri Oct 17 17:36:38 MEST 2008'
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_HOST='sunoc63.rz.RWTH-Aachen.DE'
</span><br>
<span class="quotelev1">&gt; OMPI_CONFIGURE_USER='pk224850'
</span><br>
<span class="quotelev1">&gt; OMPI_CXX_ABSOLUTE='/rwthfs/rz/SW/UTIL.common/gcc/4.2/i386-pc-solaris2.10/bin/g++'
</span><br>
<span class="quotelev1">&gt; OMPI_F77_ABSOLUTE='/rwthfs/rz/SW/UTIL.common/gcc/4.2/i386-pc-solaris2.10/bin/gfortran'
</span><br>
<span class="quotelev1">&gt; OMPI_F90_ABSOLUTE=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_BUILD_SIZE='small'
</span><br>
<span class="quotelev1">&gt; OMPI_F90_CKINDS=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_EXTRA_SHARED_LIBRARY_FLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_IKINDS=''
</span><br>
<span class="quotelev1">&gt; OMPI_F90_RKINDS=''
</span><br>
<span class="quotelev1">&gt; OMPI_FC_MODULE_FLAG=''
</span><br>
<span class="quotelev1">&gt; OMPI_FORTRAN_MAX_ARRAY_RANK='4'
</span><br>
<span class="quotelev1">&gt; OMPI_GREEK_VERSION=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_ASM_FILE_FALSE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_ASM_FILE_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_POSIX_THREADS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_POSIX_THREADS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_SOLARIS_THREADS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_SOLARIS_THREADS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_INSTALL_BINARIES_FALSE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_INSTALL_BINARIES_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_LIBEVENT_SOURCES=''
</span><br>
<span class="quotelev1">&gt; OMPI_MAJOR_VERSION='1'
</span><br>
<span class="quotelev1">&gt; OMPI_MINOR_VERSION='2'
</span><br>
<span class="quotelev1">&gt; OMPI_MPI_ADDRESS_KIND=''
</span><br>
<span class="quotelev1">&gt; OMPI_MPI_INTEGER_KIND=''
</span><br>
<span class="quotelev1">&gt; OMPI_MPI_OFFSET_KIND=''
</span><br>
<span class="quotelev1">&gt; OMPI_NEED_WINDOWS_REPLACEMENTS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_NEED_WINDOWS_REPLACEMENTS_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_RELEASE_VERSION='8'
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX16=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX32=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX8=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_DOUBLE_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_DOUBLE_PRECISION=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER16=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER1=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER2=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER4=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER8=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_INTEGER=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_LOGICAL=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL16=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL4=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL8=''
</span><br>
<span class="quotelev1">&gt; OMPI_SIZEOF_F90_REAL=''
</span><br>
<span class="quotelev1">&gt; OMPI_SVN_R='r19718'
</span><br>
<span class="quotelev1">&gt; OMPI_TOP_BUILDDIR='/tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc'
</span><br>
<span class="quotelev1">&gt; OMPI_TOP_SRCDIR='/tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc'
</span><br>
<span class="quotelev1">&gt; OMPI_VERSION='1.2.8'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_LARGE_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_LARGE_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_MEDIUM_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_MEDIUM_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_SMALL_FALSE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_SMALL_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_TRIVIAL_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_BUILD_F90_TRIVIAL_TRUE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F77_BINDINGS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F77_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_F90_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WANT_SVN='0'
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_CXX_LIB=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_CXX_REQUIRED_FILE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_FCFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_FFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_INCLUDES=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_F77_REQUIRED_FILE=''
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_F90_REQUIRED_FILE=''
</span><br>
<span class="quotelev1">&gt; OPAL_BINDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_DATADIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_DATAROOTDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_EXEC_PREFIX=''
</span><br>
<span class="quotelev1">&gt; OPAL_GREEK_VERSION=''
</span><br>
<span class="quotelev1">&gt; OPAL_INCLUDEDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_INFODIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LIBDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LIBEXECDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LOCALSTATEDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_LTDL_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_MAJOR_VERSION='1'
</span><br>
<span class="quotelev1">&gt; OPAL_MANDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_MINOR_VERSION='2'
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=''
</span><br>
<span class="quotelev1">&gt; OPAL_RELEASE_VERSION='8'
</span><br>
<span class="quotelev1">&gt; OPAL_SBINDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_SHAREDSTATEDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_SVN_R='r19718'
</span><br>
<span class="quotelev1">&gt; OPAL_SYSCONFDIR=''
</span><br>
<span class="quotelev1">&gt; OPAL_VERSION='1.2.8'
</span><br>
<span class="quotelev1">&gt; OPAL_WANT_SVN='0'
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_INCLUDES=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; ORTE_GREEK_VERSION=''
</span><br>
<span class="quotelev1">&gt; ORTE_MAJOR_VERSION='1'
</span><br>
<span class="quotelev1">&gt; ORTE_MINOR_VERSION='2'
</span><br>
<span class="quotelev1">&gt; ORTE_RELEASE_VERSION='8'
</span><br>
<span class="quotelev1">&gt; ORTE_SVN_R='r19718'
</span><br>
<span class="quotelev1">&gt; ORTE_VERSION='1.2.8'
</span><br>
<span class="quotelev1">&gt; ORTE_WANT_SVN='0'
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_INCLUDES=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; PACKAGE='openmpi'
</span><br>
<span class="quotelev1">&gt; PACKAGE_BUGREPORT='<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>'
</span><br>
<span class="quotelev1">&gt; PACKAGE_NAME='Open MPI'
</span><br>
<span class="quotelev1">&gt; PACKAGE_STRING='Open MPI 1.2.8'
</span><br>
<span class="quotelev1">&gt; PACKAGE_TARNAME='openmpi'
</span><br>
<span class="quotelev1">&gt; PACKAGE_VERSION='1.2.8'
</span><br>
<span class="quotelev1">&gt; PATH_SEPARATOR=':'
</span><br>
<span class="quotelev1">&gt; PERL='perl'
</span><br>
<span class="quotelev1">&gt; SET_MAKE=''
</span><br>
<span class="quotelev1">&gt; SHELL='/bin/bash'
</span><br>
<span class="quotelev1">&gt; STRIP=''
</span><br>
<span class="quotelev1">&gt; TOTALVIEW_DEBUG_FLAGS=''
</span><br>
<span class="quotelev1">&gt; VERSION='1.2.8'
</span><br>
<span class="quotelev1">&gt; WANT_DEPRECATED_EXECUTABLE_NAMES_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_DEPRECATED_EXECUTABLE_NAMES_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_INSTALL_HEADERS_FALSE='#'
</span><br>
<span class="quotelev1">&gt; WANT_INSTALL_HEADERS_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_LIBLTDL_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_LIBLTDL_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_BINDINGS_LAYER_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_BINDINGS_LAYER_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_MPI_CXX_BINDINGS_FALSE='#'
</span><br>
<span class="quotelev1">&gt; WANT_MPI_CXX_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_F77_BINDINGS_LAYER_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_MPI_F77_BINDINGS_LAYER_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_PERUSE_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_PERUSE_TRUE='#'
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_BINDINGS_LAYER_FALSE='#'
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_BINDINGS_LAYER_TRUE=''
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_F77_BINDINGS_LAYER_FALSE=''
</span><br>
<span class="quotelev1">&gt; WANT_PMPI_F77_BINDINGS_LAYER_TRUE=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_FCFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_FFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_LIBS=''
</span><br>
<span class="quotelev1">&gt; ac_ct_CC='gcc'
</span><br>
<span class="quotelev1">&gt; ac_ct_CXX=''
</span><br>
<span class="quotelev1">&gt; ac_ct_F77='gfortran'
</span><br>
<span class="quotelev1">&gt; ac_ct_FC=''
</span><br>
<span class="quotelev1">&gt; ac_ct_OBJC=''
</span><br>
<span class="quotelev1">&gt; ac_prefix_program=''
</span><br>
<span class="quotelev1">&gt; am__fastdepCCAS_FALSE='#'
</span><br>
<span class="quotelev1">&gt; am__fastdepCCAS_TRUE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepCC_FALSE='#'
</span><br>
<span class="quotelev1">&gt; am__fastdepCC_TRUE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepCXX_FALSE='#'
</span><br>
<span class="quotelev1">&gt; am__fastdepCXX_TRUE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepOBJC_FALSE=''
</span><br>
<span class="quotelev1">&gt; am__fastdepOBJC_TRUE=''
</span><br>
<span class="quotelev1">&gt; am__include='include'
</span><br>
<span class="quotelev1">&gt; am__isrc=''
</span><br>
<span class="quotelev1">&gt; am__leading_dot='.'
</span><br>
<span class="quotelev1">&gt; am__quote=''
</span><br>
<span class="quotelev1">&gt; am__tar='${AMTAR} chof - &quot;$$tardir&quot;'
</span><br>
<span class="quotelev1">&gt; am__untar='${AMTAR} xf -'
</span><br>
<span class="quotelev1">&gt; backtrace_darwin_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; bindir='${exec_prefix}/bin'
</span><br>
<span class="quotelev1">&gt; btl_gm_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_gm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_gm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_gm_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mvapi_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_mx_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_openib_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_portals_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_portals_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_portals_LIBS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; btl_udapl_LIBS=''
</span><br>
<span class="quotelev1">&gt; build='i386-pc-solaris2.10'
</span><br>
<span class="quotelev1">&gt; build_alias=''
</span><br>
<span class="quotelev1">&gt; build_cpu='i386'
</span><br>
<span class="quotelev1">&gt; build_os='solaris2.10'
</span><br>
<span class="quotelev1">&gt; build_vendor='pc'
</span><br>
<span class="quotelev1">&gt; common_mx_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_mx_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_mx_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_mx_LIBS=''
</span><br>
<span class="quotelev1">&gt; common_portals_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_portals_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; common_portals_LIBS=''
</span><br>
<span class="quotelev1">&gt; datadir='${datarootdir}'
</span><br>
<span class="quotelev1">&gt; datarootdir='${prefix}/share'
</span><br>
<span class="quotelev1">&gt; docdir='${datarootdir}/doc/${PACKAGE_TARNAME}'
</span><br>
<span class="quotelev1">&gt; dvidir='${docdir}'
</span><br>
<span class="quotelev1">&gt; errmgr_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; errmgr_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; errmgr_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; exec_prefix='NONE'
</span><br>
<span class="quotelev1">&gt; host='i386-pc-solaris2.10'
</span><br>
<span class="quotelev1">&gt; host_alias=''
</span><br>
<span class="quotelev1">&gt; host_cpu='i386'
</span><br>
<span class="quotelev1">&gt; host_os='solaris2.10'
</span><br>
<span class="quotelev1">&gt; host_vendor='pc'
</span><br>
<span class="quotelev1">&gt; htmldir='${docdir}'
</span><br>
<span class="quotelev1">&gt; includedir='${prefix}/include'
</span><br>
<span class="quotelev1">&gt; infodir='${datarootdir}/info'
</span><br>
<span class="quotelev1">&gt; install_sh='$(SHELL) /tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc/config/install-sh'
</span><br>
<span class="quotelev1">&gt; libdir='${exec_prefix}/lib'
</span><br>
<span class="quotelev1">&gt; libexecdir='${exec_prefix}/libexec'
</span><br>
<span class="quotelev1">&gt; localedir='${datarootdir}/locale'
</span><br>
<span class="quotelev1">&gt; localstatedir='${prefix}/var'
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_LIBS=''
</span><br>
<span class="quotelev1">&gt; mandir='${datarootdir}/man'
</span><br>
<span class="quotelev1">&gt; memory_malloc_hooks_LIBS=''
</span><br>
<span class="quotelev1">&gt; memory_ptmalloc2_LIBS=''
</span><br>
<span class="quotelev1">&gt; mkdir_p='/usr/local_rwth/bin/gmkdir -p'
</span><br>
<span class="quotelev1">&gt; mtl_mx_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_mx_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_mx_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_mx_LIBS=''
</span><br>
<span class="quotelev1">&gt; mtl_portals_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_portals_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_portals_LIBS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; mtl_psm_LIBS=''
</span><br>
<span class="quotelev1">&gt; odls_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; odls_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; odls_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; oldincludedir='/usr/include'
</span><br>
<span class="quotelev1">&gt; pdfdir='${docdir}'
</span><br>
<span class="quotelev1">&gt; pls_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; pls_slurm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_slurm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_slurm_LIBS=''
</span><br>
<span class="quotelev1">&gt; pls_tm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_tm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_tm_LIBS=''
</span><br>
<span class="quotelev1">&gt; pls_xgrid_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; pls_xgrid_OBJCFLAGS=''
</span><br>
<span class="quotelev1">&gt; prefix='/rwthfs/rz/SW/MPI/openmpi-1.2.8/solx8664/gcc'
</span><br>
<span class="quotelev1">&gt; program_transform_name='s,x,x,'
</span><br>
<span class="quotelev1">&gt; psdir='${docdir}'
</span><br>
<span class="quotelev1">&gt; ras_bjs_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_bjs_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_bjs_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_loadleveler_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_loadleveler_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_loadleveler_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_lsf_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_slurm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_slurm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_slurm_LIBS=''
</span><br>
<span class="quotelev1">&gt; ras_tm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_tm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; ras_tm_LIBS=''
</span><br>
<span class="quotelev1">&gt; sbindir='${exec_prefix}/sbin'
</span><br>
<span class="quotelev1">&gt; sds_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; sds_portals_utcp_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_portals_utcp_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_portals_utcp_LIBS=''
</span><br>
<span class="quotelev1">&gt; sds_slurm_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_slurm_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; sds_slurm_LIBS=''
</span><br>
<span class="quotelev1">&gt; sharedstatedir='${prefix}/com'
</span><br>
<span class="quotelev1">&gt; smr_bproc_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; smr_bproc_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; smr_bproc_LIBS=''
</span><br>
<span class="quotelev1">&gt; sysconfdir='${prefix}/etc'
</span><br>
<span class="quotelev1">&gt; target_alias=''
</span><br>
<span class="quotelev1">&gt; timer_aix_LIBS=''
</span><br>
<span class="quotelev1">&gt; top_ompi_builddir='/tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc'
</span><br>
<span class="quotelev1">&gt; top_ompi_srcdir='/tmp/pk224850/15021_at_sunoc63/openmpi-1.2.8_SolX86_gcc'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## confdefs.h. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_VERSION &quot;1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_STRING &quot;Open MPI 1.2.8&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; #define OMPI_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; #define ORTE_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define ORTE_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; #define OPAL_RELEASE_VERSION 8
</span><br>
<span class="quotelev1">&gt; #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define OPAL_VERSION &quot;8&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ARCH &quot;i386-pc-solaris2.10&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_CC &quot;gcc&quot;
</span><br>
<span class="quotelev1">&gt; #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; #define inline __inline__
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX &quot;g++&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_SUPPORTS_2D_CONST_CAST 1
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_BOOL 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ALIGNMENT_CXX_BOOL 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_CXX_BINDINGS 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_WANT_SMP_LOCKS 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_TEXT &quot;.text&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_GLOBAL &quot;.globl&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_LABEL_SUFFIX &quot;:&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_GSYM &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_LSYM &quot;L&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_TYPE &quot;@&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_SIZE &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_ALIGN_LOG 
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASM_SUPPORT_64BIT 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_DEC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_C_XLC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASSEMBLY_FORMAT &quot;default-.text-.globl-:--L-_at_-1-0-1-1-0&quot;
</span><br>
<span class="quotelev1">&gt; #define OMPI_ASSEMBLY_ARCH OMPI_AMD64
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_ASM_FILE 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: exit 1
</span><br>
<p><span class="quotelev1">&gt; begin:vcard
</span><br>
<span class="quotelev1">&gt; fn:Paul  Kapinos
</span><br>
<span class="quotelev1">&gt; n:Kapinos;Paul 
</span><br>
<span class="quotelev1">&gt; org:RWTH Aachen University, Center for Computing and Communication;High Performance Computing
</span><br>
<span class="quotelev1">&gt; adr:;;Seffenter Weg 23;Aachen;NRW;52074;Germany
</span><br>
<span class="quotelev1">&gt; email;internet:kapinos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; title:Dipl.-Inform.
</span><br>
<span class="quotelev1">&gt; tel;work:+49 241 80-24761
</span><br>
<span class="quotelev1">&gt; url:<a href="http://www.rz.rwth-aachen.de">http://www.rz.rwth-aachen.de</a>
</span><br>
<span class="quotelev1">&gt; version:2.1
</span><br>
<span class="quotelev1">&gt; end:vcard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7021.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7014.php">Paul Kapinos: "[OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Reply:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
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
