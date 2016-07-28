<?
$subject_val = "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 11:20:14 2009" -->
<!-- isoreceived="20090327152014" -->
<!-- sent="Fri, 27 Mar 2009 11:22:33 -0400" -->
<!-- isosent="20090327152233" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR" -->
<!-- id="49CCEF39.4010508_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="834A7F19-1FBC-48AB-BB57-1B90EA7D83F0_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR<br>
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 11:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8615.php">George Bosilca: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8613.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>In reply to:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8659.php">Jeff Squyres: "Re: [OMPI users] error polling LP CQ with status RETRYEXCEEDED	ERROR"</a>
<li><strong>Reply:</strong> <a href="8659.php">Jeff Squyres: "Re: [OMPI users] error polling LP CQ with status RETRYEXCEEDED	ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the advice, we tried  &quot;-mca btl_openib_ib_min_rnr_timer 25 
<br>
-mca btl_openib_ib_timeout 20&quot; but we are still getting errors as we 
<br>
increase the Ns of HPL.dat value into the thousands. Is it ok to just 
<br>
add these valuse to .openmpi/mca-params.conf for the user running the 
<br>
test or should we add these setting to each node in 
<br>
/usr/local/etc/openmpi-mca-params.conf
<br>
<p>The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;Local host:        compute-0-8.local
<br>
&nbsp;&nbsp;MPI process PID:   30544
<br>
&nbsp;&nbsp;Error number:      10 (IBV_EVENT_PORT_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
<p><p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The default retry values are wrong and will be corrected in the next 
</span><br>
<span class="quotelev1">&gt; OMPI release. For now, try running with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should work.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2009, at 2:16 PM, Gary Draving wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm doing some performance testing using HPL with TCP turned off.  My 
</span><br>
<span class="quotelev2">&gt;&gt; HPL.dat file looks like the following:
</span><br>
<span class="quotelev2">&gt;&gt; It seems to work well for lower Ns values but as I increase that 
</span><br>
<span class="quotelev2">&gt;&gt; value it inevitably fails with 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[[13535,1],169][btl_openib_component.c:2905:handle_wc] from 
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-0.local to: compute-0-8 error polling LP CQ with status 
</span><br>
<span class="quotelev2">&gt;&gt; RETRY EXCEEDED ERROR status number 12 for wr_id 209907960 opcode 0 
</span><br>
<span class="quotelev2">&gt;&gt; qp_idx 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The machines in this test are all dual core quads with built in 
</span><br>
<span class="quotelev2">&gt;&gt; mellanox cards for total of 320 processors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems like once I reach a certain nuber of &quot;Ns&quot; the infiniban 
</span><br>
<span class="quotelev2">&gt;&gt; starts having problems.  Increasing &quot;btl_openib_ib_retry_count&quot; and 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_ib_timeout&quot; to the max allowed us to get from 4096 to 
</span><br>
<span class="quotelev2">&gt;&gt; 8192 Ns but the error came back at around 8192.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone has some ideas on this problem I would be very interests, 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ((((((((((((((((((HPL.dat file being uses )))))))))))))))))))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HPLinpack benchmark input file
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory, University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; HPL.out      output file name (if any)
</span><br>
<span class="quotelev2">&gt;&gt; 6            device out (6=stdout,7=stderr,file)
</span><br>
<span class="quotelev2">&gt;&gt; 1            # of problems sizes (N)
</span><br>
<span class="quotelev2">&gt;&gt; 8192        Ns
</span><br>
<span class="quotelev2">&gt;&gt; 1            # of NBs
</span><br>
<span class="quotelev2">&gt;&gt; 256          NBs
</span><br>
<span class="quotelev2">&gt;&gt; 0            PMAP process mapping (0=Row-,1=Column-major)
</span><br>
<span class="quotelev2">&gt;&gt; 1            # of process grids (P x Q)
</span><br>
<span class="quotelev2">&gt;&gt; 19           Ps
</span><br>
<span class="quotelev2">&gt;&gt; 19           Qs
</span><br>
<span class="quotelev2">&gt;&gt; (defaults for rest)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (((((((((((((((((( Full error printout ))))))))))))))))))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[13535,1],169][btl_openib_component.c:2905:handle_wc] from 
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-0.local to: compute-0-8 error polling LP CQ with status 
</span><br>
<span class="quotelev2">&gt;&gt; RETRY EXCEEDED ERROR status number 12 for wr_id 209907960 opcode 0 
</span><br>
<span class="quotelev2">&gt;&gt; qp_idx 3
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev2">&gt;&gt; (section 12.7.38):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev2">&gt;&gt;   retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev2">&gt;&gt;   completion error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This error typically means that there is something awry within the
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand fabric itself.  You should note the hosts on which this
</span><br>
<span class="quotelev2">&gt;&gt; error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev2">&gt;&gt; particular host from the job can sometimes resolve this issue.
</span><br>
<span class="quotelev2">&gt;&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev2">&gt;&gt; respect to the retry count:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev2">&gt;&gt; attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev2">&gt;&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev2">&gt;&gt; to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev2">&gt;&gt; peer to which it was connected:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Local host:   compute-0-0.local
</span><br>
<span class="quotelev2">&gt;&gt; Local device: mthca0
</span><br>
<span class="quotelev2">&gt;&gt; Peer host:    compute-0-8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev2">&gt;&gt; problem fixed.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 169 with PID 26725 on
</span><br>
<span class="quotelev2">&gt;&gt; node compute-0-0 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8615.php">George Bosilca: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURMon	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8613.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>In reply to:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8659.php">Jeff Squyres: "Re: [OMPI users] error polling LP CQ with status RETRYEXCEEDED	ERROR"</a>
<li><strong>Reply:</strong> <a href="8659.php">Jeff Squyres: "Re: [OMPI users] error polling LP CQ with status RETRYEXCEEDED	ERROR"</a>
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
