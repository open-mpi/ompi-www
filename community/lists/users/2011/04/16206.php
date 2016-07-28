<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 11:38:37 2011" -->
<!-- isoreceived="20110412153837" -->
<!-- sent="Tue, 12 Apr 2011 09:38:28 -0600" -->
<!-- isosent="20110412153828" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc" -->
<!-- id="148A6FFA-A84A-4F1B-97D7-261C7B2A2F76_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45A45D8D2A0DBB49B1BE570660FCE2F503BF9416_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 11:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16213.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16213.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, that says that mpirun is working correctly - the problem appears to be in MPI_Init.
<br>
<p>How was OMPI configured?
<br>
<p><p>On Apr 12, 2011, at 9:24 AM, Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply and guidance. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -np 1 hostname
</span><br>
<span class="quotelev1">&gt; XXX_TUX01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -np 2 hostname
</span><br>
<span class="quotelev1">&gt; XXX_TUX01
</span><br>
<span class="quotelev1">&gt; XXX_TUX01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -np 1 ./hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -np 2 ./hello_c
</span><br>
<span class="quotelev1">&gt; (no result, terminal does not respond until ctrl+c)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let's simplify the issue as we have no idea what your codes are doing. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you run two copies of hostname, for example? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What about multiple copies of an MPI version of &quot;hello&quot; - see the examples directory in the OMPI tarball. 
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
<li><strong>Next message:</strong> <a href="16207.php">Rainer Keller: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16205.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16213.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16213.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
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
