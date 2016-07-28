<?
$subject_val = "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 22:16:04 2008" -->
<!-- isoreceived="20081010021604" -->
<!-- sent="Thu, 9 Oct 2008 22:15:59 -0400" -->
<!-- isosent="20081010021559" -->
<!-- name="arun dhakne" -->
<!-- email="arundhakne_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??" -->
<!-- id="838cb4200810091915t49a2ac2dn84b897dfab26edd4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="795F41B7-50A6-4BB7-B05D-E1DE5DCA7A59_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-10-09 22:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6932.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6930.php">Rene Salmon: "[OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>In reply to:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These are the bt's of 2 cores ..
<br>
<p>gdb hello core.14653
<br>
<p>#0  0x000000300bc0cbc0 in ?? ()
<br>
#1  0x00002aaaab09d0fb in ?? ()
<br>
#2  0x00007fff6a782920 in ?? ()
<br>
#3  0x00002aaaaae3d348 in ?? ()
<br>
#4  0x00007fff6a7827b0 in ?? ()
<br>
#5  0x0000003806e6bcb4 in ?? ()
<br>
#6  0x0000000000000000 in ?? ()
<br>
<p>gdb hello core.14654
<br>
<p>#0  0x000000300bc0cbc0 in ?? ()
<br>
#1  0x00002aaaab09d0fb in ?? ()
<br>
#2  0x00007fff92eb3040 in ?? ()
<br>
#3  0x00002aaaaae3d348 in ?? ()
<br>
#4  0x00007fff92eb2ed0 in ?? ()
<br>
#5  0x0000003806e6bcb4 in ?? ()
<br>
#6  0x0000000000000000 in ?? ()
<br>
<p>Please let me know if any other info is required.
<br>
<p>On Thu, Oct 9, 2008 at 2:01 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I cannot interpret the raw core files since they are specific your system
</span><br>
<span class="quotelev1">&gt; and setup. Can you run it through gdb and get a backtrace? &quot;gdb hello
</span><br>
<span class="quotelev1">&gt; core.1234&quot; then use the 'bt' command from inside gdb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That will help me start to focus in on the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2008, at 10:22 PM, arun dhakne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have configured with the additional flags(--enable-ft-thread
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads) but there is no change in behaviour, it still
</span><br>
<span class="quotelev2">&gt;&gt; gives seg fault.
</span><br>
<span class="quotelev2">&gt;&gt; open mpi version:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI: 1.3a1r19685
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; blcr version:
</span><br>
<span class="quotelev2">&gt;&gt; version 0.7.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The core file is attached.
</span><br>
<span class="quotelev2">&gt;&gt; hello.c is sample mpi program whose core is dumped is also attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~]$ ompi-restart ompi_global_snapshot_11219.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 11288 on node
</span><br>
<span class="quotelev2">&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 6, 2008 at 6:44 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The installation looks ok, though I'm not sure what is causing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the restarted process. Two things to try. First can you send me a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; backtrace from the core file that is generated from the segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That will provide insight into what is causing it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Second you may try to enable the C/R thread which allows for a checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress when an application is in a computation loop instead of only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is in the MPI library. To do so configure with these additional flags:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of Open MPI are you using? What version of BLCR?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 6, 2008, at 3:55 PM, arun dhakne wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is the procedure i have followed to install openmpi. Is there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some installation or environment setting problem in here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an openmpi program with 4 process is run across 2 dual-core intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines, with 2 processes running on each of the machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-checkpoint is successful but ompi-restart fails with following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $:&gt; ompi-restart ompi_global_snapshot_6045.ckpt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 6372 on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open-mpi installation steps:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/home/csgrad/audhakne/.openmpi --with-ft=cr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-blcr=/usr/lib64 --enable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=$HOME/.openmpi/lib/:$HOME/.openmpi/lib/openmpi:/usr/lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export PATH=$HOME/.openmpi/bin:$PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NOTE: blcr is installed as a module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $:&gt; lsmod | grep blcr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; blcr                  117892  0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; blcr_vmadump           58264  1 blcr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; blcr_imports           46080  2 blcr,blcr_vmadump
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please let me know if there is problem with above procedure, thanks a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lot for your time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: arun dhakne &lt;arundhakne_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Tue, Sep 30, 2008 at 12:52 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: ompi-restart issue : ompi-restart doesn't work across nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had gone through some previous ompi-restart issues but i couldn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find anything similar to this problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have installed blcr, and configured open-mpi 'openmpi-1.3a1r19645'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i) If the sample mpi program say ( np 4 on single machine that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without any hostfile )is ran and I try to checkpoint it, it happens
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; successfully and even ompi-restart works in this case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ii) If the sample mpi program is ran across say 2 different nodes and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checkpoint happens successfully BUT ompi-restart throws following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ompi-restart ompi_global_snapshot_7604.ckpt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 3 with PID 9590 on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please let me know if more information is needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks and Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Arun U. Dhakne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Arun U. Dhakne
</span><br>
<span class="quotelev2">&gt;&gt; Graduate Student
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Engineering Dept.
</span><br>
<span class="quotelev2">&gt;&gt; State University of New York at Buffalo
</span><br>
<span class="quotelev2">&gt;&gt; &lt;core.tar.gz&gt;&lt;hello.c&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6932.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6930.php">Rene Salmon: "[OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>In reply to:</strong> <a href="6925.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
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
