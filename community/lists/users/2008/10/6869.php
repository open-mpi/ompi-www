<?
$subject_val = "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 15:55:32 2008" -->
<!-- isoreceived="20081006195532" -->
<!-- sent="Mon, 6 Oct 2008 15:55:27 -0400" -->
<!-- isosent="20081006195527" -->
<!-- name="arun dhakne" -->
<!-- email="arundhakne_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??" -->
<!-- id="838cb4200810061255y2ebed924m528decdd5c940e35_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??<br>
<strong>From:</strong> arun dhakne (<em>arundhakne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 15:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6870.php">Hahn Kim: "[OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6868.php">Jeff Squyres: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>This is the procedure i have followed to install openmpi. Is there
<br>
some installation or environment setting problem in here?
<br>
an openmpi program with 4 process is run across 2 dual-core intel
<br>
machines, with 2 processes running on each of the machine.
<br>
<p>ompi-checkpoint is successful but ompi-restart fails with following error
<br>
<p><p>$:&gt; ompi-restart ompi_global_snapshot_6045.ckpt
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 6372 on node
<br>
acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
<br>
fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Open-mpi installation steps:
<br>
./configure --prefix=/home/csgrad/audhakne/.openmpi --with-ft=cr
<br>
--with-blcr=/usr/lib64 --enable-debug
<br>
make
<br>
make install
<br>
<p><p><p>export LD_LIBRARY_PATH=$HOME/.openmpi/lib/:$HOME/.openmpi/lib/openmpi:/usr/lib64
<br>
export PATH=$HOME/.openmpi/bin:$PATH
<br>
<p>NOTE: blcr is installed as a module
<br>
$:&gt; lsmod | grep blcr
<br>
<p>blcr                  117892  0
<br>
blcr_vmadump           58264  1 blcr
<br>
blcr_imports           46080  2 blcr,blcr_vmadump
<br>
<p>Please let me know if there is problem with above procedure, thanks a
<br>
lot for your time.
<br>
<p>Best.
<br>
<p>---------- Forwarded message ----------
<br>
From: arun dhakne &lt;arundhakne_at_[hidden]&gt;
<br>
Date: Tue, Sep 30, 2008 at 12:52 AM
<br>
Subject: ompi-restart issue : ompi-restart doesn't work across nodes
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Hi all,
<br>
<p>I had gone through some previous ompi-restart issues but i couldn't
<br>
find anything similar to this problem.
<br>
<p>I have installed blcr, and configured open-mpi 'openmpi-1.3a1r19645'
<br>
<p>i) If the sample mpi program say ( np 4 on single machine that is
<br>
without any hostfile )is ran and I try to checkpoint it, it happens
<br>
successfully and even ompi-restart works in this case.
<br>
<p>ii) If the sample mpi program is ran across say 2 different nodes and
<br>
checkpoint happens successfully BUT ompi-restart throws following
<br>
error:
<br>
<p>$ ompi-restart ompi_global_snapshot_7604.ckpt
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 9590 on node
<br>
acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
<br>
fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Please let me know if more information is needed.
<br>
<p><pre>
--
Thanks and Regards,
Arun U. Dhakne
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6870.php">Hahn Kim: "[OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6868.php">Jeff Squyres: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
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
