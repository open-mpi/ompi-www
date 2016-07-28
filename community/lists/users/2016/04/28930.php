<?
$subject_val = "[OMPI users] Possible bug in MPI_Barrier() ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 18:15:46 2016" -->
<!-- isoreceived="20160412221546" -->
<!-- sent="Tue, 12 Apr 2016 18:15:45 -0400" -->
<!-- isosent="20160412221545" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Possible bug in MPI_Barrier() ?" -->
<!-- id="CAHXxYDgfVWvRJMSSRSuPDkmCRy+hSyXKQUFCN83pCC1jQkT5TA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Possible bug in MPI_Barrier() ?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 18:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<li><strong>Previous message:</strong> <a href="28929.php">dpchoudh .: "[OMPI users] Debugging help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I have reported this issue before, but then had brushed it off as something
<br>
that was caused by my modifications to the source tree. It looks like that
<br>
is not the case.
<br>
<p>Just now, I did the following:
<br>
<p>1. Cloned a fresh copy from master.
<br>
2. Configured with the following flags, built and installed it in my
<br>
two-node &quot;cluster&quot;.
<br>
--enable-debug --enable-debug-symbols --disable-dlopen
<br>
3. Compiled the following program, mpitest.c with these flags: -g3 -Wall
<br>
-Wextra
<br>
4. Ran it like this:
<br>
[durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp
<br>
-mca pml ob1 ./mpitest
<br>
<p>With this, the code hangs at MPI_Barrier() on both nodes, after generating
<br>
the following output:
<br>
<p>Hello world from processor smallMPI, rank 0 out of 2 processors
<br>
Hello world from processor bigMPI, rank 1 out of 2 processors
<br>
smallMPI sent haha!
<br>
bigMPI received haha!
<br>
&lt;Hangs until killed by ^C&gt;
<br>
Attaching to the hung process at one node gives the following backtrace:
<br>
<p>(gdb) bt
<br>
#0  0x00007f55b0f41c3d in poll () from /lib64/libc.so.6
<br>
#1  0x00007f55b03ccde6 in poll_dispatch (base=0x70e7b0, tv=0x7ffd1bb551c0)
<br>
at poll.c:165
<br>
#2  0x00007f55b03c4a90 in opal_libevent2022_event_base_loop (base=0x70e7b0,
<br>
flags=2) at event.c:1630
<br>
#3  0x00007f55b02f0144 in opal_progress () at runtime/opal_progress.c:171
<br>
#4  0x00007f55b14b4d8b in opal_condition_wait (c=0x7f55b19fec40
<br>
&lt;ompi_request_cond&gt;, m=0x7f55b19febc0 &lt;ompi_request_lock&gt;) at
<br>
../opal/threads/condition.h:76
<br>
#5  0x00007f55b14b531b in ompi_request_default_wait_all (count=2,
<br>
requests=0x7ffd1bb55370, statuses=0x7ffd1bb55340) at request/req_wait.c:287
<br>
#6  0x00007f55b157a225 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16,
<br>
source=1, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at base/coll_base_barrier.c:63
<br>
#7  0x00007f55b157a92a in ompi_coll_base_barrier_intra_two_procs
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x7c2630) at
<br>
base/coll_base_barrier.c:308
<br>
#8  0x00007f55b15aafec in ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x7c2630) at
<br>
coll_tuned_decision_fixed.c:196
<br>
#9  0x00007f55b14d36fd in PMPI_Barrier (comm=0x601280
<br>
&lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
<br>
#10 0x0000000000400b0b in main (argc=1, argv=0x7ffd1bb55658) at mpitest.c:26
<br>
(gdb)
<br>
<p>Thinking that this might be a bug in tuned collectives, since that is what
<br>
the stack shows, I ran the program like this (basically adding the ^tuned
<br>
part)
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp
<br>
-mca pml ob1 -mca coll ^tuned ./mpitest
<br>
<p>It still hangs, but now with a different stack trace:
<br>
(gdb) bt
<br>
#0  0x00007f910d38ac3d in poll () from /lib64/libc.so.6
<br>
#1  0x00007f910c815de6 in poll_dispatch (base=0x1a317b0, tv=0x7fff43ee3610)
<br>
at poll.c:165
<br>
#2  0x00007f910c80da90 in opal_libevent2022_event_base_loop
<br>
(base=0x1a317b0, flags=2) at event.c:1630
<br>
#3  0x00007f910c739144 in opal_progress () at runtime/opal_progress.c:171
<br>
#4  0x00007f910db130f7 in opal_condition_wait (c=0x7f910de47c40
<br>
&lt;ompi_request_cond&gt;, m=0x7f910de47bc0 &lt;ompi_request_lock&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:76
<br>
#5  0x00007f910db132d8 in ompi_request_wait_completion (req=0x1b07680) at
<br>
../../../../ompi/request/request.h:383
<br>
#6  0x00007f910db1533b in mca_pml_ob1_send (buf=0x0, count=0,
<br>
datatype=0x7f910de1e340 &lt;ompi_mpi_byte&gt;, dst=1, tag=-16,
<br>
sendmode=MCA_PML_BASE_SEND_STANDARD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at pml_ob1_isend.c:259
<br>
#7  0x00007f910d9c3b38 in ompi_coll_base_barrier_intra_basic_linear
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1b092c0) at
<br>
base/coll_base_barrier.c:368
<br>
#8  0x00007f910d91c6fd in PMPI_Barrier (comm=0x601280
<br>
&lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
<br>
#9  0x0000000000400b0b in main (argc=1, argv=0x7fff43ee3a58) at mpitest.c:26
<br>
(gdb)
<br>
<p>The mpitest.c program is as follows:
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int world_size, world_rank, name_len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(hostname, &amp;name_len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world from processor %s, rank %d out of %d processors\n&quot;,
<br>
hostname, world_rank, world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (world_rank == 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s received %s\n&quot;, hostname, buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;strcpy(buf, &quot;haha!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s sent %s\n&quot;, hostname, buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>The hostfile is as follows:
<br>
10.10.10.10 slots=1
<br>
10.10.10.11 slots=1
<br>
<p>The two nodes are connected by three physical and 3 logical networks:
<br>
Physical: Gigabit Ethernet, 10G iWARP, 20G Infiniband
<br>
Logical: IP (all 3), PSM (Qlogic Infiniband), Verbs (iWARP and Infiniband)
<br>
<p>Please note again that this is a fresh, brand new clone.
<br>
<p>Is this a bug (perhaps a side effect of --disable-dlopen) or something I am
<br>
doing wrong?
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<li><strong>Previous message:</strong> <a href="28929.php">dpchoudh .: "[OMPI users] Debugging help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
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
