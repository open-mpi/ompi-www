<?
$subject_val = "Re: [OMPI users] Error message related to infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 11:38:42 2014" -->
<!-- isoreceived="20140119163842" -->
<!-- sent="Sun, 19 Jan 2014 08:38:23 -0800" -->
<!-- isosent="20140119163823" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message related to infiniband" -->
<!-- id="127529B0-A4FC-4EE3-9F2D-3E13BAB31548_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAsJMGESsBHGBTvKp8SiaZ=Pr=_ak6paALVtHrJwi_jcaDg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error message related to infiniband<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 11:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23411.php">Syed Ahsan Ali: "[OMPI users] Error message related to infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23422.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Reply:</strong> <a href="23422.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If OMPI finds infiniband support on the node, it will attempt to use it. In this case, it would appear you have an incorrectly configured IB adaptor on the node, so you get the additional warning about that fact.
<br>
<p>OMPI then falls back to look for another transport, in this case TCP. However, the TCP transport is unable to create a socket to the remote host. The most likely cause is a firewall, so you might want to check that and turn it off.
<br>
<p><p>On Jan 19, 2014, at 4:19 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am getting infiniband errors while running mpirun applications on cluster. I get these errors even when I don't include infiniband usage flags in mpirun command. Please guide
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 72 -hostfile hostlist ../bin/regcmMPI regcm.in
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[59183,1],24]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: compute-01-10.private.dns.zone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There are more than one active ports on host 'compute-01-15.private.dns.zone', but the
</span><br>
<span class="quotelev1">&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev1">&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev1">&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev1">&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev1">&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev1">&gt; values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   This is RegCM trunk
</span><br>
<span class="quotelev1">&gt;    SVN Revision: tag 4.3.5.6 compiled at: data : Sep  3 2013  time: 05:10:53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:03309] 15 more processes have sent help message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:03309] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:03309] 47 more processes have sent help message help-mpi-btl-openib.txt / default subnet prefix
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],3][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [compute-01-03.private.dns.zone][[59183,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahsan
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23417/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23416.php">Ralph Castain: "Re: [OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23411.php">Syed Ahsan Ali: "[OMPI users] Error message related to infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23422.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Reply:</strong> <a href="23422.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
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
