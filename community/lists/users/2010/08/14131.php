<?
$subject_val = "Re: [OMPI users] random IB failures when running medium core counts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 14:53:54 2010" -->
<!-- isoreceived="20100830185354" -->
<!-- sent="Mon, 30 Aug 2010 11:53:39 -0700" -->
<!-- isosent="20100830185339" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random IB failures when running medium core counts" -->
<!-- id="4C7BFE33.6030703_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8FC24A4F-1D86-4C50-863D-272355DAF692_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] random IB failures when running medium core counts<br>
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 14:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14132.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 09/07/2010)"</a>
<li><strong>Previous message:</strong> <a href="14130.php">Brock Palen: "[OMPI users] random IB failures when running medium core counts"</a>
<li><strong>In reply to:</strong> <a href="14130.php">Brock Palen: "[OMPI users] random IB failures when running medium core counts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brock,
<br>
<p>While it doesn't solve the problem, have you tried increasing the btl 
<br>
timeouts like the message suggest? With 1884 cores in use perhaps there 
<br>
is some over subscription in the fabric?
<br>
<p>-Joshua Bernstein
<br>
Penguin Computing
<br>
<p><p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; We recently installed a modest IB network to our cluster, 
</span><br>
<span class="quotelev1">&gt; When running a 1884 core IB HPL job after a run we will get an error about IB, it does not always happen in the same place, some iterations will pass others will fail the error is below, we are using openmpi/1.4.2 with the intel 11 compilers.
</span><br>
<span class="quotelev1">&gt; Note that 1000 core jobs and other sizes work well also but this larger one does not.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[62713,1],1867][btl_openib_component.c:3224:handle_wc] from nyx5011.engin.umich.edu to: nyx5120 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 413569408 opcode 11112  vendor error 129 qp_idx 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev1">&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev1">&gt; (section 12.7.38):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt;     retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt;     completion error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error typically means that there is something awry within the
</span><br>
<span class="quotelev1">&gt; InfiniBand fabric itself.  You should note the hosts on which this
</span><br>
<span class="quotelev1">&gt; error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev1">&gt; particular host from the job can sometimes resolve this issue.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt; respect to the retry count:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt;   attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt;   to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev1">&gt; peer to which it was connected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:   nyx5011.engin.umich.edu
</span><br>
<span class="quotelev1">&gt;   Local device: mlx4_0
</span><br>
<span class="quotelev1">&gt;   Peer host:    nyx5120
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1867 with PID 3474 on
</span><br>
<span class="quotelev1">&gt; node nyx5011 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [nyx5049.engin.umich.edu:07901] [[62713,0],32] ORTED_CMD_PROCESSOR: STUCK IN INFINITE LOOP - ABORTING
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 0] /lib64/libpthread.so.0 [0x2b5dcbc70b10]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2b5dcbeae265]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 2] /lib64/libc.so.6(abort+0x110) [0x2b5dcbeafd10]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 3] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x216) [0x2b5dcacdb7e6]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 4] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_loop+0x2ca) [0x2b5dcaf3a9aa]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 5] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_progress+0x5e) [0x2b5dcaf2d26e]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 6] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/openmpi/mca_rml_oob.so [0x2b5dcce37e5c]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 7] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x3ae) [0x2b5dcacdb97e]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 8] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_loop+0x2ca) [0x2b5dcaf3a9aa]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [ 9] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_progress+0x5e) [0x2b5dcaf2d26e]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [10] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/openmpi/mca_rml_oob.so [0x2b5dcce37e5c]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [11] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon_cmd_processor+0x3ae) [0x2b5dcacdb97e]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [12] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_loop+0x2ca) [0x2b5dcaf3a9aa]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [13] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-pal.so.0(opal_event_dispatch+0x8) [0x2b5dcaf3a6d8]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [14] /home/software/rhel5/openmpi-1.4.2/intel-11.0/lib/libopen-rte.so.0(orte_daemon+0xaaf) [0x2b5dcacdb15f]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [15] orted [0x401ad6]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [16] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b5dcbe9b994]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] [17] orted [0x401999]
</span><br>
<span class="quotelev1">&gt; [nyx5049:07901] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14132.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 09/07/2010)"</a>
<li><strong>Previous message:</strong> <a href="14130.php">Brock Palen: "[OMPI users] random IB failures when running medium core counts"</a>
<li><strong>In reply to:</strong> <a href="14130.php">Brock Palen: "[OMPI users] random IB failures when running medium core counts"</a>
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
