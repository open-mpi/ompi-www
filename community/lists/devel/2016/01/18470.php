<?
$subject_val = "[OMPI devel] Open MPI and NAG Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  2 21:15:18 2016" -->
<!-- isoreceived="20160103021518" -->
<!-- sent="Sat, 2 Jan 2016 18:15:12 -0800" -->
<!-- isosent="20160103021512" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI and NAG Fortran" -->
<!-- id="CAAvDA17JGKUQeGyQTT-9X_WE572FwEU34Kj7yUn2_85CoLJPFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI and NAG Fortran<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-02 21:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18471.php">mahdiyeh ghazi: "[OMPI devel] MPI_T performance variable in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18476.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and NAG Fortran"</a>
<li><strong>Reply:</strong> <a href="18476.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and NAG Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried the 1.8.8, 1.10.2rc3 and nightly master tarballs with the NAG
<br>
Fortran compiler.
<br>
Both versions 6.0 and 5.3 are unable to build and/or link Open MPI's
<br>
Fortran bindings (MPI and SHMEM) w/o some extra work.
<br>
A google search turned up a blog entry dealing with the exact issues I
<br>
encountered:
<br>
<p><a href="http://baradi09.blogspot.com/2014/08/compiling-openmpi-with-nag-fortran.html">http://baradi09.blogspot.com/2014/08/compiling-openmpi-with-nag-fortran.html</a>
<br>
<p><p>It suggests the following
<br>
&nbsp;&nbsp;+ Adding FCFLAGS=&quot;-mismatch&quot; to disable some type checking.
<br>
&nbsp;&nbsp;+ Building only static libs to avoid issues with libtool and nagfor (see
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/07/9497.php">http://www.open-mpi.org/community/lists/devel/2011/07/9497.php</a>)
<br>
&nbsp;&nbsp;+ Patching the *fort*-wrapper.data files (same problem as with libtool)
<br>
<p>Together those are sufficient to get 1.10.2rc3 built with both 6.0 and 5.3
<br>
version of NAG Fortran.
<br>
However, the patching of the *fort*-wrapper.data files is necessary but not
<br>
sufficient to fix the linking problems:
<br>
<p>$ mpifort -g ring_mpifh.f -o ring_mpifh
<br>
NAG Fortran Compiler Release 6.0(Hibiya) Build 1028
<br>
Warning: ring_mpifh.f, line 80: Unused external reference MPI_WTICK
<br>
Warning: ring_mpifh.f, line 80: Unused external reference MPI_WTIME
<br>
Warning: ring_mpifh.f, line 80: Unused external reference PMPI_WTICK
<br>
Warning: ring_mpifh.f, line 80: Unused external reference PMPI_WTIME
<br>
Obsolescent: ring_mpifh.f, line 10: Fixed source form
<br>
[NAG Fortran Compiler normal termination, 5 warnings]
<br>
/sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/INST/lib/libmpi.a(ompi_mpi_init.o):
<br>
In function `ompi_warn_fork':
<br>
/sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/openmpi-1.10.2rc3/ompi/runtime/ompi_mpi_init.c:193:
<br>
undefined reference to `pthread_atfork'
<br>
/sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/INST/lib/libopen-pal.a(lt1-malloc.o):
<br>
In function `ptmalloc_init':
<br>
/sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/openmpi-1.10.2rc3/opal/mca/memory/linux/arena.c:387:
<br>
undefined reference to `pthread_atfork'
<br>
<p><p>I needed to manually append &quot;-lpthreads&quot; to libs_static in the
<br>
*fort*-wrapper.data files to resolve that problem.
<br>
I suspect configure should have taken care of that, based on the following:
<br>
<p>checking if Fortran compiler and POSIX threads work as is... no
<br>
[...C++ checks...]
<br>
checking if Fortran compiler and POSIX threads work with -Kthread... no
<br>
checking if Fortran compiler and POSIX threads work with -kthread... no
<br>
checking if Fortran compiler and POSIX threads work with -pthread... no
<br>
checking if Fortran compiler and POSIX threads work with -pthreads... no
<br>
checking if Fortran compiler and POSIX threads work with -mt... no
<br>
checking if Fortran compiler and POSIX threads work with -mthreads... no
<br>
checking if Fortran compiler and POSIX threads work with -lpthreads... no
<br>
checking if Fortran compiler and POSIX threads work with -llthread... no
<br>
checking if Fortran compiler and POSIX threads work with -lpthread... yes
<br>
<p><p>If there is no interest in support for the NAG Fortran compiler, just say
<br>
so and I'll drop the subject.
<br>
However, if you want more info or need me to test possible fixes, let me
<br>
know.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18471.php">mahdiyeh ghazi: "[OMPI devel] MPI_T performance variable in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18476.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and NAG Fortran"</a>
<li><strong>Reply:</strong> <a href="18476.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and NAG Fortran"</a>
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
