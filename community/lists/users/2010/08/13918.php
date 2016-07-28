<?
$subject_val = "Re: [OMPI users] deadlock in openmpi 1.5rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 09:24:43 2010" -->
<!-- isoreceived="20100806132443" -->
<!-- sent="Fri, 6 Aug 2010 07:24:34 -0600" -->
<!-- isosent="20100806132434" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock in openmpi 1.5rc5" -->
<!-- id="5DB3FA25-6489-4077-9049-7C636943E8BD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=aUYyo1za28vOnVg1eQ2-+tLeuMSVBLRqx1JLK_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] deadlock in openmpi 1.5rc5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 09:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13919.php">Matthew Clark: "[OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>Previous message:</strong> <a href="13917.php">Nicolas Deladerriere: "[OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="13916.php">John Hsu: "[OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Reply:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You clearly have an issue with version confusion. The file cited in your warning:
<br>
<p><span class="quotelev1">&gt; [wgsg0:29074] Warning -- mutex was double locked from errmgr_hnp.c:772
</span><br>
<p>does not exist in 1.5rc5. It only exists in the developer's trunk at this time. Check to ensure you have the right paths set, blow away the install area (in case you have multiple versions installed on top of each other), etc.
<br>
<p><p><p>On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I am new to openmpi and have encountered an issue using pre-release 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1 to n sends out a random number to node 0, node 0 sums all numbers received.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code works fine on 1 machine with any number of nodes, and on 3 machines running 10 nodes per machine, but when we try to run 11 nodes per machine this warning appears:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [wgsg0:29074] Warning -- mutex was double locked from errmgr_hnp.c:772
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And node 0 (master summing node) hangs on receiving plus another random node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0, arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev1">&gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0, flags=2) at event.c:838
</span><br>
<span class="quotelev1">&gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev1">&gt; #4  0x00007f0c604ebb5a in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0, m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev1">&gt; condition.h:99
</span><br>
<span class="quotelev1">&gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion (req=0x2538d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev1">&gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0, count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40, 
</span><br>
<span class="quotelev1">&gt;     status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1, type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40, status=0x7fff90f62668)
</span><br>
<span class="quotelev1">&gt;     at precv.c:78
</span><br>
<span class="quotelev1">&gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800, buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100, status=...)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and for sender is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880, arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev1">&gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880, flags=2) at event.c:838
</span><br>
<span class="quotelev1">&gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev1">&gt; #4  0x00007fedba59c43a in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0, m=0x7fedba8ba740)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt; #6  0x00007fedb279742e in ompi_request_wait_completion (req=0x2392d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev1">&gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210, count=100, datatype=0x612600, dst=0, tag=100, 
</span><br>
<span class="quotelev1">&gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100, type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev1">&gt;     at psend.c:75
</span><br>
<span class="quotelev1">&gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800, buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:42
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;deadlock&quot; appears to be a machine dependent race condition, different machines fails with different combinations of nodes / machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is my command line for reference:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem does not exist in release 1.4.2 or earlier.  We are testing unreleased codes for potential knem benefits, but can fall back to 1.4.2 if necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My apologies in advance if I've missed something basic, thanks for any help :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; &lt;test.cpp&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13919.php">Matthew Clark: "[OMPI users] Bug in POWERPC32.asm?"</a>
<li><strong>Previous message:</strong> <a href="13917.php">Nicolas Deladerriere: "[OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="13916.php">John Hsu: "[OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Reply:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
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
