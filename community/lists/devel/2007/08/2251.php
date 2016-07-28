<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 18:53:21 2007" -->
<!-- isoreceived="20070828225321" -->
<!-- sent="Wed, 29 Aug 2007 00:53:10 +0200" -->
<!-- isosent="20070828225310" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] UD BTL alltoall hangs" -->
<!-- id="604B2663-0CAE-42A0-93B2-EE63A79064F7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D4A3A8.1050201_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-28 18:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2252.php">Terry D. Dontje: "[OMPI devel] vpath and vt-integration tmp branch"</a>
<li><strong>Previous message:</strong> <a href="2250.php">Andrew Friedley: "[OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2250.php">Andrew Friedley: "[OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The first step will be to figure out which version of the alltoall  
<br>
you're using. I suppose you use the default parameters, and then the  
<br>
decision function in the tuned component say it is using the linear  
<br>
all to all. As the name state it, this means that every node will  
<br>
post one receive from any other node and then will start sending to  
<br>
every other node the respective fragment. This will lead to a lot of  
<br>
outstanding sends and receives. I doubt that the receive can cause a  
<br>
problem, so I expect the problem is coming from the send side.
<br>
<p>Do you have TotalView installed on your odin ? If yes there is a  
<br>
simple way to see how many sends are pending and where ... That might  
<br>
pinpoint [at least] the process where you should look to see what'  
<br>
wrong.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 29, 2007, at 12:37 AM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; I'm having a problem with the UD BTL and hoping someone might have  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; input to help solve it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm seeing is hangs when running alltoall benchmarks with  
</span><br>
<span class="quotelev1">&gt; nbcbench
</span><br>
<span class="quotelev1">&gt; or an LLNL program called mpiBench -- both hang exactly the same way.
</span><br>
<span class="quotelev1">&gt; With the code on the trunk running nbcbench on IU's odin using 32  
</span><br>
<span class="quotelev1">&gt; nodes
</span><br>
<span class="quotelev1">&gt; and a command line like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 128 -mca btl ofud,self ./nbcbench -t MPI_Alltoall -p  
</span><br>
<span class="quotelev1">&gt; 128-128
</span><br>
<span class="quotelev1">&gt; -s 1-262144
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hangs consistently when testing 256-byte messages.  There are two  
</span><br>
<span class="quotelev1">&gt; things
</span><br>
<span class="quotelev1">&gt; I can do to make the hang go away until running at larger scale.   
</span><br>
<span class="quotelev1">&gt; First
</span><br>
<span class="quotelev1">&gt; is to increase the 'btl_ofud_sd_num' MCA param from its default  
</span><br>
<span class="quotelev1">&gt; value of
</span><br>
<span class="quotelev1">&gt; 128.  This allows you to run with more procs/nodes before hitting the
</span><br>
<span class="quotelev1">&gt; hang, but AFAICT doesn't fix the actual problem.  What this parameter
</span><br>
<span class="quotelev1">&gt; does is control the maximum number of outstanding send WQEs posted at
</span><br>
<span class="quotelev1">&gt; the IB level -- when the limit is reached, frags are queued on an
</span><br>
<span class="quotelev1">&gt; opal_list_t and later sent by progress as IB sends complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other way I've found is to play games with calling
</span><br>
<span class="quotelev1">&gt; mca_btl_ud_component_progress() in mca_btl_ud_endpoint_post_send 
</span><br>
<span class="quotelev1">&gt; ().  In
</span><br>
<span class="quotelev1">&gt; fact I replaced the CHECK_FRAG_QUEUES() macro used around
</span><br>
<span class="quotelev1">&gt; btl_ofud_endpoint.c:77 with a version that loops on progress until a
</span><br>
<span class="quotelev1">&gt; send WQE slot is available (as opposed to queueing).  Same result -- I
</span><br>
<span class="quotelev1">&gt; can run at larger scale, but still hit the hang eventually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that when the job hangs, progress is being polled very
</span><br>
<span class="quotelev1">&gt; quickly, and after spinning for a while there are no outstanding send
</span><br>
<span class="quotelev1">&gt; WQEs or queued sends in the BTL.  I'm not sure where further up things
</span><br>
<span class="quotelev1">&gt; are spinning/blocking, as I can't produce the hang at less than 32  
</span><br>
<span class="quotelev1">&gt; nodes
</span><br>
<span class="quotelev1">&gt; / 128 procs and don't have a good way of debugging that (suggestions
</span><br>
<span class="quotelev1">&gt; appreciated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Furthermore, both ob1 and dr PMLs result in the same behavior, except
</span><br>
<span class="quotelev1">&gt; that DR eventually trips a watchdog timeout, fails the BTL, and
</span><br>
<span class="quotelev1">&gt; terminates the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other collectives such as allreduce and allgather do not hang -- only
</span><br>
<span class="quotelev1">&gt; alltoall.  I can also reproduce the hang on LLNL's Atlas machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone else reproduce this (Torsten might have to make a copy of
</span><br>
<span class="quotelev1">&gt; nbcbench available)?  Anyone have any ideas as to what's wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
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
<li><strong>Next message:</strong> <a href="2252.php">Terry D. Dontje: "[OMPI devel] vpath and vt-integration tmp branch"</a>
<li><strong>Previous message:</strong> <a href="2250.php">Andrew Friedley: "[OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2250.php">Andrew Friedley: "[OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2263.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
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
