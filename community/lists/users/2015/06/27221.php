<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 16:55:15 2015" -->
<!-- isoreceived="20150629205515" -->
<!-- sent="Mon, 29 Jun 2015 15:46:20 -0500" -->
<!-- isosent="20150629204620" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash" -->
<!-- id="CAMD57ofpUDpK96dqGiRkaabDuvNkNWd_R++bngSq_iyQsUNkzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EE0D7A_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 16:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27222.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27220.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27220.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27222.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think so, yes.
<br>
<p><p>On Mon, Jun 29, 2015 at 3:42 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Would the output of dmidecode -t processor and/or lstopo tell me
</span><br>
<span class="quotelev1">&gt; conclusively
</span><br>
<span class="quotelev1">&gt; if hyperthreading is enabled or not? Hyperthreading is supposed to be
</span><br>
<span class="quotelev1">&gt; enabled
</span><br>
<span class="quotelev1">&gt; for all the IBM x3550 M3 and M4 nodes, but I'm not sure if it actually is
</span><br>
<span class="quotelev1">&gt; and I
</span><br>
<span class="quotelev1">&gt; don't have access to the BIOS settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, June 27, 2015 7:21 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev1">&gt; crash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Bill - this is such a jumbled collection of machines that I&#226;&#128;&#153;m having
</span><br>
<span class="quotelev1">&gt; trouble figuring out what I should replicate. I can create something
</span><br>
<span class="quotelev1">&gt; artificial here so I can try to debug this, but I need to know exactly what
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m up against - can you tell me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * the architecture of each type - how many sockets, how many
</span><br>
<span class="quotelev1">&gt; cores/socket, HT on or off. If two nodes have the same physical setup but
</span><br>
<span class="quotelev1">&gt; one has HT on and the other off, then please consider those two different
</span><br>
<span class="quotelev1">&gt; types
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * how many nodes of each type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Looking at your map output, it looks like the map is being done
</span><br>
<span class="quotelev1">&gt; correctly, but somehow the binding locale isn&#226;&#128;&#153;t getting set in some cases.
</span><br>
<span class="quotelev1">&gt; You latest error output would seem out-of-step with your prior reports, so
</span><br>
<span class="quotelev1">&gt; something else may be going on there. As I said earlier, this is the most
</span><br>
<span class="quotelev1">&gt; hetero environment we&#226;&#128;&#153;ve seen, and so there may be some code paths your
</span><br>
<span class="quotelev1">&gt; hitting that haven&#226;&#128;&#153;t been well exercised before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jun 26, 2015, at 5:22 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Well, I managed to get a successful mpirun @ a slot count of 132 using
</span><br>
<span class="quotelev1">&gt; --mca btl ^sm,
</span><br>
<span class="quotelev1">&gt; however when I increased the slot count to 160, mpirun crashed without any
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 160 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev1">&gt; --hostfile hostfile-noslots --mca btl ^sm --hetero-nodes --bind-to core
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3 &gt;&gt; out.txt 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  csclprd3-6-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be
</span><br>
<span class="quotelev1">&gt; degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;    Node:        csclprd3-6-1
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But csclprd3-6-1 (a blade) does have 2 CPU's on 2 separate sockets w/2
</span><br>
<span class="quotelev1">&gt; cores apiece as shown in my dmidecode output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     csclprd3-6-1 ~]# dmidecode -t processor
</span><br>
<span class="quotelev1">&gt;     # dmidecode 2.11
</span><br>
<span class="quotelev1">&gt;     SMBIOS 2.4 present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Handle 0x0008, DMI type 4, 32 bytes
</span><br>
<span class="quotelev1">&gt;     Processor Information
</span><br>
<span class="quotelev1">&gt;             Socket Designation: Socket 1 CPU 1
</span><br>
<span class="quotelev1">&gt;             Type: Central Processor
</span><br>
<span class="quotelev1">&gt;             Family: Xeon
</span><br>
<span class="quotelev1">&gt;             Manufacturer: GenuineIntel
</span><br>
<span class="quotelev1">&gt;             ID: F6 06 00 00 01 03 00 00
</span><br>
<span class="quotelev1">&gt;             Signature: Type 0, Family 6, Model 15, Stepping 6
</span><br>
<span class="quotelev1">&gt;             Flags:
</span><br>
<span class="quotelev1">&gt;                     FPU (Floating-point unit on-chip)
</span><br>
<span class="quotelev1">&gt;                     CX8 (CMPXCHG8 instruction supported)
</span><br>
<span class="quotelev1">&gt;                     APIC (On-chip APIC hardware supported)
</span><br>
<span class="quotelev1">&gt;             Version: Intel Xeon
</span><br>
<span class="quotelev1">&gt;             Voltage: 2.9 V
</span><br>
<span class="quotelev1">&gt;             External Clock: 333 MHz
</span><br>
<span class="quotelev1">&gt;             Max Speed: 4000 MHz
</span><br>
<span class="quotelev1">&gt;             Current Speed: 3000 MHz
</span><br>
<span class="quotelev1">&gt;             Status: Populated, Enabled
</span><br>
<span class="quotelev1">&gt;             Upgrade: ZIF Socket
</span><br>
<span class="quotelev1">&gt;             L1 Cache Handle: 0x0004
</span><br>
<span class="quotelev1">&gt;             L2 Cache Handle: 0x0005
</span><br>
<span class="quotelev1">&gt;             L3 Cache Handle: Not Provided
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Handle 0x0009, DMI type 4, 32 bytes
</span><br>
<span class="quotelev1">&gt;     Processor Information
</span><br>
<span class="quotelev1">&gt;             Socket Designation: Socket 2 CPU 2
</span><br>
<span class="quotelev1">&gt;             Type: Central Processor
</span><br>
<span class="quotelev1">&gt;             Family: Xeon
</span><br>
<span class="quotelev1">&gt;             Manufacturer: GenuineIntel
</span><br>
<span class="quotelev1">&gt;             ID: F6 06 00 00 01 03 00 00
</span><br>
<span class="quotelev1">&gt;             Signature: Type 0, Family 6, Model 15, Stepping 6
</span><br>
<span class="quotelev1">&gt;             Flags:
</span><br>
<span class="quotelev1">&gt;                     FPU (Floating-point unit on-chip)
</span><br>
<span class="quotelev1">&gt;                     CX8 (CMPXCHG8 instruction supported)
</span><br>
<span class="quotelev1">&gt;                     APIC (On-chip APIC hardware supported)
</span><br>
<span class="quotelev1">&gt;             Version: Intel Xeon
</span><br>
<span class="quotelev1">&gt;             Voltage: 2.9 V
</span><br>
<span class="quotelev1">&gt;             External Clock: 333 MHz
</span><br>
<span class="quotelev1">&gt;             Max Speed: 4000 MHz
</span><br>
<span class="quotelev1">&gt;             Current Speed: 3000 MHz
</span><br>
<span class="quotelev1">&gt;             Status: Populated, Enabled
</span><br>
<span class="quotelev1">&gt;             Upgrade: ZIF Socket
</span><br>
<span class="quotelev1">&gt;             L1 Cache Handle: 0x0006
</span><br>
<span class="quotelev1">&gt;             L2 Cache Handle: 0x0007
</span><br>
<span class="quotelev1">&gt;             L3 Cache Handle: Not Provided
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     csclprd3-6-1 ~]# lstopo
</span><br>
<span class="quotelev1">&gt;     Machine (16GB)
</span><br>
<span class="quotelev1">&gt;       Socket L#0 + L2 L#0 (4096KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;         L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;       Socket L#1 + L2 L#1 (4096KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;         L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; csclprd3-0-1 information (which looks correct as this particular x3550
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; have one socket populated (of two) with a 6 core Xeon (or 12 cores
</span><br>
<span class="quotelev1">&gt; w/hyperthreading
</span><br>
<span class="quotelev1">&gt; turned on):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     csclprd3-0-1 ~]# lstopo
</span><br>
<span class="quotelev1">&gt;     Machine (71GB)
</span><br>
<span class="quotelev1">&gt;       Socket L#0 + L3 L#0 (12MB)
</span><br>
<span class="quotelev1">&gt;         L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU
</span><br>
<span class="quotelev1">&gt; L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;         L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU
</span><br>
<span class="quotelev1">&gt; L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;         L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU
</span><br>
<span class="quotelev1">&gt; L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;         L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU
</span><br>
<span class="quotelev1">&gt; L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;         L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU
</span><br>
<span class="quotelev1">&gt; L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;         L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU
</span><br>
<span class="quotelev1">&gt; L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     csclprd3-0-1 ~]# dmidecode -t processor
</span><br>
<span class="quotelev1">&gt;     # dmidecode 2.11
</span><br>
<span class="quotelev1">&gt;     # SMBIOS entry point at 0x7f6be000
</span><br>
<span class="quotelev1">&gt;     SMBIOS 2.5 present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Handle 0x0001, DMI type 4, 40 bytes
</span><br>
<span class="quotelev1">&gt;     Processor Information
</span><br>
<span class="quotelev1">&gt;             Socket Designation: Node 1 Socket 1
</span><br>
<span class="quotelev1">&gt;             Type: Central Processor
</span><br>
<span class="quotelev1">&gt;             Family: Xeon MP
</span><br>
<span class="quotelev1">&gt;             Manufacturer: Intel(R) Corporation
</span><br>
<span class="quotelev1">&gt;             ID: C2 06 02 00 FF FB EB BF
</span><br>
<span class="quotelev1">&gt;             Signature: Type 0, Family 6, Model 44, Stepping 2
</span><br>
<span class="quotelev1">&gt;             Flags:
</span><br>
<span class="quotelev1">&gt;                     FPU (Floating-point unit on-chip)
</span><br>
<span class="quotelev1">&gt;                     VME (Virtual mode extension)
</span><br>
<span class="quotelev1">&gt;                     DE (Debugging extension)
</span><br>
<span class="quotelev1">&gt;                     PSE (Page size extension)
</span><br>
<span class="quotelev1">&gt;                     TSC (Time stamp counter)
</span><br>
<span class="quotelev1">&gt;                     MSR (Model specific registers)
</span><br>
<span class="quotelev1">&gt;                     PAE (Physical address extension)
</span><br>
<span class="quotelev1">&gt;                     MCE (Machine check exception)
</span><br>
<span class="quotelev1">&gt;                     CX8 (CMPXCHG8 instruction supported)
</span><br>
<span class="quotelev1">&gt;                     APIC (On-chip APIC hardware supported)
</span><br>
<span class="quotelev1">&gt;                     SEP (Fast system call)
</span><br>
<span class="quotelev1">&gt;                     MTRR (Memory type range registers)
</span><br>
<span class="quotelev1">&gt;                     PGE (Page global enable)
</span><br>
<span class="quotelev1">&gt;                     MCA (Machine check architecture)
</span><br>
<span class="quotelev1">&gt;                     CMOV (Conditional move instruction supported)
</span><br>
<span class="quotelev1">&gt;                     PAT (Page attribute table)
</span><br>
<span class="quotelev1">&gt;                     PSE-36 (36-bit page size extension)
</span><br>
<span class="quotelev1">&gt;                     CLFSH (CLFLUSH instruction supported)
</span><br>
<span class="quotelev1">&gt;                     DS (Debug store)
</span><br>
<span class="quotelev1">&gt;                     ACPI (ACPI supported)
</span><br>
<span class="quotelev1">&gt;                     MMX (MMX technology supported)
</span><br>
<span class="quotelev1">&gt;                     FXSR (FXSAVE and FXSTOR instructions supported)
</span><br>
<span class="quotelev1">&gt;                     SSE (Streaming SIMD extensions)
</span><br>
<span class="quotelev1">&gt;                     SSE2 (Streaming SIMD extensions 2)
</span><br>
<span class="quotelev1">&gt;                     SS (Self-snoop)
</span><br>
<span class="quotelev1">&gt;                     HTT (Multi-threading)
</span><br>
<span class="quotelev1">&gt;                     TM (Thermal monitor supported)
</span><br>
<span class="quotelev1">&gt;                     PBE (Pending break enabled)
</span><br>
<span class="quotelev1">&gt;             Version: Intel(R) Xeon(R) CPU           E5645  @ 2.40GHz
</span><br>
<span class="quotelev1">&gt;             Voltage: 1.2 V
</span><br>
<span class="quotelev1">&gt;             External Clock: 5866 MHz
</span><br>
<span class="quotelev1">&gt;             Max Speed: 4400 MHz
</span><br>
<span class="quotelev1">&gt;             Current Speed: 2400 MHz
</span><br>
<span class="quotelev1">&gt;             Status: Populated, Enabled
</span><br>
<span class="quotelev1">&gt;             Upgrade: ZIF Socket
</span><br>
<span class="quotelev1">&gt;             L1 Cache Handle: 0x0002
</span><br>
<span class="quotelev1">&gt;             L2 Cache Handle: 0x0003
</span><br>
<span class="quotelev1">&gt;             L3 Cache Handle: 0x0004
</span><br>
<span class="quotelev1">&gt;             Serial Number: Not Specified
</span><br>
<span class="quotelev1">&gt;             Asset Tag: Not Specified
</span><br>
<span class="quotelev1">&gt;             Part Number: Not Specified
</span><br>
<span class="quotelev1">&gt;             Core Count: 6
</span><br>
<span class="quotelev1">&gt;             Core Enabled: 6
</span><br>
<span class="quotelev1">&gt;             Thread Count: 6
</span><br>
<span class="quotelev1">&gt;             Characteristics:
</span><br>
<span class="quotelev1">&gt;                     64-bit capable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Handle 0x005A, DMI type 4, 40 bytes
</span><br>
<span class="quotelev1">&gt;     Processor Information
</span><br>
<span class="quotelev1">&gt;             Socket Designation: Node 1 Socket 2
</span><br>
<span class="quotelev1">&gt;             Type: Central Processor
</span><br>
<span class="quotelev1">&gt;             Family: Xeon MP
</span><br>
<span class="quotelev1">&gt;             Manufacturer: Not Specified
</span><br>
<span class="quotelev1">&gt;             ID: 00 00 00 00 00 00 00 00
</span><br>
<span class="quotelev1">&gt;             Signature: Type 0, Family 0, Model 0, Stepping 0
</span><br>
<span class="quotelev1">&gt;             Flags: None
</span><br>
<span class="quotelev1">&gt;             Version: Not Specified
</span><br>
<span class="quotelev1">&gt;             Voltage: 1.2 V
</span><br>
<span class="quotelev1">&gt;             External Clock: 5866 MHz
</span><br>
<span class="quotelev1">&gt;             Max Speed: 4400 MHz
</span><br>
<span class="quotelev1">&gt;             Current Speed: Unknown
</span><br>
<span class="quotelev1">&gt;             Status: Unpopulated
</span><br>
<span class="quotelev1">&gt;             Upgrade: ZIF Socket
</span><br>
<span class="quotelev1">&gt;             L1 Cache Handle: Not Provided
</span><br>
<span class="quotelev1">&gt;             L2 Cache Handle: Not Provided
</span><br>
<span class="quotelev1">&gt;             L3 Cache Handle: Not Provided
</span><br>
<span class="quotelev1">&gt;             Serial Number: Not Specified
</span><br>
<span class="quotelev1">&gt;             Asset Tag: Not Specified
</span><br>
<span class="quotelev1">&gt;             Part Number: Not Specified
</span><br>
<span class="quotelev1">&gt;             Characteristics: None
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, June 24, 2015 6:06 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev1">&gt; crash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I think trying with --mca btl ^sm makes a lot of sense and may solve
</span><br>
<span class="quotelev1">&gt; the problem. I also noted that we are having trouble with the topology of
</span><br>
<span class="quotelev1">&gt; several of the nodes - seeing only one socket, non-HT where you say we
</span><br>
<span class="quotelev1">&gt; should see two sockets and HT-enabled. In those cases, the locality is
</span><br>
<span class="quotelev1">&gt; &quot;unknown&quot; - given that those procs are on remote nodes from the one being
</span><br>
<span class="quotelev1">&gt; impacted, I don't think it should cause a problem. However, it isn't
</span><br>
<span class="quotelev1">&gt; correct, and that raises flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My best guess of the root cause of that error is either we are getting
</span><br>
<span class="quotelev1">&gt; bad topology info on those nodes, or we have a bug that is mishandling this
</span><br>
<span class="quotelev1">&gt; scenario. It would probably be good to get this error fixed to ensure it
</span><br>
<span class="quotelev1">&gt; isn't the source of the eventual crash, even though I'm not sure they are
</span><br>
<span class="quotelev1">&gt; related.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Bill: Can we examine one of the problem nodes? Let's pick csclprd3-0-1
</span><br>
<span class="quotelev1">&gt; (or take another one from your list - just look for one where &quot;locality&quot; is
</span><br>
<span class="quotelev1">&gt; reported as &quot;unknown&quot; for the procs in the output map). Can you run lstopo
</span><br>
<span class="quotelev1">&gt; on that node and send us the output? In the above map, it is reporting a
</span><br>
<span class="quotelev1">&gt; single socket with 6 cores, non-HT. Is that what lstopo shows when run on
</span><br>
<span class="quotelev1">&gt; the node? Is it what you expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 24, 2015 at 4:07 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bill,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  were you able to get a core file and analyze the stack with gdb ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I suspect the error occurs in mca_btl_sm_add_procs but this is just my
</span><br>
<span class="quotelev2">&gt;&gt; best guess.
</span><br>
<span class="quotelev2">&gt;&gt; if this is correct, can you check the value of
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm_component.num_smp_procs ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  as a workaround, can you try
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl ^sm ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I do not see how I can tackle the root cause without being able to
</span><br>
<span class="quotelev2">&gt;&gt; reproduce the issue :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  can you try to reproduce the issue with the smallest hostfile, and then
</span><br>
<span class="quotelev2">&gt;&gt; run lstopo on all the nodes ?
</span><br>
<span class="quotelev2">&gt;&gt; btw, you are not mixing 32 bits and 64 bits OS, are you ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_sm_add_procs(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    int mca_btl_sm_add_procs(
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, June 24, 2015, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the blades only have two core Xeons (without hyperthreading)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; populating both their sockets. All
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the x3550 nodes have hyperthreading capable Xeons and Sandybridge server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU's. It's possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hyperthreading has been disabled on some of these nodes though. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3-0-n nodes are all IBM x3550
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes while the 3-6-n nodes are all blade nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have run this exact same test code successfully in the past on another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster (~200 nodes of Sunfire X2100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2x dual-core Opterons) w/no issues on upwards of 390 slots. I even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested it recently on OpenMPI 1.8.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on another smaller R&amp;D cluster consisting of 10 Sunfire X2100 nodes (w/2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual core Opterons apiece).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On this particular cluster I've had success running this code on &lt; 132
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, here's the results of the following mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 132 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3 &gt;&gt; out.txt 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Node:  csclprd3-6-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be degraded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for JOB [51718,1] offset 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BYSOCKET  Ranking policy: SLOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num new daemons: 0    New daemon starting vpid INVALID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num nodes: 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-6-1         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],1]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 4    Slots in use: 4    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 4    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 4    Next node_rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/.][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./.][B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./.][./B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-6-5         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],2]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 4    Slots in use: 4    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 4    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 4    Next node_rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/.][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./.][B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B][./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./.][B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./.][./B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-0         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],3]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 12    Slots in use: 12    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 12    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 12    Next node_rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././.][B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././.][./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././.][././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 6    Node rank: 6    App rank: 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 7    Node rank: 7    App rank: 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././.][./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],16]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 8    Node rank: 8    App rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 9    Node rank: 9    App rank: 17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././.][././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],18]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 10    Node rank: 10    App rank: 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 11    Node rank: 11    App rank: 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././.][./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-1         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],4]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],20]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 21
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],22]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 22
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],23]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],24]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 25
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-2         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],5]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],26]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 26
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 27
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],28]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 28
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 29
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],30]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 30
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],31]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-3         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],6]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],32]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],33]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 33
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],34]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 34
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],35]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 35
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],36]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],37]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 37
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-4         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],7]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],38]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 38
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],39]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 39
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],40]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 40
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],41]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 41
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],42]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 42
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],43]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 43
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-5         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],8]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],44]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 44
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],45]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 45
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],46]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 46
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],47]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 47
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],48]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 48
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],49]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 49
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-6         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],9]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],50]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 50
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [B/././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],51]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],52]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././B/././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],53]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././B/./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],54]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 54
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [././././B/.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],55]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 55
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [./././././B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-7         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],10]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 16    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 16    Next node_rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],56]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 56
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],57]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 57
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],58]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 58
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],59]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 59
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],60]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 60
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 61
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],62]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 6    Node rank: 6    App rank: 62
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],63]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 7    Node rank: 7    App rank: 63
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],64]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 8    Node rank: 8    App rank: 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],65]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 9    Node rank: 9    App rank: 65
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],66]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 10    Node rank: 10    App rank: 66
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],67]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 11    Node rank: 11    App rank: 67
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],68]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 12    Node rank: 12    App rank: 68
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],69]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 13    Node rank: 13    App rank: 69
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],70]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 14    Node rank: 14    App rank: 70
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],71]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 15    Node rank: 15    App rank: 71
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-8         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],11]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 16    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 16    Next node_rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],72]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 72
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],73]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 73
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],74]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 74
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],75]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 75
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],76]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],77]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],78]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 6    Node rank: 6    App rank: 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],79]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 7    Node rank: 7    App rank: 79
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],80]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 8    Node rank: 8    App rank: 80
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],81]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 9    Node rank: 9    App rank: 81
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],82]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 10    Node rank: 10    App rank: 82
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],83]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 11    Node rank: 11    App rank: 83
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],84]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 12    Node rank: 12    App rank: 84
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],85]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 13    Node rank: 13    App rank: 85
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],86]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 14    Node rank: 14    App rank: 86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],87]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 15    Node rank: 15    App rank: 87
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-10         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],12]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 16    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 16    Next node_rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],88]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 88
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],89]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 89
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],90]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],91]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 91
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],92]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 92
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],93]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 93
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],94]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 6    Node rank: 6    App rank: 94
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],95]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 7    Node rank: 7    App rank: 95
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],96]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 8    Node rank: 8    App rank: 96
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],97]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 9    Node rank: 9    App rank: 97
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],98]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 10    Node rank: 10    App rank: 98
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],99]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 11    Node rank: 11    App rank: 99
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 12    Node rank: 12    App rank: 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],101]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 13    Node rank: 13    App rank: 101
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],102]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 14    Node rank: 14    App rank: 102
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],103]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 15    Node rank: 15    App rank: 103
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-11         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],13]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 16    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 16    Next node_rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],104]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 104
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],105]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 105
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],106]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 106
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],107]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 107
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],108]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 108
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../BB/../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],109]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 109
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],110]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 6    Node rank: 6    App rank: 110
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],111]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 7    Node rank: 7    App rank: 111
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],112]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 8    Node rank: 8    App rank: 112
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../BB/../../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],113]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 9    Node rank: 9    App rank: 113
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],114]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 10    Node rank: 10    App rank: 114
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../BB/../..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],115]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 11    Node rank: 11    App rank: 115
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],116]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 12    Node rank: 12    App rank: 116
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../BB/..][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],117]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 13    Node rank: 13    App rank: 117
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],118]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 14    Node rank: 14    App rank: 118
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../BB][../../../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],119]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 15    Node rank: 15    App rank: 119
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../../../..][../../../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-12         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],14]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 6    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],120]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 120
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],121]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 121
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],122]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 122
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],123]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 123
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],124]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 124
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],125]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 125
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: csclprd3-0-13         Launch id: -1    State: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Daemon: [[51718,0],15]    Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots: 12    Slots in use: 6    Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num slots allocated: 12    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Num procs: 6    Next node_rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],126]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 0    Node rank: 0    App rank: 126
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],127]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 1    Node rank: 1    App rank: 127
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../..][BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],128]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 2    Node rank: 2    App rank: 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],129]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 3    Node rank: 3    App rank: 129
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../..][../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],130]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 4    Node rank: 4    App rank: 130
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [BB/BB/BB/BB/BB/BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../BB/../../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Data for proc: [[51718,1],131]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Pid: 0    Local rank: 5    Node rank: 5    App rank: 131
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          State: INITIALIZED    App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Locale: [../../../../../..][BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Binding: [../../../../../..][../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] Failing at address: 0x7f1374267a00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] Failing at address: 0x7fcc702a7980
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] Failing at address: 0x7f8128367880
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] Failing at address: 0x7fe674227a00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] Failing at address: 0x7f061c32db80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] Failing at address: 0x7fb8402eaa80
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7fb851851500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 1] [csclprd3-0-13:31616] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7fe6843a4500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 1] [csclprd3-0-13:31620] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7fcc80c54500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fcc80fc9f61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fcc80fca047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 3] [csclprd3-0-13:31615] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7f81385ca500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f813893ff61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f8138940047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fb851bc6f61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fb851bc7047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fb851ab4670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 4] [csclprd3-0-13:31617] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7f062cfe5500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f062d35af61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f062d35b047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f062d248670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 4] [csclprd3-0-13:31619] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf500)[0x7f1384fde500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f1385353f61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fe684719f61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fe68471a047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fe684607670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f1385354047]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f1385241670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f13852425ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f1385242751]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f13853501c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f1385336628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fcc80eb7670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fcc80eb85ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fcc80eb8751]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fcc80fc61c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fcc80fac628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fcc8111fd61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f813882d670]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f813882e5ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f813882e751]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f813893c1c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f8138922628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f8138a95d61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f813885d747]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fb851ab55ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fb851ab5751]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fb851bc31c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fb851ba9628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fb851d1cd61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fb851ae4747]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f062d2495ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f062d249751]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f062d3571c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f062d33d628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f062d4b0d61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f062d278747]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fe6846085ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fe684608751]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fe6847161c9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fe6846fc628]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fe68486fd61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fe684637747]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fe68467750b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe684021cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31616] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f062d2b850b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f062cc62cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31617] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f13854a9d61]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f1385271747]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f13852b150b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f1384c5bcdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31619] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fcc80ee7747]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fcc80f2750b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fcc808d1cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31620] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f813889d50b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f8138247cdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31615] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fb851b2450b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fb8514cecdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-0-13:31618] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 7 (Bus error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Sent:* Tuesday, June 23, 2015 6:20 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; crash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Wow - that is one sick puppy! I see that some nodes are reporting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not-bound for their procs, and the rest are binding to socket (as they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should). Some of your nodes clearly do not have hyper threads enabled (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only have single-thread cores on them), and have 2 cores/socket. Other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes have 8 cores/socket with hyper threads enabled, while still others
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have 6 cores/socket and HT enabled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I don't see anyone binding to a single HT if multiple HTs/core are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available. I think you are being fooled by those nodes that either don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have HT enabled, or have only 1 HT/core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  In both cases, it is node 13 that is the node that fails. I also note
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you said everything works okay with &lt; 132 ranks, and node 13 hosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ranks 127-131. So node 13 would host ranks even if you reduced the number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the job to 131. This would imply that it probably isn't something wrong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the node itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Is there any way you could run a job of this size on a homogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster? The procs all show bindings that look right, but I'm wondering if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the heterogeneity is the source of the trouble here. We may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicating the binding pattern incorrectly and giving bad info to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; backend daemon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Also, rather than --report-bindings, use &quot;--display-devel-map&quot; on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line and let's see what the mapper thinks it did. If there is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem with placement, that is where it would exist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jun 23, 2015 at 5:12 PM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is something funny going on, the trace from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runs w/the debug build aren't showing any differences from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what I got earlier. However, I did do a run w/the --bind-to core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; switch and was surprised to see that hyperthreading cores were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes being used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the traces that I have:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:16802] MCW rank 44 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:16802] MCW rank 45 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:16802] MCW rank 46 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:12480] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:12480] MCW rank 5 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:12480] MCW rank 6 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-5:12480] MCW rank 7 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:16802] MCW rank 47 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:16802] MCW rank 48 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-5:16802] MCW rank 49 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:14318] MCW rank 22 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:14318] MCW rank 23 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:14318] MCW rank 24 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:24682] MCW rank 3 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:24682] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:14318] MCW rank 25 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:14318] MCW rank 20 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:13827] MCW rank 34 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-1:14318] MCW rank 21 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:13827] MCW rank 35 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:24682] MCW rank 1 bound to socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 3[hwt 0]]: [./.][B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:13827] MCW rank 36 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-6-1:24682] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:30371] MCW rank 51 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:30371] MCW rank 52 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:30371] MCW rank 53 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:05825] MCW rank 30 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:30371] MCW rank 54 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:13827] MCW rank 37 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:05825] MCW rank 31 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:13827] MCW rank 32 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:30371] MCW rank 55 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-3:13827] MCW rank 33 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-6:30371] MCW rank 50 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:05825] MCW rank 26 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:05825] MCW rank 27 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:05825] MCW rank 28 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-2:05825] MCW rank 29 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:12383] MCW rank 121 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:12383] MCW rank 122 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:12383] MCW rank 123 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:12383] MCW rank 124 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:12383] MCW rank 125 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-12:12383] MCW rank 120 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 13 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 14 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 15 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 16 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:20515] MCW rank 68 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:19096] MCW rank 100 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:20515] MCW rank 69 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:19096] MCW rank 101 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 17 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:20515] MCW rank 70 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:19096] MCW rank 102 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:31636] MCW rank 116 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:31636] MCW rank 117 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 18 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:31636] MCW rank 118 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 19 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:20515] MCW rank 71 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:19096] MCW rank 103 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 8 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 9 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:19096] MCW rank 88 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:31636] MCW rank 119 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:20515] MCW rank 56 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 10 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-7:20515] MCW rank 57 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-10:19096] MCW rank 89 bound to socket 1[core 8[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-11:31636] MCW rank 104 bound to socket 0[core 0[hwt 0-1]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 11 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-0:31079] MCW rank 12 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csclprd3-0-4:30348] MCW rank 42 is not bound (or bound to all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27185.php">http://www.open-mpi.org/community/lists/users/2015/06/27185.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev1">&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27204.php">http://www.open-mpi.org/community/lists/users/2015/06/27204.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev1">&gt; or entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27220.php">http://www.open-mpi.org/community/lists/users/2015/06/27220.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27222.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27220.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27220.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27222.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
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
