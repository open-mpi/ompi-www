<?
$subject_val = "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 14:01:47 2008" -->
<!-- isoreceived="20081009180147" -->
<!-- sent="Thu, 9 Oct 2008 14:01:46 -0400" -->
<!-- isosent="20081009180146" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??" -->
<!-- id="795F41B7-50A6-4BB7-B05D-E1DE5DCA7A59_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="838cb4200810081922h3ac1b095w75f3ba5c588aa986_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 14:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6926.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6924.php">Anthony Chan: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I cannot interpret the raw core files since they are specific your  
<br>
system and setup. Can you run it through gdb and get a backtrace? &quot;gdb  
<br>
hello core.1234&quot; then use the 'bt' command from inside gdb.
<br>
<p>That will help me start to focus in on the problem.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Oct 8, 2008, at 10:22 PM, arun dhakne wrote:
<br>
<p><span class="quotelev1">&gt; I have configured with the additional flags(--enable-ft-thread
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads) but there is no change in behaviour, it still
</span><br>
<span class="quotelev1">&gt; gives seg fault.
</span><br>
<span class="quotelev1">&gt; open mpi version:
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.3a1r19685
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; blcr version:
</span><br>
<span class="quotelev1">&gt; version 0.7.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The core file is attached.
</span><br>
<span class="quotelev1">&gt; hello.c is sample mpi program whose core is dumped is also attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~]$ ompi-restart ompi_global_snapshot_11219.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 11288 on node
</span><br>
<span class="quotelev1">&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev1">&gt; fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 6, 2008 at 6:44 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The installation looks ok, though I'm not sure what is causing the  
</span><br>
<span class="quotelev2">&gt;&gt; segfault
</span><br>
<span class="quotelev2">&gt;&gt; of the restarted process. Two things to try. First can you send me a
</span><br>
<span class="quotelev2">&gt;&gt; backtrace from the core file that is generated from the  
</span><br>
<span class="quotelev2">&gt;&gt; segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; That will provide insight into what is causing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second you may try to enable the C/R thread which allows for a  
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint to
</span><br>
<span class="quotelev2">&gt;&gt; progress when an application is in a computation loop instead of  
</span><br>
<span class="quotelev2">&gt;&gt; only when
</span><br>
<span class="quotelev2">&gt;&gt; it is in the MPI library. To do so configure with these additional  
</span><br>
<span class="quotelev2">&gt;&gt; flags:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of Open MPI are you using? What version of BLCR?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 6, 2008, at 3:55 PM, arun dhakne wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the procedure i have followed to install openmpi. Is there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some installation or environment setting problem in here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an openmpi program with 4 process is run across 2 dual-core intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines, with 2 processes running on each of the machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-checkpoint is successful but ompi-restart fails with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $:&gt; ompi-restart ompi_global_snapshot_6045.ckpt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 6372 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open-mpi installation steps:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/home/csgrad/audhakne/.openmpi --with-ft=cr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-blcr=/usr/lib64 --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=$HOME/.openmpi/lib/:$HOME/.openmpi/lib/openmpi:/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usr/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$HOME/.openmpi/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: blcr is installed as a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $:&gt; lsmod | grep blcr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blcr                  117892  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blcr_vmadump           58264  1 blcr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blcr_imports           46080  2 blcr,blcr_vmadump
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know if there is problem with above procedure,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lot for your time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: arun dhakne &lt;arundhakne_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, Sep 30, 2008 at 12:52 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: ompi-restart issue : ompi-restart doesn't work across nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had gone through some previous ompi-restart issues but i couldn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find anything similar to this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have installed blcr, and configured open-mpi 'openmpi-1.3a1r19645'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i) If the sample mpi program say ( np 4 on single machine that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without any hostfile )is ran and I try to checkpoint it, it happens
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully and even ompi-restart works in this case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ii) If the sample mpi program is ran across say 2 different nodes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint happens successfully BUT ompi-restart throws following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi-restart ompi_global_snapshot_7604.ckpt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 3 with PID 9590 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know if more information is needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Arun U. Dhakne
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Arun U. Dhakne
</span><br>
<span class="quotelev1">&gt; Graduate Student
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering Dept.
</span><br>
<span class="quotelev1">&gt; State University of New York at Buffalo
</span><br>
<span class="quotelev1">&gt; &lt;core.tar.gz&gt;&lt;hello.c&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6926.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6924.php">Anthony Chan: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
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
