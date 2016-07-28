<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 01:46:42 2011" -->
<!-- isoreceived="20110215064642" -->
<!-- sent="Mon, 14 Feb 2011 22:46:36 -0800" -->
<!-- isosent="20110215064636" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C97F600A.E5BB%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D59ED8A.3080506_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-02-15 01:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15618.php">Petit, George (Cont, ARL/CISD): "[OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Previous message:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Please read my comments inline.
<br>
<p><p>On 2/14/11 7:05 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Answers inline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence, I don't understand why the lack of symmetry in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; firewall protection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either vixen's is too loose, or dashen's is too tight, I'd risk to say.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe dashen was installed later, just got whatever boilerplate firewall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that comes with RedHat, CentOS, Fedora.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there is a gateway for this LAN somewhere with another firewall,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is probably the case,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are correct.  We had a system administrator, but we lost
</span><br>
<span class="quotelev2">&gt;&gt; that person and I installed dasher from scratch myslef and
</span><br>
<span class="quotelev2">&gt;&gt; I did use boilerplage firewall from centos 5.5 distribution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read your answer to Ashley and Reuti telling that you
</span><br>
<span class="quotelev1">&gt; turned the firewall off and OpenMPI now works with vixen and dashen.
</span><br>
<span class="quotelev1">&gt; That's good news!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have Internet access from either machine?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The LAN gateway is probably doing NAT.
</span><br>
I think that's the case.
<br>
<p><span class="quotelev1">&gt; I would guess it also has its own firewall.
</span><br>
Yes, I believe so.
<br>
<p><span class="quotelev1">&gt; Is there anybody there that could tell you about this?
</span><br>
I am afraid not...  Every time I ask something, I get
<br>
run-around or disinformation.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vixen has yet another private IP 10.1.1.2 (eth0),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a bit weird combination of broadcast address 192.168.255.255(?),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mask 255.0.0.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vixen is/was part of another group of machines, via this other IP,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster perhaps?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a Rocks HPC cluster.  The cluster head is called blitzen
</span><br>
<span class="quotelev2">&gt;&gt; and there are 8 nodes in the cluster.  We have completely outgrown
</span><br>
<span class="quotelev2">&gt;&gt; this setting.  For example, I am running an application for last
</span><br>
<span class="quotelev2">&gt;&gt; 2 weeks with 4 of 8 nodes and the other 4 nodes have been used
</span><br>
<span class="quotelev2">&gt;&gt; by my colleagues and I expect my jobs to run another 2-3 weeks.
</span><br>
<span class="quotelev2">&gt;&gt; Which is why I am interested in cloud.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vixen is not part of the Rocks cluster, but it is an nfs server,
</span><br>
<span class="quotelev2">&gt;&gt; as well as database server.  Here's ifconfig of blitzen:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_blitzen Rmpi]$ ifconfig
</span><br>
<span class="quotelev2">&gt;&gt;   eth0      Link encap:Ethernet  HWaddr 00:19:B9:E0:C0:0B
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:10.1.1.1  Bcast:10.255.255.255  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: fe80::219:b9ff:fee0:c00b/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:58859908 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:38795319 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:14637456238 (13.6 GiB)  TX bytes:25487423161 (23.7 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;             Interrupt:193 Memory:ec000000-ec012100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   eth1      Link encap:Ethernet  HWaddr 00:19:B9:E0:C0:0D
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:172.16.1.106  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: fe80::219:b9ff:fee0:c00d/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:99465693 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:46026372 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:44685802310 (41.6 GiB)  TX bytes:28223858173 (26.2 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;             Interrupt:193 Memory:ea000000-ea012100
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
<span class="quotelev2">&gt;&gt;             RX packets:80078179 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:80078179 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:27450135463 (25.5 GiB)  TX bytes:27450135463 (25.5 GiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And here's the same thing of vixen:
</span><br>
<span class="quotelev2">&gt;&gt; [tsakai_at_vixen Rmpi]$ cat moo
</span><br>
<span class="quotelev2">&gt;&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:31
</span><br>
<span class="quotelev2">&gt;&gt;             inet addr:10.1.1.2  Bcast:192.168.255.255  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;             inet6 addr: fe80::21a:a0ff:fe1c:31/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;             RX packets:61942079 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:61950934 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:47837093368 (44.5 GiB)  TX bytes:54525223424 (50.7 GiB)
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
<span class="quotelev2">&gt;&gt;             RX packets:5204606192 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:8935890067 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:371146631795 (345.6 GiB)  TX bytes:13424275898600 (12.2
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
<span class="quotelev2">&gt;&gt;             RX packets:244240818 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;             TX packets:244240818 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;             RX bytes:1190988294201 (1.0 TiB)  TX bytes:1190988294201 (1.0
</span><br>
<span class="quotelev2">&gt;&gt; TiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you are also correct as to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bit weird combination of broadcast address 192.168.255.255 (?),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and mask 255.0.0.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think they are both misconfigured.  I will fix them when I can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Blitzen's configuration looks like standard Rocks to me:
</span><br>
<span class="quotelev1">&gt; eth0 for private net, eth1 for LAN or WAN.
</span><br>
<span class="quotelev1">&gt; I think it is not misconfigured.
</span><br>
Good, that's one fewer things I have to do.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, beware that Rocks has its own ways/commands to configure things
</span><br>
<span class="quotelev1">&gt; (i.e., '$ rocks do this and that').
</span><br>
<span class="quotelev1">&gt; Using the Linux tools directly sometimes breaks or leaves loose
</span><br>
<span class="quotelev1">&gt; ends on Rocks.
</span><br>
Thank you for the tip.  I was unaware of such.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vixen eth0 looks weird, but now that you mentioned your Rocks cluster,
</span><br>
<span class="quotelev1">&gt; it may be that its eth0 is used to connect vixen to the
</span><br>
<span class="quotelev1">&gt; cluster's private subnet, and serve NFS to it.
</span><br>
<span class="quotelev1">&gt; Still the Bcast address doesn't look right.
</span><br>
<span class="quotelev1">&gt; I would expect it to be 10.255.255.255 (as in blitzen's eth0), if vixen
</span><br>
<span class="quotelev1">&gt; serves NFS to the cluster via eth0.
</span><br>
Thanks for this tip as well.  I will make a note of it.
<br>
As strange as it looks, things are working and therefore
<br>
I won't fix it at the moment.  Better things to do on my
<br>
Plate.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is in your ${TORQUE}/server_priv/nodes file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IPs or names (vixen &amp; dashen).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We don't use TORQUE.  We do use SGE from blitzen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh, sorry, you said before you don't use Torque.
</span><br>
<span class="quotelev1">&gt; I forgot that one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I really meant to ask is about your OpenMPI hostfile,
</span><br>
<span class="quotelev1">&gt; or how the --app file refers to the machines,
</span><br>
<span class="quotelev1">&gt; but I guess you use host names there, not IPs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, I have been pretty consistently doing dns approach.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Are they on a DNS server or do you resolve their names/IPs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; via /etc/hosts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully vixen's name resolves as 172.16.1.107.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They are on dns server:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_dasher Rmpi]$ nslookup vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;   Server:         172.16.1.2
</span><br>
<span class="quotelev2">&gt;&gt;   Address:        172.16.1.2#53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Name:   vixen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;   Address: 172.16.1.107
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_dasher Rmpi]$ nslookup blitzen
</span><br>
<span class="quotelev2">&gt;&gt;   Server:         172.16.1.2
</span><br>
<span class="quotelev2">&gt;&gt;   Address:        172.16.1.2#53
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Name:   blitzen.egcrc.org
</span><br>
<span class="quotelev2">&gt;&gt;   Address: 172.16.1.106
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_dasher Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;   [tsakai_at_dasher Rmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DNS makes it easier for you, specially on a LAN, where machines
</span><br>
<span class="quotelev1">&gt; change often in ways that you can't control.
</span><br>
<span class="quotelev1">&gt; You don't need to worry about resolving names with /etc/hosts,
</span><br>
<span class="quotelev1">&gt; which is an the easy thing to do in a cluster.
</span><br>
All our machines have static IP address and they are served
<br>
out of dns server.  The only exception to this is dasher.  I
<br>
have not asked for a static IP for dasher yet.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One more point that I over looked in a previous post:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have yet to understand whether you copy your compiled tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OpenMPI, R, etc) from your local machines to EC2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or if you build/compile them directly on the EC2 environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tools like OpenMPI, R, and for that matter gcc, must be part
</span><br>
<span class="quotelev2">&gt;&gt; of ami.  The ami is stored on amazon device, it could be on
</span><br>
<span class="quotelev2">&gt;&gt; an S3 (simple storage server) or volume (which is what Ashley
</span><br>
<span class="quotelev2">&gt;&gt; recommends).  So I put R and everything I needed on the ami
</span><br>
<span class="quotelev2">&gt;&gt; before I uploaded it onto amazon.  Only I didn't put OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; on it.  I did wget from my ami instance to download OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; source, compiled it on the instance, and saved that image
</span><br>
<span class="quotelev2">&gt;&gt; on S3.  So now when I launch the instance OpenMPI is part of
</span><br>
<span class="quotelev2">&gt;&gt; the ami.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is more clear to me now.
</span><br>
<span class="quotelev1">&gt; It sounds right, although other than storage,
</span><br>
<span class="quotelev1">&gt; I can't fathom the difference between what you
</span><br>
<span class="quotelev1">&gt; did and what Ashley suggested.
</span><br>
<span class="quotelev1">&gt; Yet, somehow Ashley got it to work.
</span><br>
<span class="quotelev1">&gt; There may be something to pursue there.
</span><br>
There I agree with you as well.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, it's not clear to me if the OS in EC2 is an image
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from your local machines' OS/Linux distro, or independent of them,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or if you can choose to have it either way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OS in EC2 is either linux or windows.  (I have never
</span><br>
<span class="quotelev2">&gt;&gt; used windows in my life.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did.
</span><br>
<span class="quotelev1">&gt; Don't worry.
</span><br>
<span class="quotelev1">&gt; It is not a sin.  :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But seriously, from the problems I read on the MPICH2 mailing list,
</span><br>
<span class="quotelev1">&gt; I it seems to be hard to use it for HPC and parallel programing at least.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For linux, it can be any linux
</span><br>
<span class="quotelev2">&gt;&gt; as one chooses.  In my case, I built an ami from centos
</span><br>
<span class="quotelev2">&gt;&gt; distribution with everything I needed.  It is essentially
</span><br>
<span class="quotelev2">&gt;&gt; the same thing as dasher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Except for the firewall, I suppose.
</span><br>
<span class="quotelev1">&gt; Did you check if it is turned off on your EC2 replica of dasher?
</span><br>
<span class="quotelev1">&gt; I don't know if this question makes any sense in the EC2 context,
</span><br>
<span class="quotelev1">&gt; but maybe it does.
</span><br>
I did just now:
<br>
[tsakai_at_ip-10-212-231-223 ~]$ sudo su
<br>
bash-3.2#
<br>
bash-3.2# iptables --list
<br>
Chain INPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain FORWARD (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain OUTPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
bash-3.2#
<br>
bash-3.2# cat cat /etc/sysconfig/iptables
<br>
cat: cat: No such file or directory
<br>
cat: /etc/sysconfig/iptables: No such file or directory
<br>
bash-3.2#
<br>
bash-3.2# /etc/rc.d/init.d/iptables status
<br>
Table: filter
<br>
Chain INPUT (policy ACCEPT)
<br>
num  target     prot opt source               destination
<br>
<p>Chain FORWARD (policy ACCEPT)
<br>
num  target     prot opt source               destination
<br>
<p>Chain OUTPUT (policy ACCEPT)
<br>
num  target     prot opt source               destination
<br>
<p>bash-3.2#
<br>
<p>I think I can conclude that there is no firewall running
<br>
on the EC2 instance.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On another posting, Ashley Pittman reported to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be using OpenMPI in Amazon EC2 without problems,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggests pathway and gives several tips for that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is probably a more promising path,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which you may want to try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a feeling that I will be in need of more help
</span><br>
<span class="quotelev2">&gt;&gt; from her.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Save a mistake, I have the feeling that the
</span><br>
<span class="quotelev1">&gt; Ashley Pitmann we've been talking to is a gentleman:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://uk.linkedin.com/in/ashleypittman">http://uk.linkedin.com/in/ashleypittman</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not the jewelry designer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ashleypittman.com/company-ashley-pittman.php">http://www.ashleypittman.com/company-ashley-pittman.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
Oops, I hope I didn't offend him.
<br>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<p>Lastly, I broke something, though I have no idea what it is.
<br>
I have been wrenching my head last 3-4 hours...
<br>
I did something to my ami between Friday and today.  As a
<br>
result, I can no longer replicate what I was able to show
<br>
you Friday on EC2.  Namely, I cannot generate 'pipe function
<br>
call failed...' error anymore.  It, instead, hangs.  I am
<br>
sure I am doing something stupid...  More on this tomorrow.
<br>
<p>Many thanks for your thoughts.  I appreciate it very much.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/14/11 3:46 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Kevin,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dasher is physically located under my desk and vixen is in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cecure data center.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  does dasher have any network interfaces that vixen does not?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, I don't think so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is more definitive info:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_dasher Rmpi]$ ifconfig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:E1:84:A9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet addr:172.16.0.116  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet6 addr: fe80::21a:a0ff:fee1:84a9/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX packets:2347 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             TX packets:1005 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX bytes:531809 (519.3 KiB)  TX bytes:269872 (263.5 KiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Memory:c2200000-c2220000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   lo        Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX packets:74 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             TX packets:74 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX bytes:7824 (7.6 KiB)  TX bytes:7824 (7.6 KiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [tsakai_at_dasher Rmpi]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, vixen has two ethernet[tsakai_at_vixen Rmpi]$ cat moo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [root_at_vixen ec2]# /sbin/ifconfig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   eth0      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet addr:10.1.1.2  Bcast:192.168.255.255  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet6 addr: fe80::21a:a0ff:fe1c:31/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX packets:61913135 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             TX packets:61923635 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX bytes:47832124690 (44.5 GiB)  TX bytes:54515478860 (50.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Interrupt:185 Memory:ea000000-ea012100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   eth1      Link encap:Ethernet  HWaddr 00:1A:A0:1C:00:33
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet addr:172.16.1.107  Bcast:172.16.3.255  Mask:255.255.252.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet6 addr: fe80::21a:a0ff:fe1c:33/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX packets:5204431112 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             TX packets:8935796075 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX bytes:371123590892 (345.6 GiB)  TX bytes:13424246629869
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (12.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Interrupt:193 Memory:ec000000-ec012100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   lo        Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX packets:244169216 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             TX packets:244169216 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RX bytes:1190976360356 (1.0 TiB)  TX bytes:1190976360356 (1.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   [root_at_vixen ec2]# interfaces:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please see the mail posting that follows this, my reply to Ashley,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whom nailed the problem precisely.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/14/11 1:35 PM, &quot;Kevin.Buckley_at_[hidden]&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This probably shows my lack of understanding as to how OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; negotiates the connectivity between nodes when given a choice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of interfaces but anyway:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  does dasher have any network interfaces that vixen does not?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The scenario I am imgaining would be that you ssh into dasher
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from vixen using a &quot;network&quot; that both share and similarly, when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you mpirun from vixen, the network that OpenMPI uses is constrained
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by the interfaces that can be seen from vixen, so you are fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However when you are on dasher, mpirun sees another interface which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it takes a liking to and so tries to use that, but that interface
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is not available to vixen so the OpenMPI processes spawned there
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; terminate when they can't find that interface so as to talk back
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to dasher's controlling process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I know that you are no longer working with VMs but it's along those
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lines that I was thinking: extra network interfaces that you assume
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; won't be used but which are and which could then be overcome by use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of an explicit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  --mca btl_tcp_if_exclude virbr0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or some such construction (virbr0 used as an example here).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Kevin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Tena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They seem to be connected through the LAN 172.16.0.0/255.255.252.0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with private IPs 172.16.0.116 (dashen,eth0) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 172.16.1.107 (vixen,eth1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These addresses are probably what OpenMPI is using.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not much like a cluster, but just machines in a LAN.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence, I don't understand why the lack of symmetry in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; firewall protection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either vixen's is too loose, or dashen's is too tight, I'd risk to say.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe dashen was installed later, just got whatever boilerplate firewall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that comes with RedHat, CentOS, Fedora.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there is a gateway for this LAN somewhere with another firewall,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is probably the case,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd guess it is OK to turn off dashen's firewall.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have Internet access from either machine?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vixen has yet another private IP 10.1.1.2 (eth0),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a bit weird combination of broadcast address 192.168.255.255 (?),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and mask 255.0.0.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe vixen is/was part of another group of machines, via this other IP,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a cluster perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is in your ${TORQUE}/server_priv/nodes file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IPs or names (vixen &amp; dashen).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are they on a DNS server or do you resolve their names/IPs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; via /etc/hosts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully vixen's name resolves as 172.16.1.107.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ping -R vixen may tell).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15618.php">Petit, George (Cont, ARL/CISD): "[OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Previous message:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15616.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
