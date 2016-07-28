<?
$subject_val = "Re: [OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 11:10:05 2011" -->
<!-- isoreceived="20110524151005" -->
<!-- sent="Tue, 24 May 2011 10:09:59 -0500" -->
<!-- isosent="20110524150959" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI-IO" -->
<!-- id="20110524150959.GA8746_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42DB03B3-9CF4-4ACB-AA20-B857E5F76087_at_cisco.com" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 11:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16613.php">Rob Latham: "Re: [OMPI users] reading from a file"</a>
<li><strong>Previous message:</strong> <a href="16611.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16615.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16615.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 20, 2011 at 08:14:07AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 20, 2011, at 6:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't ijlena and ijdisp be 1D arrays, not 2D arrays?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, if I convert ijlena and ijdisp to 1D arrays, I don't get the compile error (even though they're allocatable -- so allocate was a red herring, sorry).  That's all that &quot;use mpi&quot; is complaining about -- that the function signatures didn't match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; use mpi is your friend -- even if you don't use F90 constructs much.  Compile-time checking is Very Good Thing (you were effectively &quot;getting lucky&quot; by passing in the 2D arrays, I think).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is my final version.  And with this version, I see the hang when running it with the &quot;T&quot; parameter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I'm not an expert on the MPI IO stuff -- your code *looks* right to me, but I could be missing something subtle in the interpretation of MPI_FILE_SET_VIEW.  I tried running your code with MPICH 1.3.2p1 and it also hung.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob (ROMIO guy) -- can you comment this code?  Is it correct?
</span><br>
<p>There's a kind of obscure but important rule in MPI-IO: the file view
<br>
must describe monotonically non-decreasing offsets. 
<br>
<p>the T type creates a file type with the following flattened
<br>
representation (you can kind of think of the flattened representation
<br>
as a type map, except everything is in terms of bytes):
<br>
<p>(0, 32), (96, 32), (32, 64)
<br>
<p>So, 32 bytes at offset 0, 32 bytes at offset 96 and 64 bytes at offset
<br>
32. 
<br>
<p>That sort of looks like this:
<br>
|xxxx~~~~~~~~~~~~zzzz~~~~yyyy|
<br>
<p>But you need the zzzz and yyyy pieces to be swapped in file view.
<br>
<p>It's an annoying part of the standard but as you can see if you
<br>
violate that ROMIO will go off and spin in an infinite loop looking
<br>
for the next piece of I/O (which in this case was &quot;behind&quot; the current
<br>
piece).
<br>
<p>You can work around this by adjusting your memory datatype: data must
<br>
be read off of the disk in this monotonically non-decreasing order but
<br>
it can be jammed into memory any which way you want.
<br>
<p>ROMIO should be better about reporting file views that violate this
<br>
part of the standard.  We report it in a few places but clearly not
<br>
enough. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16613.php">Rob Latham: "Re: [OMPI users] reading from a file"</a>
<li><strong>Previous message:</strong> <a href="16611.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16615.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16615.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
