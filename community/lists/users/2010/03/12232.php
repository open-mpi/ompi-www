<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 19:33:03 2010" -->
<!-- isoreceived="20100304003303" -->
<!-- sent="Thu, 04 Mar 2010 09:32:39 +0900" -->
<!-- isosent="20100304003239" -->
<!-- name="Yuanyuan ZHANG" -->
<!-- email="zhang.yuanyuan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="4B8EFFA7.8030208_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="OF6D9A70F3.3B3F5246-ON852576DB.0071A5E5-852576DB.00723C7B_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init() and MPI_Init_thread()<br>
<strong>From:</strong> Yuanyuan ZHANG (<em>zhang.yuanyuan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 19:32:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12233.php">Fernando Lemos: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12240.php">François Trahay: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12240.php">François Trahay: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12280.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>Thanks for your help, but unfortunately I am still not clear.
<br>
<p><span class="quotelev1">&gt; You are right Dave, FUNNELED allows the application to have multiple
</span><br>
<span class="quotelev1">&gt; threads but only the man thread calls MPI.
</span><br>
My understanding is that even if I use SINGLE or MPI_Init, I can still
<br>
have multiple threads if I use OpenMP PARALLEL directive, and only
<br>
the main thread makes MPI calls. Am I correct?
<br>
<p><span class="quotelev1">&gt; An OpenMP/MPI hybrid program that makes MPI calls only in between parallel
</span><br>
<span class="quotelev1">&gt; sections is usually a FUNNELED user of MPI
</span><br>
For an OpenMP/MPI hybrid program, if I only want to make MPI calls using
<br>
the main thread, ie., only in between parallel sections, can I just use
<br>
SINGLE or MPI_Init? What's the benefit of FUNNELED?
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12233.php">Fernando Lemos: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12229.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12240.php">François Trahay: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12240.php">François Trahay: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12244.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12280.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
