<?
$subject_val = "Re: [OMPI users] A simple mpi code hangs at MPI_Init?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 16:56:27 2008" -->
<!-- isoreceived="20080507205627" -->
<!-- sent="Wed, 7 May 2008 16:56:18 -0400" -->
<!-- isosent="20080507205618" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A simple mpi code hangs at MPI_Init?" -->
<!-- id="AA21FAFF-71DE-4F47-96FF-880C7A74C73A_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="33f36270805071247u1368d079q2431dcbd04353000_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] A simple mpi code hangs at MPI_Init?<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 16:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5629.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5627.php">Tim Mattox: "Re: [OMPI users] crash with mpiBLAST"</a>
<li><strong>In reply to:</strong> <a href="5626.php">Sang Chul Choi: "[OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5632.php">Barry Rountree: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>There is no mpd in Open MPI. mpirun will spawn everything needed for  
<br>
you. Make sure all your processes call MPI_Init, and not only the root  
<br>
process. If you mpirun -np 10, 10 processes need to go trough MPI_Init  
<br>
to allow for further progression.
<br>
<p>If this does not solve you problem, please give the Open MPI version  
<br>
(ompi_info gives it) and check your installation does not collide with  
<br>
another installation of MPICH or LAM.
<br>
<p>Le 7 mai 08 &#224; 15:47, Sang Chul Choi a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to run a hello world example of mpi code. It just hangs at
</span><br>
<span class="quotelev1">&gt; MPI_Init. My machine is installed with Ubuntu linux and I install some
</span><br>
<span class="quotelev1">&gt; package of open mpi. Compiling was okay, but running the code hangs at
</span><br>
<span class="quotelev1">&gt; MPI_Init. Is there any specific things that I should do before running
</span><br>
<span class="quotelev1">&gt; mpi code such as &quot;mpd&quot; setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will appreciate any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sang Chul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt; Live, Learn, and Love!
</span><br>
<span class="quotelev1">&gt; Sang Chul is at Piscataway.
</span><br>
<span class="quotelev1">&gt; Work: +1-732-445-2681
</span><br>
<span class="quotelev1">&gt; ===============================
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
<li><strong>Next message:</strong> <a href="5629.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5627.php">Tim Mattox: "Re: [OMPI users] crash with mpiBLAST"</a>
<li><strong>In reply to:</strong> <a href="5626.php">Sang Chul Choi: "[OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5632.php">Barry Rountree: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
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
