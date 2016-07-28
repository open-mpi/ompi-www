<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  7 11:32:58 2005" -->
<!-- isoreceived="20051107163258" -->
<!-- sent="Mon, 7 Nov 2005 11:32:53 -0500" -->
<!-- isosent="20051107163253" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] TCP" -->
<!-- id="31526CF3-AC7C-4907-838C-E7D01FD8A25E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="436EF197.2030003_at_sympatico.ca" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-07 11:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0283.php">Allan Menezes: "[O-MPI users] TCP"</a>
<li><strong>In reply to:</strong> <a href="0283.php">Allan Menezes: "[O-MPI users] TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2005, at 1:17 AM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    I am using Oscar 4.2. I have two ethernet cards on compute nodes,
</span><br>
<span class="quotelev1">&gt; eth0, eth1[one 10/100Mbps and one realtek 8169 gigabit NIC] and 4
</span><br>
<span class="quotelev1">&gt; ethernet cards on the head node , eth0 10/100Mbps, eth1 10/100Mbps,  
</span><br>
<span class="quotelev1">&gt; eth2
</span><br>
<span class="quotelev1">&gt; realtek 8169 gigabit, eth3 a built in 3com gigabit ethernet with the
</span><br>
<span class="quotelev1">&gt; sk98lin driver. I am using FC3. Can you give me an mpirun command for
</span><br>
<span class="quotelev1">&gt; this hardware to run hpl?
</span><br>
<span class="quotelev1">&gt; The command line i use looks like:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth2 --mca btl tcp --hostfile aa - 
</span><br>
<span class="quotelev1">&gt; np 16
</span><br>
<span class="quotelev1">&gt; ./xhpl from  the benchmark directory.
</span><br>
<span class="quotelev1">&gt; But it spews out with errors about eth2 and not being able to find the
</span><br>
<span class="quotelev1">&gt; HPL.dat file.
</span><br>
<span class="quotelev1">&gt; All the 8169 cards on all nodes are connected by Gig copper cables  
</span><br>
<span class="quotelev1">&gt; to a
</span><br>
<span class="quotelev1">&gt; 16 port gigabit switch .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think you would want to use btl_tcp_if_include eth1 instead of  
<br>
eth2, since you don't have an eth2 on your compute nodes.  As for not  
<br>
being able to find HPL.dat, I'm not sure why that would be a problem  
<br>
- are you sure the file exists in the same directory as the xhpl  
<br>
binary (on all nodes)?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0285.php">Brian Barrett: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0283.php">Allan Menezes: "[O-MPI users] TCP"</a>
<li><strong>In reply to:</strong> <a href="0283.php">Allan Menezes: "[O-MPI users] TCP"</a>
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
