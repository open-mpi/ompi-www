<?
$subject_val = "Re: [OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 10:05:13 2012" -->
<!-- isoreceived="20120117150513" -->
<!-- sent="Tue, 17 Jan 2012 15:02:57 -0000" -->
<!-- isosent="20120117150257" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] localhost only" -->
<!-- id="003701ccd529$21394ac0$63abe040$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C22727E4-3316-4C70-9EB4-76A27B392F99_at_gmail.com" -->
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
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 10:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Previous message:</strong> <a href="18186.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18186.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18191.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18191.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Even with a -host localhost ? Is there a way to change that?
<br>
<p>I have  a long commute from work and I run 4 mpi processes on my quadcore
<br>
laptop, and while commuting, there's no connection:-)
<br>
<p>MM
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: 17 January 2012 14:11
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] localhost only
<br>
<p>&nbsp;
<br>
<p>I believe it is looking for a non-loopback interface.
<br>
<p>Sent from my iPad
<br>
<p><p>On Jan 17, 2012, at 5:01 AM, &quot;MM&quot; &lt;finjulhich_at_[hidden]&gt; wrote:
<br>
<p>Gus, unfortunately, it doesn't seem to change the error.
<br>
<p>Ralph,  with the wireless adapter disabled, netstat on winxp still shows
<br>
these ports as listening:
<br>
<p>Shouldn't the MS TCP Loopback interface allow the tcp ports to be created?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;netstat -an
</span><br>
<p>&nbsp;
<br>
<p>Active Connections
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;Proto  Local Address          Foreign Address        State
<br>
<p>&nbsp;&nbsp;TCP    0.0.0.0:135            0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    0.0.0.0:445            0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    0.0.0.0:2967           0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    0.0.0.0:3389           0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    0.0.0.0:4445           0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    0.0.0.0:57632          0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    127.0.0.1:1025         0.0.0.0:0              LISTENING
<br>
<p>&nbsp;&nbsp;TCP    127.0.0.1:62514        0.0.0.0:0              LISTENING
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;route print
</span><br>
<p>===========================================================================
<br>
<p>Interface List
<br>
<p>0x1 ........................... MS TCP Loopback interface
<br>
<p>0x2 ...00 24 d6 10 05 4e ...... Intel(R) WiFi Link 5100 AGN - Packet
<br>
Scheduler Miniport
<br>
<p>===========================================================================
<br>
<p>===========================================================================
<br>
<p>Active Routes:
<br>
<p>Network Destination        Netmask          Gateway       Interface  Metric
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;127.0.0.0        255.0.0.0        127.0.0.1       127.0.0.1       1
<br>
<p>&nbsp;&nbsp;255.255.255.255  255.255.255.255  255.255.255.255               2       1
<br>
<p>===========================================================================
<br>
<p>Persistent Routes:
<br>
<p>&nbsp;&nbsp;None
<br>
<p>&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Gustavo Correa
<br>
Sent: 16 January 2012 23:54
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] localhost only
<br>
<p>&nbsp;
<br>
<p>Have you tried to specify the hosts with something like this?
<br>
<p>&nbsp;
<br>
<p>mpirun -np 2 -host localhost ./my_program
<br>
<p>&nbsp;
<br>
<p>See 'man mpirun' for more details.
<br>
<p>&nbsp;
<br>
<p>I hope it helps,
<br>
<p>Gus Correa
<br>
<p>&nbsp;
<br>
<p>On Jan 16, 2012, at 6:34 PM, MM wrote:
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; when my wireless adapter is down on my laptop, only localhost is
</span><br>
configured.
<br>
<p><span class="quotelev1">&gt; In this case, when I mpirun 2 binaries on my laptop, mpirun fails with
</span><br>
this error:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process i
</span><br>
<p><span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<p><span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<p><span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<p><span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<p><span class="quotelev1">&gt; Open MPI developer):
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt;   orte_rml_base_select failed
</span><br>
<p><span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; when I turn on the wireless adapter back on, the mpirun works fine
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; Is there a way to make mpirun realize all my binaries run on the same box,
</span><br>
and therefore don't need any other interface but localhost?
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; PS: this is ipconfig when the wireless adapter is off
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev2">&gt; &gt;ipconfig /all
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; Windows IP Configuration
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt;         Host Name . . . . . . . . . . . . :
</span><br>
<p><span class="quotelev1">&gt;         Primary Dns Suffix  . . . . . . . :
</span><br>
<p><span class="quotelev1">&gt;         Node Type . . . . . . . . . . . . : Hybrid
</span><br>
<p><span class="quotelev1">&gt;         IP Routing Enabled. . . . . . . . : No
</span><br>
<p><span class="quotelev1">&gt;         WINS Proxy Enabled. . . . . . . . : No
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; Ethernet adapter Wireless Network Connection:
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt;         Media State . . . . . . . . . . . : Media disconnected
</span><br>
<p><span class="quotelev1">&gt;         Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
</span><br>
<p><span class="quotelev1">&gt;         Physical Address. . . . . . . . . :
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; rds,
</span><br>
<p><span class="quotelev1">&gt;  
</span><br>
<p><span class="quotelev1">&gt; MM
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18188.php">Shiqing Fan: "Re: [OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Previous message:</strong> <a href="18186.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18186.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18191.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18191.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
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
