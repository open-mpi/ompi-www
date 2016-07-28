<?
$subject_val = "Re: [OMPI devel] openib BTL problems with ORTE async changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 15:21:39 2013" -->
<!-- isoreceived="20130903192139" -->
<!-- sent="Tue, 3 Sep 2013 12:21:35 -0700" -->
<!-- isosent="20130903192135" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib BTL problems with ORTE async changes" -->
<!-- id="846902C9-8DCA-4B0A-88C3-52D8DF97AD4E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24706E73-40B3-4480-8275-8051BA06C0F7_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 15:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12848.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Previous message:</strong> <a href="12846.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12846.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12849.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Reply:</strong> <a href="12849.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, send me your test code - maybe that is required to trigger it
<br>
<p>On Sep 3, 2013, at 12:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dang - I just finished running it on odin without a problem. Are you seeing this with a debug or optimized build?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2013, at 12:16 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it fails on the current trunk (r29112).  That is what started me on the journey to figure out when things went wrong.  It was working up until r29058.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, September 03, 2013 2:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] openib BTL problems with ORTE async changes
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Are you all the way up to the current trunk? There have been a few typo fixes since the original commit.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I'm not familiar with the OOB connect code in openib. The OOB itself isn't using free list, so I suspect it is something up in the OOB connect code itself. I'll take a look and see if something leaps out at me - it seems to be working fine on IU's odin cluster, which is the only IB-based system I can access
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2013, at 11:34 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As mentioned in the weekly conference call, I am seeing some strange errors when using the openib BTL.  I have narrowed down the changeset that broke things to the ORTE async code.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/29058">https://svn.open-mpi.org/trac/ompi/changeset/29058</a>  (and <a href="https://svn.open-mpi.org/trac/ompi/changeset/29061">https://svn.open-mpi.org/trac/ompi/changeset/29061</a> which was needed to fix compile errors)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Changeset 29057 does not have these issues.  I do not have a very good characterization of the failures.  The failures are not consistent.  Sometimes they can pass.  Sometimes the stack trace can be different.  They seem to happen more with larger np, like np=4 and more.   
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The first failure mode is a segmentation violation and it always seems to be that we are trying to pop something of a free list.  But the upper parts of the stack trace can vary.  This is with the trunk version 29061.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, any thoughts on where we go from here?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; [rolf_at_Fermi-Cluster src]$ mpirun -np 4 -host c0-0,c0-1,c0-3,c0-4 MPI_Irecv_comm_c
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST info  (0): Starting:  MPI_Irecv_comm:   
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-4:04752] *** Process received signal *** [compute-0-4:04752] Signal: Segmentation fault (11) [compute-0-4:04752] Signal code: Address not mapped (1) [compute-0-4:04752] Failing at address: 0x28
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 3 with PID 4752 on node c0-4 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [rolf_at_Fermi-Cluster src]$ gdb MPI_Irecv_comm_c core.4752 GNU gdb Fedora (6.8-27.el5) Copyright (C) 2008 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Core was generated by `MPI_Irecv_comm_c'.
</span><br>
<span class="quotelev2">&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; [New process 4753]
</span><br>
<span class="quotelev2">&gt;&gt; [New process 4756]
</span><br>
<span class="quotelev2">&gt;&gt; [New process 4755]
</span><br>
<span class="quotelev2">&gt;&gt; [New process 4754]
</span><br>
<span class="quotelev2">&gt;&gt; [New process 4752]
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002aaaad6ecad6 in opal_atomic_lifo_pop (lifo=0x5996940) at ../../../../../opal/class/opal_atomic_lifo.h:111
</span><br>
<span class="quotelev2">&gt;&gt; 111             lifo-&gt;opal_lifo_head = (opal_list_item_t*)item-&gt;opal_list_next;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002aaaad6ecad6 in opal_atomic_lifo_pop (lifo=0x5996940) at ../../../../../opal/class/opal_atomic_lifo.h:111
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002aaaad6ec5b4 in __ompi_free_list_wait_mt (fl=0x5996940, item=0x40ea8d50) at ../../../../../ompi/class/ompi_free_list.h:228
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002aaaad6ec3f8 in post_recvs (ep=0x59f3120, qp=0, num_post=256) at ../../../../../ompi/mca/btl/openib/btl_openib_endpoint.h:361
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002aaaad6ec1ae in mca_btl_openib_endpoint_post_rr_nolock (ep=0x59f3120, qp=0)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../../ompi/mca/btl/openib/btl_openib_endpoint.h:405
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002aaaad6ebfad in mca_btl_openib_endpoint_post_recvs (endpoint=0x59f3120)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../../ompi/mca/btl/openib/btl_openib_endpoint.c:494
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00002aaaad6fe71c in qp_create_all (endpoint=0x59f3120) at ../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:432
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00002aaaad6fde2b in reply_start_connect (endpoint=0x59f3120, rem_info=0x40ea8ed0)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:245
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00002aaaad7006ae in rml_recv_cb (status=0, process_name=0x5b0bb90, buffer=0x40ea8f80, tag=102, cbdata=0x0)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:858
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00002ae802454601 in orte_rml_base_process_msg (fd=-1, flags=4, cbdata=0x5b0bac0)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../orte/mca/rml/base/rml_base_msg_handlers.c:172
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00002ae8027164a1 in event_process_active_single_queue (base=0x58ac620, activeq=0x58aa5b0)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1367
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00002ae802716b24 in event_process_active (base=0x58ac620) at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1437
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00002ae80271715c in opal_libevent2021_event_base_loop (base=0x58ac620, flags=1)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1645
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00002ae8023e7465 in orte_progress_thread_engine (obj=0x2ae8026902c0) at ../../orte/runtime/orte_init.c:180
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x0000003ab1e06367 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x0000003ab16d2f7d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12848.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Previous message:</strong> <a href="12846.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12846.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12849.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Reply:</strong> <a href="12849.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
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
