<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 07:39:07 2007" -->
<!-- isoreceived="20070928113907" -->
<!-- sent="Fri, 28 Sep 2007 16:38:01 +0500" -->
<!-- isosent="20070928113801" -->
<!-- name="Hammad Siddiqi" -->
<!-- email="hammad.siddiqi_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self" -->
<!-- id="46FCE799.9060406_at_niit.edu.pk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Hammad Siddiqi (<em>hammad.siddiqi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-28 07:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4091.php">Terry Dontje: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self"</a>
<li><strong>Previous message:</strong> <a href="4089.php">Massimo Cafaro: "[OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using Sun HPC Toolkit 7.0 to compile and run my C MPI programs.
<br>
<p>I have tested the myrinet installations using myricoms own test programs.
<br>
The Myricom software stack I am using is MX and the vesrion is 
<br>
mx2g-1.1.7, mx_mapper is also used.
<br>
We have 4 nodes having 8 dual core processors each (Sun Fire v890) and 
<br>
the operating system is
<br>
Solaris 10 (SunOS indus1 5.10 Generic_125100-10 sun4u sparc 
<br>
SUNW,Sun-Fire-V890).
<br>
<p>The contents of machine file are:
<br>
indus1
<br>
indus2
<br>
indus3
<br>
indus4
<br>
<p>The output of *mx_info* on each node is given below
<br>
<p>=====*=
<br>
indus1
<br>
*======
<br>
<p>MX Version: 1.1.7rc3cvs1_1_fixes
<br>
MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
<br>
2 Myrinet boards installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:ad:7c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  297218
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----            -----------             
<br>
---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:ad:7c indus1:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ad:68 indus4:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:b3:e8 indus4:1                                  7,3
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:b3:ab indus2:0                                  7,3
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:ad:66 indus3:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;6) 00:60:dd:47:ad:76 indus3:1                                  8,3
<br>
&nbsp;&nbsp;&nbsp;7) 00:60:dd:47:ad:77 jhelum1:0                                 8,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:b3:5a ravi2:0                                   8,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:ad:5f ravi2:1                                   1,1
<br>
&nbsp;&nbsp;10) 00:60:dd:47:b3:bf ravi1:0                                   8,3
<br>
===================================================================
<br>
<p>======
<br>
*indus2*
<br>
======
<br>
<p>MX Version: 1.1.7rc3cvs1_1_fixes
<br>
MX Build: @indus2:/opt/mx2g-1.1.7rc3 Thu May 31 11:24:03 PKT 2007
<br>
2 Myrinet boards installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:b3:ab
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  296636
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:b3:ab indus2:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ad:68 indus4:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:b3:e8 indus4:1                                  8,3
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:ad:66 indus3:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:ad:76 indus3:1                                  7,3
<br>
&nbsp;&nbsp;&nbsp;6) 00:60:dd:47:ad:77 jhelum1:0                                 7,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:ad:7c indus1:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:b3:5a ravi2:0                                   8,3
<br>
&nbsp;&nbsp;10) 00:60:dd:47:ad:5f ravi2:1                                   8,3
<br>
&nbsp;&nbsp;11) 00:60:dd:47:b3:bf ravi1:0                                   7,3
<br>
===================================================================
<br>
Instance #1:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link down
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:b3:c3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  296612
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>======
<br>
*indus3*
<br>
======
<br>
MX Version: 1.1.7rc3cvs1_1_fixes
<br>
MX Build: @indus3:/opt/mx2g-1.1.7rc3 Thu May 31 11:29:03 PKT 2007
<br>
2 Myrinet boards installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:ad:66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  297240
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:ad:66 indus3:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;1) 00:60:dd:47:ad:76 indus3:1                                  8,3
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ad:68 indus4:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:b3:e8 indus4:1                                  6,3
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:ad:77 jhelum1:0                                 8,3
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:b3:ab indus2:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;7) 00:60:dd:47:ad:7c indus1:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:b3:5a ravi2:0                                   8,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:ad:5f ravi2:1                                   7,3
<br>
&nbsp;&nbsp;10) 00:60:dd:47:b3:bf ravi1:0                                   8,3
<br>
===================================================================
<br>
Instance #1:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:ad:76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  297224
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:ad:66 indus3:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;1) 00:60:dd:47:ad:76 indus3:1                                  1,1
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ad:68 indus4:0                                  7,3
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:b3:e8 indus4:1                                  1,1
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:ad:77 jhelum1:0                                 1,1
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:b3:ab indus2:0                                  7,3
<br>
&nbsp;&nbsp;&nbsp;7) 00:60:dd:47:ad:7c indus1:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:b3:5a ravi2:0                                   6,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:ad:5f ravi2:1                                   8,3
<br>
&nbsp;&nbsp;10) 00:60:dd:47:b3:bf ravi1:0                                   8,3
<br>
<p><p>======
<br>
*indus4*
<br>
======
<br>
<p>MX Version: 1.1.7rc3cvs1_1_fixes
<br>
MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
<br>
2 Myrinet boards installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:ad:68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  297238
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:ad:68 indus4:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;1) 00:60:dd:47:b3:e8 indus4:1                                  7,3
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ad:77 jhelum1:0                                 7,3
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:ad:66 indus3:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:ad:76 indus3:1                                  7,3
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:b3:ab indus2:0                                  1,1
<br>
&nbsp;&nbsp;&nbsp;7) 00:60:dd:47:ad:7c indus1:0                                  7,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:b3:5a ravi2:0                                   7,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:ad:5f ravi2:1                                   8,3
<br>
&nbsp;&nbsp;10) 00:60:dd:47:b3:bf ravi1:0                                   7,3
<br>
===================================================================
<br>
Instance #1:  333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status:         Running, P0: Link up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAC Address:    00:60:dd:47:b3:e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product code:   M3F-PCIXF-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Part number:    09-03392
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serial number:  296575
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapper:         00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapped hosts:   10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUTE COUNT
<br>
INDEX    MAC ADDRESS     HOST NAME                                P0
<br>
-----    -----------     ---------                                ---
<br>
&nbsp;&nbsp;&nbsp;0) 00:60:dd:47:ad:68 indus4:0                                  6,3
<br>
&nbsp;&nbsp;&nbsp;1) 00:60:dd:47:b3:e8 indus4:1                                  1,1
<br>
&nbsp;&nbsp;&nbsp;2) 00:60:dd:47:ad:77 jhelum1:0                                 1,1
<br>
&nbsp;&nbsp;&nbsp;3) 00:60:dd:47:ad:66 indus3:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;4) 00:60:dd:47:ad:76 indus3:1                                  1,1
<br>
&nbsp;&nbsp;&nbsp;5) 00:60:dd:47:b3:ab indus2:0                                  8,3
<br>
&nbsp;&nbsp;&nbsp;7) 00:60:dd:47:ad:7c indus1:0                                  7,3
<br>
&nbsp;&nbsp;&nbsp;8) 00:60:dd:47:b3:5a ravi2:0                                   6,3
<br>
&nbsp;&nbsp;&nbsp;9) 00:60:dd:47:ad:5f ravi2:1                                   8,3
<br>
&nbsp;&nbsp;10) 00:60:dd:47:b3:bf ravi1:0                                   8,3
<br>
<p><p>The output from *ompi_info* is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.1r14096-ct7b030r1838
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.1r14096-ct7b030r1838
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.1r14096-ct7b030r1838
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/SUNWhpc/HPC7.0
<br>
&nbsp;Configured architecture: sparc-sun-solaris2.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Mar 30 12:49:36 EDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: burpen-on10-0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Mar 30 13:10:46 EDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: burpen-on10-0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: trivial
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: CC
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: f77
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: f95
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: printstack (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
<br>
<p>When I try to run a simple hello world program by issuing following command:
<br>
<p>*mpirun -np 4 -mca btl mx,sm,self  -machinefile machines ./hello
<br>
<p>*The following error appears:
<br>
<p>--------------------------------------------------------------------------
<br>
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>The output from more */var/run/fms/fma.log*
<br>
<p>Sat Sep 22 10:47:50 2007 NIC 0: M3F-PCIXF-2 s/n=297218 1 ports, speed=2G
<br>
Sat Sep 22 10:47:50 2007        mac = 00:60:dd:47:ad:7c
<br>
Sat Sep 22 10:47:50 2007 NIC 1: M3F-PCIXF-2 s/n=297248 1 ports, speed=2G
<br>
Sat Sep 22 10:47:50 2007        mac = 00:60:dd:47:ad:5e
<br>
Sat Sep 22 10:47:50 2007 fms-1.2.1 fma starting
<br>
Sat Sep 22 10:47:50 2007 Mapper was 00:00:00:00:00:00, l=0, is now 
<br>
00:60:dd:47:ad:7c, l=1
<br>
Sat Sep 22 10:47:50 2007 Mapping fabric...
<br>
Sat Sep 22 10:47:54 2007 Mapper was 00:60:dd:47:ad:7c, l=1, is now 
<br>
00:60:dd:47:b3:e8, l=1
<br>
Sat Sep 22 10:47:54 2007 Cancelling mapping
<br>
Sat Sep 22 10:47:59 2007   5 hosts, 8 nics, 6 xbars, 40 links
<br>
Sat Sep 22 10:47:59 2007 map version is 1987557551
<br>
Sat Sep 22 10:47:59 2007 Found NIC 0 at index 3!
<br>
Sat Sep 22 10:47:59 2007 Found NIC 1 at index 2!
<br>
Sat Sep 22 10:47:59 2007 map seems OK
<br>
Sat Sep 22 10:47:59 2007 Routing took 0 seconds
<br>
Mon Sep 24 14:26:46 2007 Requesting remap from indus4 
<br>
(00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:5a, lev=1, pkt_type=0
<br>
Mon Sep 24 14:26:51 2007   6 hosts, 10 nics, 6 xbars, 42 links
<br>
Mon Sep 24 14:26:51 2007 map version is 1987557552
<br>
Mon Sep 24 14:26:51 2007 Found NIC 0 at index 3!
<br>
Mon Sep 24 14:26:51 2007 Found NIC 1 at index 2!
<br>
Mon Sep 24 14:26:51 2007 map seems OK
<br>
Mon Sep 24 14:26:51 2007 Routing took 0 seconds
<br>
Mon Sep 24 14:35:17 2007 Requesting remap from indus4 
<br>
(00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:bf, lev=1, pkt_type=0
<br>
Mon Sep 24 14:35:19 2007   7 hosts, 11 nics, 6 xbars, 43 links
<br>
Mon Sep 24 14:35:19 2007 map version is 1987557553
<br>
Mon Sep 24 14:35:19 2007 Found NIC 0 at index 5!
<br>
Mon Sep 24 14:35:19 2007 Found NIC 1 at index 4!
<br>
Mon Sep 24 14:35:19 2007 map seems OK
<br>
Mon Sep 24 14:35:19 2007 Routing took 0 seconds
<br>
Tue Sep 25 21:47:52 2007   6 hosts, 9 nics, 6 xbars, 41 links
<br>
Tue Sep 25 21:47:52 2007 map version is 1987557554
<br>
Tue Sep 25 21:47:52 2007 Found NIC 0 at index 3!
<br>
Tue Sep 25 21:47:52 2007 Found NIC 1 at index 2!
<br>
Tue Sep 25 21:47:52 2007 map seems OK
<br>
Tue Sep 25 21:47:52 2007 Routing took 0 seconds
<br>
Tue Sep 25 21:52:02 2007 Requesting remap from indus4 
<br>
(00:60:dd:47:b3:e8): empty port x0p15 is no longer empty
<br>
Tue Sep 25 21:52:07 2007   6 hosts, 10 nics, 6 xbars, 42 links
<br>
Tue Sep 25 21:52:07 2007 map version is 1987557555
<br>
Tue Sep 25 21:52:07 2007 Found NIC 0 at index 4!
<br>
Tue Sep 25 21:52:07 2007 Found NIC 1 at index 3!
<br>
Tue Sep 25 21:52:07 2007 map seems OK
<br>
Tue Sep 25 21:52:07 2007 Routing took 0 seconds
<br>
Tue Sep 25 21:52:23 2007   7 hosts, 11 nics, 6 xbars, 43 links
<br>
Tue Sep 25 21:52:23 2007 map version is 1987557556
<br>
Tue Sep 25 21:52:23 2007 Found NIC 0 at index 6!
<br>
Tue Sep 25 21:52:23 2007 Found NIC 1 at index 5!
<br>
Tue Sep 25 21:52:23 2007 map seems OK
<br>
Tue Sep 25 21:52:23 2007 Routing took 0 seconds
<br>
Wed Sep 26 05:07:01 2007 Requesting remap from indus4 
<br>
(00:60:dd:47:b3:e8): verify failed x1p2, nic 0, port 0 route=-9 4 10  
<br>
reply=-10 -4 9 , remote=ravi2 NIC
<br>
&nbsp;1, p0 mac=00:60:dd:47:ad:5f
<br>
Wed Sep 26 05:07:06 2007   6 hosts, 9 nics, 6 xbars, 41 links
<br>
Wed Sep 26 05:07:06 2007 map version is 1987557557
<br>
Wed Sep 26 05:07:06 2007 Found NIC 0 at index 3!
<br>
Wed Sep 26 05:07:06 2007 Found NIC 1 at index 2!
<br>
Wed Sep 26 05:07:06 2007 map seems OK
<br>
Wed Sep 26 05:07:06 2007 Routing took 0 seconds
<br>
Wed Sep 26 05:11:19 2007   7 hosts, 11 nics, 6 xbars, 43 links
<br>
Wed Sep 26 05:11:19 2007 map version is 1987557558
<br>
Wed Sep 26 05:11:19 2007 Found NIC 0 at index 3!
<br>
Wed Sep 26 05:11:19 2007 Found NIC 1 at index 2!
<br>
Wed Sep 26 05:11:19 2007 map seems OK
<br>
Wed Sep 26 05:11:19 2007 Routing took 0 seconds
<br>
Thu Sep 27 11:45:37 2007   6 hosts, 9 nics, 6 xbars, 41 links
<br>
Thu Sep 27 11:45:37 2007 map version is 1987557559
<br>
Thu Sep 27 11:45:37 2007 Found NIC 0 at index 6!
<br>
Thu Sep 27 11:45:37 2007 Found NIC 1 at index 5!
<br>
Thu Sep 27 11:45:37 2007 map seems OK
<br>
Thu Sep 27 11:45:37 2007 Routing took 0 seconds
<br>
Thu Sep 27 11:51:02 2007   7 hosts, 11 nics, 6 xbars, 43 links
<br>
Thu Sep 27 11:51:02 2007 map version is 1987557560
<br>
Thu Sep 27 11:51:02 2007 Found NIC 0 at index 6!
<br>
Thu Sep 27 11:51:02 2007 Found NIC 1 at index 5!
<br>
Thu Sep 27 11:51:02 2007 map seems OK
<br>
Thu Sep 27 11:51:02 2007 Routing took 0 seconds
<br>
Fri Sep 28 13:27:10 2007 Requesting remap from indus4 
<br>
(00:60:dd:47:b3:e8): verify failed x5p0, nic 1, port 0 route=-8 15 6  
<br>
reply=-6 -15 8 , remote=ravi1 NIC
<br>
&nbsp;0, p0 mac=00:60:dd:47:b3:bf
<br>
Fri Sep 28 13:27:24 2007   6 hosts, 8 nics, 6 xbars, 40 links
<br>
Fri Sep 28 13:27:24 2007 map version is 1987557561
<br>
Fri Sep 28 13:27:24 2007 Found NIC 0 at index 5!
<br>
Fri Sep 28 13:27:24 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
<br>
Fri Sep 28 13:27:24 2007 map seems OK
<br>
Fri Sep 28 13:27:24 2007 Routing took 0 seconds
<br>
Fri Sep 28 13:27:44 2007   7 hosts, 10 nics, 6 xbars, 42 links
<br>
Fri Sep 28 13:27:44 2007 map version is 1987557562
<br>
Fri Sep 28 13:27:44 2007 Found NIC 0 at index 7!
<br>
Fri Sep 28 13:27:44 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
<br>
Fri Sep 28 13:27:44 2007 map seems OK
<br>
Fri Sep 28 13:27:44 2007 Routing took 0 seconds
<br>
<p>Do you have any suggestion or comments why this error appear and whats 
<br>
the solution to this problem. I have checked community mailing list for 
<br>
this problem and found few topics related to this, but could find any 
<br>
solution. Any suggestion or comments will be highly appreciated.
<br>
<p>The code that i m trying to run is given as follows:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank, size, tag, rc, i;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;char message[20];
<br>
&nbsp;&nbsp;rc = MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;rc = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;rc = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;tag = 100;
<br>
&nbsp;&nbsp;if(rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;strcpy(message, &quot;Hello, world&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=1; i&lt;size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Send(message, 13, MPI_CHAR, i, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Recv(message, 13, MPI_CHAR, 0, tag, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;printf( &quot;node %d : %.13s\n&quot;, rank,message);
<br>
&nbsp;&nbsp;rc = MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Thanks.
<br>
Looking forward.
<br>
Best regards,
<br>
Hammad Siddiqi
<br>
Center for High Performance Scientific Computing
<br>
NUST Institute of Information Technology,
<br>
National University of Sciences and Technology,
<br>
Rawalpindi, Pakistan.
<br>
<p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4091.php">Terry Dontje: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self"</a>
<li><strong>Previous message:</strong> <a href="4089.php">Massimo Cafaro: "[OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- nextthread="start" -->
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
