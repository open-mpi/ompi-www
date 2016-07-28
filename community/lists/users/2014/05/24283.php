<?
$subject_val = "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  3 09:39:43 2014" -->
<!-- isoreceived="20140503133943" -->
<!-- sent="Sat, 3 May 2014 06:39:20 -0700" -->
<!-- isosent="20140503133920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used." -->
<!-- id="3CF53D73-15D9-40BB-A2DE-50BA3561A0F4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJDnjA8Wi=FEjz6Vz+Bc34b+nFE=TF4B7g0BQgMbeKg7H-pV+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-03 09:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24284.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="24282.php">Clay Kirkland: "[OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>In reply to:</strong> <a href="24282.php">Clay Kirkland: "[OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...just testing on my little cluster here on two nodes, it works just fine with 1.8.2:
<br>
<p>[rhc_at_bend001 v1.8]$ mpirun -n 2 --map-by node ./a.out
<br>
&nbsp;In rank 0 and host= bend001  Do Barrier call 1.
<br>
&nbsp;In rank 0 and host= bend001  Do Barrier call 2.
<br>
&nbsp;In rank 0 and host= bend001  Do Barrier call 3.
<br>
&nbsp;In rank 1 and host= bend002  Do Barrier call 1.
<br>
&nbsp;In rank 1 and host= bend002  Do Barrier call 2.
<br>
&nbsp;In rank 1 and host= bend002  Do Barrier call 3.
<br>
[rhc_at_bend001 v1.8]$ 
<br>
<p><p>How are you configuring OMPI?
<br>
<p><p>On May 2, 2014, at 2:24 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been using MPI for many many years so I have very well debugged mpi tests.   I am
</span><br>
<span class="quotelev1">&gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though with getting the 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier calls to work.   It works fine when I run all processes on one machine but when
</span><br>
<span class="quotelev1">&gt; I run with two or more hosts the second call to MPI_Barrier always hangs.   Not the first one,
</span><br>
<span class="quotelev1">&gt; but always the second one.   I looked at FAQ's and such but found nothing except for a comment
</span><br>
<span class="quotelev1">&gt; that MPI_Barrier problems were often problems with fire walls.  Also mentioned as a problem
</span><br>
<span class="quotelev1">&gt; was not having the same version of mpi on both machines.  I turned firewalls off and removed
</span><br>
<span class="quotelev1">&gt; and reinstalled the same version on both hosts but I still see the same thing.   I then installed 
</span><br>
<span class="quotelev1">&gt; lam mpi on two of my machines and that works fine.   I can call the MPI_Barrier function when run on
</span><br>
<span class="quotelev1">&gt; one of two machines by itself  many times with no hangs.  Only hangs if two or more hosts are involved.
</span><br>
<span class="quotelev1">&gt; These runs are all being done on CentOS release 6.4.   Here is test program I used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main (argc, argv)
</span><br>
<span class="quotelev1">&gt; int argc;
</span><br>
<span class="quotelev1">&gt; char **argv;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     char message[20];
</span><br>
<span class="quotelev1">&gt;     char hoster[256];
</span><br>
<span class="quotelev1">&gt;     char nameis[256];
</span><br>
<span class="quotelev1">&gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm comm;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);  
</span><br>
<span class="quotelev1">&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);  
</span><br>
<span class="quotelev1">&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);  
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Here are three runs of test program.  First with two processes on one host, then with
</span><br>
<span class="quotelev1">&gt; two processes on another host, and finally with one process on each of two hosts.  The
</span><br>
<span class="quotelev1">&gt; first two runs are fine but the last run hangs on the second MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev1">&gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
</span><br>
<span class="quotelev1">&gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Since it is such a simple test and problem and such a widely used MPI function, it must obviously
</span><br>
<span class="quotelev1">&gt; be an installation or configuration problem.   A pstack for each of the hung MPI_Barrier processes 
</span><br>
<span class="quotelev1">&gt; on the two machines shows this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev1">&gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f5de06125eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x00007f5de061475a in opal_event_base_loop () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x00007f5de0639229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev1">&gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f7ee46885eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x00007f7ee46af229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Which looks exactly the same on each machine.  Any thoughts or ideas would be greatly appreciated as 
</span><br>
<span class="quotelev1">&gt; I am stuck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Clay Kirkland
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24284.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="24282.php">Clay Kirkland: "[OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>In reply to:</strong> <a href="24282.php">Clay Kirkland: "[OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
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
