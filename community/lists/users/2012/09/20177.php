<?
$subject_val = "Re: [OMPI users] segmentation fault with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 13:03:54 2012" -->
<!-- isoreceived="20120910170354" -->
<!-- sent="Mon, 10 Sep 2012 10:03:46 -0700" -->
<!-- isosent="20120910170346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with openmpi-1.6.2" -->
<!-- id="68200E30-9D9A-48C3-8FC8-A0CE4D6B17E0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209101650.q8AGoRQX024794_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault with openmpi-1.6.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 13:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20178.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20176.php">Siegmar Gross: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20176.php">Siegmar Gross: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, 1.6.2rc1 had a problem - now fixed, will be in tomorrow's nightly 1.6 tarball.
<br>
<p>On Sep 10, 2012, at 9:50 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you very much for your fast answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/09/2012 15:41, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have built openmpi-1.6.2rc1 and get the following error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 123 mpicc -showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cc -I/usr/local/openmpi-1.6.2_32_cc/include -mt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -L/usr/local/openmpi-1.6.2_32_cc/lib -lmpi -lm -lkstat -llgrp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 124 mpiexec -np 2 -host tyr init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 125 mpiexec -np 2 -host sunpc4 init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; key_from_blob: remaining bytes in key blob 81
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 126 mpiexec -np 2 -host tyr,sunpc4 init_finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] Failing at address: 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:0x15434c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_get_target_nod
</span><br>
<span class="quotelev1">&gt; es+0x1cc [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_rmaps_round_robin.so:0x1ec8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_map_job+0xe4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_plm_base_setup_job+0xc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_plm_rsh.so:orte_plm_rsh_launch+0x1b0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /.../openmpi-1.6.2_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr:23956] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any ideas or suggestions? As I wrote in my email from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yesterday, I had to add &quot;#include &lt;math.h&gt;&quot; into file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have a prototype for function &quot;rint&quot; in line 834. Thank you very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Did you compile OMPI usins '--with-pmi' option? I saw this error when 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I didn't. I used the following options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.6.2rc1/configure --prefix=/usr/local/openmpi-1.6.2_32_cc \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32 -library=stlport4&quot; FFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;  FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --without-udapl --without-openib \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; you have allocated job on one console, but running the test on another. 
</span><br>
<span class="quotelev2">&gt;&gt; Try to run the task on the console where you allocated it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It worked for openmpi-1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 110 mpicc -showme
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.6_32_cc/include -mt -L/usr/local/openmpi-1.6_32_cc/lib 
</span><br>
<span class="quotelev1">&gt; -lmpi -lm -lkstat -llgrp -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt; tyr small_prog 111 mpiexec -np 2 -host tyr,sunpc4 init_finalize
</span><br>
<span class="quotelev1">&gt; key_from_blob: remaining bytes in key blob 81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 112 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20178.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20176.php">Siegmar Gross: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20176.php">Siegmar Gross: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
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
