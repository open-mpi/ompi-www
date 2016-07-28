<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 02:57:25 2006" -->
<!-- isoreceived="20060511065725" -->
<!-- sent="Thu, 11 May 2006 08:57:04 +0200" -->
<!-- isosent="20060511065704" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-threaded test fails with thread-safe library" -->
<!-- id="49D16438-FE4E-4146-96F0-3307FDB673A0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44624A4D.80300_at_Sun.COM" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-11 02:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9892"</a>
<li><strong>Previous message:</strong> <a href="0872.php">Rolf Vandevaart: "[OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Rolf Vandevaart: "[OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Reply:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eeeks!  That sounds like a bug.  Can you attach a debugger and get a  
<br>
stack trace for the situation where that occurs?
<br>
<p>Brian
<br>
<p>On May 10, 2006, at 10:17 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built a library with &quot;--enable-mpi-threads --with- 
</span><br>
<span class="quotelev1">&gt; threads=posix&quot;
</span><br>
<span class="quotelev1">&gt; (using
</span><br>
<span class="quotelev1">&gt; the trunk) and tried running a simple non-threaded program linked
</span><br>
<span class="quotelev1">&gt; against it.
</span><br>
<span class="quotelev1">&gt; The program just calls to MPI_Send and MPI_Recv so every process  
</span><br>
<span class="quotelev1">&gt; sends an
</span><br>
<span class="quotelev1">&gt; MPI_INT to one another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run it I see the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-4 86 =&gt;mpirun -np 4 connectivity -v
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-4: checking connection    0 &lt;-&gt; 1
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-4: checking connection    1 &lt;-&gt; 2
</span><br>
<span class="quotelev1">&gt; burl-ct-v440-4: checking connection    0 &lt;-&gt; 2
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Deadlock situation detected/avoided
</span><br>
<span class="quotelev1">&gt; Signal:6 info.si_errno:0(Error 0) si_code:-1()
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-4 87 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I had the debug enabled, I get to see that one of the processes
</span><br>
<span class="quotelev1">&gt; was trying to grab a lock that it already head.    (Nice feature  
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev1">&gt; that error printed out!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else seen this?  As I said, this is a non-threaded program
</span><br>
<span class="quotelev1">&gt; so there is only one thread per process.   I am wondering if I am  
</span><br>
<span class="quotelev1">&gt; missing
</span><br>
<span class="quotelev1">&gt; something basic in the building of my library.  This test works  
</span><br>
<span class="quotelev1">&gt; fine against
</span><br>
<span class="quotelev1">&gt; a library configured without &quot;--enable-mpi-threads --with- 
</span><br>
<span class="quotelev1">&gt; threads=posix&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9892"</a>
<li><strong>Previous message:</strong> <a href="0872.php">Rolf Vandevaart: "[OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Rolf Vandevaart: "[OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Reply:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
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
