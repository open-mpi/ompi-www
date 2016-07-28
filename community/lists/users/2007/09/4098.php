<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 29 01:54:10 2007" -->
<!-- isoreceived="20070929055410" -->
<!-- sent="Sat, 29 Sep 2007 10:53:06 +0500" -->
<!-- isosent="20070929055306" -->
<!-- name="Hammad Siddiqi" -->
<!-- email="hammad.siddiqi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self" -->
<!-- id="46FDE842.4090403_at_niit.edu.pk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46FCFA2B.907_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-29 01:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="4097.php">Mostyn Lewis: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>In reply to:</strong> <a href="4091.php">Terry Dontje: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4100.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="4100.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
<p>Thanks for replying. The following command is working fine:
<br>
<p>/opt/SUNWhpc/HPC7.0/bin/mpirun -np 4 -mca btl tcp,sm,self  -machinefile 
<br>
machines ./hello
<br>
<p>The contents of machines are:
<br>
indus1
<br>
indus2
<br>
indus3
<br>
indus4
<br>
<p>I have tried using np=2 over pairs of machines, but the problem is same.
<br>
The errors that occur are given below with the command that I am trying.
<br>
<p>**Test 1**
<br>
<p>/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host 
<br>
&quot;indus1,indus2&quot; ./hello
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
<p>**Test 2*
<br>
<p>*/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host 
<br>
&quot;indus1,indus3&quot; ./hello
<br>
--------------------------------------------------------------------------
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
*
<br>
*Test 3*
<br>
*/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host 
<br>
&quot;indus1,indus4&quot; ./hello
<br>
--------------------------------------------------------------------------
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
<p>**Test4**
<br>
<p>/opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host 
<br>
&quot;indus2,indus4&quot; ./hello
<br>
--------------------------------------------------------------------------
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
*
<br>
<p>*Test5*
<br>
<p>* /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host 
<br>
&quot;indus2,indus3&quot; ./hello
<br>
--------------------------------------------------------------------------
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
<p>**Test 6*
<br>
<p>* /opt/SUNWhpc/HPC7.0/bin/mpirun -np 2 -mca btl mx,sm,self  -host 
<br>
&quot;indus3,indus4&quot; ./hello
<br>
--------------------------------------------------------------------------
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
<p>**END OF TESTS**
<br>
<p>There is one thing to note that when I run this command including -mca 
<br>
pml cm it works fine :S
<br>
<p>mpirun -np 4 -mca btl mx,sm,self -mca pml cm -machinefile machines  ./hello
<br>
Hello MPI! Process 4 of 1 on indus2
<br>
Hello MPI! Process 4 of 2 on indus3
<br>
Hello MPI! Process 4 of 3 on indus4
<br>
Hello MPI! Process 4 of 0 on indus1
<br>
<p>To my knowledge this command is not using shared memory and is only 
<br>
using myrinet as interconnect.
<br>
One more thing I cannot start more than 4 processes in this case, The 
<br>
mpirun process hangs.
<br>
<p>Any suggestions?
<br>
<p>Once again, thanks for your help.
<br>
<p>Regards,
<br>
Hammad
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Hi Hammad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to me like none of the btl's could resolve a route between the 
</span><br>
<span class="quotelev1">&gt; node that process rank 0 is on to the other nodes.
</span><br>
<span class="quotelev1">&gt; I would suggest trying np=2 over a couple pairs of machines to see if 
</span><br>
<span class="quotelev1">&gt; that works and you can truly be sure that only the
</span><br>
<span class="quotelev1">&gt; first node is having this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also might be helpful as a sanity check to use the tcp btl instead of 
</span><br>
<span class="quotelev1">&gt; mx and see if you get more traction with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Hammad Siddiqi (/hammad.siddiqi_at_[hidden]/)
</span><br>
<span class="quotelev2">&gt;&gt; *Date:* 2007-09-28 07:38:01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Sun HPC Toolkit 7.0 to compile and run my C MPI programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tested the myrinet installations using myricoms own test programs.
</span><br>
<span class="quotelev2">&gt;&gt; The Myricom software stack I am using is MX and the vesrion is
</span><br>
<span class="quotelev2">&gt;&gt; mx2g-1.1.7, mx_mapper is also used.
</span><br>
<span class="quotelev2">&gt;&gt; We have 4 nodes having 8 dual core processors each (Sun Fire v890) and
</span><br>
<span class="quotelev2">&gt;&gt; the operating system is
</span><br>
<span class="quotelev2">&gt;&gt; Solaris 10 (SunOS indus1 5.10 Generic_125100-10 sun4u sparc
</span><br>
<span class="quotelev2">&gt;&gt; SUNW,Sun-Fire-V890).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The contents of machine file are:
</span><br>
<span class="quotelev2">&gt;&gt; indus1
</span><br>
<span class="quotelev2">&gt;&gt; indus2
</span><br>
<span class="quotelev2">&gt;&gt; indus3
</span><br>
<span class="quotelev2">&gt;&gt; indus4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output of *mx_info* on each node is given below
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =====*=
</span><br>
<span class="quotelev2">&gt;&gt; indus1
</span><br>
<span class="quotelev2">&gt;&gt; *======
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt;&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev2">&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 297218
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                         
</span><br>
<span class="quotelev2">&gt;&gt;             ROUTE COUNT
</span><br>
<span class="quotelev2">&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt;&gt; ----- -----------
</span><br>
<span class="quotelev2">&gt;&gt; --------- ---
</span><br>
<span class="quotelev2">&gt;&gt;    0) 00:60:dd:47:ad:7c indus1:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    4) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    5) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    6) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    7) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 1,1
</span><br>
<span class="quotelev2">&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt; *indus2*
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt;&gt; MX Build: @indus2:/opt/mx2g-1.1.7rc3 Thu May 31 11:24:03 PKT 2007
</span><br>
<span class="quotelev2">&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:b3:ab
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 296636
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev2">&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt;&gt;    0) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    4) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    5) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    6) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    8) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    9) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;   10) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;   11) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link down
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:b3:c3
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 296612
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt; *indus3*
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt;&gt; MX Build: @indus3:/opt/mx2g-1.1.7rc3 Thu May 31 11:29:03 PKT 2007
</span><br>
<span class="quotelev2">&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:ad:66
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 297240
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev2">&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt;&gt;    0) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    1) 00:60:dd:47:ad:76 indus3:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 6,3
</span><br>
<span class="quotelev2">&gt;&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 7,3
</span><br>
<span class="quotelev2">&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:ad:76
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 297224
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev2">&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt;&gt;    0) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    1) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    2) 00:60:dd:47:ad:68 indus4:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    3) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    4) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev2">&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt; *indus4*
</span><br>
<span class="quotelev2">&gt;&gt; ======
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MX Version: 1.1.7rc3cvs1_1_fixes
</span><br>
<span class="quotelev2">&gt;&gt; MX Build: @indus4:/opt/mx2g-1.1.7rc3 Thu May 31 11:36:59 PKT 2007
</span><br>
<span class="quotelev2">&gt;&gt; 2 Myrinet boards installed.
</span><br>
<span class="quotelev2">&gt;&gt; The MX driver is configured to support up to 4 instances and 1024 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #0: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:ad:68
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 297238
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev2">&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt;&gt;    0) 00:60:dd:47:ad:68 indus4:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    1) 00:60:dd:47:b3:e8 indus4:1 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    3) 00:60:dd:47:ad:66 indus3:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    4) 00:60:dd:47:ad:76 indus3:1 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; Instance #1: 333.2 MHz LANai, 66.7 MHz PCI bus, 2 MB SRAM
</span><br>
<span class="quotelev2">&gt;&gt;         Status: Running, P0: Link up
</span><br>
<span class="quotelev2">&gt;&gt;         MAC Address: 00:60:dd:47:b3:e8
</span><br>
<span class="quotelev2">&gt;&gt;         Product code: M3F-PCIXF-2
</span><br>
<span class="quotelev2">&gt;&gt;         Part number: 09-03392
</span><br>
<span class="quotelev2">&gt;&gt;         Serial number: 296575
</span><br>
<span class="quotelev2">&gt;&gt;         Mapper: 00:60:dd:47:b3:e8, version = 0x7677b8ba, configured
</span><br>
<span class="quotelev2">&gt;&gt;         Mapped hosts: 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                 ROUTE 
</span><br>
<span class="quotelev2">&gt;&gt; COUNT
</span><br>
<span class="quotelev2">&gt;&gt; INDEX MAC ADDRESS HOST NAME P0
</span><br>
<span class="quotelev2">&gt;&gt; ----- ----------- --------- ---
</span><br>
<span class="quotelev2">&gt;&gt;    0) 00:60:dd:47:ad:68 indus4:0 6,3
</span><br>
<span class="quotelev2">&gt;&gt;    1) 00:60:dd:47:b3:e8 indus4:1 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    2) 00:60:dd:47:ad:77 jhelum1:0 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    3) 00:60:dd:47:ad:66 indus3:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    4) 00:60:dd:47:ad:76 indus3:1 1,1
</span><br>
<span class="quotelev2">&gt;&gt;    5) 00:60:dd:47:b3:ab indus2:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;    7) 00:60:dd:47:ad:7c indus1:0 7,3
</span><br>
<span class="quotelev2">&gt;&gt;    8) 00:60:dd:47:b3:5a ravi2:0 6,3
</span><br>
<span class="quotelev2">&gt;&gt;    9) 00:60:dd:47:ad:5f ravi2:1 8,3
</span><br>
<span class="quotelev2">&gt;&gt;   10) 00:60:dd:47:b3:bf ravi1:0 8,3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output from *ompi_info* is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.2.1r14096-ct7b030r1838
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: 0
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /opt/SUNWhpc/HPC7.0
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: sparc-sun-solaris2.10
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Fri Mar 30 12:49:36 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: burpen-on10-0
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Fri Mar 30 13:10:46 EDT 2007
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: burpen-on10-0
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: trivial
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: cc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/cc
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: CC
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /ws/ompi-tools/SUNWspro/SOS11/bin/CC
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: f77
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f77
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: f95
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: /ws/ompi-tools/SUNWspro/SOS11/bin/f95
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: printstack (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: solaris (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: udapl (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run a simple hello world program by issuing following 
</span><br>
<span class="quotelev2">&gt;&gt; command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *mpirun -np 4 -mca btl mx,sm,self -machinefile machines ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *The following error appears:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt;&gt; usable components.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt;&gt; usable components.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt;&gt; usable components.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.2 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt;&gt; usable components.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-*** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; 12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output from more */var/run/fms/fma.log*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 NIC 0: M3F-PCIXF-2 s/n=297218 1 ports, speed=2G
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:7c
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 NIC 1: M3F-PCIXF-2 s/n=297248 1 ports, speed=2G
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 mac = 00:60:dd:47:ad:5e
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 fms-1.2.1 fma starting
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 Mapper was 00:00:00:00:00:00, l=0, is now
</span><br>
<span class="quotelev2">&gt;&gt; 00:60:dd:47:ad:7c, l=1
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:50 2007 Mapping fabric...
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:54 2007 Mapper was 00:60:dd:47:ad:7c, l=1, is now
</span><br>
<span class="quotelev2">&gt;&gt; 00:60:dd:47:b3:e8, l=1
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:54 2007 Cancelling mapping
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:59 2007 5 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:59 2007 map version is 1987557551
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:59 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:59 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:59 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Sat Sep 22 10:47:59 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:46 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt;&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:5a, lev=1, pkt_type=0
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:51 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:51 2007 map version is 1987557552
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:51 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:51 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:51 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:26:51 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:17 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt;&gt; (00:60:dd:47:b3:e8): scouted by 00:60:dd:47:b3:bf, lev=1, pkt_type=0
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:19 2007 map version is 1987557553
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:19 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:19 2007 Found NIC 1 at index 4!
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:19 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Mon Sep 24 14:35:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:47:52 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:47:52 2007 map version is 1987557554
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:47:52 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:47:52 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:47:52 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:47:52 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:02 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt;&gt; (00:60:dd:47:b3:e8): empty port x0p15 is no longer empty
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:07 2007 6 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:07 2007 map version is 1987557555
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:07 2007 Found NIC 0 at index 4!
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:07 2007 Found NIC 1 at index 3!
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:07 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:07 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:23 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:23 2007 map version is 1987557556
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:23 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:23 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:23 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Tue Sep 25 21:52:23 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:01 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt;&gt; (00:60:dd:47:b3:e8): verify failed x1p2, nic 0, port 0 route=-9 4 10
</span><br>
<span class="quotelev2">&gt;&gt; reply=-10 -4 9 , remote=ravi2 NIC
</span><br>
<span class="quotelev2">&gt;&gt;  1, p0 mac=00:60:dd:47:ad:5f
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:06 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:06 2007 map version is 1987557557
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:06 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:06 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:06 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:07:06 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:11:19 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:11:19 2007 map version is 1987557558
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:11:19 2007 Found NIC 0 at index 3!
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:11:19 2007 Found NIC 1 at index 2!
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:11:19 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Wed Sep 26 05:11:19 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:45:37 2007 6 hosts, 9 nics, 6 xbars, 41 links
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:45:37 2007 map version is 1987557559
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:45:37 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:45:37 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:45:37 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:45:37 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:51:02 2007 7 hosts, 11 nics, 6 xbars, 43 links
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:51:02 2007 map version is 1987557560
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:51:02 2007 Found NIC 0 at index 6!
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:51:02 2007 Found NIC 1 at index 5!
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:51:02 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Thu Sep 27 11:51:02 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:10 2007 Requesting remap from indus4
</span><br>
<span class="quotelev2">&gt;&gt; (00:60:dd:47:b3:e8): verify failed x5p0, nic 1, port 0 route=-8 15 6
</span><br>
<span class="quotelev2">&gt;&gt; reply=-6 -15 8 , remote=ravi1 NIC
</span><br>
<span class="quotelev2">&gt;&gt;  0, p0 mac=00:60:dd:47:b3:bf
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:24 2007 6 hosts, 8 nics, 6 xbars, 40 links
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:24 2007 map version is 1987557561
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:24 2007 Found NIC 0 at index 5!
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:24 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:24 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:24 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:44 2007 7 hosts, 10 nics, 6 xbars, 42 links
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:44 2007 map version is 1987557562
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:44 2007 Found NIC 0 at index 7!
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:44 2007 Cannot find NIC 1 (00:60:dd:47:ad:5e) in map!
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:44 2007 map seems OK
</span><br>
<span class="quotelev2">&gt;&gt; Fri Sep 28 13:27:44 2007 Routing took 0 seconds
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any suggestion or comments why this error appear and whats
</span><br>
<span class="quotelev2">&gt;&gt; the solution to this problem. I have checked community mailing list for
</span><br>
<span class="quotelev2">&gt;&gt; this problem and found few topics related to this, but could find any
</span><br>
<span class="quotelev2">&gt;&gt; solution. Any suggestion or comments will be highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code that i m trying to run is given as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int rank, size, tag, rc, i;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;   char message[20];
</span><br>
<span class="quotelev2">&gt;&gt;   rc = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   rc = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;   rc = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   tag = 100;
</span><br>
<span class="quotelev2">&gt;&gt;   if(rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;     strcpy(message, &quot;Hello, world&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     for (i=1; i&lt;size; i++)
</span><br>
<span class="quotelev2">&gt;&gt;       rc = MPI_Send(message, 13, MPI_CHAR, i, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   else
</span><br>
<span class="quotelev2">&gt;&gt;     rc = MPI_Recv(message, 13, MPI_CHAR, 0, tag, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;   printf( &quot;node %d : %.13s\n&quot;, rank,message);
</span><br>
<span class="quotelev2">&gt;&gt;   rc = MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Looking forward.
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hammad Siddiqi
</span><br>
<span class="quotelev2">&gt;&gt; Center for High Performance Scientific Computing
</span><br>
<span class="quotelev2">&gt;&gt; NUST Institute of Information Technology,
</span><br>
<span class="quotelev2">&gt;&gt; National University of Sciences and Technology,
</span><br>
<span class="quotelev2">&gt;&gt; Rawalpindi, Pakistan. 
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4099.php">Massimo Cafaro: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="4097.php">Mostyn Lewis: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>In reply to:</strong> <a href="4091.php">Terry Dontje: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, , sm, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4100.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Reply:</strong> <a href="4100.php">Tim Prins: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
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
