<?
$subject_val = "Re: [OMPI users] Errors for openib, mpirun fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 23:46:52 2014" -->
<!-- isoreceived="20140723034652" -->
<!-- sent="Wed, 23 Jul 2014 08:46:51 +0500" -->
<!-- isosent="20140723034651" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors for openib, mpirun fails" -->
<!-- id="CAMvdAsKOZ2GOWdJVJjX5OHQ98_=kT6w5iAknw0y_KVdWtXmrLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="772E2D6E-2F06-4F92-9E21-B675C693A071_at_ornl.gov" -->
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
<strong>Date:</strong> 2014-07-22 23:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24855.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>In reply to:</strong> <a href="24845.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24858.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24858.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Pasha
<br>
<p>The ibstatus is not of two different machines it is of the same machine.
<br>
There are two infiband ports showing up on all nodes. I checked on all the
<br>
nodes that one of the port in always in INIT status and other one active.
<br>
Now please see below the ibstatus of the problem causing node
<br>
(compute-01-01). Its one port is down. May be this is the reason for
<br>
error?. Is it a physical port?
<br>
<p>[root_at_compute-01-01 ~]# ibstatus
<br>
Infiniband device 'mlx4_0' port 1 status:
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
On Tue, Jul 22, 2014 at 6:50 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm, this does not make sense.
</span><br>
<span class="quotelev1">&gt; Your copy-n-paste shows that both machines (00 and 01) have the same
</span><br>
<span class="quotelev1">&gt; guid/lid (sort of equivalent of mac address in ethernet world).
</span><br>
<span class="quotelev1">&gt; As you can guess these two can not be identical for two different machines
</span><br>
<span class="quotelev1">&gt; (unless you moved the card around).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2014, at 11:26 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ahsanshah01_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes I had checked running mpirun on all nodes one by one to see the
</span><br>
<span class="quotelev1">&gt; problematic one. I had already mentioned that compute-01-01 is causing
</span><br>
<span class="quotelev1">&gt; problem, when I remove it from the hostlist mpirun works fine. Here is
</span><br>
<span class="quotelev1">&gt; ibstatus of compute-01-01.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
</span><br>
<span class="quotelev1">&gt;         base lid:        0x5
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 2 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
</span><br>
<span class="quotelev1">&gt;         base lid:        0x0
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x0
</span><br>
<span class="quotelev1">&gt;         state:           2: INIT
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 21, 2014 at 6:57 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; shamisp_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to check the ports states on *all* nodes in the
</span><br>
<span class="quotelev1">&gt; run/job/submission. Checking on a single node is not enough.
</span><br>
<span class="quotelev1">&gt; My guess is the 01-00 tries to connect 01-01 and the ports are down on
</span><br>
<span class="quotelev1">&gt; 01-01.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may disable support for infiniband by adding --mca btl ^openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2014, at 3:17 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; ahsanshah01_at_[hidden]&gt;&lt;mailto:ahsanshah01_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; ahsanshah01_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need your help to solve this cluster related issue causing mpirun
</span><br>
<span class="quotelev1">&gt; malfunction. I get following warning for some of the nodes and then the
</span><br>
<span class="quotelev1">&gt; route failure message comes causing failure to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: There is at least one OpenFabrics device found but there are no
</span><br>
<span class="quotelev1">&gt; active ports detected (or Open MPI was unable to use them).  This
</span><br>
<span class="quotelev1">&gt; is most certainly not what you wanted.  Check your cables, subnet
</span><br>
<span class="quotelev1">&gt; manager configuration, etc.  The openib BTL will be ignored for this
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev1">&gt;    Local host: compute-01-01.private.dns.zone
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    SETUP OF THE LM
</span><br>
<span class="quotelev1">&gt;      INITIALIZATIONS
</span><br>
<span class="quotelev1">&gt;      INPUT OF THE NAMELISTS
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev1">&gt; [pmd.pakmet.com:30198&lt;<a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://pmd.pakmet.com:30198/">http://pmd.pakmet.com:30198/</a>&gt;] Set MCA parameter
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;  [compute-01-00.private.dns.zone][[40500,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [compute-01-00.private.dns.zone][[40500,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.108.14 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; My questions are.
</span><br>
<span class="quotelev1">&gt; I don't include flags for running openmpi over infiniband then why it
</span><br>
<span class="quotelev1">&gt; still gives warning. If the infiniband ports are not active then it should
</span><br>
<span class="quotelev1">&gt; start the job over gigabit ethernet of cluster. Why it is unable to find
</span><br>
<span class="quotelev1">&gt; the route while the node can be pinged and ssh from other nodes and master
</span><br>
<span class="quotelev1">&gt; node as well.
</span><br>
<span class="quotelev1">&gt; The ibstatus of the above node (for which I was getting error) shows that
</span><br>
<span class="quotelev1">&gt; both ports are up. What is causing error then?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_compute-01-00 ~]# ibstatus
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 1 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
</span><br>
<span class="quotelev1">&gt;         base lid:        0x5
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x1
</span><br>
<span class="quotelev1">&gt;         state:           4: ACTIVE
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt; Infiniband device 'mlx4_0' port 2 status:
</span><br>
<span class="quotelev1">&gt;         default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
</span><br>
<span class="quotelev1">&gt;         base lid:        0x0
</span><br>
<span class="quotelev1">&gt;         sm lid:          0x0
</span><br>
<span class="quotelev1">&gt;         state:           2: INIT
</span><br>
<span class="quotelev1">&gt;         phys state:      5: LinkUp
</span><br>
<span class="quotelev1">&gt;         rate:            20 Gb/sec (4X DDR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your guidance and support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24833.php">http://www.open-mpi.org/community/lists/users/2014/07/24833.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24835.php">http://www.open-mpi.org/community/lists/users/2014/07/24835.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24841.php">http://www.open-mpi.org/community/lists/users/2014/07/24841.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24845.php">http://www.open-mpi.org/community/lists/users/2014/07/24845.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24855.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>In reply to:</strong> <a href="24845.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24858.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24858.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
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
