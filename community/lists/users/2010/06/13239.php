<?
$subject_val = "[OMPI users] ompi-restart failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 10:51:11 2010" -->
<!-- isoreceived="20100607145111" -->
<!-- sent="Mon, 7 Jun 2010 23:51:07 +0900" -->
<!-- isosent="20100607145107" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-restart failed" -->
<!-- id="AANLkTim9RGFfS_rCFDYKHVz0vSnLt86upHVMqg3reU7N_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi-restart failed<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 10:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13238.php">Nguyen Kim Son: "[OMPI users] ompi-restart, ompi-ps problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Reply:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I'm using OpenMPI 1.4.2 with BLCR 0.8.2 to test checkpointing on 2 nodes but
<br>
it failed to restart (Segmentation fault).
<br>
Here are the details concerning my problem:
<br>
<p>+ OS: Centos 5.4
<br>
+ OpenMPI configure:
<br>
./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
<br>
--with-blcr=/home/nguyen/opt/blcr
<br>
--with-blcr-libdir=/home/nguyen/opt/blcr/lib \
<br>
--prefix=/home/nguyen/opt/openmpi \
<br>
--enable-mpirun-prefix-by-default
<br>
+ mpirun -am ft-enable-cr -machinefile host ./test
<br>
<p>I checkpointed the test program using &quot;ompi-checkpoint -v -s PID&quot; and the
<br>
checkpoint file was created successfully. However it failed to restart using
<br>
ompi-restart:
<br>
*&quot;mpirun noticed that process rank 0 with PID 21242 on node rc014.local
<br>
exited on signal 11 (Segmentation fault)&quot;
<br>
*
<br>
Did I miss something in the installation of OpenMPI?
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13238.php">Nguyen Kim Son: "[OMPI users] ompi-restart, ompi-ps problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Reply:</strong> <a href="13240.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
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
