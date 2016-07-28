<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug  3 08:48:01 2007" -->
<!-- isoreceived="20070803124801" -->
<!-- sent="Fri, 03 Aug 2007 08:47:01 -0400" -->
<!-- isosent="20070803124701" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] values of mca parameters whilst running program" -->
<!-- id="46B323C5.7010306_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AAEC3FAD-5808-4D49-8C26-5D594E50AE7B_at_lanl.gov" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-03 08:47:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Previous message:</strong> <a href="3803.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3801.php">Brian Barrett: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Reply:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glenn,
<br>
<p>If the error message is about &quot;privileged&quot; memory, i.e. locked or
<br>
pinned memory, on Solaris you can increase the amount of available
<br>
privileged memory by editing the /etc/project file on the nodes.
<br>
<p>Amount available (example of typical value is 900MB):
<br>
% prctl -n project.max-device-locked-memory -i project default
<br>
<p>Edit /etc/project:
<br>
Default line of interest :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;default:3::::
<br>
<p>Change to, for example 4GB :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;default:3::::project.max-device-locked-memory=(priv,4197152000,deny)
<br>
<p>What to set ompi_free_list_max to?  By default each connection will
<br>
post 8 recs, at 7 sends, 32 rdma writes and possibly a few internal control
<br>
messages. Since these are pulling from the same free list I believe a
<br>
sufficient value could be calculated as : 50 * (np - 1).  Memory will 
<br>
still be consumed but this should lesson the amount of privileged memory 
<br>
required.
<br>
<p>Memory consumption is something Sun is actively investigating. What
<br>
size job are you running?
<br>
<p>Not sure if this part of the issue but another possiblity, if the
<br>
communication pattern of the MPI job is actually starving one
<br>
connection out of memory you could try setting &quot;--mca
<br>
mpi_preconnect_all 1&quot; and &quot;--mca btl_udapl_max_eager_rdma_peers X&quot;,
<br>
where X is equal to np. This will establish a connection between
<br>
all processes in the job as well as create a channel for short
<br>
messages to use rdma functionality. By establishing this channel
<br>
to all connections before the MPI job starts up each peer connection
<br>
will be gauranteed some amount of privilege memory over which it could
<br>
potentially communicate. Of course you do take the hit of wireup time 
<br>
for all connections at MPI_Init.
<br>
<p>-DON
<br>
<p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Aug 2, 2007, at 4:22 PM, Glenn Carver wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hopefully an easy question to answer... is it possible to get at the
</span><br>
<span class="quotelev2">&gt;&gt;values of mca parameters whilst a program is running?   What I had in
</span><br>
<span class="quotelev2">&gt;&gt;mind was either an open-mpi function to call which would print the
</span><br>
<span class="quotelev2">&gt;&gt;current values of mca parameters or a function to call for specific
</span><br>
<span class="quotelev2">&gt;&gt;mca parameters. I don't want to interrupt the running of the
</span><br>
<span class="quotelev2">&gt;&gt;application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Bit of background. I have a large F90 application running with
</span><br>
<span class="quotelev2">&gt;&gt;OpenMPI (as Sun Clustertools 7) on Opteron CPUs with an IB network.
</span><br>
<span class="quotelev2">&gt;&gt;We're seeing swap thrashing occurring on some of the nodes at times
</span><br>
<span class="quotelev2">&gt;&gt;and having searched the archives and read the FAQ believe we may be
</span><br>
<span class="quotelev2">&gt;&gt;seeing the problem described in:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2007/01/2511.php">http://www.open-mpi.org/community/lists/users/2007/01/2511.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;where the udapl free list is growing to a point where lockable  
</span><br>
<span class="quotelev2">&gt;&gt;memory runs out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Problem is, I have no feel for the kinds of numbers  that
</span><br>
<span class="quotelev2">&gt;&gt;&quot;btl_udapl_free_list_max&quot; might safely get up to?  Hence the request
</span><br>
<span class="quotelev2">&gt;&gt;to print mca parameter values whilst the program is running to see if
</span><br>
<span class="quotelev2">&gt;&gt;we can tie in high values of this parameter to when we're seeing swap
</span><br>
<span class="quotelev2">&gt;&gt;thrashing.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Good news, the answer is easy.  Bad news is, it's not the one you  
</span><br>
<span class="quotelev1">&gt;want.  btl_udapl_free_list_max is the *greatest* the list will ever  
</span><br>
<span class="quotelev1">&gt;be allowed to grow to, not it's current size.  So if you don't  
</span><br>
<span class="quotelev1">&gt;specify a value and use the default of -1, it will return -1 for the  
</span><br>
<span class="quotelev1">&gt;life of the application, regardless of how big those free lists  
</span><br>
<span class="quotelev1">&gt;actually get.  If you specify value X, it'll return X for the lift of  
</span><br>
<span class="quotelev1">&gt;the application, as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There is not a good way for a user to find out the current size of a  
</span><br>
<span class="quotelev1">&gt;free list or the largest it got for the life of an application  
</span><br>
<span class="quotelev1">&gt;(currently those two will always be the same, but that's another  
</span><br>
<span class="quotelev1">&gt;story).  Your best bet is to set the parameter to some value (say,  
</span><br>
<span class="quotelev1">&gt;128 or 256) and see if that helps with the swapping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Previous message:</strong> <a href="3803.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3801.php">Brian Barrett: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Reply:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
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
