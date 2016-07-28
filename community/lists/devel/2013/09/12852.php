<?
$subject_val = "Re: [OMPI devel] openib BTL problems with ORTE async changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 16:51:34 2013" -->
<!-- isoreceived="20130903205134" -->
<!-- sent="Tue, 3 Sep 2013 13:51:31 -0700" -->
<!-- isosent="20130903205131" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib BTL problems with ORTE async changes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3600673C9EB_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3600673C9E6_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib BTL problems with ORTE async changes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 16:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12853.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12851.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12851.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12853.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Reply:</strong> <a href="12853.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correction: That line below should be:
<br>
gmake run FILE=p2p_c
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Tuesday, September 03, 2013 4:50 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] openib BTL problems with ORTE async changes
<br>
<p>I just retried and I still get errors with the latest trunk. (29112).  If I back up to r29057, then everything is fine.  In addition, I can reproduce this on two different clusters.
<br>
Can you try running the entire intel test suite and see if that works?  Maybe a different test will fail for you.
<br>
<p>&nbsp;&nbsp;&nbsp;cd ompi-tests/trunk/intel_tests/src
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gmake run FILE=cuda_c
<br>
<p>You need to modify Makefile in intel_tests to make it do the right thing.  Trying to figure out what I should do next.  As I said, I get a variety of different failures.  Maybe I should collect them up and see what it means.  This failure has me dead in the water with the trunk.
<br>
<p><p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, September 03, 2013 3:41 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] openib BTL problems with ORTE async changes
<br>
<p>Sigh - I cannot get it to fail. I've tried up to np=16 without getting a single hiccup.
<br>
<p>Try a fresh checkout - let's make sure you don't have some old cruft laying around.
<br>
<p>On Sep 3, 2013, at 12:26 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
<p>I am running a debug build.  Here is my configure line:
<br>
<p>../configure --enable-debug --enable-shared --disable-static --prefix=/home/rolf/ompi-trunk-29061/64 --with- wrapper-ldflags='-Wl,-rpath,${prefix}/lib' --disable-vt --enable-orterun-prefix-by-default -disable-io-romio  --enable-picky
<br>
<p>The test program is from the intel test suite in our test suite.
<br>
<a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests/src/MPI_Irecv_comm_c.c<http://svn.open-mpi.org/svn/ompi-tests/trunk/intel/src/MPI_Irecv_comm_c.c">http://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests/src/MPI_Irecv_comm_c.c<http://svn.open-mpi.org/svn/ompi-tests/trunk/intel/src/MPI_Irecv_comm_c.c</a>&gt;
<br>
<p>Run with at least np=4.  The more np, the better.
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, September 03, 2013 3:22 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] openib BTL problems with ORTE async changes
<br>
<p>Also, send me your test code - maybe that is required to trigger it
<br>
<p>On Sep 3, 2013, at 12:19 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Dang - I just finished running it on odin without a problem. Are you seeing this with a debug or optimized build?
<br>
<p><p>On Sep 3, 2013, at 12:16 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Yes, it fails on the current trunk (r29112).  That is what started me on the journey to figure out when things went wrong.  It was working up until r29058.
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, September 03, 2013 2:49 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] openib BTL problems with ORTE async changes
<br>
<p>Are you all the way up to the current trunk? There have been a few typo fixes since the original commit.
<br>
<p>I'm not familiar with the OOB connect code in openib. The OOB itself isn't using free list, so I suspect it is something up in the OOB connect code itself. I'll take a look and see if something leaps out at me - it seems to be working fine on IU's odin cluster, which is the only IB-based system I can access
<br>
<p><p>On Sep 3, 2013, at 11:34 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
<p><p><p>As mentioned in the weekly conference call, I am seeing some strange errors when using the openib BTL.  I have narrowed down the changeset that broke things to the ORTE async code.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/29058">https://svn.open-mpi.org/trac/ompi/changeset/29058</a>  (and <a href="https://svn.open-mpi.org/trac/ompi/changeset/29061">https://svn.open-mpi.org/trac/ompi/changeset/29061</a> which was needed to fix compile errors)
<br>
<p>Changeset 29057 does not have these issues.  I do not have a very good characterization of the failures.  The failures are not consistent.  Sometimes they can pass.  Sometimes the stack trace can be different.  They seem to happen more with larger np, like np=4 and more.
<br>
<p>The first failure mode is a segmentation violation and it always seems to be that we are trying to pop something of a free list.  But the upper parts of the stack trace can vary.  This is with the trunk version 29061.
<br>
Ralph, any thoughts on where we go from here?
<br>
<p>[rolf_at_Fermi-Cluster src]$ mpirun -np 4 -host c0-0,c0-1,c0-3,c0-4 MPI_Irecv_comm_c
<br>
MPITEST info  (0): Starting:  MPI_Irecv_comm:
<br>
[compute-0-4:04752] *** Process received signal *** [compute-0-4:04752] Signal: Segmentation fault (11) [compute-0-4:04752] Signal code: Address not mapped (1) [compute-0-4:04752] Failing at address: 0x28
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 4752 on node c0-4 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[rolf_at_Fermi-Cluster src]$ gdb MPI_Irecv_comm_c core.4752 GNU gdb Fedora (6.8-27.el5) Copyright (C) 2008 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
Core was generated by `MPI_Irecv_comm_c'.
<br>
Program terminated with signal 11, Segmentation fault.
<br>
[New process 4753]
<br>
[New process 4756]
<br>
[New process 4755]
<br>
[New process 4754]
<br>
[New process 4752]
<br>
#0  0x00002aaaad6ecad6 in opal_atomic_lifo_pop (lifo=0x5996940) at ../../../../../opal/class/opal_atomic_lifo.h:111
<br>
111             lifo-&gt;opal_lifo_head = (opal_list_item_t*)item-&gt;opal_list_next;
<br>
(gdb) where
<br>
#0  0x00002aaaad6ecad6 in opal_atomic_lifo_pop (lifo=0x5996940) at ../../../../../opal/class/opal_atomic_lifo.h:111
<br>
#1  0x00002aaaad6ec5b4 in __ompi_free_list_wait_mt (fl=0x5996940, item=0x40ea8d50) at ../../../../../ompi/class/ompi_free_list.h:228
<br>
#2  0x00002aaaad6ec3f8 in post_recvs (ep=0x59f3120, qp=0, num_post=256) at ../../../../../ompi/mca/btl/openib/btl_openib_endpoint.h:361
<br>
#3  0x00002aaaad6ec1ae in mca_btl_openib_endpoint_post_rr_nolock (ep=0x59f3120, qp=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/btl/openib/btl_openib_endpoint.h:405
<br>
#4  0x00002aaaad6ebfad in mca_btl_openib_endpoint_post_recvs (endpoint=0x59f3120)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/btl/openib/btl_openib_endpoint.c:494
<br>
#5  0x00002aaaad6fe71c in qp_create_all (endpoint=0x59f3120) at ../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:432
<br>
#6  0x00002aaaad6fde2b in reply_start_connect (endpoint=0x59f3120, rem_info=0x40ea8ed0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:245
<br>
#7  0x00002aaaad7006ae in rml_recv_cb (status=0, process_name=0x5b0bb90, buffer=0x40ea8f80, tag=102, cbdata=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:858
<br>
#8  0x00002ae802454601 in orte_rml_base_process_msg (fd=-1, flags=4, cbdata=0x5b0bac0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../orte/mca/rml/base/rml_base_msg_handlers.c:172
<br>
#9  0x00002ae8027164a1 in event_process_active_single_queue (base=0x58ac620, activeq=0x58aa5b0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1367
<br>
#10 0x00002ae802716b24 in event_process_active (base=0x58ac620) at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1437
<br>
#11 0x00002ae80271715c in opal_libevent2021_event_base_loop (base=0x58ac620, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1645
<br>
#12 0x00002ae8023e7465 in orte_progress_thread_engine (obj=0x2ae8026902c0) at ../../orte/runtime/orte_init.c:180
<br>
#13 0x0000003ab1e06367 in start_thread () from /lib64/libpthread.so.0
<br>
#14 0x0000003ab16d2f7d in clone () from /lib64/libc.so.6
<br>
(gdb)
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12853.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12851.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12851.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12853.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Reply:</strong> <a href="12853.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
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
