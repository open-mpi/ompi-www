<?
$subject_val = "Re: [OMPI users] Max number of processes per host for an OMPI run?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 03:46:02 2013" -->
<!-- isoreceived="20130911074602" -->
<!-- sent="Wed, 11 Sep 2013 07:46:00 +0000" -->
<!-- isosent="20130911074600" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Max number of processes per host for an OMPI run?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F88C163_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d3f2d54785c6c2a9294936a1fa622f6f_at_roma1.infn.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Max number of processes per host for an OMPI run?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-11 03:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22639.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22635.php">Francesco Simula: "[OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Reply:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Ralph said, you're probably running out of file descriptors; mpirun uses a few (2-3? I don't remember offhand) for each MPI process launched.
<br>
<p>There are many factors that can cause limits like this -- file descriptors are only one.  It very much depends on the configuration of the machine on which you're running.  My point: Sorry, but it'll likely take some experimentation on your part to figure out how many you can run on a single machine.
<br>
<p><p>On Sep 10, 2013, at 4:10 PM, Francesco Simula &lt;francesco.simula_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear forum,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I probably must apologize in advance for the very basic question but I wasn't able to find an answer elsewhere:
</span><br>
<span class="quotelev1">&gt; how do I find the maximum number of processes that can be concurrently instantiated by mpirun on one single host of a cluster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I launch (on an CentOS 6.3 cluster with quad-core dual Xeons nodes, equipped with OpenMPI 1.5.4 and IB HCAs but I think this latter is of no consequence):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; mpirun -np 250 -host q012 hostname
</span><br>
<span class="quotelev1">&gt; [/cut]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I expect and obtain 250 rows of:
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; q012.qng
</span><br>
<span class="quotelev1">&gt; [/cut]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same for 251, 252, 253 and 254 BUT not for 255, when it returns:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered an error
</span><br>
<span class="quotelev1">&gt; on node q012. More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [/cut]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that 250 processes is quite an oversubscription for a single node that has no more than 8 real cores but I wanted to see the actual degradation of performances instead of a crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which hard limit (in OpenMPI or in the system) am I hitting for not being able to run 255 MPI processes on one single host?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of ulimit -a for the user is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 1000000
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 95054
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 100000
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; [/cut]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Francesco
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22639.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22635.php">Francesco Simula: "[OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Reply:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
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
