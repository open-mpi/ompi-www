<?
$subject_val = "[OMPI users] Slowness with OpenMPI (1.8.1) and Numpy";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 10:39:24 2015" -->
<!-- isoreceived="20150612143924" -->
<!-- sent="Fri, 12 Jun 2015 10:39:22 -0400" -->
<!-- isosent="20150612143922" -->
<!-- name="kishor sharma" -->
<!-- email="kishor.iitr_at_[hidden]" -->
<!-- subject="[OMPI users] Slowness with OpenMPI (1.8.1) and Numpy" -->
<!-- id="CAJ6k7aGjf2_2ptcKAqTni4snG-t9eo0RLMZLE8ibA9uCwtG=OA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Slowness with OpenMPI (1.8.1) and Numpy<br>
<strong>From:</strong> kishor sharma (<em>kishor.iitr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-12 10:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27123.php">kishor sharma: "[OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>Previous message:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi There,
<br>
<p><p>I am facing slowness running numpy code using mpirun with openmpi 1.8.1
<br>
version.
<br>
<p><p>With Open MPI (1.8.1)
<br>
<p>---------------------
<br>
<p><span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpirun -version
</span><br>
<p>mpirun (Open MPI) 1.8.1
<br>
<p><p><p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><span class="quotelev1">&gt;  time /usr/lib64/openmpi/bin/mpirun -np 1 python -c 'import numpy;
</span><br>
numpy.linalg.svd(numpy.eye(1000))'
<br>
<p>real 23.75
<br>
<p>user 6.95
<br>
<p>sys 16.68
<br>
<p><span class="quotelev1">&gt;
</span><br>
<p><p><p>With Open MPI (1.5.4):
<br>
<p>---------------------
<br>
<p><span class="quotelev1">&gt; /usr/lib64/openmpi/bin/mpirun -version
</span><br>
<p>mpirun (Open MPI) 1.5.4
<br>
<p><p><p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><span class="quotelev1">&gt; time /usr/lib64/openmpi/bin/mpirun -np 1 python -c 'import numpy;
</span><br>
numpy.linalg.svd(numpy.eye(1000))'
<br>
<p>real 1.35
<br>
<p>user 2.11
<br>
<p>sys 0.71
<br>
<p><span class="quotelev1">&gt;
</span><br>
<p><p>Do you guys have any idea why the above function is 10-15x with openmpi
<br>
version 1.8.1
<br>
<p><p>Thanks,
<br>
<p>Kishor
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27123.php">kishor sharma: "[OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>Previous message:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
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
