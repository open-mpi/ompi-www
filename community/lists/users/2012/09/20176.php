<?
$subject_val = "Re: [OMPI users] segmentation fault with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 12:57:14 2012" -->
<!-- isoreceived="20120910165714" -->
<!-- sent="Mon, 10 Sep 2012 18:50:27 +0200 (CEST)" -->
<!-- isosent="20120910165027" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault with openmpi-1.6.2" -->
<!-- id="201209101650.q8AGoRQX024794_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] segmentation fault with openmpi-1.6.2" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 12:50:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20177.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20177.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20177.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thank you very much for your fast answer.
<br>
<p><span class="quotelev1">&gt; On 10/09/2012 15:41, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have built openmpi-1.6.2rc1 and get the following error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 123 mpicc -showme
</span><br>
<span class="quotelev2">&gt; &gt; cc -I/usr/local/openmpi-1.6.2_32_cc/include -mt
</span><br>
<span class="quotelev2">&gt; &gt;    -L/usr/local/openmpi-1.6.2_32_cc/lib -lmpi -lm -lkstat -llgrp
</span><br>
<span class="quotelev2">&gt; &gt;    -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 124 mpiexec -np 2 -host tyr init_finalize
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 125 mpiexec -np 2 -host sunpc4 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; key_from_blob: remaining bytes in key blob 81
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 126 mpiexec -np 2 -host tyr,sunpc4 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:23956] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:23956] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:23956] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:23956] Failing at address: 18
</span><br>
<span class="quotelev2">&gt; &gt; /.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:0x15434c
</span><br>
<span class="quotelev2">&gt; &gt; /lib/libc.so.1:0xcad04
</span><br>
<span class="quotelev2">&gt; &gt; /lib/libc.so.1:0xbf3b4
</span><br>
<span class="quotelev2">&gt; &gt; /lib/libc.so.1:0xbf59c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_get_target_nod
<br>
es+0x1cc [ Signal 11 (SEGV)]
<br>
<span class="quotelev2">&gt; &gt; /.../openmpi-1.6.2_32_cc/lib/openmpi/mca_rmaps_round_robin.so:0x1ec8
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_rmaps_base_map_job+0xe4
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/.../openmpi-1.6.2_32_cc/lib/libopen-rte.so.4.0.0:orte_plm_base_setup_job+0xc4
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/.../openmpi-1.6.2_32_cc/lib/openmpi/mca_plm_rsh.so:orte_plm_rsh_launch+0x1b0
<br>
<span class="quotelev2">&gt; &gt; /.../openmpi-1.6.2_32_cc/bin/orterun:orterun+0x16a8
</span><br>
<span class="quotelev2">&gt; &gt; /.../openmpi-1.6.2_32_cc/bin/orterun:main+0x24
</span><br>
<span class="quotelev2">&gt; &gt; /.../openmpi-1.6.2_32_cc/bin/orterun:_start+0xd8
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:23956] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any ideas or suggestions? As I wrote in my email from
</span><br>
<span class="quotelev2">&gt; &gt; yesterday, I had to add &quot;#include &lt;math.h&gt;&quot; into file
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.6.2rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfaux/otfaux.cpp
</span><br>
<span class="quotelev2">&gt; &gt; to have a prototype for function &quot;rint&quot; in line 834. Thank you very
</span><br>
<span class="quotelev2">&gt; &gt; much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you compile OMPI usins '--with-pmi' option? I saw this error when 
</span><br>
<p>No, I didn't. I used the following options.
<br>
<p>../openmpi-1.6.2rc1/configure --prefix=/usr/local/openmpi-1.6.2_32_cc \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32 -library=stlport4&quot; FFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;FCFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--without-udapl --without-openib \
<br>
&nbsp;&nbsp;--enable-mpi-f90 --with-mpi-f90-size=small \
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--with-hwloc=internal --with-ft=LAM --enable-sparse-groups \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
<br>
<p><p><span class="quotelev1">&gt; you have allocated job on one console, but running the test on another. 
</span><br>
<span class="quotelev1">&gt; Try to run the task on the console where you allocated it.
</span><br>
<p>It worked for openmpi-1.6.
<br>
<p>tyr small_prog 110 mpicc -showme
<br>
cc -I/usr/local/openmpi-1.6_32_cc/include -mt -L/usr/local/openmpi-1.6_32_cc/lib 
<br>
-lmpi -lm -lkstat -llgrp -lsocket -lnsl -lrt -lm
<br>
tyr small_prog 111 mpiexec -np 2 -host tyr,sunpc4 init_finalize
<br>
key_from_blob: remaining bytes in key blob 81
<br>
<p>Hello!
<br>
Hello!
<br>
<p>tyr small_prog 112 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20177.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20175.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="20171.php">Siegmar Gross: "[OMPI users] segmentation fault with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20177.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20177.php">Ralph Castain: "Re: [OMPI users] segmentation fault with openmpi-1.6.2"</a>
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
