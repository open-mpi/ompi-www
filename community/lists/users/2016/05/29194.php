<?
$subject_val = "[OMPI users] One more (possible) bug report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 13 23:24:56 2016" -->
<!-- isoreceived="20160514032456" -->
<!-- sent="Fri, 13 May 2016 23:24:54 -0400" -->
<!-- isosent="20160514032454" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] One more (possible) bug report" -->
<!-- id="CAHXxYDhTFvJ-Knr2LTCtn6RQJV-1xn9w79qdehGexxSLmD9fnA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] One more (possible) bug report<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-13 23:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29195.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Previous message:</strong> <a href="29193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29195.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Reply:</strong> <a href="29195.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Reply:</strong> <a href="29196.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers
<br>
<p>I have been observing this issue all along on the master branch, but have
<br>
been brushing off as something to do with my installation.
<br>
<p>Right now, I just downloaded a fresh checkout (via git pull), built and
<br>
installed it (after deleting /usr/local/lib/openmpi/) and I can reproduce
<br>
the hang 100% of the time.
<br>
<p>Description of the setup:
<br>
<p>1. Two x86_64 boxes (dual xeons, 6 core each)
<br>
2. Four network interfaces, 3 running IP:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Broadcom GbE (IP 10.01.10.X/24) BW 1 Gbps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Chelsio iWARP (IP 10.10.10.X/24) BW 10 Gbps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Qlogic Infiniband (IP 10.01.11.X/24) BW 20Gbps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LSI logic Fibre channel (not running IP, I don't think this matters)
<br>
<p>All of the NICs have their link UP. All the NICs are in separate IP
<br>
subnets, connected back to back.
<br>
<p>With this, the following command hangs:
<br>
(The hostfile is this:
<br>
10.10.10.10 slots=1
<br>
10.10.10.11 slots=1
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp
<br>
-mca pml ob1 ./mpitest
<br>
<p>with the following output:
<br>
<p>Hello world from processor smallMPI, rank 0 out of 2 processors
<br>
Hello world from processor bigMPI, rank 1 out of 2 processors
<br>
smallMPI sent haha!, rank 0
<br>
bigMPI received haha!, rank 1
<br>
<p>The stack trace at rank 0 is:
<br>
<p>(gdb) bt
<br>
#0  0x00007f9cb844769d in poll () from /lib64/libc.so.6
<br>
#1  0x00007f9cb79354d6 in poll_dispatch (base=0xddb540, tv=0x7ffc065d01b0)
<br>
at poll.c:165
<br>
#2  0x00007f9cb792d180 in opal_libevent2022_event_base_loop (base=0xddb540,
<br>
flags=2) at event.c:1630
<br>
#3  0x00007f9cb7851e74 in opal_progress () at runtime/opal_progress.c:171
<br>
#4  0x00007f9cb89bc47d in opal_condition_wait (c=0x7f9cb8f37c40
<br>
&lt;ompi_request_cond&gt;, m=0x7f9cb8f37bc0 &lt;ompi_request_lock&gt;) at
<br>
../opal/threads/condition.h:76
<br>
#5  0x00007f9cb89bcadf in ompi_request_default_wait_all (count=2,
<br>
requests=0x7ffc065d0360, statuses=0x7ffc065d0330) at request/req_wait.c:287
<br>
#6  0x00007f9cb8a95469 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16,
<br>
source=1, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at base/coll_base_barrier.c:63
<br>
#7  0x00007f9cb8a95b86 in ompi_coll_base_barrier_intra_two_procs
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0xeb4a00) at
<br>
base/coll_base_barrier.c:313
<br>
#8  0x00007f9cb8ac6d1c in ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0xeb4a00) at
<br>
coll_tuned_decision_fixed.c:196
<br>
#9  0x00007f9cb89dc689 in PMPI_Barrier (comm=0x601280
<br>
&lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
<br>
#10 0x0000000000400b11 in main (argc=1, argv=0x7ffc065d0648) at mpitest.c:27
<br>
<p>and at rank 1 is:
<br>
<p>(gdb) bt
<br>
#0  0x00007f1101e7d69d in poll () from /lib64/libc.so.6
<br>
#1  0x00007f110136b4d6 in poll_dispatch (base=0x1d54540, tv=0x7ffd73013710)
<br>
at poll.c:165
<br>
#2  0x00007f1101363180 in opal_libevent2022_event_base_loop
<br>
(base=0x1d54540, flags=2) at event.c:1630
<br>
#3  0x00007f1101287e74 in opal_progress () at runtime/opal_progress.c:171
<br>
#4  0x00007f11023f247d in opal_condition_wait (c=0x7f110296dc40
<br>
&lt;ompi_request_cond&gt;, m=0x7f110296dbc0 &lt;ompi_request_lock&gt;) at
<br>
../opal/threads/condition.h:76
<br>
#5  0x00007f11023f2adf in ompi_request_default_wait_all (count=2,
<br>
requests=0x7ffd730138c0, statuses=0x7ffd73013890) at request/req_wait.c:287
<br>
#6  0x00007f11024cb469 in ompi_coll_base_sendrecv_zero (dest=0, stag=-16,
<br>
source=0, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at base/coll_base_barrier.c:63
<br>
#7  0x00007f11024cbb86 in ompi_coll_base_barrier_intra_two_procs
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1e2ebc0) at
<br>
base/coll_base_barrier.c:313
<br>
#8  0x00007f11024cde3c in ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1e2ebc0) at
<br>
coll_tuned_decision_fixed.c:196
<br>
#9  0x00007f1102412689 in PMPI_Barrier (comm=0x601280
<br>
&lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
<br>
#10 0x0000000000400b11 in main (argc=1, argv=0x7ffd73013ba8) at mpitest.c:27
<br>
<p>The code for the test program is:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main(int argc, char *argv[])
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
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
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
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
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
<p>I have a strong feeling that there is an issue in this kind of situation.
<br>
I'll be more than happy to run further tests if someone asks me to.
<br>
<p>Thank you
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29194/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29195.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Previous message:</strong> <a href="29193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun command won't run unless the firewalld	daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29195.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Reply:</strong> <a href="29195.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Reply:</strong> <a href="29196.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
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
