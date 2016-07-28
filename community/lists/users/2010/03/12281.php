<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 11:40:18 2010" -->
<!-- isoreceived="20100309164018" -->
<!-- sent="Tue, 9 Mar 2010 10:40:10 -0600 (CST)" -->
<!-- isosent="20100309164010" -->
<!-- name="chan_at_[hidden]" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="13550152.1228181268152810195.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="22887738.1228111268152748800.JavaMail.root_at_zimbra" -->
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
<strong>From:</strong> <a href="mailto:chan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Init()%20and%20MPI_Init_thread()"><em>chan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-09 11:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12282.php">Lasse Kliemann: "[OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12280.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Maybe in reply to:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using funneled will make your code more portable in the long run
<br>
as it is guaranteed by the MPI standard.  Using single, i.e. MPI_Init,
<br>
is working now for typical OpenMP+MPI program that MPI calls are outside
<br>
OpenMP sections.  But as MPI implementations implement more performance
<br>
optimized feature that distingushes single and funneled, then you need
<br>
to use funneled to use those implementations. 
<br>
<p>A.Chan
<br>
&nbsp;&nbsp;
<br>
----- &quot;Yuanyuan ZHANG&quot; &lt;zhang.yuanyuan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can understand the difference between SINGLE and FUNNELED, and why
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; should use FUNNELED now. Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yuanyuan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12282.php">Lasse Kliemann: "[OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12280.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Maybe in reply to:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
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
