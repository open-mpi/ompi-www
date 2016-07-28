<?
$subject_val = "Re: [OMPI users] One more (possible) bug report";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 06:45:43 2016" -->
<!-- isoreceived="20160514104543" -->
<!-- sent="Sat, 14 May 2016 10:45:40 +0000" -->
<!-- isosent="20160514104540" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One more (possible) bug report" -->
<!-- id="85895DC1-D89B-43DC-A0FD-D937D11595B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjF1g5MeSyO+j_=cYK=ykeyUaMT_RqmOdCC0s13cNSXWw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 06:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29199.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>In reply to:</strong> <a href="29199.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to try a pure TCP benchmark across this problematic NIC (e.g., NetpipeTCP or iperf).
<br>
<p>That will take MPI out of the equation and see if you are able to pass TCP traffic correctly.  Make sure to test sizes both smaller and larger than your MTU.
<br>
<p><p><span class="quotelev1">&gt; On May 14, 2016, at 1:25 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I used IP addresses in all my tests. What I found that if I used the IP address of the Broadcom NIC in hostfile and used that network exclusively (btl_tcp_if_include), the mpirun command hung silently. If I used the IP address of another NIC in the host file (and Broadcom NIC exclusively), mpirun crashed saying the remote process is unreachable. If I used the other two networks exclusively (and any of their IP addresses in the host file) it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since TCP itself does not care what the underlying NIC is, it is most likely some kind of firewall issue, as you guessed (I did disable it, but there could be other related issues). In any case, I believe it has nothing to do with OMPI. One thing that is different between the Broadcom NIC and the rest is that the Broadcom NIC is connected to the WAN side and thus gets its IP via DHCP, where as the rest have static IPs. I don't see why that would make a difference, but it is possible that CentOS is enforcing some kind of security policy that I am not aware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for for feedback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, May 14, 2016 at 1:13 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; iirc, ompi internally uses networks and not interface names.
</span><br>
<span class="quotelev1">&gt; what did you use in your tests ?
</span><br>
<span class="quotelev1">&gt; can you try with networks ?
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
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your prompt follow up. It looks this this issue is somehow specific to the Broadcom NIC. If I take it out, the rest of them work in any combination. On further investigation, I found that the name that 'ifconfig' shows for this intterface is different from what it is named in internal scripts. Could be a bug in CentOS, but at least does not look like an OpenMPI issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for raising the false alarm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, May 14, 2016 at 12:02 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; at first I recommend you test 7 cases
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
<span class="quotelev1">&gt; as usual, double check no firewall is running, and your hosts can ping each other 
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
<span class="quotelev1">&gt; Dear developers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been observing this issue all along on the master branch, but have been brushing off as something to do with my installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, I just downloaded a fresh checkout (via git pull), built and installed it (after deleting /usr/local/lib/openmpi/) and I can reproduce the hang 100% of the time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Description of the setup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Two x86_64 boxes (dual xeons, 6 core each)
</span><br>
<span class="quotelev1">&gt; 2. Four network interfaces, 3 running IP:
</span><br>
<span class="quotelev1">&gt;     Broadcom GbE (IP 10.01.10.X/24) BW 1 Gbps
</span><br>
<span class="quotelev1">&gt;     Chelsio iWARP (IP 10.10.10.X/24) BW 10 Gbps
</span><br>
<span class="quotelev1">&gt;     Qlogic Infiniband (IP 10.01.11.X/24) BW 20Gbps
</span><br>
<span class="quotelev1">&gt;     LSI logic Fibre channel (not running IP, I don't think this matters)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of the NICs have their link UP. All the NICs are in separate IP subnets, connected back to back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this, the following command hangs:
</span><br>
<span class="quotelev1">&gt; (The hostfile is this:
</span><br>
<span class="quotelev1">&gt; 10.10.10.10 slots=1
</span><br>
<span class="quotelev1">&gt; 10.10.10.11 slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp -mca pml ob1 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev1">&gt; Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev1">&gt; smallMPI sent haha!, rank 0
</span><br>
<span class="quotelev1">&gt; bigMPI received haha!, rank 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The stack trace at rank 0 is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f9cb844769d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f9cb79354d6 in poll_dispatch (base=0xddb540, tv=0x7ffc065d01b0) at poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f9cb792d180 in opal_libevent2022_event_base_loop (base=0xddb540, flags=2) at event.c:1630
</span><br>
<span class="quotelev1">&gt; #3  0x00007f9cb7851e74 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt; #4  0x00007f9cb89bc47d in opal_condition_wait (c=0x7f9cb8f37c40 &lt;ompi_request_cond&gt;, m=0x7f9cb8f37bc0 &lt;ompi_request_lock&gt;) at ../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #5  0x00007f9cb89bcadf in ompi_request_default_wait_all (count=2, requests=0x7ffc065d0360, statuses=0x7ffc065d0330) at request/req_wait.c:287
</span><br>
<span class="quotelev1">&gt; #6  0x00007f9cb8a95469 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16, source=1, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev1">&gt;     at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev1">&gt; #7  0x00007f9cb8a95b86 in ompi_coll_base_barrier_intra_two_procs (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0xeb4a00) at base/coll_base_barrier.c:313
</span><br>
<span class="quotelev1">&gt; #8  0x00007f9cb8ac6d1c in ompi_coll_tuned_barrier_intra_dec_fixed (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0xeb4a00) at coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev1">&gt; #9  0x00007f9cb89dc689 in PMPI_Barrier (comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400b11 in main (argc=1, argv=0x7ffc065d0648) at mpitest.c:27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and at rank 1 is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f1101e7d69d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f110136b4d6 in poll_dispatch (base=0x1d54540, tv=0x7ffd73013710) at poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f1101363180 in opal_libevent2022_event_base_loop (base=0x1d54540, flags=2) at event.c:1630
</span><br>
<span class="quotelev1">&gt; #3  0x00007f1101287e74 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt; #4  0x00007f11023f247d in opal_condition_wait (c=0x7f110296dc40 &lt;ompi_request_cond&gt;, m=0x7f110296dbc0 &lt;ompi_request_lock&gt;) at ../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #5  0x00007f11023f2adf in ompi_request_default_wait_all (count=2, requests=0x7ffd730138c0, statuses=0x7ffd73013890) at request/req_wait.c:287
</span><br>
<span class="quotelev1">&gt; #6  0x00007f11024cb469 in ompi_coll_base_sendrecv_zero (dest=0, stag=-16, source=0, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev1">&gt;     at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev1">&gt; #7  0x00007f11024cbb86 in ompi_coll_base_barrier_intra_two_procs (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1e2ebc0) at base/coll_base_barrier.c:313
</span><br>
<span class="quotelev1">&gt; #8  0x00007f11024cde3c in ompi_coll_tuned_barrier_intra_dec_fixed (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1e2ebc0) at coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev1">&gt; #9  0x00007f1102412689 in PMPI_Barrier (comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400b11 in main (argc=1, argv=0x7ffd73013ba8) at mpitest.c:27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code for the test program is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev1">&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s received %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     strcpy(buf, &quot;haha!&quot;); 
</span><br>
<span class="quotelev1">&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s sent %s, rank %d\n&quot;, hostname, buf, world_rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a strong feeling that there is an issue in this kind of situation. I'll be more than happy to run further tests if someone asks me to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29196.php">http://www.open-mpi.org/community/lists/users/2016/05/29196.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29198.php">http://www.open-mpi.org/community/lists/users/2016/05/29198.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29199.php">http://www.open-mpi.org/community/lists/users/2016/05/29199.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29199.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
<li><strong>In reply to:</strong> <a href="29199.php">dpchoudh .: "Re: [OMPI users] One more (possible) bug report"</a>
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
