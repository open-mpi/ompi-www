<?
$subject_val = "[OMPI users] memory consumption on rank 0 and btl_openib_receive_queues use";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 04:58:27 2010" -->
<!-- isoreceived="20101221095827" -->
<!-- sent="Tue, 21 Dec 2010 10:58:03 +0100" -->
<!-- isosent="20101221095803" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] memory consumption on rank 0 and btl_openib_receive_queues use" -->
<!-- id="4D107A2B.6050407_at_fft.be" -->
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
<strong>Subject:</strong> [OMPI users] memory consumption on rank 0 and btl_openib_receive_queues use<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 04:58:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15207.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores:	 very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15205.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15249.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15249.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>when launching a parallel computation on 128 nodes using openib and the 
<br>
&quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i observe a 
<br>
rather large memory consumption (2GB: 65336*256*128) on the process with 
<br>
rank 0 (only).
<br>
<p>this memory seems to be initialized and in use as the resident memory 
<br>
indicator matches the virtual one. at the time of observation, a call to 
<br>
MPI_Init has been done, but no communication (user side) has been done.
<br>
<p>i'd like to know why the other processes doesn't behave the same:
<br>
- other processes located on the same nodes don't use that amount of memory
<br>
- all others processes (i.e. located on any other nodes) neither
<br>
<p>i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and 
<br>
'--enable-cxx-exceptions --with-pic --with-threads=posix' options. the 
<br>
cluster is based on eight-core nodes using mellanox hca.
<br>
<p>thanks for your help,
<br>
&#233;loi
<br>
<p><p><p><p><p><p><pre>
-- 
Eloi Gaudry
Senior Product Development Engineer
Free Field Technologies
Company Website: <a href="http://www.fft.be">http://www.fft.be</a>
Direct Phone Number: +32 10 495 147
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15207.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores:	 very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15205.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15249.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15249.php">Eloi Gaudry: "Re: [OMPI users] memory consumption on rank 0 and	btl_openib_receive_queues use"</a>
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
