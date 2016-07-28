<?
$subject_val = "Re: [OMPI users] deadlock in openmpi 1.5rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 09:37:54 2010" -->
<!-- isoreceived="20100809133754" -->
<!-- sent="Mon, 9 Aug 2010 09:39:02 -0400" -->
<!-- isosent="20100809133902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock in openmpi 1.5rc5" -->
<!-- id="0C80CF11-E082-4D3A-998A-DFBD507AE368_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTink+hVX0TRXrHF6r5k7rjzQo=-3zkv-gPyLGret_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 09:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13939.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Reply:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In your first mail, you mentioned that you are testing the new knem support.
<br>
<p>Can you try disabling knem and see if that fixes the problem?  (i.e., run with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might mean we have a knem-based bug.
<br>
<p><p><p>On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the confusion, that was indeed the trunk version of things I was running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the same problem using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar.bz2">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; command-line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX -npernode 11 ./bin/mpi_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; back trace on sender:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800, buf=0x7fff8f5cbb50, count=1, datatype=..., source=29, 
</span><br>
<span class="quotelev1">&gt;     tag=100, status=...)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; back trace on receiver:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev1">&gt;    from /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800, buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev1">&gt;     at /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You clearly have an issue with version confusion. The file cited in your warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from errmgr_hnp.c:772
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does not exist in 1.5rc5. It only exists in the developer's trunk at this time. Check to ensure you have the right paths set, blow away the install area (in case you have multiple versions installed on top of each other), etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt; I am new to openmpi and have encountered an issue using pre-release 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1 to n sends out a random number to node 0, node 0 sums all numbers received.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This code works fine on 1 machine with any number of nodes, and on 3 machines running 10 nodes per machine, but when we try to run 11 nodes per machine this warning appears:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from errmgr_hnp.c:772
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And node 0 (master summing node) hangs on receiving plus another random node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0, arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0, flags=2) at event.c:838
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f0c604ebb5a in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0, m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev2">&gt; &gt; condition.h:99
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion (req=0x2538d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0, count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev2">&gt; &gt;     status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1, type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40, status=0x7fff90f62668)
</span><br>
<span class="quotelev2">&gt; &gt;     at precv.c:78
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800, buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100, status=...)
</span><br>
<span class="quotelev2">&gt; &gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev2">&gt; &gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and for sender is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880, arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880, flags=2) at event.c:838
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007fedba59c43a in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0, m=0x7fedba8ba740)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007fedb279742e in ompi_request_wait_completion (req=0x2392d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210, count=100, datatype=0x612600, dst=0, tag=100,
</span><br>
<span class="quotelev2">&gt; &gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at pml_ob1_isend.c:125
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100, type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev2">&gt; &gt;     at psend.c:75
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800, buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev2">&gt; &gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev2">&gt; &gt;     at /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:42
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;deadlock&quot; appears to be a machine dependent race condition, different machines fails with different combinations of nodes / machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Below is my command line for reference:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem does not exist in release 1.4.2 or earlier.  We are testing unreleased codes for potential knem benefits, but can fall back to 1.4.2 if necessary.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My apologies in advance if I've missed something basic, thanks for any help :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards,
</span><br>
<span class="quotelev2">&gt; &gt; John
</span><br>
<span class="quotelev2">&gt; &gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpi_test.cpp&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13939.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13937.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Reply:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
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
