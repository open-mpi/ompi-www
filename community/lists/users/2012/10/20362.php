<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 13:33:57 2012" -->
<!-- isoreceived="20121001173357" -->
<!-- sent="Mon, 1 Oct 2012 10:33:49 -0700" -->
<!-- isosent="20121001173349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="E6F78427-1DD2-4D62-91A5-5618632B3927_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANjXV68fpUG+iyE7XgA+_dUDEJPOcJzGssZo7LZJfzOaNPkDCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn and process allocation policy<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 13:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20363.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20361.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20361.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20363.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="20363.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that is the expected behavior as you describe it.
<br>
<p>If you want to run on hosts that are not already provided (via hostfile in the environment or on the command line), then you need to use the &quot;add-host&quot; or &quot;add-hostfile&quot; MPI_Info key. See &quot;man MPI_Comm_spawn&quot; for details.
<br>
<p><p>On Oct 1, 2012, at 10:27 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Sep 12, 2012 at 10:23 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2012, at 9:55 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Aug 17, 2011 at 12:05 AM, Simone Pellegrini
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;spellegrini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 08/16/2011 11:15 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not finding a bug - the code looks clean. If I send you a patch, could
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you apply it, rebuild, and send me the resulting debug output?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yes, I could do that. No problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks again, Simone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did this ever get resolved?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure to what you are referring - this thread ran all over the place, and I confess I've lost track.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been having trouble specifying the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hosts to run my spawned processes on.  Is there an example of how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Did you look at &quot;man MPI_Comm_spawn&quot;? It lists all the info keys we recognize and what they do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, I'm assuming that any host given must also be listed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the hostfile?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not in the updated 1.6 branch and above - to include the upcoming 1.6.2 release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using a nightly build of 1.6.2. I have tried the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Run the master process as a singleton OR via mpirun without setting
</span><br>
<span class="quotelev1">&gt; any host information via env or command line
</span><br>
<span class="quotelev1">&gt; Set the MPI_Info &quot;host&quot; key to the comma delimited list of hosts
</span><br>
<span class="quotelev1">&gt; Launch the processes via MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Result:  All processes run on the same node that runs the singleton.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Run the master process as a singleton OR via mpirun without setting
</span><br>
<span class="quotelev1">&gt; any host information via env or command line
</span><br>
<span class="quotelev1">&gt; Set the MPI_Info &quot;host&quot; key to an individual host for each info in an
</span><br>
<span class="quotelev1">&gt; array of info objects
</span><br>
<span class="quotelev1">&gt; Launch the processes via MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Result:  &quot;There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;  ./driver
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I set the hostfile via environment variable, or if I run with
</span><br>
<span class="quotelev1">&gt; mpirun and set the hostfile via the command line, everything works as
</span><br>
<span class="quotelev1">&gt; expected.  Is there something additional to the MPI_Info key &quot;host&quot;
</span><br>
<span class="quotelev1">&gt; that needs to be set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  Brian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20363.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20361.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="20361.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20363.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="20363.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
