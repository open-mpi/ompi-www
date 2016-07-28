<?
$subject_val = "[OMPI users] OpenMPI and CUDA on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 05:03:51 2012" -->
<!-- isoreceived="20120501090351" -->
<!-- sent="Tue, 1 May 2012 17:03:47 +0800" -->
<!-- isosent="20120501090347" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and CUDA on cluster" -->
<!-- id="CAFAE9jhdxytn_kUAPETxLf2yc2Yfw5=grxjDbg7DoDjXPqBTEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI and CUDA on cluster<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 05:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19157.php">Andreas Sch&#228;fer: "Re: [OMPI users] Serializing objects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19162.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19157.php">Andreas Sch&#228;fer: "Re: [OMPI users] Serializing objects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Reply:</strong> <a href="19162.php">Trent: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
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
