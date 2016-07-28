<?
$subject_val = "Re: [OMPI users] One more (possible) bug report";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 01:01:12 2016" -->
<!-- isoreceived="20160514050112" -->
<!-- sent="Sat, 14 May 2016 01:01:10 -0400" -->
<!-- isosent="20160514050110" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One more (possible) bug report" -->
<!-- id="CAHXxYDhN7L67_gGEwwrsvnsDX_XwA_TE50+q_G28nSM+fBW4Pw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5ub4dDEv918=rmPmXi-5qZBqQ4SqOUt=cWT3Hkes+vD-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] One more (possible) bug report<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 01:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29198.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Previous message:</strong> <a href="29196.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>In reply to:</strong> <a href="29196.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29198.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Reply:</strong> <a href="29198.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Thanks for your prompt follow up. It looks this this issue is somehow
<br>
specific to the Broadcom NIC. If I take it out, the rest of them work in
<br>
any combination. On further investigation, I found that the name that
<br>
'ifconfig' shows for this intterface is different from what it is named in
<br>
internal scripts. Could be a bug in CentOS, but at least does not look like
<br>
an OpenMPI issue.
<br>
<p>Sorry for raising the false alarm.
<br>
<p>Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Sat, May 14, 2016 at 12:02 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; at first I recommend you test 7 cases
</span><br>
<span class="quotelev1">&gt; - one network only (3 cases)
</span><br>
<span class="quotelev1">&gt; - two networks ony (3 cases)
</span><br>
<span class="quotelev1">&gt; - three networks (1 case)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see when things hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you might also want to
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_if_include 10.1.10.0/24 ...
</span><br>
<span class="quotelev1">&gt; to ensure no hang will happen in oob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as usual, double check no firewall is running, and your hosts can ping
</span><br>
<span class="quotelev1">&gt; each other
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, May 14, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear developers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been observing this issue all along on the master branch, but have
</span><br>
<span class="quotelev2">&gt;&gt; been brushing off as something to do with my installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now, I just downloaded a fresh checkout (via git pull), built and
</span><br>
<span class="quotelev2">&gt;&gt; installed it (after deleting /usr/local/lib/openmpi/) and I can reproduce
</span><br>
<span class="quotelev2">&gt;&gt; the hang 100% of the time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Description of the setup:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Two x86_64 boxes (dual xeons, 6 core each)
</span><br>
<span class="quotelev2">&gt;&gt; 2. Four network interfaces, 3 running IP:
</span><br>
<span class="quotelev2">&gt;&gt;     Broadcom GbE (IP 10.01.10.X/24) BW 1 Gbps
</span><br>
<span class="quotelev2">&gt;&gt;     Chelsio iWARP (IP 10.10.10.X/24) BW 10 Gbps
</span><br>
<span class="quotelev2">&gt;&gt;     Qlogic Infiniband (IP 10.01.11.X/24) BW 20Gbps
</span><br>
<span class="quotelev2">&gt;&gt;     LSI logic Fibre channel (not running IP, I don't think this matters)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All of the NICs have their link UP. All the NICs are in separate IP
</span><br>
<span class="quotelev2">&gt;&gt; subnets, connected back to back.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this, the following command hangs:
</span><br>
<span class="quotelev2">&gt;&gt; (The hostfile is this:
</span><br>
<span class="quotelev2">&gt;&gt; 10.10.10.10 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; 10.10.10.11 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp
</span><br>
<span class="quotelev2">&gt;&gt; -mca pml ob1 ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt; smallMPI sent haha!, rank 0
</span><br>
<span class="quotelev2">&gt;&gt; bigMPI received haha!, rank 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The stack trace at rank 0 is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f9cb844769d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f9cb79354d6 in poll_dispatch (base=0xddb540,
</span><br>
<span class="quotelev2">&gt;&gt; tv=0x7ffc065d01b0) at poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f9cb792d180 in opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt; (base=0xddb540, flags=2) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f9cb7851e74 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f9cb89bc47d in opal_condition_wait (c=0x7f9cb8f37c40
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_request_cond&gt;, m=0x7f9cb8f37bc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f9cb89bcadf in ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev2">&gt;&gt; requests=0x7ffc065d0360, statuses=0x7ffc065d0330) at request/req_wait.c:287
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f9cb8a95469 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; source=1, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f9cb8a95b86 in ompi_coll_base_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0xeb4a00) at
</span><br>
<span class="quotelev2">&gt;&gt; base/coll_base_barrier.c:313
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007f9cb8ac6d1c in ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0xeb4a00) at
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007f9cb89dc689 in PMPI_Barrier (comm=0x601280
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x0000000000400b11 in main (argc=1, argv=0x7ffc065d0648) at
</span><br>
<span class="quotelev2">&gt;&gt; mpitest.c:27
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and at rank 1 is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f1101e7d69d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f110136b4d6 in poll_dispatch (base=0x1d54540,
</span><br>
<span class="quotelev2">&gt;&gt; tv=0x7ffd73013710) at poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f1101363180 in opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt; (base=0x1d54540, flags=2) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f1101287e74 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f11023f247d in opal_condition_wait (c=0x7f110296dc40
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_request_cond&gt;, m=0x7f110296dbc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f11023f2adf in ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev2">&gt;&gt; requests=0x7ffd730138c0, statuses=0x7ffd73013890) at request/req_wait.c:287
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f11024cb469 in ompi_coll_base_sendrecv_zero (dest=0, stag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; source=0, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f11024cbb86 in ompi_coll_base_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1e2ebc0) at
</span><br>
<span class="quotelev2">&gt;&gt; base/coll_base_barrier.c:313
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007f11024cde3c in ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1e2ebc0) at
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007f1102412689 in PMPI_Barrier (comm=0x601280
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x0000000000400b11 in main (argc=1, argv=0x7ffd73013ba8) at
</span><br>
<span class="quotelev2">&gt;&gt; mpitest.c:27
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code for the test program is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev2">&gt;&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a strong feeling that there is an issue in this kind of situation.
</span><br>
<span class="quotelev2">&gt;&gt; I'll be more than happy to run further tests if someone asks me to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev2">&gt;&gt; ageing.
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29196.php">http://www.open-mpi.org/community/lists/users/2016/05/29196.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29198.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Previous message:</strong> <a href="29196.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>In reply to:</strong> <a href="29196.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29198.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>Reply:</strong> <a href="29198.php">Gilles Gouaillardet: "Re: [OMPI users] One more (possible) bug report"</a>
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
