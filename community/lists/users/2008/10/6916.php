<?
$subject_val = "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 22:23:03 2008" -->
<!-- isoreceived="20081009022303" -->
<!-- sent="Wed, 8 Oct 2008 22:22:48 -0400" -->
<!-- isosent="20081009022248" -->
<!-- name="arun dhakne" -->
<!-- email="arundhakne_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??" -->
<!-- id="838cb4200810081922h3ac1b095w75f3ba5c588aa986_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43DFBB29-A171-43D9-B88E-B93050B17BDE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??<br>
<strong>From:</strong> arun dhakne (<em>arundhakne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 22:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6917.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have configured with the additional flags(--enable-ft-thread
<br>
--enable-mpi-threads) but there is no change in behaviour, it still
<br>
gives seg fault.
<br>
open mpi version:
<br>
Open MPI: 1.3a1r19685
<br>
<p>blcr version:
<br>
version 0.7.3
<br>
<p><p>The core file is attached.
<br>
hello.c is sample mpi program whose core is dumped is also attached.
<br>
<p>~]$ ompi-restart ompi_global_snapshot_11219.ckpt
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 11288 on node
<br>
acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
<br>
fault).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
<p><p>Best,
<br>
<p><p>On Mon, Oct 6, 2008 at 6:44 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The installation looks ok, though I'm not sure what is causing the segfault
</span><br>
<span class="quotelev1">&gt; of the restarted process. Two things to try. First can you send me a
</span><br>
<span class="quotelev1">&gt; backtrace from the core file that is generated from the segmentation fault.
</span><br>
<span class="quotelev1">&gt; That will provide insight into what is causing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second you may try to enable the C/R thread which allows for a checkpoint to
</span><br>
<span class="quotelev1">&gt; progress when an application is in a computation loop instead of only when
</span><br>
<span class="quotelev1">&gt; it is in the MPI library. To do so configure with these additional flags:
</span><br>
<span class="quotelev1">&gt;  --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of Open MPI are you using? What version of BLCR?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 6, 2008, at 3:55 PM, arun dhakne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the procedure i have followed to install openmpi. Is there
</span><br>
<span class="quotelev2">&gt;&gt; some installation or environment setting problem in here?
</span><br>
<span class="quotelev2">&gt;&gt; an openmpi program with 4 process is run across 2 dual-core intel
</span><br>
<span class="quotelev2">&gt;&gt; machines, with 2 processes running on each of the machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint is successful but ompi-restart fails with following error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $:&gt; ompi-restart ompi_global_snapshot_6045.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 6372 on node
</span><br>
<span class="quotelev2">&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open-mpi installation steps:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/csgrad/audhakne/.openmpi --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr=/usr/lib64 --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=$HOME/.openmpi/lib/:$HOME/.openmpi/lib/openmpi:/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$HOME/.openmpi/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: blcr is installed as a module
</span><br>
<span class="quotelev2">&gt;&gt; $:&gt; lsmod | grep blcr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; blcr                  117892  0
</span><br>
<span class="quotelev2">&gt;&gt; blcr_vmadump           58264  1 blcr
</span><br>
<span class="quotelev2">&gt;&gt; blcr_imports           46080  2 blcr,blcr_vmadump
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if there is problem with above procedure, thanks a
</span><br>
<span class="quotelev2">&gt;&gt; lot for your time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: arun dhakne &lt;arundhakne_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, Sep 30, 2008 at 12:52 AM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: ompi-restart issue : ompi-restart doesn't work across nodes
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had gone through some previous ompi-restart issues but i couldn't
</span><br>
<span class="quotelev2">&gt;&gt; find anything similar to this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed blcr, and configured open-mpi 'openmpi-1.3a1r19645'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i) If the sample mpi program say ( np 4 on single machine that is
</span><br>
<span class="quotelev2">&gt;&gt; without any hostfile )is ran and I try to checkpoint it, it happens
</span><br>
<span class="quotelev2">&gt;&gt; successfully and even ompi-restart works in this case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ii) If the sample mpi program is ran across say 2 different nodes and
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint happens successfully BUT ompi-restart throws following
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi-restart ompi_global_snapshot_7604.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 3 with PID 9590 on node
</span><br>
<span class="quotelev2">&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if more information is needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Arun U. Dhakne
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
<p><p><p><pre>
-- 
Thanks and Regards,
Arun U. Dhakne
Graduate Student
Computer Science and Engineering Dept.
State University of New York at Buffalo


</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6916/core.tar.gz">core.tar.gz</a>
</ul>
<!-- attachment="core.tar.gz" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6916/hello.c">hello.c</a>
</ul>
<!-- attachment="hello.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6917.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
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
