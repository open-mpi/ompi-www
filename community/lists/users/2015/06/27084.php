<?
$subject_val = "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 13:37:02 2015" -->
<!-- isoreceived="20150610173702" -->
<!-- sent="Wed, 10 Jun 2015 10:36:56 -0700" -->
<!-- isosent="20150610173656" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks" -->
<!-- id="507A63C4-013C-4207-A793-607623D9B696_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150610173108.GA39053_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 13:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27085.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27083.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27083.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27093.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just fixed it - thanks!
<br>
<p><p><span class="quotelev1">&gt; On Jun 10, 2015, at 10:31 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like a bug in the CM optimization that went into 1.10 yesterday. I
</span><br>
<span class="quotelev1">&gt; will let the author know to fix this one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 10, 2015 at 11:19:04AM +0200, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nathan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bah. Another proc-&gt;super usage. Thought I got them all. Will fix now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Today I tried to build openmpi-v1.10-dev-70-g5fefddb and I still get an
</span><br>
<span class="quotelev2">&gt;&gt; error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  CC       pml_cm.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.c:25:0:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h: In function 'mca_pml_cm_recv':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h:149:13: warning: implicit declaration of function 'alloca' [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev2">&gt;&gt;             alloca(sizeof(mca_mtl_request_t) + ompi_mtl-&gt;mtl_request_size);
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h:149:13: warning: incompatible implicit declaration of built-in function 'alloca'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v1.10-dev-70-g5fefddb/ompi/mca/pml/cm/pml_cm.h:171:18: error: 'opal_list_item_t {aka struct opal_list_item_t}' has no member named 'proc_convertor'
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_proc-&gt;super.proc_convertor,
</span><br>
<span class="quotelev2">&gt;&gt;                  ^
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [pml_cm.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-70-g5fefddb-SunOS.sparc.64_gcc/ompi/mca/pml/cm'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-70-g5fefddb-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-v1.10-dev-70-g5fefddb-SunOS.sparc.64_gcc 25
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jun 09, 2015 at 12:43:50PM +0200, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; today I tried to build openmpi-v1.10-dev-41-g57faa88 on my machines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the following error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on all platforms with cc. I have already reported the problem a few
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; days ago. Nathan wanted to fix it and I'm not sure if he hasn't had
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time to do it or if it is something different now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (<a href="https://github.com/open-mpi/ompi-release/pull/299">https://github.com/open-mpi/ompi-release/pull/299</a>). I used the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following command to configure the package.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../openmpi-v1.10-dev-59-g4e9cea6/configure --prefix=/usr/local/openmpi-1.10.0_64_gcc \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --libdir=/usr/local/openmpi-1.10.0_64_gcc/lib64 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --without-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c: In function 'osc_pt2pt_accumulate_buffer':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:20: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:58: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                                          ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc 122 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc: acomp failed for ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc1 openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc 197 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you very much for any help in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27056.php">http://www.open-mpi.org/community/lists/users/2015/06/27056.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27083.php">http://www.open-mpi.org/community/lists/users/2015/06/27083.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27083.php">http://www.open-mpi.org/community/lists/users/2015/06/27083.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27085.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27083.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27083.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27093.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
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
