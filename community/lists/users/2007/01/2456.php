<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 10 17:19:28 2007" -->
<!-- isoreceived="20070110221928" -->
<!-- sent="Wed, 10 Jan 2007 16:19:51 -0600" -->
<!-- isosent="20070110221951" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="[OMPI users] problem with mpi_waitall" -->
<!-- id="95CE021C-154F-4668-911C-C4658C907F77_at_nrlssc.navy.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-01-10 17:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>Attached is a small test fortran program that triggers a failure in  
<br>
the mpi_waitall.  The problem is that the after a couple of calls to  
<br>
mpi_startall and mpi_waitall some of the mpi_requests become  
<br>
corrupted.  This causes the next call to mpi_startall to fail.  Here  
<br>
is output from a 2 cpu run.
<br>
<p>[44]% mpif90 -g test_ompi.f
<br>
[45]% mpirun -np 2 a.out
<br>
TEST(A):   0  1 |        2       3       4       5
<br>
TEST(B):   0  1 |        2       3       4       5
<br>
OUTPUT:   0  1 |      100     100     101     101
<br>
TEST(A):   0  2 |        2       3       4       5
<br>
TEST(B):   0  2 |   -32766  -32766       4       5
<br>
OUTPUT:   0  2 |      200     200     201     201
<br>
TEST(A):   1  1 |        2       3       4       5
<br>
TEST(B):   1  1 |        2       3       4       5
<br>
OUTPUT:   1  1 |      101     101     100     100
<br>
TEST(A):   1  2 |        2       3       4       5
<br>
TEST(B):   1  2 |   -32766  -32766       4       5
<br>
OUTPUT:   1  2 |      201     201     200     200
<br>
^Cmpirun: killing job...
<br>
<p>The &quot;-32766&quot; values show up in the mpi_request array after the second  
<br>
call to mpi_waitall.  Using prints in the OpenMPI code I have tracked  
<br>
the problem to
<br>
<p>ompi/request/req_wait.c:ompi_request_wait_all().
<br>
<p>I find upon entry to ompi_request_wait_all() that the values of  
<br>
request[:]-&gt;req_f_to_c_index are valid.  However, upon exit of  
<br>
ompi_request_wait_all() the first two entries of request[:]- 
<br>
<span class="quotelev1"> &gt;req_f_to_c_index have the value of -32766.
</span><br>
<p>I am testing with OpenMPI version 1.2b2.  This problem occurs on both  
<br>
x86_64 and Intel i386 and it occurs for both Portland Group compilers  
<br>
and for GCC/G95.
<br>
<p>Cheers,
<br>
Tim Campbell
<br>
Naval Research Laboratory
<br>
<p>

<br><p>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2456/test_ompi.f.gz">test_ompi.f.gz</a>
</ul>
<!-- attachment="test_ompi.f.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
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
