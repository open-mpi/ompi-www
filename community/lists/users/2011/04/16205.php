<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 11:24:50 2011" -->
<!-- isoreceived="20110412152450" -->
<!-- sent="Tue, 12 Apr 2011 11:24:42 -0400" -->
<!-- isosent="20110412152442" -->
<!-- name="Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640" -->
<!-- email="jonathan.stergiou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc" -->
<!-- id="45A45D8D2A0DBB49B1BE570660FCE2F503BF9416_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45A45D8D2A0DBB49B1BE570660FCE2F5011DE01E_at_naeapaxrez04v.nadsusea.nads.navy.mil" -->
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
<strong>From:</strong> Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640 (<em>jonathan.stergiou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 11:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for the reply and guidance. 
<br>
<p>I ran the following:
<br>
<p>$&gt; mpirun -np 1 hostname
<br>
XXX_TUX01
<br>
<p>$&gt; mpirun -np 2 hostname
<br>
XXX_TUX01
<br>
XXX_TUX01
<br>
<p>$&gt; mpirun -np 1 ./hello_c
<br>
Hello, world, I am 0 of 1. 
<br>
<p>$&gt; mpirun -np 2 ./hello_c
<br>
(no result, terminal does not respond until ctrl+c)
<br>
<p><p><p><span class="quotelev1">&gt; Let's simplify the issue as we have no idea what your codes are doing. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you run two copies of hostname, for example? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What about multiple copies of an MPI version of &quot;hello&quot; - see the examples directory in the OMPI tarball. 
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16205/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16204.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Reply:</strong> <a href="16206.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
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
