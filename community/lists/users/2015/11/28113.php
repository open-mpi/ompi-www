<?
$subject_val = "[OMPI users] oob-tcp error (warning?) message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 26 16:49:48 2015" -->
<!-- isoreceived="20151126214948" -->
<!-- sent="Thu, 26 Nov 2015 21:49:26 +0000" -->
<!-- isosent="20151126214926" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="[OMPI users] oob-tcp error (warning?) message" -->
<!-- id="D27CD770.87361%Grigory.Shamov_at_ad.umanitoba.ca" -->
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
<strong>Subject:</strong> [OMPI users] oob-tcp error (warning?) message<br>
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-26 16:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Previous message:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Reply:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>For a parallel MPI job, we sometimes (not always) get the following
<br>
message:
<br>
<p>[n047:25850] [[36630,0],1] -&gt; [[36630,0],0] (node: n230) oob-tcp: Number
<br>
of attempts to create TCP connection has been exceeded.  Can not
<br>
communicate with peer
<br>
[n047:25850] [[36630,0],1] ORTE_ERROR_LOG: Unreachable in file
<br>
../../../../../openmpi-1.6.5/orte/mca/grpcomm/bad/grpcomm_bad_module.c at
<br>
line 412
<br>
[n047:25850] [[36630,0],1] -&gt; [[36630,0],0] (node: n230) oob-tcp: Number
<br>
of attempts to create TCP connection has been exceeded.  Can not
<br>
communicate with peer
<br>
<p>These appear in the middle of a running job; we use OpenMPI 1.6.5 and OFED
<br>
2.4 on CentOS 6.  
<br>
<p><pre>
-- 
Grigory Shamov
HPC Analist,
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Previous message:</strong> <a href="28112.php">Ralph Castain: "Re: [OMPI users] Problem building 1.10.1 on OSX:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Reply:</strong> <a href="28114.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
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
