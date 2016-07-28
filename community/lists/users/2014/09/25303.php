<?
$subject_val = "[OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 04:53:01 2014" -->
<!-- isoreceived="20140910085301" -->
<!-- sent="Wed, 10 Sep 2014 09:53:00 +0100" -->
<!-- isosent="20140910085300" -->
<!-- name="Red Red" -->
<!-- email="redosx_at_[hidden]" -->
<!-- subject="[OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)" -->
<!-- id="CA+8kLiwqM-mtTE7Kzcqp7LPW61wp_vQzKbzmKWOS-=aBY6kspw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)<br>
<strong>From:</strong> Red Red (<em>redosx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 04:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Previous message:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Reply:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>after the installation of a Torque PBS when I start a simple program with
<br>
mpirun I get this result (i have already installed again):
<br>
<p>[*oxygen1:04280] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../../../../../orte/mca/ess/env/ess_env_module.c at line 358*
<br>
*[oxygen1:04281] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../../../../../orte/mca/ess/env/ess_env_module.c at line 358*
<br>
*[oxygen1:04278] tcp_peer_recv_connect_ack: invalid header type: -236847104*
<br>
*[oxygen1:04280] [[INVALID],INVALID] routed:binomial: Connection to
<br>
lifeline [[61922,0],0] lost*
<br>
*[oxygen1:04282] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../../../../../orte/mca/ess/env/ess_env_module.c at line 358*
<br>
*-------------------------------------------------------*
<br>
*Primary job  terminated normally, but 1 process returned*
<br>
*a non-zero exit code.. Per user-direction, the job has been aborted.*
<br>
*-------------------------------------------------------*
<br>
*--------------------------------------------------------------------------*
<br>
*mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing*
<br>
*the job to be terminated. The first process to do so was:*
<br>
<p>*  Process name: [[61922,1],0]*
<br>
*  Exit code:    1*
<br>
<p><p>Please help me, thank you in advance.
<br>
<p>Carmine
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Previous message:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Reply:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
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
