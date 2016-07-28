<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 00:47:10 2006" -->
<!-- isoreceived="20061212054710" -->
<!-- sent="Mon, 11 Dec 2006 22:46:59 -0700" -->
<!-- isosent="20061212054659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)" -->
<!-- id="C1A39063.DAB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F60FC_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-12 00:46:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2347.php">Maestas, Christopher Daniel: "[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>Some of this is doable with today's code....and one of these behaviors is
<br>
not. :-(
<br>
<p>Open MPI/OpenRTE can be run in &quot;persistent&quot; mode - this allows multiple jobs
<br>
to share the same allocation. This works much as you describe (syntax is
<br>
slightly different, of course!) - the first mpirun will map using whatever
<br>
mode was requested, then the next mpirun will map starting from where the
<br>
first one left off.
<br>
<p>I *believe* you can run each mpirun in the background. However, I don't know
<br>
if this has really been tested enough to support such a claim. All testing
<br>
that I know about to-date has executed mpirun in the foreground - thus, your
<br>
example would execute sequentially instead of in parallel.
<br>
<p>I know people have tested multiple mpirun's operating in parallel within a
<br>
single allocation (i.e., persistent mode) where the mpiruns are executed in
<br>
separate windows/prompts. So I suspect you could do something like you
<br>
describe - just haven't personally verified it.
<br>
<p>Where we definitely differ is that Open MPI/RTE will *not* block until
<br>
resources are freed up from the prior mpiruns. Instead, we will attempt to
<br>
execute each mpirun immediately - and will error out the one(s) that try to
<br>
execute without sufficient resources. I imagine we could provide the kind of
<br>
&quot;flow control&quot; you describe, but I'm not sure when that might happen.
<br>
<p>I am (in my copious free time...haha) working on an &quot;orteboot&quot; program that
<br>
will startup a virtual machine to make the persistent mode of operation a
<br>
little easier. For now, though, you can do it by:
<br>
<p>1. starting up the &quot;server&quot; using the following command:
<br>
orted --seed --persistent --scope public [--universe foo]
<br>
<p>2. do your mpirun commands. They will automagically find the &quot;server&quot; and
<br>
connect to it. If you specified a universe name when starting the server,
<br>
then you must specify the same universe name on your mpirun commands.
<br>
<p>When you are done, you will have to (unfortunately) manually &quot;kill&quot; the
<br>
server and remove its session directory. I have a program called &quot;ortehalt&quot;
<br>
in the trunk that will do this cleanly for you, but it isn't yet in the
<br>
release distributions. You are welcome to use it, though, if you are working
<br>
with the trunk - I can't promise it is bulletproof yet, but it seems to be
<br>
working.
<br>
<p>Ralph
<br>
<p><p><p>On 12/11/06 8:07 PM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sometimes we have users that like to do from within a single job (think
</span><br>
<span class="quotelev1">&gt; schedule within an job scheduler allocation):
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -n X myprog&quot;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -n Y myprog2&quot;
</span><br>
<span class="quotelev1">&gt; Does mpiexec within Open MPI keep track of the node list it is using if
</span><br>
<span class="quotelev1">&gt; it binds to a particular scheduler?
</span><br>
<span class="quotelev1">&gt; For example with 4 nodes (2ppn SMP):
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -n 2 myprog&quot;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -n 2 myprog2&quot;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -n 1 myprog3&quot;
</span><br>
<span class="quotelev1">&gt; And assume this is by-slot allocation we would have the following
</span><br>
<span class="quotelev1">&gt; allocation:
</span><br>
<span class="quotelev1">&gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev1">&gt; - processor2 - myprog
</span><br>
<span class="quotelev1">&gt; node2 - processor1 - myprog2
</span><br>
<span class="quotelev1">&gt; - processor2 - myprog2
</span><br>
<span class="quotelev1">&gt; And for a by-node allocation:
</span><br>
<span class="quotelev1">&gt; node1 - processor1 - myprog
</span><br>
<span class="quotelev1">&gt; - processor2 - myprog2
</span><br>
<span class="quotelev1">&gt; node2 - processor1 - myprog
</span><br>
<span class="quotelev1">&gt; - processor2 - myprog2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is possible using ssh cause it shouldn't really matter how
</span><br>
<span class="quotelev1">&gt; many times it spawns, but with something like torque it would get
</span><br>
<span class="quotelev1">&gt; restricted to a max process launch of 4.  We would want the third
</span><br>
<span class="quotelev1">&gt; mpiexec to block processes and eventually be run on the first available
</span><br>
<span class="quotelev1">&gt; node allocation that frees up from myprog or myprog2 ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example for torque, we had to add the following to osc mpiexec:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;        Finally,  since only one mpiexec can be the master at a time, if
</span><br>
<span class="quotelev1">&gt; your code setup requires
</span><br>
<span class="quotelev1">&gt;        that mpiexec exit to get a result, you can start a &quot;dummy&quot;
</span><br>
<span class="quotelev1">&gt; mpiexec first  in  your  batch
</span><br>
<span class="quotelev1">&gt;        job:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              mpiexec -server
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        It  runs  no tasks itself but handles the connections of other
</span><br>
<span class="quotelev1">&gt; transient mpiexec clients.
</span><br>
<span class="quotelev1">&gt;        It will shut down cleanly when the batch job exits or you may
</span><br>
<span class="quotelev1">&gt; kill the server explicitly.
</span><br>
<span class="quotelev1">&gt;        If  the server is killed with SIGTERM (or HUP or INT), it will
</span><br>
<span class="quotelev1">&gt; exit with a status of zero
</span><br>
<span class="quotelev1">&gt;        if there were no clients connected at the time.  If there were
</span><br>
<span class="quotelev1">&gt; still  clients  using  the
</span><br>
<span class="quotelev1">&gt;        server,  the server will kill all their tasks, disconnect from
</span><br>
<span class="quotelev1">&gt; the clients, and exit with
</span><br>
<span class="quotelev1">&gt;        status 1.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So a user ran:
</span><br>
<span class="quotelev1">&gt; mpiexec -server
</span><br>
<span class="quotelev1">&gt; mpiexec -n 2 myprog
</span><br>
<span class="quotelev1">&gt; mpiexec -n 2 myprog2
</span><br>
<span class="quotelev1">&gt; And the server kept track of the allocation ... I would think that the
</span><br>
<span class="quotelev1">&gt; orted could do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry if this sounds confusing ... But I'm sure it will clear up with
</span><br>
<span class="quotelev1">&gt; any further responses I make. :-)
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2347.php">Maestas, Christopher Daniel: "[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
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
