<?
$subject_val = "[OMPI devel] segfault on host not found error.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 07:13:33 2008" -->
<!-- isoreceived="20080331111333" -->
<!-- sent="Mon, 31 Mar 2008 14:13:27 +0300" -->
<!-- isosent="20080331111327" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] segfault on host not found error." -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14CF8_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] segfault on host not found error.<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 07:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3580.php">Ralph H Castain: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Reply:</strong> <a href="3580.php">Ralph H Castain: "Re: [OMPI devel] segfault on host not found error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I accidently run job on the hostfile where one of hosts was not properly
<br>
mounted. As a result I got an error and a segfault.
<br>
<p><p>/home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun -np 29 -hostfile hostfile
<br>
./mpi_p01 -t lt
<br>
bash: /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/orted: No such file or
<br>
directory
<br>
------------------------------------------------------------------------
<br>
<pre>
--
A daemon (pid 9753) died unexpectedly with status 127 while attempting
to launch so we are aborting.
There may be more information reported by the environment (see above).
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
the
location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpirun was unable to start the specified application as it encountered
an error.
More information may be available above.
------------------------------------------------------------------------
--
[witch1:09745] *** Process received signal ***
[witch1:09745] Signal: Segmentation fault (11)
[witch1:09745] Signal code: Address not mapped (1)
[witch1:09745] Failing at address: 0x3c
[witch1:09745] [ 0] /lib64/libpthread.so.0 [0x2aff223ebc10]
[witch1:09745] [ 1]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0 [0x2aff21cdfe21]
[witch1:09745] [ 2]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_rml_oob.so
[0x2aff22c398f1]
[witch1:09745] [ 3]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_oob_tcp.so
[0x2aff22d426ee]
[witch1:09745] [ 4]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_oob_tcp.so
[0x2aff22d433fb]
[witch1:09745] [ 5]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_oob_tcp.so
[0x2aff22d4485b]
[witch1:09745] [ 6]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0 [0x2aff21e1242b]
[witch1:09745] [ 7] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
[0x403203]
[witch1:09745] [ 8]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0 [0x2aff21e1242b]
[witch1:09745] [ 9]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0(opal_progress+0x
8b) [0x2aff21e060cb]
[witch1:09745] [10]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0(orte_trigger_eve
nt+0x20) [0x2aff21cc6940]
[witch1:09745] [11]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0(orte_wakeup+0x2d
) [0x2aff21cc776d]
[witch1:09745] [12]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_plm_rsh.so
[0x2aff22b34756]
[witch1:09745] [13]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0 [0x2aff21cc6ea7]
[witch1:09745] [14]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0 [0x2aff21e1242b]
[witch1:09745] [15]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0(opal_progress+0x
8b) [0x2aff21e060cb]
[witch1:09745] [16]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0(orte_plm_base_da
emon_callback+0xad) [0x2aff21ce068d]
[witch1:09745] [17]
/home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_plm_rsh.so
[0x2aff22b34e5e]
[witch1:09745] [18] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
[0x402e13]
[witch1:09745] [19] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
[0x402873]
[witch1:09745] [20] /lib64/libc.so.6(__libc_start_main+0xf4)
[0x2aff22512154]
[witch1:09745] [21] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
[0x4027c9]
[witch1:09745] *** End of error message ***
Segmentation fault (core dumped)
Best Regards,
Lenny.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3567.php">Jeff Squyres: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>Previous message:</strong> <a href="3565.php">Muhammad Atif: "[OMPI devel] limit tcp fragment size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3580.php">Ralph H Castain: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Reply:</strong> <a href="3580.php">Ralph H Castain: "Re: [OMPI devel] segfault on host not found error."</a>
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
