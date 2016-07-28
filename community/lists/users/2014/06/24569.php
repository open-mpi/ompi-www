<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 12:32:54 2014" -->
<!-- isoreceived="20140606163254" -->
<!-- sent="Fri, 6 Jun 2014 09:32:50 -0700" -->
<!-- isosent="20140606163250" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="6D710680-0FCD-4540-93A1-C4DF2B2ABB36_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159EE10F20_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib segfaults with Torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 12:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24570.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24568.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24566.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fascinating - I can only assume that Torque is setting something in the environment that is creating the confusion. Sadly, Nathan is at the MPI Forum this week, so we may have to wait until Mon to get his input on the problem as he wrote the udcm code.
<br>
<p><p>On Jun 6, 2014, at 8:51 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yep, TCP works fine when launched via Torque/qsub:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf315:fischega] $ mpirun -np 2 -mca btl tcp,sm,self ring_c
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 06, 2014 10:34 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openib segfaults with Torque
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Huh - how strange. I can't imagine what it has to do with Torque vs rsh - this is failing when the openib BTL is trying to create the connection, which comes way after the launch is complete.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Are you able to run this with btl tcp,sm,self? If so, that would confirm that everything else is correct, and the problem truly is limited to the udcm itself...which shouldn't have anything to do with how the proc was launched.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 6:47 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the results when logging in to the compute node via ssh and running as you suggest:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ mpirun -np 2 -mca btl openib,sm,self ring_c
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here are the results when executing over Torque (launch the shell with &#147;qsub -l nodes=2 &#150;I&#148;):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf316:fischega] $ mpirun -np 2 -mca btl openib,sm,self ring_c
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:21584] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf316:21584] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [binf316:21584] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:21583] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf316:21583] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [binf316:21583] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7fe33a2637c0]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7fe339f0fb55]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 2] /lib64/libc.so.6(abort+0x181)[0x7fe339f11131]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x7fe339f08a10]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 4] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x3784b)[0x7fe3355a984b]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 5] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x36474)[0x7fe3355a8474]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 6] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[0x7fe3355a1316]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 7] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x18817)[0x7fe33558a817]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 8] [binf316:21583] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7f3b586697c0]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 1] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_btl_base_select+0x1b2)[0x7fe33a532a5e]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [ 9] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x20)[0x7fe3357ccd42]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [10] /lib64/libc.so.6(gsignal+0x35)[0x7f3b58315b55]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 2] /lib64/libc.so.6(abort+0x181)[0x7f3b58317131]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 3] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_bml_base_init+0xd6)[0x7fe33a531d1b]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [11] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pml_ob1.so(+0x7739)[0x7fe3344e7739]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [12] /lib64/libc.so.6(__assert_fail+0xf0)[0x7f3b5830ea10]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 4] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x3784b)[0x7f3b539af84b]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 5] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x36474)[0x7f3b539ae474]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 6] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[0x7f3b539a7316]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 7] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x18817)[0x7f3b53990817]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 8] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_pml_base_select+0x26e)[0x7fe33a5589b2]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [13] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_btl_base_select+0x1b2)[0x7f3b58938a5e]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [ 9] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x20)[0x7f3b53bd2d42]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [10] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(ompi_mpi_init+0x5f6)[0x7fe33a4c533c]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [14] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_bml_base_init+0xd6)[0x7f3b58937d1b]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [11] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pml_ob1.so(+0x7739)[0x7f3b528ed739]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [12] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_pml_base_select+0x26e)[0x7f3b5895e9b2]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [13] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MPI_Init+0x17e)[0x7fe33a4fa386]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [16] /lib64/libc.so.6(__libc_start_main+0xe6)[0x7fe339efbc36]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:21584] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(ompi_mpi_init+0x5f6)[0x7f3b588cb33c]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [14] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MPI_Init+0x17e)[0x7f3b58900386]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [16] /lib64/libc.so.6(__libc_start_main+0xe6)[0x7f3b58301c36]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:21583] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 21583 on node xxxx316 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 05, 2014 7:57 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openib segfaults with Torque
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hmmm...I'm not sure how that is going to run with only one proc (I don't know if the program is protected against that scenario). If you run with -np 2 -mca btl openib,sm,self, is it happy?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2014, at 2:16 PM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#146;s the command I&#146;m invoking and the terminal output.  (Some of this information doesn&#146;t appear to be captured in the backtrace.)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf316:fischega] $ mpirun -np 1 -mca btl openib,self ring_c
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:04549] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf316:04549] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [binf316:04549] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7f7f5955e7c0]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7f7f5920ab55]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 2] /lib64/libc.so.6(abort+0x181)[0x7f7f5920c131]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x7f7f59203a10]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 4] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x3784b)[0x7f7f548a484b]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 5] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x36474)[0x7f7f548a3474]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 6] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[0x7f7f5489c316]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 7] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x18817)[0x7f7f54885817]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 8] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_btl_base_select+0x1b2)[0x7f7f5982da5e]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [ 9] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x20)[0x7f7f54ac7d42]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [10] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_bml_base_init+0xd6)[0x7f7f5982cd1b]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [11] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pml_ob1.so(+0x7739)[0x7f7f539ed739]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [12] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_pml_base_select+0x26e)[0x7f7f598539b2]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [13] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(ompi_mpi_init+0x5f6)[0x7f7f597c033c]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [14] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MPI_Init+0x17e)[0x7f7f597f5386]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [16] /lib64/libc.so.6(__libc_start_main+0xe6)[0x7f7f591f6c36]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:04549] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 4549 on node xxxx316 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Fischer, Greg A. 
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 05, 2014 5:10 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Fischer, Greg A.
</span><br>
<span class="quotelev1">&gt; Subject: openib segfaults with Torque
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; OpenMPI Users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; After encountering difficulty with the Intel compilers (see the &#147;intermittent segfaults with openib on ring_c.c&#148; thread), I installed GCC-4.8.3 and recompiled OpenMPI. I ran the simple examples (ring, etc.) with the openib BTL in a typical BASH environment. Everything appeared to work fine, so I went on my merry way compiling the rest of my dependencies.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; After getting my dependencies and applications compiled, I began observing segfaults when submitting the applications through Torque. I recompiled OpenMPI with debug options, ran &#147;ring_c&#148; over the openib BTL in an interactive Torque session (&#147;qsub &#150;I&#148;), and got the backtrace below. All other system settings described in the previous thread are the same. Any thoughts on how to resolve this issue?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Core was generated by `ring_c'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 6, Aborted.
</span><br>
<span class="quotelev1">&gt; #0  0x00007f7f5920ab55 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f7f5920ab55 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f7f5920c0c5 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007f7f59203a10 in __assert_fail () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00007f7f548a484b in udcm_module_finalize (btl=0x716680, cpc=0x718c40) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734
</span><br>
<span class="quotelev1">&gt; #4  0x00007f7f548a3474 in udcm_component_query (btl=0x716680, cpc=0x717be8) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:476
</span><br>
<span class="quotelev1">&gt; #5  0x00007f7f5489c316 in ompi_btl_openib_connect_base_select_for_local_port (btl=0x716680) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_base.c:273
</span><br>
<span class="quotelev1">&gt; #6  0x00007f7f54885817 in btl_openib_component_init (num_btl_modules=0x7fff906aa420, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:2703
</span><br>
<span class="quotelev1">&gt; #7  0x00007f7f5982da5e in mca_btl_base_select (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/btl/base/btl_base_select.c:108
</span><br>
<span class="quotelev1">&gt; #8  0x00007f7f54ac7d42 in mca_bml_r2_component_init (priority=0x7fff906aa4f4, enable_progress_threads=false, enable_mpi_threads=false) at ../../../../../openmpi-1.8.1/ompi/mca/bml/r2/bml_r2_component.c:88
</span><br>
<span class="quotelev1">&gt; #9  0x00007f7f5982cd1b in mca_bml_base_init (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/bml/base/bml_base_init.c:69
</span><br>
<span class="quotelev1">&gt; #10 0x00007f7f539ed739 in mca_pml_ob1_component_init (priority=0x7fff906aa630, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.1/ompi/mca/pml/ob1/pml_ob1_component.c:271
</span><br>
<span class="quotelev1">&gt; #11 0x00007f7f598539b2 in mca_pml_base_select (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/pml/base/pml_base_select.c:128
</span><br>
<span class="quotelev1">&gt; #12 0x00007f7f597c033c in ompi_mpi_init (argc=1, argv=0x7fff906aa928, requested=0, provided=0x7fff906aa7d8) at ../../openmpi-1.8.1/ompi/runtime/ompi_mpi_init.c:604
</span><br>
<span class="quotelev1">&gt; #13 0x00007f7f597f5386 in PMPI_Init (argc=0x7fff906aa82c, argv=0x7fff906aa820) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #14 0x000000000040096f in main (argc=1, argv=0x7fff906aa928) at ring_c.c:19
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24570.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24568.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24566.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
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
