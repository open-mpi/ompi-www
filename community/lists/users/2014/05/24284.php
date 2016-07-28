<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2879, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 14:15:53 2014" -->
<!-- isoreceived="20140504181553" -->
<!-- sent="Sun, 4 May 2014 13:15:53 -0500" -->
<!-- isosent="20140504181553" -->
<!-- name="Clay Kirkland" -->
<!-- email="clay.kirkland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2879, Issue 1" -->
<!-- id="CAJDnjA_gQJtBrKPJek4MWo00qtEDRp16ZvvNiqfimoBdoffJcQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.17.1399132804.5688.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 2879, Issue 1<br>
<strong>From:</strong> Clay Kirkland (<em>clay.kirkland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-04 14:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
<li><strong>Previous message:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24293.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
<li><strong>Reply:</strong> <a href="24293.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I am configuring with all defaults.   Just doing a ./configure and then
<br>
make and make install.   I have used open mpi on several kinds of
<br>
unix  systems this way and have had no trouble before.   I believe I
<br>
last had success on a redhat version of linux.
<br>
<p><p>On Sat, May 3, 2014 at 11:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. MPI_Barrier hangs on second attempt but only when multiple
</span><br>
<span class="quotelev1">&gt;       hosts used. (Clay Kirkland)
</span><br>
<span class="quotelev1">&gt;    2. Re: MPI_Barrier hangs on second attempt but only when
</span><br>
<span class="quotelev1">&gt;       multiple hosts used. (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 2 May 2014 16:24:04 -0500
</span><br>
<span class="quotelev1">&gt; From: Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev1">&gt;         when    multiple hosts used.
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAJDnjA8Wi=FEjz6Vz+Bc34b+nFE=
</span><br>
<span class="quotelev1">&gt; TF4B7g0BQgMbeKg7H-pV+A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been using MPI for many many years so I have very well debugged mpi
</span><br>
<span class="quotelev1">&gt; tests.   I am
</span><br>
<span class="quotelev1">&gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though
</span><br>
<span class="quotelev1">&gt; with getting the
</span><br>
<span class="quotelev1">&gt; MPI_Barrier calls to work.   It works fine when I run all processes on one
</span><br>
<span class="quotelev1">&gt; machine but when
</span><br>
<span class="quotelev1">&gt; I run with two or more hosts the second call to MPI_Barrier always hangs.
</span><br>
<span class="quotelev1">&gt; Not the first one,
</span><br>
<span class="quotelev1">&gt; but always the second one.   I looked at FAQ's and such but found nothing
</span><br>
<span class="quotelev1">&gt; except for a comment
</span><br>
<span class="quotelev1">&gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev1">&gt; mentioned as a problem
</span><br>
<span class="quotelev1">&gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev1">&gt; firewalls off and removed
</span><br>
<span class="quotelev1">&gt; and reinstalled the same version on both hosts but I still see the same
</span><br>
<span class="quotelev1">&gt; thing.   I then installed
</span><br>
<span class="quotelev1">&gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev1">&gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev1">&gt; one of two machines by itself  many times with no hangs.  Only hangs if two
</span><br>
<span class="quotelev1">&gt; or more hosts are involved.
</span><br>
<span class="quotelev1">&gt; These runs are all being done on CentOS release 6.4.   Here is test program
</span><br>
<span class="quotelev1">&gt; I used.
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
<span class="quotelev1">&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; 3.\n&quot;,myrank,hoster);
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
<span class="quotelev1">&gt;   Here are three runs of test program.  First with two processes on one
</span><br>
<span class="quotelev1">&gt; host, then with
</span><br>
<span class="quotelev1">&gt; two processes on another host, and finally with one process on each of two
</span><br>
<span class="quotelev1">&gt; hosts.  The
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
<span class="quotelev1">&gt;   Since it is such a simple test and problem and such a widely used MPI
</span><br>
<span class="quotelev1">&gt; function, it must obviously
</span><br>
<span class="quotelev1">&gt; be an installation or configuration problem.   A pstack for each of the
</span><br>
<span class="quotelev1">&gt; hung MPI_Barrier processes
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
<span class="quotelev1">&gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x00007f5de0639229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
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
<span class="quotelev1">&gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x00007f7ee46af229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Which looks exactly the same on each machine.  Any thoughts or ideas would
</span><br>
<span class="quotelev1">&gt; be greatly appreciated as
</span><br>
<span class="quotelev1">&gt; I am stuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Clay Kirkland
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sat, 3 May 2014 06:39:20 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Barrier hangs on second attempt but only
</span><br>
<span class="quotelev1">&gt;         when    multiple hosts used.
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;3CF53D73-15D9-40BB-A2DE-50BA3561A0F4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...just testing on my little cluster here on two nodes, it works just
</span><br>
<span class="quotelev1">&gt; fine with 1.8.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 v1.8]$ mpirun -n 2 --map-by node ./a.out
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= bend001  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= bend001  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt;  In rank 0 and host= bend001  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= bend002  Do Barrier call 1.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= bend002  Do Barrier call 2.
</span><br>
<span class="quotelev1">&gt;  In rank 1 and host= bend002  Do Barrier call 3.
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 v1.8]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you configuring OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 2, 2014, at 2:24 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been using MPI for many many years so I have very well debugged
</span><br>
<span class="quotelev1">&gt; mpi tests.   I am
</span><br>
<span class="quotelev2">&gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions
</span><br>
<span class="quotelev1">&gt; though with getting the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes on
</span><br>
<span class="quotelev1">&gt; one machine but when
</span><br>
<span class="quotelev2">&gt; &gt; I run with two or more hosts the second call to MPI_Barrier always
</span><br>
<span class="quotelev1">&gt; hangs.   Not the first one,
</span><br>
<span class="quotelev2">&gt; &gt; but always the second one.   I looked at FAQ's and such but found
</span><br>
<span class="quotelev1">&gt; nothing except for a comment
</span><br>
<span class="quotelev2">&gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also
</span><br>
<span class="quotelev1">&gt; mentioned as a problem
</span><br>
<span class="quotelev2">&gt; &gt; was not having the same version of mpi on both machines.  I turned
</span><br>
<span class="quotelev1">&gt; firewalls off and removed
</span><br>
<span class="quotelev2">&gt; &gt; and reinstalled the same version on both hosts but I still see the same
</span><br>
<span class="quotelev1">&gt; thing.   I then installed
</span><br>
<span class="quotelev2">&gt; &gt; lam mpi on two of my machines and that works fine.   I can call the
</span><br>
<span class="quotelev1">&gt; MPI_Barrier function when run on
</span><br>
<span class="quotelev2">&gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs if
</span><br>
<span class="quotelev1">&gt; two or more hosts are involved.
</span><br>
<span class="quotelev2">&gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test
</span><br>
<span class="quotelev1">&gt; program I used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; main (argc, argv)
</span><br>
<span class="quotelev2">&gt; &gt; int argc;
</span><br>
<span class="quotelev2">&gt; &gt; char **argv;
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     char message[20];
</span><br>
<span class="quotelev2">&gt; &gt;     char hoster[256];
</span><br>
<span class="quotelev2">&gt; &gt;     char nameis[256];
</span><br>
<span class="quotelev2">&gt; &gt;     int fd, i, j, jnp, iret, myrank, np, ranker, recker;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm comm;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         gethostname(hoster,256);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call
</span><br>
<span class="quotelev1">&gt; 3.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;     exit(0);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Here are three runs of test program.  First with two processes on one
</span><br>
<span class="quotelev1">&gt; host, then with
</span><br>
<span class="quotelev2">&gt; &gt; two processes on another host, and finally with one process on each of
</span><br>
<span class="quotelev1">&gt; two hosts.  The
</span><br>
<span class="quotelev2">&gt; &gt; first two runs are fine but the last run hangs on the second MPI_Barrier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= centos  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
</span><br>
<span class="quotelev2">&gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 3.
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
</span><br>
<span class="quotelev2">&gt; &gt; /root/.bashrc: line 14: unalias: ls: not found
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= centos  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 0 and host= centos  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt; In rank 1 and host= RAID  Do Barrier call 1.
</span><br>
<span class="quotelev2">&gt; &gt;  In rank 1 and host= RAID  Do Barrier call 2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Since it is such a simple test and problem and such a widely used MPI
</span><br>
<span class="quotelev1">&gt; function, it must obviously
</span><br>
<span class="quotelev2">&gt; &gt; be an installation or configuration problem.   A pstack for each of the
</span><br>
<span class="quotelev1">&gt; hung MPI_Barrier processes
</span><br>
<span class="quotelev2">&gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f5de0639229 in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev1">&gt; from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007f5de05941c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_RAID openmpi-1.6.5]# pstack 22167
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs ()
</span><br>
<span class="quotelev1">&gt; from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas
</span><br>
<span class="quotelev1">&gt; would be greatly appreciated as
</span><br>
<span class="quotelev2">&gt; &gt; I am stuck.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Clay Kirkland
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2879, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
<li><strong>Previous message:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24293.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
<li><strong>Reply:</strong> <a href="24293.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
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
