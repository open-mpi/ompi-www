<?
$subject_val = "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 19 00:21:49 2011" -->
<!-- isoreceived="20111219052149" -->
<!-- sent="Sun, 18 Dec 2011 23:21:43 -0600" -->
<!-- isosent="20111219052143" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband" -->
<!-- id="15F71B097D330B42AA606A4AD8CA96400131D02B8985_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADNPybOQPLO1Hj6SmAVGYBwbHCSiQKVQSNQPR6BtjOCedgMd-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-19 00:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18003.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI users] OpenMPI and valgrind"</a>
<li><strong>In reply to:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18016.php">Jeff Squyres: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<li><strong>Reply:</strong> <a href="18016.php">Jeff Squyres: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Chai,
<br>
Try copying the libraries to your localnode to /usr/local/ and rebuild on the slave nodes.
<br>
Just tested and it appears to work.
<br>
Rangam
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Chaitanya Krishna
<br>
Sent: Sunday, December 18, 2011 6:26 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband
<br>
<p>Hello there,
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18003.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI users] OpenMPI and valgrind"</a>
<li><strong>In reply to:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18016.php">Jeff Squyres: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<li><strong>Reply:</strong> <a href="18016.php">Jeff Squyres: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
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
