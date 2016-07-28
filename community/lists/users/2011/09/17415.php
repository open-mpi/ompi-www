<?
$subject_val = "Re: [OMPI users] Fault Tolerant with openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 14:42:53 2011" -->
<!-- isoreceived="20110923184253" -->
<!-- sent="Fri, 23 Sep 2011 12:42:46 -0600" -->
<!-- isosent="20110923184246" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant with openib" -->
<!-- id="2CB6C757-9AB1-49AC-A728-B156D0F774A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAB-q1Yv=-Cj-6SOzx6KT8bUHg9aty+6BL78SoAc+WVF_7icuMA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault Tolerant with openib<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 14:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17416.php">Dave Schulz: "[OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Previous message:</strong> <a href="17414.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<li><strong>In reply to:</strong> <a href="17413.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you using? The job should terminate in either case - what did you do to keep it running after node failure with tcp?
<br>
<p><p>On Sep 23, 2011, at 12:34 PM, Guilherme V wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I want to know if anybody is having problems with fault tolerant job using infiniband. When I run my job with tcp if anything happens with one node, my job keeps running, but if I change my job to use infiniband if anything happens with the infiniband (i.e cable problems) my job fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anybody knows if there is something different that need to be done when using openib instead tcp?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bellow a example of the message I'm receiving from the mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Guilherme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                                                                                                
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI                                                                                                       
</span><br>
<span class="quotelev1">&gt; will try to continue, but your job may end up failing.                                                                                                                    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:        XXXXX
</span><br>
<span class="quotelev1">&gt;   MPI process PID:   23341                         
</span><br>
<span class="quotelev1">&gt;   Error number:      10 (IBV_EVENT_PORT_ERR)       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt; please contact your system administrator.                       
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ZZZZ:23320] 15 more processes have sent help message help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [WWW:23320] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [[4089,1],144][btl_openib_component.c:3227:handle_wc] from XXXXX to: YYYYY error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 214283560 opcode 51  vendor error 129 qp_idx 3
</span><br>
<span class="quotelev1">&gt; [[4089,1],147][btl_openib_component.c:3227:handle_wc] from XXXXX to: YYYYY error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 490884096 opcode 1  vendor error 129 qp_idx 0
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
<span class="quotelev1">&gt;   Local host:   XXXX
</span><br>
<span class="quotelev1">&gt;   Local device: mlx4_0
</span><br>
<span class="quotelev1">&gt;   Peer host:    YYYY
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="17416.php">Dave Schulz: "[OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Previous message:</strong> <a href="17414.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<li><strong>In reply to:</strong> <a href="17413.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
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
