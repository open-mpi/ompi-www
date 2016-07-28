<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 18:47:06 2011" -->
<!-- isoreceived="20110214234706" -->
<!-- sent="Mon, 14 Feb 2011 18:46:56 -0500" -->
<!-- isosent="20110214234656" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="4D59BEF0.4020906_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C97EF36B.E596%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 18:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15615.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15613.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15615.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15615.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi Kevin,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt; Dasher is physically located under my desk and vixen is in a
</span><br>
<span class="quotelev1">&gt; cecure data center.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  does dasher have any network interfaces that vixen does not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I don't think so.
</span><br>
<span class="quotelev1">&gt; Here is more definitive info:
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_dasher Rmpi]$ ifconfig
</span><br>
<span class="quotelev1">&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:E1:84:A9
</span><br>
<span class="quotelev1">&gt;             inet addr:172.16.0.116  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev1">&gt;             inet6 addr: fe80::21a:a0ff:fee1:84a9/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;             RX packets:2347 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;             TX packets:1005 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;             collisions:0 txqueuelen:100
</span><br>
<span class="quotelev1">&gt;             RX bytes:531809 (519.3 KiB)  TX bytes:269872 (263.5 KiB)
</span><br>
<span class="quotelev1">&gt;             Memory:c2200000-c2220000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;             RX packets:74 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;             TX packets:74 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;             RX bytes:7824 (7.6 KiB)  TX bytes:7824 (7.6 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_dasher Rmpi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, vixen has two ethernet[tsakai_at_vixen Rmpi]$ cat moo
</span><br>
<span class="quotelev1">&gt;   [root_at_vixen ec2]# /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:31
</span><br>
<span class="quotelev1">&gt;             inet addr:10.1.1.2  Bcast:192.168.255.255  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;             inet6 addr: fe80::21a:a0ff:fe1c:31/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;             RX packets:61913135 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;             TX packets:61923635 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;             RX bytes:47832124690 (44.5 GiB)  TX bytes:54515478860 (50.7 GiB)
</span><br>
<span class="quotelev1">&gt;             Interrupt:185 Memory:ea000000-ea012100
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   eth1      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:33
</span><br>
<span class="quotelev1">&gt;             inet addr:172.16.1.107  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev1">&gt;             inet6 addr: fe80::21a:a0ff:fe1c:33/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;             RX packets:5204431112 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;             TX packets:8935796075 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;             RX bytes:371123590892 (345.6 GiB)  TX bytes:13424246629869 (12.2
</span><br>
<span class="quotelev1">&gt; TiB)
</span><br>
<span class="quotelev1">&gt;             Interrupt:193 Memory:ec000000-ec012100
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;             RX packets:244169216 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;             TX packets:244169216 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;             RX bytes:1190976360356 (1.0 TiB)  TX bytes:1190976360356 (1.0
</span><br>
<span class="quotelev1">&gt; TiB)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   [root_at_vixen ec2]# interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see the mail posting that follows this, my reply to Ashley,
</span><br>
<span class="quotelev1">&gt; whom nailed the problem precisely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/14/11 1:35 PM, &quot;Kevin.Buckley_at_[hidden]&quot;
</span><br>
<span class="quotelev1">&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This probably shows my lack of understanding as to how OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; negotiates the connectivity between nodes when given a choice
</span><br>
<span class="quotelev2">&gt;&gt; of interfaces but anyway:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  does dasher have any network interfaces that vixen does not?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The scenario I am imgaining would be that you ssh into dasher
</span><br>
<span class="quotelev2">&gt;&gt; from vixen using a &quot;network&quot; that both share and similarly, when
</span><br>
<span class="quotelev2">&gt;&gt; you mpirun from vixen, the network that OpenMPI uses is constrained
</span><br>
<span class="quotelev2">&gt;&gt; by the interfaces that can be seen from vixen, so you are fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However when you are on dasher, mpirun sees another interface which
</span><br>
<span class="quotelev2">&gt;&gt; it takes a liking to and so tries to use that, but that interface
</span><br>
<span class="quotelev2">&gt;&gt; is not available to vixen so the OpenMPI processes spawned there
</span><br>
<span class="quotelev2">&gt;&gt; terminate when they can't find that interface so as to talk back
</span><br>
<span class="quotelev2">&gt;&gt; to dasher's controlling process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know that you are no longer working with VMs but it's along those
</span><br>
<span class="quotelev2">&gt;&gt; lines that I was thinking: extra network interfaces that you assume
</span><br>
<span class="quotelev2">&gt;&gt; won't be used but which are and which could then be overcome by use
</span><br>
<span class="quotelev2">&gt;&gt; of an explicit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --mca btl_tcp_if_exclude virbr0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or some such construction (virbr0 used as an example here).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kevin
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Hi Tena
<br>
<p><p>They seem to be connected through the LAN 172.16.0.0/255.255.252.0,
<br>
with private IPs 172.16.0.116 (dashen,eth0) and
<br>
172.16.1.107 (vixen,eth1).
<br>
These addresses are probably what OpenMPI is using.
<br>
Not much like a cluster, but just machines in a LAN.
<br>
<p>Hence, I don't understand why the lack of symmetry in the
<br>
firewall protection.
<br>
Either vixen's is too loose, or dashen's is too tight, I'd risk to say.
<br>
Maybe dashen was installed later, just got whatever boilerplate firewall
<br>
that comes with RedHat, CentOS, Fedora.
<br>
If there is a gateway for this LAN somewhere with another firewall,
<br>
which is probably the case,
<br>
I'd guess it is OK to turn off dashen's firewall.
<br>
<p>Do you have Internet access from either machine?
<br>
<p>Vixen has yet another private IP 10.1.1.2 (eth0),
<br>
with a bit weird combination of broadcast address 192.168.255.255 (?),
<br>
and mask 255.0.0.0.
<br>
Maybe vixen is/was part of another group of machines, via this other IP,
<br>
a cluster perhaps?
<br>
<p>What is in your ${TORQUE}/server_priv/nodes file?
<br>
IPs or names (vixen &amp; dashen).
<br>
<p>Are they on a DNS server or do you resolve their names/IPs
<br>
via /etc/hosts?
<br>
<p>Hopefully vixen's name resolves as 172.16.1.107.
<br>
(ping -R vixen may tell).
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15615.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15613.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15615.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15615.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
