<?
$subject_val = "[OMPI users] Fault Tolerant with openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 14:38:43 2011" -->
<!-- isoreceived="20110923183843" -->
<!-- sent="Fri, 23 Sep 2011 15:38:39 -0300" -->
<!-- isosent="20110923183839" -->
<!-- name="Guilherme V" -->
<!-- email="list.vilela_at_[hidden]" -->
<!-- subject="[OMPI users] Fault Tolerant with openib" -->
<!-- id="CAB-q1Yun+YnPiRo0V9RFFLGFB+myMnvXQXdisYE-HZ+H1AnkMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fault Tolerant with openib<br>
<strong>From:</strong> Guilherme V (<em>list.vilela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 14:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17415.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17413.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Reply:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I want to know if anybody is having problems with fault tolerant job using
<br>
infiniband. When I run my job with tcp if anything happens with one node, my
<br>
job keeps running, but if I change my job to use infiniband if anything
<br>
happens with the infiniband (i.e cable problems) my job fails.
<br>
<p>Anybody knows if there is something different that need to be done when
<br>
using openib instead tcp?
<br>
<p>Bellow a example of the message I'm receiving from the mpi.
<br>
<p>Regards,
<br>
Guilherme
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The OpenFabrics stack has reported a network error event.  Open
<br>
MPI
<br>
<p>will try to continue, but your job may end up
<br>
failing.
<br>
<p><p>&nbsp;&nbsp;Local host:        XXXXX
<br>
&nbsp;&nbsp;MPI process PID:   23341
<br>
&nbsp;&nbsp;Error number:      10 (IBV_EVENT_PORT_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
[ZZZZ:23320] 15 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[WWW:23320] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
[[4089,1],144][btl_openib_component.c:3227:handle_wc] from XXXXX to: YYYYY
<br>
error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for
<br>
wr_id 214283560 opcode 51  vendor error 129 qp_idx 3
<br>
[[4089,1],147][btl_openib_component.c:3227:handle_wc] from XXXXX to: YYYYY
<br>
error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for
<br>
wr_id 490884096 opcode 1  vendor error 129 qp_idx 0
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
<p>&nbsp;&nbsp;Local host:   XXXX
<br>
&nbsp;&nbsp;Local device: mlx4_0
<br>
&nbsp;&nbsp;Peer host:    YYYY
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17415.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17413.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Reply:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
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
