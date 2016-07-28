<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 14 13:00:31 2006" -->
<!-- isoreceived="20060414170031" -->
<!-- sent="Fri, 14 Apr 2006 12:59:56 -0400" -->
<!-- isosent="20060414165956" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI error" -->
<!-- id="s43f9cea.063_at_n6mcgw16.cchmc.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Prakash Velayutham (<em>Prakash.Velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-14 12:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="1066.php">Warner Yuen: "[OMPI users] OMPI and Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Maybe reply:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>What does this error mean?
<br>
<p>******************************************************************************
<br>
socket 10: [wins02:19102] [0,0,3]-[0,0,0] mca_oob_tcp_msg_recv: readv
<br>
failed with errno=104
<br>
socket 12: [wins01:19281] [0,0,4]-[0,0,0] mca_oob_tcp_msg_recv: readv
<br>
failed with errno=104
<br>
socket 6: [wins05:00939] [0,0,1]-[0,0,0] mca_oob_tcp_msg_send_handler:
<br>
writev failed with errno=104
<br>
socket 6: [wins05:00939] [0,0,1] ORTE_ERROR_LOG: Communication failure
<br>
in file gpr_proxy_put_get.c at line 143
<br>
socket 6: [wins05:00939] [0,0,1]-[0,0,0]
<br>
mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
<br>
retrying (pid=939)
<br>
socket 6: [wins05:00939] mca_oob_tcp_peer_timer_handler
<br>
socket 6: [wins05:00939] [0,0,1]-[0,0,0]
<br>
mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
<br>
retrying (pid=939)
<br>
socket 6: [wins05:00939] mca_oob_tcp_peer_timer_handler
<br>
socket 6: [wins05:00939] [0,0,1]-[0,0,0]
<br>
mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
<br>
retrying (pid=939)
<br>
*******************************************************************************
<br>
<p>I am still debugging the code I am working on, but just wanted to get
<br>
some insight into where I should be looking at.
<br>
<p>I am running openmpi-1.0.1.
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="1066.php">Warner Yuen: "[OMPI users] OMPI and Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Maybe reply:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
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
