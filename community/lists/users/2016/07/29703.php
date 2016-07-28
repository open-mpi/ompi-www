<?
$subject_val = "[OMPI users] ompi_info -c does not print configure arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 23 19:40:55 2016" -->
<!-- isoreceived="20160723234055" -->
<!-- sent="Sat, 23 Jul 2016 16:40:33 -0700" -->
<!-- isosent="20160723234033" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="[OMPI users] ompi_info -c does not print configure arguments" -->
<!-- id="CAGKz=uJ3AsF1T7qOT46Bfy57DachNL2Mbtgu1AdS8LJ6XUjNdA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi_info -c does not print configure arguments<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-23 19:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>Previous message:</strong> <a href="29702.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>Reply:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ompi_info -h indicates that -c shows configuration options, ie configure
<br>
arguments:
<br>
<p>$ /home/projects/x86-64-knl/openmpi/1.10.2/intel/17.0.042/bin/ompi_info -h
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The ompi_info command can be used to provide detailed information on
<br>
<p>your Open MPI installation.  Syntax:
<br>
<p><p>-a|--all                 Show all configuration options and MCA parameters
<br>
<p>&nbsp;&nbsp;&nbsp;-am &lt;arg0&gt;            Aggregate MCA parameter set file list
<br>
<p>&nbsp;&nbsp;&nbsp;--arch                Show architecture Open MPI was compiled on
<br>
<p>-c|--config              Show configuration options
<br>
<p><p>So I expect something like what mpichversion gives me, which I find
<br>
incredibly useful:
<br>
<p>$ ~/MPICH/install-ch3-ofi-psm2/bin/mpichversion
<br>
<p>MPICH Version:    3.2
<br>
<p>MPICH Release date: unreleased development copy
<br>
<p>MPICH Device:    ch3:nemesis
<br>
<p>MPICH configure: CC=icc CXX=icpc FC=ifort F77=ifort
<br>
--with-ofi=~/OFI/install-psm2 --with-device=ch3:nemesis:ofi
<br>
--prefix=~/MPICH/install-ch3-ofi-psm2
<br>
<p>MPICH CC: icc    -O2
<br>
<p>MPICH CXX: icpc   -O2
<br>
<p>MPICH F77: ifort   -O2
<br>
<p>MPICH FC: ifort   -O2
<br>
<p><p>Unfortunately, I see nothing that is directly convertible to configure
<br>
arguments in the following:
<br>
<p>$ /home/projects/x86-64-knl/openmpi/1.10.2/intel/17.0.042/bin/ompi_info -c
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: XXX
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Apr 18 18:47:25 EDT 2016
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: XXX
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: XXX
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Apr 18 19:16:55 EDT 2016
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: XXX
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort mpif.h: yes (all)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi: yes (full: ignore TKR)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi size: deprecated-ompi-info-value
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort use mpi_f08: yes
<br>
<p>&nbsp;Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;limitations in the
<br>
<p><p>/home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/ifort
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler, does not support the following: array
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subsections, direct passthru (where possible) to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;underlying Open MPI's C functionality
<br>
<p>&nbsp;&nbsp;Fort mpi_f08 subarrays: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java bindings: yes
<br>
<p>&nbsp;&nbsp;Wrapper compiler rpath: runpath
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler:
<br>
/home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/icc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute:
<br>
<p>&nbsp;&nbsp;C compiler family name: INTEL
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 1700.20160315
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C char size: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bool size: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C short size: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C int size: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C long size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C float size: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C double size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C pointer size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C char align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bool align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C int align: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C float align: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C double align: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler:
<br>
/home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/icpc
<br>
<p>&nbsp;&nbsp;&nbsp;C++ compiler absolute: none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort compiler:
<br>
/home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/ifort
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort compiler abs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
<br>
<p>&nbsp;&nbsp;&nbsp;Fort 08 assumed shape: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort optional args: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort INTERFACE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Fort ISO_FORTRAN_ENV: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort STORAGE_SIZE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort BIND(C) (all): yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ISO_C_BINDING: yes
<br>
<p>&nbsp;Fort SUBROUTINE BIND(C): yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort TYPE,BIND(C): yes
<br>
<p>&nbsp;Fort T,BIND(C,name=&quot;a&quot;): yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PRIVATE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PROTECTED: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ABSTRACT: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort ASYNCHRONOUS: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort PROCEDURE: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort USE...ONLY: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort C_FUNLOC: yes
<br>
<p>&nbsp;Fort f08 using wrappers: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort MPI_SIZEOF: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer size: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort logical size: 4
<br>
<p>&nbsp;Fort logical value true: -1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer1: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer2: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer4: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer8: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer16: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real4: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real8: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real16: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have complex8: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have complex16: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have complex32: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer1 size: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer2 size: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 size: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer16 size: -1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real size: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real4 size: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real16 size: 16
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 16
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx8 size: 8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx16 size: 16
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx32 size: 32
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer1 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer2 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Fort integer16 align: -1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real4 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real16 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx8 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx16 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx32 align: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Fort mpif.h profiling: yes
<br>
<p>&nbsp;&nbsp;Fort use mpi profiling: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Fort use mpi_f08 prof: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (MPI_THREAD_MULTIPLE: yes, OPAL support:
<br>
yes,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI progress: no, ORTE progress: yes, Event lib:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build CFLAGS: -O3 -DNDEBUG -finline-functions
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fno-strict-aliasing -restrict
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Qoption,cpp,--extended_float_types -pthread
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build FCFLAGS:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LDFLAGS: -L/home/projects/x86-64-knl/hwloc/1.11.3/lib
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LIBS: -lrt -lutil   -lhwloc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra CFLAGS: -pthread
<br>
<p>&nbsp;&nbsp;Wrapper extra CXXFLAGS: -pthread
<br>
<p>&nbsp;&nbsp;&nbsp;Wrapper extra FCFLAGS:
<br>
<p>&nbsp;&nbsp;&nbsp;Wrapper extra LDFLAGS: -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra LIBS: -ldl -lutil
<br>
<p>&nbsp;&nbsp;Internal debug support: no
<br>
<p>&nbsp;&nbsp;MPI interface warnings: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
<p>Memory profiling support: no
<br>
<p>Memory debugging support: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dl support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
<p>&nbsp;mpirun default --prefix: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;Host topology support: yes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions:
<br>
<p>&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
<p>&nbsp;&nbsp;&nbsp;C/R Enabled Debugging: no
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: yes
<br>
<p>&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
<p>&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
<p>How do I extract configure arguments from an OpenMPI installation?  I am
<br>
trying to reproduce a build exactly and I do not have access to config.log
<br>
from the origin build.
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>Previous message:</strong> <a href="29702.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>Reply:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
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
