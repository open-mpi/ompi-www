<?
$subject_val = "Re: [OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 11:30:05 2011" -->
<!-- isoreceived="20110524153005" -->
<!-- sent="Tue, 24 May 2011 08:31:23 -0700" -->
<!-- isosent="20110524153123" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI-IO" -->
<!-- id="1306251083.4275.4.camel_at_cedar.reachone.com" -->
<!-- inreplyto="20110524150959.GA8746_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with MPI-IO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 11:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16616.php">Marcus R. Epperson: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>Thanks for the clarification.  I had seen that point about
<br>
non-decreasing offsets in the standard and it was just beginning to dawn
<br>
on me that maybe it was my problem.  I will rethink my mapping strategy
<br>
to comply with the restriction.  Thanks again.
<br>
<p>T. Rosmond
<br>
<p><p>On Tue, 2011-05-24 at 10:09 -0500, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Fri, May 20, 2011 at 08:14:07AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On May 20, 2011, at 6:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Shouldn't ijlena and ijdisp be 1D arrays, not 2D arrays?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok, if I convert ijlena and ijdisp to 1D arrays, I don't get the compile error (even though they're allocatable -- so allocate was a red herring, sorry).  That's all that &quot;use mpi&quot; is complaining about -- that the function signatures didn't match.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; use mpi is your friend -- even if you don't use F90 constructs much.  Compile-time checking is Very Good Thing (you were effectively &quot;getting lucky&quot; by passing in the 2D arrays, I think).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Attached is my final version.  And with this version, I see the hang when running it with the &quot;T&quot; parameter.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That being said, I'm not an expert on the MPI IO stuff -- your code *looks* right to me, but I could be missing something subtle in the interpretation of MPI_FILE_SET_VIEW.  I tried running your code with MPICH 1.3.2p1 and it also hung.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rob (ROMIO guy) -- can you comment this code?  Is it correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a kind of obscure but important rule in MPI-IO: the file view
</span><br>
<span class="quotelev1">&gt; must describe monotonically non-decreasing offsets. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the T type creates a file type with the following flattened
</span><br>
<span class="quotelev1">&gt; representation (you can kind of think of the flattened representation
</span><br>
<span class="quotelev1">&gt; as a type map, except everything is in terms of bytes):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (0, 32), (96, 32), (32, 64)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, 32 bytes at offset 0, 32 bytes at offset 96 and 64 bytes at offset
</span><br>
<span class="quotelev1">&gt; 32. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That sort of looks like this:
</span><br>
<span class="quotelev1">&gt; |xxxx~~~~~~~~~~~~zzzz~~~~yyyy|
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you need the zzzz and yyyy pieces to be swapped in file view.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's an annoying part of the standard but as you can see if you
</span><br>
<span class="quotelev1">&gt; violate that ROMIO will go off and spin in an infinite loop looking
</span><br>
<span class="quotelev1">&gt; for the next piece of I/O (which in this case was &quot;behind&quot; the current
</span><br>
<span class="quotelev1">&gt; piece).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can work around this by adjusting your memory datatype: data must
</span><br>
<span class="quotelev1">&gt; be read off of the disk in this monotonically non-decreasing order but
</span><br>
<span class="quotelev1">&gt; it can be jammed into memory any which way you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ROMIO should be better about reporting file views that violate this
</span><br>
<span class="quotelev1">&gt; part of the standard.  We report it in a few places but clearly not
</span><br>
<span class="quotelev1">&gt; enough. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16616.php">Marcus R. Epperson: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16614.php">Dave Love: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16612.php">Rob Latham: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
