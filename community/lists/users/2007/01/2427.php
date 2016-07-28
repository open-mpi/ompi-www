<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 17:23:08 2007" -->
<!-- isoreceived="20070102222308" -->
<!-- sent="Tue, 2 Jan 2007 16:22:42 -0600" -->
<!-- isosent="20070102222242" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901A2FA20_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05db01c72eba$7f9b56f0$58c31fac_at_bart" -->
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
<strong>From:</strong> Grobe, Gary L. \(JSC-EV\)[ESCG] (<em>gary.l.grobe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 17:22:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2428.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2428.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, sorry about that ... 
<br>
<p>$ ./mx_info
<br>
MX Version: 1.1.6
<br>
MX Build: ggrobe_at_juggernaut:/home/ggrobe/Tools/mx-1.1.6 Thu Nov 30
<br>
14:17:44 GMT 2006
<br>
1 Myrinet board installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  224.9 MHz LANai, 99.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:c2:a7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXD-2 V2.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03034
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  291824
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         46:4d:53:4d:41:50, version = 0x0000000c,
<br>
configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   16
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE
<br>
COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:c2:a7 juggernaut:0                              1,1
<br>
&nbsp;&nbsp;&nbsp;1) 00:60:dd:47:ab:c9 node-1:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ab:c8 node-2:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:ab:ca node-3:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:bf:65 node-7:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:c2:e1 node-8:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;6) 00:60:dd:47:c0:c1 node-9:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;7) 00:60:dd:47:c0:e5 node-13:0                                 6,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:c2:91 node-14:0                                 6,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:c0:b2 node-15:0                                 6,3
<br>
&nbsp;&nbsp;10) 00:60:dd:47:bf:f5 node-19:0                                 1,1
<br>
&nbsp;&nbsp;11) 00:60:dd:47:c0:b1 node-20:0                                 6,3
<br>
&nbsp;&nbsp;12) 00:60:dd:47:c0:f8 node-21:0                                 7,3
<br>
&nbsp;&nbsp;13) 00:60:dd:47:c0:8a node-25:0                                 6,3
<br>
&nbsp;&nbsp;14) 00:60:dd:47:c0:c2 node-27:0                                 5,3
<br>
&nbsp;&nbsp;15) 00:60:dd:47:c2:e0 node-26:0                                 5,3
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Reese Faucette
<br>
Sent: Tuesday, January 02, 2007 4:08 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Ompi failing on mx only
<br>
<p>Ompi failing on mx only&gt; I've attached the ompi_info from node-1 and
<br>
node-2.
<br>
<p>thanks, but i need &quot;mx_info&quot;, not &quot;ompi_info&quot; ;-)
<br>
<p><span class="quotelev1">&gt; But now that you mention mapper, I take it that's what SEGV_MAPERR 
</span><br>
<span class="quotelev1">&gt; might be referring to.
</span><br>
<p>this is an ompi red herring; it has nothing to do with Myrinet mapping,
<br>
even though it kinda looks like it.
<br>
<p><span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.2b2 -x 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=${LD_LIBRARY_PATH} --hostfile ./h1-3 -np 5 --mca mtl 
</span><br>
<span class="quotelev1">&gt; mx,self ./cpi
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<p>A gdb traceback would be interesting on this one.
<br>
thanks,
<br>
-reese 
<br>
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
<li><strong>Next message:</strong> <a href="2428.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2426.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2424.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2428.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
