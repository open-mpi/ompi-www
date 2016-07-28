<?
$subject_val = "Re: [OMPI users] Problem with openmpi version 1.3b1 beta1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 19:02:24 2008" -->
<!-- isoreceived="20081031230224" -->
<!-- sent="Fri, 31 Oct 2008 17:02:15 -0600" -->
<!-- isosent="20081031230215" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi version 1.3b1 beta1" -->
<!-- id="6BCB1362-EA2C-4B4B-AB1A-367ED7739783_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BLU0-SMTP1491973393BAA54E065B9C88200_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi version 1.3b1 beta1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 19:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7178.php">Mi Yan: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7176.php">Allan Menezes: "[OMPI users] Problem with openmpi version 1.3b1 beta1"</a>
<li><strong>In reply to:</strong> <a href="7176.php">Allan Menezes: "[OMPI users] Problem with openmpi version 1.3b1 beta1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see you are using IPv6. From what I can tell, we do enable that  
<br>
support by default if the underlying system supports it.
<br>
<p>My best guess is that either that support is broken (we never test it  
<br>
since none of us use IPv6), or our configure system isn't properly  
<br>
detecting that it exists.
<br>
<p>Can you attach a copy of your config.log? It will tell us what the  
<br>
system thinks it should be building.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Oct 31, 2008, at 4:54 PM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; Date: Fri, 31 Oct 2008 09:34:52 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] users Digest, Vol 1052, Issue 1
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;0CF28492-B13E-4F82-AC43-C1580F0794D1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt; 	DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the daemon isn't seeing the other interface address  
</span><br>
<span class="quotelev1">&gt; on  host x2. Can you ssh to x2 and send the contents of ifconfig -a?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 9:18 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1. Openmpi ver1.3beta1 (Allan Menezes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2. Re: Openmpi ver1.3beta1 (Ralph Castain)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  3. Re: Equivalent .h files (Benjamin Lamptey)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  4. Re: Equivalent .h files (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  5. ompi-checkpoint is hanging (Matthias Hovestadt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  6. unsubscibe (Bertrand P. S. Russell)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  7. Re: ompi-checkpoint is hanging (Tim Mattox)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 31 Oct 2008 02:06:09 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Allan Menezes &lt;amenezes007_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;BLU0-SMTP224B5E356302AC7AA4481088200_at_phx.gbl&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-threads=posix --disable-ipv6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have six nodes x1..6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from  the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; head node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i run the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printing out the hostname of x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when i type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not give me any output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a 6 node intel quad core cluster with OSCAR and pci express
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can somebody advise?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 31 Oct 2008 02:41:59 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;E8AF5AAF-99CB-4EFC-AA97-5385CE333AD2_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When you typed the --host x1 command, were you sitting on x1?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Likewise, when you typed the --host x2 command, were you not on   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host x2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the answer to both questions is &quot;yes&quot;, then my guess is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something is preventing you from launching a daemon on host x2. Try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding --leave-session-attached to your cmd line and see if any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages appear. And check the FAQ for tips on how to setup for ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch (I'm assuming that is what you are using).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 31, 2008, at 12:06 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;  Yes that is true I tried both commands on x1 and ver 1.28 works   
</span><br>
<span class="quotelev2">&gt;&gt; on the same setup without a problem.
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output with the added
</span><br>
<span class="quotelev2">&gt;&gt; --leave-session-attached
</span><br>
<span class="quotelev2">&gt;&gt; [allan_at_x1 ~]$ mpiexec --prefix /opt/openmpi13b2  --leave-session-  
</span><br>
<span class="quotelev2">&gt;&gt; attached -host x2 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0]   
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_try_connect: connect to 192.168.0.198:0 failed:   
</span><br>
<span class="quotelev2">&gt;&gt; Network is unreachable (101)
</span><br>
<span class="quotelev2">&gt;&gt; [x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0]   
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_try_connect: connect to 192.168.122.1:0 failed:   
</span><br>
<span class="quotelev2">&gt;&gt; Network is unreachable (101)
</span><br>
<span class="quotelev2">&gt;&gt; [x2.brampton.net:02236] [[1354,0],1] routed:binomial: Connection  
</span><br>
<span class="quotelev2">&gt;&gt; to  lifeline [[1354,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 7665) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev2">&gt;&gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed   
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to   
</span><br>
<span class="quotelev2">&gt;&gt; have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the   
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [allan_at_x1 ~]$
</span><br>
<span class="quotelev2">&gt;&gt; However my main eth0 IP is 192.168.1.1 and internet gate way is   
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.0.1
</span><br>
<span class="quotelev2">&gt;&gt; Any solutions?
</span><br>
<span class="quotelev2">&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads --with-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads=posix --disable-ipv6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have six nodes x1..6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the head node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When i run the following command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; printing out the hostname of x1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But when i type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does not give me any output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a 6 node intel quad core cluster with OSCAR and pci express
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can somebody advise?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;    It works for openmpi version 1.28 why should it not work for  
</span><br>
<span class="quotelev1">&gt; version 1.3?
</span><br>
<span class="quotelev1">&gt; Yes I can ssh to x2 from x1 and x1 from x2.
</span><br>
<span class="quotelev1">&gt; Here if the ifconfig -a for x1:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:1B:21:02:89:DA           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::21b:21ff:fe02:89da/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:44906 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:77644 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:3309896 (3.1 MiB)  TX bytes:101134505 (96.4 MiB)
</span><br>
<span class="quotelev1">&gt;         Memory:feae0000-feb00000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:0E:0C:BC:AB:6D           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.3.1  Bcast:192.168.3.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::20e:cff:febc:ab6d/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:124 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:133 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:7440 (7.2 KiB)  TX bytes:10027 (9.7 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet  HWaddr 00:1B:FC:A0:A7:92           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.7.1  Bcast:192.168.7.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::21b:fcff:fea0:a792/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:159 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:10902 (10.6 KiB)  TX bytes:13691 (13.3 KiB)
</span><br>
<span class="quotelev1">&gt;         Interrupt:17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth4      Link encap:Ethernet  HWaddr 00:0E:0C:B9:50:A3           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.0.198  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::20e:cff:feb9:50a3/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:25111 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:11633 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:24133775 (23.0 MiB)  TX bytes:833868 (814.3 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback          inet addr:127.0.0.1   
</span><br>
<span class="quotelev1">&gt; Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;         UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:28973 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:28973 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;         RX bytes:1223211 (1.1 MiB)  TX bytes:1223211 (1.1 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pan0      Link encap:Ethernet  HWaddr CA:00:CE:02:90:90           
</span><br>
<span class="quotelev1">&gt; BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sit0      Link encap:IPv6-in-IPv4          NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; virbr0    Link encap:Ethernet  HWaddr EA:6D:E7:85:8D:E7           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.122.1  Bcast:192.168.122.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::e86d:e7ff:fe85:8de7/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:30 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;         RX bytes:0 (0.0 b)  TX bytes:5083 (4.9 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the ifconfig -a for x2:
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:1B:21:02:DE:E9           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.1.2  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::21b:21ff:fe02:dee9/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:565 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:565 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:181079 (176.8 KiB)  TX bytes:106650 (104.1 KiB)
</span><br>
<span class="quotelev1">&gt;         Memory:feae0000-feb00000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:0E:0C:BC:B1:7D           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.3.2  Bcast:192.168.3.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::20e:cff:febc:b17d/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:11 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:20 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:660 (660.0 b)  TX bytes:1136 (1.1 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet  HWaddr 00:1F:C6:27:1C:79           
</span><br>
<span class="quotelev1">&gt; inet addr:192.168.7.2  Bcast:192.168.7.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: fe80::21f:c6ff:fe27:1c79/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:11 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:19 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;         RX bytes:506 (506.0 b)  TX bytes:1094 (1.0 KiB)
</span><br>
<span class="quotelev1">&gt;         Interrupt:17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback          inet addr:127.0.0.1   
</span><br>
<span class="quotelev1">&gt; Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;         inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;         UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:1604 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:1604 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;         RX bytes:140216 (136.9 KiB)  TX bytes:140216 (136.9 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sit0      Link encap:IPv6-in-IPv4          NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev1">&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated!
</span><br>
<span class="quotelev1">&gt; Allan Menezes
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
<li><strong>Next message:</strong> <a href="7178.php">Mi Yan: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7176.php">Allan Menezes: "[OMPI users] Problem with openmpi version 1.3b1 beta1"</a>
<li><strong>In reply to:</strong> <a href="7176.php">Allan Menezes: "[OMPI users] Problem with openmpi version 1.3b1 beta1"</a>
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
