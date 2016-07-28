<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 13:25:55 2010" -->
<!-- isoreceived="20101210182555" -->
<!-- sent="Fri, 10 Dec 2010 11:25:46 -0700" -->
<!-- isosent="20101210182546" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="B3B96BC7-8A5E-401C-B78D-0223A33BF0BE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1PR69h-000585-QJ_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 13:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are no race conditions in this data. It is determined by mpirun prior to launch, so all procs receive the data during MPI_Init and it remains static throughout the life of the job. It isn't dynamically updated at this time (will change in later versions), so it won't tell you if a process is sitting in finalize, for example.
<br>
<p>First, you have to configure OMPI --with-devel-headers to get access to the required functions.
<br>
<p>If you look at the file orte/mca/ess/ess.h, you'll see functions like
<br>
<p>orte_ess.proc_get_local_rank(orte_process_name_t *name)
<br>
<p>You can call that function with any process name. In the ORTE world, process names are a struct of two fields: a jobid that is common to all processes in your application, and a vpid that is the MPI rank. We also have a defined var for your own name to make life a little easier.
<br>
<p>So if you wanted to get your own local rank, you would call:
<br>
<p>#include &quot;orte/types.h&quot;
<br>
#include &quot;orte/runtime/orte_globals.h&quot;
<br>
#include &quot;orte/mca/ess/ess.h&quot;
<br>
<p>my_local_rank = orte_ess.proc_get_local_rank(ORTE_PROC_MY_NAME);
<br>
<p>To get the local rank of some other process in the job, you would call:
<br>
<p>#include &quot;orte/types.h&quot;
<br>
#include &quot;orte/runtime/orte_globals.h&quot;
<br>
#include &quot;orte/mca/ess/ess.h&quot;
<br>
<p>orte_process_name_t name;
<br>
<p>name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
<br>
name.vpid = &lt;mpi rank of the other proc&gt;;
<br>
<p>his_local_rank = orte_ess.proc_get_local_rank(&amp;name);
<br>
<p>The node rank only differs from the local rank when a comm_spawn has been executed. If you need that capability, I can explain the difference - for now, you can ignore that function.
<br>
<p>I don't currently provide the max number of local procs to each process or a list of local procs, but can certainly do so - nobody had a use for it before. Or you can construct those pieces of info fairly easily from data you do have. What you would do is loop over the get_proc_locality call:
<br>
<p>#include &quot;opal/mca/paffinity/paffinity.h&quot;
<br>
#include &quot;orte/types.h&quot;
<br>
#include &quot;orte/runtime/orte_globals.h&quot;
<br>
#include &quot;orte/mca/ess/ess.h&quot;
<br>
<p>orte_vpid_t v;
<br>
orte_process_name_t name;
<br>
<p>name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
<br>
<p>for (v=0; v &lt; orte_process_info.num_procs; v++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name.vpid = v;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_PROC_ON_NODE &amp; orte_ess.proc_get_locality(&amp;name)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* the proc is on your node - do whatever with it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Dec 10, 2010, at 9:49 AM, David Mathog wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The answer is yes - sort of...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In OpenMPI, every process has information about not only its own local
</span><br>
<span class="quotelev1">&gt; rank, but the local rank of all its peers regardless of what node they
</span><br>
<span class="quotelev1">&gt; are on. We use that info internally for a variety of things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this
</span><br>
<span class="quotelev1">&gt; time. If that doesn't matter, then I can tell you how to get it - it's
</span><br>
<span class="quotelev1">&gt; pretty trivial to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please tell me how to do this using the internal information.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now I will use that to write these functions (which might at some
</span><br>
<span class="quotelev1">&gt; point correspond to standard functions, or not) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_MPI_Local_size(MPI_Comm comm, int *lmax, int *lactual)
</span><br>
<span class="quotelev1">&gt; my_MPI_Local_rank(MPI_Comm comm, int *lrank)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These will return N for lmax, a value M in 1-&gt;N for lactual, and a value
</span><br>
<span class="quotelev1">&gt; in 1-&gt;M for lrank, for any worker on a machine corresponding to a
</span><br>
<span class="quotelev1">&gt; hostfile line like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node123.cluster slots=N
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As usual, this could get complicated.  There are probably race
</span><br>
<span class="quotelev1">&gt; conditions on lactual vs. lrank as the workers start, but I'm guessing
</span><br>
<span class="quotelev1">&gt; the lrank to lmax relationship won't have that problem.  Similarly, the
</span><br>
<span class="quotelev1">&gt; meaning of &quot;local&quot; is pretty abstract. For now all that is intended is
</span><br>
<span class="quotelev1">&gt; &quot;a group of equivalent cores within a single enclosure, where
</span><br>
<span class="quotelev1">&gt; communication between them is strictly internal to the enclosure, and
</span><br>
<span class="quotelev1">&gt; where all have equivalent access to the local disks and the network
</span><br>
<span class="quotelev1">&gt; interface(s)&quot;.  Other ways to define &quot;local&quot; might make more sense on
</span><br>
<span class="quotelev1">&gt; more complex hardware. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another function that logically belongs with these is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_MPI_Local_list(MPI_Comm comm, int *llist, int *lactual)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't need it now, but can imagine applications that would.  This
</span><br>
<span class="quotelev1">&gt; would return the (current)  lactual value and the corresponding list of
</span><br>
<span class="quotelev1">&gt; rank numbers of all the local workers.  The array llist must be of size
</span><br>
<span class="quotelev1">&gt; lmax.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
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
<li><strong>Next message:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
