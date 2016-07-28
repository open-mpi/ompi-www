<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 21:51:41 2006" -->
<!-- isoreceived="20061212025141" -->
<!-- sent="Mon, 11 Dec 2006 19:51:29 -0700" -->
<!-- isosent="20061212025129" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60FB_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2006-12-11 21:51:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2346.php">Andrew J Caird: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<li><strong>Previous message:</strong> <a href="2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>This is great news!  Thanks for doing this.  I will try and get around
<br>
to it soon before the holiday break.
<br>
<p>The allocation scheme always seems to get to me.  From what you describe
<br>
that is how I would have seen it.  As I've gotten to know osc mpiexec
<br>
through the years I think they like to do a first fit approach, but now
<br>
that I test it I think the feature needs more testing or I'm not testing
<br>
appropriately :-)
<br>
<pre>
---
$ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -comm=none -npernode 2
grep HOSTNAME /etc/sysconfig/network
HOSTNAME=&quot;an56&quot;
HOSTNAME=&quot;an56&quot;
HOSTNAME=&quot;an55&quot;
HOSTNAME=&quot;an53&quot;
HOSTNAME=&quot;an54&quot;
HOSTNAME=&quot;an55&quot;
HOSTNAME=&quot;an53&quot;
HOSTNAME=&quot;an54&quot;
---
I guess I would wonder if it would be possible to switch from the method
what you suggest and also allow a &quot;by-X-slot&quot; style of launch where you
would see for npernode = X and N nodes:
 proc1 - node1
 proc2 - node1
 ...
 proc(X*1) - node1
...
 proc(X+1) - node2
 proc(X+2) - node2
...
 proc(X*2) - node2
...
 proc(N*X-(X-0)) - nodeN
 proc(N*X-(X-1)) - nodeN
 ...
 proc(X*N-1) - nodeN
 proc(X*N) - nodeN
I think that's how to best describe it.  Basically you load until there
are X processes on each node before moving to the next.  This may prove
to be more challenging, and I can understand if it would not be deemed
&quot;worthy.&quot; :-)
-cdm 
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
&gt; Sent: Monday, December 11, 2006 5:41 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Pernode request
&gt; 
&gt; Hi Chris
&gt; 
&gt; Okay, we have modified the pernode behavior as you requested 
&gt; (on the trunk
&gt; as of r12821)- give it a shot and see if that does it. I have 
&gt; not yet added
&gt; the npernode option, but hope to get that soon.
&gt; 
&gt; I have a question for you about the npernode option. I am 
&gt; assuming that you
&gt; want n procs/node, but that you want it mapped by NODE. For 
&gt; example, proc 0
&gt; goes on the first node, proc 1 goes on the second node, etc. 
&gt; until I get one
&gt; on each node; then I wrap back to the beginning and do this 
&gt; again until I
&gt; get the specified number of procs on each node.
&gt; 
&gt; Correct?
&gt; Ralph
&gt; 
&gt; &gt;Ralph,
&gt; 
&gt; &gt;I agree with what you stated in points 1-4. That is what we 
&gt; are looking
&gt; &gt;for.
&gt; &gt;I understand your point now about the non-MPI users too. :-)
&gt; &gt;
&gt; &gt;Thanks,
&gt; &gt;-cdm
&gt; 
&gt; &gt;&gt;-----Original Message-----
&gt; &gt;&gt;From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On
&gt; &gt;&gt;Behalf Of Ralph Castain
&gt; &gt;&gt;Sent: Wednesday, November 29, 2006 8:01 AM
&gt; &gt;&gt;To: Open MPI Users
&gt; &gt;&gt;Subject: Re: [OMPI users] Pernode request
&gt; &gt;&gt;
&gt; &gt;&gt;Hi Chris
&gt; &gt;&gt;
&gt; &gt;&gt;Thanks for the patience and the clarification - much appreciated. In
&gt; &gt;&gt;fact, I have someone that needs to learn more about the 
&gt; code base, so I
&gt; &gt;&gt;think I will assign this to him. At the least, he will have 
&gt; to learn a
&gt; &gt;&gt;lot more about the mapper!
&gt; &gt;&gt;
&gt; &gt;&gt;I have no problem with modifying the pernode behavior to 
&gt; deal with the
&gt; &gt;&gt;case of someone specifying -np as you describe. It would be 
&gt; relatively
&gt; &gt;&gt;easy to check. As I understand it, you want the behavior to be:
&gt; &gt;&gt;
&gt; &gt;&gt;1. if no -np is specified, launch one proc/node across 
&gt; entire allocation
&gt; &gt;&gt;
&gt; &gt;&gt;2. if -np n is specified AND n is less than the number of allocated
&gt; &gt;&gt;nodes, then launch one proc/node up to the specified 
&gt; number. Of course,
&gt; &gt;&gt;this is identical to just doing -np n -bynode, but that's 
&gt; immaterial.
&gt; &gt;&gt;;-)
&gt; &gt;&gt;
&gt; &gt;&gt;3. if -np n is specified AND n is greater than the number 
&gt; of allocated
&gt; &gt;&gt;nodes, error message and exit
&gt; &gt;&gt;
&gt; &gt;&gt;4. add a -npernode n option that launches n procs/node, 
&gt; subject to the
&gt; &gt;&gt;same tests above.
&gt; &gt;&gt;
&gt; &gt;&gt;Can you confirm?
&gt; &gt;&gt;
&gt; &gt;&gt;Finally, I think you misunderstood my comment about the MPI 
&gt; folks. Our
&gt; &gt;&gt;non-MPI users couldn't care less about commonality of command line
&gt; &gt;&gt;arguments across MPI implementations. Hence, I leave issues 
&gt; in that area
&gt; &gt;&gt;to the MPI members of the team - they are the ones that 
&gt; decide how to
&gt; &gt;&gt;deal with the myriad of different option syntaxes in the 
&gt; MPI community.
&gt; &gt;&gt;
&gt; &gt;&gt;Gives me too much of a headache! :-)
&gt; &gt;&gt;
&gt; &gt;&gt;Ralph 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2346.php">Andrew J Caird: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<li><strong>Previous message:</strong> <a href="2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
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
