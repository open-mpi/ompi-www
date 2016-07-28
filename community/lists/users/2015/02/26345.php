<?
$subject_val = "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:01:07 2015" -->
<!-- isoreceived="20150219130107" -->
<!-- sent="Thu, 19 Feb 2015 14:00:46 +0100 (CET)" -->
<!-- isosent="20150219130046" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2" -->
<!-- id="201502191300.t1JD0kg8003194_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 08:00:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26346.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
<li><strong>Previous message:</strong> <a href="26344.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26350.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Reply:</strong> <a href="26350.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-1031-g008755a on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
<br>
platforms for both compilers. I used the following configure
<br>
command for all platforms.
<br>
<p>../openmpi-dev-1031-g008755a/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>I got the following warning on my Solaris Sparc machine.
<br>
<p>...
<br>
&nbsp;&nbsp;CC       mpi-io/get_extent.lo
<br>
In file included from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/adio/include/adioi
<br>
.h:950:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/adio/include/adio.
<br>
h:454,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/mpioimpl.h:
<br>
15,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/get_extent.
<br>
c:8:
<br>
../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/get_extent.c: In function 'mca_io
<br>
_romio_dist_MPI_File_get_type_extent':
<br>
../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/adio/include/adioi_error.h:74:24: warnin
<br>
g: 'error_code' may be used uninitialized in this function [-Wmaybe-uninitialized]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error_code = MPIO_Err_return_file(fh, error_code);      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/get_extent.c:42:9: note: 'error_c
<br>
ode' was declared here
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int error_code;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;CC       mpi-io/get_group.lo
<br>
...
<br>
<p><p>I got the same error that I have already reported for my
<br>
Linux machine.
<br>
<p><p>I would be grateful, if somebody could fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26346.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with Sun C 5.13"</a>
<li><strong>Previous message:</strong> <a href="26344.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26350.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Reply:</strong> <a href="26350.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
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
