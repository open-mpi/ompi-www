<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 04:06:58 2005" -->
<!-- isoreceived="20050804090658" -->
<!-- sent="Thu, 4 Aug 2005 11:06:37 +0200" -->
<!-- isosent="20050804090637" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re:  Broken --enable-mpi-threads" -->
<!-- id="20050804090637.GS29812_at_unixer.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A32D103D-B541-490B-8187-6D5C7EF9C397_at_open-mpi.org" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 04:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0073.php">Jeff Squyres: "Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0071.php">Ralph H. Castain: "Re:  broken rmgr?"</a>
<li><strong>In reply to:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 02, 2005 at 02:40:21PM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; The tree now compiles with the --enable-mpi-threads problem.  There  
</span><br>
<span class="quotelev1">&gt; is a bug in the event library that will cause deadlocks in orterun,  
</span><br>
<span class="quotelev1">&gt; so the tree isn't exactly useful right now.  Tim Woodall is going to  
</span><br>
<span class="quotelev1">&gt; look into the problem.
</span><br>
ok - thanks!
<br>
<p>A new problem arised after compiling and running my first test-program.
<br>
It simply spawns a separate thread on each rank and sends/receives 1
<br>
byte (MPI_BYTE) messages in this thread. There seems to be a race
<br>
condition, sometimes, all messages are received correctly, sometimes all
<br>
messages fail and the receiving rank eats up a lot of memory (&gt;600MB)
<br>
and segfaults. 
<br>
<p>The backtrace is:
<br>
#0  0x0015d828 in ompi_convertor_unpack (pConv=0x83569e0, iov=0x479e798, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;out_size=0x479e7bc, max_data=0x479e7b8, freeAfter=0x479e7b4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at convertor.c:104
<br>
#1  0x00f76af4 in mca_ptl_tcp_recv_frag_progress (frag=0x8356980)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ptl_tcp_recvfrag.h:166
<br>
#2  0x00f76124 in mca_ptl_tcp_matched (ptl=0x83321a8, frag=0x8356980)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ptl_tcp.c:302
<br>
#3  0x0090d314 in mca_pml_teg_recv_frag_match (ptl=0x8320948, frag=0x8356980, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;header=0x8356ab4) at pml_teg_recvfrag.c:82
<br>
#4  0x00f7bbdc in mca_ptl_tcp_recv_frag_handler (frag=0x8356a94, sd=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ptl_tcp_recvfrag.c:107
<br>
#5  0x00f7a20f in mca_ptl_tcp_peer_recv_handler (sd=12, flags=2, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;user=0x836b628) at ptl_tcp_peer.c:606
<br>
#6  0x002a8ff8 in opal_event_process_active () at event.c:453
<br>
#7  0x002a92e3 in opal_event_loop (flags=2) at event.c:543
<br>
#8  0x002b733b in opal_progress () at opal_progress.c:211
<br>
#9  0x00909295 in opal_condition_wait (c=0x23bc80, m=0x23bce0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at condition.h:66
<br>
#10 0x00908a93 in mca_pml_teg_recv (addr=0x479ea94, count=1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x804a4a8, src=-1, tag=100002, comm=0x804a5f0, status=0x8380108)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_teg_irecv.c:100
<br>
#11 0x001bc50f in PMPI_Recv (buf=0x479ea94, count=1, type=0x804a4a8, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source=-1, tag=100002, comm=0x804a5f0, status=0x8380108) at precv.c:66
<br>
#12 0x08048f66 in MPI_Barrier_start_worker_thread (param=0x83809f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at nbbarr.c:76
<br>
#13 0x0072fdec in pthread_create@@GLIBC_2.1 () from /lib/tls/libpthread.so.0
<br>
#14 0x0082519a in iswctype_l () from /lib/tls/libc.so.6
<br>
<p>The zipped corefile can be found at:
<br>
<a href="http://gustav.informatik.tu-chemnitz.de/~htor/sec/core.23839.gz">http://gustav.informatik.tu-chemnitz.de/~htor/sec/core.23839.gz</a>
<br>
<p>Any Idea or should I try to debug it?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: ----- pgp: <a href="http://www.unixer.de/htor-key.asc">http://www.unixer.de/htor-key.asc</a> -----
An optimist believes we live in the best of all possible worlds.  
A pessimist is sure of it!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0073.php">Jeff Squyres: "Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0071.php">Ralph H. Castain: "Re:  broken rmgr?"</a>
<li><strong>In reply to:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
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
