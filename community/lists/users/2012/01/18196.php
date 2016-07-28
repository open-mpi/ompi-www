<?
$subject_val = "Re: [OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 16:13:01 2012" -->
<!-- isoreceived="20120117211301" -->
<!-- sent="Tue, 17 Jan 2012 21:11:01 -0000" -->
<!-- isosent="20120117211101" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] localhost only" -->
<!-- id="004601ccd55c$851d4fe0$8f57efa0$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F3DEEE0-95A6-40E6-BD38-F12EBA84FB0A_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2012-01-17 16:11:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Previous message:</strong> <a href="18195.php">Josh Hursey: "Re: [OMPI users] checkpointing on other transports"</a>
<li><strong>In reply to:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not even the subway, but the bus:-)
<br>
Currently just building the application on my laptop for prototyping. Will
<br>
eventually move to a win-only commodity boxes in 1 lan, or RHEL boxes in the
<br>
long term,
<br>
Unfortunately not possible to mix both.
<br>
<p>The ideal solution would be some hybrid of openmp + openmpi but single box
<br>
shared-memory openmpi multiprocess is not necessarily worse than a single
<br>
process multithread openmp.
<br>
<p>'-mca btl sm,self' indeed didn't work,
<br>
<p>Ralph, please let me know if testing required.
<br>
<p>MM
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Gustavo Correa
<br>
Sent: 17 January 2012 16:38
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] localhost only
<br>
<p>But that would be yet another legitimate singleton-edge-case that OpenMPI
<br>
could
<br>
proudly handle, wouldn't it?
<br>
No network connection, yet OpenMPI is still operational in a standalone
<br>
insular machine.
<br>
IMHO, MM made a good case for his 'commuter MPI'.  :)
<br>
Times change, I would never have thought that people are doing 
<br>
parallel programming and HPC in the subway.
<br>
Gus Correa
<br>
<p>On Jan 17, 2012, at 11:25 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I think it won't help - it looks like mpirun itself aborts if it only
</span><br>
finds a loopback available.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 17, 2012 at 9:24 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt; MM
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
these ports as listening:
<br>
<span class="quotelev2">&gt; &gt; Shouldn't the MS TCP Loopback interface allow the tcp ports to be
</span><br>
created?
<br>
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
===========================================================================
<br>
<span class="quotelev2">&gt; &gt; Interface List
</span><br>
<span class="quotelev2">&gt; &gt; 0x1 ........................... MS TCP Loopback interface
</span><br>
<span class="quotelev2">&gt; &gt; 0x2 ...00 24 d6 10 05 4e ...... Intel(R) WiFi Link 5100 AGN - Packet
</span><br>
Scheduler Miniport
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
===========================================================================
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
===========================================================================
<br>
<span class="quotelev2">&gt; &gt; Active Routes:
</span><br>
<span class="quotelev2">&gt; &gt; Network Destination        Netmask          Gateway       Interface
</span><br>
Metric
<br>
<span class="quotelev2">&gt; &gt;         127.0.0.0        255.0.0.0        127.0.0.1       127.0.0.1
</span><br>
1
<br>
<span class="quotelev2">&gt; &gt;   255.255.255.255  255.255.255.255  255.255.255.255               2
</span><br>
1
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
===========================================================================
<br>
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
Behalf Of Gustavo Correa
<br>
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
configured.
<br>
<span class="quotelev3">&gt; &gt; &gt; In this case, when I mpirun 2 binaries on my laptop, mpirun fails with
</span><br>
this error:
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
i
<br>
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
box, and therefore don't need any other interface but localhost?
<br>
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
<span class="quotelev3">&gt; &gt; &gt;         Description . . . . . . . . . . . : Intel(R) WiFi Link 5100
</span><br>
AGN
<br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Previous message:</strong> <a href="18195.php">Josh Hursey: "Re: [OMPI users] checkpointing on other transports"</a>
<li><strong>In reply to:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
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
