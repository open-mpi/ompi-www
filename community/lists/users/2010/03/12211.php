<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 02:59:32 2010" -->
<!-- isoreceived="20100303075932" -->
<!-- sent="Wed, 03 Mar 2010 18:59:22 +1100" -->
<!-- isosent="20100303075922" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="1267603162.5836.130.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4B8E10AC.8080506_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 02:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak for the developers.  However, I think it's to do with the
<br>
library internals.
<br>
<p><p><p><span class="quotelev1">&gt;From here: <a href="http://www.mpi-forum.org/docs/mpi-20-html/node165.htm">http://www.mpi-forum.org/docs/mpi-20-html/node165.htm</a>
</span><br>
<p>&quot;Advice to implementors. 
<br>
<p>&quot;If provided is not MPI_THREAD_SINGLE then the MPI library should not
<br>
invoke C/ C++/Fortran library calls that are not thread safe, e.g., in
<br>
an environment where malloc is not thread safe, then malloc should not
<br>
be used by the MPI library. 
<br>
<p>&quot;Some implementors may want to use different MPI libraries for different
<br>
levels of thread support. They can do so using dynamic linking and
<br>
selecting which library will be linked when MPI_INIT_THREAD is invoked.
<br>
If this is not possible, then optimizations for lower levels of thread
<br>
support will occur only when the level of thread support required is
<br>
specified at link time. ( End of advice to implementors.)&quot;
<br>
<p><p><p>On Wed, 2010-03-03 at 16:33 +0900, Yuanyuan ZHANG wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a beginner of MPI and a little confused with
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread() function:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we use MPI_Init() or MPI_Init_thread(MPI_THREAD_SINGLE, provided)
</span><br>
<span class="quotelev1">&gt; to initialize MPI environment, when we use OpenMP
</span><br>
<span class="quotelev1">&gt; PARALLEL directive each process is forked to multiple
</span><br>
<span class="quotelev1">&gt; threads and when an MPI function is called, one thread
</span><br>
<span class="quotelev1">&gt; is used to execute the call. It seems that this
</span><br>
<span class="quotelev1">&gt; has same effect when we use MPI_Init_Thread(MPI_THREAD_FUNNELED,
</span><br>
<span class="quotelev1">&gt; provided). So what's the difference between MPI_Init() and
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread(MPI_THREAD_FUNNELED, provided)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
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
<li><strong>Next message:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12210.php">Yuanyuan ZHANG: "[OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
