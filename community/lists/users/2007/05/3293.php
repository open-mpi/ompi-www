<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 17:18:01 2007" -->
<!-- isoreceived="20070518211801" -->
<!-- sent="Fri, 18 May 2007 14:17:31 -0700" -->
<!-- isosent="20070518211731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="1FF01709-B550-447D-A0A1-6EC46C58318A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1626092b0705181336p6ce15d4ducd96004e9c4c174a_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 17:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Keep in mind that there are two kinds of TCP traffic that OMPI uses:
<br>
<p>- &quot;OOB&quot; (out of band, meaning non-MPI): startup protocols,  
<br>
communication with mpirun, etc.  This is probably not interesting to  
<br>
you.
<br>
<p>- MPI: the back-end to MPI_SEND and friends.
<br>
<p>What I have done is get 2 nodes on my cluster that are otherwise  
<br>
unrelated meaning that there won't be any other traffic between them  
<br>
besides MPI (e.g., one is not a file server for the other, etc.): A  
<br>
and B.  Run the application like this:
<br>
<p>a$ mpirun -np 2 --host a,b --mca btl tcp,self a.out
<br>
<p>Then in another shell, run tcpdump and capture any TCP packets that  
<br>
are to or from host B.
<br>
<p>However, this will get both kinds of traffic (OOB and MPI).  So if  
<br>
you have a 2nd TCP network, use that for OOB and then the tcpdump  
<br>
will capture only the MPI traffic.  For example, you can force all  
<br>
the OOB TCP traffic across the ib0 interface (vs. the default eth0  
<br>
interface on my Linux machine) via:
<br>
<p>a$ mpirun -np 2 --host a,b --mca btl tcp,self --mca oob_tcp_include  
<br>
ib0 a.out
<br>
<p>Make sense?
<br>
<p><p><p>On May 18, 2007, at 1:36 PM, Code Master wrote:
<br>
<p><span class="quotelev1">&gt; Suppose if I want to capture any packets for my openmpi program, if  
</span><br>
<span class="quotelev1">&gt; I can't filter packets by ports, then how can the sniffer tell  
</span><br>
<span class="quotelev1">&gt; which packets are from/to any processes of my penmpi program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/19/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote: Open MPI uses  
</span><br>
<span class="quotelev1">&gt; TCP, and does not use any fixed ports. We use whatever ports the
</span><br>
<span class="quotelev1">&gt; operating system gives us. At this time there is no way to specify  
</span><br>
<span class="quotelev1">&gt; what ports
</span><br>
<span class="quotelev1">&gt; to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 18 May 2007 05:19 am, Code Master wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I run my openmpi-based application in a multi-node cluster.   
</span><br>
<span class="quotelev1">&gt; There is also
</span><br>
<span class="quotelev2">&gt; &gt; a sniffer computer (installed with wireshark) attached to a  
</span><br>
<span class="quotelev1">&gt; listener port
</span><br>
<span class="quotelev2">&gt; &gt; on the switch to sniff any packets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However I would like to know the protocol (UDP or TCP) as well as  
</span><br>
<span class="quotelev1">&gt; the ports
</span><br>
<span class="quotelev2">&gt; &gt; used by openmpi for interprocess communication so that wireshark  
</span><br>
<span class="quotelev1">&gt; can only
</span><br>
<span class="quotelev2">&gt; &gt; capture these packets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
