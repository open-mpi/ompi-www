<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 22:43:16 2012" -->
<!-- isoreceived="20120223034316" -->
<!-- sent="Wed, 22 Feb 2012 22:43:11 -0500" -->
<!-- isosent="20120223034311" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="081EA18E-815F-419A-A768-F3070DBA1529_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CA+tOgLHzJVW-jJx-x_4vcSztuZ2fT6jCpy7VwqemcaAQ-jfsBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 22:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18554.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Previous message:</strong> <a href="18552.php">Jeremy: "[OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18552.php">Jeremy: "[OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremy,
<br>
I implemented the APM support for openib btl a long time ago. I do not remember all the details of the implementation, but I remember that it is used to support LMC bits and multiple ib ports. Unfortunately I'm super busy this week. I will try look at it early next week.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Feb 22, 2012, at 1:44 PM, Jeremy wrote:
&gt; Hi,
&gt; 
&gt; I am have a problem getting Alternative Path Migration (APM) to work
&gt; over the InfiniBand ports on my HCA.
&gt; 
&gt; Details on my configuration and the issue I have are below.  Please
&gt; let me know if you can provide any suggestions or corrections to my
&gt; configuration?  I will be happy to try other experiments and tests or
&gt; provide additional details to debug this problem further.
&gt; 
&gt; I have reviewed the Open MPI FAQ and the archive of this mailing list
&gt; but I was unable to resolve my problem.  There was one thread on
&gt; mult-rail fail-over with IB but it did not provide sufficient
&gt; information.
&gt; 
&gt; Thanks for your help,
&gt; Jeremy
&gt; 
&gt; Configuration:
&gt; MPI version 1.4.3 Bundled with OFED.
&gt; I have also tested with MPI version 1.5.4 but the results were the same.
&gt; 
&gt; I have 2 machines, each machine has a dual port Mellanox IB HCA
&gt; Mellanox MCX354A-FCBT (ConnectX-3 FDR).
&gt; I have cabled both ports of each HCA to the same IB Switch (Mellanox SX6036).
&gt; 
&gt; What I expected to happen:
&gt; I am trying to migrate data transmission between 2 ports of the same HCA.
&gt; Start an MPI application.  Unplug the fiber cable from Port 1 of an
&gt; HCA.  Observe that the MPI application continues and data is sent
&gt; across Port 2 of the HCA.
&gt; 
&gt; However, when I unplug the cable from Port 1 of the IB HCA, the MPI
&gt; application hangs and I get the following error messages:
&gt; Error 10: IBV_EVENT_PORT_ERR
&gt; Error 7: IBV_EVENT_PATH_MIG_ERR
&gt; Alternative path migration event reported
&gt; Trying to find additional path&#133;
&gt; APM: already all ports were used port_num 2 apm_port 2
&gt; 
&gt; I've pasted the full verbose error message at the bottom of this email.
&gt; 
&gt; I started the MPI application using the following mpirun invocation:
&gt; mpirun &#150;np 2 &#150;machinefile machines &#150;mca btl_openib_enable_apm_over_ports 1 demo
&gt; 
&gt; What works:
&gt; I think that the low level Mellanox IB hardware is working as
&gt; expected.  The switch, cables and both HCA ports move data OK.
&gt; If I don't use the btl_openib_enable_apm_over_ports option then MPI
&gt; traffic is evenly spread across both Port 1 and Port 2 while it is
&gt; running.
&gt; Also, I am able to successfully do fail-over using a bonded device
&gt; with IP. For example, if I use netperf to send TCP data over a bonded
&gt; IPoIB device I get the expected behavior.  When I unplug Port 1,
&gt; netperf keeps running and traffic goes over Port 2.
&gt; 
&gt; Detailed Error Message:
&gt; --------------------------------------------------------------------------
&gt; The OpenFabrics stack has reported a network error event.  Open MPI
&gt; will try to continue, but your job may end up failing.
&gt; 
&gt;  Local host:        bones
&gt;  MPI process PID:   23115
&gt;  Error number:      10 (IBV_EVENT_PORT_ERR)
&gt; 
&gt; This error may indicate connectivity problems within the fabric;
&gt; please contact your system administrator.
&gt; --------------------------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; The OpenFabrics stack has reported a network error event.  Open MPI
&gt; will try to continue, but your job may end up failing.
&gt; 
&gt;  Local host:        bones
&gt;  MPI process PID:   23115
&gt;  Error number:      7 (IBV_EVENT_PATH_MIG_ERR)
&gt; 
&gt; This error may indicate connectivity problems within the fabric;
&gt; please contact your system administrator.
&gt; --------------------------------------------------------------------------
&gt; [bones][[57528,1],0][btl_openib_async.c:327:btl_openib_async_deviceh]
&gt; Alternative path migration event reported
&gt; [bones][[57528,1],0][btl_openib_async.c:329:btl_openib_async_deviceh]
&gt; Trying to find additional path...
&gt; [bones][[57528,1],0][btl_openib_async.c:516:apm_update_port] APM:
&gt; already all ports were used port_num 2 apm_port 2
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18554.php">Salvatore Podda: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<li><strong>Previous message:</strong> <a href="18552.php">Jeremy: "[OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18552.php">Jeremy: "[OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18555.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
