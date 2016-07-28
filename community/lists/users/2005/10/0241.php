<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 12:31:16 2005" -->
<!-- isoreceived="20051027173116" -->
<!-- sent="Thu, 27 Oct 2005 11:30:53 -0600" -->
<!-- isosent="20051027173053" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[O-MPI users] Tests and Bugs (RC4):" -->
<!-- id="op.szbexresies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-27 12:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been running a number of benchmarks &amp; tests with OpenMPI 1.0rc4.   
<br>
I've run into a few issues that I believe are related to OpenMPI; if they  
<br>
aren't, I'd appreciate the education. :)
<br>
<p>The attached tarball does not have the MPICH variant results (the tarball  
<br>
is 87 kb as it is)
<br>
<p>I can run the same tests with MVAPICH, MPICH-GM, and MPICH-MX with no  
<br>
problems.  The benchmarks were built from source rpm's (that I maintain),  
<br>
so I can say the build procedure for the benchmarks is essentially  
<br>
identical from one MPI to another.
<br>
<p>A short summary:
<br>
* Identical hardware, except for the interconnect.
<br>
* Linux, SLES 9 SP2, kernel 2.6.5-7.201-smp (SLES binary)
<br>
* Opteron 248's, two CPU's per node, 4 GB per node.
<br>
* Four nodes in every test run.
<br>
<p>I used the following interconnects/drivers:
<br>
* Myrinet		(GM 2.0.22 and MX 1.0.3)
<br>
* Infiniband	(Mellanox &quot;IB Gold&quot; 1.8)
<br>
<p>And the following benchmarks/tests:
<br>
* HPC Challenge (v1.0)
<br>
* HPL (v1.0)
<br>
* Intel MPI Benchmark (IMB, formerly PALLAS) v2.3
<br>
* Presta MPI Benchmarks
<br>
<p>Quick summary of results:
<br>
<p>HPC Challenge:
<br>
* Never completed an entire run on any interconnect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MVAPI came close; crashed after the HPL section.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Error messages:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n60:21912] *** An error occurred in MPI_Reduce
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n60:21912] *** on communicator MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n60:21912] *** MPI_ERR_OP: invalid reduce operation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- GM wedges itself in the HPL section
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MX crashes during the PTRANS test (the first test performed)
<br>
(See earlier thread on this list about OpenMPI wedging itself; I did apply  
<br>
that workaround).
<br>
<p>HPL:
<br>
* Only completes with one interconnect:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MVAPI mca btl works fine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- GM wedges itself, similar to HPCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MX gives an error:  MX: assertion: &lt;&lt;not yet implemented&gt;&gt;  failed at  
<br>
line 281, file ../mx__shmem.c
<br>
<p>IMB:
<br>
* Only completes with one interconnect:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MVAPI mca btl works fine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- GM fails, but differs in which portion of the benchmark it gets stuck  
<br>
at.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MX fails, offering both the error listed in the HPL section, as well as:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mx_connect fail for 0th remote address key deadbeef (error Operation  
<br>
timed-out)&quot;
<br>
<p>Presta:
<br>
* Completes with varying degrees of success
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MVAPI:  Completes successfully
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-But the 'all reduction' test is 173 times slower than the same test on  
<br>
GM, and is 360 times slower than with MX.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- GM:  Does not complete the 'com' test; simply stops at the same point  
<br>
every time (I have it included in my logs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MX:  Completes successfully, but I do receive the &quot;mx_connect fail for  
<br>
0th remote address key deadbeef (error Operation timed-out)&quot; message.
<br>
<p><p>I hope I've provided enough information to be useful; if not, just ask and  
<br>
I'll help out as much as I can.
<br>

<br><p>
<p><hr>
<ul>
<li>application/bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0241/openmpi.tar.bz2">openmpi.tar.bz2</a>
</ul>
<!-- attachment="openmpi.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
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
