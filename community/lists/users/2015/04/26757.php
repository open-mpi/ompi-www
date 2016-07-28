<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-1527-g97444d8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 08:17:44 2015" -->
<!-- isoreceived="20150418121744" -->
<!-- sent="Sat, 18 Apr 2015 12:17:41 +0000" -->
<!-- isosent="20150418121741" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-1527-g97444d8" -->
<!-- id="556916DE-BC95-44AE-BD52-BB8693EE570B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201504180634.t3I6YURa019467_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-1527-g97444d8<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-18 08:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26758.php">Siegmar Gross: "Re: [OMPI users] [ompi] master heterogeneous build broken (#403)"</a>
<li><strong>Previous message:</strong> <a href="26756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php"</a>
<li><strong>In reply to:</strong> <a href="26753.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1527-g97444d8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting, Siegmar.  I've filed <a href="https://github.com/open-mpi/ompi/issues/540">https://github.com/open-mpi/ompi/issues/540</a>.
<br>
<p><p><span class="quotelev1">&gt; On Apr 18, 2015, at 2:34 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I tried to build openmpi-dev-1527-g97444d8 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
</span><br>
<span class="quotelev1">&gt; platforms for both compilers once more. I used the following configure
</span><br>
<span class="quotelev1">&gt; command for all platforms for gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-1346-gb41d2ad/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still get the same errors on my Linux and Solaris machines that
</span><br>
<span class="quotelev1">&gt; I reported before (<a href="https://github.com/open-mpi/ompi/issues/403">https://github.com/open-mpi/ompi/issues/403</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-dev-1527-g97444d8-Linux.x86_64.64_gcc 137 tail -20 log.make.*                     
</span><br>
<span class="quotelev1">&gt; MCA_PML_OB1_RDMA_HDR_HTON(hdr-&gt;hdr_rdma);
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1.c: In function `mca_pml_ob1_send_fin':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1.c:665:18: error: `hdr' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro `ob1_hdr_hton'
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
</span><br>
<span class="quotelev1">&gt;                                           ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1.c:665:18: note: each undeclared identifier is reported only once 
</span><br>
<span class="quotelev1">&gt; for each function it appears in
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1527-g97444d8/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro `ob1_hdr_hton'
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
</span><br>
<span class="quotelev1">&gt;                                           ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [pml_ob1.lo] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do I have any chance that somebody will fix the problem? Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26753.php">http://www.open-mpi.org/community/lists/users/2015/04/26753.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26758.php">Siegmar Gross: "Re: [OMPI users] [ompi] master heterogeneous build broken (#403)"</a>
<li><strong>Previous message:</strong> <a href="26756.php">Jeff Squyres (jsquyres): "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php"</a>
<li><strong>In reply to:</strong> <a href="26753.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1527-g97444d8"</a>
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
