<?
$subject_val = "Re: [OMPI users] Errors for openib, mpirun fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 23:51:24 2014" -->
<!-- isoreceived="20140723035124" -->
<!-- sent="Wed, 23 Jul 2014 08:51:24 +0500" -->
<!-- isosent="20140723035124" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors for openib, mpirun fails" -->
<!-- id="CAMvdAsLvdt_A46tiWjd_0GFTXLZO=J7yVa=zVzn52SpXamoFsQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z_YAcnr0hdynp2czivJTfb4m9r8B2TkKcBhR73xDMd2Ug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Errors for openib, mpirun fails<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-22 23:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24856.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24854.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>In reply to:</strong> <a href="24844.php">Joshua Ladd: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh
<br>
<p>It was my mistake. The status of error generating node is pasted below
<br>
<p>Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0018:8b90:97fe:94fe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           1: DOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      4: PortConfigurationTraining
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            10 Gb/sec (4X)
<br>
Infiniband device 'mlx4_0' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0018:8b90:97fe:94ff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x15
<br>
<p>As you see one port is down. I have all sysadmin rights as I am managing
<br>
the cluster, but my level of knowledge is not expert. Can you explain a bit
<br>
about ports. Does each infiniband card in a system has 2 physical ports?
<br>
What to look for if one port status is down.?
<br>
<p>Ahsan
<br>
<p>On Tue, Jul 22, 2014 at 6:14 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Sayed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might try this link (or have your sysadmin do it if you do not have
</span><br>
<span class="quotelev1">&gt; admin privileges.) To me it looks like your second port is in the &quot;INIT&quot;
</span><br>
<span class="quotelev1">&gt; state but has not been added by the subnet manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://software.intel.com/en-us/articles/troubleshooting-infiniband-connection-issues-using-ofed-tools">https://software.intel.com/en-us/articles/troubleshooting-infiniband-connection-issues-using-ofed-tools</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also try try running only over port 1 with the mca parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_if_include mlx4_0:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Tue, Jul 22, 2014 at 12:10 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  And where I can find run/job/submission ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Mon, Jul 21, 2014 at 6:57 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You have to check the ports states on *all* nodes in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run/job/submission. Checking on a single node is not enough.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is the 01-00 tries to connect 01-01 and the ports are down on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 01-01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may disable support for infiniband by adding --mca btl ^openib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 21, 2014, at 3:17 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear All
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need your help to solve this cluster related issue causing mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; malfunction. I get following warning for some of the nodes and then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; route failure message comes causing failure to mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: There is at least one OpenFabrics device found but there are no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SETUP OF THE LM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      INITIALIZATIONS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      INPUT OF THE NAMELISTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] 7 more processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have sent help message help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] Set MCA parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-00.private.dns.zone][[40500,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-01-00.private.dns.zone][[40500,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My questions are.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't include flags for running openmpi over infiniband then why it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still gives warning. If the infiniband ports are not active then it should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start the job over gigabit ethernet of cluster. Why it is unable to find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the route while the node can be pinged and ssh from other nodes and master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ibstatus of the above node (for which I was getting error) shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that both ports are up. What is causing error then?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-01-00 ~]# ibstatus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         base lid:        0x5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sm lid:          0x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband device 'mlx4_0' port 2 status:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         base lid:        0x0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sm lid:          0x0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         state:           2: INIT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance for your guidance and support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24833.php">http://www.open-mpi.org/community/lists/users/2014/07/24833.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24835.php">http://www.open-mpi.org/community/lists/users/2014/07/24835.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24842.php">http://www.open-mpi.org/community/lists/users/2014/07/24842.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24844.php">http://www.open-mpi.org/community/lists/users/2014/07/24844.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24855/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24856.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24854.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>In reply to:</strong> <a href="24844.php">Joshua Ladd: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
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
