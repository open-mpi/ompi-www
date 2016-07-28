<?
$subject_val = "[OMPI devel] Mtt Fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 08:04:16 2009" -->
<!-- isoreceived="20090422120416" -->
<!-- sent="Wed, 22 Apr 2009 15:04:11 +0300" -->
<!-- isosent="20090422120411" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] Mtt Fails" -->
<!-- id="453d39990904220504v3ca11921q518ce445d8cebac2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Mtt Fails<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 08:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5852.php">Ralph Castain: "Re: [OMPI devel] Mtt Fails"</a>
<li><strong>Previous message:</strong> <a href="5850.php">Jeff Squyres: "[OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5852.php">Ralph Castain: "Re: [OMPI devel] Mtt Fails"</a>
<li><strong>Reply:</strong> <a href="5852.php">Ralph Castain: "Re: [OMPI devel] Mtt Fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have MTT failures complaining about MPI2, but before I am opening a
<br>
ticket, pls, have a look.
<br>
<p>$/hpc/home/USERS/mtt/mtt-scratch/20090421220402_moo1_17859/installs/oma-nightly-1.3--gcc--1.3r404/install/bin/mpirun
<br>
--host moo1,moo1,moo2,moo2,moo3,moo3,moo4,moo4 -np 8 --mca
<br>
btl_openib_use_eager_rdma 1 --mca btl self,sm,openib
<br>
/hpc/home/USERS/mtt/mtt-scratch/20090421220402_moo1_17859/installs/ogHK/tests/mpicxx/cxx-test-suite/src/mpi2c++_dynamics_test
<br>
<p>MPI-2 C++ bindings MPI-2 dynamics test suite
<br>
------------------------------
<br>
Open MPI Version 2.0
<br>
<p>*** There are delays built into some of the tests
<br>
*** Please let them complete
<br>
*** No test should take more than 10 seconds
<br>
<p>Test suite running on 8 nodes
<br>
<p>* MPI-2 Dynamics...
<br>
&nbsp;&nbsp;- Looking for &quot;connect&quot; program... PASS
<br>
&nbsp;&nbsp;- MPI::Get_version... FAIL
<br>
<p>MPI2C++ test suite: NODE 0 - 2) ERROR in MPI::Get_version should be 2.1
<br>
MPI2C++ test suite: all ranks failed
<br>
MPI2C++ test suite: minor error
<br>
MPI2C++ test suite: attempting to finalize...
<br>
MPI2C++ test suite: terminated
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5852.php">Ralph Castain: "Re: [OMPI devel] Mtt Fails"</a>
<li><strong>Previous message:</strong> <a href="5850.php">Jeff Squyres: "[OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5852.php">Ralph Castain: "Re: [OMPI devel] Mtt Fails"</a>
<li><strong>Reply:</strong> <a href="5852.php">Ralph Castain: "Re: [OMPI devel] Mtt Fails"</a>
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
