<?
$subject_val = "Re: [OMPI devel] ticket #1469";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 11:40:56 2008" -->
<!-- isoreceived="20080911154056" -->
<!-- sent="Thu, 11 Sep 2008 18:40:52 +0300" -->
<!-- isosent="20080911154052" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ticket #1469" -->
<!-- id="453d39990809110840t76ddd1fav28851608a8634ecb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517ADF7B-371E-4AAD-97C8-6CDC4669D95A_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ticket #1469<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 11:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4648.php">Jeff Squyres: "[OMPI devel] mmap() failure"</a>
<li><strong>Previous message:</strong> <a href="4646.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>In reply to:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
now seems to be fixed with r19538.
<br>
<p>On 9/10/08, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry - I can't even make sense of this. If you think you can reproduce
</span><br>
<span class="quotelev1">&gt; it, then you are welcome to fix it. I cannot reproduce it, and hence can do
</span><br>
<span class="quotelev1">&gt; nothing further about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2008, at 2:01 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can recreate this failure, I think it caused by the fact that we do not
</span><br>
<span class="quotelev2">&gt;&gt; open orted on the last node( also I didnt check it ), since np &lt; number of
</span><br>
<span class="quotelev2">&gt;&gt; hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used the falowing configure line ../configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/USERS/lenny/OMPI_ORTE_TRUNK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on OMPI 1.4a1r19522
</span><br>
<span class="quotelev2">&gt;&gt; Hope it helped.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 3 -H witch2 ./spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 1 of 3, witch2 (1 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 0 of 3, witch2 (1 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 2 of 3, witch2 (1 in init)
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 3 -H witch2,witch3 ./spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 0 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 2 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 1 of 3, witch3 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 3 -H witch2,witch3,witch4 ./spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 0 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 1 of 3, witch3 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 2 of 3, witch4 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 3 -H witch2,witch3,witch4,witch5 ./spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 0 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 1 of 3, witch3 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; Parent: 2 of 3, witch4 (0 in init)
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] Failing at address: 0x38
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 0] /lib64/libpthread.so.0 [0x2af5324e9c10]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x27a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531de3dca]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 2] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531f161bb]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 3] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; [0x40378f]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 4] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531f161bb]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0(opal_progress+0x9e)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531f0bf5e]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_trigger_event+0x44)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531dc6c84]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x20b)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531de3d5b]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 8] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531f161bb]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0(opal_progress+0x9e)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531f0bf5e]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x227)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531de47e7]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/openmpi/mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af532c38d3d]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [12]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_receive_process_msg+0x456)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531de3086]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [13] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af531f161bb]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [14] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; [0x4033bc]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [15] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; [0x402c23]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [16] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2af532610154]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] [17] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; [0x402b79]
</span><br>
<span class="quotelev2">&gt;&gt; [witch1:04806] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4648.php">Jeff Squyres: "[OMPI devel] mmap() failure"</a>
<li><strong>Previous message:</strong> <a href="4646.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>In reply to:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
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
