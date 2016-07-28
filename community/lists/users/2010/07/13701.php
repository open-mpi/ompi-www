<?
$subject_val = "[OMPI users] openib issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 19 10:39:13 2010" -->
<!-- isoreceived="20100719143913" -->
<!-- sent="Mon, 19 Jul 2010 16:38:57 +0200" -->
<!-- isosent="20100719143857" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] openib issues" -->
<!-- id="201007191638.57698.eg_at_fft.be" -->
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
<strong>Subject:</strong> [OMPI users] openib issues<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-19 10:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13702.php">Stefan Kuhne: "Re: [OMPI users] MPE logging GUI"</a>
<li><strong>Previous message:</strong> <a href="13700.php">Anthony Chan: "Re: [OMPI users] MPE logging GUI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been working on a random segmentation fault that seems to occur during a collective communication when using the openib btl (see [OMPI users] [openib] segfault when using openib btl).
<br>
<p>During my tests, I've come across different issues reported by OpenMPI-1.4.2:
<br>
<p>1/ 
<br>
[[12770,1],0][btl_openib_component.c:3227:handle_wc] from bn0103 to: bn0122 error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for wr_id 560618664 opcode 1  vendor error 105 qp_idx 3
<br>
<p>2/
<br>
[[992,1],6][btl_openib_component.c:3227:handle_wc] from pbn04 to: pbn05 error polling LP CQ with status REMOTE ACCESS ERROR status number 10 for wr_id 162858496 opcode 1  vendor error 136 qp_idx 
<br>
0[[992,1],5][btl_openib_component.c:3227:handle_wc] from pbn05 to: pbn04 error polling HP CQ with status WORK REQUEST FLUSHED ERROR status number 5 for wr_id 485900928 opcode 0  vendor error 249 
<br>
qp_idx 0
<br>
&nbsp;
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI will try to continue, but your job may end up failing.
<br>
&nbsp;
<br>
&nbsp;&nbsp;Local host:        p'&quot;
<br>
&nbsp;&nbsp;MPI process PID:   20743
<br>
&nbsp;&nbsp;Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
<br>
&nbsp;
<br>
This error may indicate connectivity problems within the fabric; please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
<p>I'd like to know what these two errors mean and where they come from.
<br>
<p>Thanks for your help,
<br>
Eloi
<br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Company Phone:   +32 10 487 959
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13702.php">Stefan Kuhne: "Re: [OMPI users] MPE logging GUI"</a>
<li><strong>Previous message:</strong> <a href="13700.php">Anthony Chan: "Re: [OMPI users] MPE logging GUI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13940.php">Eloi Gaudry: "Re: [OMPI users] openib issues"</a>
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
