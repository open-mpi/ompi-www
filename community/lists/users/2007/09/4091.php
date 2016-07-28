<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 08:57:36 2007" -->
<!-- isoreceived="20070928125736" -->
<!-- sent="Fri, 28 Sep 2007 08:57:15 -0400" -->
<!-- isosent="20070928125715" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self" -->
<!-- id="46FCFA2B.907_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.10822.1190979548.6844.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-28 08:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="4090.php">Hammad Siddiqi: "[OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hammad,
<br>
<p>It looks to me like none of the btl's could resolve a route between the 
<br>
node that process rank 0 is on to the other nodes.
<br>
I would suggest trying np=2 over a couple pairs of machines to see if 
<br>
that works and you can truly be sure that only the
<br>
first node is having this problem.
<br>
<p>It also might be helpful as a sanity check to use the tcp btl instead of 
<br>
mx and see if you get more traction with that.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; *From:* Hammad Siddiqi (/hammad.siddiqi_at_[hidden]/)
</span><br>
<span class="quotelev1">&gt; *Date:* 2007-09-28 07:38:01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Sun HPC Toolkit 7.0 to compile and run my C MPI programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested the myrinet installations using myricoms own test programs.
</span><br>
<span class="quotelev1">&gt; The Myricom software stack I am using is MX and the vesrion is
</span><br>
<span class="quotelev1">&gt; mx2g-1.1.7, mx_mapper is also used.
</span><br>
<span class="quotelev1">&gt; We have 4 nodes having 8 dual core processors each (Sun Fire v890) and
</span><br>
<span class="quotelev1">&gt; the operating system is
</span><br>
<span class="quotelev1">&gt; Solaris 10 (SunOS indus1 5.10 Generic_125100-10 sun4u sparc
</span><br>
<span class="quotelev1">&gt; SUNW,Sun-Fire-V890).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The contents of machine file are:
</span><br>
<span class="quotelev1">&gt; indus1
</span><br>
<span class="quotelev1">&gt; indus2
</span><br>
<span class="quotelev1">&gt; indus3
</span><br>
<span class="quotelev1">&gt; indus4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of *mx_info* on each node is given below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====*=
</span><br>
<span class="quotelev1">&gt; indus1
</span><br>
<span class="quotelev1">&gt; *======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev1">&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev1">&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 297218
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                         
</span><br>
<span class="quotelev1">&gt;             ROUTE COUNT
</span><br>
<span class="quotelev1">&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev1">&gt; ----- -----------
</span><br>
<span class="quotelev1">&gt; --------- ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:ad:7c indus1:0 1,1
</span><br>
<span class="quotelev1">&gt;    2) 00:60:dd:47:ad:68 indus4:0 8,3
</span><br>
<span class="quotelev1">&gt;    3) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev1">&gt;    4) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev1">&gt;    5) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev1">&gt;    6) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev1">&gt;    7) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev1">&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev1">&gt;    9) 00:60:dd:47:ad:5f ravi2:1 1,1
</span><br>
<span class="quotelev1">&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; *indus2*
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev1">&gt; MX Build: @indus2:/opt/mx2g-1.1.7rc3 Thu May 31 11:24:03 PKT 2007
</span><br>
<span class="quotelev1">&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:b3:ab
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 296636
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev1">&gt; COUNT
</span><br>
<span class="quotelev1">&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev1">&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev1">&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev1">&gt;    3) 00:60:dd:47:b3:e8 indus4:1 8,3
</span><br>
<span class="quotelev1">&gt;    4) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev1">&gt;    5) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev1">&gt;    6) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev1">&gt;    8) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev1">&gt;    9) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev1">&gt;   10) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev1">&gt;   11) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link down
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:b3:c3
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 296612
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; *indus3*
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev1">&gt; MX Build: @indus3:/opt/mx2g-1.1.7rc3 Thu May 31 11:29:03 PKT 2007
</span><br>
<span class="quotelev1">&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:ad:66
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 297240
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev1">&gt; COUNT
</span><br>
<span class="quotelev1">&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev1">&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev1">&gt;    1) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev1">&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev1">&gt;    3) 00:60:dd:47:b3:e8 indus4:1 6,3
</span><br>
<span class="quotelev1">&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev1">&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev1">&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev1">&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev1">&gt;    9) 00:60:dd:47:ad:5f ravi2:1 7,3
</span><br>
<span class="quotelev1">&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:ad:76
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 297224
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev1">&gt; COUNT
</span><br>
<span class="quotelev1">&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev1">&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev1">&gt;    1) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev1">&gt;    2) 00:60:dd:47:ad:68 indus4:0 7,3
</span><br>
<span class="quotelev1">&gt;    3) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev1">&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev1">&gt;    5) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev1">&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev1">&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev1">&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev1">&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; *indus4*
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev1">&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev1">&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:ad:68
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 297238
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev1">&gt; COUNT
</span><br>
<span class="quotelev1">&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev1">&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev1">&gt;    1) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev1">&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev1">&gt;    3) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev1">&gt;    4) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev1">&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev1">&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev1">&gt;    8) 00:60:dd:47:b3:5a ravi2:0 7,3
</span><br>
<span class="quotelev1">&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev1">&gt;   10) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address: 00:60:dd:47:b3:e8
</span><br>
<span class="quotelev1">&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev1">&gt;         Part number: 09-03392
</span><br>
<span class="quotelev1">&gt;         Serial number: 296575
</span><br>
<span class="quotelev1">&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev1">&gt; COUNT
</span><br>
<span class="quotelev1">&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev1">&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:ad:68 indus4:0 6,3
</span><br>
<span class="quotelev1">&gt;    1) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev1">&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev1">&gt;    3) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev1">&gt;    4) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev1">&gt;    5) 00:60:dd:47:b3:ab indus2:0 8,3
</span><br>
<span class="quotelev1">&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev1">&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev1">&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev1">&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output from *ompi_info* is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: 0
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev1">&gt;  Configured architecture: sparc-sun-solaris2.10
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Mar 30 12:49:36 EDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: burpen-on10-0
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Mar 30 13:10:46 EDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: burpen-on10-0
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: trivial
</span><br>
<span class="quotelev1">&gt;               C compiler: cc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: CC
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: f77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run a simple hello world program by issuing following 
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpirun -np 4 -mca btl mx,sm,self -machinefile machines ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *The following error appears:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-*** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output from more */var/run/fms/fma.log*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 NIC 0: M3F-PCIXF-2 s/n=297218 1 ports, speed=2G
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 NIC 1: M3F-PCIXF-2 s/n=297248 1 ports, speed=2G
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:5e
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 fms-1.2.1 fma starting
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 Mapper was 00:00:00:00:00:00, l=0, is now
</span><br>
<span class="quotelev1">&gt; 00:60:dd:47:ad:7c, l=1
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:50 2007 Mapping fabric...
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:54 2007 Mapper was 00:60:dd:47:ad:7c, l=1, is now
</span><br>
<span class="quotelev1">&gt; 00:60:dd:47:b3:e8, l=1
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:54 2007 Cancelling mapping
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:59 2007 5 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:59 2007 map version is 1987557551
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:59 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:59 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:59 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Sat Sep 22 10:47:59 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:46 2007 Requesting remap from indus4
</span><br>
<span class="quotelev1">&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:5a, lev=1, pkt_type=0
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:51 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:51 2007 map version is 1987557552
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:51 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:51 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:51 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:26:51 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:17 2007 Requesting remap from indus4
</span><br>
<span class="quotelev1">&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:bf, lev=1, pkt_type=0
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:19 2007 map version is 1987557553
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:19 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:19 2007 Found NIC 1 at index 4!
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:19 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 14:35:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:47:52 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:47:52 2007 map version is 1987557554
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:47:52 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:47:52 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:47:52 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:47:52 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:02 2007 Requesting remap from indus4
</span><br>
<span class="quotelev1">&gt; (00:60:dd:47:b3:e8): empty port x0p15 is no longer empty
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:07 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:07 2007 map version is 1987557555
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:07 2007 Found NIC 0 at index 4!
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:07 2007 Found NIC 1 at index 3!
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:07 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:07 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:23 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:23 2007 map version is 1987557556
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:23 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:23 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:23 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Tue Sep 25 21:52:23 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:01 2007 Requesting remap from indus4
</span><br>
<span class="quotelev1">&gt; (00:60:dd:47:b3:e8): verify failed x1p2, nic 0, port 0 route=-9 4 10
</span><br>
<span class="quotelev1">&gt; reply=-10 -4 9 , remote=ravi2 NIC
</span><br>
<span class="quotelev1">&gt;  1, p0 mac=00:60:dd:47:ad:5f
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:06 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:06 2007 map version is 1987557557
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:06 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:06 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:06 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:07:06 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:11:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:11:19 2007 map version is 1987557558
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:11:19 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:11:19 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:11:19 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Wed Sep 26 05:11:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:45:37 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:45:37 2007 map version is 1987557559
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:45:37 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:45:37 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:45:37 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:45:37 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:51:02 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:51:02 2007 map version is 1987557560
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:51:02 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:51:02 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:51:02 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Thu Sep 27 11:51:02 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:10 2007 Requesting remap from indus4
</span><br>
<span class="quotelev1">&gt; (00:60:dd:47:b3:e8): verify failed x5p0, nic 1, port 0 route=-8 15 6
</span><br>
<span class="quotelev1">&gt; reply=-6 -15 8 , remote=ravi1 NIC
</span><br>
<span class="quotelev1">&gt;  0, p0 mac=00:60:dd:47:b3:bf
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:24 2007 6 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:24 2007 map version is 1987557561
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:24 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:24 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:24 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:24 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:44 2007 7 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:44 2007 map version is 1987557562
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:44 2007 Found NIC 0 at index 7!
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:44 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:44 2007 map seems OK
</span><br>
<span class="quotelev1">&gt; Fri Sep 28 13:27:44 2007 Routing took 0 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any suggestion or comments why this error appear and whats
</span><br>
<span class="quotelev1">&gt; the solution to this problem. I have checked community mailing list for
</span><br>
<span class="quotelev1">&gt; this problem and found few topics related to this, but could find any
</span><br>
<span class="quotelev1">&gt; solution. Any suggestion or comments will be highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code that i m trying to run is given as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, size, tag, rc, i;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;   char message[20];
</span><br>
<span class="quotelev1">&gt;   rc = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   rc = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   rc = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   tag = 100;
</span><br>
<span class="quotelev1">&gt;   if(rank == 0) {
</span><br>
<span class="quotelev1">&gt;     strcpy(message, &quot;Hello, world&quot;);
</span><br>
<span class="quotelev1">&gt;     for (i=1; i&lt;size; i++)
</span><br>
<span class="quotelev1">&gt;       rc = MPI_Send(message, 13, MPI_CHAR, i, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;     rc = MPI_Recv(message, 13, MPI_CHAR, 0, tag, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;   printf( &quot;node %d : %.13s\n&quot;, rank,message);
</span><br>
<span class="quotelev1">&gt;   rc = MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Looking forward.
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Hammad Siddiqi
</span><br>
<span class="quotelev1">&gt; Center for High Performance Scientific Computing
</span><br>
<span class="quotelev1">&gt; NUST Institute of Information Technology,
</span><br>
<span class="quotelev1">&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev1">&gt; Rawalpindi, Pakistan. 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="4090.php">Hammad Siddiqi: "[OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="4098.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
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
