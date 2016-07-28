<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 22:14:35 2006" -->
<!-- isoreceived="20061129031435" -->
<!-- sent="Tue, 28 Nov 2006 20:14:07 -0700" -->
<!-- isosent="20061129031407" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60CC_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Pernode request" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 22:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the feedback Ralph.  Comments below. 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Tuesday, November 28, 2006 3:27 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Pernode request
<br>
<p>We already have --pernode, which spawns one process per node. You can
<br>
also launch one process/slot across all available slots by simply not
<br>
specifying the number of processes.
<br>
<p>Cdm&gt; I think I originally requested the -pernode feature. :-)  I've seen
<br>
one issue I know of ...
<br>
When used in the following manner:
<br>
<pre>
---
&quot;mpiexec -pernode -np N&quot; and if N is &gt; allocated nodes, it should error
out and not proceed.  I need to update/learn to update the trac ticket
on this.
---
I gather this option would say &quot;spawn N procs/node across all nodes&quot; - I
can understand the possible usefulness, but I'm not sure when we would
get to it. Also, it isn't clear from the discussion how it differs from
our &quot;spawn one proc/slot&quot; option - unless you either (a) don't want to
use all the available processors, or (b) want to oversubscribe the
nodes. Are either of those something people really would want to do on a
frequent enough basis to justify another command line option?
Cdm&gt; I was only thinking as we see dual/quad core processors on nodes
where this would be helpful.  Something I would see wanting to do in a
scaling/profiling study with this is hitting on (a) since we tend to do
that to find out sweet spots and get measurements.  Although I can see
the case for (b) to easily oversubscribe by some extra count and see
what happens there too.  This and the -pernode feature I think make it
easy not to have to keep count on the -np when you allocate N nodes.
You can just run it on your allocated set.  We tend to submit 1000s of
jobs running varying benchmarks and parsing the output and do have users
wanting to allocate on a pernode basis without the worry of the -np
based on their N size.
Just asking for clarity - I don't have any a priori opposition to the
notion.
Cdm&gt; it was more my hope that OSC mpiexec and Open MPI mpiexec options
would eventually merge into common options.  A guy can dream can't he?
;-)
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2241.php">shaposh_at_[hidden]: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2243.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
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
