<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 11:51:04 2006" -->
<!-- isoreceived="20060905155104" -->
<!-- sent="Tue, 5 Sep 2006 11:50:54 -0400" -->
<!-- isosent="20060905155054" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does current Intel dual processor support MPI?" -->
<!-- id="AF72B632-74CA-44C3-A89D-4C67C79FDEA5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d55fb1a90609050019v16a4f3e5mf8275bf5201bd9a9_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 11:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Previous message:</strong> <a href="1823.php">Jeff Squyres: "Re: [OMPI users] Can Open MPI support SOLARIS OS?"</a>
<li><strong>In reply to:</strong> <a href="1819.php">Aidaros Dev: "[OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1826.php">Durga Choudhury: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2006, at 3:19 AM, Aidaros Dev wrote:
<br>
<p><span class="quotelev1">&gt; Nowdays we hear about intel dual core processor, An Intel dual-core  
</span><br>
<span class="quotelev1">&gt; processor consists of two complete execution cores in one physical  
</span><br>
<span class="quotelev1">&gt; processor both running at the same frequency. Both cores share the  
</span><br>
<span class="quotelev1">&gt; same packaging and the same interface with the chipset/memory.
</span><br>
<span class="quotelev1">&gt; Can I use MPI library to communicate these processors? Can we  
</span><br>
<span class="quotelev1">&gt; consider as they are separated?
</span><br>
<p><p>Yes and yes. However, these architectures fit better on a different  
<br>
programming model. If you want to get the max performance out of  
<br>
them, a OMP approach (instead of MPI) is more suitable. Using  
<br>
processes on such architecture is just a waste of performance. One  
<br>
should use a thread model, with locking to insure the coordination  
<br>
between memory accesses. Or let the underlying libraries do their  
<br>
magic for you. As an example most of the mathematical codes based on  
<br>
BLAS can use the GOTO BLAS (developed at TACC) to get multi-code (and  
<br>
multi-CPU) support for free, as this library will do all BLAS  
<br>
operation in parallel using multiple threads.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Previous message:</strong> <a href="1823.php">Jeff Squyres: "Re: [OMPI users] Can Open MPI support SOLARIS OS?"</a>
<li><strong>In reply to:</strong> <a href="1819.php">Aidaros Dev: "[OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1826.php">Durga Choudhury: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
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
