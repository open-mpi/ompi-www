<?
$subject_val = "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 17:13:38 2016" -->
<!-- isoreceived="20160212221338" -->
<!-- sent="Fri, 12 Feb 2016 15:13:31 -0700" -->
<!-- isosent="20160212221331" -->
<!-- name="Stephen Guzik" -->
<!-- email="Stephen.Guzik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread" -->
<!-- id="56BE590B.3080808_at_colostate.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56BD27C0.8020607_at_colostate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread<br>
<strong>From:</strong> Stephen Guzik (<em>Stephen.Guzik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-12 17:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Previous message:</strong> <a href="28519.php">Rob Latham: "Re: [OMPI users] PVFS/OrangeFS (was: cleaning up old ROMIO (MPI-IO) drivers)"</a>
<li><strong>In reply to:</strong> <a href="28515.php">Stephen Guzik: "[OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Reply:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've also tested lama with
<br>
<p>-np 10 --mca rmaps_base_verbose 10 --mca rmaps_lama_priority 91 --mca
<br>
rmaps_lama_map sNbnch --mca rmaps_lama_bind 1h --mca rmaps_lama_mppr 1:c,5:s
<br>
<p>It seems like this would do the right thing except a priority &lt; 10 does
<br>
nothing and greater than 10 segfaults.  Is lama still intended to be
<br>
supported?  If not, any other workarounds?
<br>
<p>[node4:30795] [[32231,0],0]: Final mapper priorities
<br>
[node4:30795]     Mapper: lama Priority: 91
<br>
[node4:30795]     Mapper: ppr Priority: 90
<br>
[node4:30795]     Mapper: seq Priority: 60
<br>
[node4:30795]     Mapper: resilient Priority: 40
<br>
[node4:30795]     Mapper: mindist Priority: 20
<br>
[node4:30795]     Mapper: round_robin Priority: 10
<br>
[node4:30795]     Mapper: staged Priority: 5
<br>
[node4:30795]     Mapper: rank_file Priority: 0
<br>
[node4:30795] mca:rmaps: mapping job [32231,1]
<br>
[node4:30795] mca:rmaps: creating new map for job [32231,1]
<br>
[node4:30795] mca:rmaps: nprocs 10
<br>
[node4:30795] mca:rmaps[139] mapping not given - using bysocket
<br>
[node4:30795] mca:rmaps[288] binding not given - using bysocket
<br>
[node4:30795] mca:rmaps:lama: Mapping job [32231,1]
<br>
[node4:30795] mca:rmaps:lama: Revised Parameters -----
<br>
[node4:30795] mca:rmaps:lama: Map   : sNbnch
<br>
[node4:30795] mca:rmaps:lama: Bind  : 1h
<br>
[node4:30795] mca:rmaps:lama: MPPR  : 1:c,5:s
<br>
[node4:30795] mca:rmaps:lama: Order : s
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] mca:rmaps:lama: ----- Binding  : [1h]
<br>
[node4:30795] mca:rmaps:lama: ----- Binding  :    1 x Hw. Thread
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : [sNbnch]
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : (0)     Socket (3 vs 0)
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : (1)       NUMA (2 vs 1)
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : (2)      Board (1 vs 2)
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : (3)    Machine (0 vs 3)
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : (4)       Core (7 vs 7)
<br>
[node4:30795] mca:rmaps:lama: ----- Mapping  : (5) Hw. Thread (8 vs 8)
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] mca:rmaps:lama: ----- MPPR     : [1:c,5:s]
<br>
[node4:30795] mca:rmaps:lama: ----- MPPR     :    1 at       Core
<br>
[node4:30795] mca:rmaps:lama: ----- MPPR     :    5 at     Socket
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] mca:rmaps:lama: ----- Ordering : [s]
<br>
[node4:30795] mca:rmaps:lama: ----- Ordering : Sequential
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] AVAILABLE NODES FOR MAPPING:
<br>
[node4:30795]     node: node4 daemon: 0
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] mca:rmaps:lama: ----- Building the Max Tree...
<br>
[node4:30795] mca:rmaps:lama: ---------------------------------
<br>
[node4:30795] mca:rmaps:lama: ----- Converting Remote Tree: node4
<br>
[node4:30795] *** Process received signal ***
<br>
[node4:30795] Signal: Segmentation fault (11)
<br>
[node4:30795] Signal code: Address not mapped (1)
<br>
<p>Stephen
<br>
<p>On 02/11/2016 05:30 PM, Stephen Guzik wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to divide n processes between the sockets on a node, with
</span><br>
<span class="quotelev1">&gt; one process per core, and bind them to a hwthread.  Consider a system
</span><br>
<span class="quotelev1">&gt; with 2 sockets, 10 cores per socket, and 2 hwthreads per core.  If I enter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -np 20 --map-by ppr:1:core --bind-to hwthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then this works as I intend.  But if I only want 10 processes with 5 on
</span><br>
<span class="quotelev1">&gt; each socket, then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -np 10 --map-by ppr:5:socket --bind-to hwthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will map two processes to each core (1 per hwthread).  I also tried
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -np 10 --map-by ppr:5:socket:pe=2 --bind-to hwthread
</span><br>
<span class="quotelev1">&gt; -np 10 --map-by ppr:5:socket --bind-to core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but both of those will bind to the core.  How can I say 5 per socket and
</span><br>
<span class="quotelev1">&gt; only 1 per core and bind to a single hardware thread?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.8.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Stephen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Previous message:</strong> <a href="28519.php">Rob Latham: "Re: [OMPI users] PVFS/OrangeFS (was: cleaning up old ROMIO (MPI-IO) drivers)"</a>
<li><strong>In reply to:</strong> <a href="28515.php">Stephen Guzik: "[OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Reply:</strong> <a href="28521.php">Ralph Castain: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
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
