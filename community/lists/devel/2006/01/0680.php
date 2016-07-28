<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jan 15 00:42:06 2006" -->
<!-- isoreceived="20060115054206" -->
<!-- sent="Sun, 15 Jan 2006 00:42:03 -0500 (EST)" -->
<!-- isosent="20060115054203" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  Intel tests" -->
<!-- id="Pine.LNX.4.58.0601150039070.20178_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="419D081A-A259-4E48-8699-83BFDFE8A8B2_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-01-15 00:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0681.php">Brian Barrett: "wrapper compiler changes"</a>
<li><strong>Previous message:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the same error on a 32 bits architecture if I use the tuned
<br>
collectives.
<br>
<p>mpirun -np 4 -mca btl tcp,self -mca coll tuned,basic
<br>
src/MPI_Allreduce_user_c
<br>
<p>dump tons of MPITEST error (0): i=64, int value=4, expected 1
<br>
.
<br>
<p>If I disable the tuned module:
<br>
<p><span class="quotelev1">&gt; mpirun -np 4 -mca btl tcp,self -mca coll basic src/MPI_Allreduce_user_c
</span><br>
MPITEST info  (0): Starting MPI_Allreduce_user() test
<br>
MPITEST_results: MPI_Allreduce_user() all tests PASSED (7076)
<br>
<p>the test pass without errors.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sat, 14 Jan 2006, David Daniel wrote:
<br>
<p><span class="quotelev1">&gt; Hi Graham,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2006, at 2:07 PM, Graham E Fagg wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;   whatever this fixed/changed, I no longer get corrupted memory in the
</span><br>
<span class="quotelev2">&gt; &gt; tuned data segment hung off each communicator... ! I'm still testing
</span><br>
<span class="quotelev2">&gt; &gt; to see if I get TimPs error. G
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, 14 Jan 2006 bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2006-01-14 15:21:44 -0500 (Sat, 14 Jan 2006)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 8692
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   trunk/ompi/mca/btl/tcp/btl_tcp_frag.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A better implementation for the TCP endpoint cache + few comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On  a 64-bit bproc/myrinet system I'm seeing Tim P's problem with the
</span><br>
<span class="quotelev1">&gt; current head of the trunk. See attached output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info | head
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.1a1svn01142006
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: svn01142006
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.1a1svn01142006
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: svn01142006
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.1a1svn01142006
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: svn01142006
</span><br>
<span class="quotelev1">&gt;                    Prefix: /scratch/modules/opt/openmpi-trunk-
</span><br>
<span class="quotelev1">&gt; nofortran-bproc64
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;             Configured by: ddd
</span><br>
<span class="quotelev1">&gt;             Configured on: Sat Jan 14 17:22:16 MST 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make MPIRUN='mpirun -mca coll basic' MPI_Allreduce_user_c
</span><br>
<span class="quotelev1">&gt; (cd src ; make MPI_Allreduce_user_c)
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/ddd/intel_tests/src'
</span><br>
<span class="quotelev1">&gt; mpicc -g -Isrc   -c -o libmpitest.o libmpitest.c
</span><br>
<span class="quotelev1">&gt; mpicc -g -Isrc  -o MPI_Allreduce_user_c MPI_Allreduce_user_c.c
</span><br>
<span class="quotelev1">&gt; libmpitest.o -lm
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ddd/intel_tests/src'
</span><br>
<span class="quotelev1">&gt; mpirun -mca coll basic -n 4 --  `pwd`/src/MPI_Allreduce_user_c
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Allreduce_user() test
</span><br>
<span class="quotelev1">&gt; MPITEST_results: MPI_Allreduce_user() all tests PASSED (7076)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make MPIRUN='mpirun' MPI_Allreduce_user_c
</span><br>
<span class="quotelev1">&gt; (cd src ; make MPI_Allreduce_user_c)
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/ddd/intel_tests/src'
</span><br>
<span class="quotelev1">&gt; make[1]: `MPI_Allreduce_user_c' is up to date.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ddd/intel_tests/src'
</span><br>
<span class="quotelev1">&gt; mpirun -n 4 --  `pwd`/src/MPI_Allreduce_user_c
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Allreduce_user() test
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): i=0, int value=4, expected 1
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): i=1, int value=4, expected 1
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): i=2, int value=4, expected 1
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): i=3, int value=4, expected 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0681.php">Brian Barrett: "wrapper compiler changes"</a>
<li><strong>Previous message:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
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
