<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 14:19:11 2010" -->
<!-- isoreceived="20100810181911" -->
<!-- sent="Tue, 10 Aug 2010 11:18:35 -0700" -->
<!-- isosent="20100810181835" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E707F38473_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.3854.1281390510.1857.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing mpi4py program<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Checkpointing%20mpi4py%20program"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-10 14:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Previous message:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13988.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Reply:</strong> <a href="13988.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh
<br>
<p>Please find attached is the python program that reproduces the hang that
<br>
I described. Initial part of this file describes the prerequisite
<br>
modules and the steps to reproduce the problem. Please let me know if
<br>
you have any questions in reproducing the hang.
<br>
<p>Please note that, if I add the following lines at the end of the program
<br>
(in case sleep_time is True), the problem disappears ie; program resumes
<br>
successfully after successful completion of checkpoint.
<br>
# Add following lines at the end for sleep_time is True
<br>
else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time.sleep(0.1)
<br>
# End of added lines
<br>
<p><p>Thanks a lot for your time in looking into this issue.
<br>
<p>Regards
<br>
Ananda
<br>
<p>Ananda B Mudar, PMP
<br>
Senior Technical Architect
<br>
Wipro Technologies
<br>
Ph: 972 765 8093
<br>
ananda.mudar_at_[hidden]
<br>
<p><p>-----Original Message-----
<br>
Date: Mon, 9 Aug 2010 16:37:58 -0400
<br>
From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Checkpointing mpi4py program
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;270BD450-743A-4662-9568-1FEDFCC6F9C6_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=windows-1252
<br>
<p>I have not tried to checkpoint an mpi4py application, so I cannot say
<br>
for sure if it works or not. You might be hitting something with the
<br>
Python runtime interacting in an odd way with either Open MPI or BLCR.
<br>
<p>Can you attach a debugger and get a backtrace on a stuck checkpoint?
<br>
That might show us where things are held up.
<br>
<p>-- Josh
<br>
<p><p>On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with BLCR
</span><br>
0.8.2. When I run ompi-checkpoint on the program written using mpi4py, I
<br>
see that program doesn?t resume sometimes after successful checkpoint
<br>
creation. This doesn?t occur always meaning the program resumes after
<br>
successful checkpoint creation most of the time and completes
<br>
successfully. Has anyone tested the checkpoint/restart functionality
<br>
with mpi4py programs? Are there any best practices that I should keep in
<br>
mind while checkpointing mpi4py programs?
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for your time
</span><br>
<span class="quotelev1">&gt; -          Ananda
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
should check this email and any attachments for the presence of viruses.
<br>
The company accepts no liability for any damage caused by any virus
<br>
transmitted by this email.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
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
<p><p><p><p>------------------------------
<br>
<p>Message: 8
<br>
Date: Mon, 9 Aug 2010 13:50:03 -0700
<br>
From: John Hsu &lt;johnhsu_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] deadlock in openmpi 1.5rc5
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;AANLkTim63t=wQMeWfHWNnvnVKajOe92e7NG3X=Warwr0_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
<br>
<p>problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
<br>
-npernode
<br>
11), so I proceeded to bump up -npernode to 12:
<br>
<p>$ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
<br>
-npernode
<br>
12 --mca btl_sm_use_knem 0  ./bin/mpi_test
<br>
<p>and the same error occurs,
<br>
<p>(gdb) bt
<br>
#0  0x00007fcca6ae5cf3 in epoll_wait () from /lib/libc.so.6
<br>
#1  0x00007fcca7e5ea4b in epoll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#2  0x00007fcca7e665fa in opal_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#3  0x00007fcca7e37e69 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
#5  0x00007fcca7dd635c in PMPI_Recv ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
<br>
buf=0x7fff2a0d7e00,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=1, datatype=..., source=23, tag=100, status=...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
#7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:30
<br>
(gdb)
<br>
<p><p>(gdb) bt
<br>
#0  0x00007f5dc31d2cf3 in epoll_wait () from /lib/libc.so.6
<br>
#1  0x00007f5dc454ba4b in epoll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#2  0x00007f5dc45535fa in opal_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#3  0x00007f5dc4524e69 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
#5  0x00007f5dc44c574f in PMPI_Send ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
#6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
<br>
buf=0x7fff6e0c0790,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=1, datatype=..., dest=0, tag=100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
#7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:38
<br>
(gdb)
<br>
<p><p><p><p>On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In your first mail, you mentioned that you are testing the new knem
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try disabling knem and see if that fixes the problem?  (i.e.,
</span><br>
run
<br>
<span class="quotelev1">&gt; with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might mean
</span><br>
we
<br>
<span class="quotelev1">&gt; have a knem-based bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sorry for the confusion, that was indeed the trunk version of things
</span><br>
I
<br>
<span class="quotelev1">&gt; was running.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the same problem using
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar</a>.
<br>
bz2
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; command-line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
-npernode
<br>
<span class="quotelev1">&gt; 11 ./bin/mpi_test
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; back trace on sender:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
<span class="quotelev2">&gt; &gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
</span><br>
<span class="quotelev2">&gt; &gt;     tag=100, status=...)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
<span class="quotelev2">&gt; &gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:30
<br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; back trace on receiver:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
<span class="quotelev2">&gt; &gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
<span class="quotelev2">&gt; &gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:38
<br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt; John
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt; You clearly have an issue with version confusion. The file cited in
</span><br>
your
<br>
<span class="quotelev1">&gt; warning:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
errmgr_hnp.c:772
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; does not exist in 1.5rc5. It only exists in the developer's trunk at
</span><br>
this
<br>
<span class="quotelev1">&gt; time. Check to ensure you have the right paths set, blow away the
</span><br>
install
<br>
<span class="quotelev1">&gt; area (in case you have multiple versions installed on top of each
</span><br>
other),
<br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am new to openmpi and have encountered an issue using
</span><br>
pre-release
<br>
<span class="quotelev1">&gt; 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1
</span><br>
to n
<br>
<span class="quotelev1">&gt; sends out a random number to node 0, node 0 sums all numbers received.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This code works fine on 1 machine with any number of nodes, and on
</span><br>
3
<br>
<span class="quotelev1">&gt; machines running 10 nodes per machine, but when we try to run 11 nodes
</span><br>
per
<br>
<span class="quotelev1">&gt; machine this warning appears:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
errmgr_hnp.c:772
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And node 0 (master summing node) hangs on receiving plus another
</span><br>
random
<br>
<span class="quotelev1">&gt; node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
</span><br>
<span class="quotelev1">&gt; arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007f0c604ebb5a in opal_progress () at
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
</span><br>
<span class="quotelev1">&gt; m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; condition.h:99
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
</span><br>
(req=0x2538d80)
<br>
<span class="quotelev1">&gt; at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
</span><br>
<span class="quotelev1">&gt; count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1,
</span><br>
<span class="quotelev1">&gt; type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev1">&gt; status=0x7fff90f62668)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at precv.c:78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100,
</span><br>
status=...)
<br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
<br>
enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
<span class="quotelev3">&gt; &gt; &gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
<br>
i_test/src/mpi_test.cpp:30
<br>
<span class="quotelev3">&gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and for sender is:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
</span><br>
<span class="quotelev1">&gt; arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007fedba59c43a in opal_progress () at
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
</span><br>
<span class="quotelev1">&gt; m=0x7fedba8ba740)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007fedb279742e in ompi_request_wait_completion
</span><br>
(req=0x2392d80)
<br>
<span class="quotelev1">&gt; at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210,
</span><br>
count=100,
<br>
<span class="quotelev1">&gt; datatype=0x612600, dst=0, tag=100,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_isend.c:125
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
</span><br>
<span class="quotelev1">&gt; type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at psend.c:75
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
<br>
enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
<span class="quotelev3">&gt; &gt; &gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
<span class="quotelev1">&gt;
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
<br>
i_test/src/mpi_test.cpp:42
<br>
<span class="quotelev3">&gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
</span><br>
<span class="quotelev1">&gt; different machines fails with different combinations of nodes /
</span><br>
machine.
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Below is my command line for reference:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
</span><br>
<span class="quotelev1">&gt; hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The problem does not exist in release 1.4.2 or earlier.  We are
</span><br>
testing
<br>
<span class="quotelev1">&gt; unreleased codes for potential knem benefits, but can fall back to
</span><br>
1.4.2 if
<br>
<span class="quotelev1">&gt; necessary.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My apologies in advance if I've missed something basic, thanks for
</span><br>
any
<br>
<span class="quotelev1">&gt; help :)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; John
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;test.cpp&gt;_______________________________________________
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
<span class="quotelev2">&gt; &gt; &lt;mpi_test.cpp&gt;_______________________________________________
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
-------------- next part --------------
<br>
HTML attachment scrubbed and removed
<br>
<p>------------------------------
<br>
<p>Message: 9
<br>
Date: Mon, 9 Aug 2010 23:02:51 +0200
<br>
From: Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI Template Datatype?
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;AANLkTi=Peq+CQ6t+EXaKhwOT=wd0B8VjWc88sHXqrdYw_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=UTF-8
<br>
<p>Hi Alexandru,
<br>
<p>you can read all about Boost.MPI at:
<br>
<p>&nbsp;&nbsp;<a href="http://www.boost.org/doc/libs/1_43_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_43_0/doc/html/mpi.html</a>
<br>
<p><p>On Mon, Aug 9, 2010 at 10:27 PM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; I basically have to implement a 4D vector. An additional goal of my
</span><br>
project
<br>
<span class="quotelev1">&gt; is to support char, int, float and double datatypes in the vector.
</span><br>
<p>If your &quot;vector&quot; is fixed-size (i.e., all vectors are comprised of
<br>
4 elements), then you can likely dispose of std::vector, use
<br>
C-style arrays with templated send/receive calls (that would
<br>
be just interfaces to MPI_Send/MPI_Recv)
<br>
<p>&nbsp;&nbsp;&nbsp;// BEWARE: untested code!!!
<br>
<p>&nbsp;&nbsp;&nbsp;template &lt;typename T&gt;
<br>
&nbsp;&nbsp;&nbsp;int send(T* vector, int dest, int tag, MPI_Comm comm) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw std::logic_error(&quot;called generic MyVector::send&quot;);
<br>
&nbsp;&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;&nbsp;template &lt;typename T&gt;
<br>
&nbsp;&nbsp;&nbsp;int recv(T* vector, int source, int tag, MPI_Comm comm) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw std::logic_error(&quot;called generic MyVector::send&quot;);
<br>
&nbsp;&nbsp;&nbsp;};
<br>
<p>and then you specialize the template for the types you actually use:
<br>
<p>&nbsp;&nbsp;template &lt;&gt;
<br>
&nbsp;&nbsp;int send&lt;double&gt;(int* vector, int dest, int tag, MPI_Comm comm)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_Send(vector, 4, MPI_DOUBLE, dest, tag, comm);
<br>
&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;template &lt;&gt;
<br>
&nbsp;&nbsp;int recv&lt;double&gt;(int* vector, int src, int tag, MPI_Comm comm)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_Recv(vector, 4, MPI_DOUBLE, dest, tag, comm);
<br>
&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;// etc.
<br>
<p>However, let me warn you that it would likely take more time and
<br>
effort to write all the template specializations and get them working
<br>
than just use Boost.MPI.
<br>
<p>Best regards,
<br>
Riccardo
<br>
<p><p>------------------------------
<br>
<p>Message: 10
<br>
Date: Mon, 9 Aug 2010 17:42:26 -0400
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] deadlock in openmpi 1.5rc5
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
Message-ID: &lt;7283451E-8C4A-4F15-B8E5-649349ABBE0C_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>I've opened a ticket about this -- if it's an actual problem, it's a 1.5
<br>
blocker:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
<br>
<p>What version of knem and Linux are you using?
<br>
<p><p><p>On Aug 9, 2010, at 4:50 PM, John Hsu wrote:
<br>
<p><span class="quotelev1">&gt; problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
</span><br>
-npernode 11), so I proceeded to bump up -npernode to 12:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
-npernode 12 --mca btl_sm_use_knem 0  ./bin/mpi_test
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the same error occurs,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fcca6ae5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fcca7e5ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #2  0x00007fcca7e665fa in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #3  0x00007fcca7e37e69 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
<span class="quotelev1">&gt; #5  0x00007fcca7dd635c in PMPI_Recv ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
buf=0x7fff2a0d7e00, 
<br>
<span class="quotelev1">&gt;     count=1, datatype=..., source=23, tag=100, status=...)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
<span class="quotelev1">&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:30
<br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f5dc31d2cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f5dc454ba4b in epoll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #2  0x00007f5dc45535fa in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #3  0x00007f5dc4524e69 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
<span class="quotelev1">&gt; #5  0x00007f5dc44c574f in PMPI_Send ()
</span><br>
<span class="quotelev1">&gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev1">&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
buf=0x7fff6e0c0790, 
<br>
<span class="quotelev1">&gt;     count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
<span class="quotelev1">&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:38
<br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt; In your first mail, you mentioned that you are testing the new knem
</span><br>
support.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try disabling knem and see if that fixes the problem?  (i.e.,
</span><br>
run with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might
<br>
mean we have a knem-based bug.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sorry for the confusion, that was indeed the trunk version of things
</span><br>
I was running.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the same problem using
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar</a>.
<br>
bz2
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; command-line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
-npernode 11 ./bin/mpi_test
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; back trace on sender:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
<span class="quotelev2">&gt; &gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
<br>
<span class="quotelev2">&gt; &gt;     tag=100, status=...)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
<span class="quotelev2">&gt; &gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:30
<br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; back trace on receiver:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
<br>
<span class="quotelev2">&gt; &gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev2">&gt; &gt;    from
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/lib/libmpi.so.0
<br>
<span class="quotelev2">&gt; &gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
<br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
<span class="quotelev2">&gt; &gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
<br>
i/mpi_test/src/mpi_test.cpp:38
<br>
<span class="quotelev2">&gt; &gt; (gdb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt; John
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt; You clearly have an issue with version confusion. The file cited in
</span><br>
your warning:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
errmgr_hnp.c:772
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; does not exist in 1.5rc5. It only exists in the developer's trunk at
</span><br>
this time. Check to ensure you have the right paths set, blow away the
<br>
install area (in case you have multiple versions installed on top of
<br>
each other), etc.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am new to openmpi and have encountered an issue using
</span><br>
pre-release 1.5rc5, for a simple mpi code (see attached).  In this test,
<br>
nodes 1 to n sends out a random number to node 0, node 0 sums all
<br>
numbers received.
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This code works fine on 1 machine with any number of nodes, and on
</span><br>
3 machines running 10 nodes per machine, but when we try to run 11 nodes
<br>
per machine this warning appears:
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
errmgr_hnp.c:772
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And node 0 (master summing node) hangs on receiving plus another
</span><br>
random node hangs on sending indefinitely.  Below are the back traces:
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
</span><br>
arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
<br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
</span><br>
flags=2) at event.c:838
<br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007f0c604ebb5a in opal_progress () at
</span><br>
runtime/opal_progress.c:189
<br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
</span><br>
m=0x7f0c60800400) at ../../../../opal/threads/
<br>
<span class="quotelev3">&gt; &gt; &gt; condition.h:99
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
</span><br>
(req=0x2538d80) at ../../../../ompi/request/request.h:377
<br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
</span><br>
count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
<br>
<span class="quotelev3">&gt; &gt; &gt;     status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1,
</span><br>
type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
<br>
status=0x7fff90f62668)
<br>
<span class="quotelev3">&gt; &gt; &gt;     at precv.c:78
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
</span><br>
buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100,
<br>
status=...)
<br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
<br>
enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
<br>
<span class="quotelev3">&gt; &gt; &gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
<br>
i_test/src/mpi_test.cpp:30
<br>
<span class="quotelev3">&gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and for sender is:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
</span><br>
arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
<br>
<span class="quotelev3">&gt; &gt; &gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
</span><br>
flags=2) at event.c:838
<br>
<span class="quotelev3">&gt; &gt; &gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0x00007fedba59c43a in opal_progress () at
</span><br>
runtime/opal_progress.c:189
<br>
<span class="quotelev3">&gt; &gt; &gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
</span><br>
m=0x7fedba8ba740)
<br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0x00007fedb279742e in ompi_request_wait_completion
</span><br>
(req=0x2392d80) at ../../../../ompi/request/request.h:377
<br>
<span class="quotelev3">&gt; &gt; &gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210,
</span><br>
count=100, datatype=0x612600, dst=0, tag=100,
<br>
<span class="quotelev3">&gt; &gt; &gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
</span><br>
pml_ob1_isend.c:125
<br>
<span class="quotelev3">&gt; &gt; &gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
</span><br>
type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
<br>
<span class="quotelev3">&gt; &gt; &gt;     at psend.c:75
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
</span><br>
buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
<br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
<br>
enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
<br>
<span class="quotelev3">&gt; &gt; &gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at
</span><br>
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
<br>
i_test/src/mpi_test.cpp:42
<br>
<span class="quotelev3">&gt; &gt; &gt; (gdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
</span><br>
different machines fails with different combinations of nodes / machine.
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Below is my command line for reference:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
</span><br>
hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
<br>
orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The problem does not exist in release 1.4.2 or earlier.  We are
</span><br>
testing unreleased codes for potential knem benefits, but can fall back
<br>
to 1.4.2 if necessary.
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My apologies in advance if I've missed something basic, thanks for
</span><br>
any help :)
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; John
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;test.cpp&gt;_______________________________________________
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
<span class="quotelev2">&gt; &gt; &lt;mpi_test.cpp&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
------------------------------
Message: 11
Date: Mon, 9 Aug 2010 14:48:04 -0700
From: John Hsu &lt;johnhsu_at_[hidden]&gt;
Subject: Re: [OMPI users] deadlock in openmpi 1.5rc5
To: Open MPI Users &lt;users_at_[hidden]&gt;
Cc: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
Message-ID:
	&lt;AANLkTimpmgtuZMSdmGAfReoNzzdX9KRPz+wtxRgaHuqE_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
I've replied in the ticket.
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2530#comment:2">https://svn.open-mpi.org/trac/ompi/ticket/2530#comment:2</a>
thanks!
John
On Mon, Aug 9, 2010 at 2:42 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; I've opened a ticket about this -- if it's an actual problem, it's a
1.5
&gt; blocker:
&gt;
&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
&gt;
&gt; What version of knem and Linux are you using?
&gt;
&gt;
&gt;
&gt; On Aug 9, 2010, at 4:50 PM, John Hsu wrote:
&gt;
&gt; &gt; problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
&gt; -npernode 11), so I proceeded to bump up -npernode to 12:
&gt; &gt;
&gt; &gt; $ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
&gt; -npernode 12 --mca btl_sm_use_knem 0  ./bin/mpi_test
&gt; &gt;
&gt; &gt; and the same error occurs,
&gt; &gt;
&gt; &gt; (gdb) bt
&gt; &gt; #0  0x00007fcca6ae5cf3 in epoll_wait () from /lib/libc.so.6
&gt; &gt; #1  0x00007fcca7e5ea4b in epoll_dispatch ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #2  0x00007fcca7e665fa in opal_event_base_loop ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #3  0x00007fcca7e37e69 in opal_progress ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
&gt; &gt; #5  0x00007fcca7dd635c in PMPI_Recv ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
&gt; buf=0x7fff2a0d7e00,
&gt; &gt;     count=1, datatype=..., source=23, tag=100, status=...)
&gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
&gt; &gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
&gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/mpi_test/src/mpi_test.cpp:30
&gt; &gt; (gdb)
&gt; &gt;
&gt; &gt;
&gt; &gt; (gdb) bt
&gt; &gt; #0  0x00007f5dc31d2cf3 in epoll_wait () from /lib/libc.so.6
&gt; &gt; #1  0x00007f5dc454ba4b in epoll_dispatch ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #2  0x00007f5dc45535fa in opal_event_base_loop ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #3  0x00007f5dc4524e69 in opal_progress ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
&gt; &gt; #5  0x00007f5dc44c574f in PMPI_Send ()
&gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
&gt; buf=0x7fff6e0c0790,
&gt; &gt;     count=1, datatype=..., dest=0, tag=100)
&gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
&gt; &gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
&gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/mpi_test/src/mpi_test.cpp:38
&gt; &gt; (gdb)
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
wrote:
&gt; &gt; In your first mail, you mentioned that you are testing the new knem
&gt; support.
&gt; &gt;
&gt; &gt; Can you try disabling knem and see if that fixes the problem?
(i.e., run
&gt; with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might mean
we
&gt; have a knem-based bug.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
&gt; &gt;
&gt; &gt; &gt; Hi,
&gt; &gt; &gt;
&gt; &gt; &gt; sorry for the confusion, that was indeed the trunk version of
things I
&gt; was running.
&gt; &gt; &gt;
&gt; &gt; &gt; Here's the same problem using
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt;
<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar</a>.
bz2
&gt; &gt; &gt;
&gt; &gt; &gt; command-line:
&gt; &gt; &gt;
&gt; &gt; &gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
&gt; -npernode 11 ./bin/mpi_test
&gt; &gt; &gt;
&gt; &gt; &gt; back trace on sender:
&gt; &gt; &gt;
&gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
&gt; &gt; &gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #3  0x00007fa004f1ce69 in opal_progress ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
&gt; &gt; &gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
&gt; buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
&gt; &gt; &gt;     tag=100, status=...)
&gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
&gt; &gt; &gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
&gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/mpi_test/src/mpi_test.cpp:30
&gt; &gt; &gt; (gdb)
&gt; &gt; &gt;
&gt; &gt; &gt; back trace on receiver:
&gt; &gt; &gt;
&gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
&gt; &gt; &gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #3  0x00007fcce2ef7e69 in opal_progress ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
&gt; &gt; &gt; #5  0x00007fcce2e9874f in PMPI_Send ()
&gt; &gt; &gt;    from
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/lib/libmpi.so.0
&gt; &gt; &gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
&gt; buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
&gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
&gt; &gt; &gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
&gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
i/mpi_test/src/mpi_test.cpp:38
&gt; &gt; &gt; (gdb)
&gt; &gt; &gt;
&gt; &gt; &gt; and attached is my mpi_test file for reference.
&gt; &gt; &gt;
&gt; &gt; &gt; thanks,
&gt; &gt; &gt; John
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; wrote:
&gt; &gt; &gt; You clearly have an issue with version confusion. The file cited
in
&gt; your warning:
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
&gt; errmgr_hnp.c:772
&gt; &gt; &gt;
&gt; &gt; &gt; does not exist in 1.5rc5. It only exists in the developer's trunk
at
&gt; this time. Check to ensure you have the right paths set, blow away the
&gt; install area (in case you have multiple versions installed on top of
each
&gt; other), etc.
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; Hi All,
&gt; &gt; &gt; &gt; I am new to openmpi and have encountered an issue using
pre-release
&gt; 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1
to n
&gt; sends out a random number to node 0, node 0 sums all numbers received.
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; This code works fine on 1 machine with any number of nodes, and
on 3
&gt; machines running 10 nodes per machine, but when we try to run 11 nodes
per
&gt; machine this warning appears:
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; [wgsg0:29074] Warning -- mutex was double locked from
&gt; errmgr_hnp.c:772
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; And node 0 (master summing node) hangs on receiving plus another
&gt; random node hangs on sending indefinitely.  Below are the back traces:
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; &gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
&gt; &gt; &gt; &gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
&gt; arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
&gt; &gt; &gt; &gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
&gt; flags=2) at event.c:838
&gt; &gt; &gt; &gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at
event.c:766
&gt; &gt; &gt; &gt; #4  0x00007f0c604ebb5a in opal_progress () at
&gt; runtime/opal_progress.c:189
&gt; &gt; &gt; &gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
&gt; m=0x7f0c60800400) at ../../../../opal/threads/
&gt; &gt; &gt; &gt; condition.h:99
&gt; &gt; &gt; &gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
&gt; (req=0x2538d80) at ../../../../ompi/request/request.h:377
&gt; &gt; &gt; &gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
&gt; count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
&gt; &gt; &gt; &gt;     status=0x7fff90f62668) at pml_ob1_irecv.c:104
&gt; &gt; &gt; &gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0,
count=1,
&gt; type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
&gt; status=0x7fff90f62668)
&gt; &gt; &gt; &gt;     at precv.c:78
&gt; &gt; &gt; &gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
&gt; buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100,
status=...)
&gt; &gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
&gt; &gt; &gt; &gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
&gt; &gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
i_test/src/mpi_test.cpp:30
&gt; &gt; &gt; &gt; (gdb)
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; and for sender is:
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; &gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
&gt; &gt; &gt; &gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
&gt; arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
&gt; &gt; &gt; &gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
&gt; flags=2) at event.c:838
&gt; &gt; &gt; &gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at
event.c:766
&gt; &gt; &gt; &gt; #4  0x00007fedba59c43a in opal_progress () at
&gt; runtime/opal_progress.c:189
&gt; &gt; &gt; &gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
&gt; m=0x7fedba8ba740)
&gt; &gt; &gt; &gt;     at ../../../../opal/threads/condition.h:99
&gt; &gt; &gt; &gt; #6  0x00007fedb279742e in ompi_request_wait_completion
&gt; (req=0x2392d80) at ../../../../ompi/request/request.h:377
&gt; &gt; &gt; &gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210,
count=100,
&gt; datatype=0x612600, dst=0, tag=100,
&gt; &gt; &gt; &gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
&gt; pml_ob1_isend.c:125
&gt; &gt; &gt; &gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
&gt; type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
&gt; &gt; &gt; &gt;     at psend.c:75
&gt; &gt; &gt; &gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
&gt; buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
&gt; &gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
&gt; &gt; &gt; &gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
&gt; &gt; &gt; &gt;     at
&gt;
/wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
i_test/src/mpi_test.cpp:42
&gt; &gt; &gt; &gt; (gdb)
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
&gt; different machines fails with different combinations of nodes /
machine.
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; Below is my command line for reference:
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
&gt; hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
&gt; orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; The problem does not exist in release 1.4.2 or earlier.  We are
&gt; testing unreleased codes for potential knem benefits, but can fall
back to
&gt; 1.4.2 if necessary.
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; My apologies in advance if I've missed something basic, thanks
for
&gt; any help :)
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; regards,
&gt; &gt; &gt; &gt; John
&gt; &gt; &gt; &gt; &lt;test.cpp&gt;_______________________________________________
&gt; &gt; &gt; &gt; users mailing list
&gt; &gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;
&gt; &gt; &gt; &lt;mpi_test.cpp&gt;_______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 1655, Issue 3
**************************************
Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13959/mpi4py-ompi-bug.py">mpi4py-ompi-bug.py</a>
</ul>
<!-- attachment="mpi4py-ompi-bug.py" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Previous message:</strong> <a href="13958.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13988.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Reply:</strong> <a href="13988.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
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
