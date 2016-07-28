<?
$subject_val = "Re: [OMPI users] Application in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 12:56:16 2011" -->
<!-- isoreceived="20111020165616" -->
<!-- sent="Thu, 20 Oct 2011 10:56:08 -0600" -->
<!-- isosent="20111020165608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application in a cluster" -->
<!-- id="03C59195-2E62-4F45-932C-3D7054E9454E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACcUr4ci8=a6d3eywUe1J8X9bZDHvEamwwom_OWkZnwXHDetLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application in a cluster<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 12:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17587.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Previous message:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17588.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2011, at 10:33 AM, Jorge Jaramillo wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for all your suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, indeed what I'm trying to do is execute a serial program. All the documentation you mention was pretty useful.
</span><br>
<span class="quotelev1">&gt; I have another question, if mpirun launches several copies of the program on the different hosts, does it mean that I must have a copy of the program on all the nodes, because I'm using NFS to share the location were my program is installed and it seems to work fine when I execute mpirun with simple scripts.
</span><br>
<p>Yes - we don't move executables, so they have to be available on every node. Glad it works for you!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jorge. _______________________________________________
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
<li><strong>Next message:</strong> <a href="17587.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Previous message:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17588.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
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
