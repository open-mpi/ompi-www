<?
$subject_val = "[OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 21:34:05 2009" -->
<!-- isoreceived="20090227023405" -->
<!-- sent="Fri, 27 Feb 2009 13:33:49 +1100" -->
<!-- isosent="20090227023349" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="[OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="49A7510D.8020208_at_vpac.org" -->
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
<strong>Subject:</strong> [OMPI users] openib RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 21:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8224.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>I've had a couple of errors recently, of the form:
<br>
<p>[[1176,1],0][btl_openib_component.c:2905:handle_wc] from 
<br>
tango092.vpac.org to: tango090 error polling LP CQ with status RETRY 
<br>
EXCEEDED ERROR status number 12 for wr_id 38996224 opcode 0 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>My first thought was to increase the retry count, but it is already at 
<br>
maximum.
<br>
<p>I've checked connections between the two nodes, and they seem ok
<br>
<p>[root_at_tango090 ~]# ibv_rc_pingpong
<br>
&nbsp;&nbsp;&nbsp;local address:  LID 0x005f, QPN 0xe4045d, PSN 0xdd13f0
<br>
&nbsp;&nbsp;&nbsp;remote address: LID 0x005d, QPN 0xfe0425, PSN 0xc43fe2
<br>
8192000 bytes in 0.07 seconds = 996.93 Mbit/sec
<br>
1000 iters in 0.07 seconds = 65.74 usec/iter
<br>
<p>How can I stop this happening in the future, without increasing the 
<br>
retry count?
<br>
<p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><pre>
-- 
Brett Pemberton - VPAC Senior Systems Administrator
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8223/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8224.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8222.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
