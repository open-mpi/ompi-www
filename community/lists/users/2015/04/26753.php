<?
$subject_val = "[OMPI users] error building openmpi-dev-1527-g97444d8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 02:34:48 2015" -->
<!-- isoreceived="20150418063448" -->
<!-- sent="Sat, 18 Apr 2015 08:34:30 +0200 (CEST)" -->
<!-- isosent="20150418063430" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-dev-1527-g97444d8" -->
<!-- id="201504180634.t3I6YURa019467_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-dev-1527-g97444d8<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-18 02:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26754.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26752.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26757.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<li><strong>Reply:</strong> <a href="26757.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I tried to build openmpi-dev-1527-g97444d8 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
<br>
platforms for both compilers once more. I used the following configure
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
<p><p>I still get the same errors on my Linux and Solaris machines that
<br>
I reported before (<a href="https://github.com/open-mpi/ompi/issues/403">https://github.com/open-mpi/ompi/issues/403</a>).
<br>
<p>tyr openmpi-dev-1527-g97444d8-Linux.x86_64.64_gcc 137 tail -20 log.make.*                     
<br>
MCA_PML_OB1_RDMA_HDR_HTON(hdr-&gt;hdr_rdma);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1.c: In function `mca_pml_ob1_send_fin':
<br>
../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1.c:665:18: error: `hdr' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro `ob1_hdr_hton'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1.c:665:18: note: each undeclared identifier is reported only once 
<br>
for each function it appears in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro `ob1_hdr_hton'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [pml_ob1.lo] Error 1
<br>
...
<br>
<p><p>Do I have any chance that somebody will fix the problem? Thank
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
<li><strong>Next message:</strong> <a href="26754.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26752.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26757.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<li><strong>Reply:</strong> <a href="26757.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1527-g97444d8"</a>
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
