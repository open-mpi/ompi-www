<?
$subject_val = "Re: [OMPI users] OpenMPI and CUDA on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 16:04:44 2012" -->
<!-- isoreceived="20120501200444" -->
<!-- sent="Tue, 1 May 2012 15:04:37 -0500" -->
<!-- isosent="20120501200437" -->
<!-- name="Trent" -->
<!-- email="tjones146_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and CUDA on cluster" -->
<!-- id="BLU157-ds7330C8D6D36B3F699C451F5290_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jhdxytn_kUAPETxLf2yc2Yfw5=grxjDbg7DoDjXPqBTEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and CUDA on cluster<br>
<strong>From:</strong> Trent (<em>tjones146_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 16:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is discussed on here:
<br>
<p>&nbsp;
<br>
<p><a href="http://forums.nvidia.com/index.php?showtopic=227854">http://forums.nvidia.com/index.php?showtopic=227854</a>
<br>
<p>&nbsp;
<br>
<p>Maybe that could be your issue too.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Rohan Deshpande
<br>
Sent: Tuesday, May 01, 2012 4:04 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] OpenMPI and CUDA on cluster
<br>
<p>&nbsp;
<br>
<p>Hi, 
<br>
<p>I am trying to execute OpenMPI and CUDA code on a cluster. The code works
<br>
fine on single machine but when I try to execute it on cluster I get error: 
<br>
<p>error while loading shared libraries: libcudart.so.4: cannot open shared
<br>
object file: No such file or directory
<br>
<p>I checked my PATH and LD_PATH and it looks ok. I have a .bashrc file which
<br>
contains following entries -
<br>
<p>export PATH=$PATH:/usr/local/lib/:/usr/local/lib/openmpi:/usr/local/
<br>
cuda/bin
<br>
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/lib:/usr/local/
<br>
lib/openmpi/:/usr/local/cuda/lib/:
<br>
<p>All the machines haves same installation of CUDA and OpenMPI. 
<br>
<p>Can anyone help me with this. 
<br>
<p>This problem is really annoying.
<br>
<p>Thanks. 
<br>
<p><p><p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19163.php">Rohan Deshpande: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
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
