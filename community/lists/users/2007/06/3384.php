<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 12:27:01 2007" -->
<!-- isoreceived="20070606162701" -->
<!-- sent="Wed, 6 Jun 2007 10:26:47 -0600" -->
<!-- isosent="20070606162647" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] MX MPI latency measurements" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F6340_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 12:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3383.php">Srinath Vadlamani: "[OMPI users] open-mpi with ifort in debug..trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With 2 nodes using 1.1.7 with the patch we measured (using mpich-mx
<br>
1.2.7..4):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.07us
<br>
<p>With mx 1.2.1-rc18 we measure:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.69 us
<br>
And with mpich-mx 1.2.7..4 we see:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.20us
<br>
<p>Our Open MPI settings:
<br>
<pre>
---
# env | grep OMPI
OMPI_MCA_pml=cm
OMPI_MCA_mpi_keep_hostnames=1
OMPI_MCA_oob_tcp_include=eth0
OMPI_MCA_btl=mx,sm,self
Does anyone know why the latency would be slightly higher using Open MPI
versus MPICH-MX?
Thanks,
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3383.php">Srinath Vadlamani: "[OMPI users] open-mpi with ifort in debug..trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
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
