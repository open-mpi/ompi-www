<?
$subject_val = "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 13:31:25 2015" -->
<!-- isoreceived="20150610173125" -->
<!-- sent="Wed, 10 Jun 2015 11:31:08 -0600" -->
<!-- isosent="20150610173108" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks" -->
<!-- id="20150610173108.GA39053_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201506100919.t5A9J3ml009542_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 13:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27075.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Reply:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like a bug in the CM optimization that went into 1.10 yesterday. I
<br>
will let the author know to fix this one.
<br>
<p>-Nathan
<br>
<p>On Wed, Jun 10, 2015 at 11:19:04AM +0200, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Bah. Another proc-&gt;super usage. Thought I got them all. Will fix now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today I tried to build openmpi-v1.10-dev-70-g5fefddb and I still get an
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       pml_cm.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.c:25:0:
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h: In function 'mca_pml_cm_recv':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h:149:13: warning: implicit declaration of function 'alloca' [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;              alloca(sizeof(mca_mtl_request_t) + ompi_mtl-&gt;mtl_request_size);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h:149:13: warning: incompatible implicit declaration of built-in function 'alloca'
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h:171:18: error: 'opal_list_item_t {aka struct opal_list_item_t}' has no member named 'proc_convertor'
</span><br>
<span class="quotelev1">&gt;   ompi_proc-&gt;super.proc_convertor,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [pml_cm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-70-g5fefddb-SunOS.sparc.64_gcc/ompi/mca/pml/cm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-70-g5fefddb-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-v1.10-dev-70-g5fefddb-SunOS.sparc.64_gcc 25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help in advance.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jun 09, 2015 at 12:43:50PM +0200, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; today I tried to build openmpi-v1.10-dev-41-g57faa88 on my machines
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the following error
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on all platforms with cc. I have already reported the problem a few
</span><br>
<span class="quotelev3">&gt; &gt; &gt; days ago. Nathan wanted to fix it and I'm not sure if he hasn't had
</span><br>
<span class="quotelev3">&gt; &gt; &gt; time to do it or if it is something different now
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (<a href="https://github.com/open-mpi/ompi-release/pull/299">https://github.com/open-mpi/ompi-release/pull/299</a>). I used the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; following command to configure the package.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../openmpi-v1.10-dev-59-g4e9cea6/configure --prefix=/usr/local/openmpi-1.10.0_64_gcc \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --libdir=/usr/local/openmpi-1.10.0_64_gcc/lib64 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --enable-mpi-java \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c: In function 'osc_pt2pt_accumulate_buffer':
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:20: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     ^
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:58: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                                           ^
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc 122 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cc: acomp failed for ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; linpc1 openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc 197 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27056.php">http://www.open-mpi.org/community/lists/users/2015/06/27056.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27083/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27075.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Reply:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
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
