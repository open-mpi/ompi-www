<?
$subject_val = "Re: [OMPI users] launching the mpi runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:29:27 2010" -->
<!-- isoreceived="20101129192927" -->
<!-- sent="Mon, 29 Nov 2010 19:29:33 -0000" -->
<!-- isosent="20101129192933" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launching the mpi runtime" -->
<!-- id="003b01cb8ffb$c08becf0$41a3c6d0$_at_org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C094D4F58_at_MERCMBX02D.na.SAS.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] launching the mpi runtime<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14915.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14913.php">Ralph Castain: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14925.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Reply:</strong> <a href="14925.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; therefore, I guess I need to separate the GUI binary from the
</span><br>
mpi-processes 
<br>
<span class="quotelev2">&gt;&gt; binary and have the GUI process talk to the &quot;master&quot; mpi process (on
</span><br>
linux) 
<br>
<span class="quotelev2">&gt;&gt; for calc requests. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was hoping I wouldn't have to write a custom code to do that. 
</span><br>
<span class="quotelev1">&gt;MPI doesn't necessarily mean SPMD -- you can certainly have the GUI call
</span><br>
MPI_INIT and then call MPI_COMM_SPAWN to launch a &gt;different executable to
<br>
do the compute working stuff.
<br>
<p>Hi Jeff,
<br>
<p>I couldn't quite understand this last statement.
<br>
If the GUI's on windows, and the compute processes are on linux for
<br>
instance, no MPI communication is possible right.
<br>
That means, I do need to write custom code to communicate between the GUI
<br>
process (win) and the mpi master (linux)
<br>
<p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14915.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14913.php">Ralph Castain: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14925.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Reply:</strong> <a href="14925.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
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
