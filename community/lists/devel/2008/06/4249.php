<?
$subject_val = "Re: [OMPI devel] multiple GigE interfaces...";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 29 23:12:22 2008" -->
<!-- isoreceived="20080630031222" -->
<!-- sent="Sun, 29 Jun 2008 20:12:04 -0700 (PDT)" -->
<!-- isosent="20080630031204" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] multiple GigE interfaces..." -->
<!-- id="224378.32272.qm_at_web52605.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI devel] multiple GigE interfaces..." -->
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
<strong>Subject:</strong> Re: [OMPI devel] multiple GigE interfaces...<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-29 23:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4248.php">Jeff Squyres: "Re: [OMPI devel] Committing to v1.3 branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="4157.php">Muhammad Atif: "[OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the detailed reply. 

Just one question, I am a bit confused with this comment, or perhaps i phrased the question in a bad way and you miss understood me. I will rephrase my question and scenario. I hope I can make is terrible scenario easier to understand with less confusion.

&gt;&gt; related question is what if I want to run 8 process job (on 2x4
&gt;&gt; cluster) and want to pin a process to an network interface. OpenMPI to
&gt;&gt; my understanding does not give any control of allocating IP to a
&gt;&gt; process (like MPICH)

&gt;You could just say btl_if_include=ethX, thus giving you the right
&gt;network interface. Obviously, this requires separate networks.


I want to pin each process to a distinct ethernet interface. My understanding of  btl_if_include = ethX,ethY is that it would let every process to use  ethX and ethY in roundrobin fashion. What I want is that if my application is a.out (a modified OSU bandwidth benchmark) and can have 4 processes. rank 0 and rank 2 will run on machineA whereas rank 1 and rank 3 on machineB.  Rank 0 will  communicate with rank 1, and rank 2 will communicate with rank 3. I want rank 0 to use eth1, rank 1 to use eth2 (for machine B it will be rank 2 to use eth1 and rank 3 uses eth2).  In normal case, OMPI send packets in roundrobin through both the intefaces. Therefore rank 0 uses eth1 and eth2, and my requirement is otherwise. 
To my mind this can be done through routing tables. When I add routes, the OMPI just sits there waiting for something to happen, whereas MPICH gives me results with same routing table configuration.  Initially I had eth1, and eth2 on same subnet, but even with different subnets I am facing the same issue. MPICH works with both subnet configurations.

 

Another related issue and different configuration is the case of Xen. Here eth0 is connected to default shared memory sort of a thing of xen  (in another case it will be my very own Xensocket btl for OMPI) and is very fast as compared to normal GigE. Eth0 will only be fast, if the machines (and hence the processes)  are on same &quot;physical hardware&quot;. In case the two machines (and therefore the processes) are on &quot;different physical hardware&quot;, then eth0 will route the packets through a physical switch and will be a touch slower than eth1 (i know its kinda hard to follow, but I am sorry) .  Eth1 here is normal GigE interface and both eth0 and eth1 are on different subnets. While running NAS benchmarks etc I want that if the two machines can use eth0, they should only use eth0 and even if btl sends a messages through eth1, it should get routed through eth0. For this I setup routing tables and see the same issue as above i.e. OMPI sits there (especially for LU
<br>
&nbsp;and IS benchmarks), whereas MPICH gives me the results the way I want. 

Is there something related to routing tables that I am overlooking in case of OMPI? Why would MPICH give me the results as I am expecting whereas OMPI sits there waiting for me to kill the job. 


Best Regards,
Muhammad Atif

PS: I think I did a terrible job in explaining the scenario again :)


----- Original Message ----
From: Adrian Knoth &lt;adi_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Monday, June 23, 2008 10:15:53 PM
Subject: Re: [OMPI devel] multiple GigE interfaces...

On Wed, Jun 18, 2008 at 05:13:28PM -0700, Muhammad Atif wrote:

&gt;  Hi again... I was on a break from Xensocket stuff.... This time some
&gt;  general questions...

Hi.

&gt; question. What if I have multiple Ethernet cards (say 5) on two of my
&gt; quad core machines.  The IP addresses (and the subnets of course) are 
&gt; Machine A                               Machine B
&gt; eth0 is y.y.1.a                             y.y.1.z    
&gt; eth1 is y.y.4.b                            y.y.4.y
&gt; eth2 is y.y.4.c                           ...
&gt; eth3 is y.y.4.d                           ...
&gt; 
&gt;  ...

This sounds pretty weird. And I guess your netmasks don't allow to
separate the NICs, do they?

&gt; from the FAQ's/Some emails in user lists  it is clear that if I want
&gt; to run a job on multiple ethernets, I can use --mca btl_tcp_if_include
&gt; eth0,eth1. This

You can, but you don't have to. If you don't specify something, OMPI
will choose &quot;something right&quot;.

&gt; will run the job on two of the subnets utilizing both the Ethernet
&gt; cards. Is it doing some sort of load balancing? or some round robin
&gt; mechanism? What part of code is responsible for this work?

As far as I know, it's handled by OB1 (PML), which does striping across
several BTL instances.

So in other words, as long as both segments are equally fast, the load
balancing should do fine. If they differ in performance, the OB1 doesn't
find an optimal solution. If you're hitting this case, ask htor, he has
an auto-tuning replacement, but that's not going to be part of OMPI.

&gt; eth1,eth2,eth3,eth4. Notice that all of these ethNs are on same subnet.
&gt; Even in the FAQ's (which mostly answers our lame questions)  its not
&gt; entirely clear how communication will be done.  Each process will have
&gt; tcp_num_btls equal to interfaces, but then what? Is it some sort of
&gt; load balancing or similar stuff which is not clear in tcpdump?

I feel you could end up with communication stalls, the typical hang
situation. One problem that might occur: the TCP component looks for
remote addresses on the &quot;same&quot; network, so the component might be unable
to decide whether your IP is on the same physical network or uses
the wrong link. Then, you won't gain anything.

Another problem: at least the Linux kernel (without tweaking) decides
which interface and address to use for outgoing communication. If you
have multiple subnets, then the kernel would go for the closest match
between local and remote addresses, but in your case, it might be some
kind of lottery.


&gt; related question is what if I want to run 8 process job (on 2x4
&gt; cluster) and want to pin a process to an network interface. OpenMPI to
&gt; my understanding does not give any control of allocating IP to a
&gt; process (like MPICH)

You could just say btl_if_include=ethX, thus giving you the right
network interface. Obviously, this requires separate networks.


&gt; or is there some magical --mca thingie. I think only way to go is
&gt; adding routing tables... am i thinking in right direction? If yes, then
&gt; the performance of my boxes decrease when i trying to force the routing

Routing should be fast, since it's done at kernel level. I cannot speak
for Xen-based virtual interfaces.


-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany

private: <a href="http://adi.thur.de">http://adi.thur.de</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4249/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4248.php">Jeff Squyres: "Re: [OMPI devel] Committing to v1.3 branch"</a>
<li><strong>Maybe in reply to:</strong> <a href="4157.php">Muhammad Atif: "[OMPI devel] multiple GigE interfaces..."</a>
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
