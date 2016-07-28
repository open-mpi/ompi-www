<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 20:41:11 2006" -->
<!-- isoreceived="20061107014111" -->
<!-- sent="Mon, 6 Nov 2006 20:40:35 -0500" -->
<!-- isosent="20061107014035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Valid INI file and MPI Details section" -->
<!-- id="8B6DA0E5-B202-4280-AD9E-3A2226983EB0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8DD2475-97E4-4A0D-A837-CF418E8A221C_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-06 20:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Ethan Mallove: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Jeff Squyres: "Re: [MTT users] make distclean option?"</a>
<li><strong>In reply to:</strong> <a href="0200.php">Josh Hursey: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2006, at 9:59 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; So if I were to want to do this &lt;in a kludgy way&gt; I would have to
</span><br>
<span class="quotelev1">&gt; have something like:
</span><br>
<span class="quotelev1">&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<span class="quotelev1">&gt; [MPI Get: trunk BTL_V1]
</span><br>
<span class="quotelev1">&gt; MPI_Details= Open MPI BTL V1
</span><br>
<span class="quotelev1">&gt; [MPI Get: trunk BTL_V2]
</span><br>
<span class="quotelev1">&gt; MPI_Details= Open MPI BTL V2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI BTL V1]
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI BTL V2]
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl mx,self
</span><br>
<span class="quotelev1">&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<p>Ew.  But yes.  :-)
<br>
<p>That being said, it would probably be relatively simple to allow the  
<br>
mpi_details field to take a comma-delimited list of section names  
<br>
(sorry, I thought I conveyed that in the last mail but I think I  
<br>
accidentally left it out).  Would that be useful to you?
<br>
<p><span class="quotelev1">&gt; Similar to what we would have to do in order to list a run with Open
</span><br>
<span class="quotelev1">&gt; MPI and LAM/MPI in the same INI file:
</span><br>
<span class="quotelev1">&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<span class="quotelev1">&gt; [MPI Get: trunk OMPI]
</span><br>
<span class="quotelev1">&gt; MPI_Details= Open MPI
</span><br>
<span class="quotelev1">&gt; [MPI Get: trunk LAM]
</span><br>
<span class="quotelev1">&gt; MPI_Details= LAM/MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI]
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; [MPI Details: LAM/MPI]
</span><br>
<span class="quotelev1">&gt; mpirun -ssi rpi tcp
</span><br>
<span class="quotelev1">&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<p>Yes.  This was the eventual intent (supporting multiple MPI's with  
<br>
the same test suites -- just providing the &quot;mpirun&quot;-like semantics  
<br>
for each MPI).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Ethan Mallove: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Jeff Squyres: "Re: [MTT users] make distclean option?"</a>
<li><strong>In reply to:</strong> <a href="0200.php">Josh Hursey: "Re: [MTT users] Valid INI file and MPI Details section"</a>
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
