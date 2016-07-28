<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 09:11:17 2009" -->
<!-- isoreceived="20090811131117" -->
<!-- sent="Tue, 11 Aug 2009 06:11:12 -0700" -->
<!-- isosent="20090811131112" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="6F7E97EF-1758-4AA0-B13B-00DE8D18393E_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E029B10C-ECF3-4D3E-BE0C-538C3887AAD2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 09:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10-Aug-09, at 8:03 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Interesting! Well, I always make sure I have my personal OMPI build  
</span><br>
<span class="quotelev1">&gt; before any system stuff, and I work exclusively on Mac OS-X:
</span><br>
<p>I am still finding this very mysterious....
<br>
<p>I have removed all the OS-X -supplied libraries, recompiled and  
<br>
installed openmpi 1.3.3, and I am *still* getting this warning when  
<br>
running ompi_info:
<br>
<p>[saturna.cluster:50307] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:50307] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:50307] mca: base: component_find: ras  
<br>
&quot;mca_ras_dash_host&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:50307] mca: base: component_find: ras  
<br>
&quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:50307] mca: base: component_find: ras  
<br>
&quot;mca_ras_localhost&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:50307] mca: base: component_find: ras &quot;mca_ras_xgrid&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:50307] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
<p>So, I guess I'm not clear how the library can be an issue...
<br>
<p>I *do* get another error from running the gcm that I do not get from  
<br>
running simpler jobs - hopefully this helps explain things:
<br>
<p>[xserve03.local][[61029,1],4][btl_tcp_endpoint.c: 
<br>
486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process  
<br>
identifier [[61029,1],3]
<br>
<p>The processes are running, the mitgcmuv processes are running on the  
<br>
xserves, and using considerable resources!  They open STDERR/STDOUT  
<br>
but nothing is flushed into them, including the few print statements  
<br>
I've put in before and after MPI_INIT (as Ralph suggested).
<br>
<p>On 11-Aug-09, at 4:17 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; If you suspect a hang then you can use the command orte-ps (on the  
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev1">&gt; where the mpirun is running) and it should show you your job.  This  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; tell you if the job is started and still running or if there was a
</span><br>
<span class="quotelev1">&gt; problem launching.
</span><br>
<p>/usr/local/openmpi/bin/orte-ps
<br>
[saturna.cluster:51840] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:51840] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
<p><p>Information from mpirun [61029,0]
<br>
-----------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JobID |   State |  Slots | Num Procs |
<br>
------------------------------------------
<br>
[61029,1] | Running |      2 |        16 |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process Name |      ORTE Name | Local Rank |    PID |     Node  
<br>
|   State |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],0] |          0 |  40206 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],1] |          0 |  40005 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],2] |          1 |  40207 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],3] |          1 |  40006 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],4] |          2 |  40208 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],5] |          2 |  40007 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],6] |          3 |  40209 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],7] |          3 |  40008 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],8] |          4 |  40210 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv |  [[61029,1],9] |          4 |  40009 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv | [[61029,1],10] |          5 |  40211 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv | [[61029,1],11] |          5 |  40010 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv | [[61029,1],12] |          6 |  40212 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv | [[61029,1],13] |          6 |  40011 | xserve04 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv | [[61029,1],14] |          7 |  40213 | xserve03 |  
<br>
Running |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;../build/mitgcmuv | [[61029,1],15] |          7 |  40012 | xserve04 |  
<br>
Running |
<br>
<p>Thanks,  Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10284.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
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
