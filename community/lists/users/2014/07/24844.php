<?
$subject_val = "Re: [OMPI users] Errors for openib, mpirun fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 09:14:28 2014" -->
<!-- isoreceived="20140722131428" -->
<!-- sent="Tue, 22 Jul 2014 09:14:25 -0400" -->
<!-- isosent="20140722131425" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors for openib, mpirun fails" -->
<!-- id="CAG4F6z_YAcnr0hdynp2czivJTfb4m9r8B2TkKcBhR73xDMd2Ug_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMvdAsJzrQrTjMDnHvy5nNp0868wGqts6h53pHhmYo0cf13APQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-22 09:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24845.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24843.php">Jukka-Pekka Kekkonen: "[OMPI users] Using the Hydra process manager to launch Open MPI applications"</a>
<li><strong>In reply to:</strong> <a href="24842.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24855.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24855.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sayed,
<br>
<p>You might try this link (or have your sysadmin do it if you do not have
<br>
admin privileges.) To me it looks like your second port is in the &quot;INIT&quot;
<br>
state but has not been added by the subnet manager.
<br>
<p><a href="https://software.intel.com/en-us/articles/troubleshooting-infiniband-connection-issues-using-ofed-tools">https://software.intel.com/en-us/articles/troubleshooting-infiniband-connection-issues-using-ofed-tools</a>
<br>
<p>You might also try try running only over port 1 with the mca parameter:
<br>
<p>-mca btl_openib_if_include mlx4_0:1
<br>
<p>Hope this helps.
<br>
<p>Josh
<br>
<p><p>On Tue, Jul 22, 2014 at 12:10 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; And where I can find run/job/submission ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 21, 2014 at 6:57 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You have to check the ports states on *all* nodes in the
</span><br>
<span class="quotelev2">&gt;&gt; run/job/submission. Checking on a single node is not enough.
</span><br>
<span class="quotelev2">&gt;&gt; My guess is the 01-00 tries to connect 01-01 and the ports are down on
</span><br>
<span class="quotelev2">&gt;&gt; 01-01.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may disable support for infiniband by adding --mca btl ^openib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 21, 2014, at 3:17 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need your help to solve this cluster related issue causing mpirun
</span><br>
<span class="quotelev2">&gt;&gt; malfunction. I get following warning for some of the nodes and then the
</span><br>
<span class="quotelev2">&gt;&gt; route failure message comes causing failure to mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: There is at least one OpenFabrics device found but there are no
</span><br>
<span class="quotelev2">&gt;&gt; active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev2">&gt;&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev2">&gt;&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev2">&gt;&gt; job.
</span><br>
<span class="quotelev2">&gt;&gt;    Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    SETUP OF THE LM
</span><br>
<span class="quotelev2">&gt;&gt;      INITIALIZATIONS
</span><br>
<span class="quotelev2">&gt;&gt;      INPUT OF THE NAMELISTS
</span><br>
<span class="quotelev2">&gt;&gt; [pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] 7 more processes
</span><br>
<span class="quotelev2">&gt;&gt; have sent help message help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev2">&gt;&gt; [pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] Set MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [compute-01-00.private.dns.zone][[40500,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-01-00.private.dns.zone][[40500,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev2">&gt;&gt; My questions are.
</span><br>
<span class="quotelev2">&gt;&gt; I don't include flags for running openmpi over infiniband then why it
</span><br>
<span class="quotelev2">&gt;&gt; still gives warning. If the infiniband ports are not active then it should
</span><br>
<span class="quotelev2">&gt;&gt; start the job over gigabit ethernet of cluster. Why it is unable to find
</span><br>
<span class="quotelev2">&gt;&gt; the route while the node can be pinged and ssh from other nodes and master
</span><br>
<span class="quotelev2">&gt;&gt; node as well.
</span><br>
<span class="quotelev2">&gt;&gt; The ibstatus of the above node (for which I was getting error) shows that
</span><br>
<span class="quotelev2">&gt;&gt; both ports are up. What is causing error then?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-01-00 ~]# ibstatus
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev2">&gt;&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
</span><br>
<span class="quotelev2">&gt;&gt;         base lid:        0x5
</span><br>
<span class="quotelev2">&gt;&gt;         sm lid:          0x1
</span><br>
<span class="quotelev2">&gt;&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev2">&gt;&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband device 'mlx4_0' port 2 status:
</span><br>
<span class="quotelev2">&gt;&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
</span><br>
<span class="quotelev2">&gt;&gt;         base lid:        0x0
</span><br>
<span class="quotelev2">&gt;&gt;         sm lid:          0x0
</span><br>
<span class="quotelev2">&gt;&gt;         state:           2: INIT
</span><br>
<span class="quotelev2">&gt;&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for your guidance and support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24833.php">http://www.open-mpi.org/community/lists/users/2014/07/24833.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24835.php">http://www.open-mpi.org/community/lists/users/2014/07/24835.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24842.php">http://www.open-mpi.org/community/lists/users/2014/07/24842.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24845.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24843.php">Jukka-Pekka Kekkonen: "[OMPI users] Using the Hydra process manager to launch Open MPI applications"</a>
<li><strong>In reply to:</strong> <a href="24842.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24855.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24855.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
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
