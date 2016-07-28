<?
$subject_val = "[OMPI devel] ticket #1469";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 04:01:07 2008" -->
<!-- isoreceived="20080910080107" -->
<!-- sent="Wed, 10 Sep 2008 11:01:01 +0300" -->
<!-- isosent="20080910080101" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] ticket #1469" -->
<!-- id="453d39990809100101w13b830e4xeb6e997d94401410_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] ticket #1469<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 04:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Previous message:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Reply:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I can recreate this failure, I think it caused by the fact that we do not
<br>
open orted on the last node( also I didnt check it ), since np &lt; number of
<br>
hosts.
<br>
<p>I used the falowing configure line ../configure
<br>
--prefix=/home/USERS/lenny/OMPI_ORTE_TRUNK
<br>
<p>on OMPI 1.4a1r19522
<br>
Hope it helped.
<br>
<p>#mpirun -np 3 -H witch2 ./spawn_multiple
<br>
Parent: 1 of 3, witch2 (1 in init)
<br>
Parent: 0 of 3, witch2 (1 in init)
<br>
Parent: 2 of 3, witch2 (1 in init)
<br>
#mpirun -np 3 -H witch2,witch3 ./spawn_multiple
<br>
Parent: 0 of 3, witch2 (0 in init)
<br>
Parent: 2 of 3, witch2 (0 in init)
<br>
Parent: 1 of 3, witch3 (0 in init)
<br>
#mpirun -np 3 -H witch2,witch3,witch4 ./spawn_multiple
<br>
Parent: 0 of 3, witch2 (0 in init)
<br>
Parent: 1 of 3, witch3 (0 in init)
<br>
Parent: 2 of 3, witch4 (0 in init)
<br>
#mpirun -np 3 -H witch2,witch3,witch4,witch5 ./spawn_multiple
<br>
Parent: 0 of 3, witch2 (0 in init)
<br>
Parent: 1 of 3, witch3 (0 in init)
<br>
Parent: 2 of 3, witch4 (0 in init)
<br>
[witch1:04806] *** Process received signal ***
<br>
[witch1:04806] Signal: Segmentation fault (11)
<br>
[witch1:04806] Signal code: Address not mapped (1)
<br>
[witch1:04806] Failing at address: 0x38
<br>
[witch1:04806] [ 0] /lib64/libpthread.so.0 [0x2af5324e9c10]
<br>
[witch1:04806] [ 1]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x27a)
<br>
[0x2af531de3dca]
<br>
[witch1:04806] [ 2] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
<br>
[0x2af531f161bb]
<br>
[witch1:04806] [ 3] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun [0x40378f]
<br>
[witch1:04806] [ 4] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
<br>
[0x2af531f161bb]
<br>
[witch1:04806] [ 5]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0(opal_progress+0x9e)
<br>
[0x2af531f0bf5e]
<br>
[witch1:04806] [ 6]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_trigger_event+0x44)
<br>
[0x2af531dc6c84]
<br>
[witch1:04806] [ 7]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x20b)
<br>
[0x2af531de3d5b]
<br>
[witch1:04806] [ 8] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
<br>
[0x2af531f161bb]
<br>
[witch1:04806] [ 9]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0(opal_progress+0x9e)
<br>
[0x2af531f0bf5e]
<br>
[witch1:04806] [10]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x227)
<br>
[0x2af531de47e7]
<br>
[witch1:04806] [11]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/openmpi/mca_plm_rsh.so
<br>
[0x2af532c38d3d]
<br>
[witch1:04806] [12]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-rte.so.0(orte_plm_base_receive_process_msg+0x456)
<br>
[0x2af531de3086]
<br>
[witch1:04806] [13] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0
<br>
[0x2af531f161bb]
<br>
[witch1:04806] [14] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun [0x4033bc]
<br>
[witch1:04806] [15] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun [0x402c23]
<br>
[witch1:04806] [16] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2af532610154]
<br>
[witch1:04806] [17] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun [0x402b79]
<br>
[witch1:04806] *** End of error message ***
<br>
Segmentation fault
<br>
<p>Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Previous message:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
<li><strong>Reply:</strong> <a href="4642.php">Ralph Castain: "Re: [OMPI devel] ticket #1469"</a>
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
