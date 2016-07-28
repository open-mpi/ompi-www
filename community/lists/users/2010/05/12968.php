<?
$subject_val = "[OMPI users] Dynamic libraries in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 10:37:37 2010" -->
<!-- isoreceived="20100507143737" -->
<!-- sent="Fri, 7 May 2010 16:37:26 +0200" -->
<!-- isosent="20100507143726" -->
<!-- name="Miguel &#193;ngel V&#225;zquez" -->
<!-- email="mavazquez.at.cttc_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamic libraries in OpenMPI" -->
<!-- id="m2ideba11b21005070737s70a0bf24gc2d015a16eb9145f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Dynamic libraries in OpenMPI<br>
<strong>From:</strong> Miguel &#193;ngel V&#225;zquez (<em>mavazquez.at.cttc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 10:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12969.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12972.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12972.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to run a C++ program which uses dynamic libraries under mpi.
<br>
<p>The compilation command looks like:
<br>
<p>&nbsp;mpiCC `pkg-config --cflags itpp`  -o montecarlo  montecarlo.cpp `pkg-config
<br>
--libs itpp`
<br>
<p>And it works if I executed it in one machine:
<br>
<p>mpirun -np 2 -H localhost montecarlo
<br>
<p>I tested this both in the &quot;master node&quot; and in the &quot;compute nodes&quot; and it
<br>
works. However, when I try to run it with two different machines:
<br>
<p>mpirun -np 2 -H localhost,hpcnode1 montecarlo
<br>
<p>The program claims that it can't find the shared libraries:
<br>
<p>montecarlo: error while loading shared libraries: libitpp.so.6: cannot open
<br>
shared object file: No such file or directory
<br>
<p>The LD_LIBRARY_PATH is set properly at every machine, any idea where the
<br>
problem is? I attached you the config.log and the result of the omp-info
<br>
--all
<br>
<p>Thank you in advance,
<br>
<p>Miguel
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12968/mavazquez.tar.bz2">mavazquez.tar.bz2</a>
</ul>
<!-- attachment="mavazquez.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12969.php">Damien: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12972.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12972.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
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
