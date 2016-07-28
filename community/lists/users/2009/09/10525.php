<?
$subject_val = "[OMPI users] Running problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 03:27:40 2009" -->
<!-- isoreceived="20090901072740" -->
<!-- sent="Tue, 1 Sep 2009 12:27:36 +0500" -->
<!-- isosent="20090901072736" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] Running problem" -->
<!-- id="428810f20909010027h7a766b70re9244fa5b271d253_at_mail.gmail.com" -->
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
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-01 03:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10526.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<li><strong>Previous message:</strong> <a href="../../2009/08/10524.php">Ashika Umanga Umagiliya: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10526.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<li><strong>Reply:</strong> <a href="10526.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
A simple program at my 4-node ROCKS cluster runs fine with command:
<br>
<p>/opt/openmpi/bin/mpirun -np 4 -machinefile machines ./mpi-ring
<br>
<p><p>Another bigger programs runs fine on the head node only with command:
<br>
<p>cd ./sphere; /opt/openmpi/bin/mpirun -np 4 ../bin/flo2d
<br>
<p>But with the command:
<br>
<p>cd /sphere; /opt/openmpi/bin/mpirun -np 4 -machinefile ../machines
<br>
../bin/flo2d
<br>
<p>It gives output that:
<br>
<p>../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
../bin/flo2d: error while loading shared libraries: libGLU.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
<p>(cursor blinking here)
<br>
<p><p>===================================
<br>
<p>Please fix it.
<br>
Note that with this bigger code the exe file is in different location than
<br>
the ./sphere.
<br>
Openmpi is installed with GNU compilers.
<br>
<p>Best Regards,
<br>
Amjad Ali
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-10525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10526.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<li><strong>Previous message:</strong> <a href="../../2009/08/10524.php">Ashika Umanga Umagiliya: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10526.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
<li><strong>Reply:</strong> <a href="10526.php">J.S. van Bethlehem: "Re: [OMPI users] Running problem"</a>
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
