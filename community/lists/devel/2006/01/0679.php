<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 14 20:19:47 2006" -->
<!-- isoreceived="20060115011947" -->
<!-- sent="Sat, 14 Jan 2006 18:19:38 -0700" -->
<!-- isosent="20060115011938" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Re:  Intel tests" -->
<!-- id="419D081A-A259-4E48-8699-83BFDFE8A8B2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1137285314.43c998c2b9e66_at_mymail.pacificu.edu" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-14 20:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Graham,
<br>
<p>On Jan 14, 2006, at 2:07 PM, Graham E Fagg wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;   whatever this fixed/changed, I no longer get corrupted memory in the
</span><br>
<span class="quotelev1">&gt; tuned data segment hung off each communicator... ! I'm still  
</span><br>
<span class="quotelev1">&gt; testing to
</span><br>
<span class="quotelev1">&gt; see if I get TimPs error.
</span><br>
<span class="quotelev1">&gt; G
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, 14 Jan 2006 bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-01-14 15:21:44 -0500 (Sat, 14 Jan 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 8692
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.h
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.h
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; A better implementation for the TCP endpoint cache + few comments.
</span><br>
<p><p>On  a 64-bit bproc/myrinet system I'm seeing Tim P's problem with the  
<br>
current head of the trunk. See attached output.
<br>
<p>David
<br>
<p><p><p><p>$ ompi_info | head
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1a1svn01142006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: svn01142006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1a1svn01142006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: svn01142006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1a1svn01142006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: svn01142006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /scratch/modules/opt/openmpi-trunk- 
<br>
nofortran-bproc64
<br>
Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: ddd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Sat Jan 14 17:22:16 MST 2006
<br>
<p>$ make MPIRUN='mpirun -mca coll basic' MPI_Allreduce_user_c
<br>
(cd src ; make MPI_Allreduce_user_c)
<br>
make[1]: Entering directory `/home/ddd/intel_tests/src'
<br>
mpicc -g -Isrc   -c -o libmpitest.o libmpitest.c
<br>
mpicc -g -Isrc  -o MPI_Allreduce_user_c MPI_Allreduce_user_c.c  
<br>
libmpitest.o -lm
<br>
make[1]: Leaving directory `/home/ddd/intel_tests/src'
<br>
mpirun -mca coll basic -n 4 --  `pwd`/src/MPI_Allreduce_user_c
<br>
MPITEST info  (0): Starting MPI_Allreduce_user() test
<br>
MPITEST_results: MPI_Allreduce_user() all tests PASSED (7076)
<br>
<p>$ make MPIRUN='mpirun' MPI_Allreduce_user_c
<br>
(cd src ; make MPI_Allreduce_user_c)
<br>
make[1]: Entering directory `/home/ddd/intel_tests/src'
<br>
make[1]: `MPI_Allreduce_user_c' is up to date.
<br>
make[1]: Leaving directory `/home/ddd/intel_tests/src'
<br>
mpirun -n 4 --  `pwd`/src/MPI_Allreduce_user_c
<br>
MPITEST info  (0): Starting MPI_Allreduce_user() test
<br>
MPITEST error (0): i=0, int value=4, expected 1
<br>
MPITEST error (0): i=1, int value=4, expected 1
<br>
MPITEST error (0): i=2, int value=4, expected 1
<br>
MPITEST error (0): i=3, int value=4, expected 1
<br>
<p>...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0680.php">George Bosilca: "Re:  Intel tests"</a>
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
