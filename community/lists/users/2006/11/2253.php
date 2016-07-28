<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 10:01:12 2006" -->
<!-- isoreceived="20061129150112" -->
<!-- sent="Wed, 29 Nov 2006 08:01:02 -0700" -->
<!-- isosent="20061129150102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C192EEBE.9A9%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F60CD_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2006-11-29 10:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2252.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>Thanks for the patience and the clarification - much appreciated. In fact, I
<br>
have someone that needs to learn more about the code base, so I think I will
<br>
assign this to him. At the least, he will have to learn a lot more about the
<br>
mapper!
<br>
<p>I have no problem with modifying the pernode behavior to deal with the case
<br>
of someone specifying -np as you describe. It would be relatively easy to
<br>
check. As I understand it, you want the behavior to be:
<br>
<p>1. if no -np is specified, launch one proc/node across entire allocation
<br>
<p>2. if -np n is specified AND n is less than the number of allocated nodes,
<br>
then launch one proc/node up to the specified number. Of course, this is
<br>
identical to just doing -np n -bynode, but that's immaterial.  ;-)
<br>
<p>3. if -np n is specified AND n is greater than the number of allocated
<br>
nodes, error message and exit
<br>
<p>4. add a -npernode n option that launches n procs/node, subject to the same
<br>
tests above.
<br>
<p>Can you confirm?
<br>
<p>Finally, I think you misunderstood my comment about the MPI folks. Our
<br>
non-MPI users couldn't care less about commonality of command line arguments
<br>
across MPI implementations. Hence, I leave issues in that area to the MPI
<br>
members of the team - they are the ones that decide how to deal with the
<br>
myriad of different option syntaxes in the MPI community.
<br>
<p>Gives me too much of a headache! :-)
<br>
<p>Ralph
<br>
<p><p>On 11/28/06 10:58 PM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the feedback.  Glad we are clearing these things up. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So here's what osc mpiexec is doing now:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;   -pernode : allocate only one process per compute node
</span><br>
<span class="quotelev1">&gt;   -npernode &lt;nprocs&gt; : allocate no more than &lt;nprocs&gt; processes per
</span><br>
<span class="quotelev1">&gt; compute node
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cdm&gt; I think I originally requested the -pernode feature. :-)  I've
</span><br>
<span class="quotelev2">&gt;&gt; Cdm&gt; seen
</span><br>
<span class="quotelev2">&gt;&gt; one issue I know of ...
</span><br>
<span class="quotelev2">&gt;&gt; When used in the following manner:
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpiexec -pernode -np N&quot; and if N is &gt; allocated nodes, it should
</span><br>
<span class="quotelev2">&gt;&gt; error out and not proceed.  I need to update/learn to update the trac
</span><br>
<span class="quotelev2">&gt;&gt; ticket on this.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt; This is an incorrect usage - the &quot;pernode&quot; option is only intended to be
</span><br>
<span class="quotelev1">&gt; used without any specification of the number of processes. Pernode
</span><br>
<span class="quotelev1">&gt; instructs the system to spawn one process/node across the entire
</span><br>
<span class="quotelev1">&gt; allocation - we simply ignore any attempt to indicate the number of
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose I could check and error out if you specify the number of procs
</span><br>
<span class="quotelev1">&gt; AND --pernode. I would have to check the code, to be honest - I may
</span><br>
<span class="quotelev1">&gt; already be doing so. Just don't remember :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CDM&gt; I think I remember looking through the code here, and thinking that
</span><br>
<span class="quotelev1">&gt; app-&gt;num_procs needed to be compared to the
</span><br>
<span class="quotelev1">&gt; opal_list_get_size(&amp;master_node_list) given, but didn't dig into how
</span><br>
<span class="quotelev1">&gt; that got set -np when specified.  My intention is that we could do for
</span><br>
<span class="quotelev1">&gt; an N node job scheduled allocation such as torque:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -pernode myprogram&quot;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -np n -pernode myprogram&quot; where n &lt;= N
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; That is how I believe osc mpiexec is behaving.  I tested on 2 nodes and
</span><br>
<span class="quotelev1">&gt; saw this:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; $ mpiexec -comm=none -pernode hostname
</span><br>
<span class="quotelev1">&gt; rv272
</span><br>
<span class="quotelev1">&gt; rv270
</span><br>
<span class="quotelev1">&gt; $ mpiexec -comm=none -pernode -np 1 hostname
</span><br>
<span class="quotelev1">&gt; rv272
</span><br>
<span class="quotelev1">&gt; $ mpiexec -comm=none -pernode -np 3 hostname
</span><br>
<span class="quotelev1">&gt; mpiexec: Error: constrain_nodes: argument -n specifies 3 processors, but
</span><br>
<span class="quotelev1">&gt;   only 2 available after processing -pernode flag.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; This was my original intention of requesting -pernode in the first
</span><br>
<span class="quotelev1">&gt; place.  I apologize if I didn't provide this example as well.  :-)
</span><br>
<span class="quotelev1">&gt; Outside of a job scheduler I would think in that cause you would have
</span><br>
<span class="quotelev1">&gt; the following to launch commands do the same thing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -np n -pernode --machinefile=m myprogram &quot;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -np n --bynode --machinefile=m&quot;
</span><br>
<span class="quotelev1">&gt; &quot;OMPI_MCA_rmaps_base_schedule_policy=node; mpiexec -np n --machinefile=m
</span><br>
<span class="quotelev1">&gt; myprogram&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the nodes N is basically &quot;wc -l&quot; of the file m and n &lt;=N still
</span><br>
<span class="quotelev1">&gt; holds true when using -pernode.  It may prove difficult to check if
</span><br>
<span class="quotelev1">&gt; using -pernode, and check in w/ all orted's to see if they've already
</span><br>
<span class="quotelev1">&gt; launched the process on their nodes.  I think that would have to be done
</span><br>
<span class="quotelev1">&gt; if using -pernode though.  If it's too difficult simply error'ng out
</span><br>
<span class="quotelev1">&gt; when using -pernode and -np may be an easier choice for now. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cdm&gt; it was more my hope that OSC mpiexec and Open MPI mpiexec options
</span><br>
<span class="quotelev2">&gt;&gt; would eventually merge into common options.  A guy can dream can't he?
</span><br>
<span class="quotelev2">&gt;&gt; ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guess that's up to the MPI folks on the team - from an RTE perspective,
</span><br>
<span class="quotelev1">&gt; I don't have an opinion either way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CDM&gt; I would think that the mpiexec/orterun feature set could launch
</span><br>
<span class="quotelev1">&gt; other types of executables that weren't mpi based, so I wouldn't think
</span><br>
<span class="quotelev1">&gt; it would be just mpi spawning. :-)
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -pernode hostname&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2252.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
