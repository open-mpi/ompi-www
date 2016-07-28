<?
$subject_val = "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 16:33:45 2009" -->
<!-- isoreceived="20090326203345" -->
<!-- sent="Thu, 26 Mar 2009 14:33:33 -0600" -->
<!-- isosent="20090326203333" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR" -->
<!-- id="834A7F19-1FBC-48AB-BB57-1B90EA7D83F0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CBE29A.1050808_at_calvin.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 16:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8601.php">Shaun Jackman: "[OMPI users] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="8599.php">Gary Draving: "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8599.php">Gary Draving: "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8614.php">Gary Draving: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR"</a>
<li><strong>Reply:</strong> <a href="8614.php">Gary Draving: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The default retry values are wrong and will be corrected in the next  
<br>
OMPI release. For now, try running with:
<br>
<p>-mca btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20
<br>
<p>Should work.
<br>
Ralph
<br>
<p>On Mar 26, 2009, at 2:16 PM, Gary Draving wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm doing some performance testing using HPL with TCP turned off.   
</span><br>
<span class="quotelev1">&gt; My HPL.dat file looks like the following:
</span><br>
<span class="quotelev1">&gt; It seems to work well for lower Ns values but as I increase that  
</span><br>
<span class="quotelev1">&gt; value it inevitably fails with &quot;[[13535,1],169] 
</span><br>
<span class="quotelev1">&gt; [btl_openib_component.c:2905:handle_wc] from compute-0-0.local to:  
</span><br>
<span class="quotelev1">&gt; compute-0-8 error polling LP CQ with status RETRY EXCEEDED ERROR  
</span><br>
<span class="quotelev1">&gt; status number 12 for wr_id 209907960 opcode 0 qp_idx 3&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machines in this test are all dual core quads with built in  
</span><br>
<span class="quotelev1">&gt; mellanox cards for total of 320 processors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems like once I reach a certain nuber of &quot;Ns&quot; the infiniban  
</span><br>
<span class="quotelev1">&gt; starts having problems.  Increasing &quot;btl_openib_ib_retry_count&quot; and  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_ib_timeout&quot; to the max allowed us to get from 4096 to  
</span><br>
<span class="quotelev1">&gt; 8192 Ns but the error came back at around 8192.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone has some ideas on this problem I would be very interests,  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ((((((((((((((((((HPL.dat file being uses )))))))))))))))))))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPLinpack benchmark input file
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory, University of Tennessee
</span><br>
<span class="quotelev1">&gt; HPL.out      output file name (if any)
</span><br>
<span class="quotelev1">&gt; 6            device out (6=stdout,7=stderr,file)
</span><br>
<span class="quotelev1">&gt; 1            # of problems sizes (N)
</span><br>
<span class="quotelev1">&gt; 8192        Ns
</span><br>
<span class="quotelev1">&gt; 1            # of NBs
</span><br>
<span class="quotelev1">&gt; 256          NBs
</span><br>
<span class="quotelev1">&gt; 0            PMAP process mapping (0=Row-,1=Column-major)
</span><br>
<span class="quotelev1">&gt; 1            # of process grids (P x Q)
</span><br>
<span class="quotelev1">&gt; 19           Ps
</span><br>
<span class="quotelev1">&gt; 19           Qs
</span><br>
<span class="quotelev1">&gt; (defaults for rest)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (((((((((((((((((( Full error printout ))))))))))))))))))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[13535,1],169][btl_openib_component.c:2905:handle_wc] from  
</span><br>
<span class="quotelev1">&gt; compute-0-0.local to: compute-0-8 error polling LP CQ with status  
</span><br>
<span class="quotelev1">&gt; RETRY EXCEEDED ERROR status number 12 for wr_id 209907960 opcode 0  
</span><br>
<span class="quotelev1">&gt; qp_idx 3
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
<span class="quotelev1">&gt;   The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt;   retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt;   completion error.
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
<span class="quotelev1">&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt; respect to the retry count:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt; attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt; to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev1">&gt; peer to which it was connected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Local host:   compute-0-0.local
</span><br>
<span class="quotelev1">&gt; Local device: mthca0
</span><br>
<span class="quotelev1">&gt; Peer host:    compute-0-8
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
<span class="quotelev1">&gt; mpirun has exited due to process rank 169 with PID 26725 on
</span><br>
<span class="quotelev1">&gt; node compute-0-0 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8601.php">Shaun Jackman: "[OMPI users] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="8599.php">Gary Draving: "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8599.php">Gary Draving: "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8614.php">Gary Draving: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR"</a>
<li><strong>Reply:</strong> <a href="8614.php">Gary Draving: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR"</a>
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
