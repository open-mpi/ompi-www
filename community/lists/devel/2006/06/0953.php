<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 16:47:22 2006" -->
<!-- isoreceived="20060629204722" -->
<!-- sent="Thu, 29 Jun 2006 14:47:19 -0600" -->
<!-- isosent="20060629204719" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]" -->
<!-- id="CF61BE2C-78C4-4348-BEB8-1C69C4B3858E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="99B3A320-67B3-4D69-8A0D-5FA1F505B049_at_lanl.gov" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 16:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Previous message:</strong> <a href="0952.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Reply:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More info:
<br>
<p>Two cores are generated
<br>
<p><p>mpirun:
<br>
(gdb) bt
<br>
#0  0x00000400002555d8 in .__pthread_alt_unlock () from /lib64/ 
<br>
libpthread.so.0
<br>
#1  0x0000040000251b10 in .__GI___pthread_mutex_unlock ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /lib64/libpthread.so.0
<br>
#2  0x00000400001108e0 in .poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/ompi/local/lib/libopal.so.0
<br>
#3  0x000004000010ea48 in opal_event_loop (flags=1) at event.c:485
<br>
#4  0x0000040000104078 in opal_progress () at runtime/opal_progress.c: 
<br>
259
<br>
#5  0x0000000010003a08 in opal_condition_wait (c=0x1001acf0,  
<br>
m=0x1001aca0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../opal/threads/condition.h:81
<br>
#6  0x0000000010003474 in orterun (argc=7, argv=0xfffffea5948) at  
<br>
orterun.c:415
<br>
#7  0x0000000010002c50 in main (argc=7, argv=0xfffffea5948) at main.c:13
<br>
#8  0x0000040000336dc8 in .__libc_start_main () from /lib64/libc.so.6
<br>
#9  0x0000000000000000 in ?? ()
<br>
<p><p><p>orted:
<br>
#0  0x00000400002555d8 in .__pthread_alt_unlock () from /lib64/ 
<br>
libpthread.so.0
<br>
#1  0x0000040000251b10 in .__GI___pthread_mutex_unlock ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /lib64/libpthread.so.0
<br>
#2  0x00000400001108e0 in .poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/ompi/local/lib/libopal.so.0
<br>
#3  0x000004000010ea48 in opal_event_loop (flags=1) at event.c:485
<br>
#4  0x0000040000104078 in opal_progress () at runtime/opal_progress.c: 
<br>
259
<br>
#5  0x000004000051a35c in mca_oob_tcp_msg_wait (msg=0x10022d68,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc=0xfffffe24d60) at oob_tcp_msg.c:106
<br>
#6  0x000004000052497c in mca_oob_tcp_send (name=0x1004a230,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iov=0xfffffe24e50, count=1, tag=2, flags=0) at oob_tcp_send.c:158
<br>
#7  0x0000040000095e40 in mca_oob_send_packed (peer=0x1004a230,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer=0x1003cf50, tag=2, flags=0) at base/oob_base_send.c:78
<br>
#8  0x0000040000560b50 in orte_gpr_proxy_subscribe (num_subs=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subscriptions=0xfffffe25030, num_trigs=1, trigs=0xfffffe25090)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at gpr_proxy_subscribe.c:121
<br>
#9  0x000004000007a6ec in orte_gpr_base_subscribe_1 (id=0xfffffe251a0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trig_name=0x1003ce80 &quot;orte-stage1-0&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_name=0x1003cd20 &quot;ompi-oob-sub-0&quot;, action=39 '\'',  
<br>
addr_mode=514,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;segment=0x1003cea0 &quot;orte-job-0&quot;, tokens=0x0, key=0x400005260a8  
<br>
&quot;oob-tcp&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cbfunc=0x400005392d0 &lt;mca_oob_tcp_registry_callback&gt;, user_tag=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at base/gpr_base_simplified_subscribe.c:92
<br>
#10 0x0000040000517a7c in mca_oob_tcp_init () at oob_tcp.c:816
<br>
#11 0x0000040000095110 in mca_oob_base_module_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at base/oob_base_init.c:263
<br>
#12 0x000004000005ef18 in orte_init_stage2 () at runtime/ 
<br>
orte_init_stage2.c:48
<br>
#13 0x0000040000062fe8 in orte_system_init (infrastructure=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at runtime/orte_system_init.c:46
<br>
#14 0x000004000005ce50 in orte_init (infrastructure=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at runtime/orte_init.c:48
<br>
#15 0x0000000010001ebc in main (argc=19, argv=0xfffffe267d8) at  
<br>
orted.c:282
<br>
#16 0x0000040000336dc8 in .__libc_start_main () from /lib64/libc.so.6
<br>
#17 0x0000000000000000 in ?? ()
<br>
<p><p><p><p><p><p>On Jun 29, 2006, at 2:33 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Hey Owen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Taking this on list..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run on n249 orte just hangs waiting for completion of the send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run on n248 I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ompi_at_node-192-168-111-248 ~]$ mpirun  -np 1 -mca btl self,openib ./ 
</span><br>
<span class="quotelev1">&gt; ring
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x10
</span><br>
<span class="quotelev1">&gt; [0] func:/home/ompi/local/lib/libopal.so.0 [0x4000012d6c0]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/libpthread.so.0 [0x40000257270]
</span><br>
<span class="quotelev1">&gt; [2] func:[0x100428]
</span><br>
<span class="quotelev1">&gt; [3] func:/home/ompi/local/lib/libopal.so.0 [0x40000158310]
</span><br>
<span class="quotelev1">&gt; [4] func:/lib64/libpthread.so.0 [0x40000251b10]
</span><br>
<span class="quotelev1">&gt; [5] func:/home/ompi/local/lib/libopal.so.0 [0x400001108e0]
</span><br>
<span class="quotelev1">&gt; [6] func:/home/ompi/local/lib/libopal.so.0 [0x4000010ea48]
</span><br>
<span class="quotelev1">&gt; [7] func:/home/ompi/local/lib/libopal.so.0 [0x40000104078]
</span><br>
<span class="quotelev1">&gt; [8] func:mpirun [0x10003a08]
</span><br>
<span class="quotelev1">&gt; [9] func:mpirun [0x10003474]
</span><br>
<span class="quotelev1">&gt; [10] func:mpirun [0x10002c50]
</span><br>
<span class="quotelev1">&gt; [11] func:/lib64/libc.so.6 [0x40000336dc8]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order to debug can I get an xterm with proper x forwarding on this
</span><br>
<span class="quotelev1">&gt; machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Previous message:</strong> <a href="0952.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Reply:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
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
