<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 16 19:15:19 2006" -->
<!-- isoreceived="20060516231519" -->
<!-- sent="Tue, 16 May 2006 19:11:26 -0400" -->
<!-- isosent="20060516231126" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-threaded test fails with thread-safe library" -->
<!-- id="316770AF-F233-4351-BC6C-C5858AEA6FCC_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4469EAB2.8030807_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-05-16 19:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0881.php">Brian Barrett: "[OMPI devel] New bug tracker"</a>
<li><strong>Previous message:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>In reply to:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Commit 9946 solve the problem. I mixed the return value of the  
<br>
trylock call, considering that any not zero value was a success when  
<br>
in fact 0 is a success. Anyway, now it's fixed on the trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 16, 2006, at 11:07 AM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brian:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the stack trace from the core dump.  I am also trying to  
</span><br>
<span class="quotelev1">&gt; understand
</span><br>
<span class="quotelev1">&gt; better what is happening here, but I figured I needed to get this off
</span><br>
<span class="quotelev1">&gt; to you.
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  burl-ct-v440-4 96 =&gt;dbx connectivity core
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.4' in
</span><br>
<span class="quotelev1">&gt; your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading connectivity
</span><br>
<span class="quotelev1">&gt; core file header read successfully
</span><br>
<span class="quotelev1">&gt; [...snip...]
</span><br>
<span class="quotelev1">&gt; (dbx) where
</span><br>
<span class="quotelev1">&gt; current thread: t_at_1
</span><br>
<span class="quotelev1">&gt;   [1] _lwp_kill(0x0, 0x6, 0x0, 0x6, 0xfc00, 0x0), at 0xfd840f90
</span><br>
<span class="quotelev1">&gt;   [2] raise(0x6, 0x0, 0xfd824a98, 0xffffffff, 0xfd868284, 0x6), at
</span><br>
<span class="quotelev1">&gt; 0xfd7dfd78
</span><br>
<span class="quotelev1">&gt;   [3] abort(0xffbfee00, 0x1, 0x0, 0xa83f0, 0xfd86b298, 0x0), at  
</span><br>
<span class="quotelev1">&gt; 0xfd7bff98
</span><br>
<span class="quotelev1">&gt; =&gt;[4] opal_mutex_lock(m = 0xfd0b12e8), line 101 in &quot;mutex_unix.h&quot;
</span><br>
<span class="quotelev1">&gt;   [5] __ompi_free_list_wait(fl = 0xfd0b1298, item = 0xffbfef88), line
</span><br>
<span class="quotelev1">&gt; 167 in &quot;ompi_free_list.h&quot;
</span><br>
<span class="quotelev1">&gt;   [6] mca_pml_ob1_recv_frag_match(btl = 0xfcfbc778, hdr = 0xdc897260,
</span><br>
<span class="quotelev1">&gt; segments = 0xdc897218, num_segments = 1U), line 550 in  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_recvfrag.c&quot;
</span><br>
<span class="quotelev1">&gt;   [7] mca_pml_ob1_recv_frag_callback(btl = 0xfcfbc778, tag =  
</span><br>
<span class="quotelev1">&gt; '\001', des
</span><br>
<span class="quotelev1">&gt; = 0xdc8971d0, cbdata = (nil)), line 80 in &quot;pml_ob1_recvfrag.c&quot;
</span><br>
<span class="quotelev1">&gt;   [8] mca_btl_sm_component_progress(), line 396 in  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_component.c&quot;
</span><br>
<span class="quotelev1">&gt;   [9] mca_bml_r2_progress(), line 103 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev1">&gt;   [10] opal_progress(), line 288 in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev1">&gt;   [11] opal_condition_wait(c = 0xff29d3b8, m = 0xff29d430), line 75 in
</span><br>
<span class="quotelev1">&gt; &quot;condition.h&quot;
</span><br>
<span class="quotelev1">&gt;   [12] mca_pml_ob1_recv(addr = 0xffbff4b0, count = 1U, datatype =
</span><br>
<span class="quotelev1">&gt; 0x21458, src = 0, tag = 0, comm = 0x215a0, status = 0xffbff4c0), line
</span><br>
<span class="quotelev1">&gt; 101 in &quot;pml_ob1_irecv.c&quot;
</span><br>
<span class="quotelev1">&gt;   [13] PMPI_Recv(buf = 0xffbff4b0, count = 1, type = 0x21458, source =
</span><br>
<span class="quotelev1">&gt; 0, tag = 0, comm = 0x215a0, status = 0xffbff4c0), line 66 in &quot;precv.c&quot;
</span><br>
<span class="quotelev1">&gt;   [14] main(argc = 2, argv = 0xffbff53c), line 69 in &quot;connectivity.c&quot;
</span><br>
<span class="quotelev1">&gt; (dbx)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote On 05/11/06 02:57,:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eeeks!  That sounds like a bug.  Can you attach a debugger and get a
</span><br>
<span class="quotelev2">&gt;&gt; stack trace for the situation where that occurs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 10, 2006, at 10:17 PM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have built a library with &quot;--enable-mpi-threads --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads=posix&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk) and tried running a simple non-threaded program linked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program just calls to MPI_Send and MPI_Recv so every process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sends an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INT to one another.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run it I see the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-v440-4 86 =&gt;mpirun -np 4 connectivity -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-v440-4: checking connection    0 &lt;-&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-v440-4: checking connection    1 &lt;-&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-v440-4: checking connection    0 &lt;-&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_mutex_lock(): Deadlock situation detected/avoided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal:6 info.si_errno:0(Error 0) si_code:-1()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; burl-ct-v440-4 87 =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I had the debug enabled, I get to see that one of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was trying to grab a lock that it already head.    (Nice feature
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that error printed out!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else seen this?  As I said, this is a non-threaded  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so there is only one thread per process.   I am wondering if I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something basic in the building of my library.  This test works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a library configured without &quot;--enable-mpi-threads --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads=posix&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0881.php">Brian Barrett: "[OMPI devel] New bug tracker"</a>
<li><strong>Previous message:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>In reply to:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
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
