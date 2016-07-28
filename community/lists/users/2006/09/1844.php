<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 17:10:24 2006" -->
<!-- isoreceived="20060907211024" -->
<!-- sent="Thu, 7 Sep 2006 22:10:21 +0100" -->
<!-- isosent="20060907211021" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does current Intel dual processor support MPI?" -->
<!-- id="f058a9c30609071410n3cbb8ec9m5c37515144eedd1a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="65C81144-E455-4568-8DAA-89E313B0FA98_at_cs.utk.edu" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 17:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1845.php">Marcelo Souza: "[OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>Previous message:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Well, I just wanted to say that from a software engineering (and also
<br>
computer science) point of view,
<br>
<p>OMP, MPI and threads are completely diferent models for parallel
<br>
computation/concurrent programming.
<br>
<p>I do not believe that any capable engineer (or good programmer for all
<br>
I know) can know in advance whats the &quot;best&quot;
<br>
one to use without knowing the problem space, design requisites, ..etc..
<br>
<p>Its not just about &quot;portability&quot; or code &quot;readability/mantainability&quot;.
<br>
<p>Deciding which too use will depend (and therefore influence) the
<br>
aplication arquitecture.
<br>
<p>Should I use OMP on a web server as apache or tomcat, providing that
<br>
way better portability and code readability?
<br>
<p>Should I use OMP or threading for a massively parallel system, such
<br>
has blue gene/L, what about SGI Altix3000?
<br>
<p>Shoud I use threading for a 2 cpu, shared memory system for a
<br>
sequencial aplication where I just need to speed up
<br>
some highly vectorizable loops?
<br>
<p>For instance, my thesis dealt with paralelizing a seismic simulation
<br>
application, I did a thread and a MPI version.
<br>
The threaded version, since &quot;tasks&quot; could share massive amounts of
<br>
data with very little lock contention, could work bigger data sets
<br>
than the MPI version (given the same total amount of ram). But the MPI
<br>
version could run in clusters, while with threading I needed a single
<br>
system image.
<br>
OpenMP was inadequate since it would have a much bigger sequential
<br>
execution time, providing inadequate speedup, for a algorithm which
<br>
was very parallel.
<br>
<p>Seedups measured in the threaded version and MPI version were about
<br>
1.99 in 2cpu mode, (&lt;1% of sequential  computation). In MPI, with 16
<br>
cpus (1 gigabit link for 8 x 2cpu nodes), the measured speedup was
<br>
14.8.
<br>
<p>My threaded version would never achieve a 14.8 speedup, even in a
<br>
&quot;SSI&quot; 8 node cluster.
<br>
The effort applied to make the MPI version so scalable was _much_
<br>
bigger.. (designing a new concurrent, distributed algorithm to replace
<br>
one that was sequential, that in the sequencial aplication amounted to
<br>
1% of the computation time.) than the threaded one. It uses more ram
<br>
per process, but can scale up to 64/128 nodes, depending on the
<br>
problem size, and it doesn't require a shared memory system.
<br>
My threaded version, in a shared memory system, with lots of cpus,
<br>
will scale quite a lot..but probably the agregate bandwith will be
<br>
inferior to a cluster with the same amount of cpus/ram (normally, big
<br>
SMP or NUMA systems have bigger RAM latency and not proportional
<br>
bandwith).
<br>
Basically, I can't predict which performs better.
<br>
<p><p>So, I hope that its understandable that choosing the right parallel
<br>
computing model isn't just a matter of &quot;taste&quot;.
<br>
<p><p><p><p>On 9/6/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;  From my perspective some [let's say #1 and #2) of the most important
</span><br>
<span class="quotelev1">&gt; features of an application that has to last for a while is the
</span><br>
<span class="quotelev1">&gt; readability and portability. And OMP code is far more readable than
</span><br>
<span class="quotelev1">&gt; pthread one. The loops look like loops, the critical sections are
</span><br>
<span class="quotelev1">&gt; obvious and the sequential meaning of the program is preserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2006, at 7:52 PM, Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My opinion would be to use pthreads, for a couple of reasons:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. You don't need an OMP aware compiler; any old compiler would do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compilers can be downloaded for free these days. And most of them
</span><br>
<span class="quotelev1">&gt; have now OMP support. And on all operating systems (i.e. even the
</span><br>
<span class="quotelev1">&gt; free Microsoft compiler now has OMP support, and Windows was
</span><br>
<span class="quotelev1">&gt; definitively not the platform I expect to use for my OMP tasks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. The pthread library is more well adapted and hence might be more
</span><br>
<span class="quotelev2">&gt; &gt; optimized than the code emitted from an OMP compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pthread library add a huge overhead for all operations. At this
</span><br>
<span class="quotelev1">&gt; level granularity quite often you need atomic locks and operations,
</span><br>
<span class="quotelev1">&gt; not critical sections protected by mutexes. Unfortunately, there is
</span><br>
<span class="quotelev1">&gt; no portable library that give you a common interface to atomic
</span><br>
<span class="quotelev1">&gt; operations (there was a BSD one at one point). Moreover, using
</span><br>
<span class="quotelev1">&gt; threads instead of OMP directive move the burden on the programmer.
</span><br>
<span class="quotelev1">&gt; Most of the people just cannot afford a one year student who has to
</span><br>
<span class="quotelev1">&gt; first understand and then add the correct pthread directive inside.
</span><br>
<span class="quotelev1">&gt; And for which result ... you don't even know that you will get the
</span><br>
<span class="quotelev1">&gt; fastest version. On the other side OMP compilers are getting smarter
</span><br>
<span class="quotelev1">&gt; and smarter every day. Today the results are quite impressive, just
</span><br>
<span class="quotelev1">&gt; imagine what will happens in few years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If your operating system is Linux, you may use the clone() system
</span><br>
<span class="quotelev2">&gt; &gt; call directly; this would add further optimization at the expense
</span><br>
<span class="quotelev2">&gt; &gt; of portability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's always a trade-off between performance and portability. What do
</span><br>
<span class="quotelev1">&gt; you want to loose in order to get the 1% performance gain ... And in
</span><br>
<span class="quotelev1">&gt; this case the only performance gain you will get is when you start
</span><br>
<span class="quotelev1">&gt; the threads, otherwise you will not improve anything. Generally,
</span><br>
<span class="quotelev1">&gt; people prefer to use threads pools in order to avoid the overhead of
</span><br>
<span class="quotelev1">&gt; creating and destroying threads all the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/5/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 5, 2006, at 3:19 AM, Aidaros Dev wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nowdays we hear about intel dual core processor, An Intel dual-core
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processor consists of two complete execution cores in one physical
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processor both running at the same frequency. Both cores share the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; same packaging and the same interface with the chipset/memory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can I use MPI library to communicate these processors? Can we
</span><br>
<span class="quotelev3">&gt; &gt; &gt; consider as they are separated?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes and yes. However, these architectures fit better on a different
</span><br>
<span class="quotelev2">&gt; &gt; programming model. If you want to get the max performance out of
</span><br>
<span class="quotelev2">&gt; &gt; them, a OMP approach (instead of MPI) is more suitable. Using
</span><br>
<span class="quotelev2">&gt; &gt; processes on such architecture is just a waste of performance. One
</span><br>
<span class="quotelev2">&gt; &gt; should use a thread model, with locking to insure the coordination
</span><br>
<span class="quotelev2">&gt; &gt; between memory accesses. Or let the underlying libraries do their
</span><br>
<span class="quotelev2">&gt; &gt; magic for you. As an example most of the mathematical codes based on
</span><br>
<span class="quotelev2">&gt; &gt; BLAS can use the GOTO BLAS (developed at TACC) to get multi-code (and
</span><br>
<span class="quotelev2">&gt; &gt; multi-CPU) support for free, as this library will do all BLAS
</span><br>
<span class="quotelev2">&gt; &gt; operation in parallel using multiple threads.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev2">&gt; &gt; He therefore created communists.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Miguel Sousa Filipe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1845.php">Marcelo Souza: "[OMPI users] Slackware Package for openmpi 1.1.1 and mpich2 1.0.4p1"</a>
<li><strong>Previous message:</strong> <a href="1843.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
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
