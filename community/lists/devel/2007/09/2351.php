<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 11:01:06 2007" -->
<!-- isoreceived="20070921150106" -->
<!-- sent="Fri, 21 Sep 2007 11:00:51 -0400" -->
<!-- isosent="20070921150051" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] UD BTL alltoall hangs" -->
<!-- id="18AED78F-691C-484C-97F0-746297CCAC1F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46E6C44A.1000300_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 11:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2352.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration"</a>
<li><strong>Previous message:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2354.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2354.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>There is an option on the message queue stuff, that allow you to see  
<br>
all internal pending requests. On the current trunk, edit the file  
<br>
ompi/debuggers/ompi_dll.s at line 736 and set the p_info- 
<br>
<span class="quotelev1"> &gt;show_internal_requests to 1. Now compile and install it, and then  
</span><br>
restart totalview. You should be able to get access to all pending  
<br>
requests, even those created by the collective modules.
<br>
<p>Moreover, the missing sends should be somewhere. If they are not in  
<br>
the BTL, and i they are not completed, then hopefully they are in the  
<br>
PML in the send_pending list. As the collective works on all other  
<br>
BTL I suppose the communication pattern is correct, so there is  
<br>
something happening with the requests when using the UD BTL.
<br>
<p>If the requests are not in the PML send_pending queue, the next thing  
<br>
you can do is to modify the receive handles in the OB1 PML, and print  
<br>
all incoming match header. You will have to somehow sort the output,  
<br>
but at least you can figure out, what is happening with the missing  
<br>
messages.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 11, 2007, at 12:37 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; First off, I've managed to reproduce this with nbcbench using only 16
</span><br>
<span class="quotelev1">&gt; procs (two per node), and setting btl_ofud_sd_num to 12 -- eases
</span><br>
<span class="quotelev1">&gt; debugging with fewer procs to look at.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_alltoall_intra_basic_linear is the alltoall routine  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; is being called.  What I'm seeing from totalview is that some random
</span><br>
<span class="quotelev1">&gt; number of procs (1-5 usually, varies from run to run) are sitting  
</span><br>
<span class="quotelev1">&gt; with a
</span><br>
<span class="quotelev1">&gt; send and a recv outstanding to every other proc.  The other procs
</span><br>
<span class="quotelev1">&gt; however have moved on to the next collective.  This is hard to see  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; the default nbcbench code since it calls only alltoall repeatedly --
</span><br>
<span class="quotelev1">&gt; adding a barrier after the MPI_Alltoall() call makes it easier to see,
</span><br>
<span class="quotelev1">&gt; as the barrier has a different tag number and communication  
</span><br>
<span class="quotelev1">&gt; pattern.  So
</span><br>
<span class="quotelev1">&gt; what I see is a few procs stuck in alltoall, while the rest are  
</span><br>
<span class="quotelev1">&gt; waiting
</span><br>
<span class="quotelev1">&gt; in the following barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've also verified with totalview that there are no outstanding send
</span><br>
<span class="quotelev1">&gt; wqe's at the UD BTL, and all procs are polling progress.  The procs in
</span><br>
<span class="quotelev1">&gt; the alltoall are polling in the opal_condition_wait() called from
</span><br>
<span class="quotelev1">&gt; ompi_request_wait_all().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure what to ask or where to look further other than, what  
</span><br>
<span class="quotelev1">&gt; should I
</span><br>
<span class="quotelev1">&gt; look at to see what requests are outstanding in the PML?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The first step will be to figure out which version of the alltoall
</span><br>
<span class="quotelev2">&gt;&gt; you're using. I suppose you use the default parameters, and then the
</span><br>
<span class="quotelev2">&gt;&gt; decision function in the tuned component say it is using the linear
</span><br>
<span class="quotelev2">&gt;&gt; all to all. As the name state it, this means that every node will
</span><br>
<span class="quotelev2">&gt;&gt; post one receive from any other node and then will start sending to
</span><br>
<span class="quotelev2">&gt;&gt; every other node the respective fragment. This will lead to a lot of
</span><br>
<span class="quotelev2">&gt;&gt; outstanding sends and receives. I doubt that the receive can cause a
</span><br>
<span class="quotelev2">&gt;&gt; problem, so I expect the problem is coming from the send side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have TotalView installed on your odin ? If yes there is a
</span><br>
<span class="quotelev2">&gt;&gt; simple way to see how many sends are pending and where ... That might
</span><br>
<span class="quotelev2">&gt;&gt; pinpoint [at least] the process where you should look to see what'
</span><br>
<span class="quotelev2">&gt;&gt; wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2007, at 12:37 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having a problem with the UD BTL and hoping someone might have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; input to help solve it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I'm seeing is hangs when running alltoall benchmarks with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nbcbench
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or an LLNL program called mpiBench -- both hang exactly the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the code on the trunk running nbcbench on IU's odin using 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a command line like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 128 -mca btl ofud,self ./nbcbench -t MPI_Alltoall -p
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128-128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -s 1-262144
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs consistently when testing 256-byte messages.  There are two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can do to make the hang go away until running at larger scale.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is to increase the 'btl_ofud_sd_num' MCA param from its default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128.  This allows you to run with more procs/nodes before hitting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hang, but AFAICT doesn't fix the actual problem.  What this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does is control the maximum number of outstanding send WQEs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; posted at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the IB level -- when the limit is reached, frags are queued on an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_list_t and later sent by progress as IB sends complete.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The other way I've found is to play games with calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_ud_component_progress() in mca_btl_ud_endpoint_post_send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ().  In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fact I replaced the CHECK_FRAG_QUEUES() macro used around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_ofud_endpoint.c:77 with a version that loops on progress until a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send WQE slot is available (as opposed to queueing).  Same result  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can run at larger scale, but still hit the hang eventually.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It appears that when the job hangs, progress is being polled very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quickly, and after spinning for a while there are no outstanding  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WQEs or queued sends in the BTL.  I'm not sure where further up  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are spinning/blocking, as I can't produce the hang at less than 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; / 128 procs and don't have a good way of debugging that (suggestions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Furthermore, both ob1 and dr PMLs result in the same behavior,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; except
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that DR eventually trips a watchdog timeout, fails the BTL, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminates the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other collectives such as allreduce and allgather do not hang --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alltoall.  I can also reproduce the hang on LLNL's Atlas machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone else reproduce this (Torsten might have to make a copy of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nbcbench available)?  Anyone have any ideas as to what's wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2351/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2352.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration"</a>
<li><strong>Previous message:</strong> <a href="2350.php">George Bosilca: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2354.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2354.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
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
