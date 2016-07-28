<?
$subject_val = "Re: [OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 11:26:02 2012" -->
<!-- isoreceived="20120117162602" -->
<!-- sent="Tue, 17 Jan 2012 09:25:57 -0700" -->
<!-- isosent="20120117162557" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] localhost only" -->
<!-- id="CAMD57od2THQ2rYKd6mGYWQxq5S9TchZoEdAJt2EU9Q5Ww+H+Vg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EAF8A91B-40A1-4625-815D-78668BA0CA22_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] localhost only<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 11:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18192.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18192.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it won't help - it looks like mpirun itself aborts if it only finds
<br>
a loopback available.
<br>
<p>On Tue, Jan 17, 2012 at 9:24 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt; Have you tried adding '-mca btl sm,self' to your mpirun command line,
</span><br>
<span class="quotelev1">&gt; as suggested by Terry? [despite the low chances that it would work ...]
</span><br>
<span class="quotelev1">&gt; If somehow the loopback interface is up, wouldn't it work?
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2012, at 7:01 AM, MM wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus, unfortunately, it doesn't seem to change the error.
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,  with the wireless adapter disabled, netstat on winxp still shows
</span><br>
<span class="quotelev1">&gt; these ports as listening:
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't the MS TCP Loopback interface allow the tcp ports to be
</span><br>
<span class="quotelev1">&gt; created?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;netstat -an
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Active Connections
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Proto  Local Address          Foreign Address        State
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    0.0.0.0:135            0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    0.0.0.0:445            0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    0.0.0.0:2967           0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    0.0.0.0:3389           0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    0.0.0.0:4445           0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    0.0.0.0:57632          0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    127.0.0.1:1025         0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;   TCP    127.0.0.1:62514        0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;route print
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt; &gt; Interface List
</span><br>
<span class="quotelev2">&gt; &gt; 0x1 ........................... MS TCP Loopback interface
</span><br>
<span class="quotelev2">&gt; &gt; 0x2 ...00 24 d6 10 05 4e ...... Intel(R) WiFi Link 5100 AGN - Packet
</span><br>
<span class="quotelev1">&gt; Scheduler Miniport
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt; &gt; Active Routes:
</span><br>
<span class="quotelev2">&gt; &gt; Network Destination        Netmask          Gateway       Interface
</span><br>
<span class="quotelev1">&gt;  Metric
</span><br>
<span class="quotelev2">&gt; &gt;         127.0.0.0        255.0.0.0        127.0.0.1       127.0.0.1
</span><br>
<span class="quotelev1">&gt;   1
</span><br>
<span class="quotelev2">&gt; &gt;   255.255.255.255  255.255.255.255  255.255.255.255               2
</span><br>
<span class="quotelev1">&gt;   1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev2">&gt; &gt; Persistent Routes:
</span><br>
<span class="quotelev2">&gt; &gt;   None
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Sent: 16 January 2012 23:54
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] localhost only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried to specify the hosts with something like this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -host localhost ./my_program
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See 'man mpirun' for more details.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope it helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 16, 2012, at 6:34 PM, MM wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when my wireless adapter is down on my laptop, only localhost is
</span><br>
<span class="quotelev1">&gt; configured.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In this case, when I mpirun 2 binaries on my laptop, mpirun fails with
</span><br>
<span class="quotelev1">&gt; this error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like orte_init failed for some reason; your parallel process i
</span><br>
<span class="quotelev3">&gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   orte_rml_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when I turn on the wireless adapter back on, the mpirun works fine
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there a way to make mpirun realize all my binaries run on the same
</span><br>
<span class="quotelev1">&gt; box, and therefore don't need any other interface but localhost?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PS: this is ipconfig when the wireless adapter is off
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;ipconfig /all
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Windows IP Configuration
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Host Name . . . . . . . . . . . . :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Primary Dns Suffix  . . . . . . . :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Node Type . . . . . . . . . . . . : Hybrid
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         IP Routing Enabled. . . . . . . . : No
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         WINS Proxy Enabled. . . . . . . . : No
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ethernet adapter Wireless Network Connection:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Media State . . . . . . . . . . . : Media disconnected
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Physical Address. . . . . . . . . :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rds,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18192.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18192.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
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
