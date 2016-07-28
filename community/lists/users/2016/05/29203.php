<?
$subject_val = "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 15:27:51 2016" -->
<!-- isoreceived="20160514192751" -->
<!-- sent="Sat, 14 May 2016 19:27:29 +0000" -->
<!-- isosent="20160514192729" -->
<!-- name="Andrew Reid" -->
<!-- email="andrew.ce.reid_at_[hidden]" -->
<!-- subject="[OMPI users] Mpirun invocation only works in debug mode, hangs in &amp;quot;normal&amp;quot; mode." -->
<!-- id="CAG5pXp0fGc=GPZA0+JM0VA8HcDWoTqtBh+rh=T9R55pYzvHdKQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode.<br>
<strong>From:</strong> Andrew Reid (<em>andrew.ce.reid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 15:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Previous message:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Reply:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all --
<br>
<p>I am having a weird problem on a cluster of Raspberry Pi model 2 machines
<br>
running the Debian/Raspbian version of OpenMPI, 1.6.5.
<br>
<p>I apologize for the length of this message, but I am trying to include all
<br>
the pertinent details, but of course can't reliably discriminate between
<br>
pertinent and irrelevant details.
<br>
<p>I am actually a fairly long-time user of OpenMPI in various environments,
<br>
and have never had any trouble with it, but in configuring my &quot;toy&quot;
<br>
cluster, this came up.
<br>
<p>The basic issue is, a sample MPI executable runs with &quot;mpirun -d&quot; or under
<br>
&quot;slurm&quot; resource allocation, but not directly from the command line -- in
<br>
the direct command-line case, it just hangs, apparently forever.
<br>
<p>What is even weirder is that, earlier today, while backing out a private
<br>
domain configuration (see below), it actually started working for a while,
<br>
but after reboots, the problem behavior has returned.
<br>
<p>It seems overwhelmingly likely that this is some kind of network transport
<br>
configuration problem, but it eludes me.
<br>
<p><p>More details about the problem:
<br>
<p><p>The Pis are all quad-core, and are named pi (head node), pj, pk, and pl
<br>
(work nodes).  They're connected by ethernet.  They all have a single
<br>
non-privileged user, named &quot;pi&quot;.
<br>
<p>There's a directory on my account containing an MPI executable, the &quot;cpi&quot;
<br>
example from the OpenMPI package, and a list of machines to run on, named
<br>
&quot;machines&quot;, with the following contents:
<br>
<p><span class="quotelev1">&gt; pj slots=4
</span><br>
<span class="quotelev1">&gt; pk slots=4
</span><br>
<span class="quotelev1">&gt; pl slots=4
</span><br>
<p><p><span class="quotelev1">&gt; mpirun --hostfile machines ./cpi
</span><br>
<p>&nbsp;&nbsp;... hangs forever, but
<br>
<p><span class="quotelev1">&gt; mpirun -d --hostfile machines ./cpi
</span><br>
<p>&nbsp;&nbsp;... runs correctly, if somewhat verbosely.
<br>
<p>Also:
<br>
<p><span class="quotelev1">&gt; salloc -n 12 /bin/bash
</span><br>
<span class="quotelev1">&gt; mpirun ./cpi
</span><br>
<p>&nbsp;&nbsp;&nbsp;... also runs correctly.  The &quot;salloc&quot; command is a slurm directive to
<br>
allocate CPU resources, and start an interactive shell with a bunch of
<br>
environment variables set to give mpirun the clues it needs, of course.
<br>
The work CPUs are allocated correctly on my &quot;work&quot; nodes when salloc is run
<br>
from the head node.
<br>
<p><p><p>&nbsp;&nbsp;Config details and diagnostic efforts:
<br>
<p>The outputs of the ompi_info runs are attached.
<br>
<p>The cluster of four Raspberry Pi model 2 computers runs the Jessie
<br>
distribution of Raspbian, which is essentially Debian.  They differ a bit,
<br>
the &quot;head node&quot;, creatively named &quot;pi&quot;, has an older static network config,
<br>
with everything specified in /etc/network/interfaces.  The &quot;cluster nodes&quot;,
<br>
equally creatively named pj, pk, and pl, all have the newer DHCPCD client
<br>
daemon configured for static interfaces, via /etc/dhcpcd.conf (NB this is
<br>
*not* the DHCP *server*, these machines do not use DHCP services.)  The
<br>
dhcpcd configuration tool is the new scheme for Raspian, and has been
<br>
modified from the &quot;as-shipped&quot; set-up to have a static IPv4 address on
<br>
eth0, and to remove some ipv6 functionality (router solicitation) that
<br>
pollutes the log files.
<br>
<p><p>MDNS is turned off in /etc/nsswitch.conf, &quot;hosts&quot; are resolved via &quot;files&quot;,
<br>
then &quot;dns&quot;.  The DNS name servers are statically configured to be 8.8.8.8
<br>
and 8.8.4.4.  None of the machines involved in the OpenMPI operation are in
<br>
DNS.
<br>
<p>For slightly complicated reasons, all four machines were initially
<br>
configured as members of a local, non-DNS-resolveable domain, named &quot;.gb&quot;
<br>
&nbsp;This was done because slurm requires e-mail, and my first crack at e-mail
<br>
config seemed to require a domain.  All the hostnames were statically
<br>
configured through /etc/hosts.   I realized later that I misunderstood the
<br>
mail config, and have backed out the domain configuration, the machines all
<br>
have non-dotted names.
<br>
<p>This seemed to briefly change the behavior, it worked several times after
<br>
this, but then on reboot, stopped working again, making me think I am
<br>
perhaps losing my mind.
<br>
<p>The system is *not* running nscd, so some kind of name-service cache is not
<br>
a good explanation here.
<br>
<p><p>The whole cluster is set up for host-based SSH authentication for the
<br>
default user, &quot;pi&quot;.  This works for all possible host pairs, tested via:
<br>
<p><span class="quotelev1">&gt; ssh -o PreferredAuthentications=hostbased pi@&lt;target&gt;
</span><br>
<p>The network config looks OK.  I can ping and ssh every way I want to, and
<br>
it all works.  The pis are all wired to the same Netgear 10/100 switch,
<br>
which in turn goes to my household switch, which in turn goes to my cable
<br>
modem.  &quot;ifconfig&quot; shows eth0 and lo configured. &quot;ifconfig -a&quot; does not
<br>
show any additional unconfigured interfaces.
<br>
<p>Ifconfig output is, in order for pi, pj, pk, and pl:
<br>
<p><p><p>eth0      Link encap:Ethernet  HWaddr b8:27:eb:16:0a:70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.0.11  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::ba27:ebff:fe16:a70/64 Scope:Global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::ba27:ebff:fe16:a70/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:164 errors:0 dropped:23 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:133 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:15733 (15.3 KiB)  TX bytes:13756 (13.4 KiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:7 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:7 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:616 (616.0 B)  TX bytes:616 (616.0 B)
<br>
<p><p><p><p>eth0      Link encap:Ethernet  HWaddr b8:27:eb:27:4d:17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.0.12  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::4c5c:1329:f1b6:1169/64 Scope:Global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::6594:bfad:206:1191/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:237 errors:0 dropped:31 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:131 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:28966 (28.2 KiB)  TX bytes:18841 (18.3 KiB)
<br>
<p><p><p>lo        Link encap:Local Loopback
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:136 errors:0 dropped:0 overruns:0 frame:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:136 errors:0 dropped:0 overruns:0 carrier:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:11664 (11.3 KiB)  TX bytes:11664 (11.3 KiB)
<br>
<p><p><p><p>eth0      Link encap:Ethernet  HWaddr b8:27:eb:f4:ec:03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.0.13  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::ba08:3c9:67c3:a2a1/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::8e5a:32a5:ab50:d955/64 Scope:Global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:299 errors:0 dropped:57 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:138 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:34334 (33.5 KiB)  TX bytes:19909 (19.4 KiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:136 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:136 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:11664 (11.3 KiB)  TX bytes:11664 (11.3 KiB)
<br>
<p><p><p>eth0      Link encap:Ethernet  HWaddr b8:27:eb:da:c6:7f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.0.14  Bcast:192.168.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::a8db:7245:458f:2342/64 Scope:Global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::3c5f:7092:578a:6c10/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:369 errors:0 dropped:76 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:165 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:38040 (37.1 KiB)  TX bytes:22788 (22.2 KiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:136 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:136 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:11664 (11.3 KiB)  TX bytes:11664 (11.3 KiB)
<br>
<p><p><p><p>There are no firewalls on any of the machines.  I checked this via
<br>
&quot;iptables-save&quot;, which dumps the system firewall state in a way that allows
<br>
it to be re-loaded by a script, and the output is reasonably
<br>
human-readable.  It shows all tables with no rules and a default &quot;accept&quot;
<br>
state.
<br>
<p><p>The OpenMPI installation is the current Raspbian version, freshly installed
<br>
(via &quot;apt-get install openmpi-bin libopenmpi-dev&quot;) from the repos.  The
<br>
OpenMPI is version 1.6.5, the package version is 1.6.5-9.1+rpi1.  No
<br>
configuration options have been modified.
<br>
<p>There is no &quot;.openmpi&quot; directory on the pi user account on any of the
<br>
machines.
<br>
<p>When I run the problem case, I can sometimes catch the &quot;orted&quot; daemon
<br>
spinning up on the pj machine, it looks something like this (the port
<br>
number on the tcp uri varies from run to run):
<br>
<p><span class="quotelev1">&gt; 1 S pi        4895     1  0  80   0 -  1945 poll_s 20:23 ?
</span><br>
&nbsp;00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 1646002176
<br>
-mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri 1646002176.0;tcp://
<br>
192.168.0.11:59646 -mca plm rsh
<br>
<p>(192.168.0.11 is indeed the correct address of the launching machine,
<br>
hostname pi.  The first &quot;pi&quot; in column 3 is the name of the user who owns
<br>
the process.
<br>
<p>If I run &quot;telnet 192.168.0.11 59646&quot;, it connects.  I can send some garbage
<br>
into the connection, but this does not cause the orted to exit, nor does it
<br>
immedately blow up the launching process on the launch machine.  I have not
<br>
investigated in detail, but it seems that if you molest the TCP connection
<br>
in this way, the launching process eventually reports an error, but if you
<br>
don't, it will hang forever.
<br>
<p><p>One additional oddity, when I run the job in &quot;debug&quot; mode, the clients
<br>
generate the following dmesg traffic:
<br>
<p><span class="quotelev1">&gt; [ 1002.404021] sctp: [Deprecated]: cpi (pid 13770) Requested
</span><br>
SCTP_SNDRCVINFO event.
<br>
<span class="quotelev1">&gt; Use SCTP_RCVINFO through SCTP_RECVRCVINFO option instead.
</span><br>
<span class="quotelev1">&gt; [ 1002.412423] sctp: [Deprecated]: cpi (pid 13772) Requested
</span><br>
SCTP_SNDRCVINFO event.
<br>
<span class="quotelev1">&gt; Use SCTP_RCVINFO through SCTP_RECVRCVINFO option instead.
</span><br>
<span class="quotelev1">&gt; [ 1002.427621] sctp: [Deprecated]: cpi (pid 13771) Requested
</span><br>
SCTP_SNDRCVINFO event.
<br>
<span class="quotelev1">&gt; Use SCTP_RCVINFO through SCTP_RECVRCVINFO option instead.
</span><br>
<p><p><p>&nbsp;&nbsp;I have tried:
<br>
<p>&nbsp;- Adding or removing the domain suffix from the hosts in the machines file.
<br>
&nbsp;- Checked that the clocks on all four machines match.
<br>
&nbsp;- Changing the host names in the machines file to invalid names -- this
<br>
causes the expected failure, reassuring me that the file is being read.
<br>
Note that the hanging behavior also occurs with the &quot;-H&quot; option in place of
<br>
a machine file.
<br>
&nbsp;- Running with &quot;-mca btl tcp,self -mca btl_tcp_if_include eth0&quot; in case
<br>
it's having device problems.  When I do this, I see this argument echoed on
<br>
the orted process on pj, but the behavior is the same, it still hangs.
<br>
&nbsp;- Removing the &quot;slots=&quot; directive from the machines file.
<br>
&nbsp;- Disabling IPv6 (via sysctl).
<br>
&nbsp;- Turning off the SLURM daemons (via systemctl, not by uninstalling them.)
<br>
&nbsp;- Different host combinations in the machines file.  This changes things
<br>
in weird ways, which I have not systematically explored.
<br>
&nbsp;&nbsp;&nbsp;It seems that if pk is the first in line, then the thing eventually
<br>
times out, but if pj or pl is first, it hangs forever.  The willingness of
<br>
orted to appear in the client process table seems seems inconsistent, but
<br>
it may be that it always runs, but I am not consistently catching it.
<br>
&nbsp;- Adding/removing &quot;multi on&quot; from /etc/host.conf.
<br>
<p>None of these have changed the behavior, except, as noted, briefly after
<br>
backing out the private domain configuration (which involves editing the
<br>
hosts file, which motivates the focus on DNS in some of this.)
<br>
<p><p>All configurations work with &quot;-d&quot;, or with &quot;--debug-daemons&quot; or with no
<br>
arguments inside a slurm allocation, but hang in the &quot;ordinary&quot; case.
<br>
<p>I am stumped.  I am totally willing to believe I have mucked up the network
<br>
config, but where? How? What's different about debug mode?
<br>
<p>




<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29203/ompi_info.pk.gb.bz2">ompi_info.pk.gb.bz2</a>
</ul>
<!-- attachment="ompi_info.pk.gb.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29203/ompi_info.pl.gb.bz2">ompi_info.pl.gb.bz2</a>
</ul>
<!-- attachment="ompi_info.pl.gb.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29203/ompi_info.pj.gb.bz2">ompi_info.pj.gb.bz2</a>
</ul>
<!-- attachment="ompi_info.pj.gb.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29203/ompi_info.pi.gb.bz2">ompi_info.pi.gb.bz2</a>
</ul>
<!-- attachment="ompi_info.pi.gb.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29203/ompi_info_all.pi.bz2">ompi_info_all.pi.bz2</a>
</ul>
<!-- attachment="ompi_info_all.pi.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Previous message:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Reply:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
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
