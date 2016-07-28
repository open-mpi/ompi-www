<?
$subject_val = "Re: [OMPI devel] ticket #1469";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 08:50:50 2008" -->
<!-- isoreceived="20080910125050" -->
<!-- sent="Wed, 10 Sep 2008 06:50:41 -0600" -->
<!-- isosent="20080910125041" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ticket #1469" -->
<!-- id="517ADF7B-371E-4AAD-97C8-6CDC4669D95A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990809100101w13b830e4xeb6e997d94401410_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 08:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4643.php">Greg Watson: "[OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4641.php">Lenny Verkhovsky: "[OMPI devel] ticket #1469"</a>
<li><strong>In reply to:</strong> <a href="4641.php">Lenny Verkhovsky: "[OMPI devel] ticket #1469"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Reply:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry - I can't even make sense of this. If you think you can  
<br>
reproduce it, then you are welcome to fix it. I cannot reproduce it,  
<br>
and hence can do nothing further about it.
<br>
<p>Ralph
<br>
<p><p>On Sep 10, 2008, at 2:01 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can recreate this failure, I think it caused by the fact that we  
</span><br>
<span class="quotelev1">&gt; do not open orted on the last node( also I didnt check it ), since  
</span><br>
<span class="quotelev1">&gt; np &lt; number of hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the falowing configure line ../configure --prefix=/home/USERS/ 
</span><br>
<span class="quotelev1">&gt; lenny/OMPI_ORTE_TRUNK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on OMPI 1.4a1r19522
</span><br>
<span class="quotelev1">&gt; Hope it helped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -H witch2 ./spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent: 1 of 3, witch2 (1 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 0 of 3, witch2 (1 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 2 of 3, witch2 (1 in init)
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -H witch2,witch3 ./spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent: 0 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 2 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 1 of 3, witch3 (0 in init)
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -H witch2,witch3,witch4 ./spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent: 0 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 1 of 3, witch3 (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 2 of 3, witch4 (0 in init)
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -H witch2,witch3,witch4,witch5 ./spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent: 0 of 3, witch2 (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 1 of 3, witch3 (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 2 of 3, witch4 (0 in init)
</span><br>
<span class="quotelev1">&gt; [witch1:04806] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [witch1:04806] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [witch1:04806] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [witch1:04806] Failing at address: 0x38
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 0] /lib64/libpthread.so.0 [0x2af5324e9c10]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 1] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_plm_base_app_report_launch+0x27a) [0x2af531de3dca]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 2] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 [0x2af531f161bb]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 3] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun  
</span><br>
<span class="quotelev1">&gt; [0x40378f]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 4] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 [0x2af531f161bb]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 5] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_progress+0x9e) [0x2af531f0bf5e]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 6] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_trigger_event+0x44) [0x2af531dc6c84]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 7] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_plm_base_app_report_launch+0x20b) [0x2af531de3d5b]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 8] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 [0x2af531f161bb]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [ 9] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_progress+0x9e) [0x2af531f0bf5e]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [10] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_plm_base_launch_apps+0x227) [0x2af531de47e7]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [11] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_plm_rsh.so [0x2af532c38d3d]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [12] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0(orte_plm_base_receive_process_msg+0x456) [0x2af531de3086]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [13] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 [0x2af531f161bb]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [14] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun  
</span><br>
<span class="quotelev1">&gt; [0x4033bc]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [15] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun  
</span><br>
<span class="quotelev1">&gt; [0x402c23]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [16] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x2af532610154]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] [17] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun  
</span><br>
<span class="quotelev1">&gt; [0x402b79]
</span><br>
<span class="quotelev1">&gt; [witch1:04806] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4643.php">Greg Watson: "[OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4641.php">Lenny Verkhovsky: "[OMPI devel] ticket #1469"</a>
<li><strong>In reply to:</strong> <a href="4641.php">Lenny Verkhovsky: "[OMPI devel] ticket #1469"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Reply:</strong> <a href="4647.php">Lenny Verkhovsky: "Re: [OMPI devel] ticket #1469"</a>
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
