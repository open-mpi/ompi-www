<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:52:53 2015" -->
<!-- isoreceived="20150219135253" -->
<!-- sent="Thu, 19 Feb 2015 13:52:52 +0000" -->
<!-- isosent="20150219135252" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2" -->
<!-- id="07C092DB-68E1-4418-9097-41437AF8E8B9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201502191250.t1JCoeMX003184_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 08:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26350.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>In reply to:</strong> <a href="26344.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like --enable-heterogeneous builds are broken on master.  I filed <a href="https://github.com/open-mpi/ompi/issues/403">https://github.com/open-mpi/ompi/issues/403</a>.
<br>
<p>Thanks for the heads-up!
<br>
<p><p><span class="quotelev1">&gt; On Feb 19, 2015, at 7:50 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-dev-1031-g008755a on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
</span><br>
<span class="quotelev1">&gt; platforms for both compilers. I used the following configure
</span><br>
<span class="quotelev1">&gt; command for all platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-1031-g008755a/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
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
<span class="quotelev1">&gt; I got the following error on my Linux machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       pml_cm_start.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     mca_pml_cm.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-Linux.x86_64.64_gcc/ompi/mca/
</span><br>
<span class="quotelev1">&gt; pml/cm'
</span><br>
<span class="quotelev1">&gt; Making all in mca/pml/ob1
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-dev-1031-g008755a-Linux.x86_64.64_gcc/ompi/mca
</span><br>
<span class="quotelev1">&gt; /pml/ob1'
</span><br>
<span class="quotelev1">&gt;  CC       pml_ob1.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1.h:38:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1.c:45:
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h: In function 'ob1_hdr_ntoh':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h:204:12: error: 'mca_pml_ob1_rget_hdr
</span><br>
<span class="quotelev1">&gt; _t' has no member named 'hdr_seg_cnt'
</span><br>
<span class="quotelev1">&gt;         (h).hdr_seg_cnt = ntohl((h).hdr_seg_cnt);       \
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h:440:13: note: in expansion of macro 
</span><br>
<span class="quotelev1">&gt; 'MCA_PML_OB1_RGET_HDR_NTOH'
</span><br>
<span class="quotelev1">&gt;             MCA_PML_OB1_RGET_HDR_NTOH(hdr-&gt;hdr_rget);
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A lot more of the above messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h:366:36: error: 'mca_pml_ob1_rdma_hdr
</span><br>
<span class="quotelev1">&gt; _t' has no member named 'hdr_seg_cnt'
</span><br>
<span class="quotelev1">&gt;         (h).hdr_seg_cnt = htonl((h).hdr_seg_cnt);          \
</span><br>
<span class="quotelev1">&gt;                                    ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h:495:13: note: in expansion of macro 
</span><br>
<span class="quotelev1">&gt; 'MCA_PML_OB1_RDMA_HDR_HTON'
</span><br>
<span class="quotelev1">&gt;             MCA_PML_OB1_RDMA_HDR_HTON(hdr-&gt;hdr_rdma);
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1.c: In function 'mca_pml_ob1_send_fin':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1.c:664:18: error: 'hdr' undeclared (first u
</span><br>
<span class="quotelev1">&gt; se in this function)
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro
</span><br>
<span class="quotelev1">&gt; 'ob1_hdr_hton'
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton_intr((mca_pml_ob1_hdr_t*)h, t, p)
</span><br>
<span class="quotelev1">&gt;                                           ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1.c:664:18: note: each undeclared identifier
</span><br>
<span class="quotelev1">&gt; is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt;     ob1_hdr_hton(hdr, MCA_PML_OB1_HDR_TYPE_FIN, proc);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-dev-1031-g008755a/ompi/mca/pml/ob1/pml_ob1_hdr.h:465:43: note: in definition of macro
</span><br>
<span class="quotelev1">&gt; 'ob1_hdr_hton'
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
<span class="quotelev1">&gt; I would be grateful, if somebody could fix the problem. Thank
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26343.php">http://www.open-mpi.org/community/lists/users/2015/02/26343.php</a>
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
<li><strong>Next message:</strong> <a href="26350.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26348.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with Sun C	5.13"</a>
<li><strong>In reply to:</strong> <a href="26344.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
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
