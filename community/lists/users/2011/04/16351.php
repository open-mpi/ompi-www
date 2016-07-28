<?
$subject_val = "[OMPI users] OpenMPI out of band TCP retry exceeded";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 13:58:36 2011" -->
<!-- isoreceived="20110427175836" -->
<!-- sent="Wed, 27 Apr 2011 13:58:29 -0400" -->
<!-- isosent="20110427175829" -->
<!-- name="Sindhi, Waris             PW" -->
<!-- email="Waris.Sindhi_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI out of band TCP retry exceeded" -->
<!-- id="F564C25DA8D2AC4091972A6CE1EEA00202A56222_at_PUSMNEG2.pwemail.us" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI out of band TCP retry exceeded<br>
<strong>From:</strong> Sindhi, Waris             PW (<em>Waris.Sindhi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 13:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16350.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am getting a &quot;oob-tcp: Communication retries exceeded&quot; error
<br>
message when I run a 238 MPI slave code
<br>
<p><p>/opt/openmpi/i386/bin/mpirun -mca btl_openib_verbose 1 --mca btl ^tcp
<br>
--mca pls_ssh_agent ssh -mca oob_tcp_peer_retries 1000 --prefix
<br>
/usr/lib/openmpi/1.2.8-gcc/bin -np 239 --app procgroup
<br>
------------------------------------------------------------------------
<br>
<pre>
--
mpirun was unable to start the specified application as it encountered
an error:
Error name: Unknown error: 1
Node: ln10
when attempting to start process rank 234.
------------------------------------------------------------------------
--
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
orted/orted_comm.c at line 130
[ln13:27867] [[61748,0],0] ORTE_ERROR_LOG: Unreachable in file
orted/orted_comm.c at line 130
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
[ln13:27867] [[61748,0],0]-[[61748,0],32] oob-tcp: Communication retries
exceeded.  Can not communicate with peer
Any help would be greatly appreciated.
Sincerely,
Waris Sindhi
High Performance Computing, TechApps
Pratt &amp; Whitney, UTC
(860)-565-8486
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16350.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Reply:</strong> <a href="16352.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
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
