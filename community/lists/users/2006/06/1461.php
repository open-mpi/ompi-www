<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jun 24 13:19:53 2006" -->
<!-- isoreceived="20060624171953" -->
<!-- sent="Sat, 24 Jun 2006 13:19:46 -0400" -->
<!-- isosent="20060624171946" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: OpenMPI version 1.1" -->
<!-- id="39494BE0-9A1C-4768-B1EC-B9CD126B1110_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFA594B94D.1CF7A63E-ON85257197.000CF8BD-85257197.000CFFDB_at_us.ibm.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-24 13:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1462.php">Brian Barrett: "Re: [OMPI users] hostfile"</a>
<li><strong>Previous message:</strong> <a href="1460.php">Swamy Kandadai: "[OMPI users] Fw: OpenMPI version 1.1"</a>
<li><strong>In reply to:</strong> <a href="1460.php">Swamy Kandadai: "[OMPI users] Fw: OpenMPI version 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As your cluster have several network devices that are supported by  
<br>
Open MPI it is possible that the configure script detected the  
<br>
correct path to their libraries. Therefore, they might be included/ 
<br>
compiled by default in Open MPI. The simplest way to check is to use  
<br>
the ompi_info tool. &quot;ompi_info | grep btl&quot; will list all the network  
<br>
devices supported by your particular build.
<br>
<p>If several devices (called BTL in Open MPI terms) are compiled in,  
<br>
only forcing one eth interface for the TCP BTL is not enough. You  
<br>
should specify that you want only the TCP BTL to be used, forcing  
<br>
Open MPI to unload/ignore all other available BTL. Add &quot;--mca btl  
<br>
tcp,self&quot; to your mpirun command and the problem should be solved.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 23, 2006, at 10:22 PM, Swamy Kandadai wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Swamy N. Kandadai
</span><br>
<span class="quotelev1">&gt; Certified Sr. Consulting IT Specialist
</span><br>
<span class="quotelev1">&gt; HPC Benchmark Center
</span><br>
<span class="quotelev1">&gt; System &amp; Technology Group, Poughkeepsie, NY
</span><br>
<span class="quotelev1">&gt; Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
</span><br>
<span class="quotelev1">&gt; swamy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Forwarded by Swamy Kandadai/Poughkeepsie/IBM on 06/23/2006  
</span><br>
<span class="quotelev1">&gt; 10:21 PM
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Swamy
</span><br>
<span class="quotelev1">&gt;              Kandadai/Poughkee
</span><br>
<span class="quotelev1">&gt;              psie/ 
</span><br>
<span class="quotelev1">&gt; IBM                                                   To
</span><br>
<span class="quotelev1">&gt;                                        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;              06/23/2006  
</span><br>
<span class="quotelev1">&gt; 09:52                                           cc
</span><br>
<span class="quotelev1">&gt;              PM
</span><br>
<span class="quotelev1">&gt;                                                                     
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;                                        OpenMPI version 1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run OpenMPI on a couple of nodes. These nodes have  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; interfaces: eth0 (which is a GigE),
</span><br>
<span class="quotelev1">&gt; eth1 (which is a GigE with Jumbo frames enabled), IpoIB, myr0 in  
</span><br>
<span class="quotelev1">&gt; addition
</span><br>
<span class="quotelev1">&gt; to loopback (l0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to use exclusively eth1 and I am running with this option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth1 -machinefile hf -np 2 IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where IMB-MPI1 is the Intel message passing benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Different times, it has different behaviors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran on one set of nodes and I got a typical GigE behavior (around  
</span><br>
<span class="quotelev1">&gt; 100
</span><br>
<span class="quotelev1">&gt; MB/s). On a different pairs of nodes
</span><br>
<span class="quotelev1">&gt; it is giving me the BW consistent with IpoIB (around 700 MB/s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can u help me what I am doing wrong? How can I force it to use eth1  
</span><br>
<span class="quotelev1">&gt; on all
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just built OpenMPI with the following option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$BINDIR  --disable-io-romio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Swamy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Swamy N. Kandadai
</span><br>
<span class="quotelev1">&gt; Certified Sr. Consulting IT Specialist
</span><br>
<span class="quotelev1">&gt; HPC Benchmark Center
</span><br>
<span class="quotelev1">&gt; System &amp; Technology Group, Poughkeepsie, NY
</span><br>
<span class="quotelev1">&gt; Phone:( 845) 433 -8429 (8-293) Fax:(845)432-9789
</span><br>
<span class="quotelev1">&gt; swamy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ibm.com/sales/systems/benchmarks">http://w3.ibm.com/sales/systems/benchmarks</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1462.php">Brian Barrett: "Re: [OMPI users] hostfile"</a>
<li><strong>Previous message:</strong> <a href="1460.php">Swamy Kandadai: "[OMPI users] Fw: OpenMPI version 1.1"</a>
<li><strong>In reply to:</strong> <a href="1460.php">Swamy Kandadai: "[OMPI users] Fw: OpenMPI version 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
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
