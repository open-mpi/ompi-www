<?
$subject_val = "[OMPI users] 1.10.1 appears to break mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 18:36:10 2015" -->
<!-- isoreceived="20151109233610" -->
<!-- sent="Mon, 9 Nov 2015 16:36:05 -0700" -->
<!-- isosent="20151109233605" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI users] 1.10.1 appears to break mpi4py" -->
<!-- id="56412DE5.6000601_at_cora.nwra.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] 1.10.1 appears to break mpi4py<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 18:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28028.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Previous message:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28028.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Reply:</strong> <a href="28028.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're seeing test failures after bumping to 1.10.1 in Fedora (see below).  Is
<br>
anyone else seeing this?  Any suggestions for debugging?
<br>
<p>======================================================================
<br>
ERROR: testGatherv (test_cco_nb_vec.TestCCOVecSelf)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 40, in testGatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sbuf.as_mpi(), recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv2 (test_cco_nb_vec.TestCCOVecSelf)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 64, in testGatherv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv3 (test_cco_nb_vec.TestCCOVecSelf)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 89, in testGatherv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv (test_cco_nb_vec.TestCCOVecSelf)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 120, in testScatterv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, rbuf.as_mpi(), root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv2 (test_cco_nb_vec.TestCCOVecSelf)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 138, in testScatterv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv3 (test_cco_nb_vec.TestCCOVecSelf)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 160, in testScatterv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv (test_cco_nb_vec.TestCCOVecSelfDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 40, in testGatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sbuf.as_mpi(), recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv2 (test_cco_nb_vec.TestCCOVecSelfDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 64, in testGatherv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv3 (test_cco_nb_vec.TestCCOVecSelfDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 89, in testGatherv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv (test_cco_nb_vec.TestCCOVecSelfDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 120, in testScatterv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, rbuf.as_mpi(), root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv2 (test_cco_nb_vec.TestCCOVecSelfDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 138, in testScatterv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv3 (test_cco_nb_vec.TestCCOVecSelfDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 160, in testScatterv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv (test_cco_nb_vec.TestCCOVecWorld)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 40, in testGatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sbuf.as_mpi(), recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv2 (test_cco_nb_vec.TestCCOVecWorld)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 64, in testGatherv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv3 (test_cco_nb_vec.TestCCOVecWorld)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 89, in testGatherv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv (test_cco_nb_vec.TestCCOVecWorld)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 120, in testScatterv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, rbuf.as_mpi(), root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv2 (test_cco_nb_vec.TestCCOVecWorld)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 138, in testScatterv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv3 (test_cco_nb_vec.TestCCOVecWorld)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 160, in testScatterv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv (test_cco_nb_vec.TestCCOVecWorldDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 40, in testGatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sbuf.as_mpi(), recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv2 (test_cco_nb_vec.TestCCOVecWorldDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 64, in testGatherv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testGatherv3 (test_cco_nb_vec.TestCCOVecWorldDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 89, in testGatherv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Igatherv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 787, in mpi4py.MPI.Comm.Igatherv
<br>
(src/mpi4py.MPI.c:100799)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv (test_cco_nb_vec.TestCCOVecWorldDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 120, in testScatterv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, rbuf.as_mpi(), root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv2 (test_cco_nb_vec.TestCCOVecWorldDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 138, in testScatterv2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p>======================================================================
<br>
ERROR: testScatterv3 (test_cco_nb_vec.TestCCOVecWorldDup)
<br>
----------------------------------------------------------------------
<br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;test/test_cco_nb_vec.py&quot;, line 160, in testScatterv3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self.COMM.Iscatterv(sendbuf, recvbuf, root).Wait()
<br>
&nbsp;&nbsp;File &quot;MPI/Comm.pyx&quot;, line 815, in mpi4py.MPI.Comm.Iscatterv
<br>
(src/mpi4py.MPI.c:101257)
<br>
Exception: MPI_ERR_SIZE: invalid size
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28028.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Previous message:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28028.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Reply:</strong> <a href="28028.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
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
