<?
$subject_val = "[OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 13:44:14 2012" -->
<!-- isoreceived="20120222184414" -->
<!-- sent="Wed, 22 Feb 2012 13:44:10 -0500" -->
<!-- isosent="20120222184410" -->
<!-- name="Jeremy" -->
<!-- email="spritzydog_at_[hidden]" -->
<!-- subject="[OMPI users] InfiniBand path migration not working" -->
<!-- id="CA+tOgLHzJVW-jJx-x_4vcSztuZ2fT6jCpy7VwqemcaAQ-jfsBw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Jeremy (<em>spritzydog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 13:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18551.php">Shamis, Pavel: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am have a problem getting Alternative Path Migration (APM) to work
<br>
over the InfiniBand ports on my HCA.
<br>
<p>Details on my configuration and the issue I have are below.  Please
<br>
let me know if you can provide any suggestions or corrections to my
<br>
configuration?  I will be happy to try other experiments and tests or
<br>
provide additional details to debug this problem further.
<br>
<p>I have reviewed the Open MPI FAQ and the archive of this mailing list
<br>
but I was unable to resolve my problem.  There was one thread on
<br>
mult-rail fail-over with IB but it did not provide sufficient
<br>
information.
<br>
<p>Thanks for your help,
<br>
Jeremy
<br>
<p>Configuration:
<br>
MPI version 1.4.3 Bundled with OFED.
<br>
I have also tested with MPI version 1.5.4 but the results were the same.
<br>
<p>I have 2 machines, each machine has a dual port Mellanox IB HCA
<br>
Mellanox MCX354A-FCBT (ConnectX-3 FDR).
<br>
I have cabled both ports of each HCA to the same IB Switch (Mellanox SX6036).
<br>
<p>What I expected to happen:
<br>
I am trying to migrate data transmission between 2 ports of the same HCA.
<br>
Start an MPI application.  Unplug the fiber cable from Port 1 of an
<br>
HCA.  Observe that the MPI application continues and data is sent
<br>
across Port 2 of the HCA.
<br>
<p>However, when I unplug the cable from Port 1 of the IB HCA, the MPI
<br>
application hangs and I get the following error messages:
<br>
Error 10: IBV_EVENT_PORT_ERR
<br>
Error 7: IBV_EVENT_PATH_MIG_ERR
<br>
Alternative path migration event reported
<br>
Trying to find additional path&#133;
<br>
APM: already all ports were used port_num 2 apm_port 2
<br>
<p>I've pasted the full verbose error message at the bottom of this email.
<br>
<p>I started the MPI application using the following mpirun invocation:
<br>
mpirun &#150;np 2 &#150;machinefile machines &#150;mca btl_openib_enable_apm_over_ports 1 demo
<br>
<p>What works:
<br>
I think that the low level Mellanox IB hardware is working as
<br>
expected.  The switch, cables and both HCA ports move data OK.
<br>
If I don't use the btl_openib_enable_apm_over_ports option then MPI
<br>
traffic is evenly spread across both Port 1 and Port 2 while it is
<br>
running.
<br>
Also, I am able to successfully do fail-over using a bonded device
<br>
with IP. For example, if I use netperf to send TCP data over a bonded
<br>
IPoIB device I get the expected behavior.  When I unplug Port 1,
<br>
netperf keeps running and traffic goes over Port 2.
<br>
<p>Detailed Error Message:
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;Local host:        bones
<br>
&nbsp;&nbsp;MPI process PID:   23115
<br>
&nbsp;&nbsp;Error number:      10 (IBV_EVENT_PORT_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;Local host:        bones
<br>
&nbsp;&nbsp;MPI process PID:   23115
<br>
&nbsp;&nbsp;Error number:      7 (IBV_EVENT_PATH_MIG_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
[bones][[57528,1],0][btl_openib_async.c:327:btl_openib_async_deviceh]
<br>
Alternative path migration event reported
<br>
[bones][[57528,1],0][btl_openib_async.c:329:btl_openib_async_deviceh]
<br>
Trying to find additional path...
<br>
[bones][[57528,1],0][btl_openib_async.c:516:apm_update_port] APM:
<br>
already all ports were used port_num 2 apm_port 2
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18551.php">Shamis, Pavel: "Re: [OMPI users] openMPI installation on front-end and worker nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18553.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
