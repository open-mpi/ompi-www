<?
$subject_val = "Re: [OMPI devel] segfault on host not found error.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 14:17:49 2008" -->
<!-- isoreceived="20080331181749" -->
<!-- sent="Mon, 31 Mar 2008 12:17:34 -0600" -->
<!-- isosent="20080331181734" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segfault on host not found error." -->
<!-- id="C41686DE.CE36%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE14CF8_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segfault on host not found error.<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 14:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3581.php">Josh Hursey: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3566.php">Lenny Verkhovsky: "[OMPI devel] segfault on host not found error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am unable to replicate the segfault. However, I was able to get the job to
<br>
hang. I fixed that behavior with r18044.
<br>
<p>Perhaps you can test this again and let me know what you see. A gdb stack
<br>
trace would be more helpful.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 3/31/08 5:13 AM, &quot;Lenny Verkhovsky&quot; &lt;lennyb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I accidently run job on the hostfile where one of hosts was not properly
</span><br>
<span class="quotelev1">&gt; mounted. As a result I got an error and a segfault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun -np 29 -hostfile hostfile
</span><br>
<span class="quotelev1">&gt; ./mpi_p01 -t lt
</span><br>
<span class="quotelev1">&gt; bash: /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/orted: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; A daemon (pid 9753) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [witch1:09745] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [witch1:09745] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [witch1:09745] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [witch1:09745] Failing at address: 0x3c
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 0] /lib64/libpthread.so.0 [0x2aff223ebc10]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0 [0x2aff21cdfe21]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_rml_oob.so
</span><br>
<span class="quotelev1">&gt; [0x2aff22c398f1]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x2aff22d426ee]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x2aff22d433fb]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x2aff22d4485b]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0 [0x2aff21e1242b]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 7] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [0x403203]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0 [0x2aff21e1242b]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0(opal_progress+0x
</span><br>
<span class="quotelev1">&gt; 8b) [0x2aff21e060cb]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [10]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0(orte_trigger_eve
</span><br>
<span class="quotelev1">&gt; nt+0x20) [0x2aff21cc6940]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [11]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0(orte_wakeup+0x2d
</span><br>
<span class="quotelev1">&gt; ) [0x2aff21cc776d]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [12]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; [0x2aff22b34756]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [13]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0 [0x2aff21cc6ea7]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [14]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0 [0x2aff21e1242b]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [15]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-pal.so.0(opal_progress+0x
</span><br>
<span class="quotelev1">&gt; 8b) [0x2aff21e060cb]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [16]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/libopen-rte.so.0(orte_plm_base_da
</span><br>
<span class="quotelev1">&gt; emon_callback+0xad) [0x2aff21ce068d]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [17]
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK//lib/openmpi/mca_plm_rsh.so
</span><br>
<span class="quotelev1">&gt; [0x2aff22b34e5e]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [18] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [0x402e13]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [19] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [0x402873]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [20] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x2aff22512154]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] [21] /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [0x4027c9]
</span><br>
<span class="quotelev1">&gt; [witch1:09745] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3581.php">Josh Hursey: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3566.php">Lenny Verkhovsky: "[OMPI devel] segfault on host not found error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
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
