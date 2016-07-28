<?
$subject_val = "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 10:43:49 2015" -->
<!-- isoreceived="20150609144349" -->
<!-- sent="Tue, 9 Jun 2015 08:43:38 -0600" -->
<!-- isosent="20150609144338" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks" -->
<!-- id="20150609144338.GE97702_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201506091043.t59AhotT010173_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2015-06-09 10:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27062.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27060.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="27056.php">Siegmar Gross: "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27075.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bah. Another proc-&gt;super usage. Thought I got them all. Will fix now.
<br>
<p>-Nathan
<br>
<p>On Tue, Jun 09, 2015 at 12:43:50PM +0200, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-v1.10-dev-41-g57faa88 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the following error
</span><br>
<span class="quotelev1">&gt; on all platforms with cc. I have already reported the problem a few
</span><br>
<span class="quotelev1">&gt; days ago. Nathan wanted to fix it and I'm not sure if he hasn't had
</span><br>
<span class="quotelev1">&gt; time to do it or if it is something different now
</span><br>
<span class="quotelev1">&gt; (<a href="https://github.com/open-mpi/ompi-release/pull/299">https://github.com/open-mpi/ompi-release/pull/299</a>). I used the
</span><br>
<span class="quotelev1">&gt; following command to configure the package.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-v1.10-dev-59-g4e9cea6/configure --prefix=/usr/local/openmpi-1.10.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.10.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c: In function 'osc_pt2pt_accumulate_buffer':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:20: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev1">&gt;      if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
</span><br>
<span class="quotelev1">&gt;                     ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c:571:58: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev1">&gt;      if (proc-&gt;super.proc_arch != ompi_proc_local()-&gt;super.proc_arch) {
</span><br>
<span class="quotelev1">&gt;                                                           ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-v1.10-dev-59-g4e9cea6-SunOS.sparc.64_gcc 122 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   CC       osc_pt2pt_data_move.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c&quot;, line 571: improper member use: proc_arch
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../../../../openmpi-v1.10-dev-59-g4e9cea6/ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_data_move.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi/mca/osc/pt2pt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-v1.10-dev-59-g4e9cea6-Linux.x86_64.64_cc 197 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27056.php">http://www.open-mpi.org/community/lists/users/2015/06/27056.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27061/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27062.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27060.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="27056.php">Siegmar Gross: "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27075.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
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
