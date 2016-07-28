<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2879, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 10:50:38 2014" -->
<!-- isoreceived="20140506145038" -->
<!-- sent="Tue, 6 May 2014 14:50:34 +0000" -->
<!-- isosent="20140506145034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2879, Issue 1" -->
<!-- id="C60AA7E1-96A7-4CCD-9B5B-11A38FB87772_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJDnjA_gQJtBrKPJek4MWo00qtEDRp16ZvvNiqfimoBdoffJcQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 10:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24294.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2881, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="24292.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24284.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using TCP as the MPI transport?
<br>
<p>If so, another thing to try is to limit the IP interfaces that MPI uses for its traffic to see if there's some kind of problem with specific networks.
<br>
<p>For example:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_include eth0 ...
<br>
<p>If that works, then try adding in any/all other IP interfaces that you have on your machines.
<br>
<p>A sorta-wild guess: you have some IP interfaces that aren't working, or at least, don't work in the way that OMPI wants them to work.  So the first barrier works because it flows across eth0 (or some other first network that, as far as OMPI is concerned, works just fine).  But then the next barrier round-robin advances to the next IP interface, and it doesn't work for some reason.
<br>
<p>We've seen virtual machine bridge interfaces cause problems, for example.  E.g., if a machine has a Xen virtual machine interface (vibr0, IIRC?), then OMPI will try to use it to communicate with peer MPI processes because it has a &quot;compatible&quot; IP address, and OMPI think it should be connected/reachable to peers.  If this is the case, you might want to disable such interfaces and/or use btl_tcp_if_include or btl_tcp_if_exclude to select the interfaces that you want to use.
<br>
<p>Pro tip: if you use btl_tcp_if_exclude, remember to exclude the loopback interface, too.  OMPI defaults to a btl_tcp_if_include=&quot;&quot; (blank) and btl_tcp_if_exclude=&quot;lo0&quot;. So if you override btl_tcp_if_exclude, you need to be sure to *also* include lo0 in the new value.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_exclude lo0,virb0 ...
<br>
<p>Also, if possible, try upgrading to Open MPI 1.8.1.
<br>
<p><p><p>On May 4, 2014, at 2:15 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I am configuring with all defaults.   Just doing a ./configure and then
</span><br>
<span class="quotelev1">&gt; make and make install.   I have used open mpi on several kinds of 
</span><br>
<span class="quotelev1">&gt; unix  systems this way and have had no trouble before.   I believe I
</span><br>
<span class="quotelev1">&gt; last had success on a redhat version of linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, May 3, 2014 at 11:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
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
<span class="quotelev1">&gt;         &lt;CAJDnjA8Wi=FEjz6Vz+Bc34b+nFE=TF4B7g0BQgMbeKg7H-pV+A_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Hmmm...just testing on my little cluster here on two nodes, it works just fine with 1.8.2:
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
<span class="quotelev1">&gt; On May 2, 2014, at 2:24 PM, Clay Kirkland &lt;clay.kirkland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have been using MPI for many many years so I have very well debugged mpi tests.   I am
</span><br>
<span class="quotelev2">&gt; &gt; having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though with getting the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier calls to work.   It works fine when I run all processes on one machine but when
</span><br>
<span class="quotelev2">&gt; &gt; I run with two or more hosts the second call to MPI_Barrier always hangs.   Not the first one,
</span><br>
<span class="quotelev2">&gt; &gt; but always the second one.   I looked at FAQ's and such but found nothing except for a comment
</span><br>
<span class="quotelev2">&gt; &gt; that MPI_Barrier problems were often problems with fire walls.  Also mentioned as a problem
</span><br>
<span class="quotelev2">&gt; &gt; was not having the same version of mpi on both machines.  I turned firewalls off and removed
</span><br>
<span class="quotelev2">&gt; &gt; and reinstalled the same version on both hosts but I still see the same thing.   I then installed
</span><br>
<span class="quotelev2">&gt; &gt; lam mpi on two of my machines and that works fine.   I can call the MPI_Barrier function when run on
</span><br>
<span class="quotelev2">&gt; &gt; one of two machines by itself  many times with no hangs.  Only hangs if two or more hosts are involved.
</span><br>
<span class="quotelev2">&gt; &gt; These runs are all being done on CentOS release 6.4.   Here is test program I used.
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
<span class="quotelev2">&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call 1.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call 2.\n&quot;,myrank,hoster);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot; In rank %d and host= %s  Do Barrier call 3.\n&quot;,myrank,hoster);
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
<span class="quotelev2">&gt; &gt;   Here are three runs of test program.  First with two processes on one host, then with
</span><br>
<span class="quotelev2">&gt; &gt; two processes on another host, and finally with one process on each of two hosts.  The
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
<span class="quotelev2">&gt; &gt;   Since it is such a simple test and problem and such a widely used MPI function, it must obviously
</span><br>
<span class="quotelev2">&gt; &gt; be an installation or configuration problem.   A pstack for each of the hung MPI_Barrier processes
</span><br>
<span class="quotelev2">&gt; &gt; on the two machines shows this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_centos ~]# pstack 31666
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f5de06125eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f5de061475a in opal_event_base_loop () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f5de0639229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f5de0586f75 in ompi_request_default_wait_all () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from /usr/local/lib/openmpi/mca_coll_tuned.so
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
<span class="quotelev2">&gt; &gt; #1  0x00007f7ee46885eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f7ee468a75a in opal_event_base_loop () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f7ee46af229 in opal_progress () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from /usr/local/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x0000000000400a43 in main ()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Which looks exactly the same on each machine.  Any thoughts or ideas would be greatly appreciated as
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24294.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2881, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="24292.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>In reply to:</strong> <a href="24284.php">Clay Kirkland: "Re: [OMPI users] users Digest, Vol 2879, Issue 1"</a>
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
