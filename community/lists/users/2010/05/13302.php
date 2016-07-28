<?
$subject_val = "Re: [OMPI users] GM + OpenMPI bug ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 05:41:16 2010" -->
<!-- isoreceived="20100611094116" -->
<!-- sent="Mon, 31 May 2010 13:27:31 +0200" -->
<!-- isosent="20100531112731" -->
<!-- name="Jos&#233; Ignacio Aliaga Estell&#233;s" -->
<!-- email="aliaga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GM + OpenMPI bug ..." -->
<!-- id="EF9A5358-12B9-4D7D-BAA7-3D9440C5AD6D_at_icc.uji.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] GM + OpenMPI bug ..." -->
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
<strong>From:</strong> Jos&#233; Ignacio Aliaga Estell&#233;s (<em>aliaga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-31 07:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2010/06/13303.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Previous message:</strong> <a href="../../2010/06/13301.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="13037.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "[OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2010/06/13303.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Reply:</strong> <a href="../../2010/06/13303.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have made different tests to locate the problem. Some nodes don't  
<br>
work correctly when we use gm_allsize -v and we have isolated them.
<br>
On the good nodes, we have executed our broadcast test with MPICH-1  
<br>
and it works correctly. But If we use OpenMPI 1.4.2 it still fails.
<br>
<p>We would like to active the parity error check, to test if this  
<br>
option solves all our problems. But we don&#180;t know how to do it.  
<br>
Below, we attach you the output of the lspci command. We suppose that  
<br>
this check errors is not enabled.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;Jos&#233; i. Aliaga
<br>
<p>==================
<br>
$ /sbin/lspci -vvxxx
<br>
...
<br>
02:03.0 Network controller: MYRICOM Inc. Myrinet 2000 Scalable  
<br>
Cluster Interconnect (rev 03)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subsystem: MYRICOM Inc. Myrinet 2000 Scalable Cluster  
<br>
Interconnect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control: I/O- Mem+ BusMaster+ SpecCycle- MemWINV+ VGASnoop-  
<br>
ParErr+ Stepping+ SERR+ FastB2B-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: Cap- 66MHz+ UDF- FastB2B- ParErr- DEVSEL=slow  
<br>
<span class="quotelev1"> &gt;TAbort- &lt;TAbort- &lt;MAbort- &gt;SERR- &lt;PERR-
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latency: 64, Cache Line Size: 64 bytes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt: pin A routed to IRQ 217
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Region 0: Memory at fb000000 (32-bit, prefetchable) [size=16M]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expansion ROM at fce80000 [disabled] [size=512K]
<br>
00: c1 14 43 80 d6 01 20 04 03 00 80 02 10 40 00 00
<br>
10: 08 00 00 fb 00 00 00 00 00 00 00 00 00 00 00 00
<br>
20: 00 00 00 00 00 00 00 00 00 00 00 00 c1 14 43 80
<br>
30: 00 00 e8 fc 00 00 00 00 00 00 00 00 0a 01 00 00
<br>
...
<br>
<p>El 21/05/2010, a las 19:57, Patrick Geoffray escribi&#243;:
<br>
<p><span class="quotelev1">&gt; Hi Jose,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/21/2010 6:54 AM, Jos&#233; Ignacio Aliaga Estell&#233;s wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We have used the lspci -vvxxx and we have obtained:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bi00: 04:01.0 Ethernet controller: Intel Corporation 82544EI Gigabit
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet Controller (Copper) (rev 02)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the output for the Intel GigE NIC, you should look at the  
</span><br>
<span class="quotelev1">&gt; one for the Myricom NIC and the PCI bridge above it (lspci -t to  
</span><br>
<span class="quotelev1">&gt; see the tree).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bi00: Status: Cap+ 66MHz+ UDF- FastB2B- ParErr- DEVSEL=medium  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;TAbort-
</span><br>
<span class="quotelev2">&gt;&gt; &lt;TAbort- &lt;MAbort- &gt;SERR- &lt;PERR-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PERR- status means no parity detected when receiving data. Looking  
</span><br>
<span class="quotelev1">&gt; at the PERR status of the PCI bridge on the other side will show if  
</span><br>
<span class="quotelev1">&gt; there was in corruption on that bus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a first step, you can see if you can reproduce errors with a  
</span><br>
<span class="quotelev1">&gt; simple test involving a single node at a time. You can run  
</span><br>
<span class="quotelev1">&gt; &quot;gm_allsize --verify&quot; on each machine: it will send packets to  
</span><br>
<span class="quotelev1">&gt; itself (loopback in the switch) and check for corruption. If you  
</span><br>
<span class="quotelev1">&gt; don't see errors after a while, that node is probably clean. If you  
</span><br>
<span class="quotelev1">&gt; see errors, you can look deeper at lspci output to see if it's a  
</span><br>
<span class="quotelev1">&gt; PCI problem. If you are using a riser card, you can try without.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if openMPI has an option to enable debug checksum,  
</span><br>
<span class="quotelev1">&gt; but it would also be useful to see if it detects anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, if you know any software tool or methodology to  
</span><br>
<span class="quotelev2">&gt;&gt; check the
</span><br>
<span class="quotelev2">&gt;&gt; hardware/software, please, could you send us how to do it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to look at the FAQ on GM troubleshooting:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.myri.com/cgi-bin/fom.pl?file=425">http://www.myri.com/cgi-bin/fom.pl?file=425</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, you can send email to help_at_[hidden] to open a ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2010/06/13303.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Previous message:</strong> <a href="../../2010/06/13301.php">asmae.elbahlouli_at_[hidden]: "[OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="13037.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "[OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2010/06/13303.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Reply:</strong> <a href="../../2010/06/13303.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
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
