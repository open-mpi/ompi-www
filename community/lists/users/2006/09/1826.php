<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 19:52:18 2006" -->
<!-- isoreceived="20060905235218" -->
<!-- sent="Tue, 5 Sep 2006 19:52:15 -0400" -->
<!-- isosent="20060905235215" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does current Intel dual processor support MPI?" -->
<!-- id="f869b68c0609051652j5cb89008q219999d5b6090bdf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AF72B632-74CA-44C3-A89D-4C67C79FDEA5_at_cs.utk.edu" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 19:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1827.php">Harald Forbert: "[OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<li><strong>Previous message:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>In reply to:</strong> <a href="1824.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My opinion would be to use pthreads, for a couple of reasons:
<br>
<p>1. You don't need an OMP aware compiler; any old compiler would do.
<br>
2. The pthread library is more well adapted and hence might be more
<br>
optimized than the code emitted from an OMP compiler.
<br>
<p>If your operating system is Linux, you may use the clone() system call
<br>
directly; this would add further optimization at the expense of portability.
<br>
<p>Durga
<br>
<p><p>On 9/5/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1827.php">Harald Forbert: "[OMPI users] Blacs tester failure due to bug in datatype_unpack.c (?)"</a>
<li><strong>Previous message:</strong> <a href="1825.php">Greg Lindahl: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>In reply to:</strong> <a href="1824.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Reply:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
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
