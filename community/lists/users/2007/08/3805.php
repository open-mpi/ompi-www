<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug  3 19:18:53 2007" -->
<!-- isoreceived="20070803231853" -->
<!-- sent="Sat, 4 Aug 2007 00:14:50 +0100" -->
<!-- isosent="20070803231450" -->
<!-- name="Glenn Carver" -->
<!-- email="Glenn.Carver_at_[hidden]" -->
<!-- subject="Re: [OMPI users] values of mca parameters whilst running program" -->
<!-- id="p05111b02c2d9624fa077_at_[10.0.1.6]" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46B323C5.7010306_at_Sun.COM" -->
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
<strong>From:</strong> Glenn Carver (<em>Glenn.Carver_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-03 19:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>In reply to:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Don,
<br>
<p><span class="quotelev1">&gt;If the error message is about &quot;privileged&quot; memory, i.e. locked or
</span><br>
<p>We don't actually get an error message. What we see is the system 
<br>
gradually losing free memory whilst running batch jobs, until such 
<br>
point where it begins swapping like mad and performance plummets 
<br>
(this happens on all nodes). We are still investigating and I 
<br>
wouldn't want to bother this list until we have a clearer idea of 
<br>
what's going on. But oddly, when the job finishes, we don't seem to 
<br>
get all the memory back (but a reboot fixes it).  We are running 
<br>
fortran codes (not renowned for mem. leaks) and haven't seen this 
<br>
problem before on other systems we use, nor did we experience it with 
<br>
Clustertools6, only with CT7, which is why we currently suspect 
<br>
problems with the free_list growing too large.
<br>
<p><span class="quotelev1">&gt;pinned memory, on Solaris you can increase the amount of available
</span><br>
<span class="quotelev1">&gt;privileged memory by editing the /etc/project file on the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Amount available (example of typical value is 900MB):
</span><br>
<span class="quotelev1">&gt;% prctl -n project.max-device-locked-memory -i project default
</span><br>
<p>Apologies, I'm not familiar with projects in solaris. If I run this 
<br>
command I get:
<br>
# prctl -n project.max-device-locked-memory -i project default
<br>
prctl: default: No controllable process found in task, project, or zone.
<br>
<p>If I run it for one of the processes on the parallel job I get:
<br>
# prctl -n project.max-device-locked-memory -i pid 6553
<br>
process: 6553: ./tomcat
<br>
NAME    PRIVILEGE       VALUE    FLAG   ACTION                       RECIPIENT
<br>
project.max-device-locked-memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;privileged       217MB      -   deny
<br>
<p>The nodes are X4100s, dual cpu, dual core Opterons with 3.5Gb RAM. 
<br>
Each node therefore runs 4 processes. All nodes are running Solaris 
<br>
11/06 and up-to-date with patches.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Edit /etc/project:
</span><br>
<span class="quotelev1">&gt;Default line of interest :
</span><br>
<span class="quotelev1">&gt;     default:3::::
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Change to, for example 4GB :
</span><br>
<span class="quotelev1">&gt;     default:3::::project.max-device-locked-memory=(priv,4197152000,deny)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What to set ompi_free_list_max to?  By default each connection will
</span><br>
<span class="quotelev1">&gt;post 8 recs, at 7 sends, 32 rdma writes and possibly a few internal control
</span><br>
<span class="quotelev1">&gt;messages. Since these are pulling from the same free list I believe a
</span><br>
<span class="quotelev1">&gt;sufficient value could be calculated as : 50 * (np - 1).  Memory will
</span><br>
<span class="quotelev1">&gt;still be consumed but this should lesson the amount of privileged memory
</span><br>
<span class="quotelev1">&gt;required.
</span><br>
<p>Thanks, I will give that a try. One question, is 'np' the no. of 
<br>
processes on each node or the total processes for the job?
<br>
<p><span class="quotelev1">&gt;Memory consumption is something Sun is actively investigating. What
</span><br>
<span class="quotelev1">&gt;size job are you running?
</span><br>
<p>Each process has a SIZE of just under 800Mb (RES is typically about 
<br>
half, often less, never more).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Not sure if this part of the issue but another possiblity, if the
</span><br>
<span class="quotelev1">&gt;communication pattern of the MPI job is actually starving one
</span><br>
<span class="quotelev1">&gt;connection out of memory you could try setting &quot;--mca
</span><br>
<span class="quotelev1">&gt;mpi_preconnect_all 1&quot; and &quot;--mca btl_udapl_max_eager_rdma_peers X&quot;,
</span><br>
<span class="quotelev1">&gt;where X is equal to np. This will establish a connection between
</span><br>
<span class="quotelev1">&gt;all processes in the job as well as create a channel for short
</span><br>
<span class="quotelev1">&gt;messages to use rdma functionality. By establishing this channel
</span><br>
<span class="quotelev1">&gt;to all connections before the MPI job starts up each peer connection
</span><br>
<span class="quotelev1">&gt;will be gauranteed some amount of privilege memory over which it could
</span><br>
<span class="quotelev1">&gt;potentially communicate. Of course you do take the hit of wireup time
</span><br>
<span class="quotelev1">&gt;for all connections at MPI_Init.
</span><br>
<p>That's a useful tip and may apply in our case as the code 
<br>
configuration giving us trouble writes a lot of data to process 0 for 
<br>
disk output.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glenn
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Aug 2, 2007, at 4:22 PM, Glenn Carver wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hopefully an easy question to answer... is it possible to get at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;values of mca parameters whilst a program is running?   What I had in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mind was either an open-mpi function to call which would print the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;current values of mca parameters or a function to call for specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mca parameters. I don't want to interrupt the running of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Bit of background. I have a large F90 application running with
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;OpenMPI (as Sun Clustertools 7) on Opteron CPUs with an IB network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We're seeing swap thrashing occurring on some of the nodes at times
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and having searched the archives and read the FAQ believe we may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;seeing the problem described in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2007/01/2511.php">http://www.open-mpi.org/community/lists/users/2007/01/2511.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;where the udapl free list is growing to a point where lockable 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;memory runs out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Problem is, I have no feel for the kinds of numbers  that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;btl_udapl_free_list_max&quot; might safely get up to?  Hence the request
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to print mca parameter values whilst the program is running to see if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;we can tie in high values of this parameter to when we're seeing swap
</span><br>
<span class="quotelev3">&gt;&gt;&gt;thrashing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Good news, the answer is easy.  Bad news is, it's not the one you 
</span><br>
<span class="quotelev2">&gt;&gt;want.  btl_udapl_free_list_max is the *greatest* the list will ever 
</span><br>
<span class="quotelev2">&gt;&gt;be allowed to grow to, not it's current size.  So if you don't 
</span><br>
<span class="quotelev2">&gt;&gt;specify a value and use the default of -1, it will return -1 for the 
</span><br>
<span class="quotelev2">&gt;&gt;life of the application, regardless of how big those free lists 
</span><br>
<span class="quotelev2">&gt;&gt;actually get.  If you specify value X, it'll return X for the lift of 
</span><br>
<span class="quotelev2">&gt;&gt;the application, as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;There is not a good way for a user to find out the current size of a 
</span><br>
<span class="quotelev2">&gt;&gt;free list or the largest it got for the life of an application 
</span><br>
<span class="quotelev2">&gt;&gt;(currently those two will always be the same, but that's another 
</span><br>
<span class="quotelev2">&gt;&gt;story).  Your best bet is to set the parameter to some value (say, 
</span><br>
<span class="quotelev2">&gt;&gt;128 or 256) and see if that helps with the swapping.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Previous message:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>In reply to:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
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
