<?
$subject_val = "[OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 11:17:27 2010" -->
<!-- isoreceived="20100609151727" -->
<!-- sent="Wed, 9 Jun 2010 16:17:01 +0100" -->
<!-- isosent="20100609151701" -->
<!-- name="Govind" -->
<!-- email="govind.rhul_at_[hidden]" -->
<!-- subject="[OMPI users] Running openMPI job with torque" -->
<!-- id="AANLkTilRqGjX-V9SUY_pZngasFYKfsWEO03JIYmUYwMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Running openMPI job with torque<br>
<strong>From:</strong> Govind (<em>govind.rhul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 11:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13274.php">David Zhang: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13272.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13274.php">David Zhang: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13274.php">David Zhang: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed following openMPI packge on worker node from repo
<br>
openmpi-libs-1.4-4.el5.x86_64
<br>
openmpi-1.4-4.el5.x86_64
<br>
mpitests-openmpi-3.0-2.el5.x86_64
<br>
mpi-selector-1.0.2-1.el5.noarch
<br>
<p>torque-client-2.3.6-2cri.el5.x86_64
<br>
torque-2.3.6-2cri.el5.x86_64
<br>
torque-mom-2.3.6-2cri.el5.x86_64
<br>
<p><p>Having some problem on running MPI jobs with torque
<br>
qsub -q long -l nodes=4 my-script.sh
<br>
42.pbs1 &lt;<a href="http://42.pbs1.pp.rhul.ac.uk/">http://42.pbs1.pp.rhul.ac.uk/</a>&gt;
<br>
<p>cat my-script.sh.e41
<br>
stty: standard input: Invalid argument
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not find
<br>
an executable:
<br>
<p>Executable: hello
<br>
Node: node56.beowulf.cluster
<br>
<p>while attempting to start process rank 0.
<br>
==================================
<br>
<p>I could run the  binary directly on the node without any problem.
<br>
&nbsp;mpiexec -n 4 hello
<br>
Hello World! from process 2 out of 4 on node56.beowulf.cluster
<br>
Hello World! from process 0 out of 4 on node56.beowulf.cluster
<br>
Hello World! from process 3 out of 4 on node56.beowulf.cluster
<br>
Hello World! from process 1 out of 4 on node56.beowulf.cluster
<br>
<p>Could you please advise, if I missing anything here.
<br>
<p><p>Regards
<br>
Govind
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13274.php">David Zhang: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13272.php">Ralph Castain: "Re: [OMPI users] Specifying slots in rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13274.php">David Zhang: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13274.php">David Zhang: "Re: [OMPI users] Running openMPI job with torque"</a>
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
