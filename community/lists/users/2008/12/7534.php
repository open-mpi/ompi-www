<?
$subject_val = "Re: [OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 14 13:40:03 2008" -->
<!-- isoreceived="20081214184003" -->
<!-- sent="Sun, 14 Dec 2008 13:39:58 -0500" -->
<!-- isosent="20081214183958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind Warning" -->
<!-- id="6E57BA0D-D0D8-4531-AB16-FC3EE4102D1B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0812140521o7ba7ffdcnfba983066094a458_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind Warning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-14 13:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7535.php">Chong Su: "Re: [OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<li><strong>Previous message:</strong> <a href="7533.php">Gabriele Fatigati: "[OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7533.php">Gabriele Fatigati: "[OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7538.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7538.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2008, at 8:21 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; i have a strage problems with OpenMPI 1.2.5 Intel Compiled when i
</span><br>
<span class="quotelev1">&gt; debug my code under Valgrind 3.3. In a very simple ping-pong MPI
</span><br>
<span class="quotelev1">&gt; application, i retrieve strange warnings about MPI Communications,
</span><br>
<span class="quotelev1">&gt; like MPI_Send,MPI_Recv. Valgrind tells me that there are uninitialized
</span><br>
<span class="quotelev1">&gt; values in send/recv buffers, but there are initialized, i'm absolutely
</span><br>
<span class="quotelev1">&gt; sure!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There warnings are detected when my application runs over Infiniband
</span><br>
<span class="quotelev1">&gt; net,
</span><br>
<p>This is because IB uses memory that does not come from the memory  
<br>
allocator that Valgrind is aware of (e.g., it may be memory that was  
<br>
allocated by the kernel itself).  Hence, since Valgrind is unaware of  
<br>
the memory, it thinks that its contents are undefined.  As such, it's  
<br>
quite likely that you're seeing false positives.
<br>
<p>The memchecker support in the upcoming v1.3 series made quite a few  
<br>
advancements in the area of valgrind memory checking, and recent  
<br>
versions of libibverbs allow you to compile in valgrind extensions  
<br>
that tell valgrind &quot;this memory is ok&quot; (which prevents these false  
<br>
positives).  I'm pretty sure that the OFED install does not enable  
<br>
these libibverbs valgrind extensions; you will likely need your own  
<br>
installation of libibverbs and your verbs plugin (libmthca for you, I  
<br>
think...?) that explicitly has the valgrind extensions enabled.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7535.php">Chong Su: "Re: [OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<li><strong>Previous message:</strong> <a href="7533.php">Gabriele Fatigati: "[OMPI users] Valgrind Warning"</a>
<li><strong>In reply to:</strong> <a href="7533.php">Gabriele Fatigati: "[OMPI users] Valgrind Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7538.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7538.php">Gabriele Fatigati: "Re: [OMPI users] Valgrind Warning"</a>
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
