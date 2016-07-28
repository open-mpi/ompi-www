<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 26 17:55:09 2006" -->
<!-- isoreceived="20060726215509" -->
<!-- sent="Wed, 26 Jul 2006 17:55:06 -0400" -->
<!-- isosent="20060726215506" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI running os SMP cluster" -->
<!-- id="6130BFEC-B215-4E3C-AA92-14D69FB22EAE_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44C7D9A9.5020001_at_ufpr.br" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-26 17:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1683.php">Marcelo Stival: "[OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1681.php">Mauricio Felga Gobbi: "[OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>In reply to:</strong> <a href="1681.php">Mauricio Felga Gobbi: "[OMPI users] Open-MPI running os SMP cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>Reply:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2006, at 5:07 PM, Mauricio Felga Gobbi wrote:
<br>
<p><span class="quotelev1">&gt; Newbie question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How is the message passing of Open-MPI implemented when I have
</span><br>
<span class="quotelev1">&gt; say 4 nodes with 4 processors (SMP) each, nodes connected by a gigabit
</span><br>
<span class="quotelev1">&gt; ethernet ?... in other words, how does it manage SMP nodes when I
</span><br>
<span class="quotelev1">&gt; want to use all CPUs, but each with its own process. Does it take
</span><br>
<span class="quotelev1">&gt; any advantage of the SMP at each node?
</span><br>
<p>Someone can give you a more complete/correct answer but I'll give you  
<br>
my understanding.
<br>
<p>All communication in OpenMPI is handled via the MCA module (term?)
<br>
<p>self - process communicating with itself
<br>
sm - ... via shared memory to other processes
<br>
tcp - ... via tcp
<br>
openib - ... via Infiniband OpenIB stack
<br>
gm &amp; mx - ... via Myrinet GM/MX
<br>
mvapi - ... via Infiniband Mellanox Verbs
<br>
<p><p>If you launch your process so that four processes are on a node then  
<br>
those would use shared memory to communicate.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1683.php">Marcelo Stival: "[OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1681.php">Mauricio Felga Gobbi: "[OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>In reply to:</strong> <a href="1681.php">Mauricio Felga Gobbi: "[OMPI users] Open-MPI running os SMP cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<li><strong>Reply:</strong> <a href="1694.php">Jeff Squyres: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
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
