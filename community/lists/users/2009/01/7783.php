<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:06:40 2009" -->
<!-- isoreceived="20090123120640" -->
<!-- sent="Fri, 23 Jan 2009 12:06:29 +0000" -->
<!-- isosent="20090123120629" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="1232712389.7199.1198.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="995A152A-151D-4282-8F85-009B5E2AD7B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asynchronous behaviour of MPI Collectives<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Previous message:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7788.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-01-23 at 06:51 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt; &gt; This behaviour sometimes can cause some problems with a lot of
</span><br>
<span class="quotelev2">&gt; &gt; processors in the jobs.
</span><br>
<p><span class="quotelev1">&gt; Can you describe what exactly you mean?  The MPI spec specifically  
</span><br>
<span class="quotelev1">&gt; allows this behavior; OMPI made specific design choices and  
</span><br>
<span class="quotelev1">&gt; optimizations to support this behavior.  FWIW, I'd be pretty surprised  
</span><br>
<span class="quotelev1">&gt; if any optimized MPI implementation defaults to fully synchronous  
</span><br>
<span class="quotelev1">&gt; collective operations.
</span><br>
<p>As Jeff says the spec encourages the kind of behaviour you describe.  I
<br>
have however seen this causing problems in applications before and it's
<br>
not uncommon for adding barriers to improve the performance of a
<br>
application.  You might find that it's better to add barriers after
<br>
every N collectives rather than every single collective.
<br>
<p><span class="quotelev2">&gt; &gt; Is there an OpenMPI parameter to lock all process in the collective
</span><br>
<span class="quotelev2">&gt; &gt; call until is finished? Otherwise  i have to insert many MPI_Barrier
</span><br>
<span class="quotelev2">&gt; &gt; in my code and it is very tedious and strange..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you have notes, MPI_Barrier is the *only* collective operation that  
</span><br>
<span class="quotelev1">&gt; MPI guarantees to have any synchronization properties
</span><br>
<p>AllGather, AllReduce and AlltoAll also have an implicit barrier by
<br>
virtue of the dataflow required, all processes need input from all other
<br>
processes before they can return.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Previous message:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7788.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
