<?
$subject_val = "Re: [OMPI users] Simple MPI_Comm_spawn program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 00:18:49 2007" -->
<!-- isoreceived="20071206051849" -->
<!-- sent="Thu, 6 Dec 2007 00:18:22 -0500" -->
<!-- isosent="20071206051822" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple MPI_Comm_spawn program hangs" -->
<!-- id="5315FCB9-6B20-4332-83F1-364E67E963E9_at_cchmc.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="274CC8E7-CB52-4FCC-BBA5-BFE75EDAAA5C_at_cchmc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple MPI_Comm_spawn program hangs<br>
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 00:18:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4603.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI process launch  without &quot;MPI_Spawn&quot;"</a>
<li><strong>Previous message:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>In reply to:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add more info, here is a backtrace of the spawned (hung) program.
<br>
<p>(gdb) bt
<br>
#0  0xffffe410 in __kernel_vsyscall ()
<br>
#1  0x402cdaec in sched_yield () from /lib/tls/libc.so.6
<br>
#2  0x4016360c in opal_progress () at runtime/opal_progress.c:301
<br>
#3  0x403a9b29 in mca_oob_tcp_msg_wait (msg=0x805cc70, rc=0xbfffba40)  
<br>
at oob_tcp_msg.c:108
<br>
#4  0x403b09a5 in mca_oob_tcp_recv (peer=0xbfffbba8, iov=0xbfffba88,  
<br>
count=1, tag=0, flags=4) at oob_tcp_recv.c:138
<br>
#5  0x40119420 in mca_oob_recv_packed (peer=0xbfffbba8, buf=0x821b200,  
<br>
tag=0) at base/oob_base_recv.c:69
<br>
#6  0x4003c28b in ompi_comm_allreduce_intra_oob (inbuf=0xbfffbb48,  
<br>
outbuf=0xbfffbb44, count=1, op=0x400d14a0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm=0x8049d38, bridgecomm=0x0, lleader=0xbfffbc04,  
<br>
rleader=0xbfffbba8, send_first=1) at communicator/comm_cid.c:674
<br>
#7  0x4003adf2 in ompi_comm_nextcid (newcomm=0x807c4f8,  
<br>
comm=0x8049d38, bridgecomm=0x0, local_leader=0xbfffbc04,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_leader=0xbfffbba8, mode=256, send_first=1) at communicator/ 
<br>
comm_cid.c:176
<br>
#8  0x4003cc2c in ompi_comm_connect_accept (comm=0x8049d38, root=0,  
<br>
port=0x807a5c0, send_first=1, newcomm=0xbfffbc28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag=2000) at communicator/comm_dyn.c:208
<br>
#9  0x4003ec97 in ompi_comm_dyn_init () at communicator/comm_dyn.c:668
<br>
#10 0x4005465a in ompi_mpi_init (argc=1, argv=0xbfffbf64, requested=0,  
<br>
provided=0xbfffbd14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at runtime/ompi_mpi_init.c:704
<br>
#11 0x40090367 in PMPI_Init (argc=0xbfffbee0, argv=0xbfffbee4) at  
<br>
pinit.c:71
<br>
#12 0x08048983 in main (argc=1, argv=0xbfffbf64) at slave.c:43
<br>
(gdb)
<br>
<p><p>Prakash
<br>
<p><p>On Dec 6, 2007, at 12:08 AM, Prakash Velayutham wrote:
<br>
<p><span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I changed the spawned program from /bin/hostname to a very simple MPI
</span><br>
<span class="quotelev1">&gt; program as below. But now, the slave hangs right at MPI_Init line.
</span><br>
<span class="quotelev1">&gt; What could the issue be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; slave.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;     /* standard system types       */
</span><br>
<span class="quotelev1">&gt; #include &lt;netinet/in.h&gt;    /* Internet address structures */
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/socket.h&gt;    /* socket interface functions  */
</span><br>
<span class="quotelev1">&gt; #include &lt;netdb.h&gt;         /* host to IP resolution       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int gdb_var;
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int             tag = 0;
</span><br>
<span class="quotelev1">&gt;         int             my_rank;
</span><br>
<span class="quotelev1">&gt;         int             num_proc;
</span><br>
<span class="quotelev1">&gt;         MPI_Status      status;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm        inter_comm;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	gdb_var = 0;
</span><br>
<span class="quotelev1">&gt;   char hostname[64];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    FILE *f;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         while (0 == gdb_var) sleep(5);
</span><br>
<span class="quotelev1">&gt;   gethostname(hostname, 64);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_get_parent(&amp;inter_comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2007, at 8:36 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn is tested nightly by the test our suites, so it should
</span><br>
<span class="quotelev2">&gt;&gt; definitely work...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Prakash Velayutham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Edgar. I did not know that. Really?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyways, you are sure, an MPI job will work as a spawned process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of &quot;hostname&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prakash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 1, 2007, at 5:56 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_spawn has to build an intercommunicator with the child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it spawns. Thus, you can not spawn a non-MPI job such as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/hostname, since the parent process waits for some messages  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child process(es) in order to set up the intercommunicator.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prakash Velayutham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI 1.2.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to run a simple C program.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ######################################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; void
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             tag = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             my_rank;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             num_proc;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       char            message_0[] = &quot;hello slave, i'm your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; master&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       char            message_1[50];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       char            master_data[] = &quot;slaves to work&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             array_of_errcodes[10];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             num;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Status      status;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Comm        inter_comm;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Info        info;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             arr[1];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       int             rc1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       printf(&quot;MASTER : spawning a slave ... \n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       rc1 = MPI_Comm_spawn(&quot;/bin/hostname&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;inter_comm, arr);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       exit(0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ######################################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This program hangs as below:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prakash_at_bmi-xeon1-01:~/thesis/CS/Samples&gt; ./master1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MASTER : spawning a slave ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bmi-xeon1-01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any ideas  why?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Prakash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4603.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI process launch  without &quot;MPI_Spawn&quot;"</a>
<li><strong>Previous message:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>In reply to:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
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
