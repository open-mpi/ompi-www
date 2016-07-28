<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 11:26:16 2006" -->
<!-- isoreceived="20060411152616" -->
<!-- sent="Tue, 11 Apr 2006 11:25:01 -0400" -->
<!-- isosent="20060411152501" -->
<!-- name="Jeffrey B. Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running code with OpenMPI-1.0.1" -->
<!-- id="443BCA4D.5020202_at_charter.net" -->
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
<strong>From:</strong> Jeffrey B. Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 11:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1026.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Maybe reply:</strong> <a href="1026.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Maybe reply:</strong> <a href="1047.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
<p>&nbsp;&nbsp;&nbsp;I'm trying to run one of the NAS Parallel Benchmarks (bt) with
<br>
OpenMPI-1.0.1 that was built with PGI 6.0. The code never
<br>
starts (at least I don't see any output) until I kill the code. Then
<br>
I get the following message:
<br>
<p>[0,1,2][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with 
<br>
errno=113[0,1,4][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with
<br>
errno=113[0,1,8][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113mpirun: killing job...
<br>
<p>Any ideas on this one?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1026.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Maybe reply:</strong> <a href="1026.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Maybe reply:</strong> <a href="1047.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem running code with OpenMPI-1.0.1"</a>
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
