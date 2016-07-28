<?
$subject_val = "[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:42:34 2014" -->
<!-- isoreceived="20141003144234" -->
<!-- sent="Fri, 3 Oct 2014 09:42:28 -0500" -->
<!-- isosent="20141003144228" -->
<!-- name="Carl Ponder" -->
<!-- email="cponder_at_[hidden]" -->
<!-- subject="[OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK" -->
<!-- id="542EB5D4.1080904_at_nvidia.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK<br>
<strong>From:</strong> Carl Ponder (<em>cponder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/04/0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>Reply:</strong> <a href="0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a GPUDirect test-case that appears to work correctly with OpenMPI 
<br>
1.8.2 and CUDA 6.5.
<br>
It uses MPI_BCAST plus MPI_PACK &amp; MPI_UNPACK with GPU-located data, 
<br>
programmed in OpenACC with PGI 14.9.
<br>
The OpenMPI FAQ entry
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=all#mpi-cuda-support">http://www.open-mpi.org/faq/?category=all#mpi-cuda-support</a>
<br>
<p>states that
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Here is the list of APIs that currently support sending and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;receiving CUDA device memory.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/MPI_Send, MPI_Bsend, MPI_Ssend, MPI_Rsend, MPI_Isend, MPI_Ibsend,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Issend, MPI_Irsend, MPI_Send_init, MPI_Bsend_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ssend_init, MPI_Rsend_init, MPI_Recv, MPI_Irecv, MPI_Recv_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv, MPI_Bcast, MPI_Gather, MPI_Gatherv, MPI_Allgather,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgatherv, MPI_Alltoall, MPI_Alltoallv, MPI_Scatter, MPI_Scatterv/
<br>
<p>implying that the MPI_PACK &amp; MPI_UNPACK aren't supported, but the FAQ 
<br>
also only references OpenMPI up to 1.7.4 and CUDA up to 6.0.
<br>
Are these MPI_PACK &amp; MPI_UNPACK supported with the OpenMPI 1.8.* releases?
<br>
Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl Ponder
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HPC Applications Performance
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NVIDIA Developer Technology
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/docs/att-0210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/04/0209.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] One possible typo in MPI_Alltoallv documentation on mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<li><strong>Reply:</strong> <a href="0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
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
