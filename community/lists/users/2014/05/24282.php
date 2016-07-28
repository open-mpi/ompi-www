<?
$subject_val = "[OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  2 17:24:05 2014" -->
<!-- isoreceived="20140502212405" -->
<!-- sent="Fri, 2 May 2014 16:24:04 -0500" -->
<!-- isosent="20140502212404" -->
<!-- name="Clay Kirkland" -->
<!-- email="clay.kirkland_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used." -->
<!-- id="CAJDnjA8Wi=FEjz6Vz+Bc34b+nFE=TF4B7g0BQgMbeKg7H-pV+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used.<br>
<strong>From:</strong> Clay Kirkland (<em>clay.kirkland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-02 17:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>Previous message:</strong> <a href="24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>Reply:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>Reply:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been using MPI for many many years so I have very well debugged mpi
<br>
tests.   I am
<br>
having trouble on either openmpi-1.4.5  or  openmpi-1.6.5 versions though
<br>
with getting the
<br>
MPI_Barrier calls to work.   It works fine when I run all processes on one
<br>
machine but when
<br>
I run with two or more hosts the second call to MPI_Barrier always hangs.
<br>
Not the first one,
<br>
but always the second one.   I looked at FAQ's and such but found nothing
<br>
except for a comment
<br>
that MPI_Barrier problems were often problems with fire walls.  Also
<br>
mentioned as a problem
<br>
was not having the same version of mpi on both machines.  I turned
<br>
firewalls off and removed
<br>
and reinstalled the same version on both hosts but I still see the same
<br>
thing.   I then installed
<br>
lam mpi on two of my machines and that works fine.   I can call the
<br>
MPI_Barrier function when run on
<br>
one of two machines by itself  many times with no hangs.  Only hangs if two
<br>
or more hosts are involved.
<br>
These runs are all being done on CentOS release 6.4.   Here is test program
<br>
I used.
<br>
<p>main (argc, argv)
<br>
int argc;
<br>
char **argv;
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char message[20];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hoster[256];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char nameis[256];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int fd, i, j, jnp, iret, myrank, np, ranker, recker;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;myrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp;np);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hoster,256);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; In rank %d and host= %s  Do Barrier call
<br>
1.\n&quot;,myrank,hoster);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; In rank %d and host= %s  Do Barrier call
<br>
2.\n&quot;,myrank,hoster);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; In rank %d and host= %s  Do Barrier call
<br>
3.\n&quot;,myrank,hoster);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>
<p>&nbsp;&nbsp;Here are three runs of test program.  First with two processes on one
<br>
host, then with
<br>
two processes on another host, and finally with one process on each of two
<br>
hosts.  The
<br>
first two runs are fine but the last run hangs on the second MPI_Barrier.
<br>
<p>[root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos a.out
<br>
&nbsp;In rank 0 and host= centos  Do Barrier call 1.
<br>
&nbsp;In rank 1 and host= centos  Do Barrier call 1.
<br>
&nbsp;In rank 1 and host= centos  Do Barrier call 2.
<br>
&nbsp;In rank 1 and host= centos  Do Barrier call 3.
<br>
&nbsp;In rank 0 and host= centos  Do Barrier call 2.
<br>
&nbsp;In rank 0 and host= centos  Do Barrier call 3.
<br>
[root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host RAID a.out
<br>
/root/.bashrc: line 14: unalias: ls: not found
<br>
&nbsp;In rank 0 and host= RAID  Do Barrier call 1.
<br>
&nbsp;In rank 0 and host= RAID  Do Barrier call 2.
<br>
&nbsp;In rank 0 and host= RAID  Do Barrier call 3.
<br>
&nbsp;In rank 1 and host= RAID  Do Barrier call 1.
<br>
&nbsp;In rank 1 and host= RAID  Do Barrier call 2.
<br>
&nbsp;In rank 1 and host= RAID  Do Barrier call 3.
<br>
[root_at_centos MPI]# /usr/local/bin/mpirun -np 2 --host centos,RAID a.out
<br>
/root/.bashrc: line 14: unalias: ls: not found
<br>
&nbsp;In rank 0 and host= centos  Do Barrier call 1.
<br>
&nbsp;In rank 0 and host= centos  Do Barrier call 2.
<br>
In rank 1 and host= RAID  Do Barrier call 1.
<br>
&nbsp;In rank 1 and host= RAID  Do Barrier call 2.
<br>
<p>&nbsp;&nbsp;Since it is such a simple test and problem and such a widely used MPI
<br>
function, it must obviously
<br>
be an installation or configuration problem.   A pstack for each of the
<br>
hung MPI_Barrier processes
<br>
on the two machines shows this:
<br>
<p>[root_at_centos ~]# pstack 31666
<br>
#0  0x0000003baf0e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
#1  0x00007f5de06125eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
<br>
#2  0x00007f5de061475a in opal_event_base_loop () from
<br>
/usr/local/lib/libmpi.so.1
<br>
#3  0x00007f5de0639229 in opal_progress () from /usr/local/lib/libmpi.so.1
<br>
#4  0x00007f5de0586f75 in ompi_request_default_wait_all () from
<br>
/usr/local/lib/libmpi.so.1
<br>
#5  0x00007f5ddc59565e in ompi_coll_tuned_sendrecv_actual () from
<br>
/usr/local/lib/openmpi/mca_coll_tuned.so
<br>
#6  0x00007f5ddc59d8ff in ompi_coll_tuned_barrier_intra_two_procs () from
<br>
/usr/local/lib/openmpi/mca_coll_tuned.so
<br>
#7  0x00007f5de05941c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
<br>
#8  0x0000000000400a43 in main ()
<br>
<p>[root_at_RAID openmpi-1.6.5]# pstack 22167
<br>
#0  0x00000030302e8ee3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
#1  0x00007f7ee46885eb in epoll_dispatch () from /usr/local/lib/libmpi.so.1
<br>
#2  0x00007f7ee468a75a in opal_event_base_loop () from
<br>
/usr/local/lib/libmpi.so.1
<br>
#3  0x00007f7ee46af229 in opal_progress () from /usr/local/lib/libmpi.so.1
<br>
#4  0x00007f7ee45fcf75 in ompi_request_default_wait_all () from
<br>
/usr/local/lib/libmpi.so.1
<br>
#5  0x00007f7ee060b65e in ompi_coll_tuned_sendrecv_actual () from
<br>
/usr/local/lib/openmpi/mca_coll_tuned.so
<br>
#6  0x00007f7ee06138ff in ompi_coll_tuned_barrier_intra_two_procs () from
<br>
/usr/local/lib/openmpi/mca_coll_tuned.so
<br>
#7  0x00007f7ee460a1c2 in PMPI_Barrier () from /usr/local/lib/libmpi.so.1
<br>
#8  0x0000000000400a43 in main ()
<br>
<p>&nbsp;Which looks exactly the same on each machine.  Any thoughts or ideas would
<br>
be greatly appreciated as
<br>
I am stuck.
<br>
<p>&nbsp;Clay Kirkland
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>Previous message:</strong> <a href="24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>Reply:</strong> <a href="24283.php">Ralph Castain: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when multiple hosts used."</a>
<li><strong>Reply:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
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
