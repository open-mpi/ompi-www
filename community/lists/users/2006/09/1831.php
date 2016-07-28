<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 13:33:50 2006" -->
<!-- isoreceived="20060906173350" -->
<!-- sent="Wed, 6 Sep 2006 13:33:45 -0400" -->
<!-- isosent="20060906173345" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does current Intel dual processor support MPI?" -->
<!-- id="65C81144-E455-4568-8DAA-89E313B0FA98_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0609051652j5cb89008q219999d5b6090bdf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-09-06 13:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Previous message:</strong> <a href="1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>In reply to:</strong> <a href="1826.php">Durga Choudhury: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1844.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1844.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From my perspective some [let's say #1 and #2) of the most important  
<br>
features of an application that has to last for a while is the  
<br>
readability and portability. And OMP code is far more readable than  
<br>
pthread one. The loops look like loops, the critical sections are  
<br>
obvious and the sequential meaning of the program is preserved.
<br>
<p>On Sep 5, 2006, at 7:52 PM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; My opinion would be to use pthreads, for a couple of reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You don't need an OMP aware compiler; any old compiler would do.
</span><br>
<p>Compilers can be downloaded for free these days. And most of them  
<br>
have now OMP support. And on all operating systems (i.e. even the  
<br>
free Microsoft compiler now has OMP support, and Windows was  
<br>
definitively not the platform I expect to use for my OMP tasks).
<br>
<p><span class="quotelev1">&gt; 2. The pthread library is more well adapted and hence might be more  
</span><br>
<span class="quotelev1">&gt; optimized than the code emitted from an OMP compiler.
</span><br>
<p>The pthread library add a huge overhead for all operations. At this  
<br>
level granularity quite often you need atomic locks and operations,  
<br>
not critical sections protected by mutexes. Unfortunately, there is  
<br>
no portable library that give you a common interface to atomic  
<br>
operations (there was a BSD one at one point). Moreover, using  
<br>
threads instead of OMP directive move the burden on the programmer.  
<br>
Most of the people just cannot afford a one year student who has to  
<br>
first understand and then add the correct pthread directive inside.  
<br>
And for which result ... you don't even know that you will get the  
<br>
fastest version. On the other side OMP compilers are getting smarter  
<br>
and smarter every day. Today the results are quite impressive, just  
<br>
imagine what will happens in few years.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your operating system is Linux, you may use the clone() system  
</span><br>
<span class="quotelev1">&gt; call directly; this would add further optimization at the expense  
</span><br>
<span class="quotelev1">&gt; of portability.
</span><br>
<p>It's always a trade-off between performance and portability. What do  
<br>
you want to loose in order to get the 1% performance gain ... And in  
<br>
this case the only performance gain you will get is when you start  
<br>
the threads, otherwise you will not improve anything. Generally,  
<br>
people prefer to use threads pools in order to avoid the overhead of  
<br>
creating and destroying threads all the time.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/5/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2006, at 3:19 AM, Aidaros Dev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nowdays we hear about intel dual core processor, An Intel dual-core
</span><br>
<span class="quotelev2">&gt; &gt; processor consists of two complete execution cores in one physical
</span><br>
<span class="quotelev2">&gt; &gt; processor both running at the same frequency. Both cores share the
</span><br>
<span class="quotelev2">&gt; &gt; same packaging and the same interface with the chipset/memory.
</span><br>
<span class="quotelev2">&gt; &gt; Can I use MPI library to communicate these processors? Can we
</span><br>
<span class="quotelev2">&gt; &gt; consider as they are separated?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes and yes. However, these architectures fit better on a different
</span><br>
<span class="quotelev1">&gt; programming model. If you want to get the max performance out of
</span><br>
<span class="quotelev1">&gt; them, a OMP approach (instead of MPI) is more suitable. Using
</span><br>
<span class="quotelev1">&gt; processes on such architecture is just a waste of performance. One
</span><br>
<span class="quotelev1">&gt; should use a thread model, with locking to insure the coordination
</span><br>
<span class="quotelev1">&gt; between memory accesses. Or let the underlying libraries do their
</span><br>
<span class="quotelev1">&gt; magic for you. As an example most of the mathematical codes based on
</span><br>
<span class="quotelev1">&gt; BLAS can use the GOTO BLAS (developed at TACC) to get multi-code (and
</span><br>
<span class="quotelev1">&gt; multi-CPU) support for free, as this library will do all BLAS
</span><br>
<span class="quotelev1">&gt; operation in parallel using multiple threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1832.php">Tom Rosmond: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Previous message:</strong> <a href="1830.php">Jeff Squyres: "Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<li><strong>In reply to:</strong> <a href="1826.php">Durga Choudhury: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1844.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1844.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
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
