<?
$subject_val = "[OMPI devel] Routed 'unity' broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 09:57:45 2008" -->
<!-- isoreceived="20080331135745" -->
<!-- sent="Mon, 31 Mar 2008 09:57:35 -0400" -->
<!-- isosent="20080331135735" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] Routed 'unity' broken on trunk" -->
<!-- id="F4670358-6E14-4103-9525-4F0EFA94F8EC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Routed 'unity' broken on trunk<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 09:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3574.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3572.php">Jeff Squyres: "Re: [OMPI devel] Scalability of openib modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3574.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3574.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I've just noticed that it seems that the 'unity' routed component  
<br>
seems to be broken when using more than one machine. I'm using Odin  
<br>
and r18028 of the trunk, and have confirmed that this problem occurs  
<br>
with SLURM and rsh. I think this break came in on Friday as that is  
<br>
when some of my MTT tests started to hang and fail, but I cannot point  
<br>
to a specific revision at this point. The backtraces (enclosed) of the  
<br>
processes point to the grpcomm allgather routine.
<br>
<p>The 'noop' program calls MPI_Init, sleeps, then calls MPI_Finalize.
<br>
<p>RSH example from odin023 - so no SLURM variables:
<br>
These work:
<br>
&nbsp;&nbsp;shell$ mpirun -np 2 -host odin023  noop -v 1
<br>
&nbsp;&nbsp;shell$ mpirun -np 2 -host odin023,odin024  noop -v 1
<br>
&nbsp;&nbsp;shell$ mpirun -np 2 -mca routed unity -host odin023  noop -v 1
<br>
<p>This hangs:
<br>
&nbsp;&nbsp;shell$ mpirun -np 2 -mca routed unity -host odin023,odin024  noop -v 1
<br>
<p><p>If I attach to the 'noop' process on odin023 I get the following  
<br>
backtrace:
<br>
------------------------------------------------
<br>
(gdb) bt
<br>
#0  0x0000002a96226b39 in syscall () from /lib64/tls/libc.so.6
<br>
#1  0x0000002a95a1e485 in epoll_wait (epfd=3, events=0x50b330,  
<br>
maxevents=1023, timeout=1000) at epoll_sub.c:61
<br>
#2  0x0000002a95a1e7f7 in epoll_dispatch (base=0x506c30, arg=0x506910,  
<br>
tv=0x7fbfffe840) at epoll.c:210
<br>
#3  0x0000002a95a1c057 in opal_event_base_loop (base=0x506c30,  
<br>
flags=5) at event.c:779
<br>
#4  0x0000002a95a1be8f in opal_event_loop (flags=5) at event.c:702
<br>
#5  0x0000002a95a0bef8 in opal_progress () at runtime/opal_progress.c: 
<br>
169
<br>
#6  0x0000002a958b9e48 in orte_grpcomm_base_allgather  
<br>
(sbuf=0x7fbfffeae0, rbuf=0x7fbfffea80) at base/ 
<br>
grpcomm_base_allgather.c:238
<br>
#7  0x0000002a958bd37c in orte_grpcomm_base_modex (procs=0x0) at base/ 
<br>
grpcomm_base_modex.c:413
<br>
#8  0x0000002a956b8416 in ompi_mpi_init (argc=3, argv=0x7fbfffed58,  
<br>
requested=0, provided=0x7fbfffec38) at runtime/ompi_mpi_init.c:510
<br>
#9  0x0000002a956f2109 in PMPI_Init (argc=0x7fbfffec7c,  
<br>
argv=0x7fbfffec70) at pinit.c:88
<br>
#10 0x0000000000400bf4 in main (argc=3, argv=0x7fbfffed58) at noop.c:39
<br>
------------------------------------------------
<br>
<p>The 'noop' process on odin024 has a similar backtrace:
<br>
------------------------------------------------
<br>
(gdb) bt
<br>
#0  0x0000002a96226b39 in syscall () from /lib64/tls/libc.so.6
<br>
#1  0x0000002a95a1e485 in epoll_wait (epfd=3, events=0x50b390,  
<br>
maxevents=1023, timeout=1000) at epoll_sub.c:61
<br>
#2  0x0000002a95a1e7f7 in epoll_dispatch (base=0x506cc0, arg=0x506c20,  
<br>
tv=0x7fbfffe9d0) at epoll.c:210
<br>
#3  0x0000002a95a1c057 in opal_event_base_loop (base=0x506cc0,  
<br>
flags=5) at event.c:779
<br>
#4  0x0000002a95a1be8f in opal_event_loop (flags=5) at event.c:702
<br>
#5  0x0000002a95a0bef8 in opal_progress () at runtime/opal_progress.c: 
<br>
169
<br>
#6  0x0000002a958b97c5 in orte_grpcomm_base_allgather  
<br>
(sbuf=0x7fbfffec70, rbuf=0x7fbfffec10) at base/ 
<br>
grpcomm_base_allgather.c:163
<br>
#7  0x0000002a958bd37c in orte_grpcomm_base_modex (procs=0x0) at base/ 
<br>
grpcomm_base_modex.c:413
<br>
#8  0x0000002a956b8416 in ompi_mpi_init (argc=3, argv=0x7fbfffeee8,  
<br>
requested=0, provided=0x7fbfffedc8) at runtime/ompi_mpi_init.c:510
<br>
#9  0x0000002a956f2109 in PMPI_Init (argc=0x7fbfffee0c,  
<br>
argv=0x7fbfffee00) at pinit.c:88
<br>
#10 0x0000000000400bf4 in main (argc=3, argv=0x7fbfffeee8) at noop.c:39
<br>
------------------------------------------------
<br>
<p><p>Cheers,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3574.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3572.php">Jeff Squyres: "Re: [OMPI devel] Scalability of openib modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3574.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3574.php">Ralph H Castain: "Re: [OMPI devel] Routed 'unity' broken on trunk"</a>
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
