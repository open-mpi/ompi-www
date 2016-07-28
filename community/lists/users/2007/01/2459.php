<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 11 09:26:06 2007" -->
<!-- isoreceived="20070111142606" -->
<!-- sent="Thu, 11 Jan 2007 08:26:35 -0600" -->
<!-- isosent="20070111142635" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mpi_waitall" -->
<!-- id="FDA588F5-7641-4095-9350-F2BA04241F2B_at_nrlssc.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DADF8FFA-1E3B-4EBD-8434-D447F606C24E_at_cs.utk.edu" -->
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
<strong>From:</strong> Tim Campbell (<em>tim.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-11 09:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2460.php">Nader Ahmadi: "[OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2458.php">Wolfgang Wieser: "[OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>In reply to:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  I'll try it out when the appropriate revision shows up in  
<br>
the tar list.
<br>
~Tim
<br>
<p>On Jan 11, 2007, at 2:48 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report. I just commit a patch in our development
</span><br>
<span class="quotelev1">&gt; version (revision 13079). It will go into the 1.2b2 soon, after some
</span><br>
<span class="quotelev1">&gt; soak time. Until then please use the latest nightly tar (with a
</span><br>
<span class="quotelev1">&gt; version bigger than 13079) from our website.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2007, at 5:19 PM, Tim Campbell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a small test fortran program that triggers a failure in
</span><br>
<span class="quotelev2">&gt;&gt; the mpi_waitall.  The problem is that the after a couple of calls
</span><br>
<span class="quotelev2">&gt;&gt; to mpi_startall and mpi_waitall some of the mpi_requests become
</span><br>
<span class="quotelev2">&gt;&gt; corrupted.  This causes the next call to mpi_startall to fail.
</span><br>
<span class="quotelev2">&gt;&gt; Here is output from a 2 cpu run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [44]% mpif90 -g test_ompi.f
</span><br>
<span class="quotelev2">&gt;&gt; [45]% mpirun -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; TEST(A):   0  1 |        2       3       4       5
</span><br>
<span class="quotelev2">&gt;&gt; TEST(B):   0  1 |        2       3       4       5
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT:   0  1 |      100     100     101     101
</span><br>
<span class="quotelev2">&gt;&gt; TEST(A):   0  2 |        2       3       4       5
</span><br>
<span class="quotelev2">&gt;&gt; TEST(B):   0  2 |   -32766  -32766       4       5
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT:   0  2 |      200     200     201     201
</span><br>
<span class="quotelev2">&gt;&gt; TEST(A):   1  1 |        2       3       4       5
</span><br>
<span class="quotelev2">&gt;&gt; TEST(B):   1  1 |        2       3       4       5
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT:   1  1 |      101     101     100     100
</span><br>
<span class="quotelev2">&gt;&gt; TEST(A):   1  2 |        2       3       4       5
</span><br>
<span class="quotelev2">&gt;&gt; TEST(B):   1  2 |   -32766  -32766       4       5
</span><br>
<span class="quotelev2">&gt;&gt; OUTPUT:   1  2 |      201     201     200     200
</span><br>
<span class="quotelev2">&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;-32766&quot; values show up in the mpi_request array after the
</span><br>
<span class="quotelev2">&gt;&gt; second call to mpi_waitall.  Using prints in the OpenMPI code I
</span><br>
<span class="quotelev2">&gt;&gt; have tracked the problem to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/request/req_wait.c:ompi_request_wait_all().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I find upon entry to ompi_request_wait_all() that the values of
</span><br>
<span class="quotelev2">&gt;&gt; request[:]-&gt;req_f_to_c_index are valid.  However, upon exit of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_wait_all() the first two entries of request[:]-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; req_f_to_c_index have the value of -32766.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am testing with OpenMPI version 1.2b2.  This problem occurs on
</span><br>
<span class="quotelev2">&gt;&gt; both x86_64 and Intel i386 and it occurs for both Portland Group
</span><br>
<span class="quotelev2">&gt;&gt; compilers and for GCC/G95.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Tim Campbell
</span><br>
<span class="quotelev2">&gt;&gt; Naval Research Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; &lt;test_ompi.f.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2460.php">Nader Ahmadi: "[OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2458.php">Wolfgang Wieser: "[OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>In reply to:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
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
