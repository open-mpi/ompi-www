<?
$subject_val = "Re: [OMPI users] Setting bind-to none as default via environment?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 12:51:37 2015" -->
<!-- isoreceived="20151105175137" -->
<!-- sent="Thu, 05 Nov 2015 17:51:33 +0000" -->
<!-- isosent="20151105175133" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting bind-to none as default via environment?" -->
<!-- id="8737wknxlm.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAbhqc4pBEWovbkUz1exwEaAOCLNVduFmCRhRU7onDxa=5f8VA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting bind-to none as default via environment?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 12:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nick Papior &lt;nickpapior_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; This is what I do to successfully get the best performance for my
</span><br>
<span class="quotelev1">&gt; application using OpenMP and OpenMPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note this is for 8 cores per socket)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -x OMP_PROC_BIND=true --report-bindings -x OMP_NUM_THREADS=8
</span><br>
<span class="quotelev1">&gt; --map-by ppr:1:socket:pe=8 &lt;exec&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It assigns 8 cores per MPI processor separated by sockets, each MPI
</span><br>
<span class="quotelev1">&gt; processor gets 8 threads and I bind the OpenMP threads for affinity. This
</span><br>
<span class="quotelev1">&gt; is for OpenMPI &gt;= 1.8.
</span><br>
<p>I assume there's a good reason, since it's the default, but what makes
<br>
binding to sockets better than to a lower level (if there is a relevant
<br>
lower level)?  The latency and bandwidth may be significantly different
<br>
between different localities on the same socket.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="28004.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27983.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Reply:</strong> <a href="28006.php">Nick Papior: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
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
