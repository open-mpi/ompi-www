<?
$subject_val = "Re: [OMPI users] deadlock in openmpi 1.5rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 17:48:29 2010" -->
<!-- isoreceived="20100809214829" -->
<!-- sent="Mon, 9 Aug 2010 14:48:04 -0700" -->
<!-- isosent="20100809214804" -->
<!-- name="John Hsu" -->
<!-- email="johnhsu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock in openmpi 1.5rc5" -->
<!-- id="AANLkTimpmgtuZMSdmGAfReoNzzdX9KRPz+wtxRgaHuqE_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7283451E-8C4A-4F15-B8E5-649349ABBE0C_at_cisco.com" -->
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
<strong>From:</strong> John Hsu (<em>johnhsu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 17:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13953.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13951.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>In reply to:</strong> <a href="13951.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've replied in the ticket.
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2530#comment:2">https://svn.open-mpi.org/trac/ompi/ticket/2530#comment:2</a>
<br>
thanks!
<br>
John
<br>
<p>On Mon, Aug 9, 2010 at 2:42 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've opened a ticket about this -- if it's an actual problem, it's a 1.5
</span><br>
<span class="quotelev1">&gt; blocker:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of knem and Linux are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2010, at 4:50 PM, John Hsu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
</span><br>
<span class="quotelev1">&gt; -npernode 11), so I proceeded to bump up -npernode to 12:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev1">&gt; -npernode 12 --mca btl_sm_use_knem 0  ./bin/mpi_test
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the same error occurs,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fcca6ae5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fcca7e5ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007fcca7e665fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007fcca7e37e69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007fcca7dd635c in PMPI_Recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff2a0d7e00,
</span><br>
<span class="quotelev2">&gt; &gt;     count=1, datatype=..., source=23, tag=100, status=...)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007f5dc31d2cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007f5dc454ba4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007f5dc45535fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007f5dc4524e69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007f5dc44c574f in PMPI_Send ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff6e0c0790,
</span><br>
<span class="quotelev2">&gt; &gt;     count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In your first mail, you mentioned that you are testing the new knem
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you try disabling knem and see if that fixes the problem?  (i.e., run
</span><br>
<span class="quotelev1">&gt; with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might mean we
</span><br>
<span class="quotelev1">&gt; have a knem-based bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sorry for the confusion, that was indeed the trunk version of things I
</span><br>
<span class="quotelev1">&gt; was running.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here's the same problem using
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar.bz2">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar.bz2</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; command-line:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev1">&gt; -npernode 11 ./bin/mpi_test
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; back trace on sender:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     tag=100, status=...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; back trace on receiver:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; John
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You clearly have an issue with version confusion. The file cited in
</span><br>
<span class="quotelev1">&gt; your warning:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; does not exist in 1.5rc5. It only exists in the developer's trunk at
</span><br>
<span class="quotelev1">&gt; this time. Check to ensure you have the right paths set, blow away the
</span><br>
<span class="quotelev1">&gt; install area (in case you have multiple versions installed on top of each
</span><br>
<span class="quotelev1">&gt; other), etc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am new to openmpi and have encountered an issue using pre-release
</span><br>
<span class="quotelev1">&gt; 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1 to n
</span><br>
<span class="quotelev1">&gt; sends out a random number to node 0, node 0 sums all numbers received.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This code works fine on 1 machine with any number of nodes, and on 3
</span><br>
<span class="quotelev1">&gt; machines running 10 nodes per machine, but when we try to run 11 nodes per
</span><br>
<span class="quotelev1">&gt; machine this warning appears:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; And node 0 (master summing node) hangs on receiving plus another
</span><br>
<span class="quotelev1">&gt; random node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
</span><br>
<span class="quotelev1">&gt; arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #4  0x00007f0c604ebb5a in opal_progress () at
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
</span><br>
<span class="quotelev1">&gt; m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; condition.h:99
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x2538d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
</span><br>
<span class="quotelev1">&gt; count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1,
</span><br>
<span class="quotelev1">&gt; type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev1">&gt; status=0x7fff90f62668)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at precv.c:78
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100, status=...)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; and for sender is:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
</span><br>
<span class="quotelev1">&gt; arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #4  0x00007fedba59c43a in opal_progress () at
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
</span><br>
<span class="quotelev1">&gt; m=0x7fedba8ba740)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #6  0x00007fedb279742e in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x2392d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210, count=100,
</span><br>
<span class="quotelev1">&gt; datatype=0x612600, dst=0, tag=100,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_isend.c:125
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
</span><br>
<span class="quotelev1">&gt; type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at psend.c:75
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mpi_test/src/mpi_test.cpp:42
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
</span><br>
<span class="quotelev1">&gt; different machines fails with different combinations of nodes / machine.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Below is my command line for reference:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
</span><br>
<span class="quotelev1">&gt; hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The problem does not exist in release 1.4.2 or earlier.  We are
</span><br>
<span class="quotelev1">&gt; testing unreleased codes for potential knem benefits, but can fall back to
</span><br>
<span class="quotelev1">&gt; 1.4.2 if necessary.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My apologies in advance if I've missed something basic, thanks for
</span><br>
<span class="quotelev1">&gt; any help :)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; John
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;mpi_test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13953.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13951.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>In reply to:</strong> <a href="13951.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
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
