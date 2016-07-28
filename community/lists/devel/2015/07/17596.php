<?
$subject_val = "Re: [OMPI devel] channel initialization failed MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  5 23:22:15 2015" -->
<!-- isoreceived="20150706032215" -->
<!-- sent="Sun, 5 Jul 2015 20:22:11 -0700" -->
<!-- isosent="20150706032211" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] channel initialization failed MPI" -->
<!-- id="123B7CB6-B98A-4BA2-B80D-43BAF8217325_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAK5mtezM_t4rLm6NRJjT6p1-9X1jz+mf9x40zud+-w00NtAAVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] channel initialization failed MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-05 23:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17595.php">Victor Rodriguez: "[OMPI devel] channel initialization failed MPI"</a>
<li><strong>In reply to:</strong> <a href="17595.php">Victor Rodriguez: "[OMPI devel] channel initialization failed MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;that looks like MPICH, not OMPI - did you mix the two?
<br>
<p><p><span class="quotelev1">&gt; On Jul 5, 2015, at 8:16 PM, Victor Rodriguez &lt;vm.rod25_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing the following issue on my MPI build from source code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (the only change in config was disable fortran )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is more than welcome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_intel-corei7-64:~/test# mpirun -n 2 ./mpi_hello
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Init: Other MPI error, error stack:
</span><br>
<span class="quotelev1">&gt; MPIR_Init_thread(498)..............:
</span><br>
<span class="quotelev1">&gt; MPID_Init(187).....................: channel initialization failed
</span><br>
<span class="quotelev1">&gt; MPIDI_CH3_Init(89).................:
</span><br>
<span class="quotelev1">&gt; MPID_nem_init(320).................:
</span><br>
<span class="quotelev1">&gt; MPID_nem_tcp_init(171).............:
</span><br>
<span class="quotelev1">&gt; MPID_nem_tcp_get_business_card(418):
</span><br>
<span class="quotelev1">&gt; MPID_nem_tcp_init(377).............: gethostbyname failed,
</span><br>
<span class="quotelev1">&gt; intel-corei7-64 (errno 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================================================================================
</span><br>
<span class="quotelev1">&gt; =   BAD TERMINATION OF ONE OF YOUR APPLICATION PROCESSES
</span><br>
<span class="quotelev1">&gt; =   PID 483 RUNNING AT intel-corei7-64
</span><br>
<span class="quotelev1">&gt; =   EXIT CODE: 1
</span><br>
<span class="quotelev1">&gt; =   CLEANING UP REMAINING PROCESSES
</span><br>
<span class="quotelev1">&gt; =   YOU CAN IGNORE THE BELOW CLEANUP MESSAGES
</span><br>
<span class="quotelev1">&gt; ===================================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Source code :
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/VictorRodriguez/parallel/blob/master/mpi/hello.c">https://github.com/VictorRodriguez/parallel/blob/master/mpi/hello.c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Victor Rodriguez
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17595.php">http://www.open-mpi.org/community/lists/devel/2015/07/17595.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17595.php">Victor Rodriguez: "[OMPI devel] channel initialization failed MPI"</a>
<li><strong>In reply to:</strong> <a href="17595.php">Victor Rodriguez: "[OMPI devel] channel initialization failed MPI"</a>
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
