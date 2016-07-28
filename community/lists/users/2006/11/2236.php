<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 17:05:16 2006" -->
<!-- isoreceived="20061128220516" -->
<!-- sent="Tue, 28 Nov 2006 15:04:55 -0700" -->
<!-- isosent="20061128220455" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60CB_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-11-28 17:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2237.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2235.php">Tony Ladd: "[OMPI users] Parallel application performance tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2237.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2237.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently saw this on the mpiexec mailing list and pondered that this
<br>
would be a useful feature for Open MPI as well. :-)
<br>
I can't seem to enter a trac ticket and seem to be having issues w/ my
<br>
browser at the moment, but wanted to get this out there.
<br>
<pre>
---
&gt; &gt; &gt; 1) mpiexec already has &quot;-pernode&quot; but thinking of n-way nodes with
&gt; &gt; &gt; dual-core CPUs, a switch like &quot;-Npernode &lt;n&gt;&quot; might be very useful
&gt; &gt; &gt; (and probably easy to implement, i.e. in get_hosts.c one probably 
&gt; &gt; &gt; only would have to set nodes[i].availcpu to the correct n)
&gt; &gt; 
&gt; &gt; This sounds like a good suggestion, and pretty easy to implement in 
&gt; &gt; constrain_nodes() along with how -pernode is implemented.  I'll 
&gt; &gt; stick it in the tree if you code it up (with manpage entry too).
&gt; &gt; 
&gt; 
&gt; please find attached a patch with my implementation of the feature; 
&gt; &quot;-npernode &lt;nprocs&gt;&quot; is added as new command line feature; 
&gt; constrain_nodes tries to be smart if different numbers of CPUs are 
&gt; available on the nodes and takes the minimum of available CPUs and 
&gt; requested number of processes per node ...
Thanks!  I checked it in and tested it lightly.  With the extra
infrastructure for tracking individual node ids that was added earlier
today, the bit that does the constraining wiggled around some.
Hopefully it's clearer this way, since we have to use a loop now anyway.
<a href="http://svn.osc.edu/browse/mpiexec/trunk/get_hosts.c?r1=390&amp;r2=392&amp;view=p">http://svn.osc.edu/browse/mpiexec/trunk/get_hosts.c?r1=390&amp;r2=392&amp;view=p</a>
atch
----
And then -pernode would default to -npernode 1 :-)
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2237.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2235.php">Tony Ladd: "[OMPI users] Parallel application performance tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2237.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2237.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="2245.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="2254.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
