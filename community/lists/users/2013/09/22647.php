<?
$subject_val = "Re: [OMPI users] Max number of processes per host for an OMPI run?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 12 10:30:17 2013" -->
<!-- isoreceived="20130912143017" -->
<!-- sent="Thu, 12 Sep 2013 16:30:10 +0200" -->
<!-- isosent="20130912143010" -->
<!-- name="Francesco Simula" -->
<!-- email="francesco.simula_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Max number of processes per host for an OMPI run?" -->
<!-- id="b0cadf4d8b722b180cfeb2332a78df0b_at_roma1.infn.it" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F88C163_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Francesco Simula (<em>francesco.simula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-12 10:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22646.php">Matthieu Brucher: "[OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confirm that raising the max 'open files' limit to 2048 allows 
<br>
launching up to 510 processes per node.
<br>
<p>By the way, I just discovered that launching the processes while being 
<br>
logged directly onto the host instead of the front-end machine gives a 
<br>
clearer error message that would have probably tipped me off:
<br>
<p>[cut]
<br>
[fsimula_at_q012 ~]$ mpirun -np 255 -host q012 uptime | wc -l
<br>
[q012.qng:31455] [[22942,0],0] ORTE_ERROR_LOG: The system limit on 
<br>
number of pipes a process can open was reached in file 
<br>
base/odls_base_default_fns.c at line 1739
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered 
<br>
an error
<br>
on node q012.qng. More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
<p>[fsimula_at_q012 ~]$ ulimit -n 2048
<br>
[fsimula_at_q012 ~]$ mpirun -np 510 -host q012 uptime | wc -l
<br>
510
<br>
[/cut]
<br>
<p>Many thanks to both Jeff and Ralph for pointing me in the right 
<br>
direction.
<br>
Francesco
<br>
<p>Il 2013-09-11 09:46 Jeff Squyres (jsquyres) ha scritto:
<br>
<span class="quotelev1">&gt; As Ralph said, you're probably running out of file descriptors;
</span><br>
<span class="quotelev1">&gt; mpirun uses a few (2-3? I don't remember offhand) for each MPI 
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; launched.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are many factors that can cause limits like this -- file
</span><br>
<span class="quotelev1">&gt; descriptors are only one.  It very much depends on the configuration
</span><br>
<span class="quotelev1">&gt; of the machine on which you're running.  My point: Sorry, but it'll
</span><br>
<span class="quotelev1">&gt; likely take some experimentation on your part to figure out how many
</span><br>
<span class="quotelev1">&gt; you can run on a single machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2013, at 4:10 PM, Francesco Simula
</span><br>
<span class="quotelev1">&gt; &lt;francesco.simula_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear forum,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I probably must apologize in advance for the very basic question but 
</span><br>
<span class="quotelev2">&gt;&gt; I wasn't able to find an answer elsewhere:
</span><br>
<span class="quotelev2">&gt;&gt; how do I find the maximum number of processes that can be 
</span><br>
<span class="quotelev2">&gt;&gt; concurrently instantiated by mpirun on one single host of a cluster?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I launch (on an CentOS 6.3 cluster with quad-core dual Xeons 
</span><br>
<span class="quotelev2">&gt;&gt; nodes, equipped with OpenMPI 1.5.4 and IB HCAs but I think this latter 
</span><br>
<span class="quotelev2">&gt;&gt; is of no consequence):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 250 -host q012 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [/cut]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I expect and obtain 250 rows of:
</span><br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt; q012.qng
</span><br>
<span class="quotelev2">&gt;&gt; [/cut]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same for 251, 252, 253 and 254 BUT not for 255, when it returns:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to start the specified application as it 
</span><br>
<span class="quotelev2">&gt;&gt; encountered an error
</span><br>
<span class="quotelev2">&gt;&gt; on node q012. More information may be available above.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [/cut]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know that 250 processes is quite an oversubscription for a single 
</span><br>
<span class="quotelev2">&gt;&gt; node that has no more than 8 real cores but I wanted to see the actual 
</span><br>
<span class="quotelev2">&gt;&gt; degradation of performances instead of a crash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which hard limit (in OpenMPI or in the system) am I hitting for not 
</span><br>
<span class="quotelev2">&gt;&gt; being able to run 255 MPI processes on one single host?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output of ulimit -a for the user is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt; ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt; core file size          (blocks, -c) 1000000
</span><br>
<span class="quotelev2">&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev2">&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; pending signals                 (-i) 95054
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev2">&gt;&gt; stack size              (kbytes, -s) 100000
</span><br>
<span class="quotelev2">&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev2">&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; [/cut]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Francesco
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22648.php">amirreza Hashemi: "[OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22646.php">Matthieu Brucher: "[OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
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
