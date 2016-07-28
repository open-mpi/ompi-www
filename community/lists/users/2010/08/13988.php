<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 09:11:54 2010" -->
<!-- isoreceived="20100812131154" -->
<!-- sent="Thu, 12 Aug 2010 09:12:26 -0400" -->
<!-- isosent="20100812131226" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program" -->
<!-- id="1F1445AB-9208-4EF0-AF25-5926BD53C7E1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E707F38473_at_usa-mv-msg.wipro.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 09:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13987.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="13959.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14015.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try this with the current trunk (r23587 or later)?
<br>
<p>I just added a number of new features and bug fixes, and I would be interested to see if it fixes the problem. In particular I suspect that this might be related to the Init/Finalize bounding of the checkpoint region.
<br>
<p>-- Josh
<br>
<p>On Aug 10, 2010, at 2:18 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please find attached is the python program that reproduces the hang that
</span><br>
<span class="quotelev1">&gt; I described. Initial part of this file describes the prerequisite
</span><br>
<span class="quotelev1">&gt; modules and the steps to reproduce the problem. Please let me know if
</span><br>
<span class="quotelev1">&gt; you have any questions in reproducing the hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note that, if I add the following lines at the end of the program
</span><br>
<span class="quotelev1">&gt; (in case sleep_time is True), the problem disappears ie; program resumes
</span><br>
<span class="quotelev1">&gt; successfully after successful completion of checkpoint.
</span><br>
<span class="quotelev1">&gt; # Add following lines at the end for sleep_time is True
</span><br>
<span class="quotelev1">&gt; else:
</span><br>
<span class="quotelev1">&gt; 	time.sleep(0.1)
</span><br>
<span class="quotelev1">&gt; # End of added lines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your time in looking into this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect
</span><br>
<span class="quotelev1">&gt; Wipro Technologies
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093
</span><br>
<span class="quotelev1">&gt; ananda.mudar_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Aug 2010 16:37:58 -0400
</span><br>
<span class="quotelev1">&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;270BD450-743A-4662-9568-1FEDFCC6F9C6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not tried to checkpoint an mpi4py application, so I cannot say
</span><br>
<span class="quotelev1">&gt; for sure if it works or not. You might be hitting something with the
</span><br>
<span class="quotelev1">&gt; Python runtime interacting in an odd way with either Open MPI or BLCR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you attach a debugger and get a backtrace on a stuck checkpoint?
</span><br>
<span class="quotelev1">&gt; That might show us where things are held up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with BLCR
</span><br>
<span class="quotelev1">&gt; 0.8.2. When I run ompi-checkpoint on the program written using mpi4py, I
</span><br>
<span class="quotelev1">&gt; see that program doesn?t resume sometimes after successful checkpoint
</span><br>
<span class="quotelev1">&gt; creation. This doesn?t occur always meaning the program resumes after
</span><br>
<span class="quotelev1">&gt; successful checkpoint creation most of the time and completes
</span><br>
<span class="quotelev1">&gt; successfully. Has anyone tested the checkpoint/restart functionality
</span><br>
<span class="quotelev1">&gt; with mpi4py programs? Are there any best practices that I should keep in
</span><br>
<span class="quotelev1">&gt; mind while checkpointing mpi4py programs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your time
</span><br>
<span class="quotelev2">&gt;&gt; -          Ananda
</span><br>
<span class="quotelev2">&gt;&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The information contained in this electronic message and any
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the
</span><br>
<span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged
</span><br>
<span class="quotelev1">&gt; information. If you are not the intended recipient, you should not
</span><br>
<span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender
</span><br>
<span class="quotelev1">&gt; immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
<span class="quotelev1">&gt; should check this email and any attachments for the presence of viruses.
</span><br>
<span class="quotelev1">&gt; The company accepts no liability for any damage caused by any virus
</span><br>
<span class="quotelev1">&gt; transmitted by this email.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; www.wipro.com
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 8
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Aug 2010 13:50:03 -0700
</span><br>
<span class="quotelev1">&gt; From: John Hsu &lt;johnhsu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] deadlock in openmpi 1.5rc5
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;AANLkTim63t=wQMeWfHWNnvnVKajOe92e7NG3X=Warwr0_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
</span><br>
<span class="quotelev1">&gt; -npernode
</span><br>
<span class="quotelev1">&gt; 11), so I proceeded to bump up -npernode to 12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev1">&gt; -npernode
</span><br>
<span class="quotelev1">&gt; 12 --mca btl_sm_use_knem 0  ./bin/mpi_test
</span><br>
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
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007fcca7e665fa in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007fcca7e37e69 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00007fcca7dd635c in PMPI_Recv ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff2a0d7e00,
</span><br>
<span class="quotelev1">&gt;    count=1, datatype=..., source=23, tag=100, status=...)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:30
</span><br>
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
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007f5dc45535fa in opal_event_base_loop ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007f5dc4524e69 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00007f5dc44c574f in PMPI_Send ()
</span><br>
<span class="quotelev1">&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff6e0c0790,
</span><br>
<span class="quotelev1">&gt;    count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
</span><br>
<span class="quotelev1">&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:38
</span><br>
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
<span class="quotelev1">&gt; On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In your first mail, you mentioned that you are testing the new knem
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try disabling knem and see if that fixes the problem?  (i.e.,
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev2">&gt;&gt; with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might mean
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; have a knem-based bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sorry for the confusion, that was indeed the trunk version of things
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt;&gt; was running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the same problem using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar</a>.
</span><br>
<span class="quotelev1">&gt; bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command-line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev1">&gt; -npernode
</span><br>
<span class="quotelev2">&gt;&gt; 11 ./bin/mpi_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back trace on sender:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    tag=100, status=...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back trace on receiver:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; John
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You clearly have an issue with version confusion. The file cited in
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not exist in 1.5rc5. It only exists in the developer's trunk at
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; time. Check to ensure you have the right paths set, blow away the
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev2">&gt;&gt; area (in case you have multiple versions installed on top of each
</span><br>
<span class="quotelev1">&gt; other),
</span><br>
<span class="quotelev2">&gt;&gt; etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am new to openmpi and have encountered an issue using
</span><br>
<span class="quotelev1">&gt; pre-release
</span><br>
<span class="quotelev2">&gt;&gt; 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1
</span><br>
<span class="quotelev1">&gt; to n
</span><br>
<span class="quotelev2">&gt;&gt; sends out a random number to node 0, node 0 sums all numbers received.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This code works fine on 1 machine with any number of nodes, and on
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt; machines running 10 nodes per machine, but when we try to run 11 nodes
</span><br>
<span class="quotelev1">&gt; per
</span><br>
<span class="quotelev2">&gt;&gt; machine this warning appears:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And node 0 (master summing node) hangs on receiving plus another
</span><br>
<span class="quotelev1">&gt; random
</span><br>
<span class="quotelev2">&gt;&gt; node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
</span><br>
<span class="quotelev2">&gt;&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007f0c604ebb5a in opal_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
</span><br>
<span class="quotelev2">&gt;&gt; m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; condition.h:99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x2538d80)
</span><br>
<span class="quotelev2">&gt;&gt; at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
</span><br>
<span class="quotelev2">&gt;&gt; count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1,
</span><br>
<span class="quotelev2">&gt;&gt; type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev2">&gt;&gt; status=0x7fff90f62668)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at precv.c:78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100,
</span><br>
<span class="quotelev1">&gt; status=...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
</span><br>
<span class="quotelev1">&gt; enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
</span><br>
<span class="quotelev1">&gt; i_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and for sender is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
</span><br>
<span class="quotelev2">&gt;&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007fedba59c43a in opal_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
</span><br>
<span class="quotelev2">&gt;&gt; m=0x7fedba8ba740)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007fedb279742e in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x2392d80)
</span><br>
<span class="quotelev2">&gt;&gt; at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210,
</span><br>
<span class="quotelev1">&gt; count=100,
</span><br>
<span class="quotelev2">&gt;&gt; datatype=0x612600, dst=0, tag=100,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_isend.c:125
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
</span><br>
<span class="quotelev2">&gt;&gt; type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at psend.c:75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
</span><br>
<span class="quotelev1">&gt; enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
</span><br>
<span class="quotelev1">&gt; i_test/src/mpi_test.cpp:42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
</span><br>
<span class="quotelev2">&gt;&gt; different machines fails with different combinations of nodes /
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Below is my command line for reference:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem does not exist in release 1.4.2 or earlier.  We are
</span><br>
<span class="quotelev1">&gt; testing
</span><br>
<span class="quotelev2">&gt;&gt; unreleased codes for potential knem benefits, but can fall back to
</span><br>
<span class="quotelev1">&gt; 1.4.2 if
</span><br>
<span class="quotelev2">&gt;&gt; necessary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My apologies in advance if I've missed something basic, thanks for
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev2">&gt;&gt; help :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi_test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Message: 9
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Aug 2010 23:02:51 +0200
</span><br>
<span class="quotelev1">&gt; From: Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI Template Datatype?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;AANLkTi=Peq+CQ6t+EXaKhwOT=wd0B8VjWc88sHXqrdYw_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=UTF-8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Alexandru,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can read all about Boost.MPI at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.boost.org/doc/libs/1_43_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_43_0/doc/html/mpi.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 9, 2010 at 10:27 PM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I basically have to implement a 4D vector. An additional goal of my
</span><br>
<span class="quotelev1">&gt; project
</span><br>
<span class="quotelev2">&gt;&gt; is to support char, int, float and double datatypes in the vector.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If your &quot;vector&quot; is fixed-size (i.e., all vectors are comprised of
</span><br>
<span class="quotelev1">&gt; 4 elements), then you can likely dispose of std::vector, use
</span><br>
<span class="quotelev1">&gt; C-style arrays with templated send/receive calls (that would
</span><br>
<span class="quotelev1">&gt; be just interfaces to MPI_Send/MPI_Recv)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // BEWARE: untested code!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   template &lt;typename T&gt;
</span><br>
<span class="quotelev1">&gt;   int send(T* vector, int dest, int tag, MPI_Comm comm) {
</span><br>
<span class="quotelev1">&gt;       throw std::logic_error(&quot;called generic MyVector::send&quot;);
</span><br>
<span class="quotelev1">&gt;   };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   template &lt;typename T&gt;
</span><br>
<span class="quotelev1">&gt;   int recv(T* vector, int source, int tag, MPI_Comm comm) {
</span><br>
<span class="quotelev1">&gt;       throw std::logic_error(&quot;called generic MyVector::send&quot;);
</span><br>
<span class="quotelev1">&gt;   };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then you specialize the template for the types you actually use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  template &lt;&gt;
</span><br>
<span class="quotelev1">&gt;  int send&lt;double&gt;(int* vector, int dest, int tag, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    return MPI_Send(vector, 4, MPI_DOUBLE, dest, tag, comm);
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  template &lt;&gt;
</span><br>
<span class="quotelev1">&gt;  int recv&lt;double&gt;(int* vector, int src, int tag, MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    return MPI_Recv(vector, 4, MPI_DOUBLE, dest, tag, comm);
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  // etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, let me warn you that it would likely take more time and
</span><br>
<span class="quotelev1">&gt; effort to write all the template specializations and get them working
</span><br>
<span class="quotelev1">&gt; than just use Boost.MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 10
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Aug 2010 17:42:26 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] deadlock in openmpi 1.5rc5
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;7283451E-8C4A-4F15-B8E5-649349ABBE0C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've opened a ticket about this -- if it's an actual problem, it's a 1.5
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
<span class="quotelev2">&gt;&gt; problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
</span><br>
<span class="quotelev1">&gt; -npernode 11), so I proceeded to bump up -npernode to 12:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev1">&gt; -npernode 12 --mca btl_sm_use_knem 0  ./bin/mpi_test
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the same error occurs,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007fcca6ae5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007fcca7e5ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007fcca7e665fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007fcca7e37e69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007fcca7dd635c in PMPI_Recv ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff2a0d7e00,
</span><br>
<span class="quotelev2">&gt;&gt;    count=1, datatype=..., source=23, tag=100, status=...)
</span><br>
<span class="quotelev2">&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
</span><br>
<span class="quotelev2">&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f5dc31d2cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f5dc454ba4b in epoll_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f5dc45535fa in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f5dc4524e69 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f5dc44c574f in PMPI_Send ()
</span><br>
<span class="quotelev2">&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff6e0c0790,
</span><br>
<span class="quotelev2">&gt;&gt;    count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev2">&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
</span><br>
<span class="quotelev2">&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In your first mail, you mentioned that you are testing the new knem
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try disabling knem and see if that fixes the problem?  (i.e.,
</span><br>
<span class="quotelev1">&gt; run with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might
</span><br>
<span class="quotelev1">&gt; mean we have a knem-based bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sorry for the confusion, that was indeed the trunk version of things
</span><br>
<span class="quotelev1">&gt; I was running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the same problem using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar</a>.
</span><br>
<span class="quotelev1">&gt; bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command-line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev1">&gt; -npernode 11 ./bin/mpi_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back trace on sender:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    tag=100, status=...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back trace on receiver:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; John
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You clearly have an issue with version confusion. The file cited in
</span><br>
<span class="quotelev1">&gt; your warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not exist in 1.5rc5. It only exists in the developer's trunk at
</span><br>
<span class="quotelev1">&gt; this time. Check to ensure you have the right paths set, blow away the
</span><br>
<span class="quotelev1">&gt; install area (in case you have multiple versions installed on top of
</span><br>
<span class="quotelev1">&gt; each other), etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am new to openmpi and have encountered an issue using
</span><br>
<span class="quotelev1">&gt; pre-release 1.5rc5, for a simple mpi code (see attached).  In this test,
</span><br>
<span class="quotelev1">&gt; nodes 1 to n sends out a random number to node 0, node 0 sums all
</span><br>
<span class="quotelev1">&gt; numbers received.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This code works fine on 1 machine with any number of nodes, and on
</span><br>
<span class="quotelev1">&gt; 3 machines running 10 nodes per machine, but when we try to run 11 nodes
</span><br>
<span class="quotelev1">&gt; per machine this warning appears:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And node 0 (master summing node) hangs on receiving plus another
</span><br>
<span class="quotelev1">&gt; random node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
</span><br>
<span class="quotelev1">&gt; arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007f0c604ebb5a in opal_progress () at
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
</span><br>
<span class="quotelev1">&gt; m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; condition.h:99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x2538d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
</span><br>
<span class="quotelev1">&gt; count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0, count=1,
</span><br>
<span class="quotelev1">&gt; type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev1">&gt; status=0x7fff90f62668)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at precv.c:78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100,
</span><br>
<span class="quotelev1">&gt; status=...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
</span><br>
<span class="quotelev1">&gt; enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
</span><br>
<span class="quotelev1">&gt; i_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and for sender is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
</span><br>
<span class="quotelev1">&gt; arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at event.c:766
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007fedba59c43a in opal_progress () at
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
</span><br>
<span class="quotelev1">&gt; m=0x7fedba8ba740)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00007fedb279742e in ompi_request_wait_completion
</span><br>
<span class="quotelev1">&gt; (req=0x2392d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210,
</span><br>
<span class="quotelev1">&gt; count=100, datatype=0x612600, dst=0, tag=100,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
</span><br>
<span class="quotelev1">&gt; pml_ob1_isend.c:125
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
</span><br>
<span class="quotelev1">&gt; type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at psend.c:75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev1">&gt; buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
</span><br>
<span class="quotelev1">&gt; enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
</span><br>
<span class="quotelev1">&gt; i_test/src/mpi_test.cpp:42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
</span><br>
<span class="quotelev1">&gt; different machines fails with different combinations of nodes / machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Below is my command line for reference:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
</span><br>
<span class="quotelev1">&gt; hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem does not exist in release 1.4.2 or earlier.  We are
</span><br>
<span class="quotelev1">&gt; testing unreleased codes for potential knem benefits, but can fall back
</span><br>
<span class="quotelev1">&gt; to 1.4.2 if necessary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My apologies in advance if I've missed something basic, thanks for
</span><br>
<span class="quotelev1">&gt; any help :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi_test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 11
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Aug 2010 14:48:04 -0700
</span><br>
<span class="quotelev1">&gt; From: John Hsu &lt;johnhsu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] deadlock in openmpi 1.5rc5
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;AANLkTimpmgtuZMSdmGAfReoNzzdX9KRPz+wtxRgaHuqE_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've replied in the ticket.
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530#comment:2">https://svn.open-mpi.org/trac/ompi/ticket/2530#comment:2</a>
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 9, 2010 at 2:42 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've opened a ticket about this -- if it's an actual problem, it's a
</span><br>
<span class="quotelev1">&gt; 1.5
</span><br>
<span class="quotelev2">&gt;&gt; blocker:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What version of knem and Linux are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 9, 2010, at 4:50 PM, John Hsu wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem &quot;fixed&quot; by adding the --mca btl_sm_use_knem 0 option (with
</span><br>
<span class="quotelev2">&gt;&gt; -npernode 11), so I proceeded to bump up -npernode to 12:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev2">&gt;&gt; -npernode 12 --mca btl_sm_use_knem 0  ./bin/mpi_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the same error occurs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fcca6ae5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fcca7e5ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fcca7e665fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fcca7e37e69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007fcca15b6e95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fcca7dd635c in PMPI_Recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff2a0d7e00,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    count=1, datatype=..., source=23, tag=100, status=...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff2a0d8028)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007f5dc31d2cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007f5dc454ba4b in epoll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007f5dc45535fa in opal_event_base_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007f5dc4524e69 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007f5dbdca4b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007f5dc44c574f in PMPI_Send ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff6e0c0790,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff6e0c09b8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 9, 2010 at 6:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In your first mail, you mentioned that you are testing the new knem
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try disabling knem and see if that fixes the problem?
</span><br>
<span class="quotelev1">&gt; (i.e., run
</span><br>
<span class="quotelev2">&gt;&gt; with --mca btl_sm_use_knem 0&quot;)  If it fixes the issue, that might mean
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; have a knem-based bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 6, 2010, at 1:42 PM, John Hsu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sorry for the confusion, that was indeed the trunk version of
</span><br>
<span class="quotelev1">&gt; things I
</span><br>
<span class="quotelev2">&gt;&gt; was running.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the same problem using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar">http://www.open-mpi.org/software/ompi/v1.5/downloads/openmpi-1.5rc5.tar</a>.
</span><br>
<span class="quotelev1">&gt; bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command-line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../openmpi_devel/bin/mpirun -hostfile hostfiles/hostfile.wgsgX
</span><br>
<span class="quotelev2">&gt;&gt; -npernode 11 ./bin/mpi_test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back trace on sender:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007fa003bcacf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007fa004f43a4b in epoll_dispatch ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007fa004f4b5fa in opal_event_base_loop ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007fa004f1ce69 in opal_progress ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007f9ffe69be95 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007fa004ebb35c in PMPI_Recv ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x000000000040ae48 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff8f5cbb50, count=1, datatype=..., source=29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    tag=100, status=...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x0000000000409a57 in main (argc=1, argv=0x7fff8f5cbd78)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back trace on receiver:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007fcce1ba5cf3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007fcce2f1ea4b in epoll_dispatch ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007fcce2f265fa in opal_event_base_loop ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007fcce2ef7e69 in opal_progress ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007fccdc677b1d in mca_pml_ob1_send ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007fcce2e9874f in PMPI_Send ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   from
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/lib/libmpi.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x000000000040adda in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff3f18ad20, count=1, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/openmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x0000000000409b72 in main (argc=1, argv=0x7fff3f18af48)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle_mpi/wg-ros-pkg-unreleased/stacks/mp
</span><br>
<span class="quotelev1">&gt; i/mpi_test/src/mpi_test.cpp:38
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and attached is my mpi_test file for reference.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Aug 6, 2010 at 6:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You clearly have an issue with version confusion. The file cited
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; your warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev2">&gt;&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does not exist in 1.5rc5. It only exists in the developer's trunk
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev2">&gt;&gt; this time. Check to ensure you have the right paths set, blow away the
</span><br>
<span class="quotelev2">&gt;&gt; install area (in case you have multiple versions installed on top of
</span><br>
<span class="quotelev1">&gt; each
</span><br>
<span class="quotelev2">&gt;&gt; other), etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 5, 2010, at 5:16 PM, John Hsu wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am new to openmpi and have encountered an issue using
</span><br>
<span class="quotelev1">&gt; pre-release
</span><br>
<span class="quotelev2">&gt;&gt; 1.5rc5, for a simple mpi code (see attached).  In this test, nodes 1
</span><br>
<span class="quotelev1">&gt; to n
</span><br>
<span class="quotelev2">&gt;&gt; sends out a random number to node 0, node 0 sums all numbers received.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This code works fine on 1 machine with any number of nodes, and
</span><br>
<span class="quotelev1">&gt; on 3
</span><br>
<span class="quotelev2">&gt;&gt; machines running 10 nodes per machine, but when we try to run 11 nodes
</span><br>
<span class="quotelev1">&gt; per
</span><br>
<span class="quotelev2">&gt;&gt; machine this warning appears:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [wgsg0:29074] Warning -- mutex was double locked from
</span><br>
<span class="quotelev2">&gt;&gt; errmgr_hnp.c:772
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And node 0 (master summing node) hangs on receiving plus another
</span><br>
<span class="quotelev2">&gt;&gt; random node hangs on sending indefinitely.  Below are the back traces:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #0  0x00007f0c5f109cd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #1  0x00007f0c6052db53 in epoll_dispatch (base=0x2310bf0,
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x22f91f0, tv=0x7fff90f623e0) at epoll.c:215
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #2  0x00007f0c6053ae58 in opal_event_base_loop (base=0x2310bf0,
</span><br>
<span class="quotelev2">&gt;&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3  0x00007f0c6053ac27 in opal_event_loop (flags=2) at
</span><br>
<span class="quotelev1">&gt; event.c:766
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #4  0x00007f0c604ebb5a in opal_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #5  0x00007f0c59b79cb1 in opal_condition_wait (c=0x7f0c608003a0,
</span><br>
<span class="quotelev2">&gt;&gt; m=0x7f0c60800400) at ../../../../opal/threads/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #6  0x00007f0c59b79dff in ompi_request_wait_completion
</span><br>
<span class="quotelev2">&gt;&gt; (req=0x2538d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #7  0x00007f0c59b7a8d7 in mca_pml_ob1_recv (addr=0x7fff90f626a0,
</span><br>
<span class="quotelev2">&gt;&gt; count=1, datatype=0x612600, src=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    status=0x7fff90f62668) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #8  0x00007f0c60425dbc in PMPI_Recv (buf=0x7fff90f626a0,
</span><br>
<span class="quotelev1">&gt; count=1,
</span><br>
<span class="quotelev2">&gt;&gt; type=0x612600, source=45, tag=100, comm=0x7f0c607f2b40,
</span><br>
<span class="quotelev2">&gt;&gt; status=0x7fff90f62668)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at precv.c:78
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #9  0x000000000040ae14 in MPI::Comm::Recv (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x7fff90f626a0, count=1, datatype=..., source=45, tag=100,
</span><br>
<span class="quotelev1">&gt; status=...)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
</span><br>
<span class="quotelev1">&gt; enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:36
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #10 0x0000000000409a27 in main (argc=1, argv=0x7fff90f628c8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
</span><br>
<span class="quotelev1">&gt; i_test/src/mpi_test.cpp:30
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and for sender is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #0  0x00007fedb919fcd3 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #1  0x00007fedba5e0a93 in epoll_dispatch (base=0x2171880,
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x216c6e0, tv=0x7ffffa8a4130) at epoll.c:215
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #2  0x00007fedba5edde0 in opal_event_base_loop (base=0x2171880,
</span><br>
<span class="quotelev2">&gt;&gt; flags=2) at event.c:838
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3  0x00007fedba5edbaf in opal_event_loop (flags=2) at
</span><br>
<span class="quotelev1">&gt; event.c:766
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #4  0x00007fedba59c43a in opal_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #5  0x00007fedb2796f97 in opal_condition_wait (c=0x7fedba8ba6e0,
</span><br>
<span class="quotelev2">&gt;&gt; m=0x7fedba8ba740)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #6  0x00007fedb279742e in ompi_request_wait_completion
</span><br>
<span class="quotelev2">&gt;&gt; (req=0x2392d80) at ../../../../ompi/request/request.h:377
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #7  0x00007fedb2798e0c in mca_pml_ob1_send (buf=0x23b6210,
</span><br>
<span class="quotelev1">&gt; count=100,
</span><br>
<span class="quotelev2">&gt;&gt; datatype=0x612600, dst=0, tag=100,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x7fedba8ace80) at
</span><br>
<span class="quotelev2">&gt;&gt; pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #8  0x00007fedba4c9a08 in PMPI_Send (buf=0x23b6210, count=100,
</span><br>
<span class="quotelev2">&gt;&gt; type=0x612600, dest=0, tag=100, comm=0x7fedba8ace80)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at psend.c:75
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #9  0x000000000040ae52 in MPI::Comm::Send (this=0x612800,
</span><br>
<span class="quotelev2">&gt;&gt; buf=0x23b6210, count=100, datatype=..., dest=0, tag=100)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/op
</span><br>
<span class="quotelev1">&gt; enmpi_devel/include/openmpi/ompi/mpi/cxx/comm_inln.h:29
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #10 0x0000000000409bec in main (argc=1, argv=0x7ffffa8a4658)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    at
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /wg/stor5/wgsim/hsu/projects/cturtle/wg-ros-pkg-unreleased/stacks/mpi/mp
</span><br>
<span class="quotelev1">&gt; i_test/src/mpi_test.cpp:42
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The &quot;deadlock&quot; appears to be a machine dependent race condition,
</span><br>
<span class="quotelev2">&gt;&gt; different machines fails with different combinations of nodes /
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Below is my command line for reference:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ../openmpi_devel/bin/mpirun -x PATH -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hostfiles/hostfile.wgsgX -npernode 11 -mca btl tcp,sm,self -mca
</span><br>
<span class="quotelev2">&gt;&gt; orte_base_help_aggregate 0 -mca opal_debug_locks 1  ./bin/mpi_test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem does not exist in release 1.4.2 or earlier.  We are
</span><br>
<span class="quotelev2">&gt;&gt; testing unreleased codes for potential knem benefits, but can fall
</span><br>
<span class="quotelev1">&gt; back to
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.2 if necessary.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My apologies in advance if I've missed something basic, thanks
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; any help :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; John
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mpi_test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; End of users Digest, Vol 1655, Issue 3
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; &lt;mpi4py-ompi-bug.py&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13987.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="13959.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14015.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
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
