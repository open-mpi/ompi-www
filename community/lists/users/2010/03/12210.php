<?
$subject_val = "[OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 02:33:17 2010" -->
<!-- isoreceived="20100303073317" -->
<!-- sent="Wed, 03 Mar 2010 16:33:00 +0900" -->
<!-- isosent="20100303073300" -->
<!-- name="Yuanyuan ZHANG" -->
<!-- email="zhang.yuanyuan_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="4B8E10AC.8080506_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init() and MPI_Init_thread()<br>
<strong>From:</strong> Yuanyuan ZHANG (<em>zhang.yuanyuan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 02:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12209.php">Damien Hocking: "[OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Maybe reply:</strong> <a href="12281.php">chan_at_[hidden]: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am a beginner of MPI and a little confused with
<br>
MPI_Init_thread() function:
<br>
<p>If we use MPI_Init() or MPI_Init_thread(MPI_THREAD_SINGLE, provided)
<br>
to initialize MPI environment, when we use OpenMP
<br>
PARALLEL directive each process is forked to multiple
<br>
threads and when an MPI function is called, one thread
<br>
is used to execute the call. It seems that this
<br>
has same effect when we use MPI_Init_Thread(MPI_THREAD_FUNNELED,
<br>
provided). So what's the difference between MPI_Init() and
<br>
MPI_Init_thread(MPI_THREAD_FUNNELED, provided)?
<br>
<p>Thanks in advance,
<br>
<p>Yuanyuan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12209.php">Damien Hocking: "[OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Maybe reply:</strong> <a href="12281.php">chan_at_[hidden]: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
