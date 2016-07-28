<?
$subject_val = "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 09:58:21 2010" -->
<!-- isoreceived="20100602135821" -->
<!-- sent="Wed, 2 Jun 2010 15:58:07 +0200" -->
<!-- isosent="20100602135807" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?" -->
<!-- id="201006021558.07337.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 09:58:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Maybe in reply to:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Reply:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot the list...
<br>
<p>---------
<br>
<p>Le Wednesday 02 June 2010 14:59:46, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; On Jun 2, 2010, at 8:03 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I built it with gcc 4.2.1, though - I know we have a problem with shared
</span><br>
<span class="quotelev2">&gt; &gt; memory hanging when built with gcc 4.4.x, so I wonder if the issue here
</span><br>
<span class="quotelev2">&gt; &gt; is your use of gcc 4.5?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not yet clear that we have a shared memory problem with gcc 4.4.x --
</span><br>
<span class="quotelev1">&gt; IBM and Cisco have been unable to replicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you try running this again with -mca btl ^sm?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would be good data.  Can you also send exactly how you're configuring
</span><br>
<span class="quotelev1">&gt; and building OMPI?
</span><br>
<p>I copy the output of my last mail at the end of this one, to avoid searching.
<br>
Here is the line that I used to configure OMPI:
<br>
<p>$&gt;./configure --prefix=/home/p10015/openmpi --with-threads=posix --enable-mpi-threads --enable-progress-threads --enable-mpirun-prefix-by-default --enable-sparse-groups
<br>
<p><span class="quotelev1">&gt; I have built OMPI 1.4.2 with gcc 4.4.1 and 4.5 and have been unable to
</span><br>
<span class="quotelev1">&gt; replicate either the shared memory problem or this problem.  :-(
</span><br>
<p>:(
<br>
<p><span class="quotelev1">&gt; That being said, I'm running on an Intel 5580 (Nehalem EP); I do not have
</span><br>
<span class="quotelev1">&gt; any AMD machines to test on.
</span><br>
<p>I'll see if it's possible to give you an ssh access.
<br>
<p>Cheers.
<br>
<p>.Yves.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Maybe in reply to:</strong> <a href="13198.php">Yves Caniou: "[OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Reply:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
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
