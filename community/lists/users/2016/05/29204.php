<?
$subject_val = "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 17:44:31 2016" -->
<!-- isoreceived="20160514214431" -->
<!-- sent="Sat, 14 May 2016 21:44:10 +0000" -->
<!-- isosent="20160514214410" -->
<!-- name="Andrew Reid" -->
<!-- email="andrew.ce.reid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &amp;quot;normal&amp;quot; mode." -->
<!-- id="CAG5pXp1eUPB-sU5JymU8J4dTWtRe5NW7APit1t16RcPVHXnRjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG5pXp0fGc=GPZA0+JM0VA8HcDWoTqtBh+rh=T9R55pYzvHdKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode.<br>
<strong>From:</strong> Andrew Reid (<em>andrew.ce.reid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 17:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29203.php">Andrew Reid: "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>In reply to:</strong> <a href="29203.php">Andrew Reid: "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Reply:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I might have fixed this, but I still don't really understand it.
<br>
<p>In setting up the RPi machines, I followed a config guide that suggested
<br>
switching the SSH service in systemd to &quot;ssh.socket&quot; instead of
<br>
&quot;ssh.service&quot;. It's supposed to be lighter weight and get you cleaner
<br>
shut-downs, and I've used this trick on other machines, without really
<br>
knowing the implications.
<br>
<p>By way of completeness of my config audit to try to figure this out, I
<br>
backed this out, restoring the &quot;ssh.service&quot; link and removing the
<br>
&quot;ssh.socket&quot; one. Now MPI works, and I also get clean disconnections at
<br>
exit-time, so apparently there's no reason at all to do this.
<br>
<p>This behavior has survived two reboot cycles, so I think it's real. Not
<br>
sure if this behavior is relevant to just Raspbian, or if it's in all
<br>
architectures of Debian Jessie, or all systemd init systems, or what.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- A.
<br>
<p>On Sat, May 14, 2016 at 3:27 PM Andrew Reid &lt;andrew.ce.reid_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi all --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having a weird problem on a cluster of Raspberry Pi model 2 machines
</span><br>
<span class="quotelev1">&gt; running the Debian/Raspbian version of OpenMPI, 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I apologize for the length of this message, but I am trying to include all
</span><br>
<span class="quotelev1">&gt; the pertinent details, but of course can't reliably discriminate between
</span><br>
<span class="quotelev1">&gt; pertinent and irrelevant details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am actually a fairly long-time user of OpenMPI in various environments,
</span><br>
<span class="quotelev1">&gt; and have never had any trouble with it, but in configuring my &quot;toy&quot;
</span><br>
<span class="quotelev1">&gt; cluster, this came up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic issue is, a sample MPI executable runs with &quot;mpirun -d&quot; or under
</span><br>
<span class="quotelev1">&gt; &quot;slurm&quot; resource allocation, but not directly from the command line -- in
</span><br>
<span class="quotelev1">&gt; the direct command-line case, it just hangs, apparently forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is even weirder is that, earlier today, while backing out a private
</span><br>
<span class="quotelev1">&gt; domain configuration (see below), it actually started working for a while,
</span><br>
<span class="quotelev1">&gt; but after reboots, the problem behavior has returned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems overwhelmingly likely that this is some kind of network transport
</span><br>
<span class="quotelev1">&gt; configuration problem, but it eludes me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More details about the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Pis are all quad-core, and are named pi (head node), pj, pk, and pl
</span><br>
<span class="quotelev1">&gt; (work nodes).  They're connected by ethernet.  They all have a single
</span><br>
<span class="quotelev1">&gt; non-privileged user, named &quot;pi&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a directory on my account containing an MPI executable, the &quot;cpi&quot;
</span><br>
<span class="quotelev1">&gt; example from the OpenMPI package, and a list of machines to run on, named
</span><br>
<span class="quotelev1">&gt; &quot;machines&quot;, with the following contents:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; pj slots=4
</span><br>
<span class="quotelev2">&gt; &gt; pk slots=4
</span><br>
<span class="quotelev2">&gt; &gt; pl slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile machines ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ... hangs forever, but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -d --hostfile machines ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ... runs correctly, if somewhat verbosely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; salloc -n 12 /bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; mpirun ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ... also runs correctly.  The &quot;salloc&quot; command is a slurm directive to
</span><br>
<span class="quotelev1">&gt; allocate CPU resources, and start an interactive shell with a bunch of
</span><br>
<span class="quotelev1">&gt; environment variables set to give mpirun the clues it needs, of course.
</span><br>
<span class="quotelev1">&gt; The work CPUs are allocated correctly on my &quot;work&quot; nodes when salloc is run
</span><br>
<span class="quotelev1">&gt; from the head node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Config details and diagnostic efforts:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The outputs of the ompi_info runs are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster of four Raspberry Pi model 2 computers runs the Jessie
</span><br>
<span class="quotelev1">&gt; distribution of Raspbian, which is essentially Debian.  They differ a bit,
</span><br>
<span class="quotelev1">&gt; the &quot;head node&quot;, creatively named &quot;pi&quot;, has an older static network config,
</span><br>
<span class="quotelev1">&gt; with everything specified in /etc/network/interfaces.  The &quot;cluster nodes&quot;,
</span><br>
<span class="quotelev1">&gt; equally creatively named pj, pk, and pl, all have the newer DHCPCD client
</span><br>
<span class="quotelev1">&gt; daemon configured for static interfaces, via /etc/dhcpcd.conf (NB this is
</span><br>
<span class="quotelev1">&gt; *not* the DHCP *server*, these machines do not use DHCP services.)  The
</span><br>
<span class="quotelev1">&gt; dhcpcd configuration tool is the new scheme for Raspian, and has been
</span><br>
<span class="quotelev1">&gt; modified from the &quot;as-shipped&quot; set-up to have a static IPv4 address on
</span><br>
<span class="quotelev1">&gt; eth0, and to remove some ipv6 functionality (router solicitation) that
</span><br>
<span class="quotelev1">&gt; pollutes the log files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MDNS is turned off in /etc/nsswitch.conf, &quot;hosts&quot; are resolved via
</span><br>
<span class="quotelev1">&gt; &quot;files&quot;, then &quot;dns&quot;.  The DNS name servers are statically configured to be
</span><br>
<span class="quotelev1">&gt; 8.8.8.8 and 8.8.4.4.  None of the machines involved in the OpenMPI
</span><br>
<span class="quotelev1">&gt; operation are in DNS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For slightly complicated reasons, all four machines were initially
</span><br>
<span class="quotelev1">&gt; configured as members of a local, non-DNS-resolveable domain, named &quot;.gb&quot;
</span><br>
<span class="quotelev1">&gt;  This was done because slurm requires e-mail, and my first crack at e-mail
</span><br>
<span class="quotelev1">&gt; config seemed to require a domain.  All the hostnames were statically
</span><br>
<span class="quotelev1">&gt; configured through /etc/hosts.   I realized later that I misunderstood the
</span><br>
<span class="quotelev1">&gt; mail config, and have backed out the domain configuration, the machines all
</span><br>
<span class="quotelev1">&gt; have non-dotted names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seemed to briefly change the behavior, it worked several times after
</span><br>
<span class="quotelev1">&gt; this, but then on reboot, stopped working again, making me think I am
</span><br>
<span class="quotelev1">&gt; perhaps losing my mind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system is *not* running nscd, so some kind of name-service cache is
</span><br>
<span class="quotelev1">&gt; not a good explanation here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The whole cluster is set up for host-based SSH authentication for the
</span><br>
<span class="quotelev1">&gt; default user, &quot;pi&quot;.  This works for all possible host pairs, tested via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ssh -o PreferredAuthentications=hostbased pi@&lt;target&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The network config looks OK.  I can ping and ssh every way I want to, and
</span><br>
<span class="quotelev1">&gt; it all works.  The pis are all wired to the same Netgear 10/100 switch,
</span><br>
<span class="quotelev1">&gt; which in turn goes to my household switch, which in turn goes to my cable
</span><br>
<span class="quotelev1">&gt; modem.  &quot;ifconfig&quot; shows eth0 and lo configured. &quot;ifconfig -a&quot; does not
</span><br>
<span class="quotelev1">&gt; show any additional unconfigured interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ifconfig output is, in order for pi, pj, pk, and pl:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr b8:27:eb:16:0a:70
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.0.11  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::ba27:ebff:fe16:a70/64 Scope:Global
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::ba27:ebff:fe16:a70/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:164 errors:0 dropped:23 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:133 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:15733 (15.3 KiB)  TX bytes:13756 (13.4 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:7 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:7 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:616 (616.0 B)  TX bytes:616 (616.0 B)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr b8:27:eb:27:4d:17
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.0.12  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::4c5c:1329:f1b6:1169/64 Scope:Global
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::6594:bfad:206:1191/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:237 errors:0 dropped:31 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:131 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           RX bytes:28966 (28.2 KiB)  TX bytes:18841 (18.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           RX packets:136 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           TX packets:136 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           RX bytes:11664 (11.3 KiB)  TX bytes:11664 (11.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr b8:27:eb:f4:ec:03
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.0.13  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::ba08:3c9:67c3:a2a1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::8e5a:32a5:ab50:d955/64 Scope:Global
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:299 errors:0 dropped:57 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:138 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:34334 (33.5 KiB)  TX bytes:19909 (19.4 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:136 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:136 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:11664 (11.3 KiB)  TX bytes:11664 (11.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr b8:27:eb:da:c6:7f
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.0.14  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::a8db:7245:458f:2342/64 Scope:Global
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::3c5f:7092:578a:6c10/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:369 errors:0 dropped:76 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:165 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:38040 (37.1 KiB)  TX bytes:22788 (22.2 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:136 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:136 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:11664 (11.3 KiB)  TX bytes:11664 (11.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are no firewalls on any of the machines.  I checked this via
</span><br>
<span class="quotelev1">&gt; &quot;iptables-save&quot;, which dumps the system firewall state in a way that allows
</span><br>
<span class="quotelev1">&gt; it to be re-loaded by a script, and the output is reasonably
</span><br>
<span class="quotelev1">&gt; human-readable.  It shows all tables with no rules and a default &quot;accept&quot;
</span><br>
<span class="quotelev1">&gt; state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenMPI installation is the current Raspbian version, freshly
</span><br>
<span class="quotelev1">&gt; installed (via &quot;apt-get install openmpi-bin libopenmpi-dev&quot;) from the
</span><br>
<span class="quotelev1">&gt; repos.  The OpenMPI is version 1.6.5, the package version is
</span><br>
<span class="quotelev1">&gt; 1.6.5-9.1+rpi1.  No configuration options have been modified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no &quot;.openmpi&quot; directory on the pi user account on any of the
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the problem case, I can sometimes catch the &quot;orted&quot; daemon
</span><br>
<span class="quotelev1">&gt; spinning up on the pj machine, it looks something like this (the port
</span><br>
<span class="quotelev1">&gt; number on the tcp uri varies from run to run):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1 S pi        4895     1  0  80   0 -  1945 poll_s 20:23 ?
</span><br>
<span class="quotelev1">&gt;  00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 1646002176
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri 1646002176.0;tcp://
</span><br>
<span class="quotelev1">&gt; 192.168.0.11:59646 -mca plm rsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (192.168.0.11 is indeed the correct address of the launching machine,
</span><br>
<span class="quotelev1">&gt; hostname pi.  The first &quot;pi&quot; in column 3 is the name of the user who owns
</span><br>
<span class="quotelev1">&gt; the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run &quot;telnet 192.168.0.11 59646&quot;, it connects.  I can send some
</span><br>
<span class="quotelev1">&gt; garbage into the connection, but this does not cause the orted to exit, nor
</span><br>
<span class="quotelev1">&gt; does it immedately blow up the launching process on the launch machine.  I
</span><br>
<span class="quotelev1">&gt; have not investigated in detail, but it seems that if you molest the TCP
</span><br>
<span class="quotelev1">&gt; connection in this way, the launching process eventually reports an error,
</span><br>
<span class="quotelev1">&gt; but if you don't, it will hang forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One additional oddity, when I run the job in &quot;debug&quot; mode, the clients
</span><br>
<span class="quotelev1">&gt; generate the following dmesg traffic:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ 1002.404021] sctp: [Deprecated]: cpi (pid 13770) Requested
</span><br>
<span class="quotelev1">&gt; SCTP_SNDRCVINFO event.
</span><br>
<span class="quotelev2">&gt; &gt; Use SCTP_RCVINFO through SCTP_RECVRCVINFO option instead.
</span><br>
<span class="quotelev2">&gt; &gt; [ 1002.412423] sctp: [Deprecated]: cpi (pid 13772) Requested
</span><br>
<span class="quotelev1">&gt; SCTP_SNDRCVINFO event.
</span><br>
<span class="quotelev2">&gt; &gt; Use SCTP_RCVINFO through SCTP_RECVRCVINFO option instead.
</span><br>
<span class="quotelev2">&gt; &gt; [ 1002.427621] sctp: [Deprecated]: cpi (pid 13771) Requested
</span><br>
<span class="quotelev1">&gt; SCTP_SNDRCVINFO event.
</span><br>
<span class="quotelev2">&gt; &gt; Use SCTP_RCVINFO through SCTP_RECVRCVINFO option instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I have tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Adding or removing the domain suffix from the hosts in the machines
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt;  - Checked that the clocks on all four machines match.
</span><br>
<span class="quotelev1">&gt;  - Changing the host names in the machines file to invalid names -- this
</span><br>
<span class="quotelev1">&gt; causes the expected failure, reassuring me that the file is being read.
</span><br>
<span class="quotelev1">&gt; Note that the hanging behavior also occurs with the &quot;-H&quot; option in place of
</span><br>
<span class="quotelev1">&gt; a machine file.
</span><br>
<span class="quotelev1">&gt;  - Running with &quot;-mca btl tcp,self -mca btl_tcp_if_include eth0&quot; in case
</span><br>
<span class="quotelev1">&gt; it's having device problems.  When I do this, I see this argument echoed on
</span><br>
<span class="quotelev1">&gt; the orted process on pj, but the behavior is the same, it still hangs.
</span><br>
<span class="quotelev1">&gt;  - Removing the &quot;slots=&quot; directive from the machines file.
</span><br>
<span class="quotelev1">&gt;  - Disabling IPv6 (via sysctl).
</span><br>
<span class="quotelev1">&gt;  - Turning off the SLURM daemons (via systemctl, not by uninstalling them.)
</span><br>
<span class="quotelev1">&gt;  - Different host combinations in the machines file.  This changes things
</span><br>
<span class="quotelev1">&gt; in weird ways, which I have not systematically explored.
</span><br>
<span class="quotelev1">&gt;    It seems that if pk is the first in line, then the thing eventually
</span><br>
<span class="quotelev1">&gt; times out, but if pj or pl is first, it hangs forever.  The willingness of
</span><br>
<span class="quotelev1">&gt; orted to appear in the client process table seems seems inconsistent, but
</span><br>
<span class="quotelev1">&gt; it may be that it always runs, but I am not consistently catching it.
</span><br>
<span class="quotelev1">&gt;  - Adding/removing &quot;multi on&quot; from /etc/host.conf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of these have changed the behavior, except, as noted, briefly after
</span><br>
<span class="quotelev1">&gt; backing out the private domain configuration (which involves editing the
</span><br>
<span class="quotelev1">&gt; hosts file, which motivates the focus on DNS in some of this.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All configurations work with &quot;-d&quot;, or with &quot;--debug-daemons&quot; or with no
</span><br>
<span class="quotelev1">&gt; arguments inside a slurm allocation, but hang in the &quot;ordinary&quot; case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am stumped.  I am totally willing to believe I have mucked up the
</span><br>
<span class="quotelev1">&gt; network config, but where? How? What's different about debug mode?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29205.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29203.php">Andrew Reid: "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>In reply to:</strong> <a href="29203.php">Andrew Reid: "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Reply:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
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
