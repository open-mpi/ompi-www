<?
$subject_val = "Re: [OMPI devel] multiple GigE interfaces...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 08:16:12 2008" -->
<!-- isoreceived="20080623121612" -->
<!-- sent="Mon, 23 Jun 2008 14:15:53 +0200" -->
<!-- isosent="20080623121553" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] multiple GigE interfaces..." -->
<!-- id="20080623121553.GP14055_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="396090.24068.qm_at_web52603.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 08:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4198.php">Jeff Squyres: "[OMPI devel] warn when fork() used with openib btl?"</a>
<li><strong>Previous message:</strong> <a href="4196.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4157.php">Muhammad Atif: "[OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4249.php">Muhammad Atif: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 18, 2008 at 05:13:28PM -0700, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt;  Hi again... I was on a break from Xensocket stuff.... This time some
</span><br>
<span class="quotelev1">&gt;  general questions...
</span><br>
<p>Hi.
<br>
<p><span class="quotelev1">&gt; question. What if I have multiple Ethernet cards (say 5) on two of my
</span><br>
<span class="quotelev1">&gt; quad core machines.  The IP addresses (and the subnets of course) are 
</span><br>
<span class="quotelev1">&gt; Machine A                               Machine B
</span><br>
<span class="quotelev1">&gt; eth0 is y.y.1.a                             y.y.1.z     
</span><br>
<span class="quotelev1">&gt; eth1 is y.y.4.b                            y.y.4.y
</span><br>
<span class="quotelev1">&gt; eth2 is y.y.4.c                           ...
</span><br>
<span class="quotelev1">&gt; eth3 is y.y.4.d                           ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<p>This sounds pretty weird. And I guess your netmasks don't allow to
<br>
separate the NICs, do they?
<br>
<p><span class="quotelev1">&gt; from the FAQ's/Some emails in user lists  it is clear that if I want
</span><br>
<span class="quotelev1">&gt; to run a job on multiple ethernets, I can use --mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; eth0,eth1. This
</span><br>
<p>You can, but you don't have to. If you don't specify something, OMPI
<br>
will choose &quot;something right&quot;.
<br>
<p><span class="quotelev1">&gt; will run the job on two of the subnets utilizing both the Ethernet
</span><br>
<span class="quotelev1">&gt; cards. Is it doing some sort of load balancing? or some round robin
</span><br>
<span class="quotelev1">&gt; mechanism? What part of code is responsible for this work?
</span><br>
<p>As far as I know, it's handled by OB1 (PML), which does striping across
<br>
several BTL instances.
<br>
<p>So in other words, as long as both segments are equally fast, the load
<br>
balancing should do fine. If they differ in performance, the OB1 doesn't
<br>
find an optimal solution. If you're hitting this case, ask htor, he has
<br>
an auto-tuning replacement, but that's not going to be part of OMPI.
<br>
<p><span class="quotelev1">&gt; eth1,eth2,eth3,eth4. Notice that all of these ethNs are on same subnet.
</span><br>
<span class="quotelev1">&gt; Even in the FAQ's (which mostly answers our lame questions)  its not
</span><br>
<span class="quotelev1">&gt; entirely clear how communication will be done.  Each process will have
</span><br>
<span class="quotelev1">&gt; tcp_num_btls equal to interfaces, but then what? Is it some sort of
</span><br>
<span class="quotelev1">&gt; load balancing or similar stuff which is not clear in tcpdump?
</span><br>
<p>I feel you could end up with communication stalls, the typical hang
<br>
situation. One problem that might occur: the TCP component looks for
<br>
remote addresses on the &quot;same&quot; network, so the component might be unable
<br>
to decide whether your IP is on the same physical network or uses
<br>
the wrong link. Then, you won't gain anything.
<br>
<p>Another problem: at least the Linux kernel (without tweaking) decides
<br>
which interface and address to use for outgoing communication. If you
<br>
have multiple subnets, then the kernel would go for the closest match
<br>
between local and remote addresses, but in your case, it might be some
<br>
kind of lottery.
<br>
<p><p><span class="quotelev1">&gt; related question is what if I want to run 8 process job (on 2x4
</span><br>
<span class="quotelev1">&gt; cluster) and want to pin a process to an network interface. OpenMPI to
</span><br>
<span class="quotelev1">&gt; my understanding does not give any control of allocating IP to a
</span><br>
<span class="quotelev1">&gt; process (like MPICH)
</span><br>
<p>You could just say btl_if_include=ethX, thus giving you the right
<br>
network interface. Obviously, this requires separate networks.
<br>
<p><p><span class="quotelev1">&gt; or is there some magical --mca thingie. I think only way to go is
</span><br>
<span class="quotelev1">&gt; adding routing tables... am i thinking in right direction? If yes, then
</span><br>
<span class="quotelev1">&gt; the performance of my boxes decrease when i trying to force the routing
</span><br>
<p>Routing should be fast, since it's done at kernel level. I cannot speak
<br>
for Xen-based virtual interfaces.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4198.php">Jeff Squyres: "[OMPI devel] warn when fork() used with openib btl?"</a>
<li><strong>Previous message:</strong> <a href="4196.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4157.php">Muhammad Atif: "[OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4249.php">Muhammad Atif: "Re: [OMPI devel] multiple GigE interfaces..."</a>
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
