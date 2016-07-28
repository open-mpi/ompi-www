<?
$subject_val = "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 17:36:05 2010" -->
<!-- isoreceived="20100106223605" -->
<!-- sent="Wed, 6 Jan 2010 16:35:55 -0600" -->
<!-- isosent="20100106223555" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking MPI_File_iwrite() does block?" -->
<!-- id="20100106223555.GC28567_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C7303F68.275B%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblocking MPI_File_iwrite() does block?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-06 17:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 23, 2009 at 01:32:24PM -0700, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; On 11/23/09 8:42 AM, &quot;Rob Latham&quot; &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it OK to mention MPICH2 on this list?  I did prototype some MPI
</span><br>
<span class="quotelev2">&gt; &gt; extensions that allowed ROMIO to do true async I/O  (at least as far
</span><br>
<span class="quotelev2">&gt; &gt; as the underlying operating system supports it).   If you really need
</span><br>
<span class="quotelev2">&gt; &gt; to experiment with async I/O, I'd love to hear your experiences.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Funny you should mention that code.  I was looking into a compile error in
</span><br>
<span class="quotelev1">&gt; OMPI on a strange platform last week (while travelling to SC, of course) and
</span><br>
<span class="quotelev1">&gt; was realizing that I had no idea what I was doing when I integrated ROMIO
</span><br>
<span class="quotelev1">&gt; into Open MPI many years ago, did it horribly, and want to clean it up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, you're talking about all the MPIX_Grequest interface used in ROMIO,
</span><br>
<span class="quotelev1">&gt; right? 
</span><br>
<p>exactly
<br>
<p><span class="quotelev1">&gt; Do you have documentation of that API anywhere (even a header file
</span><br>
<span class="quotelev1">&gt; with some comments)?  
</span><br>
<p>There's the EuroPVM/MPI paper:
<br>
<a href="http://www.mcs.anl.gov/~robl/papers/latham_grequest-enhance.pdf">http://www.mcs.anl.gov/~robl/papers/latham_grequest-enhance.pdf</a>
<br>
<p><span class="quotelev1">&gt; I'm going to try to clean up how we integrate into ROMIO during the
</span><br>
<span class="quotelev1">&gt; holiday break, and it might make sense to implement the extended API
</span><br>
<span class="quotelev1">&gt; so that we can give some async I/O behavior as well.  From looking
</span><br>
<span class="quotelev1">&gt; at the ROMIO usage, I think OMPI has all the internal pieces to put
</span><br>
<span class="quotelev1">&gt; together the API pretty quickly, so it might be an option.  Any
</span><br>
<span class="quotelev1">&gt; thoughts you have on the subject would be greatly appreciated.
</span><br>
<p>I'm sorry I did not respond to this message earlier.  I only check my 
<br>
openmpi folder every few weeks. 
<br>
<p>When we implemented this in MPICH2 we added additional checks in our
<br>
{test,wait} {,any,all,some} routines and invoked the progress function
<br>
at those times.  It resulted in some less-than-efficient code. 
<br>
<p>==rob
<br>
<p><p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11705.php">Peter Kjellstrom: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11258.php">Barrett, Brian W: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11288.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
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
