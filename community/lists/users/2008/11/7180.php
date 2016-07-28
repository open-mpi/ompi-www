<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1052, Issue 10";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  1 05:36:12 2008" -->
<!-- isoreceived="20081101093612" -->
<!-- sent="Sat, 1 Nov 2008 03:36:00 -0600" -->
<!-- isosent="20081101093600" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1052, Issue 10" -->
<!-- id="BC706DDC-71B3-4803-93CC-17BBFB10BF87_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BLU0-SMTP128F4C8932981850FDD73888230_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1052, Issue 10<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-01 05:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7179.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7179.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Allan
<br>
<p>I'm glad that it fixed your problem! I didn't see any IPv4 addresses  
<br>
in your ifconfig output, so I suspect that is why it wasn't working  
<br>
with --disable-ipv6.
<br>
<p>So I guess it sounds like the 1.2 series isn't actually disabling IPv6  
<br>
support when we --disable-ipv6 if nothing but IPv6 interfaces are  
<br>
available. I doubt we'll go back to fix that, but it is good to know.
<br>
<p>Thanks for the patience
<br>
Ralph
<br>
<p><p>On Oct 31, 2008, at 6:47 PM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. Re: Problem with openmpi version 1.3b1 beta1 (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt;    2. Re: problem running Open MPI on Cells (Mi Yan)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;     I solved the problem. With Ver 1.28 same system this configure  
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi128 --enable-mpi-threads --with- 
</span><br>
<span class="quotelev1">&gt; threads=posix --disable-ipv6 but does not work with any ver 1.3
</span><br>
<span class="quotelev1">&gt; beacuse of ipv6 so to fix it i rebuilt it after make clean with ipv6  
</span><br>
<span class="quotelev1">&gt; enabled and it works!
</span><br>
<span class="quotelev1">&gt; This configure for ver 1.3 works on my system
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi128 --enable-mpi-threads --with- 
</span><br>
<span class="quotelev1">&gt; threads=posix
</span><br>
<span class="quotelev1">&gt; Do you still want the old or the new config.log?
</span><br>
<span class="quotelev1">&gt; Allan Menezes
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 31 Oct 2008 17:02:15 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with openmpi version 1.3b1 beta1
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;6BCB1362-EA2C-4B4B-AB1A-367ED7739783_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see you are using IPv6. From what I can tell, we do enable that
</span><br>
<span class="quotelev2">&gt;&gt; support by default if the underlying system supports it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My best guess is that either that support is broken (we never test it
</span><br>
<span class="quotelev2">&gt;&gt; since none of us use IPv6), or our configure system isn't properly
</span><br>
<span class="quotelev2">&gt;&gt; detecting that it exists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you attach a copy of your config.log? It will tell us what the
</span><br>
<span class="quotelev2">&gt;&gt; system thinks it should be building.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2008, at 4:54 PM, Allan Menezes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 31 Oct 2008 09:34:52 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] users Digest, Vol 1052, Issue 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;0CF28492-B13E-4F82-AC43-C1580F0794D1_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like the daemon isn't seeing the other interface address
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on  host x2. Can you ssh to x2 and send the contents of ifconfig -a?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 31, 2008, at 9:18 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When replying, please edit your Subject line so it is more  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  1. Openmpi ver1.3beta1 (Allan Menezes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  2. Re: Openmpi ver1.3beta1 (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  3. Re: Equivalent .h files (Benjamin Lamptey)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  4. Re: Equivalent .h files (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  5. ompi-checkpoint is hanging (Matthias Hovestadt)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  6. unsubscibe (Bertrand P. S. Russell)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  7. Re: ompi-checkpoint is hanging (Tim Mattox)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Fri, 31 Oct 2008 02:06:09 -0400
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Allan Menezes &lt;amenezes007_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;BLU0-SMTP224B5E356302AC7AA4481088200_at_phx.gbl&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-threads=posix --disable-ipv6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have six nodes x1..6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from  the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; head node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When i run the following command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; x1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printing out the hostname of x1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But when i type
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not give me any output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a 6 node intel quad core cluster with OSCAR and pci express
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can somebody advise?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Fri, 31 Oct 2008 02:41:59 -0600
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;E8AF5AAF-99CB-4EFC-AA97-5385CE333AD2_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delsp=yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When you typed the --host x1 command, were you sitting on x1?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Likewise, when you typed the --host x2 command, were you not on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host x2?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If the answer to both questions is &quot;yes&quot;, then my guess is that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something is preventing you from launching a daemon on host x2.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; adding --leave-session-attached to your cmd line and see if any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages appear. And check the FAQ for tips on how to setup for  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; launch (I'm assuming that is what you are using).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 31, 2008, at 12:06 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Yes that is true I tried both commands on x1 and ver 1.28 works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the same setup without a problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the output with the added
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --leave-session-attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [allan_at_x1 ~]$ mpiexec --prefix /opt/openmpi13b2  --leave-session-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attached -host x2 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_peer_try_connect: connect to 192.168.0.198:0 failed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Network is unreachable (101)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_peer_try_connect: connect to 192.168.122.1:0 failed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Network is unreachable (101)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [x2.brampton.net:02236] [[1354,0],1] routed:binomial: Connection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to  lifeline [[1354,0],0] lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A daemon (pid 7665) died unexpectedly with status 1 while  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [allan_at_x1 ~]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However my main eth0 IP is 192.168.1.1 and internet gate way is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 192.168.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any solutions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; threads=posix --disable-ipv6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have six nodes x1..6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the head node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When i run the following command:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on x1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; printing out the hostname of x1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But when i type
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; does not give me any output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a 6 node intel quad core cluster with OSCAR and pci  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; express
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can somebody advise?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    It works for openmpi version 1.28 why should it not work for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version 1.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes I can ssh to x2 from x1 and x1 from x2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here if the ifconfig -a for x1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:1B:21:02:89:DA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::21b:21ff:fe02:89da/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:44906 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:77644 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:3309896 (3.1 MiB)  TX bytes:101134505 (96.4 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Memory:feae0000-feb00000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:0E:0C:BC:AB:6D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.3.1  Bcast:192.168.3.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::20e:cff:febc:ab6d/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:124 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:133 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:7440 (7.2 KiB)  TX bytes:10027 (9.7 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth2      Link encap:Ethernet  HWaddr 00:1B:FC:A0:A7:92
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.7.1  Bcast:192.168.7.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::21b:fcff:fea0:a792/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:159 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:10902 (10.6 KiB)  TX bytes:13691 (13.3 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Interrupt:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth4      Link encap:Ethernet  HWaddr 00:0E:0C:B9:50:A3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.0.198  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::20e:cff:feb9:50a3/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:25111 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:11633 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:24133775 (23.0 MiB)  TX bytes:833868 (814.3 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback          inet addr:127.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:28973 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:28973 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:1223211 (1.1 MiB)  TX bytes:1223211 (1.1 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pan0      Link encap:Ethernet  HWaddr CA:00:CE:02:90:90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sit0      Link encap:IPv6-in-IPv4          NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virbr0    Link encap:Ethernet  HWaddr EA:6D:E7:85:8D:E7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.122.1  Bcast:192.168.122.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::e86d:e7ff:fe85:8de7/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:30 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:0 (0.0 b)  TX bytes:5083 (4.9 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the ifconfig -a for x2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:1B:21:02:DE:E9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.1.2  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::21b:21ff:fe02:dee9/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:565 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:565 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:181079 (176.8 KiB)  TX bytes:106650 (104.1 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Memory:feae0000-feb00000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:0E:0C:BC:B1:7D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.3.2  Bcast:192.168.3.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::20e:cff:febc:b17d/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:11 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:20 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:660 (660.0 b)  TX bytes:1136 (1.1 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth2      Link encap:Ethernet  HWaddr 00:1F:C6:27:1C:79
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inet addr:192.168.7.2  Bcast:192.168.7.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: fe80::21f:c6ff:fe27:1c79/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:11 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:19 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:506 (506.0 b)  TX bytes:1094 (1.0 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Interrupt:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback          inet addr:127.0.0.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:1604 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:1604 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:140216 (136.9 KiB)  TX bytes:140216 (136.9 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sit0      Link encap:IPv6-in-IPv4          NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 31 Oct 2008 20:33:33 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Mi Yan &lt;miyan_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] problem running Open MPI on Cells
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;, users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;OFD6258791.6AD0754A-ON852574F4.0001B465-852574F4.00030FF6_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where did you put the environment variable related to  MCF licence  
</span><br>
<span class="quotelev2">&gt;&gt; file and
</span><br>
<span class="quotelev2">&gt;&gt; MCF share libraries?
</span><br>
<span class="quotelev2">&gt;&gt; What is your default shell?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you test  indicate the following?
</span><br>
<span class="quotelev2">&gt;&gt; Suppose you have 4 nodes,
</span><br>
<span class="quotelev2">&gt;&gt; on node 1,  &quot; mpirun -np 4 --host  node1,node2,node3,node4  
</span><br>
<span class="quotelev2">&gt;&gt; hostname&quot; works,
</span><br>
<span class="quotelev2">&gt;&gt; but &quot;mpirun -np4 --host node1,node2,node3,node4  foocbe&quot;  does not  
</span><br>
<span class="quotelev2">&gt;&gt; work,
</span><br>
<span class="quotelev2">&gt;&gt; where foocbe is executable generated with MCF.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It is possible that  MCF license is limited to a few concurrent  
</span><br>
<span class="quotelev2">&gt;&gt; use?  e.g.
</span><br>
<span class="quotelev2">&gt;&gt; the license is limited to 4 current use,  and mpi application  will  
</span><br>
<span class="quotelev2">&gt;&gt; fails
</span><br>
<span class="quotelev2">&gt;&gt; on 8 nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Hahn Kim
</span><br>
<span class="quotelev2">&gt;&gt;              &lt;hgk_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Sent  
</span><br>
<span class="quotelev2">&gt;&gt; by:                                                   To
</span><br>
<span class="quotelev2">&gt;&gt;              users-bounces_at_ope         Open MPI Users &lt;users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;              n- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org                                                  cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                     
</span><br>
<span class="quotelev2">&gt;&gt; Subject
</span><br>
<span class="quotelev2">&gt;&gt;              10/31/2008 03:38          [OMPI users] problem running  
</span><br>
<span class="quotelev2">&gt;&gt; Open
</span><br>
<span class="quotelev2">&gt;&gt;              PM                        MPI on Cells
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Please respond to
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;              &lt;users_at_open-mpi.o
</span><br>
<span class="quotelev2">&gt;&gt;                     rg&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having problems using Open MPI on a cluster of Mercury Computer's
</span><br>
<span class="quotelev2">&gt;&gt; Cell Accelerator Boards (CABs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have an MPI application that is running on multiple CABs.  The
</span><br>
<span class="quotelev2">&gt;&gt; application uses Mercury's MultiCore Framework (MCF) to use the  
</span><br>
<span class="quotelev2">&gt;&gt; Cell's
</span><br>
<span class="quotelev2">&gt;&gt; SPEs.  Here's the basic problem.  I can log into each CAB and run the
</span><br>
<span class="quotelev2">&gt;&gt; application in serial directly from the command line (i.e. without
</span><br>
<span class="quotelev2">&gt;&gt; using mpirun) without a problem.  I can also launch a serial job onto
</span><br>
<span class="quotelev2">&gt;&gt; each CAB from another machine using mpirun without a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem occurs when I try to launch onto multiple CABs using
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.  MCF requires a license file.  After the application
</span><br>
<span class="quotelev2">&gt;&gt; initializes MPI, it tries to initialized MCF on each node.  The
</span><br>
<span class="quotelev2">&gt;&gt; initialization routine loads the MCF license file and checks for  
</span><br>
<span class="quotelev2">&gt;&gt; valid
</span><br>
<span class="quotelev2">&gt;&gt; license keys.  If the keys are valid, then it continues to initialize
</span><br>
<span class="quotelev2">&gt;&gt; MCF.  If not, it throws an error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run on multiple CABs, most of the time several of the CABs
</span><br>
<span class="quotelev2">&gt;&gt; throw an error saying MCF cannot find a valid license key.  The
</span><br>
<span class="quotelev2">&gt;&gt; strange this is that this behavior doesn't appear when I launch  
</span><br>
<span class="quotelev2">&gt;&gt; serial
</span><br>
<span class="quotelev2">&gt;&gt; jobs using MCF, only multiple CABs.  Additionally, the errors are
</span><br>
<span class="quotelev2">&gt;&gt; inconsistent.  Not all the CABs throw an error, sometimes a few of
</span><br>
<span class="quotelev2">&gt;&gt; them error out, sometimes all of them, sometimes none.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've talked with the Mercury folks and they're just as stumped as I
</span><br>
<span class="quotelev2">&gt;&gt; am.  The only thing we can think of is that OpenMPI is somehow
</span><br>
<span class="quotelev2">&gt;&gt; modifying the environment and is interfering with MCF, but we can't
</span><br>
<span class="quotelev2">&gt;&gt; think of any reason why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas out there?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hahn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev2">&gt;&gt; Tel: 781-981-0940, Fax: 781-981-5255
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt;&gt; Name: graycol.gif
</span><br>
<span class="quotelev2">&gt;&gt; Type: image/gif
</span><br>
<span class="quotelev2">&gt;&gt; Size: 105 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Desc: not available
</span><br>
<span class="quotelev2">&gt;&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20081031/2d67d208/attachment.gif">http://www.open-mpi.org/MailArchives/users/attachments/20081031/2d67d208/attachment.gif</a> 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt;&gt; Name: pic18585.gif
</span><br>
<span class="quotelev2">&gt;&gt; Type: image/gif
</span><br>
<span class="quotelev2">&gt;&gt; Size: 1255 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Desc: not available
</span><br>
<span class="quotelev2">&gt;&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20081031/2d67d208/attachment-0001.gif">http://www.open-mpi.org/MailArchives/users/attachments/20081031/2d67d208/attachment-0001.gif</a> 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt;&gt; Name: ecblank.gif
</span><br>
<span class="quotelev2">&gt;&gt; Type: image/gif
</span><br>
<span class="quotelev2">&gt;&gt; Size: 45 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Desc: not available
</span><br>
<span class="quotelev2">&gt;&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20081031/2d67d208/attachment-0002.gif">http://www.open-mpi.org/MailArchives/users/attachments/20081031/2d67d208/attachment-0002.gif</a> 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 1052, Issue 10
</span><br>
<span class="quotelev2">&gt;&gt; ***************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7180/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7179.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7179.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 10"</a>
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
