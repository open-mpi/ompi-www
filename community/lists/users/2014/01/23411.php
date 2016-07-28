<?
$subject_val = "[OMPI users] Error message related to infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 07:19:05 2014" -->
<!-- isoreceived="20140119121905" -->
<!-- sent="Sun, 19 Jan 2014 17:19:04 +0500" -->
<!-- isosent="20140119121904" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] Error message related to infiniband" -->
<!-- id="CAMvdAsJMGESsBHGBTvKp8SiaZ=Pr=_ak6paALVtHrJwi_jcaDg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error message related to infiniband<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 07:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23410.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Reply:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I am getting infiniband errors while running mpirun applications on
<br>
cluster. I get these errors even when I don't include infiniband usage
<br>
flags in mpirun command. Please guide
<br>
<p>mpirun -np 72 -hostfile hostlist ../bin/regcmMPI regcm.in
<br>
<p>--------------------------------------------------------------------------
<br>
[[59183,1],24]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: compute-01-10.private.dns.zone
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: There are more than one active ports on host
<br>
'compute-01-15.private.dns.zone', but the
<br>
default subnet GID prefix was detected on more than one of these
<br>
ports.  If these ports are connected to different physical IB
<br>
networks, this configuration will fail in Open MPI.  This version of
<br>
Open MPI requires that every physically separate IB subnet that is
<br>
used between connected MPI processes must have different subnet ID
<br>
values.
<br>
<p>Please see this FAQ entry for more details:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_default_gid_prefix to 0.
<br>
--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;This is RegCM trunk
<br>
&nbsp;&nbsp;&nbsp;SVN Revision: tag 4.3.5.6 compiled at: data : Sep  3 2013  time: 05:10:53
<br>
<p>[pmd.pakmet.com:03309] 15 more processes have sent help message
<br>
help-mpi-btl-base.txt / btl:no-nics
<br>
[pmd.pakmet.com:03309] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
<br>
see all help / error messages
<br>
[pmd.pakmet.com:03309] 47 more processes have sent help message
<br>
help-mpi-btl-openib.txt / default subnet prefix
<br>
[compute-01-03.private.dns.zone][[59183,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-03.private.dns.zone][[59183,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-03.private.dns.zone][[59183,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-03.private.dns.zone][[59183,1],3][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
[compute-01-03.private.dns.zone][[59183,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-03.private.dns.zone][[59183,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-03.private.dns.zone][[59183,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-03.private.dns.zone][[59183,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
<p>Ahsan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23410.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Reply:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
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
