<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 19:52:53 2011" -->
<!-- isoreceived="20110215005253" -->
<!-- sent="Mon, 14 Feb 2011 16:52:42 -0800" -->
<!-- isosent="20110215005242" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C97F0D17.E5AF%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D59BEF0.4020906_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 19:52:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15614.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15614.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p><span class="quotelev1">&gt; Hence, I don't understand why the lack of symmetry in the
</span><br>
<span class="quotelev1">&gt; firewall protection.
</span><br>
<span class="quotelev1">&gt; Either vixen's is too loose, or dashen's is too tight, I'd risk to say.
</span><br>
<span class="quotelev1">&gt; Maybe dashen was installed later, just got whatever boilerplate firewall
</span><br>
<span class="quotelev1">&gt; that comes with RedHat, CentOS, Fedora.
</span><br>
<span class="quotelev1">&gt; If there is a gateway for this LAN somewhere with another firewall,
</span><br>
<span class="quotelev1">&gt; which is probably the case,
</span><br>
<p>You are correct.  We had a system administrator, but we lost
<br>
that person and I installed dasher from scratch myslef and
<br>
I did use boilerplage firewall from centos 5.5 distribution.
<br>
<p><span class="quotelev1">&gt; Do you have Internet access from either machine?
</span><br>
<p>Yes, I do.
<br>
<p><span class="quotelev1">&gt; Vixen has yet another private IP 10.1.1.2 (eth0),
</span><br>
<span class="quotelev1">&gt; with a bit weird combination of broadcast address 192.168.255.255(?),
</span><br>
<span class="quotelev1">&gt; mask 255.0.0.0.
</span><br>
<span class="quotelev1">&gt; vixen is/was part of another group of machines, via this other IP,
</span><br>
<span class="quotelev1">&gt; cluster perhaps?
</span><br>
<p>We have a Rocks HPC cluster.  The cluster head is called blitzen
<br>
and there are 8 nodes in the cluster.  We have completely outgrown
<br>
this setting.  For example, I am running an application for last
<br>
2 weeks with 4 of 8 nodes and the other 4 nodes have been used
<br>
by my colleagues and I expect my jobs to run another 2-3 weeks.
<br>
Which is why I am interested in cloud.
<br>
<p>Vixen is not part of the Rocks cluster, but it is an nfs server,
<br>
as well as database server.  Here's ifconfig of blitzen:
<br>
<p>&nbsp;&nbsp;[tsakai_at_blitzen Rmpi]$ ifconfig
<br>
&nbsp;&nbsp;eth0      Link encap:Ethernet  HWaddr 00:19:B9:E0:C0:0B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.1.1.1  Bcast:10.255.255.255  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::219:b9ff:fee0:c00b/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:58859908 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:38795319 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:14637456238 (13.6 GiB)  TX bytes:25487423161 (23.7 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:193 Memory:ec000000-ec012100
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;eth1      Link encap:Ethernet  HWaddr 00:19:B9:E0:C0:0D
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.16.1.106  Bcast:172.16.3.255  Mask:255.255.252.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::219:b9ff:fee0:c00d/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:99465693 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:46026372 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:44685802310 (41.6 GiB)  TX bytes:28223858173 (26.2 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:193 Memory:ea000000-ea012100
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:80078179 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:80078179 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:27450135463 (25.5 GiB)  TX bytes:27450135463 (25.5 GiB)
<br>
<p>And here's the same thing of vixen:
<br>
[tsakai_at_vixen Rmpi]$ cat moo
<br>
&nbsp;&nbsp;eth0      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.1.1.2  Bcast:192.168.255.255  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21a:a0ff:fe1c:31/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:61942079 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:61950934 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:47837093368 (44.5 GiB)  TX bytes:54525223424 (50.7 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:185 Memory:ea000000-ea012100
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;eth1      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:172.16.1.107  Bcast:172.16.3.255  Mask:255.255.252.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21a:a0ff:fe1c:33/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:5204606192 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:8935890067 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:371146631795 (345.6 GiB)  TX bytes:13424275898600 (12.2
<br>
TiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:193 Memory:ec000000-ec012100
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:244240818 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:244240818 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1190988294201 (1.0 TiB)  TX bytes:1190988294201 (1.0
<br>
TiB)
<br>
<p>I think you are also correct as to:
<br>
<p><span class="quotelev1">&gt; a bit weird combination of broadcast address 192.168.255.255 (?),
</span><br>
<span class="quotelev1">&gt; and mask 255.0.0.0.
</span><br>
<p>I think they are both misconfigured.  I will fix them when I can.
<br>
<p><span class="quotelev1">&gt; What is in your ${TORQUE}/server_priv/nodes file?
</span><br>
<span class="quotelev1">&gt; IPs or names (vixen &amp; dashen).
</span><br>
<p>We don't use TORQUE.  We do use SGE from blitzen.
<br>
<p><span class="quotelev1">&gt; Are they on a DNS server or do you resolve their names/IPs
</span><br>
<span class="quotelev1">&gt; via /etc/hosts?
</span><br>
<span class="quotelev1">&gt; Hopefully vixen's name resolves as 172.16.1.107.
</span><br>
<p>They are on dns server:
<br>
<p>&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$ nslookup vixen.egcrc.org
<br>
&nbsp;&nbsp;Server:         172.16.1.2
<br>
&nbsp;&nbsp;Address:        172.16.1.2#53
<br>
<p>&nbsp;&nbsp;Name:   vixen.egcrc.org
<br>
&nbsp;&nbsp;Address: 172.16.1.107
<br>
<p>&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$ nslookup blitzen
<br>
&nbsp;&nbsp;Server:         172.16.1.2
<br>
&nbsp;&nbsp;Address:        172.16.1.2#53
<br>
<p>&nbsp;&nbsp;Name:   blitzen.egcrc.org
<br>
&nbsp;&nbsp;Address: 172.16.1.106
<br>
<p>&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$
<br>
&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$
<br>
<p>One more point that I over looked in a previous post:
<br>
<p><span class="quotelev1">&gt; I have yet to understand whether you copy your compiled tools
</span><br>
<span class="quotelev1">&gt; (OpenMPI, R, etc) from your local machines to EC2,
</span><br>
<span class="quotelev1">&gt; or if you build/compile them directly on the EC2 environment.
</span><br>
<p>Tools like OpenMPI, R, and for that matter gcc, must be part
<br>
of ami.  The ami is stored on amazon device, it could be on
<br>
an S3 (simple storage server) or volume (which is what Ashley
<br>
recommends).  So I put R and everything I needed on the ami
<br>
before I uploaded it onto amazon.  Only I didn't put OpenMPI
<br>
on it.  I did wget from my ami instance to download OpenMPI
<br>
source, compiled it on the instance, and saved that image
<br>
on S3.  So now when I launch the instance OpenMPI is part of
<br>
the ami.
<br>
<p><span class="quotelev1">&gt; Also, it's not clear to me if the OS in EC2 is an image
</span><br>
<span class="quotelev1">&gt; from your local machines' OS/Linux distro, or independent of them,
</span><br>
<span class="quotelev1">&gt; or if you can choose to have it either way.
</span><br>
<p>The OS in EC2 is either linux or windows.  (I have never
<br>
used windows in my life.)  For linux, it can be any linux
<br>
as one chooses.  In my case, I built an ami from centos
<br>
distribution with everything I needed.  It is essentially
<br>
the same thing as dasher.
<br>
<p><span class="quotelev1">&gt; On another posting, Ashley Pittman reported to
</span><br>
<span class="quotelev1">&gt; be using OpenMPI in Amazon EC2 without problems,
</span><br>
<span class="quotelev1">&gt; suggests pathway and gives several tips for that.
</span><br>
<span class="quotelev1">&gt; That is probably a more promising path,
</span><br>
<span class="quotelev1">&gt; which you may want to try.
</span><br>
<p>I have a feeling that I will be in need of more help
<br>
from her.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p><p>On 2/14/11 3:46 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Kevin,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt; Dasher is physically located under my desk and vixen is in a
</span><br>
<span class="quotelev2">&gt;&gt; cecure data center.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  does dasher have any network interfaces that vixen does not?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, I don't think so.
</span><br>
<span class="quotelev2">&gt;&gt; Here is more definitive info:
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_dasher Rmpi]$ ifconfig
</span><br>
<span class="quotelev2">&gt;&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:E1:84:A9
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:172.16.0.116  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: fe80::21a:a0ff:fee1:84a9/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:2347 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:1005 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:100
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:531809 (519.3 KiB)  TX bytes:269872 (263.5 KiB)
</span><br>
<span class="quotelev2">&gt;&gt;             Memory:c2200000-c2220000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:74 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:74 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:7824 (7.6 KiB)  TX bytes:7824 (7.6 KiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_dasher Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, vixen has two ethernet[tsakai_at_vixen Rmpi]$ cat moo
</span><br>
<span class="quotelev2">&gt;&gt;   [root_at_vixen ec2]# /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt;&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:31
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:10.1.1.2  Bcast:192.168.255.255  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: fe80::21a:a0ff:fe1c:31/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:61913135 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:61923635 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:47832124690 (44.5 GiB)  TX bytes:54515478860 (50.7 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;             Interrupt:185 Memory:ea000000-ea012100
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   eth1      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:33
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:172.16.1.107  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: fe80::21a:a0ff:fe1c:33/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:5204431112 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:8935796075 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:371123590892 (345.6 GiB)  TX bytes:13424246629869 (12.2
</span><br>
<span class="quotelev2">&gt;&gt; TiB)
</span><br>
<span class="quotelev2">&gt;&gt;             Interrupt:193 Memory:ec000000-ec012100
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:244169216 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:244169216 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:1190976360356 (1.0 TiB)  TX bytes:1190976360356 (1.0
</span><br>
<span class="quotelev2">&gt;&gt; TiB)
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   [root_at_vixen ec2]# interfaces:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please see the mail posting that follows this, my reply to Ashley,
</span><br>
<span class="quotelev2">&gt;&gt; whom nailed the problem precisely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/14/11 1:35 PM, &quot;Kevin.Buckley_at_[hidden]&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This probably shows my lack of understanding as to how OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; negotiates the connectivity between nodes when given a choice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of interfaces but anyway:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  does dasher have any network interfaces that vixen does not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The scenario I am imgaining would be that you ssh into dasher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from vixen using a &quot;network&quot; that both share and similarly, when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you mpirun from vixen, the network that OpenMPI uses is constrained
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by the interfaces that can be seen from vixen, so you are fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However when you are on dasher, mpirun sees another interface which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it takes a liking to and so tries to use that, but that interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not available to vixen so the OpenMPI processes spawned there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminate when they can't find that interface so as to talk back
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to dasher's controlling process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that you are no longer working with VMs but it's along those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lines that I was thinking: extra network interfaces that you assume
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't be used but which are and which could then be overcome by use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of an explicit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --mca btl_tcp_if_exclude virbr0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or some such construction (virbr0 used as an example here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kevin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They seem to be connected through the LAN 172.16.0.0/255.255.252.0,
</span><br>
<span class="quotelev1">&gt; with private IPs 172.16.0.116 (dashen,eth0) and
</span><br>
<span class="quotelev1">&gt; 172.16.1.107 (vixen,eth1).
</span><br>
<span class="quotelev1">&gt; These addresses are probably what OpenMPI is using.
</span><br>
<span class="quotelev1">&gt; Not much like a cluster, but just machines in a LAN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, I don't understand why the lack of symmetry in the
</span><br>
<span class="quotelev1">&gt; firewall protection.
</span><br>
<span class="quotelev1">&gt; Either vixen's is too loose, or dashen's is too tight, I'd risk to say.
</span><br>
<span class="quotelev1">&gt; Maybe dashen was installed later, just got whatever boilerplate firewall
</span><br>
<span class="quotelev1">&gt; that comes with RedHat, CentOS, Fedora.
</span><br>
<span class="quotelev1">&gt; If there is a gateway for this LAN somewhere with another firewall,
</span><br>
<span class="quotelev1">&gt; which is probably the case,
</span><br>
<span class="quotelev1">&gt; I'd guess it is OK to turn off dashen's firewall.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have Internet access from either machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vixen has yet another private IP 10.1.1.2 (eth0),
</span><br>
<span class="quotelev1">&gt; with a bit weird combination of broadcast address 192.168.255.255 (?),
</span><br>
<span class="quotelev1">&gt; and mask 255.0.0.0.
</span><br>
<span class="quotelev1">&gt; Maybe vixen is/was part of another group of machines, via this other IP,
</span><br>
<span class="quotelev1">&gt; a cluster perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is in your ${TORQUE}/server_priv/nodes file?
</span><br>
<span class="quotelev1">&gt; IPs or names (vixen &amp; dashen).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are they on a DNS server or do you resolve their names/IPs
</span><br>
<span class="quotelev1">&gt; via /etc/hosts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully vixen's name resolves as 172.16.1.107.
</span><br>
<span class="quotelev1">&gt; (ping -R vixen may tell).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15614.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15614.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
