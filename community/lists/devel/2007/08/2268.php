<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 18:06:09 2007" -->
<!-- isoreceived="20070829220609" -->
<!-- sent="Thu, 30 Aug 2007 00:05:59 +0200" -->
<!-- isosent="20070829220559" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] UD BTL alltoall hangs" -->
<!-- id="327FF610-6A16-41CD-B74D-4E5EE7D89F96_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D5A73F.4080107_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-29 18:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2267.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2272.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2272.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2007, at 7:05 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; $ mpirun -debug -np 2 -bynode -debug-daemons ./NPmpi
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Internal error -- the orte_base_user_debugger MCA parameter was not  
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt; be found.  Please contact the Open RTE developers; this should not
</span><br>
<span class="quotelev1">&gt; happen.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Grepping for that param in ompi_info shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                    &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@
</span><br>
<span class="quotelev1">&gt;                    -start @executable@ @executable_argv@  
</span><br>
<span class="quotelev1">&gt; @single_app@ :
</span><br>
<span class="quotelev1">&gt;                    fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<p>This has been broken or a while. It's a long story to explain, but a  
<br>
fix is on the way.
<br>
<p>Until then you should be using the latest command &quot;tv8 mpirun -a -np  
<br>
2 -bynode `pwd`/NPmpi&quot;. The `pwd` is really important for some  
<br>
reason, otherwise TotalView is unable to find the executable. The  
<br>
problem is that the name of the process will be &quot;./NPmpi&quot; and  
<br>
TotalView does not have access to the path where the executable was  
<br>
launched (at least that's the reason I think).
<br>
<p>Once you do this, you should be good to go.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; What's going on?  I also tried running totalview directly, using a  
</span><br>
<span class="quotelev1">&gt; line
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; totalview mpirun -a -np 2 -bynode -debug-daemons ./NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Totalview comes up and seems to be running debugging the mpirun  
</span><br>
<span class="quotelev1">&gt; process,
</span><br>
<span class="quotelev1">&gt; with only one thread.  Doesn't seem to be aware that this is an MPI  
</span><br>
<span class="quotelev1">&gt; job
</span><br>
<span class="quotelev1">&gt; with other MPI processes.. any ideas?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2269.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2267.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2272.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2272.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
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
