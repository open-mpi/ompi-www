<?
$subject_val = "[OMPI users] random IB failures when running medium core counts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 12:22:25 2010" -->
<!-- isoreceived="20100830162225" -->
<!-- sent="Mon, 30 Aug 2010 12:22:19 -0400" -->
<!-- isosent="20100830162219" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] random IB failures when running medium core counts" -->
<!-- id="8FC24A4F-1D86-4C50-863D-272355DAF692_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] random IB failures when running medium core counts<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 12:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14131.php">Joshua Bernstein: "Re: [OMPI users] random IB failures when running medium core counts"</a>
<li><strong>Previous message:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14131.php">Joshua Bernstein: "Re: [OMPI users] random IB failures when running medium core counts"</a>
<li><strong>Reply:</strong> <a href="14131.php">Joshua Bernstein: "Re: [OMPI users] random IB failures when running medium core counts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We recently installed a modest IB network to our cluster, 
<br>
When running a 1884 core IB HPL job after a run we will get an error about IB, it does not always happen in the same place, some iterations will pass others will fail the error is below, we are using openmpi/1.4.2 with the intel 11 compilers.
<br>
Note that 1000 core jobs and other sizes work well also but this larger one does not.  Thanks!
<br>
<p>[[62713,1],1867][btl_openib_component.c:3224:handle_wc] from nyx5011.engin.umich.edu to: nyx5120 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 413569408 opcode 11112  vendor error 129 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The total number of times that the sender wishes the receiver to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retry timeout, packet sequence, etc. errors before posting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;completion error.
<br>
<p>This error typically means that there is something awry within the
<br>
InfiniBand fabric itself.  You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.  
<br>
<p>Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;to 10).  The actual timeout value used is calculated as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&nbsp;&nbsp;Local host:   nyx5011.engin.umich.edu
<br>
&nbsp;&nbsp;Local device: mlx4_0
<br>
&nbsp;&nbsp;Peer host:    nyx5120
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1867 with PID 3474 on
<br>
node nyx5011 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[nyx5049.engin.umich.edu:07901] [[62713,0],32] ORTED_CMD_PROCESSOR: STUCK IN INFINITE LOOP - ABORTING
<br>
[nyx5049:07901] *** Process received signal ***
<br>
[nyx5049:07901] Signal: Aborted (6)
<br>
[nyx5049:07901] Signal code:  (-6)
<br>
[nyx5049:07901] [ 0] /lib64/libpthread.so.0 [0x2b5dcbc70b10]
<br>
[nyx5049:07901] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2b5dcbeae265]
<br>
[nyx5049:07901] [ 2] /lib64/libc.so.6(abort+0x110) [0x2b5dcbeafd10]
<br>
[nyx5049:07901] [ 3] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x216) [0x2b5dcacdb7e6]
<br>
[nyx5049:07901] [ 4] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_loop+0x2ca) [0x2b5dcaf3a9aa]
<br>
[nyx5049:07901] [ 5] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_progress+0x5e) [0x2b5dcaf2d26e]
<br>
[nyx5049:07901] [ 6] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/openmpi/mca_rml_oob.so [0x2b5dcce37e5c]
<br>
[nyx5049:07901] [ 7] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x3ae) [0x2b5dcacdb97e]
<br>
[nyx5049:07901] [ 8] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_loop+0x2ca) [0x2b5dcaf3a9aa]
<br>
[nyx5049:07901] [ 9] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_progress+0x5e) [0x2b5dcaf2d26e]
<br>
[nyx5049:07901] [10] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/openmpi/mca_rml_oob.so [0x2b5dcce37e5c]
<br>
[nyx5049:07901] [11] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x3ae) [0x2b5dcacdb97e]
<br>
[nyx5049:07901] [12] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_loop+0x2ca) [0x2b5dcaf3a9aa]
<br>
[nyx5049:07901] [13] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_dispatch+0x8) [0x2b5dcaf3a6d8]
<br>
[nyx5049:07901] [14] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon+0xaaf) [0x2b5dcacdb15f]
<br>
[nyx5049:07901] [15] orted [0x401ad6]
<br>
[nyx5049:07901] [16] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b5dcbe9b994]
<br>
[nyx5049:07901] [17] orted [0x401999]
<br>
[nyx5049:07901] *** End of error message ***
<br>
<p><p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14131.php">Joshua Bernstein: "Re: [OMPI users] random IB failures when running medium core counts"</a>
<li><strong>Previous message:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14131.php">Joshua Bernstein: "Re: [OMPI users] random IB failures when running medium core counts"</a>
<li><strong>Reply:</strong> <a href="14131.php">Joshua Bernstein: "Re: [OMPI users] random IB failures when running medium core counts"</a>
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
