<?
$subject_val = "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 17:45:22 2016" -->
<!-- isoreceived="20160121224522" -->
<!-- sent="Thu, 21 Jan 2016 22:45:18 +0000" -->
<!-- isosent="20160121224518" -->
<!-- name="Kuhl, Spencer J" -->
<!-- email="spencer-kuhl_at_[hidden]" -->
<!-- subject="[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1" -->
<!-- id="BY2PR04MB712D5959D7DA41730F6BE0C8EC30_at_BY2PR04MB712.namprd04.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1<br>
<strong>From:</strong> Kuhl, Spencer J (<em>spencer-kuhl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 17:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Openmpi 1.10.2
<br>
<p>cuda.h and cuda_runtime_api.h exist in /usr/local/cuda-6.5/include
<br>
<p>using the configure trigger ./configure --with-cuda does not find cuda.h or cuda_runtime_api.h
<br>
<p>using the configure trigger ./configure --with-cuda=/usr/local/cuda-6.5 does not find cuda.h or cuda_runtime_api.h either.
<br>
<p>However, I found a stack exchange article where someone tried to symlink cuda.h and cuda_runtime_api.h to /usr/include and then it configured fine for that user.
<br>
<p>I did the same thing, created symlinks of those to header files cuda.h and cuda_runtime_api.h to /usr/include and my ./configure got past cuda.h successfully, but not past cuda_runtime_api.h
<br>
<p><p>Any suggestions?
<br>
<p><p>Thanks
<br>
<p><p>Spencer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
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
