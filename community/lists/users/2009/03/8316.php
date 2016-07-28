<?
$subject_val = "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 10:33:37 2009" -->
<!-- isoreceived="20090305153337" -->
<!-- sent="Thu, 05 Mar 2009 09:33:31 -0600" -->
<!-- isosent="20090305153331" -->
<!-- name="Gerry Creager" -->
<!-- email="gerry.creager_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?" -->
<!-- id="49AFF0CB.7030503_at_tamu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D30873DF-DD8F-43CB-BEEF-9187CFC3CACB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?<br>
<strong>From:</strong> Gerry Creager (<em>gerry.creager_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 10:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8314.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been playing with it in a coupled atmosphere-ocean model to allow 
<br>
the two to synchronize and exchange data.  The models have differing 
<br>
levels of physics complexity and the time step requirements are 
<br>
significantly different.  To sync them up we have to know where the 
<br>
timesteps are identical, stop the process, exchange data and continue. 
<br>
We've been playing with barrier to help.
<br>
<p>gc
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 5, 2009, at 9:29 AM, Shanyuan Gao wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am doing some research on MPI barrier operations.  And I am ready
</span><br>
<span class="quotelev2">&gt;&gt; to do some performance test.
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if there are any applications that using barriers a lot.
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if there
</span><br>
<span class="quotelev2">&gt;&gt; is any.  Any comments are welcomed.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't remember who originally said it, but I've repeated the 
</span><br>
<span class="quotelev1">&gt; statement: any MPI program that relies on a barrier for correctness is 
</span><br>
<span class="quotelev1">&gt; an incorrect MPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's anecdotal evidence that throwing in a barrier every once in a 
</span><br>
<span class="quotelev1">&gt; while can help reduce unexpected messages (and other things), and 
</span><br>
<span class="quotelev1">&gt; therefore improve performance a bit.  But that's very application 
</span><br>
<span class="quotelev1">&gt; dependent, and usually not frequent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why do you want to do a barrier?  Particularly one that sounds like it 
</span><br>
<span class="quotelev1">&gt; might be in your critical performance path?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Gerry Creager -- gerry.creager_at_[hidden]
Texas Mesonet -- AATLT, Texas A&amp;M University	
Cell: 979.229.5301 Office: 979.458.4020 FAX: 979.862.3983
Office: 1700 Research Parkway Ste 160, TAMU, College Station, TX 77843
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8315.php">Ganesh: "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8314.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
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
