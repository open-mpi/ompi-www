<?
$subject_val = "Re: [OMPI users] Program hangs in mpi_bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 18:17:54 2011" -->
<!-- isoreceived="20111114231754" -->
<!-- sent="Mon, 14 Nov 2011 16:17:46 -0700" -->
<!-- isosent="20111114231746" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs in mpi_bcast" -->
<!-- id="0D516CEE-C3CF-4656-B180-02030FF6D039_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1321308601.4260.77.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs in mpi_bcast<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 18:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17776.php">Enzo Dari: "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>In reply to:</strong> <a href="17775.php">Tom Rosmond: "[OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is well documented - may be on the FAQ, but certainly has been in the user list multiple times.
<br>
<p>The problem is that one process falls behind, which causes it to begin accumulating &quot;unexpected messages&quot; in its queue. This causes the matching logic to run a little slower, thus making the process fall further and further behind. Eventually, things hang because everyone is sitting in bcast waiting for the slow proc to catch up, but it's queue is saturated and it can't.
<br>
<p>The solution is to do exactly what you describe - add some barriers to force the slow process to catch up. This happened enough that we even added support for it in OMPI itself so you don't have to modify your code. Look at the following from &quot;ompi_info --param coll sync&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &lt;0&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the coll framework (0 = no verbosity)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sync_priority&quot; (current value: &lt;50&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Priority of the sync coll component; only relevant if barrier_before or barrier_after is &gt; 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sync_barrier_before&quot; (current value: &lt;1000&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do a synchronization before each Nth collective
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sync_barrier_after&quot; (current value: &lt;0&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do a synchronization after each Nth collective
<br>
<p>Take your pick - inserting a barrier before or after doesn't seem to make a lot of difference, but most people use &quot;before&quot;. Try different values until you get something that works for you.
<br>
<p>&nbsp;
<br>
On Nov 14, 2011, at 3:10 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Hello:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A colleague and I have been running a large F90 application that does an
</span><br>
<span class="quotelev1">&gt; enormous number of mpi_bcast calls during execution.  I deny any
</span><br>
<span class="quotelev1">&gt; responsibility for the design of the code and why it needs these calls,
</span><br>
<span class="quotelev1">&gt; but it is what we have inherited and have to work with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently we ported the code to an 8 node, 6 processor/node NUMA system
</span><br>
<span class="quotelev1">&gt; (lstopo output attached) running Debian linux 6.0.3 with Open_MPI 1.5.3,
</span><br>
<span class="quotelev1">&gt; and began having trouble with mysterious 'hangs' in the program inside
</span><br>
<span class="quotelev1">&gt; the mpi_bcast calls.  The hangs were always in the same calls, but not
</span><br>
<span class="quotelev1">&gt; necessarily at the same time during integration.  We originally didn't
</span><br>
<span class="quotelev1">&gt; have NUMA support, so reinstalled with libnuma support added, but the
</span><br>
<span class="quotelev1">&gt; problem persisted.  Finally, just as a wild guess, we inserted
</span><br>
<span class="quotelev1">&gt; 'mpi_barrier' calls just before the 'mpi_bcast' calls, and the program
</span><br>
<span class="quotelev1">&gt; now runs without problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe conventional wisdom is that properly formulated MPI programs
</span><br>
<span class="quotelev1">&gt; should run correctly without barriers, so do you have any thoughts on
</span><br>
<span class="quotelev1">&gt; why we found it necessary to add them?  The code has run correctly on
</span><br>
<span class="quotelev1">&gt; other architectures, i.g. Crayxe6, so I don't think there is a bug
</span><br>
<span class="quotelev1">&gt; anywhere.  My only explanation is that some internal resource gets
</span><br>
<span class="quotelev1">&gt; exhausted because of the large number of 'mpi_bcast' calls in rapid
</span><br>
<span class="quotelev1">&gt; succession, and the barrier calls force synchronization which allows the
</span><br>
<span class="quotelev1">&gt; resource to be restored.  Does this make sense?  I'd appreciate any
</span><br>
<span class="quotelev1">&gt; comments and advice you can provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached compressed copies of config.log and ompi_info for the
</span><br>
<span class="quotelev1">&gt; system.  The program is built with ifort 12.0 and typically runs with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun -np 36 -bycore -bind-to-core program.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have run both interactively and with PBS, but that doesn't seem to
</span><br>
<span class="quotelev1">&gt; make any difference in program behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;lstopo_out.txt&gt;&lt;config.log.bz2&gt;&lt;ompi_info.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17776.php">Enzo Dari: "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>In reply to:</strong> <a href="17775.php">Tom Rosmond: "[OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
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
