<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 20:22:31 2015" -->
<!-- isoreceived="20150627002231" -->
<!-- sent="Sat, 27 Jun 2015 00:22:22 +0000" -->
<!-- isosent="20150627002222" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EDFE4A_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57oc7s8ZrMyND7M7csaGHt1zgW_e_q+DZyqp1=gXoYJ2Uvw_at_mail.gmail.com" -->
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
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 20:22:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<li><strong>In reply to:</strong> <a href="27186.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I managed to get a successful mpirun @ a slot count of 132 using --mca btl ^sm,
<br>
however when I increased the slot count to 160, mpirun crashed without any error
<br>
output:
<br>
<p>mpirun -np 160 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.6/ --hostfile hostfile-noslots --mca btl ^sm --hetero-nodes --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3 &gt;&gt; out.txt 2&gt;&amp;1
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  csclprd3-6-1
<br>
<p>This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;Node:        csclprd3-6-1
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>But csclprd3-6-1 (a blade) does have 2 CPU's on 2 separate sockets w/2 cores apiece as shown in my dmidecode output:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;csclprd3-6-1 ~]# dmidecode -t processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# dmidecode 2.11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SMBIOS 2.4 present.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Handle 0x0008, DMI type 4, 32 bytes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Processor Information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket Designation: Socket 1 CPU 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: Central Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family: Xeon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manufacturer: GenuineIntel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID: F6 06 00 00 01 03 00 00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature: Type 0, Family 6, Model 15, Stepping 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flags:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FPU (Floating-point unit on-chip)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CX8 (CMPXCHG8 instruction supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APIC (On-chip APIC hardware supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version: Intel Xeon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voltage: 2.9 V
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;External Clock: 333 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max Speed: 4000 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Speed: 3000 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: Populated, Enabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upgrade: ZIF Socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 Cache Handle: 0x0004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 Cache Handle: 0x0005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 Cache Handle: Not Provided
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Handle 0x0009, DMI type 4, 32 bytes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Processor Information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket Designation: Socket 2 CPU 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: Central Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family: Xeon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manufacturer: GenuineIntel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID: F6 06 00 00 01 03 00 00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature: Type 0, Family 6, Model 15, Stepping 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flags:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FPU (Floating-point unit on-chip)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CX8 (CMPXCHG8 instruction supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APIC (On-chip APIC hardware supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version: Intel Xeon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voltage: 2.9 V
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;External Clock: 333 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max Speed: 4000 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Speed: 3000 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: Populated, Enabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upgrade: ZIF Socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 Cache Handle: 0x0006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 Cache Handle: 0x0007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 Cache Handle: Not Provided
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;csclprd3-6-1 ~]# lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Machine (16GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 + L2 L#0 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1 + L2 L#1 (4096KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
<br>
<p>csclprd3-0-1 information (which looks correct as this particular x3550 should
<br>
have one socket populated (of two) with a 6 core Xeon (or 12 cores w/hyperthreading
<br>
turned on):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;csclprd3-0-1 ~]# lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Machine (71GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 + L3 L#0 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;csclprd3-0-1 ~]# dmidecode -t processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# dmidecode 2.11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# SMBIOS entry point at 0x7f6be000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SMBIOS 2.5 present.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Handle 0x0001, DMI type 4, 40 bytes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Processor Information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket Designation: Node 1 Socket 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: Central Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family: Xeon MP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manufacturer: Intel(R) Corporation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID: C2 06 02 00 FF FB EB BF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature: Type 0, Family 6, Model 44, Stepping 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flags:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FPU (Floating-point unit on-chip)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VME (Virtual mode extension)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DE (Debugging extension)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PSE (Page size extension)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TSC (Time stamp counter)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MSR (Model specific registers)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAE (Physical address extension)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCE (Machine check exception)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CX8 (CMPXCHG8 instruction supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APIC (On-chip APIC hardware supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEP (Fast system call)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTRR (Memory type range registers)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PGE (Page global enable)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA (Machine check architecture)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CMOV (Conditional move instruction supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAT (Page attribute table)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PSE-36 (36-bit page size extension)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CLFSH (CLFLUSH instruction supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DS (Debug store)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACPI (ACPI supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MMX (MMX technology supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FXSR (FXSAVE and FXSTOR instructions supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSE (Streaming SIMD extensions)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSE2 (Streaming SIMD extensions 2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SS (Self-snoop)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTT (Multi-threading)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TM (Thermal monitor supported)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBE (Pending break enabled)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version: Intel(R) Xeon(R) CPU           E5645  @ 2.40GHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voltage: 1.2 V
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;External Clock: 5866 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max Speed: 4400 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Speed: 2400 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: Populated, Enabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upgrade: ZIF Socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 Cache Handle: 0x0002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 Cache Handle: 0x0003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 Cache Handle: 0x0004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial Number: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asset Tag: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part Number: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core Count: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core Enabled: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread Count: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Characteristics:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64-bit capable
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Handle 0x005A, DMI type 4, 40 bytes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Processor Information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket Designation: Node 1 Socket 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: Central Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family: Xeon MP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manufacturer: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID: 00 00 00 00 00 00 00 00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature: Type 0, Family 0, Model 0, Stepping 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flags: None
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voltage: 1.2 V
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;External Clock: 5866 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max Speed: 4400 MHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Speed: Unknown
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: Unpopulated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upgrade: ZIF Socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 Cache Handle: Not Provided
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 Cache Handle: Not Provided
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 Cache Handle: Not Provided
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial Number: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asset Tag: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part Number: Not Specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Characteristics: None
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Wednesday, June 24, 2015 6:06 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash
<br>
<p>I think trying with --mca btl ^sm makes a lot of sense and may solve the problem. I also noted that we are having trouble with the topology of several of the nodes - seeing only one socket, non-HT where you say we should see two sockets and HT-enabled. In those cases, the locality is &quot;unknown&quot; - given that those procs are on remote nodes from the one being impacted, I don't think it should cause a problem. However, it isn't correct, and that raises flags.
<br>
<p>My best guess of the root cause of that error is either we are getting bad topology info on those nodes, or we have a bug that is mishandling this scenario. It would probably be good to get this error fixed to ensure it isn't the source of the eventual crash, even though I'm not sure they are related.
<br>
<p>Bill: Can we examine one of the problem nodes? Let's pick csclprd3-0-1 (or take another one from your list - just look for one where &quot;locality&quot; is reported as &quot;unknown&quot; for the procs in the output map). Can you run lstopo on that node and send us the output? In the above map, it is reporting a single socket with 6 cores, non-HT. Is that what lstopo shows when run on the node? Is it what you expected?
<br>
<p><p>On Wed, Jun 24, 2015 at 4:07 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>
Bill,
<br>
<p>were you able to get a core file and analyze the stack with gdb ?
<br>
<p>I suspect the error occurs in mca_btl_sm_add_procs but this is just my best guess.
<br>
if this is correct, can you check the value of mca_btl_sm_component.num_smp_procs ?
<br>
<p>as a workaround, can you try
<br>
mpirun --mca btl ^sm ...
<br>
<p>I do not see how I can tackle the root cause without being able to reproduce the issue :-(
<br>
<p>can you try to reproduce the issue with the smallest hostfile, and then run lstopo on all the nodes ?
<br>
btw, you are not mixing 32 bits and 64 bits OS, are you ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>mca_btl_sm_add_procs(
<br>
<p><p><p>int mca_btl_sm_add_procs(
<br>
<p>On Wednesday, June 24, 2015, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
Gilles,
<br>
<p>All the blades only have two core Xeons (without hyperthreading) populating both their sockets. All
<br>
the x3550 nodes have hyperthreading capable Xeons and Sandybridge server CPU's. It's possible
<br>
hyperthreading has been disabled on some of these nodes though. The 3-0-n nodes are all IBM x3550
<br>
nodes while the 3-6-n nodes are all blade nodes.
<br>
<p>I have run this exact same test code successfully in the past on another cluster (~200 nodes of Sunfire X2100
<br>
2x dual-core Opterons) w/no issues on upwards of 390 slots. I even tested it recently on OpenMPI 1.8.5
<br>
on another smaller R&amp;D cluster consisting of 10 Sunfire X2100 nodes (w/2 dual core Opterons apiece).
<br>
On this particular cluster I've had success running this code on &lt; 132 slots.
<br>
<p>Anyway, here's the results of the following mpirun:
<br>
<p>mpirun -np 132 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.6/ --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3 &gt;&gt; out.txt 2&gt;&amp;1
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  csclprd3-6-1
<br>
<p>This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;Data for JOB [51718,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYSOCKET  Ranking policy: SLOT
<br>
&nbsp;Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0    New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 15
<br>
<p>&nbsp;Data for node: csclprd3-6-1         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],1]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 4    Slots in use: 4    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 4    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 4    Next node_rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/.][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./.][B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./.][B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./.][B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./.][./B]
<br>
<p>&nbsp;Data for node: csclprd3-6-5         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],2]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 4    Slots in use: 4    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 4    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 4    Next node_rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/.][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./.][B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./.][B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B][./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./.][B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./.][./B]
<br>
<p>&nbsp;Data for node: csclprd3-0-0         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],3]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 12    Slots in use: 12    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 12    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 12    Next node_rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],8]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B/B/B/B/B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],9]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./././././.][B/B/B/B/B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././.][B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],10]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B/B/B/B/B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],11]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./././././.][B/B/B/B/B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././.][./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],12]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B/B/B/B/B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],13]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./././././.][B/B/B/B/B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././.][././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],14]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 6    Node rank: 6    App rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B/B/B/B/B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],15]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 7    Node rank: 7    App rank: 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./././././.][B/B/B/B/B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././.][./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],16]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 8    Node rank: 8    App rank: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B/B/B/B/B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],17]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 9    Node rank: 9    App rank: 17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./././././.][B/B/B/B/B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././.][././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],18]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 10    Node rank: 10    App rank: 18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [B/B/B/B/B/B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B][./././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],19]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 11    Node rank: 11    App rank: 19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [./././././.][B/B/B/B/B/B]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././.][./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-1         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],4]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],20]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],21]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],22]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],23]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],24]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],25]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-2         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],5]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],26]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],27]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],28]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],29]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],30]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],31]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-3         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],6]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],32]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],33]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],34]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],35]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 35
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],36]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],37]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-4         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],7]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],38]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],39]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 39
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],40]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],41]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],42]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],43]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 43
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-5         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],8]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],44]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],45]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],46]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],47]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 47
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],48]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],49]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-6         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],9]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],50]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [B/././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],51]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 51
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./B/./././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],52]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././B/././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],53]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././B/./.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],54]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 54
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [././././B/.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],55]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [./././././B]
<br>
<p>&nbsp;Data for node: csclprd3-0-7         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],10]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 16    Next node_rank: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],56]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [BB/../../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],57]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][BB/../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],58]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../BB/../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],59]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 59
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../BB/../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],60]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../BB/../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],61]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../BB/../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],62]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 6    Node rank: 6    App rank: 62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../BB/../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],63]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 7    Node rank: 7    App rank: 63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../BB/../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],64]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 8    Node rank: 8    App rank: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../BB/../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],65]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 9    Node rank: 9    App rank: 65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../BB/../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],66]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 10    Node rank: 10    App rank: 66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../BB/../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],67]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 11    Node rank: 11    App rank: 67
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../BB/../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],68]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 12    Node rank: 12    App rank: 68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../BB/..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],69]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 13    Node rank: 13    App rank: 69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../BB/..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],70]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 14    Node rank: 14    App rank: 70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],71]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 15    Node rank: 15    App rank: 71
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../../BB]
<br>
<p>&nbsp;Data for node: csclprd3-0-8         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],11]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 16    Next node_rank: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],72]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [BB/../../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],73]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][BB/../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],74]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 74
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../BB/../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],75]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 75
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../BB/../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],76]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../BB/../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],77]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../BB/../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],78]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 6    Node rank: 6    App rank: 78
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../BB/../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],79]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 7    Node rank: 7    App rank: 79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../BB/../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],80]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 8    Node rank: 8    App rank: 80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../BB/../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],81]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 9    Node rank: 9    App rank: 81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../BB/../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],82]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 10    Node rank: 10    App rank: 82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../BB/../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],83]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 11    Node rank: 11    App rank: 83
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../BB/../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],84]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 12    Node rank: 12    App rank: 84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../BB/..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],85]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 13    Node rank: 13    App rank: 85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../BB/..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],86]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 14    Node rank: 14    App rank: 86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],87]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 15    Node rank: 15    App rank: 87
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../../BB]
<br>
<p>&nbsp;Data for node: csclprd3-0-10         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],12]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 16    Next node_rank: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],88]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [BB/../../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],89]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][BB/../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],90]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../BB/../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],91]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 91
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../BB/../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],92]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../BB/../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],93]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../BB/../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],94]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 6    Node rank: 6    App rank: 94
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../BB/../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],95]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 7    Node rank: 7    App rank: 95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../BB/../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],96]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 8    Node rank: 8    App rank: 96
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../BB/../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],97]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 9    Node rank: 9    App rank: 97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../BB/../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],98]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 10    Node rank: 10    App rank: 98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../BB/../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],99]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 11    Node rank: 11    App rank: 99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../BB/../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],100]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 12    Node rank: 12    App rank: 100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../BB/..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],101]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 13    Node rank: 13    App rank: 101
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../BB/..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],102]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 14    Node rank: 14    App rank: 102
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],103]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 15    Node rank: 15    App rank: 103
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../../BB]
<br>
<p>&nbsp;Data for node: csclprd3-0-11         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],13]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 16    Slots in use: 16    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 16    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 16    Next node_rank: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],104]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 104
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [BB/../../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],105]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 105
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][BB/../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],106]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 106
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../BB/../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],107]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 107
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../BB/../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],108]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 108
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../BB/../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],109]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 109
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../BB/../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],110]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 6    Node rank: 6    App rank: 110
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../BB/../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],111]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 7    Node rank: 7    App rank: 111
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../BB/../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],112]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 8    Node rank: 8    App rank: 112
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../BB/../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],113]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 9    Node rank: 9    App rank: 113
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../BB/../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],114]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 10    Node rank: 10    App rank: 114
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../BB/../..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],115]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 11    Node rank: 11    App rank: 115
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../BB/../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],116]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 12    Node rank: 12    App rank: 116
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../BB/..][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],117]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 13    Node rank: 13    App rank: 117
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../BB/..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],118]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 14    Node rank: 14    App rank: 118
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../BB][../../../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],119]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 15    Node rank: 15    App rank: 119
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../../../..][../../../../../../../BB]
<br>
<p>&nbsp;Data for node: csclprd3-0-12         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],14]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 6    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 6    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],120]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 120
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [BB/../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],121]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 121
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../BB/../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],122]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 122
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../BB/../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],123]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 123
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../BB/../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],124]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 124
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../BB/..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],125]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 125
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: UNKNOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../BB]
<br>
<p>&nbsp;Data for node: csclprd3-0-13         Launch id: -1    State: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[51718,0],15]    Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 12    Slots in use: 6    Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 12    Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 6    Next node_rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],126]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 0    Node rank: 0    App rank: 126
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB][../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [BB/../../../../..][../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],127]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 1    Node rank: 1    App rank: 127
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../..][BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../..][BB/../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],128]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 2    Node rank: 2    App rank: 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB][../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../BB/../../../..][../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],129]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 3    Node rank: 3    App rank: 129
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../..][BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../..][../BB/../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],130]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 4    Node rank: 4    App rank: 130
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [BB/BB/BB/BB/BB/BB][../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../BB/../../..][../../../../../..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[51718,1],131]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0    Local rank: 5    Node rank: 5    App rank: 131
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED    App_context: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locale: [../../../../../..][BB/BB/BB/BB/BB/BB]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binding: [../../../../../..][../../BB/../../..]
<br>
[csclprd3-0-13:31619] *** Process received signal ***
<br>
[csclprd3-0-13:31619] Signal: Bus error (7)
<br>
[csclprd3-0-13:31619] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:31619] Failing at address: 0x7f1374267a00
<br>
[csclprd3-0-13:31620] *** Process received signal ***
<br>
[csclprd3-0-13:31620] Signal: Bus error (7)
<br>
[csclprd3-0-13:31620] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:31620] Failing at address: 0x7fcc702a7980
<br>
[csclprd3-0-13:31615] *** Process received signal ***
<br>
[csclprd3-0-13:31615] Signal: Bus error (7)
<br>
[csclprd3-0-13:31615] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:31615] Failing at address: 0x7f8128367880
<br>
[csclprd3-0-13:31616] *** Process received signal ***
<br>
[csclprd3-0-13:31616] Signal: Bus error (7)
<br>
[csclprd3-0-13:31616] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:31616] Failing at address: 0x7fe674227a00
<br>
[csclprd3-0-13:31617] *** Process received signal ***
<br>
[csclprd3-0-13:31617] Signal: Bus error (7)
<br>
[csclprd3-0-13:31617] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:31617] Failing at address: 0x7f061c32db80
<br>
[csclprd3-0-13:31618] *** Process received signal ***
<br>
[csclprd3-0-13:31618] Signal: Bus error (7)
<br>
[csclprd3-0-13:31618] Signal code: Non-existant physical address (2)
<br>
[csclprd3-0-13:31618] Failing at address: 0x7fb8402eaa80
<br>
[csclprd3-0-13:31618] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7fb851851500]
<br>
[csclprd3-0-13:31618] [ 1] [csclprd3-0-13:31616] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7fe6843a4500]
<br>
[csclprd3-0-13:31616] [ 1] [csclprd3-0-13:31620] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7fcc80c54500]
<br>
[csclprd3-0-13:31620] [ 1] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fcc80fc9f61]
<br>
[csclprd3-0-13:31620] [ 2] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fcc80fca047]
<br>
[csclprd3-0-13:31620] [ 3] [csclprd3-0-13:31615] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7f81385ca500]
<br>
[csclprd3-0-13:31615] [ 1] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f813893ff61]
<br>
[csclprd3-0-13:31615] [ 2] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f8138940047]
<br>
[csclprd3-0-13:31615] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fb851bc6f61]
<br>
[csclprd3-0-13:31618] [ 2] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fb851bc7047]
<br>
[csclprd3-0-13:31618] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fb851ab4670]
<br>
[csclprd3-0-13:31618] [ 4] [csclprd3-0-13:31617] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7f062cfe5500]
<br>
[csclprd3-0-13:31617] [ 1] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f062d35af61]
<br>
[csclprd3-0-13:31617] [ 2] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f062d35b047]
<br>
[csclprd3-0-13:31617] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f062d248670]
<br>
[csclprd3-0-13:31617] [ 4] [csclprd3-0-13:31619] [ 0] /lib64/libpthread.so.0(+0xf500)[0x7f1384fde500]
<br>
[csclprd3-0-13:31619] [ 1] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7f1385353f61]
<br>
[csclprd3-0-13:31619] [ 2] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x167f61)[0x7fe684719f61]
<br>
[csclprd3-0-13:31616] [ 2] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7fe68471a047]
<br>
[csclprd3-0-13:31616] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fe684607670]
<br>
[csclprd3-0-13:31616] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x168047)[0x7f1385354047]
<br>
[csclprd3-0-13:31619] [ 3] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f1385241670]
<br>
[csclprd3-0-13:31619] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f13852425ab]
<br>
[csclprd3-0-13:31619] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f1385242751]
<br>
[csclprd3-0-13:31619] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f13853501c9]
<br>
[csclprd3-0-13:31619] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f1385336628]
<br>
[csclprd3-0-13:31619] [ 8] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7fcc80eb7670]
<br>
[csclprd3-0-13:31620] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fcc80eb85ab]
<br>
[csclprd3-0-13:31620] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fcc80eb8751]
<br>
[csclprd3-0-13:31620] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fcc80fc61c9]
<br>
[csclprd3-0-13:31620] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fcc80fac628]
<br>
[csclprd3-0-13:31620] [ 8] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fcc8111fd61]
<br>
[csclprd3-0-13:31620] [ 9] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x55670)[0x7f813882d670]
<br>
[csclprd3-0-13:31615] [ 4] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f813882e5ab]
<br>
[csclprd3-0-13:31615] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f813882e751]
<br>
[csclprd3-0-13:31615] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f813893c1c9]
<br>
[csclprd3-0-13:31615] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f8138922628]
<br>
[csclprd3-0-13:31615] [ 8] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f8138a95d61]
<br>
[csclprd3-0-13:31615] [ 9] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f813885d747]
<br>
[csclprd3-0-13:31615] [10] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fb851ab55ab]
<br>
[csclprd3-0-13:31618] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fb851ab5751]
<br>
[csclprd3-0-13:31618] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fb851bc31c9]
<br>
[csclprd3-0-13:31618] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fb851ba9628]
<br>
[csclprd3-0-13:31618] [ 8] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fb851d1cd61]
<br>
[csclprd3-0-13:31618] [ 9] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fb851ae4747]
<br>
[csclprd3-0-13:31618] [10] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7f062d2495ab]
<br>
[csclprd3-0-13:31617] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7f062d249751]
<br>
[csclprd3-0-13:31617] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7f062d3571c9]
<br>
[csclprd3-0-13:31617] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7f062d33d628]
<br>
[csclprd3-0-13:31617] [ 8] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f062d4b0d61]
<br>
[csclprd3-0-13:31617] [ 9] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f062d278747]
<br>
[csclprd3-0-13:31617] [10] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_grow+0x3b9)[0x7fe6846085ab]
<br>
[csclprd3-0-13:31616] [ 5] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_free_list_resize_mt+0xfb)[0x7fe684608751]
<br>
[csclprd3-0-13:31616] [ 6] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_btl_sm_add_procs+0x671)[0x7fe6847161c9]
<br>
[csclprd3-0-13:31616] [ 7] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(+0x14a628)[0x7fe6846fc628]
<br>
[csclprd3-0-13:31616] [ 8] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7fe68486fd61]
<br>
[csclprd3-0-13:31616] [ 9] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fe684637747]
<br>
[csclprd3-0-13:31616] [10] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fe68467750b]
<br>
[csclprd3-0-13:31616] [11] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:31616] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fe684021cdd]
<br>
[csclprd3-0-13:31616] [13] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:31616] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f062d2b850b]
<br>
[csclprd3-0-13:31617] [11] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:31617] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f062cc62cdd]
<br>
[csclprd3-0-13:31617] [13] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:31617] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(mca_pml_ob1_add_procs+0xff)[0x7f13854a9d61]
<br>
[csclprd3-0-13:31619] [ 9] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7f1385271747]
<br>
[csclprd3-0-13:31619] [10] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f13852b150b]
<br>
[csclprd3-0-13:31619] [11] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:31619] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f1384c5bcdd]
<br>
[csclprd3-0-13:31619] [13] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:31619] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(ompi_mpi_init+0xbda)[0x7fcc80ee7747]
<br>
[csclprd3-0-13:31620] [10] /hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fcc80f2750b]
<br>
[csclprd3-0-13:31620] [11] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:31620] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fcc808d1cdd]
<br>
[csclprd3-0-13:31620] [13] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:31620] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7f813889d50b]
<br>
[csclprd3-0-13:31615] [11] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:31615] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f8138247cdd]
<br>
[csclprd3-0-13:31615] [13] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:31615] *** End of error message ***
<br>
/hpc/apps/mpi/openmpi/1.8.6/lib/libmpi.so.1(MPI_Init+0x185)[0x7fb851b2450b]
<br>
[csclprd3-0-13:31618] [11] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400ad0]
<br>
[csclprd3-0-13:31618] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7fb8514cecdd]
<br>
[csclprd3-0-13:31618] [13] /hpc/home/lanew/mpi/openmpi/ProcessColors3[0x400999]
<br>
[csclprd3-0-13:31618] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 126 with PID 0 on node csclprd3-0-13 exited on signal 7 (Bus error).
<br>
--------------------------------------------------------------------------
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Tuesday, June 23, 2015 6:20 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash
<br>
<p>Wow - that is one sick puppy! I see that some nodes are reporting not-bound for their procs, and the rest are binding to socket (as they should). Some of your nodes clearly do not have hyper threads enabled (or only have single-thread cores on them), and have 2 cores/socket. Other nodes have 8 cores/socket with hyper threads enabled, while still others have 6 cores/socket and HT enabled.
<br>
<p>I don't see anyone binding to a single HT if multiple HTs/core are available. I think you are being fooled by those nodes that either don't have HT enabled, or have only 1 HT/core.
<br>
<p>In both cases, it is node 13 that is the node that fails. I also note that you said everything works okay with &lt; 132 ranks, and node 13 hosts ranks 127-131. So node 13 would host ranks even if you reduced the number in the job to 131. This would imply that it probably isn't something wrong with the node itself.
<br>
<p>Is there any way you could run a job of this size on a homogeneous cluster? The procs all show bindings that look right, but I'm wondering if the heterogeneity is the source of the trouble here. We may be communicating the binding pattern incorrectly and giving bad info to the backend daemon.
<br>
<p>Also, rather than --report-bindings, use &quot;--display-devel-map&quot; on the command line and let's see what the mapper thinks it did. If there is a problem with placement, that is where it would exist.
<br>
<p><p>On Tue, Jun 23, 2015 at 5:12 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
Ralph,
<br>
<p>There is something funny going on, the trace from the
<br>
runs w/the debug build aren't showing any differences from
<br>
what I got earlier. However, I did do a run w/the --bind-to core
<br>
switch and was surprised to see that hyperthreading cores were
<br>
sometimes being used.
<br>
<p>Here's the traces that I have:
<br>
<p>mpirun -np 132 -report-bindings --prefix /hpc/apps/mpi/openmpi/1.8.6/ --hostfile hostfile-noslots --mca btl_tcp_if_include eth0 --hetero-nodes /hpc/home/lanew/mpi/openmpi/ProcessColors3
<br>
[csclprd3-0-5:16802] MCW rank 44 is not bound (or bound to all available processors)
<br>
[csclprd3-0-5:16802] MCW rank 45 is not bound (or bound to all available processors)
<br>
[csclprd3-0-5:16802] MCW rank 46 is not bound (or bound to all available processors)
<br>
[csclprd3-6-5:12480] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[csclprd3-6-5:12480] MCW rank 5 bound to socket 1[core 2[hwt 0]], socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
[csclprd3-6-5:12480] MCW rank 6 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[csclprd3-6-5:12480] MCW rank 7 bound to socket 1[core 2[hwt 0]], socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
[csclprd3-0-5:16802] MCW rank 47 is not bound (or bound to all available processors)
<br>
[csclprd3-0-5:16802] MCW rank 48 is not bound (or bound to all available processors)
<br>
[csclprd3-0-5:16802] MCW rank 49 is not bound (or bound to all available processors)
<br>
[csclprd3-0-1:14318] MCW rank 22 is not bound (or bound to all available processors)
<br>
[csclprd3-0-1:14318] MCW rank 23 is not bound (or bound to all available processors)
<br>
[csclprd3-0-1:14318] MCW rank 24 is not bound (or bound to all available processors)
<br>
[csclprd3-6-1:24682] MCW rank 3 bound to socket 1[core 2[hwt 0]], socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
[csclprd3-6-1:24682] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[csclprd3-0-1:14318] MCW rank 25 is not bound (or bound to all available processors)
<br>
[csclprd3-0-1:14318] MCW rank 20 is not bound (or bound to all available processors)
<br>
[csclprd3-0-3:13827] MCW rank 34 is not bound (or bound to all available processors)
<br>
[csclprd3-0-1:14318] MCW rank 21 is not bound (or bound to all available processors)
<br>
[csclprd3-0-3:13827] MCW rank 35 is not bound (or bound to all available processors)
<br>
[csclprd3-6-1:24682] MCW rank 1 bound to socket 1[core 2[hwt 0]], socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
[csclprd3-0-3:13827] MCW rank 36 is not bound (or bound to all available processors)
<br>
[csclprd3-6-1:24682] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[csclprd3-0-6:30371] MCW rank 51 is not bound (or bound to all available processors)
<br>
[csclprd3-0-6:30371] MCW rank 52 is not bound (or bound to all available processors)
<br>
[csclprd3-0-6:30371] MCW rank 53 is not bound (or bound to all available processors)
<br>
[csclprd3-0-2:05825] MCW rank 30 is not bound (or bound to all available processors)
<br>
[csclprd3-0-6:30371] MCW rank 54 is not bound (or bound to all available processors)
<br>
[csclprd3-0-3:13827] MCW rank 37 is not bound (or bound to all available processors)
<br>
[csclprd3-0-2:05825] MCW rank 31 is not bound (or bound to all available processors)
<br>
[csclprd3-0-3:13827] MCW rank 32 is not bound (or bound to all available processors)
<br>
[csclprd3-0-6:30371] MCW rank 55 is not bound (or bound to all available processors)
<br>
[csclprd3-0-3:13827] MCW rank 33 is not bound (or bound to all available processors)
<br>
[csclprd3-0-6:30371] MCW rank 50 is not bound (or bound to all available processors)
<br>
[csclprd3-0-2:05825] MCW rank 26 is not bound (or bound to all available processors)
<br>
[csclprd3-0-2:05825] MCW rank 27 is not bound (or bound to all available processors)
<br>
[csclprd3-0-2:05825] MCW rank 28 is not bound (or bound to all available processors)
<br>
[csclprd3-0-2:05825] MCW rank 29 is not bound (or bound to all available processors)
<br>
[csclprd3-0-12:12383] MCW rank 121 is not bound (or bound to all available processors)
<br>
[csclprd3-0-12:12383] MCW rank 122 is not bound (or bound to all available processors)
<br>
[csclprd3-0-12:12383] MCW rank 123 is not bound (or bound to all available processors)
<br>
[csclprd3-0-12:12383] MCW rank 124 is not bound (or bound to all available processors)
<br>
[csclprd3-0-12:12383] MCW rank 125 is not bound (or bound to all available processors)
<br>
[csclprd3-0-12:12383] MCW rank 120 is not bound (or bound to all available processors)
<br>
[csclprd3-0-0:31079] MCW rank 13 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[csclprd3-0-0:31079] MCW rank 14 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[csclprd3-0-0:31079] MCW rank 15 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[csclprd3-0-0:31079] MCW rank 16 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[csclprd3-0-7:20515] MCW rank 68 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-10:19096] MCW rank 100 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-7:20515] MCW rank 69 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-10:19096] MCW rank 101 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-0:31079] MCW rank 17 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[csclprd3-0-7:20515] MCW rank 70 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-10:19096] MCW rank 102 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-11:31636] MCW rank 116 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-11:31636] MCW rank 117 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-0:31079] MCW rank 18 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[csclprd3-0-11:31636] MCW rank 118 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-0:31079] MCW rank 19 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[csclprd3-0-7:20515] MCW rank 71 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-10:19096] MCW rank 103 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-0:31079] MCW rank 8 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[csclprd3-0-0:31079] MCW rank 9 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[csclprd3-0-10:19096] MCW rank 88 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-11:31636] MCW rank 119 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-7:20515] MCW rank 56 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-0:31079] MCW rank 10 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[csclprd3-0-7:20515] MCW rank 57 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-10:19096] MCW rank 89 bound to socket 1[core 8[hwt 0-1]], socket 1[core 9[hwt 0-1]], socket 1[core 10[hwt 0-1]], socket 1[core 11[hwt 0-1]], socket 1[core 12[hwt 0-1]], socket 1[core 13[hwt 0-1]], socket 1[core 14[hwt 0-1]], socket 1[core 15[hwt 0-1]]: [../../../../../../../..][BB/BB/BB/BB/BB/BB/BB/BB]
<br>
[csclprd3-0-11:31636] MCW rank 104 bound to socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]], socket 0[core 4[hwt 0-1]], socket 0[core 5[hwt 0-1]], socket 0[core 6[hwt 0-1]], socket 0[core 7[hwt 0-1]]: [BB/BB/BB/BB/BB/BB/BB/BB][../../../../../../../..]
<br>
[csclprd3-0-0:31079] MCW rank 11 bound to socket 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
<br>
[csclprd3-0-0:31079] MCW rank 12 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.]
<br>
[csclprd3-0-4:30348] MCW rank 42 is not bound (or bound to all
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27185.php">http://www.open-mpi.org/community/lists/users/2015/06/27185.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27203.php">Nathan Hjelm: "Re: [OMPI users] vader/sm not being picked up"</a>
<li><strong>In reply to:</strong> <a href="27186.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Reply:</strong> <a href="27205.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
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
