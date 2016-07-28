<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 16:36:55 2007" -->
<!-- isoreceived="20070518203655" -->
<!-- sent="Sat, 19 May 2007 08:36:50 +1200" -->
<!-- isosent="20070518203650" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="1626092b0705181336p6ce15d4ducd96004e9c4c174a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200705180707.47526.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 16:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>In reply to:</strong> <a href="3287.php">Tim Prins: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Suppose if I want to capture any packets for my openmpi program, if I can't
<br>
filter packets by ports, then how can the sniffer tell which packets are
<br>
from/to any processes of my penmpi program?
<br>
<p>On 5/19/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI uses TCP, and does not use any fixed ports. We use whatever ports
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; operating system gives us. At this time there is no way to specify what
</span><br>
<span class="quotelev1">&gt; ports
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
<span class="quotelev2">&gt; &gt; I run my openmpi-based application in a multi-node cluster.  There is
</span><br>
<span class="quotelev1">&gt; also
</span><br>
<span class="quotelev2">&gt; &gt; a sniffer computer (installed with wireshark) attached to a listener
</span><br>
<span class="quotelev1">&gt; port
</span><br>
<span class="quotelev2">&gt; &gt; on the switch to sniff any packets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However I would like to know the protocol (UDP or TCP) as well as the
</span><br>
<span class="quotelev1">&gt; ports
</span><br>
<span class="quotelev2">&gt; &gt; used by openmpi for interprocess communication so that wireshark can
</span><br>
<span class="quotelev1">&gt; only
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3291.php">George Bosilca: "Re: [OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>In reply to:</strong> <a href="3287.php">Tim Prins: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
