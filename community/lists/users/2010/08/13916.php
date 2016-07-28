<?
$subject_val = "[OMPI users] deadlock in openmpi 1.5rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  5 19:16:29 2010" -->
<!-- isoreceived="20100805231629" -->
<!-- sent="Thu, 5 Aug 2010 16:16:04 -0700" -->
<!-- isosent="20100805231604" -->
<!-- name="John Hsu" -->
<!-- email="johnhsu_at_[hidden]" -->
<!-- subject="[OMPI users] deadlock in openmpi 1.5rc5" -->
<!-- id="AANLkTi=aUYyo1za28vOnVg1eQ2-+tLeuMSVBLRqx1JLK_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] deadlock in openmpi 1.5rc5<br>
<strong>From:</strong> John Hsu (<em>johnhsu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-05 19:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13917.php">Nicolas Deladerriere: "[OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="13915.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Reply:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
I am new to openmpi and have encountered an issue using pre-release 1.5rc5,
<br>
for a simple mpi code (see attached).  In this test, nodes 1 to n sends out
<br>
a random number to node 0, node 0 sums all numbers received.
<br>
<p>This code works fine on 1 machine with any number of nodes, and on 3
<br>
machines running 10 nodes per machine, but when we try to run 11 nodes per
<br>
machine this warning appears:
<br>
<p>[wgsg0:29074] Warning -- mutex was double locked from errmgr_hnp.c:772
<br>
<p>And node 0 (master summing node) hangs on receiving plus another random node
<br>
hangs on sending indefinitely.  Below are the back traces:
<br>
<p>(gdb) bt
<br>
#0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
<br>
#1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0, arg=0x22f91f0,
<br>
tv=0x7fff90f623e0) at epoll.c:215
<br>
#2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0, flags=2) at
<br>
event.c:838
<br>
#3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
<br>
#4  0x00007f0c604ebb5a in opal_progress () at runtime/opal_progress.c:189
<br>
#5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
<br>
m=0x7f0c60800400) at ../../../../opal/threads/
<br>
condition.h:99
<br>
#6  0x00007f0c59b79dff in ompi_request_wait_completion (req=0x2538d80) at
<br>
../../../../ompi/request/request.h:377
<br>
#7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0, count=1,
<br>
datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=0x7fff90f62668) at pml_ob1_irecv.c:104
<br>
#8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1,
<br>
type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
<br>
status=0x7fff90f62668)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at precv.c:78
<br>
#9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
<br>
buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100, status=...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
#10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
<br>
(gdb)
<br>
<p>and for sender is:
<br>
<p>(gdb) bt
<br>
#0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
<br>
#1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880, arg=0x216c6e0,
<br>
tv=0x7ffffa8a4130) at epoll.c:215
<br>
#2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880, flags=2) at
<br>
event.c:838
<br>
#3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
<br>
#4  0x00007fedba59c43a in opal_progress () at runtime/opal_progress.c:189
<br>
#5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
<br>
m=0x7fedba8ba740)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:99
<br>
#6  0x00007fedb279742e in ompi_request_wait_completion (req=0x2392d80) at
<br>
../../../../ompi/request/request.h:377
<br>
#7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210, count=100,
<br>
datatype=0x612600, dst=0, tag=100,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
<br>
pml_ob1_isend.c:125
<br>
#8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
<br>
type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at psend.c:75
<br>
#9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800, buf=0x23b6210,
<br>
count=100, datatype=..., dest=0, tag=100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
#10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:42
<br>
(gdb)
<br>
<p>The &quot;deadlock&quot; appears to be a machine dependent race condition, different
<br>
machines fails with different combinations of nodes / machine.
<br>
<p>Below is my command line for reference:
<br>
<p>$ ../openmpi_devel/bin/mpirun -x PATH -hostfile hostfiles/hostfile.wgsgX
<br>
-npernode 11 -mca btl tcp,sm,self -mca orte_base_help_aggregate 0 -mca
<br>
opal_debug_locks 1  ./bin/mpi_test
<br>
<p>The problem does not exist in release 1.4.2 or earlier.  We are testing
<br>
unreleased codes for potential knem benefits, but can fall back to 1.4.2 if
<br>
necessary.
<br>
<p>My apologies in advance if I've missed something basic, thanks for any help
<br>
:)
<br>
<p>regards,
<br>
John
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13916/test.cpp">test.cpp</a>
</ul>
<!-- attachment="test.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13917.php">Nicolas Deladerriere: "[OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="13915.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Reply:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
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
