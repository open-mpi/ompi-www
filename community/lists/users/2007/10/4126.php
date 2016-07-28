<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 23:02:42 2007" -->
<!-- isoreceived="20071002030242" -->
<!-- sent="Mon, 1 Oct 2007 23:02:31 -0400" -->
<!-- isosent="20071002030231" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self" -->
<!-- id="200710012302.31609.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="47009CD4.3010506_at_niit.edu.pk" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 23:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4127.php">Hiep Bui Hoang: "[OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Previous message:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4107.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Monday 01 October 2007 03:08:04 am Hammad Siddiqi wrote:
<br>
<span class="quotelev1">&gt; One more thing to add -mca mtl mx uses ethernet and IP emulation of
</span><br>
<span class="quotelev1">&gt; Myrinet to my knowledge. I want to use Myrinet(not its IP Emulation)
</span><br>
<span class="quotelev1">&gt; and shared memory simultaneously.
</span><br>
This is not true (as far as I know...). Open MPI has 2 different network 
<br>
stacks, and we can use MX with either. See:
<br>
<a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl-mx">http://www.open-mpi.org/faq/?category=myrinet#myri-btl-mx</a>
<br>
<p>The mx mtl relies on the MX library for all communications, and the MX library 
<br>
itself does shared memory message passing. In my experience the mx mtl 
<br>
performs better than the mx,sm,self btl combination. However, I would 
<br>
encourage you to try both with your application and would be interested in 
<br>
hearing your opinion.
<br>
<p>&lt;snip&gt;
<br>
<span class="quotelev2">&gt; &gt; *1.  /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2&quot; -mca btl_base_debug 1000 ./hello*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/SUNWhpc/HPC7.0/bin/mpirun -np 4 -mca btl mx,sm,self  -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot; -mca btl_base_debug 1000 ./hello
</span><br>
<span class="quotelev2">&gt; &gt; [indus1:29331] select: initializing btl component mx
</span><br>
<span class="quotelev2">&gt; &gt; [indus1:29331] select: init returned failure
</span><br>
<span class="quotelev2">&gt; &gt; [indus1:29331] select: module mx unloaded
</span><br>
&lt;snip&gt;
<br>
<p>So it looks like we are trying to load the mx library, but fail for some 
<br>
reason. Are you sure MX is working correctly? Can you run mx_pingpong between 
<br>
indus1 and indus2 as described here:
<br>
<a href="http://www.myri.com/cgi-bin/fom.pl?file=455&amp;keywords=file%253D91">http://www.myri.com/cgi-bin/fom.pl?file=455&amp;keywords=file%253D91</a>
<br>
<p><span class="quotelev2">&gt; &gt; *2.1  /opt/SUNWhpc/HPC7.0/bin/mpirun -np 4 -mca mtl mx -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot; ./hello*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This command works fine
</span><br>
Since you did not specify to use the cm pml (which MUST be done to use the mx 
<br>
mtl. see: <a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl-mx">http://www.open-mpi.org/faq/?category=myrinet#myri-btl-mx</a>), you 
<br>
were probably actually using tcp for this run since we would automatically 
<br>
fail back after the mx btl fails to load.
<br>
<p><span class="quotelev2">&gt; &gt; *2.2 /opt/SUNWhpc/HPC7.0/bin/mpirun -np 4 -mca mtl mx -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot; -mca pml cm ./hello*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This command works fine.
</span><br>
Good. So maybe there isn't anything wrong with your mx setup.
<br>
<p><span class="quotelev2">&gt; &gt; Also *&quot;/opt/SUNWhpc/HPC7.0/bin/mpirun -np 4 -mca pml cm  -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot;  -mca mtl_base_debug 1000 ./hello&quot;*,
</span><br>
<span class="quotelev2">&gt; &gt; this command works fine.
</span><br>
Since you selected the cm pml, we should be automatically using the mx mtl 
<br>
here.
<br>
<p><span class="quotelev2">&gt; &gt; but *&quot;/opt/SUNWhpc/HPC7.0/bin/mpirun -np 8 -mca pml cm  -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot;  -mca mtl_base_debug 1000 ./hello&quot;*
</span><br>
<span class="quotelev2">&gt; &gt; hangs for indefinite time.
</span><br>
Strange. I do not know why this would hang.
<br>
<p><span class="quotelev2">&gt; &gt; Also *&quot;/opt/SUNWhpc/HPC7.0/bin/mpirun -np 8 -mca mtl mx,sm,self -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot;  -mca mtl_base_debug 1000 ./hello&quot;*
</span><br>
<span class="quotelev2">&gt; &gt; works fine
</span><br>
Again, you are falling back to using the tcp btl here. BTW, the mtl 
<br>
string 'mx,sm,self' is bogus. There is no sm or self mtl's.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *2.3 /opt/SUNWhpc/HPC7.0/bin/mpirun -np 8 -mca mtl mx -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot; -mca pml cm ./hello*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This command hangs the machines for indefinite time.
</span><br>
<span class="quotelev2">&gt; &gt; Also *&quot;/opt/SUNWhpc/HPC7.0/bin/mpirun -np 8 -mca mtl mx -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot; -mca pml cm  -mca mtl_base_debug 1000
</span><br>
<span class="quotelev2">&gt; &gt; ./hello&quot;* hangs the
</span><br>
<span class="quotelev2">&gt; &gt; systems for indefinite time.
</span><br>
These two commands should have the exact same effect as the hang above.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *2.4  /opt/SUNWhpc/HPC7.0/bin/mpirun -np 8 -mca mtl mx,sm,self -host
</span><br>
<span class="quotelev2">&gt; &gt; &quot;indus1,indus2,indus3,indus4&quot; -mca pml cm  -mca mtl_base_debug 1000
</span><br>
<span class="quotelev2">&gt; &gt; ./hello*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This command hangs the machines for indefinite time.
</span><br>
Again, the mtl line here is bogus.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please notice that running more than four mpi processes hangs the
</span><br>
<span class="quotelev2">&gt; &gt; machines. Any suggestion please.
</span><br>
The first thing I would try is to see if a non-mpi application works. So try:
<br>
/opt/SUNWhpc/HPC7.0/bin/mpirun -np 8 -host &quot;indus1,indus2,indus3,indus4&quot; 
<br>
hostname
<br>
<p>If that works, then try a simple MPI hello application that does no 
<br>
communication.
<br>
<p>Tim
<br>
<p><span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The output of *mx_info* on each node is given below
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; =====*=
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; indus1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The MX driver is configured to support up to 4 instances and 1024
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 297218
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;             ROUTE COUNT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ----- -----------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------- ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    0) 00:60:dd:47:ad:7c indus1:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    4) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    5) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    6) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    7) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *indus2*
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Build: @indus2:/opt/mx2g-1.1.7rc3 Thu May 31 11:24:03 PKT 2007
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The MX driver is configured to support up to 4 instances and 1024
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:b3:ab
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 296636
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    0) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    4) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    5) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    6) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    8) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    9) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   10) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   11) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link down
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:b3:c3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 296612
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *indus3*
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Build: @indus3:/opt/mx2g-1.1.7rc3 Thu May 31 11:29:03 PKT 2007
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The MX driver is configured to support up to 4 instances and 1024
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:ad:66
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 297240
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    0) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    1) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 6,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:ad:76
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 297224
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    0) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    1) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *indus4*
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The MX driver is configured to support up to 4 instances and 1024
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:ad:68
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 297238
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    0) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    1) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    3) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    4) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         MAC Address: 00:60:dd:47:b3:e8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Serial number: 296575
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                                                                 ROUTE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    0) 00:60:dd:47:ad:68 indus4:0 6,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    1) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    3) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    4) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The output from *ompi_info* is:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    Open MPI SVN revision: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    Open RTE SVN revision: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                     OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;        OPAL SVN revision: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                   Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  Configured architecture: sparc-sun-solaris2.10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;            Configured on: Fri Mar 30 12:49:36 EDT 2007
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;           Configure host: burpen-on10-0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 Built on: Fri Mar 30 13:10:46 EDT 2007
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               Built host: burpen-on10-0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  Fortran90 bindings size: trivial
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;               C compiler: cc
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;             C++ compiler: CC
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       Fortran77 compiler: f77
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;           Thread support: no
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0) MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; allocator: bucket (MCA v1.0, API v1.0, Component v1.0) MCA coll:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; basic (MCA v1.0, API v1.0, Component v1.2.1) MCA coll: self (MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0, API v1.0, Component v1.2.1) MCA coll: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Component v1.2.1) MCA coll: tuned (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1) MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpool: sm (MCA v1.0, API v1.0, Component v1.2.1) MCA mpool: udapl
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (MCA v1.0, API v1.0, Component v1.2.1) MCA pml: cm (MCA v1.0, API
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0, Component v1.2.1) MCA pml: ob1 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1) MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; rcache: rb (MCA v1.0, API v1.0, Component v1.2.1) MCA rcache: vma
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (MCA v1.0, API v1.0, Component v1.2.1) MCA btl: mx (MCA v1.0, API
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0.1, Component v1.2.1) MCA btl: self (MCA v1.0, API v1.0.1,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Component v1.2.1) MCA btl: sm (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0) MCA btl:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; udapl (MCA v1.0, API v1.0, Component v1.2.1) MCA mtl: mx (MCA v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; API v1.0, Component v1.2.1) MCA topo: unity (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Component v1.2.1) MCA osc: pt2pt (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1) MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1) MCA errmgr:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; proxy (MCA v1.0, API v1.3, Component v1.2.1) MCA gpr: null (MCA v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; API v1.0, Component v1.2.1) MCA gpr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Component v1.2.1) MCA gpr: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1) MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; iof: svc (MCA v1.0, API v1.0, Component v1.2.1) MCA ns: proxy (MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0, API v2.0, Component v1.2.1) MCA ns: replica (MCA v1.0, API
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v2.0, Component v1.2.1) MCA oob: tcp (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0) MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1) MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; rds: resfile (MCA v1.0, API v1.3, Component v1.2.1) MCA rmaps:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; round_robin (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1) MCA rml:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; oob (MCA v1.0, API v1.0, Component v1.2.1) MCA pls: gridengine (MCA
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1) MCA pls:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; tm (MCA v1.0, API v1.3, Component v1.2.1) MCA sds: env (MCA v1.0, API
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.0, Component v1.2.1) MCA sds: pipe (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; v1.2.1) MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1) MCA sds:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The output from more */var/run/fms/fma.log*
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:50 2007 NIC 0: M3F-PCIXF-2 s/n=297218 1 ports,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; speed=2G Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:50 2007 NIC 1: M3F-PCIXF-2 s/n=297248 1 ports,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; speed=2G Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:5e
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:50 2007 fms-1.2.1 fma starting
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:50 2007 Mapper was 00:00:00:00:00:00, l=0, is now
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 00:60:dd:47:ad:7c, l=1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:50 2007 Mapping fabric...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:54 2007 Mapper was 00:60:dd:47:ad:7c, l=1, is now
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 00:60:dd:47:b3:e8, l=1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:54 2007 Cancelling mapping
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:59 2007 5 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:59 2007 map version is 1987557551
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:59 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:59 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:59 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Sat Sep 22 10:47:59 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:46 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:5a, lev=1, pkt_type=0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:51 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:51 2007 map version is 1987557552
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:51 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:51 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:51 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:26:51 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:17 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:bf, lev=1, pkt_type=0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:19 2007 map version is 1987557553
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:19 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:19 2007 Found NIC 1 at index 4!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:19 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Mon Sep 24 14:35:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:47:52 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:47:52 2007 map version is 1987557554
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:47:52 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:47:52 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:47:52 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:47:52 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:02 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (00:60:dd:47:b3:e8): empty port x0p15 is no longer empty
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:07 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:07 2007 map version is 1987557555
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:07 2007 Found NIC 0 at index 4!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:07 2007 Found NIC 1 at index 3!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:07 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:07 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:23 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:23 2007 map version is 1987557556
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:23 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:23 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:23 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tue Sep 25 21:52:23 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:01 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (00:60:dd:47:b3:e8): verify failed x1p2, nic 0, port 0 route=-9 4 10
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; reply=-10 -4 9 , remote=ravi2 NIC
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  1, p0 mac=00:60:dd:47:ad:5f
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:06 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:06 2007 map version is 1987557557
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:06 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:06 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:06 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:07:06 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:11:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:11:19 2007 map version is 1987557558
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:11:19 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:11:19 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:11:19 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Wed Sep 26 05:11:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:45:37 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:45:37 2007 map version is 1987557559
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:45:37 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:45:37 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:45:37 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:45:37 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:51:02 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:51:02 2007 map version is 1987557560
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:51:02 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:51:02 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:51:02 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thu Sep 27 11:51:02 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:10 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (00:60:dd:47:b3:e8): verify failed x5p0, nic 1, port 0 route=-8 15 6
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; reply=-6 -15 8 , remote=ravi1 NIC
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  0, p0 mac=00:60:dd:47:b3:bf
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:24 2007 6 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:24 2007 map version is 1987557561
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:24 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:24 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; map! Fri Sep 28 13:27:24 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:24 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:44 2007 7 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:44 2007 map version is 1987557562
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:44 2007 Found NIC 0 at index 7!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:44 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; map! Fri Sep 28 13:27:44 2007 map seems OK
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Fri Sep 28 13:27:44 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Do you have any suggestion or comments why this error appear and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; whats the solution to this problem. I have checked community mailing
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; list for this problem and found few topics related to this, but could
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; find any solution. Any suggestion or comments will be highly
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The code that i m trying to run is given as follows:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   int rank, size, tag, rc, i;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   char message[20];
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   rc = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   rc = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   rc = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   tag = 100;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   if(rank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     strcpy(message, &quot;Hello, world&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     for (i=1; i&lt;size; i++)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       rc = MPI_Send(message, 13, MPI_CHAR, i, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   else
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     rc = MPI_Recv(message, 13, MPI_CHAR, 0, tag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   printf( &quot;node %d : %.13s\n&quot;, rank,message);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   rc = MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4127.php">Hiep Bui Hoang: "[OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Previous message:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4107.php">Hammad Siddiqi: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
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
