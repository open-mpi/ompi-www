<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 13:05:07 2007" -->
<!-- isoreceived="20070829170507" -->
<!-- sent="Wed, 29 Aug 2007 10:05:03 -0700" -->
<!-- isosent="20070829170503" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] UD BTL alltoall hangs" -->
<!-- id="46D5A73F.4080107_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="604B2663-0CAE-42A0-93B2-EE63A79064F7_at_eecs.utk.edu" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 13:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2268.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I've never used totalview before.  So doing some FAQ reading I got 
<br>
an xterm on an Atlas node (odin doesn't have totalview AFAIK).  Trying a 
<br>
simple netpipe run just to get familiar with things results in this:
<br>
<p>$ mpirun -debug -np 2 -bynode -debug-daemons ./NPmpi
<br>
--------------------------------------------------------------------------
<br>
Internal error -- the orte_base_user_debugger MCA parameter was not able to
<br>
be found.  Please contact the Open RTE developers; this should not
<br>
happen.
<br>
--------------------------------------------------------------------------
<br>
<p>Grepping for that param in ompi_info shows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-start @executable@ @executable_argv@ @single_app@ :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fxp @mpirun@ -a @mpirun_args@&quot;)
<br>
<p>What's going on?  I also tried running totalview directly, using a line 
<br>
like this:
<br>
<p>totalview mpirun -a -np 2 -bynode -debug-daemons ./NPmpi
<br>
<p>Totalview comes up and seems to be running debugging the mpirun process, 
<br>
with only one thread.  Doesn't seem to be aware that this is an MPI job 
<br>
with other MPI processes.. any ideas?
<br>
<p>Andrew
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The first step will be to figure out which version of the alltoall  
</span><br>
<span class="quotelev1">&gt; you're using. I suppose you use the default parameters, and then the  
</span><br>
<span class="quotelev1">&gt; decision function in the tuned component say it is using the linear  
</span><br>
<span class="quotelev1">&gt; all to all. As the name state it, this means that every node will  
</span><br>
<span class="quotelev1">&gt; post one receive from any other node and then will start sending to  
</span><br>
<span class="quotelev1">&gt; every other node the respective fragment. This will lead to a lot of  
</span><br>
<span class="quotelev1">&gt; outstanding sends and receives. I doubt that the receive can cause a  
</span><br>
<span class="quotelev1">&gt; problem, so I expect the problem is coming from the send side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have TotalView installed on your odin ? If yes there is a  
</span><br>
<span class="quotelev1">&gt; simple way to see how many sends are pending and where ... That might  
</span><br>
<span class="quotelev1">&gt; pinpoint [at least] the process where you should look to see what'  
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2007, at 12:37 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having a problem with the UD BTL and hoping someone might have  
</span><br>
<span class="quotelev2">&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt; input to help solve it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I'm seeing is hangs when running alltoall benchmarks with  
</span><br>
<span class="quotelev2">&gt;&gt; nbcbench
</span><br>
<span class="quotelev2">&gt;&gt; or an LLNL program called mpiBench -- both hang exactly the same way.
</span><br>
<span class="quotelev2">&gt;&gt; With the code on the trunk running nbcbench on IU's odin using 32  
</span><br>
<span class="quotelev2">&gt;&gt; nodes
</span><br>
<span class="quotelev2">&gt;&gt; and a command line like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 128 -mca btl ofud,self ./nbcbench -t MPI_Alltoall -p  
</span><br>
<span class="quotelev2">&gt;&gt; 128-128
</span><br>
<span class="quotelev2">&gt;&gt; -s 1-262144
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hangs consistently when testing 256-byte messages.  There are two  
</span><br>
<span class="quotelev2">&gt;&gt; things
</span><br>
<span class="quotelev2">&gt;&gt; I can do to make the hang go away until running at larger scale.   
</span><br>
<span class="quotelev2">&gt;&gt; First
</span><br>
<span class="quotelev2">&gt;&gt; is to increase the 'btl_ofud_sd_num' MCA param from its default  
</span><br>
<span class="quotelev2">&gt;&gt; value of
</span><br>
<span class="quotelev2">&gt;&gt; 128.  This allows you to run with more procs/nodes before hitting the
</span><br>
<span class="quotelev2">&gt;&gt; hang, but AFAICT doesn't fix the actual problem.  What this parameter
</span><br>
<span class="quotelev2">&gt;&gt; does is control the maximum number of outstanding send WQEs posted at
</span><br>
<span class="quotelev2">&gt;&gt; the IB level -- when the limit is reached, frags are queued on an
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_t and later sent by progress as IB sends complete.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other way I've found is to play games with calling
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_ud_component_progress() in mca_btl_ud_endpoint_post_send 
</span><br>
<span class="quotelev2">&gt;&gt; ().  In
</span><br>
<span class="quotelev2">&gt;&gt; fact I replaced the CHECK_FRAG_QUEUES() macro used around
</span><br>
<span class="quotelev2">&gt;&gt; btl_ofud_endpoint.c:77 with a version that loops on progress until a
</span><br>
<span class="quotelev2">&gt;&gt; send WQE slot is available (as opposed to queueing).  Same result -- I
</span><br>
<span class="quotelev2">&gt;&gt; can run at larger scale, but still hit the hang eventually.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that when the job hangs, progress is being polled very
</span><br>
<span class="quotelev2">&gt;&gt; quickly, and after spinning for a while there are no outstanding send
</span><br>
<span class="quotelev2">&gt;&gt; WQEs or queued sends in the BTL.  I'm not sure where further up things
</span><br>
<span class="quotelev2">&gt;&gt; are spinning/blocking, as I can't produce the hang at less than 32  
</span><br>
<span class="quotelev2">&gt;&gt; nodes
</span><br>
<span class="quotelev2">&gt;&gt; / 128 procs and don't have a good way of debugging that (suggestions
</span><br>
<span class="quotelev2">&gt;&gt; appreciated).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore, both ob1 and dr PMLs result in the same behavior, except
</span><br>
<span class="quotelev2">&gt;&gt; that DR eventually trips a watchdog timeout, fails the BTL, and
</span><br>
<span class="quotelev2">&gt;&gt; terminates the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other collectives such as allreduce and allgather do not hang -- only
</span><br>
<span class="quotelev2">&gt;&gt; alltoall.  I can also reproduce the hang on LLNL's Atlas machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone else reproduce this (Torsten might have to make a copy of
</span><br>
<span class="quotelev2">&gt;&gt; nbcbench available)?  Anyone have any ideas as to what's wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
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
<li><strong>Next message:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2262.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2264.php">Aurelien Bouteiller: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2268.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
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
