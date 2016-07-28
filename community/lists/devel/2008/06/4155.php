<?
$subject_val = "[OMPI devel] OpenMPI multiple ethernet questions ...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 10:45:06 2008" -->
<!-- isoreceived="20080618144506" -->
<!-- sent="Wed, 18 Jun 2008 07:44:49 -0700 (PDT)" -->
<!-- isosent="20080618144449" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI multiple ethernet questions ..." -->
<!-- id="805046.18285.qm_at_web52608.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI multiple ethernet questions ...<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 10:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again... I was on a break from Xensocket stuff.... This time some general questions...
<br>
<p>Forgive me for the question.... its  a quick one and related to some of my development work on Xen, I will explain the rationale after the question. What if I have multiple Ethernet cards (say 5) on two of my quad core machines.  The IP addresses (and the subnets of course) are 
<br>
Machine A                               Machine B
<br>
eth0 is y.y.1.a                             y.y.1.z     
<br>
eth1 is y.y.4.b                            y.y.4.y
<br>
eth2 is y.y.4.c                           ...
<br>
eth3 is y.y.4.d                           ...
<br>
<p>&nbsp;...
<br>
Now from the FAQ's (Refer 9: How does Open MPI know which TCP addresses are routable to each other?) it is clear that if I want to run a job on multiple ethernets, I can use --mca btl_tcp_if_include  eth0,eth1. This will run the job on two of the subnets utilizing both the Ethernet cards. Is it doing some sort of load balancing? or some round robin mechanism? What part of code is responsible for this work?
<br>
<p>Now what if I want to run the job like --mca btl_tcp_if_include eth1,eth2,eth3,eth4. Notice that all of these ethNs are on same subnet. Even in the FAQ's (which mostly answers our lame questions)  its not entirely clear how communication will be done.  Each process will have tcp_num_btls equal to interfaces, but then what? Is it some sort of load balancing or similar stuff which is not clear in tcpdump?
<br>
<p>Another related question is what if I want to run 8 process job (on 2x4 cluster) and want to pin a process to an network interface. OpenMPI to my understanding does not give any control of allocating IP to a process (like MPICH) or is there some magical --mca thingie. I think only way to go is adding routing tables... am i thinking in right direction? If yes, then the performance of my boxes decrease when i trying to force the routing (obviously something terrible with my configuration)
<br>
&nbsp;Its related to my Xen (virtualization) work. We are in a scenario, where all the virtual machines on one Xen host need to use eth2 (which is virtualized but optimized for intra-domain communication) and for communication outside the physical machine (i.e. to other Xen hosts)  we want to use eth1. Is 'route add' the only way again?
<br>
<p>I will ask Xensocket BTL related questions later :)
<br>
<p>Best Regards and thanks in advance,
<br>
Muhammad Atif
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4154.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
