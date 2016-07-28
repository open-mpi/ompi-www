<?
$subject_val = "Re: [OMPI users] Error message related to infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 20 05:11:05 2014" -->
<!-- isoreceived="20140120101105" -->
<!-- sent="Mon, 20 Jan 2014 15:11:05 +0500" -->
<!-- isosent="20140120101105" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message related to infiniband" -->
<!-- id="CAMvdAs+t_9xm2_FYWYFZiH7hWGbpfKxt+zigUPJvg2M5F9R6vg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D588DFB-B8B8-403A-B654-19AD178CED50_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-20 05:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23425.php">Nathan Hjelm: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23423.php">Gustavo Correa: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23423.php">Gustavo Correa: "Re: [OMPI users] Error message related to infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My email was mixture of error messages/warnings.
<br>
<p>IB Card on compute-01-10 is faulty on ibstatus.
<br>
<p>In ibstat on other nodes as well as on compute-01-15 there are dual ports
<br>
as I see status of both ports in ibstat.
<br>
<p>Firewall in not a problem, I am sure about it. How can I check bad ethernet
<br>
port. I mean I can ping among master and compute nodes.
<br>
<p>/etc/hosts is ok for name resolution.
<br>
<p>Thank you very much for responding and helping me out.
<br>
<p><p>Ahsan
<br>
<p><p><p>On Mon, Jan 20, 2014 at 9:27 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Is your IB card in compute-01-10.private.dns.zone working?
</span><br>
<span class="quotelev1">&gt; Did you check it with ibstat?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a dual port IB card in compute-01-15.private.dns.zone?
</span><br>
<span class="quotelev1">&gt; Did you connect both ports to the same switch on the same subnet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TCP &quot;no route to host&quot;:
</span><br>
<span class="quotelev1">&gt; If it is not a firewall problem, could it bad Ethernet port on a node
</span><br>
<span class="quotelev1">&gt; perhaps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, if you use host names in your hostfile, I guess they need to be able
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; resolve the names into IP addresses.
</span><br>
<span class="quotelev1">&gt; Check if your /etc/hosts file, DNS server, or whatever you
</span><br>
<span class="quotelev1">&gt; use for name resolution, is correct and consistent across the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2014, at 10:18 PM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree with you and still struglling with subnet ID settings because I
</span><br>
<span class="quotelev1">&gt; couldn't find /var/cache/opensm/opensm.opts file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Secondly, if OMPI is going for TCP then it should be able to find as
</span><br>
<span class="quotelev1">&gt; compute nodes are available via ping and ssh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Jan 19, 2014 at 9:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; If OMPI finds infiniband support on the node, it will attempt to use it.
</span><br>
<span class="quotelev1">&gt; In this case, it would appear you have an incorrectly configured IB adaptor
</span><br>
<span class="quotelev1">&gt; on the node, so you get the additional warning about that fact.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI then falls back to look for another transport, in this case TCP.
</span><br>
<span class="quotelev1">&gt; However, the TCP transport is unable to create a socket to the remote host.
</span><br>
<span class="quotelev1">&gt; The most likely cause is a firewall, so you might want to check that and
</span><br>
<span class="quotelev1">&gt; turn it off.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 19, 2014, at 4:19 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear All
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am getting infiniband errors while running mpirun applications on
</span><br>
<span class="quotelev1">&gt; cluster. I get these errors even when I don't include infiniband usage
</span><br>
<span class="quotelev1">&gt; flags in mpirun command. Please guide
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -np 72 -hostfile hostlist ../bin/regcmMPI regcm.in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [[59183,1],24]: A high-performance Open MPI point-to-point messaging
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev3">&gt; &gt;&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Host: compute-01-10.private.dns.zone
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: There are more than one active ports on host
</span><br>
<span class="quotelev1">&gt; 'compute-01-15.private.dns.zone', but the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev3">&gt; &gt;&gt; values.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   This is RegCM trunk
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    SVN Revision: tag 4.3.5.6 compiled at: data : Sep  3 2013  time:
</span><br>
<span class="quotelev1">&gt; 05:10:53
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pmd.pakmet.com:03309] 15 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pmd.pakmet.com:03309] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [pmd.pakmet.com:03309] 47 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / default subnet prefix
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],3][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; [compute-01-03.private.dns.zone][[59183,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.10 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ahsan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt; &gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt; &gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt; &gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt; &gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23425.php">Nathan Hjelm: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23423.php">Gustavo Correa: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23423.php">Gustavo Correa: "Re: [OMPI users] Error message related to infiniband"</a>
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
