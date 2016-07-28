<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 27 07:38:53 2005" -->
<!-- isoreceived="20050827123853" -->
<!-- sent="Sat, 27 Aug 2005 08:38:43 -0400" -->
<!-- isosent="20050827123843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  pml vs bml vs btl" -->
<!-- id="b99a56f2a87872b678338ce72d474876_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.0508261442430.24188_at_baily.cs.ubc.ca" -->
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
<strong>Date:</strong> 2005-08-27 07:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0260.php">Ralf Wildenhues: "tar file name length limit"</a>
<li><strong>Previous message:</strong> <a href="0258.php">Jeff Squyres: "Libtool: WARNING"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Brad Penoff: "pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2005, at 5:52 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; I was just curious about the distinction between the pml, bml, and btl
</span><br>
<span class="quotelev1">&gt; layers within OpenMPI and was wondering if there was any place (other 
</span><br>
<span class="quotelev1">&gt; than
</span><br>
<span class="quotelev1">&gt; the code ;-) where I could read about the design decisions.  Any 
</span><br>
<span class="quotelev1">&gt; pointers?
</span><br>
<p>Unfortunately, not yet.
<br>
<p><span class="quotelev1">&gt; Particularly, I'm just curious about the difference between pml-bml-btl
</span><br>
<span class="quotelev1">&gt; and the old pml-ptl (as described in your TEG paper) and why changes
</span><br>
<span class="quotelev1">&gt; were made.  I'm also trying to understand the differences between this
</span><br>
<span class="quotelev1">&gt; approach and LAM's RPI as well as the device-channel distinction made 
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; MPICH2; could anyone recommend something I could read or give me a 
</span><br>
<span class="quotelev1">&gt; brief
</span><br>
<span class="quotelev1">&gt; description here to satisfy my curiosities?
</span><br>
<p>I can't speak for the MPICH2 device channel, but here's a summary of 
<br>
the rest...
<br>
<p>PML: Pretty much the same as it was described in the paper.  Its 
<br>
interface is basically MPI semantics (i.e., it sits right under 
<br>
MPI_SEND and the rest).
<br>
<p>BTL: Byte Transfer Layer; it's the next generation of PTL.  The BTL is 
<br>
much more simple than the PTL, and removes all vestigaes of any MPI 
<br>
semantics that still lived in the PTL.  It's a very simple byte mover 
<br>
layer, intended to make it quite easy to implement new network 
<br>
interfaces.
<br>
<p>BML: BTL Management Layer; this used to be part of the PML but we 
<br>
recently split it off into its own framework.  It's mainly the utility 
<br>
gorp of managing multiple BTL modules in a single process.  This was 
<br>
done because when working with the next generation of collectives, 
<br>
MPI-2 IO, and MPI-2 one sided operations, we want to have the ability 
<br>
to use the PML (which the collectives do today, for example) or to be 
<br>
able to dive right down and directly use the BTLs (i.e., cut out a 
<br>
little latency).
<br>
<p>LAM's RPI is actually sorta similar to the PML -- it implements the 
<br>
MPI-level semantics.  But nothing was broken out below the RPI -- it 
<br>
had to implement the MPI-level semantics *and* do multi-device *and* be 
<br>
the byte transfer layer.
<br>
<p>One point worth clarifying -- the word &quot;layer&quot; here is somewhat 
<br>
misleading.  These are not so much &quot;layers&quot; (meaning that you *have* to 
<br>
go through the PML and then through the BML and then through the BTL to 
<br>
send bytes) as they are logical separation of functionality.  There are 
<br>
certainly cases where the BML is bypassed, and, as I mentioned above, 
<br>
we want to investigate bypassing the PML as well.
<br>
<p>Does that help?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0260.php">Ralf Wildenhues: "tar file name length limit"</a>
<li><strong>Previous message:</strong> <a href="0258.php">Jeff Squyres: "Libtool: WARNING"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Brad Penoff: "pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
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
