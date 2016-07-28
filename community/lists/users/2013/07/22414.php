<?
$subject_val = "Re: [OMPI users] openmpi+infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 30 12:45:43 2013" -->
<!-- isoreceived="20130730164543" -->
<!-- sent="Tue, 30 Jul 2013 18:45:21 +0200" -->
<!-- isosent="20130730164521" -->
<!-- name="christian schmitt" -->
<!-- email="schmitt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+infiniband" -->
<!-- id="51F7EDA1.7010709_at_gsc.tu-darmstadt.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="51F7CEF0.2090506_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+infiniband<br>
<strong>From:</strong> christian schmitt (<em>schmitt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-30 12:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22415.php">Paul Kapinos: "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Previous message:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<li><strong>In reply to:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>Thank you for this. When I start the mpi test with the option &quot;--mca btl
<br>
openib,sm,self&quot; I can start it on on node. But I can't start it on two
<br>
nodes. The Error then is:
<br>
<p>&nbsp;schmitt$ /amd/software/openmpi-1.6.5/cltest/bin/mpirun -n 2 -H
<br>
cluster1,cluster2 /worklocal/schmitt/imb/3.2.4/src/IMB-MPI1 SENDRECV
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[49963,1],0]) is on host: cluster1.gsc.ce.tu-darmstadt.de
<br>
&nbsp;&nbsp;Process 2 ([[49963,1],1]) is on host: cluster2
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.  This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.  Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>&nbsp;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
&nbsp;* Run your application with MPI_THREAD_SINGLE.
<br>
&nbsp;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29116] *** An error occurred in MPI_Init
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29116] *** on a NULL communicator
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29116] *** Unknown error
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29116] *** MPI_ERRORS_ARE_FATAL: your
<br>
MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: cluster1.gsc.ce.tu-darmstadt.de
<br>
&nbsp;&nbsp;PID:        29116
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 5194 on
<br>
node cluster2 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29113] 1 more process has sent help
<br>
message help-mca-bml-r2.txt / unreachable proc
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29113] Set MCA parameter
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29113] 1 more process has sent help
<br>
message help-mpi-runtime / mpi_init:startup:pml-add-procs-fail
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29113] 1 more process has sent help
<br>
message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[cluster1.gsc.ce.tu-darmstadt.de:29113] 1 more process has sent help
<br>
message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
<p>It seems like the mpi doesn&#146;t know how to communicate between the nodes.
<br>
Any idea?
<br>
<p><p>Christian Schmitt
<br>
Network and Systemadministrator
<br>
Technische Universit&#228;t Darmstadt
<br>
Graduate School of Computational Engineering
<br>
Dolivostra&#223;e 15, S4 10/326
<br>
64293 Darmstadt
<br>
<p>Office: +49 (0)6151 / 16-4265
<br>
Fax:    +49 (0)6151 / 16-4459
<br>
<p>schmitt_at_[hidden]
<br>
<p><a href="http://www.graduate-school-ce.de/">http://www.graduate-school-ce.de/</a>
<br>
<p>On 07/30/2013 04:34 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Christian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand you right, you want to use Open MPI with
</span><br>
<span class="quotelev1">&gt; Infiniband, not Ethernet, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that is the case, try
</span><br>
<span class="quotelev1">&gt; '-mca btl openib,sm,self'
</span><br>
<span class="quotelev1">&gt; in your mpiexec command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think ipoib is required for Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See these FAQ (FAQ is the best OpenMPI documentation):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-btl">http://www.open-mpi.org/faq/?category=openfabrics#ib-btl</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/30/2013 09:01 AM, christian schmitt wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hallo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m trying to get openmpi(1.6.5) running with/over infiniband.
</span><br>
<span class="quotelev2">&gt;&gt; My system is a centOS 6.3. I have installed the Mellanox OFED driver
</span><br>
<span class="quotelev2">&gt;&gt; (2.0) and everything seems working. ibhosts shows all hosts and the
</span><br>
<span class="quotelev2">&gt;&gt; switch.
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;hca_self_test.ofed&quot; shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---- Performing Adapter Device Self Test ----
</span><br>
<span class="quotelev2">&gt;&gt; Number of CAs Detected ................. 1
</span><br>
<span class="quotelev2">&gt;&gt; PCI Device Check ....................... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Arch ............................ x86_64
</span><br>
<span class="quotelev2">&gt;&gt; Host Driver Version .................... MLNX_OFED_LINUX-2.0-2.0.5
</span><br>
<span class="quotelev2">&gt;&gt; (OFED-2.0-2.0.5): 2.6.32-279.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; Host Driver RPM Check .................. PASS
</span><br>
<span class="quotelev2">&gt;&gt; Firmware on CA #0 VPI .................. v2.11.500
</span><br>
<span class="quotelev2">&gt;&gt; Firmware Check on CA #0 (VPI) .......... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Host Driver Initialization ............. PASS&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Number of CA Ports Active .............. 1
</span><br>
<span class="quotelev2">&gt;&gt; Port State of Port #1 on CA #0 (VPI)..... UP 4X QDR (InfiniBand)
</span><br>
<span class="quotelev2">&gt;&gt; Error Counter Check on CA #0 (VPI)...... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Syslog Check .................... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Node GUID on CA #0 (VPI) ............... 00:02:c9:03:00:1f:a4:e0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;ompi_info | grep openib&quot; shows:
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: openib (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I now compiled openmpi with the option &quot;--with-openib&quot; and tried to
</span><br>
<span class="quotelev2">&gt;&gt; run the intel MPI test. But it still uses the Ethernet interface to
</span><br>
<span class="quotelev2">&gt;&gt; communicate. Only when I configure ipoib (ib0) and start my job with
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--mca btl ^openib --mca btl_tcp_if_include ib0&quot; it runs with
</span><br>
<span class="quotelev2">&gt;&gt; infiniband. But when I&#180;m right, it should work without the ib0 interface.
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m quiet new to infiniband so maybe I forgot something.
</span><br>
<span class="quotelev2">&gt;&gt; I'm grateful for any information that help me solving this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Christian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22415.php">Paul Kapinos: "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Previous message:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<li><strong>In reply to:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
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
