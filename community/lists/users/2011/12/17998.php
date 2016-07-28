<?
$subject_val = "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 18 19:26:00 2011" -->
<!-- isoreceived="20111219002600" -->
<!-- sent="Mon, 19 Dec 2011 01:25:35 +0100" -->
<!-- isosent="20111219002535" -->
<!-- name="Chaitanya Krishna" -->
<!-- email="icymist_at_[hidden]" -->
<!-- subject="[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband" -->
<!-- id="CADNPybOQPLO1Hj6SmAVGYBwbHCSiQKVQSNQPR6BtjOCedgMd-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband<br>
<strong>From:</strong> Chaitanya Krishna (<em>icymist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-18 19:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Previous message:</strong> <a href="17997.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Reply:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Reply:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there,
<br>
I am trying to compile openmpi with Torque and Infiniband.
<br>
The thing is that Torque is installed on the headnode and the
<br>
Infiniband installation is available only on the slave nodes. I am
<br>
trying to build openmpi on a slave node with the following configure
<br>
options.
<br>
./configure --prefix=$HOME/opt/openmpi/1.4.4/intel12/infiniband
<br>
--with-openib --with-tm=/usr/local F77=ifort FC=ifort CC=icc CXX=icpc
<br>
The configure fails as it fails to find the Torque libraries (tm.h).
<br>
But I know for sure that the torque libraries are available on the
<br>
head node at /usr/local.
<br>
So, I would like to know if there is a way to make configure force to
<br>
build support for Torque even if it does not find the libraries for
<br>
Torque on the slave node.
<br>
Thanks for any help in advance.
<br>
Best regards,Chai
<br>
--42
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Previous message:</strong> <a href="17997.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Reply:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>Reply:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
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
