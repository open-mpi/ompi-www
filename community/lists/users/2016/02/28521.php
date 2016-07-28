<?
$subject_val = "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 17:15:46 2016" -->
<!-- isoreceived="20160212221546" -->
<!-- sent="Fri, 12 Feb 2016 14:15:43 -0800" -->
<!-- isosent="20160212221543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread" -->
<!-- id="FCC5BDFB-6701-4E01-84F2-509E83A7BF4F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56BE590B.3080808_at_colostate.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-12 17:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28522.php">Kim Walisch: "[OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>In reply to:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sadly, lama has fallen into a stale, unsupported condition. I&#226;&#128;&#153;ve been thinking about your mapping request, and I don&#226;&#128;&#153;t currently see a way to do it with the existing options. I understand the request, however, and will see if I can come up with something over the weekend.
<br>
<p><p><span class="quotelev1">&gt; On Feb 12, 2016, at 2:13 PM, Stephen Guzik &lt;Stephen.Guzik_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've also tested lama with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -np 10 --mca rmaps_base_verbose 10 --mca rmaps_lama_priority 91 --mca
</span><br>
<span class="quotelev1">&gt; rmaps_lama_map sNbnch --mca rmaps_lama_bind 1h --mca rmaps_lama_mppr 1:c,5:s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems like this would do the right thing except a priority &lt; 10 does
</span><br>
<span class="quotelev1">&gt; nothing and greater than 10 segfaults.  Is lama still intended to be
</span><br>
<span class="quotelev1">&gt; supported?  If not, any other workarounds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node4:30795] [[32231,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: lama Priority: 91
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: mindist Priority: 20
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: staged Priority: 5
</span><br>
<span class="quotelev1">&gt; [node4:30795]     Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps: mapping job [32231,1]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps: creating new map for job [32231,1]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps: nprocs 10
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps[139] mapping not given - using bysocket
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps[288] binding not given - using bysocket
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: Mapping job [32231,1]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: Revised Parameters -----
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: Map   : sNbnch
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: Bind  : 1h
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: MPPR  : 1:c,5:s
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: Order : s
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Binding  : [1h]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Binding  :    1 x Hw. Thread
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : [sNbnch]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : (0)     Socket (3 vs 0)
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : (1)       NUMA (2 vs 1)
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : (2)      Board (1 vs 2)
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : (3)    Machine (0 vs 3)
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : (4)       Core (7 vs 7)
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Mapping  : (5) Hw. Thread (8 vs 8)
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- MPPR     : [1:c,5:s]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- MPPR     :    1 at       Core
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- MPPR     :    5 at     Socket
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Ordering : [s]
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Ordering : Sequential
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [node4:30795]     node: node4 daemon: 0
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Building the Max Tree...
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ---------------------------------
</span><br>
<span class="quotelev1">&gt; [node4:30795] mca:rmaps:lama: ----- Converting Remote Tree: node4
</span><br>
<span class="quotelev1">&gt; [node4:30795] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node4:30795] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node4:30795] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stephen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/11/2016 05:30 PM, Stephen Guzik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to divide n processes between the sockets on a node, with
</span><br>
<span class="quotelev2">&gt;&gt; one process per core, and bind them to a hwthread.  Consider a system
</span><br>
<span class="quotelev2">&gt;&gt; with 2 sockets, 10 cores per socket, and 2 hwthreads per core.  If I enter
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -np 20 --map-by ppr:1:core --bind-to hwthread
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then this works as I intend.  But if I only want 10 processes with 5 on
</span><br>
<span class="quotelev2">&gt;&gt; each socket, then
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -np 10 --map-by ppr:5:socket --bind-to hwthread
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; will map two processes to each core (1 per hwthread).  I also tried
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -np 10 --map-by ppr:5:socket:pe=2 --bind-to hwthread
</span><br>
<span class="quotelev2">&gt;&gt; -np 10 --map-by ppr:5:socket --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but both of those will bind to the core.  How can I say 5 per socket and
</span><br>
<span class="quotelev2">&gt;&gt; only 1 per core and bind to a single hardware thread?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi 1.8.8.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Stephen
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28520.php">http://www.open-mpi.org/community/lists/users/2016/02/28520.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/02/28520.php">http://www.open-mpi.org/community/lists/users/2016/02/28520.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28522.php">Kim Walisch: "[OMPI users] Open MPI backwards incompatibility issue in statically linked program"</a>
<li><strong>Previous message:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>In reply to:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
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
