<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 12:51:30 2007" -->
<!-- isoreceived="20070119175130" -->
<!-- sent="Fri, 19 Jan 2007 17:51:49 +0000" -->
<!-- isosent="20070119175149" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
<!-- id="45B10535.6020003_at_ocf.co.uk" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DEC7405C-0556-4F89-83DA-12F1AD862C9F_at_cisco.com" -->
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
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 12:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
see below for answers,
<br>
<p>regards,
<br>
Arif Ali
<br>
Software Engineer
<br>
OCF plc
<br>
<p>Mobile: +44 (0)7970 148 122
<br>
Office: +44 (0)114 257 2200
<br>
Fax:    +44 (0)114 257 0022
<br>
Email:  aali_at_[hidden]
<br>
Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
<br>
<p>Skype:  arif_ali80
<br>
MSN:    aali_at_[hidden]
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Beware: this is a lengthy, detailed message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2007, at 3:53 PM, Arif Ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 1. We have
</span><br>
<span class="quotelev2">&gt;&gt; HW
</span><br>
<span class="quotelev2">&gt;&gt; * 2xBladecenter H
</span><br>
<span class="quotelev2">&gt;&gt; * 2xCisco Infiniband Switch Modules
</span><br>
<span class="quotelev2">&gt;&gt; * 1xCisco Infiniband Switch
</span><br>
<span class="quotelev2">&gt;&gt; * 16x PPC64 JS21 blades each are 4 cores, with Cisco HCA
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide the details of your Cisco HCA?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
*PRODUCT TYPE*:
<br>
Cisco 4x InfiniBand Host Channel Adapter Expansion Card
<br>
*DEVICE TYPE*:
<br>
Network adapter
<br>
*PORTS*:
<br>
2 InfiniBand ports
<br>
*DATA TRANSFER RATE*:
<br>
10 Gbps
<br>
*COMPAT*:
<br>
IBM BladeCenter
<br>
&#149; The Cisco 4x InfiniBand Host Channel Adapter Expansion Card for IBM
<br>
BladeCenter provides InfiniBand I/O capability to processor blades in
<br>
IBM BladeCenter unit
<br>
&#149; The host channel adapter adds 2 InfiniBand ports to the CPU blade cards
<br>
to create an IB-capable high density cluster
<br>
&#149; PCI-Express Interface to dual 4x InfiniBand bridge
<br>
&#149; Line rate of the interfaces are 10 Gbps per link, theoretical maximum
<br>
&#149; 128 MB table memory (133 MHz DDR SDRAM)
<br>
&#149; I2C serial EEPROM holding system Vital Product Data (VPD)
<br>
&#149; IBM proprietary blade daughter card form factor
<br>
&#149; Forced air cooling compatible for highly reliable operation
<br>
<p>The lspci -vvv for the card gives me the following information
<br>
<p>0c:00.0 InfiniBand: Mellanox Technologies MT25208 InfiniHost III Ex 
<br>
(Tavor compatibility mode) (rev a0)
<br>
Subsystem: Mellanox Technologies MT25208 InfiniHost III Ex (Tavor 
<br>
compatibility mode)
<br>
Control: I/O- Mem+ BusMaster+ SpecCycle- MemWINV- VGASnoop- ParErr- 
<br>
Stepping- SERR- FastB2B-
<br>
Status: Cap+ 66MHz- UDF- FastB2B- ParErr- DEVSEL=fast &gt;TAbort- &lt;TAbort- 
<br>
&lt;MAbort- &gt;SERR- &lt;PERR-
<br>
Latency: 0, Cache Line Size 20
<br>
Interrupt: pin A routed to IRQ 36
<br>
Region 0: Memory at 100b8900000 (64-bit, non-prefetchable) [size=1M]
<br>
Region 2: Memory at 100b8000000 (64-bit, prefetchable) [size=8M]
<br>
Region 4: Memory at 100b0000000 (64-bit, prefetchable) [size=128M]
<br>
Expansion ROM at 100b8800000 [disabled] [size=1M]
<br>
Capabilities: [40] Power Management version 2
<br>
Flags: PMEClk- DSI- D1- D2- AuxCurrent=0mA PME(D0-,D1-,D2-,D3hot-,D3cold-)
<br>
Status: D0 PME-Enable- DSel=0 DScale=0 PME-
<br>
Capabilities: [48] Vital Product Data
<br>
Capabilities: [90] Message Signalled Interrupts: 64bit+ Queue=0/5 Enable-
<br>
Address: 0000000000000000 Data: 0000
<br>
Capabilities: [84] MSI-X: Enable- Mask- TabSize=32
<br>
Vector table: BAR=0 offset=00082000
<br>
PBA: BAR=0 offset=00082200
<br>
Capabilities: [60] Express Endpoint IRQ 0
<br>
Device: Supported: MaxPayload 128 bytes, PhantFunc 0, ExtTag-
<br>
Device: Latency L0s &lt;64ns, L1 unlimited
<br>
Device: AtnBtn- AtnInd- PwrInd-
<br>
Device: Errors: Correctable- Non-Fatal- Fatal- Unsupported-
<br>
Device: RlxdOrd- ExtTag- PhantFunc- AuxPwr- NoSnoop-
<br>
Device: MaxPayload 128 bytes, MaxReadReq 512 bytes
<br>
Link: Supported Speed 2.5Gb/s, Width x8, ASPM L0s, Port 8
<br>
Link: Latency L0s unlimited, L1 unlimited
<br>
Link: ASPM Disabled RCB 64 bytes CommClk- ExtSynch-
<br>
Link: Speed 2.5Gb/s, Width x8
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; SW
</span><br>
<span class="quotelev2">&gt;&gt; * SLES 10
</span><br>
<span class="quotelev2">&gt;&gt; * OFED 1.1 w. OpenMPI 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running the Intel MPI Benchmark (IMB) on the cluster as a part  
</span><br>
<span class="quotelev2">&gt;&gt; of validation process for the customer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried the OpenMPI that comes with OFED 1.1, which gave  
</span><br>
<span class="quotelev2">&gt;&gt; spurious &quot;Not Enough Memory&quot; error messages, after looking through  
</span><br>
<span class="quotelev2">&gt;&gt; FAQs (with the help of Cisco) I was able to find the problems and  
</span><br>
<span class="quotelev2">&gt;&gt; fixes. I used the FAQs to add unlimited soft and hard limits for  
</span><br>
<span class="quotelev2">&gt;&gt; memlock, turned RDMA off by using &quot;--mca btl_openib_flags 1&quot;. This  
</span><br>
<span class="quotelev2">&gt;&gt; still did not work, and still got the Memory problems.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a clarification: I suggested setting the btl_openib_flags to 1 as  
</span><br>
<span class="quotelev1">&gt; one means of [potentially] reducing the amount of registered memory  
</span><br>
<span class="quotelev1">&gt; to verify that the amount of registered memory available in the  
</span><br>
<span class="quotelev1">&gt; system is the problem (especially because it was dying with large  
</span><br>
<span class="quotelev1">&gt; messages in the all-to-all pattern).  With that setting, we got  
</span><br>
<span class="quotelev1">&gt; through the alltoall test (which we previously couldn't).  So it  
</span><br>
<span class="quotelev1">&gt; seemed to indicate that on that platform, there isn't much registered  
</span><br>
<span class="quotelev1">&gt; memory available (even though there's 8GB available on each blade).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you saying that a full run of the IMB still failed with the same  
</span><br>
<span class="quotelev1">&gt; &quot;cannot register any more memory&quot; kind of error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked with Brad Benton -- an OMPI developer from IBM -- he  
</span><br>
<span class="quotelev1">&gt; confirms that on the JS21s, depending on the version of your  
</span><br>
<span class="quotelev1">&gt; firmware, you will be limited to 256M or 512M of registerable memory  
</span><br>
<span class="quotelev1">&gt; (256M = older firmware, 512M = newer firmware).  This could very  
</span><br>
<span class="quotelev1">&gt; definitely be a factor in what is happening here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you let us know what version of the firmware you have?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The firmware for the blade is the latest, as the IB cards would not be 
<br>
recognised
<br>
On 06/09/02006 on the following was released, this is the only latest 
<br>
one on the IBM webpage
<br>
*Version 2.00, 01MB245_300_002*
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I tried the nightly snapshot of OpenMPI-1.2b4r13137, which failed  
</span><br>
<span class="quotelev2">&gt;&gt; miserably.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you describe what happened there?  Is it failing in a different way?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Here's the output
<br>
<p>#---------------------------------------------------
<br>
# Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date : Fri Jan 19 17:33:52 2007
<br>
# Machine : ppc64# System : Linux
<br>
# Release : 2.6.16.21-0.8-ppc64
<br>
# Version : #1 SMP Mon Jul 3 18:25:39 UTC 2006
<br>
<p>#
<br>
# Minimum message length in bytes: 0
<br>
# Maximum message length in bytes: 4194304
<br>
#
<br>
# MPI_Datatype : MPI_BYTE
<br>
# MPI_Datatype for reductions : MPI_FLOAT
<br>
# MPI_Op : MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># PingPong
<br>
# PingPing
<br>
# Sendrecv
<br>
# Exchange
<br>
# Allreduce
<br>
# Reduce
<br>
# Reduce_scatter
<br>
# Allgather
<br>
# Allgatherv
<br>
# Alltoall
<br>
# Bcast
<br>
# Barrier
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking PingPong
<br>
# #processes = 2
<br>
# ( 58 additional processes waiting in MPI_Barrier)
<br>
#---------------------------------------------------
<br>
#bytes #repetitions t[usec] Mbytes/sec
<br>
0 1000 1.76 0.00
<br>
1 1000 1.88 0.51
<br>
2 1000 1.89 1.01
<br>
4 1000 1.91 2.00
<br>
8 1000 1.88 4.05
<br>
16 1000 2.02 7.55
<br>
32 1000 2.05 14.88
<br>
[0,1,4][btl_openib_component.c:1153:btl_openib_component_progress] from 
<br>
node03 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
<br>
status number 10 for wr_id 268969528 opcode 128
<br>
[0,1,28][btl_openib_component.c:1153:btl_openib_component_progress] from 
<br>
node09 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
<br>
status number 10 for wr_id 268906808 opcode 128
<br>
[0,1,58][btl_openib_component.c:1153:btl_openib_component_progress] from 
<br>
node16 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
<br>
status number 10 for wr_id 268919352 opcode 256614836
<br>
[0,1,0][btl_openib_component.c:1153:btl_openib_component_progress] from 
<br>
node02 to: node03 error polling HP CQ with status WORK REQUEST FLUSHED 
<br>
ERROR status number 5 for wr_id 276070200 opcode 0
<br>
[0,1,59][btl_openib_component.c:1153:btl_openib_component_progress] from 
<br>
node16 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
<br>
status number 10 for wr_id 268919352 opcode 256614836
<br>
mpirun noticed that job rank 0 with PID 0 on node node02 exited on 
<br>
signal 15 (Terminated).
<br>
55 additional processes aborted (not shown)
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I then tried the released version of the OpenMPI-1.2b3, which got  
</span><br>
<span class="quotelev2">&gt;&gt; me further than before. Now the benchmark goes through all the  
</span><br>
<span class="quotelev2">&gt;&gt; tests until Allgatherv finishes, and it seems that it is waiting to  
</span><br>
<span class="quotelev2">&gt;&gt; start AlltoAll, I have waited about 12 hours to see if this  
</span><br>
<span class="quotelev2">&gt;&gt; continues. I have since then managed to run AlltoAll, and the rest  
</span><br>
<span class="quotelev2">&gt;&gt; of the benchmark separately.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it does not continue within a few minutes, it's not going to go  
</span><br>
<span class="quotelev1">&gt; anywhere.  IMB does do &quot;warmup&quot; sends that may take a few minutes,  
</span><br>
<span class="quotelev1">&gt; but if you've gone 5-10 minutes with no activity, it's likely to be  
</span><br>
<span class="quotelev1">&gt; hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I can run IMB on 64 processes (16 hosts, 4ppn -- but not a  
</span><br>
<span class="quotelev1">&gt; blade center) with no problem.  I.e., it doesn't hang/crash.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; Hanging instead of crashing may still be a side-effect of running out  
</span><br>
<span class="quotelev1">&gt; of DMA-able memory -- I don't know enough about the IBM hardware to  
</span><br>
<span class="quotelev1">&gt; say.  I doubt that we have explored the error scenarios in OMPI too  
</span><br>
<span class="quotelev1">&gt; much; it's pretty safe to say that if limits are not used and the  
</span><br>
<span class="quotelev1">&gt; system runs out of DMA-able memory, Bad / Undefined things may happen  
</span><br>
<span class="quotelev1">&gt; (a &quot;good&quot; scenario would be that the process/MPI job aborts, a &quot;bad&quot;  
</span><br>
<span class="quotelev1">&gt; scenario would be some kind of deadlock situation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have tried a few tunable paramaters, that was suggested by Cisco,  
</span><br>
<span class="quotelev2">&gt;&gt; which improved the results, but still hung. The parameters that I  
</span><br>
<span class="quotelev2">&gt;&gt; have used to try and diagnose are below. I used the debug/verbose  
</span><br>
<span class="quotelev2">&gt;&gt; variables to see if I could see if I could get error messages on  
</span><br>
<span class="quotelev2">&gt;&gt; the running of the benchmark.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #orte_debug=1
</span><br>
<span class="quotelev2">&gt;&gt; #btl_openib_verbose=1
</span><br>
<span class="quotelev2">&gt;&gt; #mca_verbose=1
</span><br>
<span class="quotelev2">&gt;&gt; #btl_base_debug=1
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_flags=1
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned=1
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_use_mem_hooks=1
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that in that list, only the btl_openib_flags parameter will  
</span><br>
<span class="quotelev1">&gt; [potentially] decrease the amount of registered memory used.  Also,  
</span><br>
<span class="quotelev1">&gt; note that mpi_leave_pinned is only useful when utilizing RDMA  
</span><br>
<span class="quotelev1">&gt; operations; so it's effectively a no-op when btl_openib_flags is set  
</span><br>
<span class="quotelev1">&gt; to 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; For those jumping into the conversation late, the value of  
</span><br>
<span class="quotelev1">&gt; btl_openib_flags is a bit mask with the following bits: SEND=1,  
</span><br>
<span class="quotelev1">&gt; PUT=2, GET=4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With all that was said above, let me provide a few options for  
</span><br>
<span class="quotelev1">&gt; decreasing the amount of registered memory that OMPI uses and also  
</span><br>
<span class="quotelev1">&gt; describe a way to put a strict limit on how much registered memory  
</span><br>
<span class="quotelev1">&gt; OMPI will use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll create some FAQ entries about these exact topics in the Near  
</span><br>
<span class="quotelev1">&gt; Future that will go into more detail, but it might take a few days  
</span><br>
<span class="quotelev1">&gt; because FAQ wording is tricky; the algorithms that OMPI uses and the  
</span><br>
<span class="quotelev1">&gt; tunable parameters that it exports are quite complicated -- I'll want  
</span><br>
<span class="quotelev1">&gt; to sure it's precisely correct for those who land there via Google.   
</span><br>
<span class="quotelev1">&gt; Here's the quick version (Galen/Gleb/Pasha: please correct me if I  
</span><br>
<span class="quotelev1">&gt; get these details incorrect -- thanks!):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - All internal-to-OMPI registered buffers -- whether they are used  
</span><br>
<span class="quotelev1">&gt; for sending or receiving -- are cached on freelists.  So if OMPI  
</span><br>
<span class="quotelev1">&gt; registers an internal buffer, sends from it, and then is done with  
</span><br>
<span class="quotelev1">&gt; it, the buffer is not de-registered -- it is put back on the free  
</span><br>
<span class="quotelev1">&gt; list for use in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OMPI makes IB connections to peer MPI processes lazily.  That is,  
</span><br>
<span class="quotelev1">&gt; the first time you MPI_SEND or MPI_RECV to a peer, OMPI makes the  
</span><br>
<span class="quotelev1">&gt; connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OMPI creates an initial set of pre-posted buffers when each IB port  
</span><br>
<span class="quotelev1">&gt; is initialized.  The amount registered for each IB endpoint (i.e.,  
</span><br>
<span class="quotelev1">&gt; ports and LIDs) in use on the host by the MPI process upon MPI_INIT is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      2 * btl_openib_free_list_inc *
</span><br>
<span class="quotelev1">&gt;          (btl_openib_max_send_size + btl_openib_eager_limit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt; NOTE: There's some pretty pictures of the exact meanings of the  
</span><br>
<span class="quotelev1">&gt; max send size and eager limit and how they are used in this paper:  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;2&quot; is because there are actually 2 free lists -- one for sending  
</span><br>
<span class="quotelev1">&gt; buffers and one for receiving buffers.  Default values for these  
</span><br>
<span class="quotelev1">&gt; three MCA parameters are 32 (free_list_inc), 64k (max_send_size), 12k  
</span><br>
<span class="quotelev1">&gt; (eager_limit), respectively.  So each MPI process will preregister  
</span><br>
<span class="quotelev1">&gt; about 4.75MB of memory per endpoint in use on the host.  Since these  
</span><br>
<span class="quotelev1">&gt; are all MCA parameters, they are all adjustable at run-time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OMPI then pre-registers and pre-posts receive buffers when each  
</span><br>
<span class="quotelev1">&gt; lazy IB connection is made.  The buffers are drawn from the freelists  
</span><br>
<span class="quotelev1">&gt; mentioned above, so the first few connections may not actually  
</span><br>
<span class="quotelev1">&gt; register any *new* memory.  The freelists register more memory and  
</span><br>
<span class="quotelev1">&gt; dole it out as necessary when requests are made that cannot be  
</span><br>
<span class="quotelev1">&gt; satisfied by what is already on the freelist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The number of pre-posted receiver buffers are controlled via the  
</span><br>
<span class="quotelev1">&gt; btl_openib_rd_num and btl_openib_rd_win MCA parameters.  OMPI pre- 
</span><br>
<span class="quotelev1">&gt; posts btl_openib_rd_num plus a few more (for control messages) --  
</span><br>
<span class="quotelev1">&gt; resulting in 11 buffers by default per queue pair (OMPI uses 2 QPs,  
</span><br>
<span class="quotelev1">&gt; one high priority for eager fragments and one low priority for send  
</span><br>
<span class="quotelev1">&gt; fragments) per endpoint.  So there are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	11 * (12k + 64k) = 836k
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; buffers pre posted for each IB connection endpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =&gt; What I'm guessing is happening in your network is that IMB is  
</span><br>
<span class="quotelev1">&gt; hitting some communication intensive portions and network traffic  
</span><br>
<span class="quotelev1">&gt; either backs up, starts getting congested, or otherwise becomes  
</span><br>
<span class="quotelev1">&gt; &quot;slow&quot;, meaning that OMPI is queueing up traffic faster than the  
</span><br>
<span class="quotelev1">&gt; network can process it.  Hence, OMPI keeps registering more and more  
</span><br>
<span class="quotelev1">&gt; memory because there's no more memory available on the freelist to  
</span><br>
<span class="quotelev1">&gt; recycle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The sending buffering behavior is regulated by the  
</span><br>
<span class="quotelev1">&gt; btl_openib_free_list_max MCA parameter, which defaults to -1 (meaning  
</span><br>
<span class="quotelev1">&gt; that the free list can grow to infinite size).  You can set a cap on  
</span><br>
<span class="quotelev1">&gt; this, telling OMPI how many entries it is allowed to have on the  
</span><br>
<span class="quotelev1">&gt; freelist, but that doesn't have a direct correlation as to how much  
</span><br>
<span class="quotelev1">&gt; memory will actually be registered at any one time when  
</span><br>
<span class="quotelev1">&gt; btl_openib_flags &gt; 1 (because OMPI will also be registering and  
</span><br>
<span class="quotelev1">&gt; caching user buffers).  Also keep in mind that this MCA parameter  
</span><br>
<span class="quotelev1">&gt; governs the size of both sending and receiving buffer freelists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, if you use btl_openib_flags=1, you can use  
</span><br>
<span class="quotelev1">&gt; btl_openib_free_list_max as a direct method (because OMPI will *not*  
</span><br>
<span class="quotelev1">&gt; be registering and caching user buffers), but you need to choose a  
</span><br>
<span class="quotelev1">&gt; value that will be acceptable for both the send and receive freelists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should happen if OMPI hits the btl_openib_free_list_max limit is  
</span><br>
<span class="quotelev1">&gt; that the upper layer (called the &quot;PML&quot;) will internally buffer  
</span><br>
<span class="quotelev1">&gt; messages until more IB registered buffers become available.  It's not  
</span><br>
<span class="quotelev1">&gt; entirely accurate, but you can think of it as effectively multiple  
</span><br>
<span class="quotelev1">&gt; levels of queueing going on here: MPI requests, PML buffers, IB  
</span><br>
<span class="quotelev1">&gt; registered buffers, network.  Fun stuff!  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - A future OMPI feature is an MCA parameter called  
</span><br>
<span class="quotelev1">&gt; mpool_rdma_rcache_size_limit.  It defaults to an &quot;unlimited&quot; value,  
</span><br>
<span class="quotelev1">&gt; which means that OMPI will try to register memory forever.  But if  
</span><br>
<span class="quotelev1">&gt; you set it to a nonzero positive value (in bytes), OMPI will limit  
</span><br>
<span class="quotelev1">&gt; itself to that much registered memory for each MPI process.  This MCA  
</span><br>
<span class="quotelev1">&gt; parameter unfortunately didn't make it into the 1.2 release, but will  
</span><br>
<span class="quotelev1">&gt; be included in some future release.  This code is currently on the  
</span><br>
<span class="quotelev1">&gt; OMPI trunk (and nightly snapshots), but not available in the 1.2  
</span><br>
<span class="quotelev1">&gt; branch (and nightly snapshots/releases).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With all those explanations, here's some recommendations for you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Try simply setting the size of the eager limit and max send size to  
</span><br>
<span class="quotelev1">&gt; smaller values, perhaps 4k for the eager limit and 12k for the max  
</span><br>
<span class="quotelev1">&gt; send size.  This will decrease the amount of registered memory that  
</span><br>
<span class="quotelev1">&gt; OMPI uses for each connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Try setting btl_openib_free_list_max, perhaps in conjunction with  
</span><br>
<span class="quotelev1">&gt; btl_openib_flags=1, to allow you to directly set indirectly or  
</span><br>
<span class="quotelev1">&gt; exactly how much registered memory is used per endpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If you want to explore the OMPI trunk (with all the normal  
</span><br>
<span class="quotelev1">&gt; disclaimers about development code), try setting  
</span><br>
<span class="quotelev1">&gt; mpool_rdma_rcache_size_limit to a fixed value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that the intermixing of all of these values is quite  
</span><br>
<span class="quotelev1">&gt; complicated.  It's a very, very thin line to walk to balance resource  
</span><br>
<span class="quotelev1">&gt; constraints and application performance.  Tweaking one parameter may  
</span><br>
<span class="quotelev1">&gt; give you good resource limits but hose your overall performance.   
</span><br>
<span class="quotelev1">&gt; Another dimension here is that different applications will likely use  
</span><br>
<span class="quotelev1">&gt; different communication patterns, so different sets of values may be  
</span><br>
<span class="quotelev1">&gt; suitable for different applications.  It's a complicated parameter  
</span><br>
<span class="quotelev1">&gt; space problem.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 2. On another side note, I am having similar problems on another  
</span><br>
<span class="quotelev2">&gt;&gt; customer's cluster, where the benchmark hangs but at a different  
</span><br>
<span class="quotelev2">&gt;&gt; place each time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HW specs
</span><br>
<span class="quotelev2">&gt;&gt; * 12x IBM 3455 2xdual Core machines, with Infinipath/pathscale HCAs
</span><br>
<span class="quotelev2">&gt;&gt; * 1x Voltaire Switch
</span><br>
<span class="quotelev2">&gt;&gt; SW
</span><br>
<span class="quotelev2">&gt;&gt; * master: RHEL 4 AS U3
</span><br>
<span class="quotelev2">&gt;&gt; * compute: RHEL 4 WS U3
</span><br>
<span class="quotelev2">&gt;&gt; * OFED 1.1.1 w. OpenMPI-1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For InfiniPath HCAs, you should probably be using the psm MTL instead  
</span><br>
<span class="quotelev1">&gt; of the openib BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The short version explanation between the two is that MTL plugins are  
</span><br>
<span class="quotelev1">&gt; designed for networks that export MPI-like interfaces (e.g., portals,  
</span><br>
<span class="quotelev1">&gt; tports, MX, InifiniPath).  BTL plugins are more geared towards  
</span><br>
<span class="quotelev1">&gt; networks that export RDMA interfaces.  You can force using the psm  
</span><br>
<span class="quotelev1">&gt; MTL with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml cm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This tells OMPI to use the &quot;cm&quot; PML plugin (PML is the back end to  
</span><br>
<span class="quotelev1">&gt; MPI point-to-point), which, if you've built the &quot;psm&quot; MTL plugin (psm  
</span><br>
<span class="quotelev1">&gt; is the InfiniPath library glue), will use the InfiniPath native back- 
</span><br>
<span class="quotelev1">&gt; end library which will do nice things.  Beyond that, someone else  
</span><br>
<span class="quotelev1">&gt; will have to answer -- I have no experience with the psm MTL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2511.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
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
