<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 11:52:45 2010" -->
<!-- isoreceived="20100304165245" -->
<!-- sent="Thu, 4 Mar 2010 10:52:37 -0600 (CST)" -->
<!-- isosent="20100304165237" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="25823481.1117601267721557436.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B8EFFA7.8030208_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 11:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12248.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Yuanyuan ZHANG&quot; &lt;zhang.yuanyuan_at_[hidden]&gt; wrote:
<br>
<p><p><span class="quotelev1">&gt; For an OpenMP/MPI hybrid program, if I only want to make MPI calls
</span><br>
<span class="quotelev1">&gt; using the main thread, ie., only in between parallel sections, can I just
</span><br>
<span class="quotelev1">&gt; use SINGLE or MPI_Init? 
</span><br>
<p>If your MPI calls is NOT within OpenMP directives, MPI does not even
<br>
know you are using threads.  So calling MPI_Init is good enough.
<br>
<p>A.Chan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12248.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12250.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
