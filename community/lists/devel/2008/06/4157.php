<?
$subject_val = "[OMPI devel] multiple GigE interfaces...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 20:13:34 2008" -->
<!-- isoreceived="20080619001334" -->
<!-- sent="Wed, 18 Jun 2008 17:13:28 -0700 (PDT)" -->
<!-- isosent="20080619001328" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="[OMPI devel] multiple GigE interfaces..." -->
<!-- id="396090.24068.qm_at_web52603.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI devel] multiple GigE interfaces...<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 20:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4158.php">Terry Dontje: "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<li><strong>Reply:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<li><strong>Maybe reply:</strong> <a href="4249.php">Muhammad Atif: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi again... I was on a break from Xensocket stuff.... This time some general questions...
<br>
<p>Forgive
<br>
me for the question.... its  a quick one and related to some of my
<br>
development work on Xen, I will explain the rationale after the
<br>
question. What if I have multiple Ethernet cards (say 5) on two of my
<br>
quad core machines.  The IP addresses (and the subnets of course) are 
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
Now
<br>
from the FAQ's/Some emails in user lists  it is clear that if I want to run a job on
<br>
multiple ethernets, I can use --mca btl_tcp_if_include  eth0,eth1. This
<br>
will run the job on two of the subnets utilizing both the Ethernet
<br>
cards. Is it doing some sort of load balancing? or some round robin mechanism? What part of code is responsible for this work?
<br>
<p>Now
<br>
what if I want to run the job like --mca btl_tcp_if_include
<br>
eth1,eth2,eth3,eth4. Notice that all of these ethNs are on same subnet.
<br>
Even in the FAQ's (which mostly answers our lame questions)  its not
<br>
entirely clear how communication will be done.  Each process will have
<br>
tcp_num_btls equal to interfaces, but then what? Is it some sort of
<br>
load balancing or similar stuff which is not clear in tcpdump?
<br>
<p>Another
<br>
related question is what if I want to run 8 process job (on 2x4
<br>
cluster) and want to pin a process to an network interface. OpenMPI to
<br>
my understanding does not give any control of allocating IP to a
<br>
process (like MPICH)
<br>
or is there some magical --mca thingie. I think only way to go is
<br>
adding routing tables... am i thinking in right direction? If yes, then
<br>
the performance of my boxes decrease when i trying to force the routing
<br>
(obviously something terrible with my configuration)
<br>
&nbsp;Its related to
<br>
my Xen (virtualization) work. We are in a scenario, where all the
<br>
virtual machines on one Xen host need to use eth2 (which is virtualized
<br>
but optimized for intra-domain communication) and for communication
<br>
outside the physical machine (i.e. to other Xen hosts)  we want to use
<br>
eth1. Is 'route add' the only way again?
<br>
<p>I will ask Xensocket BTL related questions later :)
<br>
<p>Best Regards and thanks in advance,
<br>
Muhammad Atif
<br>
<p>PS: Sorry if you receive multiple messages..... I think my previous message did not go through.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4158.php">Terry Dontje: "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Previous message:</strong> <a href="4156.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<li><strong>Reply:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<li><strong>Maybe reply:</strong> <a href="4249.php">Muhammad Atif: "Re: [OMPI devel] multiple GigE interfaces..."</a>
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
