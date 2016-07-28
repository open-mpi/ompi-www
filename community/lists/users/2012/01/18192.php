<?
$subject_val = "Re: [OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 11:24:11 2012" -->
<!-- isoreceived="20120117162411" -->
<!-- sent="Tue, 17 Jan 2012 11:24:07 -0500" -->
<!-- isosent="20120117162407" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] localhost only" -->
<!-- id="EAF8A91B-40A1-4625-815D-78668BA0CA22_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000401ccd50f$d2035040$7609f0c0$_at_com" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 11:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18193.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18191.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18182.php">MM: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18193.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18193.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MM
<br>
Have you tried adding '-mca btl sm,self' to your mpirun command line,
<br>
as suggested by Terry? [despite the low chances that it would work ...]
<br>
If somehow the loopback interface is up, wouldn't it work?
<br>
Gus Correa
<br>
<p>On Jan 17, 2012, at 7:01 AM, MM wrote:
<br>
<p><span class="quotelev1">&gt; Gus, unfortunately, it doesn't seem to change the error.
</span><br>
<span class="quotelev1">&gt; Ralph,  with the wireless adapter disabled, netstat on winxp still shows these ports as listening:
</span><br>
<span class="quotelev1">&gt; Shouldn't the MS TCP Loopback interface allow the tcp ports to be created?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;netstat -an
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Active Connections
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Proto  Local Address          Foreign Address        State
</span><br>
<span class="quotelev1">&gt;   TCP    0.0.0.0:135            0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    0.0.0.0:445            0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    0.0.0.0:2967           0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    0.0.0.0:3389           0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    0.0.0.0:4445           0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    0.0.0.0:57632          0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    127.0.0.1:1025         0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;   TCP    127.0.0.1:62514        0.0.0.0:0              LISTENING
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;route print
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; Interface List
</span><br>
<span class="quotelev1">&gt; 0x1 ........................... MS TCP Loopback interface
</span><br>
<span class="quotelev1">&gt; 0x2 ...00 24 d6 10 05 4e ...... Intel(R) WiFi Link 5100 AGN - Packet Scheduler Miniport
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; Active Routes:
</span><br>
<span class="quotelev1">&gt; Network Destination        Netmask          Gateway       Interface  Metric
</span><br>
<span class="quotelev1">&gt;         127.0.0.0        255.0.0.0        127.0.0.1       127.0.0.1       1
</span><br>
<span class="quotelev1">&gt;   255.255.255.255  255.255.255.255  255.255.255.255               2       1
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; Persistent Routes:
</span><br>
<span class="quotelev1">&gt;   None
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Sent: 16 January 2012 23:54
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] localhost only
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Have you tried to specify the hosts with something like this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host localhost ./my_program
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; See 'man mpirun' for more details.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2012, at 6:34 PM, MM wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; when my wireless adapter is down on my laptop, only localhost is configured.
</span><br>
<span class="quotelev2">&gt; &gt; In this case, when I mpirun 2 binaries on my laptop, mpirun fails with this error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process i
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   orte_rml_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; when I turn on the wireless adapter back on, the mpirun works fine
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to make mpirun realize all my binaries run on the same box, and therefore don't need any other interface but localhost?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PS: this is ipconfig when the wireless adapter is off
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;ipconfig /all
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Windows IP Configuration
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         Host Name . . . . . . . . . . . . :
</span><br>
<span class="quotelev2">&gt; &gt;         Primary Dns Suffix  . . . . . . . :
</span><br>
<span class="quotelev2">&gt; &gt;         Node Type . . . . . . . . . . . . : Hybrid
</span><br>
<span class="quotelev2">&gt; &gt;         IP Routing Enabled. . . . . . . . : No
</span><br>
<span class="quotelev2">&gt; &gt;         WINS Proxy Enabled. . . . . . . . : No
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ethernet adapter Wireless Network Connection:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         Media State . . . . . . . . . . . : Media disconnected
</span><br>
<span class="quotelev2">&gt; &gt;         Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
</span><br>
<span class="quotelev2">&gt; &gt;         Physical Address. . . . . . . . . :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rds,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MM
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
<li><strong>Next message:</strong> <a href="18193.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18191.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18182.php">MM: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18193.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18193.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
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
