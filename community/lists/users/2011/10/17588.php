<?
$subject_val = "Re: [OMPI users] Application in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 14:03:27 2011" -->
<!-- isoreceived="20111020180327" -->
<!-- sent="Thu, 20 Oct 2011 14:03:10 -0400" -->
<!-- isosent="20111020180310" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application in a cluster" -->
<!-- id="4EA0625E.70903_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 14:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Previous message:</strong> <a href="17587.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>In reply to:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jorge
<br>
<p>Aha!  A serial executable.  I guessed it right!  :)
<br>
But Ralph certainly came up with the simpler solution: use mpirun.
<br>
<p>As for the other question:
<br>
<p>If you are using Torque/PBS to launch the job,
<br>
put this line in your PBS script:
<br>
<p>cd $PBS_O_WORKDIR
<br>
<p>which will put you in the work directory on all nodes
<br>
(assuming that directory is NFS mounted as you said).
<br>
<p>If you are launching mpirun directly, use the -path option,
<br>
to specify the full path of your executable.
<br>
<p>Actually, the best thing is to read carefully 'man mpirun',
<br>
to get the details right.
<br>
[Make sure you're reading the *OpenMPI mpirun* man page,
<br>
not from another MPI flavor.]
<br>
<p>Good luck!
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>Jorge Jaramillo wrote:
<br>
<span class="quotelev1">&gt; Thanks for all your suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, indeed what I'm trying to do is execute a serial program. All the 
</span><br>
<span class="quotelev1">&gt; documentation you mention was pretty useful.
</span><br>
<span class="quotelev1">&gt; I have another question, if mpirun launches several copies of the 
</span><br>
<span class="quotelev1">&gt; program on the different hosts, does it mean that I must have a copy of 
</span><br>
<span class="quotelev1">&gt; the program on all the nodes, because I'm using NFS to share the 
</span><br>
<span class="quotelev1">&gt; location were my program is installed and it seems to work fine when I 
</span><br>
<span class="quotelev1">&gt; execute mpirun with simple scripts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jorge.
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
<li><strong>Next message:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Previous message:</strong> <a href="17587.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>In reply to:</strong> <a href="17585.php">Jorge Jaramillo: "Re: [OMPI users] Application in a cluster"</a>
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
