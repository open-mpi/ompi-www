<?
$subject_val = "Re: [OMPI devel] Routed 'unity' broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 13:01:29 2008" -->
<!-- isoreceived="20080331170129" -->
<!-- sent="Mon, 31 Mar 2008 13:01:18 -0400" -->
<!-- isosent="20080331170118" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Routed 'unity' broken on trunk" -->
<!-- id="635D169B-A1AC-4BAF-89F8-04BDABE6AA14_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C416741F.CE1F%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Routed 'unity' broken on trunk<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 13:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3577.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3577.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2008, at 12:57 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/31/08 9:28 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the moment I only use unity with C/R. Mostly because I have not
</span><br>
<span class="quotelev2">&gt;&gt; verified that the other components work properly under the C/R
</span><br>
<span class="quotelev2">&gt;&gt; conditions. I can verify others, but that doesn't solve the problem
</span><br>
<span class="quotelev2">&gt;&gt; with the unity component. :/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is not critical that these jobs launch quickly, but that they
</span><br>
<span class="quotelev2">&gt;&gt; launch correctly for the moment. When you say 'slow the launch' are
</span><br>
<span class="quotelev2">&gt;&gt; you talking severely as in seconds/minutes for small nps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't say &quot;severely&quot; - I said &quot;measurably&quot;. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will require an additional communication to the daemons to let  
</span><br>
<span class="quotelev1">&gt; them know
</span><br>
<span class="quotelev1">&gt; how to talk to the procs. In the current unity component, the  
</span><br>
<span class="quotelev1">&gt; daemons never
</span><br>
<span class="quotelev1">&gt; talk to the procs themselves, and so they don't know contact info for
</span><br>
<span class="quotelev1">&gt; rank=0.
</span><br>
<p>ah I see.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess a
</span><br>
<span class="quotelev2">&gt;&gt; followup question is why did this component break in the first place?
</span><br>
<span class="quotelev2">&gt;&gt; or worded differently, what changed in ORTE such that the unity
</span><br>
<span class="quotelev2">&gt;&gt; component will suddenly deadlock when it didn't before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are trying to improve scalability. Biggest issue is the modex,  
</span><br>
<span class="quotelev1">&gt; which we
</span><br>
<span class="quotelev1">&gt; improved considerably by having the procs pass the modex info to the
</span><br>
<span class="quotelev1">&gt; daemons, letting the daemons collect all modex info from procs on  
</span><br>
<span class="quotelev1">&gt; their
</span><br>
<span class="quotelev1">&gt; node, and then having the daemons send that info along to the rank=0  
</span><br>
<span class="quotelev1">&gt; proc
</span><br>
<span class="quotelev1">&gt; for collection and xcast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem is that in the unity component, the local daemons don't know  
</span><br>
<span class="quotelev1">&gt; how to
</span><br>
<span class="quotelev1">&gt; send the modex to the rank=0 proc. So what I will now have to do is  
</span><br>
<span class="quotelev1">&gt; tell all
</span><br>
<span class="quotelev1">&gt; the daemons how to talk to the procs, and then we will have every  
</span><br>
<span class="quotelev1">&gt; daemon
</span><br>
<span class="quotelev1">&gt; opening a socket to rank=0. That's where the time will be lost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our original expectation was to get everyone off of unity as quickly  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; possible - in fact, Brian and I had planned to completely remove that
</span><br>
<span class="quotelev1">&gt; component as quickly as possible as it (a) scales ugly and (b) gets  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; way of things. Very hard to keep it alive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So for now, I'll just do the simple thing and hopefully that will be
</span><br>
<span class="quotelev1">&gt; adequate - let me know if/when you are able to get C/R working on  
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev1">&gt; routed components.
</span><br>
<p>Sounds good. I'll look into supporting the tree routed component, but  
<br>
that will probably take a couple weeks.
<br>
<p>Thanks for the clarification.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for looking into this,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 31, 2008, at 11:10 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I figured out the issue - there is a simple and a hard way to fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this. So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before I do, let me see what makes sense.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The simple solution involves updating the daemons with contact info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs so that they can send their collected modex info to the rank=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will measurably slow the launch when using unity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hard solution is to do a hybrid routed approach whereby the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would route any daemon-to-proc communication while the procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; direct proc-to-proc messaging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some reason to be using the &quot;unity&quot; component? Do you care
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using unity launch slower?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/31/08 7:57 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've just noticed that it seems that the 'unity' routed component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seems to be broken when using more than one machine. I'm using Odin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and r18028 of the trunk, and have confirmed that this problem  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; occurs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with SLURM and rsh. I think this break came in on Friday as that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when some of my MTT tests started to hang and fail, but I cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a specific revision at this point. The backtraces (enclosed) of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes point to the grpcomm allgather routine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The 'noop' program calls MPI_Init, sleeps, then calls MPI_Finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RSH example from odin023 - so no SLURM variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These work:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ mpirun -np 2 -host odin023  noop -v 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ mpirun -np 2 -host odin023,odin024  noop -v 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ mpirun -np 2 -mca routed unity -host odin023  noop -v 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This hangs:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ mpirun -np 2 -mca routed unity -host odin023,odin024  noop -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I attach to the 'noop' process on odin023 I get the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; backtrace:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x0000002a96226b39 in syscall () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x0000002a95a1e485 in epoll_wait (epfd=3, events=0x50b330,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maxevents=1023, timeout=1000) at epoll_sub.c:61
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x0000002a95a1e7f7 in epoll_dispatch (base=0x506c30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arg=0x506910,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tv=0x7fbfffe840) at epoll.c:210
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x0000002a95a1c057 in opal_event_base_loop (base=0x506c30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flags=5) at event.c:779
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x0000002a95a1be8f in opal_event_loop (flags=5) at event.c:702
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x0000002a95a0bef8 in opal_progress () at runtime/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x0000002a958b9e48 in orte_grpcomm_base_allgather
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sbuf=0x7fbfffeae0, rbuf=0x7fbfffea80) at base/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grpcomm_base_allgather.c:238
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x0000002a958bd37c in orte_grpcomm_base_modex (procs=0x0) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grpcomm_base_modex.c:413
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x0000002a956b8416 in ompi_mpi_init (argc=3, argv=0x7fbfffed58,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested=0, provided=0x7fbfffec38) at runtime/ompi_mpi_init.c:510
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x0000002a956f2109 in PMPI_Init (argc=0x7fbfffec7c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7fbfffec70) at pinit.c:88
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000400bf4 in main (argc=3, argv=0x7fbfffed58) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; noop.c:39
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The 'noop' process on odin024 has a similar backtrace:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x0000002a96226b39 in syscall () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x0000002a95a1e485 in epoll_wait (epfd=3, events=0x50b390,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maxevents=1023, timeout=1000) at epoll_sub.c:61
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x0000002a95a1e7f7 in epoll_dispatch (base=0x506cc0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arg=0x506c20,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tv=0x7fbfffe9d0) at epoll.c:210
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x0000002a95a1c057 in opal_event_base_loop (base=0x506cc0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flags=5) at event.c:779
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x0000002a95a1be8f in opal_event_loop (flags=5) at event.c:702
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x0000002a95a0bef8 in opal_progress () at runtime/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 169
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x0000002a958b97c5 in orte_grpcomm_base_allgather
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sbuf=0x7fbfffec70, rbuf=0x7fbfffec10) at base/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grpcomm_base_allgather.c:163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x0000002a958bd37c in orte_grpcomm_base_modex (procs=0x0) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grpcomm_base_modex.c:413
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x0000002a956b8416 in ompi_mpi_init (argc=3, argv=0x7fbfffeee8,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested=0, provided=0x7fbfffedc8) at runtime/ompi_mpi_init.c:510
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x0000002a956f2109 in PMPI_Init (argc=0x7fbfffee0c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7fbfffee00) at pinit.c:88
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000400bf4 in main (argc=3, argv=0x7fbfffeee8) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; noop.c:39
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3577.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3577.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3579.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
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
