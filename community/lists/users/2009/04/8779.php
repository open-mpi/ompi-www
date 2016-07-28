<?
$subject_val = "[OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 10:51:48 2009" -->
<!-- isoreceived="20090406145148" -->
<!-- sent="Mon, 6 Apr 2009 16:51:43 +0200" -->
<!-- isosent="20090406145143" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] ssh MPi and program tests" -->
<!-- id="b87c422a0904060751v68c512fdob5db75beb5d48e4e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ssh MPi and program tests<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 10:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8780.php">Ralph Castain: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8780.php">Ralph Castain: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8780.php">Ralph Castain: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have compiled openmpi 1.3.1 on debian amd64 lenny with icc/ifort
<br>
(10.1.015) and libnuma. Tests passed:
<br>
<p>ompi_info | grep libnuma
<br>
&nbsp;MCA affinity: libnuma (MCA v 2.0, API 2.0)
<br>
<p>ompi_info | grep maffinity
<br>
&nbsp;MCA affinity: first use (MCA as above)
<br>
&nbsp;MCA affinity: libnuma as above.
<br>
<p>Then, I have compiled parallel a molecular dynamics package, amber10,
<br>
without error signals but I am having problems in testing the amber
<br>
parallel installation.
<br>
<p>amber10 configure was set as:
<br>
<p>./configure_amber -openmpi -nobintray ifort
<br>
<p>just as I used before with openmpi 1.2.6. Could you say if the
<br>
-openmpi should be changed?
<br>
<p>cd tests
<br>
<p>export DO_PARALLEL='mpirun -np 4'
<br>
<p>make test.parallel.MM  &lt; /dev/null
<br>
<p>cd cytosine &amp;&amp; ./Run.cytosine
<br>
The authenticity of host deb64 (which is the hostname) (127.0.1.1)
<br>
can't be established.
<br>
RSA fingerprint .....
<br>
connecting ?
<br>
<p>I stopped the ssh daemon, whereby tests were interrupted because deb64
<br>
(i.e., itself) could no more be accessed. Further attempts under these
<br>
conditions failed for the same reason. Now, sshing to deb64 is no more
<br>
possible: port 22 closed. In contrast, sshing from deb64 to other
<br>
computers occurs passwordless. No such problems arose at the time of
<br>
amd64 etch with the same
<br>
configuration of ssh, same compilers, and openmpi 1.2.6.
<br>
<p>I am here because the warning from the amber site is that I should to
<br>
learn how to use my installation of MPI. Therefore, if there is any
<br>
clue ..
<br>
<p>thanks
<br>
francesco pietra
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8780.php">Ralph Castain: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8780.php">Ralph Castain: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8780.php">Ralph Castain: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8834.php">Marco: "Re: [OMPI users] ssh MPi and program tests"</a>
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
