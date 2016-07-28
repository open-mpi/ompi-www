<?
$subject_val = "Re: [OMPI users] GM + OpenMPI bug ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 06:52:05 2010" -->
<!-- isoreceived="20100521105205" -->
<!-- sent="Fri, 21 May 2010 12:54:24 +0200" -->
<!-- isosent="20100521105424" -->
<!-- name="Jos&#233; Ignacio Aliaga Estell&#233;s" -->
<!-- email="aliaga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GM + OpenMPI bug ..." -->
<!-- id="DBC2BB8A-AF70-4A21-8DBB-A5D01918934C_at_icc.uji.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BF54747.8040900_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GM + OpenMPI bug ...<br>
<strong>From:</strong> Jos&#233; Ignacio Aliaga Estell&#233;s (<em>aliaga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 06:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13119.php">Eloi Gaudry: "[OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>In reply to:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13126.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Reply:</strong> <a href="13126.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have used the lspci -vvxxx and we have obtained:
<br>
<p>bi00: 04:01.0 Ethernet controller: Intel Corporation 82544EI Gigabit  
<br>
Ethernet Controller (Copper) (rev 02)
<br>
bi00:   Subsystem: Intel Corporation PRO/1000 XT Server Adapter
<br>
bi00:   Control: I/O+ Mem+ BusMaster+ SpecCycle- MemWINV+ VGASnoop-  
<br>
ParErr- Stepping- SERR+ FastB2B-
<br>
bi00:   Status: Cap+ 66MHz+ UDF- FastB2B- ParErr- DEVSEL=medium  
<br>
<span class="quotelev1"> &gt;TAbort- &lt;TAbort- &lt;MAbort- &gt;SERR- &lt;PERR-
</span><br>
bi00:   Latency: 64 (63750ns min), Cache Line Size: 64 bytes
<br>
bi00:   Interrupt: pin A routed to IRQ 185
<br>
bi00:   Region 0: Memory at fe9e0000 (64-bit, non-prefetchable)  
<br>
[size=128K]
<br>
bi00:   Region 2: Memory at fe9d0000 (64-bit, non-prefetchable)  
<br>
[size=64K]
<br>
bi00:   Region 4: I/O ports at dc80 [size=32]
<br>
bi00:   Expansion ROM at fe9c0000 [disabled] [size=64K]
<br>
bi00:   Capabilities: [dc] Power Management version 2
<br>
bi00:     Flags: PMEClk- DSI+ D1- D2- AuxCurrent=0mA PME(D0 
<br>
+,D1-,D2-,D3hot+,D3cold-)
<br>
bi00:     Status: D0 PME-Enable- DSel=0 DScale=1 PME-
<br>
bi00:   Capabilities: [e4] PCI-X non-bridge device
<br>
bi00:     Command: DPERE- ERO+ RBC=512 OST=1
<br>
bi00:     Status: Dev=04:01.0 64bit+ 133MHz+ SCD- USC- DC=simple  
<br>
DMMRBC=2048 DMOST=1 DMCRS=16 RSCEM- 266MHz- 533MHz-
<br>
bi00:   Capabilities: [f0] Message Signalled Interrupts: 64bit+  
<br>
Queue=0/0 Enable-
<br>
bi00:     Address: 0000000000000000  Data: 0000
<br>
bi00: 00: 86 80 08 10 17 01 30 02 02 00 00 02 10 40 00 00
<br>
bi00: 10: 04 00 9e fe 00 00 00 00 04 00 9d fe 00 00 00 00
<br>
bi00: 20: 81 dc 00 00 00 00 00 00 00 00 00 00 86 80 07 11
<br>
bi00: 30: 00 00 9c fe dc 00 00 00 00 00 00 00 05 01 ff 00
<br>
bi00: 40: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: 50: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: 60: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: 70: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: 80: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: 90: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: a0: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: b0: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: c0: 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
bi00: d0: 00 00 00 00 00 00 00 00 00 00 00 00 01 e4 22 48
<br>
bi00: e0: 00 20 00 40 07 f0 02 00 08 04 43 04 00 00 00 00
<br>
bi00: f0: 05 00 80 00 00 00 00 00 00 00 00 00 00 00 00 00
<br>
<p>We don't know how to interpret this information. We suppose that SEER  
<br>
and PERR are not activated, if we have understood correctly the  
<br>
Status &quot; ... &gt;SERR- &lt;PERR-&quot;.
<br>
Could you confirm that? If this is the case, could you indicate how  
<br>
to activate them?
<br>
<p>Additionally, if you know any software tool or methodology to check  
<br>
the hardware/software, please, could you send us how to do it?
<br>
<p>Thanks in advance.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;Jos&#233; I. Aliaga
<br>
<p>El 20/05/2010, a las 16:29, Patrick Geoffray escribi&#243;:
<br>
<p><span class="quotelev1">&gt; Hi Jose,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/12/2010 10:57 PM, Jos? Ignacio Aliaga Estell?s wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think that I have found a bug on the implementation of GM  
</span><br>
<span class="quotelev2">&gt;&gt; collectives
</span><br>
<span class="quotelev2">&gt;&gt; routines included in OpenMPI. The version of the GM software is  
</span><br>
<span class="quotelev2">&gt;&gt; 2.0.30
</span><br>
<span class="quotelev2">&gt;&gt; for the PCI64 cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I obtain the same problems when I use the 1.4.1 or the 1.4.2 version.
</span><br>
<span class="quotelev2">&gt;&gt; Could you help me? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been running the test you provided on 8 nodes for 4 hours  
</span><br>
<span class="quotelev1">&gt; and haven't seen any errors. The setup used GM 2.0.30 and openmpi  
</span><br>
<span class="quotelev1">&gt; 1.4.2 on PCI-X cards (M3F-PCIXD-2 aka 'D' cards). We do not have  
</span><br>
<span class="quotelev1">&gt; PCI64 NICs anymore, and no machines with a PCI 64/66 slot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One-bit errors are rarely a software problem, they are usually  
</span><br>
<span class="quotelev1">&gt; linked to hardware corruption. Old PCI has a simple parity check  
</span><br>
<span class="quotelev1">&gt; but most machines/BIOS of this era ignored reported errors. You may  
</span><br>
<span class="quotelev1">&gt; want to check the lspci output on your machines and see if SERR or  
</span><br>
<span class="quotelev1">&gt; PERR is set. You can also try to reset each NIC in its PCI slot, or  
</span><br>
<span class="quotelev1">&gt; use a different slot if available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope it helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Patrick Geoffray
</span><br>
<span class="quotelev1">&gt; Myricom, Inc.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.myri.com">http://www.myri.com</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13119.php">Eloi Gaudry: "[OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13117.php">Pankatz, Klaus: "[OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>In reply to:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13126.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Reply:</strong> <a href="13126.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
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
