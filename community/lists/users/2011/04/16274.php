<?
$subject_val = "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 09:02:55 2011" -->
<!-- isoreceived="20110419130255" -->
<!-- sent="Tue, 19 Apr 2011 15:03:33 +0200" -->
<!-- isosent="20110419130333" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &amp;quot;btl_openib_receive_queues&amp;quot; option" -->
<!-- id="4DAD8825.5040807_at_fft.be" -->
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
<strong>Subject:</strong> [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 09:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16275.php">hi: "[OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Previous message:</strong> <a href="16273.php">nicolas.cordier_at_[hidden]: "Re: [OMPI users] g95 + open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>i would like to get your input on this:
<br>
&nbsp;&nbsp;when launching a parallel computation on 128 nodes using openib and 
<br>
the &quot;-mca btl_openib_receive_queues P,65536,256,192,128&quot; option, i 
<br>
observe a rather large resident memory consumption (2GB: 65336*256*128) 
<br>
on the process with rank 0 (and only this process) just after a call to 
<br>
MPI_Init.
<br>
<p>i'd like to know why the other processes doesn't behave the same:
<br>
- other processes located on the same nodes don't use that amount of memory
<br>
- all others processes (i.e. located on any other nodes) neither
<br>
<p>i'm using OpenMPI-1.4.2, built with gcc-4.3.4 and 
<br>
'--enable-cxx-exceptions --with-pic --with-threads=posix' options.
<br>
<p>thanks for your help,
<br>
&#233;loi
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16275.php">hi: "[OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>Previous message:</strong> <a href="16273.php">nicolas.cordier_at_[hidden]: "Re: [OMPI users] g95 + open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Reply:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
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
