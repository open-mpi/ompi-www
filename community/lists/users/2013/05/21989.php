<?
$subject_val = "[OMPI users] Question on MPMD runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 30 06:40:56 2013" -->
<!-- isoreceived="20130530104056" -->
<!-- sent="Thu, 30 May 2013 10:40:50 +0000" -->
<!-- isosent="20130530104050" -->
<!-- name="Victor Vysotskiy" -->
<!-- email="victor.vysotskiy_at_[hidden]" -->
<!-- subject="[OMPI users] Question on MPMD runs" -->
<!-- id="8D58A4B5E6148C419C6AD6334962375D60C77B1B_at_UWMBX01.uw.lu.se" -->
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
<strong>Subject:</strong> [OMPI users] Question on MPMD runs<br>
<strong>From:</strong> Victor Vysotskiy (<em>victor.vysotskiy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-30 06:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21990.php">Ralph Castain: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Previous message:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21990.php">Ralph Castain: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Reply:</strong> <a href="21990.php">Ralph Castain: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Maybe reply:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Developers and Users,
<br>
<p>I have general question on signal trapping/handling within mpiexec/mpirun.  Let me assume that I have 2 cores and I start two different (independent) prog1 and prog2 programs in parallel  via the mpirun/mpiexec strartup command:
<br>
<p>mpiexec -n 1 prog1 : -n 1 prog2 
<br>
<p>What happens if one of the programs just is abnormally crashed/terminated while the second one is still running normally? Is it correct observation that in such case the OpenMPI  immediately starts a cleanup process and automatically terminates all spawned/running jobs? If it is like that, is there any way to force mpiexec/mpirun to don't cleanup all processes on error and wait until all spawned processes either successfully complete or abnormally terminate their execution?
<br>
<p>Thank you in advance!
<br>
<p>Victor.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21990.php">Ralph Castain: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Previous message:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21990.php">Ralph Castain: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Reply:</strong> <a href="21990.php">Ralph Castain: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Maybe reply:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
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
