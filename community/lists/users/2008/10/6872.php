<?
$subject_val = "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 18:44:34 2008" -->
<!-- isoreceived="20081006224434" -->
<!-- sent="Mon, 6 Oct 2008 18:44:30 -0400" -->
<!-- isosent="20081006224430" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??" -->
<!-- id="43DFBB29-A171-43D9-B88E-B93050B17BDE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="838cb4200810061255y2ebed924m528decdd5c940e35_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-10-06 18:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6871.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6869.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The installation looks ok, though I'm not sure what is causing the  
<br>
segfault of the restarted process. Two things to try. First can you  
<br>
send me a backtrace from the core file that is generated from the  
<br>
segmentation fault. That will provide insight into what is causing it.
<br>
<p>Second you may try to enable the C/R thread which allows for a  
<br>
checkpoint to progress when an application is in a computation loop  
<br>
instead of only when it is in the MPI library. To do so configure with  
<br>
these additional flags:
<br>
&nbsp;&nbsp;&nbsp;--enable-ft-thread --enable-mpi-threads
<br>
<p>What version of Open MPI are you using? What version of BLCR?
<br>
<p>Best,
<br>
Josh
<br>
<p>On Oct 6, 2008, at 3:55 PM, arun dhakne wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the procedure i have followed to install openmpi. Is there
</span><br>
<span class="quotelev1">&gt; some installation or environment setting problem in here?
</span><br>
<span class="quotelev1">&gt; an openmpi program with 4 process is run across 2 dual-core intel
</span><br>
<span class="quotelev1">&gt; machines, with 2 processes running on each of the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint is successful but ompi-restart fails with following  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $:&gt; ompi-restart ompi_global_snapshot_6045.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 6372 on node
</span><br>
<span class="quotelev1">&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev1">&gt; fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open-mpi installation steps:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/csgrad/audhakne/.openmpi --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --with-blcr=/usr/lib64 --enable-debug
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$HOME/.openmpi/lib/:$HOME/.openmpi/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi:/usr/lib64
</span><br>
<span class="quotelev1">&gt; export PATH=$HOME/.openmpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: blcr is installed as a module
</span><br>
<span class="quotelev1">&gt; $:&gt; lsmod | grep blcr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; blcr                  117892  0
</span><br>
<span class="quotelev1">&gt; blcr_vmadump           58264  1 blcr
</span><br>
<span class="quotelev1">&gt; blcr_imports           46080  2 blcr,blcr_vmadump
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if there is problem with above procedure, thanks a
</span><br>
<span class="quotelev1">&gt; lot for your time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: arun dhakne &lt;arundhakne_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, Sep 30, 2008 at 12:52 AM
</span><br>
<span class="quotelev1">&gt; Subject: ompi-restart issue : ompi-restart doesn't work across nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had gone through some previous ompi-restart issues but i couldn't
</span><br>
<span class="quotelev1">&gt; find anything similar to this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed blcr, and configured open-mpi 'openmpi-1.3a1r19645'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i) If the sample mpi program say ( np 4 on single machine that is
</span><br>
<span class="quotelev1">&gt; without any hostfile )is ran and I try to checkpoint it, it happens
</span><br>
<span class="quotelev1">&gt; successfully and even ompi-restart works in this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ii) If the sample mpi program is ran across say 2 different nodes and
</span><br>
<span class="quotelev1">&gt; checkpoint happens successfully BUT ompi-restart throws following
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi-restart ompi_global_snapshot_7604.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 9590 on node
</span><br>
<span class="quotelev1">&gt; acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
</span><br>
<span class="quotelev1">&gt; fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if more information is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Arun U. Dhakne
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Previous message:</strong> <a href="6871.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6869.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Reply:</strong> <a href="6916.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
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
