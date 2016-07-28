<?
$subject_val = "[OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 20 19:36:28 2013" -->
<!-- isoreceived="20130420233628" -->
<!-- sent="Sat, 20 Apr 2013 16:36:24 -0700 (PDT)" -->
<!-- isosent="20130420233624" -->
<!-- name="Vanja Z" -->
<!-- email="vanja_z_at_[hidden]" -->
<!-- subject="[OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="1366500984.87299.YahooMailNeo_at_web125104.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Vanja Z (<em>vanja_z_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-20 19:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21755.php">Ralph Castain: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22104.php">Vanja Z: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have been trying to setup a cluster with QLogic QLE7140 HCA's and a Cisco SFS-7000 24 port switch. The machines are running Debian Wheezy.
<br>
<p>I have installed OpenMPI from the repos (1.4.5) and also
<br>
libibverbs1
<br>
libipathverbs1
<br>
libmthca1
<br>
librdmacm1
<br>
I have also tested OpenMPI compiled from the latest sources (1.6.4) with the same results. I modprobe rdma_ucm, ib_umad and ib_uverbs in order to get MPI jobs to run.
<br>
<p>I'm not actually sure if what I've done is enough to correctly configure the network but I have tested several MPI capable codes that use Fortran and C, specifying the openib interface with the flag '--mca btl openib,self'. Things initially work and the bandwidth is as expected, however after anywhere from 4 to 30 hours the jobs crash. The longest job that has completed successfully has gone for around 48 hours however they rarely make it past 4 hours. This is always the error message.
<br>
<p>[[36446,1],2][../../../../../../ompi/mca/btl/openib/btl_openib_component.c:3238:handle_wc]
<br>
from host84 to: host85 error polling LP CQ with status RETRY EXCEEDED ERROR
<br>
status number 12 for wr_id 36085024 opcode 2&#160; vendor error 0 qp_idx 3
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.&#160; Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&#160; Local host:&#160;&#160;&#160;&#160;&#160;&#160;&#160; host85
<br>
&#160; MPI process PID:&#160;&#160; 7912
<br>
&#160; Error number:&#160;&#160;&#160;&#160;&#160; 10 (IBV_EVENT_PORT_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.&#160; &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>&#160;&#160;&#160; The total number of times that the sender wishes the receiver to
<br>
&#160;&#160;&#160; retry timeout, packet sequence, etc. errors before posting a
<br>
&#160;&#160;&#160; completion error.
<br>
<p>This error typically means that there is something awry within the
<br>
InfiniBand fabric itself.&#160; You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.
<br>
<p>Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will
<br>
&#160; attempt to retry (defaulted to 7, the maximum value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&#160; to 20).&#160; The actual timeout value used is calculated as:
<br>
<p>&#160;&#160;&#160;&#160; 4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>&#160; See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&#160; Local host:&#160;&#160; host85
<br>
&#160; Local device: qib0
<br>
&#160; Peer host:&#160;&#160;&#160; host84
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
<p>On a few occasions the machine that initiated the failure, (host85 in this example) crashed to the point of needing to be power cycled however most times, only Infiniband connectivity was lost after the crash. I have checked kernel and system logs and can't find anything at the time of the crash.
<br>
<p>I have seen it recommended to use psm instead of openib for QLogic cards. Could this be part of the problem? After a lot of experimentation I am at a complete loss as to how to get psm up and running. If possible, could someone also help me understand which out of this list (ibibverbs, libipathverbs, libmthca, librdmacm, ib_mad, ib_umad, rdma_ucm, ib_uverbs, ib_qib) is the actual driver for my card and is there any way to configure the driver? This blog post<a href="http://swik.net/Debian/Planet+Debian/Julien+Blache%3A+QLogic+QLE73xx+InfiniBand+adapters,+QDR,+ib_qib,+OFED+1.5.2+and+Debian+Squeeze/e56if">http://swik.net/Debian/Planet+Debian/Julien+Blache%3A+QLogic+QLE73xx+InfiniBand+adapters,+QDR,+ib_qib,+OFED+1.5.2+and+Debian+Squeeze/e56if</a>
<br>
<p>seems to suggest that I will need to download the complete QLogic OFED stack 
<br>
and configure the driver which I've tried to do and failed on many 
<br>
counts.
<br>
<p>I would be very grateful for any advice at this stage.
<br>
<p>Best regards,
<br>
<p>Vanja
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21755.php">Ralph Castain: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22104.php">Vanja Z: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
