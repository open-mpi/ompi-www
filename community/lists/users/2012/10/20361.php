<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 13:27:20 2012" -->
<!-- isoreceived="20121001172720" -->
<!-- sent="Mon, 1 Oct 2012 10:27:15 -0700" -->
<!-- isosent="20121001172715" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="CANjXV68fpUG+iyE7XgA+_dUDEJPOcJzGssZo7LZJfzOaNPkDCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="03AE0A09-E56E-4049-BD96-B3DD2F0D9C19_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 13:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20205.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 12, 2012 at 10:23 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2012, at 9:55 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 17, 2011 at 12:05 AM, Simone Pellegrini
</span><br>
<span class="quotelev2">&gt;&gt; &lt;spellegrini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/16/2011 11:15 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not finding a bug - the code looks clean. If I send you a patch, could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you apply it, rebuild, and send me the resulting debug output?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes, I could do that. No problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks again, Simone
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did this ever get resolved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure to what you are referring - this thread ran all over the place, and I confess I've lost track.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've been having trouble specifying the
</span><br>
<span class="quotelev2">&gt;&gt; hosts to run my spawned processes on.  Is there an example of how to
</span><br>
<span class="quotelev2">&gt;&gt; do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you look at &quot;man MPI_Comm_spawn&quot;? It lists all the info keys we recognize and what they do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Also, I'm assuming that any host given must also be listed
</span><br>
<span class="quotelev2">&gt;&gt; in the hostfile?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not in the updated 1.6 branch and above - to include the upcoming 1.6.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Ralph -
<br>
<p>I'm using a nightly build of 1.6.2. I have tried the following:
<br>
<p>* Run the master process as a singleton OR via mpirun without setting
<br>
any host information via env or command line
<br>
Set the MPI_Info &quot;host&quot; key to the comma delimited list of hosts
<br>
Launch the processes via MPI_Comm_spawn
<br>
<p>Result:  All processes run on the same node that runs the singleton.
<br>
<p>* Run the master process as a singleton OR via mpirun without setting
<br>
any host information via env or command line
<br>
Set the MPI_Info &quot;host&quot; key to an individual host for each info in an
<br>
array of info objects
<br>
Launch the processes via MPI_Comm_spawn_multiple
<br>
<p>Result:  &quot;There are no allocated resources for the application
<br>
&nbsp;&nbsp;./driver
<br>
that match the requested mapping:
<br>
<p>Verify that you have mapped the allocated resources properly using the
<br>
--host or --hostfile specification&quot;
<br>
<p>If I set the hostfile via environment variable, or if I run with
<br>
mpirun and set the hostfile via the command line, everything works as
<br>
expected.  Is there something additional to the MPI_Info key &quot;host&quot;
<br>
that needs to be set?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20205.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="20362.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
