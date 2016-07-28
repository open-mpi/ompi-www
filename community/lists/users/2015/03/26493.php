<?
$subject_val = "[OMPI users] error building openmpi-dev-1346-gb41d2ad";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 09:46:51 2015" -->
<!-- isoreceived="20150318134651" -->
<!-- sent="Wed, 18 Mar 2015 14:46:26 +0100 (CET)" -->
<!-- isosent="20150318134626" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-1346-gb41d2ad" -->
<!-- id="201503181346.t2IDkQ9v007182_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-1346-gb41d2ad<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 09:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-1346-gb41d2ad on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
<br>
platforms for both compilers. I used the following configure
<br>
command for all platforms for gcc.
<br>
<p>../openmpi-dev-1346-gb41d2ad/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
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
<p><p>I still get the same error on my Linux and Solaris 10 x86_64
<br>
machines that I reported February 19th
<br>
(<a href="https://github.com/open-mpi/ompi/issues/403">https://github.com/open-mpi/ompi/issues/403</a>) and I get the
<br>
following error on my Solaris 10 Sparc machine.
<br>
<p>...
<br>
&nbsp;&nbsp;CCLD     mca_pml_cm.la
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1346-gb41d2ad-SunOS.sparc.64_gcc/ompi/mca/pml/cm'
<br>
Making all in mca/pml/ob1
<br>
make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-dev-1346-gb41d2ad-SunOS.sparc.64_gcc/ompi/mca/pml/ob1'
<br>
&nbsp;&nbsp;CC       pml_ob1.lo
<br>
In file included from ../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1.h:38:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1.c:46:
<br>
../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1.c: In function 'mca_pml_ob1_send_fin':
<br>
../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1.c:665:18: error: 'hdr' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro 'ob1_hdr_hton'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1.c:665:18: note: each undeclared identifier is reported only once for each function it appears in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1346-gb41d2ad/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro 'ob1_hdr_hton'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [pml_ob1.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1346-gb41d2ad-SunOS.sparc.64_gcc/ompi/mca/pml/ob1'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1346-gb41d2ad-SunOS.sparc.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>I would be grateful, if somebody could fix the problem. Thank
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
<li><strong>Next message:</strong> <a href="26494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26492.php">Nick Papior Andersen: "Re: [OMPI users] Configuration error with external hwloc"</a>
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
