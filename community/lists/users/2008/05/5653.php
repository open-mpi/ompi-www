<?
$subject_val = "[OMPI users] Help configuring openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 09:42:34 2008" -->
<!-- isoreceived="20080512134234" -->
<!-- sent="Mon, 12 May 2008 15:52:13 +0200" -->
<!-- isosent="20080512135213" -->
<!-- name="Juan Carlos Larroya Huguet" -->
<!-- email="JC.LARROYA_at_[hidden]" -->
<!-- subject="[OMPI users] Help configuring openmpi" -->
<!-- id="48284B8D.5080505_at_wanadoo.fr" -->
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
<strong>Subject:</strong> [OMPI users] Help configuring openmpi<br>
<strong>From:</strong> Juan Carlos Larroya Huguet (<em>JC.LARROYA_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 09:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5654.php">Sang Chul Choi: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>Previous message:</strong> <a href="5652.php">Karolis Eigelis: "[OMPI users] [SPAM:### 81%] openmpi multi-lib torque support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Reply:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm using Openmpi in a linux cluster (itanium 64, intel compilers, 8 
<br>
processors (4 dual) by node) in which openmpi is not the default ( I 
<br>
mean supported) MPI-II implementation. Openmpi has been installed easily 
<br>
on the cluster but I think there is a problem with the configuration.
<br>
<p>I'm using two mpi codes : The first is a CFD code with a master/slave 
<br>
structure... I have done some calculations on 128 proc's... 1 master 
<br>
process and 127 slaves.  Openmpi  is slightly more efficient  than the 
<br>
supported MPI-II version.
<br>
<p>Then I've moved to a second solver (radiant heat transfer ) ... In this 
<br>
case, all the processors are doing the same thing. I have found that 
<br>
after the initial phase of data reading some processors start to work 
<br>
hard and the others (even consuming 99 of CPU) are waiting for 
<br>
something!  In fact I have 15 processes over 32 which are working (all 
<br>
the processes are consuming 99% of CPU...) then as soon as they finish 
<br>
the calculation the other processes start to do the job (in fact 12 
<br>
processes) and then when these 12 start to finish the remaining 4 do the 
<br>
job....
<br>
<p>When looking to the computational time, I obtain that with the MPI-II 
<br>
official version on the cluster...
<br>
<p>output.000: temps apres petits calculs =    170.445202827454
<br>
output.001: temps apres petits calculs =    170.657078027725
<br>
output.002: temps apres petits calculs =    168.880963802338
<br>
output.003: temps apres petits calculs =    172.611718893051
<br>
output.004: temps apres petits calculs =    169.420207977295
<br>
output.005: temps apres petits calculs =    168.880684852600
<br>
output.006: temps apres petits calculs =    170.222792863846
<br>
output.007: temps apres petits calculs =    172.987339973450
<br>
output.008: temps apres petits calculs =    170.321479082108
<br>
output.009: temps apres petits calculs =    167.417831182480
<br>
output.010: temps apres petits calculs =    170.633100032806
<br>
output.011: temps apres petits calculs =    168.988963842392
<br>
output.012: temps apres petits calculs =    166.893934011459
<br>
output.013: temps apres petits calculs =    169.844722032547
<br>
output.014: temps apres petits calculs =    169.541869163513
<br>
output.015: temps apres petits calculs =    166.023182868958
<br>
output.016: temps apres petits calculs =    166.047858953476
<br>
output.017: temps apres petits calculs =    166.298271894455
<br>
output.018: temps apres petits calculs =    166.990653991699
<br>
output.019: temps apres petits calculs =    170.565690040588
<br>
output.020: temps apres petits calculs =    170.455694913864
<br>
output.021: temps apres petits calculs =    170.545780897141
<br>
output.022: temps apres petits calculs =    165.962821960449
<br>
output.023: temps apres petits calculs =    169.934472084045
<br>
output.024: temps apres petits calculs =    170.169304847717
<br>
output.025: temps apres petits calculs =    172.316897153854
<br>
output.026: temps apres petits calculs =    166.030095100403
<br>
output.027: temps apres petits calculs =    168.219340801239
<br>
output.028: temps apres petits calculs =    165.486129045486
<br>
output.029: temps apres petits calculs =    165.923212051392
<br>
output.030: temps apres petits calculs =    165.996737957001
<br>
output.031: temps apres petits calculs =    167.544650793076
<br>
<p>all the processes are more or less consuming the same CPU time
<br>
<p>and with Openmpi I've obtained that
<br>
<p>output.000: temps apres petits calculs =    158.906322956085
<br>
output.001: temps apres petits calculs =    160.753660202026
<br>
output.002: temps apres petits calculs =    161.286659002304
<br>
output.003: temps apres petits calculs =    169.431221961975
<br>
output.004: temps apres petits calculs =    163.511161088943
<br>
output.005: temps apres petits calculs =    160.547757863998
<br>
output.006: temps apres petits calculs =    161.222673892975
<br>
output.007: temps apres petits calculs =    325.977787017822
<br>
output.008: temps apres petits calculs =    321.527663946152
<br>
output.009: temps apres petits calculs =    326.429191827774
<br>
output.010: temps apres petits calculs =    321.229686975479
<br>
output.011: temps apres petits calculs =    160.507288932800
<br>
output.012: temps apres petits calculs =    158.480596065521
<br>
output.013: temps apres petits calculs =    169.135869979858
<br>
output.014: temps apres petits calculs =    158.526450872421
<br>
output.015: temps apres petits calculs =    486.637645006180
<br>
output.016: temps apres petits calculs =    483.884088993073
<br>
output.017: temps apres petits calculs =    480.200496196747
<br>
output.018: temps apres petits calculs =    483.166898012161
<br>
output.019: temps apres petits calculs =    323.687628030777
<br>
output.020: temps apres petits calculs =    319.833092927933
<br>
output.021: temps apres petits calculs =    329.558218955994
<br>
output.022: temps apres petits calculs =    329.199027061462
<br>
output.023: temps apres petits calculs =    322.116630077362
<br>
output.024: temps apres petits calculs =    322.238983869553
<br>
output.025: temps apres petits calculs =    322.890433073044
<br>
output.026: temps apres petits calculs =    322.439801216125
<br>
output.027: temps apres petits calculs =    157.899522066116
<br>
output.028: temps apres petits calculs =    159.247365951538
<br>
output.029: temps apres petits calculs =    158.351451158524
<br>
output.030: temps apres petits calculs =    158.714610815048
<br>
output.031: temps apres petits calculs =    480.177379846573
<br>
<p>15 processes have similar times (close to those obtained with the 
<br>
official MPI), hen 12, then 4 as explained previously.
<br>
<p>I suppose that we need to tune the configuration of openmpi. Do you know 
<br>
how to do?
<br>
<p>Thanks in advance
<br>
<p>JC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5654.php">Sang Chul Choi: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<li><strong>Previous message:</strong> <a href="5652.php">Karolis Eigelis: "[OMPI users] [SPAM:### 81%] openmpi multi-lib torque support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Reply:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
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
