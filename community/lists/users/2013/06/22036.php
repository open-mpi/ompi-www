<?
$subject_val = "[OMPI users] Oversubcription for mimd/mpmd mpiruns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 04:52:49 2013" -->
<!-- isoreceived="20130606085249" -->
<!-- sent="Thu, 6 Jun 2013 10:52:37 +0200 (CEST)" -->
<!-- isosent="20130606085237" -->
<!-- name="Nima Aghajari" -->
<!-- email="greyy_at_[hidden]" -->
<!-- subject="[OMPI users] Oversubcription for mimd/mpmd mpiruns" -->
<!-- id="trinity-467f2622-9181-4aa2-be94-96098f9b070d-1370508757642_at_3capp-gmx-bs11" -->
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
<strong>Subject:</strong> [OMPI users] Oversubcription for mimd/mpmd mpiruns<br>
<strong>From:</strong> Nima Aghajari (<em>greyy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 04:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22037.php">Ralph Castain: "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>Previous message:</strong> <a href="22035.php">Murthy, Mahalakshmi (GE Global Research, consultant): "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22038.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Reply:</strong> <a href="22038.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Maybe reply:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<head></head><body><div style="font-family: Verdana;font-size: 12.0px;"><div>
<div>Dear all,</div>

<div>I am currently using openmpi 1.6.4 and trying to do a parallel performance analysis for a parallel two-program mpirun. So what I have are two programs that are executed like this:</div>

<div>&nbsp;</div>

<div>&nbsp;&nbsp; &nbsp; mpirun -np 4 my_prog1 : -np 1 my_prog2</div>

<div>&nbsp;</div>

<div>my_prog1 and my_prog2 run sequentially, so when one program is actually doing something the other one idles. So ideally I would like my_prog1 to use all 4 available cores and my_prog2 could use any of those for but not an extra one! The command from above results in a run with 5 mpi processes, which run on 5 cores. But in order to compare it with another setup I have to restrict the run to 4 actual cores. I tried using a hostfile as suggested in the FAQ-examples:</div>

<div>&nbsp;</div>

<div>&nbsp; &nbsp; &nbsp;cat my_host<br/>
&nbsp; &nbsp; &nbsp;localhost slots=4<br/>
&nbsp; &nbsp; &nbsp;mpirun -np 4 --hostfile my_host my_prog1 : -np 1 --hostfile my_host my_prog2</div>

<div>&nbsp;</div>

<div>This solution works fine for a single program mpirun. But for the multiple program example from above it leads to a run on 5 cores again because of the duplicate use of the hostfile. Does anyone have an idea how to restrict such a mimd/mpmd mpirun to an overall number of cores?</div>
</div></div></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22037.php">Ralph Castain: "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>Previous message:</strong> <a href="22035.php">Murthy, Mahalakshmi (GE Global Research, consultant): "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22038.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Reply:</strong> <a href="22038.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Maybe reply:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
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
