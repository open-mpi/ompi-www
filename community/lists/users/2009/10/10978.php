<?
$subject_val = "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 17:47:27 2009" -->
<!-- isoreceived="20091026214727" -->
<!-- sent="Mon, 26 Oct 2009 17:47:22 -0400" -->
<!-- isosent="20091026214722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?" -->
<!-- id="9532CD81-C063-43DB-A924-C133E4E578AE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7DB8E8DD-E657-4A50-BAB2-7AC42D6E51CE_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 17:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10979.php">Luigi Scorzato: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
<li><strong>Previous message:</strong> <a href="10977.php">Jeff Squyres: "Re: [OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>In reply to:</strong> <a href="10953.php">Luigi Scorzato: "[OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10979.php">Luigi Scorzato: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The short answer is that OMPI currently does not remap ranks during  
<br>
MPI_CART_CREATE, even if you pass reorder==1.  :-\
<br>
<p>The reason is because we've had very little requests to do so.
<br>
<p>However, we do have the good foresight (if I do say so myself ;-) ) to  
<br>
make the MPI topology system be a plugin in Open MPI.  The only plugin  
<br>
for this system is currently the &quot;do nothing&quot; plugin, but it would  
<br>
*not* be difficult to write one that actually did something meaningful  
<br>
in your torus.
<br>
<p>If you're interested, I'd be happy to explain how to do it (and we  
<br>
should probably move to the devel list).  OMPI doesn't require too  
<br>
much framework code; I would guess that the majority of the code would  
<br>
actually be implementing whatever algorithms you wanted for your  
<br>
torus.  Heck, you could even write a blind-and-dumb algorithm that  
<br>
just looks up tables in files based on hostnames in your torus.
<br>
<p><p><p>On Oct 23, 2009, at 7:54 AM, Luigi Scorzato wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The short question is: How can I tell (open-)mpi about the HW
</span><br>
<span class="quotelev1">&gt; topology of my system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The longer form is the following, I have a cluster which is
</span><br>
<span class="quotelev1">&gt; physically connected in a 3D torus topology (say 5x3x2). The nodes
</span><br>
<span class="quotelev1">&gt; have names: node_000, node_001, ... node_421. I can use a rankfile to
</span><br>
<span class="quotelev1">&gt; assign a fix MPI rank to each node. E.g:
</span><br>
<span class="quotelev1">&gt; rank 0 = node_000
</span><br>
<span class="quotelev1">&gt; rank 1 = node_001
</span><br>
<span class="quotelev1">&gt; rank 2 = node_010
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; However, in general, nothing forces e.g. MPI_Cart_create() to build
</span><br>
<span class="quotelev1">&gt; the 3D grid I want i.e. coord[node_ijk] =(i,j,k) rather than, say
</span><br>
<span class="quotelev1">&gt; coord[node_000] =(0,0,0), coord[node_001] =(1,0,0), coord[node_010] =
</span><br>
<span class="quotelev1">&gt; (2,0,0) ..., which would be wrongly mapped to the physical topology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I bind at least MPI_Cart_create() to the topology I want? Of
</span><br>
<span class="quotelev1">&gt; course it would be nice to use an MPI-compliant procedure, if it
</span><br>
<span class="quotelev1">&gt; exists. If not, I am also happy with something that works at least
</span><br>
<span class="quotelev1">&gt; with some version of open-mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: For some reason too long to explain I cannot rely on a system
</span><br>
<span class="quotelev1">&gt; that tests the the connections at the beginning. But the is no reason
</span><br>
<span class="quotelev1">&gt; to do these tests, since I know my topology exactly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help!
</span><br>
<span class="quotelev1">&gt; Luigi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10979.php">Luigi Scorzato: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
<li><strong>Previous message:</strong> <a href="10977.php">Jeff Squyres: "Re: [OMPI users] Fwd: installation with two different compilers"</a>
<li><strong>In reply to:</strong> <a href="10953.php">Luigi Scorzato: "[OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10979.php">Luigi Scorzato: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
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
