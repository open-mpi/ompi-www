<?
$subject_val = "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 16:14:05 2009" -->
<!-- isoreceived="20090326201405" -->
<!-- sent="Thu, 26 Mar 2009 16:16:26 -0400" -->
<!-- isosent="20090326201626" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR" -->
<!-- id="49CBE29A.1050808_at_calvin.edu" -->
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
<strong>Subject:</strong> [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 16:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone,
<br>
<p>I'm doing some performance testing using HPL with TCP turned off.  My 
<br>
HPL.dat file looks like the following:
<br>
It seems to work well for lower Ns values but as I increase that value 
<br>
it inevitably fails with 
<br>
&quot;[[13535,1],169][btl_openib_component.c:2905:handle_wc] from 
<br>
compute-0-0.local to: compute-0-8 error polling LP CQ with status RETRY 
<br>
EXCEEDED ERROR status number 12 for wr_id 209907960 opcode 0 qp_idx 3&quot;
<br>
<p>The machines in this test are all dual core quads with built in mellanox 
<br>
cards for total of 320 processors
<br>
<p>It seems like once I reach a certain nuber of &quot;Ns&quot; the infiniban starts 
<br>
having problems.  Increasing &quot;btl_openib_ib_retry_count&quot; and 
<br>
&quot;btl_openib_ib_timeout&quot; to the max allowed us to get from 4096 to 8192 
<br>
Ns but the error came back at around 8192.
<br>
<p>If anyone has some ideas on this problem I would be very interests, Thanks
<br>
<p>((((((((((((((((((HPL.dat file being uses )))))))))))))))))))
<br>
<p>HPLinpack benchmark input file
<br>
Innovative Computing Laboratory, University of Tennessee
<br>
HPL.out      output file name (if any)
<br>
6            device out (6=stdout,7=stderr,file)
<br>
1            # of problems sizes (N)
<br>
8192        Ns
<br>
1            # of NBs
<br>
256          NBs
<br>
0            PMAP process mapping (0=Row-,1=Column-major)
<br>
1            # of process grids (P x Q)
<br>
19           Ps
<br>
19           Qs
<br>
(defaults for rest)
<br>
<p>(((((((((((((((((( Full error printout ))))))))))))))))))
<br>
<p>[[13535,1],169][btl_openib_component.c:2905:handle_wc] from 
<br>
compute-0-0.local to: compute-0-8 error polling LP CQ with status RETRY 
<br>
EXCEEDED ERROR status number 12 for wr_id 209907960 opcode 0 qp_idx 3
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
<p>&nbsp;&nbsp;Local host:   compute-0-0.local
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
&nbsp;&nbsp;Peer host:    compute-0-8
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 169 with PID 26725 on
<br>
node compute-0-0 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8600.php">Ralph Castain: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
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
