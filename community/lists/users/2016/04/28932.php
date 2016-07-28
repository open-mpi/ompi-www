<?
$subject_val = "Re: [OMPI users] Possible bug in MPI_Barrier() ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 21:32:41 2016" -->
<!-- isoreceived="20160413013241" -->
<!-- sent="Wed, 13 Apr 2016 10:32:40 +0900" -->
<!-- isosent="20160413013240" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in MPI_Barrier() ?" -->
<!-- id="570DA1B8.5040300_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDgfVWvRJMSSRSuPDkmCRy+hSyXKQUFCN83pCC1jQkT5TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible bug in MPI_Barrier() ?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 21:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28933.php">Tom Rosmond: "[OMPI users] system call failed that shouldn't?"</a>
<li><strong>Previous message:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<li><strong>In reply to:</strong> <a href="28930.php">dpchoudh .: "[OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28942.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28942.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is quite unlikely, and fwiw, your test program works for me.
<br>
<p>i suggest you check your 3 TCP networks are usable, for example
<br>
<p>$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp -mca pml ob1 --mca 
<br>
btl_tcp_if_include xxx ./mpitest
<br>
<p>in which xxx is a [list of] interface name :
<br>
eth0
<br>
eth1
<br>
ib0
<br>
eth0,eth1
<br>
eth0,ib0
<br>
...
<br>
eth0,eth1,ib0
<br>
<p>and see where problem start occuring.
<br>
<p>btw, are your 3 interfaces in 3 different subnet ? is routing required 
<br>
between two interfaces of the same type ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
On 4/13/2016 7:15 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have reported this issue before, but then had brushed it off as 
</span><br>
<span class="quotelev1">&gt; something that was caused by my modifications to the source tree. It 
</span><br>
<span class="quotelev1">&gt; looks like that is not the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just now, I did the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Cloned a fresh copy from master.
</span><br>
<span class="quotelev1">&gt; 2. Configured with the following flags, built and installed it in my 
</span><br>
<span class="quotelev1">&gt; two-node &quot;cluster&quot;.
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev1">&gt; 3. Compiled the following program, mpitest.c with these flags: -g3 
</span><br>
<span class="quotelev1">&gt; -Wall -Wextra
</span><br>
<span class="quotelev1">&gt; 4. Ran it like this:
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl 
</span><br>
<span class="quotelev1">&gt; self,tcp -mca pml ob1 ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this, the code hangs at MPI_Barrier() on both nodes, after 
</span><br>
<span class="quotelev1">&gt; generating the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev1">&gt; Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev1">&gt; smallMPI sent haha!
</span><br>
<span class="quotelev1">&gt; bigMPI received haha!
</span><br>
<span class="quotelev1">&gt; &lt;Hangs until killed by ^C&gt;
</span><br>
<span class="quotelev1">&gt; Attaching to the hung process at one node gives the following backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f55b0f41c3d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f55b03ccde6 in poll_dispatch (base=0x70e7b0, 
</span><br>
<span class="quotelev1">&gt; tv=0x7ffd1bb551c0) at poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f55b03c4a90 in opal_libevent2022_event_base_loop 
</span><br>
<span class="quotelev1">&gt; (base=0x70e7b0, flags=2) at event.c:1630
</span><br>
<span class="quotelev1">&gt; #3  0x00007f55b02f0144 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt; #4  0x00007f55b14b4d8b in opal_condition_wait (c=0x7f55b19fec40 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_request_cond&gt;, m=0x7f55b19febc0 &lt;ompi_request_lock&gt;) at 
</span><br>
<span class="quotelev1">&gt; ../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #5  0x00007f55b14b531b in ompi_request_default_wait_all (count=2, 
</span><br>
<span class="quotelev1">&gt; requests=0x7ffd1bb55370, statuses=0x7ffd1bb55340) at 
</span><br>
<span class="quotelev1">&gt; request/req_wait.c:287
</span><br>
<span class="quotelev1">&gt; #6  0x00007f55b157a225 in ompi_coll_base_sendrecv_zero (dest=1, 
</span><br>
<span class="quotelev1">&gt; stag=-16, source=1, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev1">&gt;     at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev1">&gt; #7  0x00007f55b157a92a in ompi_coll_base_barrier_intra_two_procs 
</span><br>
<span class="quotelev1">&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x7c2630) at 
</span><br>
<span class="quotelev1">&gt; base/coll_base_barrier.c:308
</span><br>
<span class="quotelev1">&gt; #8  0x00007f55b15aafec in ompi_coll_tuned_barrier_intra_dec_fixed 
</span><br>
<span class="quotelev1">&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x7c2630) at 
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev1">&gt; #9  0x00007f55b14d36fd in PMPI_Barrier (comm=0x601280 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400b0b in main (argc=1, argv=0x7ffd1bb55658) at 
</span><br>
<span class="quotelev1">&gt; mpitest.c:26
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thinking that this might be a bug in tuned collectives, since that is 
</span><br>
<span class="quotelev1">&gt; what the stack shows, I ran the program like this (basically adding 
</span><br>
<span class="quotelev1">&gt; the ^tuned part)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl 
</span><br>
<span class="quotelev1">&gt; self,tcp -mca pml ob1 -mca coll ^tuned ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It still hangs, but now with a different stack trace:
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f910d38ac3d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f910c815de6 in poll_dispatch (base=0x1a317b0, 
</span><br>
<span class="quotelev1">&gt; tv=0x7fff43ee3610) at poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f910c80da90 in opal_libevent2022_event_base_loop 
</span><br>
<span class="quotelev1">&gt; (base=0x1a317b0, flags=2) at event.c:1630
</span><br>
<span class="quotelev1">&gt; #3  0x00007f910c739144 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt; #4  0x00007f910db130f7 in opal_condition_wait (c=0x7f910de47c40 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_request_cond&gt;, m=0x7f910de47bc0 &lt;ompi_request_lock&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #5  0x00007f910db132d8 in ompi_request_wait_completion (req=0x1b07680) 
</span><br>
<span class="quotelev1">&gt; at ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev1">&gt; #6  0x00007f910db1533b in mca_pml_ob1_send (buf=0x0, count=0, 
</span><br>
<span class="quotelev1">&gt; datatype=0x7f910de1e340 &lt;ompi_mpi_byte&gt;, dst=1, tag=-16, 
</span><br>
<span class="quotelev1">&gt; sendmode=MCA_PML_BASE_SEND_STANDARD,
</span><br>
<span class="quotelev1">&gt;     comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at pml_ob1_isend.c:259
</span><br>
<span class="quotelev1">&gt; #7  0x00007f910d9c3b38 in ompi_coll_base_barrier_intra_basic_linear 
</span><br>
<span class="quotelev1">&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1b092c0) at 
</span><br>
<span class="quotelev1">&gt; base/coll_base_barrier.c:368
</span><br>
<span class="quotelev1">&gt; #8  0x00007f910d91c6fd in PMPI_Barrier (comm=0x601280 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000400b0b in main (argc=1, argv=0x7fff43ee3a58) at 
</span><br>
<span class="quotelev1">&gt; mpitest.c:26
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpitest.c program is as follows:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
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
<span class="quotelev1">&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d 
</span><br>
<span class="quotelev1">&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s received %s\n&quot;, hostname, buf);
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
<span class="quotelev1">&gt;     printf(&quot;%s sent %s\n&quot;, hostname, buf);
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
<span class="quotelev1">&gt; The hostfile is as follows:
</span><br>
<span class="quotelev1">&gt; 10.10.10.10 slots=1
</span><br>
<span class="quotelev1">&gt; 10.10.10.11 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The two nodes are connected by three physical and 3 logical networks:
</span><br>
<span class="quotelev1">&gt; Physical: Gigabit Ethernet, 10G iWARP, 20G Infiniband
</span><br>
<span class="quotelev1">&gt; Logical: IP (all 3), PSM (Qlogic Infiniband), Verbs (iWARP and Infiniband)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note again that this is a fresh, brand new clone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a bug (perhaps a side effect of --disable-dlopen) or something 
</span><br>
<span class="quotelev1">&gt; I am doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28930.php">http://www.open-mpi.org/community/lists/users/2016/04/28930.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28932/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28933.php">Tom Rosmond: "[OMPI users] system call failed that shouldn't?"</a>
<li><strong>Previous message:</strong> <a href="28931.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging help"</a>
<li><strong>In reply to:</strong> <a href="28930.php">dpchoudh .: "[OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28942.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28942.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
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
