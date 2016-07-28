<?
$subject_val = "[OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 17:02:57 2008" -->
<!-- isoreceived="20080312210257" -->
<!-- sent="Wed, 12 Mar 2008 17:01:49 -0400" -->
<!-- isosent="20080312210149" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allreduce()" -->
<!-- id="4497B096-1576-4155-9DFA-43902DD8C21E_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allreduce()<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 17:01:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5181.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5179.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5181.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5181.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have always been told that calls like MPI_Barrior() MPI_Allreduce()  
<br>
and MPI_Alltoall() should be avoided.
<br>
<p>I understand MPI_Alltoall()  as it goes n*(n-1) sends and thus grows  
<br>
very very quickly.  MPI_Barrior() is very latency sensitive and  
<br>
generally is not needed in most cases I have seen it used.
<br>
<p>But why MPI_Allreduce()?
<br>
What other functions should generally be avoided?
<br>
<p>Sorry this is kinda off topic for the list :-)
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5181.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5179.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5181.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5181.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
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
