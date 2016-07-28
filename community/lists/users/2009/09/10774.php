<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn query";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 09:39:31 2009" -->
<!-- isoreceived="20090926133931" -->
<!-- sent="Sat, 26 Sep 2009 09:39:26 -0400" -->
<!-- isosent="20090926133926" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn query" -->
<!-- id="85313B94-6E4E-4E9D-ABC3-34AF675A1E63_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="001e01ca3b7f$1b0c5980$51250c80$_at_ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn query<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 09:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10775.php">Jeff Squyres: "Re: [OMPI users] MPI Parent-Child process query"</a>
<li><strong>Previous message:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>In reply to:</strong> <a href="10720.php">Blesson Varghese: "[OMPI users] MPI_Comm_spawn query"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2009, at 8:20 AM, Blesson Varghese wrote:
<br>
<p><span class="quotelev1">&gt; I am fairly new to MPI.I have a few queries regarding spawning  
</span><br>
<span class="quotelev1">&gt; processes that I am listing below:
</span><br>
<span class="quotelev1">&gt; a.       How can processes send data to a spawned process?
</span><br>
<p>See the descriptions for MPI_COMM_SPAWN; you get an inter-communicator  
<br>
back from MPI_COMM_SPAWN that connects the parents and children  
<br>
processes.  Hence, you can use &quot;normal&quot; MPI communication calls on  
<br>
this intercommunicator to pass information between parents and children.
<br>
<p><span class="quotelev1">&gt; b.      Can any process (that is not a parent process) send data to  
</span><br>
<span class="quotelev1">&gt; a spawned process?
</span><br>
<p>Not directly, no.  But you have two options:
<br>
<p>1 use MPI's connect/accept methodology to establish new connection  
<br>
(somewhat analogous to socket connect/accept methodology).
<br>
2 creatively merge successive intercommunicators until you have an  
<br>
overlapping set of processes that contain both the processes that you  
<br>
want to be able to communicate
<br>
<p>FWIW, I imagine that #1 would likely be easier.  See OMPI's  
<br>
MPI_Comm_spawn(3) and MPI_Comm_connect(3) man pages for a list of  
<br>
limitations, though.
<br>
<p><span class="quotelev1">&gt; c.       Can MPI_Send or MPI_Recv be used to communicate with a  
</span><br>
<span class="quotelev1">&gt; spawned process?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; d.      Would it be possible in MPI to tell which processor of a  
</span><br>
<span class="quotelev1">&gt; cluster a process should be spawned?
</span><br>
<p>Look at Open MPI's MPI_Comm_spawn(3) man page for the options that we  
<br>
allow passing through the MPI_Info argument.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10775.php">Jeff Squyres: "Re: [OMPI users] MPI Parent-Child process query"</a>
<li><strong>Previous message:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>In reply to:</strong> <a href="10720.php">Blesson Varghese: "[OMPI users] MPI_Comm_spawn query"</a>
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
