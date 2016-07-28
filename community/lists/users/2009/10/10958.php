<?
$subject_val = "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 24 21:00:24 2009" -->
<!-- isoreceived="20091025010024" -->
<!-- sent="Sat, 24 Oct 2009 19:00:11 -0600" -->
<!-- isosent="20091025010011" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_INIT failure while building coinor-ipopt" -->
<!-- id="4AE3A31B.3070109_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091024210106.GD9563_at_connexer.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_INIT failure while building coinor-ipopt<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-24 21:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10959.php">Roberto C. Sánchez: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Previous message:</strong> <a href="10957.php">Roberto C. S&#225;nchez: "[OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>In reply to:</strong> <a href="10957.php">Roberto C. S&#225;nchez: "[OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10959.php">Roberto C. Sánchez: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Reply:</strong> <a href="10959.php">Roberto C. Sánchez: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roberto,
<br>
<p>Ipopt doesn't use MPI.  It can use the MUMPS parallel linear solver in 
<br>
sequential mode, but nothing is set up in IPOPT to use the parallel MPI 
<br>
version.  For sequential mode, MUMPS dummies out the MPI headers.  The 
<br>
dummy headers are part of the MUMPS distribution in the libseq 
<br>
directory.  You're probably getting the OpenMPI headers instead of the 
<br>
dummy ones.  I can't open your bz2, my machine tells me it's borked, so 
<br>
I can't read your log and see exactly where it's going wrong.
<br>
<p>Damien
<br>
<p>Roberto C. S&#225;nchez wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am in the process of packaging coinor-ipopt for Debian.  The build
</span><br>
<span class="quotelev1">&gt; process fails during the 'make test' phase.  The error message referense
</span><br>
<span class="quotelev1">&gt; otre_init, ompi_mpi_init and MPI_INIT.  I have already asked on the
</span><br>
<span class="quotelev1">&gt; ipopt mailing list [0].  However, that query has not received any
</span><br>
<span class="quotelev1">&gt; replies.  I thought that perhaps I would ask here and see if anyone on
</span><br>
<span class="quotelev1">&gt; this list could offer some insight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the output of Debian package build 
</span><br>
<span class="quotelev1">&gt; - the specific output from the 'make test' step
</span><br>
<span class="quotelev1">&gt; - the output of 'ompi_info --all'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any pointers would be much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Roberto
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0] <a href="http://list.coin-or.org/pipermail/ipopt/2009-October/001730.html">http://list.coin-or.org/pipermail/ipopt/2009-October/001730.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="10959.php">Roberto C. Sánchez: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Previous message:</strong> <a href="10957.php">Roberto C. S&#225;nchez: "[OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>In reply to:</strong> <a href="10957.php">Roberto C. S&#225;nchez: "[OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10959.php">Roberto C. Sánchez: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
<li><strong>Reply:</strong> <a href="10959.php">Roberto C. Sánchez: "Re: [OMPI users] MPI_INIT failure while building coinor-ipopt"</a>
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
